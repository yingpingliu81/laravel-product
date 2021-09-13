@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Create Blogs</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{url('admin/news')}}" id="admin_blogs" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label >Title</label>
                                            <input type="text" id="title" name="title" required value="{{old('title')}}"
                                                   class="form-control">
                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group bmd-form-group">
                                                    <label >slug</label>
                                                    <input type="text" id="slug" name="slug" required
                                                           value="{{old('slug')}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Publish Date</label>
                                                    <input required type="date" name="published_at"
                                                           value="{{old('published_at')}}"
                                                           class="form-control mt-4">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="row">

                                                    <div class="col-sm-6">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input"
                                                                       {{old('is_active') ? 'checked' : ''}} name="is_active"
                                                                       checked value="1"
                                                                       type="checkbox">
                                                                is active?
                                                                <span class="form-check-sign">
                                                      <span class="check"></span>
                                                        </span>
                                                            </label>
                                                            <small class="form-text text-muted">active blog show to
                                                                customers</small>
                                                            <small class="form-text text-muted">inactive blog hide to
                                                                customers</small>
                                                        </div>
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
                                                  hidden>{!! old('content') !!}</textarea>
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
        $('#title').change(function (e) {
            $('#slug').val($(this).val()
                .toLowerCase()
                .replace(/[^\w ]+/g, '')
                .replace('&', 'and')
                .replace(/ +/g, '-'));
        });

        tinymce.init({
            selector: '#lb_content',
            ...editor_config,
            height: "500px",
        });



    </script>
@endsection
