@extends('layouts.trainerSide.default')
<style>
    body {
        background-color: #F2F2F2 !important;
        position: relative;
        height: 100vh;
    }

    .navbar-dark {
        z-index: 2 !important;
    }

    .content-wrapper {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1 !important;
        margin-left: 0px !important;
        margin-top: 0px !important;
    }


    .null-wrapper img {
        width: 100%;
        max-width: 450px;
        min-width: 250px;

    }
</style>
@section('content')
@include('includes.trainerSide.navbar')
<div class="content-wrapper px-2 py-3">
    <div class="null-wrapper">
        <img src="{{asset('public/assets/trainerimages/d-null.png')}}" alt="">
    </div>

</div>
<!-- modal -->
<div class="modal fade" id="sucessModal" tabindex="-1" role="dialog" aria-labelledby="signupModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content signupModalDialogue">
            <div class="modalHeader px-2 pt-2 pb-2 d-flex justify-content-end align-items-center">
                <img class="cross-icon" style="width: 8%;" data-dismiss="modal" src="{{asset('public/assets/images/x-circle.svg')}}" alt="">
            </div>
            <div class="modal-body text-center sucess-modal">
                <img style="width:60%;margin:0 auto" src="{{asset('public/assets/images/sucess.svg')}}" alt="">
                <h1 class="mt-2">Success!</h1>
                <p>Your Request to become a trainer has
                    been send we will respond you in
                    5 working days!</p>
            </div>
        </div>
    </div>
</div>
@endsection
@section('insertsfooter')
@if(session()->has('successCode') && session()->get('successCode') == 1)
<script>
    $('#sucessModal').modal('show');
</script>
@endif
@endsection