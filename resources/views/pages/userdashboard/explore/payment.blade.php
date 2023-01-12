@extends('layouts.userdashboard.default')
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<style>
    .dashboard-header-left h1 {
        color: #E37048;
        font-size: 2rem;
        font-weight: 600 !important;
    }

    .main-form-section {
        background: #fff;
        border-radius: 10px;
    }

    .main-form-section h2 {
        color: #E37048;
        font-size: 1.8rem;
        font-weight: 500;
    }

    .rounded {
        border-radius: 1rem
    }

    .nav-pills .nav-link {
        color: #555
    }

    .nav-pills .nav-link.active {
        color: white
    }

    input[type="radio"] {
        margin-right: 5px
    }

    .bold {
        font-weight: bold
    }

    .payment-tab-icon {
        width: 50%;
        margin: 0 auto;
    }

    .tab-btn {
        background: #FFE3D9;
        border-radius: 10px;
        width: 170px;
        margin: 0 auto;
    }

    .nav-pills .tab-btn {
        background: #F7F6FB !important;
        color: #929191 !important;
        font-size: 1.2rem !important;

    }

    .nav-pills .tab-btn i {
        font-size: 2.5rem;
    }

    .nav-link.tab-btn.active i {
        color: #E37048;
    }

    .nav-link.tab-btn.active {
        color: #E37048 !important;
        background: #FFE3D9 !important;
        border: 1px solid #E37048;
    }

    .card-header {
        background: #fff !important;
        border-bottom: none !important;
    }

    .pay-field input {
        border: none !important;
        background: #F8F8F8 !important;
        height: 60px;
        border-radius: 10px;
    }

    .pay-field input:focus {
        border: none !important;
        outline: none !important;
        box-shadow: none !important;
    }

    .pay-field input:active {
        border: none !important;
        outline: none !important;
        box-shadow: none !important;
    }

    .pay-form-btn {
        background: #E37048;
        border-radius: 10px;
        padding: 10px 45px;
    }

    .pay-form-btn {
        text-decoration: none !important;
        color: #fff;
    }

    .pay-form-btn:hover {
        color: #fff;
    }

    @media screen and (max-width:576px) {
        .form-payment-heading h2 {
            font-size: 1.5rem;
        }

        .ui-datepicker {
            width: 230px;
        }
    }

    @media screen and (max-width:991px) {
        .payment-tab-icon {
            width: 100%;
            margin: 0 auto;
        }
    }

    .ui-datepicker .ui-datepicker-header {
        background: #E37048;
    }

    .ui-datepicker .ui-datepicker-title {
        color: #000;

    }

    .ui-state-default,
    .ui-widget-content .ui-state-default {
        background: #fff;
        color: #E37048;
    }

    .ui-datepicker table {
        background: #fff;
    }

    .ui-datepicker-week-end span {
        color: #FFA671;
    }

    .ui-datepicker-calendar th span {
        color: #FFA671;
    }
</style>
@section('content')
@include('includes.userdashboard.navbar')

