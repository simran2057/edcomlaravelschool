    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <!-- Single item -->
                    <div class="col-md-4 col-sm-6 item equal-height">
                        <div class="f-item about">
                            <h4>About</h4>
                            @foreach ($sites as $site)
                            @if ($site->site_key=='welcome')
                            <p>
                                {{$site->site_value}}
                            </p>
                            @endif
                            @endforeach
                            <ul>
                                <li>
                                    @foreach ($sites as $site)
                            @if ($site->site_key=='email')
                                    <p>Email <span><a href="mailto:info@example.com">{{$site->site_value}}</a></span></p>
                                </li>
                                @endif
                            @endforeach
                                <li>
                                    @foreach ($sites as $site)
                            @if ($site->site_key=='location')
                                    <p>Office <span>{{$site->site_value}}</span></p>
                                    @endif
                                    @endforeach
                                </li>
                             
                            </ul>
                           
                        </div>
                         <div style="padding-top: 8px;">
                             <h5 style="margin-top:8px">Login on Social Media</h2>
                                   <ul style="display: flex; justify-content:space-evenly">
                                                            <li class="facebook">
                                                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                                            </li>
                                                            <li class="twitter">
                                                                <a href="https://twitter.com/?lang=en"><i class="fab fa-twitter"></i></a>
                                                            </li>
                                                            <li class="dribbble">
                                                                <a href="https://dribble.com/"><i class="fab fa-dribbble"></i></a>
                                                            </li>
                                                            <li class="youtube">
                                                                <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                                                            </li>
                                                        </ul>
                            </div>
                    </div>
                    <!-- End Single item -->

                    <!-- Single item -->
                    <div class="col-md-2 col-sm-6 item equal-height">
                        <div class="f-item link">
                            <h4>Quick Links</h4>
                            <ul>
                                <li>
                                    <a href="{{'index'}}"><i class="ti-angle-right"></i> Home</a>
                                </li>
                                <li>
                                    <a href="{{'aboutus'}}"><i class="ti-angle-right"></i> About Us</a>
                                </li>
                                <li>
                                    <a href="{{'notices'}}"><i class="ti-angle-right"></i> Examination</a>
                                </li>
                                <li>
                                    <a href="{{'courses'}}"><i class="ti-angle-right"></i> Courses</a>
                                </li>
                                <li>
                                    <a href="{{'teachers'}}"><i class="ti-angle-right"></i> Teachers</a>
                                </li>
                                <li>
                                    <a href="{{'contacts'}}"><i class="ti-angle-right"></i> Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single item -->

                    <!-- Single item -->
                    <div class="col-md-2 col-sm-6 item equal-height">
                        <div class="f-item link">
                            <h4>Activities</h4>
                            <ul>
                                <li>
                                    <a href="{{'galleries'}}"><i class="ti-angle-right"></i> Gallery</a>
                                </li>
                                <li>
                                    <a href="{{'events'}}"><i class="ti-angle-right"></i>Events</a>
                                </li>
                                <li>
                                    <a href="{{'blogs'}}"><i class="ti-angle-right"></i>Blog</a>
                                </li>
                                <li>
                                    <a href="{{'news'}}"><i class="ti-angle-right"></i> News</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single item -->

                    <!-- Single item -->
                    <div class="col-md-4 col-sm-6 item equal-height">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box">
                            
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112488.24760131458!2d83.88657799411769!3d28.229855807896243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995937bbf0376ff%3A0xf6cf823b25802164!2sPokhara!5e0!3m2!1sen!2snp!4v1631172772593!5m2!1sen!2snp" width="350" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                     
                            </div>
                        </div>
                    </div>
                    <!-- End Single item -->
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy;  2021.Xdezo Technologies</p>
                    </div>
                    <div class="col-md-6 text-right link">
                        <ul>
                            <li>
                                <a href="#">Terms of user</a>
                            </li>
                            <li>
                                <a href="#">License</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{asset('front-assets/js/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('front-assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front-assets/js/equal-height.min.js')}}"></script>
    <script src="{{asset('front-assets/js/jquery.appear.js')}}"></script>
    <script src="{{asset('front-assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('front-assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('front-assets/js/modernizr.custom.13711.js')}}"></script>
    <script src="{{asset('front-assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('front-assets/js/wow.min.js')}}"></script>
    <script src="{{asset('front-assets/js/progress-bar.min.js')}}"></script>
    <script src="{{asset('front-assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('front-assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('front-assets/js/count-to.js')}}"></script>
    <script src="{{asset('front-assets/js/YTPlayer.min.js')}}"></script>
    <script src="{{asset('front-assets/js/loopcounter.js')}}"></script>
    <script src="{{asset('front-assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('front-assets/js/bootsnav.js')}}"></script>
    <script src="{{asset('front-assets/js/main.js')}}"></script>

</body>
</html>