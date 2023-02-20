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
</style>
@include('includes.website.navbar')
<div class="container-fluid hero-section">
    <div class="container hero-section-wrapper" data-aos="fade-left">
        <div class="row">
            <div class="col- hero-left text-center text-md-left">
                <div class="hero-left-content">
                    <h1>Terms and Condition</h1>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container py-3">
    <div class="about-content">
        <p class="pt-3">Your agreement is with your personal trainer (the “Trainer”) who delivers your training.
            These Terms and Conditions form part of your agreement with the Trainer. You understand that the Trainer is self-employed and you are entering into a contract with him/her alone.
            Your instructions to commence personal training will constitute acceptance of these Terms and Conditions when you will become a client (a “Client” or “you”).You are asked to pay special attention to the provisions related to liability and cancellations. This does not affect your statutory rights. Getting into any business with Workitpt, assumes that you have already read and accepted these terms.</p>

    </div>
    <div class="about-content">
        <h1>1. Trainer</h1>
        <p>Your Trainer is a fully qualified personal trainer with previous experience in both the health and fitness industry as well as specifically in personal training</p>
    </div>
    <div class="about-content">
        <h1>2. Trainer’s Obligations</h1>
        <p>a.) The Trainer will use his/her skills and knowledge to run a safe session of exercise that will take into account your lifestyle, personal goals, fitness levels and medical history.</p>
        <p>b.) The Trainer will provide the coaching, supervision, advice and support that you will need to achieve your goals. Apart from the initial consultation each personal training session will last up tp 60 minutes (a “Session”) or up to the trainer's discretion.</p>
        <p>c.) You understand that the results of any fitness programme cannot be guaranteed. Your progress depends on your effort and co-operation in and outside of the Sessions. In particular you acknowledge that individual results may vary and no particular result is guaranteed by your Trainer.</p>
        <p>d.) All Client information will be kept strictly private and confidential.</p>
    </div>
    <div class="about-content">
        <h1>3. Your Obligations</h1>
        <p>a.) It is understood between you and your Trainer that both must commit to your training session 100% in order for you to achieve the results of the session.</p>
        <p>b.) You are required to arrive on time for each Session so that the Trainer’s full training plan is achieved on each visit.</p>
        <p>c.) You are required to wear appropriate clothing and footwear.</p>
        <p>d.) Your Trainer may require a letter of ‘medical clearance’ from your GP. Please be aware that your GP may charge for providing this letter.</p>
        <p>e.) You understand and agree that it is your responsibility to inform the Trainer of any conditions or changes to your health, now and on-going, which may affect your ability to exercise safely and with minimal risk of injury.</p>
        <p>f.) If your Trainer requires further medical information from a practitioner, you must provide such details.</p>
        <p>g.) You understand that there are inherent risks in participating in a programme of strenuous exercise. If you sustain or claim to sustain any injury while participating in training, you acknowledge that the Trainer and Workitpt are not responsible, except where the injury was caused by his/her gross negligence or intentional act.</p>
        <p>h.) Your Trainer cannot be held liable in any way for undeclared or unknown medical conditions.</p>

    </div>
    <div class="about-content">
        <h1>4. Payment</h1>
        <p>a.) Payment for Sessions must be made in advance. Payments will be held in an escrow account by workitpt and only released to the trainers once the session is completed.</p>
        <p>b.) Acceptable forms of payment will be shown on the payment screen of the website</p>
    </div>
    <div class="about-content">
        <h1>5. Cancellation and Refunds</h1>
        <p>a.) 2 hours prior notice of cancellation or postponement is required for all sessions.</p>
        <p>b.) Notice of less than 2 hours will incur full payment of the full session fee </p>
        <p>c.) Unforeseen events will be taken into consideration on the day, including but not limited to weather, political factors and others.</p>
        <p>d.) Once purchased, your Sessions are non-refundable and non-transferable.</p>
    </div>
    <div class="about-content">
        <h1>6. Lateness Policy</h1>
        <p>a.) If the client is late the Session cannot be extended and will end at the appointed time.</p>
        <p>b.) If the Trainer is late additional time will be added to the Session or to subsequent Sessions.</p>
    </div>
    <div class="about-content">
        <h1>7. Health and Safety</h1>
        <p>a.) If your Trainer conducts the Sessions on your premises you are responsible for providing a safe exercise environment.</p>
        <p>b.) Venues selected, whether indoor or outdoor must be agreed upon by both parties and safety must be assured before beginning the sessions.</p>
    </div>
    <div class="about-content">
        <h1>8. Liability</h1>
        <p>a.) This Liability section applies only to the extent permitted by law. For the avoidance of doubt, the Trainer and/or Workitpt does not exclude or limit any liability for: (a) personal injury (including sickness and death) where such injury results from his/her gross negligence or willful default, or that of his/her, agents or subcontractors or (b) fraudulent misrepresentation.</p>
        <p>b.) The Trainer and/or Workitpt (the “Company”) does not accept liability (except as set out below) for any errors and omissions and reserve the right to change information, specifications and descriptions of listed packages and services. The Trainer and/or the Company will use their reasonable effort to correct errors and omissions as quickly as practicable after being notified of them.</p>
        <p>c.) The Trainer and the Company do not accept any liability whatsoever for any indirect loss, consequential loss, loss of data, loss of income or profit, loss of damage to property and/or loss from claims of third parties arising out of the use of the Company’s website or services purchased from the Trainer and/or the Company or any other damage howsoever caused.</p>
        <p>d.) The Trainer and/or the Company will only be liable for direct loss up to a maximum total of the price of the Sessions and/or services purchased by the Client in respect of any claim.</p>
        <p>e.) The Trainer shall not be liable for any loss or injury attributable to:</p>
        <ol type="i" class="pl-5">
            <li> the Client’s fault;</li>
            <li>a third party unconnected with the provision of services provided by your Trainer; or</li>
            <li> events which your Trainer, nor his/her suppliers or agents could have foreseen or forestalled, even if they had taken reasonable care.</li>

        </ol>
        <p>
            f.) The Trainer and/or the company are not liable for loss or damage to your property.
        </p>
        <p>g.) The Trainer and/or the company are not liable if you ignore his/her recommendation, at any time, to seek medical advice.</p>
    </div>
    <div class="about-content">
        <h1>9. Intellectual Property</h1>
        <p>a.) Any marketing, educational or other materials, including the Company’s programmes and/or any variations thereto and its nutrition services materials, made available to you will at all times remain the property of the Company and is subject to copyright.</p>
        <p>b.) You undertake to use such materials only for your own personal development and not to copy, publish or reproduce any such materials.</p>
    </div>
    <div class="about-content">
        <h1>10. General</h1>
        <p>a.) You understand that in the unlikely event of your Trainer being unable to continue your training, for any reason, subject to availability you can have your Sessions transferred to another similar Trainer if he/she agrees to take over his/her training or you can request a full refund from your existing Trainer for any unfulfilled Sessions. In any of these cases, you may reach out directly to Workitpt by sending an email or using the contact form on the website</p>
        <p>b.) The Trainer has the right to change these Terms and Conditions, for example, to be able to offer new services or as required by law. The Trainer will notify you of any change. When such a change(s) is made, if dissatisfied you can cancel this agreement once you have made any payments already due to the Trainer.</p>
        <p>c.) You are responsible for keeping all your contact information and marketing preferences up to date with the Trainer. In order to comply with the Data Protection Act, the Trainer will only do what you ask him/her to do, or what you have given him/her permission to do with any personal or sensitive information held about you.</p>
        <p>d.) Your training may be filmed or pictures taken for marketing purposes. Your participation in a Session means you consent to photography, filming and sound recording which may include you as a Client and its use in commercial distribution without payment or copyright. You will be informed beforehand.</p>
        <p>e.) This agreement is governed by the laws of Hong Kong and is subject to the jurisdiction of the Hong Kong courts.</p>


    </div>
