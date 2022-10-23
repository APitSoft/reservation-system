@extends('layout.master')
@section('title', 'Forkk | My Store')

@section('container-fluid')
<div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-lg-6">
                  <div class="col-lg-6 d-flex align-items-center">
                    <i data-feather="server" class="mr-2"></i>
                    <h3>MY STORE</h3>
                  </div>
                </div>
                <div class="col-lg-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark pull-right">
                    <ul>
                      <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
                      <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                      <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                      <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
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
    
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12 xl-100 ">
                <div class="row">
                  <!-- Create new Store -->
                  <div class="col-xl-4 col-md-4 box-col-4">
                    <a href="store_create.html">
                      <div class="card miraz">
                        <div class="card-body tag-card text-center">
  
                            <h1 class="pb-5" style="color: #242934;">img</h1>
                          <a href="store_create.html"> <h6> <i class="fa fa-plus-circle" aria-hidden="true"></i> Create New Store</h6></a>
                        </div>
                      </div>
                    </a>
                  </div>
                <!-- Create new Store End -->

                <!-- Store List View -->
                  <div class="col-xl-4 col-md-4 box-col-4">
                    <div class="card miraz">
                      <div class="card-body tag-card">
                        <div class="mystore_header pb-4" style="display: flex;">
                          <div class="col-md-6 mystore_header_right">
                            <div class="1" style="font-size: 20px;">Name</div>
                            <div class="2" style="font-size: 10px;"> <i class="fa fa-calendar-o" aria-hidden="true"></i> 20 jan, 2022</div>
                          </div>
                          <div class="col-md-6 mystore_header_left pb-5 d-flex justify-content-end">
                            <div class="dropdown">
                              <button class="btn btn-primary dropdown-toggle onhover-dropdown btn_design" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenu2" style="width: 165px;">
                                <ul class="icon-lists navs-icon">
                                  <li><a class="active" href="#"><i data-feather="home"></i><span> Visit QRcode Page</span></a></li>
                                  <li><a href="#"><i data-feather="airplay"></i><span> Visit Direct Link</span></a></li>
                                  <li><a href="#"><i data-feather="file-text"></i><span> Edit</span></a></li>
                                  <li><a href="#"><i data-feather="server"></i><span> Add Catagory</span></a></li>
                                  <li><a href="#"><i data-feather="airplay"></i><span> Autoresponder</span></a></li>
                                  <li><a href="#"><i data-feather="file-text"></i><span> FB Share</span></a></li>
                                  <li><a href="#"><i data-feather="server"></i><span> Cusom Scripts</span></a></li>
                                  <li><a href="#"><i data-feather="airplay"></i><span> Cname</span></a></li>
                                  <li><a href="#"><i data-feather="file-text"></i><span> Clone</span></a></li>
                                  <li><a href="#"><i data-feather="server"></i><span> Embed QR Code</span></a></li>
                                  <li><a href="#"><i data-feather="airplay"></i><span> Website Templete</span></a></li>
                                  <li><a href="#"><i data-feather="file-text"></i><span> Delete</span></a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="mystore_footer" style="display: flex;">
                          <div class="col-md-8">
                            
                                <div class="avatar"><img class="img-30 rounded-circle" src="assets/images/user/1.jpg" alt="#"></div>
                                 </div>
                          
                          <div class="col-md-4">
                            
                            <div class="media-body text-right icon-state switch-outline">
                              <label class="switch">
                                <input type="checkbox"><span class="switch-state bg-danger"></span>
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Store List View end -->

                 <!-- Store List View -->
                 <div class="col-xl-4 col-md-4 box-col-4">
                  <div class="card miraz">
                    <div class="card-body tag-card">
                      <div class="mystore_header pb-4" style="display: flex;">
                        <div class="col-md-6 mystore_header_right">
                          <div class="1" style="font-size: 20px;">Name</div>
                          <div class="2" style="font-size: 10px;"> <i class="fa fa-calendar-o" aria-hidden="true"></i> 20 jan, 2022</div>
                        </div>


                        <div class="col-md-6 mystore_header_left pb-5">
                          <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle onhover-dropdown btn_design" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2" style="width: 165px;">
                              <ul class="icon-lists navs-icon">
                                <li><a class="active" href="#"><i data-feather="home"></i><span> Visit QRcode Page</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Visit Direct Link</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> Edit</span></a></li>
                                <li><a href="#"><i data-feather="server"></i><span> Add Catagory</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Autoresponder</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> FB Share</span></a></li>
                                <li><a href="#"><i data-feather="server"></i><span> Cusom Scripts</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Cname</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> Clone</span></a></li>
                                <li><a href="#"><i data-feather="server"></i><span> Embed QR Code</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Website Templete</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> Delete</span></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="mystore_footer" style="display: flex;">
                        <div class="col-md-8">
                          
                              <div class="avatar"><img class="img-30 rounded-circle" src="assets/images/user/1.jpg" alt="#"></div>
                               </div>
                        
                        <div class="col-md-4">
                          
                          <div class="media-body text-right icon-state switch-outline">
                            <label class="switch">
                              <input type="checkbox"><span class="switch-state bg-danger"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Store List View end -->

                <!-- Store List View -->
                <div class="col-xl-4 col-md-4 box-col-4">
                  <div class="card miraz">
                    <div class="card-body tag-card">
                      <div class="mystore_header pb-4" style="display: flex;">
                        <div class="col-md-6 mystore_header_right">
                          <div class="1" style="font-size: 20px;">Name</div>
                          <div class="2" style="font-size: 10px;"> <i class="fa fa-calendar-o" aria-hidden="true"></i> 20 jan, 2022</div>
                        </div>


                        <div class="col-md-6 mystore_header_left pb-5">
                          <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle onhover-dropdown btn_design" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2" style="width: 165px;">
                              <ul class="icon-lists navs-icon">
                                <li><a class="active" href="#"><i data-feather="home"></i><span> Visit QRcode Page</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Visit Direct Link</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> Edit</span></a></li>
                                <li><a href="#"><i data-feather="server"></i><span> Add Catagory</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Autoresponder</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> FB Share</span></a></li>
                                <li><a href="#"><i data-feather="server"></i><span> Cusom Scripts</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Cname</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> Clone</span></a></li>
                                <li><a href="#"><i data-feather="server"></i><span> Embed QR Code</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Website Templete</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> Delete</span></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="mystore_footer" style="display: flex;">
                        <div class="col-md-8">
                          
                              <div class="avatar"><img class="img-30 rounded-circle" src="assets/images/user/1.jpg" alt="#"></div>
                               </div>
                        
                        <div class="col-md-4">
                          
                          <div class="media-body text-right icon-state switch-outline">
                            <label class="switch">
                              <input type="checkbox"><span class="switch-state bg-danger"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Store List View end -->

                <!-- Store List View -->
                <div class="col-xl-4 col-md-4 box-col-4">
                  <div class="card miraz">
                    <div class="card-body tag-card">
                      <div class="mystore_header pb-4" style="display: flex;">
                        <div class="col-md-6 mystore_header_right">
                          <div class="1" style="font-size: 20px;">Name</div>
                          <div class="2" style="font-size: 10px;"> <i class="fa fa-calendar-o" aria-hidden="true"></i> 20 jan, 2022</div>
                        </div>


                        <div class="col-md-6 mystore_header_left pb-5">
                          <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle onhover-dropdown btn_design" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2" style="width: 165px;">
                              <ul class="icon-lists navs-icon">
                                <li><a class="active" href="#"><i data-feather="home"></i><span> Visit QRcode Page</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Visit Direct Link</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> Edit</span></a></li>
                                <li><a href="#"><i data-feather="server"></i><span> Add Catagory</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Autoresponder</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> FB Share</span></a></li>
                                <li><a href="#"><i data-feather="server"></i><span> Cusom Scripts</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Cname</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> Clone</span></a></li>
                                <li><a href="#"><i data-feather="server"></i><span> Embed QR Code</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Website Templete</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> Delete</span></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="mystore_footer" style="display: flex;">
                        <div class="col-md-8">
                          
                              <div class="avatar"><img class="img-30 rounded-circle" src="assets/images/user/1.jpg" alt="#"></div>
                               </div>
                        
                        <div class="col-md-4">
                          
                          <div class="media-body text-right icon-state switch-outline">
                            <label class="switch">
                              <input type="checkbox"><span class="switch-state bg-danger"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Store List View end -->

                <!-- Store List View -->
                <div class="col-xl-4 col-md-4 box-col-4">
                  <div class="card miraz">
                    <div class="card-body tag-card">
                      <div class="mystore_header pb-4" style="display: flex;">
                        <div class="col-md-6 mystore_header_right">
                          <div class="1" style="font-size: 20px;">Name</div>
                          <div class="2" style="font-size: 10px;"> <i class="fa fa-calendar-o" aria-hidden="true"></i> 20 jan, 2022</div>
                        </div>


                        <div class="col-md-6 mystore_header_left pb-5">
                          <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle onhover-dropdown btn_design" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2" style="width: 165px;">
                              <ul class="icon-lists navs-icon">
                                <li><a class="active" href="#"><i data-feather="home"></i><span> Visit QRcode Page</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Visit Direct Link</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> Edit</span></a></li>
                                <li><a href="#"><i data-feather="server"></i><span> Add Catagory</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Autoresponder</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> FB Share</span></a></li>
                                <li><a href="#"><i data-feather="server"></i><span> Cusom Scripts</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Cname</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> Clone</span></a></li>
                                <li><a href="#"><i data-feather="server"></i><span> Embed QR Code</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Website Templete</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> Delete</span></a></li>
                              </ul>
                            </div>
                          </div>

                        </div>
                      </div>

                      <div class="mystore_footer" style="display: flex;">
                        <div class="col-md-8">
                          
                              <div class="avatar"><img class="img-30 rounded-circle" src="assets/images/user/1.jpg" alt="#"></div>
                               </div>
                        
                        <div class="col-md-4">
                          
                          <div class="media-body text-right icon-state switch-outline">
                            <label class="switch">
                              <input type="checkbox"><span class="switch-state bg-danger"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Store List View end -->

                <!-- Store List View -->
                <div class="col-xl-4 col-md-4 box-col-4">
                  <div class="card miraz">
                    <div class="card-body tag-card">
                      <div class="mystore_header pb-4" style="display: flex;">
                        <div class="col-md-6 mystore_header_right">
                          <div class="1" style="font-size: 20px;">Name</div>
                          <div class="2" style="font-size: 10px;"> <i class="fa fa-calendar-o" aria-hidden="true"></i> 20 jan, 2022</div>
                        </div>


                        <div class="col-md-6 mystore_header_left pb-5">
                          <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle onhover-dropdown btn_design" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2" style="width: 165px;">
                              <ul class="icon-lists navs-icon">
                                <li><a class="active" href="#"><i data-feather="home"></i><span> Visit QRcode Page</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Visit Direct Link</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> Edit</span></a></li>
                                <li><a href="#"><i data-feather="server"></i><span> Add Catagory</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Autoresponder</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> FB Share</span></a></li>
                                <li><a href="#"><i data-feather="server"></i><span> Cusom Scripts</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Cname</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> Clone</span></a></li>
                                <li><a href="#"><i data-feather="server"></i><span> Embed QR Code</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Website Templete</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> Delete</span></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="mystore_footer" style="display: flex;">
                        <div class="col-md-8">
                          
                              <div class="avatar"><img class="img-30 rounded-circle" src="assets/images/user/1.jpg" alt="#"></div>
                               </div>
                        
                        <div class="col-md-4">
                          
                          <div class="media-body text-right icon-state switch-outline">
                            <label class="switch">
                              <input type="checkbox"><span class="switch-state bg-danger"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Store List View end -->

                <!-- Store List View -->
                <div class="col-xl-4 col-md-4 box-col-4">
                  <div class="card miraz">
                    <div class="card-body tag-card">
                      <div class="mystore_header pb-4" style="display: flex;">
                        <div class="col-md-6 mystore_header_right">
                          <div class="1" style="font-size: 20px;">Name</div>
                          <div class="2" style="font-size: 10px;"> <i class="fa fa-calendar-o" aria-hidden="true"></i> 20 jan, 2022</div>
                        </div>

                        <!-- Final Button Select Start -->
                        <div class="col-md-6 mystore_header_left pb-5">
                          <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle onhover-dropdown btn_design" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2" style="width: 165px;">
                              <ul class="icon-lists navs-icon">
                                <li><a class="active" href="#"><i data-feather="home"></i><span> Visit QRcode Page</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Visit Direct Link</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> Edit</span></a></li>
                                <li><a href="#"><i data-feather="server"></i><span> Add Catagory</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Autoresponder</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> FB Share</span></a></li>
                                <li><a href="#"><i data-feather="server"></i><span> Cusom Scripts</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Cname</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> Clone</span></a></li>
                                <li><a href="#"><i data-feather="server"></i><span> Embed QR Code</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Website Templete</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> Delete</span></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <!-- Final Button Select End -->
                        
                      </div>

                      <div class="mystore_footer" style="display: flex;">
                        <div class="col-md-8">
                          
                              <div class="avatar"><img class="img-30 rounded-circle" src="assets/images/user/1.jpg" alt="#"></div>
                               </div>
                        
                        <div class="col-md-4">
                          
                          <div class="media-body text-right icon-state switch-outline">
                            <label class="switch">
                              <input type="checkbox"><span class="switch-state bg-danger"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Store List View end -->

                <!-- Store List View -->
                <div class="col-xl-4 col-md-4 box-col-4">
                  <div class="card miraz">
                    <div class="card-body tag-card">
                      <div class="mystore_header pb-4" style="display: flex;">
                        <div class="col-md-6 mystore_header_right">
                          <div class="1" style="font-size: 20px;">Name</div>
                          <div class="2" style="font-size: 10px;"> <i class="fa fa-calendar-o" aria-hidden="true"></i> 20 jan, 2022</div>
                        </div>


                        <div class="col-md-6 mystore_header_left pb-5 d-flex justify-content-end">

                          <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle onhover-dropdown btn_design" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2" style="width: 165px;">
                              <ul class="icon-lists navs-icon">
                                <li><a class="active" href="#"><i data-feather="home"></i><span> Visit QRcode Page</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Visit Direct Link</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> Edit</span></a></li>
                                <li><a href="#"><i data-feather="server"></i><span> Add Catagory</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Autoresponder</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> FB Share</span></a></li>
                                <li><a href="#"><i data-feather="server"></i><span> Cusom Scripts</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Cname</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> Clone</span></a></li>
                                <li><a href="#"><i data-feather="server"></i><span> Embed QR Code</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Website Templete</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> Delete</span></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="mystore_footer" style="display: flex;">
                        <div class="col-md-8">
                          
                              <div class="avatar"><img class="img-30 rounded-circle" src="assets/images/user/1.jpg" alt="#"></div>
                               </div>
                        
                        <div class="col-md-4">
                          
                          <div class="media-body text-right icon-state switch-outline">
                            <label class="switch">
                              <input type="checkbox"><span class="switch-state bg-danger"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Store List View end -->

                <!-- Store List View -->
                <div class="col-xl-4 col-md-4 box-col-4">
                  <div class="card miraz">
                    <div class="card-body tag-card">
                      <div class="mystore_header pb-4" style="display: flex;">
                        <div class="col-md-6 mystore_header_right">
                          <div class="1" style="font-size: 20px;">Name</div>
                          <div class="2" style="font-size: 10px;"> <i class="fa fa-calendar-o" aria-hidden="true"></i> 20 jan, 2022</div>
                        </div>


                        <div class="col-md-6 mystore_header_left pb-5 d-flex justify-content-end">
                         
                          <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle onhover-dropdown btn_design" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2" style="width: 165px;">
                              <ul class="icon-lists navs-icon">
                                <li><a class="active" href="#"><i data-feather="home"></i><span> Visit QRcode Page</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Visit Direct Link</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> Edit</span></a></li>
                                <li><a href="#"><i data-feather="server"></i><span> Add Catagory</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Autoresponder</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> FB Share</span></a></li>
                                <li><a href="#"><i data-feather="server"></i><span> Cusom Scripts</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Cname</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> Clone</span></a></li>
                                <li><a href="#"><i data-feather="server"></i><span> Embed QR Code</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Website Templete</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> Delete</span></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="mystore_footer" style="display: flex;">
                        <div class="col-md-8">
                          
                              <div class="avatar"><img class="img-30 rounded-circle" src="assets/images/user/1.jpg" alt="#"></div>
                               </div>
                        
                        <div class="col-md-4">
                          
                          <div class="media-body text-right icon-state switch-outline">
                            <label class="switch">
                              <input type="checkbox"><span class="switch-state bg-danger"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Store List View end -->

                <!-- Store List View -->
                <div class="col-xl-4 col-md-4 box-col-4">
                  <div class="card miraz">
                    <div class="card-body tag-card">
                      <div class="mystore_header pb-4" style="display: flex;">
                        <div class="col-md-6 mystore_header_right">
                          <div class="1" style="font-size: 20px;">Name</div>
                          <div class="2" style="font-size: 10px;"> <i class="fa fa-calendar-o" aria-hidden="true"></i> 20 jan, 2022</div>
                        </div>


                        <div class="col-md-6 mystore_header_left pb-5 d-flex justify-content-end">
                          

                          <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle onhover-dropdown btn_design" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2" style="width: 165px;">
                              <ul class="icon-lists navs-icon">
                                <li><a class="active" href="#"><i data-feather="home"></i><span> Visit QRcode Page</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Visit Direct Link</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> Edit</span></a></li>
                                <li><a href="#"><i data-feather="server"></i><span> Add Catagory</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Autoresponder</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> FB Share</span></a></li>
                                <li><a href="#"><i data-feather="server"></i><span> Cusom Scripts</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Cname</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> Clone</span></a></li>
                                <li><a href="#"><i data-feather="server"></i><span> Embed QR Code</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Website Templete</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> Delete</span></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="mystore_footer" style="display: flex;">
                        <div class="col-md-8">
                          
                              <div class="avatar"><img class="img-30 rounded-circle" src="assets/images/user/1.jpg" alt="#"></div>
                               </div>
                        
                        <div class="col-md-4">
                          
                          <div class="media-body text-right icon-state switch-outline">
                            <label class="switch">
                              <input type="checkbox"><span class="switch-state bg-danger"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Store List View end -->

                <!-- Store List View -->
                <div class="col-xl-4 col-md-4 box-col-4">
                  <div class="card miraz">
                    <div class="card-body tag-card">
                      <div class="mystore_header pb-4" style="display: flex;">
                        <div class="col-md-6 mystore_header_right">
                          <div class="1" style="font-size: 20px;">Name</div>
                          <div class="2" style="font-size: 10px;"> <i class="fa fa-calendar-o" aria-hidden="true"></i> 20 jan, 2022</div>
                        </div>


                        <div class="col-md-6 mystore_header_left pb-5 d-flex justify-content-end">
                          

                          <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle onhover-dropdown btn_design" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2" style="width: 165px;">
                              <ul class="icon-lists navs-icon">
                                <li><a class="active" href="#"><i data-feather="home"></i><span> Visit QRcode Page</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Visit Direct Link</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> Edit</span></a></li>
                                <li><a href="#"><i data-feather="server"></i><span> Add Catagory</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Autoresponder</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> FB Share</span></a></li>
                                <li><a href="#"><i data-feather="server"></i><span> Cusom Scripts</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Cname</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> Clone</span></a></li>
                                <li><a href="#"><i data-feather="server"></i><span> Embed QR Code</span></a></li>
                                <li><a href="#"><i data-feather="airplay"></i><span> Website Templete</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span> Delete</span></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="mystore_footer" style="display: flex;">
                        <div class="col-md-8">
                          
                              <div class="avatar"><img class="img-30 rounded-circle" src="assets/images/user/1.jpg" alt="#"></div>
                               </div>
                        
                        <div class="col-md-4">
                          
                          <div class="media-body text-right icon-state switch-outline">
                            <label class="switch">
                              <input type="checkbox"><span class="switch-state bg-danger"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Store List View end -->

                </div>
              </div>
            </div>
          </div>
@endsection
