@if(count($trainerDetails)>0)
<div class="row" style="margin-bottom:60px">
    <div class="col-md-4 offset-md-8 d-flex align-items-center justify-content-end search-section">
        <input type="search" name="search" id="searchBox" class="w-75 py-2 px-2 mr-1" placeholder="Search" autocomplete="off">
        <input type="hidden" name="category_id" id="catId" value="{{$trainerDetails[0]['category_id']}}">
        <button type="button" class="px-3 py-2 w-25" id="searchBtn">Search</button>
    </div>
</div>
<div class="categories-grid-section pb-3">
    @foreach($trainerDetails as $trainerDetail)
    <div class="categories-card p-3">
        <div class="card-img-section ">
            <img src="{{$trainerDetail['trainer']['profile_img']}}" alt="">
            <?php $price = 0;
            foreach ($trainerDetail['class_session'] as $session) {
                $price += $session['price'];
            } ?>
            <p>{{$price}}</p>
        </div>
        <div class="categories-card-heading py-3">
            <div class="heading-left-section">
                <p>{{$trainerDetail['trainer']['state']}} {{$trainerDetail['trainer']['country']}}</p>
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
        <!-- <div class="categories-card-exp">
            <p class="text-center">Available 4 hrs/day</p>
            <p class="text-center">5+ Years Experience</p>
        </div> -->
        <div class="text-center my-4">
            <a class="categories-card-btn" href="{{url('/dashboard/trainer-detail/'.$trainerDetail['trainer']['id'])}}">View Detail</a>
        </div>
    </div>
    @endforeach
</div>
@endif