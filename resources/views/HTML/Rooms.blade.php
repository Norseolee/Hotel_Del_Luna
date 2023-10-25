<!DOCTYPE html>
<html lang="en">

<head>
    @include('Layout.Head')
    <link rel="stylesheet" href="{{ asset('Css/Room.css')}}">
    <script>
        function bookTabs() {
    document.querySelectorAll(".select_view").forEach(button => {
        button.addEventListener("click", () => {
            const ViewTab = button.parentElement;
            const TabsContainer = ViewTab.parentElement;
            const TabsViews = button.getAttribute('data-for-tab');
            const tabToActivate = TabsContainer.querySelector(`.select_room[data-tab="${TabsViews}"]`);

            ViewTab.querySelectorAll('.select_view').forEach(button => {
                button.classList.remove('Tab-button-active');
            });

            TabsContainer.querySelectorAll('.select_room').forEach(tab => {
                tab.classList.remove('Tab-content-active');
            });

            button.classList.add('Tab-button-active');
            tabToActivate.classList.add('Tab-content-active');
        });
    });
   }

   document.addEventListener('DOMContentLoaded', () => {
    bookTabs();

    document.querySelectorAll('.view').forEach(TabsContainer => {
        TabsContainer.querySelector('.view .select_view').click();
    })
   })
    </script>
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
                            <input type="date" placeholder="Check-in-Date" />
                        </div>
                        <div>
                            <label>Check-out:</label>
                            <input type="date" placeholder="Check-out-Date" />
                        </div>
                        <div>
                            <label>Adults:</label>
                            <input type="number" placeholder="0" />
                        </div>
                        <div>
                            <label>Children:</label>
                            <input type="number" placeholder="0" />
                        </div>
                        <button type="submit">Book</button>
                    </div>
                </div>
            </form>

            <form action="" method="get">
                <div data-tab="sea_view" class="select_room">
                    <div class="room">
                        <div>
                            <label>Check-in:</label>
                            <input type="date" placeholder="Check-in-Date" />
                        </div>
                        <div>
                            <label>Check-out:</label>
                            <input type="date" placeholder="Check-out-Date" />
                        </div>
                        <div>
                            <label>Adults:</label>
                            <input type="number" placeholder="0" />
                        </div>
                        <div>
                            <label>Children:</label>
                            <input type="number" placeholder="0" />
                        </div>
                        <button type="submit">Book</button>
                    </div>
                </div>
            </form>
        </div>

    </section>

    <!-- Gallery -->

    <div class="container mt-5">
        <p>RAISING COMFORT TO THE HIGHEST LEVEL</p>
        <h3>Rooms & Suites</h3>
    </div>
    <div class="container mt-5">
        <div class="row mx-auto">
            <div class="col-lg-3">
                <div class="card" style="width: 18rem">
                    <img class="card-img-top" src="../images/hotelbed1.png" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Double Room</h5>
                        <p>$129 | <span id="price">per night</span></p>
                        <p class="card-text">
                            <i> "Twice the Comfort, Double the Relaxation."</i>
                        </p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Book | Details
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">
                                            DOUBLE ROOM (1 QUEEN BED AND 1 SINGLE BED)
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        ROOM DETAILS
                                        <ul>
                                            <li>345 sq ft / 32 sq m</li>
                                            <li>1 Queen Beds</li>
                                            <li>1 Single Bed</li>
                                            <li>Maximum Occupancy: 3 Adults and 2 Kids</li>
                                            <li>Rooms located at 10/F - 29/F</li>
                                            <li>City View</li>
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            Close
                                        </button>
                                        <button type="button" class="btn btn-primary">
                                            Book Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card" style="width: 18rem">
                    <img class="card-img-top" src="../images/hotelbed2.png" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Queen Bed Room</h5>
                        <p>$129 | <span id="price">per night</span></p>
                        <p class="card-text">
                            <i> "Experience Regal Comfort in a Queen-Sized Haven."</i>
                        </p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Book | Details
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
                                        <button type="button" class="btn btn-primary">
                                            Book Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card" style="width: 18rem">
                    <img class="card-img-top" src="../images/hotelbed3.png" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">King Bed Room</h5>
                        <p>$129 | <span id="price">per night</span></p>
                        <p class="card-text">
                            <i> "Luxuriate in Royal Opulence in a King-Sized Retreat."</i>
                        </p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Book | Details
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
                                        <button type="button" class="btn btn-primary">
                                            Book Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card" style="width: 18rem">
                    <img class="card-img-top" src="../images/hotelbed4.png" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Twin Room</h5>
                        <p>$129 | <span id="price">per night</span></p>
                        <p class="card-text">
                            <i>
                                "Share Adventures and Sweet Dreams in a Cozy Twin-Sized
                                Oasis."</i>
                        </p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Book | Details
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
                                        <button type="button" class="btn btn-primary">
                                            Book Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Map -->

    <section class="map top m-5">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d57247880.37461633!2d-134.70241670956676!3d28.86465222091496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1shotel%20usa!5e0!3m2!1sen!2sph!4v1688489219447!5m2!1sen!2sph"
            width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <!-- Gallery -->
    <h5 class="text-center mt-5">FEATURES AND AMENITIES</h5>
    <div class="gallery-image pt-0">
        <div class="img-box">
            <img src="{{ asset('Images/swimmingpool.png')}}" alt="" />
            <div class="transparent-box">
                <div class="caption">
                    <p>Swimming Pool</p>
                    <p class="opacity-low">"Freshen your day!"</p>
                </div>
            </div>
        </div>
        <div class="img-box">
            <img src="{{ asset('Images/spamassage.png')}}" alt="" />
            <div class="transparent-box">
                <div class="caption">
                    <p>Spa</p>
                    <p class="opacity-low">"Relax and Soothes your senses."</p>
                </div>
            </div>
        </div>
        <div class="img-box">
            <img src="{{ asset('Images/surfing.png')}}" alt="" />
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
            <img src="{{ asset('Images/conference-room.png')}}" alt="" />
            <div class="transparent-box">
                <div class="caption">
                    <p>Conference</p>
                    <p class="opacity-low">"Reserved Comfort for your Meetings."</p>
                </div>
            </div>
        </div>
        <div class="img-box">
            <img src="{{ asset('Images/snorkeling.png')}}" alt="" />
            <div class="transparent-box">
                <div class="caption">
                    <p>Snorkeling</p>
                    <p class="opacity-low">"Memories you will never forget."</p>
                </div>
            </div>
        </div>
        <div class="img-box">
            <img src="{{ asset('Images/gym.png')}}" alt="" />
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

</html>