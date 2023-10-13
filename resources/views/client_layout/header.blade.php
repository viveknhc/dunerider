<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="shortcut icon" href="{{asset('client/img/fav-desert.png')}}" type="image/png" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <!--=============== BOXICONS ===============-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

        <!--=============== SWIPER CSS ===============-->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <link rel="stylesheet" href="{{asset('client/fonts/Europa Regular (1).ttf')}}" />
        <link rel="stylesheet" href="{{asset('client/fonts/Adventium.ttf')}}" />

        <!--=============== CSS ===============-->
        <!-- <link rel="stylesheet" href="{{asset('client/css/swiper-bundle.min.css')}}" /> -->
        <link rel="stylesheet" href="{{asset('client/css/styles.css')}}" />


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
            /* @media only screen and (min-width: 768px)
{
.header-video__responsive-wrapper embed, .header-video__responsive-wrapper iframe, .header-video__responsive-wrapper object {
    height: 100%;
    width: 100%;
}
} */
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
                .section4 {
                    padding: 4rem 0 0rem;
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
            }
            /* navbar end */
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
                <a href="{{url('/')}}" class="nav__logo banner__logo-sec1"><img src="{{asset('client/images/logo-vertical.png')}}" alt="logo" /></a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="{{url('/')}}" class="nav__link">Home</a>
                        </li>

                        <li class="nav__item dropdown">
                            <a href="{{url('services')}}" class="nav__link">Quad Bike </a>
                            <ul class="dropdown-content">
                                <li>
                                    <a href="{{url('product/one-seater-quad-bike-self-ride-to-open-desert')}}">1 Seater Quad Bike</a>
                                    <a href="{{url('product/2-seater-quad-bike-self-ride-to-open-desert')}}">2 Seater Quad Bike</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav__item dropdown">
                            <a href="#" class="nav__link">Dune Buggy</a>
                            <ul class="dropdown-content">
                                <li>
                                    <a href="{{url('product/one-seater-dune-buggy-self-ride-to-open-desert')}}">1 Seater Dune Buggy</a>
                                    <a href="{{url('product/two-seater-dune-buggy-self-ride-to-open-desert')}}">2 Seater Dune Buggy</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav__item dropdown">
                            <a href="#" class="nav__link">Raptor</a>
                            <ul class="dropdown-content">
                                <li>
                                    <a href="{{url('product/one-seater-raptor-self-ride-to-open-desert')}}">1 Seater Raptor</a>
                                    <a href="{{url('product/ktm-motocross-open-desert-self-ride')}}">Ktm Motocross</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav__item">
                            <a href="{{url('product/private-standard-desert-safari-upto-5-persons')}}" class="nav__link">Desert Safari</a>
                        </li>
                   
                    </ul>

                    <!-- mobile-section navbar -->
                    <!-- <div class="top-menu-main">
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
                            <ul class="ert" style="padding-left: 0px;padding-top: 20px;">
                                <li class="lipp">
                                    <a href=https://www.facebook.com/profile.php?id=100077927416937"><i class="bx bxl-facebook tp__sc top-social-media"></i></a>
                                </li>
                                <li class="lipp">
                                    <a href="https://www.instagram.com/deserthunttourism/?hl=en"><i class="bx bxl-instagram tp__sc top-social-media"></i></a>
                                </li>
                                <li class="lipp">
                                    <a href="https://wa.me/+971504776839"><i class="bx bxl-whatsapp tp__sc top-social-media"></i></a>
                                </li>
                                <li class="lipp">
                                    <a href="https://www.youtube.com/channel/UCY_eRcUC9Gxf-Pmrk6Hqn1Q/featured"><i class="bx bxl-youtube tp__sc top-social-media"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div> -->
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