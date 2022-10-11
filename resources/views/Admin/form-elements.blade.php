@extends('layout.main')
@section('body')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">Form advanced elements</h2>
                <p class="text-muted">Demo for form control styles, layout options, and custom components for creating a wide variety of forms.</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <p class="mb-3"><strong>Input group</strong></p>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">@example.com</span>
                                    </div>
                                </div>
                                <label for="basic-url">Your vanity URL</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                                    </div>
                                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Button addons" aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button" id="button-addon2">Button</button>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-secondary" type="button">Button</button>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <p class="mb-3"><strong>Switches</strong></p>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
                                </div>
                                <div class="custom-control custom-switch mb-2">
                                    <input type="checkbox" class="custom-control-input" disabled id="customSwitch2">
                                    <label class="custom-control-label" for="customSwitch2">Disabled switch element</label>
                                </div>
                            </div> <!-- /.card-body -->
                        </div> <!-- /.card -->
                    </div> <!-- /.col -->
                    <div class="col-md-6">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <p class="mb-2"><strong>Select2</strong></p>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="simple-select2">Simple Select</label>
                                        <select class="form-control select2" id="simple-select2">
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                                <option value="CA">California</option>
                                                <option value="NV"  ">Nevada </option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                        </select>
                                    </div> <!-- form-group -->
                                    <div class="form-group col-md-6">
                                        <label for="multi-select2">Multiple Select</label>
                                        <select class="form-control select2-multi" id="multi-select2">
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                    <!-- form-group -->
                                </div> <!-- form-row -->
                            </div> <!-- /.card-body -->
                        </div> <!-- /.card -->
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <p class="mb-2"><strong>Date & Time Pickers</strong></p>
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label for="date-input1">Date Picker</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control drgpicker" id="date-input1" value="04/24/2020" aria-describedby="button-addon2">
                                            <div class="input-group-append">
                                                <div class="input-group-text" id="button-addon-date"><span class="fe fe-calendar fe-16"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="time-input2">Time Picker</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control time-input" id="time-input2" placeholder="" aria-describedby="button-addon2">
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- /.card-body -->
                        </div> <!-- /.card -->
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <p class="mb-2"><strong>Date Range Picker</strong></p>
                                <div class="form-group">
                                    <label for="date-input1">Date Range</label>
                                    <input type="text" name="datetimes" class="form-control datetimes" />
                                </div>
                                <div class="form-group">
                                    <label for="reportrange">Predefined Date Ranges</label>
                                    <div id="reportrange" class="border px-2 py-2 bg-light">
                                        <i class="fe fe-calendar fe-16 mx-2"></i>
                                        <span></span>
                                    </div>
                                </div>
                            </div> <!-- /.card-body -->
                        </div> <!-- /.card -->
                    </div> <!-- /.col -->
                    <div class="col-md-6">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <p class="mb-2"><strong>Input masks</strong></p>
                                <div class="form-group mb-3">
                                    <label for="example-date">Date</label>
                                    <input class="form-control" id="example-date" type="date" name="date">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="example-month">Month</label>
                                    <input class="form-control" id="example-month" type="month" name="month">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="example-time">Time</label>
                                    <input class="form-control" id="example-time" type="time" name="time">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="example-week">Week</label>
                                    <input class="form-control" id="example-week" type="week" name="week">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="example-number">Number</label>
                                    <input class="form-control" id="example-number" type="number" name="number">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="example-color">Color</label>
                                    <input class="form-control" id="example-color" type="color" name="color" value="#28a745">
                                </div>
                            </div> <!-- /.card-body -->
                        </div> <!-- /.card -->
                    </div> <!-- /.col -->
                    <div class="col-md-6">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <p class="mb-2"><strong>Custom input masks</strong></p>
                                <div class="form-group mb-3">
                                    <label for="custom-placeholder">Mask placeholder</label>
                                    <input class="form-control input-placeholder" id="custom-placeholder" type="text" name="placeholder">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="custom-zip">Zip code</label>
                                    <input class="form-control input-zip" id="custom-zip" data-placeholder="__/__/____" data-mask="00/00/0000">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="custom-money">Money</label>
                                    <input class="form-control input-money" id="custom-money" type="text" name="money">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="custom-phone">US Telephone</label>
                                    <input class="form-control input-phoneus" id="custom-phone" placeholder="(987) 654-3210">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="custom-mixed">Mixed mask</label>
                                    <input class="form-control input-mixed" id="custom-mixed" type="text" placeholder="AAA 000-S0S">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="custom-ipadd">IP address</label>
                                    <input class="form-control input-ip" id="custom-ipadd">
                                </div>
                            </div> <!-- /.card-body -->
                        </div> <!-- /.card -->
                    </div> <!-- /.col -->

                </div> <!-- end section -->
                <div class="row mb-4">
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <h5 class="card-title">Editor</h5>
                                <p>Pages type scale includes a range of contrasting styles that support the needs of your product and its content.</p>
                                <!-- Create the editor container -->
                                <div id="editor" style="min-height:100px;">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lobortis convallis efficitur. Cras nisi felis, luctus nec nibh quis, consequat maximus velit. Ut iaculis at lacus sed pellentesque.</p>
                                    <p>Maecenas luctus nisl quis leo porta, quis elementum mi tempus. Morbi blandit metus ut nulla scelerisque, sed ornare purus elementum. Vivamus sed augue in tortor commodo malesuada sed et nulla. Nullam cursus erat eget tellus maximus, ut placerat lorem fringilla.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end section -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
    <div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="defaultModalLabel">Notifications</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="list-group list-group-flush my-n3">
                        <div class="list-group-item bg-transparent">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="fe fe-box fe-24"></span>
                                </div>
                                <div class="col">
                                    <small><strong>Package has uploaded successfull</strong></small>
                                    <div class="my-0 text-muted small">Package is zipped and uploaded</div>
                                    <small class="badge badge-pill badge-light text-muted">1m ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item bg-transparent">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="fe fe-download fe-24"></span>
                                </div>
                                <div class="col">
                                    <small><strong>Widgets are updated successfull</strong></small>
                                    <div class="my-0 text-muted small">Just create new layout Index, form, table</div>
                                    <small class="badge badge-pill badge-light text-muted">2m ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item bg-transparent">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="fe fe-inbox fe-24"></span>
                                </div>
                                <div class="col">
                                    <small><strong>Notifications have been sent</strong></small>
                                    <div class="my-0 text-muted small">Fusce dapibus, tellus ac cursus commodo</div>
                                    <small class="badge badge-pill badge-light text-muted">30m ago</small>
                                </div>
                            </div> <!-- / .row -->
                        </div>
                        <div class="list-group-item bg-transparent">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="fe fe-link fe-24"></span>
                                </div>
                                <div class="col">
                                    <small><strong>Link was attached to menu</strong></small>
                                    <div class="my-0 text-muted small">New layout has been attached to the menu</div>
                                    <small class="badge badge-pill badge-light text-muted">1h ago</small>
                                </div>
                            </div>
                        </div> <!-- / .row -->
                    </div> <!-- / .list-group -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Clear All</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-shortcut modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
@endsection
@section('javascript')
    <script>

    </script>
@endsection
