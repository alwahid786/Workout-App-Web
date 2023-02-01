@extends('layouts.userdashboard.default')
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<style>
    .dashboard-header-left h1 {
        color: #E37048;
        font-size: 2rem;
        font-weight: 600 !important;
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

    .credit-card-wrapper {
        position: relative;
        width: 400px;
    }

    .credit-card-wrapper img {
        position: relative;
        width: 400px;
        border-radius: 25px;
    }

    .credit-card-upper-c {
        position: absolute;
        top: 18px;
        left: 40px;

    }

    .credit-card-lower-c {
        position: absolute;
        bottom: 18px;
        left: 40px;
    }

    .credit-card-upper-c h1 {
        color: black;
        font-size: 1rem;
        font-weight: 500;
    }

    .credit-card-upper-c {
        color: black;
        font-size: 0.8rem;
        font-weight: 400;
    }

    .credit-card-lower-c h1 {
        font-size: 1rem;
        font-weight: 700;
        letter-spacing: 1px;
        color: black;
    }

    .credit-card-lower-c p {
        font-size: 0.7rem;
        font-weight: 400;
        color: black;
        margin-bottom: 5px;
    }

    .credit-card-lower-c h2 {
        font-size: 0.8rem;
        font-weight: 500;
        color: black;

    }

    .credit-card-wrapper-right {
        position: relative;
        width: 400px;
        height: 246px;
        background: #F2F2F2;
        border: 4px solid #BCBCBC;
        border-radius: 25px;
    }

    .credit-card-wrapper-right-inner {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .credit-card-wrapper-right-inner img {
        width: 70%;
    }

    .credit-card-wrapper-right-inner p {
        color: #747474;
        font-weight: 500;
        font-size: 1.3rem;
    }

    .d-payment-card-wrapper {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        max-width: 1000px;
        margin: 0 auto;
    }

    @media screen and (max-width:576px) {
        .credit-card-wrapper-right-inner img {
            width: 50%;
        }

        .credit-card-wrapper-right {
            position: relative;
            width: 400px;
            height: 175px;
            background: #F2F2F2;
            border: 4px solid #BCBCBC;
            border-radius: 25px;
        }

        #payment-form-h {
            font-size: 2rem;
            font-weight: 500;
        }

        .payment-form-label {
            color: #434343;
            font-size: 1rem;
        }

        .credit-card-wrapper img {
            position: relative;
            width: 290px;
            border-radius: 25px;
        }

        .credit-card-wrapper {
            position: relative;
            width: 290px;
        }

        .credit-card-wrapper-right {
            position: relative;
            width: 290px;
        }

        .credit-card-upper-c {
            position: absolute;
            top: 12px;
            left: 28px;
        }

        .credit-card-lower-c {
            position: absolute;
            bottom: 6px;
            left: 30px;
        }

        .credit-card-upper-c h1 {
            color: black;
            font-size: 0.8rem;
            font-weight: 500;
            margin-bottom: 0px;
        }

        .credit-card-lower-c h1 {
            font-size: 0.8rem;
            font-weight: 700;
            letter-spacing: 1px;
            color: black;
        }

        .credit-card-lower-c h2 {
            font-size: 0.6rem;
            font-weight: 500;
            color: black;
        }
    }

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
        width: 15%;
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
        font-size: 1.5rem;

    }

    .update-profile-form-btn:hover {
        text-decoration: none !important;
        color: #FFBB00;
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
                <h2 class="mx-3 pt-3 ">Choose a payment Method</h2>
            </div>
            <div class="d-payment-card pb-5">
                <div class="d-payment-card-wrapper">
                    @foreach($card_detail as $card)
                    <div class="mt-4 credit_card" id="credit_card">
                        <div class="credit-card-wrapper">
                            <img class="card_img" src="{{asset('public/assets/images/payment-card-left.svg')}}" alt="">

                            <div class="credit-card-upper-c">
                                <h1>{{$card['type']}}</h1>
                                <!-- <p>credit card</p> -->
                            </div>
                            <div class="credit-card-lower-c">
                                <h1>{{$card['card_number']}}</h1>
                                <p>VALID THRU {{$card['valid_thru']}}</p>
                                <h2>{{$card['card_name']}}</h2>
                            </div>
                        </div>

                        <input type="hidden" class="customer_id" value="{{$card['customer_id']}}">
                        <input type="hidden" class="id" value="{{$card['id']}}">
                    </div>
                    @endforeach
                    <div class="mt-4">
                        <a href="{{url('/payments')}}">
                            <div class="credit-card-wrapper-right">
                                <div class="credit-card-wrapper-right-inner text-center">
                                    <img src="{{asset('public/assets/images/card-plus.svg')}}" alt="">
                                    <p class="mt-3">Add New Card</p>
                                </div>

                            </div>
                        </a>

                    </div>

                </div>
            </div>
            <div class=" profile-nxt-btn mt-5">
                <!-- <a href="#" class="update-profile-form-btn" data-toggle="modal" data-target="#sucessModal" id="sighnup_submit">Pay Now</a> -->
                <form action="{{route('/stripe/payment')}}" method="post">
                    @csrf
                    <input type="hidden" id="customer" name="customer">
                    <input type="hidden" id="customer_id" name="customer_id">

                    <input type="hidden" id="session" name="session_id" value="{{$session['id']}}">
                    <input type="hidden" id="session" name="amount" value="{{$session['price']}}">
                    <input type="hidden" id="sessionDate" name="session_date" value="{{$sessiondate}}">


                    <!-- <a href="#" class="update-profile-form-btn"></a> -->
                    <button class="update-profile-form-btn" type="submit">Pay Now</button>
                </form>
            </div>
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
                <p>Your Request Has Been
                    Send To the Trainer
                    the money is held in escrow and will be released to the trainer after the workout session is complete.</p>
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
<script>
    $('.credit_card').click(function() {

        $('.credit_card').find('.card_img').css("border", "none");
        $(this).find('.card_img').css("border", "4px solid black");


        var customer_id = $(this).find('.customer_id').val();
        var id = $(this).find('.id').val();

        // alert(id);
        $("#customer").val(customer_id);
        $("#customer_id").val(id);



    });
</script>

@endsection