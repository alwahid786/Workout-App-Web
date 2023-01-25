@foreach($trainerDetails as $trainerDetail)
<div class="categories-card p-3">
    <div class="card-img-section ">
        <img src="{{asset('public/assets/images/sessioneight.jpg')}}" alt="">
        <?php $price = 0;
        foreach ($trainerDetail['class_session'] as $session) {
            $price += $session['price'];
        } ?>
        <p>{{$price}}</p>
    </div>
    <div class="categories-card-heading py-3">
        <div class="heading-left-section">
            <p>{{$trainerDetail['trainer']['state']}} {{$trainerDetail['trainer']['country']}}o</p>
            <h1>{{$trainerDetail['trainer']['name']}}</h1>
            <p>{{$category}} Sepcialist</p>
        </div>
        <div class="rating-stars pb-5">
            <i class="fa fa-star " aria-hidden="true"></i>
            <i class="fa fa-star " aria-hidden="true"></i>
            <i class="fa fa-star " aria-hidden="true"></i>
            <i class="fa fa-star " aria-hidden="true"></i>
            <i class="fa fa-star " aria-hidden="true"></i>
        </div>
    </div>
    <div class="categories-card-text">
        <p>{{$trainerDetail['trainer']['about']}} </p>
    </div>
    <?php
    foreach ($trainerDetail['class_session'] as $session) {
        // $price += $session['price'];
        $a = new DateTime(($session['start_time']));
        $b = new DateTime($session['end_time']);
        $interval = $a->diff($b);

        $hour = $interval->format("%H:%I");
    }

    ?>
    <div class="categories-card-exp">
        <p class="text-center">Available 4 hrs/day</p>
        <p class="text-center">5+ Years Experience</p>
    </div>
    <div class="text-center my-4">
        <a class="categories-card-btn" href="{{url('/dashboard/trainer-detail/'.$trainerDetail['trainer']['id'])}}">View Detail</a>
    </div>
</div>
@endforeach