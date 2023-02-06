@extends('layouts.trainerSide.default')
<!-- <link rel="stylesheet" href="{{asset('public/assets/trainercss/payment.css')}}"> -->
<style>
    body {
        background-color: #F2F2F2 !important;
    }

    .payment-list-heading h1 {
        color: #E37048;
        margin-bottom: 0px;
        font-size: 1.5rem;
        font-weight: 500;
    }



    .payment-box {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background: rgba(227, 112, 72, 0.08);
        border: 1px solid #E37048;
        padding-top: 1.8rem;
        padding-bottom: 1.8rem;
    }

    .payment-box p {
        color: #E37048;
        font-size: 1rem;
        margin-bottom: 0px;
        padding-bottom: 0.3rem;
        font-weight: 500;
    }

    .payment-box h1 {
        padding-top: 0.3rem;
        color: #E37048;
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 0px;
    }


    .payment-box-outer:first-of-type .payment-box {
        border-top-left-radius: 10px;
    }

    .payment-box-outer:last-of-type .payment-box {
        border-top-right-radius: 10px;
        background-color: #F9F9F9;
    }

    .withdraw-btn a {
        text-decoration: none !important;
        color: #E37048 !important;
        background-color: white;
        border: 1px solid #E37048 !important;
        box-shadow: none !important;
        width: 160px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-left: auto;
    }

    .payment-wrapper-inner {
        background-color: white;
    }

    .withdraw-btn a:hover {
        background-color: #E37048;
        color: white !important;
    }

    .payment-table-heading h1 {
        font-size: 1.5rem;
        margin-bottom: 0px;
        color: #666666;
    }

    @media screen and (max-width:767px) {
        .payment-box-outer:nth-of-type(2) .payment-box {
            border-top-right-radius: 10px;
        }

        .payment-box-outer:last-of-type .payment-box {
            border-top-right-radius: 0px;
            background-color: #F9F9F9;
        }

    }

    @media screen and (max-width:576px) {
        .payment-box-outer:first-of-type .payment-box {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .payment-box-outer:nth-of-type(2) .payment-box {
            border-top-right-radius: 0px;
        }
    }

    /* table */
    .table-heading {
        width: 20%;
        font-size: 1rem;
        font-weight: 500;
        color: #E37048;
    }

    .past-session-table-header {
        background: #FFDCD0;
        height: 40px;
        display: flex;
        align-items: center;
    }

    @media only screen and (max-width: 768px) {
        .past-session-table-header {
            display: none !important;
            visibility: hidden;
        }
    }

    .past-session-table-body {
        background: white;
        display: flex;
        align-items: center;
        border-bottom: 1px solid #F5F5F5;
    }

    .table-cotent {
        width: 20%;
    }

    .table-content-heading {
        display: none;
    }

    .table-content-heading h1 {
        font-size: 1rem;
        margin-bottom: 0px;
    }



    .table-content-value h1 {
        font-size: 1rem;
        margin-bottom: 0px;
        color: #9999A3;
        font-weight: normal;
    }



    .table-content-value-profile {
        display: flex;
        align-items: center;
    }

    .table-content-value-profile img {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        object-fit: cover;
    }

    .table-content-value-profile-content h1 {
        color: #E37048;
        font-size: 1rem;
        font-weight: 500;
        margin-bottom: 0px;
    }

    .table-content-value-profile-content p {
        margin-bottom: 0px;
        font-size: 0.8rem;
        color: #9999A3;
    }

    @media only screen and (max-width: 767px) {

        .past-session-table-body {
            flex-direction: column;
            /* border-radius: 15px;
        box-shadow: 0 10px 10px -5px; */
        }

        .table-content-heading {
            display: block;
            width: 50%;
        }

        .table-content-value {
            width: 50%;
        }

        .table-cotent {
            display: flex;
            justify-content: space-around;
            width: 100%;
        }
    }


    @media only screen and (max-width:396px) {

        .table-content-value h1,
        .table-content-heading h1 {
            font-size: 0.8rem !important;
        }
    }

    @media screen and (max-width:576px) {
        .past-session-header h1 {
            color: #E37048;
            font-size: 1.3rem;
            margin-bottom: 0px;
        }

        .table-content-value-profile img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            object-fit: cover;
        }
    }
