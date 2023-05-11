@extends('layouts.website.default')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.1/flexslider.css">
<style>
    .hero-section-about {
        background:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url("{{asset('public/assets/trainerimages/cs_aboutUs_3.jpg')}}");
        background-repeat: no-repeat;
        background-size: cover;
        /* background-position: center center; */
        background-position: 10% 40%;
        padding-top: 6rem;
        padding-bottom: 6rem;
        text-align: center;

    }

    .hero-left-content h1 {
        font-size: 3.9rem;
        color: white;
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
        width: 100%;
        max-width: 400px;
        margin: 0 auto;
        max-height: 300px;
        object-fit: cover;
        border-radius: 30px;
    }

    /* new-section */
    .trophy-icon i {
        color: #E37048;
        font-size: 2rem;
    }

    .about-section-two {
        max-width: 1500px;
        border-bottom: 1px solid #80808047;
    }


    .about-section-two h1 {
        color: #111418;
        font-size: 2rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: normal !important;
        font-family: "Poppins", sans-serif !important;
    }

    .about-section-two p {
        font-size: 18px !important;
        font-weight: 300 !important;
        font-family: "Poppins", sans-serif !important;
    }

    @media screen and (max-width:1566px) {
        .about-section-two {
            max-width: 1000px;
        }
    }

    .ceo-title-section {
        display: flex;
        align-items: center;
        max-width: 1500px;
        margin: 0 auto;
        justify-content: center;
        flex-wrap: wrap;
        text-align: center;
    }

    .ceo-title-section img {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        object-fit: cover;
    }

    .ceo-profile h1 {
        font-size: 2rem;
        color: #E37048;
        font-weight: 700;
    }

    .ceo-profile p {
        font-size: 1.2rem;
        color: #111418;
        font-weight: 400;

    }

    .ceo-content-section {
        box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
        max-width: 1500px;
        margin: 0 auto;
        padding: 2rem 3rem;
        border-radius: 10px;
    }

    @media screen and (max-width:576px) {
        .ceo-content-section {
            padding: 2rem 1rem;
        }

        .ceo-content-text p {
            text-align: center;
        }

        .ceo-content-icon {
            text-align: center;
        }
    }

    .quote-message p {
        font-size: 22px !important;
        font-weight: 300 !important;
        line-height: 32px !important;
        margin-bottom: 0px;
        color: #111418;
        max-width: 800px;
        margin: 0 auto;
        text-align: center;
        padding-bottom: 2.5rem;
    }

    .quote-message p sub,
    .quote-message p sup {
        color: #E37048;
    }

    .ceo-content-text p {
        font-size: 0.9rem;
        color: #00000080;
    }

    .ceo-content-icon img {
        width: 50px;
    }

    @media screen and (max-width:1566px) {
        .ceo-content-section {
            box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
            max-width: 1000px;
            margin: 0 auto;
        }

        .ceo-title-section {
            display: flex;
            align-items: center;
            max-width: 1000px;
            margin: 0 auto;
        }
    }

    .hero-section {
        /* max-width: 1500px; */
        margin: 0 auto;
        /* background: transparent !important; */
    }
    .per-heading1{
        display: flex;
        justify-content:flex-start;
        align-items:center;
        background: url("{{asset('public/assets/images/gym-one-gradiant.png')}}");
        height:45rem;
        background-size: cover;
    }
    .per-heading1-left{
        display:flex;
        flex-direction:column;
        align-items:center;
        width:50%;
    }

    .per-heading1 h1 {
        color: white;
        font-size: 2rem;
    }

    .per-heading1 p {
        color: white;
        font-size: 0.9rem;
        width:75%;
    }

    .per-heading2{
        display: flex;
        justify-content:flex-start;
        align-items:center;
        background: url("{{asset('public/assets/images/gym-two-gradiant.png')}}");
        height: 45rem;
        background-size: cover;
    }
    .per-heading2-left{
        display:flex;
        flex-direction:column;
        align-items:center;
        width:50%;
    }

    .per-heading2 h1 {
        color: white;
        font-size: 2rem;
        
    }

    .per-heading2 p {
        color: white;
        font-size: 0.9rem;
        width:75%;
    }

    @media screen and (max-width:1566px) {
        .hero-section {
            background: transparent !important;
        }
    }
    @media screen and (max-width:768px) {
        .per-heading1{
            justify-content:center;
        }
        .per-heading2{
            justify-content:center;
        }
        .per-heading2-left{
        width:80%;
    }
    .per-heading1-left{
        width:80%;
    }
    }
    @media screen and (max-width:576px) {
    
        .per-heading2-left{
        width:100%;
    }
    .per-heading1-left{
        width:100%;
    }
    }
</style>
@include('includes.website.navbar-two')
<div class="container-fluid hero-section-about">
    <div class="container-fluid hero-section-wrapper-about" data-aos="fade-left">
        <div class="col-12 hero-left text-center text-md-left">
            <div class="hero-left-content my-sm-5 px-sm-5 text-center text-md-left">
                <h1 class="my-4">ABOUT US</h1>
                <p class="col-md-6 pl-0">With WorkitPT, clients can filter through a list of sessions provided by various personal trainers for any form of exercise or sport they wish to partake in and simply sign up for the session, agree a time and a location, then get to work!</p>
            </div>
        </div>

    </div>
