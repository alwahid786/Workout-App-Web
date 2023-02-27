@extends('layouts.trainerSide.default')
<!-- <link rel="stylesheet" href="{{asset('public/assets/trainercss/dashboard.css')}}"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" /> -->
<style>
    body {
        background-color: #F2F2F2 !important;
    }

    /* chart */
    .apexcharts-bar-area:hover {
        fill: #E37048;
    }

    .chart-section {
        background-color: white;
        border-radius: 10px;
    }

    /* session-card */
    .dashboard-session-card-wrapper {
        height: 247px;
        overflow-y: scroll;
    }

    .dashboard-session-card-wrapper::-webkit-scrollbar-thumb {
        background: #E37048;
        border-radius: 7px;
        height: 7px;
        width: 7px;
    }

    .dashboard-session-card-wrapper::-webkit-scrollbar {
        width: 7px;
        height: 7px;
        width: 7px;
    }


    .dashboard-session-card-wrapper::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 7px;
        height: 7px;
        width: 7px;
    }


    .dashboard-session-card-wrapper::-webkit-scrollbar-thumb {
        background: #E37048;
        border-radius: 7px;
        height: 7px;
        width: 7px;
    }

    .dashboard-session-section {
        background-color: white;
        border-radius: 10px;
    }

    .dashboard-session-heading h1 {
        color: #E37048;
        font-size: 1.5rem;
        font-weight: 500;
    }

    .dashboard-session-card {
        background: linear-gradient(180deg, rgba(255, 255, 255, 0) 26.32%, #FFFFFF 117.8%), url('../../../../workitpt_web/public/assets/trainerimages/sessionfive.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        border-radius: 10px;
    }

    .dashboard-session-card .card-heading {
        color: white;
        font-size: 1.5rem;
        padding-bottom: 2.5rem;
    }

    .dashboard-session-card-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
    }

    .dashboard-session-card-footer-left {
        position: relative;
        height: 40px;
    }

    .dashboard-session-card-footer-left img {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        object-fit: cover;
        border: 1px solid #E37048;
        position: absolute;
        top: 50%;
        left: 0;
        transform: translate(0%, -50%);
    }

    .dashboard-session-card-footer-left img:nth-of-type(2) {
        left: 10px;
    }

    .dashboard-session-card-footer-left img:nth-of-type(3) {
        left: 20px;
    }

    .dashboard-session-card-footer-left div {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        border: 1px solid #E37048;
        position: absolute;
        top: 50%;
        left: 30px;
        transform: translate(0%, -50%);
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: black;
    }

    .dashboard-session-card-footer-left div h1 {
        font-size: 0.9rem;
        color: white;
        margin-bottom: 0px;
    }

    .dashboard-session-card-footer-right a {
        text-decoration: none !important;
        box-shadow: none !important;
        border: 1px solid black;
        color: white;
        background-color: black;
        font-size: 0.8rem;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 30px;
        max-width: 200px;
        width: 100%;
        height: 30px;
    }

    /* table */
    .workout-today-header h1 {
        font-size: 1.5rem;
        color: #E37048;
        margin-bottom: 0px;
    }

    .workout-today-wrapper a {
        text-decoration: none !important;
    }

    .workout-table-body {
        display: flex;
        align-items: center;
        background: #fffcfc;
        box-shadow: 0px 4px 9px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        position: relative;
    }

    .table-cotent {
        width: 16.66%;
    }

    .table-cotent:nth-of-type(2) {
        width: 25%;
    }


    .table-content-value .workout-type {
        color: #E37048;
        font-size: 1rem;
        font-weight: 500;
    }

    .table-content-value .name,
    .table-content-value .date {
        font-size: 0.8rem;
        color: #464646;
    }

    .table-content-value .date {
        display: flex;
        flex-wrap: wrap;
        justify-content: end;
        align-items: center;
    }

    .table-content-value h1 img {
        width: 19px;
        height: 19px;
    }



    .table-content-value h1 {
        font-size: 1rem;
        margin-bottom: 0px;
    }

    .table-content-value .workout-type {
        color: #E37048;
        font-size: 1rem;
        font-weight: 500;
    }

    .trainer-class-time-card-right {
        display: flex;
        height: 30px;
    }

    .trainer-class-time-card-right img {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        object-fit: cover;
        position: absolute;
        left: 80%;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    .workout-table-img {
        margin: 0 auto;
    }

    .trainer-class-time-card-right {
        position: relative;
        width: 100px;
    }

    .trainer-class-time-card-right-one {
        position: absolute;
        left: 50% !important;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    .trainer-class-time-card-right-two {
        position: absolute;
        left: 60% !important;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    .trainer-class-time-card-right-three {
        position: absolute;
        left: 70% !important;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    .workout-table-border {
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 20px;
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
    }

    .workout-table-border-red {
        background: red;
    }

    .workout-table-border-blue {
        background-color: #49AAEF;
    }

    .workout-table-border-green {
        background-color: #B1D244;
    }

    .workout-table-border-yellow {
        background-color: #FFBB00;
    }

    .table-content-value .session-status {
        font-size: 0.8rem;
        color: #464646;
    }

    .table-content-value .session-status.success {
        color: #3F9917 !important;
    }

    .table-content-value .session-status.pending {
        color: #FF0000 !important;
    }


    .upcoming-header h1 {
        color: #E37048;
        font-size: 1.2rem;
        font-weight: 500;
        margin-bottom: 0px;
    }

    /* .upcoming-wrapper {
    height: 300px;
    overflow-y: scroll;
} */

    .upcoming-wrapper::-webkit-scrollbar-thumb {
        background: #E37048;
        border-radius: 7px;
        height: 7px;
        width: 7px;
    }

    .upcoming-wrapper::-webkit-scrollbar {
        width: 7px;
        height: 7px;
        width: 7px;
    }


    .upcoming-wrapper::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 7px;
        height: 7px;
        width: 7px;
    }


    .upcoming-wrapper::-webkit-scrollbar-thumb {
        background: #E37048;
        border-radius: 7px;
        height: 7px;
        width: 7px;
    }

    /* notification */
    .notification-container {
        background-color: white;
        border-radius: 10px;
    }

    .left-notification img {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        object-fit: cover;
    }

    .noti-card {
        display: flex;
        border-bottom: 1px solid #D9D9D9;
    }

    .noti-card:last-of-type {
        border-bottom: none;
    }

    .right-notification h1 {
        font-size: 1rem;
        margin-bottom: 0px;
        color: #A8A8A8;
        font-weight: 400;
    }

    .right-notification h1 span {
        color: #E37048;
        padding-right: 5px;
        font-weight: 500;
    }

    .right-notification-btn {
        display: flex;
        flex-wrap: wrap;
    }

    .right-notification-btn button:first-of-type {
        background: #E37048;
        color: white;
    }

    .right-notification-btn button:last-of-type {
        background: #ECECEC;
        color: #E37048;
    }

    .right-notification-btn button {
        width: 80px;
        height: 35px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none !important;
        box-shadow: none !important;
        font-size: 0.8rem;
        border-radius: 7px;
    }

    .accept-noti-card {
        align-items: center;
    }

    /* recent */
    .recent-session-heading h1 {
        font-size: 1.2rem;
        color: #E37048;
        font-weight: 500;
        margin-bottom: 0px;
    }

    .recent-session-wrapper {
        background-color: white;
        border-radius: 10px;
    }

    .recent-session-card-active {
        background: #E37048 !important;
        border-radius: 10px;
    }

    .recent-session-card {
        background-color: #F2F2F2;
        border-radius: 10px;
    }

    .card-inner {
        display: flex;
        justify-content: space-between;
    }

    .card-inner-left {
        display: flex;
        align-items: center;
    }

    .card-inner-right h1 {
        align-items: flex-end;
    }

    .card-inner-left img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        border: 1px solid white;
        object-fit: cover;
        margin-right: 5px;
    }

    .recent-session-card-active .card-inner-left h1 {
        color: white !important;
    }

    .card-inner-left h1 {
        display: flex;
        flex-direction: column;
        color: black;
        font-size: 0.9rem;
        font-weight: 500;
    }

    .recent-session-card-images {
        position: relative;
        height: 30px;
    }

    .recent-session-card-images img {
        position: absolute;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        right: 10px;
        border: 1px solid white;
    }

    .recent-session-card-images img:nth-of-type(2) {
        position: absolute;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        right: 20px;
    }

    .recent-session-card-images img:nth-of-type(3) {
        position: absolute;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        right: 30px;
    }

    .recent-session-card-active .noti-card-btn a {
        color: #E37048 !important;
        background-color: white;
    }

    .noti-card-btn a {
        text-decoration: none !important;
        box-shadow: none !important;
        border: none !important;
        color: white !important;
        background-color: #E37048;
        font-size: 0.6rem;
        width: 90px;
        height: 25px;
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;

    }

    /* feedback */
    .feedback-heading h1 {
        font-size: 1.2rem;
        font-weight: 500;
        margin-bottom: 0px;
        color: #434343;
    }

    .feedback-section-wrapper {
        background-color: white;
        border-radius: 10px;
    }

    .feedback-inner-header {
        display: flex;
        align-items: flex-end;
    }

    .feedback-inner-header img {
        width: 40px;
        height: 40px;
        object-fit: cover;
        border-radius: 50%;
        border: 1px solid #E37048;
        margin-right: 5px;
    }

    .feedback-inner-header h1 {
        color: #E37048;
        margin-bottom: 0px;
        font-size: 0.8rem;
        font-weight: 500;
    }

    .feedback-inner-body {
        background: rgba(217, 217, 217, 0.4);
        border-radius: 10px;
    }

    .feedback-inner-body p {
        font-size: 0.8rem;
        color: #434343;
        margin-bottom: 0px;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
    }

    .feedback-arrow-btn i {
        color: #E37048;
        font-size: 1rem;
        font-weight: 500;
    }

    @media screen and (max-width:767px) {
        .dashboard-session-card .card-heading {
            color: white;
            font-size: 1rem;
            padding-bottom: 2.5rem;
        }

        .dashboard-session-card-footer-right a {
            text-decoration: none !important;
            box-shadow: none !important;
            border: 1px solid black;
            color: white;
            background-color: black;
            font-size: 0.6rem;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 30px;
            max-width: 200px;
            width: 100%;
            height: 30px;
        }

        .dashboard-session-card-footer-left div h1 {
            font-size: 0.7rem;
            color: white;
            margin-bottom: 0px;
        }

        /* table */
        .workout-table-body {

            flex-direction: column;
            border-radius: 15px;
        }

        .table-cotent {
            width: 100% !important;
        }

        .table-content-value .date {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .table-content-value {
            width: 100%;
        }

        /* noti */
        .right-notification h1 {
            font-size: 0.8rem;
            margin-bottom: 0px;
            color: #A8A8A8;
            font-weight: 400;
        }

        .left-notification img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }

        .right-notification-btn button {
            width: 60px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none !important;
            box-shadow: none !important;
            font-size: 0.6rem;
            border-radius: 7px;
        }

        .card-inner-left img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 1px solid white;
            object-fit: cover;
            margin-right: 5px;
        }

        .card-inner-left h1 {
            display: flex;
            flex-direction: column;
            color: black;
            font-size: 0.7rem;
            font-weight: 500;
        }
    }

    .modal-btn {
        margin: 0 auto;

        width: 40%;
    }

    .modal-btn a {
        background: #E37048;
        border: none;
        box-shadow: none !important;
        outline: none;
        color: white !important;
        border-radius: 10px;
        width: 25%;
        font-size: 1.4rem;
        max-width: 200px;
        width: 100%;
        font-size: 0.8rem;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .update-profile-form-btn {
        text-decoration: none;
        color: #fff;
        font-weight: 600;
        font-size: 2rem;

    }

    .update-profile-form-btn:hover {
        text-decoration: none !important;
        color: #fff;
    }

    .update-profile-form-btn {
        font-size: 1.5rem;
    }

    @media only screen and (max-width:396px) {

        .table-content-value h1 {
            font-size: 0.8rem !important;
        }
    }

    @media screen and (max-width: 1460px) and (min-width:992px) {
        .table-content-value .date {
            font-size: 0.6rem;
            color: #464646;
        }
    }



    .modal-content {
        border: none !important;
        border-radius: 10px !important;
    }

    .sucess-modal textarea {
        resize: none;
        box-shadow: none !important;
        min-height: 150px;
        border-radius: 10px;
        border: 1px solid #80808021 !important;
    }

    @media screen and (max-width:576px) {
        .sucess-modal textarea {
            resize: none;
            box-shadow: none !important;
            min-height: 100px;
            border-radius: 10px;
            border: 1px solid #80808021 !important;
        }
    }

    .today-chat a {
        text-decoration: inherit;
        color: inherit;


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

    .feedback-rating {
        /* position: absolute;
        top: 50%;
        right: 10px;
        transform: translate(0%, -50%); */
        display: flex;
    }

    .feedback-rating i {
        color: gold;
    }

    .feedback-rating i:last-of-type {
        color: #f3f0f0 !important;
    }

    .feedback-rating p {
        margin-bottom: 0px;
        font-size: 0.8rem;
        font-weight: 500;
        color: black;
    }
</style>
@section('content')
@include('includes.trainerSide.navbar')
<div class="content-wrapper px-2 py-3">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-xl-8">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="workout-today-header  pb-4">
                            <h1>Revenue</h1>
                        </div>
                        <div class="chart-section">
                            <div id="chart"></div>
                        </div>

                    </div>
                    <!-- <div class="col-xl-6 mt-4 mt-xl-0 ">
                        <div class="dashboard-session-section p-3">
                            <div class="dashboard-session-heading">
                                <h1>Sessions</h1>
                            </div>
                            <div class="dashboard-session-card-wrapper pr-2">
                                <div class="col-12 dashboard-session-card my-3 px-3 pt-3 pb-1">
                                    <h1 class="card-heading">Body Building</h1>
                                    <div class="dashboard-session-card-footer">
                                        <div class="dashboard-session-card-footer-left">
                                            <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                                            <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                                            <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                                            <div>
                                                <h1>+20</h1>
                                            </div>
                                        </div>
                                        <div class="dashboard-session-card-footer-right">
                                            <a class="btn" href="#">See all members</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 dashboard-session-card my-3 px-3 pt-3 pb-1">
                                    <h1 class="card-heading">Body Building</h1>
                                    <div class="dashboard-session-card-footer">
                                        <div class="dashboard-session-card-footer-left">
                                            <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                                            <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                                            <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                                            <div>
                                                <h1>+20</h1>
                                            </div>
                                        </div>
                                        <div class="dashboard-session-card-footer-right">
                                            <a class="btn" href="#">See all members</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 dashboard-session-card my-3 px-3 pt-3 pb-1">
                                    <h1 class="card-heading">Body Building</h1>
                                    <div class="dashboard-session-card-footer">
                                        <div class="dashboard-session-card-footer-left">
                                            <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                                            <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                                            <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                                            <div>
                                                <h1>+20</h1>
                                            </div>
                                        </div>
                                        <div class="dashboard-session-card-footer-right">
                                            <a class="btn" href="#">See all members</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 dashboard-session-card my-3 px-3 pt-3 pb-1">
                                    <h1 class="card-heading">Body Building</h1>
                                    <div class="dashboard-session-card-footer">
                                        <div class="dashboard-session-card-footer-left">
                                            <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                                            <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                                            <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                                            <div>
                                                <h1>+20</h1>
                                            </div>
                                        </div>
                                        <div class="dashboard-session-card-footer-right">
                                            <a class="btn" href="#">See all members</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 dashboard-session-card my-3 px-3 pt-3 pb-1">
                                    <h1 class="card-heading">Body Building</h1>
                                    <div class="dashboard-session-card-footer">
                                        <div class="dashboard-session-card-footer-left">
                                            <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                                            <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                                            <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                                            <div>
                                                <h1>+20</h1>
                                            </div>
                                        </div>
                                        <div class="dashboard-session-card-footer-right">
                                            <a class="btn" href="#">See all members</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div> -->
                    <div class="col-12 workout-today-section py-2">
                        <div class="workout-today-header pt-2 pb-1">
                            <h1>Your Today’s Session</h1>
                        </div>

                        <div class="workout-today-wrapper">
                            <!-- table -->
                            <div class="workout-table-body d-flex justify-content-around pl-4 pr-3 my-4 my-md-3 py-4">
                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="workout-type">Yoga Session </h1>
                                    </div>
                                </div>
                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="date"> <img src="{{asset('public/assets/images/clock.svg')}}" alt="">7 Dec, 2022 |<span>10 AM-11 AM</span> </h1>
                                    </div>
                                </div>
                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <div class="trainer-class-time-card-right workout-table-img">
                                            <img class="trainer-class-time-card-right-one" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-two" src="{{asset('public/assets/images/sessiontwo.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-three" src="{{asset('public/assets/images/sessionthree.jpg')}}" alt="">

                                        </div>
                                    </div>
                                </div>

                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="name"> $100</h1>
                                    </div>
                                </div>
                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="session-status success"> In session</h1>
                                    </div>
                                </div>

                                <div class="table-cotent py-1 py-md-0">
                                    <a href="{{url('/trainer/session')}}">
                                        <div class="table-content-value text-center">
                                            <img src="{{asset('public/assets/trainerimages/eye.png')}}" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="table-cotent py-1 ">

                                    <div class="table-content-value text-center today-chat">
                                        <a href="{{url('/trainer/chat')}}">
                                            <i class="fa fa-commenting" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="workout-table-border workout-table-border-blue "></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 workout-today-section py-2">
                        <div class="upcoming-header pt-2 pb-1">
                            <h1>Upcoming Seesions</h1>
                        </div>

                        <div class="workout-today-wrapper upcoming-wrapper pr-2">
                            <!-- table -->
                            <div class="workout-table-body d-flex justify-content-around pl-4 pr-3 my-4 my-md-3 py-4">
                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="workout-type">Yoga Session </h1>
                                    </div>
                                </div>
                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="date"> <img src="{{asset('public/assets/images/clock.svg')}}" alt="">7 Dec, 2022 |<span>10 AM-11 AM</span> </h1>
                                    </div>
                                </div>

                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <div class="trainer-class-time-card-right workout-table-img">
                                            <img class="trainer-class-time-card-right-one" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-two" src="{{asset('public/assets/images/sessiontwo.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-three" src="{{asset('public/assets/images/sessionthree.jpg')}}" alt="">

                                        </div>
                                    </div>
                                </div>
                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="name"> $100</h1>
                                    </div>
                                </div>
                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="session-status pending"> Pending</h1>
                                    </div>
                                </div>

                                <div class="table-cotent py-2 py-md-0">
                                    <a href="{{url('/trainer/session')}}">

                                        <div class="table-content-value text-center">
                                            <img src="{{asset('public/assets/trainerimages/eye.png')}}" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="workout-table-border workout-table-border-blue "></div>
                            </div>
                            <div class="workout-table-body d-flex justify-content-around pl-4 pr-3 my-4 my-md-3 py-4">
                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="workout-type">Yoga Session </h1>
                                    </div>
                                </div>
                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="date"> <img src="{{asset('public/assets/images/clock.svg')}}" alt="">7 Dec, 2022 |<span>10 AM-11 AM</span> </h1>
                                    </div>
                                </div>

                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <div class="trainer-class-time-card-right workout-table-img">
                                            <img class="trainer-class-time-card-right-one" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-two" src="{{asset('public/assets/images/sessiontwo.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-three" src="{{asset('public/assets/images/sessionthree.jpg')}}" alt="">

                                        </div>
                                    </div>
                                </div>
                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="name"> $100</h1>
                                    </div>
                                </div>
                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="session-status pending"> Pending</h1>
                                    </div>
                                </div>

                                <div class="table-cotent py-2 py-md-0">
                                    <a href="{{url('/trainer/session')}}">

                                        <div class="table-content-value text-center">
                                            <img src="{{asset('public/assets/trainerimages/eye.png')}}" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="workout-table-border workout-table-border-blue "></div>
                            </div>
                            <div class="workout-table-body d-flex justify-content-around pl-4 pr-3 my-4 my-md-3 py-4">
                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="workout-type">Yoga Session </h1>
                                    </div>
                                </div>
                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="date"> <img src="{{asset('public/assets/images/clock.svg')}}" alt="">7 Dec, 2022 |<span>10 AM-11 AM</span> </h1>
                                    </div>
                                </div>

                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <div class="trainer-class-time-card-right workout-table-img">
                                            <img class="trainer-class-time-card-right-one" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-two" src="{{asset('public/assets/images/sessiontwo.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-three" src="{{asset('public/assets/images/sessionthree.jpg')}}" alt="">

                                        </div>
                                    </div>
                                </div>
                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="name"> $100</h1>
                                    </div>
                                </div>
                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="session-status pending"> Pending</h1>
                                    </div>
                                </div>

                                <div class="table-cotent py-2 py-md-0">
                                    <a href="{{url('/trainer/session')}}">

                                        <div class="table-content-value text-center">
                                            <img src="{{asset('public/assets/trainerimages/eye.png')}}" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="workout-table-border workout-table-border-blue "></div>
                            </div>
                            <div class="workout-table-body d-flex justify-content-around pl-4 pr-3 my-4 my-md-3 py-4">
                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="workout-type">Yoga Session </h1>
                                    </div>
                                </div>
                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="date"> <img src="{{asset('public/assets/images/clock.svg')}}" alt="">7 Dec, 2022 |<span>10 AM-11 AM</span> </h1>
                                    </div>
                                </div>

                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <div class="trainer-class-time-card-right workout-table-img">
                                            <img class="trainer-class-time-card-right-one" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-two" src="{{asset('public/assets/images/sessiontwo.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-three" src="{{asset('public/assets/images/sessionthree.jpg')}}" alt="">

                                        </div>
                                    </div>
                                </div>
                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="name"> $100</h1>
                                    </div>
                                </div>
                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="session-status pending"> Pending</h1>
                                    </div>
                                </div>

                                <div class="table-cotent py-2 py-md-0">
                                    <a href="{{url('/trainer/session')}}">

                                        <div class="table-content-value text-center">
                                            <img src="{{asset('public/assets/trainerimages/eye.png')}}" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="workout-table-border workout-table-border-blue "></div>
                            </div>
                            <div class="workout-table-body d-flex justify-content-around pl-4 pr-3 my-4 my-md-3 py-4">
                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="workout-type">Yoga Session </h1>
                                    </div>
                                </div>
                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="date"> <img src="{{asset('public/assets/images/clock.svg')}}" alt="">7 Dec, 2022 |<span>10 AM-11 AM</span> </h1>
                                    </div>
                                </div>

                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <div class="trainer-class-time-card-right workout-table-img">
                                            <img class="trainer-class-time-card-right-one" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-two" src="{{asset('public/assets/images/sessiontwo.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-three" src="{{asset('public/assets/images/sessionthree.jpg')}}" alt="">

                                        </div>
                                    </div>
                                </div>

                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="name"> $100</h1>
                                    </div>
                                </div>
                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="session-status pending"> Pending</h1>
                                    </div>
                                </div>

                                <div class="table-cotent py-2 py-md-0">
                                    <a href="{{url('/trainer/session')}}">

                                        <div class="table-content-value text-center">
                                            <img src="{{asset('public/assets/trainerimages/eye.png')}}" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="workout-table-border workout-table-border-blue "></div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-4 mt-4 mt-xl-0">
                <div class="notification-container py-3">
                    <div class="dashboard-session-heading px-3 pb-2">
                        <h1>Notification</h1>
                    </div>
                    <div class="notification-container-inner">
                        <div class="noti-card py-3 my-2 px-0">
                            <div class="left-notification pr-2 pl-3">
                                <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                            </div>
                            <div class="right-notification pr-3">
                                <h1><span>Dayut Carlotte</span> send you request for Nutrition sessions</h1>
                                <div class="right-notification-btn px-0">
                                    <button class="m-2" data-toggle="modal" data-target="#acceptModal">Accept</button>
                                    <button class="m-2" data-toggle="modal" data-target="#rejectModal">Reject</button>
                                </div>
                            </div>
                        </div>
                        <div class="noti-card py-3 my-2 px-0">
                            <div class="left-notification pr-2 pl-3">
                                <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                            </div>
                            <div class="right-notification pr-3">
                                <h1><span>Dayut Carlotte</span> send you request for Nutrition sessions</h1>
                                <div class="right-notification-btn px-0">
                                    <button class="m-2" data-toggle="modal" data-target="#acceptModal">Accept</button>
                                    <button class="m-2" data-toggle="modal" data-target="#rejectModal">Reject</button>
                                </div>
                            </div>
                        </div>
                        <div class="noti-card accept-noti-card py-3 my-2 px-0">
                            <div class="left-notification pr-2 pl-3">
                                <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                            </div>
                            <div class="right-notification pr-3">
                                <h1><span>Dayut Carlotte</span> your Nutritions session wil be on 12 Nov 2022
                                    (2pm-4pm)</h1>

                            </div>
                        </div>

                    </div>

                </div>
                <div class="recent-session">
                    <div class="recent-session-heading">
                        <h1 class="py-4">Recent Session</h1>
                    </div>
                    <div class="recent-session-wrapper p-3">
                        <div class="recent-session-card recent-session-card-active py-3 my-2">
                            <div class="col-12 text-right recent-session-card-images">
                                <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                                <!-- <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                                <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt=""> -->
                            </div>
                            <div class="col-12 card-inner py-2">
                                <div class="card-inner-left">
                                    <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                                    <h1>Yoga<span class="pt-1">$100</span></h1>
                                </div>
                                <div class="card-inner-left card-inner-right">
                                    <h1>12Pm-2Pm<span class="pt-1">Nov-02-2022</span></h1>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between px-2">

                                <p class="text-light ">One Time</p>
                                <p class="text-light ">In Person</p>

                            </div>

                            <div class="col-12 text-center noti-card-btn">
                                <a class="btn" href="#">View</a>
                            </div>
                        </div>
                        <div class="recent-session-card py-3 my-2">
                            <div class="col-12 text-right recent-session-card-images">
                                <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                                <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                                <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                            </div>
                            <div class="col-12 card-inner py-2">
                                <div class="card-inner-left">
                                    <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                                    <h1>Yoga<span class="pt-1">$100</span></h1>
                                </div>
                                <div class="card-inner-left card-inner-right">
                                    <h1>12Pm-2Pm<span class="pt-1">Nov-02-2022</span></h1>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between px-2">

                                <p class="text-dark ">Recurring</p>
                                <p class="text-dark text-right">Online</p>
                            </div>
                            <div class="col-12 text-center noti-card-btn">
                                <a class="btn" href="#">View</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="feedback-section">
                    <div class="feedback-heading py-3">
                        <h1>Clients Feedback</h1>
                    </div>
                    <div class="feedback-section-wrapper p-3">
                        <div class="feedback-card my-2">

                            <!-- <div class="feedback-inner-header pb-2">
                                <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                                <h1>Michael John</h1>

                            </div> -->
                            <div class="feedback-profile">
                                <img class="mr-2" src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                                <h1>Michael John</h1>
                                <div class="feedback-rating pl-2">
                                    <i class="fa fa-star pr-1" aria-hidden="true"></i>
                                    <i class="fa fa-star pr-1" aria-hidden="true"></i>
                                    <i class="fa fa-star pr-1" aria-hidden="true"></i>
                                    <i class="fa fa-star pr-1" aria-hidden="true"></i>
                                    <i class="fa fa-star pr-1" aria-hidden="true"></i>
                                    <p>4.0</p>
                                </div>
                            </div>

                            <div class="feedback-inner-body p-3">
                                <p>LoremIpsum Lorem Ipsum
                                    Lorem Ipsum Lorem Ipsum </p>
                            </div>
                        </div>
                        <div class="feedback-card my-2">
                            <div class="feedback-profile">
                                <img class="mr-2" src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                                <h1>Michael John</h1>
                                <div class="feedback-rating pl-2">
                                    <i class="fa fa-star pr-1" aria-hidden="true"></i>
                                    <i class="fa fa-star pr-1" aria-hidden="true"></i>
                                    <i class="fa fa-star pr-1" aria-hidden="true"></i>
                                    <i class="fa fa-star pr-1" aria-hidden="true"></i>
                                    <i class="fa fa-star pr-1" aria-hidden="true"></i>
                                    <p>4.0</p>
                                </div>
                            </div>
                            <div class="feedback-inner-body p-3">
                                <p>LoremIpsum Lorem Ipsum
                                    Lorem Ipsum Lorem Ipsum </p>
                            </div>
                        </div>
                        <div class="feedback-card feedback-card-hide my-2">
                            <div class="feedback-profile">
                                <img class="mr-2" src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                                <h1>Michael John</h1>
                                <div class="feedback-rating pl-2">
                                    <i class="fa fa-star pr-1" aria-hidden="true"></i>
                                    <i class="fa fa-star pr-1" aria-hidden="true"></i>
                                    <i class="fa fa-star pr-1" aria-hidden="true"></i>
                                    <i class="fa fa-star pr-1" aria-hidden="true"></i>
                                    <i class="fa fa-star pr-1" aria-hidden="true"></i>
                                    <p>4.0</p>
                                </div>
                            </div>
                            <div class="feedback-inner-body p-3">
                                <p>LoremIpsum Lorem Ipsum
                                    Lorem Ipsum Lorem Ipsum </p>
                            </div>
                        </div>
                        <div class="col-12 feedback-arrow-btn text-center">
                            <i class=" fa fa-angle-down down" aria-hidden="true"></i>
                            <i class="fa fa-angle-up up" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<!-- .................Confrim Modal............... -->
<div class="modal fade" id="acceptModal" tabindex="-1" role="dialog" aria-labelledby="signupModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content signupModalDialogue">
            <div class="modalHeader px-2 pt-2 pb-2 d-flex justify-content-end align-items-center">
                <img class="cross-icon" style="width: 8%;" data-dismiss="modal" src="{{asset('public/assets/images/x-circle.svg')}}" alt="">
            </div>
            <div class="modal-body text-center sucess-modal ">
                <img style="width:40%;margin:0 auto" src="{{asset('public/assets/trainerimages/q-modal.svg')}}" alt="">
                <p class="mb-0 py-3">Do you really want to Accept <br> this request?</p>
                <div class=" modal-btn text-sm-right text-center">
                    <a href="#" class="update-profile-form-btn btn" data-dismiss="modal">Confirm</a>
                </div>
            </div>


        </div>
    </div>
</div>
<div class="modal fade" id="rejectModal" tabindex="-1" role="dialog" aria-labelledby="signupModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content signupModalDialogue">
            <div class="modalHeader px-2 pt-2 pb-2 d-flex justify-content-end align-items-center">
                <img class="cross-icon" style="width: 8%;" data-dismiss="modal" src="{{asset('public/assets/images/x-circle.svg')}}" alt="">
            </div>
            <div class="modal-body text-center sucess-modal ">
                <img style="width:40%;margin:0 auto" src="{{asset('public/assets/trainerimages/q-modal.svg')}}" alt="">
                <p class="mb-0 py-3">Do you really want to Reject<br> this request?</p>
                <p class="text-left mb-0" style="font-weight:500;">Reason</p>
                <textarea class="form-control mb-3"></textarea>
                <div class=" modal-btn text-sm-right text-center">
                    <a href="#" class="update-profile-form-btn btn" data-dismiss="modal">Confirm</a>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection
@section('insertsfooter')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    var options = {
        chart: {
            height: '300',
            type: 'bar',
            toolbar: {
                show: false,
            }
        },
        plotOptions: {
            bar: {
                borderRadius: 10
            }
        },
        fill: {
            colors: ['#FFD8CA']
        },
        series: [{
            name: 'sales',
            data: [125, 125, 125, 125, 125, 125, 125]
        }],
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul']
        },
        yaxis: {
            show: false,

        }
    }

    var chart = new ApexCharts(document.querySelector("#chart"), options);

    chart.render();
</script>
<script>
    $('.feedback-card-hide').hide();
    $('.up').hide();
    $('.down').click(function() {
        $('.feedback-card-hide').show(500);
        $('.down').hide(500);
        $('.up').show(500);

    })
    $('.up').click(function() {
        $('.feedback-card-hide').hide(500);
        $('.up').hide(500);
        $('.down').show(500);

    })
</script>
<script>
    $('.sidenav .nav-item:nth-of-type(1)').addClass('active')
</script>
@endsection