@extends('layouts.userdashboard.default')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.1/flexslider.css">
<link rel="stylesheet" href="{{asset('public/assets/css/nice-select.css')}}">
<script src="{{asset('public/assets/fullcalendar/dist/index.global.min.js')}}"></script>

<style>
    .fc-theme-standard th {
        border: none;
    }

    .fc-theme-standard {
        border: none !important;
    }

    .fc .fc-button-primary:disabled {
        display: none;
    }

    .fc-theme-standard {
        position: relative !important;
    }

    .fc-direction-ltr .fc-button-group>.fc-button:not(:last-child) {
        border-bottom-right-radius: 0;
        border-top-right-radius: 0;
        /* position: absolute; */
        /* left: -320px; */
    }

    .fc .fc-toolbar-title {
        color: #E37048;
        font-size: 1.1rem;
    }

    .fc-today-button {
        display: none !important;
    }

    .fc .fc-button-primary {
        background: none !important;
        color: #000 !important;
        border: none !important;
    }

    .fc .fc-toolbar {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .fc-scrollgrid tbody {
        display: none;
    }

    .fc-col-header {
        border: 1px solid #fff !important;
    }

    .fc-scrollgrid-sync-inner {
        border: none !important;
    }

    .fc table {
        border: none !important;
    }

    .fc-col-header {
        background: #F9F9FB;
        border-radius: 10px;
    }

    .fc-col-header-cell-cushion div:nth-of-type(1) {
        color: #C1C1C1 !important;
        font-weight: 500;
    }

    .fc-col-header-cell-cushion div:nth-of-type(2) {
        font-weight: 600;
        padding: 10px 0;
        color: #000;
    }

    .fc-col-header-cell-cushion:hover {
        text-decoration: none !important;
        cursor: pointer;
    }

    .fc-col-header thead tr th:nth-of-type(4) .fc-scrollgrid-sync-inner .fc-col-header-cell-cushion {
        background: #E37048;
        border-radius: 7px;
        color: #fff !important;
    }

    .fc-col-header thead tr th:nth-of-type(4) .fc-scrollgrid-sync-inner .fc-col-header-cell-cushion div:nth-of-type(1) {
        color: #fff !important;
    }

    .fc-col-header thead tr th:nth-of-type(4) .fc-scrollgrid-sync-inner .fc-col-header-cell-cushion div:nth-of-type(2) {
        color: #fff !important;
    }

    .fc .fc-toolbar.fc-header-toolbar {
        margin-bottom: 0 !important;
    }

    .fc-view-harness {
        height: 0 !important;
    }

    .fc-next-button:active {
        outline: none !important;
        box-shadow: none !important;
    }

    .fc-prev-button:active {
        outline: none !important;
        box-shadow: none !important;
    }

    .fc-next-button:focus {
        outline: none !important;
        box-shadow: none !important;
    }

    .fc-prev-button:focus {
        outline: none !important;
        box-shadow: none !important;
    }

    .content-wrapper-inner {
        background: #ffff;
        border-radius: 7px;
    }

    .session-card-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .session-profile-left {
        display: flex;
        align-items: center;
    }

    .session-profile-left img {
        height: 40px;
        width: 40px;
        border-radius: 50%;
        border: 1px solid #E37048;
        object-fit: cover;
    }

    .session-profile-left p {
        color: #E37048;
        font-size: 1.1rem;
        font-weight: 500;
        letter-spacing: 0.04rem;
        margin-bottom: 0;
    }

    .session-anchor-right a {
        background: #fff;
        padding: 6px 30px;
        border-radius: 30px;
        text-decoration: none;
        color: #E37048;
        border: 1px solid #E37048;
        outline: none;
        text-shadow: none;
    }

    .session-anchor-right a:hover {
        text-decoration: none;
        background: #E37048;
        color: #fff;
        border: 1px solid #E37048;
    }

    .months {
        text-align: center;
    }

    .months h1 {
        font-size: 0.7rem;
        color: #BDBDBD;
        margin-bottom: 0px;
    }

    .month-active h1 {
        color: black !important;
        font-weight: bold;
    }

    .day-number {
        background: rgba(0, 0, 0, 0.1);
        width: 30px;
        height: 30px;
        border-radius: 50%;
        position: relative;
        margin: 0 auto;
    }

    .day-active {
        background: black;
    }

    .day-active h1 {
        color: white !important;
    }

    .day-number h1 {
        font-size: 0.6rem;
        margin-bottom: 0px;
        color: black;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .day-number h2 {
        color: #BDBDBD;
        font-size: 0.6rem;
        margin-bottom: 0px;
        padding-bottom: 2px;
        position: absolute;
        top: 40px;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .day-active h2 {
        border-bottom: 1px solid black !important;
        color: black;
    }

    .filter-menu {
        display: flex;
        flex-wrap: wrap;
    }

    .filter-menu-inner {
        flex: 20%;
    }

    @media screen and (max-width:576px) {
        .filter-menu {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            flex-direction: column;
        }
    }

    .dropbtn-s {
        background-color: #F9F9FB;
        color: black;
        font-weight: 500;
        padding: 5px;
        font-size: 0.9rem;
        height: 65px;
        border: none;
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }

    .dropbtn-s i {
        font-weight: bold;
        font-size: 1rem;
    }

    .dropdown-s {
        position: relative;
        display: inline-block;
        width: 100%;
    }

    .dropdown-content-s {
        display: none;
        position: absolute;
        background-color: #F9F9FB;
        min-width: 100px;
        border: 1px solid gray;
        padding: 5px;
        width: 100%;
        z-index: 1;
    }

    .dropdown-content-s a {
        color: black;
        font-size: 0.8rem;
        text-decoration: none;
        display: block;
    }

    .dropdown-content-s a:hover {
        background-color: #ddd;
    }

    .dropdown-s:hover .dropdown-content-s {
        display: block;
    }

    /* select {
        -webkit-appearance: none;
        -moz-appearance: none;
        text-indent: 1px;
        text-overflow: '';
    } */

    .drop-icon {
        position: relative;
    }

    .drop-icon-parent i {
        position: absolute;
        top: 45%;
        right: 0;
        transform: translate(-50%, -50%);
        font-weight: bold;
        padding-right: 10px;
    }

    .drop-icon-thre i {
        padding-right: 2px !important;
    }

    .drop-icon-parent select {
        padding-left: 10px;
    }

    .class-left-banner {
        background: white;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.04);
        ;
    }

    .filter-menu {
        display: flex;
        flex-wrap: wrap;
    }

    .filter-menu-inner {
        flex: 20%;
    }

    @media screen and (max-width:576px) {
        .filter-menu {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            flex-direction: column;
        }
    }

    .dropbtn-s {
        background-color: #F9F9FB;
        color: black;
        font-weight: 500;
        padding: 5px;
        font-size: 0.9rem;
        height: 65px;
        border: none;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        position: relative;
    }

    .dropbtn-s i {
        position: absolute;
        top: 52%;
        right: -28px;
        transform: translate(-50%, -50%);
        font-weight: bold;
        font-size: 1.1rem;
    }

    .dropdown-s {
        position: relative;
        display: inline-block;
        width: 100%;
    }

    .dropdown-content-s {
        display: none;
        position: absolute;
        background-color: #F9F9FB;
        min-width: 100px;
        border: 1px solid gray;
        padding: 5px;
        width: 100%;
        z-index: 1;
    }

    .dropdown-content-s a {
        color: black;
        font-size: 0.8rem;
        text-decoration: none;
        display: block;
    }

    .dropdown-content-s a:hover {
        background-color: #ddd;
    }

    .dropdown-s:hover .dropdown-content-s {
        display: block;
    }

    /* select {
        -webkit-appearance: none;
        -moz-appearance: none;
        text-indent: 1px;
        text-overflow: '';
    } */

    .drop-icon {
        position: relative;
        cursor: pointer;

    }

    .drop-icon:hover {
        cursor: pointer;
    }

    .drop-icon-parent i {
        position: absolute;
        top: 45%;
        right: 0;
        transform: translate(-50%, -50%);
        font-weight: bold;
        padding-right: 10px;
    }

    .drop-icon-thre i {
        padding-right: 2px !important;
    }

    .drop-icon-parent select {
        padding: 0px 15px;
        cursor: pointer;
    }

    .user-search-box {
        display: block;
    }

    .dashboard-header-left span {
        color: #3F3F3F;
        font-weight: 300;
        font-size: 16px;
    }

    .mbsc-calendar-controls {
        position: relative;
        justify-content: center;
        text-align: center;
    }

    .mbsc-calendar-title-wrapper {
        justify-content: center;
    }

    .mbsc-calendar-title-wrapper button {
        position: relative !important;
    }

    .mbsc-calendar-controls .mbsc-calendar-button-prev {
        position: absolute;
        top: 50%;
        left: 20%;
        transform: translateX(0%) translateY(-50%);
    }

    .mbsc-calendar-controls .mbsc-calendar-button-next {
        position: absolute;
        top: 50%;
        right: 20%;
        transform: translateX(0%) translateY(-50%);
    }

    .mbsc-calendar-controls {
        max-width: 300px;
        margin: 0 auto;
    }

    .mbsc-ios.mbsc-selected .mbsc-calendar-cell-text {
        background: #E37048;
        border: none;
        border-radius: 5px;

    }

    .mbsc-calendar-cell>div:first-of-type {
        visibility: hidden;
    }

    .mbsc-calendar-week-day {
        color: #C1C1C1;
    }

    .mbsc-calendar-table,
    .mbsc-calendar-row,
    .mbsc-calendar-cell {
        background-color: #F9F9FB !important;
        border-radius: 4px;

        padding-bottom: 0px;
    }

    .mbsc-calendar-row,
    .mbsc-calendar-table {
        padding-top: 5px;
    }

    .mbsc-calendar-title {
        color: #E37048;
        font-size: 1rem;
        font-weight: 500 !important;
    }

    .mbsc-button-icon path {
        fill: black;
    }

    .mbsc-icon>svg {
        width: 60%;
    }

    .mbsc-ios.mbsc-datepicker-inline {
        border: none;
    }

    @media screen and (min-width:1200px) {
        .week-calendar {
            margin-top: -10px !important;
        }
    }

    #map {
        height: 500px;
        width: 100%;
        border-radius: 10px;
    }

    @media screen and (max-width:576px) {
        #map {
            height: 350px;
            width: 100%;
            border-radius: 10px;
        }
    }

    .filter-menu {
        display: flex;
        flex-wrap: wrap;
    }

    .filter-menu-inner {
        flex: 20%;
    }

    @media screen and (max-width:576px) {
        .filter-menu {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            flex-direction: column;
        }
    }

    .dropbtn-s {
        background-color: #F9F9FB;
        color: black;
        font-weight: 500;
        padding: 5px;
        font-size: 0.9rem;
        height: 65px;
        border: none;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        position: relative;
    }

    .dropbtn-s i {
        position: absolute;
        top: 52%;
        right: -28px;
        transform: translate(-50%, -50%);
        font-weight: bold;
        font-size: 1.1rem;
    }

    .dropdown-s {
        position: relative;
        display: inline-block;
        width: 100%;
    }

    .dropdown-content-s {
        display: none;
        position: absolute;
        background-color: #F9F9FB;
        min-width: 100px;
        border: 1px solid gray;
        padding: 5px;
        width: 100%;
        z-index: 1;
    }

    .dropdown-content-s a {
        color: black;
        font-size: 0.8rem;
        text-decoration: none;
        display: block;
    }

    .dropdown-content-s a:hover {
        background-color: #ddd;
    }

    .dropdown-s:hover .dropdown-content-s {
        display: block;
    }

    /* select {
        -webkit-appearance: none;
        -moz-appearance: none;
        text-indent: 1px;
        text-overflow: '';
    } */

    .drop-icon {
        position: relative;
        cursor: pointer;

    }

    .drop-icon:hover {
        cursor: pointer;
    }

    .drop-icon-parent i {
        position: absolute;
        top: 45%;
        right: 0;
        transform: translate(-50%, -50%);
        font-weight: bold;
        padding-right: 10px;
    }

    .drop-icon-thre i {
        padding-right: 2px !important;
    }

    .drop-icon-parent select {
        padding: 0px 15px;
        cursor: pointer;
    }

    .user-search-box {
        display: block;
    }

    .dashboard-header-left span {
        color: #3F3F3F;
        font-weight: 300;
        font-size: 16px;
    }

    .mbsc-calendar-controls {
        position: relative;
        justify-content: center;
        text-align: center;
    }

    .mbsc-calendar-title-wrapper {
        justify-content: center;
    }

    .mbsc-calendar-title-wrapper button {
        position: relative !important;
    }

    .mbsc-calendar-controls .mbsc-calendar-button-prev {
        position: absolute;
        top: 50%;
        left: 20%;
        transform: translateX(0%) translateY(-50%);
    }

    .mbsc-calendar-controls .mbsc-calendar-button-next {
        position: absolute;
        top: 50%;
        right: 20%;
        transform: translateX(0%) translateY(-50%);
    }

    .mbsc-calendar-controls {
        max-width: 300px;
        margin: 0 auto;
    }

    .mbsc-ios.mbsc-selected .mbsc-calendar-cell-text {
        background: #E37048;
        border: none;
        border-radius: 5px;

    }

    .mbsc-calendar-cell>div:first-of-type {
        visibility: hidden;
    }

    .mbsc-calendar-week-day {
        color: #C1C1C1;
    }

    .mbsc-calendar-table,
    .mbsc-calendar-row,
    .mbsc-calendar-cell {
        background-color: #F9F9FB !important;
        border-radius: 4px;

        padding-bottom: 0px;
    }

    .mbsc-calendar-row,
    .mbsc-calendar-table {
        padding-top: 5px;
    }

    .mbsc-calendar-title {
        color: #E37048;
        font-size: 1rem;
        font-weight: 500 !important;
    }

    .mbsc-button-icon path {
        fill: black;
    }

    .mbsc-icon>svg {
        width: 60%;
    }

    .mbsc-ios.mbsc-datepicker-inline {
        border: none;
    }

    @media screen and (min-width:1200px) {
        .week-calendar {
            margin-top: -10px !important;
        }
    }

    #map {
        height: 500px;
        width: 100%;
        border-radius: 10px;
    }

    @media screen and (max-width:576px) {
        #map {
            height: 350px;
            width: 100%;
            border-radius: 10px;
        }
    }

    .filter-menu {
        display: flex;
        flex-wrap: wrap;
    }

    .filter-menu-left {
        flex: 20%;
    }

    .filter-menu-right {
        display: flex;
        flex: 80%;
    }

    .filter-menu-inner {
        flex: 20%;
    }

    @media screen and (max-width:576px) {
        .filter-menu {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            flex-direction: column;
        }

        .filter-menu-right {
            display: flex;
            flex-direction: column;
        }

        .range-filter {
            margin-top: 70px;
        }
    }

    .dropbtn-s {
        background-color: #F9F9FB;
        color: black;
        font-weight: 500;
        padding: 5px;
        font-size: 0.9rem;
        height: 65px;
        border: none;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        position: relative;
    }

    .dropbtn-s i {
        position: absolute;
        top: 52%;
        right: -28px;
        transform: translate(-50%, -50%);
        font-weight: bold;
        font-size: 1.1rem;
    }

    .dropdown-s {
        position: relative;
        display: inline-block;
        width: 100%;
    }

    .dropdown-content-s {
        display: none;
        position: absolute;
        background-color: #F9F9FB;
        min-width: 100px;
        border: 1px solid gray;
        padding: 5px;
        width: 100%;
        z-index: 1;
    }

    .dropdown-content-s a {
        color: black;
        font-size: 0.8rem;
        text-decoration: none;
        display: block;
    }

    .dropdown-content-s a:hover {
        background-color: #ddd;
    }

    .dropdown-s:hover .dropdown-content-s {
        display: block;
    }

    /* select {
        -webkit-appearance: none;
        -moz-appearance: none;
        text-indent: 1px;
        text-overflow: '';
    } */

    .drop-icon {
        position: relative;
        cursor: pointer;

    }

    .drop-icon:hover {
        cursor: pointer;
    }

    .drop-icon-parent i {
        position: absolute;
        top: 45%;
        right: 0;
        transform: translate(-50%, -50%);
        font-weight: bold;
        padding-right: 10px;
    }

    .drop-icon-thre i {
        padding-right: 2px !important;
    }

    .drop-icon-parent select {
        padding: 0px 15px;
        cursor: pointer;
    }

    .fc-theme-standard th {
        border: none;
    }

    .fc-theme-standard {
        border: none !important;
    }

    .fc .fc-button-primary:disabled {
        display: none;
    }

    .fc-theme-standard {
        position: relative !important;
    }

    .fc-direction-ltr .fc-button-group>.fc-button:not(:last-child) {
        border-bottom-right-radius: 0;
        border-top-right-radius: 0;
        /* position: absolute; */
        /* left: -320px; */
    }

    .fc .fc-toolbar-title {
        color: #E37048;
        font-size: 1.1rem;
    }

    .fc-today-button {
        display: none !important;
    }

    .fc .fc-button-primary {
        background: none !important;
        color: #000 !important;
        border: none !important;
    }

    .fc .fc-toolbar {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .fc-scrollgrid tbody {
        display: none;
    }

    .fc-col-header {
        border: 1px solid #fff !important;
    }

    .fc-scrollgrid-sync-inner {
        border: none !important;
    }

    .fc table {
        border: none !important;
    }

    .fc-col-header {
        background: #F9F9FB;
        border-radius: 10px;
    }

    .fc-col-header-cell-cushion div:nth-of-type(1) {
        color: #C1C1C1 !important;
        font-weight: 500;
    }

    .fc-col-header-cell-cushion div:nth-of-type(2) {
        font-weight: 600;
        padding: 10px 0;
        color: #000;
    }

    .fc-col-header-cell-cushion:hover {
        text-decoration: none !important;
        cursor: pointer;
    }

    .fc-col-header thead tr th:nth-of-type(4) .fc-scrollgrid-sync-inner .fc-col-header-cell-cushion {
        background: #E37048;
        border-radius: 7px;
        color: #fff !important;
    }

    .fc-col-header thead tr th:nth-of-type(4) .fc-scrollgrid-sync-inner .fc-col-header-cell-cushion div:nth-of-type(1) {
        color: #fff !important;
    }

    .fc-col-header thead tr th:nth-of-type(4) .fc-scrollgrid-sync-inner .fc-col-header-cell-cushion div:nth-of-type(2) {
        color: #fff !important;
    }

    .fc .fc-toolbar.fc-header-toolbar {
        margin-bottom: 0 !important;
    }

    .fc-view-harness {
        height: 0 !important;
    }

    .fc-next-button:active {
        outline: none !important;
        box-shadow: none !important;
    }

    .fc-prev-button:active {
        outline: none !important;
        box-shadow: none !important;
    }

    .fc-next-button:focus {
        outline: none !important;
        box-shadow: none !important;
    }

    .fc-prev-button:focus {
        outline: none !important;
        box-shadow: none !important;
    }

    .input-location input {
        border: none !important;
        width: 100%;
        height: 65px;
        background: #F9F9FB;
        border-radius: 5px;
        padding: 0 5px;
    }

    .input-location input:active {
        border: none !important;
        outline: none !important;
        box-shadow: none !important;
    }

    .input-location input:focus {
        border: none !important;
        outline: none !important;
        box-shadow: none !important;
    }
</style>
@include('includes.userdashboard.navbar')

<div class="content-wrapper">
    <div class="container-fluid mb-4 ">
        <div class="content-wrapper-inner p-3">
            <div class="row">
                <div class="col-lg-12 my-2">

                    <div class="filter-menu">
                        <div class="filter-menu-inner mt-2 mt-sm-0 px-sm-2">
                            <div class="filter-left-select-heading drop-icon-parent">
                                <h1>Workout Type</h1>
                                <div class="drop-icon">
                                    <select class="form-control wide s-select" id="exampleFormControlSelect1">
                                        <option>Yoga</option>
                                        <option>Yoga</option>
                                        <option>Yoga</option>
                                        <option>Yoga</option>
                                        <option>Yoga</option>
                                    </select>
                                    <!-- <i class="fa fa-sort-desc" aria-hidden="true"></i> -->
                                </div>
                            </div>
                        </div>
                        <div class="filter-menu-inner mt-2 mt-sm-0 px-sm-2">
                            <div class="filter-left-select-heading drop-icon-parent">
                                <h1>Location</h1>
                                <div class="drop-icon">
                                    <select class="form-control wide s-select" id="exampleFormControlSelect1">
                                        <option>London</option>
                                        <option>London</option>
                                        <option>London</option>
                                        <option>London</option>
                                        <option>London</option>
                                    </select>
                                    <!-- <i class="fa fa-sort-desc" aria-hidden="true"></i> -->


            <div class="container-fluid mb-4 ">
                <div class="content-wrapper-inner p-3">
                    <div class="filter-section py-4 px-2">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class=" filter-menu">
                                    <div class=" filter-menu-right">
                                        <div class="filter-menu-inner mt-2 mt-sm-0 px-sm-2">
                                            <div class="filter-left-select-heading drop-icon-parent">
                                                <h1>Workout Type</h1>
                                                <div class="drop-icon">
                                                    <select class="wide s-select form-control" id="workout_category">
                                                        <option disabled="disabled" selected>Select --</option>
                                                        @foreach($category as $categories)

                                                        <option value="{{$categories['id']}}" data-src="{{$categories['title']}}">{{$categories['title']}}</option>
                                                        @endforeach
                                                    </select>
                                                    <!-- <i class="fa fa-sort-desc" aria-hidden="true"></i> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="filter-menu-inner mt-2 mt-sm-0 px-sm-2">
                                            <div class="filter-left-select-heading drop-icon-parent">
                                                <h1>Class Type</h1>
                                                <div class="drop-icon">

                                                    <select class="wide s-select form-control" id="workout_type">
                                                        <option value="">Select --</option>
                                                        <option value="0">One to One</option>
                                                        <option value="1">Group</option>
                                                    </select>
                                                    <!-- <i class="fa fa-sort-desc" aria-hidden="true"></i> -->


                                                </div>

                                            </div>
                                        </div>
                                        <div class="filter-menu-inner mt-2 mt-sm-0 px-sm-2">
                                            <div class="filter-left-select-heading drop-icon-parent">
                                                <h1>Price Range</h1>
                                                <div class="drop-icon drop-icon-thre">
                                                    <select class="wide s-select form-control " id="workout_price">
                                                        <option disabled="disabled" selected>Select --</option>
                                                        <option value="85|200">$85 to $200</option>
                                                        <option value="200|400">$200 to $400</option>
                                                        <option value="400|800">$400 to $800</option>
                                                        <option value="800">$800++</option>
                                                    </select>
                                                    <!-- <i class="fa fa-sort-desc" aria-hidden="true"></i> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6" style="margin-top: -10px;">
                                <div id="calendar"></div>
                            </div>
                        </div>
                        <div class="col text-right my-2 pr-0">
                            <div class="filter-section-btn py-2">
                                <a href="javascript:void(0)" class="applyFilterBtn" id="filterbtn">Apply</a>
                            </div>
                        </div>

                    </div>
                    <div class="dashboard-header-left mb-4 pt-2">
                        <h1>My Sessions</h1>
                    </div>
                    <div class="row" id="sessionList">

                        @foreach($booksession_detail as $bookedsession)

                        <div class="col-lg-6 my-2">
                            <div class="class-left-banner px-2 py-3">
                                <img class="class-banner-img" src="{{$bookedsession['session']['class']['class_image'][0]['image']}}" alt="">
                                <div class="class-banner-content pt-3">
                                    <h1>{{$bookedsession['session']['class']['category']['title']}}</h1>
                                    <div class="class-banner-content-right">
                                        <h1>${{$bookedsession['session']['price']}}</h1>
                                        <div class="class-banner-content-right-time">
                                            <img class="pr-2" src="{{asset('public/assets/images/clock.svg')}}" alt="">
                                            <?php

                                            $a = new DateTime(($bookedsession['session']['start_time']));
                                            $b = new DateTime($bookedsession['session']['end_time']);
                                            $interval = $a->diff($b);

                                            $hour = $interval->format("%H:%I");

                                            ?>
                                            <p>{{$hour}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="session-card-content">
                                    <div class="session-profile-left py-2">
                                        <img src="{{asset('public/assets/images/session-one.jpg')}}" alt="">
                                        <p class="pl-3">{{$bookedsession['session']['class']['trainer']['name']}}</p>
                                    </div>
                                    <div class="session-anchor-right">
                                        <a href="{{url('/userdashboard/sessionone/'.$bookedsession['id'])}}">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach

                    </div>
                </div>


            </div>
        </div>

        <!-- // var UserLocationdata = ($currentUserInfo); -->


        @endsection
        @section('insertsfooter')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.1/jquery.flexslider.js"></script>
        <script src="{{ asset('public/assets/js/jquery.nice-select.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('.s-select').niceSelect();
                var locationMap = [
                    [UserLocationdata.latitude, UserLocationdata.longitude]
                ]
                initMap(locationMap);

                $("#workout_type").on('change', function() {
                    let type = $(this).val();
                    if (type == 0) {
                        $('#sessionType').text('One to One');
                    } else {
                        $('#sessionType').text('Group');
                    }
                });
                $(".fc-col-header-cell-cushion").click(function() {
                    var day = $(this).find(">:first-child").text();

                });
                $(".applyFilterBtn").on('click', function() {
                    let category = $('#workout_category').val();
                    let location = $('#workout_location').val();
                    let type = $('#workout_type').val();
                    let price = $('#workout_price').val();
                    let radius = $('#workout_radius').val();
                    let session_type = $('#session_type').val();
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: `{{route('filterMapData')}}`,
                        type: "POST",
                        data: {
                            category: category,
                            location: location,
                            type: type,
                            price: price,
                            radius: radius,
                            session_type: session_type,
                            day: day
                        },
                        cache: false,
                        success: function(response) {
                            if (response.success == true) {
                                locationMap = response.data.latLngArray;
                                initMap(locationMap);
                            } else {
                                toastr.error(response.message);
                            }
                        },
                        error: function(jqXHR, exception) {
                            toastr.error(jqXHR.responseJSON.message);
                        }

                    });
                });
            });
        </script>
        <script>
            // two
            const slickSetting = {
                arrows: true,
                infinite: true,
                prevArrow: "<i class='fa fa-arrow-left slick-prev arrow ser-left-session d-none' aria-hidden='true'></i> ",
                nextArrow: "<i class='fa fa-arrow-right slick-next arrow ser-right-session d-none' aria-hidden='true'></i>",
                slidesToShow: 7,
                slidesToScroll: 7,
                responsive: [{
                        breakpoint: 1160,
                        settings: {
                            slidesToShow: 5,
                            slidesToScroll: 5
                        }
                    },
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 8,
                            slidesToScroll: 8
                        }
                    },
                    {
                        breakpoint: 650,
                        settings: {
                            slidesToShow: 6,
                            slidesToScroll: 6
                        }
                    },
                    {
                        breakpoint: 400,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 4
                        }
                    },



                ]
            }


            // $('.js-slick-carousel').on('init', handleSlickInit);
            $('.js-slick-carousels').slick(slickSetting);

            // reinitialization
            $('.js-slick-carousels').on('reInit', () => console.log('slick re-init fired'));

            // two
            const slickSettingss = {
                arrows: true,
                infinite: true,
                prevArrow: "<i class='fa fa-arrow-left slick-prev arrow ser-left-session d-none' aria-hidden='true'></i> ",
                nextArrow: "<i class='fa fa-arrow-right slick-next arrow ser-right-session d-none' aria-hidden='true'></i>",
                slidesToShow: 8,
                slidesToScroll: 8,
                responsive: [{
                        breakpoint: 1160,
                        settings: {
                            slidesToShow: 7,
                            slidesToScroll: 7
                        }
                    },
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 14,
                            slidesToScroll: 14
                        }
                    },
                    {
                        breakpoint: 650,
                        settings: {
                            slidesToShow: 8,
                            slidesToScroll: 8
                        }
                    },
                    {
                        breakpoint: 400,
                        settings: {
                            slidesToShow: 5,
                            slidesToScroll: 5
                        }
                    },




                ]
            }


            // $('.js-slick-carousel').on('init', handleSlickInit);
            $('.js-slick-carouselss').slick(slickSettingss);

            // reinitialization
            $('.js-slick-carouselss').on('reInit', () => console.log('slick re-init fired'));
            $(window).resize(handleResize);
        </script>
        <script>
            $('.sidenav .nav-item:nth-of-type(4)').addClass('active')
        </script>
        <script>
            $('#filterbtn').on('click', function(e) {
                var category = $('#workout_category').val();
                var type = $('#workout_type').val();
                var price = $("#workout_price").val();
                // alert(price);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: `{{route('filter/session')}}`,
                    type: "POST",
                    data: {
                        category: category,
                        type: type,
                        price: price,
                    },
                    cache: false,
                    success: function(dataResult) {
                        // alert('hji')
                        console.log(dataResult['sessionView']);
                        $("#sessionList").html(dataResult['sessionView']);

                    },
                    error: function(jqXHR, exception) {
                        alert('fail');
                        $('.loaderDiv').hide();
                        toastr.error(jqXHR.responseJSON.message);
                    }
                });

            });
        </script>
        <script>
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridWeek',
                // buttons for switching between views
                views: {
                    dayGridWeek: { // name of view
                        dayHeaderFormat: {
                            weekday: 'short',
                            day: 'numeric',
                            omitCommas: true
                        },
                        // other view-specific options here
                    }
                },
                headerToolbar: {
                    left: 'prev',
                    center: 'title',
                    right: 'next' // user can switch between the two
                }
            });
            calendar.render();
            strToDiv()
            $(".fc-next-button").click(function() {
                strToDiv();
            })
            $(".fc-prev-button").click(function() {
                strToDiv();
            })

            function strToDiv() {
                $('.fc-col-header-cell-cushion').each(function() {
                    let str = $(this).text();
                    let parts = str.split(" ");
                    let div1 = "<div>" + parts[0] + "</div>";
                    let div2 = "<div>" + parts[1] + "</div>";
                    $(this).html(div2 + div1)
                })
            }
        </script>

        @endsection
