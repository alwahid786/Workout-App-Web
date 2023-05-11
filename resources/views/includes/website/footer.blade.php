 <!-- ============= Bootstrap Scripts =========== -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<!-- <script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script> -->
 <!-- <script src="{{ asset('public/assets/js/bootstrap.js') }}"></script> -->
 <!-- <script src="{{ asset('public/assets/js/bootstrap.bundle.min.js') }}"></script> -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js" integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <!-- {{-- AOS --}}
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 <script>
     AOS.init({
         duration: 1000
     });
 </script> -->
 <script src="{{ asset('public/assets/dist/aos.js') }}"></script>
 <script>
     AOS.init({
         duration: 1000
     });
 </script>
 <script>
     $(document).ready(function() {
         // Signup API Call 
         $('#sighnup_submit').on('click', function(e) {
             $('.loaderDiv').show();

             e.preventDefault();
             var first_name = $('#first_name').val();
             var last_name = $('#last_name').val();
             var name = first_name + ' ' + last_name;
             var email = $('#email').val();
             var password = $('#password').val();
             var password_confirmation = $('#password_confirmation').val();

             if (first_name != "" && last_name != "" && email != "" && password != "") {
                 $.ajax({
                     headers: {
                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                     },

                     url: `{{route('register')}}`,
                     type: "POST",
                     data: {
                         name: name,
                         email: email,
                         password: password,
                         password_confirmation: password_confirmation,

                     },
                     cache: false,
                     success: function(dataResult) {
                         console.log(dataResult);
                         if (dataResult.success == true) {
                             $('.loaderDiv').hide();
                             $('#signupModal').modal('hide');
                             $('#loginModal').modal('show');
                             toastr.success('Registration Successful!');
                         } else if (dataResult.success == false) {
                             $('.loaderDiv').hide();
                             toastr.error(dataResult.message);
                         }
                     },
                     error: function(jqXHR, exception) {
                         $('.loaderDiv').hide();
                         toastr.error(jqXHR.responseJSON.message);
                     }

                 });
             } else {
                 toastr.error("Please Fill All Fields.");
                 $('.loaderDiv').hide();
             }
         });
         // Login API Call 
         $('#login_submit').on('click', function(e) {
             $('.loaderDiv').show();
             e.preventDefault();
             var email = $('#login_email').val();
             var password = $('#login_password').val();

             if (email != "" && password != "") {
                 $.ajax({
                     headers: {
                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                     },

                     url: `{{route('login')}}`,
                     type: "POST",
                     data: {

                         email: email,
                         password: password,
                     },
                     cache: false,
                     success: function(dataResult) {
                         console.log(dataResult);
                         if (dataResult.data.update_status == 0) {
                             window.location.href = `{{url('profile')}}`;
                         } else {
                             window.location.href = `{{url('/dashboard')}}`;
                         }
                     },
                     error: function(jqXHR, exception) {
                         $('.loaderDiv').hide();
                         toastr.error(jqXHR.responseJSON.message);
                     }
                 });
             } else {
                 $('.loaderDiv').hide();
                 toastr.error('Please fill all the field !');
             }
         });
         // Email Validation Signup
         $(document).on('keyup', "#email", function() {
             let value = $(this).val();
             if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(value)) {
                 $("#email").removeClass('errorInput');
                 $("#email").addClass('successInput');
             } else {
                 $("#email").removeClass('successInput');
                 $("#email").addClass('errorInput');
             }
         });
         // Email Validation Login
         $(document).on('keyup', "#login_email", function() {
             let value = $(this).val();
             if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(value)) {
                 $("#login_email").removeClass('errorInput');
                 $("#login_email").addClass('successInput');
             } else {
                 $("#login_email").removeClass('successInput');
                 $("#login_email").addClass('errorInput');
             }
         });
         // Send OTP API Call 
         $('#forgot_submit').on('click', function(e) {
             $('.loaderDiv').show();
             e.preventDefault();

             var email = $('#forgot_email').val();
             if (email != "") {
                 $.ajax({
                     headers: {
                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                     },

                     url: `{{route('verifyEmail')}}`,
                     type: "POST",
                     data: {
                         email: email,
                     },
                     cache: false,
                     success: function(dataResult) {
                         $('.loaderDiv').hide();
                         document.getElementById("resendCode_d").style.color = 'gray';
                         document.getElementById("resendCode_d").style.cursor = 'default';
                         document.getElementById("resendCode_d").classList.remove('forgot_submit');
                         sessionStorage.setItem("email", email);
                         $('#forgotPassModal').modal('hide');
                         $('#verifyOtpModal').modal('show');

                         // 4 minutes Countdown For resend Code 
                         var deadline = new Date(+new Date() + 60000 * 4).getTime();
                         var x = setInterval(function() {
                             var now = new Date().getTime();
                             var t = deadline - now;
                             var days = Math.floor(t / (1000 * 60 * 60 * 24));
                             var hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                             var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
                             var seconds = Math.floor((t % (1000 * 60)) / 1000);
                             document.getElementById("demo").innerHTML = minutes + "m " + seconds + "s ";
                             if (t < 0) {
                                 clearInterval(x);
                                 document.getElementById("demo").innerHTML = "00:00";
                                 document.getElementById("resendCode_d").style.color = '#E37048';
                                 document.getElementById("resendCode_d").style.cursor = 'pointer';
                                 document.getElementById("resendCode_d").classList.add('forgot_submit');
                             }
                         }, 1000);
                     },
                     error: function(jqXHR, exception) {
                         $('.loaderDiv').hide();
                         toastr.error(jqXHR.responseJSON.message);
                     }
                 });
             } else {
                 // alert('Please fill all the field !');
                 $('.loaderDiv').hide();
                 toastr.error("Please Fill All Fields.");
             }
         });
         // Verify OTP API Call 
         $('#otp_submit').on('click', function(e) {
             $('.loaderDiv').show();
             e.preventDefault();
             var otp_code = $('#otp1').val() + $('#otp2').val() + $('#otp3').val() + $('#otp4').val() + $('#otp5').val() + $('#otp6').val();
             var email = sessionStorage.getItem("email");

             if (otp_code != "") {
                 $.ajax({
                     headers: {
                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                     },
                     url: `{{route('verifyOTP')}}`,
                     type: "POST",
                     data: {
                         email: email,
                         otp_code: otp_code,
                     },
                     cache: false,
                     success: function(dataResult) {
                         console.log(dataResult);
                         if (dataResult.success == true) {
                             $('.loaderDiv').hide();
                             $('#verifyOtpModal').modal('hide');
                             $('#resetPassModal').modal('show');
                         } else if (dataResult.success == false) {
                             $('.loaderDiv').hide();
                             toastr.error(dataResult.message);
                         }
                     },
                     error: function(jqXHR, exception) {
                         $('.loaderDiv').hide();
                         toastr.error(jqXHR.responseJSON.message);
                     }
                 });
             } else {
                 $('.loaderDiv').hide();
                 toastr.error('Please fill all fields!');
             }
         });
         // Update Password API Call 
         $('#update_password').on('click', function(e) {
             $('.loaderDiv').show();
             e.preventDefault();
             var password = $('#new_password').val();
             var password_confirmation = $('#confirm_password_reset').val();
             var email = sessionStorage.getItem("email");

             if (password != "" && password_confirmation != "") {
                 $.ajax({
                     headers: {
                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                     },
                     url: `{{route('updatePassword')}}`,
                     type: "POST",
                     data: {
                         email: email,
                         password: password,
                         password_confirmation: password_confirmation,
                     },
                     cache: false,
                     success: function(dataResult) {
                         if (dataResult.success == true) {
                             $('.loaderDiv').hide();
                             $('#resetPassModal').modal('hide');
                             $('#loginModal').modal('show');
                             toastr.success('Password updated successfully!');
                         } else if (dataResult.success == false) {
                             $('.loaderDiv').hide();
                             toastr.error(dataResult.message);
                         }
                     },
                     error: function(jqXHR, exception) {
                         $('.loaderDiv').hide();
                         toastr.error(jqXHR.responseJSON.message);
                     }
                 });
             } else {
                 $('.loaderDiv').hide();
                 toastr.error('Please fill all fields!');
                 // alert('Please fill all the field !');
             }
         });
         // Email Validation Signup
         $(document).on('keyup', "#email", function() {
             let value = $(this).val();
             if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(value)) {
                 $("#email").removeClass('errorInput');
                 $("#email").addClass('successInput');
             } else {
                 $("#email").removeClass('successInput');
                 $("#email").addClass('errorInput');
             }
         });
         // Email Validation Login
         $(document).on('keyup', "#login_email", function() {
             let value = $(this).val();
             if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(value)) {
                 $("#login_email").removeClass('errorInput');
                 $("#login_email").addClass('successInput');
             } else {
                 $("#login_email").removeClass('successInput');
                 $("#login_email").addClass('errorInput');
             }
         });

     });
 </script>