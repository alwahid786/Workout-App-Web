@extends('layouts.website.default')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.1/flexslider.css">
<style>
    .hero-section-about {
        background-image: url("{{asset('public/assets/trainerimages/about-us.jpg')}}");
        background-repeat: no-repeat;
        background-size: cover;
        padding-top: 6rem;
        padding-bottom: 6rem;
        text-align: center;
    }

    .hero-left-content h1 {
        font-size: 3.9rem;
        color: #ffff;
        font-weight: bold;
    }

    .hero-left-content p {
        font-size: 22px;
        font-weight: 300;
        line-height: 32px;
    }

    .left-section-par p {
        color: #ffff;
        font-size: 18px;
        font-weight: 300;
        line-height: 26px;
        letter-spacing: normal;
    }

    .right-section-img img {
        width: 100%;
        max-width: 70%;
        min-width: 300px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .make-diff-section {
        background-color: #F9F9F9;
        /* padding-top: 200px; */
        text-align: center;
    }

    .make-diff-content h1 {
        font-size: 2.7rem;
        line-height: 40px !important;
    }

    .make-diff-content p {
        font-size: 18px !important;
        font-weight: 300 !important;
        line-height: 26px !important;
        letter-spacing: normal !important;
    }

    .ceo-message-box {
        background-color: #111418 !important;
        border-radius: 8px;
        position: relative;
        margin-top: 250px;
    }

    .profile-section {
        display: flex;
        position: absolute;
        top: -25%;
    }

    .ceo-image img {
        width: 200px;
        height: 200px;
        border-radius: 50%;
    }

    .ceo-profile-content p {
        color: #ffff;
    }

    .ceo-message {
        color: #E37048;
        font-size: 22px;
        font-weight: 300;
        line-height: 32px;
    }

    .ceo-message-quote p {
        color: #fff;
        font-size: 22px;
        font-weight: 300;
        line-height: 32px;
    }

    .ceo-profile-content p:nth-of-type(1) {
        font-size: 2.4rem;
        font-weight: 700;
        color: #E37048;
    }

    .ceo-profile-content p:nth-of-type(2) {
        font-size: 1.2rem;
        font-weight: 300;
        color: #E37048;
    }

    .profile-section {
        display: flex;
        position: absolute;
        top: -25%;
    }

    .carousel-content h1 {
        font-size: 3.5rem;
        font-weight: 700;
    }

    .carousel-content p {
        font-size: 22px;
        font-weight: 300;

    }

    .carousel-content hr {
        width: 320px;
        background: #E37048;
        margin: 0 auto;
    }

    .ser-left-session {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        font-size: 1rem;
        font-weight: normal;
        background: #E37048;
        color: #ffff;
        cursor: pointer;
        position: absolute;
        top: 50%;
        left: 25px;
        transform: translateX(-50%) translateY(-50%);
        z-index: 999;

    }

    .fa-arrow-left:before {
        position: absolute;

        top: 13px !important;
        left: 14px !important;
    }

    .fa-arrow-right:before {
        position: absolute;

        top: 13px !important;
        left: 17px !important;
    }

    .ser-right-session {
        background: #E37048;
        color: #ffff;
        font-size: 1rem;
        font-weight: normal;
        width: 45px;
        height: 45px;
        border-radius: 50%;
        cursor: pointer;
        position: absolute;
        top: 50%;
        right: -20px;
        transform: translateX(-50%) translateY(-50%);
        z-index: 999;
    }

    @media screen and (max-width:767px) {
        .right-section-img img {
            width: 100%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, 15%);
        }

        .hero-left-content h1 {
            font-size: 3rem;
        }

        .hero-left-content p {
            font-size: 1.1rem;
            font-weight: 300;
            line-height: 32px;
        }

        .left-section-par p {
            color: #ffff;
            font-size: 1.1rem;
            text-align: center;
        }

        .make-diff-content p {
            font-size: 18px;
        }

        .make-diff-content h1 {
            font-size: 2.4rem;
            line-height: 40px;
        }

        .make-diff-section {
            background-color: #F9F9F9;
            /* padding-top: 200px; */
            text-align: center;
            /* margin-top: 900px; */
        }

        .ceo-profile-content p:nth-of-type(1) {
            font-size: 2rem;
            font-weight: 700;
            color: #E37048;
        }

        .profile-section {

            top: -15%;
        }

        .carousel-content h1 {
            font-size: 2.5rem;
            font-weight: 700;
        }

        .carousel-content p {
            font-size: 16px;
            font-weight: 300;
        }

    }

    @media screen and (max-width:576px) {
        .right-section-img img {
            width: 100%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, 15%);
        }

        .hero-left-content h1 {
            font-size: 2.5rem;
        }

        .hero-left-content p {
            font-size: 0.9rem;
            font-weight: 300;
            line-height: 32px;
        }

        .left-section-par p {
            color: #ffff;
            font-size: 0.9rem;
            text-align: center;
        }

        .make-diff-content p {
            font-size: 0.9rem;

        }

        .make-diff-content h1 {
            font-size: 2rem;
            line-height: 40px;
        }

        .ceo-image img {
            width: 130px;
            height: 130px;
            border-radius: 50%;
        }

        .ceo-profile-content p:nth-of-type(1) {
            font-size: 1.4rem;
            font-weight: 700;
            color: #E37048;
        }

        .ceo-profile-content p:nth-of-type(2) {
            font-size: 0.9rem;
            font-weight: 300;
            color: #E37048;
        }

        .profile-section {
            display: flex;
            position: absolute;
            top: -12%;
        }

        .ceo-message {
            color: #E37048;
            font-size: 13px;
            font-weight: 300;
            line-height: 32px;
        }

        .ceo-message-quote p {
            font-size: 13px;
        }

        .ceo-message-box {
            margin-top: 160px;
        }

        .make-diff-section {
            background-color: #F9F9F9;
            /* padding-top: 80px; */
            text-align: center;
        }

        .carousel-content h1 {
            font-size: 1.8rem;
            font-weight: 700;
        }

        .carousel-content p {
            font-size: 0.8rem;
            font-weight: 300;
        }


    }

    .modern-approach-img img {
        width: 100%;
        height: 100%;
        max-height: 600px;
        object-fit: cover;
    }


    .Transforming-img img {
        height: 100%;
        width: 100%;
        max-height: 600px;
        object-fit: cover;
    }
