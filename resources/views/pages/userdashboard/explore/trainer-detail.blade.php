@extends('layouts.userdashboard.default')
@section('content')
<style>
    .sessions-left-section {
        background: #fff;
        border-radius: 10px;
        height: 90vh;
        overflow-y: scroll;
    }

    .sessions-left-section::-webkit-scrollbar-thumb {
        background: #E37048;
        border-radius: 0px;
        height: 0px;
        width: 0px;
    }

    .sessions-left-section::-webkit-scrollbar {
        width: 0px;
        height: 0px;
        width: 0px;
    }


    .sessions-left-section::-webkit-scrollbar-track {
        box-shadow: inset 0 0 0px grey;
        border-radius: 0px;
        height: 0px;
        width: 0px;
    }


    .sessions-left-section::-webkit-scrollbar-thumb {
        background: #E37048;
        border-radius: 0px;
        height: 0px;
        width: 0px;
    }

    .session-profile-image img {
        height: 180px;
        width: 180px;
        border-radius: 50%;
        object-fit: cover;
    }

    .sessions-profile-con p {
        color: #828282;

    }

    .sessions-profile-con p i {
        color: #E37048;

    }

    .rating-stars .fa-star:before {
        color: gold;
        font-size: 1.4rem;
    }

    .session-left-divider {
        border: 1px solid #E0E0E0;
    }

    .session-bottom-header h1 {
        color: #E37048;
        font-size: 1.5rem;
        font-weight: 500;
    }

    .session-bottom-par p {
        font-weight: 400;
        font-size: 1rem;
        line-height: 27px;
        letter-spacing: 0.02em;

        color: #828282;
    }

    .card-grid-section {
        display: grid !important;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)) !important;
        grid-gap: 20px !important;
        height: 90vh;
        overflow-y: scroll;
    }

    .card-grid-section::-webkit-scrollbar-thumb {
        background: #E37048;
        border-radius: 5px;
        height: 5px;
        width: 5px;
    }

    .card-grid-section::-webkit-scrollbar {
        width: 5px;
        height: 5px;
        width: 5px;
    }


    .card-grid-section::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 5px;
        height: 5px;
        width: 5px;
    }


    .card-grid-section::-webkit-scrollbar-thumb {
        background: #E37048;
        border-radius: 5px;
        height: 5px;
        width: 5px;
    }

    @media screen and (max-width:991px) {
        .sessions-left-section {
            background: #fff;
            border-radius: 10px;
            height: 90vh;
            overflow-y: hidden;
            height: 100%;
        }
    }

    @media screen and (max-width:576px) {
        .card-grid-section {
            display: grid !important;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)) !important;
            grid-gap: 20px !important;
        }
    }

    .session-card .card-img img {
        object-fit: cover;
        height: 230px;
    }

    .card-heading,
    .card-content,
    .card-bottom-section {
        display: flex;
        justify-content: space-between;
    }

    .card-heading h1 {
        color: #E37048;
        font-size: 1.4rem;
        white-space: nowrap;
        width: 50%;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .card-heading a {
        background: white;
        color: #E37048;
        border: 1px solid #E37048;
        text-decoration: none;
        padding: 8px 20px;
        border-radius: 30px;
        font-size: 0.9rem;
    }

    .card-heading a:hover {
        background: #E37048;
        color: #fff;
        border: 1px solid #E37048;
        text-decoration: none;
    }

    .card-content p {
        color: #4B4B4B;
        font-size: 1rem;
        font-weight: 500;
    }

    .card-content p:nth-of-type(1) {
        white-space: nowrap;
        width: 50%;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .card-bottom-section p:first-child {
        color: #4B4B4B;
        font-weight: 800;
        font-size: 1.1rem
    }

    .card-bottom-section p:last-child {
        color: #4B4B4B;
        font-size: 1.1rem
    }

    .card-bottom-section p img {
        height: 30px;
        width: 30px;
    }
</style>
@include('includes.userdashboard.navbar')
<div class="content-wrapper">
    <div class="container-fluid mb-4">
        <div class="row">
            <div class="col-lg-4 col-xl-3">
                <div class="sessions-left-section py-5 px-2">
                    <div class="session-profile-image text-center">
                        <img src="{{asset('public/assets/images/detail-trainer.jpg')}}" alt="">
                    </div>
                    <div class="sessions-profile-con text-center">
                        <div class="dashboard-header-left pt-3">
                            <h1>{{$trainer_detail[0]['name']}}</h1>
                        </div>
                        <p><i class="fa fa-map-marker pr-2" aria-hidden="true"></i>{{$trainer_detail[0]['workout_location']}},{{$trainer_detail[0]['state']}}, {{$trainer_detail[0]['country']}}</p>
                        <div class="rating-stars pb-5">
                            <i class="fa fa-star " aria-hidden="true"></i>
                            <i class="fa fa-star " aria-hidden="true"></i>
                            <i class="fa fa-star " aria-hidden="true"></i>
                            <i class="fa fa-star " aria-hidden="true"></i>
                            <i class="fa fa-star " aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="session-left-divider"></div>
                    <div class="session-left-bottom px-2">
                        <div class="session-bottom-header pt-3">
                            <h1>About Trainer</h1>
                        </div>
                        <div class="session-bottom-par">
                            <p>{{$trainer_detail[0]['about']}}</p>
                            <!-- <p>Lorem ipsum is a placeholder text
                                commonly used to demonstrate the
                                visual form of a document or a type
                                face without relying on meaningful
                                content. Lorem ipsum may be used
                                as a placeholder before final copy
                                is available.</p> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xl-9">
                <div class="dashboard-header-left">
                    <h1><i class="fa fa-angle-left mr-2" aria-hidden="true"></i> {{$trainer_detail[0]['name']}}'s Sessions</h1>
                </div>
                <div class="card-grid-section">
                    @foreach($trainer_detail[0]['class'] as $trainerData )
                    <div class="session-card p-3">
                        <div class="card-img ">
                            <img src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                        </div>
                        <div class="card-heading py-3">
                            <h1>{{$trainerData['category']['title']}}</h1>
                            <a href="{{url('/dashboard/class-detail')}}">Book Now</a>
                        </div>

                        <div class="card-content">
                            <p>John Smith </p>
                            <p>{{$trainerData['session']['start_time']}}-{{$trainerData['session']['end_time']}}</p>
                        </div>
                        <div class="session-left-divider"></div>
                        <div class="card-bottom-section p-2">
                            <p>${{$trainerData['session']['price']}}</p>
                            <?php

                            $a = new DateTime(($trainerData['session']['start_time']));
                            $b = new DateTime($trainerData['session']['end_time']);
                            $interval = $a->diff($b);

                            $hour = $interval->format("%H:%I");

                            ?>
                            <p> <img src="{{asset('public/assets/images/clock.svg')}}" alt=""> {{$hour}} </p>
                        </div>
                    </div>
                    @endforeach
                    <!-- <div class="session-card p-3">
                        <div class="card-img ">
                            <img src="{{asset('public/assets/images/sessiontwo.jpg')}}" alt="">
                        </div>
                        <div class="card-heading py-3">
                            <h1>Stretching Outdoors</h1>
                            <a href="{{url('/dashboard/class-detail')}}">Book Now</a>
                        </div>
                        <div class="card-content">
                            <p>John Smith</p>
                            <p>9am-10am</p>
                        </div>
                        <div class="session-left-divider"></div>
                        <div class="card-bottom-section p-2">
                            <p>$25</p>
                            <p> <img src="{{asset('public/assets/images/clock.svg')}}" alt=""> 25min</p>
                        </div>
                    </div>
                    <div class="session-card p-3">
                        <div class="card-img ">
                            <img src="{{asset('public/assets/images/jogging.jpg')}}" alt="">
                        </div>
                        <div class="card-heading py-3">
                            <h1>Jogging in park</h1>
                            <a href="{{url('/dashboard/class-detail')}}">Book Now</a>
                        </div>
                        <div class="card-content">
                            <p>John Smith</p>
                            <p>9am-10am</p>
                        </div>
                        <div class="session-left-divider"></div>
                        <div class="card-bottom-section p-2">
                            <p>$25</p>
                            <p> <img src="{{asset('public/assets/images/clock.svg')}}" alt=""> 25min</p>
                        </div>
                    </div>
                    <div class="session-card p-3">
                        <div class="card-img ">
                            <img src="{{asset('public/assets/images/body-building.jpg')}}" alt="">
                        </div>
                        <div class="card-heading py-3">
                            <h1>Body Building</h1>
                            <a href="{{url('/dashboard/class-detail')}}">Book Now</a>
                        </div>
                        <div class="card-content">
                            <p>John Smith</p>
                            <p>9am-10am</p>
                        </div>
                        <div class="session-left-divider"></div>
                        <div class="card-bottom-section p-2">
                            <p>$25</p>
                            <p> <img src="{{asset('public/assets/images/clock.svg')}}" alt=""> 25min</p>
                        </div>
                    </div>
                    <div class="session-card p-3">
                        <div class="card-img ">
                            <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                        </div>
                        <div class="card-heading py-3">
                            <h1>Gymnastics</h1>
                            <a href="{{url('/dashboard/class-detail')}}">Book Now</a>
                        </div>
                        <div class="card-content">
                            <p>John Smith</p>
                            <p>9am-10am</p>
                        </div>
                        <div class="session-left-divider"></div>
                        <div class="card-bottom-section p-2">
                            <p>$25</p>
                            <p> <img src="{{asset('public/assets/images/clock.svg')}}" alt=""> 25min</p>
                        </div>
                    </div>
                    <div class="session-card p-3">
                        <div class="card-img ">
                            <img src="{{asset('public/assets/images/running.jpg')}}" alt="">
                        </div>
                        <div class="card-heading py-3">
                            <h1>Running</h1>
                            <a href="{{url('/dashboard/class-detail')}}">Book Now</a>
                        </div>
                        <div class="card-content">
                            <p>John Smith</p>
                            <p>9am-10am</p>
                        </div>
                        <div class="session-left-divider"></div>
                        <div class="card-bottom-section p-2">
                            <p>$25</p>
                            <p> <img src="{{asset('public/assets/images/clock.svg')}}" alt=""> 25min</p>
                        </div>
                    </div>
                    <div class="session-card p-3">
                        <div class="card-img ">
                            <img src="{{asset('public/assets/images/sessionseven.jpg')}}" alt="">
                        </div>
                        <div class="card-heading py-3">
                            <h1>Wait Gain</h1>
                            <a href="{{url('/dashboard/class-detail')}}">Book Now</a>
                        </div>
                        <div class="card-content">
                            <p>John Smith</p>
                            <p>9am-10am</p>
                        </div>
                        <div class="session-left-divider"></div>
                        <div class="card-bottom-section p-2">
                            <p>$25</p>
                            <p> <img src="{{asset('public/assets/images/clock.svg')}}" alt=""> 25min</p>
                        </div>
                    </div>
                    <div class="session-card p-3">
                        <div class="card-img ">
                            <img src="{{asset('public/assets/images/sessioneight.jpg')}}" alt="">
                        </div>
                        <div class="card-heading py-3">
                            <h1>Wait Lose</h1>
                            <a href="{{url('/dashboard/class-detail')}}">Book Now</a>
                        </div>
                        <div class="card-content">
                            <p>John Smith</p>
                            <p>9am-10am</p>
                        </div>
                        <div class="session-left-divider"></div>
                        <div class="card-bottom-section p-2">
                            <p>$25</p>
                            <p> <img src="{{asset('public/assets/images/clock.svg')}}" alt=""> 25min</p>
                        </div>
                    </div>
                    <div class="session-card p-3">
                        <div class="card-img ">
                            <img src="{{asset('public/assets/images/Nutritions.jpg')}}" alt="">
                        </div>
                        <div class="card-heading py-3">
                            <h1>Nutritions</h1>
                            <a href="{{url('/dashboard/class-detail')}}">Book Now</a>
                        </div>
                        <div class="card-content">
                            <p>John Smith</p>
                            <p>9am-10am</p>
                        </div>
                        <div class="session-left-divider"></div>
                        <div class="card-bottom-section p-2">
                            <p>$25</p>
                            <p> <img src="{{asset('public/assets/images/clock.svg')}}" alt=""> 25min</p>
                        </div>
                    </div>
                    <div class="session-card p-3">
                        <div class="card-img ">
                            <img src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                        </div>
                        <div class="card-heading py-3">
                            <h1>Yoga</h1>
                            <a href="{{url('/dashboard/class-detail')}}">Book Now</a>
                        </div>
                        <div class="card-content">
                            <p>John Smith </p>
                            <p>9am-10am</p>
                        </div>
                        <div class="session-left-divider"></div>
                        <div class="card-bottom-section p-2">
                            <p>$25</p>
                            <p> <img src="{{asset('public/assets/images/clock.svg')}}" alt=""> 25min</p>
                        </div>
                    </div>
                    <div class="session-card p-3">
                        <div class="card-img ">
                            <img src="{{asset('public/assets/images/sessiontwo.jpg')}}" alt="">
                        </div>
                        <div class="card-heading py-3">
                            <h1>Stretching Outdoors</h1>
                            <a href="{{url('/dashboard/class-detail')}}">Book Now</a>
                        </div>
                        <div class="card-content">
                            <p>John Smith</p>
                            <p>9am-10am</p>
                        </div>
                        <div class="session-left-divider"></div>
                        <div class="card-bottom-section p-2">
                            <p>$25</p>
                            <p> <img src="{{asset('public/assets/images/clock.svg')}}" alt=""> 25min</p>
                        </div>
                    </div>
                    <div class="session-card p-3">
                        <div class="card-img ">
                            <img src="{{asset('public/assets/images/jogging.jpg')}}" alt="">
                        </div>
                        <div class="card-heading py-3">
                            <h1>Jogging in park</h1>
                            <a href="{{url('/dashboard/class-detail')}}">Book Now</a>
                        </div>
                        <div class="card-content">
                            <p>John Smith</p>
                            <p>9am-10am</p>
                        </div>
                        <div class="session-left-divider"></div>
                        <div class="card-bottom-section p-2">
                            <p>$25</p>
                            <p> <img src="{{asset('public/assets/images/clock.svg')}}" alt=""> 25min</p>
                        </div>
                    </div>
                    <div class="session-card p-3">
                        <div class="card-img ">
                            <img src="{{asset('public/assets/images/body-building.jpg')}}" alt="">
                        </div>
                        <div class="card-heading py-3">
                            <h1>Body Building</h1>
                            <a href="{{url('/dashboard/class-detail')}}">Book Now</a>
                        </div>
                        <div class="card-content">
                            <p>John Smith</p>
                            <p>9am-10am</p>
                        </div>
                        <div class="session-left-divider"></div>
                        <div class="card-bottom-section p-2">
                            <p>$25</p>
                            <p> <img src="{{asset('public/assets/images/clock.svg')}}" alt=""> 25min</p>
                        </div>
                    </div>
                    <div class="session-card p-3">
                        <div class="card-img ">
                            <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                        </div>
                        <div class="card-heading py-3">
                            <h1>Gymnastics</h1>
                            <a href="{{url('/dashboard/class-detail')}}">Book Now</a>
                        </div>
                        <div class="card-content">
                            <p>John Smith</p>
                            <p>9am-10am</p>
                        </div>
                        <div class="session-left-divider"></div>
                        <div class="card-bottom-section p-2">
                            <p>$25</p>
                            <p> <img src="{{asset('public/assets/images/clock.svg')}}" alt=""> 25min</p>
                        </div>
                    </div>
                    <div class="session-card p-3">
                        <div class="card-img ">
                            <img src="{{asset('public/assets/images/running.jpg')}}" alt="">
                        </div>
                        <div class="card-heading py-3">
                            <h1>Running</h1>
                            <a href="{{url('/dashboard/class-detail')}}">Book Now</a>
                        </div>
                        <div class="card-content">
                            <p>John Smith</p>
                            <p>9am-10am</p>
                        </div>
                        <div class="session-left-divider"></div>
                        <div class="card-bottom-section p-2">
                            <p>$25</p>
                            <p> <img src="{{asset('public/assets/images/clock.svg')}}" alt=""> 25min</p>
                        </div>
                    </div>
                    <div class="session-card p-3">
                        <div class="card-img ">
                            <img src="{{asset('public/assets/images/sessionseven.jpg')}}" alt="">
                        </div>
                        <div class="card-heading py-3">
                            <h1>Wait Gain</h1>
                            <a href="{{url('/dashboard/class-detail')}}">Book Now</a>
                        </div>
                        <div class="card-content">
                            <p>John Smith</p>
                            <p>9am-10am</p>
                        </div>
                        <div class="session-left-divider"></div>
                        <div class="card-bottom-section p-2">
                            <p>$25</p>
                            <p> <img src="{{asset('public/assets/images/clock.svg')}}" alt=""> 25min</p>
                        </div>
                    </div>
                    <div class="session-card p-3">
                        <div class="card-img ">
                            <img src="{{asset('public/assets/images/sessioneight.jpg')}}" alt="">
                        </div>
                        <div class="card-heading py-3">
                            <h1>Wait Lose</h1>
                            <a href="{{url('/dashboard/class-detail')}}">Book Now</a>
                        </div>
                        <div class="card-content">
                            <p>John Smith</p>
                            <p>9am-10am</p>
                        </div>
                        <div class="session-left-divider"></div>
                        <div class="card-bottom-section p-2">
                            <p>$25</p>
                            <p> <img src="{{asset('public/assets/images/clock.svg')}}" alt=""> 25min</p>
                        </div>
                    </div>
                    <div class="session-card p-3">
                        <div class="card-img ">
                            <img src="{{asset('public/assets/images/Nutritions.jpg')}}" alt="">
                        </div>
                        <div class="card-heading py-3">
                            <h1>Nutritions</h1>
                            <a href="{{url('/dashboard/class-detail')}}">Book Now</a>
                        </div>
                        <div class="card-content">
                            <p>John Smith</p>
                            <p>9am-10am</p>
                        </div>
                        <div class="session-left-divider"></div>
                        <div class="card-bottom-section p-2">
                            <p>$25</p>
                            <p> <img src="{{asset('public/assets/images/clock.svg')}}" alt=""> 25min</p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('insertsfooter')
<script>
    $('.sidenav .nav-item:nth-of-type(1)').addClass('active')
</script>
@endsection