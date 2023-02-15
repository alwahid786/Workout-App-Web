@extends('layouts.userdashboard.default')
@section('content')
<link rel="stylesheet" href="{{asset('public/assets/css/calendar.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/css/datepicker.css">
<!-- <link rel="stylesheet" href="./style.css"> -->
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
        align-items: center;
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

    .workout-session-card a:hover {
        text-decoration: none;
    }
</style>
@include('includes.userdashboard.navbar')
<div class="content-wrapper">
    <div class="container-fluid mb-4 py-3">
        <div class="row">
            <div class="col-12">
                <div class="workout-banner-card">
                    <div class="row">
                        <div class="col-md-7 my-auto">
                            <div class="workout-banner-content px-3 py-3 text-center text-md-left">
                                <h1 style="text-transform:capitalize;">Welcome {{auth()->user()->name}}</h1>
                                <p class="pt-3 pb-4">Welcome back! Your dashboard is the central hub for all your account activity. From here, you can manage your settings, view recent activity, and access all your important information. Let's get started!</p>
                                <a class="btn" href="{{url('/about')}}">Read More</a>
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
                            <a href="{{url('/userdashboard/upcomingsessionlist')}}">
                                <div class="work-session-card red-session-card py-4 px-1">
                                    @if($upcoming_session != null)

                                    <div class="work-session-card-left py-1 pl-3">
                                        <h1>Your Upcoming <span>Session</span> </h1>
                                        <p>{{$total_upcomingsession}}</p>
                                    </div>
                                    @else
                                    <div class="work-session-card-left py-1 pl-3">
                                        <h1>Your Upcoming <span>Sessions</span> </h1>
                                        <p>0</p>
                                    </div>
                                    @endif

                                    <div class="work-session-card-right">
                                        <img src="{{asset('public/assets/images/red-card-icon.svg')}}" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 my-2">
                            <a href="{{url('/userdashboard/pastsession')}}">

                                <div class="work-session-card blue-session-card py-4 px-1">
                                    @if($past_session != null)
                                    <div class="work-session-card-left py-1 pl-3">
                                        <h1>Your Past <span>Session</span> </h1>
                                        <p>{{$total_pastsession}}</p>
                                    </div>
                                    @else
                                    <div class="work-session-card-left py-1 pl-3">
                                        <h1>Your Past <span>Sessions</span> </h1>
                                        <p>0</p>
                                    </div>
                                    @endif
                                    <div class="work-session-card-right">
                                        <img src="{{asset('public/assets/images/blue-card-icon.svg')}}" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 my-2">
                            <a href="{{url('/dashboard/trainer')}}">
                                <div class="work-session-card yellow-session-card py-4 px-1 ">
                                    @if($total_trainer!=null)
                                    <div class="work-session-card-left py-1 pl-3">
                                        <h1>Your<span>Trainers</span> </h1>
                                        <p>{{$total_trainer}}</p>
                                    </div>
                                    @else
                                    <div class="work-session-card-left py-1 pl-3">
                                        <h1>Your<span>Trainer</span> </h1>
                                        <p>{{$total_trainer}}</p>
                                    </div>
                                    @endif
                                    <div class="work-session-card-right">
                                        <img src="{{asset('public/assets/images/yellow-card-icon.svg')}}" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="workout-today-section">
                    <div class="workout-today-header pt-2 pb-1">
                        <h1>Your Today’s Booked Session</h1>
                    </div>

                    <div class="workout-today-wrapper">
                        <!-- table -->
                        @if(!empty($current_session))
                        @foreach($current_session as $currentSession)
                        <a href="{{url('/userdashboard/sessionone/'.$currentSession['session_id'])}}">
                            <div class="workout-table-body d-flex justify-content-around pl-4 pr-3 my-4 my-md-3 py-4">
                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="workout-type">{{$currentSession['session']['class']['category']['title']}} Session</h1>
                                    </div>
                                </div>

                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="name"> <img src="{{asset('public/assets/images/name-icon.svg')}}" alt=""> {{$currentSession['session']['class']['trainer']['name']}} </h1>
                                    </div>
                                </div>

                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="date"> <img src="{{asset('public/assets/images/clock.svg')}}" alt="">{{date('d M, Y',strtotime($currentSession['session-date']))}} | <span> {{date('h',strtotime($currentSession['session']['start_time']))}} {{$currentSession['session']['start_meridiem']}}-{{date('h',strtotime($currentSession['session']['end_time']))}} {{$currentSession['session']['end_meridiem']}}</span> </h1>
                                    </div>
                                </div>

                               @if($currentSession['session']['type'] == 1)
                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <div class="trainer-class-time-card-right workout-table-img">
                                            <img class="trainer-class-time-card-right-one" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-two" src="{{asset('public/assets/images/sessiontwo.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-three" src="{{asset('public/assets/images/sessionthree.jpg')}}" alt="">

                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <div class="trainer-class-time-card-right workout-table-img">
                                            <img class="trainer-class-time-card-right-one" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class="workout-table-border workout-table-border-blue "></div>
                            </div>
                        </a>
                        @endforeach
                        @else
                        <div class="workout-table-body d-flex justify-content-around pl-4 pr-3 my-4 my-md-3 py-4">
                                <strong class="text-danger text-center">No Session Booked For Today. </strong>
                                <div class="workout-table-border workout-table-border-red"></div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="workout-upcoming-section">
                    <div class="workout-upcoming-header pt-2 pb-1">
                        <h1>Upcoming Sessions</h1>
                    </div>

                    <div class="workout-upcoming-wrapper pr-2">
                        <!-- table -->
                        @if(!empty($upcoming_session))
                        @foreach($upcoming_session as $upcomingSession)
                        <a href="{{url('/userdashboard/sessionone/'.$upcomingSession['session_id'])}}">
                            <div class="workout-table-body d-flex justify-content-around pl-4 pr-3 my-4 my-md-3 py-4">
                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="workout-type">{{$upcomingSession['session']['class']['category']['title']}} Session </h1>
                                    </div>
                                </div>

                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="name"> <img src="{{asset('public/assets/images/name-icon.svg')}}" alt=""> {{$upcomingSession['session']['class']['trainer']['name']}} </h1>
                                    </div>
                                </div>

                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="date"> <img src="{{asset('public/assets/images/clock.svg')}}" alt="">{{date('d M, Y',strtotime($upcomingSession['session-date']))}} | <span> {{date('h',strtotime($upcomingSession['session']['start_time']))}} {{$upcomingSession['session']['start_meridiem']}}-{{date('h',strtotime($upcomingSession['session']['end_time']))}} {{$upcomingSession['session']['end_meridiem']}}</span> </h1>
                                    </div>
                                </div>
                                @if($upcomingSession['session']['type'] == 1)
                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <div class="trainer-class-time-card-right workout-table-img">
                                            <img class="trainer-class-time-card-right-one" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-two" src="{{asset('public/assets/images/sessiontwo.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-three" src="{{asset('public/assets/images/sessionthree.jpg')}}" alt="">

                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <div class="trainer-class-time-card-right workout-table-img">
                                            <img class="trainer-class-time-card-right-one" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class="workout-table-border workout-table-border-blue "></div>
                            </div>
                        </a>
                        @endforeach
                        @else
                        <div class="workout-table-body d-flex justify-content-around pl-4 pr-3 my-4 my-md-3 py-4">
                                <strong class="text-danger text-center">There Is No Upcoming Session.</strong>
                                <div class="workout-table-border workout-table-border-red"></div>
                            </div>
                        @endif
                    </div>
                </div>


            </div>
        </div>
        <div class="row">
            <div class="col-xl-8 mt-4 mt-xl-0">
                {{-- <div class="workout-calendar p-3">
                    <!-- <div id="demo"></div> -->
                    <div class=" card-bg ">
                        <h2 class="mb-4 text-left cal-head">Calendar</h2>
                        <div class="card">
                            <div class="card-body p-0">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>

                    <!-- calendar modal -->
                    <div id="modal-view-event" class="modal modal-top fade calendar-modal">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <h4 class="modal-title"><span class="event-icon"></span><span class="event-title"></span>
                                    </h4>
                                    <div class="event-body"></div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="modal-view-event-add" class="modal modal-top fade calendar-modal">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <form id="add-event">
                                    <div class="modal-body">
                                        <h4>Add Event Detail</h4>
                                        <div class="form-group">
                                            <label>Event name</label>
                                            <input type="text" class="form-control" name="ename">
                                        </div>
                                        <div class="form-group">
                                            <label>Event Date</label>
                                            <input type='text' class="datetimepicker form-control" name="edate">
                                        </div>
                                        <div class="form-group">
                                            <label>Event Description</label>
                                            <textarea class="form-control" name="edesc"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Event Color</label>
                                            <select class="form-control" name="ecolor">
                                                <option value="fc-bg-default">fc-bg-default</option>
                                                <option value="fc-bg-blue">fc-bg-blue</option>
                                                <option value="fc-bg-lightgreen">fc-bg-lightgreen</option>
                                                <option value="fc-bg-pinkred">fc-bg-pinkred</option>
                                                <option value="fc-bg-deepskyblue">fc-bg-deepskyblue</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Event Icon</label>
                                            <select class="form-control" name="eicon">
                                                <option value="circle">circle</option>
                                                <option value="cog">cog</option>
                                                <option value="group">group</option>
                                                <option value="suitcase">suitcase</option>
                                                <option value="calendar">calendar</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="workout-today-section">
                    <div class="workout-today-header pt-2 pb-1">
                        <h1>Your Today’s Booked Session</h1>
                    </div>
                    <div class="workout-today-wrapper">
                        @if(count($current_session) > 0)
                        <!-- table -->
                        @foreach($current_session as $current)

                        <!-- <a href="{{url('/userdashboard/upcomingsessionone')}}"> -->
                        <a href="{{url('/userdashboard/sessionone/'.$current['id'])}}">
                            <div class="workout-table-body d-flex justify-content-around pl-4 pr-3 my-4 my-md-3 py-4">
                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="workout-type">{{$current['session']['class']['category']['title']}} Session </h1>
                                    </div>
                                </div>

                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="name"> <img src="{{asset('public/assets/images/name-icon.svg')}}" alt=""> {{$current['session']['class']['trainer']['name']}} </h1>
                                    </div>
                                </div>

                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="date"> <img src="{{asset('public/assets/images/clock.svg')}}" alt="">7 Dec, 2022 |<span>{{$current['session']['start_time']}}-{{$current['session']['end_time']}}</span> </h1>
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
                        @endforeach
                        @else
                        ..........................................................................................
                        @endif
                    </div>
                </div>
                <div class="workout-upcoming-section">
                    <div class="workout-upcoming-header pt-2 pb-1">
                        <h1>Upcoming Sessions</h1>
                    </div>
                    <div class="workout-upcoming-wrapper pr-2">
                        @if($upcoming_session != null)
                        @foreach($upcoming_session as $upcoming)
                        <!-- table -->
                        <!-- <a href="{{url('/userdashboard/upcomingsessiongroup')}}"> -->
                        <a href="{{url('/userdashboard/sessionone/'.$upcoming['id'])}}">

                            <div class="workout-table-body d-flex justify-content-around pl-4 pr-3 my-4 my-md-3 py-4">
                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="workout-type">{{$upcoming['session']['class']['category']['title']}} Session </h1>
                                    </div>
                                </div>

                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="name"> <img src="{{asset('public/assets/images/name-icon.svg')}}" alt=""> {{$upcoming['session']['class']['trainer']['name']}} </h1>
                                    </div>
                                </div>

                                <div class="table-cotent py-2 py-md-0">
                                    <div class="table-content-value text-center">
                                        <h1 class="date"> <img src="{{asset('public/assets/images/clock.svg')}}" alt="">7 Dec, 2022 |<span>{{$upcoming['session']['start_time']}}-{{$upcoming['session']['end_time']}}</span> </h1>
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
                        @endforeach
                        @else
                        ....................................................................................
                        @endif

                    </div>
                </div>
            </div>
            <div class="col-xl-4 mt-4 mt-xl-0">
                <div class="workout-right-session">
                    <h2 class="my-4">Past Session</h2>
                    <div class="col text-right workout-right-session-btn">
                        <a href="{{url('/userdashboard/pastsession')}}">View All</a>
                    </div>
                    <div class="workout-right-inner-session pr-2">
                        @if(!empty($past_session))
                        @foreach($past_session as $pastSession)
                        <a href="{{url('/userdashboard/sessionone/'.$pastSession['session_id'])}}">
                            <div class="workout-right-session-card  px-3 py-4 my-3">
                                <div class="workout-card-left-section ">
                                    <div class="workout-card-inner-img pr-2">
                                        <img src="{{$pastSession['session']['class']['trainer']['profile_img']}}" alt="">
                                    </div>
                                    <div class="workout-card-left-inner-section">
                                        <p>{{$pastSession['session']['class']['trainer']['name']}}</p>
                                        <p>{{$pastSession['session']['class']['category']['title']}}</p>
                                    </div>
                                </div>
                                <div class="workout-card-right-inner-section ">
                                    <p>{{date('h',strtotime($pastSession['session']['start_time']))}} {{$pastSession['session']['start_meridiem']}}-{{date('h',strtotime($pastSession['session']['end_time']))}} {{$pastSession['session']['end_meridiem']}}</p>
                                    <p class="">{{$pastSession['session-date']}}</p>
                                </div>
                            </div>
                        </a>
                        @endforeach
                        @else
                        <div class="workout-right-session-card  px-3 py-4 my-3">
                                <strong class="text-danger text-center">There Is No Past Session.</strong>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="fc-day-number">dd</div> -->
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
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/datepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/i18n/datepicker.en.js"></script>
<script>
    jQuery(document).ready(function() {
        $(".workout-right-session-card").on('mouseover', function(){
            $(this).addClass('workout-card-right-active')
        });
        $(".workout-right-session-card").on('mouseout', function(){
            $(this).removeClass('workout-card-right-active')
        });

        const dates = @json($sessionDates); 
        setTimeout(() => {
            const elementsToHighlight = document.querySelectorAll('fc-day-top'); 
            $(dates).each(function(i,e){
                a = $(`td.fc-day-top[data-date=${e}]`);
                a.css('background-color', '#ffa50054');
                a.css('border-radius', '10px');
                a.css('cursor', 'pointer');
            });
        }, 2000);


        jQuery('.datetimepicker').datepicker({
            timepicker: true,
            language: 'en',
            range: true,
            multipleDates: true,
            multipleDatesSeparator: " - "
        });
        // jQuery("#add-event").submit(function() {
        //     alert("Submitted");
        //     var values = {};
        //     $.each($('#add-event').serializeArray(), function(i, field) {
        //         values[field.name] = field.value;
        //     });
        //     console.log(
        //         values
        //     );
        // });
    });

    (function() {
        'use strict';
        // ------------------------------------------------------- //
        // Calendar
        // ------------------------------------------------------ //
        jQuery(function() {
            // page is ready
            jQuery('#calendar').fullCalendar({
                themeSystem: '',
                // emphasizes business hours
                businessHours: false,
                defaultView: 'month',
                // event dragging & resizing
                editable: true,
                // header
                header: {

                    left: 'prev',
                    center: 'title,,agendaWeek,month,agendaDay',
                    right: 'next'
                },
                
                eventRender: function(event, element) {
                    if (event.icon) {
                        element.find(".fc-title").prepend("<i class='fa fa-" + event.icon + "'></i>");
                    }
                },
                dayClick: function() {
                    // jQuery('#modal-view-event-add').modal();
                },
                eventClick: function(event, jsEvent, view) {
                    jQuery('.event-icon').html("<i class='fa fa-" + event.icon + "'></i>");
                    jQuery('.event-title').html(event.title);
                    jQuery('.event-body').html(event.description);
                    jQuery('.eventUrl').attr('href', event.url);
                    jQuery('#modal-view-event').modal();
                },
            })
        });

    })(jQuery);
</script>
<script>
    $('.sidenav .nav-item:nth-of-type(2)').addClass('active')
</script>
@endsection