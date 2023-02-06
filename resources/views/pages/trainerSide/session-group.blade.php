@extends('layouts.trainerSide.default')
<!-- <link rel="stylesheet" href="{{asset('public/assets/trainercss/sessiongroup.css')}}"> -->
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

    .client-list-row {
        display: grid !important;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)) !important;
        grid-gap: 15px !important;
        align-items: stretch;
    }

    .client-list-card {
        background: #F8F8FA;
        border-radius: 10px;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.04);
        display: flex;
        align-items: center;
        position: relative;
    }

    .client-list-card-left img {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        object-fit: cover;
    }

    .client-list-card-right h1:first-of-type {
        font-size: 1.2rem;
        color: #E37048;
        padding-right: 25px;
    }

    .client-list-card-right h1 {
        font-size: 0.9rem;
    }

    .right-dots {
        position: absolute;
        right: 15px;
        top: 18px;
    }

    .c-dropdown {
        position: relative;
        display: inline-block;
    }

    .c-dropdown-content {
        display: none;
        position: absolute;
        min-width: 100px;
        z-index: 1;
        right: 0;
        overflow: hidden;
        top: 20px;
        background: #FFFFFF;
        border: 1px solid #E6E6E6;
        box-shadow: 2px 4px 3px rgba(0, 0, 0, 0.05);
        border-radius: 10px;
    }

    .c-dropdown-content a {
        width: 100%;
        text-decoration: none !important;
        box-shadow: none;
        font-size: 1rem;
        color: #BDBDBD;
        border: none;
        padding: 0.5rem 0rem;
    }

    .c-dropdown-content a:hover {
        background-color: #E37048;
        color: white;
    }

    .c-dropdown-content a:first-of-type {
        border-bottom: 1px solid #BDBDBD !important;
    }

    .c-dropdown .dots {
        cursor: pointer;
    }

    .c-dropdown .dots ul li {
        list-style: none;
        width: 4px;
        height: 4px;
        border-radius: 50%;
        background-color: #A09F9F;
        cursor: pointer;
    }

    .c-dropdown .dots ul li:nth-of-type(2) {
        margin: 3px 0px;
    }

    .right-dots:hover .c-dropdown-content {
        display: block;
    }

    .client-list-heading h1 {
        color: #E37048;
        margin-bottom: 0px;
        font-size: 1.3rem;
        font-weight: 500;
    }

    .client-list-heading a {
        text-decoration: none !important;
        background-color: #E37048;
        color: white !important;
        display: flex;
        box-shadow: none !important;
        align-items: center;
        justify-content: center;
        width: 120px;
        height: 40px;
        border-radius: 10px;
        margin-left: auto;
    }

    .client-list-heading h1 span {
        font-size: 1rem;
    }

    .client-wrapper {
        background: white;
        border-radius: 10px;
    }

    @media screen and (max-width:576px) {
        .session-card-top-content h1 {
            font-size: 1rem;
        }

        .client-list-row {
            display: grid !important;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)) !important;
            grid-gap: 10px !important;
            align-items: stretch;
        }

        .session-card-top .price h1 {
            font-size: 1rem;
        }

        .client-list-card-left img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            object-fit: cover;
        }

        .client-list-card-right h1:first-of-type {
            font-size: 1rem;
            color: #E37048;
            padding-right: 25px;
        }

        .client-list-card-right h1 {
            font-size: 0.7rem;
        }

        .client-list-card-right img {
            width: 12px;
        }

        .session-card-top img {
            width: 100%;
            height: 160px;
            object-fit: cover;
            object-position: 50% 70%;
            border-radius: 10px;
        }
    }
