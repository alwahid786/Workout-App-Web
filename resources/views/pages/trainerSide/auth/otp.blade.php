@extends('layouts.trainerSide.default')
<link rel="stylesheet" href="{{asset('public/assets/trainercss/otp.css')}}">
@section('content')
<div class="row login-section">
    <div class="col-12 col-md-6 right-parent pt-5 px-5 mt-md-5">
        <div class="login-right-side text-center text-md-left">
            <div class="heading-area">
                <img class="d-none d-md-block" src="{{asset('public/assets/images/logo.svg')}}" alt="">
                <img class="d-block d-md-none" src="{{asset('public/assets/trainerimages/logo-f.svg')}}" alt="">
                <h3 class="pt-5 pb-0">OTP <br> <span>Code</span> </h3>
                </div>
                <div class="verification-code">
                    <div class="verification-code--inputs">
                        <input type="text" maxlength="1" class="ml-0" />
                        <input type="text" maxlength="1" />
                        <input type="text" maxlength="1" />
                        <input type="text" maxlength="1" />
                        <input type="text" maxlength="1" />
                        <input type="text" maxlength="1" />
                    </div>
                    <input type="hidden" id="verificationCode" />
                </div>
                <div class="otp-content text-center">
                    <p>04:00</p>
                    <p>Resend Code</p>
                </div>

                <div class="form-field pt-5 ">
                    <button type="submit" class="btn btn-default text-center">Confirm</button>
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
@endsection