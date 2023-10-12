<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="baseURL" content="{{ url('/') }}">
    <link rel="stylesheet" href="{{asset('client/css/styles.css')}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
	<style type="text/css">
		
		.show{
			display: block!important;
		}
        body{
            background-color: #333;
        }
	</style>
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('login/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('login/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body style="background-color: #333;">
<div class="top__menu">
            <div class="top__menu__container">
                <div class="top__menu__sub_c epp__desk">
                    <div class="typ">
                        <img src="{{asset('client/img/fav-desert.png')}}" class="nav__logo" style="width: 25px;" />
                    </div>

                    <div class="top__menu__titles">
                        <span class="tp__head">HOME</span>
                    </div>
                    <div class="top__menu__titles">
                        <span class="tp__head">ABOUT US</span>
                    </div>
                    <div class="top__menu__titles">
                        <span class="tp__head">FAQ</span>
                    </div>
                    <div class="top__menu__titles">
                        <span class="tp__head">BLOGS</span>
                    </div>
                    <div class="top__menu__titles">
                        <span class="tp__head">CONTACT US</span>
                    </div>
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

                <div class="top__menu__sub_c epp__mob">
                    <div class="typ">
                        <img src="{{asset('client/img/fav-desert.png')}}" class="nav__logo" style="width: 25px;" />
                    </div>
                </div>

                <!-- new nav section start -->

                <!-- new nav section end -->

                <div class="vgb">
                    <a href="#modal"><span class="tp__head">CART</span></a>
                    <a href="account.html"><span class="tp__head">MY ACCOUNT</span></a>
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
        
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php echo url('public/login/images/bg-01.jpg') ?> ');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form action="javascript:;" class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-53">
						Sign In / Register With
					</span>

					<!-- <a href="javascript:;" id="facebookLogin" class="btn-face m-b-20">
						<i class="fa fa-facebook-official"></i>
						Facebook
					</a> -->

					<a href="javascript:;" id="googleLogin" class="btn-google m-b-20">
						<img src="{{ asset('login/images/icons/icon-google.png')}}" alt="GOOGLE">
						Google
					</a>

					<a href="javascript:;" id="phoneAuth" class="btn-google m-b-20">
						<img src="https://cdn2.iconfinder.com/data/icons/font-awesome/1792/phone-512.png" alt="PHONE">
						Phone
					</a>
					
					<div class="p-t-31 p-b-9 cstm-div phone-div">
						<span class="txt1">
							Phone Number <span style="font-size: 10px;">(include country code eg:+91)</span>
						</span>
					</div>
					<div class="wrap-input100 validate-input phone-div" data-validate = "Username is required">
						<input class="input100" type="text" name="phone_number" >
						<span class="focus-input100"></span>
					</div>

					<div id="recaptcha-container" style="margin-top: 10px"></div>

					<div class="p-t-31 p-b-9 cstm-div otp-div" >
						<span class="txt1">
							OTP  
						</span>
					</div>
					<div class="wrap-input100 validate-input otp-div" data-validate = "Username is required">
						<input class="input100"  type="text" name="verify_otp" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn m-t-17 phone-div">
						<button class="login100-form-btn sendOTP">
							Send OTP
						</button>
					</div>

					<div class="container-login100-form-btn m-t-17 otp-div">
						<button type="button" id="verifyOTP" class="login100-form-btn">
							Verify OPT
						</button>
					</div>

					<!-- <div class="w-full text-center p-t-55">
						<span class="txt2">
							Not a member?
						</span>
						<a href="#" class="txt2 bo1">
							Sign up now
						</a>
					</div> -->
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	<footer class="footer section container">
            <div class="footer__content">
                <img src="{{asset('client/img/logo-deserts.png')}}" class="footer__logos__img" />
                <div>
                    <ul class="footer__logos">
                        <li class="footer__li">
                            <i class="bx bxl-facebook tp__sc"></i>
                        </li>
                        <li class="footer__li">
                            <i class="bx bxl-instagram tp__sc"></i>
                        </li>
                        <li class="footer__li">
                            <i class="bx bxl-whatsapp tp__sc"></i>
                        </li>
                        <li class="footer__li">
                            <i class="bx bxl-youtube tp__sc"></i>
                        </li>
                        <li class="footer__li">
                            <i class="bx bxl-twitter tp__sc"></i>
                        </li>
                        <li class="footer__li">
                            <i class="bx bxl-tiktok tp__sc"></i>
                        </li>
                    </ul>
                </div>

                <div class="footer__rights">
                    <p class="footer__copy">&#169; 2022 DUNERIDE</p>
                    <a href="#" class="footer__terms-link">TERMS & CONDITION</a>
                    <a href="#" class="footer__terms-link">PRIVACY POLICY</a>
                    <a href="#" class="footer__terms-link">FAQ & CONTACT</a>
                </div>
            </div>
        </footer>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{ asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('login/js/main.js')}}"></script>


	<!-- Firebase files -->
	<!-- Insert these scripts at the bottom of the HTML, but before you use any Firebase services -->

	<!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
	<script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-app.js"></script>

	<!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
	<script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-analytics.js"></script>

	<!-- Add Firebase products that you want to use -->
	<script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-auth.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-firestore.js"></script>

	<script type="text/javascript" src="{{ asset('login/js/firebase-conf.js') }}"></script>

	<!-- facebook provider -->
	<!-- <script type="text/javascript" src="{{ asset('login/js/facebook.js') }}"></script> -->
	

	<!-- google provider -->
	<script type="text/javascript" src="{{ asset('login/js/google.js') }}"></script>

	<!-- phone number -->
	<script type="text/javascript" src="{{ asset('login/js/phone.js') }}"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
          <script>
              window.jQuery || document.write('<script src="{{asset('client/libs/jquery/dist/jquery.min.js')}}"><\/script>');
          </script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal.min.js"></script>
</body>
</html>