@extends('layout.main')
@section('body')

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">
                    <h2 class="h3 mb-4 page-title">Settings</h2>
                    <div class="my-4">
                        <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Security</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Notifications</a>
                            </li>
                        </ul>
                        <h5 class="mb-0 mt-5">Notifications Settings</h5>
                        <p>Select notification you want to receive</p>
                        <hr class="my-4">
                        <strong class="mb-0">Security</strong>
                        <p>Control security alert you will be notified.</p>
                        <div class="list-group mb-5 shadow">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <strong class="mb-0">Unusual activity notifications</strong>
                                        <p class="text-muted mb-0">Donec in quam sed urna bibendum tincidunt quis mollis mauris.</p>
                                    </div> <!-- .col -->
                                    <div class="col-auto">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="alert1" checked>
                                            <span class="custom-control-label"></span>
                                        </div>
                                    </div> <!-- .col -->
                                </div> <!-- .row -->
                            </div> <!-- .list-group-item -->
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <strong class="mb-0">Unauthorized financial activity</strong>
                                        <p class="text-muted mb-0">Fusce lacinia elementum eros, sed vulputate urna eleifend nec.</p>
                                    </div> <!-- .col -->
                                    <div class="col-auto">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="alert2">
                                            <span class="custom-control-label"></span>
                                        </div>
                                    </div> <!-- .col -->
                                </div> <!-- .row -->
                            </div> <!-- .list-group-item -->
                        </div> <!-- .list-group -->
                        <hr class="my-4">
                        <strong class="mb-0">System</strong>
                        <p>Please enable system alert you will get.</p>
                        <div class="list-group mb-5 shadow">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <strong class="mb-0">Notify me about new features and updates</strong>
                                        <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div> <!-- .col -->
                                    <div class="col-auto">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="alert3" checked>
                                            <span class="custom-control-label"></span>
                                        </div>
                                    </div> <!-- .col -->
                                </div> <!-- .row -->
                            </div> <!-- .list-group-item -->
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <strong class="mb-0">Notify me by email for latest news</strong>
                                        <p class="text-muted mb-0">Nulla et tincidunt sapien. Sed eleifend volutpat elementum.</p>
                                    </div> <!-- .col -->
                                    <div class="col-auto">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="alert4" checked>
                                            <span class="custom-control-label"></span>
                                        </div>
                                    </div> <!-- .col -->
                                </div> <!-- .row -->
                            </div> <!-- .list-group-item -->
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <strong class="mb-0">Notify me about tips on using account</strong>
                                        <p class="text-muted mb-0">Donec in quam sed urna bibendum tincidunt quis mollis mauris.</p>
                                    </div> <!-- .col -->
                                    <div class="col-auto">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="alert5">
                                            <span class="custom-control-label"></span>
                                        </div>
                                    </div> <!-- .col -->
                                </div> <!-- .row -->
                            </div> <!-- .list-group-item -->
                        </div> <!-- .list-group -->
                    </div> <!-- /.card-body -->
                </div> <!-- /.col-12 -->
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
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="defaultModalLabel">Shortcuts</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body px-5">
                        <div class="row align-items-center">
                            <div class="col-6 text-center">
                                <div class="squircle bg-success justify-content-center">
                                    <i class="fe fe-cpu fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Control area</p>
                            </div>
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-activity fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Activity</p>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-droplet fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Droplet</p>
                            </div>
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-upload-cloud fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Upload</p>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-users fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Users</p>
                            </div>
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-settings fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Settings</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection