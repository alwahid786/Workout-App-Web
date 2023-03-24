
@foreach($chatDetails as $chatDetail)
@if($chatDetail['sender_id']!=auth()->user()->id)


    <div class="recevier-card my-2">

        <p>{{$chatDetail['text']}} </p>
        <img src="{{asset('public/assets/images/sessionthree.jpg')}}" alt="image">

    </div>
    @else

    <div class="sender-card ml-auto my-2">
        <p>{{$chatDetail['text']}}
            <img src="{{asset('public/assets/images/sessionthree.jpg')}}" alt="image">

        </p>

    </div>

@endif
@endforeach