@extends('layout.main')
@section('body')
    <div class=" ">
        <div class="row justify-content-center">
                    <!-- Small table -->
                    <div class="col-md-12  ">
                        <div class="row">
                            <div class="col">
                                <h2 class="h4 mb-1">Inventory Table</h2>
                            </div>
                            <div class="col">
                                <div class=" text-right my-3 ">
                                    <a href="javascript:void(0)" type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-new">
                                        <span class="fe fe-plus-square fe-12 mr-2"></span>
                                        Add New Inventory
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card  ">
                            <div class="card-body">
                                <!-- table -->
                                <table class="table datatables table-sm table-hover table-bordered" width="100%" inventory-table>
                                    <thead class="bg-primary text-white">
                                    <tr>
                                        <th>#</th>
                                        <th>Item Name</th>
                                        <th>Item Code</th>
                                        <th>Qty</th>
                                        <th>Cost Per Pcs</th>
                                        <th>Uom</th>
                                        <th>Total Cost</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div> <!-- customized table -->
                </div> <!-- end section -->

    </div>
    <!--modal-->
    <div class="modal fade" id="add-new" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Inventory</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form  method="post" action="{{url('inventory/add')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col form-group">
                                <label>Inventory Name</label>
                                <input type="text" name="inv-name" class="form-control inv-name" placeholder="Inventory Name">
                            </div>
                            <div class="col form-group">
                                <label>Select Type</label>
                                <select class="form-control select2 inv-type" name="inv_type">
                                    <option value='4'>ASSETS</option>
                                    <option value='1'>CHEMICALS</option>
                                    <option value='2'>EQUIPMENTS</option>
                                    <option value='3'>SUPPLIES</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <label>Add Quantity</label>
                                <input type="number" name="actual-qty" placeholder="Actual quantity" class="form-control inv-qty">
                            </div>
                            <div class="col form-group">
                                <label>Cost Per Pcs</label>
                                <input type="text" name="cost-per-pcs" placeholder="Cost Per Pcs" class="form-control inv-cps">
                            </div>
                            <div class="col form-group">
                                <label>uom</label>
                                <input type="text" name="uom" placeholder="Uom" class="form-control inv-uom">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <label for="">Profile Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input inv-image" id="customFile" name="inv-image" onchange="PreviewImage(this)">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                <div>
                                    <div class="my-3">
                                        <img alt="" class="preview rounded" width="200" height="150" src="{{ url('public/assets/bg.jpg') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
                </div>
        </div>
    </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="view" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">View Inventory</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id=" ">
                            @csrf
                            <div class="modal-body">
                                <div class=" " edit-modal>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" id name="id">
                                                <label for="">Item Name</label>
                                                <input disabled type="text" class="form-control item-name" name="item-name" item-name>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="">Item Code</label>
                                                <input disabled type="text" class="form-control item-code" name="item-code" item-code>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="">Quantity</label>
                                                <input disabled type="text" class="form-control quantity" name="item-qty" quantity  >
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="">Cost Per Pieces</label>
                                                <input disabled type="text" class="form-control cost-per-pcs" name="item-cps" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="">Uom</label>
                                                <input disabled type="text" class="form-control uom" name="item-uom" uom>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="">Total Cost</label>
                                                <input disabled type="text" class="form-control total-cost" name="total-cost" total-cost id="total-cost">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
    </div>
    <!--view modal-->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Inventory</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <form id="update-form" class="update-form"
                        >
                            @csrf
                            <div class="modal-body">
                                <div class=" " edit-modal>
                                    <div class="row">
                                        <div class="col">

                                            <div class="form-group">
                                                <input type="hidden" class="id"  id name="id">
                                                <label for="">Item Name</label>
                                                <input  type="text" class="form-control item-name" name="item-name" item-name>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="">Item Code</label>
                                                <input  type="text" class="form-control item-code" name="item-code" item-code>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="">Quantity</label>
                                                <input  type="text" class="form-control  quantity qty"   name="item-qty" quantity  >
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="">Cost Per Pieces</label>
                                                <input  type="text" class="form-control cost-per-pcs" cost-per-pcs name="item-cps" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="">Uom</label>
                                                <input  type="text" class="form-control uom" name="item-uom" uom>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="">Total Cost</label>
                                                <input  type="text" class="form-control total-cost" name="total-cost" total-cost id="total-cost">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary inventory-update" data-dismiss="modal">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->

    <!--view modal-->


