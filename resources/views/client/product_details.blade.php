<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="{{ asset('client/img/fav-desert.png') }}" type="image/png" />

    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('client/fonts/Europa Regular (1).ttf') }}" />
    <link rel="stylesheet" href="{{ asset('client/fonts/Adventium.ttf') }}" />

    <!-- fontawsome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('client/css/styles.css') }}" />
    <link rel="stylesheet" href="{{ asset('client/css/responsive.css') }}" />

    <!-- time accordion -->
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->

    <title>Desert safari-dubai</title>
    <style>
        .header-video__responsive-wrapper iframe,
        .header-video__responsive-wrapper object {
            height: 577px;
            left: 50%;
            position: relative;
            top: 4px;
            transform: translateX(-50%);
            width: 1385.77px;
        }

        /* product quantity */
        .product-quantity {
            width: 10rem;
            display: block;
        }

        .quantity-selectors-container {
            display: inline-block;
            vertical-align: top;
            margin: 0;
            padding: 0;
        }

        .quantity-selectors {
            /* display: flex;
  flex-direction: column;
  margin: 0;
  padding: 0; */
        }

        .quantity-selectors button {
            -webkit-appearance: none;
            appearance: none;
            margin: 0;
            border-radius: 0;
            background-color: #1d1d1d;
            color: grey;
        }

        .quantity-selectors button:first-child {
            border-bottom: 0;
        }

        .quantity-selectors button:hover {
            cursor: pointer;
        }

        .quantity-selectors button[disabled="disabled"] {
            cursor: not-allowed;
        }

        .quantity-selectors button[disabled="disabled"] span {
            opacity: 0.5;
        }

        /* product quantity */
        /* @media only screen and (min-width: 768px)
{
.header-video__responsive-wrapper embed, .header-video__responsive-wrapper iframe, .header-video__responsive-wrapper object {
    height: 100%;
    width: 100%;
}
} */

        /* modal popup start */
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        body {
            background: #000;
            color: #000;
        }

        .swiper {
            width: 100%;
            height: 300px;
            margin-left: auto;
            margin-right: auto;
        }

        .swiper-slide {
            background-size: cover;
            background-position: center;
        }

        .mySwiper2 {
            height: 80%;
            width: 100%;
        }

        .mySwiper {
            height: 20%;
            box-sizing: border-box;
            padding: 10px 0;
        }

        .mySwiper .swiper-slide {
            width: 25%;
            height: 100%;
            opacity: 0.4;
        }

        .mySwiper .swiper-slide-thumb-active {
            opacity: 1;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* modal pop up */
        .modal {
            height: 100vh;
            display: grid;
            place-items: center;
        }

        .modal__button {
            display: inline-block;
            background-color: #0a2b3a;
            color: #fff;
            padding: 1rem 1.25rem;
            border-radius: 0.5rem;
            transition: 0.3s;
        }

        .modal__button:hover {
            background-color: #320836;
        }

        .modal__container {
            position: fixed;
            top: 0;
            left: 0;
            background-color: hsla(var(--hue), 18%, 75%, 0.8);
            width: 100%;
            height: 100%;
            display: grid;
            align-items: flex-end;
            overflow: hidden;
            transition: all 0.3s;
            z-index: 9999;
            visibility: hidden;
            opacity: 0;
            background: #000000c7;
        }

        .modal__content {
            position: relative;
            background-color: var(--container-color);
            text-align: center;
            padding: 3rem 2rem 2rem;
            border-radius: 1rem 1rem 0 0;
            transition: all 0.3s;

            transform: translateY(10%);
        }

        .modal__img {
            width: 150px;
            margin-bottom: 0.75rem;
        }

        .modal__close {
            display: inline-flex;
            /* background-color:#000; */
            border-radius: 0.25rem;
            color: #fff;
            font-size: 1.5rem;
            position: absolute;
            top: 1rem;
            right: 2rem;
            cursor: pointer;
        }

        .modal__title {
            font-size: 1.4rem;
            color: var(--title-color);
            font-weight: 500;
        }

        .modal__description {
            margin-bottom: 1.5rem;
        }

        .modal__button-width {
            width: 50%;
        }

        .modal__button-link {
            display: block;
            margin: 1rem auto 0;
            background-color: transparent;
            color: var(--first-color);
            font-weight: 500;
        }

        /* Show modal */
        .show-modal {
            visibility: visible;
            opacity: 1;
        }

        .show-modal .modal__content {
            transform: translateY(0);
        }

        /*=============== BREAKPOINTS ===============*/
        /* For small devices */
        @media screen and (min-width: 576px) {
            .modal__content {
                margin: auto;
                height: 550px;
                width: 750px;
                border-radius: 1.25rem;
            }

            .modal__img {
                width: 170px;
            }
        }

        /* modal popup start */
        /* media query start */
        @media screen and(max-width:767px) {
            body {
                margin: 0px !important;
            }

            .base1-text h3 {
                font-size: 1.5rem;
            }
        }

        /* media query end */

        /* new navbar css */

        /* new navbar css */
        /* navbar start */
        @media screen and (min-width: 768px) {
            body {
                margin: 0;
            }

            .nav {
                height: calc(var(--header-height) + 1.5rem);
            }

            .nav__link {
                color: var(--white-color);
                text-transform: initial;
            }

            .nav__link:hover {
                color: var(--white-color);
            }

            .nav__dark {
                position: initial;
            }

            .nav__menu {
                display: flex;
                column-gap: 1rem;
            }

            .nav__list {
                flex-direction: row;
                column-gap: 2rem;
            }

            .nav__toggle,
            .nav__close {
                display: none;
            }

            .change-theme-name {
                display: none;
            }

            .change-theme {
                color: var(--white-color);
            }

            .active-link::before {
                background-color: var(--white-color);
            }

            .scroll-header .nav__link {
                color: var(--text-color);
            }

            .scroll-header .active-link {
                color: var(--title-color);
            }

            .scroll-header .active-link::before {
                background-color: var(--title-color);
            }

            .scroll-header .change-theme {
                color: var(--text-color);
            }

            .section {
                padding: 7rem 0 2rem;
            }

            .home__container {
                height: 100vh;
                grid-template-rows: 1.8fr 0.5fr;
            }

            .home__data {
                align-self: flex-end;
            }

            .home__social {
                flex-direction: row;
                align-self: flex-end;
                margin-bottom: 3rem;
                column-gap: 2.5rem;
            }

            .home__info {
                bottom: 3rem;
            }

            .about__container {
                grid-template-columns: repeat(3, 1fr);
                align-items: center;
            }

            .about__data,
            .about__title {
                text-align: initial;
            }

            .about__title {
                margin-bottom: var(--mb-1-5);
            }

            .about__description {
                margin-bottom: var(--mb-2);
            }

            .discover__container {
                width: 610px;
                margin-left: auto;
                margin-right: auto;
            }

            .discover__container,
            .place__container {
                padding-top: 2rem;
            }

            .experience__overlay:nth-child(1) {
                width: 363px;
                margin-right: 4rem;
            }

            .experience__overlay:nth-child(2) {
                width: 160px;
            }

            .subscribe__bg {
                background: none;
                padding: 0;
            }

            .subscribe__container {
                background-color: var(--first-color-second);
                padding: 3.5rem 0;
            }

            .subscribe__input {
                padding: 0 0.5rem;
            }

            .footer__rights {
                flex-direction: row;
                justify-content: space-around;
            }

            .cr__hd {
                /* font-size: 1.2rem; */
            }
        }

        /* navbar end */
        /* time picker */
        .timepicker_div {
            text-align: center;
        }

        .mdtimepicker {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            font-family: Roboto, sans-serif;
            font-size: 14px;
            background-color: rgba(10, 10, 10, 0.7);
            transition: background-color 0.28s ease;
            z-index: 100001;
        }

        .mdtimepicker.hidden {
            display: none;
        }

        .mdtimepicker.animate {
            background-color: transparent;
        }

        .mdtp__wrapper {
            position: absolute;
            display: flex;
            flex-direction: column;
            left: 50%;
            bottom: 24px;
            min-width: 280px;
            opacity: 1;
            user-select: none;
            border-radius: 2px;
            transform: translateX(-50%) scale(1);
            box-shadow: 0 11px 15px -7px rgba(0, 0, 0, 0.2),
                0 24px 38px 3px rgba(0, 0, 0, 0.14), 0 9px 46px 8px rgba(0, 0, 0, 0.12);
            transition: transform 0.28s ease, opacity 0.28s ease;
        }

        .mdtp__wrapper.animate {
            transform: translateX(-50%) scale(1.05);
            opacity: 0;
        }

        .mdtp__time_holder {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            font-size: 46px;
            padding: 20px 24px;
            color: rgba(255, 255, 255, 0.5);
            text-align: center;
            background-color: #333 !important;
        }

        .mdtp__time_holder>span {
            display: inline-block;
            line-height: 48px;
            cursor: default;
        }

        .mdtp__time_holder>span:not(.mdtp__timedots):not(.mdtp__ampm) {
            cursor: pointer;
            margin: 0 4px;
        }

        .mdtp__time_holder .mdtp__time_h.active,
        .mdtp__time_holder .mdtp__time_m.active {
            color: #fafafa;
        }

        .mdtp__time_holder .mdtp__ampm {
            font-size: 18px;
        }

        .mdtp__clock_holder {
            position: relative;
            padding: 20px;
            background-color: #fff;
        }

        .mdtp__clock_holder .mdtp__clock {
            position: relative;
            width: 250px;
            height: 250px;
            margin-bottom: 20px;
            border-radius: 50%;
            background-color: #eee;
        }

        .mdtp__clock .mdtp__am,
        .mdtp__clock .mdtp__pm {
            display: block;
            position: absolute;
            bottom: -8px;
            width: 36px;
            height: 36px;
            line-height: 36px;
            text-align: center;
            cursor: pointer;
            border-radius: 50%;
            border: 1px solid rgba(0, 0, 0, 0.1);
            background: rgba(0, 0, 0, 0.05);
            transition: background-color 0.2s ease, color 0.2s;
            z-index: 3;
        }

        .mdtp__clock .mdtp__am {
            left: -8px;
        }

        .mdtp__clock .mdtp__pm {
            right: -8px;
        }

        .mdtp__clock .mdtp__am:hover,
        .mdtp__clock .mdtp__pm:hover {
            background-color: rgba(0, 0, 0, 0.1);
        }

        .mdtp__clock .mdtp__am.active,
        .mdtp__clock .mdtp__pm.active {
            color: #fafafa;
            background-color: #1565c0;
        }

        .mdtp__clock .mdtp__clock_dot {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 4px;
            background-color: #1565c0;
            border-radius: 50%;
        }

        .mdtp__clock .mdtp__hour_holder,
        .mdtp__clock .mdtp__minute_holder {
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;
            opacity: 1;
            transform: scale(1);
            transition: transform 0.35s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.35s ease;
            overflow: hidden;
        }

        .mdtp__clock .mdtp__hour_holder.animate {
            transform: scale(1.2);
            opacity: 0;
        }

        .mdtp__clock .mdtp__minute_holder.animate {
            transform: scale(0.8);
            opacity: 0;
        }

        .mdtp__clock .mdtp__hour_holder.hidden,
        .mdtp__clock .mdtp__minute_holder.hidden {
            display: none;
        }

        .mdtp__clock .mdtp__digit {
            position: absolute;
            width: 50%;
            top: 50%;
            left: 0;
            margin-top: -16px;
            transform-origin: right center;
            z-index: 1;
        }

        .mdtp__clock .mdtp__digit span {
            display: inline-block;
            width: 32px;
            height: 32px;
            line-height: 32px;
            margin-left: 8px;
            text-align: center;
            border-radius: 50%;
            cursor: pointer;
            transition: background-color 0.28s, color 0.14s;
        }

        .mdtp__clock .mdtp__digit span:hover,
        .mdtp__digit.active span {
            background-color: #1565c0 !important;
            color: #fff;
            z-index: 2;
        }

        .mdtp__button,
        .mdtp__wrapper[data-theme="blue"] .mdtp__button {
            color: #1565c0;
        }

        .mdtp__digit.active:before {
            content: "";
            display: block;
            position: absolute;
            top: calc(50% - 1px);
            right: 0;
            height: 2px;
            width: calc(100% - 40px);
            background-color: #1565c0;
        }

        .mdtp__clock .mdtp__minute_holder .mdtp__digit {
            font-size: 13px;
        }

        .mdtp__clock .mdtp__minute_holder .mdtp__digit:not(.marker) {
            margin-top: -6px;
            height: 12px;
        }

        .mdtp__clock .mdtp__minute_holder .mdtp__digit:not(.marker).active:before {
            width: calc(100% - 26px);
        }

        .mdtp__clock .mdtp__minute_holder .mdtp__digit:not(.marker) span {
            width: 12px;
            height: 12px;
            line-height: 12px;
            margin-left: 14px;
        }

        .mdtp__clock .mdtp__minute_holder .mdtp__digit.marker {
            margin-top: -12px;
        }

        .mdtp__clock .mdtp__minute_holder .mdtp__digit.marker.active:before {
            width: calc(100% - 34px);
        }

        .mdtp__clock .mdtp__minute_holder .mdtp__digit.marker span {
            width: 24px;
            height: 24px;
            line-height: 24px;
            margin-left: 10px;
        }

        .mdtp__digit.rotate-6 {
            transform: rotate(6deg);
        }

        .mdtp__digit.rotate-6 span {
            transform: rotate(-6deg);
        }

        .mdtp__digit.rotate-12 {
            transform: rotate(12deg);
        }

        .mdtp__digit.rotate-12 span {
            transform: rotate(-12deg);
        }

        .mdtp__digit.rotate-18 {
            transform: rotate(18deg);
        }

        .mdtp__digit.rotate-18 span {
            transform: rotate(-18deg);
        }

        .mdtp__digit.rotate-24 {
            transform: rotate(24deg);
        }

        .mdtp__digit.rotate-24 span {
            transform: rotate(-24deg);
        }

        .mdtp__digit.rotate-30 {
            transform: rotate(30deg);
        }

        .mdtp__digit.rotate-30 span {
            transform: rotate(-30deg);
        }

        .mdtp__digit.rotate-36 {
            transform: rotate(36deg);
        }

        .mdtp__digit.rotate-36 span {
            transform: rotate(-36deg);
        }

        .mdtp__digit.rotate-42 {
            transform: rotate(42deg);
        }

        .mdtp__digit.rotate-42 span {
            transform: rotate(-42deg);
        }

        .mdtp__digit.rotate-48 {
            transform: rotate(48deg);
        }

        .mdtp__digit.rotate-48 span {
            transform: rotate(-48deg);
        }

        .mdtp__digit.rotate-54 {
            transform: rotate(54deg);
        }

        .mdtp__digit.rotate-54 span {
            transform: rotate(-54deg);
        }

        .mdtp__digit.rotate-60 {
            transform: rotate(60deg);
        }

        .mdtp__digit.rotate-60 span {
            transform: rotate(-60deg);
        }

        .mdtp__digit.rotate-66 {
            transform: rotate(66deg);
        }

        .mdtp__digit.rotate-66 span {
            transform: rotate(-66deg);
        }

        .mdtp__digit.rotate-72 {
            transform: rotate(72deg);
        }

        .mdtp__digit.rotate-72 span {
            transform: rotate(-72deg);
        }

        .mdtp__digit.rotate-78 {
            transform: rotate(78deg);
        }

        .mdtp__digit.rotate-78 span {
            transform: rotate(-78deg);
        }

        .mdtp__digit.rotate-84 {
            transform: rotate(84deg);
        }

        .mdtp__digit.rotate-84 span {
            transform: rotate(-84deg);
        }

        .mdtp__digit.rotate-90 {
            transform: rotate(90deg);
        }

        .mdtp__digit.rotate-90 span {
            transform: rotate(-90deg);
        }

        .mdtp__digit.rotate-96 {
            transform: rotate(96deg);
        }

        .mdtp__digit.rotate-96 span {
            transform: rotate(-96deg);
        }

        .mdtp__digit.rotate-102 {
            transform: rotate(102deg);
        }

        .mdtp__digit.rotate-102 span {
            transform: rotate(-102deg);
        }

        .mdtp__digit.rotate-108 {
            transform: rotate(108deg);
        }

        .mdtp__digit.rotate-108 span {
            transform: rotate(-108deg);
        }

        .mdtp__digit.rotate-114 {
            transform: rotate(114deg);
        }

        .mdtp__digit.rotate-114 span {
            transform: rotate(-114deg);
        }

        .mdtp__digit.rotate-120 {
            transform: rotate(120deg);
        }

        .mdtp__digit.rotate-120 span {
            transform: rotate(-120deg);
        }

        .mdtp__digit.rotate-126 {
            transform: rotate(126deg);
        }

        .mdtp__digit.rotate-126 span {
            transform: rotate(-126deg);
        }

        .mdtp__digit.rotate-132 {
            transform: rotate(132deg);
        }

        .mdtp__digit.rotate-132 span {
            transform: rotate(-132deg);
        }

        .mdtp__digit.rotate-138 {
            transform: rotate(138deg);
        }

        .mdtp__digit.rotate-138 span {
            transform: rotate(-138deg);
        }

        .mdtp__digit.rotate-144 {
            transform: rotate(144deg);
        }

        .mdtp__digit.rotate-144 span {
            transform: rotate(-144deg);
        }

        .mdtp__digit.rotate-150 {
            transform: rotate(150deg);
        }

        .mdtp__digit.rotate-150 span {
            transform: rotate(-150deg);
        }

        .mdtp__digit.rotate-156 {
            transform: rotate(156deg);
        }

        .mdtp__digit.rotate-156 span {
            transform: rotate(-156deg);
        }

        .mdtp__digit.rotate-162 {
            transform: rotate(162deg);
        }

        .mdtp__digit.rotate-162 span {
            transform: rotate(-162deg);
        }

        .mdtp__digit.rotate-168 {
            transform: rotate(168deg);
        }

        .mdtp__digit.rotate-168 span {
            transform: rotate(-168deg);
        }

        .mdtp__digit.rotate-174 {
            transform: rotate(174deg);
        }

        .mdtp__digit.rotate-174 span {
            transform: rotate(-174deg);
        }

        .mdtp__digit.rotate-180 {
            transform: rotate(180deg);
        }

        .mdtp__digit.rotate-180 span {
            transform: rotate(-180deg);
        }

        .mdtp__digit.rotate-186 {
            transform: rotate(186deg);
        }

        .mdtp__digit.rotate-186 span {
            transform: rotate(-186deg);
        }

        .mdtp__digit.rotate-192 {
            transform: rotate(192deg);
        }

        .mdtp__digit.rotate-192 span {
            transform: rotate(-192deg);
        }

        .mdtp__digit.rotate-198 {
            transform: rotate(198deg);
        }

        .mdtp__digit.rotate-198 span {
            transform: rotate(-198deg);
        }

        .mdtp__digit.rotate-204 {
            transform: rotate(204deg);
        }

        .mdtp__digit.rotate-204 span {
            transform: rotate(-204deg);
        }

        .mdtp__digit.rotate-210 {
            transform: rotate(210deg);
        }

        .mdtp__digit.rotate-210 span {
            transform: rotate(-210deg);
        }

        .mdtp__digit.rotate-216 {
            transform: rotate(216deg);
        }

        .mdtp__digit.rotate-216 span {
            transform: rotate(-216deg);
        }

        .mdtp__digit.rotate-222 {
            transform: rotate(222deg);
        }

        .mdtp__digit.rotate-222 span {
            transform: rotate(-222deg);
        }

        .mdtp__digit.rotate-228 {
            transform: rotate(228deg);
        }

        .mdtp__digit.rotate-228 span {
            transform: rotate(-228deg);
        }

        .mdtp__digit.rotate-234 {
            transform: rotate(234deg);
        }

        .mdtp__digit.rotate-234 span {
            transform: rotate(-234deg);
        }

        .mdtp__digit.rotate-240 {
            transform: rotate(240deg);
        }

        .mdtp__digit.rotate-240 span {
            transform: rotate(-240deg);
        }

        .mdtp__digit.rotate-246 {
            transform: rotate(246deg);
        }

        .mdtp__digit.rotate-246 span {
            transform: rotate(-246deg);
        }

        .mdtp__digit.rotate-252 {
            transform: rotate(252deg);
        }

        .mdtp__digit.rotate-252 span {
            transform: rotate(-252deg);
        }

        .mdtp__digit.rotate-258 {
            transform: rotate(258deg);
        }

        .mdtp__digit.rotate-258 span {
            transform: rotate(-258deg);
        }

        .mdtp__digit.rotate-264 {
            transform: rotate(264deg);
        }

        .mdtp__digit.rotate-264 span {
            transform: rotate(-264deg);
        }

        .mdtp__digit.rotate-270 {
            transform: rotate(270deg);
        }

        .mdtp__digit.rotate-270 span {
            transform: rotate(-270deg);
        }

        .mdtp__digit.rotate-276 {
            transform: rotate(276deg);
        }

        .mdtp__digit.rotate-276 span {
            transform: rotate(-276deg);
        }

        .mdtp__digit.rotate-282 {
            transform: rotate(282deg);
        }

        .mdtp__digit.rotate-282 span {
            transform: rotate(-282deg);
        }

        .mdtp__digit.rotate-288 {
            transform: rotate(288deg);
        }

        .mdtp__digit.rotate-288 span {
            transform: rotate(-288deg);
        }

        .mdtp__digit.rotate-294 {
            transform: rotate(294deg);
        }

        .mdtp__digit.rotate-294 span {
            transform: rotate(-294deg);
        }

        .mdtp__digit.rotate-300 {
            transform: rotate(300deg);
        }

        .mdtp__digit.rotate-300 span {
            transform: rotate(-300deg);
        }

        .mdtp__digit.rotate-306 {
            transform: rotate(306deg);
        }

        .mdtp__digit.rotate-306 span {
            transform: rotate(-306deg);
        }

        .mdtp__digit.rotate-312 {
            transform: rotate(312deg);
        }

        .mdtp__digit.rotate-312 span {
            transform: rotate(-312deg);
        }

        .mdtp__digit.rotate-318 {
            transform: rotate(318deg);
        }

        .mdtp__digit.rotate-318 span {
            transform: rotate(-318deg);
        }

        .mdtp__digit.rotate-324 {
            transform: rotate(324deg);
        }

        .mdtp__digit.rotate-324 span {
            transform: rotate(-324deg);
        }

        .mdtp__digit.rotate-330 {
            transform: rotate(330deg);
        }

        .mdtp__digit.rotate-330 span {
            transform: rotate(-330deg);
        }

        .mdtp__digit.rotate-336 {
            transform: rotate(336deg);
        }

        .mdtp__digit.rotate-336 span {
            transform: rotate(-336deg);
        }

        .mdtp__digit.rotate-342 {
            transform: rotate(342deg);
        }

        .mdtp__digit.rotate-342 span {
            transform: rotate(-342deg);
        }

        .mdtp__digit.rotate-348 {
            transform: rotate(348deg);
        }

        .mdtp__digit.rotate-348 span {
            transform: rotate(-348deg);
        }

        .mdtp__digit.rotate-354 {
            transform: rotate(354deg);
        }

        .mdtp__digit.rotate-354 span {
            transform: rotate(-354deg);
        }

        .mdtp__digit.rotate-360 {
            transform: rotate(360deg);
        }

        .mdtp__digit.rotate-360 span {
            transform: rotate(-360deg);
        }

        .mdtp__buttons {
            margin: 0 -10px -10px;
            text-align: right;
        }

        .mdtp__button {
            display: inline-block;
            padding: 0 16px;
            min-width: 50px;
            text-align: center;
            text-transform: uppercase;
            line-height: 32px;
            font-weight: 500;
            cursor: pointer;
        }

        .mdtp__button:hover {
            background-color: #e0e0e0;
        }

        .mdtp__wrapper[data-theme="blue"] .mdtp__clock .mdtp__am.active,
        .mdtp__wrapper[data-theme="blue"] .mdtp__clock .mdtp__clock_dot,
        .mdtp__wrapper[data-theme="blue"] .mdtp__clock .mdtp__pm.active,
        .mdtp__wrapper[data-theme="blue"] .mdtp__time_holder {
            background-color: #1565c0;
        }

        .mdtp__wrapper[data-theme="blue"] .mdtp__clock .mdtp__digit span:hover,
        .mdtp__wrapper[data-theme="blue"] .mdtp__digit.active span {
            background-color: #1565c0 !important;
        }

        .mdtp__wrapper[data-theme="blue"] .mdtp__digit.active:before {
            background-color: #1565c0;
        }

        .mdtp__wrapper[data-theme="red"] .mdtp__clock .mdtp__am.active,
        .mdtp__wrapper[data-theme="red"] .mdtp__clock .mdtp__clock_dot,
        .mdtp__wrapper[data-theme="red"] .mdtp__clock .mdtp__pm.active,
        .mdtp__wrapper[data-theme="red"] .mdtp__time_holder {
            background-color: #c62828;
        }

        .mdtp__wrapper[data-theme="red"] .mdtp__clock .mdtp__digit span:hover,
        .mdtp__wrapper[data-theme="red"] .mdtp__digit.active span {
            background-color: #c62828 !important;
        }

        .mdtp__wrapper[data-theme="red"] .mdtp__digit.active:before {
            background-color: #c62828;
        }

        .mdtp__wrapper[data-theme="red"] .mdtp__button {
            color: #c62828;
        }

        .mdtp__wrapper[data-theme="purple"] .mdtp__clock .mdtp__am.active,
        .mdtp__wrapper[data-theme="purple"] .mdtp__clock .mdtp__clock_dot,
        .mdtp__wrapper[data-theme="purple"] .mdtp__clock .mdtp__pm.active,
        .mdtp__wrapper[data-theme="purple"] .mdtp__time_holder {
            background-color: #6a1b9a;
        }

        .mdtp__wrapper[data-theme="purple"] .mdtp__clock .mdtp__digit span:hover,
        .mdtp__wrapper[data-theme="purple"] .mdtp__digit.active span {
            background-color: #6a1b9a !important;
        }

        .mdtp__wrapper[data-theme="purple"] .mdtp__digit.active:before {
            background-color: #6a1b9a;
        }

        .mdtp__wrapper[data-theme="purple"] .mdtp__button {
            color: #6a1b9a;
        }

        .mdtp__wrapper[data-theme="indigo"] .mdtp__clock .mdtp__am.active,
        .mdtp__wrapper[data-theme="indigo"] .mdtp__clock .mdtp__clock_dot,
        .mdtp__wrapper[data-theme="indigo"] .mdtp__clock .mdtp__pm.active,
        .mdtp__wrapper[data-theme="indigo"] .mdtp__time_holder {
            background-color: #283593;
        }

        .mdtp__wrapper[data-theme="indigo"] .mdtp__clock .mdtp__digit span:hover,
        .mdtp__wrapper[data-theme="indigo"] .mdtp__digit.active span {
            background-color: #283593 !important;
        }

        .mdtp__wrapper[data-theme="indigo"] .mdtp__digit.active:before {
            background-color: #283593;
        }

        .mdtp__wrapper[data-theme="indigo"] .mdtp__button {
            color: #283593;
        }

        .mdtp__wrapper[data-theme="teal"] .mdtp__clock .mdtp__am.active,
        .mdtp__wrapper[data-theme="teal"] .mdtp__clock .mdtp__clock_dot,
        .mdtp__wrapper[data-theme="teal"] .mdtp__clock .mdtp__pm.active,
        .mdtp__wrapper[data-theme="teal"] .mdtp__time_holder {
            background-color: #00695c;
        }

        .mdtp__wrapper[data-theme="teal"] .mdtp__clock .mdtp__digit span:hover,
        .mdtp__wrapper[data-theme="teal"] .mdtp__digit.active span {
            background-color: #00695c !important;
        }

        .mdtp__wrapper[data-theme="teal"] .mdtp__digit.active:before {
            background-color: #00695c;
        }

        .mdtp__wrapper[data-theme="teal"] .mdtp__button {
            color: #00695c;
        }

        .mdtp__wrapper[data-theme="green"] .mdtp__clock .mdtp__am.active,
        .mdtp__wrapper[data-theme="green"] .mdtp__clock .mdtp__clock_dot,
        .mdtp__wrapper[data-theme="green"] .mdtp__clock .mdtp__pm.active,
        .mdtp__wrapper[data-theme="green"] .mdtp__time_holder {
            background-color: #2e7d32;
        }

        .mdtp__wrapper[data-theme="green"] .mdtp__clock .mdtp__digit span:hover,
        .mdtp__wrapper[data-theme="green"] .mdtp__digit.active span {
            background-color: #2e7d32 !important;
        }

        .mdtp__wrapper[data-theme="green"] .mdtp__digit.active:before {
            background-color: #2e7d32;
        }

        .mdtp__wrapper[data-theme="green"] .mdtp__button {
            color: #2e7d32;
        }

        @media (max-height: 360px) {
            .mdtp__wrapper {
                flex-direction: row;
                bottom: 8px;
            }

            .mdtp__time_holder {
                width: 160px;
                padding: 20px;
            }

            .mdtp__clock_holder {
                padding: 16px;
            }

            .mdtp__clock .mdtp__am,
            .mdtp__clock .mdtp__pm {
                bottom: -4px;
            }

            .mdtp__clock .mdtp__am {
                left: -4px;
            }

            .mdtp__clock .mdtp__pm {
                right: -4px;
            }
        }

        @media (max-height: 320px) {
            .mdtp__wrapper {
                bottom: 0;
            }
        }

        .time__pickers {
            width: 100%;
            display: inline-block;
            background-color: #ffffff !important;
            opacity: 1;
            border: none !important;
            outline: none !important;
        }

        /* time picker */
    </style>
</head>

<body>
    <div class="top__menu">
        <div class="top__menu__container">
            <div class="top__menu__sub_c epp__desk">
                <div class="typ">
                    <img src="{{asset('client/img/fav-desert.png')}}" class="nav__logo" style="width: 25px;" />
                </div>

                <div class="top__menu__titles">
                    <a href="{{url('about_us')}}"><span class="tp__head">ABOUT US</span></a>
                </div>
                <div class="top__menu__titles">
                    <span class="tp__head">FAQ</span>
                </div>
                <div class="top__menu__titles">
                    <span class="tp__head">BLOGS</span>
                </div>
             
            </div>

            <div class="top__menu__sub_c epp__mob">
                <div class="typ">
                    <img src="{{asset('client/img/fav-desert.png')}}" class="nav__logo" style="width: 25px;" />
                </div>
            </div>

            <!-- new nav section start -->

            <!-- new nav section end -->

            <div class="vgb">
                <div>
                    <ul class="ert">
                        <li class="lipp">
                            <i class="bx bxl-facebook tp__sc"></i>
                        </li>
                        <li class="lipp">
                            <i class="bx bxl-instagram tp__sc"></i>
                        </li>
                        <li class="lipp">
                            <i class="bx bxl-whatsapp tp__sc"></i>
                        </li>
                        <li class="lipp">
                            <i class="bx bxl-youtube tp__sc"></i>
                        </li>
                        <li class="lipp">
                            <i class="bx bxl-twitter tp__sc"></i>
                        </li>
                        <li class="lipp">
                            <i class="bx bxl-tiktok tp__sc"></i>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- modal popup content -->

            <div style="border-radius: 20px; background: #000000;" class="remodal" data-remodal-id="modal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
               
                <div class="" style="margin-top: 15px;">
                    <div class="review-orders" style="height: 400px; overflow: scroll; overflow-x: hidden;">
                        <div class="order-sections"></div>
                        <!-- 1st card -->

                        <div class="main-card1">
                            <div class="card-body-1">
                                <div class="left-order-sec">
                                    <img class="main__card__img" src="{{asset('client/img/quad-bike/quad-bike1-small.png')}}" alt="" />
                                </div>
                                <div class="right_modal-sec1">
                                    <div class="right__text-sec1">
                                        <p>
                                            Polaris 1000CC 4Seater Buggy <br />
                                            Rental in an open Desert Safari
                                        </p>
                                        <p>Non-refundable</p>
                                        <div class="product-quantity" style="text-align: left;">
                                            <!-- <h3>Quantity</h3> -->
                                            <input class="input__modal_number1" data-min="1" data-max="0" type="text" name="quantity" value="1" readonly="true" />
                                            <div class="quantity-selectors-container">
                                                <div class="quantity-selectors">
                                                    <button type="button" class="decrement-quantity substract__modal__menu1" aria-label="Subtract one" data-direction="-1" disabled="disabled">
                                                        <span style="position: relative; bottom: 1px;">&#8722;</span>
                                                    </button>
                                                    <button type="button" class="increment-quantity icrement__modal__menu1" aria-label="Add one" data-direction="1"><span style="position: relative; bottom: 1px;">&#43;</span></button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- quantity section -->
                                    </div>
                                </div>

                                <div class="total__modal-sec1">
                                    <p class="total__modal_p">Price</p>
                                    <p class="total__modal_p2">AED 1250</p>
                                </div>
                            </div>
                        </div>
                        <!-- 1st card -->
                        <!-- second -->
                        <div class="main-card1">
                            <div class="card-body-1">
                                <div class="left-order-sec">
                                    <img class="main__card__img" src="{{asset('client/img/quad-bike/quad-bike1-small.png')}}" alt="" />
                                </div>
                                <div class="right_modal-sec1">
                                    <div class="right__text-sec1">
                                        <p>
                                            Polaris 1000CC 4Seater Buggy <br />
                                            Rental in an open Desert Safari
                                        </p>
                                        <p>Non-refundable</p>
                                        <div class="product-quantity" style="text-align: left;">
                                            <!-- <h3>Quantity</h3> -->
                                            <input class="input__modal_number1" data-min="1" data-max="0" type="text" name="quantity" value="1" readonly="true" />
                                            <div class="quantity-selectors-container">
                                                <div class="quantity-selectors">
                                                    <button type="button" class="decrement-quantity substract__modal__menu1" aria-label="Subtract one" data-direction="-1" disabled="disabled">
                                                        <span style="position: relative; bottom: 1px;">&#8722;</span>
                                                    </button>
                                                    <button type="button" class="increment-quantity icrement__modal__menu1" aria-label="Add one" data-direction="1"><span style="position: relative; bottom: 1px;">&#43;</span></button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- quantity section -->
                                    </div>
                                </div>

                                <div class="total__modal-sec1">
                                    <p class="total__modal_p">Price</p>
                                    <p class="total__modal_p2">AED 1250</p>
                                </div>
                            </div>
                        </div>
                        <!-- second -->
                        <!-- third -->
                        <div class="main-card1">
                            <div class="card-body-1">
                                <div class="left-order-sec">
                                    <img class="main__card__img" src="{{asset('client/img/quad-bike/quad-bike1-small.png')}}" alt="" />
                                </div>
                                <div class="right_modal-sec1">
                                    <div class="right__text-sec1">
                                        <p>
                                            Polaris 1000CC 4Seater Buggy <br />
                                            Rental in an open Desert Safari
                                        </p>
                                        <p>Non-refundable</p>
                                        <div class="product-quantity" style="text-align: left;">
                                            <!-- <h3>Quantity</h3> -->
                                            <input class="input__modal_number1" data-min="1" data-max="0" type="text" name="quantity" value="1" readonly="true" />
                                            <div class="quantity-selectors-container">
                                                <div class="quantity-selectors">
                                                    <button type="button" class="decrement-quantity substract__modal__menu1" aria-label="Subtract one" data-direction="-1" disabled="disabled">
                                                        <span style="position: relative; bottom: 1px;">&#8722;</span>
                                                    </button>
                                                    <button type="button" class="increment-quantity icrement__modal__menu1" aria-label="Add one" data-direction="1"><span style="position: relative; bottom: 1px;">&#43;</span></button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- quantity section -->
                                    </div>
                                </div>

                                <div class="total__modal-sec1">
                                    <p class="total__modal_p">Price</p>
                                    <p class="total__modal_p2">AED 1250</p>
                                </div>
                            </div>
                        </div>
                        <!-- third -->
                    </div>
                </div>

                <!-- submit sec -->
                <div class="total_and__checkout">
                    <div class="sub__total-sec">
                        <p>Subtotal (3 item): <span style="font-weight: 600;"> AED 3,2056</span></p>
                    </div>
                    <div class="submit-section">
                        <a class="proceed__to__checkout_btn" href="checkout-main.html">Proceed to Checkout</a>
                    </div>
                </div>
                <!-- submit sec -->
            </div>
            <!-- modal popup content -->
        </div>
    </div>

    <header class="header">
        <nav class="nav container">
            <a href="{{url('/')}}" class="nav__logo banner__logo-sec"><img
                    src="{{ asset('client/images/logo-deserts.png') }}" alt="logo" /></a>
            <a href="{{url('/')}}" class="nav__logo banner__logo-sec logo__mobile"><img
                    src="{{ asset('client/images/logo-vertical.png') }}" alt="logo" /></a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="{{url('/')}}" class="nav__link">Home</a>
                    </li>
                    <li class="nav__item dropdown">
                        <a href="{{url('services')}}" class="nav__link">Quad Bike</a>
                        <ul class="dropdown-content">
                            <li>
                                <a href="{{url('product/one-seater-quad-bike-self-ride-to-open-desert')}}">1 Seater Quad
                                    Bike</a>
                                <a href="{{url('product/2-seater-quad-bike-self-ride-to-open-desert')}}">2 Seater Quad
                                    Bike</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav__item dropdown">
                        <a href="#" class="nav__link">Dune Buggy</a>
                        <ul class="dropdown-content">
                            <li>
                                <a href="{{url('product/one-seater-dune-buggy-self-ride-to-open-desert')}}">1 Seater
                                    Dune Buggy</a>
                                <a href="{{url('product/two-seater-dune-buggy-self-ride-to-open-desert')}}">2 Seater
                                    Dune Buggy</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav__item dropdown">
                        <a href="#" class="nav__link">Raptor</a>
                        <ul class="dropdown-content">
                            <li>
                                <a href="{{url('product/one-seater-raptor-self-ride-to-open-desert')}}">1 Seater
                                    Raptor</a>
                                <a href="{{url('product/ktm-motocross-open-desert-self-ride')}}">Ktm Motocross</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav__item">
                        <a href="{{url('product/private-standard-desert-safari-upto-5-persons')}}"
                            class="nav__link">Desert Safari</a>
                    </li>
               
                </ul>

                <!-- mobile-section navbar -->
                <div class="top-menu-main">
                    <div class="top__menu__titles top-menu-title1">
                        <span class="tp__head top-head-text">ABOUT US</span>
                    </div>
                    <div class="top__menu__titles top-menu-title1">
                        <span class="tp__head top-head-text">FAQ</span>
                    </div>
                    <div class="top__menu__titles top-menu-title1">
                        <span class="tp__head top-head-text">BLOGS</span>
                    </div>
                    <div class="top-menu-socialmedia">
                        <ul class="ert" style="padding-left: 0px;">
                            <li class="lipp">
                                <a href=https://www.facebook.com/profile.php?id=100077927416937"><i
                                        class="bx bxl-facebook tp__sc top-social-media"></i></a>
                            </li>
                            <li class="lipp">
                                <a href="https://www.instagram.com/deserthunttourism/?hl=en"><i
                                        class="bx bxl-instagram tp__sc top-social-media"></i></a>
                            </li>
                            <li class="lipp">
                                <a href="https://wa.me/+971504776839"><i
                                        class="bx bxl-whatsapp tp__sc top-social-media"></i></a>
                            </li>
                            <li class="lipp">
                                <a href="https://www.youtube.com/channel/UCY_eRcUC9Gxf-Pmrk6Hqn1Q/featured"><i
                                        class="bx bxl-youtube tp__sc top-social-media"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- mobile-section navbar -->

                <div class="nav__close" id="nav-close">
                    <i class="bx bx-x"></i>
                </div>
            </div>

            <!-- Toggle button -->
            <div class="nav__toggle" id="nav-toggle">
                <i class="bx bx-grid-alt"></i>
            </div>
        </nav>
    </header>

    <!-- new navbar start -->
    <nav class="navbar navbar-expand-lg navbar-light one-best">
        <div class="container-fluid">
            <button style="display: none;" class="navbar-toggler navbar-hamburger" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="display: block;">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="display: flex; flex-direction: row; gap: 5px;">
                    <li class="nav-item">
                        <a style="color: #fff;" class="nav-link active" aria-current="page"
                            href="#overview">Overview</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: rgb(204, 204, 204);" class="nav-link" href="#inclusion">Inclusion &
                            Exclusion</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: rgb(204, 204, 204);" class="nav-link" href="#faq">Faq</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: rgb(204, 204, 204);" class="nav-link" href="#suggest">Suggested</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: rgb(204, 204, 204);" class="nav-link" href="#review">Review</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- new navbar start -->
    <main class="main">
        <!--==================== HOME ====================-->
        <section id="base1">
            <div class="container">
                <div class="base1-text">
                    @foreach($product as $pdct)
                    <h3>{{ $pdct->product_name }}</h3>
                    @endforeach
                    <!-- <ul style="display: flex; gap: 0.5rem; padding-left: 0px;">
                        <li><i class="bx bxs-star"></i></li>
                        <li><i class="bx bxs-star"></i></li>
                        <li><i class="bx bxs-star"></i></li>
                        <li><i class="bx bxs-star"></i></li>
                        <li><i class="bx bxs-star"></i></li>
                        <p style="color: #fff; padding-left: 15px;">4.9 / 5</p>
                    </ul> -->
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        @foreach($product as $pdct)
                        <div class="row">
                            <div class="col-md-8">
                                <div class="one_seater-quad-bike" style="position: relative;">
                                    <img style="position: relative;" class="Quad-bike_1seater"
                                        src="{{ asset('uploads/product/'.$pdct->product_image1) }}" alt="" st />
                                    <i id="open-modal{{ @$no +=1; }}" class="fa-solid fa-eye modal-view-eye"></i>
                                    <div class="fade_bottom"></div>
                                </div>

                                <!-- modal pop up start -->
                                <div class="modal__container" id="modal-container">
                                    <div class="modal__content">
                                        <div class="modal__close close-modal" title="Close">
                                            <i class="bx bx-x"></i>
                                        </div>

                                        <!-- modal popup section -->
                                        <!-- Swiper -->

                                        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff;"
                                            class="swiper mySwiper2">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('uploads/product/'.$pdct->product_image1) }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('uploads/product/'.$pdct->product_image2) }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('uploads/product/'.$pdct->product_image3) }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('uploads/product/'.$pdct->product_image4) }}" />
                                                </div>


                                            </div>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                        </div>
                                        <div thumbsSlider="" class="swiper mySwiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img
                                                        src="{{ asset('uploads/product/'.$pdct->product_image1mob) }}" />
                                                </div>

                                                <div class="swiper-slide">
                                                    <img
                                                        src="{{ asset('uploads/product/'.$pdct->product_image2mob) }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('uploads/product/'.$pdct->product_image3) }}" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('uploads/product/'.$pdct->product_image4) }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal popup section -->
                                    </div>
                                </div>
                                <!-- modal pop up end -->
                                <p class="modal-bottom">
                                    {{$pdct->short_description}}
                                </p>
                            </div>

                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12 one_seater-quad-bike" style="position: relative;">
                                        <img class="desert-img1"
                                            src="{{ asset('uploads/product/'.$pdct->product_image2) }}" alt=""
                                            style="border-radius: 3px;" />
                                        <!-- <img class="desert-img2"
                                            src="{{ asset('uploads/product/'.$pdct->product_image2mob) }}" alt=""
                                            style="border-radius: 3px;" /> -->
                                        <i id="open-modal{{ @$no +=1; }}" class="fa-solid fa-eye modal-view-eye"></i>
                                        <div class="fade_bottom"></div>
                                    </div>
                                </div>
                                <div class="row" style="padding-top: 10px;">
                                    <div class="col-sm-6 col-md-6 one_seater-quad-bike" style="position: relative;">
                                        <img class="desert-img3"
                                            src="{{ asset('uploads/product/'.$pdct->product_image3) }}" alt=""
                                            style="width: 100%; border-radius: 3px;" />
                                        <!-- <img class="desert-img4"
                                            src="{{ asset('uploads/product/'.$pdct->product_image3) }}" alt=""
                                            style="width: 100%;" /> -->
                                        <i id="open-modal{{ @$no +=1; }}" class="fa-solid fa-eye modal-view-eye"></i>
                                        <div class="fade_bottom"></div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 one_seater-quad-bike" style="position: relative;">
                                        <!-- <img class="desert-img5"
                                            src="{{ asset('uploads/product/'.$pdct->product_image4) }}" alt=""
                                            style="width: 100%; border-radius: 3px;" /> -->
                                        <img class="desert-img6"
                                            src="{{ asset('uploads/product/'.$pdct->product_image4) }}" alt=""
                                            style="width: 100%;" />
                                        <i id="open-modal{{ @$no +=1; }}" class="fa-solid fa-eye modal-view-eye"></i>
                                        <div class="fade_bottom"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- navbar new section -->
        <!-- navbar new section -->
        <section id="overview">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">

                            <?php