</style>
@include('includes.website.navbar')
<div class="container-fluid hero-section-about">
    <div class="container-fluid hero-section-wrapper-about" data-aos="fade-left">
        <div class="col-12 hero-left text-center text-md-left">
            <div class="hero-left-content my-sm-5 px-sm-5 text-center">
                <h1 class="my-4">About Us</h1>
                <p>With WorkitPT, clients can filter through a list of sessions provided by various personal trainers for any form of exercise or sport they wish to partake in and simply sign up for the session, agree a time and a location, then get to work!</p>
            </div>
        </div>

    </div>
</div>

<section class="hero-section about-us-mobile">
    <div class="container-fluid">
        <div class="left-section-par ">
            <div class="row">
                <div class="col-md-6 my-auto text-center py-5 py-md-0">

                    <h1 class="pb-2 pb-md-5 mb-0 text-light">Transforming Personal Training</h1>
                    <p class="mb-0">Our curated list of personal trainers are able to provide quality services ranging from weight loss advice, nutrition advice, 1 on 1 training sessions, fitness mentoring and coaching, online coaching, group sessions and more. We help our clients connect with high quality professional trainers who can meet their needs and are available in-person or online.</p>
                </div>
                <div class="col-md-6 Transforming-img px-0">
                    <img src="{{asset('public/assets/images/Transforming personal training.png')}}" alt="">

                </div>
            </div>
        </div>

    </div>
</section>
<!-- ..............Section End................. -->

