@extends('layout.master')
@section('title', 'Forkk | Manage Client')

@section('container-fluid')
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <i data-feather="user-check" class="mr-2"></i>
                                    <h3>MANAGE CLIENT</h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <!-- Bookmark Start-->
                                <div class="bookmark pull-right">
                                    <ul>
                                        <li><a href="#" data-container="body" data-toggle="popover" data-placement="top"
                                                title="" data-original-title="Tables"><i data-feather="inbox"></i></a>
                                        </li>
                                        <li><a href="#" data-container="body" data-toggle="popover" data-placement="top"
                                                title="" data-original-title="Chat"><i
                                                    data-feather="message-square"></i></a></li>
                                        <li><a href="#" data-container="body" data-toggle="popover" data-placement="top"
                                                title="" data-original-title="Icons"><i data-feather="command"></i></a>
                                        </li>
                                        <li><a href="#" data-container="body" data-toggle="popover" data-placement="top"
                                                title="" data-original-title="Learning"><i
                                                    data-feather="layers"></i></a></li>
                                        <li><a href="#"><i class="bookmark-search" data-feather="star"></i></a>
                                            <form class="form-inline search-form">
                                                <div class="form-group form-control-search">
                                                    <input type="text" placeholder="Search..">
                                                </div>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Bookmark Ends-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ===============================================Container-fluid starts===============================================-->

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row px-3 mt-3">
                                        <div style="border: 1px dashed #ffb400;" class="col-md-12 rounded mb-5 p-2">
                                            <span><strong>Note : </strong> Please use a different browser to view the Client login access. For security reasons do not open the Client access in the same browser.or log out from your admin and then check with Client access. There are no automation involved and you need to reach out to your Client manually.</span>
                                        </div>
                                    </div>
                                  <div class="row">
                                      <div class="col-2 pb-3 pt-3 d-flex align-items-center mr-5">
                                        <label>Client Access URL <i class="fa fa-question-circle mytooltip" data-toggle="tooltip" data-placement="right" title="" data-original-title="Client Access URL."></i></label>
                                      </div>
                                      <div class="col-5 pb-3 pt-3">
                                        <div class="input-group-prepend">
                                            <input class="form-control" id="f1-first-name" type="url" name="f1-first-name" placeholder="" data-original-title="" value="https://forrk.io/clientlogin">
                                            <a href="#">
                                                <span class="input-group-text"><i data-feather="copy" class="mr-2"></i>Copy</span>
                                            </a>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-sm-12 pb-3 pt-3">
                                        <button class="btn btn-danger float-right p-2" type="button" data-toggle="modal" data-target="#tooltipmodal">
                                            <div class="d-flex justify-content-center">
                                                <i data-feather="plus" class="mr-2"></i>
                                                <span class="font-weight-bolder">Add Client</span>
                                            </div>
                                        </button>
                                        <div class="modal fade" id="tooltipmodal" tabindex="-1" role="dialog" aria-labelledby="tooltipmodal" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">
                                                       <div class="d-flex align-items-center">
                                                            <i data-feather="plus-square" class="mr-2"></i>
                                                           <span class="font-weight-bolder">ADD NEW CLIENT</span>
                                                       </div> 
                                                    </h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group m-form__group">
                                                        <label>Name <i class="fa fa-question-circle mytooltip"
                                                                data-toggle="tooltip" data-placement="right" title=""
                                                                data-original-title="Enter Your Client Name."></i></label>
                                                        <div class="input-group-prepend"><span
                                                                class="input-group-text"><i data-feather="user"></i></span>
                                                            <input class="form-control" id="f1-first-name" type="text"
                                                                name="f1-first-name" placeholder="Enter Client Name"
                                                                data-original-title="" title="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group m-form__group">
                                                        <label>Email <i class="fa fa-question-circle mytooltip"
                                                                data-toggle="tooltip" data-placement="right" title=""
                                                                data-original-title="Enter Your Client Email."></i></label>
                                                        <div class="input-group-prepend"><span
                                                                class="input-group-text"><i data-feather="mail"></i></span>
                                                            <input class="form-control" id="f1-first-name" type="email"
                                                                name="f1-first-name" placeholder="Enter Client Email"
                                                                data-original-title="" title="">
                                                        </div>
                                                    </div>
                                                    <form class="dropzone dropzone-primary mt-2 dz-clickable" id="multiFileUpload" action="http://admin.pixelstrap.com/upload.php">
                                                        <div class="dz-message needsclick"><i class="icon-cloud-up"></i>
                                                            <h6>Drop files here or click to upload.</h6><span class="note needsclick">(This is just a demo dropzone.
                                                                Selected files are <strong>not</strong> actually
                                                                uploaded.)</span>
                                                        </div>
                                                    </form>
                                                    <small class="form-text cust-small" style="color: red;font-size: 10px;"><strong>Recommended Size(px):</strong> <span>100*100 </span> [Format <span>PNG</span> or <span>JPEG</span>],</small>
                                                    <small class="form-text cust-small mb-3" style="color: red;font-size: 10px;">Maximum(px): 1000*1000</small>
                                                    <div class="form-group m-form__group">
                                                        <label>Password <i class="fa fa-question-circle mytooltip"
                                                                data-toggle="tooltip" data-placement="right" title=""
                                                                data-original-title="Enter your Client password."></i></label>
                                                        <div class="input-group-prepend"><span
                                                                class="input-group-text"><i data-feather="lock"></i></span>
                                                            <input class="form-control" id="f1-first-name" type="email"
                                                                name="f1-first-name" placeholder="Enter Client Password"
                                                                data-original-title="" title="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group m-form__group">
                                                        <label>Confirm Password <i class="fa fa-question-circle mytooltip"
                                                                data-toggle="tooltip" data-placement="right" title=""
                                                                data-original-title="Enter your Client confirm password."></i></label>
                                                        <div class="input-group-prepend"><span
                                                                class="input-group-text"><i data-feather="lock"></i></span>
                                                            <input class="form-control" id="f1-first-name" type="email"
                                                                name="f1-first-name" placeholder="Enter Client confirm password"
                                                                data-original-title="" title="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                                    <button class="btn btn-primary" type="button">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                  </div>
                                <div class="table-responsive">
                                  <table class="display" id="basic-1">
                                    <thead>
                                      <tr>
                                        <th>S/N</th>
                                        <th>NAME</th>
                                        <th>EMAIL</th>
                                        <th>LOGO</th>
                                        <th>PASSWORD</th>
                                        <th>CREATED</th>
                                        <th>STATUS</th>
                                        <th>ACTION</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>1</td>
                                        <td>
                                            <a href="#">Apitsoft</a>
                                        </td>
                                        <td>apitsoft.bd@gmail.com</td>
                                        <td>
                                            <img src="assets/images/favicon.png" alt="" class="img-fluid data-img">
                                        </td>
                                        <td>xxxxx 
                                            <a href="#"> <i class="fa fa-eye mytooltip text-dark" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to preview password"></i></a>
                                        </td>
                                        <td>27 Feb, 2022</td>
                                        <td>
                                            <div class="media mt-2">
                                                <div class="media-body text-right icon-state  d-flex justify-content-center align-items-center">
                                                  <label class="switch">
                                                    <input type="checkbox" checked=""><span class="switch-state"></span>
                                                  </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <button class="btn px-4 rounded d-flex align-items-center" id="btnGroupVerticalDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="datatable-dropdown">...</span></button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                    <a class="dropdown-item" href="#"><i class="icofont icofont-edit"></i> Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="icofont icofont-listine-dots"></i> Assign Store</a>
                                                    <a class="dropdown-item" href="#"><i class="icofont icofont-bin"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ===============================================Container-fluid Ends===============================================-->
@endsection

@section('header_links')
 <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/dropzone.css')}}">
@endsection

@section('footer_links')
    <script src="{{asset('public/assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatables/datatable.custom.js')}}"></script>
    <script src="{{asset('public/assets/js/tooltip-init.js')}}"></script>
    <script src="{{asset('public/assets/js/dropzone/dropzone.js')}}"></script>
    <script src="{{asset('public/assets/js/dropzone/dropzone-script.js')}}"></script>
@endsection