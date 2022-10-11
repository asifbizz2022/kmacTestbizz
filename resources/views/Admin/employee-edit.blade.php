@extends('layout.main')
@section('body')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-10 ">
                <div class="row align-items-center my-4">
                    <div class="col">
                        <h2 class="h3 mb-0 page-title">Update Employee</h2>
                    </div>
                    <div class="col-auto">

                    </div>
                </div>
            <div class="card">
                <div class="card-body">
                    <form id="upload" method="POST" action="{{ url('employee/update') }}" enctype="multipart/form-data">
                        @csrf

                        <h5 class="mb-3  ">Personal</h5>
                        @foreach($result as $row)
                            <input type="hidden" name="id" value="{{$row->employee_id}}">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>First Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" value="{{$row->first_name}}" name="first-name" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input class="form-control" type="text" value="{{$row->last_name}}" name="last-name" placeholder="Last Name">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <input class="form-control" type="email" value="{{$row->email}}" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Company <span class="text-danger">*</span></label>
                                        <select class="form-control select2" name="company">
                                            @foreach($company as $data)
                                                <option value="{{$data->company_id}}">{{$data->trading_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Date of Joining <span class="text-danger"></span></label>
                                        <div class="cal-icon">
                                            <input
                                                    type="text"
                                                    class="form-control drgpicker"
                                                    name="date-of-join"
                                                    value="{{$row->date_of_joining}}"
                                            >
                                        </div>
                                    </div>


                                </div>
                                <div class="col ">
                                    <div class="form-group">
                                        <label>Phone </label>
                                        <input class="form-control" type="text" value="{{$row->emp_contact}}" name="phone" placeholder="Contact number">
                                    </div>
                                </div>
                            </div>

                        @endforeach
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Designation <span class="text-danger">*</span></label>
                                    <select class="form-control select2" name='designation'>
                                        @foreach($designation as $row)
                                            <option value="{{$row->designation_id}}">{{$row->designation_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Department <span class="text-danger">*</span></label>
                                    <select class="form-control select2" name="department">
                                        @foreach($department as $row)
                                            <option value="{{$row->department_id}}">{{$row->department_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        @foreach($result as $row)
                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control drgpicker" name="dob" value="{{$row->date_of_birth}}">
                                        </div>


                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group gender-select">
                                        <label class="gen-label">Gender:</label>
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
                                @foreach($result as $row)
                                    <div class="col-sm-6 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" class="form-control" value="{{$row->city}}" name="city" placeholder="City">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label>State/Province</label>
                                            <input type="text" class="form-control" value="{{$row->state}}" name="state" placeholder="State / Province">
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
                                            <input type="text" class="form-control" value="{{$row->zipcode}}" name="postal-code" placeholder="Postal Code">
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input class="form-control" value="{{$row->address}}" placeholder="Address" name="address">
                                    </div>

                                </div>
                            </div>
                        @endforeach
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Avatar</label>
                                    <div class="profile-upload">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile" name="image" onchange="PreviewImage(this)">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <img alt="" class="preview rounded" width="150" height="100" src="{{ url('public/storage/employee/')}}/{{$row->image}}">
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="m-t-20 text-right">
                            <button type="submit" class="btn btn-primary submit-btn ">Update</button>
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