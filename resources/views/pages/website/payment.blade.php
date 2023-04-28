@extends('layouts.website.default')
@section('content')
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<link rel="stylesheet" href="{{asset('public/assets/css/radio.css')}}">
<style>
    body {
        background: #f4f4f4;
    }

    input[type="file"] {
        display: none;
    }

    .hero-section-upload {
        color: #fff;
        background: linear-gradient(180deg, #FFBB00 0%, #E37048 100%);
        border-radius: 7px;
        padding: 15px 40px;
        font-size: 1rem;
        font-weight: 600;
        /* width: 50%; */
        cursor: pointer;
        margin: 0 auto;
        width: 100%;
        max-width: 204px;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .payment-radio-section {
        background: #F8F8F8;
        border: 1px solid rgba(0, 0, 0, 0.2);
    }

    ٖ .pro-form label {
        color: #fff;
        font-size: 0.8rem;
    }

    .form-label span {
        color: #E37048 !important;
        font-size: 0.6rem;
    }

    .pro-form input,
    .pro-form select {
        height: 65px !important;
        color: #fff !important;

    }

    .pro-form select {
        -moz-appearance: none;
        /* Firefox */
        -webkit-appearance: none;
        /* Safari and Chrome */
        appearance: none;
    }

    .pro-form select option {
        color: #411100;
        border-radius: 20px;
    }

    select option:hover {
        background: yellow !important;
    }


    .pro-form input::placeholder {
        color: #fff;
    }

    .pro-form input,
    .pro-form textarea,
    .pro-form select {
        background: rgba(249, 249, 249, 0.2) !important;
        border: 1px solid rgba(234, 234, 234, 0.2) !important;
        box-shadow: 0px 4px 22px rgba(0, 0, 0, 0.05) !important;
        border-radius: 10px !important;
    }


    /* .profile-nxt-btn {
        text-align: center;
        background: #E37048;
        width: 70% !important;
        margin: 0 auto;
        border-radius: 10px;
    } */

    .profile-nxt-btn button,
    .profile-nxt-btn button:hover,
    .profile-nxt-btn button:focus,
    .profile-nxt-btn button:active {
        background: rgba(227, 112, 72, 0.6);
        border: none;
        box-shadow: none;
        outline: none;
        color: white;
        padding: 35px 0;
        border-radius: 15px;
        text-align: center;
        width: 60%;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
    }


    .update-profile-form-btn {
        color: #fff;
        font-weight: 600;
        font-size: 2rem;

    }

    .update-profile-form-btn:hover {
        color: #FFBB00;
    }

    /* input[type=radio]#color-radio {
        accent-color: #E37048;
        border: 1px solid #E37048;
        transform: scale(1.5);
        background: transparent !important;
    } */

    @media screen and (min-width:768px) {
        /* input[type=radio]#color-radio {
            transform: scale(2);
        } */

    }

    @media screen and (max-width:576px) {
        .pro-form input {
            height: 55px !important;
        }

        .update-profile-form-btn {
            font-size: 1.5rem;
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

    .right-inner-addon img {
        position: absolute;
        top: 50%;
        left: 95%;
        transform: translateX(-50%) translateY(-50%);
        width: 20px;
        cursor: pointer;
    }


    .right-inner-addon {
        position: relative;
    }

    .right-inner-addon input {
        padding-right: 35px !important;
    }

    /* .ui-datepicker-calendar {
        display: none;
    } */

    /* .ui-datepicker .ui-datepicker-prev,
    .ui-datepicker .ui-datepicker-next span,
    .ui-datepicker .ui-datepicker-buttonpane button.ui-datepicker-current {
        display: none;
    } */

    .sucess-modal h1 {
        color: black;
        font-size: 2rem;
        font-weight: 700;
    }

    .sucess-modal p {
        color: #A6A6A6;
        font-size: 1.5rem;
    }

    .hero-right label {
        cursor: pointer !important;
    }

    .profile-hero-right {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .profile-hero-right img {
        margin: 0 auto;
    }

    .form-box label span {
        color: #000;
    }

    .payment-form-label {
        color: #434343;
        font-size: 1.2rem;
    }

    .payment-form::placeholder {
        color: #979797 !important;
    }

    .payment-form input {
        height: 60px;
        background: #f8f8f8;
        border-radius: 10px;
        box-shadow: none !important;
        outline: none !important;
        border: 1px solid rgba(0, 0, 0, 0.2) !important;

    }

    .payment-form input:active .payment-form input:focus {
        box-shadow: none !important;
        outline: none !important;
        border: 1px solid rgba(0, 0, 0, 0.2) !important;
    }

    #payment-form-h {
        font-size: 2.5rem;
        font-weight: 500;
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
        font-size: 1.5rem;

    }

    .update-profile-form-btn:hover {
        text-decoration: none !important;
        color: #FFBB00;
    }

    @media screen and(max-width:576px) {}

    .form-wrapper {
        position: relative;
    }

    .form-wrapper img:nth-of-type(1) {
        position: absolute;
        top: 50%;
        right: 50px;
        transform: translate(0%, -50%);
        width: 30px;
    }

    .form-wrapper img:nth-of-type(2) {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translate(0%, -50%);
        width: 30px;
    }

    .form-wrapper input {
        padding-right: 100px;
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

    @media screen and (max-width:576px) {

        .profile-nxt-btn button,
        .profile-nxt-btn button:hover,
        .profile-nxt-btn button:focus,
        .profile-nxt-btn button:active {
            width: 70% !important;
            padding: 10px 0px !important;
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
</style>
@include('includes.website.navbar-two')
<div class="container-fluid hero-section">
    <div class="container hero-section-wrapper" data-aos="fade-left">
        <div class="row">
            <div class="col-md-6 order-2 order-md-1  text-center text-md-left">
                <div class="hero-left-content heroText">
                    <h1>Setup Payment Details</h1>
                    <p class="pb-4 pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero nisi ratione esse qui, explicabo fugit voluptatum eum quae obcaecati in?</p>
                </div>
                <div class="col-lg-10 col-xl-8">
                    <div class="row">
                        <div class="col-6   hero-section-list my-2" data-aos="zoom-in" data-aos-delay="500">
                            <img src="{{asset('public/assets/images/person-icon.svg')}}" alt="image">
                            <p>Male , 5’11”</p>
                        </div>
                        <div class="col-6  hero-section-list my-2" data-aos="zoom-in" data-aos-delay="600">
                            <img src="{{asset('public/assets/images/mail-icon.svg')}}" alt="image">
                            <p>johnsmith@gmail.com</p>
                        </div>
                        <div class="col-6  hero-section-list my-2" data-aos="zoom-in" data-aos-delay="700">
                            <img src="{{asset('public/assets/images/phone-icon.svg')}}" alt="image">
                            <p>+23-123-123 </p>
                        </div>
                        <div class="col-6  hero-section-list my-2" data-aos="zoom-in" data-aos-delay="800">
                            <img src="{{asset('public/assets/images/phone-icon.svg')}}" alt="image">
                            <p>+23-123-123 </p>
                        </div>
                        <div class="col-6  hero-section-list my-2" data-aos="zoom-in" data-aos-delay="900">
                            <img src="{{asset('public/assets/images/persons-icon.svg')}}" alt="image">
                            <p>First Cousin</p>
                        </div>
                        <div class="col-6  hero-section-list my-2" data-aos="zoom-in" data-aos-delay="1000">
                            <img src="{{asset('public/assets/images/heart-icon.svg')}}" alt="image">
                            <p>Pollen Allergy</p>
                        </div>
                        <div class="col-6  hero-section-list my-2" data-aos="zoom-in" data-aos-delay="1100">
                            <img src="{{asset('public/assets/images/location-icon.svg')}}" alt="image">
                            <p>Toront, Canada</p>
                        </div>
                        <div class="col-6  hero-section-list my-2" data-aos="zoom-in" data-aos-delay="1200">
                            <img src="{{asset('public/assets/images/c-icon.svg')}}" alt="image">
                            <p>22 Nov, 1996</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6 order-1 order-md-2 hero-right text-center mb-5 mb-md-0">
                <img src="{{asset('public/assets/images/payment-hero.webp')}}" alt="image">
                <!-- <label class="hero-section-upload my-4"> Upload Image
                    <input type="file" size="60">
                </label> -->
            </div>
        </div>
    </div>
</div>


<!-- .................................Form Payment Method................................ -->

<!-- <form> -->

<!-- ..................................Form Payment Radio Button........................ -->
<div class="container-fluid payment-radio-section py-4  my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="form-check text-sm-center py-2 py-sm-3" data-aos="zoom-in">
                    <div class="form-box">
                        <label>
                            <input type="radio" name="paymentradio">
                            <div class="circle"></div>

                            <span>Credit or Debit Card</span>
                        </label>

                    </div>
                    <!-- <input class="form-check-input" id="color-radio" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label text-white ml-2 radio-label" for="flexRadioDefault1">Credit or Debit Card</label> -->
                </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0 ">

                <div class="form-check text-sm-center py-2 py-sm-3" data-aos="zoom-in">
                    <div class="form-box">
                        <label>
                            <input type="radio" name="paymentradio">
                            <div class="circle"></div>
                            <span>Paypal</span>
                        </label>

                    </div>
                    <!-- <input class="form-check-input" id="color-radio" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label text-white ml-2 radio-label" for="flexRadioDefault2">Paypal</label> -->
                </div>

            </div>
        </div>
    </div>

</div>
<!-- ................radio end.............. -->
<div class="container my-5">
    <div class="row">
        <div class="col-lg-6 my-auto">
            <div class="credit-card-wrapper">
                <img src="{{asset('public/assets/images/payment-card-left.svg')}}" alt="">

                <div class="credit-card-upper-c">
                    <h1>Bank Name</h1>
                    <p>credit card</p>
                </div>
                <div class="credit-card-lower-c">
                    <h1>2345 6489 6340 7324</h1>
                    <p>VALID THRU 12/25</p>
                    <h2>CARDHOLDER NAME</h2>
                </div>

            </div>

        </div>
        <div class="col-lg-6 mt-4 mt-lg-0">
            <h1 class="mb-4 " id="payment-form-h">Payment Details</h1>
            <form action="{{url('/payment_intent')}}" method="POST">
                @csrf
                <div class="form-group payment-form">
                    <label for="exampleInputEmail1" class="payment-form-label">Card Holder</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="John Smith" name="name">
                </div>
                <div class="form-group payment-form ">
                    <label for="exampleInputPassword1" class="payment-form-label">Card Number</label>
                    <div class="form-wrapper">

                        <input type="text" class="form-control" placeholder="1234 -5678-8123-1234" name="card_number">
                        <img src="{{asset('public/assets/images/credit-card.svg')}}" alt="">
                        <img src="{{asset('public/assets/images/visa.svg')}}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group payment-form">
                            <label for="exampleInputPassword1" class="payment-form-label">Valid Through</label>
                            <input type="text" id="datepickertwo" class="form-control" placeholder="2/22" name="valid_through">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group payment-form">
                            <label for="exampleInputPassword1 " class="payment-form-label">CVV</label>
                            <input type="text" class="form-control" placeholder="201" name="cvc">
                        </div>
                    </div>
                </div>
        </div>
        <input type="hidden" value="{{decrypt($session_id)}}" name="session_id">
        <input type="hidden" value="{{decrypt($session_date)}}" name="session_date">
    </div>
    <div class="col-12 my-5">
        <div class=" profile-nxt-btn">
            <!-- <a href="#" class="update-profile-form-btn" data-toggle="modal" data-target="#sucessModal">Complete</a> -->
            <button class="update-profile-form-btn" type="submit" name="submit" style="background-color:rgb(227 112 72)">Complete</button>
        </div>
    </div>
</div>
</form>

<!-- </form> -->
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
                <p>Your Card has been linked to our<br>
                    System Successfully.</p>
            </div>


        </div>
    </div>
</div>
@if(session()->has('successModalOpen'))
<script>
    $(document).ready(function() {
        $("#sucessModal").modal('show');
    });
</script>
@endif
@endsection
@section('insertfooter')
<script src="{{ asset('public/assets/js/year-select.js') }}"></script>
<script>
    $('.yearselect').yearselect({
        start: 2016,
        end: 2040
    });
</script>

<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
<script>
    $("#datepickertwo").datepicker({});
</script>


@endsection