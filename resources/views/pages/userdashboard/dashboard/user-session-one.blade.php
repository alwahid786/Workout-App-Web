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

    .detail-profile-button a:nth-of-type(1) {
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

    .detail-profile-button a:nth-of-type(2) {
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

    .detail-profile-button a:nth-of-type(3) {
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

    .detail-profile-button a:nth-of-type(1):hover {
        background-color: #E37048;
        color: white;
        border: 1px solid #E37048;
        text-decoration: none;
    }

    .detail-profile-button a:nth-of-type(2):hover {
        background-color: #E37048;
        color: white;
        border: 1px solid #E37048;
        text-decoration: none;
    }

    .detail-profile-button a:last-of-type {
        text-decoration: none;
        border: 1px solid #FF6E6E;
        color: #FF6E6E;
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

    .detail-profile-button a:last-of-type:hover {
        background-color: #FF6E6E;
        color: white;
        border: 1px solid #FF6E6E;
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
        margin-bottom: 4px;
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
        /* position: absolute;
        top: 50%;
        right: 10px;
        transform: translate(0%, -50%); */
        display: flex;
    }

    .feedback-rating i.gold {
        color: gold !important;
    }

    .feedback-rating i {
        color: #f3f0f0 !important;
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

    /* modal */
    .modal-field textarea {
        resize: none;
        background: #EDEDED;
        color: #B4B4B4;
        border-radius: 10px;
    }

    .modalHeader {
        position: relative;
    }

    .modalHeader img {
        position: absolute;
        top: 0;
        right: 0;
        cursor: pointer;
    }

    .review-modal h1 {
        font-size: 1.7rem;
        margin-bottom: 0;
        font-weight: 700;
        letter-spacing: 1px;
    }

    .modal-btn button {
        color: #E37048;
        background: white;
        border: 1px solid #E37048;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        max-width: 180px;
        height: 40px;
        border-radius: 5px;
        margin-left: auto;
    }

    .modal-btn button:hover {
        color: white;
        background: #E37048;
        border: 1px solid #E37048;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        max-width: 180px;
        height: 40px;
        border-radius: 5px;
    }

    .modal-content {
        border-radius: 10px;
        border: none;
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
<style>
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

    /* modal */
    .modal-field textarea {
        resize: none;
        background: #EDEDED;
        color: #B4B4B4;
        border-radius: 10px;
        box-shadow: none !important;
        outline: none !important;
    }

    .modalHeader {
        position: relative;
    }

    .modalHeader img {
        position: absolute;
        top: 0;
        right: 0;
        cursor: pointer;
    }

    .review-modal h1 {
        font-size: 1.8rem;
        margin-bottom: 0;
        font-weight: 700;
        letter-spacing: 2px;
    }

    .modal-btn button {
        color: #E37048;
        background: white;
        border: 1px solid #E37048;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        max-width: 180px;
        height: 40px;
        border-radius: 5px;
        margin-left: auto;
        box-shadow: none !important;
        outline: none !important;
    }

    .modal-btn button:hover {
        color: white;
        background: #E37048;
        border: 1px solid #E37048;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        max-width: 180px;
        height: 40px;
        border-radius: 5px;
    }

    .modal-content {
        border-radius: 10px;
        border: none;
    }

    .modal-rating-star i {
        color: gold;
        font-size: 1.8rem;
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

    /* .....................Review Modal Rating Star..................... */

    /* Ratings widget */
    .rating-stars ul {
        list-style-type: none;
        padding: 0;

        -moz-user-select: none;
        -webkit-user-select: none;
    }

    .rating-stars ul>li.star {
        display: inline-block;

    }

    /* Idle State of the stars */
    .rating-stars ul>li.star>i.fa {
        font-size: 2.5em;
        /* Change the size of the stars */
        color: #ccc;
        /* Color on idle state */
    }

    /* Hover state of the stars */
    .rating-stars ul>li.star.hover>i.fa {
        color: #FFCC36;
    }

    /* Selected state of the stars */
    .rating-stars ul>li.star.selected>i.fa {
        color: #FFCC36;
    }

    /* ....................Review Rating Star End................. */
</style>
@include('includes.userdashboard.navbar')
<div class="content-wrapper">
    <div class="container-fluid mb-4">
        @if($bookedsession['session']['type']==0)
        <div class="dashboard-header-left my-4 pt-2 ">
            <h1>My Sessions Detail <span class="d-block"> One to One Session </span></h1>
        </div>
        @else
        <div class="dashboard-header-left my-4 pt-2">
            <h1>My Sessions Detail <span> Group Session</span></h1>
        </div>
        @endif
        <div class="carousel-parent">
            <div class="empty-session-detail-left">

            </div>
            <div class="empty-session-detail-right">

            </div>
            <div class="row js-slick-carousel">

                @foreach($bookedsession['session']['session_image'] as $image)
                <div class="col">
                    <div class="session-detail-img">
                        <img src="{{$image['image']}}" alt="">

                    </div>
                </div>
                @endforeach

                <!-- <div class="col">
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
                </div> -->
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
                                        <a href="{{url('/dashboard/trainer-detail/'.$bookedsession['session']['class']['trainer']['id'])}}"><img class="mr-2" src="{{$bookedsession['session']['class']['trainer']['profile_img']}}" alt=""></a>
                                        <img class="rated-badge" src="{{asset('public/assets/images/badge-2.svg')}}" alt="">
                                        <div class="trainer-detail-profile-left-progress py-2 px-2">
                                            <h1>Level</h1>
                                            <span class="ml-3" style="color:#E37048; font-size:small; font-weight:500">{{$bookedsession['session']['difficulty_level']}}</span>
                                            <!-- <progress id="file" value="72" max="100"> 32% </progress> -->
                                        </div>
                                    </div>
                                    <div class="trainer-detail-profile-left-inner-right">
                                        <div class="col trainer-detail-profile-name px-0 pt-2">
                                            <a href="{{url('/dashboard/trainer-detail/'.$bookedsession['session']['class']['trainer']['id'])}}">
                                                <h1>{{$bookedsession['session']['class']['trainer']['name']}}</h1>
                                            </a>
                                            <div class="trainer-detail-profile-gender">

                                                <img class="mr-2" src="{{asset('public/assets/images/profile-icon.svg')}}" alt="">
                                                <p>{{$bookedsession['session']['class']['trainer']['gender']}} , {{$bookedsession['session']['class']['trainer']['height']}}</p>
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
                            <div class="trainer-detail-profile-inner-right my-auto text-right">
                                @if($bookedsession['session']['preference']==1)
                                <div class="trainer-class-time-card-right">
                                    <img class="trainer-class-time-card-right-one" src="{{asset('public/assets/images/sessiontwo.jpg')}}" alt="">
                                    <img class="trainer-class-time-card-right-two" src="{{asset('public/assets/images/sessionthree.jpg')}}" alt="">
                                    <img class="trainer-class-time-card-right-three" src="{{asset('public/assets/images/sessionfour.jpg')}}" alt="">

                                </div>
                                @else
                                <div class="trainer-class-time-card-right">
                                    <img class="trainer-class-time-card-right-one" src="{{asset('public/assets/images/sessiontwo.jpg')}}" alt="">

                                </div>
                                @endif
                            </div>

                        </div>


                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-sm-6 my-4 pl-0">
                                <div class="trainer-detail-profile-right">
                                    <div class="trainer-detail-profile-right-client text-center">
                                        <p>Clients</p>
                                        <h1>{{$client}}</h1>
                                    </div>
                                    <!-- <div class="trainer-detail-profile-right-classes text-center">
                                        <p>Classes</p>
                                        <h1>{{$classes}}</h1>
                                    </div> -->
                                    <!-- <div class="trainer-detail-profile-right-price">
                                        <h1>$100</h1>
                                    </div> -->

                                </div>
                            </div>
                            <div class="col-sm-6 my-4 pl-0">
                                <div class="trainer-detail-profile-right-price">
                                    <h1>${{$bookedsession['session']['price']}}</h1>
                                </div>

                                <!-- <div class="trainer-detail-profile-right-price">
                                    <h1>$100</h1>
                                </div> -->

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-6 my-1 pl-0">
                                <div class="session-inner-content">
                                    <h1>Session</h1>
                                    <p>{{$bookedsession['session']['class']['category']['title']}}</p>
                                </div>
                            </div>
                            <div class="col-6 my-1 pl-0">
                                <div class="session-inner-content">
                                    <h1>Date</h1>
                                    <p>{{date('d-m-Y', strtotime($bookedsession['session-date']));}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-6 my-4 pl-0">
                                <div class="session-inner-content">
                                    <h1>Start Time</h1>
                                    <p>{{$bookedsession['session']['start_time']}}</p>
                                </div>
                            </div>
                            <div class="col-6 my-4 pl-0">
                                <div class="session-inner-content">
                                    <h1>End Time</h1>
                                    <p>{{$bookedsession['session']['end_time']}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-6 my-4 pl-0">
                                <div class="session-inner-content">
                                    <h1>Location</h1>

                                    <p>{{$bookedsession['session']['location']['tag']}} | {{$bookedsession['session']['location']['location']}} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col text-center">
                        <div class="detail-profile-button">
                            @if($bookedsession['is_session_passed'] == false)
                            <a href="{{url('/chat')}}" class="btn mr-sm-4 my-2">Message</a>
                            @else
                            <a href="{{url('/dashboard/class-detail/'.$bookedsession['session']['class']['trainer']['id'].'/'.$bookedsession['session']['day'])}}" class="btn mr-sm-4 my-2">Book Again</a>
                            <a href="javascript:void(0)" class="btn mr-sm-4 my-2" data-toggle="modal" data-target="#reviewModal">Review</a>
                            <a href="" class="btn my-2" data-toggle="modal" data-target="#refundModal">Refund</a>
                            @endif
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
                        @foreach($rating as $session_rating)
                        <div class="feedback-card my-3">
                            <div class="feedback-profile">
                                <img class="mr-2" src="{{$session_rating['user']['profile_img']}}" alt="">
                                <h1>{{$session_rating['user']['name']}}</h1>
                                <div class="feedback-rating pl-2">
                                    <?php $remRating = 5 - $session_rating['rating']; ?>

                                    <?php for ($i = 0; $i < $session_rating['rating']; $i++) { ?>
                                        <i class="fa fa-star gold pr-1" aria-hidden="true"></i>
                                    <?php } ?>
                                    <?php for ($i = 0; $i < $remRating; $i++) { ?>
                                        <i class="fa fa-star pr-1" aria-hidden="true"></i>
                                    <?php } ?>


                                    <!-- <i class="fa fa-star pr-1" aria-hidden="true"></i>
                                    <i class="fa fa-star pr-1" aria-hidden="true"></i>
                                    <i class="fa fa-star pr-1" aria-hidden="true"></i>
                                    <i class="fa fa-star pr-1" aria-hidden="true"></i> -->
                                    <!-- <p>{{$session_rating['rating']}}</p> -->
                                </div>
                            </div>
                            <div class="feedback-message px-2 px-sm-3 py-4 mt-2">
                                <p> {{$session_rating['description']}}</p>

                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
<!-- modal -->
<div class="modal fade" id="refundModal" tabindex="-1" role="dialog" aria-labelledby="signupModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content signupModalDialogue">
            <!-- <div class="w-50" style="background-color:#E37048 ; height:5px; margin-left:15px"></div> -->
            <div class="modalHeader">
                <!-- <h2>Signup to <span>WORKITPT</span></h2> -->
                <img style="width: 8%;" data-dismiss="modal" src="{{asset('public/assets/images/x-circle.svg')}}" alt="">
            </div>
            <div class="modal-body text-center review-modal mt-5 pt-0">
                <img style="width:40%;margin:0 auto" src="{{asset('public/assets/images/refund.svg')}}" alt="">
                <h1 class="pt-2 pb-3">Refund Request!</h1>
                <form>
                    <div class="form-group modal-field">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Type reason"></textarea>
                    </div>
                    <div class="col text-right modal-btn pt-3 pb-2">
                        <button>Submit Request</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<!-- //////////// Review modal..///////// -->
<!-- modal -->
<div class="modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-labelledby="signupModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content signupModalDialogue">
            <!-- <div class="w-50" style="background-color:#E37048 ; height:5px; margin-left:15px"></div> -->
            <div class="modalHeader">
                <!-- <h2>Signup to <span>WORKITPT</span></h2> -->
                <img style="width: 8%;" data-dismiss="modal" src="{{asset('public/assets/images/x-circle.svg')}}" alt="">
            </div>
            <div class="modal-body text-center review-modal mt-5 pt-0">
                <img style="width:30%;margin:0 auto" src="{{asset('public/assets/images/review.svg')}}" alt="">
                <h1 class="pt-2 pb-2">Send Review!</h1>
                <!-- <div class="modal-rating-star pb-3">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div> -->
                <div class='rating-stars text-center'>
                    <ul id='stars'>
                        <li class='star' title='Poor' data-value='1'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star' title='Fair' data-value='2'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star' title='Good' data-value='3'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star' title='Excellent' data-value='4'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star' title='WOW!!!' data-value='5'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                    </ul>
                </div>
                <form action="{{route('rating')}}" method="post">
                    @csrf
                    <div class="form-group modal-field">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Type reason" name="description"></textarea>
                    </div>
                    <input type="hidden" value="{{$bookedsession['session']['id']}}" name="session_id">
                    <input type="hidden" value="{{$bookedsession['session']['class']['trainer']['id']}}" name="trainer_id">
                    <input type="hidden" value="" id="input" name="rating">
                    <div class="col text-right modal-btn pt-3 pb-2">
                        <button type="submit">Send Review</button>
                    </div>
                </form>

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
<script>
    $(document).ready(function() {

        /* 1. Visualizing things on Hover - See next part for action on click */
        $('#stars li').on('mouseover', function() {
            var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

            // Now highlight all the stars that's not after the current hovered star
            $(this).parent().children('li.star').each(function(e) {
                if (e < onStar) {
                    $(this).addClass('hover');
                } else {
                    $(this).removeClass('hover');
                }
            });

        }).on('mouseout', function() {
            $(this).parent().children('li.star').each(function(e) {
                $(this).removeClass('hover');
            });
        });


        /* 2. Action to perform on click */
        $('#stars li').on('click', function() {
            var onStar = parseInt($(this).data('value'), 10); // The star currently selected
            var stars = $(this).parent().children('li.star');

            for (i = 0; i < stars.length; i++) {
                $(stars[i]).removeClass('selected');
            }

            for (i = 0; i < onStar; i++) {
                $(stars[i]).addClass('selected');
            }

            // JUST RESPONSE (Not needed)
            var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
            var msg = "";
            if (ratingValue > 1) {
                msg = "Thanks! You rated this " + ratingValue + " stars.";
            } else {
                msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
            }
            responseMessage(msg);

        });


    });


    function responseMessage(msg) {
        $('.success-box').fadeIn(200);
        $('.success-box div.text-message').html("<span>" + msg + "</span>");
    }
    $('.star').on('click', function() {
        // alert('com');
        var rate = $(this).attr("data-value");
        // alert(rate);
        $('#input').val(rate);
    });
</script>
@endsection