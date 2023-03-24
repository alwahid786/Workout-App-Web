@extends('layouts.userdashboard.default')
@section('content')
@include('includes.userdashboard.navbar')
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
                    @if($chat_lists != null)
                    @foreach($chat_lists as $chat_list)
                    <div class="chat-card my-3 message_box " data-id="{{$chat_list['id']}}">
                        <div class=" chat-box-left-img">
                            <img src="{{asset('public/assets/images/session-one.jpg')}}" alt="image">
                        </div>
                        <div class="chat-box-left-content pl-2">
                            <h1>{{$chat_list['session']['category']['title']}}</h1>
                            <div class="chat-box-left-content-inner d-flex">
                                <p>Book Hockey stadium</p>
                                <p>6:53Pm</p>
                            </div>

                        </div>
                    </div>
                    @endforeach
                    @else
                    @endif


                </div>

                <div class="chat-box-right ">
                    <div class="chat-box-right-header px-3 py-2">
                        <h1>John Smith</h1>
                        <button id="chat-screen"><i class="fa fa-times" aria-hidden="true"></i></button>
                    </div>

                    <div id="chatList" class="chat-box-right-body px-5">
                        @if($chatView!=null)
                        <?= $chatView['chatView']; ?>
                        @endif




                        <!-- <div class="recevier-card my-2">
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
                        </div> -->
                    </div>
                    <div class="chat-box-right-footer pt-3 pb-1">
                        <form class="form-inline">
                            <input type="hidden" id="chat_id" name="chat_id">
                            <div class="form-group mx-sm-3 mb-2">
                                <input type="text" class="form-control" id="text" placeholder="Type here">
                            </div>
                            <button type="submit" class="btn btn-primary mb-2" id="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i>
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

    $(document).ready(function() {

        $(".message_box").click(function(e) {


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            e.preventDefault();
            var id = $(this).attr('data-id');
            $("#chat_id").val(id);


            var type = "POST";
            var url = "{{ route('user.message', ':id') }}";
            url = url.replace(':id', id);

            // alert(url)
            $.ajax({
                type: type,
                url: url,

                dataType: 'json',
                success: function(data) {
                    // console.log(data.chatView);
                    $("#chatList").html(data.chatView);

                },
                error: function(data) {
                    alert('hi');
                    console.log(data);
                }
            });




        });
        $("#submit").click(function(e) {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            e.preventDefault();
            var chat_id = $('#chat_id').val();
            var text = $('#text').val();

            // alert(chat_id);
            var type = "POST";
            var url = "{{ route('user.send_message') }}";


            // alert(url)
            $.ajax({
                type: type,
                url: url,
                data: {

                    chat_id: chat_id,
                    text: text,
                },
                cache: false,
                dataType: 'json',
                success: function(data) {
                    console.log(data);


                },
                error: function(data) {
                    alert('hi');
                    // console.log(data);
                }
            });
        });
    });
</script>
<script>
    $('.sidenav .nav-item:nth-of-type(7)').addClass('active')
</script>
@endsection