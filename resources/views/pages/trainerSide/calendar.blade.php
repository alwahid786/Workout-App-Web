@extends('layouts.trainerSide.default')
<link rel="stylesheet" href="{{asset('public/assets/trainercss/calendar.css')}}">
<style>
    body{
        background-color: #f4f6fa !important;
    }
    #calendar{
    height: 70vh;
}
.fc .fc-toolbar{
    justify-content: start !important;
}
.fc-today-button{
    margin: 0 1rem !important;
    background: #ffff !important;
    color: #E37048 !important;
    border: none !important;
    box-shadow: 3px 4px 13px rgba(0, 0, 0, 0.12) !important;
    border-radius: 5px !important;
    padding: 7px 25px !important;
    text-transform: capitalize !important;
    outline: none !important;
    /* box-shadow: none !important; */

}
.fc-prev-button{
    border: 1px solid #E37048 !important;
    background: #ffff !important;
    color: #E37048 !important;
    margin-right: 10px !important;
    border-radius: 6px !important;
    padding: 10px 6px !important;
    outline: none !important;
    box-shadow: none !important;
}
.fc-next-button{
    border: 1px solid #E37048 !important;
    background: #ffff !important;
    color: #E37048 !important;
    margin-left: 10px !important;
    border-radius: 6px !important;
    padding: 10px 6px !important;
    outline: none !important;
    box-shadow: none !important;
}
.fc-col-header-cell .fc-scrollgrid-sync-inner a {
    color: #E37048 !important;
}
.fc-daygrid-day-number{
    color: black !important;
    position: absolute !important;
    left: 0 !important;
    font-weight: bold !important;

}
@media (min-width: 992px) {

    .content-wrapper {
        margin-left: 220px;
        margin-top: 90px;
    }

}

@media screen and (max-width:576px) {
    .fc .fc-toolbar{
        flex-direction: column;
    }
    .fc-toolbar-title{
        font-size: 1.5rem !important;
    }
}
    .calendar-container{
        background-color: #fff;
        border-radius: 8px;
    }
    .fc-event-title-container {
        background-color: #E37048;
        border: 1px solid #E37048 !important;
    }

    .fc-event-title {
        color: #ffff;
    }

    .fc-daygrid-event-harness .fc-event-draggable {
        background-color: #E37048;
    }

    .fc-daygrid-event-harness .fc-event-draggable:hover {
        background-color: #E37048;
    }

    .fc-daygrid-event-harness .fc-event-draggable .fc-daygrid-event-dot {
        display: none;
    }

    .fc-daygrid-event-harness .fc-event-draggable .fc-event-time {
        color: #fff;
    }
</style>
@section('content')
@include('includes.trainerSide.navbar')
<div class="content-wrapper px-2 py-3">
    <div class="container-fluid  calendar-container py-4">
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
            // eventDisplay: 'auto',
            // defaultRangeSeparator: ' - ',
            // titleRangeSeparator: ' \u2013 ',
            // defaultTimedEventDuration: '01:00:00',
            // defaultAllDayEventDuration: {
            //     day: 1
            // },
            // forceEventDuration: false,
            // nextDayThreshold: '00:00:00',
            // dayHeaders: true,
            // initialView: '',
            // aspectRatio: 1.35,
            // headerToolbar: {
            //     start: 'title',
            //     center: '',
            //     end: 'today prev,next'
            // },
            // weekends: true,
            // weekNumbers: false,
            // weekNumberCalculation: 'local',
            // editable: false,
            // nowIndicator: false,
            // scrollTime: '06:00:00',
            // slotMinTime: '00:00:00',
            // slotMaxTime: '24:00:00',
            // showNonCurrentDates: true,
            // lazyFetching: true,
            // startParam: 'start',
            // endParam: 'end',
            // timeZoneParam: 'timeZone',
            // timeZone: 'local',
            // locales: [],
            // locale: '',
            // themeSystem: 'standard',
            // dragRevertDuration: 500,
            // dragScroll : true,
            // allDayMaintainDuration: false,
            // unselectAuto: true,
            // dropAccept: '*',
            // eventOrder: 'start,-duration,allDay,title',
            // dayPopoverFormat: {
            //     month: 'long',
            //     day: 'numeric',
            //     year: 'numeric'
            // },
            // handleWindowResize: true,
            // windowResizeDelay: 100,
            // longPressDelay: 1000,
            // eventDragMinDistance: 5,
            // expandRows: false,
            // navLinks: false,
            // selectable: false,
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
                }, {
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