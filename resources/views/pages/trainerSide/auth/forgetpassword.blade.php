@extends('layouts.trainerSide.default')
<link rel="stylesheet" href="{{asset('public/assets/trainercss/forgetpassword.css')}}">
@section('content')
<div class="row login-section">
    <div class="col-12 col-md-6 right-parent  pt-5 px-5 ">
        <div class="login-right-side ">
            <div class="heading-area">
                <img class="d-none d-md-block" src="{{asset('public/assets/images/logo.svg')}}" alt="">
                <img class="d-block d-md-none" src="{{asset('public/assets/trainerimages/logo-f.svg')}}" alt="">
                <h3 class="pt-5 pb-0">Forget <br> <span>Password</span> </h3>
            </div>
            <form class="mt-5">
                <div class="form-group form-field">
                    <label for="">Email</label>
                    <input type="email" class="form-control pl-sm-4 pl-2" id="email" >
                </div>
                <div class="form-field pt-5 text-center">
                    <button type="submit" class="btn btn-default text-center">Send</button>
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