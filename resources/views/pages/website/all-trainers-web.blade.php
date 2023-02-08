@extends('layouts.website.default')
@section('content')
<style>
    .training-session-header-outer {
        background: #F4F4F4;
    }

    .training-session-header-outer {
        position: relative;
    }

    .dots-one {
        position: absolute;
        width: 100px;
        bottom: 0%;
        left: 50%;
        transform: translate(-50%, 0%);
    }

    .dots-two {
        position: absolute;
        width: 100px;
        top: 50%;
        left: 90%;
        transform: translate(-50%, -50%);
    }

    @media screen and (max-width:1200px) {

        .dots-one,
        .dots-two {
            display: none;
        }
    }

    input[type="file"] {
        display: none;
    }

    .hero-section-upload {
        color: #fff;
        background: linear-gradient(180deg, #FFBB00 0%, #E37048 100%);
        border-radius: 7px;
        padding: 15px 40px;
        font-size: 1rem;
        font-weight: 600;
        /* width: 50%; */
        margin: 0 auto;
        cursor: pointer;
        width: 100%;
        max-width: 204px;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    @media screen and (max-width:576px) {
        .hero-section-upload {
            font-size: 0.9rem;
            width: 100%;
            margin: 0 auto;
        }
    }

    @media screen and (max-width:991px) {
        .hero-section-upload {
            width: 70%;
            margin: 0 auto;
        }
    }

    .viewAllSessions_s button {
        padding: 8px 20px;
        background: #f8693c;
        border: none;
        color: white;
        border-radius: 20px;
    }
</style>
@include('includes.website.navbar-two')
<div class="container-fluid hero-section">
    <div class="container hero-section-wrapper" data-aos="fade-left">
        <div class="row">
            <div class="col-md-6 order-2 order-md-1 hero-left text-center text-md-left">
                <div class="hero-left-content heroText">
                    <h1>Get Your Workout With The Perfect <span>Trainers</span></h1>
                    <p class="pb-4 pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero nisi ratione esse qui, explicabo fugit voluptatum eum quae obcaecati in?</p>
                </div>
            </div>
            <div class="col-md-6 order-1 order-md-2 hero-right text-center mb-5 mb-md-0 ">
                <img src="{{asset('public/assets/images/payment-hero.webp')}}" alt="image">
                <!-- <label class="hero-section-upload my-4"> Upload Image
                    <input type="file" size="60">
                </label> -->
            </div>
        </div>
    </div>
</div>

<!-- All Trainers section -->
<div class="container-fluid training-session px-0 pt-5">
    <div class="container-fluid  training-session-header-outer pl-sm-5 mt-4 py-3 py-sm-5">
        <div class="training-session-header text-center text-sm-left pb-0 pt-0" data-aos="zoom-in">
            <h1>Browse Our <span> Latest Sessions</span> </h1>
        </div>
        <img class="dots-one" src="{{asset('public/assets/images/dots.svg')}}" alt="image">
        <img class="dots-two" src="{{asset('public/assets/images/dots.svg')}}" alt="image">
    </div>
    <div class="row px-sm-5 mt-4 py-3 py-sm-5 ">
        <div class="col-12 text-right viewAllSessions_s">
            <a href="{{url('/dashboard/categories/1')}}">
                <button>View All</button>
            </a>
        </div>
        @if(isset($sessions) && !empty($sessions))
        @foreach($sessions as $session)
        <div class="col-md-6" data-aos="zoom-in">
            <div class="experienced-trainer-card-double mx-4">
                <div class="experienced-trainer-card my-5">
                    <div class="experienced-trainer-card-left">
                        <img class="" src="{{asset('public/assets/images/rating-right.png')}}" alt="">
                    </div>
                    <div class="experienced-trainer-card-right pl-2">
                        <h1> {{$session['category']['title']}}</h1>
                        <div class="trainer-card-rating">
                            <h1>{{$session['trainer_data']['country']}}<span>{{$session['trainer_data']['state']}}</span></h1>
                            <div class="rating-star pb-2 pl-2">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                        <p>{{$session['trainer_data']['about']}}</p>
                        <a href="{{url('/dashboard/class-detail/'.$session['trainer_data']['id'].'/'.$session['day'])}}" class="btn pl-0 pb-1 pb-sm-3">Read More <i class="fa fa-long-arrow-right pl-2" aria-hidden="true"></i></a>
                        <div class="book-now-btn">
                            <a href="{{url('/dashboard/class-detail/'.$session['trainer_data']['id'].'/'.$session['day'])}}" class="btn">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>

    {{-- <div class="training-session-card-outer pb-3 pl-2 pl-sm-5">
        @if(isset($userdata) && !empty($userdata))
        @foreach($userdata as $data)
        <?php if (count($data['trainer_category']) == 0) {
            continue;
        } ?>
        <a href="{{url('/trainers/'.$data['id'])}}">
    <div class="training-session-card mx-3" data-aos="flip-left">
        <div class="card__overlay"></div>
        <i class="fa fa-arrows-alt" aria-hidden="true"></i>
        <img src="{{asset('public/assets/images/trainer1.svg')}}" alt="image">
        <div class="training-session-card-content px-3 pb-2">
            <div class="training-card-content-top">
                <div class="training-card-content-top-left">
                    <h1>{{$data['title']}}</h1>
                </div>
                <div class="training-card-content-top-right">
                    <h1>{{count($data['trainer_category'])}}</h1>
                </div>
            </div>
            <div class="training-card-content-bottom">
                <p>{{$data['description']}} </p>
            </div>
        </div>
    </div>
    </a>
    @endforeach
    @endif
</div>--}}


</div>


<!-- contact section -->
<!-- <div class="container-fluid contact-section contactUs position-relative" id="contact-us">
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
                    <button class="px-5 py-2 sendContactBtn" type="submit">Send</button>
                </div>
            </div>
        </form>

    </div>
    <img class="circleElement1" src="{{asset('public/assets/images/dots-c.svg')}}" alt="">
    <img class="circleElement2" src="{{asset('public/assets/images/dots-c.svg')}}" alt="">
</div> -->
<!-- black div -->
<!-- <div class="container-fluid py-3 py-sm-5" style="background-color:white;"></div> -->

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
                    <li class="mb-2"><a href="#contact-us">Contact Us</a></li>

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

<script>
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
    $('.nav-list .nav-item:nth-of-type(2)').addClass('active')
</script>
@endsection