</div>
<div class="container-fluid about-section-two text-center py-5 my-3">
    <div class="trophy-icon ">
        <i class="fa fa-trophy" aria-hidden="true"></i>
    </div>
    <h1 class="py-4 mb-0">What makes us different</h1>
    <p class="mb-0">Regardless of your current fitness level or experience, you can expect a fully personalised fitness programme. R1:1 sessions mean more time for you. TruBe trainers are trained in everything from kickboxing to ballet fit, each trainer has been cherry-picked through a rigorous selection process, so you can be confident you have the best of the best and the best workout routine at home.</p>
</div>
<div class="container-fluid pt-5 py-sm-5">
    <div class="ceo-section">
        <div class="ceo-title-section ">
            <img src="{{asset('public/assets/images/payment-hero.webp')}}" alt="">
            <div class="ceo-profile pl-3">
                <h1>John Smith</h1>
                <p>Founder and CEO of WORKITPT</p>
            </div>
        </div>
        <div class="ceo-content-section my-5">
            <div class="quote-message">
                <p><sup><i class="fa fa-quote-left" aria-hidden="true"></i></sup> It’s so important to listen to yourself and be true to where you want to be as a person. <sub><i class="fa fa-quote-right" aria-hidden="true"></i></sub></p>
            </div>
            <div class="ceo-content-text">
                <p>As the founder of our workout site, I am proud to lead a team of dedicated trainers and fitness enthusiasts who are passionate about helping individuals achieve their fitness goals. Our site was created with the vision of providing a platform where people can access high-quality fitness programs and training sessions from experienced professionals, regardless of their location or fitness level.</p>
                <p>For many years, I have been involved in the fitness industry, and have witnessed firsthand the transformative power of regular exercise and a healthy lifestyle. I have seen how fitness can improve not only physical health, but also mental health, self-confidence, and overall quality of life. It is this belief in the power of fitness that inspired me to create this platform and offer people the opportunity to access quality fitness training.</p>

                <p>Our site is built on the principles of personalized training, convenience, and accessibility. We believe that every individual deserves the opportunity to achieve their fitness goals, regardless of their schedule or location. With our platform, users can book personalized training sessions with experienced trainers, and access a variety of workouts that can be done from the comfort of their own home or at their local gym.</p>
                <p>At our workout site, we are committed to providing a world-class fitness experience, and helping individuals unlock their full potential. Whether you're just starting out on your fitness journey or you're an experienced athlete, our team of trainers is here to support you every step of the way. We invite you to join our community of fitness enthusiasts and experience the power of personalized training for yourself.</p>
            </div>
            <div class="ceo-content-icon">
                <img src="{{asset('public/assets/images/dumbbell.png')}}" alt="">
            </div>
        </div>
    </div>
</div>

<section class="hero-section about-us-mobile">
    <div class="container-fluid">
        <div class="left-section-par ">
            <div class="row">
                <div class="col-md-12 my-auto text-center px-0 py-5 py-md-0 ">
                    <div class="per-heading1">
                        <div class="per-heading1-left">
                            <h1 class="pb-2 pb-md-3 mb-0">Transforming Personal Training</h1>
                            <p class="mb-0">Our curated list of personal trainers are able to provide quality services ranging from weight loss advice, nutrition advice, 1 on 1 training sessions, fitness mentoring and coaching, online coaching, group sessions and more. We help our clients connect with high quality professional trainers who can meet their needs and are available in-person or online.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="hero-section about-us-mobile py-5">
    <div class="container-fluid py-3">
        <div class="left-section-par ">
            <div class="row">
            <div class="col-md-12 my-auto text-center px-0 py-5 py-md-0 ">
                    <div class="per-heading2">
                        <div class="per-heading2-left">
                        <h1 class="pb-2 pb-md-5 mb-0">A Modern Approach</h1>
                        <p class="mb-0">It’s essential for us that our clients get the training they deserve, without the hassle of committing to a year or a certain package. Rather than do things the typical way, we’ve created a system designed around our clients’ needs that holds them and their trainers accountable and committed to achieving the desired results. </p>
                    </div>
                </div>
            </div>
                <!-- <div class="col-md-6 Transforming-img px-0 text-center my-auto order-2 order-md-1">
                    <img src="{{asset('public/assets/images/gym-two.jpg')}}" alt="">

                </div>
                <div class="col-md-6 my-auto text-center py-5 py-md-0 per-heading order-1 order-md-2">

                </div> -->

            </div>
        </div>

    </div>
</section>
<!-- Footer Section  -->
<footer>
    <div class="container-fluid footerSection">
        <div class="row px-sm-5 px-2">
            <div class="col-xl-4 offset-xl-1 col-md-6 text-md-left text-center" data-aos="fade-up" data-aos-delay="100">
                <a class="navbar-brand web-logo" href="{{url('/home')}}"> <img src="{{asset('public/assets/images/logo-f.svg')}}" alt="image"></a>
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


@endsection
@section('insertfooter')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 

<script>
    $('.nav-lists .nav-item:nth-of-type(2)').addClass('active')
</script>
@endsection