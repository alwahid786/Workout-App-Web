@extends('layouts.trainerSide.default')
<link rel="stylesheet" href="{{asset('public/assets/trainercss/login.css')}}">
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
                    <label><input type="checkbox"> Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <div class="form-field pt-5 text-center">
                    <button type="submit" class="btn btn-default text-center">Login</button>
                </div>
            </form>
            <div class="trainer-btn text-center col">
                <a href="#">Become a <strong>Trainer?</strong> </a>
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