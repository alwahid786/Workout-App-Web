@extends('layouts.trainerSide.default')
<link rel="stylesheet" href="{{asset('public/assets/trainercss/stepthree.css')}}">
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
            <a href="{{url('/trainer/stepfour')}}" class="p-0">Done</a>
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
            <img class="dot-toggle-icon-one" src="{{asset('public/assets/trainerimages/slotverticalicon.svg')}}" alt="">
            <div class="icon-div icon-div-one">
                <div class="icon-edit py-3 icon-div-inner">
                    <i class="fa fa-pencil-square-o pr-2" aria-hidden="true"></i>

                    <h1>Edit</h1>
                </div>
                <div class="icon-del py-3 icon-div-inner">
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
        <div class="slot-timing-stacks stack-timing-one">
            <div class="timing-stack timing-stack-one px-3 my-3">
                <div class="week-name">
                    <h1>Mon:</h1>
                </div>
                <div class="stack-time">
                    <div class="time-stack-outer px-4 ">
                        <div class="time-stack-inner m-2">
                            <p class="mb-0">9 am to 10 am</p>
                        </div>
                        <div class="time-stack-inner m-2 ">
                            <p class="mb-0">12 pm to 2 pm</p>
                        </div>
                        <div class="time-stack-inner m-2 ">
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
                        <div class="time-stack-inner m-2">
                            <p class="mb-0">9 am to 10 am</p>
                        </div>
                        <div class="time-stack-inner m-2 ">
                            <p class="mb-0">12 pm to 2 pm</p>
                        </div>
                        <div class="time-stack-inner m-2 ">
                            <p class="mb-0">4 pm to 6 pm</p>
                        </div>
                        <div class="time-stack-inner m-2 ">
                            <p class="mb-0">8 pm to 10 pm</p>
                        </div>
                        <div class="time-stack-inner m-2 ">
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
                        <div class="time-stack-inner m-2">
                            <p class="mb-0">9 am to 10 am</p>
                        </div>
                        <div class="time-stack-inner m-2 ">
                            <p class="mb-0">12 pm to 2 pm</p>
                        </div>
                        <div class="time-stack-inner m-2 ">
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
                        <div class="time-stack-inner m-2">
                            <p class="mb-0">9 am to 10 am</p>
                        </div>
                        <div class="time-stack-inner m-2 ">
                            <p class="mb-0">12 pm to 2 pm</p>
                        </div>
                        <div class="time-stack-inner m-2 ">
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
                        <div class="time-stack-inner m-2">
                            <p class="mb-0">9 am to 10 am</p>
                        </div>
                        <div class="time-stack-inner m-2 ">
                            <p class="mb-0">12 pm to 2 pm</p>
                        </div>
                        <div class="time-stack-inner m-2 ">
                            <p class="mb-0">4 pm to 6 pm</p>
                        </div>
                        <div class="time-stack-inner m-2 ">
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
                        <div class="time-stack-inner m-2">
                            <p class="mb-0">9 am to 10 am</p>
                        </div>
                        <div class="time-stack-inner m-2 ">
                            <p class="mb-0">12 pm to 2 pm</p>
                        </div>
                        <div class="time-stack-inner m-2 ">
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
                        <div class="time-stack-inner m-2">
                            <p class="mb-0">9 am to 10 am</p>
                        </div>
                        <div class="time-stack-inner m-2 ">
                            <p class="mb-0">12 pm to 2 pm</p>
                        </div>
                        <div class="time-stack-inner m-2 ">
                            <p class="mb-0">4 pm to 6 pm</p>
                        </div>
                        <div class="time-stack-inner m-2 ">
                            <p class="mb-0">8 pm to 10 pm</p>
                        </div>
                        <div class="time-stack-inner m-2 ">
                            <p class="mb-0">10 pm to 12 pm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="slot-arrow slot-arrow-one text-center">
                <i class="fa fa-angle-double-down down-arrow" aria-hidden="true"></i>
                <i class="fa fa-angle-double-up up-arrow" aria-hidden="true"></i>
            </div>
        </div>



    </div>



    <!-- .............Yoga Slot............... -->
    <div class="slot-wrapper py-3 px-3 my-4">
        <div class="slot-vertical-icon my-2 text-right">
            <img class="dot-toggle-icon-two" src="{{asset('public/assets/trainerimages/slotverticalicon.svg')}}" alt="">
            <div class="icon-div icon-div-two">
                <div class="icon-edit py-3 icon-div-inner">
                    <i class="fa fa-pencil-square-o pr-2" aria-hidden="true"></i>

                    <h1>Edit</h1>
                </div>
                <div class="icon-del py-3 icon-div-inner">
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
        <div class="slot-timing-stacks stack-timing-two">
            <div class="timing-stack timing-stack-one px-3 my-3">
                <div class="week-name">
                    <h1>Mon:</h1>
                </div>
                <div class="stack-time">
                    <div class="time-stack-outer px-4 ">
                        <div class="time-stack-inner m-2">
                            <p class="mb-0">9 am to 10 am</p>
                        </div>
                        <div class="time-stack-inner m-2 ">
                            <p class="mb-0">12 pm to 2 pm</p>
                        </div>
                        <div class="time-stack-inner m-2 ">
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
                        <div class="time-stack-inner m-2">
                            <p class="mb-0">9 am to 10 am</p>
                        </div>
                        <div class="time-stack-inner m-2 ">
                            <p class="mb-0">12 pm to 2 pm</p>
                        </div>
                        <div class="time-stack-inner m-2 ">
                            <p class="mb-0">4 pm to 6 pm</p>
                        </div>
                        <div class="time-stack-inner m-2 ">
                            <p class="mb-0">8 pm to 10 pm</p>
                        </div>
                        <div class="time-stack-inner m-2 ">
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
                        <div class="time-stack-inner m-2">
                            <p class="mb-0">9 am to 10 am</p>
                        </div>
                        <div class="time-stack-inner m-2 ">
                            <p class="mb-0">12 pm to 2 pm</p>
                        </div>
                        <div class="time-stack-inner m-2 ">
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
                        <div class="time-stack-inner m-2">
                            <p class="mb-0">9 am to 10 am</p>
                        </div>
                        <div class="time-stack-inner m-2 ">
                            <p class="mb-0">12 pm to 2 pm</p>
                        </div>
                        <div class="time-stack-inner m-2 ">
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
                        <div class="time-stack-inner m-2">
                            <p class="mb-0">9 am to 10 am</p>
                        </div>
                        <div class="time-stack-inner m-2 ">
                            <p class="mb-0">12 pm to 2 pm</p>
                        </div>
                        <div class="time-stack-inner m-2 ">
                            <p class="mb-0">4 pm to 6 pm</p>
                        </div>
                        <div class="time-stack-inner m-2 ">
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
                        <div class="time-stack-inner m-2">
                            <p class="mb-0">9 am to 10 am</p>
                        </div>
                        <div class="time-stack-inner m-2 ">
                            <p class="mb-0">12 pm to 2 pm</p>
                        </div>
                        <div class="time-stack-inner m-2 ">
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
                        <div class="time-stack-inner m-2">
                            <p class="mb-0">9 am to 10 am</p>
                        </div>
                        <div class="time-stack-inner m-2 ">
                            <p class="mb-0">12 pm to 2 pm</p>
                        </div>
                        <div class="time-stack-inner m-2 ">
                            <p class="mb-0">4 pm to 6 pm</p>
                        </div>
                        <div class="time-stack-inner m-2 ">
                            <p class="mb-0">8 pm to 10 pm</p>
                        </div>
                        <div class="time-stack-inner m-2 ">
                            <p class="mb-0">10 pm to 12 pm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="slot-arrow slot-arrow-two text-center">
                <i class="fa fa-angle-double-down down-arrow" aria-hidden="true"></i>
                <i class="fa fa-angle-double-up up-arrow" aria-hidden="true"></i>
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
    // edit and delete 
    // show and hide
    // one
    $('.icon-div-one').hide();
    $('.dot-toggle-icon-one').click(function() {
        $('.icon-div-one').show();
        $('.icon-div-two').hide();
    });
    $('.icon-div-one').mouseleave(function() {
        $('.icon-div-one').hide();
    });
    // two
    $('.icon-div-two').hide();
    $('.dot-toggle-icon-two').click(function() {
        $('.icon-div-two').show();
        $('.icon-div-one').hide();
    });
    $('.icon-div-two').mouseleave(function() {
        $('.icon-div-two').hide();
    });
    // time slot
    // show and hide
    // one
    $('.stack-timing-one').hide();
    $('.slot-arrow-one .up-arrow').hide();
    $('.slot-arrow-one .down-arrow').click(function() {
        $('.stack-timing-one').show(1000);
        $('.slot-arrow-one .up-arrow').show(1000);
        $('.slot-arrow-one .down-arrow').hide(1000);

    });
    $('.slot-arrow-one .up-arrow').click(function() {
        $('.stack-timing-one').hide(1000);
        $('.slot-arrow-one .up-arrow').hide(1000);
        $('.slot-arrow-one .down-arrow').show(1000);
    });
    // two
    $('.stack-timing-two').hide();
    $('.slot-arrow-two .up-arrow').hide();
    $('.slot-arrow-two .down-arrow').click(function() {
        $('.stack-timing-two').show(1000);
        $('.slot-arrow-two .up-arrow').show(1000);
        $('.slot-arrow-two .down-arrow').hide(1000);
    });
    $('.slot-arrow-two .up-arrow').click(function() {
        $('.stack-timing-two').hide(1000);
        $('.slot-arrow-two .up-arrow').hide(1000);
        $('.slot-arrow-two .down-arrow').show(1000);
    });
</script>
@endsection