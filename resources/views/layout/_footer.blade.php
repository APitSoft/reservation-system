            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 footer-copyright">
                            <p class="mb-0">Copyright 2019 © Creative All rights reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <p class="pull-right mb-0">Hand crafted & made with<i class="fa fa-heart"></i></p>
                        </div>
                    </div>
                </div>
            </footer>
            </div>
            </div>

            <!-- latest jquery-->
            <script src="{{asset('public/assets/js/jquery-3.2.1.min.js')}}"></script>
            <!-- Bootstrap js-->
            <script src="{{asset('public/assets/js/bootstrap/popper.min.js')}}"></script>
            <script src="{{asset('public/assets/js/bootstrap/bootstrap.js')}}"></script>
            <!-- feather icon js-->
            <script src="{{asset('public/assets/js/icons/feather-icon/feather.min.js')}}"></script>
            <script src="{{asset('public/assets/js/icons/feather-icon/feather-icon.js')}}"></script>
            <!-- Sidebar jquery-->
            <script src="{{asset('public/assets/js/sidebar-menu.js')}}"></script>
            <script src="{{asset('public/assets/js/config.js')}}"></script>

            @yield('footer_links')

            <!-- Theme js-->
            <script src="{{asset('public/assets/js/script.js')}}"></script>

            @stack('footer-custom-scripts')