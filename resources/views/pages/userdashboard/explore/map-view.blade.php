@extends('layouts.userdashboard.default')
@section('content')
<link rel="stylesheet" href="{{asset('public/assets/css/mobiscroll.javascript.min.css')}}">
<style>
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
</style>
@include('includes.userdashboard.navbar')
<div class="content-wrapper">
    <div class="container-fluid mb-4">
        <div class="dashboard-header py-3">
            <div class="row">
                <div class="col-sm-4">
                    <div class="dashboard-header-left">
                        <h1>Dashboard</h1>
                    </div>
                </div>
                <div class="col-sm-8 text-right">
                    <div class="dashboard-header-right">
                        <a href="{{url('dashboard')}}">Grid View</a>
                        <a href="" class="active">Map View</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="filter-section py-4 px-2">
            <div class="row">
                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-sm-3 my-auto">
                            <div class="filter-left-heading">
                                <h1>Sessions</h1>
                            </div>

                        </div>
                        <div class="col-sm-3 mt-2 mt-sm-0">
                            <div class="filter-left-select-heading">
                                <h1>Workout Type</h1>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Yoga</option>
                                    <option>Yoga</option>
                                    <option>Yoga</option>
                                    <option>Yoga</option>
                                    <option>Yoga</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3 mt-2 mt-sm-0">
                            <div class="filter-left-select-heading">
                                <h1>Location</h1>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>London</option>
                                    <option>London</option>
                                    <option>London</option>
                                    <option>London</option>
                                    <option>London</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3 mt-2 mt-sm-0">
                            <div class="filter-left-select-heading">
                                <h1>Price Range</h1>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>$20to$100</option>
                                    <option>$20 to $100</option>
                                    <option>$20 to $100</option>
                                    <option>$20 to $100</option>
                                    <option>$20 to $100</option>
                                </select>
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
                            <div class="filter-left-select-heading mt-2 mt-xl-0">
                                <h1>Range</h1>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>1-3KM</option>
                                    <option>1-3KM</option>
                                    <option>1-3KM</option>
                                    <option>1-3KM</option>
                                    <option>1-3KM</option>
                                </select>
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
                            <div class="image-counter">
                                <img src="{{asset('public/assets/images/rating-right.png')}}">
                                <img src="{{asset('public/assets/images/rating-right.png')}}">
                                <img src="{{asset('public/assets/images/rating-right.png')}}">
                                <img src="{{asset('public/assets/images/rating-right.png')}}">
                                <div class="image-counter-div">
                                    <h1>+5</h1>
                                </div>
                            </div>
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
<script src="{{ asset('public/assets/js/mobiscroll.javascript.min.js') }}"></script>
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
    $('.sidenav .nav-item:nth-of-type(1)').addClass('active')
</script>
@endsection