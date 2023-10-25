<!DOCTYPE html>
<html lang="en">

<head>
    @include('Layout.Head')
    <link rel="stylesheet" href="{{ asset('Css/Meeting_Events.css')}}">
</head>

<body>
    @include('Layout.Navbar')
    <div class="hero" data-aos="fade-down" data-aos-duration="1000"></div>

    <main>
        <div class="spa">
            <img class="images" src="{{ asset('Images/event-background.jpg')}}" alt="" />
        </div>
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
                            <img src="{{ asset('Images/event-card.jpg')}}" alt="family in a spa message" />
                            <div class="content_card_deal">
                                <div class="card_title">
                                    <h3>Events at the Poolside</h3>
                                </div>
                                <div class="card_content">
                                    Accommodating up to 420 people, this idyllic oasis is
                                    designed to both satisfy and surprise even the most
                                    discerning guest.
                                </div>
                                <div class="deal_readmore">
                                    <button class="deal_btn">View Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card_deal">
                        <div class="card_image_deal">
                            <img src="{{asset('Images/theatre-card.jpeg')}}"
                                alt="child and father swimming in the pool" />
                        </div>
                        <div class="content_card_deal">
                            <div class="card_title">
                                <h3>The Theatre at Hotel Del Luna</h3>
                            </div>
                            <div class="card_content">
                                <p>
                                    The Theatre is your ultimate venue for entertainment. It’s a
                                    1740-seated lyric theatre with state-of-the-art audio,
                                    video, and production lighting systems.
                                </p>
                            </div>
                            <div class="deal_readmore">
                                <button class="deal_btn">View Details</button>
                            </div>
                        </div>
                    </div>
                    <div class="card_deal">
                        <div class="card_image_deal">
                            <img src="{{ asset('Images/forums-card.jpeg')}}" alt="family swimming in the pool" />
                        </div>
                        <div class="content_card_deal">
                            <div class="card_title">
                                <h3>The Forums</h3>
                            </div>
                            <div class="card_content">
                                <p>
                                    Solaire Resort, a world class integrated resort and casino
                                    is strategically located minutes away from the international
                                    and domestic airport and the SM Mall of…
                                </p>
                            </div>
                            <div class="deal_readmore">
                                <button class="deal_btn">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


    @include('Layout.Footer')
    @include('Layout.aos')
</body>

</html>