<style>

</style>
<nav class="navbar navbar-z navbar-expand-lg navbar-dark  navbar-header px-4 px-lg-0">
    <a class="navbar-brand logo-header pl-lg-3" data-aos="fade-right" href="{{url('dashboard')}}">
        <img src="{{asset('public/assets/images/d-logo.svg')}}" alt="image">
    </a>
    <button class="navbar-toggler navbar-toggler-btn" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span><i class="fa fa-bars" aria-hidden="true"></i></span>
    </button>

    <div class="collapse navbar-collapse nav-main pl-0" id="navbarCollapse">
        <ul class="navbar-nav mr-auto sidenav pt-lg-5" id="navAccordion" data-aos="fade-up">

            <li class="nav-item">
                <a href="{{url('dashboard')}}" class=" nav-link sidenav-item ">
                    <div class="nav-link-image-outer mr-1">
                        <img class="nav-y" src="{{asset('public/assets/images/explore-g.svg')}}" alt="image">
                        <img class="nav-w" src="{{asset('public/assets/images/explore-w.svg')}}" alt="image">
                    </div>

                    Explore
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{url('userdashboard')}}" class=" nav-link sidenav-item ">
                    <div class="nav-link-image-outer mr-1">
                        <img class="nav-y" src="{{asset('public/assets/images/dashboard-g.svg')}}" alt="image">
                        <img class="nav-w" src="{{asset('public/assets/images/dashboard-w.svg')}}" alt="image">
                    </div>

                    Dashboard
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{url('/dashboard/mapgroup')}}" class=" nav-link sidenav-item ">
                    <div class="nav-link-image-outer mr-1">
                        <img class="nav-y" src="{{asset('public/assets/images/search-g.svg')}}" alt="image">
                        <img class="nav-w" src="{{asset('public/assets/images/search-w.svg')}}" alt="image">
                    </div>

                    Search
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('/userdashboard/session')}}" class=" nav-link sidenav-item ">
                    <div class="nav-link-image-outer mr-1">
                        <img class="nav-y" src="{{asset('public/assets/images/session-g.svg')}}" alt="image">
                        <img class="nav-w" src="{{asset('public/assets/images/session-w.svg')}}" alt="image">
                    </div>

                    Your Session
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('/chat')}}" class=" nav-link sidenav-item ">
                    <div class="nav-link-image-outer mr-1">
                        <img class="nav-y" src="{{asset('public/assets/images/message-g.svg')}}" alt="image">
                        <img class="nav-w" src="{{asset('public/assets/images/message-w.svg')}}" alt="image">
                    </div>

                    Messages
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('/payment')}}" class=" nav-link sidenav-item ">
                    <div class="nav-link-image-outer mr-1">
                        <img class="nav-y" src="{{asset('public/assets/images/payment-g.svg')}}" alt="image">
                        <img class="nav-w" src="{{asset('public/assets/images/payment-w.svg')}}" alt="image">
                    </div>

                    Setting
                </a>
            </li>





        </ul>
        <div class="nav-profile-name pl-lg-3">
            <h1>Welcome, John Smith </h1>
            <p>Wed, 23 Nov 2022</p>
        </div>
        <div class="m-lg-auto left-inner-addon user-search-box">
            <input class="form-control" type="search" placeholder="Search">
            <i class="fa fa-search" aria-hidden="true"></i>
        </div>
        <ul class="navbar-nav ml-auto py-2">
            <li class="nav-item my-2 my-lg-0 mr-lg-4 chat-link">
                <a class="nav-link px-2" href="{{(url('chat'))}}"> <img src="{{asset('public/assets/images/chat-icon-w.svg')}}" alt="image"></a>
            </li>
            <li class="nav-item mr-lg-4 my-2 my-lg-0">
                <div class="dropdown chat-link">
                    <a class="nav-link   dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" href="#"> <img src="{{asset('public/assets/images/notification-icon-w.svg')}}" alt="image"></a>
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
            <li class="nav-item mr-lg-4 my-2 my-lg-0">
                <div class="dropdown dropdown-logout">
                    <button class="p-0 btn  dropdown-toggle log-link" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{asset('public/assets/images/rating-right.png')}}" alt="image">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-menu logout-dropdown" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{(url('/payments'))}}">Payment</a>
                        <a class="dropdown-item" href="#">Logout</a>

                    </div>
                </div>
            </li>

        </ul>


    </div>
</nav>