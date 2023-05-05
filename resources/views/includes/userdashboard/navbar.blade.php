<?php

use App\Models\Notification;

$notification = Notification::where(['reciever_id' => auth()->user()->id, 'is_read' => 0])->with('user')->get();
$notifications = json_decode($notification, true);

?>
<style>
    .logout-dropdown a:hover {
        background-color: #E37048;
        color: white;
    }


    .setting-drop-sub {
        padding-left: 70px;
    }

    .no-notifications {
        color: #E37048;
        font-size: 16px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 10px;
    }
 .dropdown-submenu {
  position: relative;
}
.main-dropdown{
    left:-92px !important;
}
.dropdown-submenu a::after {
  transform: rotate(-90deg);
  position: absolute;
  right: 6px;
  top: .8em;
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: -183px;
  margin-left: .1rem;
  margin-right: .1rem;
}
.submenu2{
    left: -162px !important;
}
.submenu1-toggle, .submenu2-toggle{
    cursor: pointer !important;
}
@media (max-width: 991px){
    .submenu1{
        border: none !important;
        margin-left: 1rem !important;
    }
    .submenu2{
        border: none !important;
        margin-left: 1rem !important;
    }
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
                        @if($notifications!= null)
                        @foreach($notifications as $notification)
                        <a class=" notification-area" href="#">
                            <div class="notification-profile d-flex py-3">
                                <img src="{{asset('public/assets/images/rating-right.png')}}">
                                <p class="pl-3"><span>{{$notification['user']['name']}}</span>{{$notification['noti_text']}}
                                </p>
                            </div>
                        </a>
                        @endforeach
                        @else
                        <div class="no-notifications">
                            No Notifications!
                        </div>
                        @endif
                        <!-- <a class=" notification-area" href="#">
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
                        </a> -->
                    </div>
                </div>

            </li>
            <li class="nav-item mr-lg-4 my-2 my-lg-0">
                <div class="dropdown dropdown-logout">
                    <button class="nav-link dropdown-toggle log-link p-0" type="button" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if(auth()->user()->profile_img==null)
                        <!-- <img src="{{asset('public/assets/images/rating-right.png')}}" alt="image"> -->
                        <img src="{{asset('public/assets/images/unknown-user.png')}}" alt="image">

                        @else
                        <img src="{{auth()->user()->profile_img}}" alt="image">

                        @endif
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    </button>
                    <ul class="dropdown-menu main-dropdown" aria-labelledby="navbarDropdownMenuLink">
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle submenu1-toggle" >Setting<i class="fa fa-angle-down pl-3" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu submenu1">
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle submenu2-toggle" >Profile<i class="fa fa-angle-down pl-3" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu submenu2">
                                <li><a class="dropdown-item" href="{{(url('/profile'))}}">Update Profile</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="{{url('/payment')}}">List Of Payment</a></li>
                        <li><a class="dropdown-item" href="{{(url('/term'))}}">Terms & Condition</a></li>
                        <li><a class="dropdown-item" href="{{(url('/approach-l'))}}">Privacy Policy</a></li>
                    </ul>
                </li>
                <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
            </ul>
        </div>
    </li>
            <!-- <li class="nav-item mr-lg-4 my-2 my-lg-0">
                <div class="dropdown dropdown-logout">
                    <button class="p-0 btn  dropdown-toggle log-link" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @if(auth()->user()->profile_img==null)
                        <img src="{{asset('public/assets/images/rating-right.png')}}" alt="image"> 
                        <img src="{{asset('public/assets/images/unknown-user.png')}}" alt="image">

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
            </li> -->

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

                    Find Session
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('/userdashboard/session')}}" class=" nav-link sidenav-item ">
                    <div class="nav-link-image-outer mr-1">
                        <img class="nav-y" src="{{asset('public/assets/images/session-g-new.svg')}}" alt="image">
                        <img class="nav-w" src="{{asset('public/assets/images/session-w-new.svg')}}" alt="image">
                    </div>

                    Workout Session
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('/dashboard/categories/1')}}" class=" nav-link sidenav-item ">
                    <div class="nav-link-image-outer mr-1">
                        <img class="nav-y" src="{{asset('public/assets/images/category-g.svg')}}" alt="image">
                        <img class="nav-w" src="{{asset('public/assets/images/category-w.svg')}}" alt="image">
                    </div>
                    Categories
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('/dashboard/trainer')}}" class=" nav-link sidenav-item ">
                    <div class="nav-link-image-outer mr-1">
                        <img class="nav-y" src="{{asset('public/assets/images/trainer-g.svg')}}" alt="image">
                        <img class="nav-w" src="{{asset('public/assets/images/trainer-w.svg')}}" alt="image">
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
<script>
    $(document).ready(function(){
        $('.log-link').on('click', function(e) {
            $('.submenu1').removeClass("show");
        $('.submenu2').removeClass("show");
        });
        $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
            if (!$(this).next().hasClass('show')) {
                $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
            }
            var $subMenu = $(this).next(".dropdown-menu");
            $subMenu.toggleClass('show');
            $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
                $('.dropdown-submenu .show').removeClass("show");
            });
            return false;
});
});
</script>