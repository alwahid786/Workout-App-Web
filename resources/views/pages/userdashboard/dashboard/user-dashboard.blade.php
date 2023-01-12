@extends('layouts.userdashboard.default')
@section('content')
<link rel="stylesheet" href="{{asset('public/assets/AS/css/mobiscroll.jquery.min.css')}}">
<style>
    .workout-banner-card {
        background: #FDD9CE;

        border-radius: 10px;
    }

    /* .workout-banner-content{
        display: flex;
        flex-direction: column;
         align-items: center; 
        justify-content: start;
    } */
    .workout-banner-content h1 {
        letter-spacing: 0.02em;
        font-size: 2rem;
        color: #E37048;
        margin-bottom: 0px;
    }

    .workout-banner-content p {
        color: #464646;
        font-size: 1rem;
        margin-bottom: 0px;
    }

    .workout-banner-content a {
        color: #E37048;
        background: transparent;
        border: 1px solid #E37048;
        font-size: 0.9rem;
        padding: 10px 25px;
        border-radius: 10px;
        text-decoration: none;
    }

    .workout-banner-content a:hover {
        color: white;
        background: #E37048;
        border: 1px solid #E37048;
        text-decoration: none;
    }

    .workout-banner-content a:active,
    .workout-banner-content a:focus {
        box-shadow: none;
    }

    .workout-banner-img img {
        width: 100%;
        max-width: 400px;
    }



    .workout-session-card {
        /* display: flex; */
    }

    .red-session-card {
        background: linear-gradient(180deg, #E8533D 0%, #FE2100 100%);
    }

    .blue-session-card {
        background: linear-gradient(180deg, #6972FF 0%, #000CC7 100%);
        ;
    }

    .yellow-session-card {
        background: linear-gradient(180deg, #F7B847 0%, #FFA400 100%);
        ;
    }

    .workout-right-session h2 {
        color: #E37048;
        font-size: 2rem;
    }

    .workout-right-session-card {
        display: flex;
        justify-content: space-between;
        border-radius: 15px;
        align-items: center;
        background: #fff;
    }

    .workout-card-left-section {
        display: flex;
        align-items: center;
    }

    .workout-card-right-active {
        background: #E37048;
    }

    .workout-card-right-active .workout-card-left-inner-section p,
    .workout-card-right-active .workout-card-right-inner-section p {
        color: #fff !important;
        margin-bottom: 0 !important;
    }

    .workout-card-inner-img img {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #E37048;
    }

    .workout-card-right-inner-section {
        text-align: right;
    }

    .workout-card-left-inner-section p:first-child {
        margin-bottom: 0 !important;
        font-weight: 700;
        padding-bottom: 5px;
        font-size: 1rem;
        color: #292828;
    }

    .workout-card-left-inner-section p:last-child,
    .workout-card-right-inner-section p {
        color: #7C7C7C;
        margin-bottom: 0 !important;
        padding-top: 5px;
        font-size: 0.9rem;
    }

    /* calendar */
    .mbsc-ios.mbsc-calendar-controls {
        padding: 2px;
        justify-content: space-around;
        padding-top: 48px;
        padding-bottom: 10px;
    }

    .mbsc-ios.mbsc-segmented {
        background: #dedede;
        position: absolute;
        top: 0px;
        width: 100%;
    }

    .mbsc-ios.mbsc-segmented {
        background: rgba(227, 112, 72, 0.3);
    }

    .mbsc-ios.mbsc-segmented-selectbox-inner {
        background: #E37048;
        padding-top: 5px;
        padding-bottom: 5px;
    }

    .mbsc-segmented-button.mbsc-selected {
        color: white !important;
    }

    #mbsc-control-6 {
        display: none;
    }

    .mbsc-calendar-title {
        color: #E37048;
        font-size: 1rem;
        letter-spacing: 0.05rem;
    }

    .mbsc-button-icon path {
        fill: #E37048;
    }

    .mbsc-icon>svg {
        width: 100%;
        border: 1px solid #E37048;
        border-radius: 5px;
        padding: 5px;
    }

    .mbsc-ios.mbsc-datepicker-inline {
        border: none;
    }

    .workout-calendar {
        background-color: white;
        border-radius: 10px;
        box-shadow: 0px 4px 14px rgba(0, 0, 0, 0.15);
        min-height: 410px;
    }

    .mbsc-ios.mbsc-calendar-today {
        color: #E37048;
    }

    .mbsc-calendar-grid {
        height: 235px;
        overflow-y: scroll;
    }

    .mbsc-calendar-grid::-webkit-scrollbar-thumb {
        background: #E37048;
        border-radius: 7px;
        height: 7px;
        width: 7px;
    }

    .mbsc-calendar-grid::-webkit-scrollbar {
        width: 7px;
        height: 7px;
        width: 7px;
    }


    .mbsc-calendar-grid::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 7px;
        height: 7px;
        width: 7px;
    }


    .mbsc-calendar-grid::-webkit-scrollbar-thumb {
        background: #E37048;
        border-radius: 7px;
        height: 7px;
        width: 7px;
    }

    .mbsc-calendar-week-day {
        color: #E37048;
        /* font-size: 1rem; */
    }

    .mbsc-ios.mbsc-selected .mbsc-calendar-cell-text {
        background: #E37048;
        border: none;
        border-radius: 5px;

    }

    .mbsc-calendar-cell>div:first-of-type {
        visibility: hidden;
    }

    .mbsc-ios.mbsc-calendar-month-title {
        color: #E37048;
    }

    .calendar-header h1 {
        font-size: 1.2rem;
        color: #E37048;
        margin-bottom: 0px;
    }

    .workout-upcoming-wrapper {
        overflow-y: scroll;
        height: 400px;
    }

    .workout-upcoming-wrapper a {
        text-decoration: none !important;
    }

    .workout-upcoming-wrapper::-webkit-scrollbar-thumb {
        background: #E37048;
        border-radius: 7px;
        height: 7px;
        width: 7px;
    }

    .workout-upcoming-wrapper::-webkit-scrollbar {
        width: 7px;
        height: 7px;
        width: 7px;
    }


    .workout-upcoming-wrapper::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 7px;
        height: 7px;
        width: 7px;
    }


    .workout-upcoming-wrapper::-webkit-scrollbar-thumb {
        background: #E37048;
        border-radius: 7px;
        height: 7px;
        width: 7px;
    }

    .workout-right-inner-session {
        overflow-y: scroll;
        height: 530px;
    }

    .workout-right-inner-session a {
        text-decoration: none;
    }

    .workout-right-inner-session::-webkit-scrollbar-thumb {
        background: #E37048;
        border-radius: 7px;
        height: 7px;
        width: 7px;
    }

    .workout-right-inner-session::-webkit-scrollbar {
        width: 7px;
        height: 7px;
        width: 7px;
    }


    .workout-right-inner-session::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 7px;
        height: 7px;
        width: 7px;
    }


    .workout-right-inner-session::-webkit-scrollbar-thumb {
        background: #E37048;
        border-radius: 7px;
        height: 7px;
        width: 7px;
    }

    @media screen and (max-width:576px) {
        .workout-card-inner-img img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #E37048;
        }

        .workout-card-left-inner-section p:first-child {
            margin-bottom: 0 !important;
            font-weight: 700;
            padding-bottom: 5px;
            font-size: 0.8rem;
        }

        .workout-card-left-inner-section p:last-child,
        .workout-card-right-inner-section p {
            color: #7C7C7C;
            margin-bottom: 0 !important;
            padding-top: 5px;
            font-size: 0.8rem;
        }
    }

    /* table */
    .workout-today-wrapper a {
        text-decoration: none !important;
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

    .workout-table-body {
        display: flex;
        align-items: center;
        background: #fffcfc;
        box-shadow: 0px 4px 9px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        position: relative;
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
    }

    .table-cotent:first-of-type {
        width: 20%;
    }

    .table-cotent {
        width: 30%;
    }

    .table-cotent:last-of-type {
        width: 20%;
    }

    .table-content-value h1 img {
        width: 22px;
        height: 22px;
    }



    .table-content-value h1 {
        font-size: 1rem;
        margin-bottom: 0px;
    }

    .workout-table-img {
        margin: 0 auto;
    }

    @media only screen and (max-width:576px) {
        .workout-today-header h1 {
            font-size: 1.3rem;
            color: #E37048;
            margin-bottom: 0px;
        }

        .workout-table-body {

            flex-direction: column;
            border-radius: 15px;
            /* box-shadow: 0 10px 10px -5px; */
        }

        .table-content-value .date {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .table-content-value {
            width: 100%;
        }

        .table-cotent {
            width: 100% !important;
        }



    }

    @media only screen and (max-width:396px) {

        .table-content-value h1 {
            font-size: 0.8rem !important;
        }
    }

    .workout-right-session-btn a,
    .workout-right-session-btn a:hover,
    .workout-right-session-btn a:active,
    .workout-right-session-btn a:focus {
        color: #E37048;
        text-decoration: none;
        font-size: 0.9rem;
        font-weight: 500;
        outline: none;
        box-shadow: none;
    }
</style>
@include('includes.userdashboard.navbar')
<div class="content-wrapper">
    <div class="container-fluid mb-4 py-3">
        <div class="row">
            <div class="col-xl-8">
                <div class="workout-banner-card">
                    <div class="row">
                        <div class="col-md-7 my-auto">
                            <div class="workout-banner-content px-3 py-3 text-center text-md-left">
                                <h1>Welcome John Smith</h1>
                                <p class="pt-3 pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                                <a class="btn" href="#">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-5 align-self-end">
                            <div class="workout-banner-img pt-4 text-center text-md-right">
                                <img src="{{asset('public/assets/images/workout-main-img.svg')}}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="workout-session-card my-4">
                    <div class="row">
                        <div class="col-sm-6 col-md-4 my-2">
                            <div class="work-session-card red-session-card py-4 px-1">
                                <div class="work-session-card-left py-1 pl-3">
                                    <h1>Your Upcoming <span>Session</span> </h1>
                                    <p>15</p>
                                </div>
                                <div class="work-session-card-right">
                                    <img src="{{asset('public/assets/images/red-card-icon.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 my-2">
                            <div class="work-session-card blue-session-card py-4 px-1">
                                <div class="work-session-card-left py-1 pl-3">
                                    <h1>Your Past <span>Session</span> </h1>
                                    <p>20</p>
                                </div>
                                <div class="work-session-card-right">
                                    <img src="{{asset('public/assets/images/blue-card-icon.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 my-2">
                            <div class="work-session-card yellow-session-card py-4 px-1 ">
                                <div class="work-session-card-left py-1 pl-3">
                                    <h1>Your<span>Trainer</span> </h1>
                                    <p>15</p>
                                </div>
                                <div class="work-session-card-right">
                                    <img src="{{asset('public/assets/images/yellow-card-icon.svg')}}" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="workout-today-section">
                    <div class="workout-today-header pt-2 pb-1">
                        <h1>Your Today’s Session</h1>
                    </div>

                    <div class="workout-today-wrapper">
                        <!-- table -->
                        <a href="{{url('/userdashboard/upcomingsessionone')}}">
                            <div class="workout-table-body d-flex justify-content-around pl-4 pr-3 my-4 my-md-3 py-4">
                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="workout-type">Yoga Session </h1>
                                    </div>
                                </div>

                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="name"> <img src="{{asset('public/assets/images/name-icon.svg')}}" alt=""> John Smith </h1>
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
                                <div class="workout-table-border workout-table-border-blue "></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="workout-upcoming-section">
                    <div class="workout-upcoming-header pt-2 pb-1">
                        <h1>Upcoming Seesions</h1>
                    </div>

                    <div class="workout-upcoming-wrapper pr-2">
                        <!-- table -->
                        <a href="{{url('/userdashboard/upcomingsessiongroup')}}">
                            <div class="workout-table-body d-flex justify-content-around pl-4 pr-3 my-4 my-md-3 py-4">
                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="workout-type">Yoga Session </h1>
                                    </div>
                                </div>

                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="name"> <img src="{{asset('public/assets/images/name-icon.svg')}}" alt=""> John Smith </h1>
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
                                <div class="workout-table-border workout-table-border-blue "></div>
                            </div>
                        </a>

                        <a href="{{url('/userdashboard/upcomingsessiongroup')}}">
                            <div class="workout-table-body d-flex justify-content-around pl-4 pr-3 my-4 my-md-3 py-4">
                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="workout-type">Yoga Session </h1>
                                    </div>
                                </div>

                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="name"> <img src="{{asset('public/assets/images/name-icon.svg')}}" alt=""> John Smith </h1>
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
                                <div class="workout-table-border workout-table-border-red "></div>
                            </div>
                        </a>
                        <a href="{{url('/userdashboard/upcomingsessiongroup')}}">
                            <div class="workout-table-body d-flex justify-content-around pl-4 pr-3 my-4 my-md-3 py-4">
                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="workout-type">Yoga Session </h1>
                                    </div>
                                </div>

                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="name"> <img src="{{asset('public/assets/images/name-icon.svg')}}" alt=""> John Smith </h1>
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
                                <div class="workout-table-border workout-table-border-green "></div>
                            </div>
                        </a>
                        <a href="{{url('/userdashboard/upcomingsessiongroup')}}">
                            <div class="workout-table-body d-flex justify-content-around pl-4 pr-3 my-4 my-md-3 py-4">
                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="workout-type">Yoga Session </h1>
                                    </div>
                                </div>

                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="name"> <img src="{{asset('public/assets/images/name-icon.svg')}}" alt=""> John Smith </h1>
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
                                <div class="workout-table-border workout-table-border-yellow "></div>
                            </div>
                        </a>
                        <a href="{{url('/userdashboard/upcomingsessiongroup')}}">
                            <div class="workout-table-body d-flex justify-content-around pl-4 pr-3 my-4 my-md-3 py-4">
                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="workout-type">Yoga Session </h1>
                                    </div>
                                </div>

                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="name"> <img src="{{asset('public/assets/images/name-icon.svg')}}" alt=""> John Smith </h1>
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
                                <div class="workout-table-border workout-table-border-blue "></div>
                            </div>
                        </a>
                    </div>
                </div>


            </div>
            <div class="col-xl-4">
                <div class="workout-calendar p-3">
                    <div class="calendar-header">
                        <h1>Calendar</h1>
                    </div>
                    <div id="demo"></div>
                </div>
                <div class="workout-right-session">
                    <h2 class="my-4">Past Session</h2>
                    <div class="col text-right workout-right-session-btn">
                        <a href="{{url('/userdashboard/pastsession')}}">View All</a>
                    </div>
                    <div class="workout-right-inner-session pr-2">
                        <a href="{{url('/userdashboard/pastsessiondetail')}}">
                            <div class="workout-right-session-card workout-card-right-active px-3 py-4 my-3">
                                <div class="workout-card-left-section ">
                                    <div class="workout-card-inner-img pr-2">
                                        <img src="{{asset('public/assets/images/sessioneight.jpg')}}" alt="">
                                    </div>
                                    <div class="workout-card-left-inner-section">
                                        <p>Dayut Calort</p>
                                        <p>Yoga</p>
                                    </div>
                                </div>
                                <div class="workout-card-right-inner-section ">
                                    <p>12Pm-2Pm</p>
                                    <p class="">Nov-02-2022</p>
                                </div>
                            </div>
                        </a>
                        <a href="{{url('/userdashboard/pastsessiondetail')}}">
                            <div class="workout-right-session-card  px-3 py-4 my-3">
                                <div class="workout-card-left-section ">
                                    <div class="workout-card-inner-img pr-2">
                                        <img src="{{asset('public/assets/images/sessioneight.jpg')}}" alt="">
                                    </div>
                                    <div class="workout-card-left-inner-section">
                                        <p>Dayut Calort</p>
                                        <p>Yoga</p>
                                    </div>
                                </div>
                                <div class="workout-card-right-inner-section ">
                                    <p>12Pm-2Pm</p>
                                    <p class="">Nov-02-2022</p>
                                </div>
                            </div>
                        </a>
                        <a href="{{url('/userdashboard/pastsessiondetail')}}">
                            <div class="workout-right-session-card  px-3 py-4 my-3">
                                <div class="workout-card-left-section ">
                                    <div class="workout-card-inner-img pr-2">
                                        <img src="{{asset('public/assets/images/sessioneight.jpg')}}" alt="">
                                    </div>
                                    <div class="workout-card-left-inner-section">
                                        <p>Dayut Calort</p>
                                        <p>Yoga</p>
                                    </div>
                                </div>
                                <div class="workout-card-right-inner-section ">
                                    <p>12Pm-2Pm</p>
                                    <p class="">Nov-02-2022</p>
                                </div>
                            </div>
                        </a>
                        <a href="{{url('/userdashboard/pastsessiondetail')}}">
                            <div class="workout-right-session-card  px-3 py-4 my-3">
                                <div class="workout-card-left-section ">
                                    <div class="workout-card-inner-img pr-2">
                                        <img src="{{asset('public/assets/images/sessioneight.jpg')}}" alt="">
                                    </div>
                                    <div class="workout-card-left-inner-section">
                                        <p>Dayut Calort</p>
                                        <p>Yoga</p>
                                    </div>
                                </div>
                                <div class="workout-card-right-inner-section ">
                                    <p>12Pm-2Pm</p>
                                    <p class="">Nov-02-2022</p>
                                </div>
                            </div>
                        </a>
                        <a href="{{url('/userdashboard/pastsessiondetail')}}">
                            <div class="workout-right-session-card  px-3 py-4 my-3">
                                <div class="workout-card-left-section ">
                                    <div class="workout-card-inner-img pr-2">
                                        <img src="{{asset('public/assets/images/sessioneight.jpg')}}" alt="">
                                    </div>
                                    <div class="workout-card-left-inner-section">
                                        <p>Dayut Calort</p>
                                        <p>Yoga</p>
                                    </div>
                                </div>
                                <div class="workout-card-right-inner-section ">
                                    <p>12Pm-2Pm</p>
                                    <p class="">Nov-02-2022</p>
                                </div>
                            </div>
                        </a>





                    </div>


                </div>



            </div>
        </div>
    </div>
</div>
@endsection
@section('insertsfooter')
<script src="{{ asset('public/assets/AS/js/mobiscroll.jquery.min.js') }}"></script>

<script>
    mobiscroll.setOptions({
        locale: mobiscroll.localeEn, // Specify language like: locale: mobiscroll.localePl or omit setting to use default
        theme: 'ios', // Specify theme like: theme: 'ios' or omit setting to use default
        themeVariant: 'light' // More info about themeVariant: https://docs.mobiscroll.com/5-21-1/calendar#opt-themeVariant
    });

    $(function() {
        var myCalendar = $('#demo').mobiscroll().datepicker({
            controls: ['calendar'], // More info about controls: https://docs.mobiscroll.com/5-21-1/calendar#opt-controls
            display: 'inline', // Specify display mode like: display: 'bottom' or omit setting to use default
            calendarType: 'month',
            // calendarSize: 1,
            renderCalendarHeader: function() {
                return '<div mbsc-calendar-prev></div>' +
                    '<div mbsc-calendar-nav class="custom-view-nav"></div><div class="custom-view">' +
                    '<div mbsc-calendar-next></div>' +
                    '<label><input  mbsc-segmented type="radio" name="view" value="week" class="view-change" >Week</label>' +
                    '<label><input  mbsc-segmented typce="radio" name="view" value="month" class="view-change months" checked>Month</label></div>' +
                    '<label><input  mbsc-segmented typce="radio" name="view" value="year" class="view-change years">Year</label></div>';

            }
        }).mobiscroll('getInst');
        $(document).on('click', '.view-change', function(ev) {
            // $('.view-change').change(function (ev) {
            switch (ev.target.value) {
                case 'week':
                    myCalendar.setOptions({
                        calendarType: 'week'
                    });
                    break;
                case 'month':
                    myCalendar.setOptions({
                        calendarType: 'month'
                    });
                    break;
                case 'year':
                    myCalendar.setOptions({
                        calendarType: 'year'
                    });
                    break;
            }
        });
    });
</script>
<script>
    $('.sidenav .nav-item:nth-of-type(2)').addClass('active')
</script>
@endsection