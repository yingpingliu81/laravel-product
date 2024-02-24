@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Edit Product</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{url('admin/products/'.$product->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input name="_method" type="hidden" value="PUT">
                                <input type="hidden" name="id" value="{{$product->id}}">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group bmd-form-group">
                                            <label>Title</label>
                                            <input type="text" id="title" name="title" required value="{{$product->title}}"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group bmd-form-group">
                                            <label>SKU</label>
                                            <input type="text" id="sku" name="sku" required value="{{$product->sku}}"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group bmd-form-group">
                                            <label>Price</label>
                                            <input type="text" id="price" name="price"  value="{{$product->price}}"
                                                   class="form-control">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group bmd-form-group">
                                                    <label>slug</label>
                                                    <input type="text" id="slug" name="slug" required
                                                           value="{{$product->slug}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>type</label>
                                                    <select required class="form-control selectpicker" multiple name="cate_id[]">
                                                        <option value="" disabled="disabled">Please select ...</option>
                                                        @foreach($types as $type)
                                                            <option {{ in_array($type->id, $product->cates->pluck('id')->all() ?? [])  ? 'selected' : ''}} value="{{$type->id}}">{{$type->title}}
                                                                / {{$type->type_slug}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                   <span class="input-group-btn">
                                                     <a id="lfm_thumbnail" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                                       <i class="fa fa-picture-o"></i> Thumbnail
                                                     </a>
                                                   </span>
                                                    <input id="thumbnail" class="form-control" type="text"
                                                           name="thumb"  value="{{$product->thumb}}">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div id="holder" style="margin-top:15px;max-height:100px;">
                                                    <img src="{{url($product->thumb ?? "")}}" alt="" height="100%" width="100%">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                   <span class="input-group-btn">
                                                     <a id="lfm_images" data-preview="lfm_images_holder" data-format="json" data-input="lfm_images_input" class="btn btn-primary">
                                                       <i class="fa fa-picture-o"></i> Images
                                                     </a>
                                                   </span>
                                                    <input id="lfm_images_input" class="form-control" type="text"
                                                           name="images" value="{{$product->images ? json_encode($product->images) : ""}}">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div id="lfm_images_holder" style="margin-top:15px;max-height:100px;">
                                                        @foreach($product->images ?? [] as $image)
                                                        <img src="{{url($image)}}" width="100" alt="">
                                                        @endforeach

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-sm-6">
                                        <label>Description</label>
                                        <textarea  id="lb_description" name="description" hidden>{!! $product->description !!}</textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Feature</label>
                                        <textarea  id="lb_feature" name="feature" hidden>{!! $product->feature !!}</textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Specification</label>
                                        <textarea  id="lb_specification" name="specification" hidden>{!! $product->specification !!}</textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Package</label>
                                        <textarea  id="lb_package" name="package" hidden>{!! $product->package !!}</textarea>
                                    </div>

                                    <div class="col-sm-6">
                                        <label>Content(Battery Compliance)</label>
                                        <textarea  id="lb_content" name="content" hidden>{!! $product->content !!}</textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Intro</label>
                                        <textarea  id="lb_intro" name="intro" hidden>{!! $product->intro !!}</textarea>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="input-group">
                                                   <span class="input-group-btn">
                                                     <a id="lfm_downloads" data-format="json"  data-input="lfm_downloads_input" class="btn btn-primary">
                                                       <i class="fa fa-picture-o"></i> Downloads
                                                     </a>
                                                   </span>
                                            <input id="lfm_downloads_input" class="form-control" type="text"
                                                   name="downloads" value="{{$product->downloads ? json_encode($product->downloads) : ""}}">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="input-group">
                                                   <span class="input-group-btn">
                                                     <a id="lfm_software" data-format="json"  data-input="lfm_software_input" class="btn btn-primary">
                                                       <i class="fa fa-picture-o"></i> Software
                                                     </a>
                                                   </span>
                                            <input id="lfm_software_input" class="form-control" type="text"
                                                   name="software" value="{{$product->software ? json_encode($product->software) : ""}}">
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <label>Video</label>
                                        <input type="text" id="video" name="video"  value="{{$product->video ? json_encode($product->video) : ""}}"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="mt-5 mb-5">
                                    @include('layouts.message')
                                    <button type="submit" class="btn btn-primary pull-right">Save</button>
                                </div>

                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection


@section('javascript')
    <style>
        .row {
            margin-top: 30px;
        }
    </style>

    <script>

        tinymce.init({
            selector: '#lb_content',
            ...editor_config,
        });
        tinymce.init({
            selector: '#lb_intro',
            ...editor_config,
        });
        tinymce.init({
            selector: '#lb_description',
            ...editor_config,
        });
        tinymce.init({
            selector: '#lb_feature',
            ...editor_config,
        });
        tinymce.init({
            selector: '#lb_specification',
            ...editor_config,
        });
        tinymce.init({
            selector: '#lb_package',
            ...editor_config,
        });

        $('#title').change(function (e) {
            $('#slug').val($(this).val()
                .toLowerCase()
                .replace('&', 'and')
         //       .replace(/[^\w ]+/g, '')
                .replace(/ +/g, '-'));
        });

        lfm('lfm_thumbnail', 'image');
        lfm('lfm_images', 'image');
        lfm('lfm_downloads', 'file');
        lfm('lfm_software', 'file');


    </script>
@endsection
