@extends('layouts.userdashboard.default')
@section('content')
<!-- <link rel="stylesheet" href="{{asset('public/assets/css/mobiscroll.javascript.min.css')}}"> -->
<link rel="stylesheet" href="{{asset('public/assets/css/nice-select.css')}}">
<style>
    .user-search-box {
        display: block;
    }

    .dashboard-header-left span {
        color: #3F3F3F;
        font-weight: 300;
        font-size: 16px;
    }

    .mbsc-calendar-controls {
        position: relative;
        justify-content: center;
        text-align: center;
    }

    .mbsc-calendar-title-wrapper {
        justify-content: center;
    }

    .mbsc-calendar-title-wrapper button {
        position: relative !important;
    }

    .mbsc-calendar-controls .mbsc-calendar-button-prev {
        position: absolute;
        top: 50%;
        left: 20%;
        transform: translateX(0%) translateY(-50%);
    }

    .mbsc-calendar-controls .mbsc-calendar-button-next {
        position: absolute;
        top: 50%;
        right: 20%;
        transform: translateX(0%) translateY(-50%);
    }

    .mbsc-calendar-controls {
        max-width: 300px;
        margin: 0 auto;
    }

    .mbsc-ios.mbsc-selected .mbsc-calendar-cell-text {
        background: #E37048;
        border: none;
        border-radius: 5px;

    }

    .mbsc-calendar-cell>div:first-of-type {
        visibility: hidden;
    }

    .mbsc-calendar-week-day {
        color: #C1C1C1;
    }

    .mbsc-calendar-table,
    .mbsc-calendar-row,
    .mbsc-calendar-cell {
        background-color: #F9F9FB !important;
        border-radius: 4px;

        padding-bottom: 0px;
    }

    .mbsc-calendar-row,
    .mbsc-calendar-table {
        padding-top: 5px;
    }

    .mbsc-calendar-title {
        color: #E37048;
        font-size: 1rem;
        font-weight: 500 !important;
    }

    .mbsc-button-icon path {
        fill: black;
    }

    .mbsc-icon>svg {
        width: 60%;
    }

    .mbsc-ios.mbsc-datepicker-inline {
        border: none;
    }

    @media screen and (min-width:1200px) {
        .week-calendar {
            margin-top: -10px !important;
        }
    }

    #map {
        height: 500px;
        width: 100%;
        border-radius: 10px;
    }

    @media screen and (max-width:576px) {
        #map {
            height: 350px;
            width: 100%;
            border-radius: 10px;
        }
    }

    .filter-menu {
        display: flex;
        flex-wrap: wrap;
    }

    .filter-menu-left {
        flex: 20%;
    }

    .filter-menu-right {
        display: flex;
        flex: 80%;
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

        .filter-menu-right {
            display: flex;
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

    .drop-icon:hover {
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
    <div class="container-fluid mb-4">
        <div class="dashboard-header py-3">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="">
                    <div class="dashboard-header-left">
                        <h1>Search <span class="pl-1"> One to One Session</span></h1>
                    </div>
                </div>
                <div class="">
                    <div class="dashboard-header-right">
                        <a href="{{url('dashboard')}}">Grid View</a>
                        <a href="" class="active">Map View</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="filter-section py-4 px-2">
            <div class="row">
                <div class="col-12 my-auto">
                    <div class="filter-menu-left my-auto px-sm-2">
                        <div class="filter-left-heading">
                            <h1>Sessions</h1>
                        </div>

                    </div>
                </div>
                <div class="col-xl-6">
                    <div class=" filter-menu">
                        <div class=" filter-menu-right">
                            <div class="filter-menu-inner mt-2 mt-sm-0 px-sm-2">
                                <div class="filter-left-select-heading drop-icon-parent">
                                    <h1>Workout Type</h1>
                                    <div class="drop-icon">
                                        <select class="wide s-select form-control ">
                                            <option value="">Yoga</option>
                                            <option value="">Yoga1</option>
                                            <option value="">Yoga2</option>
                                            <option value="">Yoga3</option>
                                        </select>
                                        <!-- <i class="fa fa-sort-desc" aria-hidden="true"></i> -->
                                    </div>
                                </div>
                            </div>
                            <div class="filter-menu-inner mt-2 mt-sm-0 px-sm-2">
                                <div class="filter-left-select-heading drop-icon-parent">
                                    <h1>Location</h1>
                                    <div class="drop-icon">
                                        <select class="wide s-select form-control ">
                                            <option value="">London</option>
                                            <option value="">London1</option>
                                            <option value="">London2</option>
                                            <option value="">London3</option>
                                        </select>
                                        <!-- <i class="fa fa-sort-desc" aria-hidden="true"></i> -->


                                    </div>

                                </div>
                            </div>
                            <div class="filter-menu-inner mt-2 mt-sm-0 px-sm-2">
                                <div class="filter-left-select-heading drop-icon-parent">
                                    <h1>Class Type</h1>
                                    <div class="drop-icon">

                                        <select class="wide s-select form-control ">
                                            <option value="">One to One</option>
                                            <option value="">Group</option>
                                        </select>
                                        <!-- <i class="fa fa-sort-desc" aria-hidden="true"></i> -->


                                    </div>

                                </div>
                            </div>
                            <!-- <div class="filter-menu-inner mt-2 mt-sm-0 px-sm-2">
                            <div class="filter-left-select-heading ">
                                <h1>Class Type</h1>
                                <div class="dropdown-s">
                                    <button class="dropbtn-s  ">One to One <i class="fa fa-angle-down pr-3 " aria-hidden="true"></i>

                                    </button>
                                    <div class="dropdown-content-s">
                                        <a href="{{url('/dashboard/mapgroup')}}">Group</a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                            <div class="filter-menu-inner mt-2 mt-sm-0 px-sm-2">
                                <div class="filter-left-select-heading drop-icon-parent">
                                    <h1>Price Range</h1>
                                    <div class="drop-icon drop-icon-thre">
                                        <select class="wide s-select form-control ">
                                            <option>$20 to $100</option>
                                            <option>$20 to $100</option>
                                            <option>$20 to $100</option>
                                            <option>$20 to $100</option>
                                            <option>$20 to $100</option>
                                        </select>
                                        <!-- <i class="fa fa-sort-desc" aria-hidden="true"></i> -->


                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-sm-9 week-calendar">
                            <div id="demo-1-week"></div>
                        </div>
                        <div class="col-sm-3 mt-2 mt-sm-0">
                            <div class="filter-left-select-heading mt-2 mt-xl-0 drop-icon-parent">
                                <h1>Range</h1>
                                <div class="drop-icon">
                                    <select class="wide s-select form-control">
                                        <option>1-3KM</option>
                                        <option>1-5KM</option>
                                        <option>1-7KM</option>
                                        <option>1-9KM</option>
                                        <option>1-11KM</option>
                                    </select>
                                    <!-- <i class="fa fa-sort-desc" aria-hidden="true"></i> -->


                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col text-right my-2 pr-0">
                <div class="filter-section-btn py-2">
                    <a href="" class="">Apply</a>
                </div>
            </div>
            <div class="col py-2 map-section px-0">
                <div id="map"></div>
                <div class="map-card p-2 mt-3">
                    <div class="map-card-left">
                        <div class="map-card-img">
                            <img src="{{asset('public/assets/images/rating-right.png')}}">
                        </div>
                        <div class="map-card-profile pl-3">
                            <h1>Stretching </h1>
                            <p class="name">John Smith</p>
                            <div class="rating-star py-1">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="location-pin pb-3">
                                <i class="fa fa-map-marker pr-2" aria-hidden="true"></i>
                                <p>Park Gardens</p>
                            </div>
                            <!-- <div class="image-counter">
                                <img src="{{asset('public/assets/images/rating-right.png')}}">
                                <img src="{{asset('public/assets/images/rating-right.png')}}">
                                <img src="{{asset('public/assets/images/rating-right.png')}}">
                                <img src="{{asset('public/assets/images/rating-right.png')}}">
                                <div class="image-counter-div">
                                    <h1>+5</h1>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="map-card-right">
                        <div class="map-card-right-btn mt-4">
                            <a href="">
                                Book Now
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('insertsfooter')
<!-- <script src="{{ asset('public/assets/js/mobiscroll.javascript.min.js') }}"></script> -->
<script src="{{ asset('public/assets/js/jquery.nice-select.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.s-select').niceSelect();
    });
</script>
<script>
    mobiscroll.setOptions({
        theme: 'ios',
        themeVariant: 'light',

    });

    mobiscroll.datepicker('#demo-1-week', {
        controls: ['calendar'],
        display: 'inline',
        calendarType: 'week',
        calendarSize: 1
    });
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6NS5JQ0bHHnlcqiHLU2BktDTr9l22ZeY&callback=initMap&v=weekly" defer></script>
<script>
    $('.map-card').hide();
    // Initialize and add the map
    function initMap() {
        // The location of Uluru
        const uluru = {
            lat: -25.344,
            lng: 131.031
        };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 4,
            center: uluru,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
            position: uluru,
            map: map,
        });
        marker.addListener("click", () => {
            $('.map-card').show();
        });
    }

    window.initMap = initMap;
</script>
<script>
    $('.sidenav .nav-item:nth-of-type(3)').addClass('active')
</script>
@endsection