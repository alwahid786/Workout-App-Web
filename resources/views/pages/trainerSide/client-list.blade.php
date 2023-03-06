@extends('layouts.trainerSide.default')
<!-- <link rel="stylesheet" href="{{asset('public/assets/trainercss/client.css')}}"> -->
<link rel="stylesheet" href="{{asset('public/assets/css/nice-select.css')}}">
<style>
    body {
        background-color: #F2F2F2 !important;
    }

    .client-list-heading h1 {
        color: #E37048;
        margin-bottom: 0px;
        font-size: 1.5rem;
        font-weight: 500;
    }

    .client-list-row {
        display: grid !important;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)) !important;
        grid-gap: 15px !important;
        align-items: stretch;
    }

    .client-list-card {
        background-color: white;
        border-radius: 10px;
        display: flex;
        align-items: center;
        position: relative;
    }

    .client-list-card-left img {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        object-fit: cover;
    }

    .client-list-card-right h1:first-of-type {
        font-size: 1.2rem;
        color: #E37048;
        padding-right: 25px;
    }

    .client-list-card-right h1 {
        font-size: 0.9rem;
    }

    .right-dots {
        position: absolute;
        right: 15px;
        top: 18px;
    }

    .c-dropdown {
        position: relative;
        display: inline-block;
    }

    .c-dropdown-content {
        display: none;
        position: absolute;
        min-width: 100px;
        z-index: 1;
        right: 0;
        overflow: hidden;
        top: 20px;
        background: #FFFFFF;
        border: 1px solid #E6E6E6;
        box-shadow: 2px 4px 3px rgba(0, 0, 0, 0.05);
        border-radius: 10px;
    }

    .c-dropdown-content a {
        width: 100%;
        text-decoration: none !important;
        box-shadow: none;
        font-size: 1rem;
        color: #BDBDBD;
        border: none;
        padding: 0.5rem 0rem;
    }

    .c-dropdown-content a:hover {
        background-color: #E37048;
        color: white;
    }

    .c-dropdown-content a:first-of-type {
        border-bottom: 1px solid #BDBDBD !important;
    }

    .c-dropdown .dots {
        cursor: pointer;
    }

    .c-dropdown .dots ul li {
        list-style: none;
        width: 4px;
        height: 4px;
        border-radius: 50%;
        background-color: #A09F9F;
        cursor: pointer;
    }

    .c-dropdown .dots ul li:nth-of-type(2) {
        margin: 3px 0px;
    }

    .right-dots:hover .c-dropdown-content {
        display: block;
    }

    .client-list-filter .nice-select.wide {
        height: 50px !important;
        border: 1px solid #CECECE !important;
        border-radius: 10px !important;
        justify-content: flex-start !important;
        background: #F8F8F8;
    }

    .s-select span {
        color: #666666 !important;
        font-weight: normal !important;
    }

    .nice-select:after {
        border-bottom: 2px solid #848484;
        border-right: 2px solid #848484;
        content: '';
        display: block;
        height: 9px !important;
        margin-top: -4px;
        pointer-events: none;
        position: absolute;
        right: 20px !important;
        top: 50%;
        -webkit-transform-origin: 66% 66%;
        -ms-transform-origin: 66% 66%;
        transform-origin: 66% 66%;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
        -webkit-transition: all 0.15s ease-in-out;
        transition: all 0.15s ease-in-out;
        width: 9px !important;

    }

    .client-list-filter input {
        height: 50px;
        border-radius: 10px;
        padding-left: 40px;
        box-shadow: none !important;
        background: #F8F8F8;
        border: 1px solid rgba(0, 0, 0, 0.2) !important;
    }

    .left-inner-addons {
        position: relative;
        width: 100%;
    }

    .left-inner-addons i {
        position: absolute;
        top: 50%;
        left: 10px;
        color: #E37048;
        transform: translate(0%, -50%);
    }

    @media screen and (max-width:576px) {
        .client-list-row {
            display: grid !important;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)) !important;
            grid-gap: 10px !important;
            align-items: stretch;
        }

        .client-list-card-left img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            object-fit: cover;
        }

        .client-list-card-right h1:first-of-type {
            font-size: 1rem;
            color: #E37048;
            padding-right: 25px;
        }

        .client-list-card-right h1 {
            font-size: 0.7rem;
        }

        .client-list-card-right img {
            width: 12px;
        }
    }
