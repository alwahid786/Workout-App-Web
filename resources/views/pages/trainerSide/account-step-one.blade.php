@extends('layouts.trainerSide.default')
<link rel="stylesheet" href="{{asset('public/assets/trainercss/stepone.css')}}">
@section('content')

<div class="container-fluid update-info-header">
    <div class="container">
        <div class="update-info-content py-4">
            <h1>Create Account</h1>
            <img src="{{asset('public/assets/images/logo.svg')}}" alt="">
        </div>
    </div>

</div>

<div class="container-fluid update-info-header">
    <div class="pagination-section">
    </div>
</div>

<!-- ............Form Section................ -->
<div class="container pt-5">
    <form>
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-5 mb-md-0 upload-image py-5">
                <img src="{{asset('public/assets/trainerimages/update-info-left.svg')}}" alt="image">
                <label class="hero-section-upload my-4"> Upload Image
                    <input type="file" size="60">
                </label>
            </div>
            <div class="col-md-6 text-center form-image">
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
                        <input type="password" class=" modal-input passInput pl-4" id="password" aria-autocomplete="list">
                        <i id="hidePass" class="fa fa-eye-slash" aria-hidden="true" style="display: none;"></i>
                        <i id="showPass" class="fa fa-eye" aria-hidden="true"></i>
                    </div>

                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="form-group pro-form right-inner-addon mb-2">
                    <label for="inputAddress2" class=" ">Confirm Password</label>
                    <div class="right-inner-addon">
                        <input type="password" class=" modal-input passInput pl-4" id="password_confirmation">
                        <i id="hidePass" class="fa fa-eye-slash" aria-hidden="true"></i>
                        <i id="showPass" class="fa fa-eye" aria-hidden="true"></i>
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
                    <a href="#" class="update-profile-form-btn">Next</a>
                </div>
            </div>

        </div>
    </form>

</div>



@endsection
@section('insertsfooter')
<script>

</script>
@endsection