@extends('layouts.website.default')
@section('content')
<style>
    .about-content h1 {
        color: #E37048;
        margin-bottom: 0px;
        font-size: 1.5rem;
        padding-top: 10px;
        padding-bottom: 7px;
    }

    .about-content p {
        color: black;
        margin-bottom: 0px;
        font-size: 1rem;
        padding-bottom: 10px;
    }
    .hero-section-wrapper{
        padding-top: 3rem !important;
        padding-bottom: 3rem !important;
    }

    @media screen and (max-width:576px) {
        .about-content h1 {
            color: #E37048;
            margin-bottom: 0px;
            font-size: 1.2rem;
        }

        .about-content p {
            color: black;
            margin-bottom: 0px;
            font-size: 0.9rem;
        }
    }

    .right-inner-addon {
        position: relative;
    }

    .login-email-field-red {
        background: #FFDEDE !important;
        border: 2px solid #FF0000 !important;
        color: #FF0000 !important;
    }

    .login-email-field-green {
        background: #EAF3CD !important;
        border: 2px solid #151C00 !important;
        color: #151C00 !important;
    }

    .right-inner-addon input {
        padding-right: 35px !important;
    }

    .right-inner-addon i {
        color: #B5B5B5;
        position: absolute;
        right: 0px;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    .modal-input {
        color: #B5B5B5 !important;
    }

    .modal-label {
        color: #B5B5B5 !important;
    }

    .otp-seconds {
        color: #E37048 !important;
    }

    #resendCode_d {
        color: black !important;
    }

    .modal-input-otp {
        color: black !important;
        font-size: 1.2rem !important;
        font-weight: 500 !important;
    }

    .login-btn {
        text-decoration: none;
        background: white !important;
        border: 1px solid #E37048 !important;
        color: #E37048 !important;
        width: 70%;
        max-width: 240px;
        margin: 0 auto;
        border-radius: 10px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;

    }

    .login-btn:hover {
        background: #E37048 !important;
        color: white !important;
        border: 1px solid #E37048 !important;
    }

    .home-card-section {
        position: relative;
    }

    .workout-gallery {
        position: relative;
    }

    .dot-left-one {
        width: 100px;
        position: absolute;
        top: 50%;
        left: 0;
        transform: translate(0%, -50%);
    }

    .dotc-left-one {
        width: 100px;
        position: absolute;
        top: 40%;
        left: 0;
        transform: translate(0%, -50%);
    }

    .dot-left-two {
        width: 100px;
        position: absolute;
        top: 50%;
        left: 45%;
        transform: translate(-50%, -50%);
    }

    .dot-right-one {
        width: 90px;
        position: absolute;
        top: 70%;
        right: 0;
        transform: translate(0%, 0%);
    }

    .dotc-right-one {
        width: 90px;
        position: absolute;
        top: 70%;
        right: 0;
        transform: translate(0%, 0%);
    }

    .dot-right-two {
        width: 90px;
        height: 80px;
        position: absolute;
        top: 90%;
        right: 20%;
        transform: translate(-50%, 0%);
    }

    @media screen and (max-width:1330px) {

        .dot-left-one {
            width: 60px;
            position: absolute;
            top: 40%;
            left: 0;
            transform: translate(0%, -50%);
        }

        .dotc-left-one {
            width: 60px;
            position: absolute;
            top: 20%;
            left: 0;
            transform: translate(0%, -50%);
        }

        .dot-left-two {
            width: 60px;
            position: absolute;
            top: 50%;
            left: 45%;
            transform: translate(-50%, -50%);
        }

        .dot-right-one {
            width: 60px;
            position: absolute;
            top: 80%;
            right: 0;
            transform: translate(0%, 0%);
        }

        .dotc-right-one {
            width: 60px;
            position: absolute;
            top: 90%;
            right: 0;
            transform: translate(0%, 0%);
        }


        .dot-right-two {
            width: 60px;
            height: 60px;
            position: absolute;
            top: 90%;
            right: 20%;
            transform: translate(-50%, 0%);
        }
    }

    @media screen and (max-width:1200px) {

        .dot-left-one,
        .dot-right-one,
        .dot-right-two,
        .dot-left-two,
        .dotc-left-one,
        .dotc-right-one {
            display: none;
        }
    }

    h2 {
        color: #282F35;
        font-family: "Poppins", sans-serif !important;
        font-size: 18px;
        letter-spacing: 1px;
        margin: 0;
        text-transform: uppercase;
    }

    p {
        color: #666666;
        font-family: "Poppins", sans-serif !important;
        font-size: 14px;
        line-height: 1.5;
        margin: 20px;
        
    }
  
