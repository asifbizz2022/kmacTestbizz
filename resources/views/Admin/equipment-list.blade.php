@extends('layout.main')
@section('body')
    <div class=" ">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row">
                    <!-- Small table -->
                    <div class="col-md-12  ">
                        <h2 class="h4 mb-1">Equipments</h2>
                        <p class="mb-3">Additional table rendering with vertical border, rich content formatting for cell</p>
                        <div class="card  ">
                            <div class="card-body">
                                <!-- table -->
                                <table class="table datatables table-sm table-hover " width="100%"   equipment>
                                    <thead class="bg-primary text-white">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Code</th>
                                        <th>Quantity</th>
                                        <th>Uom</th>
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

    <!-- Modal -->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                 <div class="container-fluid" edit-modal>

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

            var table = $('[equipment]').DataTable({
                processing:true,
                ajax : "{{url('equipment/table')}}",
                columns: [
                    {data: 'id'},
                    {data: 'item_name'},
                    {data: 'item_code'},
                    {data: 'on_hand_qty'},
                    {data: 'uom'},
                    {
                        data: {data: ''},
                        render : function(data, type){
                         $row = '<button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                         $row += '<span class="text-muted sr-only">Action</span>';
                         $row += '</button>';
                         $row += '<div class="dropdown-menu dropdown-menu-right">';
                         $row += '<a class="dropdown-item edit" href="javascript:void(0)"  code="'+data.id+'" data-toggle="modal" data-target="#edit">Edit</a>';
                         $row += '<a class="dropdown-item delete" href="#">Remove</a>';
                         $row += '<a class="dropdown-item view" href="#">View</a>';
                         $row += '</div>';

                         return $row;
                        }
                    }
                ],

            });
            ///GET SELECTED ROW
            $(document).on('click','.edit', function(e){
                $('[edit-modal').empty();
                e.preventDefault();
                $code = $(this).attr('code');
                $.ajax({
                    url : '{{url("equipment/edit")}}',
                    method : 'post',
                    data : { id: $code },
                    dataType: 'json',
                    success : function(data)
                    {
                        $.each(data, function(key,value){
                            $view_row = '<table class="table ">';

                            $view_row += '<tr><td>Item Name</td><td>'+value.item_name+'</td></tr>';
                            $view_row += '<tr><td>Item Quantity</td><td>'+value.on_hand_qty+'</td></tr>';
                            $view_row += '<tr><td>UOM</td><td>'+value.uom+'</td></tr>';

                            $view_row += '</table>';

                            $('[edit-modal]').append($view_row);
                        });
                    }
                });
            });

     //document ready closed here
        })
    </script>
@endsection


