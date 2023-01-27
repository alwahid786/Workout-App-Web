@extends('layouts.userdashboard.default')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.1/flexslider.css">
<style>
    .content-wrapper-inner {
        background: #ffff;
        border-radius: 7px;
    }

    .session-card-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .session-profile-left {
        display: flex;
        align-items: center;
    }

    .session-profile-left img {
        height: 40px;
        width: 40px;
        border-radius: 50%;
        border: 1px solid #E37048;
        object-fit: cover;
    }

    .session-profile-left p {
        color: #E37048;
        font-size: 1.1rem;
        font-weight: 500;
        letter-spacing: 0.04rem;
        margin-bottom: 0;
    }

    .session-anchor-right a {
        background: #fff;
        padding: 6px 30px;
        border-radius: 30px;
        text-decoration: none;
        color: #E37048;
        border: 1px solid #E37048;
        outline: none;
        text-shadow: none;
    }

    .session-anchor-right a:hover {
        text-decoration: none;
        background: #E37048;
        color: #fff;
        border: 1px solid #E37048;
    }

    .months {
        text-align: center;
    }

    .months h1 {
        font-size: 0.7rem;
        color: #BDBDBD;
        margin-bottom: 0px;
    }

    .month-active h1 {
        color: black !important;
        font-weight: bold;
    }

    .day-number {
        background: rgba(0, 0, 0, 0.1);
        width: 30px;
        height: 30px;
        border-radius: 50%;
        position: relative;
        margin: 0 auto;
    }

    .day-active {
        background: black;
    }

    .day-active h1 {
        color: white !important;
    }

    .day-number h1 {
        font-size: 0.6rem;
        margin-bottom: 0px;
        color: black;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .day-number h2 {
        color: #BDBDBD;
        font-size: 0.6rem;
        margin-bottom: 0px;
        padding-bottom: 2px;
        position: absolute;
        top: 40px;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .day-active h2 {
        border-bottom: 1px solid black !important;
        color: black;
    }
    .filter-menu {
        display: flex;
        flex-wrap: wrap;
    }

    .filter-menu-inner {
        flex: 20%;
    }

    @media screen and (max-width:576px) {
        .filter-menu {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            flex-direction: column;
        }
    }

    .dropbtn-s {
        background-color: #F9F9FB;
        color: black;
        font-weight: 500;
        padding: 5px;
        font-size: 0.9rem;
        height: 65px;
        border: none;
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }

    .dropbtn-s i {
        font-weight: bold;
        font-size: 1rem;
    }

    .dropdown-s {
        position: relative;
        display: inline-block;
        width: 100%;
    }

    .dropdown-content-s {
        display: none;
        position: absolute;
        background-color: #F9F9FB;
        min-width: 100px;
        border: 1px solid gray;
        padding: 5px;
        width: 100%;
        z-index: 1;
    }

    .dropdown-content-s a {
        color: black;
        font-size: 0.8rem;
        text-decoration: none;
        display: block;
    }

    .dropdown-content-s a:hover {
        background-color: #ddd;
    }

    .dropdown-s:hover .dropdown-content-s {
        display: block;
    }

    select {
        -webkit-appearance: none;
        -moz-appearance: none;
        text-indent: 1px;
        text-overflow: '';
    }

    .drop-icon {
        position: relative;
    }

    .drop-icon-parent i {
        position: absolute;
        top: 45%;
        right: 0;
        transform: translate(-50%, -50%);
        font-weight: bold;
        padding-right: 10px;
    }

    .drop-icon-thre i {
        padding-right: 2px !important;
    }

    .drop-icon-parent select {
        padding-left: 10px;
    }
    .class-left-banner {
    background: white;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.04);;
}
.filter-menu {
        display: flex;
        flex-wrap: wrap;
    }

    .filter-menu-inner {
        flex: 20%;
    }

    @media screen and (max-width:576px) {
        .filter-menu {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            flex-direction: column;
        }
    }

    .dropbtn-s {
        background-color: #F9F9FB;
        color: black;
        font-weight: 500;
        padding: 5px;
        font-size: 0.9rem;
        height: 65px;
        border: none;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        position: relative;
    }

    .dropbtn-s i {
        position: absolute;
        top: 52%;
        right: -28px;
        transform: translate(-50%, -50%);
        font-weight: bold;
        font-size: 1.1rem;
    }

    .dropdown-s {
        position: relative;
        display: inline-block;
        width: 100%;
    }

    .dropdown-content-s {
        display: none;
        position: absolute;
        background-color: #F9F9FB;
        min-width: 100px;
        border: 1px solid gray;
        padding: 5px;
        width: 100%;
        z-index: 1;
    }

    .dropdown-content-s a {
        color: black;
        font-size: 0.8rem;
        text-decoration: none;
        display: block;
    }

    .dropdown-content-s a:hover {
        background-color: #ddd;
    }

    .dropdown-s:hover .dropdown-content-s {
        display: block;
    }

    /* select {
        -webkit-appearance: none;
        -moz-appearance: none;
        text-indent: 1px;
        text-overflow: '';
    } */

    .drop-icon {
        position: relative;
        cursor: pointer;
        
    }
    .drop-icon:hover{
        cursor: pointer;
    }

    .drop-icon-parent i {
        position: absolute;
        top: 45%;
        right: 0;
        transform: translate(-50%, -50%);
        font-weight: bold;
        padding-right: 10px;
    }

    .drop-icon-thre i {
        padding-right: 2px !important;
    }

    .drop-icon-parent select {
        padding: 0px 15px;
        cursor: pointer;
    }
</style>
@include('includes.userdashboard.navbar')

<div class="content-wrapper">
    <div class="container-fluid mb-4 ">
        <div class="content-wrapper-inner p-3">
            <div class="row">
                <div class="col-lg-6 my-2">

                <div class=" filter-menu">
                        <div class="filter-menu-inner mt-2 mt-sm-0 px-sm-2">
                            <div class="filter-left-select-heading drop-icon-parent">
                                <h1>Workout Type</h1>
                                <div class="drop-icon">
                                    <select class="form-control px-0 text-center" id="exampleFormControlSelect1">
                                        <option>Yoga</option>
                                        <option>Yoga</option>
                                        <option>Yoga</option>
                                        <option>Yoga</option>
                                        <option>Yoga</option>
                                    </select>
                                    <!-- <i class="fa fa-sort-desc" aria-hidden="true"></i> -->


                                </div>


                            </div>
                        </div>
                        <div class="filter-menu-inner mt-2 mt-sm-0 px-sm-2">
                            <div class="filter-left-select-heading drop-icon-parent">
                                <h1>Location</h1>
                                <div class="drop-icon">
                                    <select class="form-control px-0 text-center" id="exampleFormControlSelect1">
                                        <option>London</option>
                                        <option>London</option>
                                        <option>London</option>
                                        <option>London</option>
                                        <option>London</option>
                                    </select>
                                    <!-- <i class="fa fa-sort-desc" aria-hidden="true"></i> -->


                                </div>

                            </div>
                        </div>
                        <div class="filter-menu-inner mt-2 mt-sm-0 px-sm-2">
                            <div class="filter-left-select-heading ">
                                <h1>Class Type</h1>
                                <div class="dropdown-s">
                                    <button class="dropbtn-s  ">One to One <i class="fa fa-angle-down pr-3 " aria-hidden="true"></i>

                                    </button>
                                    <div class="dropdown-content-s">
                                        <a href="{{url('/dashboard/mapgroup')}}">Group</a>
                                    </div>
                                </div>
                                <!-- <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Group</option>
                                    <option><a href="{{url('/dashboard/map')}}">One to One</a></option>

                                </select> -->
                            </div>
                        </div>
                        <div class="filter-menu-inner mt-2 mt-sm-0 px-sm-2">
                            <div class="filter-left-select-heading drop-icon-parent">
                                <h1>Price Range</h1>
                                <div class="drop-icon drop-icon-thre">
                                    <select class="form-control px-0 text-center" id="exampleFormControlSelect1" class="drop-icon">

                                        <option>$20to$100</option>
                                        <option>$20to$100</option>
                                        <option>$20to$100</option>
                                        <option>$20to$100</option>
                                        <option>$20to$100</option>

                                    </select>
                                    <!-- <i class="fa fa-sort-desc" aria-hidden="true"></i> -->


                                </div>


                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 my-2">
                    <div class="col session-detail-calendar px-2">
                        <div class="row js-slick-carousels">
                            <div class="col">
                                <div class="months month-active">
                                    <h1>January</h1>
                                </div>
                            </div>
                            <div class="col">
                                <div class="months">
                                    <h1>February</h1>
                                </div>
                            </div>
                            <div class="col">
                                <div class="months">
                                    <h1>March</h1>
                                </div>
                            </div>
                            <div class="col">
                                <div class="months">
                                    <h1>April</h1>
                                </div>
                            </div>
                            <div class="col">
                                <div class="months">
                                    <h1>May</h1>
                                </div>
                            </div>
                            <div class="col">
                                <div class="months">
                                    <h1>June</h1>
                                </div>
                            </div>
                            <div class="col">
                                <div class="months">
                                    <h1>July</h1>
                                </div>
                            </div>
                            <div class="col">
                                <div class="months">
                                    <h1>August</h1>
                                </div>
                            </div>
                            <div class="col">
                                <div class="months">
                                    <h1>September</h1>
                                </div>
                            </div>
                            <div class="col">
                                <div class="months">
                                    <h1>October</h1>
                                </div>
                            </div>
                            <div class="col">
                                <div class="months">
                                    <h1>November</h1>
                                </div>
                            </div>
                            <div class="col">
                                <div class="months">
                                    <h1>December</h1>
                                </div>
                            </div>
                        </div>
                        <div class="row js-slick-carouselss mt-3">
                            <div class="col pb-3">
                                <div class="day-number day-active">
                                    <h1>1</h1>
                                    <h2>Mon</h2>
                                </div>
                            </div>
                            <div class="col">
                                <div class="day-number">
                                    <h1>2</h1>
                                    <h2>Tue</h2>
                                </div>
                            </div>
                            <div class="col">
                                <div class="day-number">
                                    <h1>3</h1>
                                    <h2>Wed</h2>
                                </div>
                            </div>
                            <div class="col">
                                <div class="day-number">
                                    <h1>4</h1>
                                    <h2>Thu</h2>
                                </div>
                            </div>
                            <div class="col">
                                <div class="day-number">
                                    <h1>5</h1>
                                    <h2>Fri</h2>
                                </div>
                            </div>
                            <div class="col">
                                <div class="day-number">
                                    <h1>6</h1>
                                    <h2>Sat</h2>
                                </div>
                            </div>
                            <div class="col">
                                <div class="day-number">
                                    <h1>7</h1>
                                    <h2>Sun</h2>
                                </div>
                            </div>
                            <div class="col">
                                <div class="day-number">
                                    <h1>8</h1>
                                    <h2>Mon</h2>
                                </div>
                            </div>
                            <div class="col">
                                <div class="day-number">
                                    <h1>9</h1>
                                    <h2>Tue</h2>
                                </div>
                            </div>
                            <div class="col">
                                <div class="day-number">
                                    <h1>10</h1>
                                    <h2>Wed</h2>
                                </div>
                            </div>
                            <div class="col">
                                <div class="day-number">
                                    <h1>11</h1>
                                    <h2>Thu</h2>
                                </div>
                            </div>
                            <div class="col">
                                <div class="day-number">
                                    <h1>12</h1>
                                    <h2>Fri</h2>
                                </div>
                            </div>
                            <div class="col">
                                <div class="day-number">
                                    <h1>13</h1>
                                    <h2>Sat</h2>
                                </div>
                            </div>
                            <div class="col">
                                <div class="day-number">
                                    <h1>14</h1>
                                    <h2>Sun</h2>
                                </div>
                            </div>
                            <div class="col">
                                <div class="day-number">
                                    <h1>15</h1>
                                    <h2>Mon</h2>
                                </div>
                            </div>
                            <div class="col">
                                <div class="day-number">
                                    <h1>16</h1>
                                    <h2>Tue</h2>
                                </div>
                            </div>
                            <div class="col">
                                <div class="day-number">
                                    <h1>17</h1>
                                    <h2>Wed</h2>
                                </div>
                            </div>
                            <div class="col">
                                <div class="day-number">
                                    <h1>18</h1>
                                    <h2>Thu</h2>
                                </div>
                            </div>
                            <div class="col">
                                <div class="day-number">
                                    <h1>19</h1>
                                    <h2>Fri</h2>
                                </div>
                            </div>
                            <div class="col">
                                <div class="day-number">
                                    <h1>20</h1>
                                    <h2>Sat</h2>
                                </div>
                            </div>
                            <div class="col">
                                <div class="day-number">
                                    <h1>21</h1>
                                    <h2>Sun</h2>
                                </div>
                            </div>
                            <div class="col">
                                <div class="day-number">
                                    <h1>22</h1>
                                    <h2>Mon</h2>
                                </div>
                            </div>
                            <div class="col">
                                <div class="day-number">
                                    <h1>23</h1>
                                    <h2>Tue</h2>
                                </div>
                            </div>
                            <div class="col">
                                <div class="day-number">
                                    <h1>24</h1>
                                    <h2>Thu</h2>
                                </div>
                            </div>
                            <div class="col">
                                <div class="day-number">
                                    <h1>25</h1>
                                    <h2>Fri</h2>
                                </div>
                            </div>
                            <div class="col">
                                <div class="day-number">
                                    <h1>26</h1>
                                    <h2>Sat</h2>
                                </div>
                            </div>
                            <div class="col">
                                <div class="day-number">
                                    <h1>27</h1>
                                    <h2>Fri</h2>
                                </div>
                            </div>
                            <div class="col">
                                <div class="day-number">
                                    <h1>28</h1>
                                    <h2>Sat</h2>
                                </div>
                            </div>
                            <div class="col">
                                <div class="day-number">
                                    <h1>29</h1>
                                    <h2>Sun</h2>
                                </div>
                            </div>
                            <div class="col">
                                <div class="day-number">
                                    <h1>30</h1>
                                    <h2>Mon</h2>
                                </div>
                            </div>
                        </div>
                        <div id="demo-1-week"></div>
                    </div>
                </div>
            </div>
            <div class="dashboard-header-left my-4 pt-2">
                <h1>My Sessions</h1>
            </div>
            <div class="row ">
                <div class="col-lg-6 my-2">
                    <div class="class-left-banner px-2 py-3">
                        <img class="class-banner-img" src="{{asset('public/assets/images/sessiontwo.jpg')}}" alt="">
                        <div class="class-banner-content pt-3">
                            <h1>Stretching outdoors</h1>
                            <div class="class-banner-content-right">
                                <h1>$100</h1>
                                <div class="class-banner-content-right-time">
                                    <img class="pr-2" src="{{asset('public/assets/images/clock.svg')}}" alt="">
                                    <p>25min</p>
                                </div>
                            </div>
                        </div>
                        <div class="session-card-content">
                            <div class="session-profile-left py-2">
                                <img src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                <p class="pl-3">John Smith </p>
                            </div>
                            <div class="session-anchor-right">
                                <a href="{{url('/userdashboard/sessionone')}}">View</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 my-2 ">

                    <div class="class-left-banner px-2 py-3">
                        <img class="class-banner-img" src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                        <div class="class-banner-content pt-3">
                            <h1>Yoga</h1>
                            <div class="class-banner-content-right">
                                <h1>$100</h1>
                                <div class="class-banner-content-right-time">
                                    <img class="pr-2" src="{{asset('public/assets/images/clock.svg')}}" alt="">
                                    <p>25min</p>
                                </div>
                            </div>
                        </div>
                        <div class="session-card-content">
                            <div class="session-profile-left py-2">
                                <img src="{{asset('public/assets/images/sessiontwo.jpg')}}" alt="">
                                <p class="pl-3">John Smith</p>
                            </div>
                            <div class="session-anchor-right">
                                <a href="{{url('/userdashboard/sessiongroup')}}">View</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 my-2">
                    <div class="class-left-banner px-2 py-3">
                        <img class="class-banner-img" src="{{asset('public/assets/images/sessiontwo.jpg')}}" alt="">
                        <div class="class-banner-content pt-3">
                            <h1>Stretching outdoors</h1>
                            <div class="class-banner-content-right">
                                <h1>$100</h1>
                                <div class="class-banner-content-right-time">
                                    <img class="pr-2" src="{{asset('public/assets/images/clock.svg')}}" alt="">
                                    <p>25min</p>
                                </div>
                            </div>
                        </div>
                        <div class="session-card-content">
                            <div class="session-profile-left py-2">
                                <img src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                <p class="pl-3">John Smith </p>
                            </div>
                            <div class="session-anchor-right">
                                <a href="{{url('/userdashboard/sessionone')}}">View</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 my-2 ">
                    <div class="class-left-banner px-2 py-3">
                        <img class="class-banner-img" src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                        <div class="class-banner-content pt-3">
                            <h1>Yoga</h1>
                            <div class="class-banner-content-right">
                                <h1>$100</h1>
                                <div class="class-banner-content-right-time">
                                    <img class="pr-2" src="{{asset('public/assets/images/clock.svg')}}" alt="">
                                    <p>25min</p>
                                </div>
                            </div>
                        </div>
                        <div class="session-card-content">
                            <div class="session-profile-left py-2">
                                <img src="{{asset('public/assets/images/sessiontwo.jpg')}}" alt="">
                                <p class="pl-3">John Smith</p>
                            </div>
                            <div class="session-anchor-right">
                                <a href="{{url('/userdashboard/sessiongroup')}}">View</a>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.1/jquery.flexslider.js"></script>
<script>
    // two
    const slickSetting = {
        arrows: true,
        infinite: true,
        prevArrow: "<i class='fa fa-arrow-left slick-prev arrow ser-left-session d-none' aria-hidden='true'></i> ",
        nextArrow: "<i class='fa fa-arrow-right slick-next arrow ser-right-session d-none' aria-hidden='true'></i>",
        slidesToShow: 7,
        slidesToScroll: 7,
        responsive: [{
                breakpoint: 1160,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 5
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 8,
                    slidesToScroll: 8
                }
            },
            {
                breakpoint: 650,
                settings: {
                    slidesToShow: 6,
                    slidesToScroll: 6
                }
            },
            {
                breakpoint: 400,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4
                }
            },



        ]
    }


    // $('.js-slick-carousel').on('init', handleSlickInit);
    $('.js-slick-carousels').slick(slickSetting);

    // reinitialization
    $('.js-slick-carousels').on('reInit', () => console.log('slick re-init fired'));

    // two
    const slickSettingss = {
        arrows: true,
        infinite: true,
        prevArrow: "<i class='fa fa-arrow-left slick-prev arrow ser-left-session d-none' aria-hidden='true'></i> ",
        nextArrow: "<i class='fa fa-arrow-right slick-next arrow ser-right-session d-none' aria-hidden='true'></i>",
        slidesToShow: 8,
        slidesToScroll: 8,
        responsive: [{
                breakpoint: 1160,
                settings: {
                    slidesToShow: 7,
                    slidesToScroll: 7
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 14,
                    slidesToScroll: 14
                }
            },
            {
                breakpoint: 650,
                settings: {
                    slidesToShow: 8,
                    slidesToScroll: 8
                }
            },
            {
                breakpoint: 400,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 5
                }
            },




        ]
    }


    // $('.js-slick-carousel').on('init', handleSlickInit);
    $('.js-slick-carouselss').slick(slickSettingss);

    // reinitialization
    $('.js-slick-carouselss').on('reInit', () => console.log('slick re-init fired'));
    $(window).resize(handleResize);
</script>
<script>
    $('.sidenav .nav-item:nth-of-type(4)').addClass('active')
</script>
@endsection