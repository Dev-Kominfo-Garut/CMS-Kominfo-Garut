@extends('voyager::master')

{{-- @section('page_title', __('voyager::generic.menu_builder')) --}}

@section('page_title', 'Component Items ' . __($data[0]->title))

@section('page_header')
<h1 class="page-title">
    <i class="voyager-puzzle"></i>{{ __('Component Items') }} ({{ $data[0]->title }})
    <a href="{{ route('item.create', ['id' => $data[0]->id, 'page' => $pageId]) }}"
        class="btn btn-success btn-add-new">
        <i class="voyager-plus"></i> <span>{{ __('voyager::generic.add_new') }}</span>
    </a>
</h1>
@include('voyager::multilingual.language-selector')
@stop

@section('content')
{{-- @include('voyager::menus.partial.notice') --}}

<div class="page-content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-bordered">
                <div class="panel-heading">
                    <p class="panel-title" style="color:#777">{{ __('item.drag_drop_info') }}</p>
                </div>

                <div class="panel-body" style="padding:30px;">
                    <div class="dd">
                        <ol class="dd-list">

                            @foreach ($data[0]->items as $item)

                            <li class="dd-item" data-id="{{ $item->id }}">
                                <div class="pull-right item_actions">
                                    <div class="btn btn-sm btn-danger pull-right delete" data-id="{{ $item->id }}">
                                        <i class="voyager-trash"></i> {{ __('voyager::generic.delete') }}
                                    </div>

                                    <a href="{{ route('item.read', ['id' => $item->id, 'page' => $pageId, 'component' => $data[0]->id]) }}"
                                        class="btn btn-sm btn-warning pull-right edit" style="margin-right: 5px;">
                                        <i class="voyager-eye"></i> <span
                                            class="hidden-xs hidden-sm">{{ __('voyager::generic.read') }}</span>
                                    </a>

                                    <a href="{{ route('item.edit', ['id' => $item->id, 'page' => $pageId, 'component' => $data[0]->id]) }}"
                                        class="btn btn-sm btn-primary pull-right edit" style="margin-right: 5px;">
                                        <i class="voyager-edit"></i> <span
                                            class="hidden-xs hidden-sm">{{ __('voyager::generic.edit') }}</span>
                                    </a>
                                </div>
                                <div class="dd-handle">
                                    <span>{{ $item->title }}</span>
                                    <small class="url">@if($item->status ==
                                        'inactive'){{ 'hidden' }}@else{{ 'show' }}@endif</small>
                                </div>
                                {{-- @if(!$item->children->isEmpty())
                                @include('voyager::menu.admin', ['items' => $item->children])
                                @endif --}}
                            </li>

                            @endforeach

                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if ($data[0]->items != '[]')

<div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="{{ __('voyager::generic.close') }}"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="voyager-trash"></i>
                    {{ __('item.delete_question') }}</h4>
            </div>
            <div class="modal-footer">
                <form action="{{ route('item.destroy', ['id' => $item->id]) }}" id="delete_form"
                    method="POST">
                    {{ method_field("DELETE") }}
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-danger pull-right delete-confirm"
                        value="{{ __('item.delete_confirm') }}">
                </form>
                <button type="button" class="btn btn-default pull-right"
                    data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endif


