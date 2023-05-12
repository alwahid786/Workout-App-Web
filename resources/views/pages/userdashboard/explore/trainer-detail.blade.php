@extends('layouts.userdashboard.default')
@section('content')
<style>
    .sessions-left-section {
        background: #fff;
        border-radius: 10px;
        overflow-y: scroll;
    }

    .sessions-left-section::-webkit-scrollbar-thumb {
        background: #E37048;
        border-radius: 0px;
        height: 0px;
        width: 0px;
    }

    .sessions-left-section::-webkit-scrollbar {
        width: 0px;
        height: 0px;
        width: 0px;
    }


    .sessions-left-section::-webkit-scrollbar-track {
        box-shadow: inset 0 0 0px grey;
        border-radius: 0px;
        height: 0px;
        width: 0px;
    }


    .sessions-left-section::-webkit-scrollbar-thumb {
        background: #E37048;
        border-radius: 0px;
        height: 0px;
        width: 0px;
    }

    .session-profile-image img {
        height: 180px;
        width: 180px;
        border-radius: 50%;
        object-fit: cover;
    }

    .sessions-profile-con p {
        color: #828282;

    }

    .sessions-profile-con p i {
        color: #E37048;

    }

    .rating-stars .fa-star:before {
        color: gold;
        font-size: 1.4rem;
    }

    .session-left-divider {
        border: 1px solid #E0E0E0;
    }

    .session-bottom-header h1 {
        color: #E37048;
        font-size: 1.5rem;
        font-weight: 500;
    }

    .session-bottom-par p {
        font-weight: 400;
        font-size: 1rem;
        line-height: 27px;
        letter-spacing: 0.02em;

        color: #828282;
    }

    .card-grid-section {
        display: grid !important;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)) !important;
        grid-gap: 20px !important;
        height: 90vh;
        overflow-y: scroll;
    }

    .card-grid-section::-webkit-scrollbar-thumb {
        background: #E37048;
        border-radius: 5px;
        height: 5px;
        width: 5px;
    }

    .card-grid-section::-webkit-scrollbar {
        width: 5px;
        height: 5px;
        width: 5px;
    }


    .card-grid-section::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 5px;
        height: 5px;
        width: 5px;
    }


    .card-grid-section::-webkit-scrollbar-thumb {
        background: #E37048;
        border-radius: 5px;
        height: 5px;
        width: 5px;
    }

    @media screen and (max-width:991px) {
        .sessions-left-section {
            background: #fff;
            border-radius: 10px;
            height: 90vh;
            overflow-y: hidden;
            height: 100%;
        }
    }

    @media screen and (max-width:576px) {
        .card-grid-section {
            display: grid !important;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)) !important;
            grid-gap: 20px !important;
        }
    }

    .session-card .card-img img {
        object-fit: cover;
        height: 230px;
    }

    .card-heading,
    .card-content,
    .card-bottom-section {
        display: flex;
        justify-content: space-between;
    }

    .card-heading h1 {
        color: #E37048;
        font-size: 1.4rem;
        white-space: nowrap;
        width: 50%;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .card-heading a {
        background: white;
        color: #E37048;
        border: 1px solid #E37048;
        text-decoration: none;
        padding: 8px 20px;
        border-radius: 30px;
        font-size: 0.9rem;
    }

    .card-heading a:hover {
        background: #E37048;
        color: #fff;
        border: 1px solid #E37048;
        text-decoration: none;
    }

    .card-content p {
        color: #4B4B4B;
        font-size: 1rem;
        font-weight: 500;
    }

    .card-content p:nth-of-type(1) {
        white-space: nowrap;
        width: 50%;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .card-bottom-section p:first-child {
        color: #4B4B4B;
        font-weight: 800;
        font-size: 1.1rem
    }

    .card-bottom-section p:last-child {
        color: #4B4B4B;
        font-size: 1.1rem
    }

    .card-bottom-section p img {
        height: 30px;
        width: 30px;
    }

    .trainer-name h1 {
        display: block !important;
    }

    .card-img img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        object-position: top;
    }

    .card-heading {
        display: flex;
        justify-content: space-between;
    }

    .card-footer {
        background: #E37048;
    }

    .card {
        border-radius: 10px !important;
        height: fit-content;
    }

    .card-heading h1,
    .card p {
        color: #ffff;
    }

    .card-heading h1 {
        font-size: 2rem;
        font-weight: 700;
    }

    a {
        text-decoration: none !important;
    }

    .card:hover .card-img {
        transform: scaleZ(1.1);
    }

    .card-footer div {
        color: white;
        font-size: 2rem;
        font-weight: 700;
    }

    .card-img {
        border-radius: 1px;
        overflow: hidden;
    }

    .socialIcons_s img {
        width: 25px !important;
    }
</style>
@include('includes.userdashboard.navbar')
<div class="content-wrapper">
    <div class="container-fluid mb-4">
        <div class="row">
            <div class="col-lg-4 col-xl-3">
                <div class="sessions-left-section pt-5 pb-2 px-2">
                    <div class="session-profile-image text-center">
                        <img src="{{$trainer_detail['profile_img']}}" alt="">
                    </div>
                    <div class="sessions-profile-con text-center">
                        <div class="dashboard-header-left pt-3 trainer-name">
                            <h1>{{$trainer_detail['name']}}</h1>
                        </div>
                        <p><i class="fa fa-map-marker pr-2" aria-hidden="true"></i>{{$trainer_detail['workout_location']}},{{$trainer_detail['state']}}, {{$trainer_detail['country']}}</p>
                        <div class="rating-stars pb-5">

                            <?php $rating = $trainer_detail['trainer_profile']['avg_rating']; ?>
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
                    <div class="d-flex justify-content-center align-items-center">
                        <h1 class="mx-3 socialIcons_s ">
                            @if(empty($trainer_detail['trainer_profile']['facebook_url']))
                            <a target="_blank" href="https://www.facebook.com"><img src="{{asset('public/assets/images/fb-color.svg')}}" alt=""></a>

                            @endif
                            @if(empty($trainer_detail['trainer_profile']['instagram_url']))
                            <a target="_blank" href="https://www.instagram.com"><img src="{{asset('public/assets/images/insta-color.svg')}}" alt=""></a>
                            @endif
                            @if(empty($trainer_detail['trainer_profile']['linkedin_url']))
                            <a target="_blank" href="https://www.linkedin.com"><img src="{{asset('public/assets/images/linkedin-color.png')}}" alt=""></a>
                            @endif
                        </h1>
                    </div>
                    <div class="session-left-divider"></div>
                    <div class="session-left-bottom px-2">
                        <div class="session-bottom-header pt-3">
                            <h1>About Trainer</h1>
                        </div>
                        <div class="session-bottom-par">
                            <p>{{$trainer_detail['about']}}</p>
                            <!-- <p>Lorem ipsum is a placeholder text
                                commonly used to demonstrate the
                                visual form of a document or a type
                                face without relying on meaningful
                                content. Lorem ipsum may be used
                                as a placeholder before final copy
                                is available.</p> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xl-9">
                <div class="dashboard-header-left">
                    <h1 class="d-block"><i class="fa fa-angle-left mr-2" aria-hidden="true" onclick="window.history.back()" style="cursor:pointer;"></i> {{$trainer_detail['name']}}'s Classes</h1>
                </div>
                <div class="card-grid-section">
                    <!-- Category card starts here  -->
                    @if(isset($sessions) && !empty($sessions))
                    @foreach($sessions as $category)
                    <?php $count = count($category) - 2; ?>
                    <a href="{{url('/dashboard/trainer-sessions/'.$category['category_id'].'/'.$trainer_detail['id'])}}" style="height:fit-content">
                        <div class="card">
                            <div class="card-img">
                                <img class="card-img" src="{{asset('public/assets/images/gallery-one.svg')}}" alt="">
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <div>
                                    {{$category['category_name']}}
                                </div>
                                <div>
                                    {{$count}}
                                </div>

                            </div>
                        </div>
                    </a>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('insertsfooter')
<script>
    $('.sidenav .nav-item:nth-of-type(1)').addClass('active')
</script>
@endsection