</style>
@section('content')
@include('includes.trainerSide.navbar')
<div class="content-wrapper py-3">
    <div class="container-fluid ">
        <div class="col-12 payment-list-heading pb-4">
            <h1>Payment Report of present Client’s</h1>
        </div>
        <div class="payment-wrapper ">
            <div class="row px-3">
                <div class="col-sm-6 col-md-3 px-0 payment-box-outer">
                    <div class="payment-box">
                        <p>Send By Client Side</p>
                        <h1>$60.00</h1>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 px-0 payment-box-outer">
                    <div class="payment-box ">
                        <p>In WorkitPT Wallet</p>
                        <h1>$60.00</h1>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 px-0 payment-box-outer">
                    <div class="payment-box">
                        <p>Remaining</p>
                        <h1>$60.00</h1>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 px-0 payment-box-outer">
                    <div class="payment-box">
                        <p>Total Earning</p>
                        <h1>$60.00</h1>
                    </div>
                </div>
            </div>
            <div class="payment-wrapper-inner">
                <div class="col-12 text-right withdraw-btn py-3">
                    <a href="#" class="btn">Withdraw Amount </a>
                </div>
                <div class="col-12 text-left payment-table-heading py-3">
                    <h1>All Payment Detail</h1>
                </div>
                <!-- table -->
                <div class="past-session-table mt-md-3">
                    <div class="past-session-table-header d-flex justify-content-around px-3">
                        <div class="table-heading">Name</div>
                        <div class="table-heading text-center">Class Time & Date</div>
                        <div class="table-heading text-center">Class Type</div>
                        <div class="table-heading text-center">Fee</div>
                        <div class="table-heading text-center">Pending</div>
                        <div class="table-heading text-center">Total</div>
                        <div class="table-heading text-center">View</div>
                    </div>


                    <div class="past-session-table-body d-flex justify-content-around px-3 mt-md-4 mb-4 my-md-0 pt-md-4 pb-4">
                        <div class="table-cotent">
                            <div class="table-content-heading">
                                <h1>Name</h1>
                            </div>
                            <div class="table-content-value">
                                <div class="table-content-value-profile">
                                    <img class="mr-1" src="{{asset('public/assets/images/sessiontwo.jpg')}}" alt="">
                                    <div class="table-content-value-profile-content">
                                        <h1>Dayut Carlotte </h1>
                                        <p>United Kingdom</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-cotent">
                            <div class="table-content-heading">
                                <h1>Class Time & Fee</h1>
                            </div>
                            <div class="table-content-value text-md-center">
                                <h1>Yoga</h1>
                            </div>

                        </div>

                        <div class="table-cotent">
                            <div class="table-content-heading">
                                <h1>Class Type</h1>
                            </div>
                            <div class="table-content-value text-md-center">
                                <h1>12am-2am</h1>
                            </div>
                        </div>

                        <div class="table-cotent">
                            <div class="table-content-heading">
                                <h1>Fee</h1>
                            </div>
                            <div class="table-content-value text-md-center">
                                <h1>22-Nov-1996</h1>
                            </div>

                        </div>

                        <div class="table-cotent">
                            <div class="table-content-heading">
                                <h1>View</h1>
                            </div>
                            <div class="table-content-value text-md-center">
                                <a href="{{url('/userdashboard/pastsessiondetail')}}">
                                    <img class="" src="{{asset('public/assets/images/view-icon.svg')}}" alt="">
                                </a>

                            </div>
                        </div>


                    </div>




                </div>
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