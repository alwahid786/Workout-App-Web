@extends('layouts.trainerSide.default')
<!-- <link rel="stylesheet" href="{{asset('public/assets/trainercss/session.css')}}"> -->
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
        background-color: white;
        border-radius: 10px;
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

    .session-card .card-img img {
        object-fit: cover;
        height: 200px;
        width: 100%;
        border-radius: 10px;
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

    .session-left-divider {
        border: 1px solid #E0E0E0;
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

    .session-card {
        background: white;
        border-radius: 10px;
    }
</style>
@section('content')
@include('includes.trainerSide.navbar')
<div class="content-wrapper py-3">
    <div class="container-fluid ">
        <div class="col-12 px-0">

            <div class="col-12 client-list-heading pb-4">
                <h1>Sessions</h1>
            </div>
            <div class="client-list-row">
                <div class="session-card p-3">
                    <div class="card-img ">
                        <img src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                    </div>
                    <div class="card-heading py-3">
                        <h1>Yoga</h1>
                        <a href="" class="px-3 px-sm-5">View</a>
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
                        <a href="" class="px-3 px-sm-5">View</a>
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
                        <a href="" class="px-3 px-sm-5">View</a>
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
                        <a href="" class="px-3 px-sm-5">View</a>
                    </div>

                    <div class="session-left-divider"></div>
                    <div class="card-bottom-section p-2">
                        <p>$25</p>
                        <p> <img src="{{asset('public/assets/images/clock.svg')}}" alt=""> 25min</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
@section('insertsfooter')
<script>
    $('.sidenav .nav-item:nth-of-type(6)').addClass('active')
</script>
@endsection