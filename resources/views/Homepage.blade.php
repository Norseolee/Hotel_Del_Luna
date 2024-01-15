<!DOCTYPE html>
<html lang="en">

<head>
    @include('Layout.Head')
    <link rel="stylesheet" href="{{ asset('Css/Homepage.css')}}">
</head>

<body>
    {{-- Navbar --}}
    <header>
        @include('Layout.Navbar')
        <div class="hero" data-aos="fade-down" data-aos-duration="1000">
        </div>
    </header>


    <main>
        <!-- ? WELCOME TO HOTEL DE LUNA -->
        <section class="welcome py-3 px-4">
            <div data-aos="zoom-in" data-aos-duration="800">
                <h1>Welcome to Hotel De Luna</h1>
                <p>
                    Welcome to Hotel De Luna, where the living and departed converge in
                    a realm of enchantment and secrets. Immerse yourself in an
                    extraordinary experience that transcends the boundaries of the
                    mortal world.
                </p>
            </div>
        </section>
        <!-- ! END OF WELCOME -->
        {{--


        --}}
        <!-- ? DEAL OF THE MONTH -->
        <section class="deal_of_month" data-aos="zoom-in" data-aos-duration="1100">
            <h1>Celebrating Father's Day</h1>
            <div class="deal_left">
                <p>
                    Treat your dad to an unforgettable experience at Hotel De Luna.
                    <br />
                    Book now for a special tribute to fatherhood and create cherished
                    memories together. <br />
                    Happy Father's Month!
                </p>
            </div>
            <div class="deal_right">
                <div class="deals">
                    <div class="card_deal">
                        <div class="card_image_deal">
                            <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313941/Father_Retreat_zoiplk.jpg" alt="family in a spa message" />
                            <div class="content_card_deal">
                                <div class="card_title">
                                    <h3>Father's Day Retreat</h3>
                                </div>
                                <div class="card_content">
                                    Treat dad to a luxurious getaway with lavish rooms,
                                    rejuvenating spa, refreshing pools, and renowned dining.
                                </div>
                                <a href="/Rooms">
                                    <div class="deal_readmore">
                                        <button class="deal_btn">Read More...</button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card_deal">
                        <div class="card_image_deal">
                            <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313958/indoor-climbing_ftljwb.jpg" alt="child and father swimming in the pool" />
                        </div>
                        <div class="content_card_deal">
                            <div class="card_title">
                                <h3>Thrills and Chills Package</h3>
                            </div>
                            <div class="card_content">
                                <p>
                                    Surprise dad with adrenaline-pumping activities like indoor
                                    climbing and thrilling outdoor adventures.
                                </p>
                            </div>
                            <a href="/Rooms">
                                <div class="deal_readmore">
                                    <button class="deal_btn">Read More...</button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="card_deal">
                        <div class="card_image_deal">
                            <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313940/Family_Fun_Getaway_cje1va.jpg" alt="family swimming in the pool" />
                        </div>
                        <div class="content_card_deal">
                            <div class="card_title">
                                <h3>Family Fun Getaway</h3>
                            </div>
                            <div class="card_content">
                                <p>
                                    Create cherished family memories with swimming, garden
                                    exploration, and captivating theater performances.
                                </p>
                            </div>
                            <div class="deal_readmore">
                                <button class="deal_btn">Read More...</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- !END OF DEAL OF MONTH -->
        {{--


        --}}
        <!-- ? EXPERIENCE WITH US! -->
        <section class="pt-5 pb-5" data-aos="zoom-in" data-aos-duration="1000">
            <div class="container-fluid container_exp">
                <div class="row">
                    <div class="col-12">
                        <h1 class="mb-3">Experience with us!</h1>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="card_exp">
                                                <div class="card_image_exp">
                                                    <img alt="resto bar of Marina bay sands"
                                                        src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313937/dining_thumbnail_e5sc5m.png" />

                                                    <div class="card_body_exp">
                                                        <h3 class="card-title">
                                                            Experience the art of Dining
                                                        </h3>
                                                        <a href="/Dine">
                                                            <button class="btn_Experience">
                                                                Check out
                                                            </button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card_exp">
                                                <div class="card_image_exp">
                                                    <img alt="resto bar of Marina bay sands"
                                                        src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313968/room_suite_yyytym.png" />
                                                    <div class="card_body_exp">
                                                        <h3 class="card-title">
                                                            unveiling our new Rooms and Suites
                                                        </h3>
                                                        <a href="/Rooms">
                                                            <button class="btn_Experience">
                                                                Check out
                                                            </button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card_exp">
                                                <div class="card_image_exp">
                                                    <img alt="girl in outdoor pool" src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313962/out_pool_model_e0lb8x.png" />
                                                    <div class="card_body_exp">
                                                        <h3 class="card-title">
                                                            Take a dip in the infinity Pool
                                                        </h3>
                                                        <a href="HTML/swimmingpool.html">
                                                            <button class="btn_Experience">
                                                                Check out
                                                            </button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="card_exp">
                                                <div class="card_image_exp">
                                                    <img alt="family in the boat" src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313929/boat_sampan_bbfrie.png" />
                                                    <div class="card_body_exp">
                                                        <h3 class="card-title">Sampan Rides</h3>
                                                        <button class="btn_Experience">Check out</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card_exp">
                                                <div class="card_exp">
                                                    <div class="card_image_exp">
                                                        <img alt="family in the boat"
                                                            src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313971/shooting_thumbnail_ezwggx.webp" />
                                                        <div class="card_body_exp">
                                                            <h3 class="card-title">Shooting Range</h3>
                                                            <a href="/Shooting"><button class="btn_Experience">
                                                                    Check out
                                                                </button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card_exp">
                                                <div class="card_image_exp">
                                                    <img alt="digital art of marina bay sands"
                                                        src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313930/dance_floor_art_ywdisa.jpg" />
                                                    <div class="card_body_exp">
                                                        <h3 class="card-title">Digital Light Canvas</h3>
                                                        <button class="btn_Experience">Check out</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="card_exp">
                                                <div class="card_image_exp">
                                                    <img alt="100%x280" src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313930/Clubs_vg3b6t.png" />
                                                    <div class="card_body_exp">
                                                        <h3 class="card-title">Marquee Singapore</h3>
                                                        <button class="btn_Experience">Check out</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card_exp">
                                                <div class="card_image_exp">
                                                    <img alt="Casino" src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313929/Casino_thuyhj.webp" />
                                                    <div class="card_body_exp">
                                                        <h3 class="card-title">Hotel Del Luna Casino</h3>
                                                        <button class="btn_Experience">Check out</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card_exp">
                                                <div class="card_image_exp">
                                                    <img alt="many rings" src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313961/luxury_shoping_bklpwq.png" />
                                                    <div class="card_body_exp">
                                                        <h3 class="card-title">
                                                            Luxury never goes out of style
                                                        </h3>
                                                        <button class="btn_Experience">Check out</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-2">
                        <a class="btn btn_exp mb-3 mr-1" href="#carouselExampleIndicators2" role="button"
                            data-slide="prev">
                            <i class="fa fa-arrow-left"></i>
                        </a>
                        <a class="btn btn_exp mb-3" href="#carouselExampleIndicators2" role="button" data-slide="next">
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ! END OF EXPERIENCE WITH US -->
        {{--


        --}}
        <!-- ? WELLNESS CAMP -->
        <section class="wellness_camp">
            <img class="wellness_img" data-aos="zoom-in" data-aos-duration="1000" src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313976/swimming_x6mhk0.jpg" alt="spa" />
            <h1 class="mt-3">WELLNESS CAMP</h1>
            <p>
                Discover the path to wellness at Hotel Del Luna's Wellness Camp.<br />
                Immerse yourself in rejuvenating spa treatments, invigorating fitness
                sessions, nourishing cuisine, and tranquil surroundings. <br />
                Elevate your well-being and embark on a journey of self-care at
                Wellness Camp.
            </p>
            <section class="pt-5 pb-5" data-aos="zoom-in" data-aos-duration="1000">
                <div class="container-fluid container_wellness">
                    <div class="row">
                        <div class="col-12 all_wellness">
                            <div id="carousel_indicator_wellness" class="carousel slide" data-ride="">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-md-4 mb-3 content_wellness">
                                                <h1>GYM</h1>
                                                <p>
                                                    Unleash your fitness potential at Hotel Del Luna's
                                                    state-of-the-art gym, where cutting-edge equipment,
                                                    expert trainers, and a breathtaking view come
                                                    together to elevate your workout experience.
                                                </p>
                                                <button class="btn-Wellness">Check out</button>
                                            </div>
                                            <div class="col-md-8 mb-3">
                                                <div class="card_well">
                                                    <img class="card_image_wellness" alt="people running in tranmil"
                                                        src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313947/gym_pic_lf2ivc.jpg" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-md-4 mb-3 content_wellness">
                                                <h1>SPA</h1>
                                                <p>
                                                    Indulge in pure relaxation and rejuvenation at Hotel
                                                    Del Luna's luxurious spa. Immerse yourself in a
                                                    world of tranquility as expert therapists pamper you
                                                    with soothing treatments, leaving you refreshed,
                                                    revitalized, and ready to embrace blissful serenity.
                                                </p>
                                                <button class="btn-Wellness">Check out</button>
                                            </div>
                                            <div class="col-md-8 mb-3">
                                                <div class="card_well">
                                                    <img class="card_image_wellness" alt="girl massage"
                                                        src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313975/spamassage_jz6k6o.png" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-md-4 mb-3 content_wellness">
                                                <h1>Deliciously Nourishing</h1>
                                                <p>
                                                    Revitalize your palate with Hotel Del Luna's healthy
                                                    food luxury, where every dish is thoughtfully
                                                    crafted to nourish your body and delight your taste
                                                    buds, ensuring a delectable culinary journey that
                                                    promotes wellness.
                                                </p>
                                                <button class="btn-Wellness">Check out</button>
                                            </div>
                                            <div class="col-md-8 mb-3">
                                                <div class="card_well">
                                                    <img class="card_image_wellness" alt="indoor climbing"
                                                        src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313947/healty_food_cztoty.png" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section_btn_wellness">
                            <a class="btn btn_wellness mb-3 mr-1" href="#carousel_indicator_wellness" role="button"
                                data-slide="prev">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                            <a class="btn btn_wellness mb-3" href="#carousel_indicator_wellness" role="button"
                                data-slide="next">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <!-- !END OF WELLNESS CAMP -->
        {{--


        --}}
        <!-- ? REWARDS POINTS -->
        <section class="reward_cards_section">
            <div data-aos="zoom-in" data-aos-duration="1000">
                <h1>REWARDS</h1>
                <p>
                    Experience a world of luxury at Hotel Del Luna and earn valuable
                    points with every purchase, check-in, and event attendance,
                    unlocking a realm of exclusive rewards and privileges."
                </p>
            </div>

            <div class="reward_card_design" data-aos="zoom-in" data-aos-duration="1000">
                <p class="reward_card">
                    <i><img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313941/favicon_sa2lmw.ico" /></i>
                    <br />123 456 7890
                </p>
                <p class="reward_card">
                    <i><img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313941/favicon_sa2lmw.ico" /></i>
                    <br />975 310 4826
                </p>
                <p class="reward_card">
                    <i><img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313941/favicon_sa2lmw.ico" /></i>
                    <br />624 578 1930
                </p>
                <p class="reward_card">
                    <i><img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313941/favicon_sa2lmw.ico" /></i>
                    <br />408 729 5613
                </p>
            </div>

            <a href="/Rewards" class="btn_rewards"> Discover more</a>
        </section>
        <!-- ! END OF REWARDS POINTS -->
    </main>


    <!-- FOOTER SECTION -->
    @include('Layout.Footer')


    {{-- Data-AOS --}}
    @include('Layout.aos')
</body>

</html>