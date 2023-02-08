@extends('layouts.userdashboard.default')
@section('content')
<link rel="stylesheet" href="{{asset('public/assets/css/calendar.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/css/datepicker.css">
<!-- <link rel="stylesheet" href="./style.css"> -->
<style>
    .dashboard-null{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .dashboard-null img{
        width: 500px;
        height: 500px;

    }
</style>

@include('includes.userdashboard.navbar')
<div class="content-wrapper">
    <div class="container-fluid mb-4 py-3">
        <div class="dashboard-null">
            <img src="{{asset('public/assets/trainerimages/dashboard-null.svg')}}" alt="">
        </div>
    </div>
</div>
@endsection
@section('insertsfooter')
<script src="{{ asset('public/assets/AS/js/mobiscroll.jquery.min.js') }}"></script>

<script>
    $('.sidenav .nav-item:nth-of-type(2)').addClass('active')
</script>
@endsection