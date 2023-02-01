@extends('layouts.trainerSide.default')
<!-- <link rel="stylesheet" href="{{asset('public/assets/trainercss/stepone.css')}}">
<link rel="stylesheet" href="{{asset('public/assets/trainercss/pagination.css')}}"> -->
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .update-info-header {
        background-color: #F8F8F8;
    }

    .update-info-content h1 {
        font-size: 1.3rem;
        font-weight: 400;
    }


    input[type="file"] {
        display: none;
    }

    .hero-section-upload {
        color: white;
        background: #E37048;
        border-radius: 7px;
        font-size: 1rem;
        font-weight: 600;
        margin: 0 20px;
        cursor: pointer;
        width: 100%;
        max-width: 204px;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .pro-form label {
        color: #464646;
        font-size: 0.8rem;
    }

    .form-label span {
        color: #E37048 !important;
        font-size: 0.6rem;
    }

    .pro-form input {
        height: 65px !important;
    }

    .pro-form input::placeholder {
        color: #fff;
    }

    .pro-form input,
    .pro-form textarea {
        background: #F8F8F8;
        border: 1px solid rgba(0, 0, 0, 0.2) !important;
        box-shadow: 0px 4px 22px rgba(0, 0, 0, 0.05) !important;
        border-radius: 10px !important;
    }

    .pro-form textarea {
        resize: none !important;
        height: 200px !important;
    }

    .profile-nxt-btn a,
    .profile-nxt-btn a:hover,
    .profile-nxt-btn a:focus,
    .profile-nxt-btn a:active {
        background: #E37048;
        border: none;
        box-shadow: none;
        outline: none;
        color: white;
        padding: 25px 0;
        border-radius: 10px;
        text-align: center;
        width: 25%;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        min-width: 200px;
        height: 50px;
    }

    .update-profile-form-btn {
        text-decoration: none;
        color: #fff;
        font-weight: 600;
        font-size: 2rem;

    }

    .hero-right label {
        cursor: pointer;
    }

    .update-profile-form-btn:hover {
        text-decoration: none !important;
        color: #FFBB00;
    }

    .right-inner-addon {
        position: relative;
    }

    .right-inner-addon input {
        padding-right: 35px !important;
        width: 100%;
        border: 1px solid rgba(0, 0, 0, 0.2) !important;
        outline: none !important;
    }

    .right-inner-addon i {
        color: #B5B5B5;
        position: absolute;
        right: 0px;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    .form-image img {
        width: 100%;
        max-width: 400px;
    }

    .upload-image img {
        width: 100%;
        max-width: 250px;
    }

    .update-info-content img {
        width: 100%;
        max-width: 300px;
    }

    @media screen and (max-width:576px) {
        .pro-form input {
            height: 55px !important;
        }

        .update-profile-form-btn {
            font-size: 1.5rem;
        }

        .hero-right img {
            width: 250px !important;
            height: 250px !important;
        }

        .hero-section-upload {
            font-size: 0.9rem;
            width: 100%;
            margin: 0 auto;
        }
    }

    @media screen and (max-width:991px) {
        .hero-section-upload {
            width: 70%;
            margin: 0 auto;
        }
    }

    /* pagination */


    .pagination-wrapper {
        background-color: #F8F8F8;
        border-radius: 10px;
        position: relative;
        padding-top: 1rem;
        padding-bottom: 3rem;
        padding-left: 0.5rem;
        padding-right: 0.5rem;
    }

    .pagination-border {
        border: 1px solid #E37048;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        z-index: 1;
    }

    .pagination-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative;
    }

    .pagination-box {
        position: relative;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #f5bfac;
        border: 2px solid #E37048;
        z-index: 2;
    }

    .active-pagination {
        background: #E37048;
    }

    .pagination-box h1 {
        position: absolute;
        color: white;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 1rem;
        font-weight: 700;
        margin-bottom: 0px;
    }

    .pagination-box p {
        font-size: 0.6rem;
        margin-bottom: 0px;
        color: black;
        position: absolute;
        top: 55px;
        left: 50%;
        text-align: center;
        transform: translate(-50%, -50%);

    }

    @media screen and (max-width:576px) {
        .pagination-box {
            position: relative;
            width: 30px;
            height: 30px;
        }

        .pagination-box h1 {
            position: absolute;
            color: white;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 0.8rem;
            font-weight: 700;
            margin-bottom: 0px;
        }

        .pagination-box p {
            font-size: 0.5rem;
        }
    }
</style>
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
<div class="container-fluid pt-5 ">
    <div class="container px-0">
        <div class="pagination-wrapper px-sm-3">
            <div class="pagination-container">
                <div class="pagination-border"></div>
                <div class="pagination-box active-pagination">
                    <h1>1</h1>
                    <p>Personal Information</p>
                </div>
                <div class="pagination-box">
                    <h1>2</h1>
                    <p>Other Information</p>
                </div>
                <div class="pagination-box">
                    <h1>3</h1>
                    <p>Specialty </p>
                </div>
                <div class="pagination-box">
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

<!-- ............Form Section................ -->
<div class="container">
    <form>
        <div class="row">
            <div class="col-md-6 text-center text-lg-left  upload-image py-5">
                <img src="{{asset('public/assets/trainerimages/update-info-left.svg')}}" alt="image">
                <label class="hero-section-upload my-4"> Upload Image
                    <input type="file" size="60">
                </label>
            </div>
            <div class="col-md-6 text-center form-image pt-md-5 pb-5">
                <img src="{{asset('public/assets/trainerimages/update-info-right.svg')}}" alt="">
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputAddress" class=" ">First Name</label>
                    <input type="text" class="form-control py-4" id="inputAddress">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="form-group pro-form">
                    <label for="inputAddress" class=" ">Last Name</label>
                    <input type="text" class="form-control py-4" id="inputAddress">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputAddress2" class=" ">Email</label>
                    <input type="text" class="form-control py-4" id="inputAddress2">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="form-group pro-form">
                    <label for="inputAddress2" class=" ">Contact Number</label>
                    <input type="text" class="form-control py-4" id="inputAddress2">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form  mb-2">
                    <label for="inputAddress2" class=" ">Password</label>
                    <div class="right-inner-addon">
                        <input type="password" class=" modal-input passInput pl-4" id="passInput" aria-autocomplete="list">
                        <i id="hidePass" class="fa fa-eye-slash" aria-hidden="true" style="display: none;"></i>
                        <i id="showPass" class="fa fa-eye" aria-hidden="true"></i>
                    </div>

                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="form-group pro-form right-inner-addon mb-2">
                    <label for="inputAddress2" class=" ">Confirm Password</label>
                    <div class="right-inner-addon">
                        <input type="password" class=" modal-input passInput pl-4" id="passInputtwo">
                        <i id="hidePasstwo" class="fa fa-eye-slash" aria-hidden="true"></i>
                        <i id="showPasstwo" class="fa fa-eye" aria-hidden="true"></i>
                    </div>

                </div>
            </div>
            <div class="col-12" data-aos="fade-up">
                <div class="form-outline pro-form">
                    <label class="form-label" for="textAreaExample">Tell Us About yourself <span>(256)</span></label>
                    <textarea class="form-control" id="textAreaExample1" rows="4"></textarea>
                </div>
            </div>
            <div class="col-12 my-5">
                <div class=" profile-nxt-btn">
                    <a href="{{url('/trainer/steptwo')}}" class="update-profile-form-btn">Next</a>
                </div>
            </div>

        </div>
    </form>

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
    // two
    $('#hidePasstwo').hide();
    $('#showPasstwo').click(function() {
        $('#showPasstwo').hide();
        $('#hidePasstwo').show();
        var passInput = $("#passInputtwo");
        if (passInput.attr('type') === 'password') {
            passInput.attr('type', 'text');
        } else {
            passInput.attr('type', 'password');
        }
    })
    $('#hidePasstwo').on('click', function() {
        $('#hidePasstwo').hide();
        $('#showPasstwo').show();
        var passInput = $("#passInputtwo");
        if (passInput.attr('type') === 'password') {
            passInput.attr('type', 'text');
        } else {
            passInput.attr('type', 'password');
        }
    })
</script>
@endsection