@extends('layouts.trainerSide.default')
<!-- <link rel="stylesheet" href="{{asset('public/assets/trainercss/steptwo.css')}}">
<link rel="stylesheet" href="{{asset('public/assets/trainercss/pagination.css')}}"> -->
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

    input[type="date"]::-webkit-calendar-picker-indicator {
        display: none;
        -webkit-appearance: none;
    }

    .update-info-content h1 {
        font-size: 1.3rem;
        font-weight: 400;
    }

    .update-info-content img {
        width: 100%;
        max-width: 300px;
    }


    .pro-form label {
        color: #464646;
        font-size: 0.8rem;
    }

    .form-label span {
        color: #E37048 !important;
        font-size: 0.6rem;
    }

    .pro-form input,
    .pro-form select {
        height: 65px !important;
        /* color: #fff !important; */

    }

    .nice-select.wide {
        height: 65px !important;
        border: 1px solid #CECECE !important;
        box-shadow: 0px 4px 22px rgba(0, 0, 0, 0.05) !important;
        border-radius: 10px !important;
        justify-content: flex-start !important;
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

    .pro-form input::placeholder {
        color: #fff;
    }

    .pro-form input,
    .pro-form textarea,
    .nice-select.wide {
        box-shadow: 0px 4px 22px rgba(0, 0, 0, 0.05) !important;
        background: #F8F8F8 !important;
        border: 1px solid rgba(0, 0, 0, 0.2) !important;
        border-radius: 10px;
    }

    .pro-form textarea {
        resize: none !important;
        height: 200px !important;
    }


    .profile-nxt-btn a {
        background-color: #ffff !important;
        color: #E37048 !important;
        border: 1px solid #E37048 !important;
    }

    .profile-nxt-btn a:hover {
        background: #E37048 !important;
        color: white !important;
    }

    .profile-nxt-btn a,
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
        color: #fff;
    }

    .input-container {
        display: flex;
        width: 100%;
    }

    .input-container i {
        color: white;
        min-width: 50px;
        text-align: center;
        background-color: dodgerblue;
        display: flex;
        align-items: center;
        justify-content: center;
        border-top-left-radius: 10px !important;
        border-bottom-left-radius: 10px !important;
        font-size: 1.3rem;
    }

    .input-container .fa-instagram {
        /* background-color: linear-gradient(45deg, #405de6, #5851db, #833ab4, #c13584, #e1306c, #fd1d1d); */
        background: #000;
    }

    .input-container input {
        border-top-left-radius: 0px !important;
        border-bottom-left-radius: 0px !important;
        border-left: none !important;
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

    .update-info-qualification-image img {
        /* padding: 0 7px; */
        width: 100%;
        max-width: 200px;
    }

    input[type="file"] {
        display: none;
        /* background-image: url(../trainerimages/uploadimg.svg); */
    }

    .grid-item {
        position: relative;
    }

    .grid-item img:nth-of-type(1) {
        position: absolute;
        height: 22px;
        width: 22px;
        right: -5px;
        top: -10px;

    }



    @media screen and (max-width:991px) {
        .hero-section-upload {
            width: 70%;
            margin: 0 auto;
        }
    }

    .profile-hero-right {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .profile-hero-right img {
        margin: 0 auto;
    }

    @media screen and (max-width:768px) and (min-width:576px) {
        .grid-item img:nth-of-type(1) {
            position: absolute;
            height: 22px;
            width: 22px;
            right: 20px;
            top: -10px;

        }
    }

    @media screen and (max-width:576px) {

        .pro-form input,
        .pro-form select {
            height: 55px !important;
        }

        .nice-select.wide {
            height: 55px !important;
            border: 1px solid #CECECE !important;
            box-shadow: 0px 4px 22px rgba(0, 0, 0, 0.05) !important;
            border-radius: 10px !important;
            justify-content: flex-start !important;
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

        .update-info-qualification-image {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .grid-item img:nth-of-type(1) {
            position: absolute;
            height: 22px;
            width: 22px;
            right: -5px;
            top: -7px;

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


    /* p */
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
<div class="container pt-5">
    <form>
        <div class="row">
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputAddress" class=" ">Contact</label>
                    <input type="text" class="form-control pl-4" id="inputAddress">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="form-group pro-form">
                    <label for="inputAddress" class=" ">Emergency Contact</label>
                    <input type="text" class="form-control pl-4" id="inputAddress">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="form-group pro-form">
                    <label for="inputAddress2" class=" ">Date of Birth</label>
                    <input type="date" class="form-control pl-4" id="inputAddress2">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputCity" class=" ">Gender</label>
                    <select class="wide s-select form-control pl-4">
                        <option value="">Male</option>
                        <option value="">Female</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="form-group pro-form">
                    <label for="inputAddress2" class=" ">Country</label>
                    <input type="text" class="form-control pl-4" id="inputAddress2">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputCity" class=" ">State</label>
                    <input type="text" class="form-control pl-4" id="inputCity">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="form-group pro-form">
                    <label for="inputAddress2" class=" ">Workout Location</label>
                    <input type="text" class="form-control pl-4" id="inputAddress2">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputCity" class=" ">Weight</label>


                    <input type="text" class="form-control pl-4" id="inputCity">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="form-group pro-form">
                    <label for="inputAddress2" class=" ">Height</label>


                    <input type="text" class="form-control pl-4" id="inputAddress2">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputCity" class=" ">Any Known Medical Conditions?</label>
                    <input type="text" class="form-control pl-4" id="inputCity">
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputCity" class=" ">Add Facebook URL</label>
                    <div class="input-container">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                        <input type="url" class="form-control pl-4" id="inputCity">
                    </div>

                </div>
            </div>
            <div class="col-md-4" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputCity" class=" ">Add Insta URL</label>
                    <div class="input-container">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        <input type="url" class="form-control pl-4" id="inputCity">
                    </div>

                </div>
            </div>
            <div class="col-md-4" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputCity" class=" ">Add Linkedin URL</label>
                    <div class="input-container">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                        <input type="url" class="form-control pl-4" id="inputCity">
                    </div>

                </div>
            </div>
        </div>
        <div class="updateinfo-qualification my-4 px-3 ">
            <h1 class="mb-4">Upload Qualification</h1>
            <div class="update-info-qualification-image">
                <label>
                    <button type="button" onclick="openModal()" style="border: none;"><img src="{{asset('public/assets/trainerimages/uploadimg.svg')}}"></button>
                    <!-- <input type="file" name="myfile" style="display:none"> -->
                </label>
                <div class="grid-item py-2 py-sm-0">
                    <img src="{{asset('public/assets/trainerimages/cross-icon.svg')}}" alt="">
                    <img src="{{asset('public/assets/trainerimages/certificate.svg')}}" alt="">
                </div>
                <div class="grid-item py-2 py-sm-0">
                    <img src="{{asset('public/assets/trainerimages/cross-icon.svg')}}" alt="">
                    <img src="{{asset('public/assets/trainerimages/certificate2.svg')}}" alt="">
                </div>

            </div>
        </div>
        <div class="col-12 my-5">
            <div class=" profile-nxt-btn">
                <a href="{{url('/trainer/stepthree')}}" class="update-profile-form-btn">Next</a>
            </div>
        </div>
    </form>

</div>

<!-- ..............Modal....................... -->
<div class="modal fade" id="imageuploadmodal" tabindex="-1" role="dialog" aria-labelledby="forgotPassModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content signupModalDialogue">
            <!-- <div class="w-50" style="background-color:#E37048 ; height:5px; margin-left:15px"></div> -->
            <div class="modalHeader text-right">
                <img class="close-modal" style="width: 8%;" data-dismiss="modal" src="{{asset('public/assets/images/x-circle.svg')}}" alt="">
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
<script>
    function openModal() {
        $("#imageuploadmodal").modal('show')
        $("#imageuploadmodal").css('padding-right', 0)
    }
</script>
@endsection