{{-- <div class="modal modal-info fade" tabindex="-1" id="menu_item_modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="{{ __('voyager::generic.close') }}"><span aria-hidden="true">&times;</span></button>
<h4 id="m_hd_add" class="modal-title hidden"><i class="voyager-plus"></i>
    {{ __('voyager::menu_builder.create_new_item') }}</h4>
<h4 id="m_hd_edit" class="modal-title hidden"><i class="voyager-edit"></i>
    {{ __('voyager::menu_builder.edit_item') }}</h4>
</div>
<form action="" id="m_form" method="POST" data-action-add="{{ route('voyager.menus.item.add', ['menu' => $menu->id]) }}"
    data-action-update="{{ route('voyager.menus.item.update', ['menu' => $menu->id]) }}">

    <input id="m_form_method" type="hidden" name="_method" value="POST">
    {{ csrf_field() }}
    <div class="modal-body">
        <div>
            @include('voyager::multilingual.language-selector')
            <label for="name">{{ __('voyager::menu_builder.item_title') }}</label>
            @include('voyager::multilingual.input-hidden', ['_field_name' => 'title', '_field_trans' => ''])
            <input type="text" class="form-control" id="m_title" name="title"
                placeholder="{{ __('voyager::generic.title') }}"><br>
        </div>
        <label for="type">{{ __('voyager::menu_builder.link_type') }}</label>
        <select id="m_link_type" class="form-control" name="type">
            <option value="url" selected="selected">{{ __('voyager::menu_builder.static_url') }}</option>
            <option value="route">{{ __('voyager::menu_builder.dynamic_route') }}</option>
        </select><br>
        <div id="m_url_type">
            <label for="url">{{ __('voyager::menu_builder.url') }}</label>
            <input type="text" class="form-control" id="m_url" name="url"
                placeholder="{{ __('voyager::generic.url') }}"><br>
        </div>
        <div id="m_route_type">
            <label for="route">{{ __('voyager::menu_builder.item_route') }}</label>
            <input type="text" class="form-control" id="m_route" name="route"
                placeholder="{{ __('voyager::generic.route') }}"><br>
            <label for="parameters">{{ __('voyager::menu_builder.route_parameter') }}</label>
            <textarea rows="3" class="form-control" id="m_parameters" name="parameters"
                placeholder="{{ json_encode(['key' => 'value'], JSON_PRETTY_PRINT) }}"></textarea><br>
        </div>
        <label for="icon_class">{{ __('voyager::menu_builder.icon_class') }} <a
                href="{{ route('voyager.compass.index', [], false) }}#fonts" target="_blank">{!!
                __('voyager::menu_builder.icon_class2') !!}</label>
        <input type="text" class="form-control" id="m_icon_class" name="icon_class"
            placeholder="{{ __('voyager::menu_builder.icon_class_ph') }}"><br>
        <label for="color">{{ __('voyager::menu_builder.color') }}</label>
        <input type="color" class="form-control" id="m_color" name="color"
            placeholder="{{ __('voyager::menu_builder.color_ph') }}"><br>
        <label for="target">{{ __('voyager::menu_builder.open_in') }}</label>
        <select id="m_target" class="form-control" name="target">
            <option value="_self" selected="selected">{{ __('voyager::menu_builder.open_same') }}</option>
            <option value="_blank">{{ __('voyager::menu_builder.open_new') }}</option>
        </select>
        <input type="hidden" name="menu_id" value="{{ $menu->id }}">
        <input type="hidden" name="id" id="m_id" value="">
    </div>
    <div class="modal-footer">
        <input type="submit" class="btn btn-success pull-right delete-confirm__"
            value="{{ __('voyager::generic.update') }}">
        <button type="button" class="btn btn-default pull-right"
            data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
    </div>
</form>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal --> --}}




@stop

@section('javascript')

<script>
    $(document).ready(function () {


            $('.dd').nestable({
                expandBtnHTML: '',
                collapseBtnHTML: '',
                maxDepth: 1
            });


        // console.log(JSON.stringify($('.dd').nestable('serialize')))

        /**
        * Delete menu item
        */
        @if ($data[0]->items != '[]')
        $('.item_actions').on('click', '.delete', function (e) {
            id = $(e.currentTarget).data('id');
            $('#delete_form')[0].action = '{{ route('item.destroy', ['id' => $item->id, 'id' => '__id']) }}'.replace('__id', id);
            $('#delete_modal').modal('show');
        });
        @endif


    /**
    * Reorder items
    */
    $('.dd').on('change', function (e) {
        $.post('{{ route('item.order_item',['id' => $data[0]->id]) }}', {
        order: JSON.stringify($('.dd').nestable('serialize')),
        _token: '{{ csrf_token() }}'
        }, function (data, status) {
            toastr.success("{{ __('voyager::menu_builder.updated_order') }}");
        });
    });
});
</script>
@stop