.footer-text{
    font-size: 16px !important;
margin-left: 0 !important;
}
    .container {
        /* max-width: 640px; */
        margin: 0 auto;
    }

    .acc {
        margin: 90px 0;
        overflow: hidden;
        padding: 0;
    }

    .acc li {
        list-style-type: none;
        padding: 0;
    }

    .acc_ctrl {
        background: #FFFFFF;
        border: none;
        border-bottom: solid 1px #F2F2F2;
        cursor: pointer;
        display: block;
        outline: none;
        padding: 2em;
        position: relative;
        text-align: center;
        width: 100%;
    }

    .acc_ctrl h2 {
        text-align: left;
    }

    .acc_ctrl:before {
        background: #44596B;
        content: '';
        height: 2px;
        margin-right: 37px;
        position: absolute;
        right: 0;
        top: 50%;
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg);
        -webkit-transition: all 0.2s ease-in-out;
        -moz-transition: all 0.2s ease-in-out;
        -ms-transition: all 0.2s ease-in-out;
        -o-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
        width: 14px;
    }

    .acc_ctrl:after {
        background: #44596B;
        content: '';
        height: 2px;
        margin-right: 37px;
        position: absolute;
        right: 0;
        top: 50%;
        width: 14px;
    }

    .acc_ctrl.active:before {
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
    }

    .acc_ctrl.active h2,
    .acc_ctrl:focus h2 {
        position: relative;
    }

    .acc_panel {
        background: #F2F2F2;
        display: none;
        overflow: hidden;
    }
</style>
@include('includes.website.navbar')
<div class="container-fluid hero-section">
    <div class="container hero-section-wrapper" data-aos="fade-left">
        <div class="row">
            <div class="col- hero-left text-center text-md-left">
                <div class="hero-left-content">
                    <h1>Frequently Asked Questions</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <ul class="acc">
                <li>
                    <button class="acc_ctrl">
                        <h2>What is Workitpt?</h2>
                    </button>
                    <div class="acc_panel">
                        <p>Workitpt is an online platform that connects personal trainers with customers for both online and in-person training, group or one-on-one, for many different sports. Users can browse available sessions by location, time, sport and more, and book sessions with trainers directly through the platform. Trainers can post sessions and plan their schedules in advance, as well as accept payments through the platform. Workitpt is dedicated to providing a convenient, accessible and reliable way for users to connect with top-quality trainers and achieve their fitness goals. Learn more about Workitpt <a href="{{url('/about')}}">here</a> </p>
                    </div>
                </li>
                <li>
                    <button class="acc_ctrl">
                        <h2>How does Workitpt ensure the quality of its trainers?</h2>
                    </button>
                    <div class="acc_panel">
                        <p> Workitpt conducts a thorough vetting process for all trainers on the platform, including background checks and verification of certifications. We also collect user reviews and ratings to ensure that our trainers are providing a high level of service.</p>
                    </div>
                </li>
                <li>
                    <button class="acc_ctrl">
                        <h2>How do I book a session with a trainer?</h2>
                    </button>
                    <div class="acc_panel">
                        <p>To book a session with a trainer, use our filtering <a href="{{url('/dashboard/map')}}">feature</a> to browse the location, time, and sport you're interested in on the Workitpt platform. Once you've found a session that works for you, click "Book Now" to reserve your spot. A booking notification will be sent to the trainer. Once confirmed, you'll be prompted to enter your payment information to confirm the booking.</p>
                    </div>
                </li>
                <li>
                    <button class="acc_ctrl">
                        <h2>What types of sports and activities are available on Workitpt?</h2>
                    </button>
                    <div class="acc_panel">
                        <p>Workitpt offers a wide range of sports and activities, including but not limited to: yoga, weightlifting, boxing, running, swimming, and cycling. We're always adding new activities based on user demand, so if there's something you're interested in that isn't currently offered, let us <a href="{{url('home')}}#contact-us">know!</a></p>
                    </div>
                </li>
                <li>
                    <button class="acc_ctrl">
                        <h2>How do I pay for my session?</h2>
                    </button>
                    <div class="acc_panel">
                        <p>Payments for Workitpt sessions are made through our secure online platform. Once you've booked a session, you'll be prompted to enter your payment information. You won't be charged until the session has been confirmed by the trainer.</p>
                    </div>
                </li>
                <li>
                    <button class="acc_ctrl">
                        <h2>What if I need to cancel or reschedule a session?</h2>
                    </button>
                    <div class="acc_panel">
                        <p>If you need to cancel or reschedule a session, simply go to your account page and select the session you'd like to modify. You can cancel or reschedule up to 2 hours before the session start time without penalty. If you cancel within 2 hours of the session start time, you may be subject to a cancellation fee.</p>
                    </div>
                </li>
                <li>
                    <button class="acc_ctrl">
                        <h2>How do I become a trainer on Workitpt?</h2>
                    </button>
                    <div class="acc_panel">
                        <p>If you're interested in becoming a trainer on Workitpt, simply visit our website and fill out the application <a href="{{url('/trainer/login')}}">form</a>. We'll review your application and get back to you as soon as possible. Please note that we have strict requirements for trainers, including certification and background checks.</p>
                    </div>
                </li>
                <li>
                    <button class="acc_ctrl">
                        <h2>Can I book a session with a trainer for a group of people?</h2>
                    </button>
                    <div class="acc_panel">
                        <p>Yes, however each participant will have to login and book the session themselves. Simply find a group session posted by the trainer and sign up for it, then inform the rest of the group to do the same. Please note that some trainers may have a maximum group size, so be sure to check the session details before booking. The messaging feature will be enabled with the trainer once you book the session and confirm your attendance.</p>
                    </div>
                </li>
                <li>
                    <button class="acc_ctrl">
                        <h2>How do I know if a trainer is available at a specific time?</h2>
                    </button>
                    <div class="acc_panel">
                        <p>Trainers on Workitpt set their own schedules and post the sessions they're available for. You can browse available sessions by selecting the location, time, and sport you're interested in.</p>
                    </div>
                </li>
                <li>
                    <button class="acc_ctrl">
                        <h2>What if I have more questions or concerns?</h2>
                    </button>
                    <div class="acc_panel">
                        <p>If you have any questions or concerns about using Workitpt, please don't hesitate to reach out to our customer support team. You can contact us through the website <a href="{{url('home')}}#contact-us">here</a>. We're always happy to help!</p>
                    </div>
                </li>
                <li>
                    <button class="acc_ctrl">
                        <h2>How does Workitpt ensure the safety of its users during in-person training sessions?</h2>
                    </button>
                    <div class="acc_panel">
                        <p>Workitpt takes the safety of its users very seriously. We require all trainers to follow appropriate safety protocols and guidelines, including those related to COVID-19. We also recommend that users take necessary precautions, such as wearing masks and maintaining social distancing during in-person sessions. If you have any concerns about safety, please don't hesitate to contact us.</p>
                    </div>
                </li><li>
                    <button class="acc_ctrl">
                        <h2>Can I book a session for both virtual and in-person training?</h2>
                    </button>
                    <div class="acc_panel">
                        <p>Yes, you can book sessions for both virtual and in-person training on the Workitpt platform. Simply select the type of training you're interested in when browsing available sessions. Please note that some trainers may only offer one type of training, so be sure to check the session details before booking.</p>
                    </div>
                </li><li>
                    <button class="acc_ctrl">
                        <h2>Can I book multiple sessions with a trainer in advance?</h2>
                    </button>
                    <div class="acc_panel">
                        <p>Yes, you can book multiple sessions with a trainer in advance by looking at their calendar and schedule on the Workitpt platform. This allows you to guarantee your spot in multiple sessions and plan your training schedule in advance. Please note that some trainers may have limited availability, so it's important to book early to secure your spot.</p>
                    </div>
                </li><li>
                    <button class="acc_ctrl">
                        <h2>How much does it cost to use Workitpt?</h2>
                    </button>
                    <div class="acc_panel">
                        <p>Workitpt is free to use for customers looking to browse and book sessions with trainers. Trainers pay a small percentage of their earnings to Workitpt as a service fee, and customers are charged a 2% service fee on each session they book. However, we understand that some users may not be able to afford the full cost of training sessions. If you're experiencing financial hardship, please contact us to discuss your options. Workitpt is committed to providing affordable and accessible fitness training for all users.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

