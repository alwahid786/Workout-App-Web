<style>
    .logout-dropdown a:hover {
        background-color: #E37048;
        color: white;
    }


    .setting-drop-sub {
        padding-left: 70px;
    }
</style>
<nav class="navbar navbar-z navbar-expand-lg navbar-dark  navbar-header px-4 px-lg-0">
    <a class="navbar-brand logo-header pl-lg-3" data-aos="fade-right" href="{{url('dashboard')}}">
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
                        @if(auth()->user()->profile_img==null)
                        <img src="{{asset('public/assets/images/rating-right.png')}}" alt="image">
                        @else
                        <img src="{{auth()->user()->profile_img}}" alt="image">

                        @endif
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-menu logout-dropdown" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item nav-setting">Setting <i class="fa fa-angle-down pl-3" aria-hidden="true"></i></a>
                        <a class="dropdown-item d-none setting-drop setting-drop-profile pl-5">Profile<i class="fa fa-angle-down pl-3" aria-hidden="true"></i></a>
                        <a class="dropdown-item d-none setting-drop-sub " href="{{(url('/profile'))}}">Update Profile</a>
                        <a class="dropdown-item d-none setting-drop pl-5" href="{{url('/payment')}}">List Of Payment</a>
                        <a class="dropdown-item d-none setting-drop pl-5" href="{{(url('/term'))}}">Terms & Condition</a>
                        <a class="dropdown-item d-none setting-drop pl-5" href="{{(url('/approach-l'))}}">Privacy Policy</a>
                        <a class="dropdown-item logout-btn" href="{{url('/home')}}">Logout</a>

                    </div>
                </div>
            </li>

        </ul>
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
                <a href="{{url('/dashboard/map')}}" class=" nav-link sidenav-item ">
                    <div class="nav-link-image-outer mr-1">
                        <img class="nav-y" src="{{asset('public/assets/images/search-g.svg')}}" alt="image">
                        <img class="nav-w" src="{{asset('public/assets/images/search-w.svg')}}" alt="image">
                    </div>

                    Search Session
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('/userdashboard/session')}}" class=" nav-link sidenav-item ">
                    <div class="nav-link-image-outer mr-1">
                        <img class="nav-y" src="{{asset('public/assets/images/session-g.svg')}}" alt="image">
                        <img class="nav-w" src="{{asset('public/assets/images/session-w.svg')}}" alt="image">
                    </div>

                    Workout Session
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('/dashboard/categories/1')}}" class=" nav-link sidenav-item ">
                    <div class="nav-link-image-outer mr-1">
                        <img class="nav-y" src="{{asset('public/assets/images/session-g.svg')}}" alt="image">
                        <img class="nav-w" src="{{asset('public/assets/images/session-w.svg')}}" alt="image">
                    </div>
                    Categories
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('/dashboard/trainer')}}" class=" nav-link sidenav-item ">
                    <div class="nav-link-image-outer mr-1">
                        <img class="nav-y" src="{{asset('public/assets/images/session-g.svg')}}" alt="image">
                        <img class="nav-w" src="{{asset('public/assets/images/session-w.svg')}}" alt="image">
                    </div>
                    My Trainers
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
            <!-- <li class="nav-item">
                <a href="{{url('/payment')}}" class=" nav-link sidenav-item ">
                    <div class="nav-link-image-outer mr-1">
                        <img class="nav-y" src="{{asset('public/assets/images/payment-g.svg')}}" alt="image">
                        <img class="nav-w" src="{{asset('public/assets/images/payment-w.svg')}}" alt="image">
                    </div>

                    Setting
                </a>
            </li> -->





        </ul>



    </div>
</nav>
<script src="{{ asset('public/assets/js/jquery.js') }}"></script>
<script>
    $('.nav-setting').mouseenter(() => {
        $('.setting-drop').removeClass('d-none');
    });
    $('.setting-drop-profile').mouseenter(() => {
        $('.setting-drop-sub').removeClass('d-none');
    });

    $('.setting-drop-sub').mouseleave(() => {
        $('.setting-drop-sub').addClass('d-none');
    });

    $('.logout-btn').mouseenter(() => {
        $('.setting-drop').addClass('d-none');
    });
</script>