@extends('layouts.userdashboard.default')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.1/flexslider.css">
<link rel="stylesheet" href="{{asset('public/assets/css/nice-select.css')}}">
<link rel="stylesheet" href="{{asset('public/assets/css/upcomingsessionlist.css')}}">
@include('includes.userdashboard.navbar')

<div class="content-wrapper">
    <div class="container-fluid mb-4 ">
        <div class="past-session-header px-2 py-2 my-4">
            <!-- <h1 class="pr-sm-3"> <img class="pr-1 pr-sm-2 pb-1" src="{{asset('public/assets/images/left-arrow.svg')}}" alt="">Dashboard<img class="pl-1 pl-sm-2 pb-1" src="{{asset('public/assets/images/right-arrow.svg')}}" alt=""></h1> -->
            <h1>Today's Session</h1>
        </div>
        @foreach($currentsession as $current_session)
        <div class="content-wrapper-inner">
            <div class="row ">
                <div class="col-12 my-2">
                    <div class="class-left-banner left-banner px-2 py-3">
                        <img class="class-banner-img" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                        <div class="class-banner-content pt-3">
                            <h1>{{$current_session['session']['class']['category']['title']}}</h1>
                            <div class="class-banner-content-right">
                                <div class="class-banner-content-right-time">
                                    <p>{{$current_session['session-date']}} | {{$current_session['session']['start_time']}}-{{$current_session['session']['end_time']}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="session-card-content">
                            <p class="ml-auto my-2">{{$current_session['session']['price']}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="content-wrapper-inner p-3 my-3">
            <div class="dashboard-header-left my-4 pt-2">
                <h1>Upcoming Session</h1>
            </div>
            <div class="row ">
                @foreach($upcomingsession as $upcoming_session)
                <div class="col-lg-6 my-2">
                    <div class="class-left-banner px-2 py-3">
                        <img class="class-banner-img" src="{{asset('public/assets/images/sessiontwo.jpg')}}" alt="">
                        <div class="class-banner-content banner-content pt-3">
                            <h1>{{$upcoming_session['session']['class']['category']['title']}}</h1>
                            <div class="class-banner-content-right">
                                <h1>{{$upcoming_session['session']['price']}}</h1>
                                <div class="class-banner-content-right-time">
                                    <img class="pr-2" src="{{asset('public/assets/images/clock.svg')}}" alt="">
                                    <p>25min</p>
                                </div>
                            </div>
                        </div>
                        <div class="session-card-content">
                            <div class="session-profile-left py-2">
                                <img src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                <p class="pl-1 pl-sm-3">{{$upcoming_session['session']['class']['trainer']['name']}}</p>
                            </div>
                            <div class="session-anchor-right">
                                <a href="{{url('/userdashboard/sessionone')}}">View</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- <div class="col-lg-6 my-2 ">

                    <div class="class-left-banner px-2 py-3">
                        <img class="class-banner-img" src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                        <div class="class-banner-content banner-content pt-3">
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
                                <p class="pl-1 pl-sm-3">John Smith</p>
                            </div>
                            <div class="session-anchor-right">
                                <a href="{{url('/userdashboard/sessiongroup')}}">View</a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>

        <!-- <div class="content-wrapper-inner trainer-last-section-profile px-4 py-3 ">
            <div class="trainer-session-content">
                <div class="row">
                    <div class="col-md-3">
                        <div class="image-section">
                            <img src="{{asset('public/assets/images/sessionsix.jpg')}}" alt="">
                            <h1 class="mt-3">John Smith</h1>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="trainer-session-left">
                            <div class="profile-section px-md-4">
                                <div class="profile-detail-left pr-sm-2">
                                    <div class="trainer-info my-3">
                                        <i class="fa fa-user" aria-hidden="true"> Male , 5’11” , 78kgs</i>

                                    </div>
                                    <div class="trainer-info my-3">
                                        <i class="fa fa-clock-o" aria-hidden="true"> 9am - 10am</i>

                                    </div>
                                    <div class="trainer-info my-3">
                                        <i class="fa fa-book" aria-hidden="true"> Monday | 22 dec,2022</i>

                                    </div>
                                    <div class="trainer-info my-3">
                                        <i class="fa fa-child" aria-hidden="true"> Yoga</i>

                                    </div>
                                </div>
                                <div class="profile-detail-right pl-sm-5">
                                    <div class="trainer-info my-3">
                                        <i class="fa fa-birthday-cake" aria-hidden="true"> 22 Nov, 1996</i>

                                    </div>
                                    <div class="trainer-info my-3">
                                        <i class="fa fa-heartbeat" aria-hidden="true"> Pollen Allergy</i>

                                    </div>
                                    <div class="trainer-info my-3">
                                        <i class="fa fa-map-marker" aria-hidden="true"> Toronto, Canada</i>

                                    </div>
                                </div>
                            </div>

                            <div class="session-card-content session-profile-price">
                                <p class="ml-auto my-2">$100</p>
                            </div>
                        </div>
                        <div class="detail-profile-button px-md-4">

                            <a href="#" class="btn mr-sm-4 my-2">Message</a>
                            <a href="#" class="btn  my-2">Delete</a>
                        </div>
                    </div>
                </div>



            </div>
        </div> -->


    </div>
</div>



@endsection
@section('insertsfooter')



@endsection