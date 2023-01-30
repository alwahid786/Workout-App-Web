@extends('layouts.trainerSide.default')
<link rel="stylesheet" href="{{asset('public/assets/trainercss/steptwo.css')}}">
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
<div class="container pt-5">
    <form>
        <div class="row">
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputAddress" class=" ">Contact</label>
                    <input type="text" class="form-control py-4" id="inputAddress">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="form-group pro-form">
                    <label for="inputAddress" class=" ">Emergency Contact</label>
                    <input type="text" class="form-control py-4" id="inputAddress">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="form-group pro-form">
                    <label for="inputAddress2" class=" ">Date of Birth</label>
                    <input type="text" class="form-control py-4" id="inputAddress2">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputCity" class=" ">Gender</label>
                    <input type="text" class="form-control py-4" id="inputCity">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="form-group pro-form">
                    <label for="inputAddress2" class=" ">Country</label>
                    <input type="text" class="form-control py-4" id="inputAddress2">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputCity" class=" ">State</label>
                    <input type="text" class="form-control py-4" id="inputCity">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="form-group pro-form">
                    <label for="inputAddress2" class=" ">Workout Location</label>
                    <input type="text" class="form-control py-4" id="inputAddress2">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputCity" class=" ">Weight</label>


                    <input type="text" class="form-control py-4" id="inputCity">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="form-group pro-form">
                    <label for="inputAddress2" class=" ">Height</label>


                    <input type="text" class="form-control py-4" id="inputAddress2">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputCity" class=" ">Any Known Medical Conditions?</label>
                    <input type="text" class="form-control py-4" id="inputCity">
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputCity" class=" ">Add Facebook URL</label>
                    <div class="input-container">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                        <input type="url" class="form-control py-4" id="inputCity">
                    </div>

                </div>
            </div>
            <div class="col-md-4" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputCity" class=" ">Add Insta URL</label>
                    <div class="input-container">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        <input type="url" class="form-control py-4" id="inputCity">
                    </div>

                </div>
            </div>
            <div class="col-md-4" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputCity" class=" ">Add Linkedin URL</label>
                    <div class="input-container">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                        <input type="url" class="form-control py-4" id="inputCity">
                    </div>

                </div>
            </div>
            <div class="updateinfo-qualification my-4 px-3">
                <h1 class="mb-4">Upload Qualification</h1>
                <div class="update-info-qualification-image">
                    <img class="pl-0" src="{{asset('public/assets/trainerimages/uploadimg.svg')}}" alt="">
                    <img src="{{asset('public/assets/trainerimages/certificate.svg')}}" alt="">
                    <img src="{{asset('public/assets/trainerimages/certificate2.svg')}}" alt="">
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