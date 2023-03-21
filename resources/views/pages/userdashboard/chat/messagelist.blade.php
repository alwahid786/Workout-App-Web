@foreach($chatDetails as $chatDetail)
<div class="recevier-card my-2">

    <p>{{$chatDetail['text']}} </p>
    <img src="{{asset('public/assets/images/sessionthree.jpg')}}" alt="image">
   
</div>
@endforeach
