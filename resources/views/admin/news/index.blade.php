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
                            <h4 class="card-title ">News List</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    @include('layouts.message')
                                    <form class="form-inline"  id="import_submit"  action="{{url('admin/news/import')}}"  method="post"  enctype="multipart/form-data">
                                        <input type="file"  name="import" id="import" />
                                        @csrf
                                        <BUTTON class="form-label btn btn-primary" id="import_button" >Import CSV</BUTTON>
                                    </form>
                                </div>
                                <div class="col-6">
                                    <a href="{{url('admin/news/create')}}" class="btn btn-primary pull-right">Create News</a>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table" id="blog-list">
                                    <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        title
                                    </th>
                                    <th>
                                       publish date
                                    </th>


                                    <th>
                                       actions
                                    </th>
                                    </thead>
                                    <tbody>
                                    @foreach($news as $blog)
                                        <tr>
                                            <td>
                                                {{$blog->id}}
                                            </td>
                                            <td>
                                                {{Str::words($blog->title,6,'...')}}
                                            </td>
                                            <td>
                                                {{$blog->published_at}}
                                            </td>



                                            <td >

                                                <form action="{{url('admin/news/'.$blog->id)}}"  method="post">
                                                    <a href="{{url('admin/news/'.$blog->id.'/edit')}}">
                                                        <icons-image _ngcontent-mes-c22="" _nghost-mes-c19=""><span _ngcontent-mes-c19="" class="material-icons icon-image-preview">edit</span></icons-image>
                                                    </a>

                                                    <a href="javascript:;" onclick="setVisible(this)" data-blogId="{{$blog->id}}"  class="ml-5">
                                                        @if($blog->is_active === \App\Models\Blog::STATUS_VISIBLE)
                                                            <icons-image  _ngcontent-mes-c22="" _nghost-mes-c19=""><span class="material-icons material-icons-outlined">visibility</span></icons-image _ngcontent-mes-c22="" _nghost-mes-c19="">
                                                        @elseif($blog->is_active === \App\Models\Blog::STATUS_INVISIBLE)
                                                            <icons-image  _ngcontent-mes-c22="" _nghost-mes-c19=""><span class="material-icons material-icons-outlined">visibility_off</span>     </icons-image _ngcontent-mes-c22="" _nghost-mes-c19="">                                                   @endif
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

        function setVisible(element) {
            var blogId = $(element).attr('data-blogId');

            $.get('{{url("/")}}' + '/admin/news/' + blogId + '/visible', function( data ) {
                if(data.status === 1) {
                    $(element).html('<icons-image  _ngcontent-mes-c22="" _nghost-mes-c19=""><span class="material-icons material-icons-outlined">visibility</span></icons-image _ngcontent-mes-c22="" _nghost-mes-c19="">');
                } else {
                    $(element).html('<icons-image  _ngcontent-mes-c22="" _nghost-mes-c19=""><span class="material-icons material-icons-outlined">visibility_off</span></icons-image _ngcontent-mes-c22="" _nghost-mes-c19="">');
                };

                Toast.fire({
                    icon: 'success',
                    title: data.msg
                })
            });
        }

        $(document).ready( function () {
            var dragSrc = null;  //Globally track source cell
            var cells = null;  // All cells in table

            var table = $('#blog-list').DataTable({
                "aaSorting": [],
                pageLength: 50,
                columnDefs: [{
                    targets: '_all',

                    // Set HTML5 draggable for all cells
                    createdCell: function (td, cellData, rowData, row, col) {
                        $(td).attr('draggable', 'true');
                    }
                }],
                drawCallback: function () {
                    // Apply HTML5 drag and drop listeners to all cells
                    cells = document.querySelectorAll('#blog-list tr');
                    [].forEach.call(cells, function (cell) {
                        cell.addEventListener('dragstart', handleDragStart, false);
                        cell.addEventListener('dragenter', handleDragEnter, false)
                        cell.addEventListener('dragover', handleDragOver, false);
                        cell.addEventListener('dragleave', handleDragLeave, false);
                        cell.addEventListener('drop', handleDrop, false);
                        cell.addEventListener('dragend', handleDragEnd, false);
                    });
                }
            });


            function handleDragStart(e) {
                this.style.cssText = "color:#000;font-weight:400";  // this / e.target is the source node.
                dragSrc = this;  // Keep track of source cell

                // Allow moves
                e.dataTransfer.effectAllowed = 'move';

                // Get the cell data and store in the transfer data object
                e.dataTransfer.setData('text/html', this.innerHTML);
            }

            function handleDragOver(e) {
                if (e.preventDefault) {
                    e.preventDefault(); // Necessary. Allows us to drop.
                }

                // Allow moves
                e.dataTransfer.dropEffect = 'move';  // See the section on the DataTransfer object.

                return false;
            }

            function handleDragEnter(e) {
                // this / e.target is the current hover target.

                // Apply drop zone visual
                this.classList.add('over');
            }

            function handleDragLeave(e) {
                // this / e.target is previous target element.

                // Remove drop zone visual
                this.classList.remove('over');
            }

            function handleDrop(e) {
                // this / e.target is current target element.
                if (e.stopPropagation) {
                    e.stopPropagation(); // stops the browser from redirecting.
                }

                // Don't do anything if dropping the same column we're dragging.
                if (dragSrc != this) {
                    // Set the source column's HTML to the HTML of the column we dropped on.
                    dragSrc.innerHTML = this.innerHTML;

                    // Set the distination cell to the transfer data from the source
                    this.innerHTML = e.dataTransfer.getData('text/html');

                    // Invalidate the src cell and dst cell to have DT update its cache then draw
                    table.cell(dragSrc).invalidate();
                    table.cell(this).invalidate().draw(false);

                    $.get( '{{url("admin/news-sort?source=")}}' + $(dragSrc).children('td:first').text().trim() + '&dest=' + $(this).children('td:first').text().trim(), function( data ) {
                    });
                }

                return false;
            }

            function handleDragEnd(e) {
                // this/e.target is the source node.
                this.style.opacity = "1.0";
                [].forEach.call(cells, function (cell) {
                    // Make sure to remove drop zone visual class
                    cell.classList.remove('over');
                });
            }
        });

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
