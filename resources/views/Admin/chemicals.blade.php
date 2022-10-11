@extends('layout.main')
@section('body')
    <div class=" ">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row">
                    <!-- Small table -->
                    <div class="col-md-12  ">
                        <h2 class="h4 mb-1">Chemicals</h2>
                        <p class="mb-3">Additional table rendering with vertical border, rich content formatting for cell</p>
                        <div class="card  ">
                            <div class="card-body">
                                <!-- table -->
                                <table class="table datatables table-sm table-hover w-100"   chemicals-table>
                                    <thead class="bg-primary text-white">
                                    <tr>
                                        <th>#</th>
                                        <th>Item Name</th>
                                        <th>Item Code</th>
                                        <th>Item Qty</th>
                                        <th>Item Uom</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div> <!-- customized table -->
                </div> <!-- end section -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div>
    <!--modal to edit and show -->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Chemical Edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid" edit-modal>
                        <div class="row">
                            <div class="col form-group">
                                <label for="">Item Name</label>
                                <input type="text" class="form-control item-name" name="item-name">
                            </div>
                            <div class="col form-group">
                                <label for="">Item Code</label>
                                <input type="text" class="form-control item-code" name="item-code">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <label for="">Item Quantity</label>
                                <input type="text" class="form-control item-qty" name="item-qty">
                            </div>
                            <div class="col form-group">
                                <label for="">Item Uom</label>
                                <input type="text" class="form-control item-uom" name="item-uom">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    {{--                    <button type="button" class="btn btn-primary">Save changes</button>--}}
                </div>
            </div>
        </div>
    </div>
    <!--modal to edit and show end -->
    <!--modal to edit and show -->
    <div class="modal fade" id="view" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Chemical View</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid" edit-modal  >
                         <table class="table table-stripped table-sm w-100 border">
                             <tr>
                                 <td>
                                     Item Name
                                 </td>
                                 <td>
                                     <span class="item-name"></span>
                                 </td>
                             </tr>
                             <tr>
                                 <td>Item Code</td>
                                 <td>
                                     <span class="item-code"></span>
                                 </td>
                             </tr>
                             <tr>
                                 <td>Item Quantity</td>
                                 <td>
                                     <span class="item-quatity"></span>
                                 </td>
                             </tr>
                             <tr>
                                 <td>Item Uom</td>
                                 <td>
                                     <span class="item-uom"></span>
                                 </td>
                             </tr>
                         </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    {{--                    <button type="button" class="btn btn-primary">Save changes</button>--}}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <script>
        $(function(){
            var table = $('[chemicals-table]').DataTable({
                processing:true,
                ajax : "{{url('chemicals/table')}}",
                columns: [
                    {data: 'id'},
                    {data: 'item_name'},
                    {data: 'item_code'},
                    {data: 'actual_qty'},
                    {data: 'uom'},
                    {
                        data: {data: ''},
                        render : function(data, type){
                            $row = '<button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                            $row += '<span class="text-muted sr-only">Action</span>';
                            $row += '</button>';
                            $row += '<div class="dropdown-menu dropdown-menu-right">';
                            $row += '<a class="dropdown-item dit" href="javascript:void(0)"  code="'+data.id+'" data-toggle="modal" data-target="#edit">Edit</a>';
                            $row += '<a class="dropdown-item delete" href="javascript:void(0)">Remove</a>';
                            $row += '<a class="dropdown-item view" href="javascript:void(0)"  code="'+data.id+'" data-toggle="modal" data-target="#view">View</a>';
                            $row += '</div>';
                            return $row;
                        }
                    }
                ],

            });
            ///add
            ///update
            ///delete
            ///edit and show
            $(document).on('click','.edit, .view',function(e){
                $code = $(this).attr('code');
                e.preventDefault();
                $.ajax({
                    url : '{{ url("chemicals/edit") }}',
                    method : 'Post',
                    data : {id:$code},
                    success : function(data){
                        $.each(data, function(key , value){
                            $('.item-name').val(value.item_name);
                            $('.item-code').val(value.item_code);
                            $('.item-qty').val(value.actual_qty);
                            $('.item-uom').val(value.uom);

                            $('.item-name').text(value.item_name);
                            $('.item-code').text(value.item_code);
                            $('.item-qty').text(value.actual_qty);
                            $('.item-uom').text(value.uom);
                        });
                    }
                });
            });


        })
    </script>
@endsection


