<style>
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
        font-weight: bold;
        padding-right: 5px;
        color: #0B1C2D !important;
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
            width: 290px;
        }

        .notification-profile p {
            font-size: 0.8rem;
        }

        .notification-profile p span {
            font-size: 0.8rem;
        }

        .notification-profile img {
            width: 40px;
            height: 40px;
        }
    }

    .dropdown-toggle::after {
        display: none;
    }

    .log-link i {
        color: #E37048;
    }
</style>
<nav class="navbar navbar-bg navbar-expand-lg navbar-light">
    <div class="container-fluid px-sm-5" data-aos="fade-right">
        <a class="navbar-brand web-logo" href="#"> <img src="{{asset('public/assets/images/logo.svg')}}" alt="image"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-btn"><i class="fa fa-bars" aria-hidden="true"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto nav-list ">
                <li class="nav-item mr-lg-4">
                    <a class="nav-link px-2" href="{{url('dashboard')}}">Dashboard</a>
                </li>
                <li class="nav-item mr-lg-4 ">
                    <a class="nav-link px-2" href="#">List Of Trainer</a>
                </li>
                <li class="nav-item mr-lg-4 ">
                    <a class="nav-link px-2" href="#">About Us</a>
                </li>
                <li class="nav-item mr-lg-4 chat-link">
                    <a class="nav-link px-2" href="#"> <img src="{{asset('public/assets/images/chat-icon.svg')}}" alt="image"></a>
                </li>
                <li class="nav-item mr-lg-4 my-2 my-lg-0">
                    <div class="dropdown chat-link">
                        <a class="nav-link px-2 btn  dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" href="#"> <img src="{{asset('public/assets/images/notification-icon.svg')}}" alt="image"></a>
                        <!-- <span class="icon-button__badge"></span> -->
                        <div class="dropdown-menu notification-dropdown" aria-labelledby="dropdownMenuButton">

                            <a class=" notification-area" href="#">
                                <div class="notification-profile d-flex py-3">
                                    <img src="{{asset('public/assets/images/rating-right.png')}}">
                                    <p class="pl-3"><span>John Smith</span>wants to update his <br>access level from
                                        view to edit</p>
                                </div>
                            </a>
                            <a class=" notification-area" href="#">
                                <div class="notification-profile d-flex py-3">
                                    <img src="{{asset('public/assets/images/rating-right.png')}}">
                                    <p class="pl-3"><span>John Smith</span>wants to update his <br>access level from
                                        view to edit</p>
                                </div>
                            </a>
                            <a class=" notification-area" href="#">
                                <div class="notification-profile d-flex py-3">
                                    <img src="{{asset('public/assets/images/rating-right.png')}}">
                                    <p class="pl-3"><span>John Smith</span>wants to update his <br>access level from
                                        view to edit</p>

                                </div>
                            </a>
                            <a class=" notification-area" href="#">
                                <div class="notification-profile d-flex py-3">
                                    <img src="{{asset('public/assets/images/rating-right.png')}}">
                                    <p class="pl-3"><span>John Smith</span>wants to update his <br>access level from
                                        view to edit</p>
                                </div>
                            </a>
                        </div>
                    </div>

                </li>
                <li class="nav-item mr-lg-4 ">
                    <div class="dropdown dropdown-logout">
                        <button class="p-0 btn btn-secondary dropdown-toggle log-link" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @if(auth()->user()->profile_img == null)
                            <img src="{{asset('public/assets/images/rating-right.png')}}" alt="image">
                            @else
                            <img src="{{ auth()->user()->profile_img}}" alt="image">
                            @endif
                            <i class="fa fa-angle-down pl-3" aria-hidden="true"></i>
                        </button>
                        <div class="dropdown-menu logout-dropdown " aria-labelledby="dropdownMenuButton">
                            <a href="{{url('/profile')}}" class="dropdown-item">Update Profile</a>
                            <a class="dropdown-item" href="#">Logout</a>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </div>

</nav>