            <!-- Page Sidebar Start-->
            <div class="page-sidebar iconcolor-sidebar">
                <div class="main-header-left d-none d-lg-block">
                    <div class="logo-wrapper"><a href="{{route('dashboard')}}"><img src="{{asset('public/assets/images/creative-logo.png')}}" alt=""></a></div>
                </div>
                <div class="sidebar custom-scrollbar">
                    <ul class="sidebar-menu">
                        <li><a class="sidebar-header {{request()->routeIs('dashboard') ? 'active' : ''}}" href="{{route('dashboard')}}"><i data-feather="home"></i><span>DASHBOARD</span></a></li>

                        <li><a class="sidebar-header {{request()->routeIs('store.index') ? 'active' : ''}}" href="{{route('store.index')}}"><i data-feather="airplay"></i><span>MY STORE</span></a></li>

                        <li><a class="sidebar-header {{request()->routeIs('product.index') ? 'active' : ''}}" href="{{route('product.index')}}"><i data-feather="anchor"></i><span> MY PRODUCTS</span></a></li>

                        <li><a class="sidebar-header {{request()->routeIs('integration.index') ? 'active' : ''}}" href="{{route('integration.index')}}"><i data-feather="disc"></i><span>INTEGRATIONS</span></i></a></li>
                        
                        <li><a class="sidebar-header {{request()->routeIs('clients') ? 'active' : ''}}" href="{{route('clients')}}"><i data-feather="sidebar"></i><span>MANAGE CLIANTS</span></a></li>

                        <li><a class="sidebar-header {{request()->routeIs('members') ? 'active' : ''}}" href="{{route('members')}} "><i data-feather="layout"></i><span>TEAM MEMBER</span></a>
                        </li>

                        <li><a class="sidebar-header {{request()->routeIs('order.index') ? 'active' : ''}}" href="{{route('order.index')}}"><i data-feather="align-justify"></i><span>MY ORDERS</span></a></li>
                        
                        <li><a class="sidebar-header {{request()->routeIs('analytic.index') ? 'active' : ''}}" href="{{route('analytic.index')}}"><i data-feather="cloud-lightning"></i><span>ANALYTICS</span></a></li>

                        <li><a class="sidebar-header {{request()->routeIs('customer.index') ? 'active' : ''}}" href="{{route('customer.index')}}"><i data-feather="clipboard"></i><span>MANAGE CUSTOMER</span></a></li>

                        <li><a class="sidebar-header {{request()->routeIs('subscriber.index') ? 'active' : ''}}" href="{{route('subscriber.index')}}"><i data-feather="edit-3"></i><span>SUBSCRIBERS</span></a>
                        </li>

                        <!-- settings dropdown button starts -->
                        <li><a class="sidebar-header" href="#"><i data-feather="settings"></i><span> SETTINGS</span><i class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="coupon.html" data-original-title="" title=""><i class="fa fa-circle"></i>Coupon</a></li>
                                <li><a href="popup_banners.html" data-original-title="" title=""><i class="fa fa-circle"></i>Popup Banners</a></li>
                                <li><a href="combo_offer.html" data-original-title="" title=""><i class="fa fa-circle"></i>Combo Offer</a></li>
                                <li><a href="email_notifications.html" data-original-title="" title=""><i class="fa fa-circle"></i>Email Notifications</a></li>
                                <li><a href="category_reorder.html" data-original-title="" title=""><i class="fa fa-circle"></i>Category Reorder</a></li>
                                <li><a href="product_reorder.html" data-original-title="" title=""><i class="fa fa-circle"></i>Product Reorder</a></li>
                                <li><a href="webhook_url.html" data-original-title="" title=""><i class="fa fa-circle"></i>Webhook URL</a></li>
                                <li><a href="embed_code.html" data-original-title="" title=""><i class="fa fa-circle"></i>Embed Code(Menu Page)</a></li>
                                <li><a href="privacy_terms.html" data-original-title="" title=""><i class="fa fa-circle"></i>Privacy &amp; Terms</a></li>
                                <li><a href="other_settings.html" data-original-title="" title=""><i class="fa fa-circle"></i>Other Settings</a></li>
                                <li><a href="language_settings.html" data-original-title="" title=""><i class="fa fa-circle"></i>Language Settings</a></li>
                            </ul>
                        </li>
                        <!-- settings dropdown button ends -->
                        <li><a class="sidebar-header" href="#"><i data-feather="bookmark"></i><span>SUPPORT</span></a></li>
                        <!-- all page link end here -->
                    </ul>
                </div>
            </div>
            <!-- Page Sidebar Ends-->

            <!-- Right sidebar Start-->
            <!-- Right sidebar Ends-->