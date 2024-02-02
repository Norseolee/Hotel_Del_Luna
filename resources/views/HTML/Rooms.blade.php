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

    </section>
    <!-- intro_room_suite -->
    <section class="text-center intro">
        <h1 class="gold">RETREAT INTO YOUR PRIVATE SANCTUARY</h1>
        <p>Every moment of your stay is an artfully curated experience at Hotel del Luna. Our three distinctive
            collections present a handpicked selection of rooms and suites, meticulously crafted to cater to your unique
            desires and needs. Begin your day with breathtaking views of your choosing, whether it's the lush Gardens by
            the Bay, the serene sea, or the dynamic city skyline. As our esteemed guest, you'll relish exclusive access
            to our world-renowned rooftop infinity pool, offering an unparalleled perspective. Immerse yourself in a
            world of culinary delights, shopping extravaganzas, and captivating entertainment options, all just a
            stone's throw away.</p>
    </section>

    <div class='room p-5'>
        @foreach($room_type as $room)

        <div class="room_card">
            <div class='image'>
                @foreach($room->RoomGallery as $gallery)
                <img src="{{ $gallery->room_picture }}" width='500px' alt="">
                @break
                @endforeach
            </div>
            <h2 class="gold">{{ $room->room_name }}</h2>
            <p class='room_description'>
                {{ $room->intro_description }}
            </p>
            <div class="room-amenities">
                <ul>
                    @foreach($room->amenities as $amenity)
                    @if($amenity->amenities_type == 'Size & Occupancy')
                    <li>{{ $amenity->amenities_list }}</li>
                    @endif
                    @endforeach
                </ul>
            </div>
            <div>
                <a href="/Rooms/{{ $room->room_type_id }}"><button class='Btn'>View Details</button></a>
            </div>
        </div>

        @endforeach
    </div>

    <!-- Gallery -->
    <h5 class="text-center mt-5">FEATURES AND AMENITIES</h5>
    <div class="gallery-image pt-0">
        <div class="img-box">
            <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313977/swimmingpool_guxhdu.png" alt="" />
        </div>
        <div class="img-box">
            <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313975/spamassage_jz6k6o.png" alt="" />
        </div>
        <div class="img-box">
            <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313976/surfing_vw5egr.png" alt="" />
        </div>
        <div class="img-box">
            <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313930/conference-room_bcyfse.png" alt="" />
        </div>
        <div class="img-box">
            <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313973/snorkeling_shzvtm.png" alt="" />
        </div>
        <div class="img-box">
            <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313946/gym_pyhuwz.png" alt="" />
        </div>
    </div>
</body>

@include('Layout.Footer')
@include('Layout.aos')
</html>
