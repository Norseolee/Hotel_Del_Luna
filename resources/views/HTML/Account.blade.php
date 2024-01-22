<!DOCTYPE html>
<html lang="en">

<head>
    @include('Layout.Head')
    <link rel="stylesheet" href="{{ asset('Css/Account.css') }}">
</head>

<body>
    <section id="sidebar">
        <span class="shrink-btn">
            <span class="fa-solid fa-chevron-left"></span>
        </span>
        <a href="/">
            <div class="sidebar-top pt-4">
                <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313955/hotel_logo_neveax.png" width="50%" alt="" />
                <span class="pt-1 logo_name">Hotel Del Luna</span>
            </div>
        </a>
        <div class="sidebar-links">
            <ul class="side-menu top">
                <li class="tooltip-element active" data-tooltip="0">
                    <a href="#" class="menu-link active" data-section="ac" data-active="0">
                        <i class="fa fa-solid fa-sliders"></i>
                        <span class="text">Account Setting</span>
                    </a>
                </li>
                <li class="tooltip-element" data-tooltip="1">
                    <a href="#" class="menu-link" data-section="ai" data-active="1">
                        <i class="fa fa-solid fa-circle-info"></i>
                        <span class="text">Account Information</span>
                    </a>
                </li>

                <li class="tooltip-element" data-tooltip="2">
                    <a href="#" class="menu-link" data-section="reserve" data-active="2">
                        <i class="fa fa-solid fa-calendar-days"></i>
                        <span class="text">Reservation</span>
                    </a>
                </li>
                <li class="tooltip-element" data-tooltip="3">
                    <a href="#" class="menu-link" data-section="ht" data-active="3">
                        <i class="fa fa-solid fa-clock-rotate-left"></i>
                        <span class="text">History Trips</span>
                    </a>
                </li>

                <li class="tooltip-element" data-tooltip="4">
                    <a href="#" class="menu-link" data-section="refund" data-active="4">
                        <i class="fa fa-solid fa-money-bill-transfer"></i>
                        <span class="text">Refund</span>
                    </a>
                </li>
                <li class="tooltip-element" data-tooltip="6">
                    <a href="#" class="menu-link" data-section="membership" data-active="6">
                        <i class="fa fa-solid fa-people-group"></i>
                        <span class="text">Membership</span>
                    </a>
                </li>
                <li class="tooltip-element" data-tooltip="7">
                    <form id="logout-form" action="{{ route('sign-out') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <button class="btn btn-danger log-out-btn" type="button" id="logout-btn" onclick="document.getElementById('logout-form').submit();">
                        <i class="fa fa-solid fa-arrow-right-from-bracket"> Log Out</i>
                    </button>
                </li>
            </ul>
        </div>
    </section>
    <!-- SIDEBAR -->
    <!-- Reservation Modal -->
    <div class="modal fade" id="reservationModal" data-bs-backdrop="true" data-bs-keyboard="false" tabindex="-1" aria-labelledby="reservationModal" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="image">
                            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313969/sample-carousel1_h3zdfq.jpg" class="d-block w-100" alt="..." />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313969/sample-carousel2_zqos6s.jpg" class="d-block w-100" alt="..." />
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="details pt-4">
                            <p>Date booked: 06/15/23</p>
                            <p>
                                Booked reference: 225m5456<br />
                                LUXXE ROOM DOUBLE SIZE QUEEN WITH BAY VIEW<br />
                                <br />
                                Reservation Date: 06/20/23 - 06/29/23<br />
                                Floor 58, Room 2009 <br />
                                <br />
                                Exclusive: <br />
                                Free Wi-fi <br />
                                Indoor-swimming(at Floor 10) <br />
                                Free Food Service
                            </p>
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />

                            <br />
                            <h3>PHP25,000.00</h3>
                            <i>*Reminder: 3 days cancel will not be valid.</i>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">Print</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Reservation Modal -->

    <!--  History Trips Modal -->
    <div class="modal fade" id="historyTripsModal" data-bs-backdrop="true" data-bs-keyboard="false" tabindex="-1" aria-labelledby="historyTripsModal" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="image">
                            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313969/sample-carousel1_h3zdfq.jpg" class="d-block w-100" alt="..." />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313969/sample-carousel2_zqos6s.jpg" class="d-block w-100" alt="..." />
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="details pt-4">
                            <p>Date booked: 06/15/23</p>
                            <p>
                                Booked reference: 225m5456<br />
                                LUXXE ROOM DOUBLE SIZE QUEEN WITH BAY VIEW<br />
                                <br />
                                Reservation Date: 06/20/23 - 06/29/23<br />
                                Floor 58, Room 2009 <br />
                                <br />
                                Exclusive: <br />
                                Free Wi-fi <br />
                                Indoor-swimming(at Floor 10) <br />
                                Free Food Service
                            </p>
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />

                            <br />
                            <h3>PHP25,000.00</h3>
                            <i>*Reminder: 3 days cancel will not be valid.</i>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">Print</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- History Trips Modal -->

    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->

        <nav>
            <a class="profile">
                <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313930/default_pp_hlqdny.png" />
                <span id="account_name">Account</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <button class="dropdown-item" type="button" id="logout-btn">
                        Log out
                    </button>
                </li>
            </ul>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="content">
                <section id="ac" class="section active">
                    <div class="container mt-3">

                        {{-- This is a Image form --}}
                        <section class="profile_picture">
                            <div class="picture">
                                <img src="/img/user_profiles/{{ $authUser->picture }}" alt="{{ $authUser->first_name }}'s pictures" width="100px">
                            </div>
                            <div class="display_profile">
                                <form action="/Account/{{ $authUser->guest_id }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <label for="picture" class="btn btn-green">
                                        Change Profile
                                        <input type="file" name="picture" id="picture" accept="image/*" style="display:none;" onchange="displaySelectedImage(this)">
                                    </label>

                                    <button type="submit" class="btn btn-brand">Update Picture</button>
                                </form>
                            </div>
                            <script>
                                function chooseFile() {
                                    document.getElementById("picture").click();
                                }

                                function displaySelectedImage(input) {
                                    if (input.files && input.files[0]) {
                                        var reader = new FileReader();

                                        reader.onload = function(e) {
                                            document.querySelector('.picture img').src = e.target.result;
                                        };

                                        reader.readAsDataURL(input.files[0]);
                                    }
                                }

                            </script>
                        </section>


                        {{-- This is the personal Information form --}}
                        <div class="row jumbotron box8 account-settings pt-2">
                            <div class="col-sm-6 form-group">
                                <form action="/Account/{{ $authUser->guest_id }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <label for="fname">First Name:</label>
                                    <input type="text" class="form-control" name="acc_fname" id="acc_fname" value="{{ $authUser->first_name ?? '' }}" />

                                    <label for="lname" class="pt-4">Last name:</label>
                                    <input type="text" class="form-control" name="acc_lname" id="acc_lname" value="{{ $authUser->last_name ?? '' }}" />

                                    <label for="email" class="pt-4">Email:</label>
                                    <input type="email" class="form-control" name="acc_email" id="acc_email" value="{{ $authUser->email ?? '' }}" />

                                    <label for="as_mobile" class="pt-4">Mobile Number:</label>
                                    <input type="text" class="form-control" name="as_mobile" id="as_mobile" value="{{ $guestInfo->phone_number ?? '' }}" placeholder="Enter your Mobile Number" required />
                                    <div class="pt-3 buttons-acc-setting">
                                        <button class="btn btn-warning" type="button" data-toggle="modal" data-target="#PersonalAccountModal">
                                            Save Changes
                                        </button>
                                    </div>

                                    <div class="modal" id="PersonalAccountModal">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Confirmation</h4>
                                                </div>

                                                <!-- Modal Body -->
                                                <div class="modal-body">
                                                    Are you sure you want to save changes?
                                                </div>

                                                <!-- Modal Footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="refreshPage()">Cancel</button>
                                                    <button type=" submit" class="btn btn-primary">Save Changes</button>
                                                </div>
                                                <script>
                                                    function refreshPage() {
                                                        location.reload(true); // This will force a full page reload
                                                    }

                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        {{-- This is Deletion of an account form --}}
                        <form method="POST" action="{{ route('account.deletion') }}" class="form-acc-setting2 pt-4">
                            @csrf
                            @method('DELETE')

                            <h1 class="text-center">ACCOUNT DELETION</h1>

                            <div class="row jumbotron box8 account-settings pt-2">
                                <div class="col-sm-6 form-group">
                                    <div class="acc_delete">
                                        <input type="checkbox" id="terms" name="terms" class="me-2" required />
                                        <label for="terms">Understand that your account will be deleted
                                            permanently, all your information and history will be
                                            permanently deleted.</label>
                                    </div>
                                    <div class="pt-3 buttons-acc-setting">
                                        <button type="submit" class="btn btn-warning">
                                            Delete Account
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                </section>
                {{-- This is Account Information --}}
                <section id="ai" class="section ai">
                    <h1 class="text-center">Account Information</h1>
                    <div class="container mt-3">
                        <form action="/Account/{{ $authUser->guest_id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row jumbotron box8">
                                <div class="col-sm-6 form-group">
                                    <label for="address-1">Address Line-1</label>
                                    <input type="text" class="form-control" name="address1" id="address1" value="{{ $guestInfo->address1 ?? '' }}" placeholder="Locality/House/Street no." />
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="address-2">Address Line-2</label>
                                    <input type="text" class="form-control" name="address2" id="address2" value='{{ $guestInfo->address2 ?? '' }}' placeholder="Village/City Name." />
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label for="State">State</label>
                                    <input type="text" class="form-control" name="state" id="state" value="{{ $guestInfo->state }}" placeholder="Enter your state name." />
                                </div>
                                <div class="col-sm-2 form-group">
                                    <label for="postal_code">Postal-Code</label>
                                    <input type="text" class="form-control" name="postal_code" id="postal_code" value="{{ $guestInfo->postal_code }}" placeholder="Postal Code." />
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="countries">Country</label>
                                    <input type="text" class="form-control" name="country" id="country" value="{{ $guestInfo->country }}" placeholder="Postal Code." />
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="date_of_birth">Date Of Birth</label>
                                    <input type="date" name="date_of_birth" class="form-control" id="date_of_birth" value="{{ $guestInfo->date_of_birth }}" placeholder="Enter your country name" />
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="gender">Gender</label>
                                    <select id="gender" name="gender" class="form-control browser-default custom-select">
                                        <option value=""></option>
                                        <option value="male" {{ $guestInfo->gender === 'male' ? 'selected' : '' }}>Male</option>
                                        <option value="female" {{ $guestInfo->gender === 'female' ? 'selected' : '' }}>Female</option>
                                    </select>
                                </div>

                                <div class="pt-3 buttons-acc-setting">
                                    <button class="btn btn-warning" type="button" data-toggle="modal" data-target="#AccountInformation">
                                        Save Changes
                                    </button>
                                </div>

                                <div class="modal" id="AccountInformation">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Confirmation</h4>
                                            </div>

                                            <!-- Modal Body -->
                                            <div class="modal-body">
                                                Are you sure you want to save changes?
                                            </div>

                                            <!-- Modal Footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="refreshPage()">Cancel</button>
                                                <button type=" submit" class="btn btn-primary">Save Changes</button>
                                            </div>
                                            <script>
                                                function refreshPage() {
                                                    location.reload(true); // This will force a full page reload
                                                }

                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>

                <section id="reserve" class="section reserve">
                    <div class="card">
                        <div class="image">
                            <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313966/reservation_img_tinuk5.jpg" alt="Reservation Image" />
                        </div>
                        <div class="details">
                            <h5>Date booked: 06/15/23</h5>
                            <p>
                                Booked reference: 225m5456<br />
                                <br />
                                Reservation Date: 06/20/23 - 06/29/23<br />
                                LUXXE ROOM DOUBLE SIZE QUEEN WITH BAY VIEW<br />
                                Floor 58, Room 2009
                            </p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reservationModal">
                                Details
                            </button>
                        </div>
                    </div>
                </section>

                <section id="ht" class="section history-trips">
                    <div class="card">
                        <div class="image">
                            <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313949/history_iymwzg.jpg" alt="Image" />
                        </div>
                        <div class="details">
                            <h5>Date booked: 06/15/23</h5>

                            <p>
                                Booked reference: 225m5456<br /><br />
                                Reservation Date: 06/20/23 - 06/29/23<br />
                                LUXXE ROOM DOUBLE SIZE QUEEN WITH BAY VIEW<br />
                                Floor 58, Room 2009
                            </p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#historyTripsModal">
                                View My History
                            </button>
                        </div>
                    </div>
                </section>

                <section id="refund" class="section refund">
                    <div class="card">
                        <div class="image">
                            <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313965/refund_img_uci1gx.jpg" alt="Image" />
                        </div>
                        <div class="details">
                            <h5>Date cancelled: 06/15/23</h5>
                            <p>
                                Cancelled booking reference: 225m5456<br />
                                <br />
                                Reservation Date: 06/20/23 - 06/29/23<br />
                                LUXXE ROOM DOUBLE SIZE QUEEN WITH BAY VIEW<br />
                                Floor 58, Room 2009
                            </p>
                            <button type="button" class="btn btn-white" disabled>
                                <i>cancelled</i>
                            </button>
                        </div>
                    </div>
                </section>

                <section id="membership" class="section membership">
                    <div class="card">
                        <div class="details ps-4">
                            <h3>GYM</h3>

                            <p>
                                ID:225<br />
                                Valid Until June 23, 2023<br /><br />
                                Fitness Gym<br />
                                At the Ground floor near KFC resto.
                            </p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="details ps-4">
                            <h3>INDOOR POOL</h3>

                            <p>
                                ID:6881<br />
                                Valid Until April 4, 2023<br /><br />
                                Indoor Pool<br />
                                At the 10th Floor.
                            </p>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    @include('Layout.Footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
    <script src="https://unpkg.com/vue-the-mask@0.11.1/dist/vue-the-mask.js"></script>
    <script src="{{ asset('Javascript/Account.js') }}"></script>
</body>

</html>
