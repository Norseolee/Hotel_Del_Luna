<!DOCTYPE html>
<html lang="en">

<head>
    @include('Layout.Head')
    <link rel="stylesheet" href="{{asset('Css/Dining.css')}}">
</head>

<body>
    <header>
        @include('Layout.Navbar')
        <div class="hero" data-aos="fade-down" data-aos-duration="1000">
        </div>
    </header>


    <div class="dine" data-aos="fade-up" data-aos-duration="800">
        <h1>DINE</h1>
        <p>
            mmerse yourself in a world of exceptional flavors and impeccable
            service. Our talented chefs create delectable dishes using the finest
            ingredients sourced from around the world. <br />With an elegant dining
            space and warm ambiance, we provide the perfect setting for any
            occasion. Join us for a remarkable dining experience that will delight
            your senses and create unforgettable memories.
        </p>
    </div>
    <main>
        <div>
            <h1 class="mt-5 mb-3" data-aos="slide-left" data-aos-duration="800">
                FEATURED
            </h1>
        </div>
        <div class="resto_featured" data-aos="slide-right" data-aos-duration="800">
            <div id="carousel_resto_featured" class="carousel slide" data-ride="carousel" data-interval="5000">
                <ol class="carousel-indicators">
                    <li data-target="#carousel_resto_featured" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel_resto_featured" data-slide-to="1"></li>
                    <li data-target="#carousel_resto_featured" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('Images/dining_1.PNG')}}" class="d-block w-100" alt="Father Retreat" />
                        <div class="carousel-caption d-none d-md-block">
                            <h5>KOMA</h5>
                            <h5>JAPANESE | FINE DINING</h5>
                            <p>
                                Enter through a striking 20-metre passageway reminiscent of
                                Fushimi Inari Shrine. Savour innovative and original creations
                                in a dramatic setting inspired by old Kyoto ― a real feast for
                                the senses.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('Images/dining_2.PNG')}}" class="d-block w-100"
                            alt="child and father swimming in the pool" />
                        <div class="carousel-caption d-none d-md-block">
                            <h5>CUT</h5>
                            <h5>WESTERN | FINE DINING</h5>
                            <p>
                                The only MICHELIN-Starred steakhouse in Singapore, with a fine
                                selection of rare cuts sourced from three continents. Savour
                                the classic USDA Prime Rib Eye Steak grilled over charcoal and
                                applewood, or indulge in a rib eye cut of Sendai Wagyu grilled
                                over Binchotan charcoal.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('Images/dining_3.png')}}" class="d-block w-100" alt="..." />
                        <div class="carousel-caption d-none d-md-block">
                            <h5>ENDLESS LUNCH SELECTIONS</h5>
                            <p>
                                Whether it’s a business lunch arranged to impress, or a casual
                                get-together along the scenic waterfront, you’ll be spoiled
                                for choice with over 40 restaurants and bars. What’s more,
                                parking is complimentary
                            </p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel_resto_featured" role="button" data-slide="prev"></a>
                <a class="carousel-control-next" href="#carousel_resto_featured" role="button" data-slide="next"></a>
            </div>
        </div>
        <!-- RESTO -->
        <div class="resto" data-aos="slide-left" data-aos-duration="800">
            <a href="dining/koma.html">
                <div class="restaurants">
                    <img src="{{ asset('Images/dining_1.PNG')}}" />
                    <p>KOMA</p>
                </div>
            </a>
            <a href="dining/bubbly_lounge.html">
                <div class="restaurants">
                    <img src="{{ asset('Images/dining_4.png')}}" />
                    <p>BUBBLY LOUNGE</p>
                </div>
            </a>
            <a href="dining/red_spice.html">
                <div class="restaurants">
                    <img src="{{ asset('Images/dining_5.png')}}" />
                    <p>RED SPICE</p>
                </div>
            </a>
            <a href="dining/japanese_kappou.html">
                <div class="restaurants">
                    <img src="{{ asset('Images/dining_6.png')}}" />
                    <p>JAPANESE KAPPOU</p>
                </div>
            </a>
            <a href="dining/ginza_nagaoka.html">
                <div class="restaurants">
                    <img src="{{ asset('Images/dining_7.png')}}" />
                    <p>GINZA NAGAOKA</p>
                </div>
            </a>
            <a href="dining/yu_lei.html">
                <div class="restaurants">
                    <img src="{{ asset('Images/dining_8.png')}}" />
                    <p>YU LEI</p>
                </div>
            </a>
            <a href="dining/chairman_lounge.html">
                <div class="restaurants">
                    <img src="{{ asset('Images/dining_9.png')}}" />
                    <p>CHAIRMAN'S LOUNGE</p>
                </div>
            </a>
            <a href="dining/executive_lounge.html">
                <div class="restaurants">
                    <img src="{{ asset('Images/dining_10.png')}}" />
                    <p>EXECUTIVE LOUNGE</p>
                </div>
            </a>
        </div>

        <div class="chef"></div>

        {{-- TODO: SUBMITT --}}
        <div class="newsletters_resto" data-aos="zoom-in" data-aos-duration="800">
            <h2>Hotel Del Luna Restaurant</h2>
            <input type="email" /><br />
            <button type="submit">JOIN NEWSLETTER</button>
            <p>
                Join the Hotel Del Luna Restaurant Newsletter for the latest updates,
                exclusive offers, and culinary delights!
            </p>
        </div>
    </main>

    @include('Layout.Footer')
    @include('Layout.aos')
</body>

</html>