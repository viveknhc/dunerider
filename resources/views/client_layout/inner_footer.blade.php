<!--==================== FOOTER ====================-->
<footer class="footer section container">
            <div class="footer__content">
                <img src="{{asset('client/images/logo-deserts.png')}}" class="footer__logos__img" />
                <div>
                    <ul class="footer__logos">
                    <li class="footer__li">
                        <a href=https://www.facebook.com/profile.php?id=100077927416937"><i class="bx bxl-facebook tp__sc"></i></a>
                        </li>
                        <li class="footer__li">
                        <a href="https://www.instagram.com/deserthunttourism/?hl=en"><i class="bx bxl-instagram tp__sc"></i></a>
                        </li>
                        <li class="footer__li">
                        <a href="https://wa.me/+971504776839"><i class="bx bxl-whatsapp tp__sc"></i></a>
                        </li>
                        <li class="footer__li">
                        <a href="https://www.youtube.com/channel/UCY_eRcUC9Gxf-Pmrk6Hqn1Q/featured"> <i class="bx bxl-youtube tp__sc"></i></a>
                    </ul>
                </div>

                <div class="footer__rights">
                    <p class="footer__copy">&#169; 2022 DUNERIDE DUBAI</p>
                    <a href="#" class="footer__terms-link">TERMS & CONDITION</a>
                    <a href="{{url('privacy')}}" class="footer__terms-link">PRIVACY POLICY</a>
                    <a href="{{url('contact_us')}}" class="footer__terms-link">CONTACT US</a>
                </div
            </div>
        </footer>
        <!-- Swiper JS -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper", {
                loop: true,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
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
        <script src="{{asset('client/js/scrollreveal.min.js')}}"></script>

        <!--=============== MAIN JS ===============-->
        <script src="{{asset('client/js/main.js')}}"></script>
        <script src="{{asset('client/js/menu.js')}}"></script>
          <!-- seond modal popup -->
          <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
          <script>
              window.jQuery || document.write('<script src="{{asset('client/libs/jquery/dist/jquery.min.js')}}"><\/script>');
          </script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal.min.js"></script>
          <!-- seond modal popup -->