@extends('layouts.website.default')
@section('content')
<style>
    body {
        background-color: #f4f4f4;
    }

    input[type="file"] {
        display: none;
    }

    .hero-section-upload {
        color: white;
        background: linear-gradient(180deg, #FFBB00 0%, #E37048 100%);
        border-radius: 7px;
        /* padding: 15px 40px; */
        font-size: 1rem;
        font-weight: 600;
        /* width: 40%; */
        /* min-width: 50%; */
        margin: 0 auto;
        cursor: pointer;
        width: 100%;
        max-width: 204px;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .pro-form label {
        color: #464646;
        font-size: 0.8rem;
    }

    .form-label span {
        color: #E37048 !important;
        font-size: 0.6rem;
    }

    .pro-form input {
        height: 65px !important;
        /* color: #fff !important; */

    }

    .pro-form input::placeholder {
        color: #fff;
    }

    .pro-form input,
    .pro-form textarea {
        background: rgba(249, 249, 249, 0.2);
        border: 1px solid #CECECE !important;
        box-shadow: 0px 4px 22px rgba(0, 0, 0, 0.05) !important;
        border-radius: 10px !important;
    }

    .pro-form textarea {
        resize: none !important;
        height: 200px !important;
    }

    /* .profile-nxt-btn {
        text-align: center;
        background: #E37048;
        border-radius: 10px;
        padding: 10px 0;
        width: 70%;
        margin: 0 auto;
    } */
    .profile-nxt-btn a,
    .profile-nxt-btn a:hover,
    .profile-nxt-btn a:focus,
    .profile-nxt-btn a:active {
        background: #E37048;
        border: none;
        box-shadow: none;
        outline: none;
        color: white;
        padding: 25px 0;
        border-radius: 15px;
        text-align: center;
        width: 60%;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        min-width: 200px;
        height: 60px;
    }

    .update-profile-form-btn {
        text-decoration: none;
        color: #fff;
        font-weight: 600;
        font-size: 2rem;

    }

    .hero-right label {
        cursor: pointer;
    }

    .update-profile-form-btn:hover {
        text-decoration: none !important;
        color: #FFBB00;
    }

    @media screen and (max-width:576px) {
        .pro-form input {
            height: 55px !important;
        }

        .update-profile-form-btn {
            font-size: 1.5rem;
        }

        .hero-right img {
            width: 250px !important;
            height: 250px !important;
        }

        .hero-section-upload {
            font-size: 0.9rem;
            width: 100%;
            margin: 0 auto;
        }
    }

    @media screen and (max-width:991px) {
        .hero-section-upload {
            width: 70%;
            margin: 0 auto;
        }
    }

    .profile-hero-right {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .profile-hero-right img {
        margin: 0 auto;
    }

    input[type=radio] {
        height: 10px !important;
        border: 1px solid #E37048;
    }

    input[type=radio]:not() {}

    input[type=radio].color-radio {
        accent-color: #E37048;
        border: 1px solid #E37048;
        transform: scale(1.5);
        background: transparent !important;
    }

    @media screen and (min-width:768px) {
        input[type=radio].color-radio {
            transform: scale(1.5);
        }

    }
</style>
@include('includes.website.navbar-two')
<div class="container-fluid hero-section ">
    <div class="container hero-section-wrapper" data-aos="fade-left">
        <div class="row">
            <div class="col-md-6 order-2 order-md-1 hero-left text-center text-md-left">
                <div class="hero-left-content heroText">
                    <h1>Hello <span>John Smith,</span></h1>
                    <p class="pb-4 pt-3">Johnsmith@gmail.com</p>
                </div>
            </div>
            <div class="col-md-6 order-1 order-md-2 hero-right text-center mb-5 mb-md-0 profile-hero-right">
                <img src="{{asset('public/assets/images/payment-hero.webp')}}" alt="image">
                <label class="hero-section-upload my-4"> Upload Image
                    <input type="file" size="60">
                </label>
            </div>
        </div>
    </div>

</div>
<!-- ...........................User Profile Section.............. -->
<div class="container pt-5">
    <form>
        <div class="row">
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputAddress" class=" ">Contact</label>
                    <input type="text" class="form-control py-4" id="inputAddress">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="form-group pro-form">
                    <label for="inputAddress" class=" ">Emergency Contact</label>
                    <input type="text" class="form-control py-4" id="inputAddress">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputAddress2" class=" ">Relationship With Emergency Contact</label>
                    <input type="text" class="form-control py-4" id="inputAddress2">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="form-group pro-form">
                    <label for="inputAddress2" class=" ">Date of Birth</label>
                    <input type="date" class="form-control py-4" id="inputAddress2">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputCity" class=" ">Gender</label>
                    <!-- <input type="text" class="form-control py-4" id="inputCity"> -->
                    <select name="" class="form-control py-4 pro-form-select" id="inputCity">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="form-group pro-form">
                    <label for="inputAddress2" class=" ">Country</label>
                    <input type="text" class="form-control py-4" id="inputAddress2">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputCity" class=" ">State</label>
                    <input type="text" class="form-control py-4" id="inputCity">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="form-group pro-form">
                    <label for="inputAddress2" class=" ">Workout Location</label>
                    <input type="text" class="form-control py-4" id="inputAddress2">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputCity" class=" ">Weight</label>
                    <label class="radio-inline">
                        <input class="color-radio mx-2" type="radio" name="optradio" checked>KGs
                    </label>
                    <label class="radio-inline">
                        <input class="color-radio mx-2" type="radio" name="optradio">LBs
                    </label>

                    <input type="text" class="form-control py-4" id="inputCity">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="form-group pro-form">
                    <label for="inputAddress2" class=" ">Height</label>
                    <label class="radio-inline">
                        <input class="color-radio mx-2" type="radio" name="optradios" checked>Feet
                    </label>
                    <label class="radio-inline">
                        <input class="color-radio mx-2" type="radio" name="optradios">CM
                    </label>

                    <label class="radio-inline">
                        <input class="color-radio mx-2" type="radio" name="optradios">Inches
                    </label>
                    <input type="text" class="form-control py-4" id="inputAddress2">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputCity" class=" ">Any Known Medical Conditions?</label>
                    <input type="text" class="form-control py-4" id="inputCity">
                </div>
            </div>
            <div class="col-12" data-aos="fade-up">
                <div class="form-outline pro-form">
                    <label class="form-label" for="textAreaExample">Tell Us About yourself <span>(256)</span></label>
                    <textarea class="form-control" id="textAreaExample1" rows="4"></textarea>
                </div>
            </div>
            <div class="col-12 my-5">
                <div class=" profile-nxt-btn">
                    <a href="#" class="update-profile-form-btn">Next</a>
                </div>
            </div>

        </div>
    </form>

</div>
@endsection