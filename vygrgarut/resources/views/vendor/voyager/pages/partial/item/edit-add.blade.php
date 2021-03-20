@php
$edit = !is_null($dataTypeContent->getKey());
$add = is_null($dataTypeContent->getKey());
@endphp

@extends('voyager::master')

@section('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
    .panel .mce-panel {
        border-left-color: #fff;
        border-right-color: #fff;
    }

    .panel .mce-toolbar,
    .panel .mce-statusbar {
        padding-left: 20px;
    }

    .panel .mce-edit-area,
    .panel .mce-edit-area iframe,
    .panel .mce-edit-area iframe html {
        padding: 0 10px;
        min-height: 350px;
    }

    .mce-content-body {
        color: #555;
        font-size: 14px;
    }

    .panel.is-fullscreen .mce-statusbar {
        position: absolute;
        bottom: 0;
        width: 100%;
        z-index: 200000;
    }

    .panel.is-fullscreen .mce-tinymce {
        height: 100%;
    }

    .panel.is-fullscreen .mce-edit-area,
    .panel.is-fullscreen .mce-edit-area iframe,
    .panel.is-fullscreen .mce-edit-area iframe html {
        height: 100%;
        position: absolute;
        width: 99%;
        overflow-y: scroll;
        overflow-x: hidden;
        min-height: 100%;
    }
</style>
@stop

@section('page_title', __('voyager::generic.'.($edit ? 'edit' : 'add')).'
'.$dataType->getTranslatedAttribute('display_name_singular'))

@section('page_header')
<h1 class="page-title">
    <i class="{{ $dataType->icon }}"></i>
    {{ __('voyager::generic.'.($edit ? 'edit' : 'add')).' '.$dataType->getTranslatedAttribute('display_name_singular') }}
</h1>
@include('voyager::multilingual.language-selector')
@stop

@section('content')
<div class="page-content container-fluid">
    <form class="form-edit-add" role="form"
        action="@if($edit){{ route('item.update', ['id' => $dataTypeContent->id, 'component' => $componentId, 'page' => $pageId]) }}@else{{ route('item.store', ['page' => $pageId, 'id' => $componentId]) }}@endif"
        method="POST" enctype="multipart/form-data">
        <!-- PUT Method if we are editing -->
        @if($edit)
        {{ method_field("PUT") }}
        <input type="hidden" name="order" value="{{ $dataTypeContent->order }}">
        @endif
        {{ csrf_field() }}

        <input type="hidden" name="page_component_id" value="{{ $componentId }}">

        <div class="row">
            <div class="col-md-8">
                <!-- ### NAME ### -->
                <div class="panel">
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif


                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="voyager-character"></i> {{ __('item.title') }}
                            {{-- <span class="panel-desc"> {{ __('component.title_sub') }}</span> --}}
                        </h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse"
                                aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="{{ __('voyager::generic.title') }}"
                            value="{{ $dataTypeContent->name ?? '' }}">
                    </div>
                </div>

                <!-- ### BODY ### -->
                <div class="panel">

                    <div class="panel-heading">
                        <h3 class="panel-title">
                            {{ __('Date') }}
                            {{-- <span class="panel-desc"> {{ __('component.title_sub') }}</span> --}}
                        </h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse"
                                aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        @php
                                $dataTypeRows = $dataType->{($edit ? 'editRows' : 'addRows' )};
                                $row = $dataTypeRows->where('field', 'date_time')->first();
                            @endphp
                            {!! app('voyager')->formField($row, $dataType, $dataTypeContent) !!}
                    </div>

                    <div class="panel-heading">
                        <h3 class="panel-title">{{ __('item.body') }}</h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-resize-full" data-toggle="panel-fullscreen"
                                aria-hidden="true"></a>
                        </div>
                    </div>

                    <div class="panel-body">
                        @php
                                $dataTypeRows = $dataType->{($edit ? 'editRows' : 'addRows' )};
                                $row = $dataTypeRows->where('field', 'description')->first();
                            @endphp
                            {!! app('voyager')->formField($row, $dataType, $dataTypeContent) !!}
                    </div>
                </div><!-- .panel -->


                <div class="panel">

                    <div class="panel-heading">
                        <h3 class="panel-title">{{ __('Embed') }}</h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-resize-full" data-toggle="panel-fullscreen"
                                aria-hidden="true"></a>
                        </div>
                    </div>

                    <div class="panel-body">
                        @php
                                $dataTypeRows = $dataType->{($edit ? 'editRows' : 'addRows' )};
                                $row = $dataTypeRows->where('field', 'embed')->first();
                            @endphp
                            {!! app('voyager')->formField($row, $dataType, $dataTypeContent) !!}
                    </div>
                </div><!-- .panel -->

            </div>
            <div class="col-md-4">

                <!-- ### Preview ### -->
                <div class="panel panel-bordered panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="icon wb-image"></i> {{ __('Preview') }}</h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                            <img src="\storage\{{ $type->image }}" style="width:100%" />
                    </div>
                </div>

                <!-- ### DETAILS ### -->
                <div class="panel panel panel-bordered panel-warning">
                    
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="icon wb-clipboard"></i> {{ __('item.details') }}
                        </h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse"
                                aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        {{-- <div class="form-group">
                            <label for="slug">{{ __('component_page.slug') }}</label>
                        <input type="text" class="form-control" id="slug" name="slug" placeholder="slug" {!!
                            isFieldSlugAutoGenerator($dataType, $dataTypeContent, "slug" ) !!}
                            value="{{ $dataTypeContent->slug ?? '' }}">
                    </div> --}}
                    <div class="form-group">
                        <label for="status">{{ __('item.status') }}</label>
                        <select class="form-control" name="status">
                            <option value="inactive" @if(isset($dataTypeContent->status) &&
                                $dataTypeContent->status == 'inactive')
                                selected="selected"@endif>{{ __('INACTIVE') }}</option>
                            <option value="active" @if(isset($dataTypeContent->status) && $dataTypeContent->status
                                ==
                                'active') selected="selected"@endif>{{ __('ACTIVE') }}</option>
                        </select>
                    </div>

                </div>

                    <!-- ### IMAGE ### -->
                    <div class="panel panel-bordered panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="icon wb-image"></i> {{ __('voyager::post.image') }}</h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            @if(isset($dataTypeContent->image))
                                <img src="{{ filter_var($dataTypeContent->image, FILTER_VALIDATE_URL) ? $dataTypeContent->image : Voyager::image( $dataTypeContent->image ) }}" style="width:100%" />
                            @endif
                            <input type="file" name="image">
                        </div>
                    </div>

                    <!-- ### DOCUMENT ### -->
                    <div class="panel panel-bordered panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="icon wb-image"></i> {{ __('Document') }}</h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            
                            @php
                            $dataTypeRows = $dataType->{($edit ? 'editRows' : 'addRows' )};
                            $row = $dataTypeRows->where('field', 'documents')->first();
                            @endphp
                            {!! app('voyager')->formField($row, $dataType, $dataTypeContent) !!}
                        </div>
                    </div>

            </div>
        </div>
</div>

@section('submit-buttons')
<button type="submit" class="btn btn-primary pull-right">
    @if($edit){{ __('item.update') }}@else <i class="icon wb-plus-circle"></i>
    {{ __('item.create_new') }} @endif
</button>
@stop
@yield('submit-buttons')
</form>

<iframe id="form_target" name="form_target" style="display:none"></iframe>
<form id="my_form" action="{{ route('voyager.upload') }}" target="form_target" method="post"
    enctype="multipart/form-data" style="width:0;height:0;overflow:hidden">
    <input name="image" id="upload_file" type="file" onchange="$('#my_form').submit();this.value='';">
    <input type="hidden" name="type_slug" id="type_slug" value="{{ $dataType->slug }}">
    {{ csrf_field() }}
</form>
</div>

<div class="modal fade modal-danger" id="confirm_delete_modal">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><i class="voyager-warning"></i> {{ __('voyager::generic.are_you_sure') }}</h4>
            </div>

            <div class="modal-body">
                <h4>{{ __('voyager::generic.are_you_sure_delete') }} '<span class="confirm_delete_name"></span>'</h4>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                    data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                <button type="button" class="btn btn-danger"
                    id="confirm_delete">{{ __('voyager::generic.delete_confirm') }}</button>
            </div>
        </div>
    </div>
</div>
<!-- End Delete File Modal -->
@stop

@section('javascript')
<script>
    // const axios = require('axios');
    // var bodyi18n = document.getElementById("body_i18n");
    // var body = document.getElementById("body");

    // var lang = 'id';
    // let editor;
    // var id = { blocks: [] };
    // var en = { blocks: [] };
    
    // function getLang(el) {
    //     lang = el.value;
    //     console.log(el.value);

    //     if(en.blocks.length == 0){
    //         en = id;
    //         bodyi18n.value = JSON.stringify({ id: id, en: en});
    //         body.value = JSON.stringify(en);
    //         editor.blocks.render (id);
    //     } else {
    //         editor.blocks.render (en);
    //     }

    //     // editor.save().then((outputData) => {

    //     //     if(lang == "en"){
    //     //         id = outputData;
                
    //     //         if(en.blocks.length == 0){
    //     //             editor.blocks.render (id);
    //     //         } else {
    //     //             editor.blocks.render (en);
    //     //         }

    //     //     } else {
    //     //         en = outputData;
                
    //     //         editor.blocks.render (id);

    //     //     }

    //     //     body.value = JSON.stringify({ id: id, en: en})

    //     // }).catch((error) => {
    //     //     console.log('Saving failed: ', error)
    //     // });

    // }
    // $(document).ready(function(){
        
    //     var dataEn = JSON.parse(document.getElementById("body_i18n").value);
    //     var dataId = null;
    //     if(document.getElementById("body").value != ""){
    //         dataId = JSON.parse(document.getElementById("body").value);
    //     }
    //     id = dataId == null ? { blocks: [] } : dataId;
    //     en = dataEn.en == null ? { blocks: [] } :  dataEn.en == "" ? { blocks: [] } : JSON.parse(dataEn.en);
        
    //     console.log(en);

    //     console.log(id);
        
    //     editor = new EditorJS({ 
    //         holder: 'editorjs',
    //         autofocus: true,
    //         tools: {
    //             style: EditorJSStyle.StyleInlineTool,
    //             inlineCode: {
    //                 class: InlineCode,
    //                 shortcut: 'CMD+SHIFT+M',
    //             },
    //             hyperlink: {
    //                 class: Hyperlink,
    //                 config: {
    //                     shortcut: 'CMD+L',
    //                     target: '_blank',
    //                     rel: 'nofollow',
    //                     availableTargets: ['_blank', '_self'],
    //                     availableRels: ['author', 'noreferrer'],
    //                     validate: false,
    //                 }
    //             },
    //             table: {
    //                 class: Table,
    //             },
    //             header: Header,
    //             link: LinkTool,
    //             paragraph: {
    //                 class: Paragraph,
    //                 inlineToolbar: true,
    //             },
    //             code: CodeTool,
    //             embed: {
    //                 class: Embed,
    //                 inlineToolbar: true
    //             },
    //             block: {
    //                 class: Quote,
    //                 inlineToolbar: true,
    //                 config: {
    //                     quotePlaceholder: 'Enter a text',
    //                 },
    //             },
    //             image: {
    //                 class: ImageTool,
    //                 config: {
    //                     endpoints: {
    //                         byFile: 'http://127.0.0.1:8000/api/upload/image', // Your backend file uploader endpoint
    //                     },
    //                     uploader: {
    //                         uploadByFile(file){
    //                             let data = new FormData();
    //                             data.append('image', file);
    //                             let settings = { headers: { 'content-type': 'multipart/form-data' } }

    //                             let res = {};

    //                             return axios.post('http://backend.localayomedia.com/api/upload/image', data, settings)
    //                             .then(response => {
    //                                 return {
    //                                     success: 1,
    //                                     file: {
    //                                         url: 'http://backend.localayomedia.com/storage/'+response.data.file.url
    //                                     }
    //                                 };
                                    
    //                                 console.log(res)
    //                             }).catch(response => {
    //                                 console.log(response)
    //                             });
    //                         },
    //                     }
    //                 }
    //             }
    //         },
    //         onReady: () => {
    //             if(id.blocks.length != 0)
    //             editor.blocks.render(id);
    //         },
    //         onChange: () => {
    //             console.log('change')
    //             editor.save().then((outputData) => {

    //                 if(lang == "en"){
    //                     en = outputData;
    //                     body.value = JSON.stringify(en)
    //                 } else {
    //                     id = outputData;
    //                     body.value = JSON.stringify(id)
    //                 }

    //                 bodyi18n.value = JSON.stringify({ id: id, en: en})

    //             }).catch((error) => {
    //                 console.log('Saving failed: ', error)
    //             });
    //         }
    //     });

    // });
</script>
<script>
    var params = {};
        var $file;

        function deleteHandler(tag, isMulti) {
          return function() {
            $file = $(this).siblings(tag);

            params = {
                slug:   '{{ $dataType->slug }}',
                filename:  $file.data('file-name'),
                id:     $file.data('id'),
                field:  $file.parent().data('field-name'),
                multi: isMulti,
                _token: '{{ csrf_token() }}'
            }

            $('.confirm_delete_name').text(params.filename);
            $('#confirm_delete_modal').modal('show');
          };
        }

        $('document').ready(function () {

            $('#slug').slugify();

            $('.toggleswitch').bootstrapToggle();


            //Init datepicker for date fields if data-datepicker attribute defined
            //or if browser does not handle date inputs
            $('.form-group input[type=date]').each(function (idx, elt) {
                if (elt.type != 'date' || elt.hasAttribute('data-datepicker')) {
                    elt.type = 'text';
                    $(elt).datetimepicker($(elt).data('datepicker'));
                }
            });

            @if ($isModelTranslatable)
                $('.side-body').multilingual({"editing": true});
            @endif

            $('.side-body input[data-slug-origin]').each(function(i, el) {
                $(el).slugify();
            });

            $('.form-group').on('click', '.remove-multi-image', deleteHandler('img', true));
            $('.form-group').on('click', '.remove-single-image', deleteHandler('img', false));
            $('.form-group').on('click', '.remove-multi-file', deleteHandler('a', true));
            $('.form-group').on('click', '.remove-single-file', deleteHandler('a', false));

            $('#confirm_delete').on('click', function(){
                $.post('{{ route('voyager.'.$dataType->slug.'.media.remove') }}', params, function (response) {
                    if ( response
                        && response.data
                        && response.data.status
                        && response.data.status == 200 ) {

                        toastr.success(response.data.message);
                        $file.parent().fadeOut(300, function() { $(this).remove(); })
                    } else {
                        toastr.error("Error removing file.");
                    }
                });

                $('#confirm_delete_modal').modal('hide');
            });
            $('[data-toggle="tooltip"]').tooltip();
        });
</script>
@stop
