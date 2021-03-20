<?php

namespace App\Http\Controllers\Voyager;

use App\Http\Controllers\Controller;
use App\ComponentItem;
use App\PageComponent;
use App\ModelDesign;
use Illuminate\Http\Request;
use TCG\Voyager\Events\BreadDataAdded;
use TCG\Voyager\Events\BreadDataDeleted;
use TCG\Voyager\Events\BreadDataUpdated;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

class ComponentItemController extends VoyagerBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $id = explode('/', url()->current())[7];

        $pageId = explode('/', url()->current())[5];

        if ($id == null) {
            return redirect()->route("voyager.pages.index");
        }

        $data = PageComponent::with(['items'])->select('id', 'title')->where('id', $id)->get();

        if ($data == '[]') return redirect()->route("voyager.pages.index");

        return view('vendor.voyager.pages.partial.component.builder', compact('data', 'pageId'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $dataType = Voyager::model('DataType')->where('slug', '=', 'component-items')->first();

        // Check permission
        $this->authorize('add', app($dataType->model_name));

        $dataTypeContent = (strlen($dataType->model_name) != 0)
            ? new $dataType->model_name()
            : false;

        foreach ($dataType->addRows as $key => $row) {
            $dataType->addRows[$key]['col_width'] = $row->details->width ?? 100;
        }

        // If a column has a relationship associated with it, we do not want to show that field
        $this->removeRelationshipField($dataType, 'add');

        // Check if BREAD is Translatable
        $isModelTranslatable = is_bread_translatable($dataTypeContent);

        // Eagerload Relations
        $this->eagerLoadRelations($dataTypeContent, $dataType, 'add', $isModelTranslatable);

        $componentId = explode('/', url()->current())[7];

        $type = PageComponent::find($componentId)->type;

        $pageId = explode('/', url()->current())[5];

        $view = 'vendor.voyager.pages.partial.item.edit-add';

        // if (view()->exists("voyager::$slug.edit-add")) {
        //     $view = "voyager::$slug.edit-add";
        // }

        return view($view, compact('dataType', 'dataTypeContent', 'isModelTranslatable', 'componentId', 'pageId', 'type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $pageId = explode('/', url()->current())[5];

        $dataType = Voyager::model('DataType')->where('slug', '=', 'component-items')->first();

        // Check permission
        $this->authorize('add', app($dataType->model_name));

        $request['order'] = Voyager::model('ComponentItem')->highestOrderDataComponent($request['page_component_id']);

        // Validate fields with ajax
        $val = $this->validateBread($request->all(), $dataType->addRows)->validate();
        $data = $this->insertUpdateData($request, $request->file_doc != null ? 'document' : 'component-items', $dataType->addRows, new $dataType->model_name());

        event(new BreadDataAdded($dataType, $data));

        if (!$request->has('_tagging')) {

            $redirect = redirect()->route("item.builder", ['page' => $pageId, 'id' => $request['page_component_id']]);

            return $redirect->with([
                'message'    => __('voyager::generic.successfully_added_new') . " {$dataType->getTranslatedAttribute('display_name_singular')}",
                'alert-type' => 'success',
            ]);
        } else {
            return redirect()->back(['success' => true, 'data' => $data]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {

        $pageId = explode('/', url()->current())[5];
        $componentId = explode('/', url()->current())[7];
        $id = explode('/', url()->current())[9];

        $dataType = Voyager::model('DataType')->where('slug', '=', 'component-items')->first();

        $isSoftDeleted = false;

        if (strlen($dataType->model_name) != 0) {
            $model = app($dataType->model_name);

            // Use withTrashed() if model uses SoftDeletes and if toggle is selected
            if ($model && in_array(SoftDeletes::class, class_uses_recursive($model))) {
                $model = $model->withTrashed();
            }
            if ($dataType->scope && $dataType->scope != '' && method_exists($model, 'scope' . ucfirst($dataType->scope))) {
                $model = $model->{$dataType->scope}();
            }
            $dataTypeContent = call_user_func([$model, 'findOrFail'], $id);
            if ($dataTypeContent->deleted_at) {
                $isSoftDeleted = true;
            }
        } else {
            // If Model doest exist, get data from table name
            $dataTypeContent = ComponentItem::where('id', $id)->first();
        }

        // Replace relationships' keys for labels and create READ links if a slug is provided.
        $dataTypeContent = $this->resolveRelations($dataTypeContent, $dataType, true);

        // If a column has a relationship associated with it, we do not want to show that field
        $this->removeRelationshipField($dataType, 'read');

        // Check permission
        $this->authorize('read', $dataTypeContent);

        // Check if BREAD is Translatable
        $isModelTranslatable = is_bread_translatable($dataTypeContent);

        // Eagerload Relations
        $this->eagerLoadRelations($dataTypeContent, $dataType, 'read', $isModelTranslatable);

        $view = 'vendor.voyager.pages.partial.item.read';

        // if (view()->exists("voyager::$slug.read")) {
        //     $view = "voyager::$slug.read";
        // }

        return Voyager::view($view, compact('dataType', 'dataTypeContent', 'isModelTranslatable', 'isSoftDeleted'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $pageId = explode('/', url()->current())[5];
        $componentId = explode('/', url()->current())[7];
        $id = explode('/', url()->current())[9];
        $type = PageComponent::find($componentId)->type;

        // dd($type);

        $dataType = Voyager::model('DataType')->where('slug', '=', 'component-items')->first();

        if (strlen($dataType->model_name) != 0) {
            $model = app($dataType->model_name);

            // Use withTrashed() if model uses SoftDeletes and if toggle is selected
            if ($model && in_array(SoftDeletes::class, class_uses_recursive($model))) {
                $model = $model->withTrashed();
            }
            if ($dataType->scope && $dataType->scope != '' && method_exists($model, 'scope' . ucfirst($dataType->scope))) {
                $model = $model->{$dataType->scope}();
            }
            $dataTypeContent = call_user_func([$model, 'findOrFail'], $id);
        } else {
            // If Model doest exist, get data from table name
            $dataTypeContent = ComponentItem::where('id', $id)->first();
        }

        foreach ($dataType->editRows as $key => $row) {
            $dataType->editRows[$key]['col_width'] = isset($row->details->width) ? $row->details->width : 100;
        }

        // If a column has a relationship associated with it, we do not want to show that field
        $this->removeRelationshipField($dataType, 'edit');

        // Check permission
        $this->authorize('edit', $dataTypeContent);

        // Check if BREAD is Translatable
        $isModelTranslatable = is_bread_translatable($dataTypeContent);

        // Eagerload Relations
        $this->eagerLoadRelations($dataTypeContent, $dataType, 'edit', $isModelTranslatable);

        $view = 'vendor.voyager.pages.partial.item.edit-add';

        // if (view()->exists("voyager::$slug.edit-add")) {
        //     $view = "voyager::$slug.edit-add";
        // }

        return Voyager::view($view, compact('dataType', 'dataTypeContent', 'isModelTranslatable', 'pageId', 'componentId', 'type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pageId = explode('/', url()->current())[5];
        $componentId = explode('/', url()->current())[7];
        $id = explode('/', url()->current())[9];

        $dataType = Voyager::model('DataType')->where('slug', '=', 'component-items')->first();

        // Compatibility with Model binding.
        $id = $id instanceof \Illuminate\Database\Eloquent\Model ? $id->{$id->getKeyName()} : $id;

        $model = app($dataType->model_name);
        if ($dataType->scope && $dataType->scope != '' && method_exists($model, 'scope' . ucfirst($dataType->scope))) {
            $model = $model->{$dataType->scope}();
        }
        if ($model && in_array(SoftDeletes::class, class_uses_recursive($model))) {
            $data = $model->withTrashed()->findOrFail($id);
        } else {
            $data = $model->findOrFail($id);
        }

        // Check permission
        $this->authorize('edit', $data);

        // Validate fields with ajax
        $val = $this->validateBread($request->all(), $dataType->editRows, $dataType->name, $id)->validate();
        $update = $this->insertUpdateData($request, $request->file_doc != null ? 'document' : 'component-items', $dataType->editRows, $data);
        
        
        if($update->body == "" || $update->body == null){
            $update->deleteAttributeTranslation("description", "en");
        }

        event(new BreadDataUpdated($dataType, $data));

        $redirect = redirect()->route("item.builder", ['page' => $pageId, 'id' => $componentId]);

        return $redirect->with([
            'message'    => __('voyager::generic.successfully_updated') . " {$dataType->getTranslatedAttribute('display_name_singular')}",
            'alert-type' => 'success',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {

        $dataType = Voyager::model('DataType')->where('slug', '=', 'component-items')->first();

        // Init array of IDs
        $ids = [];
        if (empty($id)) {
            // Bulk delete, get IDs from POST
            $ids = explode(',', $request->ids);
        } else {
            // Single item delete, get ID from URL
            $ids[] = $id;
        }
        foreach ($ids as $id) {
            $data = call_user_func([$dataType->model_name, 'findOrFail'], $id);

            // Check permission
            $this->authorize('delete', $data);

            $model = app($dataType->model_name);
            if (!($model && in_array(SoftDeletes::class, class_uses_recursive($model)))) {
                $this->cleanup($dataType, $data);
            }
        }

        $displayName = count($ids) > 1 ? $dataType->getTranslatedAttribute('display_name_plural') : $dataType->getTranslatedAttribute('display_name_singular');

        $res = $data->destroy($ids);
        $data = $res
            ? [
                'message'    => __('voyager::generic.successfully_deleted') . " {$displayName}",
                'alert-type' => 'success',
            ]
            : [
                'message'    => __('voyager::generic.error_deleting') . " {$displayName}",
                'alert-type' => 'error',
            ];

        if ($res) {
            event(new BreadDataDeleted($dataType, $data));
        }

        return redirect()->back();
    }


    public function order_item(Request $request)
    {
        $itemOrder = json_decode($request->input('order'));

        $this->orderItems($itemOrder, null);
    }

    private function orderItems(array $items, $parentId)
    {
        foreach ($items as $index => $componentItem) {
            $item = ComponentItem::findOrFail($componentItem->id);
            $item->order = $index + 1;
            // $item->parent_id = $parentId;
            $item->save();
        }
    }
}