</div>
<!-- Footer Section  -->
<footer>
    <div class="container-fluid footerSection">
        <div class="row px-sm-5 px-2">
            <div class="col-xl-4 offset-xl-1 col-md-6 text-md-left text-center" data-aos="fade-up" data-aos-delay="100">
                <a class="navbar-brand web-logo" href="#"> <img src="{{asset('public/assets/images/logo-f.svg')}}" alt="image"></a>
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
                        <input type="password" class=" modal-input passInput" placeholder="Password" id="password">
                        <i id="hidePass" class="fa fa-eye-slash" aria-hidden="true"></i>
                        <i id="showPass" class="fa fa-eye" aria-hidden="true"></i>
                    </div>
                    <div class="right-inner-addon mb-2">
                        <input type="password" class=" modal-input passInput" placeholder="Confirm Password" id="password_confirmation">
                        <i id="hidePass" class="fa fa-eye-slash" aria-hidden="true"></i>
                        <i id="showPass" class="fa fa-eye" aria-hidden="true"></i>
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
                        <i id="hidePass" class="fa fa-eye-slash" aria-hidden="true"></i>
                        <i id="showPass" class="fa fa-eye" aria-hidden="true"></i>
                    </div>

                    <div class="d-flex justify-content-between align-items-center modal-form-middle">
                        <label class="d-flex align-items-center modal-label">
                            <input type="checkbox" name="remember" class="mr-2" style="width: 10px;"> Remember me
                        </label>
                        <a class="fnt-normal" href="javascript:void(0)" data-dismiss="modal" data-toggle="modal" data-target="#forgotPassModal">Forgot Password?</a>
                    </div>
                    <div class="d-flex justify-content-between align-items-center w-50 mx-auto mt-3 modal-social-icon">
                        <a href="javascript:void(0)"><img src="{{asset('public/assets/images/insta-color.svg')}}" alt=""></a>
                        <a href="javascript:void(0)"><img src="{{asset('public/assets/images/google-color.svg')}}" alt=""></a>
                        <a href="javascript:void(0)"><img src="{{asset('public/assets/images/fb-color.svg')}}" alt=""></a>
                    </div>
                    <div class="my-3 text-center">
                        <strong class="clr-orange">OR</strong>
                    </div>
                    <!-- <input type="submit" class=" btn my-3" value="Login" id="login_submit"> -->
                    <a href="{{url('trainers')}}" class="btn my-3 login-btn form-control">Login</a>
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
                <h2>Forget <span>Password</span></h2>
                <img class="close-modal" style="width: 8%;" data-dismiss="modal" src="{{asset('public/assets/images/x-circle.svg')}}" alt="">
            </div>
            <form action="">
                <div class="modalContent py-3 ">
                    <div class="text-center">
                        <img style="width: 60%;" src="{{asset('public/assets/images/forget-pass.svg')}}" alt="">
                    </div>
                    <input type="text" class="my-2 modal-input" placeholder="Email" id="forgot_email">
                    <div class="text-center">
                        <input type="submit" class="w-50 btn my-4 login-btn" value="Send OTP" data-dismiss="modal" data-toggle="modal" data-target="#verifyOtpModal" id="forgot_submit">
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
                <h2>Forget <span>Password</span></h2>
                <img class="close-modal" style="width: 8%;" data-dismiss="modal" src="{{asset('public/assets/images/x-circle.svg')}}" alt="">
            </div>
            <form action="">
                <div class="modalContent py-3 ">
                    <div class="text-center">
                        <img style="width: 60%;" src="{{asset('public/assets/images/forget-pass.svg')}}" alt="">
                    </div>
                    <div class="text-center">

                        <input class="otp otp1 modal-input-otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(1)' maxlength=1>
                        <input class="otp otp2 modal-input-otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(2)' maxlength=1>
                        <input class="otp otp3 modal-input-otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(3)' maxlength=1>
                        <input class="otp otp4 modal-input-otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(4)' maxlength=1>
                        <input class="otp otp5 modal-input-otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(5)' maxlength=1>
                        <input class="otp otp6 modal-input-otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(6)' maxlength=1>
                    </div>
                    <div class="resend-btn text-center pt-4  ">
                        <p id="demo" class="otp-seconds">00:00</p>
                        <a href="javascript:void(0)" id="resendCode_d">Resend Code</a>
                    </div>
                    <div class="text-center">
                        <input type="submit" class="w-50 btn my-4 login-btn" value="Verify OTP" data-dismiss="modal" data-toggle="modal" data-target="#resetPassModal" placeholder="Confirm Password">

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
                        <input type="text modal-input" class="mb-2" placeholder="Enter New Password">
                        <input type="text modal-input" class="mb-2" placeholder="Confirm Password">
                    </div>

                    <input type="submit" class=" btn my-3 login-btn" value="Confirm" data-dismiss="modal" data-toggle="modal" data-target="#loginModal" placeholder="Confirm Password">

                </div>
            </form>
        </div>
    </div>
</div>
<form method="GET" action="" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="email" class="form-control" placeholder="Email" value="">
</form>
@endsection
@section('insertfooter')
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.1/jquery.flexslider.js"></script>
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
<script>
    $('.nav-list .nav-item:nth-of-type(2)').addClass('active');
</script>
<script>
    $('.nav-lists .nav-item:nth-of-type(3)').addClass('active')
</script>
@endsection