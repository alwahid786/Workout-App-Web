@extends('layouts.trainerSide.default')
<link rel="stylesheet" href="{{asset('public/assets/trainercss/otp.css')}}">
@section('content')
<div class="row login-section">
    <div class="col-12 col-md-6 right-parent  px-5 my-auto">
        <div class="login-right-side text-center text-md-left">
            <div class="heading-area">
                <img class="d-none d-md-block" src="{{asset('public/assets/images/logo.svg')}}" alt="">
                <img class="d-block d-md-none" src="{{asset('public/assets/trainerimages/logo-f.svg')}}" alt="">
                <h3 class="pt-5 pb-0">OTP <br> <span>Code</span> </h3>
            </div>
            <div class="verification-code">
                <div class="verification-code--inputs">
                    <input type="text" maxlength="1" class="ml-0 otpone" />
                    <input class="otptwo" type="text" maxlength="1" />
                    <input class="otpthree" type="text" maxlength="1" />
                    <input class="otpfour" type="text" maxlength="1" />
                    <input class="otpfive" type="text" maxlength="1" />
                    <input class="otpsix" type="text" maxlength="1" />
                </div>
                <input type="hidden" id="verificationCode" />
            </div>
            <div class="otp-content text-center">
                <p>04:00</p>
                <p>Resend Code</p>
            </div>

            <div class="form-field pt-5 ">
                <!-- <button type="submit" class="btn btn-default text-center">Confirm</button> -->
                <a class="btn btn-default text-center" href="{{url('/trainer/newpassword')}}">Confirm</a>
            </div>


        </div>
    </div>
    <div class="col-md-6 px-0 login-left-side-wrapper">
        <div class="login-left-side">
            <img src="{{asset('public/assets/trainerimages/logo-trans.svg')}}" alt="">
        </div>
    </div>
</div>
@endsection
@section('insertsfooter')
<script>
    //Code Verification
    var verificationCode = [];
    $(".verification-code input[type=text]").keyup(function(e) {

        // Get Input for Hidden Field
        $(".verification-code input[type=text]").each(function(i) {
            verificationCode[i] = $(".verification-code input[type=text]")[i].value;
            $('#verificationCode').val(Number(verificationCode.join('')));
            //console.log( $('#verificationCode').val() );
        });

        //console.log(event.key, event.which);

        if ($(this).val() > 0) {
            if (event.key == 1 || event.key == 2 || event.key == 3 || event.key == 4 || event.key == 5 || event.key == 6 || event.key == 7 || event.key == 8 || event.key == 9 || event.key == 0) {
                $(this).next().focus();
            }
        } else {
            if (event.key == 'Backspace') {
                $(this).prev().focus();
            }
        }

    }); // keyup

    $('.verification-code input').on("paste", function(event, pastedValue) {
        console.log(event)
        $('#txt').val($content)
        console.log($content)
        //console.log(values)
    });

    $editor.on('paste, keydown', function() {
        http: //jsfiddle.net/5bNx4/#run
            var $self = $(this);
        setTimeout(function() {
            var $content = $self.html();
            $clipboard.val($content);
        }, 100);
    });
</script>
<script>
    $(".otpone").on('keyup', function() {
        let values = $(".otpone").val();
        if (values.length >= 1) {
            $(".otpone").removeClass('login-email-field-red');
            $(".otpone").addClass('login-email-field-green');
        } else {
            $(".otpone").removeClass('login-email-field-green');
            $(".otpone").addClass('login-email-field-red');
        }

    })
    $(".otptwo").on('keyup', function() {
        let values = $(".otptwo").val();
        if (values.length >= 1) {
            $(".otptwo").removeClass('login-email-field-red');
            $(".otptwo").addClass('login-email-field-green');
        } else {
            $(".otptwo").removeClass('login-email-field-green');
            $(".otptwo").addClass('login-email-field-red');
        }

    })
    $(".otpthree").on('keyup', function() {
        let values = $(".otpthree").val();
        if (values.length >= 1) {
            $(".otpthree").removeClass('login-email-field-red');
            $(".otpthree").addClass('login-email-field-green');
        } else {
            $(".otpthree").removeClass('login-email-field-green');
            $(".otpthree").addClass('login-email-field-red');
        }

    })
    $(".otpfive").on('keyup', function() {
        let values = $(".otpfive").val();
        if (values.length >= 1) {
            $(".otpfive").removeClass('login-email-field-red');
            $(".otpfive").addClass('login-email-field-green');
        } else {
            $(".otpfive").removeClass('login-email-field-green');
            $(".otpfive").addClass('login-email-field-red');
        }

    })
    $(".otpfour").on('keyup', function() {
        let values = $(".otpfour").val();
        if (values.length >= 1) {
            $(".otpfour").removeClass('login-email-field-red');
            $(".otpfour").addClass('login-email-field-green');
        } else {
            $(".otpfour").removeClass('login-email-field-green');
            $(".otpfour").addClass('login-email-field-red');
        }

    })
    $(".otpsix").on('keyup', function() {
        let values = $(".otpsix").val();
        if (values.length >= 1) {
            $(".otpsix").removeClass('login-email-field-red');
            $(".otpsix").addClass('login-email-field-green');
        } else {
            $(".otpsix").removeClass('login-email-field-green');
            $(".otpsix").addClass('login-email-field-red');
        }

    })
</script>
@endsection