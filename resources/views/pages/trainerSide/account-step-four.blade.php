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
<!-- .............Step Four Body Section................ -->

<div class="outer-step">

    <div class="container-fluid">
        <div class="content-outer">
            <div class="content-section ">
                <img src="{{asset('public/assets/trainerimages/stripe.svg')}}" alt="">
                <h1 class="my-4 text-center">Connect Stripe For Payment</h1>
                <div class="form-btn my-5 ">
                    <a href="#" class="p-0">Continue</a>
                </div>
            </div>
        </div>



    </div>
</div>



@endsection
@section('insertsfooter')

@endsection