<!DOCTYPE html>
<html lang="en">

<head>
    @include("Layout.Head")
    <link rel="stylesheet" href="{{ asset('Css/Wellness.css')}}">
</head>

<body>
    <header>
        @include("Layout.Navbar")
        <div class="hero" data-aos="fade-down" data-aos-duration="1000"></div>
    </header>
    <div class="spa-details">
        <h1>Venues</h1>
        <p>
            All function room spaces at Hotel Del Luna feature state-of-the-art
            audiovisual equipment and conference facilities, exquisite menu
            options, and customized corporate meeting packages that suit your
            needs. We also have ample parking spaces and complimentary Wi-Fi
            access for guests.
        </p>
    </div>
    <section class="deal_of_month" data-aos="zoom-in" data-aos-duration="1100">
        <div class="deal_right">
            <div class="deals">
                <div class="card_deal">
                    <div class="card_image_deal">
                        <img src="{{ asset('Images/spa.jpg')}}" alt="family in a spa message" />
                        <div class="content_card_deal">
                            <div class="card_title">
                                <h3>Spa</h3>
                            </div>
                            <div class="card_content">

                                Indulge in a Full Body Massage with a Marvalous Sea-side View at Hotel Del Luna for the
                                ultimate relaxation experience.
                            </div>
                            <div class="deal_readmore">
                                <a href="/Spa"><button class="deal_btn">View Details</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card_deal">
                    <div class="card_image_deal">
                        <img src="{{ asset('Images/infinitypool.webp')}}" alt=" swimming in the pool" />
                    </div>
                    <div class="content_card_deal">
                        <div class="card_title">
                            <h3>Infinity Pool</h3>
                        </div>
                        <div class="card_content">
                            <p>

                                Discover the epitome of luxury and relaxation with our stunning rooftop infinity pool.
                            </p>
                        </div>
                        <div class="deal_readmore">
                            <a href="/Swimmingpool"><button class="deal_btn">View Details</button></a>
                        </div>
                    </div>
                </div>
                <div class="card_deal">
                    <div class="card_image_deal">
                        <img src="{{ asset('Images/gym.png')}}" alt="Picture of Gym" />
                    </div>
                    <div class="content_card_deal">
                        <div class="card_title">
                            <h3>Gym</h3>
                        </div>
                        <div class="card_content">
                            <p>
                                Achieve your fitness goals while enjoying breathtaking city or sea-side views at our
                                state-of-the-art gym.
                            </p>
                        </div>
                        <div class="deal_readmore">
                            <a href="/Gym"><button class="deal_btn">View Details</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include("Layout.Footer")
    @include("Layout.aos")
</body>

</html>