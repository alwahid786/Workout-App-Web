@extends('layouts.trainerSide.default')
<!-- <link rel="stylesheet" href="{{asset('public/assets/trainercss/stepfive.css')}}">
<link rel="stylesheet" href="{{asset('public/assets/trainercss/pagination.css')}}"> -->
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

    .content-left-section {
        background-color: #F8F8F8;
        border-radius: 10px;
    }

    .content-left-section img {
        border-radius: 10px;
        width: 100%;
        height: 300px;
    }

    .content-left-section h1 {
        font-size: 1.2rem;
        font-weight: 500;
        color: #E37048;
        margin-bottom: 0px;
        padding-top: 0.5rem;
        padding-bottom: 1rem;
        text-align: center;
    }

    .content-left-section .middle-heading {
        display: flex;
        align-items: center;
        padding-top: 1rem;
        padding-bottom: 1rem;
    }

    .content-left-section .middle-heading h2 {
        color: #E37048;
        margin-bottom: 0px;
        font-size: 1rem;
        font-weight: 400;
        padding-right: 0.5rem;
    }

    .content-left-section .middle-heading div {
        border: 1px solid #E37048;
        width: 100%;
    }

    .content-left-section p {
        color: #9B9B9B;
        font-size: 0.9rem;
    }

    .content-right-profile {
        background-color: #F8F8F8;
        border-radius: 10px;
    }

    .content-right-profile-header h1 {
        color: #E37048;
        font-weight: 500;
        font-size: 1.5rem;
        margin-bottom: 0px;
    }

    .content-right-profile-body {
        display: flex;
    }

    .profile-body h1 {
        font-size: 1rem;
        font-weight: normal;
        color: #666666;
    }

    .profile-body h1 img {
        width: 20px;
        margin-right: 10px;
    }

    .content-right-certificate-header h1 {
        color: #E37048;
        margin-bottom: 0px;
        font-size: 1.3rem;
        font-weight: 500;
    }



    .certificate-card {
        background-color: #F8F8F8;
        border-radius: 10px;
        height: 100%;
    }

    .certificate-card img {
        width: 100%;
        height: 150px;
    }

    .certificate-card p {
        color: black;
        font-size: 1rem;
        font-weight: 500;
        margin-bottom: 0px;
    }

    .content-right-certificate-btn button {
        background-color: #E37048;
        border: 1px solid #E37048 !important;
        color: white;
        box-shadow: none !important;
        width: 70px;
        height: 35px;
        border-radius: 5px;
    }

    @media screen and (max-width:576px) {
        .content-right-profile-body {
            flex-direction: column;
        }
    }

    .form-container {
        background: #F8F8F8;
        border-radius: 10px
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
        grid-template-columns: repeat(auto-fill, minmax(110px, 1fr)) !important;
        grid-gap: 10px !important;
        align-items: stretch;
    }

    .slot-image img {
        width: 100%;
        max-width: 250px;
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
        padding-top: 1rem;
        padding-bottom: 1rem;
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

    .slot-arrow i {
        color: #E37048;
        font-weight: bold;
        font-size: 2rem;
        cursor: pointer;
    }

    .content-right-payment-body {
        background: #F8F8F8;
        border-radius: 10px
    }

    .payment-body {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .payment-body .stripe {
        color: #6772E5;
        font-size: 3rem;
        font-weight: 900;
        margin-bottom: 0px;
    }

    .step-five-buttons {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
    }

    .step-five-buttons button {
        border: 1px solid #E37048;
        box-shadow: none !important;
        outline: none !important;
        width: 180px;
        height: 40px;
        border-radius: 5px;
        color: #E37048;
        background-color: white;
    }

    .step-five-buttons button:last-of-type {
        width: 115px;
    }

    .step-five-buttons button:hover {
        background: #E37048;
        color: white;
    }

    @media screen and (max-width:576px) {
        .timing-stack {
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

        .step-five-buttons {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            flex-direction: column;
            justify-content: center;
        }

        .content-left-section img {
            border-radius: 10px;
            width: 100%;
            height: 240px;
        }

        .payment-body .stripe {
            color: #6772E5;
            font-size: 2.5rem;
            font-weight: 900;
            margin-bottom: 0px;
        }

        .content-left-section p {
            color: #9B9B9B;
            text-align: center;
            font-size: 0.9rem;
        }
    }

    .custom-modal {
        background-color: #FF5959;
        max-width: 500px;
        width: 100%;
        position: absolute;
        top: 0;
        right: 0;
    }

    .custom-modal h1 {
        padding: 0.8rem 2rem;
        color: white;
        font-weight: 400;
        font-size: 1.5rem;
        text-align: center;
    }

    @media screen and (max-width:576px) {
        .custom-modal h1 {
            padding: 1rem 2rem;
            color: white;
            font-weight: 400;
            font-size: 1rem;
            text-align: center;
        }

        .custom-modal {
            background-color: #FF5959;
            width: 100%;
            position: absolute;
            top: 0;
            right: 0;
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

    .modal-body p {
        color: #A6A6A6;
    }

    .modal-content {
        border-radius: 10px !important;
    }
</style>
@section('content')
<!-- header-section -->
<div class="container-fluid update-info-header">
    <div class="container px-0">
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
                <div class="pagination-box active-pagination">
                    <h1>4</h1>
                    <p>Payment Method</p>
                </div>
                <div class="pagination-box active-pagination">
                    <h1>5</h1>
                    <p>View Profile</p>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- content-section -->
<div class="container-fluid py-4">
    <div class="container px-0">
        <div class="row">
            <div class="col-md-4">
                <div class="content-left-section p-3">
                    <img src="{{asset('public/assets/trainerimages/profile.png')}}" alt="">
                    <h1>Advanced</h1>
                    <div class="middle-heading">
                        <h2>About</h2>
                        <div></div>
                    </div>
                    <p>n publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>
                    <p>n publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>
                </div>
            </div>
            <div class="col-md-8 mt-4 mt-md-0">
                <div class="content-right-profile p-3">
                    <div class="col-12 content-right-profile-header px-0">
                        <h1 class="py-3">John Smith</h1>
                    </div>
                    <div class="content-right-profile-body">
                        <div class="profile-body pr-sm-5 mr-lg-5 pr-lg-5">
                            <h1><img src="{{asset('public/assets/trainerimages/message-icon.png')}}" alt="">johnsmith@gmail.com</h1>
                            <h1><img src="{{asset('public/assets/trainerimages/user-icon.png')}}" alt="">Male , 5’11” , 78kgs</h1>
                            <h1><img src="{{asset('public/assets/trainerimages/phone-icon.png')}}" alt="">+23-123-123 </h1>
                            <h1><img src="{{asset('public/assets/trainerimages/location-icon.png')}}" alt="">Toronto, Canada</h1>
                            <!-- <h1><img src="{{asset('public/assets/trainerimages/social-icon.png')}}" alt="">https://www.linkedin.com</h1> -->
                            <h1><i class="fa fa-linkedin mr-3 " aria-hidden="true"></i>https://www.linkedin.com</h1>

                        </div>
                        <div class="profile-body">
                            <h1><img src="{{asset('public/assets/trainerimages/date-icon.png')}}" alt="">22 Nov, 1996</h1>
                            <h1><img src="{{asset('public/assets/trainerimages/heart-icon.png')}}" alt="">Pollen Allergy</h1>
                            <h1><img src="{{asset('public/assets/trainerimages/location-icon.png')}}" alt="">Toronto, Canada </h1>
                            <h1><img src="{{asset('public/assets/trainerimages/phone-icon.png')}}" alt="">+23-123-123 </h1>

                        </div>
                    </div>
                </div>
                <!-- certificate -->
                <div class="col-12 content-right-certificate-header px-0">
                    <h1 class="py-3 pl-sm-3">Certificates :</h1>
                </div>
                <div class="col-12 content-right-certificate-btn px-0 text-right">
                    <button><i class="fa fa-pencil-square-o mr-1" aria-hidden="true"></i>Edit</button>
                </div>
                <div class="content-right-certificate-body">
                    <div class="row py-2">
                        <div class="col-sm-6 col-lg-4 my-2">
                            <div class="certificate-card p-2">
                                <img src="{{asset('public/assets/trainerimages/cert.png')}}" alt="">
                                <p class="pt-2 pb-3">nt. Lorem ipsum may be used as a placeholder </p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 my-2">
                            <div class="certificate-card p-2">
                                <img src="{{asset('public/assets/trainerimages/cert.png')}}" alt="">
                                <p class="pt-2 pb-3">nt. Lorem ipsum may be used as a placeholder </p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 my-2">
                            <div class="certificate-card p-2">
                                <img src="{{asset('public/assets/trainerimages/cert.png')}}" alt="">
                                <p class="pt-2 pb-3">nt. Lorem ipsum may be used as a placeholder </p>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Speciality -->
                <div class="col-12 content-right-certificate-header px-0">
                    <h1 class="py-3 pl-sm-3">Speciality :</h1>
                </div>

                <div class="container form-container py-3">
                    <!-- .............Stretching Outdoors............... -->
                    <div class="slot-wrapper py-3 px-3 my-4">
                        <div class="slot-vertical-icon my-2 text-right">
                            <img class="dot-toggle-icon-one" src="{{asset('public/assets/trainerimages/slotverticalicon.svg')}}" alt="">
                            <div class="icon-div icon-div-one box" id="box">
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
                                <h1>Stretching Outdoors</h1>
                                <h2 class="pt-2">Static Stretching</h2>
                            </div>
                            <div class="right-slot-heading">
                                <h1>$100</h1>
                            </div>
                        </div>
                        <div class="slot-timing-stacks stack-timing-one">
                            <div class="timing-stack timing-stack-one px-3 my-3">
                                <div class="week-name">
                                    <h1>Mon:</h1>
                                </div>
                                <div class="stack-time">
                                    <div class="time-stack-outer px-4 ">
                                        <div class="time-stack-inner m-2">
                                            <p class="mb-0">9 am to 10 am</p>
                                        </div>
                                        <div class="time-stack-inner m-2 ">
                                            <p class="mb-0">12 pm to 2 pm</p>
                                        </div>
                                        <div class="time-stack-inner m-2 ">
                                            <p class="mb-0">4 pm to 6 pm</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timing-stack timing-stack-two px-3 my-3">
                                <div class="week-name">
                                    <h1>Tue:</h1>
                                </div>
                                <div class="stack-time">
                                    <div class="time-stack-outer px-4 ">
                                        <div class="time-stack-inner m-2">
                                            <p class="mb-0">9 am to 10 am</p>
                                        </div>
                                        <div class="time-stack-inner m-2 ">
                                            <p class="mb-0">12 pm to 2 pm</p>
                                        </div>
                                        <div class="time-stack-inner m-2 ">
                                            <p class="mb-0">4 pm to 6 pm</p>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="timing-stack timing-stack-three px-3 my-3">
                                <div class="week-name">
                                    <h1>Wed:</h1>
                                </div>
                                <div class="stack-time">
                                    <div class="time-stack-outer px-4 ">
                                        <div class="time-stack-inner m-2">
                                            <p class="mb-0">9 am to 10 am</p>
                                        </div>
                                        <div class="time-stack-inner m-2 ">
                                            <p class="mb-0">12 pm to 2 pm</p>
                                        </div>
                                        <div class="time-stack-inner m-2 ">
                                            <p class="mb-0">4 pm to 6 pm</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timing-stack timing-stack-four px-3 my-3">
                                <div class="week-name">
                                    <h1>Thu:</h1>
                                </div>
                                <div class="stack-time">
                                    <div class="time-stack-outer px-4 ">
                                        <div class="time-stack-inner m-2">
                                            <p class="mb-0">9 am to 10 am</p>
                                        </div>
                                        <div class="time-stack-inner m-2 ">
                                            <p class="mb-0">12 pm to 2 pm</p>
                                        </div>
                                        <div class="time-stack-inner m-2 ">
                                            <p class="mb-0">4 pm to 6 pm</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timing-stack timing-stack-five px-3 my-3">
                                <div class="week-name">
                                    <h1>Fri:</h1>
                                </div>
                                <div class="stack-time">
                                    <div class="time-stack-outer px-4 ">
                                        <div class="time-stack-inner m-2">
                                            <p class="mb-0">9 am to 10 am</p>
                                        </div>
                                        <div class="time-stack-inner m-2 ">
                                            <p class="mb-0">12 pm to 2 pm</p>
                                        </div>
                                        <div class="time-stack-inner m-2 ">
                                            <p class="mb-0">4 pm to 6 pm</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="timing-stack timing-stack-six px-3 my-3">
                                <div class="week-name">
                                    <h1>Sat:</h1>
                                </div>
                                <div class="stack-time">
                                    <div class="time-stack-outer px-4 ">
                                        <div class="time-stack-inner m-2">
                                            <p class="mb-0">9 am to 10 am</p>
                                        </div>
                                        <div class="time-stack-inner m-2 ">
                                            <p class="mb-0">12 pm to 2 pm</p>
                                        </div>
                                        <div class="time-stack-inner m-2 ">
                                            <p class="mb-0">4 pm to 6 pm</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timing-stack timing-stack-seven px-3 my-3">
                                <div class="week-name">
                                    <h1>Sun:</h1>
                                </div>
                                <div class="stack-time">
                                    <div class="time-stack-outer px-4 ">
                                        <div class="time-stack-inner m-2">
                                            <p class="mb-0">9 am to 10 am</p>
                                        </div>
                                        <div class="time-stack-inner m-2 ">
                                            <p class="mb-0">12 pm to 2 pm</p>
                                        </div>
                                        <div class="time-stack-inner m-2 ">
                                            <p class="mb-0">4 pm to 6 pm</p>
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
                            <div class="icon-div icon-div-two box" id="box">
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
                            <div class="timing-stack timing-stack-one px-3 my-3">
                                <div class="week-name">
                                    <h1>Mon:</h1>
                                </div>
                                <div class="stack-time">
                                    <div class="time-stack-outer px-4 ">
                                        <div class="time-stack-inner m-2">
                                            <p class="mb-0">9 am to 10 am</p>
                                        </div>
                                        <div class="time-stack-inner m-2 ">
                                            <p class="mb-0">12 pm to 2 pm</p>
                                        </div>
                                        <div class="time-stack-inner m-2 ">
                                            <p class="mb-0">4 pm to 6 pm</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timing-stack timing-stack-two px-3 my-3">
                                <div class="week-name">
                                    <h1>Tue:</h1>
                                </div>
                                <div class="stack-time">
                                    <div class="time-stack-outer px-4 ">
                                        <div class="time-stack-inner m-2">
                                            <p class="mb-0">9 am to 10 am</p>
                                        </div>
                                        <div class="time-stack-inner m-2 ">
                                            <p class="mb-0">12 pm to 2 pm</p>
                                        </div>
                                        <div class="time-stack-inner m-2 ">
                                            <p class="mb-0">4 pm to 6 pm</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="timing-stack timing-stack-three px-3 my-3">
                                <div class="week-name">
                                    <h1>Wed:</h1>
                                </div>
                                <div class="stack-time">
                                    <div class="time-stack-outer px-4 ">
                                        <div class="time-stack-inner m-2">
                                            <p class="mb-0">9 am to 10 am</p>
                                        </div>
                                        <div class="time-stack-inner m-2 ">
                                            <p class="mb-0">12 pm to 2 pm</p>
                                        </div>
                                        <div class="time-stack-inner m-2 ">
                                            <p class="mb-0">4 pm to 6 pm</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timing-stack timing-stack-four px-3 my-3">
                                <div class="week-name">
                                    <h1>Thu:</h1>
                                </div>
                                <div class="stack-time">
                                    <div class="time-stack-outer px-4 ">
                                        <div class="time-stack-inner m-2">
                                            <p class="mb-0">9 am to 10 am</p>
                                        </div>
                                        <div class="time-stack-inner m-2 ">
                                            <p class="mb-0">12 pm to 2 pm</p>
                                        </div>
                                        <div class="time-stack-inner m-2 ">
                                            <p class="mb-0">4 pm to 6 pm</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timing-stack timing-stack-five px-3 my-3">
                                <div class="week-name">
                                    <h1>Fri:</h1>
                                </div>
                                <div class="stack-time">
                                    <div class="time-stack-outer px-4  ">
                                        <div class="time-stack-inner m-2">
                                            <p class="mb-0">9 am to 10 am</p>
                                        </div>
                                        <div class="time-stack-inner m-2 ">
                                            <p class="mb-0">12 pm to 2 pm</p>
                                        </div>
                                        <div class="time-stack-inner m-2 ">
                                            <p class="mb-0">4 pm to 6 pm</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timing-stack timing-stack-six px-3 my-3">
                                <div class="week-name">
                                    <h1>Sat:</h1>
                                </div>
                                <div class="stack-time">
                                    <div class="time-stack-outer px-4 ">
                                        <div class="time-stack-inner m-2">
                                            <p class="mb-0">9 am to 10 am</p>
                                        </div>
                                        <div class="time-stack-inner m-2 ">
                                            <p class="mb-0">12 pm to 2 pm</p>
                                        </div>
                                        <div class="time-stack-inner m-2 ">
                                            <p class="mb-0">4 pm to 6 pm</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timing-stack timing-stack-seven px-3 my-3">
                                <div class="week-name">
                                    <h1>Sun:</h1>
                                </div>
                                <div class="stack-time">
                                    <div class="time-stack-outer px-4 ">
                                        <div class="time-stack-inner m-2">
                                            <p class="mb-0">9 am to 10 am</p>
                                        </div>
                                        <div class="time-stack-inner m-2 ">
                                            <p class="mb-0">12 pm to 2 pm</p>
                                        </div>
                                        <div class="time-stack-inner m-2 ">
                                            <p class="mb-0">4 pm to 6 pm</p>
                                        </div>
                                    </div>
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
                <!-- Payment Info -->
                <div class="col-12 content-right-certificate-header px-0">
                    <h1 class="py-3 pl-sm-3">Payment Info</h1>
                </div>
                <div class="content-right-payment-body p-3">
                    <div class="payment-body pb-4">
                        <h1 class="stripe">stripe</h1>
                        <div class="content-right-certificate-btn px-0 text-right">
                            <button><i class="fa fa-pencil-square-o mr-1" aria-hidden="true"></i>Edit</button>
                        </div>

                    </div>
                    <div class="profile-body pr-sm-5 mr-lg-5 pr-lg-5">
                        <h1 class="py-2"><img src="{{asset('public/assets/trainerimages/message-icon.png')}}" alt="">johnsmith@gmail.com</h1>
                        <h1 class="py-2"><img src="{{asset('public/assets/trainerimages/phone-icon.png')}}" alt="">+23-123-123 </h1>
                    </div>
                </div>
                <!-- buttons -->
                <div class="col-12 step-five-buttons pt-5 pb-3 px-0">
                    <button class="m-2" data-toggle="modal" data-target="#sucessModal">Submit</button>
                    <button class="m-2"><i class="fa fa-pencil-square-o mr-1" aria-hidden="true"></i>Edit</button>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- modal -->
<div class="modal fade" id="sucessModal" tabindex="-1" role="dialog" aria-labelledby="signupModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content signupModalDialogue">
            <div class="modalHeader px-2 pt-2 pb-2 d-flex justify-content-end align-items-center">
                <img class="cross-icon" style="width: 8%;" data-dismiss="modal" src="{{asset('public/assets/images/x-circle.svg')}}" alt="">
            </div>
            <div class="modal-body text-center sucess-modal">
                <img style="width:60%;margin:0 auto" src="{{asset('public/assets/images/sucess.svg')}}" alt="">
                <h1 class="mt-2">Success!</h1>
                <p>Your Request to become a trainer has
                    been send we will respond you in
                    5 working days!</p>
            </div>
        </div>
    </div>
</div>
<div class="custom-modal">
    <h1>Your request of become a trainer is in review we will update you in 5 working days !</h1>
</div>
@endsection
@section('insertsfooter')
<script>
    // $('#sucessModal').modal({
    //     backdrop: 'static',
    //     keyboard: false
    // })
    // edit and delete 
    // show and hide
    // one
    $('.icon-div-one').hide();
    $('.dot-toggle-icon-one').click(function() {
        $('.icon-div-one').show();
        $('.icon-div-two').hide();
    });
    // two
    $('.icon-div-two').hide();
    $('.dot-toggle-icon-two').click(function() {
        $('.icon-div-two').show();
        $('.icon-div-one').hide();
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
    // custom modal
    $('.custom-modal').hide();
    $('.cross-icon').click(function() {
        $('.custom-modal').show();
    });
</script>
@endsection