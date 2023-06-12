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
                            <h4 class="card-title ">Product  List</h4>
                        </div>
                        <div class="card-body">
                            @include('layouts.message')

                            <a href="{{url('admin/products/create')}}" class="btn btn-primary pull-right">Create</a>
                            <div class="table-responsive">
                                <table class="table" id="product-list">
                                    <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>

                                    <th>
                                        title
                                    </th>
                                    <th>
                                        sku
                                    </th>


                                    <th>
                                        Category
                                    </th>
                                    <th>
                                        Parent Category
                                    </th>

                                    <th style="width: 15%;">
                                        actions
                                    </th>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td>
                                                {{$product->id}}
                                            </td>
                                            <td>
                                                {{Str::words($product->title,10,'...')}}
                                            </td>
                                            <td>
                                                {{$product->sku}}
                                            </td>


                                            <td>
                                                {{$product->cates->implode('title', ',')}}
                                            </td>

                                            <td>
                                                {{$product->cates->implode('type_slug',',')}}
                                            </td>

                                            <td >

                                                <form action="{{url('admin/products/'.$product->id)}}"  method="post">
                                                    <a href="{{url('admin/products/'.$product->id.'/edit')}}">
                                                        <icons-image _ngcontent-mes-c22="" _nghost-mes-c19=""><span class="material-icons icon-image-preview">edit</span></icons-image _ngcontent-mes-c22="" _nghost-mes-c19="">
                                                    </a>

                                                    <a href="javascript:;" onclick="setVisible(this)" data-productId="{{$product->id}}" class="ml-1">
                                                        @if($product->status == \App\Models\Product::STATUS_VISIBLE)
                                                        <icons-image  _ngcontent-mes-c22="" _nghost-mes-c19=""><span class="material-icons material-icons-outlined">visibility</span></icons-image _ngcontent-mes-c22="" _nghost-mes-c19="">
                                                        @elseif($product->status == \App\Models\Product::STATUS_INVISIBLE)
                                                        <icons-image  _ngcontent-mes-c22="" _nghost-mes-c19=""><span class="material-icons material-icons-outlined">visibility_off</span>     </icons-image _ngcontent-mes-c22="" _nghost-mes-c19="">
                                                        @endif
                                                    </a>
                                                    <a href="{{url(data_get($product, "cates.0.slug").'/'.$product->slug)}}" class="ml-1" target="_blank"><span class="material-icons material-icons-outlined">open_in_browser</span></a>
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
        var productId = $(element).attr('data-productId');

        $.get('{{url("/")}}' + '/admin/products/' + productId + '/visible', function( data ) {
            if(data.status === 0) {
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
        var table = $('#product-list').DataTable({
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
                cells = document.querySelectorAll('#product-list tr');

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

                $.get( '{{url("admin/products-sort?source=")}}' + $(dragSrc).children('td:first').text().trim() + '&dest=' + $(this).children('td:first').text().trim(), function( data ) {
                });
            }



            return false;
        }

        function handleDragEnd(e) {

            this.style.opacity = "1.0";
            [].forEach.call(cells, function (cell) {
                // Make sure to remove drop zone visual class
                cell.classList.remove('over');
            });
        }


    });

</script>
@endsection
