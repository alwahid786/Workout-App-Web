@extends('layouts.trainerSide.default')@section('content')
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

    @media screen and (max-width:576px) {
        .content-right-profile-body {
            flex-direction: column;
        }

        .content-left-section img {
            border-radius: 10px;
            width: 100%;
            height: 240px;
        }

        .content-left-section p {
            color: #9B9B9B;
            text-align: center;
            font-size: 0.9rem;
        }
    }

    .profile-payment-heading h1 {
        color: #E37048;
        font-size: 1.3rem;
        font-weight: 500;
        margin-bottom: 0px;
    }

    .payment-wrapper {
        background: #F8F8F8;
        border-radius: 10px;
    }

    .payment-wrapper h1 {
        font-size: 1rem;
        font-weight: 500;
        color: #434343;
    }

    .payment-wrapper h1 span {
        font-size: 1rem;
        font-weight: 400;
        color: #666666;
    }

    .payment-wrapper {
        display: flex;
    }

    .payment-wrapper .payment-section {
        width: 50%;
    }

    @media screen and (max-width:576px) {

        .payment-wrapper {
            display: flex;
            flex-direction: column;
        }

        .payment-wrapper .payment-section {
            width: 100%;
        }
    }
</style>
@section('content')
<!-- header-section -->
<div class="container-fluid update-info-header">
    <div class="container px-0">
        <div class="update-info-content py-4">
            <h1>Profile</h1>
            <img src="{{asset('public/assets/images/logo.svg')}}" alt="">
        </div>
    </div>
</div>
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
                    <div class="row">
                        <div class="col-12 content-right-profile-header px-0">
                            <h1 class="py-3 pl-2">John Smith</h1>
                        </div>


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
                <div class="col-12 profile-payment-heading py-3 pl-2">
                    <h1>Payment Info</h1>
                </div>
                <div class="col-12 payment-wrapper py-4">
                    <div class="payment-section">
                        <h1>Type : <span>Credit or Debit Card</span> </h1>
                        <h1>Card Holder : <span>John Smith </span> </h1>
                    </div>
                    <div class="payment-section">
                        <h1>Card Holder : <span>8745-8643-2346-6789</span> </h1>
                        <h1>Valid Through :<span> 2-22-23</span> </h1>
                    </div>

                </div>



            </div>
        </div>
    </div>

</div>
@endsection
@section('insertsfooter')
@endsection