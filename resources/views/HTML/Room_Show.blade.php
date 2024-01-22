<!DOCTYPE html>
<html lang="en">

<head>
    @include('Layout.Head')
    <link rel="stylesheet" href="{{ asset('Css/Room_Show.css') }}">
</head>

<body>
    @include('Layout.Navbar')
    <section class="hero">
        @foreach ($room_gallery as $photo)
        <img src="{{ $photo->room_picture }}" alt="">
        @break
        @endforeach
    </section>
    <section class="title_description text-center">
        <h1 class="gold">{{ $room->room_name }}</h1>
        <p>{{ $room->description }}</p>

        <button class='Btn_reserve'>RESERVE</button>
    </section>

    @if ($key_features->count() > 0 && $key_features[0]->key_feature_picture !== null && $key_features[0]->key_feature_picture !== '')
    <section class="key_feature">
        <h1 class="text-center gold">KEY FEATURES</h1>
        <div class="key_features_card">
            @foreach ($key_features as $key_feature)
            @if ($key_feature->key_feature_picture !== null && $key_feature->key_feature_picture !== '')
            <div>
                <img src="{{ $key_feature->key_feature_picture }}" alt="">
                <p>{{ $key_feature->key_feature_description }}</p>
            </div>
            @endif
            @endforeach
        </div>
    </section>
    @endif

    <section class='amenities'>
        <section>
            <h3 class="gold">SIZE & OCCUPANCY</h3>
            <ul>
                @foreach ($amenities as $amenity)
                @if($amenity->amenities_type == 'Size & Occupancy')
                <li>{{ $amenity->amenities_list }}</li>
                @endif
                @endforeach
            </ul>
        </section>
        <section>
            <h3 class="gold">AMENITIES</h3>
            <ul id='amenitiesList'>
                @foreach ($amenities as $index => $amenity)
                @if($amenity->amenities_type !== 'Size & Occupancy')
                @if($index < 3) <li>{{ $amenity->amenities_list }}</li>
                    @endif
                    @endif
                    @endforeach
            </ul>
            @if(count($amenities) > 3)
            <button class="Btn" id="viewMoreBtn">View More</button>
            @endif
        </section>
        <div id="modal-overlay">
            <div id="modal-content">
                @foreach ($group_amenities as $group => $groupedAmenities)
                @if ($group !== 'Size & Occupancy')
                <h2 class="gold">{{ $group }}</h2>
                <ul class='modalAmenitiesList'>
                    @foreach ($groupedAmenities as $amenity)
                    <li>{{ $amenity['amenities_list'] }}</li>
                    @endforeach
                </ul>
                @endif
                @endforeach
                <button class="Btn" id="closeModalBtn">Close</button>
            </div>
        </div>
        <section>
            <h3 class="gold">VIEW</h3>
            <ul>
                @foreach ($view as $v)
                @if($v->view !== 'All')
                <li>{{ $v->view }}</li>
                @endif
                @endforeach
            </ul>
        </section>
    </section>

    <!-- Carousel -->
    <div id="carousel_resto_featured" class="carousel slide" data-ride="carousel" data-interval="5000">
        <ol class="carousel-indicators">
            @foreach ($room_gallery as $index => $photo)
            <li data-target="#carousel_resto_featured" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach ($room_gallery as $index => $photo)
            <div class="carousel-item{{ $index == 0 ? ' active' : '' }}">
                <img src="{{ $photo->room_picture }}" class="d-block w-100" alt="{{ $photo->room_type_id }}">
                <div class="carousel-caption d-none d-md-block">
                    <h5>{{ $photo->room_name }}</h5>
                    <p>{{ $photo->description }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carousel_resto_featured" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel_resto_featured" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>


    <section class="terms_condition">
        <h1 class="gold">Terms and Conditions</h1>
        <ul>
            @php
            $conditions = preg_split("/\n+/", $room->terms_and_conditions);
            @endphp

            @foreach ($conditions as $condition)
            <li>{{ $condition }}</li>
            @endforeach
        </ul>
    </section>


    <section class="more_room">
        @foreach ($allroom as $room)
        <div class="room_card">
            <div class='image'>
                @foreach($allroom_gallery->where('room_type_id', $room->room_type_id) as $gallery)
                <img src="{{ $gallery->room_picture }}" width='500px' alt="">
                @break
                @endforeach
                <div class='moreroom_information'>
                    <h2 class="gold">{{ $room->room_name }}</h2>
                    <p class='room_description'>
                        {{ $room->intro_description }}
                    </p>

                    <ul>
                        @foreach($all_amenity->where('room_type_id', $room->room_type_id) as $roomamenities)
                        @if($roomamenities->amenities_type == 'Size & Occupancy')
                        <li>{{ $roomamenities->amenities_list }}</li>
                        @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div>
                <a href="/Rooms/{{ $room->room_type_id }}"><button class="Btn">View Details</button></a>
            </div>
        </div>
        @endforeach
    </section>




    @include("Layout.Footer")
    @include('Layout.aos')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var amenitiesList = document.getElementById('amenitiesList');
            var viewMoreBtn = document.getElementById('viewMoreBtn');
            var modalOverlay = document.getElementById('modal-overlay');
            var closeModalBtn = document.getElementById('closeModalBtn');

            function openModal() {
                modalOverlay.style.display = 'block';
            }

            function closeModal() {
                modalOverlay.style.display = 'none';
            }

            viewMoreBtn.addEventListener('click', function() {
                openModal();
            });

            closeModalBtn.addEventListener('click', closeModal);

            modalOverlay.addEventListener('click', function(event) {
                if (event.target === modalOverlay) {
                    closeModal();
                }
            });
        });

    </script>
</body>

</html>
