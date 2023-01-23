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
@include('includes.website.navbar-two')
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
<div class="container">
    <div class="about-content">
        <h1>Heading</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci vitae similique nulla asperiores doloremque suscipit laborum mollitia? Voluptates veniam minus ipsa modi optio consequatur eaque, sapiente aspernatur eligendi adipisci dolorem, cumque libero numquam nulla quibusdam quasi facere recusandae eum quo rem aliquam exercitationem totam! Quidem, placeat illo autem porro optio voluptates voluptate repellendus recusandae laborum odit nemo, magnam, omnis a animi beatae ab consequuntur accusantium. Libero in voluptatum, ut natus sapiente, cum dolore laborum cupiditate illo possimus unde, neque illum perferendis quibusdam! Ab at nisi vitae optio quia id, exercitationem quae. Ipsum nihil ut unde aliquam omnis excepturi ex dolorem dolor nisi reprehenderit nobis accusantium velit, impedit saepe similique nesciunt! Consectetur recusandae rerum esse sunt odio. Minus, repellendus. In fugiat dolorem aut maxime minima aliquam dolore provident magni odit delectus earum consequatur, vel iure molestiae mollitia quidem autem facere nostrum voluptas? Doloribus magnam praesentium odio ab animi ipsum quos id.</p>
    </div>
    <div class="about-content">
        <h1>Heading</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci vitae similique nulla asperiores doloremque suscipit laborum mollitia? Voluptates veniam minus ipsa modi optio consequatur eaque, sapiente aspernatur eligendi adipisci dolorem, cumque libero numquam nulla quibusdam quasi facere recusandae eum quo rem aliquam exercitationem totam! Quidem, placeat illo autem porro optio voluptates voluptate repellendus recusandae laborum odit nemo, magnam, omnis a animi beatae ab consequuntur accusantium. Libero in voluptatum, ut natus sapiente, cum dolore laborum cupiditate illo possimus unde, neque illum perferendis quibusdam! Ab at nisi vitae optio quia id, exercitationem quae. Ipsum nihil ut unde aliquam omnis excepturi ex dolorem dolor nisi reprehenderit nobis accusantium velit, impedit saepe similique nesciunt! Consectetur recusandae rerum esse sunt odio. Minus, repellendus. In fugiat dolorem aut maxime minima aliquam dolore provident magni odit delectus earum consequatur, vel iure molestiae mollitia quidem autem facere nostrum voluptas? Doloribus magnam praesentium odio ab animi ipsum quos id.</p>
    </div>
</div>
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
                    <li class="mb-2"><a href=" {{url('/about-l')}}">About Us</a></li>
                    <li class="mb-2"><a href=" {{url('/services-l')}}">Services</a></li>
                    <li class="mb-2"><a href=" {{url('/term-l')}}">Terms and Conditions</a></li>

                </ul>
            </div>
            <div class="col-xl-2 col-md-6 order-xl-3 order-md-4 mt-xl-0 mt-3 text-md-left text-center" data-aos="fade-up" data-aos-delay="300">
                <ul class="quickLinks mx-auto">
                    <!-- <li class="mb-3 text-md-white"><strong>Customer Area</strong></li> -->
                    <li class="mb-2"><a href=" {{url('/approach-l')}}">Our Approach</a></li>
                    <li class="mb-2"><a href=" javascript:void(0)" class="modal-view invisible" data-toggle="modal" data-target="#loginModal">Get Started</a></li>

                </ul>
            </div>
            <div class="col-xl-4 col-md-6 order-xl-4 order-md-3 mt-xl-0 mt-3 text-md-left text-center" data-aos="fade-up" data-aos-delay="400">
                <ul class="quickLinks mx-auto">
                    <li class="mb-3 text-md-white"><strong>Questions?</strong></li>
                    <li class="mb-2"><a href="{{('trainers')}}#contact-us">Contact Us</a></li>

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
@endsection
@section('insertfooter')
@endsection