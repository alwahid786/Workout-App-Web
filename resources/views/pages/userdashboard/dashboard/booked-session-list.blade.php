@foreach($booksession_detail as $bookedsession)
@if(!empty($bookedsession['session']['class']['category']))
<div class="col-lg-6 my-2">
    <div class="class-left-banner px-2 py-3">
        <img class="class-banner-img" src="{{$bookedsession['session']['session_image'][0]['image']}}" alt="">
        <div class="class-banner-content pt-3">
            <h1>{{$bookedsession['session']['class']['category']['title']}}</h1>
            <div class="class-banner-content-right">
                <h1>${{$bookedsession['session']['price']}}</h1>
                <div class="class-banner-content-right-time">
                    <img class="pr-2" src="{{asset('public/assets/images/clock.svg')}}" alt="">
                    <?php

                    $a = new DateTime(($bookedsession['session']['start_time']));
                    $b = new DateTime($bookedsession['session']['end_time']);
                    $interval = $a->diff($b);

                    $hour = $interval->format("%H:%I");

                    ?>
                    <p>{{$hour}}</p>
                </div>
            </div>
        </div>
        <div class="session-card-content">
            <div class="session-profile-left py-2">
                <img src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                <p class="pl-3">{{$bookedsession['session']['class']['trainer']['name']}} </p>
            </div>
            <div class="session-anchor-right">
                <a href="{{url('/userdashboard/sessionone/'.$bookedsession['id'])}}">View</a>
            </div>
        </div>
    </div>
</div>
@endif
@endforeach