<div class="content-wrapper">
    <div class="container-fluid mb-4">
        <div class="dashboard-header-left mx-4 py-3">
            <h1><i class="fa fa-angle-left mr-2" aria-hidden="true"></i> Payment </h1>
        </div>
        <div class="main-form-section">
            <div class="form-payment-heading mx-3 mt-3">
                <h2 class="mx-3 py-3">Choose a payment Method</h2>
            </div>
            <div class="payment-form-tab">
                <div class="container py-3 py-sm-5">
                    <div class="row">
                        <div class="col-lg-12 mx-auto">
                            <div class=" ">
                                <div class="card-header">
                                    <div class="pt-4 pb-2 payment-tab-icon">
                                        <!-- Credit card form tabs -->
                                        <ul role="tablist" class="nav  nav-pills rounded nav-fill mb-3">
                                            <li class="nav-item m-2 tab-btn-outer">

                                                <a data-toggle="pill" href="#credit-card" class="nav-link active tab-btn py-3 "><i class="fa fa-credit-card-alt"></i> <br> Credit Card </a>
                                            </li>
                                            <li class="nav-item m-2 tab-btn-outer">

                                                <a data-toggle="pill" href="#paypal" class="nav-link tab-btn py-3 "><i class="fa fa-paypal"></i> <br> Paypal </a>

                                            </li>
                                        </ul>
                                    </div> <!-- End -->
                                    <!-- Credit card form content -->
                                    <div class="tab-content">
                                        <!-- credit card info-->
                                        <div id="credit-card" class="tab-pane fade show active pt-3">
                                            <form role="form" onsubmit="event.preventDefault()">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group pay-field">
                                                            <input type="text" name="username" placeholder="John" required class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group pay-field">
                                                            <input type="text" name="username" placeholder="Smith" required class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group pay-field">
                                                            <div class="input-group">
                                                                <input type="text" name="cardNumber" placeholder="1234-1234-1234-1234" class="form-control " required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group pay-field">
                                                            <div class="input-group">
                                                                <input type="text" name="cardNumber" placeholder="123456789" class="form-control " required>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group pay-field">
                                                            <div class="input-group ">
                                                                <input id="datepickerone" type="text" name="datepickerone" placeholder="Pick Date" class="form-control datepicker" required>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group pay-field">
                                                            <div class="input-group ">
                                                                <input name="datepickerone" id="datepickertwo" type="text" placeholder="Pick Date" class="form-control datepicker" required>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class=" ml-auto mt-3 mr-2">
                                                        <a class="pay-form-btn " href="#" data-toggle="modal" data-target="#sucessModal">Pay Now</a>
                                                    </div>

                                            </form>
                                        </div>
                                    </div> <!-- End -->
                                    <!-- Paypal info -->
                                    <div id="paypal" class="tab-pane fade pt-3">
                                        <form role="form" onsubmit="event.preventDefault()">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group pay-field">
                                                        <input type="text" name="username" placeholder="John" required class="form-control ">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group pay-field">
                                                        <input type="text" name="username" placeholder="Smith" required class="form-control ">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group pay-field">
                                                        <div class="input-group">
                                                            <input type="text" name="cardNumber" placeholder="1234-1234-1234-1234" class="form-control " required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group pay-field">
                                                        <div class="input-group">
                                                            <input type="text" name="cardNumber" placeholder="123456789" class="form-control " required>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group pay-field">
                                                        <div class="input-group ">
                                                            <input id="datepickerthree" type="text" name="cardNumber" placeholder="Pick Date" class="form-control datepicker" required>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group pay-field">
                                                        <div class="input-group ">
                                                            <input id="datepickerfour" type="text" name="cardNumber" placeholder="Pick Date" class="form-control datepicker" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="ml-auto ml-auto mt-3 mr-2">
                                                    <a class="pay-form-btn " href="#" data-toggle="modal" data-target="#sucessModal">Pay Now</a>
                                                </div>

                                        </form>
                                    </div> <!-- End -->
                                    <!-- bank transfer info -->
                                    <!-- End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->
    <div class="modal fade" id="sucessModal" tabindex="-1" role="dialog" aria-labelledby="signupModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content signupModalDialogue">
                <!-- <div class="w-50" style="background-color:#E37048 ; height:5px; margin-left:15px"></div> -->
                <div class="modalHeader px-4 pt-4 pb-2 d-flex justify-content-end align-items-center">
                    <!-- <h2>Signup to <span>WORKITPT</span></h2> -->
                    <img style="width: 8%;" data-dismiss="modal" src="{{asset('public/assets/images/x-circle.svg')}}" alt="">
                </div>
                <div class="modal-body text-center sucess-modal">
                    <img style="width:60%;margin:0 auto" src="{{asset('public/assets/images/sucess.svg')}}" alt="">
                    <h1 class="mt-2">Success!</h1>
                    <p>Your has been created<br>
                        successfully</p>
                </div>
            </div>
        </div>
    </div>

    @endsection
    @section('insertsfooter')
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#datepickerone").datepicker();
        });
        $(function() {
            $("#datepickertwo").datepicker();
        });
        $(function() {
            $("#datepickerthree").datepicker();
        });
        $(function() {
            $("#datepickerfour").datepicker();
        });
    </script>
    <script>
        $('.sidenav .nav-item:nth-of-type(1)').addClass('active')
    </script>

    @endsection