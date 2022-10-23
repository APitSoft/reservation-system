@extends('layout.master')
@section('title', 'Forkk | My Products')

@section('container-fluid')
  <div class="container-fluid">
      <div class="page-header">
          <div class="row">
              <div class="col-lg-6 d-flex align-items-center">
                  <i data-feather="database" class="mr-2"></i>
                  <h3>MY PRODUCTS</h3>
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
                    <div class="row">
                        <div class="col-sm-12 pb-5 pt-3">
                            <a href="create_new_product.html">
                              <button class="btn btn-danger float-right p-2">
                                  <div class="d-flex align-items-center">
                                      <i data-feather="plus" class="mr-2"></i>
                                      <span class="font-weight-bolder">Create New Product</span>
                                  </div>
                              </button>
                            </a>
                        </div>
                    </div>
                  <div class="table-responsive">
                    <table class="display" id="basic-1">
                      <thead>
                        <tr>
                          <th>PRODUCT NAME</th>
                          <th>PRODUCT IMAGE</th>
                          <th>VARIATIONS</th>
                          <th>ADD-ONS</th>
                          <th>MEDIA</th>
                          <th>FAQS</th>
                          <th>DISPLAY IN WEBSITE</th>
                          <th>STATUS</th>
                          <th>ACTIONS</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                              <a href="create_new_product.html">Bugar</a>
                          </td>
                          <td>
                              <img src="assets/images/project-images/12_burger.jpg" alt="" class="img-fluid data-img">
                          </td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>2</td>
                          <td class="d-flex justify-content-center align-items-center">
                              <input type="checkbox" class="checkbox-style">
                          </td>
                          <td>
                              <div class="media  mt-2">
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
                                      <a class="dropdown-item" href="create_new_product.html"><i class="icofont icofont-edit"></i> Edit</a>
                                      <a class="dropdown-item" href="#"><i class="icofont icofont-ui-copy"></i> Clone Product</a>
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
@endsection

@section('footer_links')
    <script src="{{asset('public/assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('public/assets/js/datatable/datatables/datatable.custom.js')}}"></script>
    <script src="{{asset('public/assets/js/tooltip-init.js')}}"></script>
@endsection