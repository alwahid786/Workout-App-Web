@extends('layouts.trainerSide.default')
<!-- <link rel="stylesheet" href="{{asset('public/assets/trainercss/stepfive.css')}}">
<link rel="stylesheet" href="{{asset('public/assets/trainercss/pagination.css')}}"> -->
<link rel="stylesheet" href="{{asset('public/assets/css/nice-select.css')}}">
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .update-info-header {
        background-color: #F8F8F8;
    }

    .update-info-content h1 {
        font-size: 1.3rem;
        font-weight: 400;
    }

    .content-left-section {
        background-color: #F8F8F8;
        border-radius: 10px;
    }

    .content-left-section img {
        border-radius: 10px;
        width: 100%;
        height: 300px;
        object-fit: cover;
    }

    .content-left-section h1 {
        font-size: 1.2rem;
        font-weight: 500;
        color: #E37048;
        margin-bottom: 0px;
        padding-top: 0.5rem;
        padding-bottom: 1rem;
        text-align: center;
    }

    .content-left-section .middle-heading {
        display: flex;
        align-items: center;
        padding-top: 1rem;
        padding-bottom: 1rem;
    }

    .content-left-section .middle-heading h2 {
        color: #E37048;
        margin-bottom: 0px;
        font-size: 1rem;
        font-weight: 400;
        padding-right: 0.5rem;
    }

    .content-left-section .middle-heading div {
        border: 1px solid #E37048;
        width: 100%;
    }

    .content-left-section p {
        color: #9B9B9B;
        font-size: 0.9rem;
    }

    .content-right-profile {
        background-color: #F8F8F8;
        border-radius: 10px;
    }

    .content-right-profile-header h1 {
        color: #E37048;
        font-weight: 500;
        font-size: 1.5rem;
        margin-bottom: 0px;
    }

    .content-right-profile-body {
        display: flex;
    }

    .profile-body h1 {
        font-size: 1rem;
        font-weight: normal;
        color: #666666;
    }

    .profile-body h1 img {
        width: 20px;
        margin-right: 10px;
    }

    .content-right-certificate-header h1 {
        color: #E37048;
        margin-bottom: 0px;
        font-size: 1.3rem;
        font-weight: 500;
    }



    .certificate-card {
        background-color: #F8F8F8;
        border-radius: 10px;
        height: 100%;
    }

    .certificate-card img {
        width: 100%;
        height: 150px;
    }

    .certificate-card p {
        color: black;
        font-size: 1rem;
        font-weight: 500;
        margin-bottom: 0px;
    }

    .content-right-certificate-btn button {
        background-color: #E37048;
        border: 1px solid #E37048 !important;
        color: white;
        box-shadow: none !important;
        width: 70px;
        height: 35px;
        border-radius: 5px;
    }

    .content-right-certificate-btn a {
        background-color: #E37048 !important;
        text-decoration: none !important;
        border: 1px solid #E37048 !important;
        color: white !important;
        box-shadow: none !important;
        width: 70px;
        height: 35px;
        margin-left: auto;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;


    }

    @media screen and (max-width:576px) {
        .content-right-profile-body {
            flex-direction: column;
        }
    }

    .form-container {
        background: #F8F8F8;
        border-radius: 10px
    }

    .slot-wrapper {
        background: #fff;
        border-radius: 10px;
    }

    .slot-vertical-icon {
        position: relative;
    }

    .slot-vertical-icon img {
        max-width: 7px;
        cursor: pointer;
    }

    .slot-vertical-icon .icon-div {
        background: #fff;
        position: absolute;
        right: 0px;
        box-shadow: 0px, 5px rgba(0, 0, 0, 0.16);
        border-radius: 7px;
        width: 100%;
        box-shadow: 5px 10px 18px #888888;
        max-width: 150px;
        top: 30px;
    }

    .icon-edit {
        border-bottom: 1px solid #858585;
    }

    .icon-edit,
    .icon-del {
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
    }

    .icon-div-inner:hover {
        background-color: #E37048;
        color: white;
    }

    .icon-div-inner:hover h1,
    .icon-div-inner:hover i {
        color: white
    }

    .icon-edit h1,
    .icon-del h1 {
        font-size: 1rem;
        color: #858585;
        margin-bottom: 0px;
    }

    .icon-del i,
    .icon-edit i {
        color: #858585;
    }

    .slot-grid-container {
        display: grid !important;
        grid-template-columns: repeat(auto-fill, minmax(110px, 1fr)) !important;
        grid-gap: 10px !important;
        align-items: stretch;
    }

    .slot-image img {
        width: 100%;
        max-width: 250px;
        height: 100px;
        object-fit: cover;
        border-radius: 10px;
    }

    .slot-wrapper-heading {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .left-slot-heading h1 {
        color: #E37048;
        font-size: 1.3rem;
        font-weight: 500;
    }

    .left-slot-heading h2 {
        color: #E37048;
        font-size: 1.1rem;
        font-weight: 500;
    }

    .right-slot-heading h1 {
        color: #E37048;
        font-size: 1.3rem;
    }

    .timing-stack {
        padding-top: 1rem;
        padding-bottom: 1rem;
        width: 100%;
        border-radius: 10px;
        /* display: flex;
        align-items: center; */
    }

    .week-name h1 {
        font-size: 1.4rem;
        color: #333333;
    }

    .timing-stack-one {
        background-color: #FFDA98;
    }

    .timing-stack-two {
        background-color: #ECFFAB;
    }

    .timing-stack-three {
        background-color: rgba(141, 40, 173, 0.15);
    }

    .timing-stack-four {
        background-color: #FFB3BC;
    }

    .timing-stack-five {
        background-color: #ADABFF;
    }

    .timing-stack-six {
        background-color: #FFB272;
    }

    .timing-stack-seven {
        background-color: #6CA3EA;
    }

    .time-stack-outer {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
    }

    .time-stack-inner {
        border-radius: 30px;
        /* width: 150px; */
        height: 40px;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #E37048;
        background-color: #fff;
        padding: 7px;

    }

    .slot-arrow i {
        color: #E37048;
        font-weight: bold;
        font-size: 2rem;
        cursor: pointer;
    }

    .content-right-payment-body {
        background: #F8F8F8;
        border-radius: 10px
    }

    .payment-body {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .payment-body .stripe {
        color: #6772E5;
        font-size: 3rem;
        font-weight: 900;
        margin-bottom: 0px;
    }

    .step-five-buttons {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
    }

    .step-five-buttons button {
        border: 1px solid #E37048;
        box-shadow: none !important;
        outline: none !important;
        width: 180px;
        height: 40px;
        border-radius: 5px;
        color: #E37048;
        background-color: white;
    }

    .step-five-buttons button:last-of-type {
        width: 115px;
    }

    .step-five-buttons button:hover {
        background: #E37048;
        color: white;
    }

    @media screen and (max-width:576px) {
        .timing-stack {
            flex-direction: column;
        }

        .time-stack-outer {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            justify-content: center;
            flex-direction: column;
        }

        .right-slot-heading h1 {
            color: #E37048;
            font-size: 1rem;
        }

        .left-slot-heading h1 {
            color: #E37048;
            font-size: 1rem;
            font-weight: 500;
        }

        .left-slot-heading h2 {
            color: #E37048;
            font-size: 1rem;
            font-weight: 500;
        }

        .week-name h1 {
            font-size: 1rem;
            color: #333333;
        }

        .slot-heading h1 {
            color: #E37048;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .step-five-buttons {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            flex-direction: column;
            justify-content: center;
        }

        .content-left-section img {
            border-radius: 10px;
            width: 100%;
            height: 240px;
        }

        .payment-body .stripe {
            color: #6772E5;
            font-size: 2.5rem;
            font-weight: 900;
            margin-bottom: 0px;
        }

        .content-left-section p {
            color: #9B9B9B;
            text-align: center;
            font-size: 0.9rem;
        }
    }

    .custom-modal {
        background-color: #FF5959;
        max-width: 500px;
        width: 100%;
        position: absolute;
        top: 0;
        right: 0;
    }

    .custom-modal h1 {
        padding: 0.8rem 2rem;
        color: white;
        font-weight: 400;
        font-size: 1.5rem;
        text-align: center;
    }

    @media screen and (max-width:576px) {
        .custom-modal h1 {
            padding: 1rem 2rem;
            color: white;
            font-weight: 400;
            font-size: 1rem;
            text-align: center;
        }

        .custom-modal {
            background-color: #FF5959;
            width: 100%;
            position: absolute;
            top: 0;
            right: 0;
        }

    }

    /* p */
    .pagination-wrapper {
        background-color: #F8F8F8;
        border-radius: 10px;
        position: relative;
        padding-top: 1rem;
        padding-bottom: 3rem;
        padding-left: 0.5rem;
        padding-right: 0.5rem;
    }

    .pagination-border {
        border: 1px solid #E37048;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        z-index: 1;
    }

    .pagination-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative;
    }

    .pagination-box {
        position: relative;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #f5bfac;
        border: 2px solid #E37048;
        z-index: 2;
    }

    .active-pagination {
        background: #E37048;
    }

    .pagination-box h1 {
        position: absolute;
        color: white;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 1rem;
        font-weight: 700;
        margin-bottom: 0px;
    }

    .pagination-box p {
        font-size: 0.6rem;
        margin-bottom: 0px;
        color: black;
        position: absolute;
        top: 55px;
        left: 50%;
        text-align: center;
        transform: translate(-50%, -50%);

    }

    @media screen and (max-width:576px) {
        .pagination-box {
            position: relative;
            width: 30px;
            height: 30px;
        }

        .pagination-box h1 {
            position: absolute;
            color: white;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 0.8rem;
            font-weight: 700;
            margin-bottom: 0px;
        }

        .pagination-box p {
            font-size: 0.5rem;
        }
    }

    .modal-body p {
        color: #A6A6A6;
    }

    .modal-content {
        border-radius: 10px !important;
    }

    /* modal */
    /* form */
    .form-container {
        background: #F8F8F8;
        border-radius: 10px
    }

    .pro-form {
        text-align: left !important;
    }

    .pro-form label {
        color: #464646;
        font-size: 0.8rem;
    }

    .pro-form input {
        height: 65px;
        border-radius: 10px !important;
        border: 1px solid rgba(0, 0, 0, 0.2) !important;
        box-shadow: none !important;
        outline: none !important;
        background: #F8F8F8;
        color: #666666 !important;
    }

    .nice-select.wide {
        height: 65px !important;
        border: 1px solid #CECECE !important;
        border-radius: 10px !important;
        justify-content: flex-start !important;
        background: #F8F8F8;
    }

    .nice-select:after {
        border-bottom: 2px solid #848484;
        border-right: 2px solid #848484;
        content: '';
        display: block;
        height: 9px;
        margin-top: -4px;
        pointer-events: none;
        position: absolute;
        right: 20px;
        top: 50%;
        -webkit-transform-origin: 66% 66%;
        -ms-transform-origin: 66% 66%;
        transform-origin: 66% 66%;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
        -webkit-transition: all 0.15s ease-in-out;
        transition: all 0.15s ease-in-out;
        width: 9px;
    }

    .s-select span {
        color: #666666 !important;
        font-weight: normal !important;
    }

    .select-outer {
        position: relative;
    }

    .select-outer i {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translate(-50%, -50%);
        pointer-events: none;
        cursor: pointer;
        color: #848484;
    }


    */ .pro-form input::placeholder,
    .pro-form select::placeholder {
        color: #666666;
    }

    .difficulty-level {
        display: flex;
        align-items: center;
        height: 65px;
    }

    .difficulty-level input {
        height: 45px !important;
        border-radius: 30px !important;
        text-align: center;
        border: 1px solid #E37048 !important;
        color: #E37048;
        background: #F8F8F8 !important;
        cursor: pointer;
    }

    .difficulty-level input:hover,
    .difficulty-level input:active,
    .difficulty-level input:focus {
        background: #E37048 !important;
        color: white;
    }

    .price-outer {
        position: relative;
    }

    .price-box {
        position: absolute;
        top: 50%;
        left: 0;
        transform: translate(0%, -50%);
        background-color: #E37048;
        width: 50px;
        height: 100%;
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .price-outer input {
        padding-left: 60px;
    }

    .price-box h1 {
        color: white;
        font-size: 1rem;
        margin-bottom: 0px;
        font-weight: 400;
    }

    .time-box-outer {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
    }

    .time-box-inner {
        border-radius: 30px;
        padding: 10px 20px;
        color: #fff;

    }

    .time-box-inner p {
        color: white;
        margin-bottom: 0px;
    }

    .yellow-time {
        background: #FFA900;

    }

    .green-time {
        background: #B1D244;
    }

    .form-btn a {
        width: 160px;
        height: 50px;
        background-color: #F8F8F8;
        border: 1px solid #E37048;
        color: #E37048;
        border-radius: 7px;
        margin: 0 auto;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: none !important;
        text-decoration: none !important;
    }

    .form-btn a:hover {
        background-color: #E37048;
        color: white;
    }

    .form-btn button {
        width: 160px !important;
        height: 50px;
        background-color: #F8F8F8 !important;
        border: 1px solid #E37048;
        color: #E37048;
        border-radius: 7px;
        margin: 0 auto;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: none !important;
        text-decoration: none !important;
    }

    .form-btn button:hover {
        background-color: #E37048;
        color: white;
    }




    .form-btn a {
        text-decoration: none;
    }

    .updateinfo-qualification h1 {
        font-size: 1rem;
        font-weight: 400;
        letter-spacing: 0.3;
    }

    .update-info-qualification-image {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        grid-gap: 10px;
        align-items: stretch;
    }

    .update-info-qualification-image label {
        cursor: pointer;
    }

    .update-info-qualification-image img {
        /* padding: 0 7px; */
        width: 100%;
        width: 200px;
        height: 130px;
    }

    .grid-item {
        position: relative;
        width: 200px;
        margin: 0 auto;
    }

    .grid-item img:nth-of-type(1) {
        position: absolute;
        height: 22px;
        width: 22px;
        right: -5px;
        top: -10px;
    }

    .grid-item img:nth-of-type(2) {
        border-radius: 10px;
    }

    .price-select-input {
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .price-select-input .select-outer {
        width: 20%;

    }

    .price-select-input .nice-select.wide {
        border-top-right-radius: 0px !important;
        border-bottom-right-radius: 0px !important;
    }

    .price-select-input input {
        width: 80%;
        border-top-left-radius: 0px !important;
        border-bottom-left-radius: 0px !important;
    }

    .price-select-input .nice-select:after {
        border-bottom: 2px solid #848484;
        border-right: 2px solid #848484;
        content: '';
        display: block;
        height: 9px !important;
        margin-top: -4px;
        pointer-events: none;
        position: absolute;
        right: 15% !important;
        top: 50%;
        -webkit-transform-origin: 66% 66%;
        -ms-transform-origin: 66% 66%;
        transform-origin: 66% 66%;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
        -webkit-transition: all 0.15s ease-in-out;
        transition: all 0.15s ease-in-out;
        width: 9px !important;

    }

    .text-area {
        background: #F8F8F8 !important;
        border-radius: 10px !important;
        resize: none;
    }

    .time-form-field h1 {
        margin-bottom: 0px;
        font-size: 0.8rem;
        color: #666666;
        font-weight: normal;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);

    }

    .time-form {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    @media (min-width: 576px) {
        .modal-dialogs {
            max-width: 1000px !important;
            margin: 1.75rem auto;
        }
    }

    @media screen and (max-width:576px) {
        .time-form {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-direction: column;
        }

        .time-form-field {
            width: 100%;
        }

        .price-select-input .select-outer {
            width: 30%;

        }

        .price-select-input input {
            width: 70%;
            border-top-left-radius: 0px !important;
            border-bottom-left-radius: 0px !important;
        }

        .price-select-input .nice-select:after {
            border-bottom: 2px solid #848484;
            border-right: 2px solid #848484;
            content: '';
            display: block;
            height: 9px !important;
            margin-top: -4px;
            pointer-events: none;
            position: absolute;
            right: 8px !important;
            top: 50%;
            -webkit-transform-origin: 66% 66%;
            -ms-transform-origin: 66% 66%;
            transform-origin: 66% 66%;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
            -webkit-transition: all 0.15s ease-in-out;
            transition: all 0.15s ease-in-out;
            width: 9px !important;

        }

        /* .price-select-input .nice-select.wide span {
            font-size: 0.9rem !important;
        } */
        .difficulty-level {
            display: flex;
            align-items: center;
            height: 55px;
        }

        .difficulty-level input {
            font-size: 0.8rem;
            height: 35px !important;
            border-radius: 30px !important;
            text-align: center;
            border: 1px solid #E37048 !important;
            color: #E37048;
            background: #F8F8F8 !important;
            cursor: pointer;
        }

        .pro-form input {
            height: 55px;
        }

        .nice-select.wide {
            height: 55px !important;
            border: 1px solid #CECECE !important;
            border-radius: 10px !important;
            justify-content: flex-start !important;
            background: #F8F8F8;
        }
    }

    .modal-btn {
        margin: 0 auto;

        width: 40%;
    }

    .modal-btn button {
        background: #E37048;
        border: none;
        box-shadow: none !important;
        outline: none;
        color: white !important;
        border-radius: 10px;
        width: 25%;
        font-size: 1.4rem;
        max-width: 200px;
        width: 100%;
        font-size: 0.8rem;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* .............Step Three CSS................. */

    .slot-wrapper {
        background: #fff;
        border-radius: 10px;
    }

    .slot-vertical-icon {
        position: relative;
    }

    .slot-vertical-icon img {
        max-width: 7px;
        cursor: pointer;
    }

    .slot-vertical-icon .icon-div {
        background: #fff;
        position: absolute;
        right: 0px;
        box-shadow: 0px, 5px rgba(0, 0, 0, 0.16);
        border-radius: 7px;
        width: 100%;
        box-shadow: 5px 10px 18px #888888;
        max-width: 150px;
        top: 30px;
    }

    .icon-edit {
        border-bottom: 1px solid #858585;
    }

    .icon-edit,
    .icon-del {
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
    }

    .icon-div-inner:hover {
        background-color: #E37048;
        color: white;
    }

    .icon-div-inner:hover h1,
    .icon-div-inner:hover i {
        color: white
    }

    .icon-edit h1,
    .icon-del h1 {
        font-size: 1rem;
        color: #858585;
        margin-bottom: 0px;
    }

    .icon-del i,
    .icon-edit i {
        color: #858585;
    }

    .slot-grid-container {
        display: grid !important;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)) !important;
        grid-gap: 10px !important;
        align-items: stretch;
    }

    .slot-image img {
        width: 100%;
        /* max-width: 250px; */
        height: 100px;
        object-fit: cover;
        border-radius: 10px;
    }

    .slot-wrapper-heading {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .left-slot-heading h1 {
        color: #E37048;
        font-size: 1.3rem;
        font-weight: 500;
    }

    .left-slot-heading h2 {
        color: #E37048;
        font-size: 1.1rem;
        font-weight: 500;
    }

    .right-slot-heading h1 {
        color: #E37048;
        font-size: 1.3rem;
    }

    .timing-stack {
        border-radius: 10px;
    }

    .timing-stack-inner {
        padding-top: 1rem;
        width: 100%;
        border-radius: 10px;
        display: flex;
        align-items: center;
    }

    .week-name h1 {
        font-size: 1.4rem;
        color: #333333;
    }

    .timing-stack-one {
        background-color: #FFDA98;
    }

    .timing-stack-two {
        background-color: #ECFFAB;
    }

    .timing-stack-three {
        background-color: rgba(141, 40, 173, 0.15);
    }

    .timing-stack-four {
        background-color: #FFB3BC;
    }

    .timing-stack-five {
        background-color: #ADABFF;
    }

    .timing-stack-six {
        background-color: #FFB272;
    }

    .timing-stack-seven {
        background-color: #6CA3EA;
    }

    .time-stack-outer {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
    }

    .time-stack-inner {
        border-radius: 30px;
        /* width: 150px; */
        height: 40px;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #E37048;
        background-color: #fff;

    }

    @media screen and (max-width:991px) and (min-width:768px) {
        .difficulty-level input {
            font-size: 0.8rem;
            height: 35px !important;
            border-radius: 30px !important;
            text-align: center;
            border: 1px solid #E37048 !important;
            color: #E37048;
            background: #F8F8F8 !important;
            cursor: pointer;
        }
    }

    @media screen and (max-width:768px) and (min-width:577px) {
        .grid-item img:nth-of-type(1) {
            position: absolute;
            height: 22px;
            width: 22px;
            right: 20px;
            top: -10px;

        }
    }

    @media screen and (max-width:576px) {
        .difficulty-level {
            display: flex;
            align-items: center;
            height: 55px;
        }

        .difficulty-level input {
            font-size: 0.8rem;
            height: 35px !important;
            border-radius: 30px !important;
            text-align: center;
            border: 1px solid #E37048 !important;
            color: #E37048;
            background: #F8F8F8 !important;
            cursor: pointer;
        }

        .pro-form input {
            height: 55px;
        }

        .pro-form select {
            height: 55px !important;
        }

        .time-box-inner p {
            font-size: 0.8rem;
        }

        .timing-stack-inner {
            flex-direction: column;
        }

        .time-stack-outer {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            justify-content: center;
            flex-direction: column;
        }

        .right-slot-heading h1 {
            color: #E37048;
            font-size: 1rem;
        }

        .left-slot-heading h1 {
            color: #E37048;
            font-size: 1rem;
            font-weight: 500;
        }

        .left-slot-heading h2 {
            color: #E37048;
            font-size: 1rem;
            font-weight: 500;
        }

        .week-name h1 {
            font-size: 1rem;
            color: #333333;
        }

        .slot-heading h1 {
            color: #E37048;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .nice-select.wide {
            height: 55px !important;
            border: 1px solid #CECECE !important;
            border-radius: 10px !important;
            justify-content: flex-start !important;
            background: #F8F8F8;
        }
    }

    /* time-form */
    .time-form {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .time-form-field {
        position: relative;
    }

    .time-form-field img {
        position: absolute;
        top: 50%;
        right: 0;
        transform: translate(-50%, -50%);
        width: 25px;
    }

    .time-form button {
        background-color: #E37048;
        color: white;
        outline: none;
        box-shadow: none !important;
        border: 1px solid #E37048 !important;
        font-size: 0.9rem;
        height: 65px;
        padding: 20px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .time-form-field h1 {
        margin-bottom: 0px;
        font-size: 0.8rem;
        color: #666666;
        font-weight: normal;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);

    }

    @media screen and (max-width:576px) {
        .time-form button {
            background-color: #E37048;
            color: white;
            outline: none;
            box-shadow: none !important;
            border: 1px solid #E37048 !important;
            font-size: 0.9rem;
            height: 55px;
            display: flex;
            align-items: center;
            width: 100%;
            text-align: center;
            justify-content: center;
        }

        .time-form {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-direction: column;
        }

        .time-form-field {
            width: 100%;
        }

        .update-info-qualification-image {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .grid-item img:nth-of-type(1) {
            position: absolute;
            height: 22px;
            width: 22px;
            right: -5px;
            top: -7px;

        }

        .updateinfo-qualification h1 {
            text-align: center;
        }
    }

    .slot-arrow i {
        color: #E37048;
        font-weight: bold;
        font-size: 2rem;
        cursor: pointer;
    }

    /* p */
    .pagination-wrapper {
        background-color: #F8F8F8;
        border-radius: 10px;
        position: relative;
        padding-top: 1rem;
        padding-bottom: 3rem;
        padding-left: 0.5rem;
        padding-right: 0.5rem;
    }

    .pagination-border {
        border: 1px solid #E37048;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        z-index: 1;
    }

    .pagination-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative;
    }

    .pagination-box {
        position: relative;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #f5bfac;
        border: 2px solid #E37048;
        z-index: 2;
    }

    .active-pagination {
        background: #E37048;
    }

    .pagination-box h1 {
        position: absolute;
        color: white;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 1rem;
        font-weight: 700;
        margin-bottom: 0px;
    }

    .pagination-box p {
        font-size: 0.6rem;
        margin-bottom: 0px;
        color: black;
        position: absolute;
        top: 55px;
        left: 50%;
        text-align: center;
        transform: translate(-50%, -50%);

    }

    @media screen and (max-width:576px) {
        .pagination-box {
            position: relative;
            width: 30px;
            height: 30px;
        }

        .pagination-box h1 {
            position: absolute;
            color: white;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 0.8rem;
            font-weight: 700;
            margin-bottom: 0px;
        }

        .pagination-box p {
            font-size: 0.5rem;
        }




    }

    .price-select-input {
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .price-select-input .select-outer {
        width: 20%;

    }

    .price-select-input .nice-select.wide {
        border-top-right-radius: 0px !important;
        border-bottom-right-radius: 0px !important;
    }

    .price-select-input input {
        width: 80%;
        border-top-left-radius: 0px !important;
        border-bottom-left-radius: 0px !important;
    }

    .price-select-input .nice-select:after {
        border-bottom: 2px solid #848484;
        border-right: 2px solid #848484;
        content: '';
        display: block;
        height: 9px !important;
        margin-top: -4px;
        pointer-events: none;
        position: absolute;
        right: 15% !important;
        top: 50%;
        -webkit-transform-origin: 66% 66%;
        -ms-transform-origin: 66% 66%;
        transform-origin: 66% 66%;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
        -webkit-transition: all 0.15s ease-in-out;
        transition: all 0.15s ease-in-out;
        width: 9px !important;

    }

    .stack-categories h1 {
        font-size: 1rem;
        margin-bottom: 0px;
        background-color: transparent;
        /* border: 1px solid #E37048;
        border-radius: 30px; */
        padding: 0.5rem 1rem;
        color: #E37048;
        font-weight: 500;
        display: flex;
        width: 100%;
    }

    .stack-categories span {
        font-size: 1rem;
        margin-bottom: 0px;
        background-color: transparent;
        /* border: 1px solid #E37048;
        border-radius: 30px; */
        color: #E37048;
        width: 70%;
    }

    .stack-categories h1 span {
        font-weight: 400;
    }

    @media screen and (max-width:991px) {
        .stack-categories h1 {
            width: 100%;
        }

        .stack-categories h1 {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .timing-stack-inner {
            flex-direction: column;
        }

        .slot-image {
            text-align: center !important;
        }
    }

    /* @media screen and (max-width:767px) {
        .stack-categories h1 {
            width: 100%;
        }
        .stack-categories h1 {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
    } */

    @media screen and (max-width:576px) {


        .price-select-input .select-outer {
            width: 30%;

        }

        .price-select-input input {
            width: 70%;
            border-top-left-radius: 0px !important;
            border-bottom-left-radius: 0px !important;
        }

        .price-select-input .nice-select:after {
            border-bottom: 2px solid #848484;
            border-right: 2px solid #848484;
            content: '';
            display: block;
            height: 9px !important;
            margin-top: -4px;
            pointer-events: none;
            position: absolute;
            right: 8px !important;
            top: 50%;
            -webkit-transform-origin: 66% 66%;
            -ms-transform-origin: 66% 66%;
            transform-origin: 66% 66%;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
            -webkit-transition: all 0.15s ease-in-out;
            transition: all 0.15s ease-in-out;
            width: 9px !important;

        }

        /* .price-select-input .nice-select.wide span {
            font-size: 0.9rem !important;
        } */

    }

    .text-area {
        background: #F8F8F8 !important;
        border-radius: 10px !important;
    }

    .socialIcons_s img {
        width: 35px !important;
    }

    .loaderDiv {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        background: rgba(0, 0, 0, 0.75) url("../../../../../workitpt_web/public/assets/images/loader.svg") no-repeat center center;
        z-index: 99999;
    }
</style>
@section('content')
<!-- header-section -->
<div class="container-fluid update-info-header">
    <div class="container px-0">
        <div class="update-info-content py-4">
            <h1>Create Account</h1>
            <img src="{{asset('public/assets/images/logo.svg')}}" alt="">
        </div>
    </div>
</div>
<!-- pagination-section -->
<div class="container-fluid pt-5">
    <div class="container px-0">
        <div class="pagination-wrapper px-sm-3">
            <div class="pagination-container">
                <div class="pagination-border"></div>
                <div class="pagination-box active-pagination">
                    <h1>1</h1>
                    <p>Personal Information</p>
                </div>
                <div class="pagination-box active-pagination">
                    <h1>2</h1>
                    <p>Other Information</p>
                </div>
                <div class="pagination-box active-pagination">
                    <h1>3</h1>
                    <p>Specialty </p>
                </div>
                <div class="pagination-box active-pagination">
                    <h1>4</h1>
                    <p>Payment Method</p>
                </div>
                <div class="pagination-box active-pagination">
                    <h1>5</h1>
                    <p>View Profile</p>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- content-section -->
<div class="container-fluid py-4">
    <div class="container px-0">
        <div class="row">
            <div class="col-md-4">
                <div class="content-left-section p-3">
                    @if($trainer['profile_img']==null)
                    <img src="{{asset('public/assets/trainerimages/profile.png')}}" alt="">
                    @else
                    <img src="{{$trainer['profile_img']}}" alt="">

                    @endif
                    <h1>{{$trainer['name']}}</h1>
                    <div class="middle-heading">
                        <h2>About</h2>
                        <div></div>
                    </div>
                    <p>{{$trainer['about']}}</p>
                    <!-- <p>n publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p> -->
                </div>
            </div>
            <div class="col-md-8 mt-4 mt-md-0">
                <div class="content-right-profile p-3">
                    <div class="row">
                        <div class="col-sm-6 content-right-profile-header px-0">
                            <h1 class="p-3 ">{{$trainer['name']}}</h1>
                        </div>
                        <div class="my-auto col-sm-6 content-right-certificate-btn pr-3 text-right">
                            <a class="btn" href="{{url('/trainer/updateprofile')}}" class="btn"><i class="fa fa-pencil-square-o mr-1" aria-hidden="true"></i>Edit</a>
                        </div>

                    </div>
                    <div class="content-right-profile-body">
                        <div class="profile-body pr-sm-5 mr-lg-5 pr-lg-5">
                            <h1><img src="{{asset('public/assets/trainerimages/message-icon.png')}}" alt="">{{$trainer['email']}}</h1>
                            <h1><img src="{{asset('public/assets/trainerimages/user-icon.png')}}" alt="">{{$trainer['gender']}}</h1>
                            <h1><img src="{{asset('public/assets/trainerimages/phone-icon.png')}}" alt="">{{$trainer['phone']}} </h1>
                            <h1><img src="{{asset('public/assets/trainerimages/location-icon.png')}}" alt="">{{$trainer['country']}}, {{$trainer['state']}}</h1>
                            <h1 class="mx-3 socialIcons_s mt-4">
                                @if($trainer['trainer_profile']['facebook_url'] != null)
                                <a target="_blank" href="{{$trainer['trainer_profile']['facebook_url']}}"><img src="{{asset('public/assets/images/fb-color.svg')}}" alt=""></a>
                                @endif
                                @if($trainer['trainer_profile']['linkedin_url'] != null)
                                <a target="_blank" href="{{$trainer['trainer_profile']['linkedin_url']}}"><img src="{{asset('public/assets/images/linkedin-color.png')}}" alt=""></a>
                                @endif
                                @if($trainer['trainer_profile']['instagram_url'] != null)
                                <a target="_blank" href="{{$trainer['trainer_profile']['instagram_url']}}"><img src="{{asset('public/assets/images/insta-color.svg')}}" alt=""></a>
                                @endif
                            </h1>
                        </div>
                        <div class="profile-body">
                            <h1><img src="{{asset('public/assets/trainerimages/heart-icon.png')}}" alt="">{{$trainer['madical_condition']}}</h1>

                            {{--@if($trainer['trainer_profile']['facebook_url']== null)

                            @else
                            <h1><img src="{{asset('public/assets/trainerimages/social-icon.png')}}" alt="">{{$trainer['trainer_profile']['facebook_url']}}</h1>
                            @endif
                            @if($trainer['trainer_profile']['instagram_url']== null)

                            @else
                            <h1><img src="{{asset('public/assets/trainerimages/social-icon.png')}}" alt="">{{$trainer['trainer_profile']['instagram_url']}}</h1>
                            @endif
                            @if($trainer['trainer_profile']['linkedin_url']== null)

                            @else
                            <h1><img src="{{asset('public/assets/trainerimages/social-icon.png')}}" alt="">{{$trainer['trainer_profile']['linkedin_url']}}</h1>
                            @endif--}}


                            <!-- <h1><img src="{{asset('public/assets/trainerimages/phone-icon.png')}}" alt="">+23-123-123 </h1>  -->

                        </div>
                    </div>
                </div>
                <!-- certificate -->
                <div class="col-12 content-right-certificate-header px-0">
                    <h1 class="py-3 pl-sm-3">Certificates :</h1>
                </div>
                <!-- <div class="col-12 content-right-certificate-btn px-0 text-right">
                    <a class="btn" href="{{url('/trainer/updateprofile')}}" class="btn"><i class="fa fa-pencil-square-o mr-1" aria-hidden="true"></i>Edit</a>
                </div> -->
                <div class="content-right-certificate-body">
                    <div class="row py-2">
                        @foreach($certificates as $certificate)
                        <div class="col-sm-6 col-lg-4 my-2">
                            <div class="certificate-card p-2">
                                <img src="{{$certificate['image']}}" alt="">
                                <p class="pt-2 pb-3">{{$certificate['caption']}}</p>
                            </div>
                        </div>
                        @endforeach
                        <!-- <div class="col-sm-6 col-lg-4 my-2">
                            <div class="certificate-card p-2">
                                <img src="{{asset('public/assets/trainerimages/cert.png')}}" alt="">
                                <p class="pt-2 pb-3">nt. Lorem ipsum may be used as a placeholder </p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 my-2">
                            <div class="certificate-card p-2">
                                <img src="{{asset('public/assets/trainerimages/cert.png')}}" alt="">
                                <p class="pt-2 pb-3">nt. Lorem ipsum may be used as a placeholder </p>
                            </div>
                        </div> -->
                    </div>

                </div>
                <!-- Speciality -->
                <div class="col-12 content-right-certificate-header px-0">
                    <h1 class="py-3 pl-sm-3">Speciality :</h1>
                </div>

                <div class="container form-container py-3">
                    <!-- .............Stretching Outdoors............... -->
                    @foreach($trainer['session'] as $session)

                    <div class="slot-wrapper py-3 px-3 my-4">
                        <div class="slot-vertical-icon my-2 text-right">
                            <img class="dot-toggle-icon-one" src="{{asset('public/assets/trainerimages/slotverticalicon.svg')}}" alt="">
                            <div class="icon-div icon-div-one box">
                                <div class="icon-edit py-3 icon-div-inner edit_session " data-toggle="modal" data-target="#editModal" id="edit_session">
                                    <i class="fa fa-pencil-square-o pr-2" aria-hidden="true"></i>

                                    <h1>Edit</h1>
                                    <input type="hidden" value="{{$session['id']}}" class="session_id">

                                </div>
                                <div class="icon-del py-3 icon-div-inner delete_session" data-toggle="modal" data-target="#deleteModal">
                                    <i class="fa fa-trash pr-2" aria-hidden="true"></i>
                                    <input type="hidden" value="{{$session['id']}}" class="session_id">

                                    <h1>Delete</h1>


                                </div>
                            </div>
                        </div>
                        <div class="slot-grid-container">
                            @foreach($session['session_image'] as $image)
                            <div class="slot-grid-item">
                                <div class="slot-image">
                                    <img src="{{$image['image']}}" alt="">
                                </div>

                            </div>
                            @endforeach

                        </div>
                        <div class="slot-wrapper-heading px-3 my-3">
                            <div class="left-slot-heading">
                                <h1>{{$session['category']['title']}}</h1>
                                <!-- <h2 class="pt-2">Static Stretching</h2> -->
                            </div>
                            <div class="right-slot-heading">
                                <h1>${{$session['price']}}</h1>
                            </div>
                        </div>
                        <div class="slot-timing-stacks stack-timing-one">
                            <div class="timing-stack timing-stack-one px-3 my-3">
                                <div class="timing-stack-inner">
                                    <div class="week-name">
                                        <h1>{{$session['day']}}</h1>
                                    </div>
                                    <div class="stack-time">
                                        <div class="time-stack-outer px-4 ">
                                            <div class="time-stack-inner m-2">
                                                <p class="mb-0">{{date('h:i',strtotime($session['start_time']))}} {{$session['start_meridiem']}} to {{date('h:i',strtotime($session['end_time']))}} {{$session['end_meridiem']}}</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="stack-categories pb-2">
                                    <div class="row  text-center">
                                        <div class="col-md-6">
                                            <div class="w-100 d-lg-flex align-items-center">
                                                <h1>Difficulty Level:</h1>
                                                <span>{{$session['difficulty_level']}} </span>
                                            </div>
                                            <div class="w-100 d-lg-flex align-items-center">
                                                <h1>Session Type:</h1>
                                                @if($session['type'] == 0)
                                                <span>One</span>
                                                @else
                                                <span>One</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="w-100 d-lg-flex align-items-center">
                                                <h1>Class Type:</h1>
                                                @if($session['session_type'] == 0)
                                                <span>Online</span>
                                                @else
                                                <span>In-Person</span>
                                                @endif
                                            </div>
                                            <div class="w-100 d-lg-flex align-items-center">
                                                <h1>Preference:</h1>
                                                @if($session['preference'] == 0)
                                                <span>One Time</span>
                                                @else
                                                <span>Recurring</span>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-12">
                            <div class="slot-arrow slot-arrow-one text-center">
                                <i class="fa fa-angle-double-down down-arrow" aria-hidden="true"></i>
                                <i class="fa fa-angle-double-up up-arrow" aria-hidden="true"></i>
                            </div>
                        </div>



                    </div>
                    @endforeach



                    <!-- .............Yoga Slot............... -->
                    <!-- <div class="slot-wrapper py-3 px-3 my-4">
                        <div class="slot-vertical-icon my-2 text-right">
                            <img class="dot-toggle-icon-one" src="{{asset('public/assets/trainerimages/slotverticalicon.svg')}}" alt="">
                            <div class="icon-div icon-div-one box">
                                <div class="icon-edit py-3 icon-div-inner ">
                                    <i class="fa fa-pencil-square-o pr-2" aria-hidden="true"></i>

                                    <h1>Edit</h1>
                                </div>
                                <div class="icon-del py-3 icon-div-inner">
                                    <i class="fa fa-trash pr-2" aria-hidden="true"></i>

                                    <h1>Delete</h1>
                                </div>
                            </div>
                        </div>

                        <div class="slot-grid-container">
                            <div class="slot-grid-item">
                                <div class="slot-image">
                                    <img src="{{asset('public/assets/trainerimages/stepthreeone.jpg')}}" alt="">
                                </div>

                            </div>
                            <div class="slot-grid-item">
                                <div class="slot-image">
                                    <img src="{{asset('public/assets/trainerimages/stepthreetwo.jpg')}}" alt="">
                                </div>

                            </div>
                            <div class="slot-grid-item">
                                <div class="slot-image">
                                    <img src="{{asset('public/assets/trainerimages/stepthree.jpg')}}" alt="">
                                </div>

                            </div>
                            <div class="slot-grid-item">
                                <div class="slot-image">
                                    <img src="{{asset('public/assets/trainerimages/stepthreefour.jpg')}}" alt="">
                                </div>

                            </div>
                            <div class="slot-grid-item">
                                <div class="slot-image">
                                    <img src="{{asset('public/assets/trainerimages/stepthreefive.jpg')}}" alt="">
                                </div>

                            </div>

                        </div>
                        <div class="slot-wrapper-heading px-3 my-3">
                            <div class="left-slot-heading">
                                <h1>Yoga</h1>
                                <h2 class="pt-2">Italian Yoga</h2>
                            </div>
                            <div class="right-slot-heading">
                                <h1>$100</h1>
                            </div>
                        </div>
                        <div class="slot-timing-stacks stack-timing-one">
                            <div class="timing-stack timing-stack-one px-3 my-3">
                                <div class="timing-stack-inner">
                                    <div class="week-name">
                                        <h1>Mon:</h1>
                                    </div>
                                    <div class="stack-time">
                                        <div class="time-stack-outer px-4 ">
                                            <div class="time-stack-inner m-2">
                                                <p class="mb-0">9 am to 10 am</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="stack-categories pb-2">
                                    <div class="row  text-center">
                                        <div class="col-md-6">
                                            <div class="w-100 d-lg-flex align-items-center">
                                                <h1>Difficulty Level:</h1>
                                                <span>Lorem ipsum </span>
                                            </div>
                                            <div class="w-100 d-lg-flex align-items-center">
                                                <h1>Session Type:</h1>
                                                <span>Lorem ipsum </span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="w-100 d-lg-flex align-items-center">
                                                <h1>Class Type:</h1>
                                                <span>Lorem ipsum </span>
                                            </div>
                                            <div class="w-100 d-lg-flex align-items-center">
                                                <h1>Preference:</h1>
                                                <span>Lorem ipsum </span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-12">
                            <div class="slot-arrow slot-arrow-one text-center">
                                <i class="fa fa-angle-double-down down-arrow" aria-hidden="true"></i>
                                <i class="fa fa-angle-double-up up-arrow" aria-hidden="true"></i>
                            </div>
                        </div>

                    </div> -->
                </div>
                <!-- Payment Info -->
                <div class="col-12 content-right-certificate-header px-0">
                    <h1 class="py-3 pl-sm-3">Payment Info</h1>
                </div>
                <div class="content-right-payment-body p-3">
                    <div class="payment-body pb-4">
                        <h1 class="stripe">stripe</h1>
                        <!-- <div class="content-right-certificate-btn px-0 text-right">
                            <button><i class="fa fa-pencil-square-o mr-1" aria-hidden="true"></i>Edit</button>
                        </div> -->

                    </div>
                    <div class="profile-body pr-sm-5 mr-lg-5 pr-lg-5">
                        <h1 class="py-2"><img src="{{asset('public/assets/trainerimages/message-icon.png')}}" alt="">{{$trainer['email']}}</h1>
                        <h1 class="py-2"><img src="{{asset('public/assets/trainerimages/phone-icon.png')}}" alt="">{{$trainer['phone']}}</h1>
                    </div>
                </div>
                <!-- buttons -->
                <div class="col-12 step-five-buttons pt-5 pb-3 px-0">
                    <a href="{{route('trainer/submit_request')}}">
                        <button class="m-2">Submit</button>
                    </a>
                    <!-- <button class="m-2"><i class="fa fa-pencil-square-o mr-1" aria-hidden="true"></i>Edit</button> -->
                </div>
            </div>
        </div>
    </div>

</div>
<!-- modal -->
<div class="modal fade" id="sucessModal" tabindex="-1" role="dialog" aria-labelledby="signupModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content signupModalDialogue">
            <div class="modalHeader px-2 pt-2 pb-2 d-flex justify-content-end align-items-center">
                <img class="cross-icon" style="width: 8%;" data-dismiss="modal" src="{{asset('public/assets/images/x-circle.svg')}}" alt="">
            </div>
            <div class="modal-body text-center sucess-modal">
                <img style="width:60%;margin:0 auto" src="{{asset('public/assets/images/sucess.svg')}}" alt="">
                <h1 class="mt-2">Success!</h1>
                <p>Your Request to become a trainer has
                    been send we will respond you in
                    5 working days!</p>
            </div>
        </div>
    </div>
</div>
<!-- <div class="custom-modal">
    <h1>Your request of become a trainer is in review we will update you in 5 working days !</h1>
</div> -->
<!-- edit modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="signupModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialogs" role="document">
        <div class="modal-content signupModalDialogue">
            <div class="modalHeader px-2 pt-2 pb-2 d-flex justify-content-end align-items-center">
                <img class="cross-icon" style="width:30px;" data-dismiss="modal" src="{{asset('public/assets/images/x-circle.svg')}}" alt="">
            </div>
            <div class="modal-body text-center sucess-modal">
                <form action="{{route('trainer/update_session')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <input type="hidden" value="" name="session_id" id="session_id">
                        <div class="col-md-6" data-aos="fade-right">
                            <div class="form-group pro-form">
                                <label for="inputAddress" class=" ">Select Category</label>
                                <div class="select-outer">
                                    <select class="wide s-select form-control pl-4 " name="category_id" id="category_id">
                                        @foreach($category as $categories)
                                        <option value="{{$categories['id']}}">{{$categories['title']}}</option>
                                        @endforeach
                                    </select>
                                    <!-- <i class="fa fa-chevron-down" aria-hidden="true"></i> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-left">
                            <div class="form-group pro-form">
                                <label for="inputAddress" class=" " id="sub_category">Category Description</label>
                                <textarea type="text" class="form-control pl-4 text-area" id="inputAddress" placeholder="" value="" name="category_description"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-right">
                            <div class="form-group pro-form">
                                <label for="inputAddress2" class=" ">Difficulty Level</label>
                                <div class="difficulty-level">
                                    <input type="text" class="form-control py-2" name="difficulty_level" value="Beginner" readonly>
                                    <input type="text" class="form-control py-2 mx-3" id="inputAddress2" value="Intermediate" readonly>
                                    <input type="text" class="form-control py-2" id="inputAddress2" value="Advanced" readonly>
                                    <input type="hidden" class="form-control py-2" id="difficulty_level" name="difficulty" value="">

                                </div>

                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-left">
                            <div class="form-group pro-form">
                                <label for="inputAddress2" class=" ">Price</label>
                                <div class="price-outer">
                                    <!-- <div class="price-box">
                            <h1>HKD</h1>
                        </div> -->
                                    <div class="price-select-input">
                                        <div class="select-outer">
                                            <select class="wide s-select currency-select form-control " id="price_unit" name="priceUnit">
                                                <option>USD</option>
                                                <option>EURO</option>
                                                <option>YEN</option>
                                                <option>GBP</option>
                                                <option>PKR</option>
                                            </select>
                                            <!-- <i class="fa fa-chevron-down" aria-hidden="true"></i> -->
                                        </div>
                                        <input type="text" class="form-control pl-4" id="price" value="100" name="price">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6 pb-2" data-aos="fade-right">
                            <div class="form-group pro-form">
                                <label for="inputAddress" class=" ">Session Type</label>
                                <div class="select-outer">
                                    <select class="wide s-select form-control pl-4" id="type" name="type">
                                        <option value="onetoone">One to one</option>
                                        <option value="group">Group</option>
                                    </select>
                                    <!-- <i class="fa fa-chevron-down" aria-hidden="true"></i> -->
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="fade-right">
                            <div class="form-group pro-form">
                                <label for="inputAddress" class=" ">Days</label>
                                <div class="select-outer">
                                    <select class="wide s-select form-control pl-4" id="day" name="day">
                                        <option value="mon">Monday</option>
                                        <option value="tue">Tuesday</option>
                                        <option value="wed">Wednesday</option>
                                        <option value="thu">Thursday</option>
                                        <option value="fri">Friday</option>
                                        <option value="sat">Saturday</option>
                                        <option value="sun">Sunday</option>
                                    </select>
                                    <!-- <i class="fa fa-chevron-down" aria-hidden="true"></i> -->
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6" data-aos="fade-right">
                            <div class="form-group pro-form">
                                <label for="inputAddress" class=" ">Date</label>
                                <input type="date" class="form-control pl-4" id="sessionDate" placeholder="" name="sessionDate">
                            </div>

                        </div>

                        <div class="col-md-6 pb-2" data-aos="fade-right">
                            <div class="form-group pro-form">
                                <label for="inputAddress" class=" ">Class Type</label>
                                <div class="select-outer">
                                    <select class="wide s-select form-control pl-4" id="session_type" name="sessionType">

                                        <option value="">--select--</option>
                                        <option value="0">Online</option>
                                        <option value="1">In-person</option>
                                    </select>
                                    <!-- <i class="fa fa-chevron-down" aria-hidden="true"></i> -->
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 " data-aos="fade-right">
                            <div class="form-group pro-form">
                                <label for="inputAddress" class=" ">Preference</label>
                                <div class="select-outer">
                                    <select class="wide s-select form-control pl-4" id="preference" name="preference">
                                        <option value="0">One Time</option>
                                        <option value="1">Recurring</option>
                                    </select>
                                    <!-- <i class="fa fa-chevron-down" aria-hidden="true"></i> -->
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6 " data-aos="fade-left">
                            <div class="form-group pro-form">
                                <label for="inputAddress" class=" ">Time slot</label>
                                <div class="time-form">
                                    <div class="time-form-field pro-form">
                                        <input type="time" class="form-control py-4" id="startTime" name="startTime">
                                        <!-- <img src="{{asset('public/assets/images/clock-icon.png')}}" alt=""> -->
                                    </div>
                                    <div class="time-form-field mx-sm-3 my-4 my-sm-0">
                                        <h1>to</h1>
                                    </div>

                                    <div class="time-form-field pro-form mb-3 mb-sm-0 mr-sm-2">
                                        <input type="time" class="form-control py-4 " id="endTime" name="endTime" placeholder="">
                                        <!-- <img src="{{asset('public/assets/images/clock-icon.png')}}" alt=""> -->
                                    </div>

                                    <!-- <button class="">Add</button> -->
                                </div>

                            </div>
                        </div>
                        @if(isset($locations) & !empty($locations))
                        <div class="col-md-6" data-aos="fade-right" id="s_location">
                            <div class="form-group pro-form">
                                <label for="inputAddress" class=" ">Select Location</label>
                                <div class="select-outer">
                                    <select class="wide s-select form-control pl-4" value="{{$locations[0]['id']}}" name="location" id="location_id">
                                        @foreach($locations as $location)
                                        <option class="categoryOptions" value="{{$location['id']}}">{{$location['location']}} | {{$location['tag']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="updateinfo-qualification my-4 px-3 ">
                        <h1 class="mb-4">Upload Image</h1>
                        <div class="update-info-qualification-image">
                            <label>
                                <img src="{{asset('public/assets/trainerimages/uploadimg.svg')}}">
                                <input type="file" name="myfile[]" id="choose-file" style="display:none" accept="image/png, image/svg, image/jpeg" multiple>
                            </label>
                            <div id="img-preview" class="d-flex">

                            </div>
                        </div>
                    </div>
                    <div class="form-btn my-5 ">

                        <button class="p-0 btn" type="submit">Done</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--delete modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="signupModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content signupModalDialogue">
            <div class="modalHeader px-2 pt-2 pb-2 d-flex justify-content-end align-items-center">
                <img class="cross-icon" style="width:30px;" data-dismiss="modal" src="{{asset('public/assets/images/x-circle.svg')}}" alt="">
            </div>
            <form action="{{route('trainer/delete_session')}}" method="post">
                @csrf
                <div class="modal-body text-center sucess-modal ">
                    <img style="width:40%;margin:0 auto" src="{{asset('public/assets/trainerimages/q-modal.svg')}}" alt="">
                    <p class="mb-0 py-3">Do you really want to delete <br> this?</p>
                    <input type="hidden" id="delete_session" value="" name="session_id">
                    <div class=" modal-btn text-sm-right text-center">
                        <!-- <a href="#" class="update-profile-form-btn btn" data-dismiss="modal">Confirm</a> -->
                        <button class=" p-0 btn">Confirm</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
@section('insertsfooter')
@if(session()->has('successCode') && session()->get('successCode') == 1)
<script>
    $('#sucessModal').modal('show');
</script>
@endif
<script src="{{ asset('public/assets/js/jquery.nice-select.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.s-select').niceSelect();
    });
</script>
<script>
    // $('#sucessModal').modal({
    //     backdrop: 'static',
    //     keyboard: false
    // })
    // edit and delete 
    // show and hide
    // one
    $('.icon-div-one').hide();
    $('.dot-toggle-icon-one').click(function() {
        $(this).next().show();
        // $('.icon-div-two').hide();
    });
    // two
    $('.icon-div-two').hide();
    $('.dot-toggle-icon-two').click(function() {
        $('.icon-div-two').show();
        $('.icon-div-one').hide();
    });
    $(document).mouseup(function(e) {
        var container = $(".box");

        // if the target of the click isn't the container nor a descendant of the container
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            container.hide();
        }
    });
    // time slot
    // show and hide
    // one
    $(".dot-toggle-icon-one").click(function() {
        $(this).next().css('display', 'block');
    })
    $('.stack-timing-one').hide();
    $('.slot-arrow-one .up-arrow').hide();
    // $('.slot-arrow-one .down-arrow').click(function() {
    //     $('.stack-timing-one').show(1000);
    //     $('.slot-arrow-one .up-arrow').show(1000);
    //     $('.slot-arrow-one .down-arrow').hide(1000);

    // });
    $('.slot-arrow-one .down-arrow').click(function() {
        const cardBody = $(this).closest('.slot-wrapper').find('.stack-timing-one');
        const dropIcon = $(this).closest('.slot-wrapper').find('.slot-arrow-one .up-arrow');
        const upIcon = $(this).closest('.slot-wrapper').find('.slot-arrow-one .down-arrow');
        cardBody.show(1000);
        dropIcon.show(1000);
        upIcon.hide(1000);
    });
    $('.slot-arrow-one .up-arrow').click(function() {
        const cardBody = $(this).closest('.slot-wrapper').find('.stack-timing-one');
        const dropIcon = $(this).closest('.slot-wrapper').find('.slot-arrow-one .up-arrow');
        const upIcon = $(this).closest('.slot-wrapper').find('.slot-arrow-one .down-arrow');
        cardBody.hide(1000);
        dropIcon.hide(1000);
        upIcon.show(1000);
    });
    // $('.slot-arrow-one .up-arrow').click(function() {
    //     $('.stack-timing-one').hide(1000);
    //     $('.slot-arrow-one .up-arrow').hide(1000);
    //     $('.slot-arrow-one .down-arrow').show(1000);
    // });
    // two
    $('.stack-timing-two').hide();
    $('.slot-arrow-two .up-arrow').hide();
    $('.slot-arrow-two .down-arrow').click(function() {
        $('.stack-timing-two').show(1000);
        $('.slot-arrow-two .up-arrow').show(1000);
        $('.slot-arrow-two .down-arrow').hide(1000);
    });
    $('.slot-arrow-two .up-arrow').click(function() {
        $('.stack-timing-two').hide(1000);
        $('.slot-arrow-two .up-arrow').hide(1000);
        $('.slot-arrow-two .down-arrow').show(1000);
    });
    // custom modal
    $('.custom-modal').hide();
    $('.cross-icon').click(function() {
        $('.custom-modal').show();
    });
</script>

<script>
    $(document).ready(function() {
        var sessionsArray = [];
        var images = [];
        var index = 0;


        const fileInput = document.getElementById('choose-file');
        const imagePreview = document.getElementById('img-preview');

        fileInput.addEventListener('change', function(e) {
            for (let i = 0; i < fileInput.files.length; i++) {
                const file = fileInput.files[i];
                const image = new Image();
                image.src = URL.createObjectURL(file);
                image.onload = function() {
                    URL.revokeObjectURL(image.src);
                };

                const imageWrapper = document.createElement('div');
                imageWrapper.classList.add('image-wrapper');
                imageWrapper.classList.add('position-relative');

                const imageCloseButton = document.createElement('a');
                imageCloseButton.classList.add('image-close-button');
                imageCloseButton.classList.add('closeBtn');
                imageCloseButton.setAttribute('type', 'btn');
                imageCloseButton.setAttribute('href', 'javascript:void(0)');
                imageCloseButton.innerHTML = `<img class="closeImg" src="{{asset('public/assets/trainerimages/cross-icon.svg')}}" alt="">`;

                const imageContainer = document.createElement('div');
                imageContainer.classList.add('image-container');

                imageContainer.appendChild(image);
                imageWrapper.appendChild(imageCloseButton);
                imageWrapper.appendChild(imageContainer);
                imagePreview.appendChild(imageWrapper);

                images.push(file);

                imageCloseButton.addEventListener('click', function() {
                    imageWrapper.remove();
                    let index = images.indexOf(file);
                    if (index > -1) {
                        images.splice(index, 1);
                    }
                });
            }
        });

        $(document).on('click', ".difficulties", function() {
            $('#difficulty_level').val($(this).val());
            $(".difficulties").removeClass('activeDifficulty');
            $(this).addClass('activeDifficulty');
        });
        $(document).on('click', ".categoryOption", function() {
            $('#category_id').attr('data-src', $(this).text());
        });

        $(document).on('change', '#preference', function() {
            if ($('#preference').val() == 1) {
                $("#sessionDate").attr('readonly', 'readonly');
            } else {
                $("#sessionDate").removeAttr('readonly');
            }
        })
        //////// session type////
        $(document).on('change', '#session_type', function() {
            if ($('#session_type').val() == 0) {

                $("#s_location").addClass('d-none');

            } else {
                $("#s_location").removeClass('d-none');


            }
        })

        $('#createSessionForm').submit(function(e) {

            validation = validateForm(e);
            if (validation.success == false) {
                e.preventDefault();
                let imageErrorText = ', Atleast 1 image is required.'
                if (validation.imageError > 0) {
                    swal({
                        title: "Some Fields Missing",
                        text: "Please fill all marked fields" + imageErrorText,
                        icon: "error",
                    });
                } else {
                    swal({
                        title: "Some Fields Missing",
                        text: "Please fill all marked fields",
                        icon: "error",
                    });
                }
                return;
            }
            e.preventDefault();
            var formData = new FormData(this);
            formData.append('index', index);
            formData.append('categoryName', $('#category_id').attr('data-src'));
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('session.render') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {

                    $('#slotsSection').append(data.html);
                    sessionsArray.push(data.data);
                    index++
                    resetForm();
                    console.log(sessionsArray);
                    if (sessionsArray.length > 0) {
                        $("#saveSession").removeAttr('disabled');
                    } else {
                        $("#saveSession").attr('disabled', 'disabled');
                    }
                }
            });
        });
        // });

        // Delete Session Slot 
        $(document).on('click', ".deleteSlot", function() {
            let rawIndex = $(this).attr('data-role');
            var index = parseInt(rawIndex.match(/\d+$/)[0], 10);
            sessionsArray.splice(index, 1);
            $(this).parent().parent().parent().parent().remove();
            if (sessionsArray.length < 1) {
                $("#saveSession").attr('disabled', 'disabled');
            }
        });


        // Edit Session Slot 
        $(document).on('click', ".editSlot", function() {
            let rawIndex = $(this).attr('data-role');
            var index = parseInt(rawIndex.match(/\d+$/)[0], 10);
            var slotData = sessionsArray[parseInt(index)];
            console.log(slotData);

            $("#category_id").val(slotData.category_id)
            $("#category_id").attr('data-src', slotData.category_id)
            $("#sub_category").val(slotData.subCategory)
            $("#" + slotData.difficulty).addClass('activeDifficulty')
            $("#difficulty").val(slotData.difficulty);
            $("#price_unit").val(slotData.priceUnit);
            $("#price").val(slotData.price);
            $("#type").val(slotData.type);
            $("#session_type").val(slotData.sessionType);
            $("#preference").val(slotData.preference);
            $("#day").val(slotData.day);
            $("#start_time").val(slotData.startTime);
            $("#end_time").val(slotData.endTime);


        });

        // Reset Form 
        function resetForm() {
            $('#category_id').prop('selectedIndex', 0);
            $('select').val('');
            $('select').niceSelect('update');
            $('#sub_category').val('');
            $('#difficulty_level').val('');
            $('#price').val('');
            $('#startTime').val('');
            $('#endTime').val('');
            $('#sessionDate').val('');
            $('#sessionDate').removeAttr('readonly');
            images.splice(0, images.length - 1);
            $("#difficulty").val('');
            $('.difficulties').removeClass('activeDifficulty');

        }

        // Form Validations 
        function validateForm(e) {
            e.preventDefault();
            errors = 0;
            imageError = 0;
            $("form#createSessionForm :input,form#createSessionForm select").each(function() {
                value = $(this).val();

                if (value == '') {
                    if ($(this).is("input")) {
                        // alert('input');
                        $(this).css('border', '1px solid red');
                        errors++;

                    } else if ($(this).is("select")) {
                        console.log($(this));
                        $(this).next().addClass('borderRed');
                        errors++;

                    }

                    if ($(this).is("input[type='file']")) {
                        console.log($(this));
                        imageError++;
                    }
                } else {
                    $(this).css('border', '1px solid rgba(0, 0, 0, 0.2)');
                    $(this).next().removeClass('borderRed');
                }
            });
            if (errors > 0) {
                return {
                    'success': false,
                    'imageError': imageError
                };
            }
            return {
                'success': true,
                'imageError': imageError
            };
        }

        // Save Session API Call 
        $(document).on('click', "#saveSession", function() {
            $('.loaderDiv').show();


            var sessionsData = {
                allSessions: sessionsArray
            };
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ url('api/trainer_detail') }}",
                type: "POST",
                data: sessionsData,
                cache: false,
                success: function(data) {
                    console.log(data)
                    $('.loaderDiv').hide();
                    window.location.href = '/workitpt_web/trainer/stepfive';
                }
            });
        });
    });


    $('.edit_session').click(function() {


        let session_id = $(this).find('.session_id').val();
        // alert(session_id);

        $("#session_id").val(session_id);
    });
    $('.delete_session').click(function() {


        let session_id = $(this).find('.session_id').val();
        $("#delete_session").val(session_id);
    });
</script>
@endsection