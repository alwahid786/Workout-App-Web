@extends('layouts.trainerSide.default')
<style>
    body {
        background-color: #F2F2F2 !important;
    }

    .dashboard-header-left h1 {
        color: #E37048;
        font-size: 1.7rem;
        font-weight: 700;
        display: flex;
        flex-wrap: wrap;
        align-items: flex-end;
    }

    /* chat */
    .chat-area {
        background: white;
        border-radius: 7px;

        /* min-height: calc(100% - 1rem); */
    }

    .chat-box {
        display: flex;
        height: 65vh;
        /* overflow-y: scroll; */
    }

    .chat-area-header h1 {
        font-size: 1.7rem;
        margin-bottom: 0px;
        font-weight: 600;
        color: #E37048;
    }

    .chat-area-header {
        border-bottom: 1px solid #eaeaea;
    }

    /* left */


    .chat-box-left {
        overflow-y: scroll;
        width: 300px !important;
        min-width: 300px;
    }

    .chat-box-left::-webkit-scrollbar-thumb {
        background: #E37048;
        border-radius: 7px;
        height: 7px;
        width: 7px;
    }

    .chat-box-left::-webkit-scrollbar {
        width: 7px;
        height: 7px;
        width: 7px;
    }


    .chat-box-left::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 7px;
        height: 7px;
        width: 7px;
    }


    .chat-box-left::-webkit-scrollbar-thumb {
        background: #E37048;
        border-radius: 7px;
        height: 7px;
        width: 7px;
    }

    .chat-card {
        display: flex;
        align-items: center;
    }

    .chat-box-left-img img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
        border: 1px solid #E37048;
    }

    .chat-box-left-content h1 {
        font-size: 1rem;
        color: #E37048;
        margin-bottom: 0px;
        white-space: nowrap;
        width: 100px;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .chat-box-left-content p {
        color: #A6A6A6;
        font-size: 0.8rem;
        margin-bottom: 0px;
    }

    .chat-box-left-content p:nth-of-type(1) {
        white-space: nowrap;
        width: 100px;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    /* right */


    .chat-box-right-header {
        border-bottom: 1px solid #EAEAEA;
        display: flex;
        justify-content: space-between;
    }

    .chat-box-right-header button {
        background: transparent;
        border: none;
        outline: none;
        box-shadow: none;
    }

    .chat-box-right-header button i {
        color: #E37048;
    }

    .chat-box-right-header h1 {
        color: #E37048;
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 0px;
    }

    .chat-box-right {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        width: 80%;
    }

    .chat-box-right-body {
        overflow-y: scroll;
        height: 100%;
    }

    .recevier-card {
        width: 70%;
        position: relative;
    }

    .recevier-card p {
        font-size: 0.8rem;
        margin-bottom: 0px;
        width: fit-content;
        background: #F2F2F2;
        color: #393939;
        margin-top: 10px;
        margin-bottom: 10px;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        border-bottom-right-radius: 15px;
        padding: 15px 20px;
        /* width: 50%; */
    }

    .recevier-card img {
        position: absolute;
        width: 35px;
        height: 35px;
        border-radius: 50%;
        border: 1px solid #E37048;
        bottom: 0;
        left: -40px;
        object-fit: cover;
    }

    /* sender */
    .sender-card {
        width: 70%;
        position: relative;
        margin-bottom: 1.7rem !important;
    }

    .sender-card p {
        font-size: 0.8rem;
        margin-bottom: 0px;
        width: fit-content;
        background: #E37048;
        color: white;
        margin-top: 10px;
        margin-bottom: 10px;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        border-bottom-left-radius: 15px;
        padding: 15px 20px;
        margin-left: auto;
        /* width: 50%; */
    }

    .sender-card img {
        position: absolute;
        width: 35px;
        height: 35px;
        object-fit: cover;
        border-radius: 50%;
        border: 1px solid #E37048;
        bottom: 0;
        right: -40px;
    }

    .sender-card span {
        position: absolute;
        bottom: -22px;
        right: 10px;
        color: #c4c4c4;
        font-size: 0.8rem;
    }

    .chat-box-right-footer button {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        position: relative;
        background: #E37048;
        border: none !important;
        outline: none !important;
        box-shadow: none !important;
    }

    .chat-box-right-footer button i {
        position: absolute;
        top: 50%;
        left: 50%;
        color: white;
        transform: translate(-50%, -50%);
    }

    .chat-box-right-footer input {
        background: #FFFFFF;
        border: 1px solid #EAEAEA !important;
        border-radius: 10px;
        height: 40px;
        outline: none !important;
        box-shadow: none !important;
        width: 100% !important;
    }

    .chat-box-right-footer {
        border-top: 1px solid #EAEAEA;
    }

    .chat-box-right-footer form {
        justify-content: center;
    }

    .chat-box-right-footer form>div {
        width: 80%;
        max-width: 600px;
    }

    .chat-box-right-header button {
        display: none;
    }


    @media screen and (max-width:767px) {
        .chat-box-right-footer input {
            width: 95% !important;
        }

        .chat-box-right-header button {
            display: block;
        }

        .chat-box-right {
            display: none;
            width: 100%;
        }

        .chat-box-right-block {
            display: block;
        }

        .chat-box-right-none {
            display: none;
        }

        .chat-box-left {
            width: 100% !important;
        }

        .chat-box-right-none {
            display: none;
        }

        .chat-box-right-block {
            display: block;
        }

        .height-add {
            height: 90vh;
        }

        .height-adds {
            height: 50vh;
        }

        .height-addss {
            height: 65vh;
        }


    }

    .chat-box-right-body::-webkit-scrollbar-thumb {
        background: #E37048;
        border-radius: 7px;
        height: 7px;
        width: 7px;
    }

    .chat-box-right-body::-webkit-scrollbar {
        width: 7px;
        height: 7px;
        width: 7px;
    }


    .chat-box-right-body::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 7px;
        height: 7px;
        width: 7px;
    }


    .chat-box-right-body::-webkit-scrollbar-thumb {
        background: #E37048;
        border-radius: 7px;
        height: 7px;
        width: 7px;
    }
</style>
@section('content')
@include('includes.trainerSide.navbar')

<div class="content-wrapper">
    <div class="container-fluid py-1">
        <!-- <div class="dashboard-header-left pb-2">
            <h1>Messages</h1>
        </div> -->
        <div class="chat-area">
            <div class="col chat-area-header py-3 ">
                <h1>Messages</h1>

            </div>
            <div class="chat-box">
                <div class="chat-box-left p-2">
                    <div class="chat-card my-3">
                        <div class="chat-box-left-img">
                            <img src="{{asset('public/assets/images/sessionthree.jpg')}}" alt="image">
                        </div>
                        <div class="chat-box-left-content pl-2">
                            <h1>Monday Yoga </h1>
                            <div class="chat-box-left-content-inner d-flex">
                                <p>Book Hockey stadium</p>
                                <p>6:53Pm</p>
                                <i class="fa fa-repeat ml-4" aria-hidden="true"></i>

                            </div>

                        </div>
                    </div>
                    <div class="chat-card my-3">
                        <div class="chat-box-left-img">
                            <img src="{{asset('public/assets/images/sessionthree.jpg')}}" alt="image">
                        </div>
                        <div class="chat-box-left-content pl-2">
                            <h1>Sunday therapy</h1>
                            <div class="chat-box-left-content-inner d-flex">
                                <p>Book Hockey stadium</p>
                                <p>6:53Pm</p>
                                <i class="fa fa-stop-circle ml-4" aria-hidden="true"></i>

                            </div>

                        </div>
                    </div>
                    <div class="chat-card my-3">
                        <div class="chat-box-left-img">
                            <img src="{{asset('public/assets/images/sessionthree.jpg')}}" alt="image">
                        </div>
                        <div class="chat-box-left-content pl-2">
                            <h1>Monday Yoga </h1>
                            <div class="chat-box-left-content-inner d-flex">
                                <p>Book Hockey stadium</p>
                                <p>6:53Pm</p>
                                <i class="fa fa-repeat ml-4" aria-hidden="true"></i>

                            </div>

                        </div>
                    </div>
                    <div class="chat-card my-3">
                        <div class="chat-box-left-img">
                            <img src="{{asset('public/assets/images/sessionthree.jpg')}}" alt="image">
                        </div>
                        <div class="chat-box-left-content pl-2">
                            <h1>Sunday therapy </h1>
                            <div class="chat-box-left-content-inner d-flex">
                                <p>Book Hockey stadium</p>
                                <p>6:53Pm</p>
                                <i class="fa fa-stop-circle ml-4" aria-hidden="true"></i>

                            </div>

                        </div>
                    </div>
                    <div class="chat-card my-3">
                        <div class="chat-box-left-img">
                            <img src="{{asset('public/assets/images/sessionthree.jpg')}}" alt="image">
                        </div>
                        <div class="chat-box-left-content pl-2">
                            <h1>Monday Yoga </h1>
                            <div class="chat-box-left-content-inner d-flex">
                                <p>Book Hockey stadium</p>
                                <p>6:53Pm</p>
                                <i class="fa fa-stop-circle ml-4" aria-hidden="true"></i>

                            </div>

                        </div>
                    </div>
                    <div class="chat-card my-3">
                        <div class="chat-box-left-img">
                            <img src="{{asset('public/assets/images/sessionthree.jpg')}}" alt="image">
                        </div>
                        <div class="chat-box-left-content pl-2">
                            <h1>Sunday therapy </h1>
                            <div class="chat-box-left-content-inner d-flex">
                                <p>Book Hockey stadium</p>
                                <p>6:53Pm</p>
                                <i class="fa fa-repeat ml-4" aria-hidden="true"></i>

                            </div>

                        </div>
                    </div>
                    <div class="chat-card my-3">
                        <div class="chat-box-left-img">
                            <img src="{{asset('public/assets/images/sessionthree.jpg')}}" alt="image">
                        </div>
                        <div class="chat-box-left-content pl-2">
                            <h1>Monday Yoga </h1>
                            <div class="chat-box-left-content-inner d-flex">
                                <p>Book Hockey stadium</p>
                                <p>6:53Pm</p>
                                <i class="fa fa-stop-circle ml-4" aria-hidden="true"></i>

                            </div>

                        </div>
                    </div>
                    <div class="chat-card my-3">
                        <div class="chat-box-left-img">
                            <img src="{{asset('public/assets/images/sessionthree.jpg')}}" alt="image">
                        </div>
                        <div class="chat-box-left-content pl-2">
                            <h1>Sunday therapy </h1>
                            <div class="chat-box-left-content-inner d-flex">
                                <p>Book Hockey stadium</p>
                                <p>6:53Pm</p>
                                <i class="fa fa-stop-circle ml-4" aria-hidden="true"></i>

                            </div>

                        </div>
                    </div>
                    <div class="chat-card my-3">
                        <div class="chat-box-left-img">
                            <img src="{{asset('public/assets/images/sessionthree.jpg')}}" alt="image">
                        </div>
                        <div class="chat-box-left-content pl-2">
                            <h1>Monday Yoga </h1>
                            <div class="chat-box-left-content-inner d-flex">
                                <p>Book Hockey stadium</p>
                                <p>6:53Pm</p>
                                <i class="fa fa-stop-circle ml-4" aria-hidden="true"></i>

                            </div>

                        </div>
                    </div>
                    <div class="chat-card my-3">
                        <div class="chat-box-left-img">
                            <img src="{{asset('public/assets/images/sessionthree.jpg')}}" alt="image">
                        </div>
                        <div class="chat-box-left-content pl-2">
                            <h1>Sunday therapy </h1>
                            <div class="chat-box-left-content-inner d-flex">
                                <p>Book Hockey stadium</p>
                                <p>6:53Pm</p>
                                <i class="fa fa-stop-circle ml-4" aria-hidden="true"></i>

                            </div>

                        </div>
                    </div>
                    <div class="chat-card my-3">
                        <div class="chat-box-left-img">
                            <img src="{{asset('public/assets/images/sessionthree.jpg')}}" alt="image">
                        </div>
                        <div class="chat-box-left-content pl-2">
                            <h1>Sunday therapy </h1>
                            <div class="chat-box-left-content-inner d-flex">
                                <p>Book Hockey stadium</p>
                                <p>6:53Pm</p>
                                <i class="fa fa-stop-circle ml-4" aria-hidden="true"></i>

                            </div>

                        </div>
                    </div>
                    <div class="chat-card my-3">
                        <div class="chat-box-left-img">
                            <img src="{{asset('public/assets/images/sessionthree.jpg')}}" alt="image">
                        </div>
                        <div class="chat-box-left-content pl-2">
                            <h1>Monday Yoga </h1>
                            <div class="chat-box-left-content-inner d-flex">
                                <p>Book Hockey stadium</p>
                                <p>6:53Pm</p>
                                <i class="fa fa-stop-circle ml-4" aria-hidden="true"></i>

                            </div>

                        </div>
                    </div>
                    <div class="chat-card my-3">
                        <div class="chat-box-left-img">
                            <img src="{{asset('public/assets/images/sessionthree.jpg')}}" alt="image">
                        </div>
                        <div class="chat-box-left-content pl-2">
                            <h1>Sunday therapy </h1>
                            <div class="chat-box-left-content-inner d-flex">
                                <p>Book Hockey stadium</p>
                                <p>6:53Pm</p>
                                <i class="fa fa-stop-circle ml-4" aria-hidden="true"></i>

                            </div>

                        </div>
                    </div>
                    <div class="chat-card my-3">
                        <div class="chat-box-left-img">
                            <img src="{{asset('public/assets/images/sessionthree.jpg')}}" alt="image">
                        </div>
                        <div class="chat-box-left-content pl-2">
                            <h1>Monday Yoga </h1>
                            <div class="chat-box-left-content-inner d-flex">
                                <p>Book Hockey stadium</p>
                                <p>6:53Pm</p>
                                <i class="fa fa-stop-circle ml-4" aria-hidden="true"></i>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="chat-box-right ">
                    <div class="chat-box-right-header px-3 py-2">
                        <h1>Monday Yoga</h1>
                        <button id="chat-screen"><i class="fa fa-times" aria-hidden="true"></i></button>
                    </div>
                    <div class="chat-box-right-body px-5">
                        <div class="recevier-card my-2">
                            <p>Lorem ipsum is a placeholder text commonly used to demonstrate

                            </p>
                            <p>Lorem ipsum is a placeholder text commonly used to demonstrate Lorem ipsum is a placeholder text commonly used to demonstrate

                            </p>
                            <img src="{{asset('public/assets/images/sessionthree.jpg')}}" alt="image">
                        </div>
                        <div class="sender-card ml-auto my-2">
                            <p>Lorem ipsum is a placeholder text commonly used to demonstrate

                            </p>
                            <p>Lorem ipsum is a placeholder text commonly used to demonstrate
                                Lorem ipsum is a placeholder text commonly used to demonstrate
                            </p>
                            <p>Lorem ipsum is a placeholder text commonly used to demonstrate
                                Lorem ipsum is a placeholder text commonly used to demonstrate
                            </p>
                            <p>Lorem ipsum is a placeholder text commonly used to demonstrate

                            </p>
                            <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="image">
                            <span>Seen by... 6:53 Pm</span>
                        </div>
                        <div class="recevier-card my-2">
                            <p>Lorem ipsum is a placeholder text commonly used to demonstrate

                            </p>
                            <p>Lorem ipsum is a placeholder text commonly used to demonstrate Lorem ipsum is a placeholder text commonly used to demonstrate

                            </p>
                            <img src="{{asset('public/assets/images/sessionthree.jpg')}}" alt="image">
                        </div>
                        <div class="sender-card ml-auto my-2">
                            <p>Lorem ipsum is a placeholder text commonly used to demonstrate

                            </p>
                            <p>Lorem ipsum is a placeholder text commonly used to demonstrate
                                Lorem ipsum is a placeholder text commonly used to demonstrate
                            </p>
                            <p>Lorem ipsum is a placeholder text commonly used to demonstrate
                                Lorem ipsum is a placeholder text commonly used to demonstrate
                            </p>
                            <p>Lorem ipsum is a placeholder text commonly used to demonstrate

                            </p>
                            <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="image">
                            <span>Seen by... 6:53 Pm</span>
                        </div>
                        <div class="recevier-card my-2">
                            <p>Lorem ipsum is a placeholder text commonly used to demonstrate

                            </p>
                            <p>Lorem ipsum is a placeholder text commonly used to demonstrate Lorem ipsum is a placeholder text commonly used to demonstrate

                            </p>
                            <img src="{{asset('public/assets/images/sessionthree.jpg')}}" alt="image">
                        </div>
                        <div class="sender-card ml-auto my-2">
                            <p>Lorem ipsum is a placeholder text commonly used to demonstrate

                            </p>
                            <p>Lorem ipsum is a placeholder text commonly used to demonstrate
                                Lorem ipsum is a placeholder text commonly used to demonstrate
                            </p>
                            <p>Lorem ipsum is a placeholder text commonly used to demonstrate
                                Lorem ipsum is a placeholder text commonly used to demonstrate
                            </p>
                            <p>Lorem ipsum is a placeholder text commonly used to demonstrate

                            </p>
                            <img src="{{asset('public/assets/images/sessionfive.jpg')}}" alt="image">
                            <span>Seen by... 6:53 Pm</span>
                        </div>
                    </div>
                    <div class="chat-box-right-footer pt-3 pb-1">
                        <form class="form-inline">
                            <div class="form-group mx-sm-3 mb-2">
                                <input type="text" class="form-control" id="message" placeholder="Type here">
                            </div>
                            <button type="submit" class="btn btn-primary mb-2"><i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
@section('insertsfooter')
<script>
    $('.chat-card').click(function() {
        $('.chat-box-left').removeClass('chat-box-right-block');
        $('.chat-box-left').addClass('chat-box-right-none');
        $('.chat-box-right').addClass('chat-box-right-block');
        $('.chat-area').addClass('height-add');
        $('.chat-box').addClass('height-adds');
        $('.chat-box').removeClass('height-addss');
    });
    $('#chat-screen').click(function() {
        $('.chat-box-right').addClass('chat-box-right-none');
        $('.chat-box-right').removeClass('chat-box-right-block');
        $('.chat-box-left').addClass('chat-box-right-block');
        $('.chat-area').addClass('height-add');
        $('.chat-box').addClass('height-addss');
    });
    const $window = $(window);
    $window.on('resize', () => {
        // if ($window.width() > 767) {
        //     $('.chat-box-right').css('display', 'block');
        // }
    })
</script>
<script>
    $('.sidenav .nav-item:nth-of-type(5)').addClass('active')
</script>
@endsection