@extends('layouts.trainerSide.default')
<!-- <link rel="stylesheet" href="{{asset('public/assets/trainercss/steptwo.css')}}">
<link rel="stylesheet" href="{{asset('public/assets/trainercss/pagination.css')}}"> -->
<link rel="stylesheet" href="{{asset('public/assets/css/nice-select.css')}}">

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .update-info-header {
        background-color: #F8F8F8;
    }

    /* input[type="date"]::-webkit-calendar-picker-indicator {
        display: none;
        -webkit-appearance: none;
    } */

    .update-info-content h1 {
        font-size: 1.3rem;
        font-weight: 400;
    }

    .update-info-content img {
        width: 100%;
        max-width: 300px;
    }


    .pro-form label {
        color: #464646;
        font-size: 0.8rem;
    }

    .form-label span {
        color: #E37048 !important;
        font-size: 0.6rem;
    }

    .pro-form input,
    .pro-form select {
        height: 65px !important;
        /* color: #fff !important; */

    }

    .nice-select.wide {
        height: 65px !important;
        border: 1px solid #CECECE !important;
        box-shadow: 0px 4px 22px rgba(0, 0, 0, 0.05) !important;
        border-radius: 10px;
        justify-content: flex-start !important;
    }

    .nice-select.wide {
        height: 65px !important;
        border: 1px solid #CECECE !important;
        box-shadow: 0px 4px 22px rgba(0, 0, 0, 0.05) !important;
        border-radius: none !important;
        justify-content: flex-start !important;
    }

    .nice-select:after {
        border-bottom: 2px solid #848484;
        border-right: 2px solid #848484;
        content: '';
        display: block;
        height: 9px;
        margin-top: -4px;
        pointer-events: none;
        position: absolute;
        right: 20px;
        top: 50%;
        -webkit-transform-origin: 66% 66%;
        -ms-transform-origin: 66% 66%;
        transform-origin: 66% 66%;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
        -webkit-transition: all 0.15s ease-in-out;
        transition: all 0.15s ease-in-out;
        width: 9px;
    }

    .s-select span {
        color: #666666 !important;
        font-weight: normal !important;
    }

    .pro-form input::placeholder {
        color: #fff;
    }

    .pro-form input,
    .pro-form textarea,
    .nice-select.wide {
        box-shadow: 0px 4px 22px rgba(0, 0, 0, 0.05) !important;
        background: #F8F8F8 !important;
        border: 1px solid rgba(0, 0, 0, 0.2) !important;
        border-radius: 10px;
    }

    .nice-select.wide2 {
        box-shadow: 0px 4px 22px rgba(0, 0, 0, 0.05) !important;
        background: #F8F8F8 !important;
        border: 1px solid rgba(0, 0, 0, 0.2) !important;
        border-radius: none;
        display: flex;
        align-items: center;
    }

    .pro-form textarea {
        resize: none !important;
        height: 200px !important;
    }


    .profile-nxt-btn a {
        background-color: #ffff !important;
        color: #E37048 !important;
        border: 1px solid #E37048 !important;
    }

    .profile-nxt-btn a:hover {
        background: #E37048 !important;
        color: white !important;
    }

    .profile-nxt-btn a,
    .profile-nxt-btn a:focus,
    .profile-nxt-btn a:active {
        background: #E37048;
        border: none;
        box-shadow: none;
        outline: none;
        color: white;
        padding: 25px 0;
        border-radius: 10px;
        text-align: center;
        width: 25%;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        min-width: 200px;
        height: 50px;
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
        color: #fff;
    }

    .input-container {
        display: flex;
        width: 100%;
    }

    .input-container i {
        color: white;
        min-width: 50px;
        text-align: center;
        background-color: dodgerblue;
        display: flex;
        align-items: center;
        justify-content: center;
        border-top-left-radius: 10px !important;
        border-bottom-left-radius: 10px !important;
        font-size: 1.3rem;
    }

    .input-container .fa-instagram {
        /* background-color: linear-gradient(45deg, #405de6, #5851db, #833ab4, #c13584, #e1306c, #fd1d1d); */
        background: #000;
    }

    .input-container input {
        border-top-left-radius: 0px !important;
        border-bottom-left-radius: 0px !important;
        border-left: none !important;
    }

    .location-container {
        display: flex;
        width: 100%;
    }

    .location-container i {
        color: white;
        min-width: 50px;
        text-align: center;
        background-color: #E37048;
        display: flex;
        align-items: center;
        justify-content: center;
        border-top-right-radius: 10px !important;
        border-bottom-right-radius: 10px !important;
        font-size: 1.3rem;
    }

    .location-container .fa-instagram {
        /* background-color: linear-gradient(45deg, #405de6, #5851db, #833ab4, #c13584, #e1306c, #fd1d1d); */
        background: #000;
    }

    .location-container input {
        border-top-right-radius: 0px !important;
        border-bottom-right-radius: 0px !important;
    }

    .updateinfo-qualification h1 {
        font-size: 1rem;
        font-weight: 400;
        letter-spacing: 0.3;
    }

    .update-info-qualification-image {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        grid-gap: 10px;
        align-items: stretch;
    }

    .update-info-qualification-image img {
        /* padding: 0 7px; */
        width: 100%;
        max-width: 200px;
    }

    input[type="file"] {
        display: none;
        /* background-image: url(../trainerimages/uploadimg.svg); */
    }

    .grid-item {
        position: relative;
    }

    .grid-item img:nth-of-type(1) {
        position: absolute;
        height: 22px;
        width: 22px;
        right: -5px;
        top: -10px;

    }

    input[type=radio] {
        height: 10px !important;
        border: 1px solid #E37048;
    }



    input[type=radio].color-radio {
        accent-color: #E37048;
        border: 1px solid #E37048;
        transform: scale(1.5);
        background: transparent !important;
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

    @media screen and (max-width:768px) and (min-width:576px) {
        .grid-item img:nth-of-type(1) {
            position: absolute;
            height: 22px;
            width: 22px;
            right: 20px;
            top: -10px;

        }
    }

    @media screen and (max-width:576px) {

        .pro-form input,
        .pro-form select {
            height: 55px !important;
        }

        .nice-select.wide {
            height: 55px !important;
            border: 1px solid #CECECE !important;
            box-shadow: 0px 4px 22px rgba(0, 0, 0, 0.05) !important;
            border-radius: 10px !important;
            justify-content: flex-start !important;
        }

        .nice-select.wide2 {
            height: 100% !important;
            border: 1px solid #CECECE !important;
            box-shadow: 0px 4px 22px rgba(0, 0, 0, 0.05) !important;
            border-radius: none !important;
            justify-content: flex-start !important;
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

        .update-info-qualification-image {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .grid-item img:nth-of-type(1) {
            position: absolute;
            height: 22px;
            width: 22px;
            right: -5px;
            top: -7px;

        }

        input[type=radio].color-radio {
            height: 10px !important;
        }
    }

    /* ................Modal............ */
    .modal-img {
        display: flex;
        align-items: flex-end;
    }

    .modal-img img {
        width: 100%;
        max-height: 200px;
        height: 100%;
    }

    .progress-cotent {
        width: 100%;
        max-width: 150px;
    }

    .progress {
        height: 0.4rem !important;
    }

    .progress-bar {
        background-color: #E37048 !important;
    }

    .progress-par {
        display: flex;
        justify-content: space-between;
    }

    .progress-par p {
        margin-bottom: 0 !important;
        font-size: 0.8rem;
    }


    .pro-form textarea {
        border: 1px solid #BDBDBD;
        background: #F2F2F2;
    }

    .modal-btn a {
        background: #E37048;
        border: none;
        box-shadow: none;
        outline: none;
        color: white;
        padding: 10px 50px;
        border-radius: 10px;
        width: 25%;
        font-size: 1.4rem;
        min-width: 200px;
        height: 50px;
    }

    .modal-content {
        border-radius: 10px;
    }

    @media screen and (max-width:576px) {
        .modal-btn a {
            background: #E37048;
            border: none;
            box-shadow: none;
            outline: none;
            color: white;
            padding: 10px 40px;
            border-radius: 10px;
            width: 25%;
            font-size: 0.8rem;
            min-width: 150px;
            height: 40px;
        }

        .progress-cotent {
            width: 100%;
            max-width: 150px;
            margin: 0 auto !important;
        }

        .modal-img img {
            width: 100%;
            max-width: 250px;

        }

        .progress-cotent {
            width: 100%;
            max-width: 250px;
        }
    }


    /* p */
    .pagination-wrapper {
        background-color: #F8F8F8;
        border-radius: 10px;
        position: relative;
        padding-top: 1rem;
        padding-bottom: 3rem;
        padding-left: 0.5rem;
        padding-right: 0.5rem;
    }

    .pagination-border {
        border: 1px solid #E37048;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        z-index: 1;
    }

    .pagination-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative;
    }

    .pagination-box {
        position: relative;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #f5bfac;
        border: 2px solid #E37048;
        z-index: 2;
    }

    .active-pagination {
        background: #E37048;
    }

    .pagination-box h1 {
        position: absolute;
        color: white;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 1rem;
        font-weight: 700;
        margin-bottom: 0px;
    }

    .pagination-box p {
        font-size: 0.6rem;
        margin-bottom: 0px;
        color: black;
        position: absolute;
        top: 55px;
        left: 50%;
        text-align: center;
        transform: translate(-50%, -50%);

    }

    input[type=radio].color-radio {
        accent-color: #E37048;
        border: 1px solid #E37048;
        transform: scale(1.5);
        background: transparent !important;
    }

    input[type=radio].color-radio {
        height: 10px !important;
    }

    @media screen and (max-width:576px) {
        .pagination-box {
            position: relative;
            width: 30px;
            height: 30px;
        }

        .pagination-box h1 {
            position: absolute;
            color: white;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 0.8rem;
            font-weight: 700;
            margin-bottom: 0px;
        }

        .pagination-box p {
            font-size: 0.5rem;
        }


    }

    .button {
        background: #E37048;
        border: none;
        box-shadow: none;
        outline: none;
        color: white;
        padding: 25px 0;
        border-radius: 10px;
        text-align: center;
        width: 25%;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        min-width: 200px;
        height: 50px;
    }

    .price-select-input {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 70%;
    }

    .price-select-input .select-outer {
        width: 100%;

    }

    .price-select-input .nice-select.wide2 {
        border-top-right-radius: 0px !important;
        border-bottom-right-radius: 0px !important;
    }

    .price-select-input input {
        width: 80%;
        border-top-left-radius: 0px !important;
        border-bottom-left-radius: 0px !important;
    }

    .pro-form .price-select-input .nice-select.wide2 {
        border-radius: none !important;
        height: 100% !important;
    }

    .price-select-input .nice-select:after {
        border-bottom: 2px solid #848484;
        border-right: 2px solid #848484;
        content: '';
        display: block;
        height: 9px !important;
        margin-top: -4px;
        pointer-events: none;
        position: absolute;
        right: 15% !important;
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

    .location-pill {
        border-radius: 20px;
        background-color: #f5bfac;
        border: 1px solid #E37048;
        padding: 10px;
        position: relative;
    }

    .location-pill .remove-location {
        position: absolute;
        width: 20px;
        top: -10;
        right: -5;
        cursor: pointer;
    }

    .closeBtn {
        border: none;
        background: transparent;
    }
</style>

@section('content')

<!-- header-section -->
<div class="container-fluid update-info-header">
    <div class="container">
        <div class="update-info-content py-4">
            <h1>Create Account</h1>
            <img src="{{asset('public/assets/images/logo.svg')}}" alt="">
        </div>
    </div>
</div>

<!-- pagination-section -->
<div class="container-fluid pt-5">
    <div class="container px-0">
        <div class="pagination-wrapper px-sm-3">
            <div class="pagination-container">
                <div class="pagination-border"></div>
                <div class="pagination-box active-pagination">
                    <h1>1</h1>
                    <p>Personal Information</p>
                </div>
                <div class="pagination-box active-pagination">
                    <h1>2</h1>
                    <p>Other Information</p>
                </div>
                <div class="pagination-box">
                    <h1>3</h1>
                    <p>Specialty </p>
                </div>
                <div class="pagination-box">
                    <h1>4</h1>
                    <p>Payment Method</p>
                </div>
                <div class="pagination-box">
                    <h1>5</h1>
                    <p>View Profile</p>
                </div>
            </div>


        </div>
    </div>
</div>

<!-- ............Form Section................ -->
<div class="container pt-5">
    <form>

        <div class="row">
            <div class="col-md-6" data-aos="fade-left">
                <div class="form-group pro-form">
                    <label for="inputAddress" class="">Emergency Contact</label>
                    <input type="text" class="form-control pl-4 validate" id="emergency_contact" name="emergency_contact">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputAddress" class=" ">Relationship With Emergency Contact</label>
                    <input type="text" class="form-control pl-4 validate" id="relation_emergency" name="relation_emergency">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="form-group pro-form">
                    <label for="inputAddress2" class=" ">Date of Birth</label>
                    <input type="date" class="form-control pl-4 validate" id="date_of_birth" name="date_of_birth">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputCity" class=" ">Gender</label>
                    <select class="wide s-select form-control pl-4 validate" name="gender" id="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6 pb-3" data-aos="fade-left">
                <div class="form-group pro-form">
                    <label for="inputAddress2" class=" ">Country</label>
                    <div class="select-outer">
                        <select class="wide s-select form-control pl-4 validate" id="country" name="country">
                            <option value="USA">USA</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                        </select>
                        <!-- <i class="fa fa-chevron-down" aria-hidden="true"></i> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 pb-3" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputCity" class=" ">State</label>
                    <select class="wide s-select form-control pl-4 validate" id="state" name="state">
                        <option value="Alaska">Alaska</option>
                        <option value="Washington">Washington</option>
                        <option value="South">New South Wales</option>
                        <option value="Tirol">Tirol</option>
                    </select>
                </div>
            </div>

            <div class="col-md-6" data-aos="fade-right">
                <!-- <div class="form-group pro-form">
                    <label for="inputCity" class=" ">Weight</label>


                    <input type="text" class="form-control pl-4" id="inputCity" name="weight">
                </div> -->

                <div class="form-group pro-form">
                    <label for="inputCity" class=" ">Weight</label>
                    <label class="radio-inline">
                        <input class="color-radio mx-2 weight_unit" value="kg" type="radio" name="weight_unit" checked>KGs
                    </label>
                    <label class="radio-inline">
                        <input class="color-radio mx-2 weight_unit" value="lb" type="radio" name="weight_unit">LBs
                    </label>
                    <!-- <input type="text" name="weight" value="{{auth()->user()->weight ?? ''}}" class="form-control py-4 " id="inputCity"> -->
                    <input type="text" class="form-control pl-4" id="weight" name="weight">


                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="form-group pro-form">
                    <!-- <label for="inputAddress2" class=" ">Height</label>


                    <input type="text" class="form-control pl-4" id="inputAddress2" name="height"> -->

                    <label for="inputAddress2" class=" ">Height</label>
                    <label class="radio-inline">
                        <input class="color-radio mx-2 height_unit" value="feet" type="radio" name="height_unit" checked>Feet
                    </label>
                    <label class="radio-inline">
                        <input class="color-radio mx-2 height_unit" value="cm" type="radio" name="height_unit">CM
                    </label>
                    <label class="radio-inline">
                        <input class="color-radio mx-2 height_unit" type="radio" value="inches" name="height_unit">Inches
                    </label>
                    <input type="text" class="form-control pl-4" id="height" name="height">
                </div>


            </div>
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputCity" class=" ">Any Known Medical Conditions?</label>
                    <input type="text" class="form-control pl-4" id="madical_condition" name="madical_condition">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="form-group pro-form">
                    <label for="locationInput" class="">Workout Location</label>
                    <div class="location-container">
                        <input type="text" class="form-control pl-4 validate" id="locationInput" name="workout_location">
                        <!-- <input type="url" class="form-control pl-4" id="inputCity" name="facebook"> -->
                        <div class="price-select-input">
                            <div class="select-outer">
                                <select class="wide2 s-select currency-select form-control " id="locationTag" name="tag">
                                    <option value="Home">Home</option>
                                    <option value="Gym">Gym</option>
                                    <option value="Work">Work</option>
                                    <option value="Park">Park</option>
                                    <option value="Other">Other</option>
                                </select>
                                <!-- <i class="fa fa-chevron-down" aria-hidden="true"></i> -->
                            </div>
                        </div>
                        <i class="fa fa-plus addLocation" style="cursor: pointer;"></i>
                    </div>
                </div>
            </div>
            <div class="col-12 py-3" id="display-location">
                <!-- <div class="d-flex align-items-center">
                    <div class="location-pill">
                        <span>Chestnut Tree Lane</span>
                        |
                        <span>Home</span>
                        <img class="remove-location" src="{{asset('public/assets/images/remove.png')}}" alt="">
                    </div>
                </div> -->
            </div>

            <div class="col-md-4" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputCity" class=" ">Add Facebook URL</label>
                    <div class="input-container">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                        <input type="url" class="form-control pl-4" id="facebook" name="facebook">
                    </div>

                </div>
            </div>
            <div class="col-md-4" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputCity" class=" ">Add Insta URL</label>
                    <div class="input-container">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        <input type="url" class="form-control pl-4" id="instagram" name="instagram">
                    </div>

                </div>
            </div>
            <div class="col-md-4" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputCity" class=" ">Add Linkedin URL</label>
                    <div class="input-container">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                        <input type="url" class="form-control pl-4" id="linkedin" name="linkedin">
                    </div>

                </div>
            </div>
        </div>
        <div class="updateinfo-qualification my-4 px-3 ">
            <h1 class="mb-4">Upload Qualification</h1>
            <div class="update-info-qualification-image" id="certificatePreviews">
                <label style="cursor: pointer;">
                    <img src="{{asset('public/assets/trainerimages/uploadimg.svg')}}">
                    <input type="file" name="myfile[]" id="choose-file" style="display:none" accept="image/png, image/svg, image/jpeg" multiple>
                </label>
            </div>
        </div>
        <div class="col-12 my-5">
            <div class=" profile-nxt-btn">
                <!-- <a  class="update-profile-form-btn"id="sighnup_submit">Next</a> -->


                <button class="button" type="submit" id="sighnup_submit">Next</button>
            </div>
        </div>
    </form>
</div>

<!-- ..............Modal....................... -->
<div class="modal fade" id="imageuploadmodal" tabindex="-1" role="dialog" aria-labelledby="forgotPassModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content signupModalDialogue">
            <!-- <div class="w-50" style="background-color:#E37048 ; height:5px; margin-left:15px"></div> -->
            <div class="modalHeader text-right">
                <img class="close-modal" style="width:30px;" data-dismiss="modal" src="{{asset('public/assets/images/x-circle.svg')}}" alt="">
            </div>
            <div class="container">
                <form action="">
                    <div class="modalContent py-3 px-4">
                        <div class="row">
                            <div class="col-12 text-center text-sm-right">
                                <div class="modal-img">
                                    <div class="row">
                                        <div class="col-12">
                                            <div id="img-preview" class="img-preview">
                                                <img id="modalCertificate" src="{{asset('public/assets/trainerimages/certificate.svg')}}" alt="">
                                            </div>
                                        </div>
                                        <!-- <div class="col-sm-6 d-flex align-self-end pl-sm-0 py-4 py-sm-0">
                                            <div class="progress-cotent">
                                                <div class="progress-par">
                                                    <p>Uploading</p>
                                                    <p>50%</p>
                                                </div>
                                                <div class="progress mt-1">
                                                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-outline pro-form my-5">
                            <label class="form-label" for="textAreaExample">Add Description</label>
                            <textarea class="form-control" id="certificateCaption" rows="4" placeholder="Type Here"></textarea>
                        </div>
                        <div class=" modal-btn my-5 text-sm-right text-center">
                            <a href="javascript:void(0)" class="update-profile-form-btn" id="addCertificate">Upload Image</a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection
@section('insertsfooter')
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6NS5JQ0bHHnlcqiHLU2BktDTr9l22ZeY&callback=initMap&v=weekly" async defer></script> -->
<script src="{{ asset('public/assets/js/jquery.nice-select.js') }}"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6NS5JQ0bHHnlcqiHLU2BktDTr9l22ZeY&v=3.exp&sensor=false&libraries=places"></script>
<script>
    $(document).ready(function() {
        $('.s-select').niceSelect();
        var certificateArray = [];
        var location = [];
        var index = 0;
        var index2 = 0;


        const fileInput = document.getElementById('choose-file');
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        // Create Link of the image when the file is selected
        fileInput.addEventListener('change', (event) => {
            const file = fileInput.files[0];
            const formData = new FormData();
            formData.append('file', file);

            // Send the AJAX request
            fetch("{{ route('uploadImage') }}", {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    // Handle the response from the server
                    $("#modalCertificate").attr('src', data.path);
                    $("#imageuploadmodal").modal('show');
                })
                .catch(error => console.error(error));
        });

        // Add Certificate 
        $(document).on('click', "#addCertificate", function() {
            var image = $("#modalCertificate").attr('src');
            var imgCaption = $("#certificateCaption").val();
            let div = `<div class="grid-item py-2 py-sm-0">
                    <img class="deleteCertificate" style="cursor:pointer" data-src="${index}" src="{{asset('public/assets/trainerimages/cross-icon.svg')}}" alt="">
                    <img src="${image}" alt="">
                </div>`
            $("#certificatePreviews").append(div);
            index++;
            var certificateData = {
                image: image,
                caption: imgCaption
            };
            certificateArray.push(certificateData);
            $("#imageuploadmodal").modal('hide');
        });

        // Remove Certificate 
        $(document).on('click', ".deleteCertificate", function() {
            index = $(this).attr('data-src');
            $(this).parent().remove();
            certificateArray.splice(index, 1);
            console.log(certificateArray);
        })

        // // Append Location 
        $(".addLocation").click(function() {
            let location_name = $("#locationInput").val();
            let tag = $("#locationTag").val();
            let div = `<div class="d-flex align-items-center">
                    <div class="location-pill">
                        <span>${location_name}</span>
                        |
                        <strong style="color: #E37048">${tag}</strong>
                        <img class="remove-location" data-src="${index2}" src="{{asset('public/assets/images/remove.png')}}"  alt="">
                    </div>
                </div>`;
            $("#display-location").append(div);
            // console.log(location);
            index2++;
            let obj = {
                name: location_name,
                tag: tag
            }
            location.push(obj);
            // get index of remove item
            //  remove index from location array
            $(document).on('click', ".remove-location", function() {
                // index = $(this).attr('data-src');
                var test = $(this).parent().remove();
                var index = $(this).attr('data-src');


                location.splice(index, 1);
                console.log(location);

            })


        })


        // Signup Form request START HERE 
        $('#sighnup_submit').on('click', function(e) {
            e.preventDefault();
            // console.log(certificateArray);
            console.log(location);
            var date_of_birth = $('#date_of_birth').val();
            var emergency_contact = $('#emergency_contact').val();
            var gender = $('#gender').val();
            var country = $('#country').val();
            var state = $('#state').val();
            var weight = $('#weight').val();
            var weight_unit = $(this).find('.weight_unit').val();
            var height = $('#height').val();
            var hieght_unit = $(this).find('.height_unit').val();
            var madical_condition = $('#madical_condition').val();
            var relationship_emergency_contact = $('#relation_emergency').val();
            var facebook_url = $('#facebook').val();
            var instagram_url = $('#instagram').val();
            var linkedin_url = $('#linkedin').val();

            var certificate_image = certificateArray;
            var workout_location = location;
            // alert(certificate_image);
            // if (date_of_birth != "" && emergency_contact != "" && gender != "" && country != "") {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },

                url: `{{route('update_profile_two')}}`,
                type: "POST",
                data: {
                    date_of_birth: date_of_birth,
                    emergency_contact: emergency_contact,
                    gender: gender,
                    country: country,
                    state: state,
                    weight: weight,
                    weight_unit: weight_unit,
                    height: height,
                    hieght_unit: hieght_unit,
                    madical_condition: madical_condition,
                    relationship_emergency_contact: relationship_emergency_contact,
                    facebook_url: facebook_url,
                    instagram_url: instagram_url,
                    linkedin_url: linkedin_url,
                    certificate_image: certificate_image,
                    workout_location: workout_location,
                },
                cache: false,
                success: function(dataResult) {
                    // alert('success');

                    console.log(dataResult);
                    if (dataResult.success == true) {

                        window.location.href = `{{url('/trainer/stepthree')}}`;
                    } else if (dataResult.success == false) {
                        // $('.loaderDiv').hide();

                        toastr.error(dataResult.message);
                    }
                },
                error: function(jqXHR, exception) {
                    $('.loaderDiv').hide();
                    toastr.error(jqXHR.responseJSON.message);
                }

            });
            // } else {
            //     toastr.error("Please Fill All Fields.");
            //     $('.loaderDiv').hide();
            // }
        });
        // Signup Form request END HERE 


        // Integrate map search on input Location 
        function initMap() {
            var input = document.getElementById('locationInput');
            new google.maps.places.Autocomplete(input);
        }
        // // Call the initMap() function when the Google Maps API has finished loading
        initMap();
    });
</script>
<script>
    function openModal() {
        $("#imageuploadmodal").modal('show')
        $("#imageuploadmodal").css('padding-right', 0)
    }
</script>
<!-- <script>
    // Append Location
    // $('.s-select').niceSelect();
    // var certificateArray = [];
    // const location = [];
    // var index = 0;
    // var index2 = 0;
    // $(".addLocation").click(function() {
    //     let location_name = $("#locationInput").val();
    //     let tag = $("#locationTag").val();
    //     let div = `<div class="d-flex align-items-center">
    //                 <div class="location-pill">
    //                     <span>${location_name}</span>
    //                     |
    //                     <strong style="color: #E37048">${tag}</strong>
    //                     <img class="remove-location" data-src="${index2}" src="{{asset('public/assets/images/remove.png')}}"  alt="">
    //                 </div>
    //             </div>`;

    //     $("#display-location").append(div);
    //     // console.log(location);
    //     index2++;
    //     let obj = {
    //         name: location_name,
    //         tag: tag
    //     }
    //     location.push(obj);
    //     // get index of remove item
    //     //  remove index from location array
    //     $(document).on('click', ".remove-location", function() {
    //         // index = $(this).attr('data-src');
    //         var test = $(this).parent().remove();
    //         var index = $(this).attr('data-src');


    //         location.splice(index, 1);
    //         console.log(location);

    //     })


    // })


    // Integrate map search on input Location 
    // function initMap() {
    //     var input = document.getElementById('locationInput');
    //     new google.maps.places.Autocomplete(input);
    // }

    // Call the initMap() function when the Google Maps API has finished loading
    // initMap();

    $(document).ready(function() {
        var sessionsArray = [];
        var images = [];
        var index = 0;

        // $('.s-select').niceSelect();

        const fileInput = document.getElementById('choose-file');
        const imagePreview = document.getElementById('img-preview');


        fileInput.addEventListener('change', function(e) {
            for (let i = 0; i < fileInput.files.length; i++) {
                const file = fileInput.files[i];
                const image = new Image();
                image.src = URL.createObjectURL(file);
                image.onload = function() {
                    URL.revokeObjectURL(image.src);
                };

                const imageWrapper = document.createElement('div');
                imageWrapper.classList.add('image-wrapper');
                imageWrapper.classList.add('position-relative');

                const imageCloseButton = document.createElement('a');
                imageCloseButton.classList.add('image-close-button');
                imageCloseButton.classList.add('closeBtn');
                imageCloseButton.setAttribute('type', 'btn');
                imageCloseButton.setAttribute('href', 'javascript:void(0)');
                imageCloseButton.innerHTML = `<img class="closeImg" src="{{asset('public/assets/trainerimages/cross-icon.svg')}}" alt="">`;

                const imageContainer = document.createElement('div');
                imageContainer.classList.add('image-container');
                image.setAttribute('id', 'modalCertificate');

                imageContainer.appendChild(image);
                imageWrapper.appendChild(imageCloseButton);
                imageWrapper.appendChild(imageContainer);
                imagePreview.appendChild(imageWrapper);

                var imgCaption = $("#certificateCaption").val();
                // console.log(imgCaption);
                // alert('com');
                let obj = {
                    image: file,
                    caption: imgCaption
                }

                images.push(obj);
                imageCloseButton.addEventListener('click', function() {
                    imageWrapper.remove();
                    let index = images.indexOf(obj);
                    if (index > -1) {
                        images.splice(index, 1);
                    }
                    console.log(images);
                });
            }
        });

        //////// insert data in step 2//////////// 

        $('#sighnup_submit').on('click', function(e) {
            // $('.loaderDiv').show();
            alert('cp');
            e.preventDefault();
            var date_of_birth = $('#date_of_birth').val();
            var emergency_contact = $('#emergency_contact').val();
            var gender = $('#gender').val();
            var country = $('#country').val();
            var state = $('#state').val();
            var weight = $('#weight').val();
            var weight_unit = $(this).find('.weight_unit').val();
            var height = $('#height').val();
            var hieght_unit = $(this).find('.height_unit').val();
            var madical_condition = $('#madical_condition').val();
            var relationship_emergency_contact = $('#relation_emergency').val();
            var facebook_url = $('#facebook').val();
            var instagram_url = $('#instagram').val();
            var linkedin_url = $('#linkedin').val();
            console.log(certificate_image);
            var images = JSON.stringify(images);
            var certificate_image = images;
            alert(certificate_image);
            // if (date_of_birth != "" && emergency_contact != "" && gender != "" && country != "") {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },

                url: `{{route('update_profile_two')}}`,
                type: "POST",
                data: {
                    date_of_birth: date_of_birth,
                    emergency_contact: emergency_contact,
                    gender: gender,
                    country: country,
                    state: state,
                    weight: weight,
                    weight_unit: weight_unit,
                    height: height,
                    hieght_unit: hieght_unit,
                    madical_condition: madical_condition,
                    relationship_emergency_contact: relationship_emergency_contact,
                    facebook_url: facebook_url,
                    instagram_url: instagram_url,
                    linkedin_url: linkedin_url,
                    certificate_image: certificate_image,
                },
                cache: false,
                success: function(dataResult) {
                    alert('success');

                    console.log(dataResult);
                    if (dataResult.success == true) {
                        // $('.loaderDiv').hide();
                        // $('#signupModal').modal('hide');
                        // $('#loginModal').modal('show');
                        // toastr.success('Registration Successful!');
                    } else if (dataResult.success == false) {
                        // $('.loaderDiv').hide();

                        toastr.error(dataResult.message);
                    }
                },
                error: function(jqXHR, exception) {
                    $('.loaderDiv').hide();
                    toastr.error(jqXHR.responseJSON.message);
                }

            });
            // } else {
            //     toastr.error("Please Fill All Fields.");
            //     $('.loaderDiv').hide();
            // }
        });

    })
</script> -->

@endsection