foreach ($product as $pdct1) {
    echo ($pdct1->product_overview != '') ? $pdct1->product_overview : '<div class="col-lg-8"></div>';

}?>

                            <?php
foreach ($product as $pdct5) {
    $hb = $pdct5->hourly_billing;
    $fp = $pdct5->fixed_price;
    $regular_price_hour = $pdct5->regular_price_hour;
    $offer_price_hour = $pdct5->offer_price_hour;
    $regular_price_sharing_adult = $pdct5->regular_price_sharing_adult;
    $offer_price_sharing_adult = $pdct5->offer_price_sharing_adult;
    $regular_price_sharing_child = $pdct5->regular_price_sharing_child;
    $offer_price_sharing_child = $pdct5->offer_price_sharing_child;
    $regular_price_private_adult = $pdct5->regular_price_private_adult;
    $offer_price_private_adult = $pdct5->offer_price_private_adult;
    $regular_price_private_child = $pdct5->regular_price_private_child;
    $offer_price_private_child = $pdct5->offer_price_private_child;
    $fixed_regular_price = $pdct5->fixed_regular_price;
    ?>
                            <div class="col-lg-4">
                                <div class="qert"
                                    style="border: 1px solid #656464; border-radius: 10px; background-color: #080808; box-shadow: rgba(0, 0, 0, 0.08) 0px 4px 12px;">
                                    <!-- <h6 class="asdf">Book Your Slot</h6> -->
                                    <h3 style="text-align: center; color: #fff;" class="h3__huihui">Check Your
                                        Availability</h3>
                                    <div class="book-slot" style="padding-top: 12px;">
                                        <ul class="availability-sec">

                                            <?php
if ($hb == 1) {
        if ($offer_price_hour != '' && $offer_price_hour > 0 && $offer_price_hour != 0) {?>
                                            <li class="p__fhghh price-sec">Price <span
                                                    style="font-size: 0.9375rem; line-height: 1.67; color: #fff; font-weight: 500;"><span
                                                        id="item_price">
                                                        <?php echo $offer_price_hour; ?>
                                                    </span>
                                                    <span> / hours</span></li>
                                            <?php } else {
            ?>
                                            <li class="p__fhghh price-sec">Price <span
                                                    style="font-size: 0.9375rem; line-height: 1.67; color: #fff; font-weight: 500;"><span
                                                        id="item_price">
                                                        <?php echo $regular_price_hour; ?>
                                                    </span>
                                                    <span> / hours</span></li>
                                            <?php
}} else if ($fp == 1) {?>
                                            <li class="p__fhghh price-sec">Price <span
                                                    style="font-size: 0.9375rem; line-height: 1.67; color: #fff; font-weight: 500;"><span
                                                        id="item_price">
                                                        <?php echo $fixed_regular_price; ?>
                                                    </span>
                                            </li>
                                            <?php }

    ?>
                                            <?php
if ($hb != 1) {?>
                                            <li class="p__fhghh hours-sec">
                                                No. of Vehicles
                                                <div class="product-quantity">
                                                    <!-- <h3>Quantity</h3> -->
                                                    <input class="input____number1" style="

                                                            " data-min="0" data-max="0" type="text" name="quantity"
                                                        value="0" readonly="true" />
                                                    <div class="quantity-selectors-container">
                                                        <div class="quantity-selectors">
                                                            <button type="button"
                                                                class="decrement-quantity substract-sec substract___mobile1"
                                                                aria-label="Subtract one" data-direction="-1"
                                                                disabled="disabled">
                                                                <span>&#8722;</span>
                                                            </button>
                                                            <button style="" type="button"
                                                                class="increment-quantity adding-sec add___mobile2"
                                                                aria-label="Add one" data-direction="1">
                                                                <span>&#43;</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <?php }?>

                                                <div class="duration__time_sec">
                                                    <label class="time-section-2" style="" for="appt">Duration
                                                        :</label>
                                                    <select name="cars" id="cars" class="time-sec">
                                                        <option value="1">01 : 00 hour</option>
                                                        <option value=".15">15 min</option>
                                                        <option value=".30">30 min</option>

                                                        <option value="1.30">01 : 30 hour</option>
                                                        <option value="2">02 : 00 hour</option>
                                                        <option value="2.30">02 : 30 hour</option>
                                                        <option value="3">03 : 00 hour</option>
                                                        <option value="3.30">03 : 30 hour</option>
                                                        <option value="4">04 : 00 hour</option>
                                                        <option value="4.30">04 : 30 hour</option>
                                                        <option value="5">05 : 00 hour</option>
                                                        <option value="5.30">05 : 30 hour</option>
                                                    </select>
                                                </div>
                                                <!-- second -->
                                                <div class="date__input4">
                                                    <label class="date-sections" for="birthday">Date :</label>
                                                    <input class="date-input-sec" type="date" min="<?php echo date("
                                                        Y-m-d"); ?>" id="birthday"
                                                    name="birthday" />
                                                </div>
                                                <!-- 3rd  -->
                                                <div class="time__select__box">
                                                    <label class="time-section-2" style="" for="appt">Time :</label>
                                                    <!-- <input type="time" id="appt" name="appt" class="time-sec"> -->
                                                    <div class="timepicker_div" style="flex: 50%;">
                                                        <input type="text"
                                                            class="form-control timepicker time__pickers timea11"
                                                            placeholder="Select Time">
                                                    </div>
                                                </div>

                                            </li>




                                            <!-- <li class="equipment-fee">Sub Total <span
                                                    style="font-size: 0.9375rem; line-height: 1.67; color: #fff; font-weight: 500;">AED
                                                    100</span></li>
                                            <li class="facility-fee">VAT <span
                                                    style="font-size: 0.9375rem; line-height: 1.67; color: #fff; font-weight: 500;">AED
                                                    200</span></li>
                                            <li class="test-rental-2">Total <span
                                                    style="font-size: 0.9375rem; line-height: 1.67; color: #fff; font-weight: 500;">AED
                                                    570</span></li> -->
                                        </ul>
                                        <div class="submit-slot">
                                            <a href="#modal3_remove" style="background: transparent; font-weight: 600; border-radius: 3px;    padding: 10px;
                                                display: block; color: #fff;">Book Now</a>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </section>
        <?php
foreach ($product as $pdct3) {
    echo $pdct3->product_inclusion;
    echo $pdct3->product_faq;
}?>

        <section id="suggest" style="background-color: #000; padding-bottom: 80px;">
            <div class="container">
                <h2 class="suggested-h3">Suggested Services</h2>
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="rf__card">
                            <img src="{{ asset('client/img/home_page/Qbike_1seater.png') }}" class="abt__img" />
                            <div class="rf__card__sub">
                                <h2 class="cr__hd">SINGLE SEATER QUAD BIKE</h2>
                                <p class="cr__p">Ride solo on a self-drive quad bike into the open desert and feel the
                                    adrenaline pumping.All our riders are instructed ahead of the activity by our expert
                                    guides.</p>
                                <a href="{{url('product/1-seater-quad-bike-self-ride-to-open-desert')}}"
                                    class="button popi">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="rf__card">
                            <img src="{{ asset('client/img/home_page/raptor.png') }}" class="abt__img" />
                            <div class="rf__card__sub">
                                <h2 class="cr__hd">SINGLE SEATER RAPTOR</h2>
                                <p class="cr__p">Are you ready to ride a 700CC Raptor across the golden sand dunes of
                                    Dubai? This is a unique opportunity indegenouss to the UAE.</p>
                                <a href="{{url('product/one-seater-raptor-self-ride-to-open-desert')}}"
                                    class="button popi">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="rf__card">
                            <img src="{{ asset('client/img/home_page/polarise_1seater.png') }}" class="abt__img" />
                            <div class="rf__card__sub">
                                <h2 class="cr__hd">POLARISE DUNE BUGGY</h2>
                                <p class="cr__p">Do you love adventures? Feel the adrenaline pumping as you make those
                                    twists and turns with the curving sands.</p>
                                <a href="{{url('product/one-seater-dune-buggy-self-ride-to-open-desert')}}"
                                    class="button popi">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section id="review" style="background: #000;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <h3 style="font-size: 25px;">Reviews</h3>
                        <ul class="reviews" style="display: flex; gap: 0.5rem; padding-left: 0px; padding-top: 15px;">
                            <li style="color: #fff;">5.0 &nbsp; <i class="bx bxs-star"></i></li>
                            <li><i class="bx bxs-star"></i></li>
                            <li><i class="bx bxs-star"></i></li>
                            <li><i class="bx bxs-star"></i></li>
                            <li><i class="bx bxs-star"></i> &nbsp; <span style="color: #fff;">17 reviews</span></li>
                        </ul>

                        <div class="review-inner">
                            <p class="review-p1">Excellent</p>
                            <div class="progress-bar">
                                <div class="progress-bar-inner"></div>
                            </div>

                            <p class="review-r1">5/5</p>
                        </div>
                        <div class="review-inner2">
                            <p class="very-good">Good</p>
                            <div class="progress-bar2">
                                <div class="progress-bar-inner2"></div>
                            </div>
                            <p class="review-r2">4.3/5</p>
                        </div>
                        <div class="review-inner3">
                            <p class="review-p3">Average</p>
                            <div class="progress-bar3">
                                <div class="progress-bar-inner3"></div>
                            </div>

                            <p class="review-r3">4.8/5</p>
                        </div>
                        <div class="review-inner4">
                            <p class="review-p4">Poor</p>
                            <div class="progress-bar4">
                                <div class="progress-bar-inner4"></div>
                            </div>

                            <p class="review-r4">2.1/5</p>
                        </div>
                        <div class="review-inner5">
                            <p class="review-p5">Terrible</p>
                            <div class="progress-bar5">
                                <div class="progress-bar-inner5"></div>
                            </div>

                            <p class="review-r5">4.1/5</p>
                        </div>

                    </div>
                    <div class="col-lg-8">
                        <div class="review-section">
                            <div class="icon-review">
                                <img src="{{ asset('client/img/man.png') }}" alt="Avatar"
                                    style="max-width: 50px;" />
                                <h3 style="font-size: 14px; font-weight: 600;">Ashiq muhammed</h3>
                            </div>
                            <div class="star-sec">
                                <ul class="reviews-content">
                                    <li><i class="bx bxs-star"></i></li>
                                    <li><i class="bx bxs-star"></i></li>
                                    <li><i class="bx bxs-star"></i></li>
                                    <li><i class="bx bxs-star"></i></li>
                                    <li><i class="bx bxs-star"></i></li>
                                </ul>
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque, accusamus labore!
                                    Debitis omnis, totam iure aliquid praesentium odio saepe atque aspernatur
                                    consequatur veniam eius obcaecati? Nemo vel
                                    ab doloremque! Dolore!
                                </p>
                            </div>
                        </div>
                        <div class="review-section">
                            <div class="icon-review">
                                <img src="{{ asset('client/img/man.png') }}" alt="Avatar"
                                    style="max-width: 50px;" />
                                <h3 style="font-size: 14px; font-weight: 600;">Ashiq muhammed</h3>
                            </div>
                            <div class="star-sec">
                                <ul class="reviews-content">
                                    <li><i class="bx bxs-star"></i></li>
                                    <li><i class="bx bxs-star"></i></li>
                                    <li><i class="bx bxs-star"></i></li>
                                    <li><i class="bx bxs-star"></i></li>
                                    <li><i class="bx bxs-star"></i></li>
                                </ul>
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque, accusamus labore!
                                    Debitis omnis, totam iure aliquid praesentium odio saepe atque aspernatur
                                    consequatur veniam eius obcaecati? Nemo vel
                                    ab doloremque! Dolore!
                                </p>
                            </div>
                        </div>
                        <div class="review-section">
                            <div class="icon-review">
                                <img src="{{ asset('client/img/man.png') }}" alt="Avatar"
                                    style="max-width: 50px;" />
                                <h3 style="font-size: 14px; font-weight: 600;">Ashiq muhammed</h3>
                            </div>
                            <div class="star-sec">
                                <ul class="reviews-content">
                                    <li><i class="bx bxs-star"></i></li>
                                    <li><i class="bx bxs-star"></i></li>
                                    <li><i class="bx bxs-star"></i></li>
                                    <li><i class="bx bxs-star"></i></li>
                                    <li><i class="bx bxs-star"></i></li>
                                </ul>
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque, accusamus labore!
                                    Debitis omnis, totam iure aliquid praesentium odio saepe atque aspernatur
                                    consequatur veniam eius obcaecati? Nemo vel
                                    ab doloremque! Dolore!
                                </p>
                            </div>
                        </div>
                        <div class="review-section">
                            <div class="icon-review">
                                <img src="{{ asset('client/img/man.png') }}" alt="Avatar"
                                    style="max-width: 50px;" />
                                <h3 style="font-size: 14px; font-weight: 600;">Ashiq muhammed</h3>
                            </div>
                            <div class="star-sec">
                                <ul class="reviews-content">
                                    <li><i class="bx bxs-star"></i></li>
                                    <li><i class="bx bxs-star"></i></li>
                                    <li><i class="bx bxs-star"></i></li>
                                    <li><i class="bx bxs-star"></i></li>
                                    <li><i class="bx bxs-star"></i></li>
                                </ul>
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque, accusamus labore!
                                    Debitis omnis, totam iure aliquid praesentium odio saepe atque aspernatur
                                    consequatur veniam eius obcaecati? Nemo vel
                                    ab doloremque! Dolore!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!--==================== ABOUT ====================-->
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer section container">
        <div class="footer__content">
            <img src="{{asset('client/images/logo-deserts.png')}}" class="footer__logos__img" />
            <div>
                <ul class="footer__logos">
                    <li class="footer__li">
                        <a href=https://www.facebook.com/profile.php?id=100077927416937"><i
                                class="bx bxl-facebook tp__sc"></i></a>
                    </li>
                    <li class="footer__li">
                        <a href="https://www.instagram.com/deserthunttourism/?hl=en"><i
                                class="bx bxl-instagram tp__sc"></i></a>
                    </li>
                    <li class="footer__li">
                        <a href="https://wa.me/+971504776839"><i class="bx bxl-whatsapp tp__sc"></i></a>
                    </li>
                    <li class="footer__li">
                        <a href="https://www.youtube.com/channel/UCY_eRcUC9Gxf-Pmrk6Hqn1Q/featured"> <i
                                class="bx bxl-youtube tp__sc"></i></a>
                </ul>
            </div>

            <div class="footer__rights">
                <p class="footer__copy">&#169; 2022 DUNERIDE</p>
                <a href="#" class="footer__terms-link">TERMS & CONDITION</a>
                <a href="{{url('privacy')}}" class="footer__terms-link">PRIVACY POLICY</a>
                <a href="{{url('contact_us')}}" class="footer__terms-link">CONTACT US</a>
            </div>
        </div>
    </footer>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            // navigation: {
            //     nextEl: ".swiper-button-next",
            //     prevEl: ".swiper-button-prev",
            // },
            scrollbar: {
                el: ".swiper-scrollbar",
            },
        });

    </script>

    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line scrollup__icon"></i>
    </a>

    <!--=============== SCROLL REVEAL===============-->
    <script src="{{ asset('client/js/scrollreveal.min.js') }}"></script>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>

    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('client/js/main.js') }}"></script>
    <script src="{{ asset('client/js/menu.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- time accodion -->
    <!-- <script>
            function myFunction(id) {
              var x = document.getElementById(id);
              if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
              } else {
                x.className = x.className.replace(" w3-show", "");
              }
            }
            </script> -->
    <!-- time accodion -->
    <!-- quantity selector -->
    <script>
        $("button").on("click", function (ev) {
            var currentQty = $('input[name="quantity"]').val();
            var qtyDirection = $(this).data("direction");
            var newQty = 0;

            if (qtyDirection == "1") {
                newQty = parseInt(currentQty) + 1;
            } else if (qtyDirection == "-1") {
                newQty = parseInt(currentQty) - 1;
            }

            // make decrement disabled at 1
            if (newQty == 1) {
                $(".decrement-quantity").attr("disabled", "disabled");
            }

            // remove disabled attribute on subtract
            if (newQty > 1) {
                $(".decrement-quantity").removeAttr("disabled");
            }

            if (newQty > 0) {
                newQty = newQty.toString();
                $('input[name="quantity"]').val(newQty);
            } else {
                $('input[name="quantity"]').val("1");
            }
        });

    </script>
    <!-- quantity selector -->

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper2", {
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
        });

    </script>
    <script>
        const fullImg = document.querySelector(".modal__full-img");
        const smallImg = document.querySelectorAll(".gallery__img-container img");
        const modal = document.querySelector(".modal");

        smallImg.forEach((img, index) => {
            img.addEventListener("click", () => {
                modal.classList.add("modal--open");
                fullImg.classList.add("modal__full-img--open");
                fullImg.src = `https://source.unsplash.com/random/${index}`;
            });
        });

        modal.addEventListener("click", (e) => {
            if (e.target.classList.contains("modal")) {
                modal.classList.remove("modal--open");
                fullImg.classList.remove("modal__full-img--open");
            }
        });

    </script>

    <script>
        /*=============== SHOW MODAL ===============*/
        const showModal = (openButton, modalContent) => {
            const openBtn = document.getElementById(openButton),
                modalContainer = document.getElementById(modalContent);

            if (openBtn && modalContainer) {
                openBtn.addEventListener("click", () => {
                    modalContainer.classList.add("show-modal");
                });
            }
        };

        showModal("open-modal1", "modal-container");
        showModal("open-modal2", "modal-container");
        showModal("open-modal3", "modal-container");
        showModal("open-modal4", "modal-container");

        /*=============== CLOSE MODAL ===============*/
        const closeBtn = document.querySelectorAll(".close-modal");

        function closeModal() {
            const modalContainer = document.getElementById("modal-container");
            modalContainer.classList.remove("show-modal");
        }
        closeBtn.forEach((c) => c.addEventListener("click", closeModal));

    </script>



    <!-- new navbar start -->
    <script>
        $(function () {
            let isMobile = window.matchMedia("only screen and (max-width: 760px)").matches;

            if (!isMobile) {
                $(window).scroll(function () {
                    var scroll = $(window).scrollTop();
                    console.log(scroll);
                    //>=, not <=
                    if (scroll >= 800) {
                        //clearHeader, not clearheader - caps H
                        $(".one-best").addClass("display__onebest");
                    } else {
                        $(".one-best").removeClass("display__onebest");
                    }
                });
            } else {
                $(window).scroll(function () {
                    var scroll = $(window).scrollTop();

                    //>=, not <=
                    if (scroll >= 1500) {
                        console.log(scroll);
                        //clearHeader, not clearheader - caps H
                        $(".one-best").addClass("display__onebest");
                    } else {
                        $(".one-best").removeClass("display__onebest");
                    }
                });
            }
        });

    </script>
    <!-- new navbar end -->

    <!-- nav active class start -->

    <!-- nav active class start -->

    <!-- seond modal popup -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="{{asset('client / libs / jquery / dist / jquery.min.js')}}"><\/script>');

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal.min.js"></script>
    <!-- seond modal popup -->

    <!-- time picker -->
    <script src="//code.jquery.com/jquery-latest.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.timepicker').mdtimepicker();
        });

    </script>

    <script>
        if ("undefined" == typeof jQuery) throw new Error("MDTimePicker: This plugin requires jQuery"); + function (e) {
            var t = "mdtimepicker",
                i = 120,
                s = 90,
                n = 360,
                r = 30,
                a = 6,
                o = [9, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123],
                c = function (t, i) {
                    this.hour = t, this.minute = i, this.format = function (t, i) {
                        var s = this,
                            n = (t.match(/h/g) || []).length > 1;
                        return e.trim(t.replace(/(hh|h|mm|ss|tt|t)/g, function (e) {
                            switch (e.toLowerCase()) {
                                case "h":
                                    var t = s.getHour(!0);
                                    return i && 10 > t ? "0" + t : t;
                                case "hh":
                                    return s.hour < 10 ? "0" + s.hour : s.hour;
                                case "mm":
                                    return s.minute < 10 ? "0" + s.minute : s.minute;
                                case "ss":
                                    return "00";
                                case "t":
                                    return n ? "" : s.getT().toLowerCase();
                                case "tt":
                                    return n ? "" : s.getT()
                            }
                        }))
                    }, this.setHour = function (e) {
                        this.hour = e
                    }, this.getHour = function (e) {
                        return e ? 0 === this.hour || 12 === this.hour ? 12 : this.hour % 12 : this.hour
                    }, this.invert = function () {
                        "AM" === this.getT() ? this.setHour(this.getHour() + 12) : this.setHour(this.getHour() - 12)
                    }, this.setMinutes = function (e) {
                        this.minute = e
                    }, this.getMinutes = function () {
                        return this.minute
                    }, this.getT = function () {
                        return this.hour < 12 ? "AM" : "PM"
                    }
                },
                d = function (t, i) {
                    var s = this;
                    this.visible = !1, this.activeView = "hours", this.hTimeout = null, this.mTimeout = null, this
                        .input = e(t), this.config = i, this.time = new c(0, 0), this.selected = new c(0, 0), this
                            .timepicker = {
                            overlay: e('<div class="mdtimepicker hidden"></div>'),
                            wrapper: e('<div class="mdtp__wrapper"></div>'),
                            timeHolder: {
                                wrapper: e('<section class="mdtp__time_holder"></section>'),
                                hour: e('<span class="mdtp__time_h">12</span>'),
                                dots: e('<span class="mdtp__timedots">:</span>'),
                                minute: e('<span class="mdtp__time_m">00</span>'),
                                am_pm: e('<span class="mdtp__ampm">AM</span>')
                            },
                            clockHolder: {
                                wrapper: e('<section class="mdtp__clock_holder"></section>'),
                                am: e('<span class="mdtp__am">AM</span>'),
                                pm: e('<span class="mdtp__pm">PM</span>'),
                                clock: {
                                    wrapper: e('<div class="mdtp__clock"></div>'),
                                    dot: e('<span class="mdtp__clock_dot"></span>'),
                                    hours: e('<div class="mdtp__hour_holder"></div>'),
                                    minutes: e('<div class="mdtp__minute_holder"></div>')
                                },
                                buttonsHolder: {
                                    wrapper: e('<div class="mdtp__buttons">'),
                                    btnOk: e('<span class="mdtp__button ok">Ok</span>'),
                                    btnCancel: e('<span class="mdtp__button cancel">Cancel</span>')
                                }
                            }
                        };
                    var n = s.timepicker;
                    if (s.setup(n).appendTo("body"), n.clockHolder.am.click(function () {
                        "AM" !== s.selected.getT() && s.setT("am")
                    }), n.clockHolder.pm.click(function () {
                        "PM" !== s.selected.getT() && s.setT("pm")
                    }), n.timeHolder.hour.click(function () {
                        "hours" !== s.activeView && s.switchView("hours")
                    }), n.timeHolder.minute.click(function () {
                        "minutes" !== s.activeView && s.switchView("minutes")
                    }), n.clockHolder.buttonsHolder.btnOk.click(function () {
                        s.setValue(s.selected);
                        var t = s.getFormattedTime();
                        s.input.trigger(e.Event("timechanged", {
                            time: t.time,
                            value: t.value
                        })).trigger("onchange"), s.hide()
                    }), n.clockHolder.buttonsHolder.btnCancel.click(function () {
                        s.hide()
                    }), s.input.on("keydown", function (e) {
                        return 13 === e.keyCode && s.show(), !(o.indexOf(e.which) < 0 && s.config.readOnly)
                    }).on("click", function () {
                        s.show()
                    }).prop("readonly", s.config.readOnly), "" !== s.input.val()) {
                        var r = s.parseTime(s.input.val(), s.config.format);
                        s.setValue(r)
                    } else {
                        var r = s.getSystemTime();
                        s.time = new c(r.hour, r.minute)
                    }
                    s.resetSelected(), s.switchView(s.activeView)
                };
            d.prototype = {
                constructor: d,
                setup: function (t) {
                    if ("undefined" == typeof t) throw new Error("Expecting a value.");
                    var o = this,
                        c = t.overlay,
                        d = t.wrapper,
                        u = t.timeHolder,
                        m = t.clockHolder;
                    u.wrapper.append(u.hour).append(u.dots).append(u.minute).append(u.am_pm).appendTo(d);
                    for (var l = 0; 12 > l; l++) {
                        var p = l + 1,
                            h = (i + l * r) % n,
                            f = e('<div class="mdtp__digit rotate-' + h + '" data-hour="' + p + '"><span>' + p +
                                "</span></div>");
                        f.find("span").click(function () {
                            var t = parseInt(e(this).parent().data("hour")),
                                i = o.selected.getT(),
                                s = (t + ("PM" === i && 12 > t || "AM" === i && 12 === t ? 12 : 0)) %
                                    24;
                            o.setHour(s), o.switchView("minutes")
                        }), m.clock.hours.append(f)
                    }
                    for (var l = 0; 60 > l; l++) {
                        var v = 10 > l ? "0" + l : l,
                            h = (s + l * a) % n,
                            k = e('<div class="mdtp__digit rotate-' + h + '" data-minute="' + l + '"></div>');
                        l % 5 === 0 ? k.addClass("marker").html("<span>" + v + "</span>") : k.html(
                            "<span></span>"), k.find("span").click(function () {
                                o.setMinute(e(this).parent().data("minute"))
                            }), m.clock.minutes.append(k)
                    }
                    switch (m.clock.wrapper.append(m.am).append(m.pm).append(m.clock.dot).append(m.clock.hours)
                        .append(m.clock.minutes).appendTo(m.wrapper), m.buttonsHolder.wrapper.append(m
                            .buttonsHolder.btnCancel).append(m.buttonsHolder.btnOk).appendTo(m.wrapper), m
                                .wrapper.appendTo(d), o.config.theme) {
                        case "red":
                        case "blue":
                        case "green":
                        case "purple":
                        case "indigo":
                        case "teal":
                            d.attr("data-theme", o.config.theme);
                            break;
                        default:
                            d.attr("data-theme", e.fn.mdtimepicker.defaults.theme)
                    }
                    return d.appendTo(c), c
                },
                setHour: function (t) {
                    if ("undefined" == typeof t) throw new Error("Expecting a value.");
                    var i = this;
                    this.selected.setHour(t), this.timepicker.timeHolder.hour.text(this.selected.getHour(!0)),
                        this.timepicker.clockHolder.clock.hours.children("div").each(function (t, s) {
                            var n = e(s),
                                r = n.data("hour");
                            n[r === i.selected.getHour(!0) ? "addClass" : "removeClass"]("active")
                        })
                },
                setMinute: function (t) {
                    if ("undefined" == typeof t) throw new Error("Expecting a value.");
                    this.selected.setMinutes(t), this.timepicker.timeHolder.minute.text(10 > t ? "0" + t : t),
                        this.timepicker.clockHolder.clock.minutes.children("div").each(function (i, s) {
                            var n = e(s),
                                r = n.data("minute");
                            n[r === t ? "addClass" : "removeClass"]("active")
                        })
                },
                setT: function (e) {
                    if ("undefined" == typeof e) throw new Error("Expecting a value.");
                    this.selected.getT() !== e.toUpperCase() && this.selected.invert();
                    var t = this.selected.getT();
                    this.timepicker.timeHolder.am_pm.text(t), this.timepicker.clockHolder.am["AM" === t ?
                        "addClass" : "removeClass"]("active"), this.timepicker.clockHolder.pm["PM" === t ?
                            "addClass" : "removeClass"]("active")
                },
                setValue: function (e) {
                    if ("undefined" == typeof e) throw new Error("Expecting a value.");
                    var t = "string" == typeof e ? this.parseTime(e, this.config.format) : e;
                    this.time = new c(t.hour, t.minute);
                    var i = this.getFormattedTime();
                    this.input.val(i.value).attr("data-time", i.time).attr("value", i.value)
                },
                resetSelected: function () {
                    this.setHour(this.time.hour), this.setMinute(this.time.minute), this.setT(this.time.getT())
                },
                getFormattedTime: function () {
                    var e = this.time.format(this.config.timeFormat, !1),
                        t = this.time.format(this.config.format, this.config.hourPadding);
                    return {
                        time: e,
                        value: t
                    }
                },
                getSystemTime: function () {
                    var e = new Date;
                    return new c(e.getHours(), e.getMinutes())
                },
                parseTime: function (e, t) {
                    var i = this,
                        s = "undefined" == typeof t ? i.config.format : t,
                        n = (s.match(/h/g) || []).length,
                        r = n > 1,
                        a = ((s.match(/m/g) || []).length, (s.match(/t/g) || []).length),
                        o = e.length,
                        d = s.indexOf("h"),
                        u = s.lastIndexOf("h"),
                        m = "",
                        l = "",
                        p = "";
                    if (i.config.hourPadding || r) m = e.substr(d, 2);
                    else {
                        var h = s.substring(d - 1, d),
                            f = s.substring(u + 1, u + 2);
                        m = u === s.length - 1 ? e.substring(e.indexOf(h, d - 1) + 1, o) : 0 === d ? e
                            .substring(0, e.indexOf(f, d)) : e.substring(e.indexOf(h, d - 1) + 1, e.indexOf(f,
                                d + 1))
                    }
                    s = s.replace(/(hh|h)/g, m);
                    var v = s.indexOf("m"),
                        k = s.lastIndexOf("m"),
                        g = s.indexOf("t"),
                        w = s.substring(v - 1, v);
                    s.substring(k + 1, k + 2);
                    l = k === s.length - 1 ? e.substring(e.indexOf(w, v - 1) + 1, o) : 0 === v ? e.substring(0,
                        2) : e.substr(v, 2), p = r ? parseInt(m) > 11 ? a > 1 ? "PM" : "pm" : a > 1 ? "AM" :
                            "am" : e.substr(g, 2);
                    var H = "pm" === p.toLowerCase(),
                        _ = new c(parseInt(m), parseInt(l));
                    return (H && parseInt(m) < 12 || !H && 12 === parseInt(m)) && _.invert(), _
                },
                switchView: function (e) {
                    var t = this,
                        i = this.timepicker,
                        s = 350;
                    "hours" !== e && "minutes" !== e || (t.activeView = e, i.timeHolder.hour["hours" === e ?
                        "addClass" : "removeClass"]("active"), i.timeHolder.minute["hours" === e ?
                            "removeClass" : "addClass"]("active"), i.clockHolder.clock.hours.addClass(
                                "animate"), "hours" === e && i.clockHolder.clock.hours.removeClass("hidden"),
                        clearTimeout(t.hTimeout), t.hTimeout = setTimeout(function () {
                            "hours" !== e && i.clockHolder.clock.hours.addClass("hidden"), i.clockHolder
                                .clock.hours.removeClass("animate")
                        }, "hours" === e ? 20 : s), i.clockHolder.clock.minutes.addClass("animate"),
                        "minutes" === e && i.clockHolder.clock.minutes.removeClass("hidden"), clearTimeout(t
                            .mTimeout), t.mTimeout = setTimeout(function () {
                                "minutes" !== e && i.clockHolder.clock.minutes.addClass("hidden"), i
                                    .clockHolder.clock.minutes.removeClass("animate")
                            }, "minutes" === e ? 20 : s))
                },
                show: function () {
                    var t = this;
                    if ("" === t.input.val()) {
                        var i = t.getSystemTime();
                        this.time = new c(i.hour, i.minute)
                    }
                    t.resetSelected(), e("body").attr("mdtimepicker-display", "on"), t.timepicker.wrapper
                        .addClass("animate"), t.timepicker.overlay.removeClass("hidden").addClass("animate"),
                        setTimeout(function () {
                            t.timepicker.overlay.removeClass("animate"), t.timepicker.wrapper.removeClass(
                                "animate"), t.visible = !0, t.input.blur()
                        }, 10)
                },
                hide: function () {
                    var t = this;
                    t.timepicker.overlay.addClass("animate"), t.timepicker.wrapper.addClass("animate"),
                        setTimeout(function () {
                            t.switchView("hours"), t.timepicker.overlay.addClass("hidden").removeClass(
                                "animate"), t.timepicker.wrapper.removeClass("animate"), e("body")
                                    .removeAttr("mdtimepicker-display"), t.visible = !1, t.input.focus()
                        }, 300)
                },
                destroy: function () {
                    var e = this;
                    e.input.removeData(t).unbind("keydown").unbind("click").removeProp("readonly"), e.timepicker
                        .overlay.remove()
                }
            }, e.fn.mdtimepicker = function (i) {
                return e(this).each(function () {
                    var s = this,
                        n = e(this),
                        r = e(this).data(t);
                    options = e.extend({}, e.fn.mdtimepicker.defaults, n.data(), "object" == typeof i && i),
                        r || n.data(t, r = new d(s, options)), "string" == typeof i && r[i](), e(document)
                            .on("keydown", function (e) {
                                27 === e.keyCode && r.visible && r.hide()
                            })
                })
            }, e.fn.mdtimepicker.defaults = {
                timeFormat: "hh:mm:ss.000",
                format: "h:mm tt",
                theme: "blue",
                readOnly: !0,
                hourPadding: !1
            }
        }(jQuery);

    </script>

</body>

</html>