<!-- Include jQuery from a CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include Owl Carousel CSS and JS from a CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<style>
    .custom-carousel {
        position: relative;
    }

    .custom-carousel .custom-prev {
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
        left: 42px;
        z-index: 1;
        padding: 7px 14px;
        border-radius: 100%;
        background: rgba(255, 255, 255, 0.25);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(4px);
    }

    .custom-carousel .custom-next {
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
        right: 9px;
        z-index: 1;
        padding: 7px 14px;
        border-radius: 100%;
        background: rgba(255, 255, 255, 0.25);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(4px);
    }

    .custom-carousel .custom-prev .fa {
        border-radius: 100%;
    }

    .advntr-activities .row .card {
        border: 0;
        border-radius: 0;
    }

    .advntr-activities .row {
        padding: 22px 0;
    }

    .advntr-activities .row .qert,
    .advntr-activities .row .custom-carousel,
    .advntr-activities .row .raptor__mob1 {
        height: 95%;
    }
</style>



<div class="container advntr-activities">
    <h2 class="tom__title">OUR MOST POPULAR EXPERIENCES</h2>
    <h6 class="tom__sub_h jmk">Entertain with Adventerous Activities</h6>

    <div class="row g-lg-5">
        <div class="col-lg-5">
            <div class="qert ">
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
                <div class="text-end">
                <a href="{{url('product/one-seater-quad-bike-self-ride-to-open-desert')}}" class="button popi-black">Book
                        Activity</a>
                </div>
           


            </div>
        </div>

        <div class="col-lg-7">
            <div class=>
                <div class="custom-carousel">
                    <div class="owl-carousel quad-bike">
                        <div class="item"> <img src="{{asset('client/img/quad-bikes_home/Qbike1.png')}}" /></div>
                        <div class="item"><img src="{{asset('client/img/quad-bikes_home/Qbike2.png')}}" alt=""></div>
                        <div class="item"><img src="{{asset('client/img/quad-bikes_home/Qbike3.png')}}" alt=""></div>
                        <!-- Add more items as needed -->
                    </div>
                    <button class="custom-prev"><i class="fa-solid fa-chevron-left"></i></button>
                    <button class="custom-next"><i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>
        </div>

    </div>

    <div class="row g-lg-5">
        <div class="col-lg-7 order-lg-0 order-1">
            <div class=>
                <div class="custom-carousel">
                    <div class="owl-carousel raptor">
                        <div class="item"> <img src="{{asset('client/img/Raptor_home/raptor1.png')}}" /></div>
                        <div class="item"><img src="{{asset('client/img/Raptor_home/raptor2.png')}}" alt=""></div>
                        <div class="item"><img src="{{asset('client/img/Raptor_home/raptor3.png')}}" alt=""></div>
                        <!-- Add more items as needed -->
                    </div>
                    <button class="custom-prev"><i class="fa-solid fa-chevron-left"></i></button>
                    <button class="custom-next"><i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>
        </div>

        <div class="col-lg-5 order-lg-1 order-0">
            <div class="qert ">
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
                <div class="text-end">
                <a href="{{url('product/one-seater-raptor-self-ride-to-open-desert')}}" class="button popi-black">Book
                        Activity</a>
                </div>
           
            </div>
        </div>
    </div>

    <div class="row g-lg-5">

        <div class="col-lg-5">
            <div class="qert ">
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
                <div class="text-end">
                <a href="{{url('services')}}" class="button popi-black">Book
                        Activity</a>
                </div>
           
            </div>
        </div>

        <div class="col-lg-7">
            <div class=>
                <div class="custom-carousel">
                    <div class="owl-carousel">
                        <div class="item"> <img src="{{asset('client/img/camel-ride/camel-ride1.png')}}" /></div>
                        <div class="item"><img src="{{asset('client/img/camel-ride/camel-ride2.png')}}" alt=""></div>
                        <div class="item"><img src="{{asset('client/img/camel-ride/camel-ride3.png')}}" alt=""></div>
                        <!-- Add more items as needed -->
                    </div>
                    <button class="custom-prev"><i class="fa-solid fa-chevron-left"></i></button>
                    <button class="custom-next"><i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>
        </div>

    </div>

    <div class="row g-lg-5">
        <div class="col-lg-7  order-lg-0 order-1">
            <div class=>
                <div class="custom-carousel">
                    <div class="owl-carousel">
                        <div class="item"> <img src="{{asset('client/img/canam-ride/canam-ride1.png')}}" /></div>
                        <div class="item"><img src="{{asset('client/img/canam-ride/canam-ride2.png')}}" alt=""></div>
                        <div class="item"><img src="{{asset('client/img/canam-ride/canam-ride3.png')}}" alt=""></div>
                        <!-- Add more items as needed -->
                    </div>
                    <button class="custom-prev"><i class="fa-solid fa-chevron-left"></i></button>
                    <button class="custom-next"><i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>
        </div>

        <div class="col-lg-5  order-lg-1 order-0">
            <div class="qert ">
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

                <div class="text-end">
                <a href="{{url('services')}}" class="button popi-black">Book
                        Activity</a>
                </div>
           
            </div>
        </div>
    </div>

</div>

<script>

    // Raptor
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            items: 1, // Number of items to display
            loop: true, // Enable loop
            margin: 10, // Margin between items
        });

        // Custom next button
        $(".custom-next").click(function () {
            $(".owl-carousel").trigger("next.owl.carousel");
        });

        // Custom previous button
        $(".custom-prev").click(function () {
            $(".owl-carousel").trigger("prev.owl.carousel");
        });
    });


    // Raptor
    $(document).ready(function () {
        $(".quad-bike").owlCarousel({
            items: 1, // Number of items to display
            loop: true, // Enable loop
            margin: 10, // Margin between items
        });

        // Custom next button
        $(".custom-next").click(function () {
            $(".owl-carousel").trigger("next.owl.carousel");
        });

        // Custom previous button
        $(".custom-prev").click(function () {
            $(".owl-carousel").trigger("prev.owl.carousel");
        });
    });


    // Quad Bike
    $(document).ready(function () {
        $(".raptor").owlCarousel({
            items: 1, // Number of items to display
            loop: true, // Enable loop
            margin: 10, // Margin between items
        });

        // Custom next button
        $(".raptor-next").click(function () {
            $(".owl-carousel").trigger("next.owl.carousel");
        });

        // Custom previous button
        $(".raptor-prev").click(function () {
            $(".owl-carousel").trigger("prev.owl.carousel");
        });
    });
</script>