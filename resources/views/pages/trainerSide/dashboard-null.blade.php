@extends('layouts.trainerSide.default')
<style>
    body {
        background-color: #F2F2F2 !important;
        position: relative;
        height: 100vh;
    }

    .navbar-dark {
        z-index: 2 !important;
    }

    .content-wrapper {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1 !important;
        margin-left: 0px !important;
        margin-top: 0px !important;
    }


    .null-wrapper img {
        width: 100%;
        max-width: 450px;
        min-width: 250px;

    }
</style>
@section('content')
@include('includes.trainerSide.navbar')
<div class="content-wrapper px-2 py-3">
    <div class="null-wrapper">
        <img src="{{asset('public/assets/trainerimages/d-null.png')}}" alt="">
    </div>

</div>
@endsection
@section('insertsfooter')
@endsection