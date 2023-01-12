@extends('layouts.default')
<link rel="stylesheet" href="{{asset('public/assets/css/soon.css')}}">
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-7 my-5">
            <div class="workit-left-header pb-3">
                <img src="{{asset('public/assets/images/logo-two.svg')}}" alt="image">
            </div>
            <div class="workit-left-content text-center mt-5 pt-5">
                <h1>COMING SOON</h1>
                <h3>“The <span>personal training</span> you deserve” </h3>
            </div>
        </div>
        <div class="col-lg-5 my-5 pl-4">
            <div class="workit-right-header text-center">
                <h1>Leave us your basic information below so
                    we’ll let you know when we’re ready</h1>
            </div>
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif
            @if(session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
            @endif

            <form method="post" action="{{route('contactUs')}}">
                @csrf
                <div class="col-12 px-0">
                    <div class="form-group form-field">
                        <label for="first-name">First Name</label>
                        <input type="text" class="form-control" value="{{old('first_name')}}" id="first-name" name="first_name" aria-describedby="emailHelp" placeholder="Type here">
                    </div>
                </div>
                <div class="col-12 px-0">
                    <div class="form-group form-field">
                        <label for="last-name">Last Name</label>
                        <input type="text" class="form-control" id="last-name" aria-describedby="emailHelp" name="last_name" value="{{old('last_name')}}" placeholder="Type here">
                    </div>
                </div>
                <div class="col-12 px-0">
                    <div class="form-group form-field">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="{{old('email')}}" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Type here">
                    </div>
                </div>
                <div class="col-12 px-0">
                    <div class="form-group form-field">
                        <label for="description">About Yourself</label>
                        <textarea class="form-control" name="body" id="description" rows="5" placeholder="Type here">{{old('body')}}</textarea>
                    </div>
                </div>

                <div class="col-12 px-0 form-field mt-5">
                    <button type="submit" class="form-control">Send</button>
                </div>


            </form>
        </div>
    </div>
</div>
@endsection
@section('insertfooter')
@endsection