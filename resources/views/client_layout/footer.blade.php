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
                </li>
                <!-- <li class="footer__li">
                            <i class="bx bxl-twitter tp__sc"></i>
                        </li>
                        <li class="footer__li">
                            <i class="bx bxl-tiktok tp__sc"></i>
                        </li> -->
            </ul>
        </div>

        <div class="footer__rights">
            <p class="footer__copy">&#169; 2022 DUNERIDE DUBAI</p>
            <a href="#" class="footer__terms-link">TERMS & CONDITION</a>
            <a href="{{url('privacy')}}" class="footer__terms-link">PRIVACY POLICY</a>
            <a href="{{url('contact_us')}}" class="footer__terms-link">CONTACT US</a>
        </div>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<!-- Swiper JS -->
<!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->

<!-- Initialize Swiper -->
<!-- <script>
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
        </script> -->

<!--========== SCROLL UP ==========-->
<a href="#" class="scrollup" id="scroll-up">
    <i class="ri-arrow-up-line scrollup__icon"></i>
</a>

<!--=============== SCROLL REVEAL===============-->
<script src="{{asset('client/js/scrollreveal.min.js')}}"></script>

<!--=============== MAIN JS ===============-->
<!-- <script src="{{asset('client/js/main.js')}}"></script> -->
<script src="{{asset('client/js/menu.js')}}"></script>

<!-- seond modal popup -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
    window.jQuery || document.write('<script src="{{asset('client / libs / jquery / dist / jquery.min.js')}}"><\/script>');
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal.min.js"></script>
<!-- seond modal popup -->

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


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>
    // Initialize Swiper
    var swiper = new Swiper('.swiper-index', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

    });
</script>


<!-- Initialize Swiper -->
<!-- <script>
    var swiper = new Swiper(".mySwiper", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        }
    });
</script> -->