<section class="make-diff-section ">
    <div class="container-fluid">
        <div class="make-diff-content " data-aos="fade-up" data-aos-delay="100">
            <div class="row">
                <div class="col-md-6 modern-approach-img px-0 order-2 order-md-1">
                    <img src="{{asset('public/assets/images/modern aproach.png')}}" alt="">
                </div>
                <div class="col-md-6 my-auto text-center py-5 py-md-0 order-1 order-md-2">
                    <h1 class="pb-2 pb-md-5 mb-0">A Modern Approach</h1>
                    <p class="mb-0">It’s essential for us that our clients get the training they deserve, without the hassle of committing to a year or a certain package. Rather than do things the typical way, we’ve created a system designed around our clients’ needs that holds them and their trainers accountable and committed to achieving the desired results. </p>

                </div>
            </div>

        </div>

    </div>
</section>

<!-- ......................Section End.................................. -->

<footer>
    <div class="container-fluid footerSection">
        <div class="row px-sm-5 px-2">
            <div class="col-xl-4 offset-xl-1 col-md-6 text-md-left text-center" data-aos="fade-up" data-aos-delay="100">
                <a class="navbar-brand web-logo" href="#"> <img src="{{asset('public/assets/images/logo-f.svg')}}" alt="image"></a>
                <!-- <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit minima debitis reprehenderit quasi unde eum libero fuga impedit molestiae et.</p> -->
                <p class="mt-3">At WorkitPT, we want you to get the training you deserve</p>
                <p class="text-md-white"><strong>Follow Us</strong></p>
                <div class="d-flex justify-content-between align-items-center mt-3 footer-social-icons">
                    <a href="https://www.facebook.com/">
                        <div class="footer-icon-outer">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </div>
                    </a>
                    <a href="https://www.youtube.com/">
                        <div class="footer-icon-outer">
                            <i class="fa fa-youtube-play" aria-hidden="true"></i>
                        </div>
                    </a>
                    <a href="https://twitter.com/">
                        <div class="footer-icon-outer">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </div>
                    </a>
                    <a href="https://pk.linkedin.com/">
                        <div class="footer-icon-outer">
                            <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                        </div>
                    </a>
                    <a href="https://www.instagram.com/accounts/login/">
                        <div class="footer-icon-outer">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-2 col-md-6 mt-md-0 mt-5 text-md-left text-center" data-aos="fade-up" data-aos-delay="200">
                <ul class="quickLinks mx-auto">
                    <!-- <li class="mb-3 text-md-white"><strong>Quick Links</strong></li> -->
                    <li class="mb-2"><a href="{{url('/about')}}">About Us</a></li>
                    <li class="mb-2"><a href=" {{url('/services')}}">Services</a></li>
                    <li class="mb-2"><a href=" {{url('/term')}}">Terms and Conditions</a></li>

                </ul>
            </div>
            <div class="col-xl-2 col-md-6 order-xl-3 order-md-4 mt-xl-0 mt-3 text-md-left text-center" data-aos="fade-up" data-aos-delay="300">
                <ul class="quickLinks mx-auto">
                    <!-- <li class="mb-3 text-md-white"><strong>Customer Area</strong></li> -->
                    <li class="mb-2"><a href=" {{url('/approach')}}">Our Approach</a></li>
                    <li class="mb-2"><a href=" javascript:void(0)" class="modal-view" data-toggle="modal" data-target="#loginModal">Get Started</a></li>

                </ul>
            </div>
            <div class="col-xl-2 col-md-6 order-xl-4 order-md-3 mt-xl-0 mt-3 text-md-left text-center" data-aos="fade-up" data-aos-delay="400">
                <ul class="quickLinks mx-auto">
                    <li class="mb-3 text-md-white"><strong>Questions?</strong></li>
                    <li class="mb-2"><a href="{{url('home')}}#contact-us">Contact Us</a></li>

                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 bg-white px-5 py-3 text-md-left text-center" style="color: #755A7D;">
                WorkitPT - &#169 2022 All Rights Reserved
            </div>
        </div>

    </div>
</footer>