</style>
@section('content')
@include('includes.trainerSide.navbar')
<div class="content-wrapper py-3">
    <div class="container-fluid ">
        <div class="col-12 client-list-heading pl-0">
            <h1>List Of Clients</h1>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 client-list-filter my-3">
                <select class="wide s-select form-control  search_by">
                    @foreach($categories as $category)
                    <option value="">{{$category['title']}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 col-lg-4 client-list-filter my-3">
                <div class="left-inner-addons">
                    <input type="text" class="form-control search_by" placeholder="Search here" id="search_by">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </div>

            </div>
        </div>

        <div class="client-list-row append_client" id="client">
            @foreach($clients as $client)
            <div class="client-list-card p-3">
                <div class="client-list-card-left pr-3">
                    <img src="{{$client['user']['profile_img']}}" alt="">
                </div>
                <div class="client-list-card-right">

                    <h1>{{$client['user']['name']}}</h1>
                    <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c1.png')}}" alt="">{{$client['session']['category']['title']}}</h1>
                    <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c2.png')}}" alt="">{{$client['session']['day']}}, {{date('h:i',strtotime($client['session']['start_time']))}} {{$client['session']['start_meridiem']}}- {{date('h:i',strtotime($client['session']['end_time']))}} {{$client['session']['end_meridiem']}}</h1>
                    <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c3.png')}}" alt="">{{$client['user']['workout_location']}}</h1>
                </div>
                <div class="right-dots">
                    <div class="c-dropdown">
                        <div class="dots px-3">
                            <ul>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                        <div class="c-dropdown-content">

                            <a href="{{url('/trainer/profile/'.$client['user']['id'])}}" class="btn">View</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- <div class="client-list-card p-3">
                <div class="client-list-card-left pr-3">
                    <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                </div>
                <div class="client-list-card-right">

                    <h1>John Smith</h1>
                    <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c1.png')}}" alt="">Cardio</h1>
                    <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c2.png')}}" alt="">Tuesday, 4PM-5PM</h1>
                    <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c3.png')}}" alt="">Torronto</h1>
                </div>
                <div class="right-dots">
                    <div class="c-dropdown">
                        <div class="dots px-3">
                            <ul>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                        <div class="c-dropdown-content">

                            <a href="{{url('/trainer/profile')}}" class="btn">View</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="client-list-card p-3">
                <div class="client-list-card-left pr-3">
                    <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                </div>
                <div class="client-list-card-right">

                    <h1>John Smith</h1>
                    <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c1.png')}}" alt="">Cardio</h1>
                    <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c2.png')}}" alt="">Tuesday, 4PM-5PM</h1>
                    <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c3.png')}}" alt="">Torronto</h1>
                </div>
                <div class="right-dots">
                    <div class="c-dropdown">
                        <div class="dots px-3">
                            <ul>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                        <div class="c-dropdown-content">

                            <a href="{{url('/trainer/profile')}}" class="btn">View</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="client-list-card p-3">
                <div class="client-list-card-left pr-3">
                    <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                </div>
                <div class="client-list-card-right">

                    <h1>John Smith</h1>
                    <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c1.png')}}" alt="">Cardio</h1>
                    <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c2.png')}}" alt="">Tuesday, 4PM-5PM</h1>
                    <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c3.png')}}" alt="">Torronto</h1>
                </div>
                <div class="right-dots">
                    <div class="c-dropdown">
                        <div class="dots px-3">
                            <ul>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                        <div class="c-dropdown-content">

                            <a href="{{url('/trainer/profile')}}" class="btn">View</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="client-list-card p-3">
                <div class="client-list-card-left pr-3">
                    <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                </div>
                <div class="client-list-card-right">

                    <h1>John Smith</h1>
                    <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c1.png')}}" alt="">Cardio</h1>
                    <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c2.png')}}" alt="">Tuesday, 4PM-5PM</h1>
                    <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c3.png')}}" alt="">Torronto</h1>
                </div>
                <div class="right-dots">
                    <div class="c-dropdown">
                        <div class="dots px-3">
                            <ul>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                        <div class="c-dropdown-content">

                            <a href="{{url('/trainer/profile')}}" class="btn">View</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="client-list-card p-3">
                <div class="client-list-card-left pr-3">
                    <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                </div>
                <div class="client-list-card-right">

                    <h1>John Smith</h1>
                    <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c1.png')}}" alt="">Cardio</h1>
                    <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c2.png')}}" alt="">Tuesday, 4PM-5PM</h1>
                    <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c3.png')}}" alt="">Torronto</h1>
                </div>
                <div class="right-dots">
                    <div class="c-dropdown">
                        <div class="dots px-3">
                            <ul>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                        <div class="c-dropdown-content">

                            <a href="{{url('/trainer/profile')}}" class="btn">View</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="client-list-card p-3">
                <div class="client-list-card-left pr-3">
                    <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                </div>
                <div class="client-list-card-right">

                    <h1>John Smith</h1>
                    <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c1.png')}}" alt="">Cardio</h1>
                    <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c2.png')}}" alt="">Tuesday, 4PM-5PM</h1>
                    <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c3.png')}}" alt="">Torronto</h1>
                </div>
                <div class="right-dots">
                    <div class="c-dropdown">
                        <div class="dots px-3">
                            <ul>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                        <div class="c-dropdown-content">

                            <a href="{{url('/trainer/profile')}}" class="btn">View</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="client-list-card p-3">
                <div class="client-list-card-left pr-3">
                    <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                </div>
                <div class="client-list-card-right">

                    <h1>John Smith</h1>
                    <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c1.png')}}" alt="">Cardio</h1>
                    <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c2.png')}}" alt="">Tuesday, 4PM-5PM</h1>
                    <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c3.png')}}" alt="">Torronto</h1>
                </div>
                <div class="right-dots">
                    <div class="c-dropdown">
                        <div class="dots px-3">
                            <ul>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                        <div class="c-dropdown-content">

                            <a href="{{url('/trainer/profile')}}" class="btn">View</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="client-list-card p-3">
                <div class="client-list-card-left pr-3">
                    <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                </div>
                <div class="client-list-card-right">

                    <h1>John Smith</h1>
                    <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c1.png')}}" alt="">Cardio</h1>
                    <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c2.png')}}" alt="">Tuesday, 4PM-5PM</h1>
                    <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c3.png')}}" alt="">Torronto</h1>
                </div>
                <div class="right-dots">
                    <div class="c-dropdown">
                        <div class="dots px-3">
                            <ul>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                        <div class="c-dropdown-content">

                            <a href="{{url('/trainer/profile')}}" class="btn">View</a>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
@endsection
@section('insertsfooter')
<script src="{{ asset('public/assets/js/jquery.nice-select.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.s-select').niceSelect();
    });
