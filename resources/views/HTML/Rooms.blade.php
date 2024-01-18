<!DOCTYPE html>
<html lang="en">

<head>
    @include('Layout.Head')
    <link rel="stylesheet" href="{{ asset('Css/Room.css')}}">
</head>

<body>
    <header>
        @include('Layout.Navbar')
        <div class="hero">
        </div>
    </header>

    <!-- Section -->
    <section class="book">
        <div class="view">
            <button class="select_view" data-for-tab="city_view">City View</button>
            <button class="select_view" data-for-tab="sea_view">Sea View</button>
        </div>

        <div>
            <form action="" method="get">
                <div data-tab="city_view" class="select_room">
                    <div class="room">
                        <div>
                            <label>Check-in:</label>
                            <input class="datePicker" type="date" />
                        </div>
                        <div>
                            <label>Check-out:</label>
                            <input class="datePicker" type="date" />
                        </div>
                        <div>
                            <label>Adults: </label>
                            <input type="number" placeholder="0" />
                        </div>
                        <div>
                            <label>Children:</label>
                            <input type="number" placeholder="0" />
                        </div>
                    </div>
                </div>
            </form>

            <form action="" method="get">
                <div data-tab="sea_view" class="select_room">
                    <div class="room">
                        <div>
                            <label>Check-in:</label>
                            <input class="datePicker" type="date" placeholder="Check-in-Date" />
                        </div>
                        <div>
                            <label>Check-out:</label>
                            <input class="datePicker" type="date" placeholder="Check-out-Date" />
                        </div>
                        <div>
                            <label>Adults:</label>
                            <input type="number" placeholder="0" />
                        </div>
                        <div>
                            <label>Children:</label>
                            <input type="number" placeholder="0" />
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="availablity_btn">
            <button class="availablity" type="submit">AVAILABILITY</button>
        </div>

    </section>
<!-- intro_room_suite -->
    <section class=" text-center m-5">
        <h1 class="gold">RETREAT INTO YOUR PRIVATE SANCTUARY</h1>
        <p>Every moment of your stay is an artfully curated experience at Hotel del Luna. Our three distinctive
            collections present a handpicked selection of rooms and suites, meticulously crafted to cater to your unique
            desires and needs. Begin your day with breathtaking views of your choosing, whether it's the lush Gardens by
            the Bay, the serene sea, or the dynamic city skyline. As our esteemed guest, you'll relish exclusive access
            to our world-renowned rooftop infinity pool, offering an unparalleled perspective. Immerse yourself in a
            world of culinary delights, shopping extravaganzas, and captivating entertainment options, all just a
            stone's throw away.</p>
    </section>
    <!-- Gallery -->

    <div>

    </div>


    <!-- Gallery -->
    <h5 class="text-center mt-5">FEATURES AND AMENITIES</h5>
    <div class="gallery-image pt-0">
        <div class="img-box">
            <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313977/swimmingpool_guxhdu.png" alt="" />
            <div class="transparent-box">
                <div class="caption">
                    <p>Swimming Pool</p>
                    <p class="opacity-low">"Freshen your day!"</p>
                </div>
            </div>
        </div>
        <div class="img-box">
            <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313975/spamassage_jz6k6o.png" alt="" />
            <div class="transparent-box">
                <div class="caption">
                    <p>Spa</p>
                    <p class="opacity-low">"Relax and Soothes your senses."</p>
                </div>
            </div>
        </div>
        <div class="img-box">
            <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313976/surfing_vw5egr.png" alt="" />
            <div class="transparent-box">
                <div class="caption">
                    <p>Surfing</p>
                    <p class="opacity-low">
                        "Different Stories, One Unforgettable Experience."
                    </p>
                </div>
            </div>
        </div>
        <div class="img-box">
            <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313930/conference-room_bcyfse.png" alt="" />
            <div class="transparent-box">
                <div class="caption">
                    <p>Conference</p>
                    <p class="opacity-low">"Reserved Comfort for your Meetings."</p>
                </div>
            </div>
        </div>
        <div class="img-box">
            <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313973/snorkeling_shzvtm.png" alt="" />
            <div class="transparent-box">
                <div class="caption">
                    <p>Snorkeling</p>
                    <p class="opacity-low">"Memories you will never forget."</p>
                </div>
            </div>
        </div>
        <div class="img-box">
            <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313946/gym_pyhuwz.png" alt="" />
            <div class="transparent-box">
                <div class="caption">
                    <p>Gym</p>
                    <p class="opacity-low">"Energize your body."</p>
                </div>
            </div>
        </div>
    </div>
</body>

@include('Layout.Footer')
@include('Layout.aos')


<script src="{{ asset('Javascript/Room_Javascript.js') }}"></script>

</html>