<!--Signup Modal -->
<!--Signup Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content signupModalDialogue">
            <!-- <div class="w-50" style="background-color:#E37048 ; height:5px; margin-left:15px"></div> -->
            <div class="modalHeader px-4 pt-4 pb-2 d-flex justify-content-between align-items-center">
                <h2>Signup to <span>WORKITPT</span></h2>
                <img class="close-modal" style="width: 8%;" data-dismiss="modal" src="{{asset('public/assets/images/x-circle.svg')}}" alt="">
            </div>
            <hr>
            <form action="">
                <div class="modalContent py-3 ">
                    <input type="text" class="mb-2 modal-input" placeholder="First Name" id="first_name">
                    <input type="text" class="mb-2 modal-input" placeholder="Last Name" id="last_name">
                    <input type="text" class="mb-2 modal-input" placeholder="Email" id="email">
                    <div class="right-inner-addon mb-2">
                        <input type="password" class=" modal-input signpassInput" placeholder="Password" id="password">
                        <i id="signhidePass" class="fa fa-eye-slash" aria-hidden="true"></i>
                        <i id="signshowPass" class="fa fa-eye" aria-hidden="true"></i>
                    </div>
                    <div class="right-inner-addon mb-2">
                        <input type="password" class=" modal-input cpassInput" placeholder="Confirm Password" id="password_confirmation">
                        <i id="confirmhidePass" class="fa fa-eye-slash" aria-hidden="true"></i>
                        <i id="confirmshowPass" class="fa fa-eye" aria-hidden="true"></i>
                    </div>
                    <p>Already have an account? <span data-toggle="modal" data-target="#loginModal" data-dismiss="modal">Login</span></p>
                    <input type="button" class=" btn my-3 login-btn" value="Sign Up" id="sighnup_submit">
                </div>
            </form>
        </div>
    </div>
</div>
<!--Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content signupModalDialogue">
            <!-- <div class="w-50" style="background-color:#E37048 ; height:5px; margin-left:15px"></div> -->
            <div class="modalHeader px-4 pt-4 pb-2 d-flex justify-content-between align-items-center">
                <h2>Login to <span>WORKITPT</span></h2>
                <img class="close-modal" style="width: 8%;" data-dismiss="modal" src="{{asset('public/assets/images/x-circle.svg')}}" alt="">
            </div>
            <hr>
            <form action="">
                <div class="modalContent py-3 ">
                    <input type="text" class="mb-2 modal-input" placeholder="Email" id="login_email">
                    <div class="right-inner-addon mb-2">
                        <input type="password" class=" modal-input passInput" placeholder="Password" id="login_password">
                        <i id="loginhidePass" class="fa fa-eye-slash" aria-hidden="true"></i>
                        <i id="loginshowPass" class="fa fa-eye" aria-hidden="true"></i>
                    </div>

                    <div class="d-flex justify-content-between align-items-center modal-form-middle">
                        <label class="d-flex align-items-center modal-label">
                            <input type="checkbox" name="remember" class="mr-2" style="width: 10px;"> Remember me
                        </label>
                        <a class="fnt-normal" href="javascript:void(0)" data-dismiss="modal" data-toggle="modal" data-target="#forgotPassModal">Forgot Password?</a>
                    </div>
                    <div class="d-flex justify-content-between align-items-center w-50 mx-auto mt-3 modal-social-icon">
                        <a href="{{route('redirectToInstagram')}}"><img src="{{asset('public/assets/images/insta-color.svg')}}" alt=""></a>
                        <a href="{{route('redirectToGoogle')}}"><img src="{{asset('public/assets/images/google-color.svg')}}" alt=""></a>
                        <a href="{{route('redirectToFacebook')}}"><img src="{{asset('public/assets/images/fb-color.svg')}}" alt=""></a>
                    </div>
                    <div class="my-3 text-center">
                        <strong class="clr-orange">OR</strong>
                    </div>
                    <!-- <input type="submit" class=" btn my-3" value="Login" id="login_submit"> -->
                    <a href="" class="btn my-3 login-btn form-control" id="login_submit">Login</a>
                    <p class="text-center mt-3">Don't have an account? <span data-dismiss="modal" data-toggle="modal" data-target="#signupModal">Signup</span></p>

                </div>
            </form>
        </div>
    </div>
