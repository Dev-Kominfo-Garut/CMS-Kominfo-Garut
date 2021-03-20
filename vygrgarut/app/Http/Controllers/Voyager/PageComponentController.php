<?php

namespace App\Http\Controllers\Voyager;

use App\Http\Controllers\Controller;
use App\Page;
use App\PageComponent;
use Illuminate\Http\Request;
use TCG\Voyager\Events\BreadDataAdded;
use TCG\Voyager\Events\BreadDataDeleted;
use TCG\Voyager\Events\BreadDataUpdated;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

class PageComponentController extends VoyagerBaseController
{
    public function index($id)
    {
        
        // dd($id);
        if ($id == null) {
            return redirect()->route("voyager.pages.index");
        }

        $data = Page::with(['components'])->select('id', 'title')->where('id', $id)->get();

        if ($data == '[]') return redirect()->route("voyager.pages.index");
        // return $data;
        return view('vendor.voyager.pages.builder', compact('data'));
    }

    public function order_item(Request $request)
    {
        $itemOrder = json_decode($request->input('order'));

        $this->orderComponent($itemOrder, null);
    }

    private function orderComponent(array $componentItems, $parentId)
    {
        foreach ($componentItems as $index => $componentItem) {
            $item = PageComponent::findOrFail($componentItem->id);
            $item->order = $index + 1;
            // $item->parent_id = $parentId;
            $item->save();
        }
    }

    public function show(Request $request, $id)
    {

        $id = explode('/', url()->current())[7];

        $dataType = Voyager::model('DataType')->where('slug', '=', 'page-components')->first();

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
            $dataTypeContent = PageComponent::where('id', $id)->first();
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

        $view = 'vendor.voyager.pages.partial.component.read';

        // if (view()->exists("voyager::$slug.read")) {
        //     $view = "voyager::$slug.read";
        // }

        return Voyager::view($view, compact('dataType', 'dataTypeContent', 'isModelTranslatable', 'isSoftDeleted'));
    }

    public function create(Request $request)
    {


        $dataType = Voyager::model('DataType')->where('slug', '=', 'page-components')->first();

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

        $pageId = explode('/', url()->current())[5];

        $view = 'vendor.voyager.pages.partial.component.edit-add';

        // if (view()->exists("voyager::$slug.edit-add")) {
        //     $view = "voyager::$slug.edit-add";
        // }

        return view($view, compact('dataType', 'dataTypeContent', 'isModelTranslatable', 'pageId'));
    }


    public function store(Request $request)
    {

        // $pageId = explode('/', url()->current())[5];

        $dataType = Voyager::model('DataType')->where('slug', '=', 'page-components')->first();

        // Check permission
        $this->authorize('add', app($dataType->model_name));
        $request['order'] = Voyager::model('PageComponent')->highestOrderComponent($request['page_id']);

        // Validate fields with ajax
        $val = $this->validateBread($request->all(), $dataType->addRows)->validate();
        $data = $this->insertUpdateData($request, 'page-components', $dataType->addRows, new $dataType->model_name());

        event(new BreadDataAdded($dataType, $data));

        if (!$request->has('_tagging')) {

            $redirect = redirect()->route("components.builder", $request['page_id']);

            return $redirect->with([
                'message'    => __('voyager::generic.successfully_added_new') . " {$dataType->getTranslatedAttribute('display_name_singular')}",
                'alert-type' => 'success',
            ]);
        } else {
            return redirect()->back(['success' => true, 'data' => $data]);
        }
    }

    public function edit(Request $request, $id)
    {
        $pageId = explode('/', url()->current())[5];
        $id = explode('/', url()->current())[7];

        $dataType = Voyager::model('DataType')->where('slug', '=', 'page-components')->first();

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
            $dataTypeContent = PageComponent::where('id', $id)->first();
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

        $view = 'vendor.voyager.pages.partial.component.edit-add';

        // if (view()->exists("voyager::$slug.edit-add")) {
        //     $view = "voyager::$slug.edit-add";
        // }

        return Voyager::view($view, compact('dataType', 'dataTypeContent', 'isModelTranslatable', 'pageId'));
    }

    // POST BR(E)AD
    public function update(Request $request, $id)
    {
        // $pageId = explode('/', url()->current())[5];
        // $id = explode('/', url()->current())[7];

        $dataType = Voyager::model('DataType')->where('slug', '=', 'page-components')->first();

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
        $update = $this->insertUpdateData($request, 'page-components', $dataType->editRows, $data);
        
        
        if($update->description == "" || $update->description == null){
            $update->deleteAttributeTranslation("description", "en");
        }
        if($update->title == "" || $update->title == null){
            
            $update->deleteAttributeTranslation("title", "en");
        }

        event(new BreadDataUpdated($dataType, $data));

        $redirect = redirect()->route("components.builder", $request['page_id']);

        return $redirect->with([
            'message'    => __('voyager::generic.successfully_updated') . " {$dataType->getTranslatedAttribute('display_name_singular')}",
            'alert-type' => 'success',
        ]);
    }

    public function destroy(Request $request, $id)
    {
        $pageId = explode('/', url()->current())[5];

        $dataType = Voyager::model('DataType')->where('slug', '=', 'page-components')->first();

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
        // return redirect()->route("voyager.pages.builder", $pageId)->with($data);
    }
}
