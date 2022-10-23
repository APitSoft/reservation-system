@extends('layout.master')
@section('title', 'Forkk | Payment Integrations')

@section('container-fluid')
    <div class="container-fluid">
        <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
            <h3><i class="fa fa-gear"></i> INTEGRATIONS </h3>

            </div>
            <div class="col-lg-6">
            <!-- Bookmark Start-->
            <div class="bookmark pull-right">
                <ul>
                <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title=""
                    data-original-title="Tables"><i data-feather="inbox"></i></a></li>
                <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title=""
                    data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title=""
                    data-original-title="Icons"><i data-feather="command"></i></a></li>
                <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title=""
                    data-original-title="Learning"><i data-feather="layers"></i></a></li>
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
    <!-- =================================Store Form Starts================================= -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs nav-primary" id="pills-warningtab" role="tablist">
                <li class="nav-item"><a class="nav-link active" id="pills-warninghome-tab" data-toggle="pill" href="#pills-warninghome" role="tab" aria-controls="pills-warninghome" aria-selected="true"><i class="icofont icofont-ui-home"></i>Payment Integration</a></li>
                <li class="nav-item"><a class="nav-link" id="pills-warningprofile-tab" data-toggle="pill" href="#pills-warningprofile" role="tab" aria-controls="pills-warningprofile" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Autoresponder Integration</a></li>
                <li class="nav-item"><a class="nav-link" id="pills-warningcontact-tab" data-toggle="pill" href="#pills-warningcontact" role="tab" aria-controls="pills-warningcontact" aria-selected="false"><i class="icofont icofont-contacts"></i>Webinar Integration</a></li>
                <li class="nav-item"><a class="nav-link" id="pills-warningcontact-tab" data-toggle="pill" href="#pills-warningcontactOther" role="tab" aria-controls="pills-warningcontact" aria-selected="false"><i class="icofont icofont-contacts"></i>Other Integration</a></li>
                </ul>
                <div class="tab-content" id="pills-warningtabContent">
                <div class="tab-pane fade show active" id="pills-warninghome" role="tabpanel" aria-labelledby="pills-warninghome-tab">
                    <div class="row mt-5">

                    <div class="col-xl-3 box-col-6">
                        <div class="card custom-card">
                        <div class="card-header"><img class="img-fluid" src="{{asset('public/assets/images/online-payment-gateway.png')}}" alt=""></div>
                        <div class="card-profile"><img class="rounded-circle" src="{{asset('public/assets/images/paypal.png')}}" alt=""></div>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-square btn-secondary mt-3" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">Connect</button>
                        </div>
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">Paypal Integration</h4>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                                </div>
                                <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">Client ID <i class="fa fa-question-circle mytooltip" data-toggle="tooltip" data-placement="right" title="Please Enter Your Paypal CLient ID."></i></label>
                                        <input class="f1-email form-control" type="text" placeholder="Enter Client ID">
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">Paypal Secret Key <i class="fa fa-question-circle mytooltip" data-toggle="tooltip" data-placement="right" title="Please Enter Your Paypal Paypal Secret Key."></i></label>
                                        <input class="f1-email form-control" type="text" placeholder="Enter Paypal Secret Key">
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">Paypal Secret Key <i class="fa fa-question-circle mytooltip" data-toggle="tooltip" data-placement="right" title="Please Enter Your Paypal Paypal Secret Key."></i></label>
                                        <input class="f1-email form-control" type="text" placeholder="Enter Paypal Secret Key">
                                    </div>
                                    </div>
                                    <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-6 col-form-label">Live Mode</label>
                                        <div class="col-sm-10 col-6">
                                        <div class="media-body text-left icon-state">
                                            <label class="switch">
                                            <input id="bootstrap-notify-progress" type="checkbox" data-original-title="" title=""><span class="switch-state"></span>
                                            </label>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="button" data-dismiss="modal">Save</button>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="text-center profile-details mt-3">
                            <h4>Paypal</h4>
                            <h6>Payment Gateway</h6>
                        </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 box-col-6">
                        <div class="card custom-card">
                        <div class="card-header"><img class="img-fluid" src="{{asset('public/assets/images/online-payment-gateway.png')}}" alt=""></div>
                        <div class="card-profile"><img class="rounded-circle" src="{{asset('public/assets/images/stripe.webp')}}" alt=""></div>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-square btn-secondary mt-3" type="button" data-toggle="modal" data-target=".stripeModel">Connect</button>
                        </div>
                        <div class="modal fade bd-example-modal-lg stripeModel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">Stripe Integration</h4>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                                </div>
                                <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">Stripe Secret Key <i class="fa fa-question-circle mytooltip" data-toggle="tooltip" data-placement="right" title="Please Enter Your Paypal Paypal Secret Key."></i></label>
                                        <input class="f1-email form-control" type="text" placeholder="Enter Stripe Secret Key">
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">Stripe Secret Key <i class="fa fa-question-circle mytooltip" data-toggle="tooltip" data-placement="right" title="Please Enter Your Paypal Paypal Secret Key."></i></label>
                                        <input class="f1-email form-control" type="text" placeholder="Enter Stripe Secret Key">
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="button" data-dismiss="modal">Save</button>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="text-center profile-details mt-3">
                            <h4>Stripe</h4>
                            <h6>Payment Gateway</h6>
                        </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 box-col-6">
                        <div class="card custom-card">
                        <div class="card-header"><img class="img-fluid" src="{{asset('public/assets/images/online-payment-gateway.png')}}" alt=""></div>
                        <div class="card-profile"><img class="rounded-circle" src="{{asset('public/assets/images/razorpay.png')}}" alt=""></div>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-square btn-secondary mt-3" type="button" data-toggle="modal" data-target=".razorpayModal">Connect</button>
                        </div>
                        <div class="modal fade bd-example-modal-lg razorpayModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">Razorpay Integration</h4>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                                </div>
                                <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">Razorpay ID <i class="fa fa-question-circle mytooltip" data-toggle="tooltip" data-placement="right" title="Please Enter Your Paypal Paypal Secret Key."></i></label>
                                        <input class="f1-email form-control" type="text" placeholder="Enter Razorpay ID">
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">Razorpay Secret Key <i class="fa fa-question-circle mytooltip" data-toggle="tooltip" data-placement="right" title="Please Enter Your Paypal Paypal Secret Key."></i></label>
                                        <input class="f1-email form-control" type="text" placeholder="Enter Razorpay Secret Key">
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="button" data-dismiss="modal">Save</button>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="text-center profile-details mt-3">
                            <h4>Razorpay</h4>
                            <h6>Payment Gateway</h6>
                        </div>
                        </div>
                    </div>

                    <div class="col-xl-3 box-col-6">
                        <div class="card custom-card">
                        <div class="card-header"><img class="img-fluid" src="{{asset('public/assets/images/online-payment-gateway.png')}}" alt=""></div>
                        <div class="card-profile"><img class="rounded-circle" src="{{asset('public/assets/images/manual.png')}}" alt=""></div>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-square btn-secondary mt-3" type="button" data-toggle="modal" data-target=".manualPayment">Connect</button>
                        </div>
                        <div class="modal fade bd-example-modal-lg manualPayment" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">Manual Payment</h4>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                                </div>
                                <div class="modal-body">
                                <div class="row">

                                    <div class="col-md-12 mb-4">
                                    <div class="radio radio-primary">
                                        <input id="radio11" type="radio" name="paymentRadio" value="USA" checked>
                                        <label for="radio11" style="padding-right: 30px;">USA</label>
                                        <input id="radio22" type="radio" name="paymentRadio" value="Other Countries">
                                        <label for="radio22" style="padding-right: 30px;">Other Countries</label>
                                        <input id="radio23" type="radio" name="paymentRadio" value="COD">
                                        <label for="radio23">COD</label>
                                    </div>
                                    </div>

                                    <div class="col-md-12" id="liveMode">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-6 col-form-label">Live Mode <i class="fa fa-question-circle mytooltip" data-toggle="tooltip" data-placement="right" title="Use the Test mode for test purchase and Live mode for real time purchase."></i></label>
                                        <div class="col-sm-10 col-6">
                                        <div class="media-body text-left icon-state">
                                            <label class="switch">
                                            <input type="checkbox"><span class="switch-state"></span>
                                            </label>
                                        </div>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="col-md-12" id="aacountName">
                                    <div class="form-group">
                                        <label for="f1-first-name">Account Name </label>
                                        <input class="f1-email form-control" type="text" id="" placeholder="Enter Your Account Name">
                                    </div>
                                    </div>
                                    
                                    <div class="col-md-12" id="accountNumber">
                                    <div class="form-group">
                                        <label for="f1-first-name">Account Number </label>
                                        <input class="f1-email form-control" type="text" id="" placeholder="Enter Your Account Number">
                                    </div>
                                    </div>
                                    
                                    <div class="col-md-12" id="nameBank">
                                    <div class="form-group">
                                        <label for="f1-first-name">Name Of The Bank </label>
                                        <input class="f1-email form-control" type="text" id="" placeholder="Enter Your Bank Name">
                                    </div>
                                    </div>
                                    
                                    <div class="col-md-12" id="swiftCode">
                                    <div class="form-group">
                                        <label for="f1-first-name">Sort/Swift Code </label>
                                        <input class="f1-email form-control" type="text" id="" placeholder="Enter Your Sort/Swift Code">
                                    </div>
                                    </div>
                                    
                                    <div class="col-md-12" id="ibanNumber">
                                    <div class="form-group">
                                        <label for="f1-first-name">IBAN </label>
                                        <input class="f1-email form-control" type="text" id="" placeholder="Enter Your IBAN">
                                    </div>
                                    </div>

                                    <div class="col-md-12" id="abaNumber">
                                    <div class="form-group">
                                        <label for="f1-first-name">ABA Number </label>
                                        <input class="f1-email form-control" type="text" id="" placeholder="Enter Your ABA Number">
                                    </div>
                                    </div>

                                    <div class="col-md-12" id="comapnyName">
                                    <div class="form-group">
                                        <label for="f1-first-name">Company Name </label>
                                        <input class="f1-email form-control" type="text" id="" placeholder="Enter Your Company Name">
                                    </div>
                                    </div>

                                    <div class="col-md-12" id="addressPermanet">
                                    <div class="form-group">
                                        <label for="f1-first-name">Address </label>
                                        <textarea class="f1-email form-control" placeholder="Enter Your Address" rows="3"></textarea>
                                    </div>
                                    </div>
                                    
                                    <div class="col-md-12" id="otherCode">
                                    <div class="form-group">
                                        <label for="f1-first-name">Other Code </label>
                                        <textarea class="f1-email form-control" placeholder="Enter Your Other Code" rows="3"></textarea>
                                    </div>
                                    </div>

                                    <div class="col-md-12" id="paymentURL">
                                    <div class="form-group">
                                        <label for="f1-first-name">Payment URL </label>
                                        <input class="f1-email form-control" type="text" id="" placeholder="Enter Your Payment URL">
                                    </div>
                                    </div>

                                </div>
                                </div>
                                <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="button" data-dismiss="modal">Save</button>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="text-center profile-details mt-3">
                            <h4>Manual Payment</h4>
                            <h6>Payment Gateway</h6>
                        </div>
                        </div>
                    </div>

                    <div class="col-xl-3 box-col-6">
                        <div class="card custom-card">
                        <div class="card-header"><img class="img-fluid" src="{{asset('public/assets/images/online-payment-gateway.png')}}" alt=""></div>
                        <div class="card-profile"><img class="rounded-circle" src="{{asset('public/assets/images/flutter.png')}}" alt=""></div>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-square btn-secondary mt-3" type="button" data-toggle="modal" data-target=".flutterWavePay">Connect</button>
                        </div>
                        <div class="modal fade bd-example-modal-lg flutterWavePay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">Flutterwave Integration</h4>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                                </div>
                                <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">Public Key</label>
                                        <input class="f1-email form-control" type="text" placeholder="Your Flutterwave Public Key">
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">Secret Key</label>
                                        <input class="f1-email form-control" type="text" placeholder="Your Flutterwave Secret Key">
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">Encryption Key</label>
                                        <input class="f1-email form-control" type="text" placeholder="Your Flutterwave Encryption Key">
                                    </div>
                                    </div>
                                    <div class="col-md-12" id="liveMode">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-6 col-form-label">Live Mode <i class="fa fa-question-circle mytooltip" data-toggle="tooltip" data-placement="right" title="Use the Test credentials for test purchase and Live credentials for real time purchase."></i></label>
                                        <div class="col-sm-10 col-6">
                                        <div class="media-body text-left icon-state">
                                            <label class="switch">
                                            <input type="checkbox"><span class="switch-state"></span>
                                            </label>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="button" data-dismiss="modal">Save</button>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="text-center profile-details mt-3">
                            <h4>Flutterwave Payment</h4>
                            <h6>Payment Gateway</h6>
                        </div>
                        </div>
                    </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="pills-warningprofile" role="tabpanel" aria-labelledby="pills-warningprofile-tab">
                    <div class="row mt-5">

                    <div class="col-xl-3 box-col-6">
                        <div class="card custom-card">
                        <div class="card-profile"><img class="rounded-circle" src="{{asset('public/assets/images/2.png')}}" alt=""></div>
                        <div class="col-md-12 text-center">
                            <a href="https://auth.aweber.com/1.0/oauth/authorize?oauth_token=AqDchsZsZd6SMCgvgy3vmznX" target="_blank" class="btn btn-square btn-secondary mt-3">Connect</a>
                        </div>

                        <div class="text-center profile-details mt-3">
                            <h4>Aweber</h4>
                            <h6>Email Marketing</h6>
                        </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 box-col-6">
                        <div class="card custom-card">
                        <div class="card-profile"><img class="rounded-circle" src="{{asset('public/assets/images/13.png')}}" alt=""></div>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-square btn-secondary mt-3" type="button" data-toggle="modal" data-target=".mailChamp">Connect</button>
                        </div>
                        <div class="modal fade mailChamp" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">MAILCHIMP</h4>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                                </div>
                                <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">MailChimp API Token <i class="fa fa-question-circle mytooltip" data-toggle="tooltip" data-placement="right" title="Please Enter Your MailChimp API Token."></i></label>
                                        <input class="f1-email form-control" type="text" placeholder="Enter MailChimp API Token">
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="button" data-dismiss="modal">Save</button>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="text-center profile-details mt-3">
                            <h4>Mail Chimp</h4>
                            <h6>Email Marketing</h6>
                        </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 box-col-6">
                        <div class="card custom-card">
                        <div class="card-profile"><img class="rounded-circle" src="{{asset('public/assets/images/1.png')}}" alt=""></div>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-square btn-secondary mt-3" type="button" data-toggle="modal" data-target=".activeCampaign">Connect</button>
                        </div>
                        <div class="modal fade activeCampaign" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">ACTIVE CAMPAIGN</h4>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                                </div>
                                <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">ActiveCampaign API URL</label>
                                        <input class="f1-email form-control" type="text" placeholder="Your ActiveCampaign API URL goes here">
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">ActiveCampaign API Key</label>
                                        <input class="f1-email form-control" type="text" placeholder="Your ActiveCampaign API Key goes here">
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="button" data-dismiss="modal">Save</button>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="text-center profile-details mt-3">
                            <h4>Active Campaign</h4>
                            <h6>Email Marketing</h6>
                        </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 box-col-6">
                        <div class="card custom-card">
                        <div class="card-profile"><img class="rounded-circle" src="{{asset('public/assets/images/11.png')}}" alt=""></div>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-square btn-secondary mt-3" type="button" data-toggle="modal" data-target=".sendLane">Connect</button>
                        </div>
                        <div class="modal fade sendLane" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">SENDLANE</h4>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                                </div>
                                <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                    <span style="color: tomato;">[Enter only your first part of the URL For Example: yoursitename From the URL: https://yoursitename.sendlane.com]</span>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">Sendlane URL </label>
                                        <input class="f1-email form-control" type="text" placeholder="Your First part of the Sendlane Url goes here">
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">Sendlane API Key</label>
                                        <input class="f1-email form-control" type="text" placeholder="Your Sendlane API key goes here">
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">Sendlane Hash Key</label>
                                        <input class="f1-email form-control" type="text" placeholder="Your Sendlane Hash key goes here">
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="button" data-dismiss="modal">Save</button>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="text-center profile-details mt-3">
                            <h4>Sendlane</h4>
                            <h6>Email Marketing</h6>
                        </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 box-col-6">
                        <div class="card custom-card">
                        <div class="card-profile"><img class="rounded-circle" src="{{asset('public/assets/images/15.png')}}" alt=""></div>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-square btn-secondary mt-3" type="button" data-toggle="modal" data-target=".sendReach">Connect</button>
                        </div>
                        <div class="modal fade sendReach" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">SENDREACH</h4>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                                </div>
                                <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">Sendreach API Public Key </label>
                                        <input class="f1-email form-control" type="text" placeholder="Your Sendreach API Public key goes here">
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">Sendreach API Private Key </label>
                                        <input class="f1-email form-control" type="text" placeholder="Your Sendreach API Private key goes here">
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="button" data-dismiss="modal">Save</button>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="text-center profile-details mt-3">
                            <h4>SendReach</h4>
                            <h6>Email Marketing</h6>
                        </div>
                        </div>
                    </div>

                    <div class="col-xl-3 box-col-6">
                        <div class="card custom-card">
                        <div class="card-profile"><img class="rounded-circle" src="{{asset('public/assets/images/5.png')}}" alt=""></div>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-square btn-secondary mt-3" type="button" data-toggle="modal" data-target=".getResponse">Connect</button>
                        </div>
                        <div class="modal fade getResponse" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">GETRESPONSE</h4>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                                </div>
                                <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">GetResponse API URL </label>
                                        <input class="f1-email form-control" type="text" placeholder="Your GetResponse API URL goes here">
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="button" data-dismiss="modal">Save</button>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="text-center profile-details mt-3">
                            <h4>GetResponse</h4>
                            <h6>Email Marketing</h6>
                        </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 box-col-6">
                        <div class="card custom-card">
                        <div class="card-profile"><img class="rounded-circle" src="{{asset('public/assets/images/7.png')}}" alt=""></div>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-square btn-secondary mt-3" type="button" data-toggle="modal" data-target=".iContact">Connect</button>
                        </div>
                        <div class="modal fade iContact" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">ICONTACT</h4>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                                </div>
                                <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">iContact Username </label>
                                        <input class="f1-email form-control" type="text" placeholder="Your iContact Username goes here">
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">iContact API Password  </label>
                                        <input class="f1-email form-control" type="text" placeholder="Your iContact API Password goes here">
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">iContact API Key   </label>
                                        <input class="f1-email form-control" type="text" placeholder="Your iContact API Key goes here">
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="button" data-dismiss="modal">Save</button>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="text-center profile-details mt-3">
                            <h4>iContact</h4>
                            <h6>Email Marketing</h6>
                        </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 box-col-6">
                        <div class="card custom-card">
                        <div class="card-profile"><img class="rounded-circle" src="{{asset('public/assets/images/4.png')}}" alt=""></div>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-square btn-secondary mt-3" type="button" data-toggle="modal" data-target=".constantContact">Connect</button>
                        </div>
                        <div class="modal fade constantContact" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">CONSTANTCONTACT</h4>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                                </div>
                                <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">Constant Contact Username </label>
                                        <input class="f1-email form-control" type="text" placeholder="Your Constant Contact Username">
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">Constant Contact Password   </label>
                                        <input class="f1-email form-control" type="text" placeholder="Your Constant Contact Password">
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="button" data-dismiss="modal">Save</button>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="text-center profile-details mt-3">
                            <h4>Constant Contact</h4>
                            <h6>Email Marketing</h6>
                        </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 box-col-6">
                        <div class="card custom-card">
                        <div class="card-profile"><img class="rounded-circle" src="{{asset('public/assets/images/9.png')}}" alt=""></div>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-square btn-secondary mt-3" type="button" data-toggle="modal" data-target=".mailvio">Connect</button>
                        </div>
                        <div class="modal fade mailvio" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">MAILVIO</h4>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                                </div>
                                <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">Mailvio API Key </label>
                                        <input class="f1-email form-control" type="text" placeholder="Your Mailvio API Key goes here">
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="button" data-dismiss="modal">Save</button>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="text-center profile-details mt-3">
                            <h4>Mailvio</h4>
                            <h6>Email Marketing</h6>
                        </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 box-col-6">
                        <div class="card custom-card">
                        <div class="card-profile"><img class="rounded-circle" src="{{asset('public/assets/images/12.png')}}" alt=""></div>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-square btn-secondary mt-3" type="button" data-toggle="modal" data-target=".sendInBlue">Connect</button>
                        </div>
                        <div class="modal fade sendInBlue" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">SENDINBLUE</h4>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                                </div>
                                <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">Sendinblue API Key </label>
                                        <input class="f1-email form-control" type="text" placeholder="Your Sendinblue API Key goes here">
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="button" data-dismiss="modal">Save</button>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="text-center profile-details mt-3">
                            <h4>Sendinblue</h4>
                            <h6>Email Marketing</h6>
                        </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 box-col-6">
                        <div class="card custom-card">
                        <div class="card-profile"><img class="rounded-circle" src="{{asset('public/assets/images/10.png')}}" alt=""></div>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-square btn-secondary mt-3" type="button" data-toggle="modal" data-target=".sendDio">Connect</button>
                        </div>
                        <div class="modal fade sendDio" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">Sendiio</h4>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                                </div>
                                <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">Sendiio API Token  </label>
                                        <input class="f1-email form-control" type="text" placeholder="Your Sendiio API Token goes here">
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">Sendiio API Secret  </label>
                                        <input class="f1-email form-control" type="text" placeholder="Your Sendiio API Secret goes here">
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="button" data-dismiss="modal">Save</button>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="text-center profile-details mt-3">
                            <h4>Sendiio</h4>
                            <h6>Email Marketing</h6>
                        </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 box-col-6">
                        <div class="card custom-card">
                        <div class="card-profile"><img class="rounded-circle" src="{{asset('public/assets/images/8.png')}}" alt=""></div>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-square btn-secondary mt-3" type="button" data-toggle="modal" data-target=".letsMail">Connect</button>
                        </div>
                        <div class="modal fade letsMail" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">LetsMail</h4>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                                </div>
                                <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">LetsMail API Token  </label>
                                        <input class="f1-email form-control" type="text" placeholder="Your Sendiio API Token goes here">
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">LetsMail API Secret  </label>
                                        <input class="f1-email form-control" type="text" placeholder="Your Sendiio API Secret goes here">
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="button" data-dismiss="modal">Save</button>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="text-center profile-details mt-3">
                            <h4>LetsMail</h4>
                            <h6>Email Marketing</h6>
                        </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 box-col-6">
                        <div class="card custom-card">
                        <div class="card-profile"><img class="rounded-circle" src="{{asset('public/assets/images/mailerlite.png')}}" alt=""></div>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-square btn-secondary mt-3" type="button" data-toggle="modal" data-target=".maileLite">Connect</button>
                        </div>
                        <div class="modal fade maileLite" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">MAILERLITE</h4>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                                </div>
                                <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">Mailerlite API Key</label>
                                        <input class="f1-email form-control" type="text" placeholder="Your Mailerlite API Key goes here">
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="button" data-dismiss="modal">Save</button>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="text-center profile-details mt-3">
                            <h4>Mailerlite</h4>
                            <h6>Email Marketing</h6>
                        </div>
                        </div>
                    </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="pills-warningcontact" role="tabpanel" aria-labelledby="pills-warningcontact-tab">
                    <div class="row mt-5">

                    
                    <div class="col-xl-3 box-col-6">
                        <div class="card custom-card">
                        <div class="card-profile"><img class="rounded-circle" src="{{asset('public/assets/images/6.png')}}" alt=""></div>
                        <div class="col-md-12 text-center">
                            <a href="https://authentication.logmeininc.com/login?service=https%3A%2F%2Fauthentication.logmeininc.com%2Foauth%2Fapprove%3Fclient_id%3D007d3a8e-5b8e-4af6-8db1-b8d52853439f%26response_type%3Dtoken%26redirect_uri%3Dhttps%253A%252F%252Fmyaccount.logmeininc.com%26login_theme%3Dgoto&theme=goto&tenant=alltenants" target="_blank" class="btn btn-square btn-secondary mt-3">Connect</a>
                        </div>

                        <div class="text-center profile-details mt-3">
                            <h4>GoToWebinar</h4>
                            <h6>Webinar Configurations</h6>
                        </div>
                        </div>
                    </div>

                    <div class="col-xl-3 box-col-6">
                        <div class="card custom-card">
                        <div class="card-profile"><img class="rounded-circle" src="{{asset('public/assets/images/20.png')}}" alt=""></div>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-square btn-secondary mt-3" type="button" data-toggle="modal" data-target=".meetVio">Connect</button>
                        </div>
                        <div class="modal fade meetVio" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">MEETVIO</h4>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                                </div>
                                <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">Meetvio Username</label>
                                        <input class="f1-email form-control" type="text" placeholder="Your Meetvio Username goes here">
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">Meetvio Password</label>
                                        <input class="f1-email form-control" type="text" placeholder="Your Meetvio Password goes here">
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="button" data-dismiss="modal">Save</button>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="text-center profile-details mt-3">
                            <h4>Meetvio</h4>
                            <h6>Webinar Configurations</h6>
                        </div>
                        </div>
                    </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="pills-warningcontactOther" role="tabpanel" aria-labelledby="pills-warningcontactOther-tab">
                    <div class="row mt-5">

                    <div class="col-xl-3 box-col-6">
                        <div class="card custom-card">
                        <div class="card-profile"><img class="rounded-circle" src="{{asset('public/assets/images/18.png')}}" alt=""></div>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-square btn-secondary mt-3" type="button" data-toggle="modal" data-target=".smtpService">Connect</button>
                        </div>
                        <div class="modal fade smtpService" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">SMTP</h4>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                                </div>
                                <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">SMTP Server</label>
                                        <input class="f1-email form-control" type="text" placeholder="Your SMTP Server">
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">SMTP Port</label>
                                        <input class="f1-email form-control" type="text" placeholder="Your SMTP Port">
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">SMTP Username</label>
                                        <input class="f1-email form-control" type="text" placeholder="Your SMTP Username">
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">SMTP Password</label>
                                        <input class="f1-email form-control" type="text" placeholder="Your SMTP Password">
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="button" data-dismiss="modal">Save</button>
                                <button class="btn btn-info" type="button" data-toggle="modal" data-target="#exampleModal">Help?</button>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">SMTP Help</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                <ul>
                                    <li>1. Please add ssl:// or tls:// as Prefix of your Smtp Server.</li>
                                    <li class="mt-2">2. Default <b>Port 25, 465 and 587 (SSL,TLS).</b> </li>
                                    <li class="mt-2"><b>Step 1:</b> You have to <a href="https://www.google.com/settings/security/lesssecureapps">Click here</a> and select Turn ON Access for less secure apps.</li>
                                    <li class="mt-2"><b>Step 2:</b> Provide the below details and save it.</li>
                                    <li class="mt-2"><b>Smtp Server :</b>  <span style="color: #fb2e63;">ssl://smtp.gmail.com</span></li>
                                    <li class="mt-2"><b>Smtp Port :</b>  <span style="color: #fb2e63;">465</span></li>
                                    <li class="mt-2"><b>Smtp Username :</b> <span style="color: #fb2e63;">your gmail Email-id</span></li>
                                    <li class="mt-2"><b>Smtp Password :</b> <span style="color: #fb2e63;">your gmail password</span></li>
                                    <li class="mt-2"><b>Step 3:</b> check the test mail after saved your SMTP Configuration settings.</li>
                                    <li class="mt-2"><span style="border: 2px solid #fb2e63;border-radius: 10px;padding: 10px;display: block;">Note: Still if you can't integrate with SMTP. Please Click here and allow access to google accounts for security purpose.</span></li>
                                </ul>
                                </div>
                                <div class="modal-footer">
                                <button class="btn btn-primary" type="button" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="text-center profile-details mt-3">
                            <h4>SMTP</h4>
                            <h6>SMTP Configurations</h6>
                        </div>
                        </div>
                    </div>

                    <div class="col-xl-3 box-col-6">
                        <div class="card custom-card">
                        <div class="card-profile"><img class="rounded-circle" src="{{asset('public/assets/images/20.png')}}" alt=""></div>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-square btn-secondary mt-3" type="button" data-toggle="modal" data-target=".youZing">Connect</button>
                        </div>
                        <div class="modal fade youZing" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">YOUZIGN</h4>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                                </div>
                                <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">Youzign API Key</label>
                                        <input class="f1-email form-control" type="text" placeholder="Your Youzign API key goes here">
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">Youzign Token </label>
                                        <input class="f1-email form-control" type="text" placeholder="Your Youzign Token goes here">
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="button" data-dismiss="modal">Save</button>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="text-center profile-details mt-3">
                            <h4>Youzign</h4>
                            <h6>Social Media Graphics</h6>
                        </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 box-col-6">
                        <div class="card custom-card">
                        <div class="card-profile"><img class="rounded-circle" src="{{asset('public/assets/images/rewardsly_logo_t.png')}}" alt=""></div>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-square btn-secondary mt-3" type="button" data-toggle="modal" data-target=".rewardsLy">Connect</button>
                        </div>
                        <div class="modal fade rewardsLy" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel"> REWARDSLY</h4>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                                </div>
                                <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f1-first-name">Rewardsly API Key</label>
                                        <input class="f1-email form-control" type="text" placeholder="Your Rewardsly API Key goes here">
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="button" data-dismiss="modal">Save</button>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="text-center profile-details mt-3">
                            <h4>Rewardsly</h4>
                            <h6>Reward Program</h6>
                        </div>
                        </div>
                    </div>

                    </div>
                </div>
                </div>
            </div>
            </div>
    </div>
    <!-- =================================Store Form Ends================================= -->
@endsection

@section('header_links')
  <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/select2.css')}}">
@endsection

@section('footer_links')
    <script src="{{asset('public/assets/js/tooltip-init.js')}}"></script>
    <script src="{{asset('public/assets/js/form-wizard/form-wizard-three.js')}}"></script>
      
    <script>
    //Barcode pattern select
    $(document).on('click', '.barcodeSelect', function(e) {
      $(".barcodeSelect").removeClass("active");
      $(this).addClass("active")
    });

    // Color Change
      $('#headerBGColor').change(function(){ // <-- use change event
             $('.header-bg').css('background-color', $(this).val());
       }); 
       $('#headerBGColor2').change(function(){ // <-- use change event
             $('.templatebg2').css('background-color', $(this).val());
       }); 
       $('#frameColor').change(function(){ // <-- use change event
             $('.wrapper').css('background-color', $(this).val());
       });
       $('#bodyColor').change(function(){ // <-- use change event
             $('.bg-color').css('background-color', $(this).val());
       }); 
       $('#secBackColor').change(function(){ // <-- use change event
             $('.card-1').css('background-color', $(this).val());
       });
       $('#themeColor').change(function(){ // <-- use change event
             $('.tempTittle').css('color', $(this).val());
       });
       $('#productCOlor').change(function(){ // <-- use change event
             $('.productDescri').css('color', $(this).val());
       }); 
       $('#buttonBackColor').change(function(){ // <-- use change event
             $('.proButton').css('background-color', $(this).val());
       }); 
       $('#buttonTextColor').change(function(){ // <-- use change event
             $('.proButton').css('color', $(this).val());
       }); 
       $('#buttonBorderColor').change(function(){ // <-- use change event
             $('.proButton').css('border-color', $(this).val());
       }); 
       $('#offerTextColor').change(function(){ // <-- use change event
             $('.offerColor').css('color', $(this).val());
       }); 
       

    //Image Change
      function preview_image(event) {
        var reader = new FileReader();
        reader.onload = function(){
          var output = document.getElementById('output_image');
          output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
      }

      //Font Color Change
      $('#hedaerFontcolor').change(function(){ // <-- use change event
             $('.template-title').css('color', $(this).val());
       }); 
       $('#textColor1').change(function(){ // <-- use change event
             $('.text_color1').css('color', $(this).val());
       }); 
        $('#textColor2').change(function(){ // <-- use change event
             $('.text_color2').css('color', $(this).val());
       });  
        $('#textColor3').change(function(){ // <-- use change event
             $('.text_color3').css('color', $(this).val());
       }); 
        $('#textColor4').change(function(){ // <-- use change event
             $('.text_color4').css('color', $(this).val());
       }); 
        $('#textColor5').change(function(){ // <-- use change event
             $('.text_color5').css('color', $(this).val());
       });
        $('#textColor6').change(function(){ // <-- use change event
             $('.text_color6').css('color', $(this).val());
       }); 
        $('#numberColor').change(function(){ // <-- use change event
             $('.number_color').css('color', $(this).val());
       }); 
        $('#amountColor').change(function(){ // <-- use change event
             $('.card-price-1').css('color', $(this).val());
       }); 

       //Checkbox Change Function
       $('#storeURLDiv').hide();
       $('#storeURLSection').hide();
       $('input[type=checkbox][name=storeURL]').change(function() {
          if (this.checked) {
              $('#storeURLDiv').show();
              $('#storeURLSection').show();
          }
          else{
            $('#storeURLDiv').hide();
            $('#storeURLSection').hide();
          }
      });

      //Image click to show another div (image)
      $('.imgs').click(function(){
        var idimg = $(this).attr('id');
        var srcimg = $(this).attr('src');
        //alert('ID is: '+ idimg+ '\n SRC: '+ srcimg);
        $(".img2").attr('src',srcimg);
      });

      //Payment Integration onchange jquery
      $('#swiftCode').hide();
      $('#ibanNumber').hide();
      $('#otherCode').hide();
      $('input[type=radio][name=paymentRadio]').change(function() {
          if (this.value == 'USA') {
            $('#swiftCode').hide();
            $('#ibanNumber').hide();
            $('#otherCode').hide();
            $('#liveMode').show();
            $('#aacountName').show();
            $('#accountNumber').show();
            $('#abaNumber').show();
            $('#comapnyName').show();
            $('#addressPermanet').show();
            $('#nameBank').show();
          }
          else if (this.value == 'Other Countries') {
            $('#swiftCode').show();
            $('#ibanNumber').show();
            $('#otherCode').show();
            $('#liveMode').show();
            $('#aacountName').show();
            $('#accountNumber').show();
            $('#abaNumber').hide();
            $('#comapnyName').show();
            $('#addressPermanet').show();
            $('#nameBank').show();
          }
          else{
            $('#swiftCode').hide();
            $('#ibanNumber').hide();
            $('#otherCode').hide();
            $('#liveMode').hide();
            $('#aacountName').hide();
            $('#accountNumber').hide();
            $('#abaNumber').hide();
            $('#comapnyName').hide();
            $('#addressPermanet').hide();
            $('#nameBank').hide();
          }
      });
  </script>
@endsection


