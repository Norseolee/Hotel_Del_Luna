@props(['$room'])

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
