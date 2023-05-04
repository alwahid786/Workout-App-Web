@extends('layouts.trainerSide.default')
<style>
    body {
        background-color: #F2F2F2 !important;
    }

    .payment-list-heading h1 {
        color: #E37048;
        margin-bottom: 0px;
        font-size: 1.5rem;
        font-weight: 500;
    }



    .payment-box {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background: rgba(227, 112, 72, 0.08);
        border: 1px solid #E37048;
        padding-top: 1.8rem;
        padding-bottom: 1.8rem;
    }

    .payment-box p {
        color: #E37048;
        font-size: 1rem;
        margin-bottom: 0px;
        padding-bottom: 0.3rem;
        font-weight: 500;
    }

    .payment-box h1 {
        padding-top: 0.3rem;
        color: #E37048;
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 0px;
    }


    .payment-box-outer:first-of-type .payment-box {
        border-top-left-radius: 10px;
    }

    .payment-box-outer:last-of-type .payment-box {
        border-top-right-radius: 10px;
        background-color: #F9F9F9;
    }

    .withdraw-btn a {
        text-decoration: none !important;
        color: #E37048 !important;
        background-color: white;
        border: 1px solid #E37048 !important;
        box-shadow: none !important;
        width: 160px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-left: auto;
    }

    .payment-wrapper-inner {
        background-color: white;
    }

    .withdraw-btn a:hover {
        background-color: #E37048;
        color: white !important;
    }

    .payment-table-heading h1 {
        font-size: 1.5rem;
        margin-bottom: 0px;
        color: #666666;
    }

    @media screen and (max-width:767px) {
        .payment-box-outer:nth-of-type(2) .payment-box {
            border-top-right-radius: 10px;
        }

        .payment-box-outer:last-of-type .payment-box {
            border-top-right-radius: 0px;
            background-color: #F9F9F9;
        }

    }

    @media screen and (max-width:576px) {
        .payment-box-outer:first-of-type .payment-box {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .payment-box-outer:nth-of-type(2) .payment-box {
            border-top-right-radius: 0px;
        }
    }

    /* table */
    .table-heading {
        width: 20%;
        font-size: 1rem;
        font-weight: 500;
        color: #E37048;
    }

    .past-session-table-header {
        background: #FFDCD0;
        height: 40px;
        display: flex;
        align-items: center;
    }

    @media only screen and (max-width: 768px) {
        .past-session-table-header {
            display: none !important;
            visibility: hidden;
        }
    }

    .past-session-table-body {
        background: white;
        display: flex;
        align-items: center;
        border-bottom: 1px solid #F5F5F5;
    }

    .table-cotent {
        width: 20%;
    }

    .table-content-heading {
        display: none;
    }

    .table-content-heading h1 {
        font-size: 1rem;
        margin-bottom: 0px;
    }



    .table-content-value h1 {
        font-size: 1rem;
        margin-bottom: 0px;
        color: #9999A3;
        font-weight: normal;
    }



    .table-content-value-profile {
        display: flex;
        align-items: center;
    }

    .table-content-value-profile img {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        object-fit: cover;
    }

    .table-content-value-profile-content h1 {
        color: #E37048;
        font-size: 1rem;
        font-weight: 500;
        margin-bottom: 0px;
    }

    .table-content-value-profile-content p {
        margin-bottom: 0px;
        font-size: 0.8rem;
        color: #9999A3;
    }

    @media only screen and (max-width: 767px) {

        .past-session-table-body {
            flex-direction: column;
            /* border-radius: 15px;
        box-shadow: 0 10px 10px -5px; */
        }

        .table-content-heading {
            display: block;
            width: 50%;
        }

        .table-content-value {
            width: 50%;
        }

        .table-cotent {
            display: flex;
            justify-content: space-around;
            width: 100%;
        }
    }


    @media only screen and (max-width:396px) {

        .table-content-value h1,
        .table-content-heading h1 {
            font-size: 0.8rem !important;
        }
    }

    @media screen and (max-width:576px) {
        .past-session-header h1 {
            color: #E37048;
            font-size: 1.3rem;
            margin-bottom: 0px;
        }

        .table-content-value-profile img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            object-fit: cover;
        }
    }

    @media screen and (max-width:1260px) and (min-width:992px) {
        .table-content-value h1 {
            font-size: 0.6rem;
        }

        .table-content-value-profile-content h1 {
            color: #E37048;
            font-size: 0.6rem;
            font-weight: 500;
            margin-bottom: 0px;
        }

        .table-content-value-profile-content p {
            margin-bottom: 0px;
            font-size: 0.6rem;
            color: #9999A3;
        }
    }

    .modal-content {
        border-radius: 10px !important;
        border: none !important;
    }

    .modal-content-box {
        display: flex;
        justify-content: space-between;
    }

    .modal-heading h1 {
        color: #E37048;
        margin-bottom: 0px;
        font-size: 1.5rem;
    }

    .modal-content-box-left h3:nth-of-type(1) {
        font-size: 1.2rem;
        color: #4F4F4F;
        margin-bottom: 0px;
        text-align: left;
    }

    .modal-content-box-left h3 {
        font-size: 1.4rem;
        color: #E37048;
        margin-bottom: 0px;
    }

    input[type=radio].color-radio {
        accent-color: #E37048;
        border: 1px solid #E37048;
        transform: scale(1.1);
        background: transparent !important;
    }

    .pro-form label {
        font-weight: 500 !important;
        color: #4F4F4F;
        font-size: 0.9rem;
    }

    .modal-content-box-inner {
        width: 50%;
    }

    .price-field {
        display: flex;
        align-items: center;
        width: 100%;
    }

    .price-field-input {
        width: 75%;
        position: relative;
    }

    .price-field-input input {
        box-shadow: none !important;
        background-color: #D9D9D9 !important;
        border: 1px solid #D9D9D9 !important;
        border-radius: 10px;
        padding-left: 25px;
        height: 45px;
        color: #A1A1A1;
    }

    .price-field-input h2 {
        position: absolute;
        top: 50%;
        left: 10px;
        transform: translate(0%, -50%);
        margin-bottom: 0px;
        font-size: 1rem;
    }

    .price-field h1 {
        font-size: 0.9rem;
        font-weight: 500;
        margin-bottom: 0px;
        padding-left: 5px;
    }

    .fee-content,
    .other-fee,
    .total-fee {
        display: flex;
        justify-content: space-between;
    }

    .fee-content h1 {
        font-size: 0.9rem;
        margin-bottom: 0px;
        color: #A1A1A1;
    }

    .other-fee h1 {
        font-size: 0.7rem;
        margin-bottom: 0px;
        color: #A1A1A1;
    }

    .total-fee h1 {
        font-size: 0.9rem;
        margin-bottom: 0px;
    }

    .payment-btn button {
        max-width: 220px;
        height: 40px;
        border: 1px solid #E37048 !important;
        border-radius: 7px;
        background: white;
        color: #E37048;
        box-shadow: none !important;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        width: 100%;
    }

    .payment-btn button:hover {
        background: #E37048;
        color: white;
    }



    .modal-body p {
        color: #A6A6A6 !important;
        font-size: 1.5rem !important;
    }
