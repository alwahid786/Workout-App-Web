@extends('layouts.trainerSide.default')
<link rel="stylesheet" href="{{asset('public/assets/trainercss/calendar.css')}}">
<style>

</style>
@section('content')
@include('includes.trainerSide.navbar')
<div class="content-wrapper px-2 py-3">
    <div class="container-fluid ">
        <div id="calendar"></div>
    </div>
</div>

@endsection
@section('insertsfooter')
<script src="{{ asset('public/assets/js/index.global.min.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        let draggableEl = document.getElementById('mydraggable');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            views: {
                headerToolbar: {
                    left: 'prev',
                    center: 'title',
                    right: 'next' // user can switch between the two
                }
                // other view-specific options here

            }
        });

        calendar.render();
    });
</script>
@endsection