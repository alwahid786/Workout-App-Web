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
        color: #E37048;
        background: #FFF;
        border: 1px solid #E37048;
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

    .hero-section-upload:hover {
        color: white;
        background: #E37048;
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

    .profile-nxt-btn button {
        background-color: #ffff !important;
        color: #E37048 !important;
        border: 1px solid #E37048 !important;
    }

    .profile-nxt-btn button:hover {
        background: #E37048 !important;
        color: white !important;
    }

    .profile-nxt-btn button,
    .profile-nxt-btn button:focus,
    .profile-nxt-btn button:active {
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
        border: none;

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
        height: 100%;
        max-width: 250px;
        max-height: 250px;
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

    .button {
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
    <form action="{{url('trainer_signup')}}" method="post" enctype="multipart/form-data" id="TrainerSignupForm">
        @csrf
        <div class="row">
            <div class="col-md-6 text-center text-lg-left  upload-image py-5">
                <div id="img-preview">
                    <img src="{{asset('public/assets/trainerimages/update-info-left.svg')}}" alt="image">
                </div>
                <label class="hero-section-upload my-4"> Upload Image <span style="color: red">*</span>
                    <input type="file" name="profile_img" id="profile-img" size="60">
                </label>
            </div>
            <div class="col-md-6 text-center form-image pt-md-5 pb-5">
                <img src="{{asset('public/assets/trainerimages/update-info-right.svg')}}" alt="">
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputAddress" class=" ">First Name <span style="color: red">*</span></label>
                    <input type="text" class="form-control py-4" id="inputAddress" name="first_name">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="form-group pro-form">
                    <label for="inputAddress" class=" ">Last Name <span style="color: red">*</span></label>
                    <input type="text" class="form-control py-4" name="last_name">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputAddress2" class=" ">Email <span style="color: red">*</span></label>
                    <input type="email" class="form-control py-4" id="inputAddress2" name="email">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="form-group pro-form">
                    <label for="inputAddress2" class=" ">Contact Number <span style="color: red">*</span></label>
                    <input type="phone" class="form-control py-4" autocomplete="off" name="contact_number">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form  mb-2">
                    <label for="inputAddress2" class=" ">Password <span style="color: red">*</span></label>
                    <div class="right-inner-addon">
                        <input type="password" class=" modal-input passInput pl-4" id="passInput" aria-autocomplete="list" name="password">
                        <i id="hidePass" class="fa fa-eye-slash" aria-hidden="true" style="display: none;"></i>
                        <i id="showPass" class="fa fa-eye" aria-hidden="true"></i>
                    </div>

                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="form-group pro-form right-inner-addon mb-2">
                    <label for="inputAddress2" class=" ">Confirm Password <span style="color: red">*</span></label>
                    <div class="right-inner-addon">
                        <input type="password" class=" modal-input passInput pl-4" id="passInputtwo" name="confirm_password">
                        <i id="hidePasstwo" class="fa fa-eye-slash" aria-hidden="true"></i>
                        <i id="showPasstwo" class="fa fa-eye" aria-hidden="true"></i>
                    </div>

                </div>
            </div>
            <div class="col-12" data-aos="fade-up">
                <div class="form-outline pro-form">
                    <label class="form-label" for="textAreaExample">Tell Us About yourself <span>(256 Characters)</span></label>
                    <textarea class="form-control" maxlength="256" id="textAreaExample1" name="about" rows="4"></textarea>
                </div>
            </div>
            <div class="col-12 my-5">
                <div class=" profile-nxt-btn">
                    <!-- <a href="{{url('/trainer/steptwo')}}" class="update-profile-form-btn">Next</a> -->
                    <button class="button" type="submit">Next</button>
                </div>
            </div>

        </div>
    </form>
</div>



@endsection
@section('insertsfooter')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if(session()->has('errorCode') && session()->get('errorCode') == "email")
<script>
    swal({
        title: "Email Error",
        text: "Email Already Exists",
        icon: "error",
    });
</script>
@endif

<script>
    $(document).ready(function() {
        const chooseFile = document.getElementById("profile-img");
        const imgPreview = document.getElementById("img-preview");
        chooseFile.addEventListener("change", function() {
            getImgData();
        });

        function getImgData() {
            const files = chooseFile.files[0];
            if (files) {
                const fileReader = new FileReader();
                fileReader.readAsDataURL(files);
                fileReader.addEventListener("load", function() {
                    // imgPreview.style.display = "block";
                    imgPreview.innerHTML = '<img class="cursorPointer_s objectFitCover_s" src="' + this.result +
                        '" />';
                });
            }
        }

        $("#TrainerSignupForm").submit(function(e) {
            e.preventDefault();
            var FormValidation = validateForm();
            if (FormValidation) {
                $("#TrainerSignupForm")[0].submit();
            } else {
                swal({
                    title: "Some Fields Missing",
                    text: "Please fill all fields",
                    icon: "error",
                });
            }
        })

        // Signup Validations
        function validateForm() {
            // Get all the input fields in the form
            const inputs = document.getElementsByTagName("input");

            // Loop through each input field and check if it's empty
            for (let i = 0; i < inputs.length; i++) {
                if (inputs[i].value === "") {
                    // If the input field is empty, show an error message
                    // alert("Please fill in all fields");
                    return false; // return false to prevent the form from submitting
                }
            }

            // If all input fields are filled in, return true to allow the form to submit
            return true;
        }
    });
</script>
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

<!-- <script>
    $("#passInput").on('keyup', function() {
        let values = $("#passInput").val();
        if (values.length >= 8) {
            // $("#passInput").removeClass('login-email-field-red');
            // $(".passInput").addClass('login-email-field-green');
            // $('.right-inner-addon i').css('color', '#151C00')
            alert('password');
        } else {
            // $(".passInput").removeClass('login-email-field-green');
            // $(".passInput").addClass('login-email-field-red');
            // $('.right-inner-addon i').css('color', '#FF0000');
            alert('password must be 8 charactors');
        }

    })
</script> -->
@endsection