</style>
@section('content')
@include('includes.trainerSide.navbar')
<div class="content-wrapper py-3">
    <div class="container-fluid ">
        <div class="col-12 payment-list-heading pb-4">
            <h1>Payment Report of Present Clients</h1>
        </div>
        <div class="payment-wrapper ">
            <div class="row px-3">
                <!-- <div class="col-sm-6 col-md-3 px-0 payment-box-outer">
                    <div class="payment-box">
                        <p>Send By Client Side</p>
                        <h1>$60.00</h1>
                    </div>
                </div> -->
                <div class="col-sm-6 col-md-6 px-0 payment-box-outer">
                    <div class="payment-box ">
                        <p>In WorkitPT Wallet</p>
                        <h1>${{$wallet}}</h1>
                    </div>
                </div>
                <!-- <div class="col-sm-6 col-md-4 px-0 payment-box-outer">
                    <div class="payment-box">
                        <p>Remaining</p>
                        <h1>$60.00</h1>
                    </div>
                </div> -->
                <div class="col-sm-6 col-md-6 px-0 payment-box-outer">
                    <div class="payment-box">
                        <p>Total Earning</p>
                        <h1>${{$totalEarning}}</h1>
                    </div>
                </div>
            </div>
            <div class="payment-wrapper-inner">
                <div class="col-12 text-right withdraw-btn py-3">
                    <a href="#" class="btn withdraw-btn" data-toggle="modal" data-target="#sucessModal">Withdraw Amount </a>
                </div>
                <div class="col-12 text-left payment-table-heading py-3">
                    <h1>All Payment Detail</h1>
                </div>
                <!-- table -->
                <div class="past-session-table mt-md-3">
                    <div class="past-session-table-header d-flex justify-content-around px-3">
                        <div class="table-heading text-center">Withdraw Date</div>
                        <div class="table-heading text-center">Amount</div>
                        <div class="table-heading text-center">Fees</div>
                        <div class="table-heading text-center">Total</div>
                        <div class="table-heading text-center">Status</div>
                        <!-- <div class="table-heading text-center">View</div> -->
                    </div>
                    @if(isset($allWithdraws) && !empty($allWithdraws))
                    @foreach($allWithdraws as $withdraw)
                    <div class="past-session-table-body d-flex justify-content-around px-3 mt-md-4 mb-4 my-md-0 pt-md-4 pb-4">


                        <div class="table-cotent">
                            <div class="table-content-heading">
                                <h1>Class Time & Fee</h1>
                            </div>
                            <div class="table-content-value text-md-center">
                                <h1>{{date('M d, Y h:i A', strtotime($withdraw['created_at']))}}</h1>
                            </div>

                        </div>
                        <div class="table-cotent">
                            <div class="table-content-heading">
                                <h1>Class Type</h1>
                            </div>
                            <div class="table-content-value text-md-center">
                                <h1>${{$withdraw['amount'] - $withdraw['fees']}}</h1>
                            </div>
                        </div>

                        <div class="table-cotent">
                            <div class="table-content-heading">
                                <h1>Fee</h1>
                            </div>
                            <div class="table-content-value text-md-center">
                                <h1>${{$withdraw['fees']}}</h1>
                            </div>

                        </div>
                        <div class="table-cotent">
                            <div class="table-content-heading">
                                <h1>Pending</h1>
                            </div>
                            <div class="table-content-value text-md-center">
                                <h1>${{$withdraw['amount'] + $withdraw['fees']}}</h1>
                            </div>

                        </div>
                        <div class="table-cotent">
                            <div class="table-content-heading">
                                <h1>Total</h1>
                            </div>
                            <div class="table-content-value text-md-center">
                                <h1 style="text-transform:capitalize ;">{{$withdraw['status']}}</h1>
                            </div>

                        </div>
                        <!-- <div class="table-cotent">
                            <div class="table-content-heading">
                                <h1>View</h1>
                            </div>
                            <div class="table-content-value text-md-center">
                                <a href="{{url('/trainer/paymentdetail')}}">
                                    <img class="" src="{{asset('public/assets/images/view-icon.svg')}}" alt="">
                                </a>

                            </div>
                        </div> -->


                    </div>
                    @endforeach
                    @else
                    <div class="text-danger text-center py-3">
                        <h3>No Withdraw Records</h3>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal -->
