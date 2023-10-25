<!DOCTYPE html>
<html lang="en">

<head>
    @include('Layout.Head')
    <link rel="stylesheet" href="{{ asset('Css/About.css')}}">
</head>

<body>
    {{-- Navbar --}}
    <header>
        @include('Layout.Navbar')
        <div class="hero" data-aos="fade-down" data-aos-duration="1000">
            <video autoplay loop class="hero-image">
                <source src="{{ asset('Images/test.mp4')}}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </header>

    <div class="container-fluid aboutcontainer">
        <div class="row" id="aboutrow">
            <div class="col-lg-10 offset-lg-1">
                <h1 id="aboutintro">About Hotel De Luna</h1>
                <p id="aboutpar">
                    At Hotel De Luna, we take pride in offering an exceptional array of
                    amenities and services to ensure a memorable and delightful stay for
                    our guests. Nestled in the heart of a bustling city, our hotel
                    provides a tranquil oasis where luxury and comfort harmoniously
                    blend.
                </p>
            </div>
        </div>
    </div>
    <!--accomodation-->
    <div class="container conacom">
        <div class="row my-5 row_accom d-flex align-items-center">
            <div class="col-lg-5">
                <h2>Our Accommodations</h2>
                <div class="my-4">
                    <p>
                        Indulge in the ultimate comfort and elegance with our meticulously
                        designed rooms and suites. Whether you're seeking a cozy retreat
                        or a lavish getaway, our accommodations cater to all your needs.
                        Each room is thoughtfully furnished, creating a serene ambiance
                        that promotes relaxation and rejuvenation.
                    </p>
                    <button class="btn_Experience">Book Now</button>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block">
                <img class="imgaccomlg" src="{{ asset('Images/room.jpg')}}" alt="Room" width="500" />
            </div>
            <div class="col-lg-12 d-md-block d-lg-none">
                <img class="imgaccomsm" src="{{ asset('Images/room.jpg')}}" alt="Room" width="350" />
            </div>
        </div>
    </div>

    <!--Swimming Pool-->
    <div class="container-fluid swimcon bg-dark">
        <div class="row my-5 d-flex align-items-center swimpool">
            <div class="col-lg-5 d-none d-lg-block">
                <div class="card-area">
                    <img class="imgswimpoollg" src="{{ asset('Images/infinitypool.webp')}}" alt="pool" width="430" />
                </div>
            </div>
            <div class="col-lg-7 d-md-block d-lg-none">
                <h2>Swimming Pools</h2>
                <div class="my-4">
                    <p>
                        Experience the epitome of luxury at our hotel's swimming pools.
                        Dive into the refreshing waters of our expansive main pool or
                        elevate your relaxation at our rooftop swimming pool, where
                        breathtaking views and a serene atmosphere await you.
                    </p>
                    <a class="btn btn_Experience" href="/Swimming_Pool">View More</a>
                </div>
            </div>
            <div class="col-lg-5 d-md-block d-lg-none">
                <img class="imgswimpoolsm" src="{{ asset('Images/infinitypool.webp')}}" alt="pool" width="350" />
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <h2>Swimming Pools</h2>
                <div class="my-4">
                    <p>
                        Experience the epitome of luxury at our hotel's swimming pools.
                        Dive into the refreshing waters of our expansive main pool or
                        elevate your relaxation at our rooftop swimming pool, where
                        breathtaking views and a serene atmosphere await you.
                    </p>
                    <button href="/Swimming_Pool" class="btn_Experience">
                        View More
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--Spa & Fitness-->
    <div class="container-fluid my-5 spafitnesscon">
        <div class="row my-5 spafitness d-flex align-items-center">
            <div class="col-lg-3 text-center">
                <img src="{{ asset('Images/fitness.webp')}}" alt="Fitness" width="280px" id="imgfitness" />
            </div>
            <div class="col-lg-3">
                <a href="gym.html">
                    <h2>Fitness Facilities</h2>
                </a>
                <p>
                    Stay active and maintain your fitness routine at our
                    state-of-the-art gym. Equipped with modern equipment and offering a
                    variety of fitness classes, our gym provides the perfect environment
                    for a challenging workout.
                </p>
            </div>
            <div class="col-lg-3 text-center spa">
                <img src="{{ asset('Images/spa.jpg')}}" alt="Fitness" width="280px" id="imgfitness" />
            </div>
            <div class="col-lg-3">
                <a href="/Spa">
                    <h2>Spa and Wellness</h2>
                </a>
                <p>
                    Rejuvenate your mind, body, and soul at our luxurious spa. Indulge
                    in a wide range of treatments and therapies designed to enhance
                    relaxation and promote overall well-being. Our skilled therapists
                    will pamper you with personalized care.
                </p>
            </div>
        </div>
    </div>
    <!--Theatre-->
    <div class="container-fluid my-5 theatreentcon">
        <div class="row my-5 theatreent d-flex align-items-center">
            <div class="col-lg-3 text-center">
                <img src="{{ asset('Images/theatre.jpg')}}" alt="Fitness" width="280px" id="imgfitness" />
            </div>
            <div class="col-lg-3 text-center">
                <h2>Entertainment</h2>
                <p>
                    Immerse yourself in captivating performances at our hotel's theater.
                    Enjoy a variety of shows, including live music, theatrical
                    productions, and cultural performances. Our theater provides an
                    intimate and enchanting setting for an unforgettable evening.
                </p>
            </div>
            <div class="col-lg-3 text-center">
                <img src="{{ asset('Images/shootingrange.jpg')}}" alt="shoot" width="280px" id="imgshootrange" />
            </div>
            <div class="col-lg-3 text-center">
                <a href="/Shooting">
                    <h2>Indoor Shooting</h2>
                </a>
                <p>
                    Experience the thrill of indoor shooting at our specially designed
                    range. Whether you're a beginner or an experienced shooter, our
                    knowledgeable instructors will guide you through a safe and exciting
                    shooting experience. For adventure enthusiasts,
                </p>
            </div>
        </div>
    </div>
    <!--Meeting & Event-->
    <div class="container meeteventcon">
        <div class="row my-5 d-flex align-items-center meetevent">
            <div class="col-lg-6">
                <h2>Meetings and Events</h2>
                <div class="my-4">
                    <p>
                        Host your corporate gatherings, social celebrations, and special
                        occasions at Hotel De Luna. Our versatile and well-equipped
                        meeting spaces, including theaters, conference rooms, and forums,
                        provide the ideal setting for a successful event. Our dedicated
                        event planning team is committed to ensuring every detail is
                        flawlessly executed.
                    </p>
                    <button class="btn_Experience">Reserve Now</button>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block">
                <img class="imgmeetevent" src="{{ asset('Images/meeting.jpg')}}" alt="meeting" width="550" />
            </div>
            <div class="col-lg-5 d-md-block d-lg-none">
                <img class="imgmeetevent" src="{{ asset('Images/meeting.jpg')}}" alt="meeting" width="350" />
            </div>
        </div>
    </div>

    <div class="container-fluid careercon">
        <div class="row text-center acareer">
            <div class="col-lg-12">
                <h2>Careers</h2>
                <div>
                    <p>
                        Join our team of dedicated professionals who strive to provide
                        unparalleled service and experiences. Hotel De Luna offers
                        exciting career opportunities in various departments. If you are
                        passionate about hospitality and have a commitment to excellence,
                        we invite you to explore our career options. At Hotel De Luna, we
                        are dedicated to ensuring that every guest has a remarkable and
                        unforgettable stay. Contact us today to reserve your room or
                        inquire about any of our services. We look forward to welcoming
                        you to our world of luxury, relaxation, and extraordinary
                        experiences.
                    </p>
                    <div class="row mt-5">
                        <div class="col-lg-4 offset-lg-4">
                            <img src="{{ asset('Images/hotel_logo.png')}}" alt="logo" width="130" />
                        </div>
                        <div class="col-lg-5 offset-lg-5 mt-4">
                            <div class="carconinfo">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gold"
                                    class="bi bi-telephone-plus" viewBox="0 0 16 16">
                                    <path
                                        d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                    <path fill-rule="evenodd"
                                        d="M12.5 1a.5.5 0 0 1 .5.5V3h1.5a.5.5 0 0 1 0 1H13v1.5a.5.5 0 0 1-1 0V4h-1.5a.5.5 0 0 1 0-1H12V1.5a.5.5 0 0 1 .5-.5z" />
                                </svg>
                                <span>Phone: +1-555-123-4567</span><br />
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gold"
                                    class="bi bi-telephone" viewBox="0 0 16 16">
                                    <path
                                        d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                </svg>
                                <span>Tel:+15551234567</span><br />
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gold"
                                    class="bi bi-envelope-at" viewBox="0 0 16 16">
                                    <path
                                        d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z" />
                                    <path
                                        d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z" />
                                </svg>
                                <span>Email: info@hoteldeluna.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- FOOTER SECTION --}}
    @include('Layout.Footer')

    {{-- DATA_AOS --}}
    @include('Layout.aos ')
</body>

</html>