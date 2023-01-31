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
                <div class="time-box-outer">
                    <div class="yellow-time time-box-inner">
                        <p class="mb-0">9 am to 10 am</p>
                    </div>
                    <div class="green-time time-box-inner ml-2">
                        <p class="mb-0">12 pm to 2 pm</p>
                    </div>
                </div>
            </div>


        </div>
    </form>

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
</script>
@endsection