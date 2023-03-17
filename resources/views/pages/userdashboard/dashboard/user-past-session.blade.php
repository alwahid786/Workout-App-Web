@extends('layouts.userdashboard.default')
@section('content')
<style>
    .past-session-wrapper {
        background-color: white;
        border-radius: 10px;
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

    /* table */
    .table-heading {
        width: 20%;
        font-size: 1rem;
        font-weight: 500;
        color: #E37048;
    }

    .past-session-table-header {
        background: #FFDCD0;
        height: 40px;
        display: flex;
        align-items: center;
    }

    @media only screen and (max-width: 768px) {
        .past-session-table-header {
            display: none !important;
        }
    }

    .past-session-table-body {
        background: white;
        display: flex;
        align-items: center;
        border-bottom: 1px solid #F5F5F5;
    }

    .table-cotent {
        width: 20%;
    }

    .table-content-heading {
        display: none;
    }

    .table-content-heading h1 {
        font-size: 1rem;
        margin-bottom: 0px;
    }



    .table-content-value h1 {
        font-size: 1rem;
        margin-bottom: 0px;
        color: #9999A3;
        font-weight: normal;
    }



    .table-content-value-profile {
        display: flex;
        align-items: center;
    }

    .table-content-value-profile img {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        object-fit: cover;
    }

    .table-content-value-profile-content h1 {
        color: #E37048;
        font-size: 1rem;
        font-weight: 500;
        margin-bottom: 0px;
    }

    .table-content-value-profile-content p {
        margin-bottom: 0px;
        font-size: 0.8rem;
        color: #9999A3;
    }

    @media only screen and (max-width: 767px) {

        .past-session-table-body {
            flex-direction: column;
            /* border-radius: 15px;
            box-shadow: 0 10px 10px -5px; */
        }

        .table-content-heading {
            display: block;
            width: 50%;
        }

        .table-content-value {
            width: 50%;
        }

        .table-cotent {
            display: flex;
            justify-content: space-around;
            width: 100%;
        }
    }


    @media only screen and (max-width:396px) {

        .table-content-value h1,
        .table-content-heading h1 {
            font-size: 0.8rem !important;
        }
    }


    @media screen and (max-width:576px) {
        .past-session-header h1 {
            color: #E37048;
            font-size: 1.3rem;
            margin-bottom: 0px;
        }

        .table-content-value-profile img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            object-fit: cover;
        }
    }
</style>

@include('includes.userdashboard.navbar')
<div class="content-wrapper">
    <div class="container-fluid mb-4 py-4">
        <div class="past-session-wrapper  py-3">
            <div class="past-session-header px-2 py-2">
                 <!-- <h1 class="pr-sm-3"> <img class="pr-1 pr-sm-2 pb-1" src="{{asset('public/assets/images/left-arrow.svg')}}" alt="">Dashboard<img class="pl-1 pl-sm-2 pb-1" src="{{asset('public/assets/images/right-arrow.svg')}}" alt=""></h1> -->
                <h1>Past Sessions</h1>
            </div>
            <!-- table -->
            <div class="past-session-table mt-3">
                <div class="past-session-table-header d-flex justify-content-around px-3">
                    <div class="table-heading">Trainer Name</div>
                    <div class="table-heading text-center">Workout</div>
                    <div class="table-heading text-center">Time</div>
                    <div class="table-heading text-center">Date</div>
                    <div class="table-heading text-center">View</div>
                </div>

                @foreach($pastsession as $past_session)
                <div class="past-session-table-body d-flex justify-content-around px-3 my-4 my-md-0 py-4">
                    <div class="table-cotent">
                        <div class="table-content-heading">
                            <h1>Trainer Name</h1>
                        </div>
                        <div class="table-content-value">
                            <div class="table-content-value-profile">
                                <img class="mr-1" src="{{asset('public/assets/images/sessiontwo.jpg')}}" alt="">
                                <div class="table-content-value-profile-content">
                                    <h1>{{$past_session['session']['class']['trainer']['name']}} </h1>
                                    <p>{{$past_session['session']['class']['trainer']['country']}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-cotent">
                        <div class="table-content-heading">
                            <h1>Workout</h1>
                        </div>
                        <div class="table-content-value text-md-center">
                            <h1>{{$past_session['session']['class']['category']['title']}}</h1>
                        </div>

                    </div>

                    <div class="table-cotent">
                        <div class="table-content-heading">
                            <h1>Time</h1>
                        </div>
                        <div class="table-content-value text-md-center">
                            <h1>{{$past_session['session']['start_time']}}-{{$past_session['session']['end_time']}}</h1>
                        </div>
                    </div>

                    <div class="table-cotent">
                        <div class="table-content-heading">
                            <h1>{{$past_session['session-date']}}</h1>
                        </div>
                        <div class="table-content-value text-md-center">
                            <h1>{{$past_session['session-date']}}</h1>
                        </div>

                    </div>

                    <div class="table-cotent">
                        <div class="table-content-heading">
                            <h1>View</h1>
                        </div>
                        <div class="table-content-value text-md-center">
                            <a href="{{url('/userdashboard/sessionone/'.$past_session['session']['id'])}}">
                                <img class="" src="{{asset('public/assets/images/view-icon.svg')}}" alt="">
                            </a>

                        </div>
                    </div>


                </div>
                @endforeach



            </div>
        </div>
    </div>
</div>


@endsection
@section('insertsfooter')
<script>
    $('.sidenav .nav-item:nth-of-type(4)').addClass('active')
</script>
@endsection