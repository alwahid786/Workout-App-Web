@extends('layouts.website.default')
@section('content')
<style>
    .backgroundGray {
        position: relative;
    }

    .dots {
        position: absolute;
        top: 50px;
        right: 10%;
        width: 3%;
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
</style>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.1/flexslider.css">
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
            <div class="col-md-6 order-1 order-md-2 hero-right text-center mb-5 mb-md-0">
                <img src="{{asset('public/assets/images/payment-hero.webp')}}" alt="image">
                <label class="hero-section-upload my-4"> Upload Image
                    <input type="file" size="60">
                </label>
            </div>
        </div>
    </div>
</div>
<!-- Specific Trainers section -->
<div class="container-fluid home-card-section backgroundGray py-3">
    <img class="dots" src="{{asset('public/assets/images/dots-c.svg')}}" alt="">
    <div class="yogaTrainerSection mx-auto">
        <div class="row pt-md-5 pt-3 px-sm-5 px-3">
            <div class="col-md-6 text-sm-left text-center" data-aos="zoom-in">

                <div class="experienced-trainer-header ss pt-3">
                    <h1><span> 10 Years of</span> Experience</h1>
                    <h1>in Fitness</h1>
                </div>
                <div class="my-xl-5 my-3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi odio assumenda possimus doloribus ipsum ducimus dolore cum culpa id quod.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi odio assumenda possimus doloribus ipsum ducimus dolore cum culpa id quod.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi odio assumenda possimus doloribus ipsum ducimus dolore cum culpa id quod.</p>
                </div>
            </div>
            <div class="col-md-6" data-aos="zoom-out">
                <div class="overflow-hidden w-100 text-center ">
                    <img class=" trainerImg" src="{{asset('public/assets/images/yogaTrainer.svg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Specific Trainer carousel Section  -->
<div class="container-fluid home-card-section  py-5 pl-sm-5 ">
    <div class="experienced-trainer-header pt-3 text-sm-left text-center" data-aos="zoom-out">
        <h1><span>Our </span>Yoga</h1>
        <h1>Experienced Trainers</h1>
    </div>
    <div class="slider-right-effect-outer">
        <div class="row js-slick-carousel ">
            <div class="col" data-aos="zoom-in">
                <div class="experienced-trainer-card-double mx-4">
                    <div class="experienced-trainer-card my-5">
                        <div class="experienced-trainer-card-left">
                            <img class="" src="{{asset('public/assets/images/rating-right.png')}}" alt="">
                        </div>
                        <div class="experienced-trainer-card-right pl-2">
                            <h1> Ahmad Zayn</h1>
                            <div class="trainer-card-rating">
                                <h1>England<span>London</span></h1>
                                <div class="rating-star pb-2 pl-2">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            <a href="" class="btn pl-0 pb-1 pb-sm-3">Read More <i class="fa fa-long-arrow-right pl-2" aria-hidden="true"></i></a>
                            <div class="book-now-btn">
                                <a href="{{url('/dashboard/class-detail')}}" class="btn">Book Now</a>
                            </div>

                        </div>
                    </div>
                    <div class="experienced-trainer-card my-5">
                        <div class="experienced-trainer-card-left">
                            <img class="" src="{{asset('public/assets/images/rating-right.png')}}" alt="">
                        </div>
                        <div class="experienced-trainer-card-right pl-2">
                            <h1>Ahmad Zayn</h1>
                            <div class="trainer-card-rating">
                                <h1>England<span>London</span></h1>
                                <div class="rating-star pb-2 pl-2">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                            <a href="" class="btn pl-0 pb-1 pb-sm-3">Read More <i class="fa fa-long-arrow-right pl-2" aria-hidden="true"></i></a>
                            <div class="book-now-btn">
                                <a href="{{url('/dashboard/class-detail')}}" class="btn">Book Now</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col" data-aos="zoom-in">
                <div class="experienced-trainer-card-double mx-4">
                    <div class="experienced-trainer-card my-5">
                        <div class="experienced-trainer-card-left">
                            <img class="" src="{{asset('public/assets/images/rating-right.png')}}" alt="">
                        </div>
                        <div class="experienced-trainer-card-right pl-2">
                            <h1> Ahmad Zayn</h1>
                            <div class="trainer-card-rating">
                                <h1>England<span>London</span></h1>
                                <div class="rating-star pb-2 pl-2">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            <a href="" class="btn pl-0 pb-1 pb-sm-3">Read More <i class="fa fa-long-arrow-right pl-2" aria-hidden="true"></i></a>
                            <div class="book-now-btn">
                                <a href="{{url('/dashboard/class-detail')}}" class="btn">Book Now</a>
                            </div>

                        </div>
                    </div>
                    <div class="experienced-trainer-card my-5">
                        <div class="experienced-trainer-card-left">
                            <img class="" src="{{asset('public/assets/images/rating-right.png')}}" alt="">
                        </div>
                        <div class="experienced-trainer-card-right pl-2">
                            <h1>Ahmad Zayn</h1>
                            <div class="trainer-card-rating">
                                <h1>England<span>London</span></h1>
                                <div class="rating-star pb-2 pl-2">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                            <a href="" class="btn pl-0 pb-1 pb-sm-3">Read More <i class="fa fa-long-arrow-right pl-2" aria-hidden="true"></i></a>
                            <div class="book-now-btn">
                                <a href="{{url('/dashboard/class-detail')}}" class="btn">Book Now</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col" data-aos="zoom-in">
                <div class="experienced-trainer-card-double mx-4">
                    <div class="experienced-trainer-card my-5">
                        <div class="experienced-trainer-card-left">
                            <img class="" src="{{asset('public/assets/images/rating-right.png')}}" alt="">
                        </div>
                        <div class="experienced-trainer-card-right pl-2">
                            <h1> Ahmad Zayn</h1>
                            <div class="trainer-card-rating">
                                <h1>England<span>London</span></h1>
                                <div class="rating-star pb-2 pl-2">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            <a href="" class="btn pl-0 pb-1 pb-sm-3">Read More <i class="fa fa-long-arrow-right pl-2" aria-hidden="true"></i></a>
                            <div class="book-now-btn">
                                <a href="{{url('/dashboard/class-detail')}}" class="btn">Book Now</a>
                            </div>

                        </div>
                    </div>
                    <div class="experienced-trainer-card my-5">
                        <div class="experienced-trainer-card-left">
                            <img class="" src="{{asset('public/assets/images/rating-right.png')}}" alt="">
                        </div>
                        <div class="experienced-trainer-card-right pl-2">
                            <h1>Ahmad Zayn</h1>
                            <div class="trainer-card-rating">
                                <h1>England<span>London</span></h1>
                                <div class="rating-star pb-2 pl-2">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                            <a href="" class="btn pl-0 pb-1 pb-sm-3">Read More <i class="fa fa-long-arrow-right pl-2" aria-hidden="true"></i></a>
                            <div class="book-now-btn">
                                <a href="{{url('/dashboard/class-detail')}}" class="btn">Book Now</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col" data-aos="zoom-in">
                <div class="experienced-trainer-card-double mx-4">
                    <div class="experienced-trainer-card my-5">
                        <div class="experienced-trainer-card-left">
                            <img class="" src="{{asset('public/assets/images/rating-right.png')}}" alt="">
                        </div>
                        <div class="experienced-trainer-card-right pl-2">
                            <h1> Ahmad Zayn</h1>
                            <div class="trainer-card-rating">
                                <h1>England<span>London</span></h1>
                                <div class="rating-star pb-2 pl-2">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            <a href="" class="btn pl-0 pb-1 pb-sm-3">Read More <i class="fa fa-long-arrow-right pl-2" aria-hidden="true"></i></a>
                            <div class="book-now-btn">
                                <a href="{{url('/dashboard/class-detail')}}" class="btn">Book Now</a>
                            </div>

                        </div>
                    </div>
                    <div class="experienced-trainer-card my-5">
                        <div class="experienced-trainer-card-left">
                            <img class="" src="{{asset('public/assets/images/rating-right.png')}}" alt="">
                        </div>
                        <div class="experienced-trainer-card-right pl-2">
                            <h1>Ahmad Zayn</h1>
                            <div class="trainer-card-rating">
                                <h1>England<span>London</span></h1>
                                <div class="rating-star pb-2 pl-2">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                            <a href="" class="btn pl-0 pb-1 pb-sm-3">Read More <i class="fa fa-long-arrow-right pl-2" aria-hidden="true"></i></a>
                            <div class="book-now-btn">
                                <a href="{{url('/dashboard/class-detail')}}" class="btn">Book Now</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col" data-aos="zoom-in">
                <div class="experienced-trainer-card-double mx-4">
                    <div class="experienced-trainer-card my-5">
                        <div class="experienced-trainer-card-left">
                            <img class="" src="{{asset('public/assets/images/rating-right.png')}}" alt="">
                        </div>
                        <div class="experienced-trainer-card-right pl-2">
                            <h1> Ahmad Zayn</h1>
                            <div class="trainer-card-rating">
                                <h1>England<span>London</span></h1>
                                <div class="rating-star pb-2 pl-2">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            <a href="" class="btn pl-0 pb-1 pb-sm-3">Read More <i class="fa fa-long-arrow-right pl-2" aria-hidden="true"></i></a>
                            <div class="book-now-btn">
                                <a href="{{url('/dashboard/class-detail')}}" class="btn">Book Now</a>
                            </div>

                        </div>
                    </div>
                    <div class="experienced-trainer-card my-5">
                        <div class="experienced-trainer-card-left">
                            <img class="" src="{{asset('public/assets/images/rating-right.png')}}" alt="">
                        </div>
                        <div class="experienced-trainer-card-right pl-2">
                            <h1>Ahmad Zayn</h1>
                            <div class="trainer-card-rating">
                                <h1>England<span>London</span></h1>
                                <div class="rating-star pb-2 pl-2">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                            <a href="" class="btn pl-0 pb-1 pb-sm-3">Read More <i class="fa fa-long-arrow-right pl-2" aria-hidden="true"></i></a>
                            <div class="book-now-btn">
                                <a href="{{url('/dashboard/class-detail')}}" class="btn">Book Now</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="slider-right-effect">

        </div>
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
                    <li class="mb-2"><a href="{{url('/about')}}">About Us</a></li>
                    <li class="mb-2"><a href=" javascript:void(0)">Services</a></li>
                    <li class="mb-2"><a href=" javascript:void(0)">Terms and Conditions</a></li>

                </ul>
            </div>
            <div class="col-xl-2 col-md-6 order-xl-3 order-md-4 mt-xl-0 mt-3 text-md-left text-center" data-aos="fade-up" data-aos-delay="300">
                <ul class="quickLinks mx-auto">
                    <!-- <li class="mb-3 text-md-white"><strong>Customer Area</strong></li> -->
                    <li class="mb-2"><a href=" javascript:void(0)">Our Approach</a></li>
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
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.1/jquery.flexslider.js"></script>
<script>
    const slickSettings = {
        arrows: true,
        infinite: true,
        prevArrow: "<i class='fa fa-arrow-left slick-prev arrow ser-left d-none' aria-hidden='true'></i> ",
        nextArrow: "<i class='fa fa-arrow-right slick-next arrow ser-right' aria-hidden='true'></i>",
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 2000,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 1650,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 1250,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    }
</script>
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