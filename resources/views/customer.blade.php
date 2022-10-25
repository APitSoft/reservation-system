@extends('layout.master')
@section('title', 'Forkk | Customer')

@section('container-fluid')
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <h3>
                                    <div class="d-flex align-items-center">
                                        <i data-feather="user" class="mr-2"></i>
                                        <h3>MANAGE CUSTOMER</h2>
                                    </div>
                                </h3>

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
                                    <div class="table-responsive">
                                    <table class="display" id="basic-1">
                                        <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>NAME</th>
                                            <th>EMAIL</th>
                                            <th>PHONE</th>
                                            <th>ADDRESS</th>
                                            <th>CREATED</th>
                                            <th>ACTION</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Shadman Tazwar</td>
                                            <td>shadman.1420@gmail.com</td>
                                            <td>01992-214774</td>
                                            <td>Deyara, Rupsha</td>
                                            <td>1</td>
                                            <td>2</td>
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
 <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/prism.css')}}">
@endsection

@section('footer_links')
   <script src="{{asset('public/assets/js/chart/chartjs/chart.min.js')}}"></script>
    <script src="{{asset('public/assets/js/chart/chartist/chartist.js')}}"></script>
    <script src="{{asset('public/assets/js/dashboard/default.js')}}"></script>
    <script src="{{asset('public/assets/js/tooltip-init.js')}}"></script>
@endsection