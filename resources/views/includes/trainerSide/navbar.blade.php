<?php

use App\Models\Notification;

$notification = Notification::where(['reciever_id' => auth()->user()->id, 'is_read' => 0])->with('user')->get();
$notifications = json_decode($notification, true);

?>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;

    }

    .navbar-header {
        background: white;
        min-height: 80px;
    }

    .logo-header img {
        width: 200px;
    }


    .nav-link {
        color: white !important;
        font-size: 16px !important;
        letter-spacing: 0.5px !important;
    }

    .fixed-top {
        z-index: 1000 !important;
    }


    /* .content-wrapper {
    margin-top: 90px;
} */

    .sidenav .nav-item .nav-link {
        color: #BDBDBD !important;
        font-size: 0.9rem !important;
        font-weight: 500;
    }

    .navbar-toggler-btn {
        box-shadow: none !important;
        border: none !important;
        outline: none !important;
    }

    .fa-bars {
        color: #E37048 !important;
    }


    .sidenav-item {
        display: flex;
    }

    .nav-link-image-outer>img {
        width: 25px;
    }

    .nav-profile-name h1 {
        color: #3F3F3F;
        font-size: 1.3rem;
        margin-bottom: 2px;
    }

    .nav-profile-name p {
        color: #3F3F3F;
        font-size: 0.9rem;
        margin-bottom: 0px;
    }

    .navbar-expand-lg .sidenav {
        flex-direction: column;
        /* margin-top: 3rem; */
    }

    .notification-dropdown {
        left: -320px !important;
        border-radius: 10px;
        max-width: 400px;
    }

    .notification-profile img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }

    .notification-profile p span {
        color: #02553E;
        font-size: 16px;
        font-weight: 500;
        padding-right: 5px;
        color: #E37048 !important;
        letter-spacing: 0.03rem;
    }

    .notification-profile p {
        color: #A8A8A8;
        margin-bottom: 0px;
    }

    .notification-profile p:hover {
        text-decoration: none !important;
        border-bottom: none !important;

    }

    .notification-area:hover {
        text-decoration: none !important;
        border-bottom: none !important;

    }

    .notification-profile:hover {
        background-color: gainsboro !important;
    }

    .notification-profile {
        border-bottom: 1px solid gainsboro !important;
        padding: 20px;
    }

    .notification-area:last-of-type .notification-profile {
        border-bottom: none !important;
    }

    .dropdown-menu {
        left: -195px;
    }

    .icon-button {
        position: relative;
        cursor: pointer;
    }

    .icon-button__badge {
        position: absolute;
        top: 3px;
        right: 2px;
        width: 8px;
        height: 8px;
        background: #00FFB8;
        color: #ffffff;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
    }

    .dropdown-menu .fa-sign-out {
        color: #02553E;
    }

    .dropdown-menu .logout {
        font-size: 14px;
        color: #A8A8A8;
    }

    .logout-dropdown {
        left: -130px !important;
    }

    @media (max-width: 992px) {
        .notification-dropdown {
            left: 0px !important;
            border-radius: 10px;
            width: 400px;
        }
    }

    @media (max-width:576px) {
        .notification-dropdown {
            width: 270px;

        }

        .notification-profile p {
            font-size: 0.7rem;
        }

        .notification-profile p span {
            font-size: 0.8rem;
        }

        .notification-profile img {
            width: 40px;
            height: 40px;
        }
    }

    .log-link {
        background: transparent;
        border: none;
    }

    .log-link:hover,
    .log-link:focus,
    .log-link:active {
        background: transparent !important;
        border: none !important;
        outline: none !important;
        box-shadow: none !important;
    }

    .log-link img {
        width: 40px;
        height: 40px;
        object-fit: cover;
        border-radius: 8px;
    }

    .log-link i {
        color: #E37048;
        font-size: 1rem;
    }

    .chat-link>a {
        background-color: #E37048;
        border-radius: 8px;
        width: 40px;
        height: 40px;
        position: relative;
        border-bottom: none !important;
    }

    .chat-link>a img {
        width: 25px;
        height: 25px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%);
    }

    .chat-link>a {
        background: #E37048;
    }

    .dropdown-toggle::after {
        display: none;
    }

    .left-inner-addon {
        position: relative;
        border-radius: 30px;
        background: #F4F6FA;
        width: 40%;
    }

    .left-inner-addon input {
        padding-left: 35px !important;
        border-radius: 30px;
        background: #F4F6FA;
        height: 45px;
        box-shadow: none;
        border: none;
        outline: none;
    }

    .left-inner-addon input:active,
    .left-inner-addon input:focus {
        background: #F4F6FA;
        box-shadow: none;
        border: none;
        outline: none;
    }

    .user-search-box {
        display: none;
    }

    .left-inner-addon i {
        color: #E37048;
        position: absolute;
        top: 50%;
        left: 10px;
        transform: translateX(0%) translateY(-50%);
        pointer-events: none;
    }

    @media (min-width: 992px) {
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .sidenav {
            background: white;
            position: absolute;
            top: 0px;
            left: -3px;
            height: calc(100vh - 3.5rem);
            margin-top: 5rem;
            box-sizing: border-box;
            width: 220px;
            overflow-y: auto;
        }



        /* / width / */
        .sidenav::-webkit-scrollbar,
        .sidenav-outer::-webkit-scrollbar {
            width: 0px;
        }

        /* / Track / */
        .sidenav::-webkit-scrollbar-track {
            background: #1D3E75;
        }

        /* / Handle / */
        .sidenav::-webkit-scrollbar-thumb {
            background: #1D3E75;
        }

        /* / Handle on hover / */
        .sidenav::-webkit-scrollbar-thumb:hover {
            background: #1D3E75;
        }

        .sidenav .nav-item {
            margin-top: 5px;
            margin-bottom: 5px;
            width: 220px;
            position: relative;

        }

        .sidenav .nav-item.active {
            background: #FFA671;
            border-right: 15px solid #E37048;
        }

        .sidenav-item {
            display: flex;
            align-items: center;
            padding-left: 25px !important;
            padding: 1rem 0.5rem;
        }

        .sidenav .nav-item:hover {
            background: #FFA671;
            border-right: 15px solid #E37048;
        }

        .sidenav .nav-item.active .nav-y {
            display: none;
        }

        .sidenav .nav-item.active .nav-w {
            display: block;
        }

        .nav-w {
            display: none;
        }

        .sidenav .nav-item:hover .nav-y,
        .sidenav .nav-item:active .nav-y {
            display: none;
        }

        .sidenav .nav-item:hover .nav-w,
        .sidenav .nav-item:active .nav-w {
            display: block;
        }

        .sidenav .nav-item:hover .sidenav-item,
        .sidenav .nav-item.active .sidenav-item {
            display: flex !important;

        }

        .sidenav .nav-item:hover .nav-link,
        .sidenav .nav-item.active .nav-link {
            color: white !important;
        }

        .content-wrapper {
            margin-left: 220px;
            margin-top: 90px;
        }

    }

    @media (max-width: 991px) {
        .responsive-mobile-navbar {
            height: 100vh;
            overflow-y: scroll;
            align-items: flex-start;
        }

        .left-inner-addon {
            width: 100%;
        }

    }

    .logout-dropdown a {
        color: #BDBDBD;
    }

    .logout-dropdown a:first-of-type {
        border-bottom: 1px solid #DDDDDD;
    }

    .logout-dropdown a i {
        color: #BDBDBD !important;
        padding-right: 0.5rem;
    }

    .logout-dropdown a:hover {
        background-color: #E37048;
        color: white;
    }

    .logout-dropdown a:hover i {
        color: white !important;
    }

    .notification-btns button {
        border: none !important;
        box-shadow: none;
        outline: none !important;
        width: 80px;
        height: 30px;
        font-size: 0.8rem;
        border-radius: 7px;
        background-color: #E37048;
        color: white;
    }

    .notification-btns button:nth-of-type(2) {
        background-color: #ECECEC;
        color: #E37048;
    }
