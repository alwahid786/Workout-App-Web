@extends('layouts.trainerSide.default')
<!-- <link rel="stylesheet" href="{{asset('public/assets/trainercss/otp.css')}}"> -->
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        overflow-x: hidden;
    }

    .login-section {
        height: 100%;
    }

    .login-left-side {
        background-image:
            linear-gradient(360deg, #F2623D -62.23%, rgba(242, 98, 61, 0) 102.26%), url('../../../../workitpt_web/public/assets/trainerimages/forget-pass.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 100%;
        position: relative;
    }

    .login-left-side img {
        width: 84%;
        position: absolute;
        bottom: 10%;
        left: 55%;
        transform: translate(-50%, -50%);
    }

    .right-parent {
        position: relative;
    }


    .heading-area h3 {
        color: black;
        font-size: 1.4rem;
        overflow-y: hidden;
    }

    .heading-area h3 span {
        color: #E37048;
        font-weight: bold;
    }

    /* .heading-area img{
    width: 200px;
} */



    .login-password-field {
        position: relative;
    }

    .login-password-field i {
        color: #B5B5B5;
        position: absolute;
        right: 0px;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    /*..............OTP Field..................*/
    .verification-code {
        width: 100%;
        /* max-width: 500px; */
        position: relative;
        margin: 50px auto;

    }

    .control-label {
        display: block;
        margin: 40px auto;
        font-weight: 900;
    }

    .verification-code--inputs input[type=text] {
        border: 1px solid #E37048;
        width: 55px;
        height: 58px;
        padding: 10px;
        text-align: center;
        display: inline-block;
        border-radius: 7px;
        margin: 0 5px;
    }

    .form-field button {
        color: #E37048;
        background: white;
        border: 1px solid #E37048;
        height: 50px;
        width: 100%;
        font-weight: 500;
        outline: none !important;
        box-shadow: none !important;

    }

    .form-field button:hover {
        color: white;
        border: 1px solid #E37048;
        background: #E37048;

    }

    .form-field a {
        text-decoration: none !important;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        color: #E37048;
        background: white;
        border: 1px solid #E37048;
        height: 50px;
        width: 100%;
        font-weight: 500;
        outline: none !important;
        box-shadow: none !important;
    }

    .form-field a:hover {
        color: white;
        border: 1px solid #E37048;
        background: #E37048;

    }

    .otp-content p:nth-of-type(1) {
        color: #E37048;
        font-size: 1rem;
    }

    .otp-content p:nth-of-type(2) {
        color: #A8A8A8;
        font-size: 1rem;
    }

    .login-email-field-red {
        border: 1px solid red !important;
    }

    .login-email-field-green {
        border: 1px solid green !important;
    }

    @media screen and (min-width:1600px) {
        .login-right-side {
            margin: 0 auto;
            max-width: 600px !important;
        }

        .verification-code--inputs input[type=text] {
            border: 1px solid #E37048;
            width: 65px;
            height: 68px;
            padding: 10px;
            text-align: center;
            display: inline-block;
            border-radius: 7px;
            margin: 0 5px;
        }

        .verification-code--inputs {
            text-align: center;
        }
    }

    @media screen and (min-width:992px) {
        .login-right-side {
            max-width: 415px;
            width: 100%;
        }
    }

    @media screen and (max-width:991px) {
        .verification-code--inputs input[type=text] {
            border: 1px solid #E37048;
            width: 50px;
            height: 53px;
            padding: 10px;
            text-align: center;
            display: inline-block;
            border-radius: 7px;
            margin: 0 2px;
        }
    }

    @media screen and (max-width:850px) {
        .verification-code--inputs input[type=text] {
            border: 1px solid #E37048;
            width: 45px;
            height: 48px;
            padding: 10px;
            text-align: center;
            display: inline-block;
            border-radius: 7px;
            margin: 0 1px;
        }
    }

    @media screen and (max-width:1366px) {
        .form-field input {
            height: 60px;
        }
    }

    @media screen and (max-width:767px) {
        .login-left-side-wrapper {
            display: none;
        }

        .right-parent {
            background-image:
                linear-gradient(360deg, #F2623D -62.23%, rgba(242, 98, 61, 0) 102.26%), url('../../../../workitpt_web/public/assets/trainerimages/forget-pass.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100%;
            position: relative;
        }

        .heading-area {
            text-align: center;
        }

        .login-right-side {
            width: 80%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .heading-area img:nth-of-type(2) {
            width: 50%;
            margin: 0 auto;
        }

        .heading-area h3 {
            color: white;
        }

        .form-field input {
            height: 50px;
        }

        .form-field button {
            height: 45px;
            max-width: 300px;
        }

        .form-field a {
            height: 45px;
        }

    }

    @media screen and (max-width:576px) {
        .verification-code--inputs input[type=text] {
            border: 1px solid #E37048;
            width: 40px;
            height: 43px;
            padding: 10px;
            text-align: center;
            display: inline-block;
            border-radius: 7px;
            margin: 0 1px;
        }
    }
</style>
@section('content')
<div class="row login-section">
    <div class="col-12 col-md-6 right-parent  px-5 my-auto">
        <div class="login-right-side text-center text-md-left">
            <div class="heading-area">
                <img class="d-none d-md-block" src="{{asset('public/assets/images/logo.svg')}}" alt="">
                <img class="d-block d-md-none" src="{{asset('public/assets/trainerimages/logo-f.svg')}}" alt="">
                <h3 class="pt-5 pb-0">OTP <br> <span>Code</span> </h3>
            </div>
            <div class="verification-code">
                <div class="verification-code--inputs">
                    <input type="text" maxlength="1" class="ml-0 otpone" />
                    <input class="otptwo" type="text" maxlength="1" />
                    <input class="otpthree" type="text" maxlength="1" />
                    <input class="otpfour" type="text" maxlength="1" />
                    <input class="otpfive" type="text" maxlength="1" />
                    <input class="otpsix" type="text" maxlength="1" />
                </div>
                <input type="hidden" id="verificationCode" />
            </div>
            <div class="otp-content text-center">
                <p>04:00</p>
                <p>Resend Code</p>
            </div>

            <div class="form-field pt-5 ">
                <!-- <button type="submit" class="btn btn-default text-center">Confirm</button> -->
                <a class="btn btn-default text-center text-uppercase" href="{{url('/trainer/newpassword')}}">Confirm</a>
            </div>


        </div>
    </div>
    <div class="col-md-6 px-0 login-left-side-wrapper">
        <div class="login-left-side">
            <img src="{{asset('public/assets/trainerimages/logo-trans.svg')}}" alt="">
        </div>
    </div>
</div>
@endsection
@section('insertsfooter')
<script>
    //Code Verification
    var verificationCode = [];
    $(".verification-code input[type=text]").keyup(function(e) {

        // Get Input for Hidden Field
        $(".verification-code input[type=text]").each(function(i) {
            verificationCode[i] = $(".verification-code input[type=text]")[i].value;
            $('#verificationCode').val(Number(verificationCode.join('')));
            //console.log( $('#verificationCode').val() );
        });

        //console.log(event.key, event.which);

        if ($(this).val() > 0) {
            if (event.key == 1 || event.key == 2 || event.key == 3 || event.key == 4 || event.key == 5 || event.key == 6 || event.key == 7 || event.key == 8 || event.key == 9 || event.key == 0) {
                $(this).next().focus();
            }
        } else {
            if (event.key == 'Backspace') {
                $(this).prev().focus();
            }
        }

    }); // keyup

    $('.verification-code input').on("paste", function(event, pastedValue) {
        console.log(event)
        $('#txt').val($content)
        console.log($content)
        //console.log(values)
    });

    $editor.on('paste, keydown', function() {
        http: //jsfiddle.net/5bNx4/#run
            var $self = $(this);
        setTimeout(function() {
            var $content = $self.html();
            $clipboard.val($content);
        }, 100);
    });
</script>
<script>
    $(".otpone").on('keyup', function() {
        let values = $(".otpone").val();
        if (values.length >= 1) {
            $(".otpone").removeClass('login-email-field-red');
            $(".otpone").addClass('login-email-field-green');
        } else {
            $(".otpone").removeClass('login-email-field-green');
            $(".otpone").addClass('login-email-field-red');
        }

    })
    $(".otptwo").on('keyup', function() {
        let values = $(".otptwo").val();
        if (values.length >= 1) {
            $(".otptwo").removeClass('login-email-field-red');
            $(".otptwo").addClass('login-email-field-green');
        } else {
            $(".otptwo").removeClass('login-email-field-green');
            $(".otptwo").addClass('login-email-field-red');
        }

    })
    $(".otpthree").on('keyup', function() {
        let values = $(".otpthree").val();
        if (values.length >= 1) {
            $(".otpthree").removeClass('login-email-field-red');
            $(".otpthree").addClass('login-email-field-green');
        } else {
            $(".otpthree").removeClass('login-email-field-green');
            $(".otpthree").addClass('login-email-field-red');
        }

    })
    $(".otpfive").on('keyup', function() {
        let values = $(".otpfive").val();
        if (values.length >= 1) {
            $(".otpfive").removeClass('login-email-field-red');
            $(".otpfive").addClass('login-email-field-green');
        } else {
            $(".otpfive").removeClass('login-email-field-green');
            $(".otpfive").addClass('login-email-field-red');
        }

    })
    $(".otpfour").on('keyup', function() {
        let values = $(".otpfour").val();
        if (values.length >= 1) {
            $(".otpfour").removeClass('login-email-field-red');
            $(".otpfour").addClass('login-email-field-green');
        } else {
            $(".otpfour").removeClass('login-email-field-green');
            $(".otpfour").addClass('login-email-field-red');
        }

    })
    $(".otpsix").on('keyup', function() {
        let values = $(".otpsix").val();
        if (values.length >= 1) {
            $(".otpsix").removeClass('login-email-field-red');
            $(".otpsix").addClass('login-email-field-green');
        } else {
            $(".otpsix").removeClass('login-email-field-green');
            $(".otpsix").addClass('login-email-field-red');
        }

    })
</script>
@endsection