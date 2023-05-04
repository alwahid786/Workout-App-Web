@extends('layouts.userdashboard.default')
@section('content')
<!-- <link rel="stylesheet" href="{{asset('public/assets/css/mobiscroll.javascript.min.css')}}"> -->
<link rel="stylesheet" href="{{asset('public/assets/css/nice-select.css')}}">
<script src="{{asset('public/assets/fullcalendar/dist/index.global.min.js')}}"></script>
<style>
    .user-search-box {
        display: block;
    }

    .dashboard-header-left span {
        color: #3F3F3F;
        font-weight: 400;
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

        .range-filter {
            margin-top: 70px;
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

    .fc-theme-standard th {
        border: none;
    }

    .fc-theme-standard {
        border: none !important;
    }

    .fc .fc-button-primary:disabled {
        display: none;
    }

    .fc-theme-standard {
        position: relative !important;
    }

    .fc-direction-ltr .fc-button-group>.fc-button:not(:last-child) {
        border-bottom-right-radius: 0;
        border-top-right-radius: 0;
        /* position: absolute; */
        /* left: -320px; */
    }

    .fc .fc-toolbar-title {
        color: #E37048;
        font-size: 1.1rem;
    }

    .fc-today-button {
        display: none !important;
    }

    .fc .fc-button-primary {
        background: none !important;
        color: #000 !important;
        border: none !important;
    }

    .fc .fc-toolbar {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .fc-scrollgrid tbody {
        display: none;
    }

    .fc-col-header {
        border: 1px solid #fff !important;
    }

    .fc-scrollgrid-sync-inner {
        border: none !important;
    }

    .fc table {
        border: none !important;
    }

    .fc-col-header {
        background: #F9F9FB;
        border-radius: 10px;
    }

    .fc-col-header-cell-cushion div:nth-of-type(1) {
        color: #C1C1C1 !important;
        font-weight: 500;
    }

    .fc-col-header-cell-cushion div:nth-of-type(2) {
        font-weight: 600;
        padding: 10px 0;
        color: #000;
    }

    .fc-col-header-cell-cushion:hover {
        text-decoration: none !important;
        cursor: pointer;
    }

    .fc-col-header thead tr th:nth-of-type(4) .fc-scrollgrid-sync-inner .fc-col-header-cell-cushion {
        background: #E37048;
        border-radius: 7px;
        color: #fff !important;
    }

    .fc-col-header thead tr th:nth-of-type(4) .fc-scrollgrid-sync-inner .fc-col-header-cell-cushion div:nth-of-type(1) {
        color: #fff !important;
    }

    .fc-col-header thead tr th:nth-of-type(4) .fc-scrollgrid-sync-inner .fc-col-header-cell-cushion div:nth-of-type(2) {
        color: #fff !important;
    }

    .fc .fc-toolbar.fc-header-toolbar {
        margin-bottom: 0 !important;
    }

    .fc-view-harness {
        height: 0 !important;
    }

    .fc-next-button:active {
        outline: none !important;
        box-shadow: none !important;
    }

    .fc-prev-button:active {
        outline: none !important;
        box-shadow: none !important;
    }

    .fc-next-button:focus {
        outline: none !important;
        box-shadow: none !important;
    }

    .fc-prev-button:focus {
        outline: none !important;
        box-shadow: none !important;
    }

    .input-location input {
        border: none !important;
        width: 100%;
        height: 65px;
        background: #F9F9FB;
        border-radius: 5px;
        padding: 0 5px;
    }

    .input-location:active input .input-location:focus input {
        border: none !important;
        outline: none !important;
        box-shadow: none !important;
    }

    .input-location input:focus {
        border: none !important;
        outline: none !important;
        box-shadow: none !important;
    }

    h1 span {
        display: inline;
    }

    .list {
        height: 200px;
        overflow: auto !important;
    }
</style>
@include('includes.userdashboard.navbar')
<div class="content-wrapper">
    <div class="container-fluid mb-4">
        <div class="dashboard-header py-3">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="">
                    <div class="dashboard-header-left">
                        <h1 class="d-flex">Search <span class="pl-1"> <span id="sessionType">One to One</span> Session</span></h1>
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
                {{--<div class="col-xl-6">
                    <div class=" filter-menu">
                        <div class=" filter-menu-right">
                            <div class="filter-menu-inner mt-2 mt-sm-0 px-sm-2">
                                <div class="filter-left-select-heading drop-icon-parent">
                                    <h1>Workout Type</h1>
                                    <div class="drop-icon">
                                        <select class="wide s-select form-control" id="workout_category">
                                            @foreach($categories as $category)
                                            <option value="{{$category['id']}}" data-src="{{$category['title']}}">{{$category['title']}}</option>
                @endforeach
                </select>
                <!-- <i class="fa fa-sort-desc" aria-hidden="true"></i> -->
            </div>
        </div>
    </div>
    <div class="filter-menu-inner mt-2 mt-sm-0 px-sm-2">
        <div class="filter-left-select-heading drop-icon-parent">
            <h1>Location</h1>
            <div class="drop-icon">
                <select class="wide s-select form-control " id="workout_location">
                    <option selected value="{{$currentUserInfo->regionName}}" class="locationOption">{{$currentUserInfo->regionName}}</option>
                </select>
                <!-- <i class="fa fa-sort-desc" aria-hidden="true"></i> -->
            </div>

        </div>
    </div>
    <div class="filter-menu-inner mt-2 mt-sm-0 px-sm-2">
        <div class="filter-left-select-heading drop-icon-parent">
            <h1>Class Type</h1>
            <div class="drop-icon">

                <select class="wide s-select form-control" id="workout_type">
                    <option value="0">One to One</option>
                    <option value="1">Group</option>
                </select>
                <!-- <i class="fa fa-sort-desc" aria-hidden="true"></i> -->


            </div>

        </div>
    </div>
    <div class="filter-menu-inner mt-2 mt-sm-0 px-sm-2">
        <div class="filter-left-select-heading drop-icon-parent">
            <h1>Price Range1wwww</h1>
            <div class="drop-icon drop-icon-thre">
                <select class="wide s-select form-control " id="workout_price">
                    <option value="85">$85 to $200</option>
                    <option value="200">$200 to $400</option>
                    <option value="400">$400 to $800</option>
                    <option value="800">$800++</option>
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
        <div class="col-sm-6 week-calendar">
            <div id="calendar"></div>
        </div>
        <div class="col-sm-3 range-filter">
            <div class="filter-left-select-heading mt-2 mt-xl-0 drop-icon-parent">
                <h1>Session Type</h1>
                <div class="drop-icon input-location">
                    <select class="wide s-select form-control" id="session_type">
                        <option value="0">Online</option>
                        <option value="1">In-person</option>
                    </select>
                    <!-- <i class="fa fa-sort-desc" aria-hidden="true"></i> -->
                </div>


            </div>
        </div>
        <div class="col-sm-3 range-filter">
            <div class="filter-left-select-heading mt-2 mt-xl-0 drop-icon-parent">
                <h1>Range</h1>
                <div class="drop-icon input-location">
                    <select class="wide s-select form-control" id="workout_radius">
                        <option value="3">3KM</option>
                        <option value="5">5KM</option>
                        <option value="8">8KM</option>
                        <option value="10">10KM</option>
                        <option value="15">15KM</option>
                        <option value="20">20KM</option>
                    </select>
                    <!-- <input type="text" readonly style="cursor: pointer;" placeholder="Enter Location"> -->
                    <!-- <i class="fa fa-sort-desc" aria-hidden="true"></i> -->
                </div>
            </div>

        </div>
    </div>
</div>--}}
<div class="col-12">
    <div class=" filter-menu">
        <div class=" filter-menu-right">
            <div class="filter-menu-inner mt-2 mt-sm-0 px-sm-2">
                <div class="filter-left-select-heading drop-icon-parent">
                    <h1>Workout Type</h1>
                    <div class="drop-icon">
                        <select class="wide s-select form-control" id="workout_category">
                            @foreach($categories as $category)
                            <option value="{{$category['id']}}" data-src="{{$category['title']}}">{{$category['title']}}</option>
                            @endforeach
                        </select>
                        <!-- <i class="fa fa-sort-desc" aria-hidden="true"></i> -->
                    </div>
                </div>
            </div>
            <div class="filter-menu-inner mt-2 mt-sm-0 px-sm-2">
                <div class="filter-left-select-heading drop-icon-parent">
                    <h1>Country</h1>
                    <div class="drop-icon">
                        <!-- <select class="wide s-select form-control " id="workout_location">
                            <option value="Hong Kong Island">Hong Kong Island</option>
                            <option value="Kowloon">Kowloon</option>
                            <option value="New Territories">New Territories</option>
                        </select> -->
                        <select class="wide s-select form-control" onchange="get_states(this)" id="country" name="country">
                            @foreach($countries as $country)
                            <option value="">Select Country</option>
                            <option value="{{$country}}">{{$country}}</option>
                            @endforeach
                        </select>
                        <!-- <i class="fa fa-sort-desc" aria-hidden="true"></i> -->
                    </div>

                </div>
            </div>
            <div class="filter-menu-inner mt-2 mt-sm-0 px-sm-2">
                <div class="filter-left-select-heading drop-icon-parent">
                    <h1>Area</h1>
                    <div class="drop-icon">
                        <!-- <select class="wide s-select form-control" id="city">
                            <option value="">Select city</option>
                        </select> -->
                        <select class="wide s-select form-control" id="state" name="state">
                            <option disabled selected>Select Country First</option>
                        </select>
                        <!-- <i class="fa fa-sort-desc" aria-hidden="true"></i> -->
                    </div>
                </div>
            </div>
            <div class="filter-menu-inner mt-2 mt-sm-0 px-sm-2">
                <div class="filter-left-select-heading drop-icon-parent">
                    <h1>Class Type</h1>
                    <div class="drop-icon">

                        <select class="wide s-select form-control" id="workout_type">
                            <option value="0">One to One</option>
                            <option value="1">Group</option>
                        </select>
                        <!-- <i class="fa fa-sort-desc" aria-hidden="true"></i> -->


                    </div>

                </div>
            </div>
            <div class="filter-menu-inner mt-2 mt-sm-0 px-sm-2">
                <div class="filter-left-select-heading drop-icon-parent">
                    <h1>Price Range</h1>
                    <div class="drop-icon drop-icon-thre">
                        <!-- <select class="wide s-select form-control " id="workout_price">
                            <option value="85">$85 to $200</option>
                            <option value="200">$200 to $400</option>
                            <option value="400">$400 to $800</option>
                            <option value="800">$800++</option>
                        </select> -->
                        <div class="price-input  row">
                            <div class="col-6 form-group">
                                <input class="form-control" type="text" name="min" placeholder="min" id="price_min">

                            </div>
                            <div class="col-6 form-group">
                                <input class="form-control" type="text" name="max" placeholder="max" id="price_max">

                            </div>
                        </div>
                        <!-- <input type="text" placeholder="minimim"> -->
                        <!-- <i class="fa fa-sort-desc" aria-hidden="true"></i> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-12 mt-3">
    <div class="row">
        <div class="col-sm-6 week-calendar">
            <div id="calendar"></div>
        </div>
        <div class="col-sm-3 range-filter">
            <div class="filter-left-select-heading mt-2 mt-xl-0 drop-icon-parent">
                <h1>Session Type</h1>
                <div class="drop-icon input-location">
                    <select class="wide s-select form-control" id="session_type">
                        <option value="0">Online</option>
                        <option value="1">In-person</option>
                    </select>
                    <!-- <i class="fa fa-sort-desc" aria-hidden="true"></i> -->
                </div>


            </div>
        </div>
        <div class="col-sm-3 range-filter">
            <div class="filter-left-select-heading mt-2 mt-xl-0 drop-icon-parent">
                <h1>Range</h1>
                <div class="drop-icon input-location">
                    <select class="wide s-select form-control" id="workout_radius">
                        <option value="3">3KM</option>
                        <option value="5">5KM</option>
                        <option value="8">8KM</option>
                        <option value="10">10KM</option>
                        <option value="15">15KM</option>
                        <option value="20">20KM</option>
                    </select>
                    <!-- <input type="text" readonly style="cursor: pointer;" placeholder="Enter Location"> -->
                    <!-- <i class="fa fa-sort-desc" aria-hidden="true"></i> -->
                </div>
            </div>

        </div>
    </div>
</div>
</div>
<div class="col text-right my-2 pr-0">
    <div class="filter-section-btn py-2">
        <a href="javascript:void(0)" class="applyFilterBtn">Apply</a>
    </div>
</div>
<div class="col py-2 map-section px-0">
    <div id="map"></div>
    <div class="map-card p-2 mt-3">

        <div class="map-card-left">
            <div class="map-card-img">
                <img class="trainerImg_mapcard" src="{{asset('public/assets/images/rating-right.png')}}">
            </div>
            <div class="map-card-profile pl-3">
                <h1 class="sessionName_mapcard">Stretching </h1>
                <p class="name trainerName_mapcard">John Smith</p>
                <div class="rating-star py-1">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                <div class="location-pin pb-3">
                    <i class="fa fa-map-marker pr-2" aria-hidden="true"></i>
                    <p class="trainerLocation_mapcard">Park Gardens</p>
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
                <a href="" class="sessionAnchor_mapcard">
                    Book Now
                </a>
            </div>
        </div>
        <div class="">
            <img class="map-card-close" src="{{asset('public/assets/trainerimages/cross-icon.svg')}}" alt="">
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6NS5JQ0bHHnlcqiHLU2BktDTr9l22ZeY&callback=initMap&v=weekly" defer></script>
<!-- <script type="text/javascript" src="{{asset('public/assets/js/countries.js')}}"></script>
<script language="javascript">
    print_country("country");
</script> -->
<script>
    $('.map-card-close').click(() => {
        $('.map-card').hide();
    });
</script>
<script>
    $(document).ready(function() {
        const citiesByState = {
            "Hong Kong Island": ["Central", "Eastern", "Southern", "Wan Chai"],
            "Kowloon": ["Kowloon City", "Kwun Tong", "Sham Shui Po", "Wong Tai Sin", "Yau Tsim Mong"],
            "New Territories": ["Islands", "Kwai Tsing", "North", "Sai Kung", "Sha Tin", "Tai Po", "Tsuen Wan", "Tuen Mun", "Yuen Long"]
        };

        // $(document).on('change', '#country', function() {
        //     const stateDropdown = document.getElementById("country");
        //     const cityDropdown = document.getElementById("city");
        //     const selectedState = stateDropdown.value;
        //     // Remove previous options from city dropdown
        //     cityDropdown.options.length = 0;
        //     // cityDropdown.options.add(new Option("Select city", ""));

        //     // If a state is selected, add its cities to the dropdown
        //     if (selectedState) {
        //         const cities = citiesByState[selectedState];
        //         cities.forEach(city => {
        //             const cityOption = document.createElement("option");
        //             cityOption.value = city;
        //             cityOption.text = city;
        //             cityDropdown.appendChild(cityOption);
        //             $('.s-select').niceSelect('update');
        //         });
        //     }
        // });
        $('.s-select').niceSelect({
            search: true
        });
        var UserLocationdata = @json($currentUserInfo);
        console.log(UserLocationdata);
        var locationMap = [
            [UserLocationdata.latitude, UserLocationdata.longitude]
        ]
        initMap(locationMap);

        $("#workout_type").on('change', function() {
            let type = $(this).val();
            if (type == 0) {
                $('#sessionType').text('One to One');
            } else {
                $('#sessionType').text('Group');
            }
        });
        $(".fc-col-header-cell-cushion").click(function() {
            var day = $(this).find(">:first-child").text();
            var data = {
                category: category,
                location: location,
                type: type,
                price: price,
                radius: radius,
                session_type: session_type,
                day: day
            }
        });
        $(".applyFilterBtn").on('click', function() {
            let category = $('#workout_category').val();
            let country = $('#country').val();
            let state = $('#state').val();
            let type = $('#workout_type').val();
            let price = $('#workout_price').val();
            let min = $('#price_min').val();
            let max = $('#price_max').val();
            let radius = $('#workout_radius').val();
            let session_type = $('#session_type').val();
            var data = {
                category: category,
                state: state,
                country: country,
                type: type,
                price: price,
                min: min,
                max: max,
                radius: radius,
                session_type: session_type,
            };
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: `{{route('filterMapData')}}`,
                type: "POST",
                data: data,
                cache: false,
                success: function(response) {
                    if (response.success == true) {
                        locationMap = response.data.latLngArray;
                        console.log(locationMap)
                        initMap(locationMap);
                    } else {
                        toastr.error(response.message);
                    }
                },
                error: function(jqXHR, exception) {
                    toastr.error(jqXHR.responseJSON.message);
                }

            });
        });



    });
    $('.map-card').hide();

    function initMap(e) {
        // The location of Uluru
        console.log(e);
        var locations = e;
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: new google.maps.LatLng(parseFloat(locations[0][0]), parseFloat(locations[0][1])),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var infowindow = new google.maps.InfoWindow();

        var marker, i;

        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][0], locations[i][1]),
                map: map
            });
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    //     infowindow.setContent(locations[i][0]);
                    //     infowindow.open(map, marker);
                    let sessionData = locations[i][2];
                    console.log(sessionData)
                    $('.sessionName_mapcard').text(sessionData['category']['title']);
                    $('.trainerName_mapcard').text(sessionData['trainer_data']['name']);
                    $('.trainerLocation_mapcard').text(sessionData['trainer_data']['workout_location']);
                    $('.trainerImg_mapcard').attr('src', sessionData['trainer_data']['profile_img']);
                    let id = sessionData['trainer_data']['id'];
                    let day = sessionData['day'];
                    let url = `{{url('/dashboard/class-detail/${id}/${day}')}}`
                    $(".sessionAnchor_mapcard").attr('href', url);
                    $('.map-card').show();
                }

            })(marker, i));
        }
    }
    window.initMap = initMap;
