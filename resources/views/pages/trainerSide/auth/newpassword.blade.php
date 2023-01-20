@extends('layouts.trainerSide.default')
<link rel="stylesheet" href="{{asset('public/assets/trainercss/newpassword.css')}}">
@section('content')
<div class="row login-section">
    <div class="col-12 col-md-6 right-parent  pt-5 px-5 mt-md-5">
        <div class="login-right-side ">
            <div class="heading-area">
                <img class="d-none d-md-block" src="{{asset('public/assets/images/logo.svg')}}" alt="">
                <img class="d-block d-md-none" src="{{asset('public/assets/trainerimages/logo-f.svg')}}" alt="">
                <h3 class="pt-5 pb-0">Enter <br> <span>New Password</span> </h3>
            </div>
            <form class="mt-3">
                <div class="form-group form-field">
                    <label for="">Password</label>
                    <div class="login-password-field">

                        <input type="password" class="form-control pl-sm-4 pl-2 pr-5" id="passInput" >
                        <i id="hidePass" class="fa fa-eye-slash" aria-hidden="true"></i>
                        <i id="showPass" class="fa fa-eye" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="form-group form-field">
                    <label for="">Confirm Password</label>
                    <div class="login-password-field">
                        <input type="password" class="form-control pl-sm-4 pl-2 pr-5" id="passInput" >
                        <i id="hidePass" class="fa fa-eye-slash" aria-hidden="true"></i>
                        <i id="showPass" class="fa fa-eye" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="form-field pt-5 text-center">
                    <button type="submit" class="btn btn-default text-center">Confirm</button>
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