</div>
<!--Forgot Password Modal -->
<div class="modal fade" id="forgotPassModal" tabindex="-1" role="dialog" aria-labelledby="forgotPassModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content signupModalDialogue">
            <!-- <div class="w-50" style="background-color:#E37048 ; height:5px; margin-left:15px"></div> -->
            <div class="modalHeader px-4 pt-4 pb-2 d-flex justify-content-between align-items-center">
                <h2>Forgot <span>Password?</span></h2>
                <img class="close-modal" style="width: 8%;" data-dismiss="modal" src="{{asset('public/assets/images/x-circle.svg')}}" alt="">
            </div>
            <form action="">
                <div class="modalContent py-3 ">
                    <div class="text-center">
                        <img style="width: 55%;" src="{{asset('public/assets/images/forget-pass.svg')}}" alt="">
                    </div>
                    <div class="user-input-wrp">
                        <br />
                        <input type="text" class="inputText" required id="forgot_email">
                        <span class="floating-label">Email Address</span>
                    </div>
                    <div class="text-center">
                        <input type="submit" class="w-50 btn my-4 login-btn" value="Send OTP" id="forgot_submit">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--Verify OTP Modal -->
<div class="modal fade" id="verifyOtpModal" tabindex="-1" role="dialog" aria-labelledby="verifyOtpModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content signupModalDialogue">
            <!-- <div class="w-50" style="background-color:#E37048 ; height:5px; margin-left:15px"></div> -->
            <div class="modalHeader px-4 pt-4 pb-2 d-flex justify-content-between align-items-center">
                <h2>Verify <span>OTP</span></h2>
                <img class="close-modal" style="width: 8%;" data-dismiss="modal" src="{{asset('public/assets/images/x-circle.svg')}}" alt="">
            </div>
            <form action="">
                <div class="modalContent py-3 ">
                    <div class="text-center">
                        <img style="width: 60%;" src="{{asset('public/assets/images/forget-pass.svg')}}" alt="">
                    </div>
                    <div class="text-center">

                        <input class="otp otp1 modal-input-otp" id="otp1" type="text" oninput='digitValidate(this)' onkeyup='tabChange(1)' maxlength=1>
                        <input class="otp otp2 modal-input-otp" id="otp2" type="text" oninput='digitValidate(this)' onkeyup='tabChange(2)' maxlength=1>
                        <input class="otp otp3 modal-input-otp" id="otp3" type="text" oninput='digitValidate(this)' onkeyup='tabChange(3)' maxlength=1>
                        <input class="otp otp4 modal-input-otp" id="otp4" type="text" oninput='digitValidate(this)' onkeyup='tabChange(4)' maxlength=1>
                        <input class="otp otp5 modal-input-otp" id="otp5" type="text" oninput='digitValidate(this)' onkeyup='tabChange(5)' maxlength=1>
                        <input class="otp otp6 modal-input-otp" id="otp6" type="text" oninput='digitValidate(this)' onkeyup='tabChange(6)' maxlength=1>
                    </div>
                    <div class="resend-btn text-center pt-4  ">
                        <p id="demo" class="otp-seconds">00:00</p>
                        <a href="javascript:void(0)" id="resendCode_d">Resend Code</a>
                    </div>
                    <div class="text-center">
                        <input type="submit" class="w-50 btn my-4 login-btn" id="otp_submit" value="Verify OTP" placeholder="Confirm Password">

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--Reset Password Modal -->
<div class="modal fade" id="resetPassModal" tabindex="-1" role="dialog" aria-labelledby="resetPassModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content signupModalDialogue">
            <!-- <div class="w-50" style="background-color:#E37048 ; height:5px; margin-left:15px"></div> -->
            <div class="modalHeader px-4 pt-4 pb-2 d-flex justify-content-between align-items-center">
                <h2>Reset <span>Password</span></h2>
                <img class="close-modal" style="width: 8%;" data-dismiss="modal" src="{{asset('public/assets/images/x-circle.svg')}}" alt="">
            </div>
            <hr>
            <form action="">
                <div class="modalContent py-3 ">
                    <div class="my-3">
                        <input type="text modal-input" id="new_password" class="mb-2" placeholder="Enter New Password">
                        <input type="text modal-input" id="confirm_password_reset" class="mb-2" placeholder="Confirm Password">
                    </div>
                    <input type="submit" class=" btn my-3 login-btn" value="Confirm" id="update_password" placeholder="Confirm Password">

                </div>
            </form>
        </div>
    </div>
