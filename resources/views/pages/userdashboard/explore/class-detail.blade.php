@extends('layouts.userdashboard.default')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.1/flexslider.css">
<!-- <link rel="stylesheet" href="{{asset('public/assets/css/mobiscroll.javascript.min.css')}}"> -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
<style>
    .loaderDiv {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        background: rgba(0, 0, 0, 0.75) url("../../../../workitpt_web/public/assets/images/loader.svg") no-repeat center center;
        z-index: 99999;
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
        background: black;
        border: none;
        width: 1.625em !important;
        height: 1.625em !important;
        /* border-radius: 5px; */

    }

    .mbsc-calendar-cell-text {
        background: rgba(0, 0, 0, 0.1);
        color: black;
        font-weight: 500;
    }

    /* .mbsc-calendar-cell:first-child {
        display: none;
    } */

    .mbsc-calendar-week-day {
        color: #C1C1C1;
    }

    .mbsc-calendar-table,
    .mbsc-calendar-row,
    .mbsc-calendar-cell {
        /* background-color: #F9F9FB !important; */
        border-radius: 4px;

        padding-bottom: 0px;
    }

    .mbsc-calendar-row,
    .mbsc-calendar-table {
        padding-top: 5px;
    }

    .mbsc-calendar-title {
        color: black;
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

    /* For Chrome or Safari */
    progress::-webkit-progress-bar {
        background-color: #eeeeee;
    }

    progress::-webkit-progress-value {
        background-color: #E37048 !important;
    }


    /* For Firefox */
    progress {
        background-color: #eee;
    }

    progress::-moz-progress-bar {
        background-color: #E37048 !important;
    }

    /* For IE10 */
    progress {
        background-color: #eee;
        height: 5px;
    }

    progress {
        background-color: #E37048;
    }

    .carousel-parent {
        position: relative;
    }

    .empty-session-detail-left {
        position: absolute;
        width: 20%;
        height: 98%;
        background: linear-gradient(270deg, #601900 0%, rgba(217, 217, 217, 0) 85.11%);
        transform: rotate(-180deg);
        z-index: 999;
        border-radius: 10px;
    }

    .empty-session-detail-right {
        border-radius: 10px;
        position: absolute;
        width: 20%;
        height: 98%;
        right: 0;
        z-index: 999;
        background: linear-gradient(270deg, #601900 0%, rgba(217, 217, 217, 0) 85.11%);
    }

    .ser-left-session {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        font-size: 1rem;
        font-weight: normal;
        background: #FFFFFF;
        color: #E37048;
        cursor: pointer;
        position: absolute;
        top: 50%;
        left: 50px;
        transform: translateX(-50%) translateY(-50%);
        z-index: 999;
    }

    .fa-arrow-left:before {
        position: absolute;
        top: 12px !important;
        left: 12px !important;
    }

    .fa-arrow-right:before {
        position: absolute;
        top: 12px !important;
        left: 14px !important;
    }

    .ser-right-session {
        background: white;
        color: #E37048;
        font-size: 1rem;
        font-weight: normal;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        cursor: pointer;
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateX(-50%) translateY(-50%);
        z-index: 999;
    }

    .dashboard-header-left h1>span {
        color: #3F3F3F;
        font-size: 1rem;
        font-weight: 400;
    }

    .months {
        cursor: pointer;
    }

    .class-banner-content {
        background-color: #fff !important;
        padding: 10px;
    }

    .class-left-banner {
        border-top-left-radius: 10px !important;
        border-top-right-radius: 10px !important;
    }

    .class-banner-content {
        background-color: #fff !important;
        padding: 10px;
        margin-top: -11px;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    .day-class {
        background-color: #F6CD8B;
        cursor: pointer;
    }

    .trainer-detail-profile-left-progress p {
        font-size: 0.7rem !important;
        color: black;
        margin-bottom: 0px !important;
        /* text-transform: uppercase; */
        padding-left: 2px;
        color: #E37048;
    }
</style>
@include('includes.userdashboard.navbar')
<div class="content-wrapper">
    <div class="container-fluid mb-4">
        <div class="dashboard-header-left">
            @if($class_detail[0]['session'][0]['type']==0)
            <h1>Session Detail <span id="sessionType_d" class="ml-3" style="text-transform:capitalize">One to one</span></h1>
            @else
            <h1>Session Detail <span id="sessionType_d" class="ml-3" style="text-transform:capitalize">Group</span></h1>
            @endif
        </div>
        <div class="class-section">
            <div class="row">
                <div class="col-lg-6">
                    <div class="carousel-parent">
                        <div class="empty-session-detail-left">

                        </div>
                        <div class="empty-session-detail-right">

                        </div>
                    </div>
                    <div id="owl-carousel-images" class="row owl-carousel">
                        @foreach($class_detail[0]['session']['0']['session_image'] as $image)
                        <div class="col">
                            <div class="class-left-banner px-2 py-3">
                                <img class="class-banner-img" src="{{$image['image']}}" alt="">
                                <!-- <div class="class-banner-content pt-3">
                                    <h1>Yoga</h1>
                                    <div class="class-banner-content-right">
                                        <h1>$100</h1>
                                        <div class="class-banner-content-right-time">
                                            <img class="pr-2" src="{{asset('public/assets/images/clock.svg')}}" alt="">
                                            <p>25min</p>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="class-banner-content">
                        <h1 id="sessionTitle_d">{{$class_detail[0]['category']['title']}}</h1>
                        <div class="class-banner-content-right">
                            <h1 id="sessionPrice_d">${{$class_detail[0]['session'][0]['price']}}</h1>
                            <div class="class-banner-content-right-time">
                                <?php $start_time = $class_detail[0]['session'][0]['start_time'];
                                $end_time = $class_detail[0]['session'][0]['end_time'];
                                $start_datetime = new DateTime(date('Y-m-d') . ' ' . $start_time);
                                $end_datetime = new DateTime(date('Y-m-d') . ' ' . $end_time);
                                $timeDiff = $start_datetime->diff($end_datetime);
                                $hours = $timeDiff->format('%h');
                                $mins = $timeDiff->format('%i');
                                ?>
                                <img class="pr-2" src="{{asset('public/assets/images/clock.svg')}}" alt="">
                                <p id="sessionTime_d">
                                    @if($hours != 0)
                                    {{$hours}} hr
                                    @endif
                                    @if($mins != 0)
                                    {{$mins}} mins
                                    @endif
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="dashboard-header-left trainer-detail-header-left pt-3 pb-5">
                        <h1>Trainer’s Detail</h1>
                    </div>
                    <div class="trainer-detail-wrapper px-2 py-3">
                        <div class="trainer-detail-profile">
                            <div class="row">
                                <div class="col-sm-6 col-xl-7">
                                    <div class="trainer-detail-profile-left">
                                        <img class="mr-2" src="{{$trainer['profile_img']}}" alt="">
                                        <div class="trainer-detail-profile-left-progress py-2 px-2">
                                            <h1>Level</h1>
                                            <!-- <progress id="file" value="72" max="100"> 32% </progress> -->
                                            <p>{{$most_used_difficulty_level}}</p>

                                        </div>
                                        <div class="rating-star">
                                            <?php $rating = $trainer['trainer_profile']['avg_rating']; ?>
                                            @if($rating >= 4.5)
                                            <?php for ($i = 0; $i < 5; $i++) { ?>
                                                <i class="fa fa-star gold pr-1" aria-hidden="true"></i>
                                            <?php } ?>

                                            @elseif($rating >= 3.5)
                                            <?php for ($i = 0; $i < 4; $i++) { ?>
                                                <i class="fa fa-star gold pr-1" aria-hidden="true"></i>
                                            <?php } ?>

                                            @elseif($rating >= 2.5)
                                            <?php for ($i = 0; $i < 3; $i++) { ?>
                                                <i class="fa fa-star gold pr-1" aria-hidden="true"></i>
                                            <?php } ?>

                                            @elseif($rating >= 1.5)
                                            <?php for ($i = 0; $i < 2; $i++) { ?>
                                                <i class="fa fa-star gold pr-1" aria-hidden="true"></i>
                                            <?php } ?>

                                            @elseif($rating >= 0.5)
                                            <?php for ($i = 0; $i < 1; $i++) { ?>
                                                <i class="fa fa-star gold pr-1" aria-hidden="true"></i>
                                            <?php } ?>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col trainer-detail-profile-name px-0 pt-2">
                                        <h1>{{$trainer['name']}}</h1>
                                        <div class="trainer-detail-profile-gender pb-3">
                                            <img class="mr-2" src="{{asset('public/assets/images/profile-icon.svg')}}" alt="">
                                            <p>{{$trainer['gender']}} ,{{$trainer['height']}} </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-5 my-3 my-sm-0">
                                    <div class="trainer-detail-profile-right">
                                        <div class="trainer-detail-profile-right-client text-center">
                                            <p>Clients</p>
                                            <h1>{{$client}}</h1>
                                        </div>
                                        <div class="trainer-detail-profile-right-classes text-center">
                                            <p>Classes</p>
                                            <h1>{{$classes_count}}</h1>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6 trainer-detail-experience px-0 py-2">

                            <h1>3 Years</h1>
                            <h1>{{$trainer['country']}}</h1>
                            <h1>Yoga</h1>

                        </div>
                        <div class="trainer-detail-review">
                            <div class="trainer-detail-review-header py-2">
                                <h1>Reviews</h1>
                            </div>
                            @foreach($review as $reviews)
                            <div class=" trainer-detail-review-wrapper my-2">
                                <div class="trainer-detail-review-left">
                                    <img src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                    <div class="trainer-detail-review-left-content pl-2">
                                        <h1>{{$reviews['user']['name']}}</h1>
                                        <h2>{{$reviews['session']['category']['title']}}</h2>
                                    </div>
                                </div>
                                <div class="trainer-detail-review-right pl-4">
                                    <div class="rating-star">
                                        <?php $remRating = 5 - $reviews['rating']; ?>

                                        <?php for ($i = 0; $i < $reviews['rating']; $i++) { ?>
                                            <i class="fa fa-star gold pr-1" aria-hidden="true"></i>
                                        <?php } ?>
                                        <?php for ($i = 0; $i < $remRating; $i++) { ?>
                                            <i class="fa fa-star pr-1" aria-hidden="true" style="color:#ccc;"></i>
                                        <?php } ?>
                                        <!-- <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i> -->
                                    </div>
                                    <p>{{$reviews['description']}} </p>
                                </div>
                            </div>
                            @endforeach

                        </div>


                    </div>

                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="session-detail-right-wrapper px-2 py-3">
                        <div class="col session-detail-calendar px-2">
                            <div class="row js-slick-carousel">
                                <div class="col">
                                    <div id="0" class="months">
                                        <h1>January</h1>
                                    </div>
                                </div>
                                <div class="col">
                                    <div id="1" class="months">
                                        <h1>February</h1>
                                    </div>
                                </div>
                                <div class="col">
                                    <div id="2" class="months">
                                        <h1>March</h1>
                                    </div>
                                </div>
                                <div class="col">
                                    <div id="3" class="months">
                                        <h1>April</h1>
                                    </div>
                                </div>
                                <div class="col">
                                    <div id="4" class="months">
                                        <h1>May</h1>
                                    </div>
                                </div>
                                <div class="col">
                                    <div id="5" class="months">
                                        <h1>June</h1>
                                    </div>
                                </div>
                                <div class="col">
                                    <div id="6" class="months">
                                        <h1>July</h1>
                                    </div>
                                </div>
                                <div class="col">
                                    <div id="7" class="months">
                                        <h1>August</h1>
                                    </div>
                                </div>
                                <div class="col">
                                    <div id="8" class="months">
                                        <h1>September</h1>
                                    </div>
                                </div>
                                <div class="col">
                                    <div id="9" class="months">
                                        <h1>October</h1>
                                    </div>
                                </div>
                                <div class="col">
                                    <div id="10" class="months">
                                        <h1>November</h1>
                                    </div>
                                </div>
                                <div class="col">
                                    <div id="11" class="months">
                                        <h1>December</h1>
                                    </div>
                                </div>
                            </div>
                            <div id="owl-cal" class="row owl-carousel mt-3 appendDays">

                            </div>
                            <!-- <div id="demo-1-week"></div> -->
                        </div>
                        <div class="trainer-class-time ">
                            <div class="trainer-class-time-header pt-4 pl-5">
                                <h1 class="py-2 selectedDate"><?php echo date('D d, F'); ?></h1>
                            </div>
                            <div class="trainer-class-time-wrapper pl-5 pr-sm-2 pr-1" id="session-list">
                                @if(isset($class_detail) && !empty($class_detail))
                                <!-- Loop div starts here  -->
                                @foreach($class_detail[0]['session'] as $session)

                                <div class="trainer-class-time-card-box my-2 " style="cursor: pointer;">
                                    <div class="trainer-class-time-card trainer-class-active px-2 py-2 pr-3 sessionDiv_d" data-src="{{$session['id']}}">
                                        <div class="trainer-class-time-card-left">
                                            <div class="trainer-class-time-card-left-img">
                                                <!-- <img src="{{asset('public/assets/images/session-one.jpg')}}" alt=""> -->
                                                <img src="{{$session['session_image'][0]['image']}}" alt="">

                                            </div>
                                            <div class="trainer-class-time-card-left-content pl-2">
                                                <h2>{{date('h:i',strtotime($session['start_time']))}} {{$session['start_meridiem']}}-{{date('h:i',strtotime($session['end_time']))}} {{$session['end_meridiem']}}</h2>
                                            </div>
                                        </div>
                                        <div class="trainer-class-time-card-right">

                                            @if($class_detail[0]['session'][0]['type']==0)
                                            <img class="trainer-class-time-card-right-one" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            @else

                                            <img class="trainer-class-time-card-right-one" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-two" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-three" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-four" src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                                            <img class="" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <div class="trainer-class-time-card-right-counter">
                                                <h1>+5</h1>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="trainer-class-times">
                                        <h3>{{date('h',strtotime($session['start_time']))}}{{$session['start_meridiem']}}</h3>
                                    </div>
                                    <div class="trainer-class-time-border"></div>
                                </div>
                                @endforeach
                                <!-- Loop div ends here  -->
                                @else
                                <div class="trainer-class-time-card-box no-class my-2 py-2">
                                    <div class="no-class-border mt-3"></div>
                                    <div class="trainer-class-times">
                                        <h3>9am</h3>

                                    </div>
                                    <div class="trainer-class-time-border"></div>
                                </div>
                                @endif
                            </div>

                            <input type="hidden" value="{{$class_detail[0]['trainer']['id']}}" id="trainer_id">
                            <!-- <input type="text" value="{{$class_detail[0]['trainer']['id']}}" id="day"> -->

                            <div class="trainer-class-time-btn pt-4 pb-3">
                                <a href="{{url('/dashboard/payment')}}" class="btn" id="confirmBookingBtn">Confirm Booking</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<form action="{{route('dashboard/payment')}}" id="bookSessionForm" method="post">
    @csrf
    <input type="hidden" name="session_id" id="sessionId" value="">
    <input type="hidden" name="session_date" id="sessionDate" value="">
    <!-- <input type="hidden" name="trainerid" value="{{$class_detail[0]['trainer']['id']}}"> -->
</form>
@endsection
@section('insertsfooter')
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.1/jquery.flexslider.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
<script>
    // Owl Carousel Code Starts here 
    $(document).ready(function() {
        $(document).on('click', "#confirmBookingBtn", function(e) {
            e.preventDefault();
            $("#bookSessionForm").submit();
        })
        const currentDate = new Date();
        const days = [];

        // for (let i = 0; i < 365; i++) {
        //     const date = new Date(currentDate);
        //     date.setDate(currentDate.getDate() + i);
        //     days.push(date);
        // }

        var daysData = @json($classSession);
        var startTimeOfSession = @json($class_detail[0]['class_session'][0]['start_time']);
        var sessionDay = @json($class_detail[0]['class_session'][0]['day']);
        var active;
        $("#owl-carousel-images").owlCarousel({
            items: 1,
            loop: true
        });
        var Year = new Date().getFullYear();
        var Month = new Date().getMonth();
        var todayDay = String(new Date().getDate()).padStart(2, '0');
        var today = new Date();
        var timeHours = today.getHours();
        var timeMin = today.getMinutes();

        var currentTime = timeHours + ":" + timeMin + ":00";
        var weekdays = new Array(7);
        weekdays[0] = "Sun";
        weekdays[1] = "Mon";
        weekdays[2] = "Tues";
        weekdays[3] = "Wed";
        weekdays[4] = "Thur";
        weekdays[5] = "Fri";
        weekdays[6] = "Sat";

        var reverseWeekdays = new Array(7);
        reverseWeekdays["Sun"] = 0;
        reverseWeekdays["Mon"] = 1;
        reverseWeekdays["Tues"] = 2;
        reverseWeekdays["Wed"] = 3;
        reverseWeekdays["Thur"] = 4;
        reverseWeekdays["Fri"] = 5;
        reverseWeekdays["Sat"] = 6;

        // Check if today is day of session 
        if (today.getDay() == reverseWeekdays[sessionDay]) {
            if (currentTime > startTimeOfSession) {
                todayDay = parseInt(todayDay) + 7;
            } else {
                todayDay = todayDay;
            }
        } else if (today.getDay() < reverseWeekdays[sessionDay]) {
            daysDifference = reverseWeekdays[sessionDay] - today.getDay();
            todayDay = parseInt(todayDay) + parseInt(daysDifference);
        } else {
            daysDifference = (7 - today.getDay()) + reverseWeekdays[sessionDay];
            todayDay = parseInt(todayDay) + parseInt(daysDifference);
        }

        getDaysInMonth(Month, Year);
        $("#" + Month).addClass('month-active');

        function getDaysInMonth(month, year) {
            var date = new Date(year, month, 1);
            var days = [];
            // Old code for getting days of month 
            // while (date.getMonth() === month) {
            //     days.push(new Date(date));
            //     date.setDate(date.getDate() + 1);
            // }
            for (let i = 0; i < 365; i++) { //get next 365 days data
                const date = new Date(currentDate);
                date.setDate(currentDate.getDate() + i);
                days.push(date);
            }
            if (todayDay > days.length) {
                todayDay = todayDay - days.length;
            }
            // $(".appendDays").empty();
            var firstSessionDayCheck = 0
            $(days).each(function(i, e) {
                var weekdays = new Array(7);
                weekdays[0] = "Sun";
                weekdays[1] = "Mon";
                weekdays[2] = "Tues";
                weekdays[3] = "Wed";
                weekdays[4] = "Thur";
                weekdays[5] = "Fri";
                weekdays[6] = "Sat";

                // Check if this iteration date has Session registered 
                if (daysData.includes(weekdays[e.getDay()])) {
                    active = 'day-class';
                    firstSessionDayCheck++; //if session day is greater than current, iterate ++
                } else {
                    active = "";
                }
                if (daysData.includes(weekdays[e.getDay()]) && firstSessionDayCheck == 1) {
                    activeBlack = 'day-active';
                } else {
                    activeBlack = "";

                }
                var convertedDate = e.getFullYear() + "-" + parseInt(e.getMonth() + 1) + "-" + e.getDate();
                let div = `<div class="col pb-3">
                                    <div class="day-number ${active} ${activeBlack}" data-src="${convertedDate}">
                                        <h1>${e.getDate()}</h1>
                                        <h2 class="day-name">${weekdays[e.getDay()]}</h2>
                                    </div>
                                </div>`;
                $(".appendDays").append(div);
            });
            $('#owl-cal').trigger('destroy.owl.carousel');
            $('#owl-cal').owlCarousel({
                items: 10,
                autoWidth: true
            });
            if (month == new Date().getMonth()) {
                // $('#owl-cal').trigger('to.owl.carousel', todayDay - 8);
            } else {
                let date = new Date(year, month - 1, 0);
                scrollDays = date.getDate();
                $('.months').removeClass('month-active');
                $('#' + month).addClass('month-active');
                $('#owl-cal').trigger('to.owl.carousel', scrollDays);
            }
        }
        let isOver = 0;
        $('#owl-cal').on('changed.owl.carousel', function(e) {
            var current = e.item.index + 8;
            total = e.item.count;
            if (current === total) {
                let currentMonth = new Date().getMonth();
                let nextMonth = currentMonth + 1;
                getDaysInMonth(parseInt(nextMonth), Year)
            }
        });
        $(document).on('click', '.months', function() {
            var monthIndex = $(this).attr('id');
            $(".months").removeClass('month-active');
            $("#" + monthIndex).addClass('month-active');
            $(".appendDays").empty();
            getDaysInMonth(parseInt(monthIndex), Year)

        });


        // Get Session detail in Card on Left 
        $(document).on('click', '.sessionDiv_d', function() {
            $("#sessionId").val($(this).attr('data-src'));
            // $('.loaderDiv').show();
            class_id = $(this).attr('data-src');
            $('.sessionDiv_d').removeClass('trainer-class-active');
            $(this).addClass('trainer-class-active');
            // alert(class_id);

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: `{{route('classDetails')}}`,
                type: "POST",
                data: {
                    class_id: class_id
                },
                cache: false,
                success: function(response) {
                    // alert('coming');

                    if (response.success == true) {
                        console.log(response)
                        $("#sessionTitle_d").text(response.data[0].category['title']);
                        $("#sessionPrice_d").text('$' + response.data[0].price);
                        if (response.data[0].type == 0) {

                            $("#sessionType_d").text('One to one');
                        } else {
                            $("#sessionType_d").text('Group');
                        }
                        // alert(response.data[0].category['title']);
                        var hrs = response.data.hours;
                        var mins = response.data.minutes;
                        var actualHours, actualMinutes = '';
                        if (hrs != '0') {
                            actualHours = hrs + ' hr';
                        }
                        if (mins != '0') {
                            actualMinutes = mins + ' mins';
                        }
                        $("#sessionTime_d").text(actualHours + ' ' + actualMinutes);
                        var classImages = response.data[0].session_image;
                        // alert(classImages);
                        $('#owl-carousel-images').empty();
                        $(classImages).each(function(i, e) {
                            let div = `<div class="col">
                            <div class="class-left-banner px-2 py-3">
                                <img class="class-banner-img" src="${e.image}" alt="">
                            </div>
                        </div>`;
                            $("#owl-carousel-images").append(div);
                        });
                        $("#owl-carousel-images").trigger('destroy.owl.carousel');
                        $("#owl-carousel-images").owlCarousel({
                            items: 1,
                            loop: true
                        });
                    } else if (response.success == false) {
                        toastr.error(dataResult.message);
                    }
                },
                error: function(jqXHR, exception) {
                    // $('.loaderDiv').hide();
                    toastr.error(jqXHR.responseJSON.message);
                }

            });
        })
        ////////........ get day session............////////
        $(document).on('click', '.day-class', function() {
            $("#sessionDate").val($(this).attr('data-src'));
            var trainer = $('#trainer_id').val();
            var day = $(this).find('.day-name').html();
            $('.day-number').removeClass('day-active');
            $(this).addClass('day-active');
            if (trainer != "") {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: `{{route('get_day_session')}}`,
                    type: "POST",
                    data: {
                        trainer: trainer,
                        day: day,
                    },
                    cache: false,
                    success: function(response) {
                        if (response.success == true) {
                            // var start_time = date('h:i', strtotimeresponse.data[0].start_time);

                            var start_time = response.data[0].start_time;
                            var start_meridiem = response.data[0].start_meridiem;

                            var end_time = response.data[0].end_meridiem;
                            var end_meridiem = response.data[0].end_meridiem;
                            // var short_starttime = start_time.split(':',2);
                            // alert(short_starttime);
                            var classImages = response.data[0].session_image[0].image;

                            $('#session-list').empty();
                            $(response.data).each(function(i, e) {
                                let timeStart = e.start_time;
                                let convertedTimeStart = new Date("1970-01-01 " + timeStart).toLocaleTimeString("en-US", {
                                    hour: '2-digit',
                                    minute: '2-digit'
                                });
                                let timeStartSession = e.start_time;
                                let convertedTimeStartSession = new Date("1970-01-01 " + timeStartSession).toLocaleTimeString("en-US", {
                                    hour: '2-digit'
                                });
                                let timeEnd = e.end_time;
                                let convertedTimeEnd = new Date("1970-01-01 " + timeEnd).toLocaleTimeString("en-US", {
                                    hour: '2-digit',
                                    minute: '2-digit'
                                });
                                let div = `<div class="trainer-class-time-card-box my-2 "  style="cursor: pointer;">
                                    <div class="trainer-class-time-card trainer-class-active px-2 py-2 pr-3 sessionDiv_d" data-src="${e.id}">
                                        <div class="trainer-class-time-card-left">
                                            <div class="trainer-class-time-card-left-img">
                                                <img src="${classImages}" alt="">
                                            </div>
                                            <div class="trainer-class-time-card-left-content pl-2">
                                                <h2>${convertedTimeStart} - ${convertedTimeEnd} </h2>
                                            </div>
                                        </div>
                                        <div class="trainer-class-time-card-right">
                                            <img class="trainer-class-time-card-right-one" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-two" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-three" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <img class="trainer-class-time-card-right-four" src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                                            <img class="" src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                            <div class="trainer-class-time-card-right-counter">
                                                <h1>+5</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="trainer-class-times">
                                        <h3>${convertedTimeStartSession} </h3>
                                    </div>
                                    <div class="trainer-class-time-border"></div>
                                </div>`;
                                $("#session-list").append(div);
                            });
                            $("#owl-carousel-images").trigger('destroy.owl.carousel');
                            $("#owl-carousel-images").owlCarousel({
                                items: 1,
                                loop: true
                            });
                        } else if (response.success == false) {
                            toastr.error(dataResult.message);
                        }
                    },
                    error: function(jqXHR, exception) {
                        // $('.loaderDiv').hide();
                        // toastr.error(jqXHR.responseJSON.message);
                    }
                });
            } else {
                // alert('Please fill all the field !');
                // $('.loaderDiv').hide();
                toastr.error("Please Fill All Fields.");
            }
        });

    });

    const slickSettings = {
        arrows: true,
        infinite: true,
        prevArrow: "<i class='fa fa-arrow-left slick-prev arrow ser-left-session ' aria-hidden='true'></i> ",
        nextArrow: "<i class='fa fa-arrow-right slick-next arrow ser-right-session' aria-hidden='true'></i>",
        slidesToShow: 1,
        slidesToScroll: 1,
    }
    $('.js-slick-carousels').slick(slickSettings);

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
    $('.js-slick-carousel').slick(slickSetting);
</script>
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
<script>
    $('.sidenav .nav-item:nth-of-type(3)').addClass('active')
</script>
<script>
    $('.session').click(function() {
        var session_id = $(this).find('.session_id').val();

        $("#session").val(session_id);


    });
</script>
@endsection