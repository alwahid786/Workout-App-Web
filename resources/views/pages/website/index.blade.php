@extends('layouts.website.default')
@section('content')
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.1/flexslider.css">
<style>
    .loaderDiv {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        background: rgba(0, 0, 0, 0.75) url("../../../../workitpt_web/public/assets/images/loader.svg") no-repeat center center;
        z-index: 99999;
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

    .errorInput {
        border: 1px solid red !important;
        background: #f8dede !important;
        color: red !important;
        font-weight: 600 !important;
    }

    .successInput {
        border: 1px solid green !important;
        color: green !important;
        font-weight: 600 !important;
        background: #eaf3cd !important;
    }
</style>
@include('includes.website.navbar')
<div class="container-fluid hero-section">
    <div class="container hero-section-wrapper" data-aos="fade-left">
        <div class="row">
            <div class="col-md-6 order-2 order-md-1 hero-left text-center text-md-left">
                <div class="hero-left-content">
                    <h1>The personal<span>Training you</span><span>Deserve</span></h1>
                    <p class="pb-4 pt-3">Book personal training experience.</p>
                    <a href="" class="btn modal-view" data-toggle="modal" data-target="#loginModal">Read More <i class="fa fa-long-arrow-right pl-2" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="col-md-6 order-1 order-md-2 hero-right text-center mb-5 mb-md-0">
                <img src="{{asset('public/assets/images/payment-hero.webp')}}" alt="image">
            </div>
        </div>
    </div>
</div>
<!-- card section -->
<div class="container-fluid home-card-section  py-3">
    <div class="container ">
        <div class="row ">
            <div class="col-md-6 col-lg-4 py-3 card-wrapper-outer">
                <div class="card-wrapper py-3 px-2 px-sm-4" data-aos="flip-left">
                    <div class="icon-wrapper">
                        <img class="active-image" src="{{asset('public/assets/images/card-icon-three-y.svg')}}" alt="image">
                        <img class="hover-image" src="{{asset('public/assets/images/card-icon-three-w.svg')}}" alt="image">
                    </div>
                    <h1 class="py-3">Experience</h1>
                    <p>Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.
                    </p>
                    <a href="#" class="modal-view" data-toggle="modal" data-target="#loginModal">Read More <i class="fa fa-long-arrow-right pl-1" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 py-3 card-wrapper-outer">
                <div class="card-wrapper py-3 px-2 px-sm-4" data-aos="flip-left">
                    <div class="icon-wrapper">
                        <img class="active-image" src="{{asset('public/assets/images/card-icon-one-y.svg')}}" alt="image">
                        <img class="hover-image" src="{{asset('public/assets/images/card-icon-one-w.svg')}}" alt="image">
                    </div>
                    <h1 class="py-3">Coach Trainer</h1>
                    <p>Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.
                    </p>
                    <a href="#" class="modal-view" data-toggle="modal" data-target="#loginModal">Read More <i class="fa fa-long-arrow-right pl-1" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 py-3 card-wrapper-outer" data-aos="flip-left">
                <div class="card-wrapper py-3 px-2 px-sm-4">
                    <div class="icon-wrapper">
                        <img class="active-image" src="{{asset('public/assets/images/card-icon-two-y.svg')}}" alt="image">
                        <img class="hover-image" src="{{asset('public/assets/images/card-icon-two-w.svg')}}" alt="image">
                    </div>
                    <h1 class="py-3">Nutritional diet</h1>
                    <p>Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.
                    </p>
                    <a href="#" class="modal-view" data-toggle="modal" data-target="#loginModal">Read More <i class="fa fa-long-arrow-right pl-1" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <!-- rating section -->
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="rating-left py-3 py-md-5 text-center text-md-left" data-aos="zoom-in">
                    <img class="mb-5" src="{{asset('public/assets/images/feedback-icon.svg')}}" alt="image">
                    <h1>1400+</h1>
                    <div class="rating-star pb-2">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <h2 class="pb-2">Satisfied Customers</h2>
                    <p class="col-md-8 pl-0">Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.
                    </p>
                    <!-- <a href="" class="btn pl-0 modal-view" data-toggle="modal" data-target="#loginModal">Read More <i class="fa fa-long-arrow-right pl-2" aria-hidden="true"></i></a> -->

                </div>


            </div>
            <div class="col-md-6 mt-3">
                <div class="rating-right py-3" data-aos="zoom-in">
                    <img class="mb-3" src="{{asset('public/assets/images/rating-right.png')}}" alt="image">
                    <h1 class="col-sm-8 pl-0">Get In shape and training at the gym or home</h1>
                </div>
            </div>
        </div>
    </div>
    <img class="dot-left-one" src="{{asset('public/assets/images/dots.svg')}}" alt="image">
    <img class="dot-left-two" src="{{asset('public/assets/images/dots.svg')}}" alt="image">
    <img class="dot-right-one" src="{{asset('public/assets/images/dots.svg')}}" alt="image">
    <img class="dot-right-two" src="{{asset('public/assets/images/dots.svg')}}" alt="image">
</div>
<!-- slider section -->
<div class="container-fluid slider-section py-5">
    <div class="row">
        <div class="col-lg-4 slider-left-outer">
            <div class="slider-left pl-lg-5 text-center text-lg-left" data-aos="zoom-out">
                <h1 class="pb-2 pb-sm-3">Near by <span class="pt-sm-3">Trainers</span></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>

        </div>
        <div class="col-lg-8 slider-wrapper pl-sm-5">

            <!-- <div class="right-slider-upper"></div> -->
            <div class="row js-slick-carousel slider-wrapper-inner" data-aos="zoom-out">
                <div class="col">
                    <div class="trainer-card py-2 px-3">
                        <div class="trainer-card-left">
                            <img class="" src="{{asset('public/assets/images/rating-right.png')}}" alt="image">
                        </div>
                        <div class="trainer-card-right pl-4">
                            <div class="trainer-rating">
                                <h1 class="mr-3">Yoga</h1>
                                <div class="rating-star pb-1 pb-lg-2 d-flex">
                                    <i class="fa fa-star pr-1" aria-hidden="true"></i>
                                    <i class="fa fa-star px-1" aria-hidden="true"></i>
                                    <i class="fa fa-star px-1" aria-hidden="true"></i>
                                    <i class="fa fa-star px-1" aria-hidden="true"></i>
                                    <i class="fa fa-star pl-1" aria-hidden="true"></i>
                                    <h1 class="">(459)</h1>
                                </div>
                            </div>
                            <div class="trainer-name pb-1 pb-lg-2">
                                <h1 class="">John Smith</h1>
                                <p class="">Canada (ontario)</p>
                            </div>
                            <div class="trainer-price pb-2">
                                <!-- <h1>$15,63 <sup>Per Month</sup></h1> -->
                            </div>
                            <a href="" class="btn px-5 modal-view" data-toggle="modal" data-target="#loginModal">View</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="trainer-card py-2 px-3">
                        <div class="trainer-card-left">
                            <img class="" src="{{asset('public/assets/images/rating-right.png')}}" alt="image">
                        </div>
                        <div class="trainer-card-right pl-4">
                            <div class="trainer-rating">
                                <h1 class="mr-3">Yoga</h1>
                                <div class="rating-star pb-2 d-flex">
                                    <i class="fa fa-star pr-1" aria-hidden="true"></i>
                                    <i class="fa fa-star px-1" aria-hidden="true"></i>
                                    <i class="fa fa-star px-1" aria-hidden="true"></i>
                                    <i class="fa fa-star px-1" aria-hidden="true"></i>
                                    <i class="fa fa-star pl-1" aria-hidden="true"></i>
                                    <h1 class="pl-2">(459)</h1>
                                </div>
                            </div>
                            <div class="trainer-name pb-2">
                                <h1>John Smith</h1>
                                <p>Canada (ontario) </p>
                            </div>
                            <div class="trainer-price pb-2">
                                <!-- <h1>$15,63 <sup>Per Month</sup></h1> -->
                            </div>
                            <a href="" class="btn px-5 modal-view" data-toggle="modal" data-target="#loginModal">View</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="trainer-card py-2 px-3">
                        <div class="trainer-card-left">
                            <img class="" src="{{asset('public/assets/images/rating-right.png')}}" alt="image">
                        </div>
                        <div class="trainer-card-right pl-4">
                            <div class="trainer-rating">
                                <h1 class="mr-3">Yoga</h1>
                                <div class="rating-star pb-2 d-flex">
                                    <i class="fa fa-star pr-1" aria-hidden="true"></i>
                                    <i class="fa fa-star px-1" aria-hidden="true"></i>
                                    <i class="fa fa-star px-1" aria-hidden="true"></i>
                                    <i class="fa fa-star px-1" aria-hidden="true"></i>
                                    <i class="fa fa-star pl-1" aria-hidden="true"></i>
                                    <h1 class="pl-2">(459)</h1>
                                </div>
                            </div>
                            <div class="trainer-name pb-2">
                                <h1>John Smith</h1>
                                <p>Canada (ontario)</p>
                            </div>
                            <div class="trainer-price pb-2">
                                <!-- <h1>$15,63 <sup>Per Month</sup></h1> -->
                            </div>
                            <a href="" class="btn px-5 modal-view" data-toggle="modal" data-target="#loginModal">View</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- workout gallery -->
<div class="container-fluid workout-gallery">
    <div class="container py-lg-4">
        <div class="row">
            <div class="col-lg-4 gallery-content-wrapper" data-aos="zoom-out-right">
                <div class="gallery-content text-center text-lg-left py-4 py-lg-0">
                    <h1 class="pb-4">Search Our<span>Upcoming</span><span>Workouts</span> </h1>
                    <p>Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.
                    </p>
                    <a href="" class="btn pl-0 modal-view" data-toggle="modal" data-target="#loginModal">Read More <i class="fa fa-long-arrow-right pl-2" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6 p-3">
                        <div class="gallery-image gallery-image-one" data-aos="zoom-in-down">
                        </div>
                    </div>
                    <div class="col-lg-6 p-3 align-self-end">
                        <div class="gallery-image gallery-image-two" data-aos="zoom-in-down">
                        </div>
                    </div>
                    <div class="col-lg-6 p-3">
                        <div class="gallery-image gallery-image-three" data-aos="zoom-in-down">
                        </div>
                    </div>
                    <div class="col-lg-6 p-3">
                        <div class="gallery-image gallery-image-four" data-aos="zoom-in-down">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img class="dotc-left-one" src="{{asset('public/assets/images/dots-c.svg')}}" alt="image">
    <img class="dot-right-two" src="{{asset('public/assets/images/dots-c.svg')}}" alt="image">
    <img class="dotc-right-one" src="{{asset('public/assets/images/dots-c.svg')}}" alt="image">

</div>
<!-- contact section -->
<div class="container-fluid contact-section contactUs position-relative" id="contact-us">
    <div class="container py-4 ">
        <div class="col-12 text-center contact-heading pb-sm-5" data-aos="fade-up">
            <h1>Contact Us</h1>
        </div>
        <form action="{{url('contact')}}" method="post">
            @csrf
            <div class="row pt-sm-4">
                <div class="col-md-4">
                    <div class="form-group form-field" data-aos="fade-up" data-aos-delay="100">
                        <label for="fullname" class="pb-sm-2">Full Name</label>
                        <input type="text" class="form-control" id="fullname" name="full_name">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group form-field" data-aos="fade-up" data-aos-delay="200">
                        <label for="email" class="pb-sm-2">Email</label>
                        <input type="email" class="form-control" id="contactemail" name="email">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group form-field" data-aos="fade-up" data-aos-delay="300">
                        <label for="pNumber" class="pb-sm-2">Phone Number</label>
                        <input type="text" class="form-control" id="pNumber" name="phone_number">
                    </div>
                </div>
                <div class="col-12 mt-sm-4">
                    <div class="form-group form-field" data-aos="fade-up" data-aos-delay="400">
                        <label for="message" class="pb-sm-2">Message</label>
                        <textarea class="form-control" id="message" rows="7" name="message"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-right" data-aos="fade-up" data-aos-delay="400">
                    <button class="px-5 py-2 sendContactBtn" type="submit" name="submit">Send</button>
                </div>
            </div>
        </form>

    </div>
    <img class="circleElement1" src="{{asset('public/assets/images/dots-c.svg')}}" alt="">
    <img class="circleElement2" src="{{asset('public/assets/images/dots-c.svg')}}" alt="">
</div>
<!-- black div -->
<div class="container-fluid py-3 py-sm-5" style="background-color:white;"></div>
<!-- Footer Section  -->
<footer>
    <div class="container-fluid footerSection">
        <div class="row px-sm-5 px-2">
            <div class="col-xl-4 col-md-6 text-md-left text-center" data-aos="fade-up" data-aos-delay="100">
                <a class="navbar-brand web-logo" href="#"> <img src="{{asset('public/assets/images/logo-f.svg')}}" alt="image"></a>
                <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit minima debitis reprehenderit quasi unde eum libero fuga impedit molestiae et.</p>
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
            <div class="col-xl-4 col-md-6 order-xl-4 order-md-3 mt-xl-0 mt-3 text-md-left text-center" data-aos="fade-up" data-aos-delay="400">
                <ul class="quickLinks mx-auto">
                    <li class="mb-3 text-md-white"><strong>Questions?</strong></li>
                    <li class="mb-2"><a href="#contact-us">Contact Us</a></li>
                    <li class="mb-2"><a href="{{url('/faq')}}">FAQ's</a></li>

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
                <h2>Forget <span>Password</span></h2>
                <img class="close-modal" style="width: 8%;" data-dismiss="modal" src="{{asset('public/assets/images/x-circle.svg')}}" alt="">
            </div>
            <form action="">
                <div class="modalContent py-3 ">
                    <div class="text-center">
                        <img style="width: 55%;" src="{{asset('public/assets/images/forget-pass.svg')}}" alt="">
                    </div>
                    <input type="text" class="my-2 modal-input" placeholder="Email" id="forgot_email">
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
                <h2>Forget <span>Password</span></h2>
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
<script>
    $(document).ready(function() {
        // Signup API Call 
        $('#sighnup_submit').on('click', function(e) {
            $('.loaderDiv').show();

            e.preventDefault();
            var first_name = $('#first_name').val();
            var last_name = $('#last_name').val();
            var name = first_name + ' ' + last_name;
            var email = $('#email').val();
            var password = $('#password').val();
            var password_confirmation = $('#password_confirmation').val();

            if (first_name != "" && last_name != "" && email != "" && password != "") {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },

                    url: `{{route('register')}}`,
                    type: "POST",
                    data: {
                        name: name,
                        email: email,
                        password: password,
                        password_confirmation: password_confirmation,

                    },
                    cache: false,
                    success: function(dataResult) {
                        console.log(dataResult);
                        if (dataResult.success == true) {
                            $('.loaderDiv').hide();
                            $('#signupModal').modal('hide');
                            $('#loginModal').modal('show');
                            toastr.success('Registration Successful!');
                        } else if (dataResult.success == false) {
                            $('.loaderDiv').hide();
                            toastr.error(dataResult.message);
                        }
                    },
                    error: function(jqXHR, exception) {
                        $('.loaderDiv').hide();
                        toastr.error(jqXHR.responseJSON.message);
                    }

                });
            } else {
                toastr.error("Please Fill All Fields.");
                $('.loaderDiv').hide();
            }
        });
        // Login API Call 
        $('#login_submit').on('click', function(e) {
            $('.loaderDiv').show();
            e.preventDefault();
            var email = $('#login_email').val();
            var password = $('#login_password').val();

            if (email != "" && password != "") {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },

                    url: `{{route('login')}}`,
                    type: "POST",
                    data: {

                        email: email,
                        password: password,

                    },
                    cache: false,
                    success: function(dataResult) {
                        console.log(dataResult);
                        window.location.href = `{{url('/trainers')}}`;

                    },
                    error: function(jqXHR, exception) {
                        $('.loaderDiv').hide();
                        toastr.error(jqXHR.responseJSON.message);
                    }
                });
            } else {
                $('.loaderDiv').hide();
                toastr.error('Please fill all the field !');
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
        // Send OTP API Call 
        $('#forgot_submit').on('click', function(e) {
            $('.loaderDiv').show();
            e.preventDefault();

            var email = $('#forgot_email').val();
            if (email != "") {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },

                    url: `{{route('verifyEmail')}}`,
                    type: "POST",
                    data: {
                        email: email,
                    },
                    cache: false,
                    success: function(dataResult) {
                        $('.loaderDiv').hide();
                        document.getElementById("resendCode_d").style.color = 'gray';
                        document.getElementById("resendCode_d").style.cursor = 'default';
                        document.getElementById("resendCode_d").classList.remove('forgot_submit');
                        sessionStorage.setItem("email", email);
                        $('#forgotPassModal').modal('hide');
                        $('#verifyOtpModal').modal('show');

                        // 4 minutes Countdown For resend Code 
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
                                document.getElementById("resendCode_d").style.color = '#E37048';
                                document.getElementById("resendCode_d").style.cursor = 'pointer';
                                document.getElementById("resendCode_d").classList.add('forgot_submit');
                            }
                        }, 1000);
                    },
                    error: function(jqXHR, exception) {
                        $('.loaderDiv').hide();
                        toastr.error(jqXHR.responseJSON.message);
                    }
                });
            } else {
                // alert('Please fill all the field !');
                $('.loaderDiv').hide();
                toastr.error("Please Fill All Fields.");
            }
        });
        // Verify OTP API Call 
        $('#otp_submit').on('click', function(e) {
            $('.loaderDiv').show();
            e.preventDefault();
            var otp_code = $('#otp1').val() + $('#otp2').val() + $('#otp3').val() + $('#otp4').val() + $('#otp5').val() + $('#otp6').val();
            var email = sessionStorage.getItem("email");

            if (otp_code != "") {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: `{{route('verifyOTP')}}`,
                    type: "POST",
                    data: {
                        email: email,
                        otp_code: otp_code,
                    },
                    cache: false,
                    success: function(dataResult) {
                        console.log(dataResult);
                        if (dataResult.success == true) {
                            $('.loaderDiv').hide();
                            $('#verifyOtpModal').modal('hide');
                            $('#resetPassModal').modal('show');
                        } else if (dataResult.success == false) {
                            $('.loaderDiv').hide();
                            toastr.error(dataResult.message);
                        }
                    },
                    error: function(jqXHR, exception) {
                        $('.loaderDiv').hide();
                        toastr.error(jqXHR.responseJSON.message);
                    }
                });
            } else {
                $('.loaderDiv').hide();
                toastr.error('Please fill all fields!');
            }
        });
        // Update Password API Call 
        $('#update_password').on('click', function(e) {
            $('.loaderDiv').show();
            e.preventDefault();
            var password = $('#new_password').val();
            var password_confirmation = $('#confirm_password_reset').val();
            var email = sessionStorage.getItem("email");

            if (password != "" && password_confirmation != "") {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: `{{route('updatePassword')}}`,
                    type: "POST",
                    data: {
                        email: email,
                        password: password,
                        password_confirmation: password_confirmation,
                    },
                    cache: false,
                    success: function(dataResult) {
                        if (dataResult.success == true) {
                            $('.loaderDiv').hide();
                            $('#resetPassModal').modal('hide');
                            $('#loginModal').modal('show');
                            toastr.success('Password updated successfully!');
                        } else if (dataResult.success == false) {
                            $('.loaderDiv').hide();
                            toastr.error(dataResult.message);
                        }
                    },
                    error: function(jqXHR, exception) {
                        $('.loaderDiv').hide();
                        toastr.error(jqXHR.responseJSON.message);
                    }
                });
            } else {
                $('.loaderDiv').hide();
                toastr.error('Please fill all fields!');
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
<!-- <script>
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
</script> -->
<!-- <script>
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
</script> -->
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
            $('.login-right-inner-addon i').css('color', '#FF0000')
        }

    })

    $(".cpassInput").on('keyup', function() {
        let values = $(".cpassInput").val();
        if (values.length >= 6) {
            $(".cpassInput").removeClass('login-email-field-red');
            $(".cpassInput").addClass('login-email-field-green');
            $('.confirm-right-inner-addon i').css('color', '#151C00')
        } else {
            $(".cpassInput").removeClass('login-email-field-green');
            $(".cpassInput").addClass('login-email-field-red');
            $('.confirm-right-inner-addon i').css('color', '#FF0000')
        }

    })

    $(".signpassInput").on('keyup', function() {
        let values = $(".signpassInput").val();
        if (values.length >= 6) {
            $(".signpassInput").removeClass('login-email-field-red');
            $(".signpassInput").addClass('login-email-field-green');
            $('.sign-right-inner-addon i').css('color', '#151C00')
        } else {
            $(".signpassInput").removeClass('login-email-field-green');
            $(".signpassInput").addClass('login-email-field-red');
            $('.sign-right-inner-addon i').css('color', '#FF0000')
        }

    })
