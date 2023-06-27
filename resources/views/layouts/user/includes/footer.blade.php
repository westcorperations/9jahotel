
    <!-- ================================
             START FOOTER AREA
      ================================= -->
      <section class="footer-area section-bg padding-top-100px padding-bottom-30px">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 responsive-column">
                    <div class="footer-item">
                        <div class="footer-logo padding-bottom-30px">
                            <a href="index.html" class="foot__logo"><img src="images/logo.png" alt="logo" /></a>
                        </div>
                        <!-- end logo -->
                        <ul class="list-items pt-3">
                            <li>
                                4th Floor, Rose Calmo House,<br />
                                110 Bamgbose Street,<br />
                                Lagos Island,<br />
                                Lagos
                            </li>
                            <li>+234-700-077-0007</li>
                            <li><a href="mailto:support@9jahotel.com">support@9jahotel.com</a></li>
                        </ul>
                    </div>
                    <!-- end footer-item -->
                </div>
                <!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column">
                    <div class="footer-item">
                        <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">
                            Company
                        </h4>
                        <ul class="list-items list--items">
                            <li><a href="public/about_us">About us</a></li>
                            <li><a href="public/guest_policy">Guest Policy</a></li>
                            <li><a href="public/terms_conditions">Terms &amp; Conditions</a></li>
                            <li><a href="public/privacy_policy">Privacy Policy</a></li>
                            <li><a href="public/partner">Hotel Login</a></li>
                            <li><a href="public/add_property">Add Your Hotel</a></li>
                        </ul>
                    </div>
                    <!-- end footer-item -->
                </div>
                <!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column">
                    <div class="footer-item">
                        <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">
                            Other Links
                        </h4>
                        <ul class="list-items list--items">
                           @guest
                               
                          
                            <li><a href="#" class="theme-btn theme-btn-small theme-btn-transparent mr-1"
                                    data-toggle="modal" data-target="#signupPopupForm">Guest Sign Up</a></li>
                            <li><a href="#" class="theme-btn theme-btn-small" data-toggle="modal"
                                    data-target="#loginPopupForm" style="color:#FFF;">Guest Sign In</a></li>
                             @endguest
                             @auth
                             <li>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                <button type="submit" class="theme-btn theme-btn-small"
                                 style="color:#FFF;">Logout</button>
                                </form>
                            </li>
                            @endauth

                            <li><a href="group_booking.html">Group Booking</a></li>
                            <li><a href="#">Nigerian Domestic Flight</a></li>
                            <li><a href="#">Nigerian Hotels</a></li>
                            <li><a href="#">Nigerian Vacation Packages</a></li>
                        </ul>
                    </div>
                    <!-- end footer-item -->
                </div>
                <!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column">
                    <div class="footer-item">
                        <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">
                            Subscribe now
                        </h4>
                        <p class="footer__desc pb-3">
                            Subscribe for latest updates & promotions
                        </p>
                        <div class="contact-form-action">
                            <form action="#">
                                <div class="input-box">
                                    <label class="label-text">Enter email address</label>
                                    <div class="form-group mb-0">
                                        <span class="la la-envelope form-icon"></span>
                                        <input class="form-control" type="email" name="email"
                                            placeholder="Email address" />
                                        <button class="theme-btn theme-btn-small submit-btn" type="submit">
                                            Go
                                        </button>
                                        <span class="font-size-14 pt-1"><i class="la la-lock mr-1"></i>Your information
                                            is safe
                                            with us.</span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end footer-item -->
                </div>
                <!-- end col-lg-3 -->
            </div>
            <!-- end row -->
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="term-box footer-item">
                        <ul class="list-items list--items d-flex align-items-center">
                            <li><a href="public/terms_conditions">Terms & Conditions</a></li>
                            <li><a href="public/privacy_policy">Privacy Policy</a></li>
                            <li><a href="public/guest_policy">Guest Policy</a></li>
                            <li><a href="#">Help Center</a></li>
                        </ul>
                    </div>
                </div>
                <!-- end col-lg-8 -->
                <div class="col-lg-4">
                    <div class="footer-social-box text-right">
                        <ul class="social-profile">
                            <li>
                                <a href="#"><i class="lab la-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="lab la-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="lab la-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="lab la-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end col-lg-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
        <div class="section-block mt-4"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="copy-right padding-top-30px">
                        <p class="copy__desc">
                            &copy; Copyright 2022. All rights reserved
                            <span class="la la-heart"></span>
                            <a href="#">9jahotels</a>
                        </p>
                    </div>
                    <!-- end copy-right -->
                </div>
                <!-- end col-lg-7 -->
                <div class="col-lg-5">
                    <div class="copy-right-content d-flex align-items-center justify-content-end padding-top-30px">
                        <h3 class="title font-size-15 pr-2">We Accept</h3>
                        <img src="images/payment-img.png" alt="" />
                    </div>
                    <!-- end copy-right-content -->
                </div>
                <!-- end col-lg-5 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end footer-area -->
    <!-- ================================
             START FOOTER AREA
      ================================= -->

    <!-- start back-to-top -->
    <div id="back-to-top">
        <i class="la la-angle-up" title="Go top"></i>
    </div>
    <!-- end back-to-top -->

    <!-- end modal-shared -->
    <div class="modal-popup">
        <div class="modal fade" id="signupPopupForm" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div>
                            <h5 class="modal-title title" id="exampleModalLongTitle">
                                Sign Up
                            </h5>
                            <p class="font-size-14">Hello! Welcome Create a New Account</p>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="la la-close"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="contact-form-action">
                            <form method="post" id="signupform">
                                @csrf
                                <div id="errors-list"></div>

                                <div class="input-box">
                                    <label class="label-text">Full Name</label>
                                    <div class="form-group">
                                        <span class="la la-user form-icon"></span>
                                        <input class="form-control" type="text" name="name" required
                                            placeholder="Type your full name" id="registerfullName" />
                                    </div>
                                </div>
                                <!-- end input-box -->
                                <div class="input-box">
                                    <label class="label-text">Email Address</label>
                                    <div class="form-group">
                                        <span class="la la-envelope form-icon"></span>
                                        <input class="form-control" type="email" name="email" required
                                            placeholder="Type your email" id="registeremail" />
                                    </div>
                                </div>
                                <!-- end input-box -->
                                <div class="input-box">
                                    <label class="label-text">Phone Number</label>
                                    <div class="form-group">
                                        <span class="la la-lock form-icon"></span>
                                        <input class="form-control" type="tel" name="phone" required
                                            placeholder="Type your mobile number" id="registerphone" />
                                    </div>
                                </div>
                                <!-- end input-box -->
                                <div class="input-box">
                                    <label class="label-text">Password</label>
                                    <div class="form-group">
                                        <span class="la la-lock form-icon"></span>
                                        <input class="form-control" type="password" name="password" required
                                            placeholder="type password" id="registerpassword" />
                                    </div>
                                </div>
                                <!-- end input-box -->
                                <div class="btn-box pt-3 pb-4">
                                    <button type="submit" class="theme-btn w-100">
                                        Register Account
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- end contact-form-action -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal-popup -->

    <!-- end modal-shared -->
    <div class="modal-popup">
        <div class="modal fade" id="loginPopupForm" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div>
                            <h5 class="modal-title title" id="exampleModalLongTitle2">
                                Login
                            </h5>
                            <p class="font-size-14">Hello! Welcome to your account</p>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="la la-close"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="contact-form-action">
                            <form method="post" id="loginForm">
                                @csrf
                                <div id="errors-list"></div>
                                <div class="input-box">
                                    <label class="label-text">Email</label>
                                    <div class="form-group">
                                        <span class="la la-user form-icon"></span>
                                        <input class="form-control" type="email" name="email" required
                                            placeholder="Type your email" id="loginemail" />
                                    </div>
                                </div>
                                <!-- end input-box -->
                                <div class="input-box">
                                    <label class="label-text">Password</label>
                                    <div class="form-group mb-2">
                                        <span class="la la-lock form-icon"></span>
                                        <input class="form-control" type="password" name="password"
                                            placeholder="Type your password" id="loginpassword" />
                                    </div>
                                </div>
                                <!-- end input-box -->
                                <div class="btn-box pt-3 pb-4">
                                    <button type="submit" class="theme-btn w-100">
                                        Login Account
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- end contact-form-action -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal-popup -->
    @section('scripts')

<script type="text/javascript">
//  signup form function
 $('#signupform').submit(function (e) { 
    e.preventDefault();
    // 
    var e = this;
    // console.log($(this).serialize());
    $.ajax({
        type: "POST",
        url: "/register",
        data: $(this).serialize(),
        dataType: "json",
        success: function (data) {
            if (data.status) {
          window.location = data.redirect;
        } else {
          $(".alert").remove();
          $.each(data.errors, function(key, val) {
            $("#errors-list").append("<div class='alert alert-danger'>" + val + "</div>");
          });

        }
    }
    });
 });
//  login function 
 $('#loginForm').submit(function (e) { 
    e.preventDefault();
    // 
    var e = this;
    // console.log($(this).serialize());
    $.ajax({
        type: "POST",
        url: "/login",
        data: $(this).serialize(),
        dataType: "json",
        success: function (data) {
            if (data.status) {
          window.location = data.redirect;
        } else {
          $(".alert").remove();
          $.each(data.errors, function(key, val) {
            $("#errors-list").append("<div class='alert alert-danger'>" + val + "</div>");
          });

        }
    }
    });
 });

   
    
  </script>
@endsection