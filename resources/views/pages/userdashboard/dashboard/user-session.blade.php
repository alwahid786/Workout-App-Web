@extends('layouts.userdashboard.default')
@section('content')
<style>
    .session-card-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .session-profile-left {
        display: flex;
        align-items: center;
    }

    .session-profile-left img {
        height: 40px;
        width: 40px;
        border-radius: 50%;
        border: 1px solid #E37048;
        object-fit: cover;
    }

    .session-profile-left p {
        color: #E37048;
        font-size: 1.1rem;
        font-weight: 500;
        letter-spacing: 0.04rem;
        margin-bottom: 0;
    }

    .session-anchor-right a {
        background: #fff;
        padding: 6px 30px;
        border-radius: 30px;
        text-decoration: none;
        color: #E37048;
        border: 1px solid #E37048;
        outline: none;
        text-shadow: none;
    }

    .session-anchor-right a:hover {
        text-decoration: none;
        background: #E37048;
        color: #fff;
        border: 1px solid #E37048;
    }
</style>
@include('includes.userdashboard.navbar')

<div class="content-wrapper">
    <div class="container-fluid mb-4">
        <div class="dashboard-header-left my-4 pt-2">
            <h1>My Sessions</h1>
        </div>
        <div class="row ">
            @foreach($booksession_detail as $bookedsession)
            <div class="col-lg-6 my-2">
                <div class="class-left-banner px-2 py-3">
                    <img class="class-banner-img" src="{{asset('public/assets/images/sessiontwo.jpg')}}" alt="">
                    <div class="class-banner-content pt-3">
                        <h1>{{$bookedsession['session']['class']['category']['title']}}</h1>
                        <div class="class-banner-content-right">
                            <h1>${{$bookedsession['session']['price']}}</h1>
                            <div class="class-banner-content-right-time">
                                <img class="pr-2" src="{{asset('public/assets/images/clock.svg')}}" alt="">
                                <?php

                                $a = new DateTime(($bookedsession['session']['start_time']));
                                $b = new DateTime($bookedsession['session']['end_time']);
                                $interval = $a->diff($b);

                                $hour = $interval->format("%H:%I");

                                ?>
                                <p>{{$hour}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="session-card-content">
                        <div class="session-profile-left py-2">
                            <img src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                            <p class="pl-3">{{$bookedsession['session']['class']['trainer']['name']}} </p>
                        </div>
                        <div class="session-anchor-right">
                            <a href="{{url('/userdashboard/sessionone/'.$bookedsession['id'])}}">View</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- <div class="col-lg-6 my-2 ">
                <div class="class-left-banner px-2 py-3">
                    <img class="class-banner-img" src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
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
                    <div class="session-card-content">
                        <div class="session-profile-left py-2">
                            <img src="{{asset('public/assets/images/sessiontwo.jpg')}}" alt="">
                            <p class="pl-3">John Smith</p>
                        </div>
                        <div class="session-anchor-right">
                            <a href="{{url('/userdashboard/sessiongroup')}}">View</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 my-2">
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
                    <div class="session-card-content">
                        <div class="session-profile-left py-2">
                            <img src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                            <p class="pl-3">John Smith </p>
                        </div>
                        <div class="session-anchor-right">
                            <a href="{{url('/userdashboard/sessionone')}}">View</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 my-2 ">
                <div class="class-left-banner px-2 py-3">
                    <img class="class-banner-img" src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
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
                    <div class="session-card-content">
                        <div class="session-profile-left py-2">
                            <img src="{{asset('public/assets/images/sessiontwo.jpg')}}" alt="">
                            <p class="pl-3">John Smith</p>
                        </div>
                        <div class="session-anchor-right">
                            <a href="{{url('/userdashboard/sessiongroup')}}">View</a>
                        </div>
                    </div>
                </div>
            </div> -->


        </div>
    </div>
</div>


@endsection
@section('insertsfooter')
<script>
    $('.sidenav .nav-item:nth-of-type(4)').addClass('active')
</script>
@endsection