</div>
<!-- <form method="GET" action="" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="email" class="form-control" placeholder="Email" value="">
</form> -->
@endsection
@section('insertfooter')
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.1/jquery.flexslider.js"></script> -->
<!-- /// register///// -->
<script>
    $(document).ready(function() {
        ///....get data from in put and stor in variable........///
        $('#sighnup_submit').on('click', function(e) {
            e.preventDefault();
            var first_name = $('#first_name').val();
            var last_name = $('#last_name').val();
            var name = first_name + last_name
            var email = $('#email').val();
            var user_type = 'user';
            var password = $('#password').val();
            var password_confirmation = $('#password_confirmation').val();

            if (first_name != "" && last_name != "" && email != "" && password != "") {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },

                    url: 'http://localhost/workitpt/api/register',
                    type: "POST",
                    data: {
                        name: name,
                        email: email,
                        password: password,
                        password_confirmation: password_confirmation,
                        user_type: user_type,
                    },
                    cache: false,
                    success: function(dataResult) {
                        if (dataResult.success == true) {
                            $('#signupModal').modal('hide');
                            $('#loginModal').modal('show');
                            toastr.success('Registration Successful!');
                        } else if (dataResult.success == false) {
                            toastr.error(dataResult.message);
                        }
                    },
                    error: function(jqXHR, exception) {
                        toastr.error(jqXHR.responseJSON.message);
                    }

                });
            } else {
                toastr.error("Please Fill All Fields.");
            }
        });

        // Login API Call 
        $('#login_submit').on('click', function(e) {
            e.preventDefault();
            var email = $('#login_email').val();
            var password = $('#login_password').val();

            if (email != "" && password != "") {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },

                    url: 'http://localhost/workitpt/api/login',
                    type: "POST",
                    data: {

                        email: email,
                        password: password,

                    },
                    cache: false,
                    success: function(dataResult) {
                        console.log(dataResult);
                        window.location.href = '/workitpt/trainers';


                    }
                });
            } else {
                // alert('Please fill all the field !');
            }
        });

        // Email Validation Signup
        $(document).on('keyup', "#email", function() {
            let value = $(this).val();
            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(value)) {
                $("#email").removeClass('errorInput');
                $("#email").addClass('successInput');
            } else {
                $("#email").removeClass('successInput');
                $("#email").addClass('errorInput');
            }
        });
        // Email Validation Login
        $(document).on('keyup', "#login_email", function() {
            let value = $(this).val();
            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(value)) {
                $("#login_email").removeClass('errorInput');
                $("#login_email").addClass('successInput');
            } else {
                $("#login_email").removeClass('successInput');
                $("#login_email").addClass('errorInput');
            }
        });

        ///....get data from in put and stor in variable........///
        $('#forgot_submit').on('click', function(e) {
            e.preventDefault();

            var email = $('#forgot_email').val();

            // console.log(email);


            if (email != "") {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },

                    url: 'http://localhost/workitpt/api/verify/email',
                    type: "POST",
                    data: {
                        email: email,

                    },
                    cache: false,
                    success: function(dataResult) {
                        console.log(dataResult);
                        // window.location.href = '/workitpt/trainers';
                        $('#forgotPassModal').modal('hide');
                        $('#verifyOtpModal').modal('show');


                    }
                });
            } else {
                // alert('Please fill all the field !');
            }
        });

    });
