<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>WORKITPT</title>


    @include('includes.website.header')

</head>

<body>
    <div class="loaderDiv">
        <!-- <img src="{{asset('public/assets/images/loader.svg')}}" alt=""> -->
    </div>
    @yield('content')

    @include('includes.website.footer')
    @yield('insertfooter')

</body>

</html>