@extends('layout.main')
@section('body')
    <div class=" ">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row">
                    <!-- Small table -->
                    <div class="col-md-12  ">
                        <h2 class="h4 mb-1">Supplies</h2>
                        <p class="mb-3">Additional table rendering with vertical border, rich content formatting for cell</p>
                        <div class="card  ">
                            <div class="card-body">
                                <!-- table -->
                                <table class="table datatables table-sm table-hover w-100" supplies-table>
                                    <thead class="bg-primary text-white">
                                    <tr>
                                        <th>#</th>
                                        <th>Item Name</th>
                                        <th>Item Code</th>
                                        <th>Item Qty</th>
                                        <th>Uom</th>
                                        <th>Action</th>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div> <!-- customized table -->
                </div> <!-- end section -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div>
@endsection
@section('javascript')
    <script>
        $(function(){
            var table = $('[supplies-table]').DataTable({
                processing:true,
                ajax : "{{url('supplies/table')}}",
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
        })
    </script>
@endsection

