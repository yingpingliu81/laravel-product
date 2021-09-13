@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Create Product Category</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{url('admin/cates')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group bmd-form-group">
                                            <label >Title</label>
                                            <input type="text" id="title" name="title" required value="{{old('title')}}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group bmd-form-group">
                                                    <label >slug</label>
                                                    <input type="text" id="slug" name="slug" required value="{{old('slug')}}" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group ">
                                                            <label>type</label>
                                                            <select required class="form-control" name="type_slug">
                                                                <option value="" disabled="disabled">Please select ...</option>
                                                            @foreach($types as $type)
                                                                    <option {{old('type') === $type ? 'selected' : ''}} value="{{$type}}">{{$type}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
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
    <script>
        $('#title').change(function (e) {
            $('#slug').val($(this).val()
                .toLowerCase()
                .replace('&','and')
                .replace(/[^\w ]+/g,'')
                .replace(/ +/g,'-'));
        });
    </script>
@endsection
