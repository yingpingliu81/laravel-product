@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Edit Blogs</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{url('admin/blogs/'.$blog->id)}}" id="admin_blogs" method="post"  enctype="multipart/form-data">
                                @csrf
                                <input name="_method" type="hidden" value="PUT">
                                <input type="hidden" name="id" value="{{$blog->id}}">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group bmd-form-group">
                                            <label >Title</label>
                                            <input type="text" id="title" name="title" required value="{{$blog->title}}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group bmd-form-group">
                                                    <label >slug</label>
                                                    <input type="text" id="slug" name="slug" required value="{{$blog->slug}}" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Publish Date</label>
                                                    <input required type="date"  name="published_at" value="{{$blog->published_at}}"
                                                           class="form-control mt-4">
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="input-group">
                                                   <span class="input-group-btn">
                                                     <a id="lfm_thumbnail" data-input="thumbnail" data-preview="holder"
                                                        class="btn btn-primary">
                                                       <i class="fa fa-picture-o"></i> Thumbnail
                                                     </a>
                                                   </span>
                                                        <input id="thumbnail" class="form-control" type="text"
                                                               name="thumbnail" value="{{$blog->thumbnail}}">
                                                    </div>
                                                    <div id="holder" style="margin-top:15px;max-height:100px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>



                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <label>Content</label>
                                        <textarea id="lb_content" name="content"
                                                  hidden>{!! $blog->content !!}</textarea>                                    </div>

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

        $('#title').change(function (e) {
            $('#slug').val($(this).val()
                .toLowerCase()
                .replace(/[^\w ]+/g,'')
                .replace(/ +/g,'-'));
        });

        tinymce.init({
            selector: '#lb_content',
            ...editor_config,
            height: "500px",
        });

        lfm('lfm_thumbnail', 'image');

    </script>
@endsection
