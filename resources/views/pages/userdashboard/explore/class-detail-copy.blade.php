@extends('layouts.userdashboard.default')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.1/flexslider.css">
<link rel="stylesheet" href="{{asset('public/assets/css/mobiscroll.javascript.min.css')}}">
<style>
    /* For Chrome or Safari */
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
        width: 40px;
        height: 40px;
        border-radius: 50%;
        font-size: 1rem;
        font-weight: normal;
        background: #FFFFFF;
        color: #E37048;
        cursor: pointer;
        position: absolute;
        top: 50%;
        left: 50px;
        transform: translateX(-50%) translateY(-50%);
        z-index: 999;
    }

    .fa-arrow-left:before {
        position: absolute;
        top: 12px !important;
        left: 12px !important;
    }

    .fa-arrow-right:before {
        position: absolute;
        top: 12px !important;
        left: 14px !important;
    }

    .ser-right-session {
        background: white;
        color: #E37048;
        font-size: 1rem;
        font-weight: normal;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        cursor: pointer;
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateX(-50%) translateY(-50%);
        z-index: 999;
    }

    .dashboard-header-left h1>span {
        color: #3F3F3F;
        font-size: 1rem;
        font-weight: 400;
    }
</style>
@include('includes.userdashboard.navbar')
<div class="content-wrapper">
    <div class="container-fluid mb-4">
        <div class="dashboard-header-left">
            <h1><i class="fa fa-angle-left mr-2" aria-hidden="true"></i>Session Detail <span>Group Session</span></h1>
        </div>
        <div class="class-section">
            <div class="row">
                <div class="col-lg-6">
                    <div class="carousel-parent">
                        <div class="empty-session-detail-left">

                        </div>
                        <div class="empty-session-detail-right">

                        </div>
                    </div>
                    <div class="row js-slick-carousel">

                        <div class="col">
                            <div class="class-left-banner px-2 py-3">
                                <img class="class-banner-img" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                <div class="class-banner-content pt-3">
                                    <h1>Yoga</h1>
                                    <div class="class-banner-content-right">
                                        <h1>$100</h1>
                                        <div class="class-banner-content-right-time">
                                            <img class="pr-2" src="{{asset('public/assets/images/clock.svg')}}" alt="">
                                            <p>25min</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="class-left-banner px-2 py-3">
                                <img class="class-banner-img" src="{{asset('public/assets/images/sessiontwo.jpg')}}" alt="">
                                <div class="class-banner-content pt-3">
                                    <h1>Stretching outdoors</h1>
                                    <div class="class-banner-content-right">
                                        <h1>$100</h1>
                                        <div class="class-banner-content-right-time">
                                            <img class="pr-2" src="{{asset('public/assets/images/clock.svg')}}" alt="">
                                            <p>25min</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="class-left-banner px-2 py-3">
                                <img class="class-banner-img" src="{{asset('public/assets/images/sessionthree.jpg')}}" alt="">
                                <div class="class-banner-content pt-3">
                                    <h1>Gymnastics</h1>
                                    <div class="class-banner-content-right">
                                        <h1>$100</h1>
                                        <div class="class-banner-content-right-time">
                                            <img class="pr-2" src="{{asset('public/assets/images/clock.svg')}}" alt="">
                                            <p>25min</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="class-left-banner px-2 py-3">
                                <img class="class-banner-img" src="{{asset('public/assets/images/sessionseven.jpg')}}" alt="">
                                <div class="class-banner-content pt-3">
                                    <h1>Body Building</h1>
                                    <div class="class-banner-content-right">
                                        <h1>$100</h1>
                                        <div class="class-banner-content-right-time">
                                            <img class="pr-2" src="{{asset('public/assets/images/clock.svg')}}" alt="">
                                            <p>25min</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-header-left trainer-detail-header-left pt-3 pb-5">
                        <h1>Trainer’s Detail</h1>
                    </div>
                    <div class="trainer-detail-wrapper px-2 py-3">
                        <div class="trainer-detail-profile">
                            <div class="row">
                                <div class="col-sm-6 col-xl-7">
                                    <div class="trainer-detail-profile-left">
                                        <img class="mr-2" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                        <div class="trainer-detail-profile-left-progress py-2 px-2">
                                            <h1>Level</h1>
                                            <progress id="file" value="72" max="100"> 32% </progress>
                                        </div>
                                        <div class="rating-star">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="col trainer-detail-profile-name px-0 pt-2">
                                        <h1>John Smith</h1>
                                        <div class="trainer-detail-profile-gender pb-3">
                                            <img class="mr-2" src="{{asset('public/assets/images/profile-icon.svg')}}" alt="">
                                            <p>Male , 5’11”</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-5 my-3 my-sm-0">
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
                            </div>

                        </div>
                        <div class="col-sm-6 trainer-detail-experience px-0 py-2">

                            <h1>3 Years</h1>
                            <h1>Toronto</h1>
                            <h1>Yoga</h1>

                        </div>
                        <div class="trainer-detail-review">
                            <div class="trainer-detail-review-header py-2">
                                <h1>Reviews</h1>
                            </div>
                            <div class=" trainer-detail-review-wrapper my-2">
                                <div class="trainer-detail-review-left">
                                    <img src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                    <div class="trainer-detail-review-left-content pl-2">
                                        <h1>Samuel sam</h1>
                                        <h2>Yoga</h2>
                                    </div>
                                </div>
                                <div class="trainer-detail-review-right pl-4">
                                    <div class="rating-star">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                                </div>
                            </div>
                            <div class=" trainer-detail-review-wrapper my-2">
                                <div class="trainer-detail-review-left">
                                    <img src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                    <div class="trainer-detail-review-left-content pl-2">
                                        <h1>Samuel sam</h1>
                                        <h2>Yoga</h2>
                                    </div>
                                </div>
                                <div class="trainer-detail-review-right pl-4">
                                    <div class="rating-star">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                                </div>
                            </div>
                            <div class=" trainer-detail-review-wrapper my-2">
                                <div class="trainer-detail-review-left">
                                    <img src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                    <div class="trainer-detail-review-left-content pl-2">
                                        <h1>Samuel sam</h1>
                                        <h2>Yoga</h2>
                                    </div>
                                </div>
                                <div class="trainer-detail-review-right pl-4">
                                    <div class="rating-star">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="session-detail-right-wrapper px-2 py-3">
                        <div class="col session-detail-calendar px-0">
                            <div id="holder" class="row"></div>
                            <!-- <div id="demo-1-week"></div> -->
                        </div>
                        <div class="trainer-class-time ">
                            <div class="trainer-class-time-header pt-4 pl-5">
                                <h1 class="py-2">Wednesday 6, March</h1>
                            </div>
                            <div class="trainer-class-time-wrapper pl-5 pr-sm-2 pr-1">
                                <div class="trainer-class-time-card-box my-2">
                                    <div class="trainer-class-time-card trainer-class-active px-2 py-2 pr-3 ">
                                        <div class="trainer-class-time-card-left">
                                            <div class="trainer-class-time-card-left-img">
                                                <img src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            </div>
                                            <div class="trainer-class-time-card-left-content pl-2">
                                                <h1>Stretching </h1>
                                                <h2>8am-8:30am</h2>
                                            </div>
                                        </div>
                                        <div class="trainer-class-time-card-right">
                                            <img class="trainer-class-time-card-right-one" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-two" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-three" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-four" src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                                            <img class="" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <div class="trainer-class-time-card-right-counter">
                                                <h1>+5</h1>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="trainer-class-times">
                                        <h3>8am</h3>

                                    </div>
                                    <div class="trainer-class-time-border"></div>
                                </div>
                                <div class="trainer-class-time-card-box no-class my-2 py-2">
                                    <div class="no-class-border mt-3"></div>
                                    <div class="trainer-class-times">
                                        <h3>9am</h3>

                                    </div>
                                    <div class="trainer-class-time-border"></div>
                                </div>
                                <div class="trainer-class-time-card-box my-2">
                                    <div class="trainer-class-time-card  px-2 py-2 pr-3 ">
                                        <div class="trainer-class-time-card-left">
                                            <div class="trainer-class-time-card-left-img">
                                                <img src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            </div>
                                            <div class="trainer-class-time-card-left-content pl-2">
                                                <h1>Stretching </h1>
                                                <h2>8am-8:30am</h2>
                                            </div>
                                        </div>
                                        <div class="trainer-class-time-card-right">
                                            <img class="trainer-class-time-card-right-one" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-two" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-three" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-four" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <div class="trainer-class-time-card-right-counter">
                                                <h1>+5</h1>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="trainer-class-times">
                                        <h3>10am</h3>

                                    </div>
                                    <div class="trainer-class-time-border"></div>
                                </div>
                                <div class="trainer-class-time-card-box no-class my-2 py-2">
                                    <div class="no-class-border mt-3"></div>
                                    <div class="trainer-class-times">
                                        <h3>11am</h3>

                                    </div>
                                    <div class="trainer-class-time-border"></div>
                                </div>
                                <div class="trainer-class-time-card-box my-2">
                                    <div class="trainer-class-time-card  px-2 py-2 pr-3 ">
                                        <div class="trainer-class-time-card-left">
                                            <div class="trainer-class-time-card-left-img">
                                                <img src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            </div>
                                            <div class="trainer-class-time-card-left-content pl-2">
                                                <h1>Stretching </h1>
                                                <h2>8am-8:30am</h2>
                                            </div>
                                        </div>
                                        <div class="trainer-class-time-card-right">
                                            <img class="trainer-class-time-card-right-one" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-two" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-three" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-four" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <div class="trainer-class-time-card-right-counter">
                                                <h1>+5</h1>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="trainer-class-times">
                                        <h3>10am</h3>

                                    </div>
                                    <div class="trainer-class-time-border"></div>
                                </div>
                                <div class="trainer-class-time-card-box my-2">
                                    <div class="trainer-class-time-card  px-2 py-2 pr-3 ">
                                        <div class="trainer-class-time-card-left">
                                            <div class="trainer-class-time-card-left-img">
                                                <img src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            </div>
                                            <div class="trainer-class-time-card-left-content pl-2">
                                                <h1>Stretching </h1>
                                                <h2>8am-8:30am</h2>
                                            </div>
                                        </div>
                                        <div class="trainer-class-time-card-right">
                                            <img class="trainer-class-time-card-right-one" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-two" src="{{asset('public/assets/images/sessiontwo.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-three" src="{{asset('public/assets/images/sessionthree.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-four" src="{{asset('public/assets/images/sessionfour.jpg')}}" alt="">
                                            <div class="trainer-class-time-card-right-counter">
                                                <h1>+5</h1>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="trainer-class-times">
                                        <h3>10am</h3>

                                    </div>
                                    <div class="trainer-class-time-border"></div>
                                </div>
                                <div class="trainer-class-time-card-box my-2">
                                    <div class="trainer-class-time-card  px-2 py-2 pr-3 ">
                                        <div class="trainer-class-time-card-left">
                                            <div class="trainer-class-time-card-left-img">
                                                <img src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            </div>
                                            <div class="trainer-class-time-card-left-content pl-2">
                                                <h1>Stretching </h1>
                                                <h2>8am-8:30am</h2>
                                            </div>
                                        </div>
                                        <div class="trainer-class-time-card-right">
                                            <img class="trainer-class-time-card-right-one" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-two" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-three" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-four" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <div class="trainer-class-time-card-right-counter">
                                                <h1>+5</h1>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="trainer-class-times">
                                        <h3>10am</h3>

                                    </div>
                                    <div class="trainer-class-time-border"></div>
                                </div>
                                <div class="trainer-class-time-card-box my-2">
                                    <div class="trainer-class-time-card  px-2 py-2 pr-3 ">
                                        <div class="trainer-class-time-card-left">
                                            <div class="trainer-class-time-card-left-img">
                                                <img src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            </div>
                                            <div class="trainer-class-time-card-left-content pl-2">
                                                <h1>Stretching </h1>
                                                <h2>8am-8:30am</h2>
                                            </div>
                                        </div>
                                        <div class="trainer-class-time-card-right">
                                            <img class="trainer-class-time-card-right-one" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-two" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-three" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-four" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <div class="trainer-class-time-card-right-counter">
                                                <h1>+5</h1>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="trainer-class-times">
                                        <h3>10am</h3>

                                    </div>
                                    <div class="trainer-class-time-border"></div>
                                </div>
                                <div class="trainer-class-time-card-box no-class my-2 py-2">
                                    <div class="no-class-border mt-3"></div>
                                    <div class="trainer-class-times">
                                        <h3>11am</h3>

                                    </div>
                                    <div class="trainer-class-time-border"></div>
                                </div>
                                <div class="trainer-class-time-card-box my-2">
                                    <div class="trainer-class-time-card  px-2 py-2 pr-3 ">
                                        <div class="trainer-class-time-card-left">
                                            <div class="trainer-class-time-card-left-img">
                                                <img src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            </div>
                                            <div class="trainer-class-time-card-left-content pl-2">
                                                <h1>Stretching </h1>
                                                <h2>8am-8:30am</h2>
                                            </div>
                                        </div>
                                        <div class="trainer-class-time-card-right">
                                            <img class="trainer-class-time-card-right-one" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-two" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-three" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-four" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <div class="trainer-class-time-card-right-counter">
                                                <h1>+5</h1>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="trainer-class-times">
                                        <h3>10am</h3>

                                    </div>
                                    <div class="trainer-class-time-border"></div>
                                </div>
                                <div class="trainer-class-time-card-box my-2">
                                    <div class="trainer-class-time-card  px-2 py-2 pr-3 ">
                                        <div class="trainer-class-time-card-left">
                                            <div class="trainer-class-time-card-left-img">
                                                <img src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            </div>
                                            <div class="trainer-class-time-card-left-content pl-2">
                                                <h1>Stretching </h1>
                                                <h2>8am-8:30am</h2>
                                            </div>
                                        </div>
                                        <div class="trainer-class-time-card-right">
                                            <img class="trainer-class-time-card-right-one" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-two" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-three" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-four" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <div class="trainer-class-time-card-right-counter">
                                                <h1>+5</h1>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="trainer-class-times">
                                        <h3>10am</h3>

                                    </div>
                                    <div class="trainer-class-time-border"></div>
                                </div>
                                <div class="trainer-class-time-card-box my-2">
                                    <div class="trainer-class-time-card  px-2 py-2 pr-3 ">
                                        <div class="trainer-class-time-card-left">
                                            <div class="trainer-class-time-card-left-img">
                                                <img src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            </div>
                                            <div class="trainer-class-time-card-left-content pl-2">
                                                <h1>Stretching </h1>
                                                <h2>8am-8:30am</h2>
                                            </div>
                                        </div>
                                        <div class="trainer-class-time-card-right">
                                            <img class="trainer-class-time-card-right-one" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-two" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-three" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-four" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <div class="trainer-class-time-card-right-counter">
                                                <h1>+5</h1>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="trainer-class-times">
                                        <h3>10am</h3>

                                    </div>
                                    <div class="trainer-class-time-border"></div>
                                </div>
                                <div class="trainer-class-time-card-box my-2">
                                    <div class="trainer-class-time-card  px-2 py-2 pr-3 ">
                                        <div class="trainer-class-time-card-left">
                                            <div class="trainer-class-time-card-left-img">
                                                <img src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            </div>
                                            <div class="trainer-class-time-card-left-content pl-2">
                                                <h1>Stretching </h1>
                                                <h2>8am-8:30am</h2>
                                            </div>
                                        </div>
                                        <div class="trainer-class-time-card-right">
                                            <img class="trainer-class-time-card-right-one" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-two" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-three" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-four" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <div class="trainer-class-time-card-right-counter">
                                                <h1>+5</h1>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="trainer-class-times">
                                        <h3>10am</h3>

                                    </div>
                                    <div class="trainer-class-time-border"></div>
                                </div>
                            </div>
                            <div class="trainer-class-time-btn pt-4 pb-3">
                                <a href="{{url('/dashboard/payment')}}" class="btn">Confirm Booking</a>
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
    }


    // $('.js-slick-carousel').on('init', handleSlickInit);
    $('.js-slick-carousel').slick(slickSettings);

    // reinitialization
    $('.js-slick-carousel').on('reInit', () => console.log('slick re-init fired'));


    $(window).resize(handleResize);
</script>

<script type="text/tmpl" id="tmpl">
    {{
  var date = date || new Date(),
      month = date.getMonth(), 
      year = date.getFullYear(), 
      first = new Date(year, month, 1), 
      last = new Date(year, month + 1, 0),
      startingDay = first.getDay(), 
      thedate = new Date(year, month, 1 - startingDay),
      dayclass = lastmonthcss,
      today = new Date(),
      i, j; 
  if (mode === 'week') {
    thedate = new Date(date);
    thedate.setDate(date.getDate() - date.getDay());
    first = new Date(thedate);
    last = new Date(thedate);
    last.setDate(last.getDate()+6);
  } else if (mode === 'day') {
    thedate = new Date(date);
    first = new Date(thedate);
    last = new Date(thedate);
    last.setDate(thedate.getDate() + 1);
  }
  
  }}
    <table class="calendar-table table table-condensed table-tight">
        <thead>
            <tr>
                <td colspan="7" style="text-align: center">
                    <table style="white-space: nowrap; width: 100%">
                        <tr>
                            <td style="text-align: left;">
                                <span class="btn-group">
                                    <button class="js-cal-prev btn btn-default">
                                        << /button>

                                </span>
                                <!-- <button class="js-cal-option btn btn-default {{: first.toDateInt() <= today.toDateInt() && today.toDateInt() <= last.toDateInt() ? 'active':'' }}" data-date="{{: today.toISOString()}}" data-mode="month">{{: todayname }}</button> -->
                            </td>
                            <td>
                                <span class="btn-group btn-group-lg">
                                    {{ if (mode !== 'day') { }}
                                    {{ if (mode === 'month') { }}<button class="js-cal-option btn btn-link" data-mode="year">{{: months[month] }}</button>{{ } }}
                                    {{ if (mode ==='week') { }}
                                    <button class="btn btn-link disabled">{{: shortMonths[first.getMonth()] }} {{: first.getDate() }} - {{: shortMonths[last.getMonth()] }} {{: last.getDate() }}</button>
                                    {{ } }}
                                    <!-- <button class="js-cal-years btn btn-link">{{: year}}</button>  -->
                                    {{ } else { }}
                                    <button class="btn btn-link disabled">{{: date.toDateString() }}</button>
                                    {{ } }}
                                </span>
                            </td>
                            <td style="text-align: right">
                                <span class="btn-group">
                                    <button class="js-cal-next btn btn-default">></button>
                                </span>
                            </td>
                        </tr>
                    </table>

                </td>
            </tr>
        </thead>
        {{ if (mode ==='year') {
      month = 0;
    }}
        <tbody>
            {{ for (j = 0; j < 3; j++) { }}
            <tr>
                {{ for (i = 0; i < 4; i++) { }}
                <td class="calendar-month month-{{:month}} js-cal-option" data-date="{{: new Date(year, month, 1).toISOString() }}" data-mode="month">
                    {{: months[month] }}
                    {{ month++;}}
                </td>
                {{ } }}
            </tr>
            {{ } }}
        </tbody>
        {{ } }}
        {{ if (mode ==='month' || mode ==='week') { }}
        <thead>
            <tr class="c-weeks">
                {{ for (i = 0; i < 7; i++) { }}
                <th class="c-name">
                    {{: days[i] }}
                </th>
                {{ } }}
            </tr>
        </thead>
        <tbody>
            {{ for (j = 0; j < 6 && (j < 1 || mode === 'month'); j++) { }}
            <tr>
                {{ for (i = 0; i < 7; i++) { }}
                {{ if (thedate > last) { dayclass = nextmonthcss; } else if (thedate >= first) { dayclass = thismonthcss; } }}
                <td class="calendar-day {{: dayclass }} {{: thedate.toDateCssClass() }} {{: date.toDateCssClass() === thedate.toDateCssClass() ? 'selected':'' }} {{: daycss[i] }} js-cal-option" data-date="{{: thedate.toISOString() }}">
                    <div class="date">{{: thedate.getDate() }}</div>
                    {{ thedate.setDate(thedate.getDate() + 1);}}
                </td>
                {{ } }}
            </tr>
            {{ } }}
        </tbody>
        {{ } }}
        {{ if (mode ==='day') { }}
        <tbody>
            <tr>
                <td colspan="7">
                    <table class="table table-striped table-condensed table-tight-vert">
                        <thead>
                            <tr>
                                <th> </th>
                                <th style="text-align: center; width: 100%">{{: days[date.getDay()] }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="timetitle">All Day</th>
                                <td class="{{: date.toDateCssClass() }}"> </td>
                            </tr>
                            <tr>
                                <th class="timetitle">Before 6 AM</th>
                                <td class="time-0-0"> </td>
                            </tr>
                            {{for (i = 6; i < 22; i++) { }}
                            <tr>
                                <th class="timetitle">{{: i <= 12 ? i : i - 12 }} {{: i < 12 ? "AM" : "PM"}}</th>
                                <td class="time-{{: i}}-0"> </td>
                            </tr>
                            <tr>
                                <th class="timetitle">{{: i <= 12 ? i : i - 12 }}:30 {{: i < 12 ? "AM" : "PM"}}</th>
                                <td class="time-{{: i}}-30"> </td>
                            </tr>
                            {{ } }}
                            <tr>
                                <th class="timetitle">After 10 PM</th>
                                <td class="time-22-0"> </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
        {{ } }}
    </table>
</script>




<script>
    var $currentPopover = null;
    $(document).on('shown.bs.popover', function(ev) {
        var $target = $(ev.target);
        if ($currentPopover && ($currentPopover.get(0) != $target.get(0))) {
            $currentPopover.popover('toggle');
        }
        $currentPopover = $target;
    }).on('hidden.bs.popover', function(ev) {
        var $target = $(ev.target);
        if ($currentPopover && ($currentPopover.get(0) == $target.get(0))) {
            $currentPopover = null;
        }
    });


    //quicktmpl is a simple template language I threw together a while ago; it is not remotely secure to xss and probably has plenty of bugs that I haven't considered, but it basically works
    //the design is a function I read in a blog post by John Resig (http://ejohn.org/blog/javascript-micro-templating/) and it is intended to be loosely translateable to a more comprehensive template language like mustache easily
    $.extend({
        quicktmpl: function(template) {
            return new Function("obj", "var p=[],print=function(){p.push.apply(p,arguments);};with(obj){p.push('" + template.replace(/[\r\t\n]/g, " ").split("{{").join("\t").replace(/((^|\}\})[^\t]*)'/g, "$1\r").replace(/\t:(.*?)\}\}/g, "',$1,'").split("\t").join("');").split("}}").join("p.push('").split("\r").join("\\'") + "');}return p.join('');")
        }
    });

    $.extend(Date.prototype, {
        //provides a string that is _year_month_day, intended to be widely usable as a css class
        toDateCssClass: function() {
            return '_' + this.getFullYear() + '_' + (this.getMonth() + 1) + '_' + this.getDate();
        },
        //this generates a number useful for comparing two dates; 
        toDateInt: function() {
            return ((this.getFullYear() * 12) + this.getMonth()) * 32 + this.getDate();
        },
        toTimeString: function() {
            var hours = this.getHours(),
                minutes = this.getMinutes(),
                hour = (hours > 12) ? (hours - 12) : hours,
                ampm = (hours >= 12) ? ' pm' : ' am';
            if (hours === 0 && minutes === 0) {
                return '';
            }
            if (minutes > 0) {
                return hour + ':' + minutes + ampm;
            }
            return hour + ampm;
        }
    });


    (function($) {

        //t here is a function which gets passed an options object and returns a string of html. I am using quicktmpl to create it based on the template located over in the html block
        var t = $.quicktmpl($('#tmpl').get(0).innerHTML);

        function calendar($el, options) {
            //actions aren't currently in the template, but could be added easily...
            $el.on('click', '.js-cal-prev', function() {
                switch (options.mode) {
                    case 'year':
                        options.date.setFullYear(options.date.getFullYear() - 1);
                        break;
                    case 'month':
                        options.date.setMonth(options.date.getMonth() - 1);
                        break;
                    case 'week':
                        options.date.setDate(options.date.getDate() - 7);
                        break;
                    case 'day':
                        options.date.setDate(options.date.getDate() - 1);
                        break;
                }
                draw();
            }).on('click', '.js-cal-next', function() {
                switch (options.mode) {
                    case 'year':
                        options.date.setFullYear(options.date.getFullYear() + 1);
                        break;
                    case 'month':
                        options.date.setMonth(options.date.getMonth() + 1);
                        break;
                    case 'week':
                        options.date.setDate(options.date.getDate() + 7);
                        break;
                    case 'day':
                        options.date.setDate(options.date.getDate() + 1);
                        break;
                }
                draw();
            }).on('click', '.js-cal-option', function() {
                var $t = $(this),
                    o = $t.data();
                if (o.date) {
                    o.date = new Date(o.date);
                }
                $.extend(options, o);
                draw();
            }).on('click', '.js-cal-years', function() {
                var $t = $(this),
                    haspop = $t.data('popover'),
                    s = '',
                    y = options.date.getFullYear() - 2,
                    l = y + 5;
                if (haspop) {
                    return true;
                }
                for (; y < l; y++) {
                    s += '<button type="button" class="btn btn-default btn-lg btn-block js-cal-option" data-date="' + (new Date(y, 1, 1)).toISOString() + '" data-mode="year">' + y + '</button>';
                }
                $t.popover({
                    content: s,
                    html: true,
                    placement: 'auto top'
                }).popover('toggle');
                return false;
            }).on('click', '.event', function() {
                var $t = $(this),
                    index = +($t.attr('data-index')),
                    haspop = $t.data('popover'),
                    data, time;

                if (haspop || isNaN(index)) {
                    return true;
                }
                data = options.data[index];
                time = data.start.toTimeString();
                if (time && data.end) {
                    time = time + ' - ' + data.end.toTimeString();
                }
                $t.data('popover', true);
                $t.popover({
                    content: '<p><strong>' + time + '</strong></p>' + data.text,
                    html: true,
                    placement: 'auto left'
                }).popover('toggle');
                return false;
            });
            // function dayAddEvent(index, event) {
            //     if (!!event.allDay) {
            //         monthAddEvent(index, event);
            //         return;
            //     }
            //     var $event = $('<div/>', { 'class': 'event', text: event.title, title: event.title, 'data-index': index }),
            //         start = event.start,
            //         end = event.end || start,
            //         time = event.start.toTimeString(),
            //         hour = start.getHours(),
            //         timeclass = '.time-22-0',
            //         startint = start.toDateInt(),
            //         dateint = options.date.toDateInt(),
            //         endint = end.toDateInt();
            //     if (startint > dateint || endint < dateint) { return; }

            //     if (!!time) {
            //         $event.html('<strong>' + time + '</strong> ' + $event.html());
            //     }
            //     $event.toggleClass('begin', startint === dateint);
            //     $event.toggleClass('end', endint === dateint);
            //     if (hour < 6) {
            //         timeclass = '.time-0-0';
            //     }
            //     if (hour < 22) {
            //         timeclass = '.time-' + hour + '-' + (start.getMinutes() < 30 ? '0' : '30');
            //     }
            //     $(timeclass).append($event);
            // }

            // function monthAddEvent(index, event) {
            //     var $event = $('<div/>', { 'class': 'event', text: event.title, title: event.title, 'data-index': index }),
            //         e = new Date(event.start),
            //         dateclass = e.toDateCssClass(),
            //         day = $('.' + e.toDateCssClass()),
            //         empty = $('<div/>', { 'class': 'clear event', html: ' ' }),
            //         numbevents = 0,
            //         time = event.start.toTimeString(),
            //         endday = event.end && $('.' + event.end.toDateCssClass()).length > 0,
            //         checkanyway = new Date(e.getFullYear(), e.getMonth(), e.getDate() + 40),
            //         existing,
            //         i;
            //     $event.toggleClass('all-day', !!event.allDay);
            //     if (!!time) {
            //         $event.html('<strong>' + time + '</strong> ' + $event.html());
            //     }
            //     if (!event.end) {
            //         $event.addClass('begin end');
            //         $('.' + event.start.toDateCssClass()).append($event);
            //         return;
            //     }

            //     while (e <= event.end && (day.length || endday || options.date < checkanyway)) {
            //         if (day.length) {
            //             existing = day.find('.event').length;
            //             numbevents = Math.max(numbevents, existing);
            //             for (i = 0; i < numbevents - existing; i++) {
            //                 day.append(empty.clone());
            //             }
            //             day.append(
            //                 $event.
            //                     toggleClass('begin', dateclass === event.start.toDateCssClass()).
            //                     toggleClass('end', dateclass === event.end.toDateCssClass())
            //             );
            //             $event = $event.clone();
            //             $event.html(' ');
            //         }
            //         e.setDate(e.getDate() + 1);
            //         dateclass = e.toDateCssClass();
            //         day = $('.' + dateclass);
            //     }
            // }
            // function yearAddEvents(events, year) {
            //     var counts = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
            //     $.each(events, function (i, v) {
            //         if (v.start.getFullYear() === year) {
            //             counts[v.start.getMonth()]++;
            //         }
            //     });
            //     $.each(counts, function (i, v) {
            //         if (v !== 0) {
            //             $('.month-' + i).append('<span class="badge">' + v + '</span>');
            //         }
            //     });
            // }

            function draw() {
                $el.html(t(options));
                //potential optimization (untested), this object could be keyed into a dictionary on the dateclass string; the object would need to be reset and the first entry would have to be made here
                $('.' + (new Date()).toDateCssClass()).addClass('today');
                if (options.data && options.data.length) {
                    if (options.mode === 'year') {
                        yearAddEvents(options.data, options.date.getFullYear());
                    } else if (options.mode === 'month' || options.mode === 'week') {
                        $.each(options.data, monthAddEvent);
                    } else {
                        $.each(options.data, dayAddEvent);
                    }
                }
            }

            draw();
        }

        ;
        (function(defaults, $, window, document) {
            $.extend({
                calendar: function(options) {
                    return $.extend(defaults, options);
                }
            }).fn.extend({
                calendar: function(options) {
                    options = $.extend({}, defaults, options);
                    return $(this).each(function() {
                        var $this = $(this);
                        calendar($this, options);
                    });
                }
            });
        })({
            days: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            months: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            shortMonths: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            date: (new Date()),
            daycss: ["c-sunday", "", "", "", "", "", "c-saturday"],
            todayname: "Today",
            thismonthcss: "current",
            lastmonthcss: "outside",
            nextmonthcss: "outside",
            mode: "week",
            data: []
        }, jQuery, window, document);

    })(jQuery);

    var data = [],
        date = new Date(),
        d = date.getDate(),
        d1 = d,
        m = date.getMonth(),
        y = date.getFullYear(),
        i,
        end,
        j,
        c = 1063,
        c1 = 3329,
        h,
        m,
        names = [],
        slipsum = ["Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass.", "You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic.", "Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends.", "Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing.", "Yeah, I like animals better than people sometimes... Especially dogs. Dogs are the best. Every time you come home, they act like they haven't seen you in a year. And the good thing about dogs... is they got different dogs for different people. Like pit bulls. The dog of dogs. Pit bull can be the right man's best friend... or the wrong man's worst enemy. You going to give me a dog for a pet, give me a pit bull. Give me... Raoul. Right, Omar? Give me Raoul.", "Like you, I used to think the world was this great place where everybody lived by the same standards I did, then some kid with a nail showed me I was living in his world, a world where chaos rules not order, a world where righteousness is not rewarded. That's Cesar's world, and if you're not willing to play by his rules, then you're gonna have to pay the price.", "You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man.", "You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic.", "Like you, I used to think the world was this great place where everybody lived by the same standards I did, then some kid with a nail showed me I was living in his world, a world where chaos rules not order, a world where righteousness is not rewarded. That's Cesar's world, and if you're not willing to play by his rules, then you're gonna have to pay the price.", "You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man."];

    for (i = 0; i < 500; i++) {
        j = Math.max(i % 15 - 10, 0);
        //c and c1 jump around to provide an illusion of random data
        c = (c * 1063) % 1061;
        c1 = (c1 * 3329) % 3331;
        d = (d1 + c + c1) % 839 - 440;
        h = i % 36;
        m = (i % 4) * 15;
        if (h < 18) {
            h = 0;
            m = 0;
        } else {
            h = Math.max(h - 24, 0) + 8;
        }
        end = !j ? null : new Date(y, m, d + j, h + 2, m);
        data.push({
            title: names[c1 % names.length],
            start: new Date(y, m, d, h, m),
            end: end,
            allDay: !(i % 6),
            text: slipsum[c % slipsum.length]
        });
    }

    data.sort(function(a, b) {
        return (+a.start) - (+b.start);
    });

    //data must be sorted by start date

    //Actually do everything
    $('#holder').calendar({
        data: data
    });
</script>
<script>
    $('.sidenav .nav-item:nth-of-type(1)').addClass('active')
</script>
@endsection