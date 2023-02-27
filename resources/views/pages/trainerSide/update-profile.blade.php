@extends('layouts.trainerSide.default')
<link rel="stylesheet" href="{{asset('public/assets/css/nice-select.css')}}">
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

    /* form */
    .form-container {
        background: #F8F8F8;
        border-radius: 10px
    }

    .pro-form {
        text-align: left !important;
    }

    .pro-form label {
        color: #464646;
        font-size: 0.8rem;
    }

    .pro-form input {
        height: 65px;
        border-radius: 10px !important;
        border: 1px solid rgba(0, 0, 0, 0.2) !important;
        box-shadow: none !important;
        outline: none !important;
        background: #F8F8F8;
        color: #666666 !important;
    }

    .nice-select.wide {
        height: 65px !important;
        border: 1px solid #CECECE !important;
        border-radius: 10px !important;
        justify-content: flex-start !important;
        background: #F8F8F8;
    }

    .nice-select:after {
        border-bottom: 2px solid #848484;
        border-right: 2px solid #848484;
        content: '';
        display: block;
        height: 9px;
        margin-top: -4px;
        pointer-events: none;
        position: absolute;
        right: 20px;
        top: 50%;
        -webkit-transform-origin: 66% 66%;
        -ms-transform-origin: 66% 66%;
        transform-origin: 66% 66%;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
        -webkit-transition: all 0.15s ease-in-out;
        transition: all 0.15s ease-in-out;
        width: 9px;
    }

    .s-select span {
        color: #666666 !important;
        font-weight: normal !important;
    }

    .select-outer {
        position: relative;
    }

    .select-outer i {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translate(-50%, -50%);
        pointer-events: none;
        cursor: pointer;
        color: #848484;
    }


    */ .pro-form input::placeholder,
    .pro-form select::placeholder {
        color: #666666;
    }

    .difficulty-level {
        display: flex;
        align-items: center;
        height: 65px;
    }

    .difficulty-level input {
        height: 45px !important;
        border-radius: 30px !important;
        text-align: center;
        border: 1px solid #E37048 !important;
        color: #E37048;
        background: #F8F8F8 !important;
        cursor: pointer;
    }

    .difficulty-level input:hover,
    .difficulty-level input:active,
    .difficulty-level input:focus {
        background: #E37048 !important;
        color: white;
    }

    .price-outer {
        position: relative;
    }

    .price-box {
        position: absolute;
        top: 50%;
        left: 0;
        transform: translate(0%, -50%);
        background-color: #E37048;
        width: 50px;
        height: 100%;
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .price-outer input {
        padding-left: 60px;
    }

    .price-box h1 {
        color: white;
        font-size: 1rem;
        margin-bottom: 0px;
        font-weight: 400;
    }

    .time-box-outer {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
    }

    .time-box-inner {
        border-radius: 30px;
        padding: 10px 20px;
        color: #fff;

    }

    .time-box-inner p {
        color: white;
        margin-bottom: 0px;
    }

    .yellow-time {
        background: #FFA900;

    }

    .green-time {
        background: #B1D244;
    }

    .form-btn a {
        width: 160px;
        height: 50px;
        background-color: #F8F8F8;
        border: 1px solid #E37048;
        color: #E37048;
        border-radius: 7px;
        margin: 0 auto;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: none !important;
        text-decoration: none !important;
    }

    .form-btn a:hover {
        background-color: #E37048;
        color: white;
    }






    .form-btn a {
        text-decoration: none;
    }

    .updateinfo-qualification h1 {
        font-size: 1rem;
        font-weight: 400;
        letter-spacing: 0.3;
    }

    .update-info-qualification-image {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        grid-gap: 10px;
        align-items: stretch;
    }

    .update-info-qualification-image label {
        cursor: pointer;
    }

    .update-info-qualification-image img {
        /* padding: 0 7px; */
        width: 100%;
        width: 200px;
        height: 130px;
    }

    .grid-item {
        position: relative;
        width: 200px;
        margin: 0 auto;
    }

    .grid-item img:nth-of-type(1) {
        position: absolute;
        height: 22px;
        width: 22px;
        right: -5px;
        top: -10px;
    }

    .grid-item img:nth-of-type(2) {
        border-radius: 10px;
    }

    .price-select-input {
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .price-select-input .select-outer {
        width: 20%;

    }

    .price-select-input .nice-select.wide {
        border-top-right-radius: 0px !important;
        border-bottom-right-radius: 0px !important;
    }

    .price-select-input input {
        width: 80%;
        border-top-left-radius: 0px !important;
        border-bottom-left-radius: 0px !important;
    }

    .price-select-input .nice-select:after {
        border-bottom: 2px solid #848484;
        border-right: 2px solid #848484;
        content: '';
        display: block;
        height: 9px !important;
        margin-top: -4px;
        pointer-events: none;
        position: absolute;
        right: 15% !important;
        top: 50%;
        -webkit-transform-origin: 66% 66%;
        -ms-transform-origin: 66% 66%;
        transform-origin: 66% 66%;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
        -webkit-transition: all 0.15s ease-in-out;
        transition: all 0.15s ease-in-out;
        width: 9px !important;

    }

    .text-area {
        background: #F8F8F8 !important;
        border-radius: 10px !important;
        resize: none;
    }

    .time-form-field h1 {
        margin-bottom: 0px;
        font-size: 0.8rem;
        color: #666666;
        font-weight: normal;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);

    }

    .time-form {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    @media screen and (max-width:576px) {
        .time-form {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-direction: column;
        }

        .time-form-field {
            width: 100%;
        }

        .price-select-input .select-outer {
            width: 30%;

        }

        .price-select-input input {
            width: 70%;
            border-top-left-radius: 0px !important;
            border-bottom-left-radius: 0px !important;
        }

        .price-select-input .nice-select:after {
            border-bottom: 2px solid #848484;
            border-right: 2px solid #848484;
            content: '';
            display: block;
            height: 9px !important;
            margin-top: -4px;
            pointer-events: none;
            position: absolute;
            right: 8px !important;
            top: 50%;
            -webkit-transform-origin: 66% 66%;
            -ms-transform-origin: 66% 66%;
            transform-origin: 66% 66%;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
            -webkit-transition: all 0.15s ease-in-out;
            transition: all 0.15s ease-in-out;
            width: 9px !important;

        }


        .difficulty-level {
            display: flex;
            align-items: center;
            height: 55px;
        }

        .difficulty-level input {
            font-size: 0.8rem;
            height: 35px !important;
            border-radius: 30px !important;
            text-align: center;
            border: 1px solid #E37048 !important;
            color: #E37048;
            background: #F8F8F8 !important;
            cursor: pointer;
        }

        .pro-form input {
            height: 55px;
        }

        .nice-select.wide {
            height: 55px !important;
            border: 1px solid #CECECE !important;
            border-radius: 10px !important;
            justify-content: flex-start !important;
            background: #F8F8F8;
        }
    }

    /* ................Modal............ */
    .modal-img {
        display: flex;
        align-items: flex-end;
    }

    .modal-img img {
        width: 100%;
        max-width: 150px;

    }

    .progress-cotent {
        width: 100%;
        max-width: 150px;
    }

    .progress {
        height: 0.4rem !important;
    }

    .progress-bar {
        background-color: #E37048 !important;
    }

    .progress-par {
        display: flex;
        justify-content: space-between;
    }

    .progress-par p {
        margin-bottom: 0 !important;
        font-size: 0.8rem;
    }


    .pro-form textarea {
        border: 1px solid #BDBDBD;
        background: #F2F2F2;
    }

    .modal-btn a {
        background: #E37048;
        border: none;
        box-shadow: none;
        outline: none;
        color: white;
        padding: 10px 50px;
        border-radius: 10px;
        width: 25%;
        font-size: 1.4rem;
        min-width: 200px;
        height: 50px;
    }

    .modal-content {
        border-radius: 10px;
    }

    @media screen and (max-width:576px) {
        .modal-btn a {
            background: #E37048;
            border: none;
            box-shadow: none;
            outline: none;
            color: white;
            padding: 10px 40px;
            border-radius: 10px;
            width: 25%;
            font-size: 0.8rem;
            min-width: 150px;
            height: 40px;
        }

        .progress-cotent {
            width: 100%;
            max-width: 150px;
            margin: 0 auto !important;
        }

        .modal-img img {
            width: 100%;
            max-width: 250px;

        }

        .progress-cotent {
            width: 100%;
            max-width: 250px;
        }
    }

    .grid-item {
        background-color: #F8F8F8;
        border-radius: 10px;
    }

    .grid-item p {
        color: black;
        font-size: 1rem;
        font-weight: 500;
        margin-bottom: 0px;
    }

    .update-profile-heading h1 {
        color: #E37048;
        font-size: 1.5rem;
        font-weight: 500;
    }
</style>
@section('content')
<!-- header-section -->
<div class="container-fluid update-info-header">
    <div class="container">
        <div class="update-info-content py-4">
            <h1>Update Profile</h1>
            <img src="{{asset('public/assets/images/logo.svg')}}" alt="">
        </div>
    </div>
</div>
<div class="container py-3">
    <div class="col-12 update-profile-heading pl-0">
        <h1>General Information</h1>
    </div>
    <form>
        <div class="row">
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form my-2">
                    <label for="inputAddress" class=" ">Email</label>
                    <input type="email" class="form-control pl-4">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form my-2">
                    <label for="inputAddress" class=" ">Date of Birth</label>
                    <input type="date" class="form-control pl-4">
                </div>
            </div>
            <div class="col-md-6 " data-aos="fade-right">
                <div class="form-group pro-form my-2">
                    <label for="inputAddress" class=" ">Gender</label>
                    <div class="select-outer">
                        <select class="wide s-select form-control pl-4" id="typeselector">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>

                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form my-2">
                    <label for="inputAddress" class=" ">Phone</label>
                    <input type="text" class="form-control pl-4">
                </div>
            </div>
            <div class="col-md-6 pb-3" data-aos="fade-left">
                <div class="form-group pro-form">
                    <label for="inputAddress2" class=" ">Country</label>
                    <div class="select-outer">
                        <select class="wide s-select form-control pl-4" id="typeselector">
                            <option value="mon">USA</option>
                            <option value="mon">Australia</option>
                            <option value="mon">Austria</option>
                        </select>
                        <!-- <i class="fa fa-chevron-down" aria-hidden="true"></i> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 pb-3" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputCity" class=" ">State</label>
                    <select class="wide s-select form-control pl-4" id="typeselector">
                        <option value="mon">Alaska</option>
                        <option value="mon">Washington</option>
                        <option value="mon">New South Wales</option>
                        <option value="mon">Tirol</option>
                    </select>
                </div>
            </div>


        </div>
        <div class="col-12 update-profile-heading pl-0">
            <h1>Certificate</h1>
        </div>
        <div class="updateinfo-qualification my-4 px-0 text-left">
            <h1 class="mb-4">Upload Image</h1>
            <div class="update-info-qualification-image">
                <label class="text-center" data-toggle="modal" data-target="#imageuploadmodal">
                    <img src="{{asset('public/assets/trainerimages/uploadimg.svg')}}">
                    <input type="file" name="myfile" style="display:none">
                </label>
                <div class="grid-item py-2 py-sm-0">
                    <img src="{{asset('public/assets/trainerimages/cross-icon.svg')}}" alt="">
                    <img src="{{asset('public/assets/trainerimages/cert.png')}}" alt="">
                    <p class="pt-2 pb-3">nt. Lorem ipsum may be used as a placeholder </p>
                </div>
                <div class="grid-item py-2 py-sm-0">
                    <img src="{{asset('public/assets/trainerimages/cross-icon.svg')}}" alt="">
                    <img src="{{asset('public/assets/trainerimages/cert.png')}}" alt="">
                    <p class="pt-2 pb-3">nt. Lorem ipsum may be used as a placeholder </p>
                </div>

            </div>
        </div>
        <div class="form-btn my-5 ">
            <a href="{{url('/trainer/stepfive')}}" class="p-0 btn">Update</a>
        </div>
    </form>
</div>
<div class="modal fade" id="imageuploadmodal" tabindex="-1" role="dialog" aria-labelledby="forgotPassModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content signupModalDialogue">
            <!-- <div class="w-50" style="background-color:#E37048 ; height:5px; margin-left:15px"></div> -->
            <div class="modalHeader text-right">
                <img class="close-modal" style="width:30px;" data-dismiss="modal" src="{{asset('public/assets/images/x-circle.svg')}}" alt="">
            </div>
            <div class="container">
                <form action="">
                    <div class="modalContent py-3 px-4">
                        <div class="row">
                            <div class="col-sm-8 text-center text-sm-right">
                                <div class="modal-img">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <img src="{{asset('public/assets/trainerimages/certificate.svg')}}" alt="">
                                        </div>
                                        <div class="col-sm-6 d-flex align-self-end pl-sm-0 py-4 py-sm-0">
                                            <div class="progress-cotent">
                                                <div class="progress-par">
                                                    <p>Uploading</p>
                                                    <p>50%</p>
                                                </div>
                                                <div class="progress mt-1">
                                                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>




                        <div class="form-outline pro-form my-5">
                            <label class="form-label" for="textAreaExample">Add Description</label>
                            <textarea class="form-control" id="textAreaExample1" rows="4" placeholder="Type Here"></textarea>
                        </div>
                        <div class=" modal-btn my-5 text-sm-right text-center">
                            <a href="#" class="update-profile-form-btn">Upload Image</a>
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
@section('insertsfooter')
<script src="{{ asset('public/assets/js/jquery.nice-select.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.s-select').niceSelect();
    });
</script>
@endsection