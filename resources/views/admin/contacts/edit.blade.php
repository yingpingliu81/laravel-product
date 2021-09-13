@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Customer</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{url('admin/contacts/'.$contact->id)}}" id="admin_contacts" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <input name="_method" type="hidden" value="PUT">
                                <input type="hidden" name="id" value="{{$contact->id}}">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group bmd-form-group">
                                            <label>Name</label>
                                            <input type="text" disabled id="name" name="name" required
                                                   value="{{$contact->name}}" class="form-control">
                                        </div>
                                    </div>
                                    @if($contact->company)
                                        <div class="col-sm-6">
                                            <div class="form-group bmd-form-group">
                                                <label>Company</label>
                                                <input type="text" disabled id="company" name="company" required
                                                       value="{{$contact->company}}" class="form-control">
                                            </div>
                                        </div>
                                    @endif
                                    <div class="col-sm-6">
                                        <div class="form-group bmd-form-group">
                                            <label>Phone</label>
                                            <input type="text" disabled id="phone" name="phone" required
                                                   value="{{$contact->phone}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group bmd-form-group">
                                            <label>Email</label>
                                            <input type="text" disabled id="email" name="email" required
                                                   value="{{$contact->email}}" class="form-control">
                                        </div>
                                    </div>
                                    @if($contact->username)
                                        <div class="col-sm-6">
                                            <div class="form-group bmd-form-group">
                                                <label>Username</label>
                                                <input type="text" disabled id="username" name="username" required
                                                       value="{{$contact->username}}" class="form-control">
                                            </div>
                                        </div>
                                    @endif
                                    <div class="col-sm-6">
                                        <div class="form-group bmd-form-group">
                                            <label>Create Date</label>
                                            <input type="text" disabled id="created_at" name="created_at" required
                                                   value="{{$contact->created_at}}" class="form-control">
                                        </div>
                                    </div>
                                    @if($contact->message)
                                        <div class="col-sm-12">
                                            <div class="form-group bmd-form-group">
                                                <label>Message</label>
                                                <input type="text" disabled id="message" name="message" required
                                                       value="{{$contact->message}}" class="form-control">
                                            </div>
                                        </div>
                                    @endif


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
                .replace('&', 'and')
                .replace(/[^\w ]+/g, '')
                .replace(/ +/g, '-'));
        });
    </script>
@endsection
