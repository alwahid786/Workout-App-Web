@extends('layouts.trainerSide.default')
<!-- <link rel="stylesheet" href="{{asset('public/assets/trainercss/login.css')}}"> -->
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
            linear-gradient(rgba(227, 112, 72, 0.8),
                rgba(227, 112, 72, 0.8)), url('../../../../workitpt_web/public/assets/trainerimages/trainer-login.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 100%;
        position: relative;
    }

    .login-left-side img {
        width: 65%;
        position: absolute;
        top: 30%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .right-parent {
        position: relative;
    }

    .heading-area h3 {
        color: black;
        font-size: 1.4rem;
    }

    /* .heading-area img{
    width: 200px;
} */
    .login-password-field input {
        position: relative;

    }

    .form-field input {
        background-color: #F8F8F8;
        border: 1px solid #D9D9D9;
        padding: 3px 5px;
        height: 70px;
        border-radius: 10px;
        width: 100%;
        color: #B5B5B5;
        box-shadow: none !important;
        outline: none !important;
        border: 1px solid #D9D9D9 !important;
    }

    .form-field input::placeholder {
        color: #B5B5B5;
    }

    .login-password-field i {
        color: #B5B5B5;
        position: absolute;
        right: 0px;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    .form-check {
        display: flex !important;
        justify-content: space-between;

    }

    .form-check label {
        color: #8c8c8c !important;
    }

    .form-check a {
        color: #E37048;
        text-decoration: none;
        font-size: 1.1rem;
    }

    .form-check a:hover {
        border-bottom: 1px solid #E37048;
        text-decoration: none;
        font-size: 1.1rem;
        color: #E37048;
    }

    .form-check a:active .form-check a:focus {
        text-decoration: none !important;
    }

    .form-field button {
        color: #E37048;
        background: white;
        border: 1px solid #E37048;
        height: 50px;
        width: 100%;
        font-weight: 500;
        max-width: 250px;
        outline: none !important;
        box-shadow: none !important;

    }

    .form-field button:hover {
        color: white;
        border: 1px solid #E37048;
        background: #E37048;

    }

    .trainer-btn {
        margin-top: 7%;
    }

    .trainer-btn a {
        color: #E37048;
        text-decoration: none;
        font-size: 1.2rem;
        font-weight: 400;
    }

    .trainer-btn a:hover {
        border-bottom: 1px solid #E37048;
        text-decoration: none;
        font-size: 1.2rem;
        font-weight: 400;
        color: #E37048;
    }

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
.input-checkbox{
    display: flex;
}
.input-checkbox p{
    margin-bottom: 0;
    padding-left: 10px;
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
                linear-gradient(rgba(227, 112, 72, 0.8),
                    rgba(227, 112, 72, 0.8)), url('../../../../workitpt_web/public/assets/trainerimages/trainer-login.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100%;
            position: relative;
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
        }

        .heading-area h3 {
            color: white;
        }

        .form-check label {
            color: white !important;
        }

        .form-check a {
            color: white;
        }

        .form-check a:hover {
            color: white;
            border-bottom: 1px solid white;
        }

        .form-field input {
            height: 50px;
        }

        .trainer-btn a {
            text-decoration: none;
            font-size: 1.2rem;
            font-weight: 400;
            color: white;
        }

        .trainer-btn a:hover {
            border-bottom: 1px solid white;
            color: white;
        }

        .form-field button {
            height: 45px;
        }
    }

    @media screen and (max-width:576px) {
        .form-check a {
            font-size: 1rem;
        }

        .trainer-btn a {
            font-size: 1rem;
        }
    }
</style>
@section('content')
<div class="row login-section">
    <div class="col-md-6 px-0 login-left-side-wrapper">
        <div class="login-left-side">
            <img src="{{asset('public/assets/trainerimages/logo-f.svg')}}" alt="">
        </div>
    </div>
    <div class="col-12 col-md-6 right-parent my-auto px-5 ">
        <div class="login-right-side ">
            <div class="heading-area pb-3">
                <h3 class="py-2">Login to</h3>
                <img class="d-none d-md-block" src="{{asset('public/assets/images/logo.svg')}}" alt="">
                <img class="d-block d-md-none" src="{{asset('public/assets/trainerimages/logo-f.svg')}}" alt="">
            </div>
            <form class="mt-5">
                <div class="form-group form-field">
                    <input type="email" class="form-control pl-sm-4 pl-2" id="email" placeholder="Email">
                </div>
                <div class="form-group form-field">
                    <div class="login-password-field">
                        <input type="password" class="form-control pl-sm-4 pl-2 pr-5" id="passInput" placeholder="Password">
                        <i id="hidePass" class="fa fa-eye-slash" aria-hidden="true"></i>
                        <i id="showPass" class="fa fa-eye" aria-hidden="true"></i>
                    </div>
                </div>
                
                <div class="form-check checkbox pl-0 pt-2">
                    <label class="input-checkbox"><input type="checkbox"> <p>Remember me</p> </label>
                    <a href="{{url('/trainer/forgetpassword')}}">Forgot Password?</a>
                </div>
                <div class="form-field pt-5 text-center">
                    <button type="submit" class="btn btn-default text-center">Login</button>
                </div>
            </form>
            <div class="trainer-btn text-center col">
                <a href="{{url('/trainer/stepone')}}">Become a <strong>Trainer?</strong> </a>
            </div>

        </div>
    </div>
</div>
@endsection
@section('insertsfooter')
<script>
    $('#hidePass').hide();
    $('#showPass').click(function() {
        $('#showPass').hide();
        $('#hidePass').show();
        var passInput = $("#passInput");
        if (passInput.attr('type') === 'password') {
            passInput.attr('type', 'text');
        } else {
            passInput.attr('type', 'password');
        }
    })
    $('#hidePass').on('click', function() {
        $('#hidePass').hide();
        $('#showPass').show();
        var passInput = $("#passInput");
        if (passInput.attr('type') === 'password') {
            passInput.attr('type', 'text');
        } else {
            passInput.attr('type', 'password');
        }
    })
</script>
@endsection