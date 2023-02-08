@extends('layouts.trainerSide.default')
<style>
    body {
        background-color: #F2F2F2 !important;
    }

    .payment-detail-container {
        background-color: white;
        border-radius: 10px;
    }

    .payment-detail-header {
        display: flex;
        align-items: flex-end
    }

    .payment-detail-header img {
        width: 266px;
        height: 266px;
        object-fit: cover;
        border-radius: 10px;
        margin-top: -100px;
    }

    .payment-detail-header-content h1 {
        color: #434343;
        font-weight: 600;
        font-size: 1.3rem;
    }

    .payment-detail-header-content p {}

    .payment-detail-body {
        border: 1px solid #EAEAEA;
        border-radius: 8px;
    }

    .payment-detail-card {
        padding: 1.5rem 1rem;
    }

    .payment-detail-card h1 {
        font-size: 1.1rem;
        font-weight: normal;
        margin-bottom: 0px;
    }

    .payment-detail-card h1:nth-of-type(1) {
        color: #ADA7A7;
        padding-bottom: 0.5rem;
    }

    .payment-detail-card h1:nth-of-type(2) {
        color: #737373;
        padding-top: 0.5rem;
    }

    .payment-detail-card-footer {
        display: flex;
        justify-content: end;
        align-items: center;
    }

    .payment-detail-card-footer h1:nth-of-type(1) {
        color: #ADA7A7;
        font-size: 1rem;
        margin-bottom: 0px;
        padding-right: 20px;
        font-weight: normal;
    }

    .payment-detail-card-footer h1:nth-of-type(2) {
        color: black;
        font-size: 1.3rem;
        margin-bottom: 0px;
    }

    .payment-detail-box {
        padding-top: 8rem;
    }

    .payment-detail-btn button {
        border-radius: 7px;
        border: 1px solid #E37048 !important;
        color: white;
        font-size: 0.8rem;
        color: #E37048;
        background: white;
        max-width: 180px;
        width: 100%;
        height: 45px;
        margin-left: auto;
    }

    .payment-detail-btn button:hover {
        background: #E37048;
        color: white;
    }

    @media screen and (max-width:576px) {
        .payment-detail-header img {
            width: 130px;
            height: 130px;
            object-fit: cover;
            border-radius: 10px;
            margin-top: 0px;
        }

        .payment-detail-box {
            padding-top: 0rem;
        }

        .payment-detail-container {
            background-color: white;
            border-radius: 10px;
            padding-top: 20px;
        }

        .payment-detail-header-content h1 {
            color: #434343;
            font-weight: 600;
            font-size: 1rem;
        }

        .payment-detail-header-content p {
            font-size: 0.8rem;
        }

        .payment-detail-card h1 {
            font-size: 1rem;
            font-weight: normal;
            margin-bottom: 0px;
        }

        .payment-detail-btn button {
            margin: 0 auto;
        }
    }
</style>
@section('content')
@include('includes.trainerSide.navbar')
<div class="content-wrapper py-3">
    <div class="container-fluid payment-detail-box">
        <div class="payment-detail-container pb-5 px-3">
            <div class="col-12 payment-detail-header px-0">
                <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="">
                <div class="payment-detail-header-content pl-3">
                    <h1>John Smith</h1>
                    <p><i class="fa fa-user mr-2" aria-hidden="true"></i>Male , 5’11”</p>
                </div>
            </div>
            <div class="payment-detail-body my-5">
                <div class="row">
                    <div class="col-sm-6 col-md-4 text-center text-sm-left">
                        <div class="payment-detail-card">
                            <h1>Name of Class</h1>
                            <h1>Nutrition</h1>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 text-center text-sm-left">
                        <div class="payment-detail-card">
                            <h1>Fee</h1>
                            <h1>$100</h1>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 text-center text-sm-left">
                        <div class="payment-detail-card">
                            <h1>WorkitPT Charges</h1>
                            <h1>$20</h1>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 text-center text-sm-left">
                        <div class="payment-detail-card">
                            <h1>Time</h1>
                            <h1>2pm-4pm</h1>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 text-center text-sm-left">
                        <div class="payment-detail-card">
                            <h1>Date</h1>
                            <h1>22 Nov, 2022</h1>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 text-center text-sm-left">
                        <div class="payment-detail-card">
                            <h1>Client Name</h1>
                            <h1>John Smith</h1>
                        </div>
                    </div>
                    <div class="col-12 pr-5 pb-3 text-center">
                        <div class="payment-detail-card-footer">
                            <h1>Total Amount</h1>
                            <h1>$80</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 payment-detail-btn text-center text-sm-right">
                <button>Download Pdf</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('insertsfooter')
<script>
    $('.sidenav .nav-item:nth-of-type(6)').addClass('active')
</script>
@endsection