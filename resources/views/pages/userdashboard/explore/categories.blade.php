@extends('layouts.userdashboard.default')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.1/flexslider.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .categories-heading {
        margin-bottom: 60px !important;
    }

    .categories-heading h1 {
        font-size: 1.7rem !important;
        font-weight: 600;
    }

    .categories-grid-section {
        display: grid !important;
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
        grid-gap: 20px !important;
        row-gap: 60px !important;

    }

    @media screen and (max-width:1366px) {

        .categories-grid-section {
            display: grid !important;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            grid-gap: 20px !important;
            row-gap: 60px !important;

        }
    }

    @media screen and (max-width:576px) {
        .categories-grid-section {

            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)) !important;

        }
    }

    .categories-card {
        background: #fff;
        border-radius: 10px;
    }

    .card-img-section,
    .categories-card-heading {
        display: flex;
        justify-content: space-between;
    }

    .categories-card-heading {
        align-items: center;
    }

    .categories-card-exp {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    .card-img-section {
        position: relative;
    }

    .card-img-section img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #E37048;
        position: absolute;
        margin-top: -60px;
    }

    .card-img-section p {
        background: #000;
        color: #ffff;
        height: 30px;
        margin-bottom: 0px;
        padding: 10px 10px;
        display: flex;
        align-items: center;
        border-radius: 8px;
        margin-left: auto;
    }

    .heading-left-section p {
        color: #686767;
        margin-bottom: 0 !important;
    }

    .heading-left-section p:last-child {
        color: #8D8D8D !important;
    }

    .heading-left-section h1 {
        color: #E37048;
        font-size: 1.3rem;
        margin-bottom: 0 !important;
    }

    .categories-card-heading .rating-stars i {
        color: gold;
    }

    .categories-card-text p {
        color: #525252;
    }

    .categories-card-exp p:first-child {
        background: rgba(73, 170, 239, 0.2);
        color: #49AAEF;
    }

    .categories-card-exp p:last-child {
        background: rgba(255, 112, 112, 0.24);
        color: #EF4949;
    }

    .categories-card-exp p {
        border-radius: 30px;
        padding: 1px 10px;
    }

    .categories-card-btn {
        background: #E37048;
        padding: 10px 45px;
        text-decoration: none;
        border-radius: 10px;
        color: #fff;
        cursor: pointer;
    }

    .categories-card-btn:hover {
        text-decoration: none;
        color: #fff;
    }

    @media screen and (max-width:576px) {
        .categories-card-btn {
            font-size: 0.8rem;
        }

        .categories-card-exp p {
            font-size: 0.8rem;
        }

        .categories-card-text p {
            font-size: 0.8rem;
        }

        .categories-card-heading .rating-stars i {
            font-size: 0.8rem;
        }

        .heading-left-section h1 {
            font-size: 1.1rem;
        }

        .heading-left-section p {
            font-size: 0.8rem;
        }

        .card-img-section img {
            height: 90px;
            width: 90px;
        }

        .card-img-section p {
            font-size: 0.8rem;
        }

    }

    .dashboard-header .dropdown button {
        border: 1px solid #E37048;
        border-radius: 8px;
        background-color: transparent;
        color: #E37048;
    }

    .dashboard-header .dropdown button:hover {
        border: 1px solid #8D8D8D;
        border-radius: 8px;
        background-color: #E37048;
        color: white;
    }

    .dashboard-header .dropdown button:focus,
    .dashboard-header .dropdown button:active {
        outline: none !important;
        box-shadow: none !important;
        background-color: #E37048 !important;
    }

    .search-section input {
        border: 1px solid #E37048;
        border-radius: 8px;
        background-color: transparent;
        color: #686767;
    }

    .search-section input:focus,
    .search-section input:active {
        outline: none;
        box-shadow: none;
    }

    .search-section button {
        border: 1px solid #E37048;
        border-radius: 8px;
        background-color: #E37048;
        color: white;
    }

    .search-section button:focus,
    .search-section button:active {
        outline: none;
        box-shadow: none;
    }
</style>
@include('includes.userdashboard.navbar')
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="category-section px-sm-3">
            <div class="dashboard-header ">
                <div class="dashboard-header-left d-flex justify-content-between align-items-baseline">
                    <h1>Categories</h1>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Browse Categories <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @foreach($class as $categories)
                            <a class="dropdown-item catergory-card-y" data-id="{{$categories['id']}}" href="javascript:void(0)">{{$categories['title']}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row js-slick-carouselss px-1 category-slider">

                    @foreach($class as $categories)
                    <div class="col catergory-card-img">

                        <div class="catergory-card catergory-card-yellow catergory-card-y p-2" data-id="{{$categories['id']}}">
                            <div class="category-left">
                                <h1>{{$categories['title']}}</h1>
                                <p>{{$categories['description']}}</p>
                            </div>
                            <div class="category-right">
                                <img class="" src="{{asset('public/assets/images/cate-one.svg')}}" alt="image">
                            </div>
                        </div>


                    </div>
                    @endforeach

                </div>
            </div>
            <div class="dashboard-header-left categories-heading mt-4 d-flex justify-content-between align-items-center" style="margin-bottom:0 !important">
                <h1 id="trainerCategory">{{$trainersView['category']}} Trainers</h1>

            </div>
            <div id="trainerList">
                <?= $trainersView['trainersView']; ?>
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
                    slidesToShow: 3,
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
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 676,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
        ]
    };
    $('.js-slick-carouselss').slick(slickSettingsss);

    // reinitialization
    $('.js-slick-carouselss').on('reInit', () => console.log('slick re-init fired'));
</script>
<script>
    $('.sidenav .nav-item:nth-of-type(5)').addClass('active')
</script>
<script>
    $(".catergory-card-y").click(function(e) {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        var id = $(this).attr('data-id');
        // var formData = {
        //     company_name: $(this).attr('data-id'),
        // };
        var type = "POST";
        var url = "{{ route('get_sessions_list', ':id') }}";
        url = url.replace(':id', id);
        $.ajax({
            type: type,
            url: url,
            // data: formData,
            dataType: 'json',
            success: function(data) {
                console.log(`${data.data['category']} here`);
                $("#trainerList").html(data.data['trainersView']);
                $("#trainerCategory").html(`${data.data['category']}  Trainers`);
            },
            error: function(data) {
                console.log(data);
            }
        });
    });
    $(document).on('click', '#searchBtn', function(e) {
        let search = $("#searchBox").val();
        let category = $("#catId").val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        var type = "POST";
        var url = "{{ route('get_sessions_list', ':id') }}";
        url = url.replace(':id', category);
        $.ajax({
            type: type,
            url: url,
            data: {
                search: search
            },
            dataType: 'json',
            success: function(data) {
                console.log(`${data.data['trainersView']} here`);
                $("#trainerList").html(data.data['trainersView']);
                $("#trainerCategory").html(`${data.data['category']}  Trainers`);
            },
            error: function(data) {
                console.log(data);
            }
        });
    })
    $('.catergory-card-img').click(function() {

        $('.catergory-card-img').find('.catergory-card-yellow').css("border", "none");
        $(this).find('.catergory-card-yellow').css("border", "4px solid black");
    });
</script>
@endsection