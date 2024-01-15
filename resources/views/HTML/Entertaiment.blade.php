<!DOCTYPE html>
<html lang="en">

<head>
    @include('Layout.Head')
    <link rel="stylesheet" href="{{asset('Css/Entertainment.css')}}">
</head>

<body>
    <header>
        @include('Layout.Navbar')
        <div class="hero" data-aos="fade-down" data-aos-duration="1000">
            <!-- Cinematic Video -->
            <video width="100%" loop muted autoplay>
                <source src="https://res.cloudinary.com/dk0ystu6k/video/upload/v1705313979/theatre-stage_pqydhx.mp4" type="video/mp4" id="theatre" />
                <source src="movie.ogg" type="video/ogg" />
                Your browser does not support the video tag.
            </video>
        </div>
    </header>


    <!-- Body -->
    <div class="text-center title">
        <p>
            <i>
                "Come, be a part of the theatrical journey that unfolds before your
                eyes. Let us kindle your creativity, spark your emotions, and leave
                you inspired. Whether you're a seasoned theatergoer or new to the
                world of live performances, our theater promises an unforgettable
                experience. Join us as we celebrate the beauty and artistry of
                theater, where imagination knows no bounds. Discover the magic of the
                stage, and let your spirit soar amidst the wonder that is live
                theater."</i>
        </p>
    </div>

    <!-- Events in Theatre / Cards-Up -->
    <h1 id="events">Events in Theatre</h1>

    <div class="Theatre-flex">
        <div class="Theatre-Card">
            <div class="card">
                <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313937/event1_siuwz4.png" class="card-img-top img-fluid" alt="..." />
                <div class="card-body">
                    <p class="price">$350</p>
                    <h5 class="card-title">Phanto: Opera</h5>
                    <br />
                    <p class="card-text">July 10<br />1:00pm - 3:00pm</p>
                    <!-- Button 1 -->
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        BUY
                    </button>
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        DETAILS
                    </button>
                    <!-- Modal 1 -->
                    <div class="modal fade" id="exampleModal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        Phantom: Opera
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    It tells the story of a beautiful soprano, Christine Daaé,
                                    who becomes the obsession of a mysterious, masked musical
                                    genius living in the subterranean labyrinth beneath the
                                    Paris Opéra House.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="button" class="btn">
                                        Save changes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Theatre-Card">
            <div class="card">
                <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313937/event2_rxfwd3.png" class="card-img-top img-fluid" alt="..." />
                <div class="card-body">
                    <p class="price">$200</p>
                    <h5 class="card-title">La Prima</h5>
                    <br />
                    <p class="card-text">July 12<br />3:30pm - 6:30pm</p>
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        BUY
                    </button>
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        DETAILS
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">La Prima</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    This is a French play composed by Claude-Michel Schönberg in
                                    1980. It is one of the most popular French musicals as it is
                                    performed in many locations in the world.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="button" class="btn">
                                        Save changes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Theatre-Card">
            <div class="card">
                <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313937/event3_kzthjs.png" class="card-img-top img-fluid" alt="..." />
                <div class="card-body">
                    <p class="price">$280</p>
                    <h5 class="card-title">Casablanca</h5>
                    <br />
                    <p class="card-text">July 15<br />2:00pm - 5:00pm</p>
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        BUY
                    </button>
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        DETAILS
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        Modal title
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">...</div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="button" class="btn">
                                        Save changes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Theatre-Card">
            <div class="card">
                <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313938/event4_wozuhq.png" class="card-img-top img-fluid" alt="..." />
                <div class="card-body">
                    <p class="price">$150</p>
                    <h5 class="card-title">La Bayadère</h5>
                    <br />
                    <p class="card-text">July 30<br />1:30pm - 3:30pm</p>
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        BUY
                    </button>
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        DETAILS
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        Modal title
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">...</div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="button" class="btn">
                                        Save changes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Theatre Plays -->
    <div class="pt-5">
        <h1 id="theatre-plays">Theatre Plays and Broadway Shows</h1>
    </div>
    <h5 class="text-center pt-5">THE THEATRE FEATURES AND AMENITIES</h5>
    <div class="gallery-image pt-0">
        <div class="img-box">
            <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313928/amenities1_harhws.png" alt="" />
            <div class="transparent-box">
                <div class="caption">
                    <p>Theatre Bar</p>
                    <p class="opacity-low">"Toast to a memorable night at the show!"</p>
                </div>
            </div>
        </div>
        <div class="img-box">
            <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313928/amenities2_hqt6h5.png" alt="" />
            <div class="transparent-box">
                <div class="caption">
                    <p>Front Gate</p>
                    <p class="opacity-low">"Where dreams come to life on the Stage."</p>
                </div>
            </div>
        </div>
        <div class="img-box">
            <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313928/amenities3_pd7dsi.png" alt="" />
            <div class="transparent-box">
                <div class="caption">
                    <p>Theatre</p>
                    <p class="opacity-low">
                        "Different Stories, One Unforgettable Experience."
                    </p>
                </div>
            </div>
        </div>
        <div class="img-box">
            <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313929/amenities4_jgmmdu.png" alt="" />
            <div class="transparent-box">
                <div class="caption">
                    <p>Theatre Chair</p>
                    <p class="opacity-low">"Reserved Comfort for your Enjoyment."</p>
                </div>
            </div>
        </div>
        <div class="img-box">
            <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313929/amenities5_v2g0du.png" alt="" />
            <div class="transparent-box">
                <div class="caption">
                    <p>Theatre Parking</p>
                    <p class="opacity-low">
                        "Convenient and hassle-Free Spaces for your Evening."
                    </p>
                </div>
            </div>
        </div>
        <div class="img-box">
            <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313928/amenities6_vqhjge.png" alt="" />
            <div class="transparent-box">
                <div class="caption">
                    <p>Theatre Cafe</p>
                    <p class="opacity-low">
                        "Energize your theater experience with a Fresh Brew."
                    </p>
                </div>
            </div>
        </div>
    </div>

    @include('Layout.Footer')
    @include('Layout.aos')
    <script src="../js/entertainment.js"></script>
</body>

</html>