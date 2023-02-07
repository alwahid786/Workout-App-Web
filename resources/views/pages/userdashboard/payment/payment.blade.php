@extends('layouts.userdashboard.default')
@section('content')
<style>
    .past-session-wrapper {
        background-color: white;
        border-radius: 10px;
    }

    .past-session-header {
        display: flex;
        flex-wrap: wrap;
    }

    .past-session-header h1 {
        color: #E37048;
        font-size: 1.7rem;
        margin-bottom: 0px;
    }

    /* table */
    .table-heading {
        width: 20%;
        font-size: 1rem;
        font-weight: 400;
        color: #ADA7A7;
    }

    .past-session-table-header {
        /* background: #FFDCD0; */
        height: 40px;
        display: flex;
        align-items: center;
    }

    @media only screen and (max-width: 768px) {
        .past-session-table-header {
            display: none !important;
        }
    }

    .past-session-table-body {
        /* background: white; */
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
        color: #3D4758;
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

    .table-content-value a,
    .table-content-value a:hover {
        text-decoration: none;
        color: white;
        background: #FF6E6E;
        border-radius: 6px;
        outline: none !important;
        box-shadow: none !important;
        width: 80px;

        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    @media only screen and (min-width: 768px) {
        .table-content-value a {
            margin: 0 auto;
        }
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

    .payment-table {
        border: 1px solid #EAEAEA;
        border-radius: 8px;
    }
</style>

@include('includes.userdashboard.navbar')
<div class="content-wrapper">
    <div class="container-fluid mb-4">
        <div class="dashboard-header-left my-4 pt-2">
            <h1>List Of Payments</h1>
        </div>
        <div class="past-session-wrapper  py-3 px-3">
            <!-- table -->
            <div class="past-session-table mt-3">
                <div class="past-session-table-header d-flex justify-content-around px-3 pb-2">
                    <div class="table-heading"> Class Name</div>
                    <div class="table-heading text-center">Fee</div>
                    <div class="table-heading text-center">Date</div>
                    <div class="table-heading text-center">Trainer Name</div>
                    <div class="table-heading text-center">Details</div>
                </div>

                <div class="payment-table">
                    @if(isset($payments) && !empty($payments))
                    @foreach($payments as $payment)
                    <div class="past-session-table-body d-flex justify-content-around px-3 my-4 my-md-0 py-4">
                        <div class="table-cotent">
                            <div class="table-content-heading">
                                <h1> </h1>
                            </div>
                            <div class="table-content-value ">
                                <h1>{{$payment['session']['category']['title']}}</h1>
                            </div>
                        </div>

                        <div class="table-cotent">
                            <div class="table-content-heading">
                                <h1>Fee</h1>
                            </div>
                            <div class="table-content-value text-md-center">
                                <h1>${{$payment['session']['price']}}</h1>
                            </div>

                        </div>

                        <div class="table-cotent">
                            <div class="table-content-heading">
                                <h1>Date</h1>
                            </div>
                            <div class="table-content-value text-md-center">
                                <h1>{{ date("d M, Y", strtotime($payment['created_at']))}}</h1>
                            </div>
                        </div>

                        <div class="table-cotent">
                            <div class="table-content-heading">
                                <h1>Trainer Name</h1>
                            </div>
                            <div class="table-content-value text-md-center">
                                <h1>{{$payment['session']['trainer_data']['name']}}</h1>
                            </div>

                        </div>

                        <div class="table-cotent">
                            <div class="table-content-heading">
                                <h1>Details</h1>
                            </div>
                            <div class="table-content-value text-md-center">
                                <a href="{{url('/payment/paymentdetail')}}" class="btn">
                                    Details
                                </a>

                            </div>
                        </div>


                    </div>
                    @endforeach
                    @else
                    <div class="text-center text-danger my-3">
                        You have not processed any payments yet.
                    </div>
                    @endif
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