</style>
<nav class="navbar navbar-z navbar-expand-lg navbar-dark  navbar-header px-4 px-lg-0">
    <a class="navbar-brand logo-header pl-lg-3" data-aos="fade-right" href="">
        <img src="{{asset('public/assets/images/d-logo.svg')}}" alt="image">
    </a>
    <button class="navbar-toggler navbar-toggler-btn" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span><i class="fa fa-bars" aria-hidden="true"></i></span>
    </button>

    <div class="collapse navbar-collapse nav-main pl-0" id="navbarCollapse">
        <div class="nav-profile-name pl-lg-3 ">
            <h1>Welcome, {{auth()->user()->name}} </h1>
            <p>{{ now()->format('d-M-Y') }}</p>
        </div>
        <div class="m-lg-auto left-inner-addon user-search-box">
            <input class="form-control" type="search" placeholder="Search">
            <i class="fa fa-search" aria-hidden="true"></i>
        </div>
        <ul class="navbar-nav ml-auto py-2">
            <li class="nav-item my-2 my-lg-0 mr-lg-4 chat-link">
                <a class="nav-link px-2" href="{{(url('/chat'))}}"> <img src="{{asset('public/assets/images/chat-icon-w.svg')}}" alt="image"></a>
            </li>
            <li class="nav-item mr-lg-4 my-2 my-lg-0">
                <div class="dropdown chat-link">
                    <a class="nav-link   dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" href="#"> <img src="{{asset('public/assets/images/notification-icon-w.svg')}}" alt="image"></a>
                    <div class="dropdown-menu notification-dropdown" aria-labelledby="dropdownMenuButton">
                        @if($notifications!= null)
                        @foreach($notifications as $notification)

                        <a class=" notification-area" href="{{url('/trainer/request')}}">
                            <div class="notification-profile d-flex py-3">
                                <img src="{{$notification['user']['profile_img']}}">
                                <div>
                                    <p class="pl-3 pb-1"><span>{{$notification['user']['name']}}</span> {{$notification['noti_text']}}</p>
                                    <div class="notification-btns pl-3">
                                        <button>Accept</button>
                                        <button>Reject</button>
                                    </div>
                                </div>

                            </div>
                        </a>
                        @endforeach
                        @else
                        @endif
                        <!-- <a class=" notification-area" href="{{url('/trainer/request')}}">
                            <div class="notification-profile d-flex py-3">
                                <img src="{{asset('public/assets/images/rating-right.png')}}">
                                <div>
                                    <p class="pl-3 pb-1"><span>Dayut Carlotte</span> send you request for Nutrition sessions</p>
                                    <div class="notification-btns pl-3">
                                        <button>Accept</button>
                                        <button>Reject</button>
                                    </div>
                                </div>

                            </div>
                        </a>
                        <a class=" notification-area" href="{{url('/trainer/request')}}">
                            <div class="notification-profile d-flex py-3">
                                <img src="{{asset('public/assets/images/rating-right.png')}}">
                                <p class="pl-3"><span>Dayut Carlotte</span> your Nutritions session wil be on 12 Nov 2022 (2pm-4pm)</p>
                            </div>
                        </a>
                        <a class=" notification-area" href="{{url('/trainer/request')}}">
                            <div class="notification-profile d-flex py-3">
                                <img src="{{asset('public/assets/images/rating-right.png')}}">
                                <p class="pl-3"><span>Dayut Carlotte</span> your Nutritions session wil be on 12 Nov 2022 (2pm-4pm)</p>
                            </div>
                        </a> -->

                    </div>
                </div>

            </li>
            <li class="nav-item mr-lg-4 my-2 my-lg-0">
                <div class="dropdown dropdown-logout">
                    <button class="p-0 btn  dropdown-toggle log-link" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{asset('public/assets/images/rating-right.png')}}" alt="image">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-menu logout-dropdown py-0" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item text-center py-3" href="{{(url('/profile'))}}"><i class="fa fa-user" aria-hidden="true"></i>Update Profile</a>
                        <a class="dropdown-item text-center py-3" href="{{(url('/trainer/login'))}}"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>

                    </div>
                </div>
            </li>

        </ul>
        <ul class="navbar-nav mr-auto sidenav pt-lg-5" id="navAccordion" data-aos="fade-up">

            <li class="nav-item">
                <a href="{{url('/trainer/dashboard')}}" class=" nav-link sidenav-item ">
                    <div class="nav-link-image-outer mr-1">
                        <img class="nav-y" src="{{asset('public/assets/images/dashboard-g.svg')}}" alt="image">
                        <img class="nav-w" src="{{asset('public/assets/images/dashboard-w.svg')}}" alt="image">
                    </div>

                    Dashboard
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{url('trainer/calendar')}}" class=" nav-link sidenav-item ">
                    <div class="nav-link-image-outer mr-1">
                        <img class="nav-y" src="{{asset('public/assets/images/calendar-g.svg')}}" alt="image">
                        <img class="nav-w" src="{{asset('public/assets/images/calendar-w.svg')}}" alt="image">
                    </div>

                    Calendar
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{url('trainer/add-session')}}" class=" nav-link sidenav-item ">
                    <div class="nav-link-image-outer mr-1">
                        <img class="nav-y" src="{{asset('public/assets/images/calendar-g.svg')}}" alt="image">
                        <img class="nav-w" src="{{asset('public/assets/images/calendar-w.svg')}}" alt="image">
                    </div>

                    Add Session
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{url('/trainer/clientlist')}}" class=" nav-link sidenav-item ">
                    <div class="nav-link-image-outer mr-1">
                        <img class="nav-y" src="{{asset('public/assets/images/session-g.svg')}}" alt="image">
                        <img class="nav-w" src="{{asset('public/assets/images/session-w.svg')}}" alt="image">
                    </div>

                    List of Clients
                </a>
            </li>
            <!-- <li class="nav-item">
                <a href="{{url('/trainer/session')}}" class=" nav-link sidenav-item ">
                    <div class="nav-link-image-outer mr-1">
                        <img class="nav-y" src="{{asset('public/assets/trainerimages/session-g.svg')}}" alt="image">
                        <img class="nav-w" src="{{asset('public/assets/trainerimages/session-w.svg')}}" alt="image">
                    </div>

                    Sessions Schedule
                </a>
            </li> -->

            <li class="nav-item">
                <a href="{{url('/trainer/payment')}}" class=" nav-link sidenav-item ">
                    <div class="nav-link-image-outer mr-1">
                        <img class="nav-y" src="{{asset('public/assets/trainerimages/payment-g.png')}}" alt="image">
                        <img class="nav-w" src="{{asset('public/assets/trainerimages/payment-w.png')}}" alt="image">
                    </div>

                    Payment Details
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('/trainer/chat')}}" class=" nav-link sidenav-item ">
                    <div class="nav-link-image-outer mr-1">
                        <img class="nav-y" src="{{asset('public/assets/images/message-g.svg')}}" alt="image">
                        <img class="nav-w" src="{{asset('public/assets/images/message-w.svg')}}" alt="image">
                    </div>

                    Messages
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('/trainer/session')}}" class=" nav-link sidenav-item ">
                    <div class="nav-link-image-outer mr-1">
                        <img class="nav-y" src="{{asset('public/assets/images/session-g.svg')}}" alt="image">
                        <img class="nav-w" src="{{asset('public/assets/images/session-w.svg')}}" alt="image">
                    </div>

                    My Session
                </a>
            </li>

        </ul>

    </div>
</nav>

<!-- <script>
    $(document).ready(function() {

    });
</script> -->