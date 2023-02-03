@extends('layouts.trainerSide.default')
<link rel="stylesheet" href="{{asset('public/assets/trainercss/stepfour.css')}}">
<link rel="stylesheet" href="{{asset('public/assets/trainercss/pagination.css')}}">
@section('content')
<!-- header-section -->
<div class="container-fluid update-info-header">
    <div class="container">
        <div class="update-info-content py-4">
            <h1>Create Account</h1>
            <img src="{{asset('public/assets/images/logo.svg')}}" alt="">
        </div>
    </div>
</div>
<!-- pagination-section -->
<div class="container-fluid pt-5">
    <div class="container px-0">
        <div class="pagination-wrapper px-sm-3">
            <div class="pagination-container">
                <div class="pagination-border"></div>
                <div class="pagination-box active-pagination">
                    <h1>1</h1>
                    <p>Personal Information</p>
                </div>
                <div class="pagination-box active-pagination">
                    <h1>2</h1>
                    <p>Other Information</p>
                </div>
                <div class="pagination-box active-pagination">
                    <h1>3</h1>
                    <p>Specialty </p>
                </div>
                <div class="pagination-box active-pagination">
                    <h1>4</h1>
                    <p>Payment Method</p>
                </div>
                <div class="pagination-box">
                    <h1>5</h1>
                    <p>View Profile</p>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- stepfour -->
<div class="container-fluid stripe-container">
    <div class="stripe-wrapper text-center">
        <h1 class="pb-4">stripe</h1>
        <p class="pb-4">Connect Stripe For Payment</p>
        <a href="{{url('/trainer/stepfours')}}" class="btn">Continue</a>
    </div>
</div>
@endsection
@section('insertsfooter')

@endsection