</script>
<!-- <script>
    const slickSettings = {
        arrows: true,
        infinite: true,
        prevArrow: "<i class='fa fa-arrow-left slick-prev arrow ser-left' aria-hidden='true'></i> ",
        nextArrow: "<i class='fa fa-arrow-right slick-next arrow ser-right' aria-hidden='true'></i>",
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 2000,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 1140,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    }
    let digitValidate = function(ele) {
        ele.value = ele.value.replace(/[^0-9]/g, '');
    }

    let tabChange = function(val) {
        let ele = document.getElementsByClassName("otp");
        if (ele[val - 1].value != '') {
            ele[val].focus();
        } else if (ele[val - 1].value == '') {
            ele[val - 2].focus()
        }
    }

    var deadline = new Date(+new Date() + 60000 * 4).getTime();
    var x = setInterval(function() {
        var now = new Date().getTime();
        var t = deadline - now;
        var days = Math.floor(t / (1000 * 60 * 60 * 24));
        var hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((t % (1000 * 60)) / 1000);
        document.getElementById("demo").innerHTML = minutes + "m " + seconds + "s ";
        if (t < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "00:00";
            document.getElementById("resendCode_d").style.color = '#2b52c2';
            document.getElementById("resendCode_d").setAttribute('href', "");
        }
    }, 1000);

    // $('.js-slick-carousel').on('init', handleSlickInit);
    $('.js-slick-carousel').slick(slickSettings);

    // reinitialization
    $('.js-slick-carousel').on('reInit', () => console.log('slick re-init fired'));

    $(window).resize(handleResize);
</script> -->
<script>
    $('.modal-view').click(function() {
        $('body').addClass('new')
    })
    $('.close-modal').click(function() {
        $('body').removeClass('new')
    })
</script>
<script>
    $(".passInput").on('keyup', function() {
        let values = $(".passInput").val();
        if (values.length >= 6) {
            $(".passInput").removeClass('login-email-field-red');
            $(".passInput").addClass('login-email-field-green');
            $('.right-inner-addon i').css('color', '#151C00')
        } else {
            $(".passInput").removeClass('login-email-field-green');
            $(".passInput").addClass('login-email-field-red');
            $('.right-inner-addon i').css('color', '#FF0000')
        }

    })
</script>
<script>
    $('#hidePass').hide();
    $('#showPass').click(function() {
        $('#showPass').hide();
        $('#hidePass').show();
        var passInput = $("#login_password");
        if (passInput.attr('type') === 'password') {
            passInput.attr('type', 'text');
        } else {
            passInput.attr('type', 'password');
        }
    })
    $('#hidePass').on('click', function() {
        $('#hidePass').hide();
        $('#showPass').show();
        var passInput = $("#login_password");
        if (passInput.attr('type') === 'password') {
            passInput.attr('type', 'text');
        } else {
            passInput.attr('type', 'password');
        }
    })
</script>
<script>
    $('.nav-list .nav-item:nth-of-type(2)').addClass('active');
</script>
<script>
    $('.nav-lists .nav-item:nth-of-type(3)').addClass('active')
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.1/jquery.flexslider.js"></script>
<script>
    const slickSettings = {
        arrows: true,
        infinite: true,
        prevArrow: "<i class='fa fa-arrow-left slick-prev arrow ser-left-session ' aria-hidden='true'></i> ",
        nextArrow: "<i class='fa fa-arrow-right slick-next arrow ser-right-session' aria-hidden='true'></i>",
        slidesToShow: 1,
        slidesToScroll: 1,
        // responsive: [{
        //         breakpoint: 2000,
        //         settings: {
        //             slidesToShow: 2,
        //             slidesToScroll: 1
        //         }
        //     },
        //     {
        //          breakpoint: 1490,
        //         settings: {
        //             slidesToShow: 1,
        //             slidesToScroll: 1
        //         }
        //     },


        // ]
    }


    // $('.js-slick-carousel').on('init', handleSlickInit);
    $('.js-slick-carousel').slick(slickSettings);

    // reinitialization
    $('.js-slick-carousel').on('reInit', () => console.log('slick re-init fired'));


    $(window).resize(handleResize);
</script>
@endsection