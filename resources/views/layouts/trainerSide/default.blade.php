<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{asset('public/assets/images/dumbbell.png')}}">

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>WORKITPT</title>
    @include('includes.trainerSide.header')
</head>

<body>
    @yield('content')
    @include('includes.trainerSide.footer')
    @yield('insertsfooter')
</body>

</html>