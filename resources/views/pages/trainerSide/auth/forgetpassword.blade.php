@extends('layouts.trainerSide.default')
<!-- <link rel="stylesheet" href="{{asset('public/assets/trainercss/forgetpassword.css')}}"> -->
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

    .form-field label {
        color: #ADA7A7;
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


    .form-field button {
        color: #E37048;
        background: white;
        border: 1px solid #E37048;
        height: 50px;
        width: 100%;
        font-weight: 500;
        max-width: 400px;
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
        color: #E37048;
        background: white;
        border: 1px solid #E37048;
        height: 50px;
        width: 100%;
        font-weight: 500;
        display: flex;
        align-items: center;
        justify-content: center;
        max-width: 400px;
        margin: 0 auto;
        outline: none !important;
        box-shadow: none !important;
    }

    .form-field a:hover {
        color: white;
        border: 1px solid #E37048;
        background: #E37048;

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

        .form-field input {
            height: 50px;
        }

        .form-field a {
            height: 45px;
        }

        .form-field button {
            height: 45px;
        }

        .form-field label {
            color: #fff;
        }
    }
</style>
@section('content')
<div class="row login-section">
    <div class="col-12 col-md-6 right-parent  my-auto px-5 ">
        <div class="login-right-side ">
            <div class="heading-area">
                <img class="d-none d-md-block" src="{{asset('public/assets/images/logo.svg')}}" alt="">
                <img class="d-block d-md-none" src="{{asset('public/assets/trainerimages/logo-f.svg')}}" alt="">
                <h3 class="pt-5 pb-0">Forget <br> <span>Password</span> </h3>
            </div>
            <form class="mt-5" action="{{route('trainer/forgotPassword')}}" method="post">
                @csrf
                <div class="form-group form-field">
                    <label for="">Email</label>
                    <input type="email" class="form-control pl-sm-4 pl-2" id="email" name="email">
                </div>
                <div class="form-field pt-5 text-center">
                    <button type="submit" class="btn btn-default text-center">Send</button>
                    <!-- <a class="btn btn-default text-center" href="{{url('/trainer/otp')}}">Send</a> -->
                </div>
            </form>

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
@endsection