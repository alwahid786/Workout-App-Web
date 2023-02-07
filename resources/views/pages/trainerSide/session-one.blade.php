@extends('layouts.trainerSide.default')
<!-- <link rel="stylesheet" href="{{asset('public/assets/trainercss/sessionone.css')}}"> -->
<style>
    body {
        background-color: #F2F2F2 !important;
    }

    .session-card-top {
        background-color: white;
        border-radius: 10px;
    }

    .session-card-top img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        object-position: 50% 70%;
        border-radius: 10px;
    }

    .session-card-top-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
    }

    .session-card-top-content h1:first-of-type {
        color: #E37048;
        font-weight: 600;
    }

    .session-card-top-content h1 {
        font-size: 1.3rem;
        color: #464646;
        margin-bottom: 0px;
    }

    .session-card-top .price h1 {
        font-size: 1.3rem;
        color: #E37048;
        font-weight: 500;
        margin-bottom: 0px;
    }


    .client-list-heading h1 {
        color: #E37048;
        margin-bottom: 0px;
        font-size: 1.3rem;
        font-weight: 500;
    }

    .client-list-heading h1 span {
        font-size: 1rem;
    }

    .client-wrapper {
        background: white;
        border-radius: 10px;
    }

    .client-detail-wrapper {
        background: white;
        border-radius: 10px;
    }

    .client-detail-wrapper-body {
        display: flex;
        justify-content: space-between;

    }

    .client-detail-wrapper-left {
        display: flex;
        width: 100%;
        flex-wrap: wrap;
        max-width: 700px;
        justify-content: space-between;
    }


    .client-detail-wrapper-left .first-section {
        max-width: 220px;
    }

    .client-detail-wrapper-left .first-section img {
        /* max-width: 200px; */
        width: 100%;
        height: 200px;
        border-radius: 10px;
    }

    .client-detail-wrapper-left .first-section h1 {
        font-size: 1.8rem;
        font-weight: 500;
        color: #E37048;
        text-align: center;
    }

    .client-detail-wrapper-right h1 {
        font-size: 1.8rem;
        font-weight: 500;
        color: #E37048;

    }

    .second-section h1 {
        color: #666666;
        font-size: 1rem;
        position: relative;
        padding-left: 25px;
        font-weight: 400;
        margin-bottom: 0px;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
    }

    .second-section h1 img {
        width: 18px;
        position: absolute;
        top: 50%;
        left: 0;
        transform: translate(0%, -50%);
    }

    .client-list-heading h1 {
        color: #E37048;
        margin-bottom: 0px;
        font-size: 1.3rem;
        font-weight: 500;
    }

    .client-list-headings {
        padding-bottom: 1.5rem;
    }

    .client-detail-wrapper-right h1 {
        font-size: 1.5rem;
        font-weight: 500;
        color: #E37048;
    }

    .client-detail-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
    }

    .client-detail-btn a {
        text-decoration: none !important;
        background: white;
        border: 1px solid #E37048 !important;
        max-width: 220px;
        width: 100%;
        height: 50px;
        color: #E37048;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1rem;
        background: white;
        box-shadow: none !important;
        outline: none !important;
    }

    .client-detail-btn a:hover {
        background-color: #E37048;
        color: white;
    }

    @media screen and (min-width:768px) {
        .client-detail-wrapper-left .first-section {
            margin-top: -100px;
        }

        .client-list-headings h1 {
            padding-bottom: 9rem;
        }

    }

    @media screen and (max-width:576px) {
        .client-detail-wrapper-left {
            display: flex;
            width: 100%;
            flex-wrap: wrap;
            flex-direction: column;
            max-width: 700px;
            justify-content: space-between;
        }

        .client-detail-wrapper-left .first-section {
            max-width: 155px;
        }

        .client-detail-wrapper-left .first-section img {
            max-width: 155px;
            height: 170px;
        }

        /* .client-detail-wrapper-left .first-section {
            margin-top: -80px;
        } */

        .client-detail-wrapper-left .first-section h1 {
            font-size: 1.5rem;
            font-weight: 500;
            color: #E37048;
            text-align: center;
        }

        .session-card-top-content h1 {
            font-size: 1rem;
        }



        .session-card-top .price h1 {
            font-size: 1rem;
        }



        .session-card-top img {
            width: 100%;
            height: 160px;
            object-fit: cover;
            object-position: 50% 70%;
            border-radius: 10px;
        }

        .first-section {
            width: 200px;
            /* margin: 0 auto; */
        }
    }
</style>
@section('content')
@include('includes.trainerSide.navbar')
<div class="content-wrapper py-3">
    <div class="container-fluid ">
        <div class="col-12 client-list-heading pb-2">
            <h1>Today’s Sessions <span>(One to One)</span></h1>
        </div>
        <div class="col-12 my-4 px-0">
            <div class="session-card">
                <div class="session-card-top p-3">
                    <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                    <div class="session-card-top-content pt-4 pb-2">
                        <h1 class="py-2">Stretching outdoors</h1>
                        <h1 class="py-2">7 Dec, 2022 | 10 AM-11 AM</h1>
                    </div>
                    <div class="col-12 text-right price pr-0 py-2">
                        <h1>$100</h1>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-12 client-list-heading client-list-headings  my-auto ">
            <h1>Client’s Detail</h1>
        </div>
        <div class="client-detail-wrapper ">
            <div class="client-detail-wrapper-body px-4">
                <div class="client-detail-wrapper-left">
                    <div class="first-section pt-4 pt-md-0">
                        <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                        <h1 class="pt-3">John Smith</h1>
                    </div>
                    <div class="second-section pt-4">
                        <h1> <img src="{{asset('public/assets/trainerimages/d1.png')}}" alt=""> Male , 5’11” , 78kgs</h1>
                        <h1> <img src="{{asset('public/assets/trainerimages/d2.png')}}" alt="">9am - 10am</h1>
                        <h1> <img src="{{asset('public/assets/trainerimages/d3.png')}}" alt=""> Monday | 22 dec,2022</h1>
                        <h1> <img src="{{asset('public/assets/trainerimages/d4.png')}}" alt=""> Yoga</h1>
                    </div>
                    <div class="second-section pt-4">
                        <h1> <img src="{{asset('public/assets/trainerimages/d5.png')}}" alt="">22 Nov, 1996</h1>
                        <h1> <img src="{{asset('public/assets/trainerimages/d6.png')}}" alt="">Pollen Allergy</h1>
                        <h1> <img src="{{asset('public/assets/trainerimages/d7.png')}}" alt=""> Toronto, Canada</h1>

                    </div>
                </div>
                <div class="client-detail-wrapper-right pt-4">
                    <h1>$100</h1>
                </div>
            </div>
            <div class="client-detail-btn pt-5 pb-3">
                <a class="btn m-3" href="#">Message</a>
                <a class="btn m-3" href="#">Delete</a>
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