</style>
@section('content')
@include('includes.trainerSide.navbar')
<div class="content-wrapper py-3">
    <div class="container-fluid ">
        <div class="col-12 client-list-heading pb-2">
            <h1>Today’s Sessions <span>(Group Session)</span></h1>
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
                <div class="client-wrapper my-4 p-3">
                    <div class="row">
                        <div class="col-6 client-list-heading py-4 my-auto">
                            <h1>Clients</h1>
                        </div>
                        <div class="col-6 client-list-heading py-4 text-right my-auto">
                            <a href="btn">Group Chat</a>
                        </div>
                    </div>

                    <div class="client-list-row">
                        <div class="client-list-card p-3">
                            <div class="client-list-card-left pr-3">
                                <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                            </div>
                            <div class="client-list-card-right">

                                <h1>John Smith</h1>
                                <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c1.png')}}" alt="">Cardio</h1>
                                <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c2.png')}}" alt="">Tuesday, 4PM-5PM</h1>
                                <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c3.png')}}" alt="">Torronto</h1>
                            </div>
                            <div class="right-dots">
                                <div class="c-dropdown">
                                    <div class="dots px-3">
                                        <ul>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                    <div class="c-dropdown-content">
                                        <a class="btn"></i> Edit</a>
                                        <a class="btn">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="client-list-card p-3">
                            <div class="client-list-card-left pr-3">
                                <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                            </div>
                            <div class="client-list-card-right">

                                <h1>John Smith</h1>
                                <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c1.png')}}" alt="">Cardio</h1>
                                <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c2.png')}}" alt="">Tuesday, 4PM-5PM</h1>
                                <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c3.png')}}" alt="">Torronto</h1>
                            </div>
                            <div class="right-dots">
                                <div class="c-dropdown">
                                    <div class="dots px-3">
                                        <ul>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                    <div class="c-dropdown-content">
                                        <a class="btn"></i> Edit</a>
                                        <a class="btn">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="client-list-card p-3">
                            <div class="client-list-card-left pr-3">
                                <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                            </div>
                            <div class="client-list-card-right">

                                <h1>John Smith</h1>
                                <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c1.png')}}" alt="">Cardio</h1>
                                <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c2.png')}}" alt="">Tuesday, 4PM-5PM</h1>
                                <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c3.png')}}" alt="">Torronto</h1>
                            </div>
                            <div class="right-dots">
                                <div class="c-dropdown">
                                    <div class="dots px-3">
                                        <ul>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                    <div class="c-dropdown-content">
                                        <a class="btn"></i> Edit</a>
                                        <a class="btn">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="client-list-card p-3">
                            <div class="client-list-card-left pr-3">
                                <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                            </div>
                            <div class="client-list-card-right">

                                <h1>John Smith</h1>
                                <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c1.png')}}" alt="">Cardio</h1>
                                <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c2.png')}}" alt="">Tuesday, 4PM-5PM</h1>
                                <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c3.png')}}" alt="">Torronto</h1>
                            </div>
                            <div class="right-dots">
                                <div class="c-dropdown">
                                    <div class="dots px-3">
                                        <ul>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                    <div class="c-dropdown-content">
                                        <a class="btn"></i> Edit</a>
                                        <a class="btn">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="client-list-card p-3">
                            <div class="client-list-card-left pr-3">
                                <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                            </div>
                            <div class="client-list-card-right">

                                <h1>John Smith</h1>
                                <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c1.png')}}" alt="">Cardio</h1>
                                <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c2.png')}}" alt="">Tuesday, 4PM-5PM</h1>
                                <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c3.png')}}" alt="">Torronto</h1>
                            </div>
                            <div class="right-dots">
                                <div class="c-dropdown">
                                    <div class="dots px-3">
                                        <ul>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                    <div class="c-dropdown-content">
                                        <a class="btn"></i> Edit</a>
                                        <a class="btn">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="client-list-card p-3">
                            <div class="client-list-card-left pr-3">
                                <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                            </div>
                            <div class="client-list-card-right">

                                <h1>John Smith</h1>
                                <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c1.png')}}" alt="">Cardio</h1>
                                <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c2.png')}}" alt="">Tuesday, 4PM-5PM</h1>
                                <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c3.png')}}" alt="">Torronto</h1>
                            </div>
                            <div class="right-dots">
                                <div class="c-dropdown">
                                    <div class="dots px-3">
                                        <ul>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                    <div class="c-dropdown-content">
                                        <a class="btn"></i> Edit</a>
                                        <a class="btn">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="client-list-card p-3">
                            <div class="client-list-card-left pr-3">
                                <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                            </div>
                            <div class="client-list-card-right">

                                <h1>John Smith</h1>
                                <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c1.png')}}" alt="">Cardio</h1>
                                <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c2.png')}}" alt="">Tuesday, 4PM-5PM</h1>
                                <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c3.png')}}" alt="">Torronto</h1>
                            </div>
                            <div class="right-dots">
                                <div class="c-dropdown">
                                    <div class="dots px-3">
                                        <ul>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                    <div class="c-dropdown-content">
                                        <a class="btn"></i> Edit</a>
                                        <a class="btn">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="client-list-card p-3">
                            <div class="client-list-card-left pr-3">
                                <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                            </div>
                            <div class="client-list-card-right">

                                <h1>John Smith</h1>
                                <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c1.png')}}" alt="">Cardio</h1>
                                <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c2.png')}}" alt="">Tuesday, 4PM-5PM</h1>
                                <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c3.png')}}" alt="">Torronto</h1>
                            </div>
                            <div class="right-dots">
                                <div class="c-dropdown">
                                    <div class="dots px-3">
                                        <ul>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                    <div class="c-dropdown-content">
                                        <a class="btn"></i> Edit</a>
                                        <a class="btn">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="client-list-card p-3">
                            <div class="client-list-card-left pr-3">
                                <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                            </div>
                            <div class="client-list-card-right">

                                <h1>John Smith</h1>
                                <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c1.png')}}" alt="">Cardio</h1>
                                <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c2.png')}}" alt="">Tuesday, 4PM-5PM</h1>
                                <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c3.png')}}" alt="">Torronto</h1>
                            </div>
                            <div class="right-dots">
                                <div class="c-dropdown">
                                    <div class="dots px-3">
                                        <ul>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                    <div class="c-dropdown-content">
                                        <a class="btn"></i> Edit</a>
                                        <a class="btn">View</a>
                                    </div>
                                </div>
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
<script>
    $('.sidenav .nav-item:nth-of-type(4)').addClass('active')
</script>
@endsection