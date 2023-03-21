@foreach($chatDetails as $chatDetail)

<div class="recevier-card my-2">

    <p>{{$chatDetail['text']}} </p>
    <img src="{{asset('public/assets/images/sessionthree.jpg')}}" alt="image">

</div>

@endforeach
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