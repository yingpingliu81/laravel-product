@extends('layouts.admin')

@section('content')
    <style>
        .btn-primary {
            color: #fff !important;
        }
        .custom-button {
            border: none;
            background: #fff;
            float: right;
        }
        .material-icons {
            cursor: pointer;
        }
    </style>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Contact List</h4>
                        </div>
                        <div class="card-body">
                            @include('layouts.message')
                            <div class="row">
                                <div class="col-6">
                                    <form class="form-inline"  id="import_submit"  action="{{url('admin/contacts/import')}}"  method="post"  enctype="multipart/form-data">
                                        <input type="file"  name="import" id="import" />
                                        @csrf
                                        <BUTTON class="form-label btn btn-primary" id="import_button" >Import CSV</BUTTON>
                                    </form>
                                </div>
                                <div class="col-6">
                                    <a href="{{url('admin/contacts/create')}}" class="btn btn-primary pull-right">Create</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table" id="myTable">
                                    <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>

                                    <th>
                                        name
                                    </th>
                                    <th>
                                        email
                                    </th>

                                    <th>
                                        company
                                    </th>

                                    <th style="width:  10%">
                                        actions
                                    </th>
                                    </thead>
                                    <tbody>
                                    @foreach($contacts as $contact)
                                        <tr data-id="{{$contact->id}}">
                                            <td>
                                                {{$contact->id}}
                                            </td>
                                            <td>
                                               {{$contact->name}}
                                            </td>
                                            <td>
                                                {{$contact->email}}
                                            </td>
                                            <td>
                                                {{$contact->company}}
                                            </td>

                                            <td >
                                                <form action="{{url('admin/contacts/'.$contact->id)}}"  method="post">
                                                    <a href="{{url('admin/contacts/'.$contact->id.'/edit')}}">
                                                        <icons-image _ngcontent-mes-c22="" _nghost-mes-c19=""><span class="material-icons icon-image-preview">edit</span></icons-image _ngcontent-mes-c22="" _nghost-mes-c19="">
                                                    </a>

                                                    @csrf
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button class="custom-button btn-del" >
                                                        <span class="material-icons icon-image-preview">delete</span>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script>

        $("#import_button").click(function (event) {
            event.preventDefault();
            if($("#import").val() == "") {
                Toast.fire({
                    icon: 'fail',
                    title: 'please input the csv file first'
                })
            } else {
                $("#import_submit").submit();
            }
        });

    </script>
@endsection