</script>
<script>
    $('.sidenav .nav-item:nth-of-type(3)').addClass('active')
</script>
<script>
    $('#search_by').on('change', function() {

        // e.preventDefault();
        var search_by = $('#search_by').val();

        if (search_by != "") {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: `{{route('trainer/client')}}`,
                type: "POST",
                data: {
                    search_by: search_by,
                },
                cache: false,
                success: function(dataResult) {

                    $('#client').empty();
                    var start_time = dataResult.data.client[0].session.start_time;
                    // var start_meridiem = dataResult.data.client[0].session.start_meridiem;
                    var end_time = dataResult.data.client[0].session.end_time;

                    $(dataResult.data.client).each(function(i, e) {
                        // console.log(e.session.category.title);
                        // alert(JSON.stringify(e.user))
                        let timeStart = start_time;

                        let convertedTimeStart = new Date("1970-01-01 " + timeStart).toLocaleTimeString("en-US", {
                            hour: '2-digit',
                            minute: '2-digit'
                        });

                        let timeEnd = end_time;
                        let convertedTimeEnd = new Date("1970-01-01 " + timeEnd).toLocaleTimeString("en-US", {
                            hour: '2-digit',
                            minute: '2-digit'
                        });
                        let div =
                            `<div class="client-list-card p-3">
                <div class="client-list-card-left pr-3">
                    <img src="${e.user.profile_img}" alt="">
                </div>
                <div class="client-list-card-right">

                    <h1>${e.user.name}</h1>
                    <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c1.png')}}" alt="">${e.session.category.title}</h1>
                    <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c2.png')}}" alt="">${e.session.day}, ${convertedTimeStart} -  ${convertedTimeEnd} </h1>
                    <h1> <img class="mr-2" src="{{asset('public/assets/trainerimages/c3.png')}}" alt="">${e.user.workout_location}</h1>
                </div>
                <div class="right-dots">
                    <div class="c-dropdown">
                        <div class="dots px-3">
                            <ul>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                        <div class="c-dropdown-content">

                            <a href="{{url('/trainer/profile/'.$client['user']['id'])}}" class="btn">View</a>
                        </div>
                    </div>
                </div>
            </div>`
                        let apend = $(".append_client").append(div);
                        // console.log(div);
                    });


                    // window.location.href = `{{url('/trainer/clientlist')}}`;
                },
                error: function(jqXHR, exception) {

                    toastr.error(jqXHR.responseJSON.message);
                }
            });
        } else {
            toastr.error('Please fill all the field !');
        }
    });
</script>
@endsection