</div>
<!-- Footer Section  -->
<footer>
    <div class="container-fluid footerSection">
        <div class="row px-sm-5 px-2">
            <div class="col-xl-4 offset-xl-1 col-md-6 text-md-left text-center" data-aos="fade-up" data-aos-delay="100">
                <a class="navbar-brand web-logo" href="{{url('/home')}}"> <img src="{{asset('public/assets/images/logo-f.svg')}}" alt="image"></a>
                <p class="footer-text mt-3">At WorkitPT, we want you to get the training you deserve</p>
                <p class="footer-text  -md-white"><strong>Follow Us</strong></p>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.1/jquery.flexslider.js"></script>
<!-- /// register///// -->
<!-- <script>
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
</script> -->
<script>
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
</script>
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
<!-- <script>
    $('.nav-list .nav-item:nth-of-type(2)').addClass('active');
</script> -->
<script>
    $('.nav-list .nav-item:nth-of-type(3)').addClass('active')
</script>
<script>
    $(function() {
        $('.acc_ctrl').on('click', function(e) {
            e.preventDefault();
            if ($(this).hasClass('active')) {
                $(this).removeClass('active');
                $(this).next()
                    .stop()
                    .slideUp(300);
            } else {
                $(this).addClass('active');
                $(this).next()
                    .stop()
                    .slideDown(300);
            }
        });
    });
</script>
@endsection