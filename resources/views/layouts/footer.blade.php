        <!-- Start Footer aera -->
        <footer class="rbt-footer footer-style-1">
            <div class="footer-top">
                <div class="container">
                    <div class="row row--15 mt_dec--30">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--30">
                            <div class="footer-widget">
                                <div class="logo logo-dark">
                                    <a href="index.html">
                                        <img src="images/xtragrad-logo.png" alt="Edu-cause">
                                    </a>
                                </div>
                                <div class="logo d-none logo-light">
                                    <a href="index.html">
                                        <img src="images/logo-light.png" alt="Edu-cause">
                                    </a>
                                </div>

                                <p class="description mt--20">We’re always in search for talented
                                    and motivated people. Don’t be shy introduce yourself!
                                </p>

                                <div class="contact-btn mt--30">
                                    <a class="rbt-btn hover-icon-reverse btn-border-gradient radius-round" href="{{ route('contact') }}">
                                        <div class="icon-reverse-wrapper">
                                            <span class="btn-text">Contact With Us</span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6 col-12 mt--30">
                            <div class="footer-widget">
                                <h5 class="ft-title">Course categories</h5>
                                {{-- <ul class="ft-link">
                                    @foreach($categories as $category)
                                        <li>
                                            <a href="#">{{ $category->name }}</a>
                                        </li>
                                    @endforeach
                                </ul> --}}
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 col-sm-6 col-12 mt--30">
                            <div class="footer-widget">
                                <h5 class="ft-title">Our Company</h5>
                                <ul class="ft-link">
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                    <li><a href="#">Terms of service</a></li>
                                    <li><a href="privacy-policy.html">Privacy policy</a></li>
                                    <li><a href="blog.html">About Us</a></li>
                                    {{-- <li>
                                        <a href="instructor.html">Instructor</a>
                                    </li>
                                    <li>
                                        <a href="event-list.html">Events</a>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--30">
                            <div class="footer-widget">
                                <h5 class="ft-title">Get Contact</h5>
                                <ul class="ft-link">
                                    <li><span>Phone:</span> <a href="#">93478 39951</a></li>
                                    <li><span>E-mail:</span> <a href="mailto:support@xtragrad.in ">support@xtragrad.in</a></li>
                                    <li><span>Location:</span> plot 51, jayabheri enclave, Gachibowli, Hyderabad - 500081</li>
                                </ul>
                                <ul class="social-icon social-default justify-content-start mt--20">
                                    <li><a href="https://www.facebook.com/">
                                            <i class="feather-facebook"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.twitter.com">
                                            <i class="feather-twitter"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.instagram.com/">
                                            <i class="feather-instagram"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.linkdin.com/">
                                            <i class="feather-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rbt-separator-mid">
                <div class="container">
                    <hr class="rbt-separator m-0">
                </div>
            </div>
            <!-- Start Copyright Area  -->
            <div class="copyright-area copyright-style-1 ptb--20">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12">
                            <p class="rbt-link-hover text-center text-lg-start">Copyright © 2025 <a href="https://foxgeek.in/">FoxGeek Technologies Pvt Ltd</a> All Rights Reserved</p>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12">
                            <ul class="copyright-link rbt-link-hover justify-content-center justify-content-lg-end mt_sm--10 mt_md--10">
                                {{-- <li><a href="#">Terms of service</a></li> --}}
                                {{-- <li><a href="privacy-policy.html">Privacy policy</a></li> --}}
                                {{-- <li><a href="subscription.html">Subscription</a></li> --}}
                                <li><a href="login.html">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Copyright Area  -->
        </footer>
        <!-- End Footer aera -->
    </main>

    <div class="rbt-progress-parent">
        <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>

    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="js/modernizr.min.js"></script>
    <!-- jQuery JS -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- sal.js -->
    <script src="js/sal.js"></script>
    <!-- Dark Mode Switcher -->
    <script src="js/js.cookie.js"></script>
    <script src="js/jquery.style.switcher.js"></script>
    <script src="js/swiper.js"></script>
    <script src="js/jquery-appear.js"></script>
    <script src="js/odometer.js"></script>
    <script src="js/backtotop.js"></script>
    <script src="js/isotop.js"></script>
    <script src="js/imageloaded.js"></script>

    <script src="js/wow.js"></script>
    <script src="js/waypoint.min.js"></script>
    <script src="js/easypie.js"></script>
    <script src="js/text-type.js"></script>
    <script src="js/jquery-one-page-nav.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/magnify-popup.min.js"></script>
    <script src="js/paralax-scroll.js"></script>
    <script src="js/paralax.min.js"></script>
    <script src="js/countdown.js"></script>
    <script src="js/plyr.js"></script>
    <script src="js/jodit.min.js"></script>
    <script src="js/Sortable.min.js"></script>



    <!-- Main JS -->
    <script src="js/main.js"></script>


</body></html>