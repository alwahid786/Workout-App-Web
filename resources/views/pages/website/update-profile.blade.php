@extends('layouts.website.default')
@section('content')
<link rel="stylesheet" href="{{asset('public/assets/css/nice-select.css')}}">
<link rel="stylesheet" href="{{asset('public/assets/bootstrap-select-1.13.14/dist/css/bootstrap-select.min.css')}}">

<style>
    body {
        background-color: #f4f4f4;
    }

    input[type="file"] {
        display: none;
    }

    .hero-section-upload {
        color: white;
        background: linear-gradient(180deg, #FFBB00 0%, #E37048 100%);
        border-radius: 7px;
        /* padding: 15px 40px; */
        font-size: 1rem;
        font-weight: 600;
        /* width: 40%; */
        /* min-width: 50%; */
        margin: 0 auto;
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
        /* color: #fff !important; */

    }

    .pro-form input::placeholder {
        color: gray;
    }

    .pro-form input,
    .pro-form textarea {
        background: rgba(249, 249, 249, 0.2);
        border: 1px solid #CECECE;
        box-shadow: 0px 4px 22px rgba(0, 0, 0, 0.05) !important;
        border-radius: 10px !important;
    }

    .pro-form textarea {
        resize: none !important;
        height: 200px !important;
    }

    /* .profile-nxt-btn {
        text-align: center;
        background: #E37048;
        border-radius: 10px;
        padding: 10px 0;
        width: 70%;
        margin: 0 auto;
    } */
    .profile-nxt-btn button,
    .profile-nxt-btn button:hover,
    .profile-nxt-btn button:focus,
    .profile-nxt-btn button:active {
        background: #E37048;
        border: none;
        box-shadow: none;
        outline: none;
        color: white;
        padding: 25px 0;
        border-radius: 15px;
        text-align: center;
        width: 60%;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        min-width: 200px;
        height: 60px;
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

    .profile-hero-right {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .profile-hero-right img {
        margin: 0 auto;
    }

    input[type=radio] {
        height: 10px !important;
        border: 1px solid #E37048;
    }



    input[type=radio].color-radio {
        accent-color: #E37048;
        border: 1px solid #E37048;
        transform: scale(1.5);
        background: transparent !important;
    }

    @media screen and (min-width:768px) {
        input[type=radio].color-radio {
            transform: scale(1.5);
        }

    }
</style>
@include('includes.website.navbar-two')
<form action="{{route('updateProfile')}}" method="post" enctype="multipart/form-data" id="updateProfileForm">
    @csrf
    <div class="container-fluid hero-section ">
        <div class="container hero-section-wrapper" data-aos="fade-left">
            <div class="row">
                <div class="col-md-6 order-2 order-md-1 hero-left text-center text-md-left">
                    <div class="hero-left-content heroText">
                        <h1>Hello <span>{{auth()->user()->name}}</span></h1>
                        <p class="pb-4 pt-3">{{auth()->user()->email}}</p>
                    </div>
                </div>
                <div class="col-md-6 order-1 order-md-2 hero-right text-center mb-5 mb-md-0 profile-hero-right">
                    <div id="img-preview">
                        @if(auth()->user()->profile_img == null)
                        <img src="{{asset('public/assets/images/unknown-user.png')}}" alt="image">
                        @else
                        <img src="{{ auth()->user()->profile_img}}" alt="image">
                        @endif
                    </div>
                    <label class="hero-section-upload my-4"> Upload Image
                        <!-- <input type="file" size="60"> -->
                        <input type="file" size="60" name="files" <?php if (auth()->user()->profile_img != null) {
                                                                        echo "data-class='no-validation'";
                                                                    } ?> id="profile_img">
                    </label>
                </div>
            </div>
        </div>

    </div>
    <!-- ...........................User Profile Section.............. -->
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputAddress" class=" ">Contact <span style="color: red">*</span></label>
                    <input type="text" name="phone" value="{{auth()->user()->phone ?? ''}}" class="form-control py-4 decimal-only" id="inputAddress">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="form-group pro-form">
                    <label for="inputAddress" class=" ">Emergency Contact <span style="color: red">*</span></label>
                    <input type="text" name="emergency_contact" value="{{auth()->user()->emergency_contact ?? ''}}" class="form-control py-4 decimal-only" id="inputAddress">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputAddress2" class=" ">Relationship With Emergency Contact <span style="color: red">*</span></label>
                    <input type="text" name="relationship_emergency_contact" value="{{auth()->user()->relationship_emergency_contact	 ?? ''}}" class="form-control py-4" id="inputAddress2">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="form-group pro-form">
                    <label for="inputAddress2" class=" ">Date of Birth <span style="color: red">*</span></label>
                    <input type="date" name="date_of_birth" class="form-control py-4" id="inputAddress2">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputCity" class=" ">Gender <span style="color: red">*</span></label>
                    <!-- <input type="text" name="gender" value="{{auth()->user()->gender ?? ''}}" class="form-control py-4" id="inputCity"> -->
                    <!-- <input type="text" class="form-control py-4" id="inputCity"> -->

                    <select name="" class="form-control py-2 pro-form-select" id="inputCity">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6" >
                <div class="form-group pro-form">
                    <label for="inputAddress2" class=" ">Country</label>
                    
                    <!-- <input type="text" name="country" data-class="no-validation" value="{{auth()->user()->country ?? ''}}" class="form-control py-4" id="inputAddress2"> -->
                    <select class="selectpicker " data-live-search="true" onchange="print_state('state',this.selectedIndex, 'profile');" id="country" name="country">
                        <option value="USA">USA</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6" >
                <div class="form-group pro-form">
                    <label for="inputCity" class=" ">State</label>
                    <!-- <input type="text" name="state" data-class="no-validation" value="{{auth()->user()->state ?? ''}}" class="form-control py-4" id="inputCity"> -->
                    <select class="selectpicker " data-live-search="true" id="state" name="state">
                        <option disabled selected value="Alaska">Select Country First</option>

                    </select>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="form-group pro-form">
                    <label for="inputAddress2" class=" ">Workout Location</label>
                    <input type="text" name="workout_location" data-class="no-validation" value="{{auth()->user()->workout_location ?? ''}}" class="form-control py-4" id="workout_location">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <div class="form-group pro-form">
                    <label for="inputCity" class=" ">Weight</label>
                    <label class="radio-inline">
                        <input class="color-radio mx-2 " value="kg" type="radio" name="weight_unit" <?php if (auth()->user()->weight_unit == 'kg' || auth()->user()->weight_unit == null) {
                                                                                                        echo 'checked';
                                                                                                    } ?>>KGs
                    </label>
                    <label class="radio-inline">
                        <input class="color-radio mx-2" value="lb" type="radio" name="weight_unit" <?php if (auth()->user()->weight_unit == 'lb') {
                                                                                                        echo 'checked';
                                                                                                    } ?>>LBs
                    </label>
                    <input type="text" name="weight" data-class="no-validation" value="{{auth()->user()->weight ?? ''}}" class="form-control py-4 " id="inputCity">
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="form-group pro-form">
                    <label for="inputAddress2" class=" ">Height</label>
                    <label class="radio-inline">
                        <input class="color-radio mx-2" value="feet" type="radio" name="hieght_unit" <?php if (auth()->user()->hieght_unit == 'feet' || auth()->user()->hieght_unit == 'inches' || auth()->user()->hieght_unit == null) {
                                                                                                            echo 'checked';
                                                                                                        } ?>>Feet/Inches
                    </label>
                    <label class="radio-inline">
                        <input class="color-radio mx-2" value="cm" type="radio" name="hieght_unit" <?php if (auth()->user()->hieght_unit == 'cm') {
                                                                                                        echo 'checked';
                                                                                                    } ?>>CM
                    </label>

                    <input type="text" class="form-control py-4 " data-class="no-validation" value="{{auth()->user()->height ?? ''}}" name="height" id="inputAddress2">
                </div>
            </div>
            <div class="col-md-12 pb-3" data-aos="fade-right">
                <div class="form-outline pro-form">
                    <label for="inputCity" class=" ">Any Known Medical Conditions? <span style="color: red">*</span></label>
                    <input type="text" name="madical_condition" value="{{auth()->user()->madical_condition	 ?? ''}}" class="form-control py-4" id="inputCity">
                    <!-- <textarea type="text" maxlength="256" name="madical_condition" rows="4" value="" class="form-control " id="inputCity">{{auth()->user()->madical_condition ?? ''}}</textarea> -->
                </div>
            </div>
            <div class="col-12" data-aos="fade-up">
                <div class="form-outline pro-form">
                    <label class="form-label" for="textAreaExample">Tell Us About yourself <span style="color: red">*</span><span>(256)</span></label>
                    <textarea class="form-control" maxlength="256" name="about" id="textAreaExample1" rows="4">{{auth()->user()->about ?? ''}}</textarea>
                </div>
            </div>
            <input type="hidden" name="update_status" value="1">
            <div class="col-12 my-5">
                <div class=" profile-nxt-btn">
                    <!-- <a href="#" class="update-profile-form-btn">Next</a> -->
                    <input type="hidden" data-class="no-validation" value="{{auth()->user()->id}}" name="user_id">
                    <button class="update-profile-form-btn" type="submit" data-class="no-validation">Next</button>
                </div>
            </div>

        </div>


    </div>
</form>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6NS5JQ0bHHnlcqiHLU2BktDTr9l22ZeY&v=3.exp&sensor=false&libraries=places"></script>
<script src="{{asset('public/assets/bootstrap-select-1.13.14/dist/js/bootstrap-select.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assets/js/countries.js')}}"></script>
<script language="javascript">
    print_country("country");
</script>
<script>
    $(document).ready(function() {
        $('.selectpicker').selectpicker();
        // Integrate map search on input Location 
        function initMap() {
            var input = document.getElementById('workout_location');
            new google.maps.places.Autocomplete(input);
        }
        // // Call the initMap() function when the Google Maps API has finished loading
        initMap();
        const chooseFile = document.getElementById("profile_img");
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

        // Allow only decimal num for input fields only 
        $(".decimal-only").keydown(function(event) {

            if (event.shiftKey == true) {
                event.preventDefault();
            }

            if ((event.keyCode >= 48 && event.keyCode <= 57) ||
                (event.keyCode >= 96 && event.keyCode <= 105) ||
                event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 37 ||
                event.keyCode == 39 || event.keyCode == 46 || event.keyCode == 190) {

            } else {
                event.preventDefault();
            }

            if ($(this).val().indexOf('.') !== -1 && event.keyCode == 190)
                event.preventDefault();
            //if a decimal has been added, disable the "."-button

        });

        // Contact Us Form Submission Function
        $("#updateProfileForm").submit(function(e) {
            e.preventDefault();
            validation = validateForm();
            if (validation) {
                $("#updateProfileForm")[0].submit();
            } else {
                swal({
                    title: "Some Fields Missing",
                    text: "Please fill all fields.",
                    icon: "error",
                });
            }
        })

        function validateForm() {
            let errorCount = 0;
            $("form#updateProfileForm :input").each(function() {
                let val = $(this).val();
                if (val == '' && $(this).attr('data-class') !== 'no-validation') {
                    errorCount++
                    $(this).css('border', '1px solid red');
                } else if ($(this).is('select') && val == '' && $(this).attr('data-class') !== 'no-validation') {
                    errorCount++
                    $(this).css('border', '1px solid red');
                } else {
                    $(this).css('border', '1px solid #CECECE');
                }
            });
            if (errorCount > 0) {
                return false;
            }
            return true;
        }
    });
</script>
@endsection