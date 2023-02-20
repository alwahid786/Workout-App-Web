@extends('layouts.userdashboard.default')
@section('content')
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.1/flexslider.css">
<style>
    .trainer-search {
        position: absolute;
        right: 0;
        border-radius: 30px;
        background: transparent !important;
        border: 1px solid #fff !important;
        color: #fff !important;
        height: 40px;
        box-shadow: none !important;
        outline: none !important;
        width: 50%;
    }

    .trainer-search::placeholder {
        color: #fff !important;

    }
</style>
@include('includes.userdashboard.navbar')
<div class="content-wrapper">
    <div class="container-fluid mb-4">
        <div class="dashboard-header py-3">
            <div class="row">
                <div class="col-sm-4">
                    <div class="dashboard-header-left">
                        <h1>Explore</h1>
                    </div>
                </div>
                <div class="col-sm-8 text-right">
                    <div class="dashboard-header-right">
                        <a href="" class="active">Grid View</a>
                        <a href="{{route('mapViewPage')}}">Map View</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="dashboard-rated-trainer py-4 px-2">
            <div class="row">
                <div class="col-xl-4 text-center text-xl-left">
                    <div class="dashboard-rated-trainer-left px-3 py-4 ">
                        <h1>Our Top Rated
                            <span>Trainers</span>
                        </h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="row js-slick-carousel">
                        @foreach($trainers as $trainer_data)
                        <div class="col ">
                            <div class="trainer-card">
                                <div class="trainer-card-left p-2">
                                    <h1>{{$trainer_data['name']}}</h1>
                                    <div class="rating-star pb-2">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <p>{{$trainer_data['country']}},{{$trainer_data['state']}}</p>
                                    <p>{{$trainer_data['about']}} </p>
                                    <a href="{{url('/dashboard/trainer-detail/'.$trainer_data['id'])}}" class="">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                                <div class="trainer-card-right">
                                    <img class="" src="{{asset('public/assets/images/rating-right.png')}}" alt="image">
                                    <img class="badge-img" src="{{asset('public/assets/images/badge.svg')}}" alt="image">
                                    <a href="{{url('/dashboard/trainer-detail/'.$trainer_data['id'])}}" class="btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <div class="dashboard-session mt-4 py-4 px-3 px-sm-3">
            <div class="dashboard-layer-left"></div>
            <div class="dashboard-layer-right"></div>
            <div class="dashboard-session-header px-3 pb-3 pb-sm-3">
                <h1>Sessions</h1>
            </div>
            <div class="row js-slick-carousels px-sm-5">

                @foreach($class as $classes)
                <div class="col">
                    <div class="session-card p-2">
                        <div class="session-card-img">
                            <img class="" src="{{asset('public/assets/images/rating-right.png')}}" alt="image">
                            <div class="session-card-amount">
                                <h1>${{$classes['session']['price']}}</h1>
                            </div>
                        </div>

                        <div class="session-card-inner">
                            <div class="session-card-inner-name my-3">

                                <h1>{{$classes['category']['title']}}</h1>
                                <p>{{$classes['trainer']['name']}}</p>
                            </div>
                            <div class="rating-star my-3">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="session-card-inner-link my-3">
                                <a href="{{url('/dashboard/class-detail/'.$classes['trainer']['id']. '/'.$classes['session']['day'])}}">Book Now</a>
                            </div>
                        </div>
                        <p class="session-card-text">{{$classes['trainer']['about']}}</p>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <div class="dashboard-session mt-4 py-4 px-3 px-sm-3">
            <div class="dashboard-layer-left"></div>
            <div class="dashboard-layer-right"></div>
            <div class="dashboard-session-header px-3 pb-3 pb-sm-3">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Trainers</h1>
                    </div>
                    <form action="{{route('dashboard')}}">

                        <div class="col-sm-6 ">
                            <input class="trainer-search pl-3 form-control" type="text" name="" placeholder="Search Here">
                        </div>
                    </form>
                </div>

            </div>
            <div class="row js-slick-carousels px-sm-5 pt-3">
                @foreach($trainers as $trainer_data)

                <div class="col">
                    <div class="session-card p-2">
                        <div class="session-card-img">
                            <img class="" src="{{asset('public/assets/images/rating-right.png')}}" alt="image">
                            <div class="session-card-amount">
                                <h1>$100</h1>
                            </div>
                        </div>

                        <div class="session-card-inner">
                            <div class="session-card-inner-name my-3">
                                <h1>{{$trainer_data['name']}}</h1>
                                <p>yoga</p>
                            </div>
                            <div class="rating-star my-3">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="session-card-inner-link my-3">
                                <a href="{{url('/dashboard/class-detail/'.$trainer_data['id'])}}">Book Now</a>
                            </div>
                        </div>
                        <p class="session-card-text">{{$trainer_data['about']}}</p>
                    </div>
                </div>
                @endforeach

                <!-- <div class="categories-card p-3">

                    <div class="categories-card-heading py-3">
                        <div class="heading-left-section">
                            <p>country -state</p>
                            <h1>name</h1>
                            <p>Sepcialist</p>
                        </div>
                        <div class="rating-stars pb-5">
                            <i class="fa fa-star " aria-hidden="true"></i>
                            <i class="fa fa-star " aria-hidden="true"></i>
                            <i class="fa fa-star " aria-hidden="true"></i>
                            <i class="fa fa-star " aria-hidden="true"></i>
                            <i class="fa fa-star " aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="categories-card-text">
                        <p>about </p>
                    </div>

                    <div class="categories-card-exp">

                        <p class="text-center">5+ Years Experience</p>
                    </div>
                    <div class="text-center my-4">
                        <a class="categories-card-btn" href="{{url('/dashboard/trainer-detail/')}}">View Detail</a>
                    </div>
                </div> -->
                <!-- <div class="col">
                    <div class="session-card p-2">
                        <div class="session-card-img">
                            <img class="" src="{{asset('public/assets/images/rating-right.png')}}" alt="image">
                            <div class="session-card-amount">
                                <h1>$100</h1>
                            </div>
                        </div>

                        <div class="session-card-inner">
                            <div class="session-card-inner-name my-3">
                                <h1>John Smith</h1>
                                <p>Yoga</p>
                            </div>
                            <div class="rating-star my-3">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="session-card-inner-link my-3">
                                <a href="{{url('/dashboard/class-detail')}}">Book Now</a>
                            </div>
                        </div>
                        <p class="session-card-text">Lorem ipsum dolor sit amet, consectetur ascing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur ascing elit, sed do eiusmod tempor </p>
                    </div>
                </div>
                <div class="col">
                    <div class="session-card p-2">
                        <div class="session-card-img">
                            <img class="" src="{{asset('public/assets/images/rating-right.png')}}" alt="image">
                            <div class="session-card-amount">
                                <h1>$100</h1>
                            </div>
                        </div>

                        <div class="session-card-inner">
                            <div class="session-card-inner-name my-3">
                                <h1>John Smith</h1>
                                <p>Yoga</p>
                            </div>
                            <div class="rating-star my-3">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="session-card-inner-link my-3">
                                <a href="{{url('/dashboard/class-detail')}}">Book Now</a>
                            </div>
                        </div>
                        <p class="session-card-text">Lorem ipsum dolor sit amet, consectetur ascing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur ascing elit, sed do eiusmod tempor </p>
                    </div>
                </div>
                <div class="col">
                    <div class="session-card p-2">
                        <div class="session-card-img">
                            <img class="" src="{{asset('public/assets/images/rating-right.png')}}" alt="image">
                            <div class="session-card-amount">
                                <h1>$100</h1>
                            </div>
                        </div>

                        <div class="session-card-inner">
                            <div class="session-card-inner-name my-3">
                                <h1>John Smith</h1>
                                <p>Yoga</p>
                            </div>
                            <div class="rating-star my-3">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="session-card-inner-link my-3">
                                <a href="{{url('/dashboard/class-detail')}}">Book Now</a>
                            </div>
                        </div>
                        <p class="session-card-text">Lorem ipsum dolor sit amet, consectetur ascing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur ascing elit, sed do eiusmod tempor </p>
                    </div>
                </div>
                <div class="col">
                    <div class="session-card p-2">
                        <div class="session-card-img">
                            <img class="" src="{{asset('public/assets/images/rating-right.png')}}" alt="image">
                            <div class="session-card-amount">
                                <h1>$100</h1>
                            </div>
                        </div>

                        <div class="session-card-inner">
                            <div class="session-card-inner-name my-3">
                                <h1>John Smith</h1>
                                <p>Yoga</p>
                            </div>
                            <div class="rating-star my-3">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="session-card-inner-link my-3">
                                <a href="{{url('/dashboard/class-detail')}}">Book Now</a>
                            </div>
                        </div>
                        <p class="session-card-text">Lorem ipsum dolor sit amet, consectetur ascing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur ascing elit, sed do eiusmod tempor </p>
                    </div>
                </div>
                <div class="col">
                    <div class="session-card p-2">
                        <div class="session-card-img">
                            <img class="" src="{{asset('public/assets/images/rating-right.png')}}" alt="image">
                            <div class="session-card-amount">
                                <h1>$100</h1>
                            </div>
                        </div>

                        <div class="session-card-inner">
                            <div class="session-card-inner-name my-3">
                                <h1>John Smith</h1>
                                <p>Yoga</p>
                            </div>
                            <div class="rating-star my-3">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="session-card-inner-link my-3">
                                <a href="{{url('/dashboard/class-detail')}}">Book Now</a>
                            </div>
                        </div>
                        <p class="session-card-text">Lorem ipsum dolor sit amet, consectetur ascing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur ascing elit, sed do eiusmod tempor </p>
                    </div>
                </div>
                <div class="col">
                    <div class="session-card p-2">
                        <div class="session-card-img">
                            <img class="" src="{{asset('public/assets/images/rating-right.png')}}" alt="image">
                            <div class="session-card-amount">
                                <h1>$100</h1>
                            </div>
                        </div>

                        <div class="session-card-inner">
                            <div class="session-card-inner-name my-3">
                                <h1>John Smith</h1>
                                <p>Yoga</p>
                            </div>
                            <div class="rating-star my-3">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="session-card-inner-link my-3">
                                <a href="{{url('/dashboard/class-detail')}}">Book Now</a>
                            </div>
                        </div>
                        <p class="session-card-text">Lorem ipsum dolor sit amet, consectetur ascing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur ascing elit, sed do eiusmod tempor </p>
                    </div>
                </div>
                <div class="col">
                    <div class="session-card p-2">
                        <div class="session-card-img">
                            <img class="" src="{{asset('public/assets/images/rating-right.png')}}" alt="image">
                            <div class="session-card-amount">
                                <h1>$100</h1>
                            </div>
                        </div>

                        <div class="session-card-inner">
                            <div class="session-card-inner-name my-3">
                                <h1>John Smith</h1>
                                <p>Yoga</p>
                            </div>
                            <div class="rating-star my-3">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="session-card-inner-link my-3">
                                <a href="{{url('/dashboard/class-detail')}}">Book Now</a>
                            </div>
                        </div>
                        <p class="session-card-text">Lorem ipsum dolor sit amet, consectetur ascing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur ascing elit, sed do eiusmod tempor </p>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="category-section">
            <div class="dashboard-header px-3">
                <div class="row py-3">
                    <div class="col-6">
                        <div class="dashboard-header-left category-header py-3">
                            <h1>Categories</h1>
                        </div>
                    </div>
                    <div class="col-6 text-right">
                        <div class="category-header-right py-3">
                            <a href="{{url('/dashboard/categories/'.$category[0]['id'])}}" class="view-click">View All</a>
                        </div>
                    </div>

                </div>
                <div class="row js-slick-carouselss px-1 category-slider">
                    @foreach($category as $category_data)
                    <div class="col">
                        <a class="catergory-cards" href="{{url('/dashboard/categories/'.$category_data['id'])}}">
                            <div class="catergory-card catergory-card-yellow p-2">
                                <div class="category-left">
                                    <h1>{{$category_data['title']}}</h1>
                                    <p>{{$category_data['description']}} </p>
                                </div>
                                <div class="category-right">
                                    <img class="" src="{{asset('public/assets/images/cate-one.svg')}}" alt="image">
                                </div>
                            </div>
                        </a>

                    </div>
                    @endforeach
                    <!-- <div class="col">
                        <a href="{{url('/dashboard/categories')}}">
                            <div class="catergory-card catergory-card-blue p-2">
                                <div class="category-left">
                                    <h1>Gymnastic</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                                </div>
                                <div class="category-right">
                                    <img class="" src="{{asset('public/assets/images/cate-one.svg')}}" alt="image">
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="col">
                        <a href="{{url('/dashboard/categories')}}">
                            <div class="catergory-card catergory-card-green p-2">
                                <div class="category-left">
                                    <h1>Fitness</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                                </div>
                                <div class="category-right">
                                    <img class="" src="{{asset('public/assets/images/cate-one.svg')}}" alt="image">
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="col">
                        <a href="{{url('/dashboard/categories')}}">
                            <div class="catergory-card catergory-card-purple p-2">
                                <div class="category-left">
                                    <h1>Bodybuilding</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                                </div>
                                <div class="category-right">
                                    <img class="" src="{{asset('public/assets/images/cate-one.svg')}}" alt="image">
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="col">
                        <a href="{{url('/dashboard/categories')}}">
                            <div class="catergory-card catergory-card-yellow p-2">
                                <div class="category-left">
                                    <h1>Yoga</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                                </div>
                                <div class="category-right">
                                    <img class="" src="{{asset('public/assets/images/cate-one.svg')}}" alt="image">
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="col">
                        <a href="{{url('/dashboard/categories')}}">
                            <div class="catergory-card catergory-card-blue p-2">
                                <div class="category-left">
                                    <h1>Gymnastic</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                                </div>
                                <div class="category-right">
                                    <img class="" src="{{asset('public/assets/images/cate-one.svg')}}" alt="image">
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="col">
                        <a href="{{url('/dashboard/categories')}}">
                            <div class="catergory-card catergory-card-green p-2">
                                <div class="category-left">
                                    <h1>Fitness</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                                </div>
                                <div class="category-right">
                                    <img class="" src="{{asset('public/assets/images/cate-one.svg')}}" alt="image">
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="col">
                        <a href="{{url('/dashboard/categories')}}">
                            <div class="catergory-card catergory-card-purple p-2">
                                <div class="category-left">
                                    <h1>Bodybuilding</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                                </div>
                                <div class="category-right">
                                    <img class="" src="{{asset('public/assets/images/cate-one.svg')}}" alt="image">
                                </div>
                            </div>
                        </a>

                    </div> -->
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
@section('insertsfooter')
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.1/jquery.flexslider.js"></script>
<script>
    const slickSettings = {
        arrows: true,
        infinite: true,
        prevArrow: "<i class='fa fa-angle-double-left slick-prev arrow  ser-left-one' aria-hidden='true'></i> ",
        nextArrow: "<i class='fa fa-angle-double-right slick-next arrow ser-right-one' aria-hidden='true'></i>",
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 2000,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 1490,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },


        ]
    }
    const slickSettingss = {
        arrows: true,
        infinite: true,
        prevArrow: "<i class='fa fa-angle-double-left slick-prev arrow ser-left-two ' aria-hidden='true'></i> ",
        nextArrow: "<i class='fa fa-angle-double-right slick-next arrow ser-right-two' aria-hidden='true'></i>",
        slidesToShow: 6,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 2160,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 1820,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 1550,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 1260,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 730,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },


        ]
    }
    const slickSettingsss = {
        arrows: true,
        infinite: true,
        prevArrow: "<i class='fa fa-arrow-left slick-prev arrow ser-left-three ' aria-hidden='true'></i> ",
        nextArrow: "<i class='fa fa-angle-double-right slick-next arrow ser-right-three' aria-hidden='true'></i>",
        slidesToShow: 6,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 2160,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 1820,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 1550,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 1260,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 730,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },


        ]
    }
    // $('.js-slick-carousel').on('init', handleSlickInit);
    $('.js-slick-carousel').slick(slickSettings);

    // reinitialization
    $('.js-slick-carousel').on('reInit', () => console.log('slick re-init fired'));
    // two
    $('.js-slick-carousels').slick(slickSettingss);

    // reinitialization
    $('.js-slick-carousels').on('reInit', () => console.log('slick re-init fired'));
    // three
    $('.js-slick-carouselss').slick(slickSettingsss);

    // reinitialization
    $('.js-slick-carouselss').on('reInit', () => console.log('slick re-init fired'));

    $(window).resize(handleResize);
</script>
<script>
    $('.left-inner-addon').css('display', 'none');
</script>
<script>
    $('.credit_card').click(function() {

    });
    $('.sidenav .nav-item:nth-of-type(1)').addClass('active')
</script>
<!-- <script>
    $('.view-click').click(function() {
        $('.catergory-cards').trigger('click');
    });
</script> -->
@endsection