</script>
<script>
    $('.sidenav .nav-item:nth-of-type(3)').addClass('active')
</script>
<script src="{{ asset('public/assets/js/index.global.min.js') }}"></script>
<script>
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridWeek',
        // buttons for switching between views
        views: {
            dayGridWeek: { // name of view
                dayHeaderFormat: {
                    weekday: 'short',
                    day: 'numeric',
                    omitCommas: true
                },
                // other view-specific options here
            }
        },
        headerToolbar: {
            left: 'prev',
            center: 'title',
            right: 'next' // user can switch between the two
        }
    });
    calendar.render();
    strToDiv()
    $(".fc-next-button").click(function() {
        strToDiv();
    })
    $(".fc-prev-button").click(function() {
        strToDiv();
    })

    function strToDiv() {
        $('.fc-col-header-cell-cushion').each(function() {
            let str = $(this).text();
            let parts = str.split(" ");
            let div1 = "<div>" + parts[0] + "</div>";
            let div2 = "<div>" + parts[1] + "</div>";
            $(this).html(div2 + div1)
        })
    }

    function get_states(that) {
        country = $(that).val();
        if (country == '') {
            $("#state").val('');
        }
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: `{{route('getStatesByCountry')}}`,
            type: "POST",
            data: {
                country: country
            },
            cache: false,
            success: function(response) {
                if (response.success == true) {
                    $("#state").html(response.data.html);
                    $('.s-select').niceSelect('update');
                } else {
                    toastr.error(response.message);
                }
            },
            error: function(jqXHR, exception) {
                toastr.error(jqXHR.responseJSON.message);
            }

        });
    }
</script>
<script>
    $('.left-inner-addon').css('display', 'none');
</script>
@endsection