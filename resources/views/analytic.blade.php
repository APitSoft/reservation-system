@extends('layout.master')
@section('title', 'Forkk | Analytics')

@section('container-fluid')
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <h3>
                                    <div class="d-flex align-items-center">
                                        <i data-feather="bar-chart" class="mr-2"></i>
                                        <span>ANALYTICS</span>
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
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-body tag-card">
                                                    <div class="row">
                                                        <div class="col-sm-12 p-4 ">
                                                            <div class="btn btn-danger px-3 py-3 font-weight-bolder">-</div>
                                                            <div class="mb-0 font-weight-bolder ml-4 mt-2">GROSS <span class="text-warning">SALES</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-body tag-card">
                                                    <div class="row">
                                                        <div class="col-sm-12 p-4 ">
                                                            <div class="btn btn-danger px-3 py-3 font-weight-bolder">-</div>
                                                            <div class="mb-0 font-weight-bolder ml-4 mt-2">MY <span class="text-warning">ORDERS</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-body tag-card">
                                                    <div class="row">
                                                        <div class="col-sm-12 p-4 ">
                                                            <div class="btn btn-danger px-3 py-3 font-weight-bolder">-</div>
                                                            <div class="mb-0 font-weight-bolder ml-4 mt-2">MY <span class="text-warning">CUSTOMERS</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card sales-overview">
                                                <div class="card-header">
                                                  <h5>Monthly Gross Sales</h5>
                                                  <div class="card-header-right">
                                                    <ul class="list-unstyled card-option">
                                                      <li><i class="icofont icofont-double-left"></i></li>
                                                      <li><i class="view-html fa fa-code"></i></li>
                                                      <li><i class="icofont icofont-maximize full-card"></i></li>
                                                      <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                      <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                      <li><i class="icofont icofont-error close-card"></i></li>
                                                    </ul>
                                                  </div>
                                                </div>
                                                <div class="card-body chart-block">
                                                  <canvas id="our-growth" width="974" height="150" style="width: 974px; height: 150px;"></canvas>
                                                  <div class="chart-value-box pull-right">
                                                    <div class="value-square-box-warning"></div><span>Profit</span>
                                                  </div>
                                                  <div class="code-box-copy">
                                                    <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head3" title="" data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                                    <pre class=" language-html"><code class=" language-html" id="example-head3"><span class="token comment" spellcheck="true">&lt;!-- Cod Box Copy begin --&gt;</span>
                              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>chart-block<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>canvas</span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>our-growth<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>canvas</span><span class="token punctuation">&gt;</span></span>
                              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                              <span class="token comment" spellcheck="true">&lt;!-- Cod Box Copy end --&gt;</span></code></pre>
                                                  </div>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card sales-overview">
                                                <div class="card-header">
                                                  <h5>Orders Monthwise</h5>
                                                  <div class="card-header-right">
                                                    <ul class="list-unstyled card-option">
                                                      <li><i class="icofont icofont-double-left"></i></li>
                                                      <li><i class="view-html fa fa-code"></i></li>
                                                      <li><i class="icofont icofont-maximize full-card"></i></li>
                                                      <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                      <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                      <li><i class="icofont icofont-error close-card"></i></li>
                                                    </ul>
                                                  </div>
                                                </div>
                                                <div class="card-body chart-block">
                                                  <canvas id="our-growth" width="974" height="150" style="width: 974px; height: 150px;"></canvas>
                                                  <div class="chart-value-box pull-right">
                                                    <div class="value-square-box-warning"></div><span>Profit</span>
                                                  </div>
                                                  <div class="code-box-copy">
                                                    <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head3" title="" data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                                    <pre class=" language-html"><code class=" language-html" id="example-head3"><span class="token comment" spellcheck="true">&lt;!-- Cod Box Copy begin --&gt;</span>
                              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>chart-block<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>canvas</span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>our-growth<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>canvas</span><span class="token punctuation">&gt;</span></span>
                              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                              <span class="token comment" spellcheck="true">&lt;!-- Cod Box Copy end --&gt;</span></code></pre>
                                                  </div>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card sales-overview">
                                                <div class="card-header">
                                                  <h5>Our Growth</h5>
                                                  <div class="card-header-right">
                                                    <ul class="list-unstyled card-option">
                                                      <li><i class="icofont icofont-double-left"></i></li>
                                                      <li><i class="view-html fa fa-code"></i></li>
                                                      <li><i class="icofont icofont-maximize full-card"></i></li>
                                                      <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                      <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                      <li><i class="icofont icofont-error close-card"></i></li>
                                                    </ul>
                                                  </div>
                                                </div>
                                                <div class="card-body chart-block">
                                                  <canvas id="our-growth" width="974" height="150" style="width: 974px; height: 150px;"></canvas>
                                                  <div class="chart-value-box pull-right">
                                                    <div class="value-square-box-warning"></div><span>Profit</span>
                                                  </div>
                                                  <div class="code-box-copy">
                                                    <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head3" title="" data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                                    <pre class=" language-html"><code class=" language-html" id="example-head3"><span class="token comment" spellcheck="true">&lt;!-- Cod Box Copy begin --&gt;</span>
                              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>chart-block<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>canvas</span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>our-growth<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>canvas</span><span class="token punctuation">&gt;</span></span>
                              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                              <span class="token comment" spellcheck="true">&lt;!-- Cod Box Copy end --&gt;</span></code></pre>
                                                  </div>
                                                </div>
                                              </div>
                                        </div>
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