@endsection
@section('javascript')
    <script>
        function PreviewImage(input)
        {
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('.preview').attr('src',e.target.result).width(170).height(165);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script>
        $(function(){
            var table = $('[inventory-table]').DataTable({
                processing:true,
                ajax : "{{url('inventory/table')}}",
                columns: [
                    {data: 'id'},
                    {data: 'item_name'},
                    {data: 'item_code'},
                    {data: 'on_hand_qty'},
                    {data: 'cost_per_pcs'},
                    {data: 'uom'},
                    {data: 'total_cost'},
                    {
                        data: {data: ''},
                        render : function(data, type){
                            $row = '<button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                            $row += '<span class="text-muted sr-only">Action</span>';
                            $row += '</button>';
                            $row += '<div class="dropdown-menu dropdown-menu-right">';
                            $row += '<a class="dropdown-item edit" href="javascript:void(0)"  code="'+data.id+'" data-toggle="modal" data-target="#edit">Edit</a>';
                            $row += '<a class="dropdown-item delete" href="javascript:void(0)" code="'+data.id+'" >Remove</a>';
                            $row += '<a class="dropdown-item view" href="javascript:void(0)"  code="'+data.id+'" data-toggle="modal" data-target="#view">View</a>';
                            $row += '</div>';
                            return $row;
                        }
                    }
                ],

            });
            //toastr
            function get_toastr($title, $msg, $type){
                toastr.info($msg, $title, {
                    "width": "100",
                    "autoDismiss": false,
                    "positionClass": "toast-top-right",
                    "type": "info",
                    "timeOut": "5000",
                    "extendedTimeOut": "2000",
                    "allowHtml": true,
                    "closeButton": true,
                    "tapToDismiss": true,
                    "progressBar": true,
                    "newestOnTop": true,
                    "maxOpened": 0,
                    "preventDuplicates": true,
                    "preventOpenDuplicates": true
                })
            }

            $(document).on('click','.edit, .view', function(e){
                e.preventDefault();
                $code = $(this).attr('code');
                $.ajax({
                    url : '{{url("inventory/edit")}}',
                    method : 'post',
                    data : { id: $code },
                    dataType: 'json',
                    success : function(data)
                    {

                        $.each(data, function(key,value){
                           $('.id').val(value.id);
                           $('.item-name').val(value.item_name);
                           $('.item-code').val(value.item_code);
                           $('.quantity').val(value.on_hand_qty);
                           $('.cost-per-pcs').val(value.cost_per_pcs);
                           $('.uom').val(value.uom);
                           $('.total-cost').val(value.total_cost);
                        });
                    }
                });
            });

            $(document).on('click','.delete', function(e){
                e.preventDefault();
                $code = $(this).attr('code');
                if(!confirm('Deleted will not be recovered')){

                }
                else {
                    $.ajax({
                        url : '{{url("inventory/delete")}}',
                        method : 'post',
                        data : { id: $code },
                        dataType: 'json',
                        success : function(data)
                        {
                            table.ajax.reload();
                            get_toastr('Success','Record Deleted','SUCCESSFULLY !!');
                        }
                    });
                }
            });
            $(document).on('submit','.add-inv-form',function(){

                $.ajax({
                    url : "{{ url('inventory/add') }}",
                    method: "POST",
                    dataType: "Json",

                    contentType: false,
                    cache: false,
                    processData :false,
                    data : new FormData(this),
                    success: function(data){
                        console.log(data);

                    }
                });

                {{--var name = $('.inv-name').val();--}}
                {{--var type = $('.inv-type').val();--}}
                {{--var qty = $('.inv-qty').val();--}}
                {{--var cps = $('.inv-cps').val();--}}
                {{--var uom = $('.inv-uom').val();--}}
                {{--var image = $('.inv-image').val();--}}

                {{--$.ajax({--}}
                {{--    url : '{{ url("inventory/add") }}',--}}
                {{--    method : 'post',--}}
                {{--    dataType: "Json",--}}
                {{--    contentType: false,--}}
                {{--    cache: false,--}}
                {{--    processData :false,--}}
                {{--    data : new FormData(this),--}}
                {{--    success: function(data){--}}
                {{--        console.log(data);--}}

                {{--    }--}}
                {{--}); --}}
            });

            $(document).on('click','.inventory-update', function(e){
                e.preventDefault();

                $formdata = $('.update-form').serialize();

                $.ajax({
                    url : '{{ url("inventory/update") }}',
                    method : 'post',
                    data : $formdata,
                    success : function(data){
                        table.ajax.reload();
                        get_toastr('success','Record Updated','SUCCESSFULLY !!');
                    }
                });
            });

            $(document).on('keyup','.cost-per-pcs, .qty', function(){
                $cost = $('[cost-per-pcs]').val();
                $qty = $('.qty').val();
                console.log($cost, $qty);
                $('.total-cost').val($cost * $qty );

            });
///End ready
        })
    </script>
@endsection

