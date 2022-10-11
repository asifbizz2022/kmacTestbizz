@extends('layout.main')
@section('body')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-10 ">
                <div class="row align-items-center my-4">
                    <div class="col">
                        <h2 class="h5 mb-0 page-title">Add New Employee</h2>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="{{url('employee/store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <h5 class="mb-3  ">Personal</h5>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="firstname">Firstname</label>
                                    <input type="text" name="first-name" id="firstname" class="form-control" placeholder="First Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="lastname">Lastname</label>
                                    <input type="text" id="lastname" name="last-name" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col ">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
                                </div>
                                <div class="form-group col ">
                                    <label for="inputLang">Company</label>
                                    <select id="simple-select2" name="company" class="form-control select2">
                                        @foreach($company as $data)
                                            <option value="{{$data->company_id}}">{{$data->trading_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col ">
                                    <label for="custom-placeholder">Designation</label>
                                    <select      class="form-control select2" name="designation">
                                        @foreach($designation as $row)
                                            <option value="{{$row->designation_id}}">{{$row->designation_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col ">
                                    <label for="inputState5">Department</label>
                                    <select  class="form-control select2" name="department">
                                        @foreach($department as $row)
                                            <option value="{{$row->department_id}}">{{$row->department_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col ">
                                    <label for="date-input1">Date of Birth</label>
                                    <div class="input-group">
                                        <input type="text" name="dob" class="form-control drgpicker" id="date-input1" value="04/24/2020" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <div class="input-group-text" id="button-addon-date"><span class="fe fe-calendar fe-16"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col ">
                                    <label for="example-number">Phone Number</label>
                                    <input class="form-control" id="example-number" type="number" name="phone" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <select class="form-control select2" name="country">
                                            @foreach($country as $value)
                                                <option>{{$value->country}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" class="form-control" name="city" placeholder="City">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class="form-group">
                                        <label>State/Province</label>
                                        <input type="text" class="form-control" name="state" placeholder="State / Province">
                                        <!--  <select class="form-control" name="state">
                                             <option>California</option>
                                             <option>Alaska</option>
                                             <option>Alabama</option>
                                         </select> -->
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class="form-group">
                                        <label>Postal Code</label>
                                        <input type="text" class="form-control" name="postal-code" placeholder="Postal Code">
                                    </div>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="form-group col  ">
                                    <label for="date-input1">Date of Joining</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control drgpicker" name="date-of-join" id="date-input1" value="04/24/2020" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <div class="input-group-text" id="button-addon-date"><span class="fe fe-calendar fe-16"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="">Gender</label>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="custom-control custom-radio mt-2">
                                                <input type="radio" class="custom-control-input" id="customControlValidation22" name="gender" value="Male" required="">
                                                <label class="custom-control-label" for="customControlValidation22">Male</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="custom-control custom-radio mt-2">
                                                <input type="radio" class="custom-control-input" id="customControlValidation33" name="gender" value="Female" required="">
                                                <label class="custom-control-label" for="customControlValidation33">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col ">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <textarea class="form-control" placeholder="Address" name="address">
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group col-12 my-1">
                                    <label for="">Profile Image</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="image" onchange="PreviewImage(this)">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <img alt="" class="preview rounded" width="150" height="100" src="{{ url('public/assets/bg.jpg')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                {{--                        <div class="col-md-6">--}}
                                {{--                            <div class="custom-control custom-switch">--}}
                                {{--                                <input type="checkbox" class="custom-control-input" id="customPass" checked>--}}
                                {{--                                <label class="custom-control-label" for="customPass">Create account and email generated password</label>--}}
                                {{--                            </div>--}}
                                {{--                        </div>--}}
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-primary">Save Change</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
@section('javascript')
    <script>
        function PreviewImage(input)
        {
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('.preview').attr('src',e.target.result).width(150).height(100);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(document).ready(function(){

        });
    </script>
    @endsection