<div class="modal fade" id="sucessModal" tabindex="-1" role="dialog" aria-labelledby="signupModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content signupModalDialogue">
            <div class="modalHeader px-2 pt-1 pb-1 d-flex justify-content-end align-items-center">
                <img class="cross-icon" style="width: 8%;" data-dismiss="modal" src="{{asset('public/assets/images/x-circle.svg')}}" alt="">
            </div>
            <div class="modal-body text-center sucess-modal payment-content-modal">
                <div class="col-12 modal-heading text-left pl-0">
                    <h1>Available Balance</h1>
                </div>
                <div class="modal-content-box">
                    <div class="modal-content-box-inner modal-content-box-left text-left">
                        <h3 class="py-2">${{$wallet}}</h3>
                        <h3 class="pb-3">Amount</h3>
                        <div class="form-group pro-form text-left">
                            <label class="radio-inline">
                                <input class="color-radio mr-2" id="wallet" type="radio" name="price" onclick="show1();" checked>${{$wallet}}
                            </label>
                            <br>
                            <label class="radio-inline">
                                <input class="color-radio mr-2" id="custom" type="radio" name="price" onclick="show2();">Other Amount
                            </label>
                        </div>
                    </div>
                    <div class="modal-content-box-inner modal-content-box-right my-auto">
                        <img style="width:100%;margin:0 auto" src="{{asset('public/assets/trainerimages/payment-modal.png')}}" alt="">
                    </div>
                </div>
                <div class="price-field-outer" id="div1">
                    <div class="col-12 pl-0 price-field">
                        <div class="price-field-input">
                            <input class="form-control text-right" id="customPriceInput" placeholder="0.00" type="text">
                            <h2>$</h2>
                        </div>

                        <h1>USD</h1>
                    </div>
                </div>

                <div class="col-12 fee-content pl-0 pt-3">
                    <h1>Withdrawal Fee (per payment)</h1>
                    <h1>$0.99</h1>
                </div>
                <div class="col-12 other-fee pl-0 py-1">
                    <h1>Other Fees may apply.</h1>
                </div>
                <div class="total-fee col-12 pl-0 py-3">
                    <h1>Total Amount </h1>
                    <h1>$<span class="totalWithdrawAmount">{{$wallet - 0.99}}</span></h1>
                </div>
                <div class="col-12 payment-btn pt-3 pb-2">
                    <button class="withdraw-btns" id="withdrawBtn">Withdraw</button>
                </div>

            </div>
            <!-- sucess modal body -->
            <div class="modal-body text-center sucess-modal payment-success-modal">
                <img style="width:60%;margin:0 auto" src="{{asset('public/assets/images/sucess.svg')}}" alt="">
                <h1 class="mt-2">Request Sent</h1>
                <p>Your request to withdraw has been
                    <br>sent to admin successfully! You'll receive amount in 24 hours.
                </p>

            </div>

        </div>
    </div>
