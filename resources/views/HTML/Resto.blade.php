<!DOCTYPE html>
<html lang="en">

<head>
    @include('Layout.Head')
    <link rel="stylesheet" href="{{ asset('Css/Resto.css')}}">
</head>

<body>
    <header>
        @include('Layout.Navbar')
        <div class="hero" data-aos="fade-down" data-aos-duration="1000">
            <img src="{{ $restaurant->picture }}" alt="{{$restaurant->restaurant_name}} picture">
        </div>
    </header>

    <div class="resto-title">
        <h1>{{$restaurant->restaurant_name}}</h1>
        <p>{{$restaurant->restaurant_type}}</p>
    </div>

    <div class="resto-description">
        <p>{{$restaurant->description}}</p>
    </div>

    <div class="resto_information">
        <div class="resto-details">
            <h3>RESTAURANT DETAILS</h3>
        </div>
        <div class="restaurant-details">
            <div class="location">
                <h4>LOCATION</h3>
                    <p>{{$restaurant->location}}</p>
            </div>

            @if ($restaurant->time_open !== null && $restaurant->time_close !== null)
            <div class="restaurant-operating-hrs">
                <h4>OPERATING HOURS</h3>

                    @php
                    $timeopen = $restaurant->time_open;
                    $timeclose = $restaurant->time_close;

                    // Assuming the time format is "h:i A"
                    $timeopenString = date("h:i A", strtotime($timeopen));
                    $timecloseString = date("h:i A", strtotime($timeclose));
                    @endphp

                    <p>{{ $timeopenString }} - {{ $timecloseString }}</p>
            </div>
            @endif

            @if ($restaurant->contact_email !== null || $restaurant->contact_number !== null)
            <div class="restaurant-contact">
                <h4>CONTACT US</h3>
                    @if ($restaurant->contact_email !== null)
                    <div class="resto-email">
                        <p>{{$restaurant->contact_email}}</p>
                    </div>
                    @endif
                    @if ($restaurant->contact_number !== null)
                    <div class="resto-email">
                        <p>{{$restaurant->contact_number}}</p>
                    </div>
                    @endif
            </div>
            @endif
        </div>
    </div>

    <div class="gallery-container">
        @foreach ($restaurant_gallery as $gallery)
        @if ($gallery->restaurant_id == $restaurant->restaurant_id)
        <div class="gallery-item">
            <img src="{{ $gallery->picture }}" alt="Gallery Image" onclick="openLightbox('{{ $gallery->picture }}')">
        </div>
        @endif
        @endforeach
    </div>

    <div id="lightbox-container" onclick="closeLightbox()">
        <img id="lightbox-image" src="" alt="Full Screen Image">
    </div>

    <script>
        function openLightbox(imageUrl) {
            var lightboxContainer = document.getElementById('lightbox-container');
            var lightboxImage = document.getElementById('lightbox-image');

            lightboxImage.src = imageUrl;
            lightboxContainer.style.display = 'flex';
        }

        function closeLightbox() {
            var lightboxContainer = document.getElementById('lightbox-container');
            lightboxContainer.style.display = 'none';
        }

    </script>
    </div>

    @include('Layout.Footer')
    @include('Layout.aos')
</body>

</html>
