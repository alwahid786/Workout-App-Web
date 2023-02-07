@extends('layouts.trainerSide.default')
<link rel="stylesheet" href="{{asset('public/assets/trainercss/calendar.css')}}">
<style>
.fc-event-title-container{
    background-color: #E37048;
    border:  1px solid #E37048 !important;
}
.fc-event-title{
    color: #ffff;
}
.fc-daygrid-event-harness .fc-event-draggable{
    background-color: #E37048;
}
.fc-daygrid-event-harness .fc-event-draggable:hover{
    background-color: #E37048;
}
.fc-daygrid-event-harness .fc-event-draggable .fc-daygrid-event-dot{
    display: none;
}
.fc-daygrid-event-harness .fc-event-draggable .fc-event-time{
    color: #fff;
}
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

            },
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listWeek'
            },
            defaultDate: '2023-02-07',
            navLinks: true,
            editable: true,
            eventLimit: true,
            dragScroll: true,
            // dayPopoverFormat: 'LL',
            // startParam: 'start',
            // endParam: 'end',
            // timeZoneParam: 'timeZone',
            // timeZone: 'local',
            // locales: [],
            // locale: '',
            events: [{
                    title: 'All Day Event',
                    start: '2023-02-02',
                },
                {
                    title: 'Yoga',
                    start: '2023-02-03',

                },
                {
                    id: 999,
                    title: 'Stretching',
                    start: '2023-02-04T16:00:00'
                },
                {
                    id: 999,
                    title: 'Yoga',
                    start: '2023-02-04T16:00:00'
                },
                {
                    groupId: '999',
                    title: 'Repeating Event',
                    start: '2020-02-09T16:00:00'
                } ,{
                    title: 'Running',
                    start: '2023-02-07',

                },
                {
                    title: 'Gym',
                    start: '2023-02-10T10:30:00',
                    end: '2023-02-12T12:30:00'
                },
                {
                    title: 'Lunch',
                    start: '2023-02-15T12:00:00'
                },
                {
                    title: 'Gym',
                    start: '2023-02-19T14:30:00'
                },
                {
                    title: 'Yoga',
                    start: '2023-02-18T17:30:00'
                },
                {
                    title: 'Yoga',
                    start: '2023-02-26T20:00:00'
                },
                {
                    title: 'Yoga',
                    start: '2023-02-22T07:00:00'
                },
                {
                    title: 'Click for Google',
                    url: 'http://google.com/',
                    start: '2023-02-22'
                }
            ]

        });



        calendar.render();
    });
</script>
@endsection