</script>
<script>
    $('#loginhidePass').hide();
    $('#loginshowPass').click(function() {
        $('#loginshowPass').hide();
        $('#loginhidePass').show();
        ////login password
        var passInput = $("#login_password");
        if (passInput.attr('type') === 'password') {
            passInput.attr('type', 'text');
        } else {
            passInput.attr('type', 'password');
        }

    })
    /////signup confirm password

    $('#confirmhidePass').hide();
    $('#confirmshowPass').click(function() {
        $('#confirmshowPass').hide();
        $('#confirmhidePass').show();
        var cpassInput = $("#password_confirmation");
        if (cpassInput.attr('type') === 'password') {
            cpassInput.attr('type', 'text');
        } else {
            cpassInput.attr('type', 'password');
        }
    })
    /////signup password
    $('#signhidePass').hide();
    $('#signshowPass').click(function() {
        $('#signshowPass').hide();
        $('#signhidePass').show();
        var signPassInput = $("#password");
        if (signPassInput.attr('type') === 'password') {
            signPassInput.attr('type', 'text');
        } else {
            signPassInput.attr('type', 'password');
        }
    })
    $('#loginhidePass').on('click', function() {
        $('#loginhidePass').hide();
        $('#loginshowPass').show();
        var passInput = $("#login_password");
        if (passInput.attr('type') === 'password') {
            passInput.attr('type', 'text');
        } else {
            passInput.attr('type', 'password');
        }
    })

    ////// sign up confirm password
    $('#confirmhidePass').on('click', function() {
        $('#confirmhidePass').hide();
        $('#confirmshowPass').show();
        var cpassInput = $("#password_confirmation");
        if (cpassInput.attr('type') === 'password') {
            cpassInput.attr('type', 'text');
        } else {
            cpassInput.attr('type', 'password');
        }
    })
    //////////sign up password
    $('#signhidePass').on('click', function() {
        $('#signhidePass').hide();
        $('#signshowPass').show();
        var signPassInput = $("#password");
        if (signPassInput.attr('type') === 'password') {
            signPassInput.attr('type', 'text');
        } else {
            signPassInput.attr('type', 'password');
        }
    })
</script>
@endsection