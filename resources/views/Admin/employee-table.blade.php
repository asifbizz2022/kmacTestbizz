@extends('layout.main')
@section('body')
    <style>
        table tbody tr td {
            vertical-align: top;
            text-align: left;

        }
        table tbody tr td {
            font-color:gray;
        }
    </style>
    <div class=" ">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row align-items-center  mb-3">
                    <div class="col">
                        <h2 class="h4 mb-1">Employee Table</h2>
                        <p class="mb-3">Additional table rendering with vertical border, rich content formatting for cell</p>
                    </div>
                    <div class="col-auto">
                        <a href="{{ route('emp.add') }}" type="button" class="btn btn-primary">
                            <span class="fe fe-plus-square fe-12 mr-2"></span>
                            Add New
                        </a>
                    </div>
                </div>
                <div class="row">
                    <!-- Small table -->
                    <div class="col-md-12  ">
                        <div class="card  ">
                            <div class="card-body">
                                <!-- table -->
                                <table class="table datatables table-sm table-hover table-bordered" width="100%"   employee>
                                    <thead class="bg-primary text-white">
                                    <tr>
                                        <th>#</th>
                                        <th>Employee</th>
                                        <th>Contact</th>
                                        <th>Address</th>
                                        <th>Details</th>
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

            var table = $('[employee]').DataTable({
                processing:true,
                ajax : "{{url('employee/table')}}",
                columns: [
                    {data: 'employee_id'},
                    {
                        data: {data: ''},
                        render: function(data , type){
                            $image = '{{ url("public/storage/employee") }}'+'/'+data.image;
                            $emp = '<span>'+data.first_name+' '+'</span> ';
                            $emp += '<span>'+data.first_name+'</span><br>';
                            $emp += '<img src="'+$image+'" width="100" height="70" class="rounded border"></img>';
                            return $emp;
                        }
                    },
                    {
                        data: {data: ''},
                        render:  function(data , type){
                            $contact =   '<span>'+data.emp_contact+'</span><br>';
                            $contact +=  '<span>'+data.email+'</span><br>';
                            $contact +=  '<span>'+data.date_of_birth+'</span><br>';
                            $contact +=  '<span>'+data.gender+'</span>';

                            return $contact;
                        }
                    },
                    {
                        data: {data: ''},
                        render: function(data, type){
                            $address = '<span>'+data.state+'</span><br>';

                            $address += '<span>'+data.country+'</span><br>';
                            $address += '<span>'+data.zipcode+'</span><br>';
                            $address += '<span>'+data.address+'</span>';

                            return $address;
                        }
                    },
                    {
                        data: {data : ''},
                        render: function(data, type){
                            $details =  '<span>'+data.designation_name+'</span>';

                            return $details;
                        }
                    },

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


            //document ready closed here
        })
    </script>
@endsection


