@extends('layouts.userdashboard.default')
@section('content')
<link rel="stylesheet" href="{{asset('public/assets/css/mobiscroll.javascript.min.css')}}">
<style>
    .mbsc-calendar-controls {
        position: relative;
        justify-content: center;
        text-align: center;
    }

    .mbsc-calendar-title-wrapper {
        justify-content: center;
    }

    .mbsc-calendar-title-wrapper button {
        position: relative !important;
    }

    .mbsc-calendar-controls .mbsc-calendar-button-prev {
        position: absolute;
        top: 50%;
        left: 20%;
        transform: translateX(0%) translateY(-50%);
    }

    .mbsc-calendar-controls .mbsc-calendar-button-next {
        position: absolute;
        top: 50%;
        right: 20%;
        transform: translateX(0%) translateY(-50%);
    }

    .mbsc-calendar-controls {
        max-width: 300px;
        margin: 0 auto;
    }

    .mbsc-ios.mbsc-selected .mbsc-calendar-cell-text {
        background: black;
        border: none;
        width: 1.625em !important;
        height: 1.625em !important;
        /* border-radius: 5px; */

    }

    .mbsc-calendar-cell-text {
        background: rgba(0, 0, 0, 0.1);
        color: black;
        font-weight: 500;
    }

    /* .mbsc-calendar-cell:first-child {
        display: none;
    } */

    .mbsc-calendar-week-day {
        color: #C1C1C1;
    }

    .mbsc-calendar-table,
    .mbsc-calendar-row,
    .mbsc-calendar-cell {
        /* background-color: #F9F9FB !important; */
        border-radius: 4px;

        padding-bottom: 0px;
    }

    .mbsc-calendar-row,
    .mbsc-calendar-table {
        padding-top: 5px;
    }

    .mbsc-calendar-title {
        color: black;
        font-size: 1rem;
        font-weight: 500 !important;
    }

    .mbsc-button-icon path {
        fill: black;
    }

    .mbsc-icon>svg {
        width: 60%;
    }

    .mbsc-ios.mbsc-datepicker-inline {
        border: none;
    }

    @media screen and (min-width:1200px) {
        .week-calendar {
            margin-top: -10px !important;
        }
    }

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
</style>
@include('includes.userdashboard.navbar')
<div class="content-wrapper">
    <div class="container-fluid mb-4">
        <div class="dashboard-header-left">
            <h1><i class="fa fa-angle-left mr-2" aria-hidden="true"></i>Session Detail</h1>
        </div>
        <div class="class-section">
            <div class="row">
                <div class="col-lg-6">
                    <div class="class-left-banner px-2 py-3">
                        <img class="class-banner-img" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
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
                            <div id="demo-1-week"></div>
                        </div>
                        <div class="trainer-class-time ">
                            <div class="trainer-class-time-header pt-4 pl-5">
                                <h1 class="py-2">Wednesday 6, March</h1>
                            </div>
                            <div class="trainer-class-time-wrapper pl-5 pr-sm-2 pr-1">
                                @foreach($class_detail as $class)
                                <div class="trainer-class-time-card-box my-2">
                                    <div class="trainer-class-time-card trainer-class-active px-2 py-2 pr-3 ">
                                        <div class="trainer-class-time-card-left">
                                            <div class="trainer-class-time-card-left-img">
                                                <img src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            </div>
                                            <div class="trainer-class-time-card-left-content pl-2">
                                                <h1>{{$class['category']['title']}} </h1>
                                                <h2>{{$class['session']['start_time']}}-{{$class['session']['end_time']}}</h2>
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
                                @endforeach
                                <!-- end -->
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
<script src="{{ asset('public/assets/js/mobiscroll.javascript.min.js') }}"></script>
<script>
    mobiscroll.setOptions({
        theme: 'ios',
        themeVariant: 'light',

    });

    mobiscroll.datepicker('#demo-1-week', {
        controls: ['calendar'],
        display: 'inline',
        calendarType: 'week',
        calendarSize: 1
    });
</script>
<script>
    $('.sidenav .nav-item:nth-of-type(1)').addClass('active')
</script>
@endsection