@extends('layouts.trainerSide.default')
<!-- <link rel="stylesheet" href="{{asset('public/assets/trainercss/stepthree.css')}}">
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

    .update-info-content h1 {
        font-size: 1.3rem;
        font-weight: 400;
    }

    /* form */
    .form-container {
        background: #F8F8F8;
        border-radius: 10px
    }

    .pro-form label {
        color: #464646;
        font-size: 0.8rem;
    }

    .pro-form input {
        height: 65px;
        border-radius: 10px !important;
        border: 1px solid rgba(0, 0, 0, 0.2) !important;
        box-shadow: none !important;
        outline: none !important;
        background: #F8F8F8;
        color: #666666 !important;
    }

    .nice-select.wide {
        height: 65px !important;
        border: 1px solid #CECECE !important;
        border-radius: 10px !important;
        justify-content: flex-start !important;
        background: #F8F8F8;
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

    .select-outer {
        position: relative;
    }

    .select-outer i {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translate(-50%, -50%);
        pointer-events: none;
        cursor: pointer;
        color: #848484;
    }


    */ .pro-form input::placeholder,
    .pro-form select::placeholder {
        color: #666666;
    }

    .difficulty-level {
        display: flex;
        align-items: center;
        height: 65px;
    }

    .difficulty-level input {
        height: 45px !important;
        border-radius: 30px !important;
        text-align: center;
        border: 1px solid #E37048 !important;
        color: #E37048;
        background: #F8F8F8 !important;
        cursor: pointer;
    }

    .difficulty-level input:hover,
    .difficulty-level input:active,
    .difficulty-level input:focus {
        background: #E37048 !important;
        color: white;
    }

    .price-outer {
        position: relative;
    }

    .price-box {
        position: absolute;
        top: 50%;
        left: 0;
        transform: translate(0%, -50%);
        background-color: #E37048;
        width: 50px;
        height: 100%;
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .price-outer input {
        padding-left: 60px;
    }

    .price-box h1 {
        color: white;
        font-size: 1rem;
        margin-bottom: 0px;
        font-weight: 400;
    }

    .time-box-outer {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
    }

    .time-box-inner {
        border-radius: 30px;
        padding: 10px 20px;
        color: #fff;

    }

    .time-box-inner p {
        color: white;
        margin-bottom: 0px;
    }

    .yellow-time {
        background: #FFA900;

    }

    .green-time {
        background: #B1D244;
    }

    .form-btn a {
        width: 160px;
        height: 50px;
        background-color: #F8F8F8;
        border: 1px solid #E37048;
        color: #E37048;
        border-radius: 7px;
        margin: 0 auto;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: none !important;
        text-decoration: none !important;
    }

    .form-btn a:hover {
        background-color: #E37048;
        color: white;
    }






    .form-btn a {
        text-decoration: none;
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

    .update-info-qualification-image label {
        cursor: pointer;
    }

    .update-info-qualification-image img {
        /* padding: 0 7px; */
        width: 100%;
        max-width: 200px;
        height: 130px;
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

    .grid-item img:nth-of-type(2) {
        border-radius: 10px;
    }

    .slot-heading h1 {
        color: #E37048;
        font-size: 1.6rem;
        font-weight: bold;
    }

    .slot-wrapper {
        background: #fff;
        border-radius: 10px;
    }

    .slot-vertical-icon {
        position: relative;
    }

    .slot-vertical-icon img {
        max-width: 7px;
        cursor: pointer;
    }

    .slot-vertical-icon .icon-div {
        background: #fff;
        position: absolute;
        right: 0px;
        box-shadow: 0px, 5px rgba(0, 0, 0, 0.16);
        border-radius: 7px;
        width: 100%;
        box-shadow: 5px 10px 18px #888888;
        max-width: 150px;
        top: 30px;
    }

    .icon-edit {
        border-bottom: 1px solid #858585;
    }

    .icon-edit,
    .icon-del {
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
    }

    .icon-div-inner:hover {
        background-color: #E37048;
        color: white;
    }

    .icon-div-inner:hover h1,
    .icon-div-inner:hover i {
        color: white
    }

    .icon-edit h1,
    .icon-del h1 {
        font-size: 1rem;
        color: #858585;
        margin-bottom: 0px;
    }

    .icon-del i,
    .icon-edit i {
        color: #858585;
    }

    .slot-grid-container {
        display: grid !important;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)) !important;
        grid-gap: 10px !important;
        align-items: stretch;
    }

    .slot-image img {
        width: 100%;
        /* max-width: 250px; */
        height: 100px;
        object-fit: cover;
        border-radius: 10px;
    }

    .slot-wrapper-heading {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .left-slot-heading h1 {
        color: #E37048;
        font-size: 1.3rem;
        font-weight: 500;
    }

    .left-slot-heading h2 {
        color: #E37048;
        font-size: 1.1rem;
        font-weight: 500;
    }

    .right-slot-heading h1 {
        color: #E37048;
        font-size: 1.3rem;
    }

    .timing-stack {
        border-radius: 10px;
    }

    .timing-stack-inner {
        padding-top: 1rem;
        width: 100%;
        border-radius: 10px;
        display: flex;
        align-items: center;
    }

    .week-name h1 {
        font-size: 1.4rem;
        color: #333333;
    }

    .timing-stack-one {
        background-color: #FFDA98;
    }

    .timing-stack-two {
        background-color: #ECFFAB;
    }

    .timing-stack-three {
        background-color: rgba(141, 40, 173, 0.15);
    }

    .timing-stack-four {
        background-color: #FFB3BC;
    }

    .timing-stack-five {
        background-color: #ADABFF;
    }

    .timing-stack-six {
        background-color: #FFB272;
    }

    .timing-stack-seven {
        background-color: #6CA3EA;
    }

    .time-stack-outer {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
    }

    .time-stack-inner {
        border-radius: 30px;
        width: 150px;
        height: 40px;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #E37048;
        background-color: #fff;

    }

    @media screen and (max-width:991px) and (min-width:768px) {
        .difficulty-level input {
            font-size: 0.8rem;
            height: 35px !important;
            border-radius: 30px !important;
            text-align: center;
            border: 1px solid #E37048 !important;
            color: #E37048;
            background: #F8F8F8 !important;
            cursor: pointer;
        }
    }

    @media screen and (max-width:768px) and (min-width:577px) {
        .grid-item img:nth-of-type(1) {
            position: absolute;
            height: 22px;
            width: 22px;
            right: 20px;
            top: -10px;

        }
    }

    @media screen and (max-width:576px) {
        .difficulty-level {
            display: flex;
            align-items: center;
            height: 55px;
        }

        .difficulty-level input {
            font-size: 0.8rem;
            height: 35px !important;
            border-radius: 30px !important;
            text-align: center;
            border: 1px solid #E37048 !important;
            color: #E37048;
            background: #F8F8F8 !important;
            cursor: pointer;
        }

        .pro-form input {
            height: 55px;
        }

        .pro-form select {
            height: 55px !important;
        }

        .time-box-inner p {
            font-size: 0.8rem;
        }

        .timing-stack-inner {
            flex-direction: column;
        }

        .time-stack-outer {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            justify-content: center;
            flex-direction: column;
        }

        .right-slot-heading h1 {
            color: #E37048;
            font-size: 1rem;
        }

        .left-slot-heading h1 {
            color: #E37048;
            font-size: 1rem;
            font-weight: 500;
        }

        .left-slot-heading h2 {
            color: #E37048;
            font-size: 1rem;
            font-weight: 500;
        }

        .week-name h1 {
            font-size: 1rem;
            color: #333333;
        }

        .slot-heading h1 {
            color: #E37048;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .nice-select.wide {
            height: 55px !important;
            border: 1px solid #CECECE !important;
            border-radius: 10px !important;
            justify-content: flex-start !important;
            background: #F8F8F8;
        }
    }

    /* time-form */
    .time-form {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .time-form-field {
        position: relative;
    }

    .time-form-field img {
        position: absolute;
        top: 50%;
        right: 0;
        transform: translate(-50%, -50%);
        width: 25px;
    }

    .time-form button {
        background-color: #E37048;
        color: white;
        outline: none;
        box-shadow: none !important;
        border: 1px solid #E37048 !important;
        font-size: 0.9rem;
        height: 65px;
        padding: 20px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .time-form-field h1 {
        margin-bottom: 0px;
        font-size: 0.8rem;
        color: #666666;
        font-weight: normal;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);

    }

    @media screen and (max-width:576px) {
        .time-form button {
            background-color: #E37048;
            color: white;
            outline: none;
            box-shadow: none !important;
            border: 1px solid #E37048 !important;
            font-size: 0.9rem;
            height: 55px;
            display: flex;
            align-items: center;
            width: 100%;
            text-align: center;
            justify-content: center;
        }

        .time-form {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-direction: column;
        }

        .time-form-field {
            width: 100%;
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

        .updateinfo-qualification h1 {
            text-align: center;
        }
    }

    .slot-arrow i {
        color: #E37048;
        font-weight: bold;
        font-size: 2rem;
        cursor: pointer;
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

    .price-select-input {
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .price-select-input .select-outer {
        width: 20%;

    }

    .price-select-input .nice-select.wide {
        border-top-right-radius: 0px !important;
        border-bottom-right-radius: 0px !important;
    }

    .price-select-input input {
        width: 80%;
        border-top-left-radius: 0px !important;
        border-bottom-left-radius: 0px !important;
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

    .stack-categories h1 {
        font-size: 1rem;
        margin-bottom: 0px;
        background-color: transparent;
        /* border: 1px solid #E37048;
        border-radius: 30px; */
        padding: 0.5rem 1rem;
        color: #E37048;
        font-weight: 500;
        display: flex;
        width: 30%;
    }

    .stack-categories span {
        font-size: 1rem;
        margin-bottom: 0px;
        background-color: transparent;
        /* border: 1px solid #E37048;
        border-radius: 30px; */
        color: #E37048;
        width: 70%;
    }

    .stack-categories h1 span {
        font-weight: 400;
    }

    @media screen and (max-width:767px) {
        .stack-categories h1 {
            width: 100%;
        }
    }

    @media screen and (max-width:576px) {
        .stack-categories h1 {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .price-select-input .select-outer {
            width: 30%;

        }

        .price-select-input input {
            width: 70%;
            border-top-left-radius: 0px !important;
            border-bottom-left-radius: 0px !important;
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
            right: 8px !important;
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

        /* .price-select-input .nice-select.wide span {
            font-size: 0.9rem !important;
        } */

    }

    .text-area {
        background: #F8F8F8 !important;
        border-radius: 10px !important;
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
                <div class="pagination-box active-pagination">
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
<!-- form-section -->
<div class="container form-container my-5 py-5">
    <form>
        <div class="row">
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputAddress" class=" ">Select Category</label>
                    <div class="select-outer">
                        <select class="wide s-select form-control pl-4" name="category_id" id="category_id">
                            <option value="yoga">Yoga</option>
                            <option value="yoga">Yoga</option>
                            <option value="yoga">Yoga</option>
                        </select>
                        <!-- <i class="fa fa-chevron-down" aria-hidden="true"></i> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="form-group pro-form">
                    <label for="inputAddress" class=" ">Sub-Category</label>
                    <input type="text" class="form-control pl-4" id="sub_category" placeholder="Enter Sub-Category" name="subCategory">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputAddress2" class=" ">Difficulty Level</label>
                    <div class="difficulty-level">
                        <input type="text" class="form-control py-2 difficulties" id="beginner" value="Beginner" readonly name="difficulty-level">
                        <input type="text" class="form-control py-2 difficulties mx-3" id="intermediate" value="Intermediate" readonly name="difficulty-level">
                        <input type="text" class="form-control py-2 difficulties" id="advanced" value="Advanced" readonly name="difficulty-level">
                        <input type="hidden" class="form-control py-2" id="difficulty_level" name="difficulty" value="">
                    </div>

                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="form-group pro-form">
                    <label for="inputAddress2" class="">Price</label>
                    <div class="price-outer">
                        <!-- <div class="price-box">
                            <h1>HKD</h1>
                        </div> -->
                        <div class="price-select-input">
                            <div class="select-outer">
                                <select class="wide s-select currency-select form-control " id="price_unit" name="priceUnit">
                                    <option value="USD">USD</option>
                                    <option value="EURO">EURO</option>
                                    <option value="YEN">YEN</option>
                                    <option value="GBP">GBP</option>
                                    <option value="PKR">PKR</option>
                                </select>
                                <!-- <i class="fa fa-chevron-down" aria-hidden="true"></i> -->
                            </div>
                            <input type="text" class="form-control pl-4" id="price" value="100" name="price">
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6 pb-2" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputAddress" class=" ">Session Type</label>
                    <div class="select-outer">
                        <select class="wide s-select form-control pl-4" id="type" name="type">
                            <option value="0">One to one</option>
                            <option value="1">Group</option>
                        </select>
                        <!-- <i class="fa fa-chevron-down" aria-hidden="true"></i> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 " data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputAddress" class=" ">Preference</label>
                    <div class="select-outer">
                        <select class="wide s-select form-control pl-4" id="preference" name="preference">
                            <option value="0">One Time</option>
                            <option value="1">Recurring</option>
                        </select>
                        <!-- <i class="fa fa-chevron-down" aria-hidden="true"></i> -->
                    </div>
                </div>

            </div>

            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputAddress" class=" ">Days</label>
                    <div class="select-outer">
                        <select class="wide s-select form-control pl-4" id="day" name="day">
                            <option value="Mon">Monday</option>
                            <option value="Tue">Tuesday</option>
                            <option value="Wed">Wednesday</option>
                            <option value="Thu">Thursday</option>
                            <option value="Fri">Friday</option>
                            <option value="Sat">Saturday</option>
                            <option value="Sun">Sunday</option>
                        </select>
                        <!-- <i class="fa fa-chevron-down" aria-hidden="true"></i> -->
                    </div>
                </div>

            </div>
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputAddress" class=" ">Date</label>
                    <input type="date" class="form-control pl-4" id="sessionDate" placeholder="" name="sessionDate">
                </div>

            </div>
            <div class="col-md-6 pb-2" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputAddress" class=" ">Class Type</label>
                    <div class="select-outer">
                        <select class="wide s-select form-control pl-4" id="session_type" name="sessionType">
                            <option value="0">Online</option>
                            <option value="1">In-person</option>
                        </select>
                        <!-- <i class="fa fa-chevron-down" aria-hidden="true"></i> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-6 " data-aos="fade-left">
                <div class="form-group pro-form">
                    <label for="inputAddress" class=" ">Time slot</label>
                    <div class="time-form">
                        <div class="time-form-field pro-form">
                            <input type="time" class="form-control py-4" id="startTime" name="startTime" placeholder="">
                            <!-- <img src="{{asset('public/assets/images/clock-icon.png')}}" alt=""> -->
                        </div>
                        <div class="time-form-field mx-sm-3 my-4 my-sm-0">
                            <h1>to</h1>
                        </div>

                        <div class="time-form-field pro-form mb-3 mb-sm-0 mr-sm-2">
                            <input type="time" class="form-control py-4 " id="endTime" name="endTime" placeholder="">
                            <!-- <img src="{{asset('public/assets/images/clock-icon.png')}}" alt=""> -->
                        </div>
                        <!-- <button class="">Add</button> -->
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-6 my-auto" data-aos="fade-left">
                <div class="time-box-outer">
                    <div class="yellow-time time-box-inner m-2">
                        <p class="mb-0">9 am to 10 am</p>
                    </div>
                    <div class="green-time time-box-inner m-2">
                        <p class="mb-0">12 pm to 2 pm</p>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-12">
                <div class="form-btn my-3 ">
                    <a href="#" class="p-0 btn">Done</a>
                </div>
            </div> -->
        </div>
        <div class="updateinfo-qualification my-4 px-3 ">
            <h1 class="mb-4">Upload Image</h1>
            <div class="update-info-qualification-image">
                <label>
                    <img src="{{asset('public/assets/trainerimages/uploadimg.svg')}}">
                    <input type="file" name="myfile" style="display:none">
                </label>
                <div class="grid-item py-2 py-sm-0">
                    <img src="{{asset('public/assets/trainerimages/cross-icon.svg')}}" alt="">
                    <img src="{{asset('public/assets/trainerimages/stepthreeone.jpg')}}" alt="">
                </div>
                <div class="grid-item py-2 py-sm-0">
                    <img src="{{asset('public/assets/trainerimages/cross-icon.svg')}}" alt="">
                    <img src="{{asset('public/assets/trainerimages/stepthreetwo.jpg')}}" alt="">
                </div>

            </div>
        </div>
        <div class="form-btn my-5 ">
            <a href="{{url('/trainer/stepfour')}}" class="p-0 btn">Done</a>
        </div>
    </form>

</div>
<div class="container slot-heading">
    <h1>All Slots</h1>
</div>
<div class="container form-container my-5 py-5">
    <!-- .............Stretching Outdoors............... -->
    <div class="slot-wrapper py-3 px-3 my-4">
        <div class="slot-vertical-icon my-2 text-right">
            <img class="dot-toggle-icon-one" src="{{asset('public/assets/trainerimages/slotverticalicon.svg')}}" alt="">
            <div class="icon-div icon-div-one box">
                <div class="icon-edit py-3 icon-div-inner ">
                    <i class="fa fa-pencil-square-o pr-2" aria-hidden="true"></i>

                    <h1>Edit</h1>
                </div>
                <div class="icon-del py-3 icon-div-inner">
                    <i class="fa fa-trash pr-2" aria-hidden="true"></i>

                    <h1>Delete</h1>
                </div>
            </div>
        </div>

        <div class="slot-grid-container">
            <div class="slot-grid-item">
                <div class="slot-image">
                    <img src="{{asset('public/assets/trainerimages/stepthreeone.jpg')}}" alt="">
                </div>

            </div>
            <div class="slot-grid-item">
                <div class="slot-image">
                    <img src="{{asset('public/assets/trainerimages/stepthreetwo.jpg')}}" alt="">
                </div>

            </div>
            <div class="slot-grid-item">
                <div class="slot-image">
                    <img src="{{asset('public/assets/trainerimages/stepthree.jpg')}}" alt="">
                </div>

            </div>
            <div class="slot-grid-item">
                <div class="slot-image">
                    <img src="{{asset('public/assets/trainerimages/stepthreefour.jpg')}}" alt="">
                </div>

            </div>
            <div class="slot-grid-item">
                <div class="slot-image">
                    <img src="{{asset('public/assets/trainerimages/stepthreefive.jpg')}}" alt="">
                </div>

            </div>

        </div>
        <div class="slot-wrapper-heading px-3 my-3">
            <div class="left-slot-heading">
                <h1>Stretching Outdoors</h1>
                <h2 class="pt-2">Static Stretching</h2>
            </div>
            <div class="right-slot-heading">
                <h1>$100</h1>
            </div>
        </div>
        <div class="slot-timing-stacks stack-timing-one">
            <div class="timing-stack timing-stack-one px-3 my-3">
                <div class="timing-stack-inner">
                    <div class="week-name">
                        <h1>Mon:</h1>
                    </div>
                    <div class="stack-time">
                        <div class="time-stack-outer px-4 ">
                            <div class="time-stack-inner m-2">
                                <p class="mb-0">9 am to 10 am</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="stack-categories pb-2">
                    <div class="row text-md-left text-center">
                        <div class="col-md-6">
                            <div class="w-100 d-md-flex align-items-center">
                                <h1>Difficulty Level:</h1>
                                <span>Lorem ipsum dolor sit amet</span>
                            </div>
                            <div class="w-100 d-md-flex align-items-center">
                                <h1>Session Type:</h1>
                                <span>Lorem ipsum dolor sit amet</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="w-100 d-md-flex align-items-center">
                                <h1>Class Type:</h1>
                                <span>Lorem ipsum dolor sit amet</span>
                            </div>
                            <div class="w-100 d-md-flex align-items-center">
                                <h1>Preference:</h1>
                                <span>Lorem ipsum dolor sit amet</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-12">
            <div class="slot-arrow slot-arrow-one text-center">
                <i class="fa fa-angle-double-down down-arrow" aria-hidden="true"></i>
                <i class="fa fa-angle-double-up up-arrow" aria-hidden="true"></i>
            </div>
        </div>



    </div>



    <!-- .............Yoga Slot............... -->
    <div class="slot-wrapper py-3 px-3 my-4">
        <div class="slot-vertical-icon my-2 text-right">
            <img class="dot-toggle-icon-two" src="{{asset('public/assets/trainerimages/slotverticalicon.svg')}}" alt="">
            <div class="icon-div icon-div-two box">
                <div class="icon-edit py-3 icon-div-inner">
                    <i class="fa fa-pencil-square-o pr-2" aria-hidden="true"></i>

                    <h1>Edit</h1>
                </div>
                <div class="icon-del py-3 icon-div-inner">
                    <i class="fa fa-trash pr-2" aria-hidden="true"></i>

                    <h1>Delete</h1>
                </div>
            </div>
        </div>
        <div class="slot-grid-container">
            <div class="slot-grid-item">
                <div class="slot-image">
                    <img src="{{asset('public/assets/trainerimages/stepthreeone.jpg')}}" alt="">
                </div>

            </div>
            <div class="slot-grid-item">
                <div class="slot-image">
                    <img src="{{asset('public/assets/trainerimages/stepthreetwo.jpg')}}" alt="">
                </div>

            </div>
            <div class="slot-grid-item">
                <div class="slot-image">
                    <img src="{{asset('public/assets/trainerimages/stepthree.jpg')}}" alt="">
                </div>

            </div>
            <div class="slot-grid-item">
                <div class="slot-image">
                    <img src="{{asset('public/assets/trainerimages/stepthreefour.jpg')}}" alt="">
                </div>

            </div>
            <div class="slot-grid-item">
                <div class="slot-image">
                    <img src="{{asset('public/assets/trainerimages/stepthreefive.jpg')}}" alt="">
                </div>

            </div>

        </div>
        <div class="slot-wrapper-heading px-3 my-3">
            <div class="left-slot-heading">
                <h1>Yoga</h1>
                <h2 class="pt-2">Italian Yoga</h2>
            </div>
            <div class="right-slot-heading">
                <h1>$100</h1>
            </div>
        </div>
        <div class="slot-timing-stacks stack-timing-two">
            <div class="timing-stack timing-stack-two px-3 my-3">
                <div class="timing-stack-inner">
                    <div class="week-name">
                        <h1>Mon:</h1>
                    </div>
                    <div class="stack-time">
                        <div class="time-stack-outer px-4 ">
                            <div class="time-stack-inner m-2">
                                <p class="mb-0">9 am to 10 am</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="stack-categories pb-2">
                    <h1>Difficulty Level: <span>Lorem ipsum dolor sit amet</span></h1>
                    <h1>Session Type:<span>Lorem ipsum dolor sit amet</span></h1>
                    <h1>Class Type: <span>Lorem ipsum dolor sit amet</span></h1>
                    <h1>Preference:<span>Lorem ipsum dolor sit amet</span></h1>
                </div>
            </div>

        </div>

        <div class="col-12">
            <div class="slot-arrow slot-arrow-two text-center">
                <i class="fa fa-angle-double-down down-arrow" aria-hidden="true"></i>
                <i class="fa fa-angle-double-up up-arrow" aria-hidden="true"></i>
            </div>
        </div>

    </div>
</div>



@endsection
@section('insertsfooter')
<script src="{{ asset('public/assets/js/jquery.nice-select.js') }}"></script>
<script src="{{ asset('public/assets/js/bootstrap-select-coutry.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.s-select').niceSelect();
    });
</script>
<script>
    $(document).ready(function() {
        $('.limit-box').hide();
        $('#typeselector').change(function() {
            var selectValue = $(this).val();
            console.log(selectValue)
            if (selectValue == "group") {
                $('.limit-box').show();
            } else {
                $('.limit-box').hide();
            }
        });
    });
    // edit and delete 
    // show and hide
    // one
    $('.icon-div-one').hide();
    $('.dot-toggle-icon-one').click(function() {
        $('.icon-div-one').show();
        $('.icon-div-two').hide();
    });
    $('.icon-div-one').mouseleave(function() {
        $('.icon-div-one').hide();
    });
    // two
    $('.icon-div-two').hide();
    $('.dot-toggle-icon-two').click(function() {
        $('.icon-div-two').show();
        $('.icon-div-one').hide();
    });
    $('.icon-div-two').mouseleave(function() {
        $('.icon-div-two').hide();
    });
    $(document).mouseup(function(e) {
        var container = $(".box");

        // if the target of the click isn't the container nor a descendant of the container
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            container.hide();
        }
    });
    // time slot
    // show and hide
    // one
    $('.stack-timing-one').hide();
    $('.slot-arrow-one .up-arrow').hide();
    $('.slot-arrow-one .down-arrow').click(function() {
        $('.stack-timing-one').show(1000);
        $('.slot-arrow-one .up-arrow').show(1000);
        $('.slot-arrow-one .down-arrow').hide(1000);

    });
    $('.slot-arrow-one .up-arrow').click(function() {
        $('.stack-timing-one').hide(1000);
        $('.slot-arrow-one .up-arrow').hide(1000);
        $('.slot-arrow-one .down-arrow').show(1000);
    });
    // two
    $('.stack-timing-two').hide();
    $('.slot-arrow-two .up-arrow').hide();
    $('.slot-arrow-two .down-arrow').click(function() {
        $('.stack-timing-two').show(1000);
        $('.slot-arrow-two .up-arrow').show(1000);
        $('.slot-arrow-two .down-arrow').hide(1000);
    });
    $('.slot-arrow-two .up-arrow').click(function() {
        $('.stack-timing-two').hide(1000);
        $('.slot-arrow-two .up-arrow').hide(1000);
        $('.slot-arrow-two .down-arrow').show(1000);
    });
</script>
@endsection