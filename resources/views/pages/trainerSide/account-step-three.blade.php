@extends('layouts.trainerSide.default')
<link rel="stylesheet" href="{{asset('public/assets/trainercss/stepthree.css')}}">
<link rel="stylesheet" href="{{asset('public/assets/trainercss/pagination.css')}}">
<!-- <style>
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
        color: #666666;
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

    .pro-form select {
        height: 65px;
        border-radius: 10px !important;
        background: #F8F8F8;
        box-shadow: none !important;
        color: #666666;
        outline: none !important;
        border: 1px solid rgba(0, 0, 0, 0.2) !important;
        -moz-appearance: none;
        /* Firefox */
        -webkit-appearance: none;
        /* Safari and Chrome */
        appearance: none;
    }

    .pro-form input::placeholder,
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
    }

    .time-box-inner {
        border-radius: 30px;
        padding: 10px 20px;
        color: #fff;

    }

    .yellow-time {
        background: #FFA900;

    }

    .green-time {
        background: #B1D244;
    }

    @media screen and (max-width:991px) and (min-width:768px) {
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
    }

    @media screen and (max-width:576px) {
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

        .pro-form select {
            height: 55px !important;
        }

        .time-box-inner p {
            font-size: 0.8rem;
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
</style> -->

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
<!-- form-section -->
<div class="container form-container my-5 py-5">
    <form>
        <div class="row">
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputAddress" class=" ">Select Category</label>
                    <div class="select-outer">
                        <select class="form-control pl-4" id="exampleFormControlSelect1">
                            <option>Yoga</option>
                            <option>Yoga</option>
                            <option>Yoga</option>
                        </select>
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="form-group pro-form">
                    <label for="inputAddress" class=" ">Type of category</label>
                    <input type="text" class="form-control py-4" id="inputAddress" placeholder="" value="Italian Yoga">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputAddress2" class=" ">Difficulty Level</label>
                    <div class="difficulty-level">
                        <input type="text" class="form-control py-2" id="inputAddress2" value="Beginner" readonly>
                        <input type="text" class="form-control py-2 mx-3" id="inputAddress2" value="Intermediate" readonly>
                        <input type="text" class="form-control py-2" id="inputAddress2" value="Advanced" readonly>
                    </div>

                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="form-group pro-form">
                    <label for="inputAddress2" class=" ">Price</label>
                    <div class="price-outer">
                        <div class="price-box">
                            <h1>HKD</h1>
                        </div>
                        <input type="text" class="form-control py-4" id="inputAddress2" value="100">
                    </div>

                </div>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputAddress" class=" ">Session Type</label>
                    <div class="select-outer">
                        <select class="form-control pl-4" id="typeselector">
                            <option value="onetoone">One to one</option>
                            <option value="group">Group</option>
                        </select>
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 limit-box" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputAddress" class=" ">Limit</label>
                    <div class="select-outer">
                        <select class="form-control pl-4" id="exampleFormControlSelect1">
                            <option>15</option>
                            <option>20</option>
                        </select>
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputAddress" class=" ">Days</label>
                    <div class="select-outer">
                        <select class="form-control pl-4" id="typeselector">
                            <option value="mon">Monday</option>
                            <option value="tue">Tuesday</option>
                            <option value="wed">Wednesday</option>
                            <option value="thu">Thursday</option>
                            <option value="fri">Friday</option>
                            <option value="sat">Saturday</option>
                            <option value="sun">Sunday</option>
                        </select>
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    </div>
                </div>

            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="form-group pro-form">
                    <label for="inputAddress" class=" ">Time slot</label>
                    <div class="time-form">
                        <div class="time-form-field pro-form">
                            <input type="text" class="form-control py-4" id="inputAddress" placeholder="">
                            <img src="{{asset('public/assets/images/clock-icon.png')}}" alt="">
                        </div>
                        <div class="time-form-field mx-sm-3 my-4 my-sm-0">
                            <h1>to</h1>
                        </div>

                        <div class="time-form-field pro-form mb-3 mb-sm-0 mr-sm-2">
                            <input type="text" class="form-control py-4 " id="inputAddress" placeholder="">
                            <img src="{{asset('public/assets/images/clock-icon.png')}}" alt="">
                        </div>
                        <button class="">Add</button>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 my-auto" data-aos="fade-left">
                <div class="time-box-outer">
                    <div class="yellow-time time-box-inner m-2">
                        <p class="mb-0">9 am to 10 am</p>
                    </div>
                    <div class="green-time time-box-inner m-2">
                        <p class="mb-0">12 pm to 2 pm</p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="form-btn my-3 ">
                    <a href="#" class="p-0">Done</a>
                </div>
            </div>
        </div>
        <div class="updateinfo-qualification my-4 px-3 ">
            <h1 class="mb-4">Upload Image</h1>
            <div class="update-info-qualification-image">
                <label>
                    <img src="{{asset('public/assets/trainerimages/uploadimg.svg')}}">
                    <input type="file" name="myfile" style="display:none">
                </label>
                <div class="grid-item py-2 py-sm-0">
                    <img src="{{asset('public/assets/trainerimages/cross-icon.svg')}}" alt="">
                    <img src="{{asset('public/assets/trainerimages/stepthreeone.jpg')}}" alt="">
                </div>
                <div class="grid-item py-2 py-sm-0">
                    <img src="{{asset('public/assets/trainerimages/cross-icon.svg')}}" alt="">
                    <img src="{{asset('public/assets/trainerimages/stepthreetwo.jpg')}}" alt="">
                </div>

            </div>
        </div>
        <div class="form-btn my-5 ">
            <a href="#" class="p-0">Done</a>
        </div>
    </form>

</div>
<div class="container slot-heading">
    <h1>All Slots</h1>
</div>
<div class="container form-container my-5 py-5">
    <!-- .............Stretching Outdoors............... -->
    <div class="slot-wrapper py-3 px-3 my-4">
        <div class="slot-vertical-icon my-2 text-right">
            <img class="toggle-icon" src="{{asset('public/assets/trainerimages/slotverticalicon.svg')}}" alt="">
            <div class="icon-div d-none">
                <div class="icon-edit py-2">
                    <i class="fa fa-pencil-square-o pr-2" aria-hidden="true"></i>

                    <h1>Edit</h1>
                </div>
                <div class="icon-del py-2">
                    <i class="fa fa-trash pr-2" aria-hidden="true"></i>

                    <h1>Delete</h1>
                </div>
            </div>
        </div>

        <div class="slot-grid-container">
            <div class="slot-grid-item">
                <div class="slot-image">
                    <img src="{{asset('public/assets/trainerimages/stepthreeone.jpg')}}" alt="">
                </div>

            </div>
            <div class="slot-grid-item">
                <div class="slot-image">
                    <img src="{{asset('public/assets/trainerimages/stepthreetwo.jpg')}}" alt="">
                </div>

            </div>
            <div class="slot-grid-item">
                <div class="slot-image">
                    <img src="{{asset('public/assets/trainerimages/stepthree.jpg')}}" alt="">
                </div>

            </div>
            <div class="slot-grid-item">
                <div class="slot-image">
                    <img src="{{asset('public/assets/trainerimages/stepthreefour.jpg')}}" alt="">
                </div>

            </div>
            <div class="slot-grid-item">
                <div class="slot-image">
                    <img src="{{asset('public/assets/trainerimages/stepthreefive.jpg')}}" alt="">
                </div>

            </div>
            <!-- <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="slot-image">
                    <img src="{{asset('public/assets/trainerimages/stepthree.jpg')}}" alt="">
                </div>

            </div> -->

        </div>
        <div class="slot-wrapper-heading px-3 my-3">
            <div class="left-slot-heading">
                <h1>Stretching Outdoors</h1>
                <h2 class="pt-2">Static Stretching</h2>
            </div>
            <div class="right-slot-heading">
                <h1>$100</h1>
            </div>
        </div>
        <div class="slot-timing-stacks">
            <div class="timing-stack timing-stack-one px-3 my-3">
                <div class="week-name">
                    <h1>Mon:</h1>
                </div>
                <div class="stack-time">
                    <div class="time-stack-outer px-4 ">
                        <div class="time-stack-inner">
                            <p class="mb-0">9 am to 10 am</p>
                        </div>
                        <div class="time-stack-inner ml-2">
                            <p class="mb-0">12 pm to 2 pm</p>
                        </div>
                        <div class="time-stack-inner ml-2">
                            <p class="mb-0">4 pm to 6 pm</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="timing-stack timing-stack-two px-3 my-3">
                <div class="week-name">
                    <h1>Tue:</h1>
                </div>
                <div class="stack-time">
                    <div class="time-stack-outer px-4 ">
                        <div class="time-stack-inner">
                            <p class="mb-0">9 am to 10 am</p>
                        </div>
                        <div class="time-stack-inner ml-2">
                            <p class="mb-0">12 pm to 2 pm</p>
                        </div>
                        <div class="time-stack-inner ml-2">
                            <p class="mb-0">4 pm to 6 pm</p>
                        </div>
                        <div class="time-stack-inner ml-2">
                            <p class="mb-0">8 pm to 10 pm</p>
                        </div>
                        <div class="time-stack-inner ml-2">
                            <p class="mb-0">10 pm to 12 pm</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="timing-stack timing-stack-three px-3 my-3">
                <div class="week-name">
                    <h1>Wed:</h1>
                </div>
                <div class="stack-time">
                    <div class="time-stack-outer px-4 ">
                        <div class="time-stack-inner">
                            <p class="mb-0">9 am to 10 am</p>
                        </div>
                        <div class="time-stack-inner ml-2">
                            <p class="mb-0">12 pm to 2 pm</p>
                        </div>
                        <div class="time-stack-inner ml-2">
                            <p class="mb-0">4 pm to 6 pm</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="timing-stack timing-stack-four px-3 my-3">
                <div class="week-name">
                    <h1>Thu:</h1>
                </div>
                <div class="stack-time">
                    <div class="time-stack-outer px-4 ">
                        <div class="time-stack-inner">
                            <p class="mb-0">9 am to 10 am</p>
                        </div>
                        <div class="time-stack-inner ml-2">
                            <p class="mb-0">12 pm to 2 pm</p>
                        </div>
                        <div class="time-stack-inner ml-2">
                            <p class="mb-0">4 pm to 6 pm</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="timing-stack timing-stack-five px-3 my-3">
                <div class="week-name">
                    <h1>Fri:</h1>
                </div>
                <div class="stack-time">
                    <div class="time-stack-outer px-4 ">
                        <div class="time-stack-inner">
                            <p class="mb-0">9 am to 10 am</p>
                        </div>
                        <div class="time-stack-inner ml-2">
                            <p class="mb-0">12 pm to 2 pm</p>
                        </div>
                        <div class="time-stack-inner ml-2">
                            <p class="mb-0">4 pm to 6 pm</p>
                        </div>
                        <div class="time-stack-inner ml-2">
                            <p class="mb-0">8 pm to 10 pm</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="timing-stack timing-stack-six px-3 my-3">
                <div class="week-name">
                    <h1>Sat:</h1>
                </div>
                <div class="stack-time">
                    <div class="time-stack-outer px-4 ">
                        <div class="time-stack-inner">
                            <p class="mb-0">9 am to 10 am</p>
                        </div>
                        <div class="time-stack-inner ml-2">
                            <p class="mb-0">12 pm to 2 pm</p>
                        </div>
                        <div class="time-stack-inner ml-2">
                            <p class="mb-0">4 pm to 6 pm</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="timing-stack timing-stack-seven px-3 my-3">
                <div class="week-name">
                    <h1>Sun:</h1>
                </div>
                <div class="stack-time">
                    <div class="time-stack-outer px-4 ">
                        <div class="time-stack-inner">
                            <p class="mb-0">9 am to 10 am</p>
                        </div>
                        <div class="time-stack-inner ml-2">
                            <p class="mb-0">12 pm to 2 pm</p>
                        </div>
                        <div class="time-stack-inner ml-2">
                            <p class="mb-0">4 pm to 6 pm</p>
                        </div>
                        <div class="time-stack-inner ml-2">
                            <p class="mb-0">8 pm to 10 pm</p>
                        </div>
                        <div class="time-stack-inner ml-2">
                            <p class="mb-0">10 pm to 12 pm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>



    <!-- .............Yoga Slot............... -->
    <div class="slot-wrapper py-3 px-3 my-4">
        <div class="slot-vertical-icon my-2 text-right">
            <img class="toggle-icon" src="{{asset('public/assets/trainerimages/slotverticalicon.svg')}}" alt="">
            <div class="icon-div d-none">
                <div class="icon-edit py-2">
                    <i class="fa fa-pencil-square-o pr-2" aria-hidden="true"></i>

                    <h1>Edit</h1>
                </div>
                <div class="icon-del py-2">
                    <i class="fa fa-trash pr-2" aria-hidden="true"></i>

                    <h1>Delete</h1>
                </div>
            </div>
        </div>
        <div class="slot-grid-container">
            <div class="slot-grid-item">
                <div class="slot-image">
                    <img src="{{asset('public/assets/trainerimages/stepthreeone.jpg')}}" alt="">
                </div>

            </div>
            <div class="slot-grid-item">
                <div class="slot-image">
                    <img src="{{asset('public/assets/trainerimages/stepthreetwo.jpg')}}" alt="">
                </div>

            </div>
            <div class="slot-grid-item">
                <div class="slot-image">
                    <img src="{{asset('public/assets/trainerimages/stepthree.jpg')}}" alt="">
                </div>

            </div>
            <div class="slot-grid-item">
                <div class="slot-image">
                    <img src="{{asset('public/assets/trainerimages/stepthreefour.jpg')}}" alt="">
                </div>

            </div>
            <div class="slot-grid-item">
                <div class="slot-image">
                    <img src="{{asset('public/assets/trainerimages/stepthreefive.jpg')}}" alt="">
                </div>

            </div>
            <!-- <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="slot-image">
                    <img src="{{asset('public/assets/trainerimages/stepthree.jpg')}}" alt="">
                </div>

            </div> -->

        </div>
        <div class="slot-wrapper-heading px-3 my-3">
            <div class="left-slot-heading">
                <h1>Yoga</h1>
                <h2 class="pt-2">Italian Yoga</h2>
            </div>
            <div class="right-slot-heading">
                <h1>$100</h1>
            </div>
        </div>
        <div class="slot-timing-stacks">
            <div class="timing-stack timing-stack-one px-3 my-3">
                <div class="week-name">
                    <h1>Mon:</h1>
                </div>
                <div class="stack-time">
                    <div class="time-stack-outer px-4 ">
                        <div class="time-stack-inner">
                            <p class="mb-0">9 am to 10 am</p>
                        </div>
                        <div class="time-stack-inner ml-2">
                            <p class="mb-0">12 pm to 2 pm</p>
                        </div>
                        <div class="time-stack-inner ml-2">
                            <p class="mb-0">4 pm to 6 pm</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="timing-stack timing-stack-two px-3 my-3">
                <div class="week-name">
                    <h1>Tue:</h1>
                </div>
                <div class="stack-time">
                    <div class="time-stack-outer px-4 ">
                        <div class="time-stack-inner">
                            <p class="mb-0">9 am to 10 am</p>
                        </div>
                        <div class="time-stack-inner ml-2">
                            <p class="mb-0">12 pm to 2 pm</p>
                        </div>
                        <div class="time-stack-inner ml-2">
                            <p class="mb-0">4 pm to 6 pm</p>
                        </div>
                        <div class="time-stack-inner ml-2">
                            <p class="mb-0">8 pm to 10 pm</p>
                        </div>
                        <div class="time-stack-inner ml-2">
                            <p class="mb-0">10 pm to 12 pm</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="timing-stack timing-stack-three px-3 my-3">
                <div class="week-name">
                    <h1>Wed:</h1>
                </div>
                <div class="stack-time">
                    <div class="time-stack-outer px-4 ">
                        <div class="time-stack-inner">
                            <p class="mb-0">9 am to 10 am</p>
                        </div>
                        <div class="time-stack-inner ml-2">
                            <p class="mb-0">12 pm to 2 pm</p>
                        </div>
                        <div class="time-stack-inner ml-2">
                            <p class="mb-0">4 pm to 6 pm</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="timing-stack timing-stack-four px-3 my-3">
                <div class="week-name">
                    <h1>Thu:</h1>
                </div>
                <div class="stack-time">
                    <div class="time-stack-outer px-4 ">
                        <div class="time-stack-inner">
                            <p class="mb-0">9 am to 10 am</p>
                        </div>
                        <div class="time-stack-inner ml-2">
                            <p class="mb-0">12 pm to 2 pm</p>
                        </div>
                        <div class="time-stack-inner ml-2">
                            <p class="mb-0">4 pm to 6 pm</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="timing-stack timing-stack-five px-3 my-3">
                <div class="week-name">
                    <h1>Fri:</h1>
                </div>
                <div class="stack-time">
                    <div class="time-stack-outer px-4  ">
                        <div class="time-stack-inner">
                            <p class="mb-0">9 am to 10 am</p>
                        </div>
                        <div class="time-stack-inner ml-2">
                            <p class="mb-0">12 pm to 2 pm</p>
                        </div>
                        <div class="time-stack-inner ml-2">
                            <p class="mb-0">4 pm to 6 pm</p>
                        </div>
                        <div class="time-stack-inner ml-2">
                            <p class="mb-0">8 pm to 10 pm</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="timing-stack timing-stack-six px-3 my-3">
                <div class="week-name">
                    <h1>Sat:</h1>
                </div>
                <div class="stack-time">
                    <div class="time-stack-outer px-4 ">
                        <div class="time-stack-inner">
                            <p class="mb-0">9 am to 10 am</p>
                        </div>
                        <div class="time-stack-inner ml-2">
                            <p class="mb-0">12 pm to 2 pm</p>
                        </div>
                        <div class="time-stack-inner ml-2">
                            <p class="mb-0">4 pm to 6 pm</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="timing-stack timing-stack-seven px-3 my-3">
                <div class="week-name">
                    <h1>Sun:</h1>
                </div>
                <div class="stack-time">
                    <div class="time-stack-outer px-4 ">
                        <div class="time-stack-inner">
                            <p class="mb-0">9 am to 10 am</p>
                        </div>
                        <div class="time-stack-inner ml-2">
                            <p class="mb-0">12 pm to 2 pm</p>
                        </div>
                        <div class="time-stack-inner ml-2">
                            <p class="mb-0">4 pm to 6 pm</p>
                        </div>
                        <div class="time-stack-inner ml-2">
                            <p class="mb-0">8 pm to 10 pm</p>
                        </div>
                        <div class="time-stack-inner ml-2">
                            <p class="mb-0">10 pm to 12 pm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>
@endsection
@section('insertsfooter')
<script>
    $(document).ready(function() {
        $('.limit-box').hide();
        $('#typeselector').change(function() {
            var selectValue = $(this).val();
            console.log(selectValue)
            if (selectValue == "group") {
                $('.limit-box').show();
            } else {
                $('.limit-box').hide();
            }
        });
    });

    $('.toggle-icon').mouseover(function() {
        $('.icon-div').removeClass('d-none')
    });
    $('.icon-div').mouseleave(function() {
        $(this).addClass('d-none')
    });
</script>
@endsection