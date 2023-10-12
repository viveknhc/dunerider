@include('client_layout.header')
<main class="main">
    <!--==================== HOME ====================-->
    <section class="home" id="home">
        <div class="header-video">
            <div class="header-video__responsive-wrapper">
                <video class="video__mob" width="auto" height="auto" loop autoplay muted>
                    <source src="{{asset('client/video/Untitled-1.mp4')}}" type="video/mp4" />
                </video>

            </div>
        </div>
        <div class="container hero__text">
            <div class="home__data">
                <h1 class="home__data-title">
                    Adventure Awaits !
                </h1>
            </div>
        </div>
    </section>

    <!--==================== ABOUT ====================-->
    <section class="about section" id="about">
        <div class="about__container container grid">
            <div class="rf__card">
                <img src="{{asset('client/img/home_page/Qbike_1seater.png')}}" class="abt__img" />
                <div class="rf__card__sub">
                    <h2 class="cr__hd">1 SEATER QUAD BIKE</h2>
                    <p class="cr__p">Ride solo on a self-drive quad bike into the open desert and feel the adrenaline
                        pumping.All our riders are instructed ahead of the activity by our expert guides.</p>
                    <a href="{{url('product/one-seater-quad-bike-self-ride-to-open-desert')}}" class="button popi">Book
                        Now</a>
                </div>
            </div>

            <div class="rf__card">
                <img src="{{asset('client/img/home_page/Qbike_2seater.png')}}" class="abt__img" />
                <div class="rf__card__sub">
                    <h2 class="cr__hd">2 SEATER QUAD BIKE</h2>
                    <p class="cr__p">Ask a friend to join you in this 2-seater open desert quad bike ride. Don't miss
                        this thrilling ride in the desert.</p>
                    <a href="{{url('product/2-seater-quad-bike-self-ride-to-open-desert')}}" class="button popi">Book
                        Now</a>
                </div>
            </div>
            <div class="why-us-content">
                <div style="text-align: center;">
                    <h2 class="we__are">Why Us ?</h2>

                    <p class="hjk">
                        We have created hundreds of great tour & activity outings for customers. We are the preferred
                        vendors for other premium tour companies in Dubai. Our customers come from worldwide and include
                        solo travellers,
                        couples, families, and corporate groups.
                    </p>
                </div>
            </div>
            <div class="mission-vision">
                <div style="text-align: center;">
                    <h2 class="we__are">Mission & Vision</h2>
                    <p class="hjk">
                        Our Vision To provide a truly unique experience that is native to UAE.Our Mission To be your
                        preferred agency for activities in Dubai.
                    </p>
                </div>
            </div>
            <div class="rf__card">
                <img src="{{asset('client/img/home_page/raptor.png')}}" class="abt__img" />
                <div class="rf__card__sub">
                    <h2 class="cr__hd">SINGLE SEATER RAPTOR</h2>
                    <p class="cr__p">Are you ready to ride a 700CC Raptor across the golden sand dunes of Dubai? This is
                        a unique opportunity indegenouss to the UAE.</p>
                    <a href="{{url('product/one-seater-raptor-self-ride-to-open-desert')}}" class="button popi">Book
                        Now</a>
                </div>
            </div>
            <div class="rf__card">
                <img src="{{asset('client/img/home_page/polarise_1seater.png')}}" class="abt__img" />
                <div class="rf__card__sub">
                    <h2 class="cr__hd">POLARISE DUNE BUGGY</h2>
                    <p class="cr__p">Do you love adventures? Feel the adrenaline pumping as you make those twists and
                        turns with the curving sands.</p>
                    <a href="{{url('product/one-seater-dune-buggy-self-ride-to-open-desert')}}" class="button popi">Book
                        Now</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <h2 class="tom__title">OUR MOST POPULAR EXPERIENCES</h2>
        <h6 class="tom__sub_h jmk">Entertain with Adventerous Activities</h6>
        <div class="row">
            <div class="col-lg-6">
                <h1>d9sfiyvgdjskf</h1>
            </div>
            <div class="col-lg-6">
                <h1>d9sfiyvgdjskf</h1>
            </div>
        </div>
    </section>
    <!--====================  ====================-->
    <section class="about__safari section container">
        <h2 class="tom__title">OUR MOST POPULAR EXPERIENCES</h2>
        <h6 class="tom__sub_h jmk">Entertain with Adventerous Activities</h6>
        <div class="tom__container">
            <!-- <div class="qert">
                <h3 class="h3__huihui">Quad Bike</h3>
                <p class="p__fhghh">
                    One of Dubai's unique offerings is the desert activities. And none is more adventerous than riding
                    the sand dunes on a self-drive Quad Bike. Up the energy quotient on this trip with a 1 hour Quad
                    Bike activity.
                    Our expert instructors will guide you on safety protocols before you start so you can have a safe
                    and wonderful experience.Enjoy an hour in your favorite desert activites. Get on a Quad Bike for 30
                    minutes
                    followed by a camel ride. Strap on a sandboard and glide down the dunes. Safety equipment will be
                    provided including a Rider kit, Goggles and Helmet for the Quad Bike. Our expert instructors will
                    guide you ahead
                    of the activities.
                </p>
            </div> -->
            <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"> -->

            <!-- <div class="swiper swiper-index'">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{asset('client/img/quad-bikes_home/Qbike1.png')}}" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('client/img/quad-bikes_home/Qbike2.png')}}" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('client/img/quad-bikes_home/Qbike3.png')}}" />
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-scrollbar"></div>
            </div> -->

        </div>
    </section>
    <!--====================  ====================-->
    <section class="about__safari section container">
        <div class="tomt__container">
            <!-- <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{asset('client/img/Raptor_home/raptor1.png')}}" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('client/img/Raptor_home/raptor2.png')}}" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('client/img/Raptor_home/raptor3.png')}}" />
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-scrollbar"></div>
            </div> -->

            <div class="qert raptor__mob1">
                <!-- <h6 class="asdf">2022</h6> -->
                <h3 class="h3__huihui">Raptor</h3>
                <p class="p__fhghh">
                    Are you ready to ride a 700CC Raptor across the golden sand dunes of Dubai? This is a unique
                    opportunity indegenouss to the UAE. Don't miss it. Note that this ride requires driving knowledge
                    and we will require
                    you to show a valid Driver ID ahead of the ride. All SOPs are followed and the vehicles and
                    equipment are properly sanitised. We have expert guides & instructors who will instruct you and
                    provide safety gear
                    before the start of the ride. The riders move in small groups led by their instructor so you know
                    you are in safe hands!
                </p>
            </div>
        </div>
    </section>
    <!--====================  ====================-->
    <section class="about__safari section container">
        <div class="tom__container">
            <div class="qert">
                <!-- <h6 class="asdf">2022</h6> -->
                <h3 class="h3__huihui">Camel Ride</h3>
                <p class="p__fhghh">
                    Following the huge success of its first ever digital edition in 2020, Tomorrowland brought back the
                    spectacular two-day digital music festival experience on July 16 & 17, 2021, welcoming the most
                    spectacular
                    group of entertainers in the universe ‘The Amicorum Spectaculum’. The magnificent second edition of
                    Tomorrowland – Around the World was adapted to all time zones and brought together a stellar line-up
                    featuring
                    more than 40 of the planet’s biggest names in electronic dance music, while the People of Tomorrow
                    from all corners of the globe united again as one in one place – celebrating the spectacle of
                    friendship.
                </p>
            </div>

            <!-- <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{asset('client/img/camel-ride/camel-ride1.png')}}" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('client/img/camel-ride/camel-ride2.png')}}" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('client/img/camel-ride/camel-ride3.png')}}" />
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-scrollbar"></div>
            </div> -->
        </div>
    </section>
    <!--====================  ====================-->
    <!--====================  ====================-->
    <section class="about__safari section container">
        <div class="tomt__container">
            <!-- <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{asset('client/img/canam-ride/canam-ride1.png')}}" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('client/img/canam-ride/canam-ride2.png')}}" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('client/img/canam-ride/canam-ride3.png')}}" />
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-scrollbar"></div>
            </div> -->

            <div class="qert raptor__mob1">
                <!-- <h6 class="asdf">2022</h6> -->
                <h3 class="h3__huihui">Can-Am</h3>
                <p class="p__fhghh">
                    Buckle your seat belts on for an action-packed thriller on a Can-Am 2 Seatrer buggy. Enjoy this
                    thrilling adventure with a friend or relative. This ride starts with a guidance session from one of
                    our expert
                    instructors who will join you on the ride. You will be given safety gear for your protection on the
                    ride. All our vehicles are serviced and maintatined for top quality performance so you can enjoy
                    your ride. All
                    SOPs are followed and the vehicles and equipment are properly sanitised.
                </p>
            </div>
        </div>
    </section>
    <!--====================  ====================-->
    <!--====================  ====================-->
    <section class="about__safari section4 container">
        <div class="container">
            <div class="qert" style="background: #000; padding-top: 0px;padding-bottom: 0px;">
                <h6 style="color: #fff; font-size: 35px; text-align: center; text-align: center; padding-bottom: 40px;"
                    class="asdf">About Us</h6>
                <p style="color: #fff; text-align: justify;" class="p__fhghh para__about">
                    Do you want to fill your time in Dubai with adventures and thrilling activities? Then, we have just
                    the thing for you.Duneride provides premium experiences with desert activities and tours in
                    Dubai. Join us in
                    nail-biting escapades in the Dubai desert with family & friends. Enjoy your evening with activities
                    unique to Dubai and return to your life with fresh vigour and great memories from an
                    adventure-filled trip.When
                    you think of Dubai, you think of the desert, and we take you right into the dunes in a vehicle of
                    your choice. Pick your speed with a Quad Bike, Raptor, MotoCross, Dune Buggy or Land Cruisers. Let’s
                    Ride!.We have
                    created hundreds of great tour & activity outings for customers. We are the preferred vendors for
                    other premium tour companies in Dubai. Our customers come from worldwide and include solo
                    travellers, couples,
                    families, and corporate groups. All our activities are designed with the safety of our customers in
                    mind and include expert instruction and safety gear, where applicable.
                </p>
            </div>
        </div>
    </section>
    <!--====================  ====================-->
</main>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 10,

        freeMode: true,

    });
    var swiper2 = new Swiper(".mySwiper2", {
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

    });
</script>

@include('client_layout.footer')
<!-- quantity selector -->
</body>

</html>