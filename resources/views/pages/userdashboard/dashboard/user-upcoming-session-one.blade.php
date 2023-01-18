@extends('layouts.userdashboard.default')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.1/flexslider.css">
<style>
    .dashboard-header-left span {
        color: #3F3F3F;
        font-weight: 300;
        font-size: 16px;
    }

    .session-detail-img {
        height: 300px !important;

    }

    .session-detail-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: 50% 70%;
        /* object-position: top bottom center; */
        border-radius: 20px;


    }

    .carousel-parent {
        position: relative;
    }

    .empty-session-detail-left {
        position: absolute;
        width: 20%;
        height: 98%;
        background: linear-gradient(270deg, #601900 0%, rgba(217, 217, 217, 0) 85.11%);
        transform: rotate(-180deg);
        z-index: 999;
        border-radius: 10px;
    }

    .empty-session-detail-right {
        border-radius: 10px;
        position: absolute;
        width: 20%;
        height: 98%;
        right: 0;
        z-index: 999;
        background: linear-gradient(270deg, #601900 0%, rgba(217, 217, 217, 0) 85.11%);
    }

    .ser-left-session {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        font-size: 1rem;
        font-weight: normal;
        background: #FFFFFF;
        color: #E37048;
        cursor: pointer;
        position: absolute;
        top: 50%;
        left: 45px;
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
        background: white;
        color: #E37048;
        font-size: 1rem;
        font-weight: normal;
        width: 45px;
        height: 45px;
        border-radius: 50%;
        cursor: pointer;
        position: absolute;
        top: 50%;
        right: 0;
        transform: translateX(-50%) translateY(-50%);
        z-index: 999;
    }

    progress::-webkit-progress-bar {
        background-color: #eeeeee;
    }

    progress::-webkit-progress-value {
        background-color: #E37048 !important;
    }


    /* For Firefox */
    progress {
        background-color: #eee;
    }

    progress::-moz-progress-bar {
        background-color: #E37048 !important;
    }

    /* For IE10 */
    progress {
        background-color: #eee;
        height: 5px;
    }

    progress {
        background-color: #E37048;
    }

    /* progress end */
    .trainer-detail-profile-left-progress {

        top: 117px !important;
    }

    .trainer-detail-profile-gender img {
        width: 20px !important;
        height: 20px !important;
    }

    .trainer-detail-profile-left {
        align-items: flex-start;
    }

    .trainer-detail-profile-left img {
        width: 145px;
        border-radius: 7px;
        height: 130px;

        object-fit: cover;
        position: relative;
    }

    @media screen and (max-width:576px) {
        .trainer-detail-profile-left img {
            width: 130px;
        }
    }

    .trainer-class-time-card-right img {
        width: 60px !important;
        height: 60px !important;
        border: 1px solid #E37048;
        position: absolute;
        left: 65px;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    .trainer-class-time-card-right-one {
        position: absolute;
        left: 31px !important;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    .trainer-class-time-card-right-two {
        position: absolute;
        left: 48px !important;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    .trainer-class-time-card-right-three {
        position: absolute;
        left: 65px !important;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    .trainer-class-time-card-right {
        width: 100px !important;
        height: 100px;
    }

    .trainer-detail-profile-inner {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    /* end */
    .trainer-detail-profile-right-client,
    .trainer-detail-profile-right-classes {
        max-width: 200px;
    }

    .trainer-detail-profile-right-price h1 {
        font-size: 2rem;
        color: #E37048;
        margin-bottom: 0px;
        font-weight: 700;
    }

    .session-inner-content h1 {
        font-size: 1.1rem;
        color: #B5B5BE;
    }

    .session-inner-content p {
        font-size: 1rem;
        color: #000;
        font-weight: 500;
    }

    .detail-profile-button a:first-of-type {
        text-decoration: none;
        border: 1px solid #E37048;
        color: #E37048;
        background-color: white;
        border-radius: 5px;
        max-width: 200px;
        width: 100%;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: none !important;
        outline: none !important;
    }

    .detail-profile-button {
        display: flex;
        flex-wrap: wrap;
    }

    .detail-profile-button a:first-of-type:hover {
        background-color: #E37048;
        color: white;
        border: 1px solid #E37048;
        text-decoration: none;
    }



    @media screen and (max-width:576px) {
        .detail-profile-button {
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    }

    .feedback-wrapper {
        background-color: white;
        border-radius: 10px;
    }

    .feedback-header h1 {
        color: black;
        font-size: 1.5rem;
    }

    .feedback-profile {
        display: flex;
        flex-wrap: wrap;
        align-items: flex-end;
    }

    .feedback-profile img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
        border: 1px solid #E37048;
    }

    .feedback-profile h1 {
        font-size: 0.9rem;
        color: #E37048;
        margin-bottom: 0px;
    }

    .feedback-message {
        background: #F4F4F4;
        border-radius: 10px;
        padding-right: 50px !important;
        position: relative;
    }

    .feedback-message p {
        font-size: 0.8rem;
        color: #434343;
        margin-bottom: 0px;
    }

    .feedback-rating {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translate(0%, -50%);
        display: flex;
    }

    .feedback-rating i {
        color: gold;
    }

    .feedback-rating p {
        margin-bottom: 0px;
        font-size: 0.8rem;
        font-weight: 500;
        color: black;
    }

    .feedback-container {
        overflow-y: scroll;
        height: 460px;
    }

    .feedback-container::-webkit-scrollbar-thumb {
        background: #E37048;
        border-radius: 7px;
        height: 7px;
        width: 7px;
    }

    .feedback-container::-webkit-scrollbar {
        width: 7px;
        height: 7px;
        width: 7px;
    }


    .feedback-container::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 7px;
        height: 7px;
        width: 7px;
    }


    .feedback-container::-webkit-scrollbar-thumb {
        background: #E37048;
        border-radius: 7px;
        height: 7px;
        width: 7px;
    }

    .past-session-header {
        display: flex;
        flex-wrap: wrap;
    }

    .past-session-header h1 {
        color: #E37048;
        font-size: 1.7rem;
        margin-bottom: 0px;
    }

    @media screen and (max-width:576px) {
        .past-session-header h1 {
            color: #E37048;
            font-size: 1.3rem;
            margin-bottom: 0px;
        }
    }

    .trainer-detail-profile-left .rated-badge {
        width: 30px;
        height: 30px;
        position: absolute;
        left: 135px;
        top: 17px;
    }

    @media screen and (max-width:576px) {
        .trainer-detail-profile-left .rated-badge {
            width: 30px;
            height: 30px;
            position: absolute;
            left: 115px;
            top: 17px;
        }
    }
</style>

@include('includes.userdashboard.navbar')
<div class="content-wrapper">
    <div class="container-fluid mb-4">
        <div class="past-session-header px-2 py-2 my-4">
            <h1 class="pr-sm-3"> <img class="pr-1 pr-sm-2 pb-1" src="{{asset('public/assets/images/left-arrow.svg')}}" alt="">Dashboard<img class="pl-1 pl-sm-2 pb-1" src="{{asset('public/assets/images/right-arrow.svg')}}" alt=""></h1>
            <h1>Upcoming Sessions</h1>
        </div>
        <div class="carousel-parent">
            <div class="empty-session-detail-left">

            </div>
            <div class="empty-session-detail-right">

            </div>
            <div class="row js-slick-carousel">

                <div class="col">
                    <div class="session-detail-img">
                        <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="session-detail-img">
                        <img src="{{asset('public/assets/images/sessioneight.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="session-detail-img">
                        <img src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="session-detail-img">
                        <img src="{{asset('public/assets/images/sessiontwo.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="session-detail-img">
                        <img src="{{asset('public/assets/images/sessionthree.jpg')}}" alt="">
                    </div>
                </div>

            </div>

        </div>
        <div class="row pt-4">
            <div class="col-xl-7">
                <div class="trainer-detail-wrapper px-2 py-3">
                    <div class="trainer-detail-profile">
                        <div class="trainer-detail-profile-inner ">
                            <div class="trainer-detail-profile-inner-left">
                                <div class="trainer-detail-profile-left mt-0 d-flex">
                                    <div class="trainer-detail-profile-left-inner">
                                        <img class="mr-2" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                        <img class="rated-badge" src="{{asset('public/assets/images/badge-2.svg')}}" alt="">
                                        <div class="trainer-detail-profile-left-progress py-2 px-2">
                                            <h1>Level</h1>
                                            <progress id="file" value="72" max="100"> 32% </progress>
                                        </div>
                                    </div>
                                    <div class="trainer-detail-profile-left-inner-right">
                                        <div class="col trainer-detail-profile-name px-0 pt-2">
                                            <h1>John Smith</h1>
                                            <div class="trainer-detail-profile-gender">
                                                <img class="mr-2" src="{{asset('public/assets/images/profile-icon.svg')}}" alt="">
                                                <p>Male , 5’11”</p>
                                            </div>
                                        </div>
                                        <div class="rating-star">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <!-- <div class="trainer-detail-profile-inner-right my-auto text-right">
                                <div class="trainer-class-time-card-right">
                                    <img class="trainer-class-time-card-right-one" src="{{asset('public/assets/images/sessiontwo.jpg')}}" alt="">
                                    <img class="trainer-class-time-card-right-two" src="{{asset('public/assets/images/sessionthree.jpg')}}" alt="">
                                    <img class="trainer-class-time-card-right-three" src="{{asset('public/assets/images/sessionfour.jpg')}}" alt="">

                                </div>
                            </div> -->

                        </div>


                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-sm-6 my-4 pl-0">
                                <div class="trainer-detail-profile-right">
                                    <div class="trainer-detail-profile-right-client text-center">
                                        <p>Clients</p>
                                        <h1>33</h1>
                                    </div>
                                    <div class="trainer-detail-profile-right-classes text-center">
                                        <p>Classes</p>
                                        <h1>03</h1>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-6 my-4 pl-0">
                                <div class="trainer-detail-profile-right-price">
                                    <h1>$100</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-6 my-1 pl-0">
                                <div class="session-inner-content">
                                    <h1>Session</h1>
                                    <p>Yoga</p>
                                </div>
                            </div>
                            <div class="col-6 my-1 pl-0">
                                <div class="session-inner-content">
                                    <h1>Date</h1>
                                    <p>20-Dec-2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-6 my-4 pl-0">
                                <div class="session-inner-content">
                                    <h1>Start Time</h1>
                                    <p>02:00 Pm</p>
                                </div>
                            </div>
                            <div class="col-6 my-4 pl-0">
                                <div class="session-inner-content">
                                    <h1>End Time</h1>
                                    <p>03:00 Pm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col pl-0 text-center">
                        <div class="detail-profile-button">
                            <a href="{{url('/chat')}}" class="btn mr-sm-4 my-2">Message</a>
                            <!-- <a href="" class="btn my-2">Refund</a> -->
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-5 mt-4 mt-xl-0">
                <div class="feedback-wrapper  py-3">
                    <div class="feedback-header pt-4 pb-2 px-2 px-sm-4">
                        <h1>Clients Feedback</h1>
                    </div>
                    <div class="feedback-container px-2 px-sm-4">
                        <div class="feedback-card my-3">
                            <div class="feedback-profile">
                                <img class="mr-2" src="{{asset('public/assets/images/sessionthree.jpg')}}" alt="">
                                <h1>Michael John</h1>
                            </div>
                            <div class="feedback-message px-2 px-sm-3 py-4 mt-2">
                                <p>LoremIpsum Lorem Ipsum
                                    Lorem Ipsum Lorem Ipsum LoremIpsum Lorem Ipsum
                                    Lorem Ipsum Lorem Ipsum </p>
                                <div class="feedback-rating">
                                    <i class="fa fa-star pr-1" aria-hidden="true"></i>
                                    <p>5.0</p>
                                </div>
                            </div>
                        </div>
                        <div class="feedback-card my-3">
                            <div class="feedback-profile">
                                <img class="mr-2" src="{{asset('public/assets/images/sessionthree.jpg')}}" alt="">
                                <h1>Michael John</h1>
                            </div>
                            <div class="feedback-message px-2 px-sm-3 py-4 mt-2">
                                <p>LoremIpsum Lorem Ipsum
                                    Lorem Ipsum Lorem Ipsum LoremIpsum Lorem Ipsum
                                    Lorem Ipsum Lorem Ipsum </p>
                                <div class="feedback-rating">
                                    <i class="fa fa-star pr-1" aria-hidden="true"></i>
                                    <p>5.0</p>
                                </div>
                            </div>
                        </div>
                        <div class="feedback-card my-3">
                            <div class="feedback-profile">
                                <img class="mr-2" src="{{asset('public/assets/images/sessionthree.jpg')}}" alt="">
                                <h1>Michael John</h1>
                            </div>
                            <div class="feedback-message px-2 px-sm-3 py-4 mt-2">
                                <p>LoremIpsum Lorem Ipsum
                                    Lorem Ipsum Lorem Ipsum LoremIpsum Lorem Ipsum
                                    Lorem Ipsum Lorem Ipsum </p>
                                <div class="feedback-rating">
                                    <i class="fa fa-star pr-1" aria-hidden="true"></i>
                                    <p>5.0</p>
                                </div>
                            </div>
                        </div>
                        <div class="feedback-card my-3">
                            <div class="feedback-profile">
                                <img class="mr-2" src="{{asset('public/assets/images/sessionthree.jpg')}}" alt="">
                                <h1>Michael John</h1>
                            </div>
                            <div class="feedback-message px-2 px-sm-3 py-4 mt-2">
                                <p>LoremIpsum Lorem Ipsum
                                    Lorem Ipsum Lorem Ipsum LoremIpsum Lorem Ipsum
                                    Lorem Ipsum Lorem Ipsum </p>
                                <div class="feedback-rating">
                                    <i class="fa fa-star pr-1" aria-hidden="true"></i>
                                    <p>5.0</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>


    @endsection
    @section('insertsfooter')
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
    <script>
        $('.sidenav .nav-item:nth-of-type(4)').addClass('active')
    </script>
    @endsection