</div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@section('insertsfooter')

<script>
    $('.price-field-outer').hide();

    function show1() {
        document.getElementById('div1').style.display = 'none';
    }

    function show2() {
        document.getElementById('div1').style.display = 'block';
    }
    $('.payment-success-modal').hide();
    $('.withdraw-btns').click(function() {
        // $('.payment-content-modal').hide();
        // $('.payment-success-modal').show();
    })
    $('.withdraw-btn').click(function() {
        $('.payment-content-modal').show();
        $('.payment-success-modal').hide();
    })
</script>
<script>
    $('.sidenav .nav-item:nth-of-type(4)').addClass('active');
    $(document).ready(function() {
        var finalPrice = @json($wallet) - 0.99;
        $('input[name="price"]').change(function() {
            if ($('#custom').is(':checked')) {
                $('.totalWithdrawAmount').text('0.00');
                finalPrice = 0;

            } else if ($('#wallet').is(':checked')) {
                let amount = @json($wallet) - 0.99;
                finalPrice = amount;
                $('.totalWithdrawAmount').text(amount);
            }
        });
        $(document).on('keyup', '#customPriceInput', function() {
            let price = $('#customPriceInput').val();
            if ($('#customPriceInput').val() == '') {
                $('.totalWithdrawAmount').text('0.00');
                finalPrice = 0;
            } else {
                $('.totalWithdrawAmount').text(price - 0.99);
                finalPrice = price - 0.99;
            }
        })
        $(document).on('click', '#withdrawBtn', function() {
            let wallet = @json($wallet);
            if (finalPrice < 5) {
                Swal.fire(
                    'Withdraw Error',
                    'Withdraw amount must be greater than 5.',
                    'error'
                )
                return;
            } else if (finalPrice > wallet) {
                Swal.fire(
                    'Withdraw Error',
                    'Withdraw amount must be less than available price in wallet.',
                    'error'
                )
                return;
            } else {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },

                    url: `{{route('withdraw')}}`,
                    type: "POST",
                    data: {
                        amount: btoa(finalPrice)
                    },
                    cache: false,
                    success: function(dataResult) {
                        console.log(dataResult);
                        if (dataResult.success == 'false') {
                            Swal.fire(
                                'Withdraw Error',
                                dataResult.message,
                                'error'
                            )
                        } else {
                            $('.payment-content-modal').hide();
                            Swal.fire(
                                'Success',
                                "Your request to withdraw has been sent to admin successfully!You 'll receive amount in 24 hours.",
                                'success'
                            ).then((result) => {
                                window.location.reload();
                            });
                        }
                    },
                    error: function(jqXHR, exception) {
                        Swal.fire(
                            'Withdraw Error',
                            jqXHR.responseJSON.message,
                            'error'
                        )
                    }
                });
            }
        });
    })
</script>
@endsection