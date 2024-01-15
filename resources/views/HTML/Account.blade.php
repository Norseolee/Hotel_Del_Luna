<!DOCTYPE html>
<html lang="en">

<head>
    @include('Layout.Head')
    <link rel="stylesheet" href="Account.css">
</head>

<body>
    <section id="sidebar">
        <span class="shrink-btn">
            <span class="fa-solid fa-chevron-left"></span>
        </span>
        <a href="../index.html">
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
                <li class="tooltip-element" data-tooltip="5">
                    <a href="#" class="menu-link" data-section="pm" data-active="5">
                        <i class="fa fa-solid fa-hand-holding-dollar"></i>
                        <span class="text">Payment Methods</span>
                    </a>
                </li>
                <li class="tooltip-element" data-tooltip="6">
                    <a href="#" class="menu-link" data-section="membership" data-active="6">
                        <i class="fa fa-solid fa-people-group"></i>
                        <span class="text">Membership</span>
                    </a>
                </li>
                <li class="tooltip-element" data-tooltip="7">
                    <button class="btn btn-danger log-out-btn" type="button" id="logout-btn">
                        <i class="fa fa-solid fa-arrow-right-from-bracket"></i> Log out
                    </button>
                </li>
            </ul>
        </div>
    </section>
    <!-- SIDEBAR -->
    <!-- Reservation Modal -->
    <div class="modal fade" id="reservationModal" data-bs-backdrop="true" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="reservationModal" aria-hidden="true">
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
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
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
    <div class="modal fade" id="historyTripsModal" data-bs-backdrop="true" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="historyTripsModal" aria-hidden="true">
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
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
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
                        <form class="form-acc-setting">
                            <div class="upload">
                                <img id="selectedImage" src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313962/noprofil_ddrqqk.jpg" width="200" height="200" alt="" />
                                <div class="round">
                                    <input type="file" id="imageInput" onchange="displaySelectedImage(event)" />
                                    <i class="fa fa-camera" style="color: #fff"></i>
                                </div>
                            </div>

                            <div class="row jumbotron box8 account-settings pt-2">
                                <div class="col-sm-6 form-group">
                                    <label for="fname">First Name:</label>
                                    <input type="text" class="form-control" name="acc_fname" id="acc_fname"
                                        placeholder="Enter your first name" required />

                                    <label for="lname" class="pt-4">Last name:</label>
                                    <input type="text" class="form-control" name="acc_lname" id="acc_lname"
                                        placeholder="Enter your last name" required />

                                    <label for="email" class="pt-4">Email:</label>
                                    <input type="email" class="form-control" name="acc_email" id="acc_email"
                                        placeholder="Enter your email" required />
                                    <div class="pt-3 buttons-acc-setting">
                                        <button class="btn btn-warning" onclick="addAccount()">
                                            Update
                                        </button>
                                        <button class="btn btn-warning">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <form class="form-acc-setting pt-4">
                            <h1 class="text-center">ACCOUNT SECURITY</h1>

                            <div class="row jumbotron box8 account-settings pt-4">
                                <div class="col-sm-6 form-group">
                                    <label for="as_email">Email:</label>
                                    <input type="email" class="form-control" name="as_email" id="as_email"
                                        placeholder="Enter your email" required />
                                    <label for="as_email_code" class="pt-4">Code:</label>
                                    <input type="text" class="form-control" name="as_email_code" id="as_email_code"
                                        placeholder="Enter your email code" required />

                                    <label for="as_mobile" class="pt-4">Mobile Number:</label>
                                    <input type="text" class="form-control" name="as_mobile" id="as_mobile"
                                        placeholder="Enter your Mobile Number" required />
                                    <label for="as_mobile_op" class="pt-4">Alternative Mobile Number(Optional):</label>
                                    <input type="text" class="form-control" name="as_mobile_op" id="as_mobile_op"
                                        placeholder="Enter your Alternative Mobile Number" required />

                                    <div class="pt-3 buttons-acc-setting">
                                        <button class="btn btn-warning">Save</button>
                                        <button class="btn btn-warning">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <form class="form-acc-setting2 pt-4">
                            <h1 class="text-center">ACCOUNT DELETION</h1>

                            <div class="row jumbotron box8 account-settings pt-2">
                                <div class="col-sm-6 form-group">
                                    <div class="acc_delete">
                                        <input type="checkbox" id="terms" class="me-2" required />
                                        <label for="terms">Understand that your account will be deleted
                                            permanently, all your information and history will be
                                            permanently deleted.</label>
                                    </div>
                                    <div class="pt-3 buttons-acc-setting">
                                        <button class="btn btn-warning" onclick="deleteAccount()">
                                            Delete Account
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
                <section id="ai" class="section ai">
                    <h1 class="text-center">Account Information</h1>
                    <div class="container mt-3">
                        <form class="account-info">
                            <div class="row jumbotron box8">
                                <div class="col-sm-6 form-group">
                                    <label for="fname">First Name</label>
                                    <input type="text" class="form-control" name="fname" id="fname"
                                        placeholder="Enter your first name" required />
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="lname">Last name</label>
                                    <input type="text" class="form-control" name="lname" id="lname"
                                        placeholder="Enter your last name" required />
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Enter your email address" required />
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="address-1">Address Line-1</label>
                                    <input type="address" class="form-control" name="Locality" id="address-1"
                                        placeholder="Locality/House/Street no." required />
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="address-2">Address Line-2</label>
                                    <input type="address" class="form-control" name="address" id="address-2"
                                        placeholder="Village/City Name." required />
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label for="State">State</label>
                                    <input type="address" class="form-control" name="State" id="State"
                                        placeholder="Enter your state name." required />
                                </div>
                                <div class="col-sm-2 form-group">
                                    <label for="zip">Postal-Code</label>
                                    <input type="zip" class="form-control" name="Zip" id="zip"
                                        placeholder="Postal-Code." required />
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="countries">Country</label>
                                    <select id="countries" name="countries"
                                        class="form-control custom-select browser-default">
                                        <option value="" disabled selected hidden>Country</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="Date">Date Of Birth</label>
                                    <input type="Date" name="dob" class="form-control" id="Date" placeholder=""
                                        required />
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="sex">Gender</label>
                                    <select id="sex" class="form-control browser-default custom-select">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="unspesified">Unspecified</option>
                                    </select>
                                </div>
                                <div class="col-sm-2 form-group">
                                    <label for="countries">Country code</label>
                                    <select class="form-control browser-default custom-select">
                                        <option data-countryCode="US" value="1" selected>
                                            USA (+1)
                                        </option>
                                        <option data-countryCode="GB" value="44">UK (+44)</option>

                                        <option data-countryCode="DZ" value="213">
                                            Algeria (+213)
                                        </option>
                                        <option data-countryCode="AD" value="376">
                                            Andorra (+376)
                                        </option>
                                        <option data-countryCode="AO" value="244">
                                            Angola (+244)
                                        </option>
                                        <option data-countryCode="AI" value="1264">
                                            Anguilla (+1264)
                                        </option>
                                        <option data-countryCode="AG" value="1268">
                                            Antigua &amp; Barbuda (+1268)
                                        </option>
                                        <option data-countryCode="AR" value="54">
                                            Argentina (+54)
                                        </option>
                                        <option data-countryCode="AM" value="374">
                                            Armenia (+374)
                                        </option>
                                        <option data-countryCode="AW" value="297">
                                            Aruba (+297)
                                        </option>
                                        <option data-countryCode="AU" value="61">
                                            Australia (+61)
                                        </option>
                                        <option data-countryCode="AT" value="43">
                                            Austria (+43)
                                        </option>
                                        <option data-countryCode="AZ" value="994">
                                            Azerbaijan (+994)
                                        </option>
                                        <option data-countryCode="BS" value="1242">
                                            Bahamas (+1242)
                                        </option>
                                        <option data-countryCode="BH" value="973">
                                            Bahrain (+973)
                                        </option>
                                        <option data-countryCode="BD" value="880">
                                            Bangladesh (+880)
                                        </option>
                                        <option data-countryCode="BB" value="1246">
                                            Barbados (+1246)
                                        </option>
                                        <option data-countryCode="BY" value="375">
                                            Belarus (+375)
                                        </option>
                                        <option data-countryCode="BE" value="32">
                                            Belgium (+32)
                                        </option>
                                        <option data-countryCode="BZ" value="501">
                                            Belize (+501)
                                        </option>
                                        <option data-countryCode="BJ" value="229">
                                            Benin (+229)
                                        </option>
                                        <option data-countryCode="BM" value="1441">
                                            Bermuda (+1441)
                                        </option>
                                        <option data-countryCode="BT" value="975">
                                            Bhutan (+975)
                                        </option>
                                        <option data-countryCode="BO" value="591">
                                            Bolivia (+591)
                                        </option>
                                        <option data-countryCode="BA" value="387">
                                            Bosnia Herzegovina (+387)
                                        </option>
                                        <option data-countryCode="BW" value="267">
                                            Botswana (+267)
                                        </option>
                                        <option data-countryCode="BR" value="55">
                                            Brazil (+55)
                                        </option>
                                        <option data-countryCode="BN" value="673">
                                            Brunei (+673)
                                        </option>
                                        <option data-countryCode="BG" value="359">
                                            Bulgaria (+359)
                                        </option>
                                        <option data-countryCode="BF" value="226">
                                            Burkina Faso (+226)
                                        </option>
                                        <option data-countryCode="BI" value="257">
                                            Burundi (+257)
                                        </option>
                                        <option data-countryCode="KH" value="855">
                                            Cambodia (+855)
                                        </option>
                                        <option data-countryCode="CM" value="237">
                                            Cameroon (+237)
                                        </option>
                                        <option data-countryCode="CA" value="1">
                                            Canada (+1)
                                        </option>
                                        <option data-countryCode="CV" value="238">
                                            Cape Verde Islands (+238)
                                        </option>
                                        <option data-countryCode="KY" value="1345">
                                            Cayman Islands (+1345)
                                        </option>
                                        <option data-countryCode="CF" value="236">
                                            Central African Republic (+236)
                                        </option>
                                        <option data-countryCode="CL" value="56">
                                            Chile (+56)
                                        </option>
                                        <option data-countryCode="CN" value="86">
                                            China (+86)
                                        </option>
                                        <option data-countryCode="CO" value="57">
                                            Colombia (+57)
                                        </option>
                                        <option data-countryCode="KM" value="269">
                                            Comoros (+269)
                                        </option>
                                        <option data-countryCode="CG" value="242">
                                            Congo (+242)
                                        </option>
                                        <option data-countryCode="CK" value="682">
                                            Cook Islands (+682)
                                        </option>
                                        <option data-countryCode="CR" value="506">
                                            Costa Rica (+506)
                                        </option>
                                        <option data-countryCode="HR" value="385">
                                            Croatia (+385)
                                        </option>
                                        <option data-countryCode="CU" value="53">
                                            Cuba (+53)
                                        </option>
                                        <option data-countryCode="CY" value="90">
                                            Cyprus - North (+90)
                                        </option>
                                        <option data-countryCode="CY" value="357">
                                            Cyprus - South (+357)
                                        </option>
                                        <option data-countryCode="CZ" value="420">
                                            Czech Republic (+420)
                                        </option>
                                        <option data-countryCode="DK" value="45">
                                            Denmark (+45)
                                        </option>
                                        <option data-countryCode="DJ" value="253">
                                            Djibouti (+253)
                                        </option>
                                        <option data-countryCode="DM" value="1809">
                                            Dominica (+1809)
                                        </option>
                                        <option data-countryCode="DO" value="1809">
                                            Dominican Republic (+1809)
                                        </option>
                                        <option data-countryCode="EC" value="593">
                                            Ecuador (+593)
                                        </option>
                                        <option data-countryCode="EG" value="20">
                                            Egypt (+20)
                                        </option>
                                        <option data-countryCode="SV" value="503">
                                            El Salvador (+503)
                                        </option>
                                        <option data-countryCode="GQ" value="240">
                                            Equatorial Guinea (+240)
                                        </option>
                                        <option data-countryCode="ER" value="291">
                                            Eritrea (+291)
                                        </option>
                                        <option data-countryCode="EE" value="372">
                                            Estonia (+372)
                                        </option>
                                        <option data-countryCode="ET" value="251">
                                            Ethiopia (+251)
                                        </option>
                                        <option data-countryCode="FK" value="500">
                                            Falkland Islands (+500)
                                        </option>
                                        <option data-countryCode="FO" value="298">
                                            Faroe Islands (+298)
                                        </option>
                                        <option data-countryCode="FJ" value="679">
                                            Fiji (+679)
                                        </option>
                                        <option data-countryCode="FI" value="358">
                                            Finland (+358)
                                        </option>
                                        <option data-countryCode="FR" value="33">
                                            France (+33)
                                        </option>
                                        <option data-countryCode="GF" value="594">
                                            French Guiana (+594)
                                        </option>
                                        <option data-countryCode="PF" value="689">
                                            French Polynesia (+689)
                                        </option>
                                        <option data-countryCode="GA" value="241">
                                            Gabon (+241)
                                        </option>
                                        <option data-countryCode="GM" value="220">
                                            Gambia (+220)
                                        </option>
                                        <option data-countryCode="GE" value="7880">
                                            Georgia (+7880)
                                        </option>
                                        <option data-countryCode="DE" value="49">
                                            Germany (+49)
                                        </option>
                                        <option data-countryCode="GH" value="233">
                                            Ghana (+233)
                                        </option>
                                        <option data-countryCode="GI" value="350">
                                            Gibraltar (+350)
                                        </option>
                                        <option data-countryCode="GR" value="30">
                                            Greece (+30)
                                        </option>
                                        <option data-countryCode="GL" value="299">
                                            Greenland (+299)
                                        </option>
                                        <option data-countryCode="GD" value="1473">
                                            Grenada (+1473)
                                        </option>
                                        <option data-countryCode="GP" value="590">
                                            Guadeloupe (+590)
                                        </option>
                                        <option data-countryCode="GU" value="671">
                                            Guam (+671)
                                        </option>
                                        <option data-countryCode="GT" value="502">
                                            Guatemala (+502)
                                        </option>
                                        <option data-countryCode="GN" value="224">
                                            Guinea (+224)
                                        </option>
                                        <option data-countryCode="GW" value="245">
                                            Guinea - Bissau (+245)
                                        </option>
                                        <option data-countryCode="GY" value="592">
                                            Guyana (+592)
                                        </option>
                                        <option data-countryCode="HT" value="509">
                                            Haiti (+509)
                                        </option>
                                        <option data-countryCode="HN" value="504">
                                            Honduras (+504)
                                        </option>
                                        <option data-countryCode="HK" value="852">
                                            Hong Kong (+852)
                                        </option>
                                        <option data-countryCode="HU" value="36">
                                            Hungary (+36)
                                        </option>
                                        <option data-countryCode="IS" value="354">
                                            Iceland (+354)
                                        </option>
                                        <option data-countryCode="IN" value="91">
                                            India (+91)
                                        </option>
                                        <option data-countryCode="ID" value="62">
                                            Indonesia (+62)
                                        </option>
                                        <option data-countryCode="IQ" value="964">
                                            Iraq (+964)
                                        </option>
                                        <option data-countryCode="IR" value="98">
                                            Iran (+98)
                                        </option>
                                        <option data-countryCode="IE" value="353">
                                            Ireland (+353)
                                        </option>
                                        <option data-countryCode="IL" value="972">
                                            Israel (+972)
                                        </option>
                                        <option data-countryCode="IT" value="39">
                                            Italy (+39)
                                        </option>
                                        <option data-countryCode="JM" value="1876">
                                            Jamaica (+1876)
                                        </option>
                                        <option data-countryCode="JP" value="81">
                                            Japan (+81)
                                        </option>
                                        <option data-countryCode="JO" value="962">
                                            Jordan (+962)
                                        </option>
                                        <option data-countryCode="KZ" value="7">
                                            Kazakhstan (+7)
                                        </option>
                                        <option data-countryCode="KE" value="254">
                                            Kenya (+254)
                                        </option>
                                        <option data-countryCode="KI" value="686">
                                            Kiribati (+686)
                                        </option>
                                        <option data-countryCode="KP" value="850">
                                            Korea - North (+850)
                                        </option>
                                        <option data-countryCode="KR" value="82">
                                            Korea - South (+82)
                                        </option>
                                        <option data-countryCode="KW" value="965">
                                            Kuwait (+965)
                                        </option>
                                        <option data-countryCode="KG" value="996">
                                            Kyrgyzstan (+996)
                                        </option>
                                        <option data-countryCode="LA" value="856">
                                            Laos (+856)
                                        </option>
                                        <option data-countryCode="LV" value="371">
                                            Latvia (+371)
                                        </option>
                                        <option data-countryCode="LB" value="961">
                                            Lebanon (+961)
                                        </option>
                                        <option data-countryCode="LS" value="266">
                                            Lesotho (+266)
                                        </option>
                                        <option data-countryCode="LR" value="231">
                                            Liberia (+231)
                                        </option>
                                        <option data-countryCode="LY" value="218">
                                            Libya (+218)
                                        </option>
                                        <option data-countryCode="LI" value="417">
                                            Liechtenstein (+417)
                                        </option>
                                        <option data-countryCode="LT" value="370">
                                            Lithuania (+370)
                                        </option>
                                        <option data-countryCode="LU" value="352">
                                            Luxembourg (+352)
                                        </option>
                                        <option data-countryCode="MO" value="853">
                                            Macao (+853)
                                        </option>
                                        <option data-countryCode="MK" value="389">
                                            Macedonia (+389)
                                        </option>
                                        <option data-countryCode="MG" value="261">
                                            Madagascar (+261)
                                        </option>
                                        <option data-countryCode="MW" value="265">
                                            Malawi (+265)
                                        </option>
                                        <option data-countryCode="MY" value="60">
                                            Malaysia (+60)
                                        </option>
                                        <option data-countryCode="MV" value="960">
                                            Maldives (+960)
                                        </option>
                                        <option data-countryCode="ML" value="223">
                                            Mali (+223)
                                        </option>
                                        <option data-countryCode="MT" value="356">
                                            Malta (+356)
                                        </option>
                                        <option data-countryCode="MH" value="692">
                                            Marshall Islands (+692)
                                        </option>
                                        <option data-countryCode="MQ" value="596">
                                            Martinique (+596)
                                        </option>
                                        <option data-countryCode="MR" value="222">
                                            Mauritania (+222)
                                        </option>
                                        <option data-countryCode="YT" value="269">
                                            Mayotte (+269)
                                        </option>
                                        <option data-countryCode="MX" value="52">
                                            Mexico (+52)
                                        </option>
                                        <option data-countryCode="FM" value="691">
                                            Micronesia (+691)
                                        </option>
                                        <option data-countryCode="MD" value="373">
                                            Moldova (+373)
                                        </option>
                                        <option data-countryCode="MC" value="377">
                                            Monaco (+377)
                                        </option>
                                        <option data-countryCode="MN" value="976">
                                            Mongolia (+976)
                                        </option>
                                        <option data-countryCode="MS" value="1664">
                                            Montserrat (+1664)
                                        </option>
                                        <option data-countryCode="MA" value="212">
                                            Morocco (+212)
                                        </option>
                                        <option data-countryCode="MZ" value="258">
                                            Mozambique (+258)
                                        </option>
                                        <option data-countryCode="MN" value="95">
                                            Myanmar (+95)
                                        </option>
                                        <option data-countryCode="NA" value="264">
                                            Namibia (+264)
                                        </option>
                                        <option data-countryCode="NR" value="674">
                                            Nauru (+674)
                                        </option>
                                        <option data-countryCode="NP" value="977">
                                            Nepal (+977)
                                        </option>
                                        <option data-countryCode="NL" value="31">
                                            Netherlands (+31)
                                        </option>
                                        <option data-countryCode="NC" value="687">
                                            New Caledonia (+687)
                                        </option>
                                        <option data-countryCode="NZ" value="64">
                                            New Zealand (+64)
                                        </option>
                                        <option data-countryCode="NI" value="505">
                                            Nicaragua (+505)
                                        </option>
                                        <option data-countryCode="NE" value="227">
                                            Niger (+227)
                                        </option>
                                        <option data-countryCode="NG" value="234">
                                            Nigeria (+234)
                                        </option>
                                        <option data-countryCode="NU" value="683">
                                            Niue (+683)
                                        </option>
                                        <option data-countryCode="NF" value="672">
                                            Norfolk Islands (+672)
                                        </option>
                                        <option data-countryCode="NP" value="670">
                                            Northern Marianas (+670)
                                        </option>
                                        <option data-countryCode="NO" value="47">
                                            Norway (+47)
                                        </option>
                                        <option data-countryCode="OM" value="968">
                                            Oman (+968)
                                        </option>
                                        <option data-countryCode="PK" value="92">
                                            Pakistan (+92)
                                        </option>
                                        <option data-countryCode="PW" value="680">
                                            Palau (+680)
                                        </option>
                                        <option data-countryCode="PA" value="507">
                                            Panama (+507)
                                        </option>
                                        <option data-countryCode="PG" value="675">
                                            Papua New Guinea (+675)
                                        </option>
                                        <option data-countryCode="PY" value="595">
                                            Paraguay (+595)
                                        </option>
                                        <option data-countryCode="PE" value="51">
                                            Peru (+51)
                                        </option>
                                        <option data-countryCode="PH" value="63">
                                            Philippines (+63)
                                        </option>
                                        <option data-countryCode="PL" value="48">
                                            Poland (+48)
                                        </option>
                                        <option data-countryCode="PT" value="351">
                                            Portugal (+351)
                                        </option>
                                        <option data-countryCode="PR" value="1787">
                                            Puerto Rico (+1787)
                                        </option>
                                        <option data-countryCode="QA" value="974">
                                            Qatar (+974)
                                        </option>
                                        <option data-countryCode="RE" value="262">
                                            Reunion (+262)
                                        </option>
                                        <option data-countryCode="RO" value="40">
                                            Romania (+40)
                                        </option>
                                        <option data-countryCode="RU" value="7">
                                            Russia (+7)
                                        </option>
                                        <option data-countryCode="RW" value="250">
                                            Rwanda (+250)
                                        </option>
                                        <option data-countryCode="SM" value="378">
                                            San Marino (+378)
                                        </option>
                                        <option data-countryCode="ST" value="239">
                                            Sao Tome &amp; Principe (+239)
                                        </option>
                                        <option data-countryCode="SA" value="966">
                                            Saudi Arabia (+966)
                                        </option>
                                        <option data-countryCode="SN" value="221">
                                            Senegal (+221)
                                        </option>
                                        <option data-countryCode="CS" value="381">
                                            Serbia (+381)
                                        </option>
                                        <option data-countryCode="SC" value="248">
                                            Seychelles (+248)
                                        </option>
                                        <option data-countryCode="SL" value="232">
                                            Sierra Leone (+232)
                                        </option>
                                        <option data-countryCode="SG" value="65">
                                            Singapore (+65)
                                        </option>
                                        <option data-countryCode="SK" value="421">
                                            Slovak Republic (+421)
                                        </option>
                                        <option data-countryCode="SI" value="386">
                                            Slovenia (+386)
                                        </option>
                                        <option data-countryCode="SB" value="677">
                                            Solomon Islands (+677)
                                        </option>
                                        <option data-countryCode="SO" value="252">
                                            Somalia (+252)
                                        </option>
                                        <option data-countryCode="ZA" value="27">
                                            South Africa (+27)
                                        </option>
                                        <option data-countryCode="ES" value="34">
                                            Spain (+34)
                                        </option>
                                        <option data-countryCode="LK" value="94">
                                            Sri Lanka (+94)
                                        </option>
                                        <option data-countryCode="SH" value="290">
                                            St. Helena (+290)
                                        </option>
                                        <option data-countryCode="KN" value="1869">
                                            St. Kitts (+1869)
                                        </option>
                                        <option data-countryCode="SC" value="1758">
                                            St. Lucia (+1758)
                                        </option>
                                        <option data-countryCode="SR" value="597">
                                            Suriname (+597)
                                        </option>
                                        <option data-countryCode="SD" value="249">
                                            Sudan (+249)
                                        </option>
                                        <option data-countryCode="SZ" value="268">
                                            Swaziland (+268)
                                        </option>
                                        <option data-countryCode="SE" value="46">
                                            Sweden (+46)
                                        </option>
                                        <option data-countryCode="CH" value="41">
                                            Switzerland (+41)
                                        </option>
                                        <option data-countryCode="SY" value="963">
                                            Syria (+963)
                                        </option>
                                        <option data-countryCode="TW" value="886">
                                            Taiwan (+886)
                                        </option>
                                        <option data-countryCode="TJ" value="992">
                                            Tajikistan (+992)
                                        </option>
                                        <option data-countryCode="TH" value="66">
                                            Thailand (+66)
                                        </option>
                                        <option data-countryCode="TG" value="228">
                                            Togo (+228)
                                        </option>
                                        <option data-countryCode="TO" value="676">
                                            Tonga (+676)
                                        </option>
                                        <option data-countryCode="TT" value="1868">
                                            Trinidad &amp; Tobago (+1868)
                                        </option>
                                        <option data-countryCode="TN" value="216">
                                            Tunisia (+216)
                                        </option>
                                        <option data-countryCode="TR" value="90">
                                            Turkey (+90)
                                        </option>
                                        <option data-countryCode="TM" value="993">
                                            Turkmenistan (+993)
                                        </option>
                                        <option data-countryCode="TC" value="1649">
                                            Turks &amp; Caicos Islands (+1649)
                                        </option>
                                        <option data-countryCode="TV" value="688">
                                            Tuvalu (+688)
                                        </option>
                                        <option data-countryCode="UG" value="256">
                                            Uganda (+256)
                                        </option>
                                        <option data-countryCode="UA" value="380">
                                            Ukraine (+380)
                                        </option>
                                        <option data-countryCode="AE" value="971">
                                            United Arab Emirates (+971)
                                        </option>
                                        <option data-countryCode="UY" value="598">
                                            Uruguay (+598)
                                        </option>
                                        <option data-countryCode="UZ" value="998">
                                            Uzbekistan (+998)
                                        </option>
                                        <option data-countryCode="VU" value="678">
                                            Vanuatu (+678)
                                        </option>
                                        <option data-countryCode="VA" value="379">
                                            Vatican City (+379)
                                        </option>
                                        <option data-countryCode="VE" value="58">
                                            Venezuela (+58)
                                        </option>
                                        <option data-countryCode="VN" value="84">
                                            Vietnam (+84)
                                        </option>
                                        <option data-countryCode="VG" value="1">
                                            Virgin Islands - British (+1)
                                        </option>
                                        <option data-countryCode="VI" value="1">
                                            Virgin Islands - US (+1)
                                        </option>
                                        <option data-countryCode="WF" value="681">
                                            Wallis &amp; Futuna (+681)
                                        </option>
                                        <option data-countryCode="YE" value="969">
                                            Yemen (North)(+969)
                                        </option>
                                        <option data-countryCode="YE" value="967">
                                            Yemen (South)(+967)
                                        </option>
                                        <option data-countryCode="ZM" value="260">
                                            Zambia (+260)
                                        </option>
                                        <option data-countryCode="ZW" value="263">
                                            Zimbabwe (+263)
                                        </option>
                                    </select>
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label for="tel">Phone</label>
                                    <input type="tel" name="phone" class="form-control" id="tel"
                                        placeholder="Enter Your Contact Number." required />
                                </div>

                                <div class="col-sm-12 chk py-4">
                                    <input type="checkbox" class="form-check d-inline" id="chb" required /><label
                                        for="chb" class="form-check-label">&nbsp;I accept all terms and conditions.
                                    </label>
                                </div>

                                <div class="col-sm-12 form-group mb-0">
                                    <button class="btn btn-primary float-right">Submit</button>
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
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#reservationModal">
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
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#historyTripsModal">
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
                <section id="pm" class="section pm">
                    <div class="row">
                        <div class="col-lg-5 payment-center">
                            <button class="google-pay-button">
                                <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313945/google-pay-logo_jbc4oh.png" alt="Google Pay" />
                            </button>
                            <button class="gcash-button">
                                <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313944/gcash_mjtlpb.png" alt="GCash" />
                            </button>
                            <button class="paypal-button">
                                <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313962/paypal-logo_awaqqc.png" alt="Paypal" />
                            </button>
                        </div>
                        <div class="col-lg-1 or_center">OR</div>
                        <div class="wrapper block col-lg-6" id="app">
                            <div class="card-form">
                                <div class="card-list">
                                    <div class="card-item" v-bind:class="{ '-active' : isCardFlipped }">
                                        <div class="card-item__side -front">
                                            <div class="card-item__focus"
                                                v-bind:class="{'-active' : focusElementStyle }"
                                                v-bind:style="focusElementStyle" ref="focusElement"></div>
                                            <div class="card-item__cover">
                                                <img v-bind:src="'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/' + currentCardBackground + '.jpeg'"
                                                    class="card-item__bg" />
                                            </div>

                                            <div class="card-item__wrapper">
                                                <div class="card-item__top">
                                                    <img src="https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/chip.png"
                                                        class="card-item__chip" />
                                                    <div class="card-item__type">
                                                        <div name="slide-fade-up">
                                                            <img v-bind:src="'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/' + getCardType + '.png'"
                                                                v-if="getCardType" v-bind:key="getCardType" alt=""
                                                                class="card-item__typeImg" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <label for="cardNumber" class="card-item__number" ref="cardNumber">
                                                    <template v-if="getCardType === 'amex'">
                                                        <span v-for="(n, $index) in amexCardMask" :key="$index">
                                                            <div name="slide-fade-up">
                                                                <div class="card-item__numberItem"
                                                                    v-if="$index > 4 && $index < 14 && cardNumber.length > $index && n.trim() !== ''">
                                                                    *
                                                                </div>
                                                                <div class="card-item__numberItem"
                                                                    :class="{ '-active' : n.trim() === '' }"
                                                                    :key="$index"
                                                                    v-else-if="cardNumber.length > $index">
                                                                    {{cardNumber[$index]}}
                                                                </div>
                                                                <div class="card-item__numberItem"
                                                                    :class="{ '-active' : n.trim() === '' }" v-else
                                                                    :key="$index + 1">
                                                                    {{n}}
                                                                </div>
                                                            </div>
                                                        </span>
                                                    </template>

                                                    <template v-else>
                                                        <span v-for="(n, $index) in otherCardMask" :key="$index">
                                                            <div name="slide-fade-up">
                                                                <div class="card-item__numberItem"
                                                                    v-if="$index > 4 && $index < 15 && cardNumber.length > $index && n.trim() !== ''">
                                                                    *
                                                                </div>
                                                                <div class="card-item__numberItem"
                                                                    :class="{ '-active' : n.trim() === '' }"
                                                                    :key="$index"
                                                                    v-else-if="cardNumber.length > $index">
                                                                    {{cardNumber[$index]}}
                                                                </div>
                                                                <div class="card-item__numberItem"
                                                                    :class="{ '-active' : n.trim() === '' }" v-else
                                                                    :key="$index + 1">
                                                                    {{n}}
                                                                </div>
                                                            </div>
                                                        </span>
                                                    </template>
                                                </label>
                                                <div class="card-item__content">
                                                    <label for="cardName" class="card-item__info" ref="cardName">
                                                        <div class="card-item__holder">Card Holder</div>
                                                        <div name="slide-fade-up">
                                                            <div class="card-item__name" v-if="cardName.length" key="1">
                                                                <div-group name="slide-fade-right">
                                                                    <span class="card-item__nameItem"
                                                                        v-for="(n, $index) in cardName.replace(/\s\s+/g, ' ')"
                                                                        v-if="$index === $index"
                                                                        v-bind:key="$index + 1">{{n}}</span>
                                                                </div-group>
                                                            </div>
                                                            <div class="card-item__name" v-else key="2">
                                                                Full Name
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <div class="card-item__date" ref="cardDate">
                                                        <label for="cardMonth"
                                                            class="card-item__dateTitle">Expires</label>
                                                        <label for="cardMonth" class="card-item__dateItem">
                                                            <div name="slide-fade-up">
                                                                <span v-if="cardMonth"
                                                                    v-bind:key="cardMonth">{{cardMonth}}</span>
                                                                <span v-else key="2">MM</span>
                                                            </div>
                                                        </label>
                                                        /
                                                        <label for="cardYear" class="card-item__dateItem">
                                                            <div name="slide-fade-up">
                                                                <span v-if="cardYear"
                                                                    v-bind:key="cardYear">{{String(cardYear).slice(2,4)}}</span>
                                                                <span v-else key="2">YY</span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-item__side -back">
                                            <div class="card-item__cover">
                                                <img v-bind:src="'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/' + currentCardBackground + '.jpeg'"
                                                    class="card-item__bg" />
                                            </div>
                                            <div class="card-item__band"></div>
                                            <div class="card-item__cvv">
                                                <div class="card-item__cvvTitle">CVV</div>
                                                <div class="card-item__cvvBand">
                                                    <span v-for="(n, $index) in cardCvv" :key="$index">
                                                        *
                                                    </span>
                                                </div>
                                                <div class="card-item__type">
                                                    <img v-bind:src="'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/' + getCardType + '.png'"
                                                        v-if="getCardType" class="card-item__typeImg" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-form__inner">
                                    <div class="card-input">
                                        <label for="cardNumber" class="card-input__label">Card Number</label>
                                        <input type="text" id="cardNumber" class="card-input__input"
                                            v-mask="generateCardNumberMask" v-model="cardNumber" v-on:focus="focusInput"
                                            v-on:blur="blurInput" data-ref="cardNumber" autocomplete="off" />
                                    </div>
                                    <div class="card-input">
                                        <label for="cardName" class="card-input__label">Card Holders</label>
                                        <input type="text" id="cardName" class="card-input__input" v-model="cardName"
                                            v-on:focus="focusInput" v-on:blur="blurInput" data-ref="cardName"
                                            autocomplete="off" />
                                    </div>
                                    <div class="card-form__row">
                                        <div class="card-form__col">
                                            <div class="card-form__group">
                                                <label for="cardMonth" class="card-input__label">Expiration Date</label>
                                                <select class="card-input__input -select" id="cardMonth"
                                                    v-model="cardMonth" v-on:focus="focusInput" v-on:blur="blurInput"
                                                    data-ref="cardDate">
                                                    <option value="" disabled selected>Month</option>
                                                    <option v-bind:value="n < 10 ? '0' + n : n" v-for="n in 12"
                                                        v-bind:disabled="n < minCardMonth" v-bind:key="n">
                                                        {{n < 10 ? '0' + n : n}} </option>
                                                </select>
                                                <select class="card-input__input -select" id="cardYear"
                                                    v-model="cardYear" v-on:focus="focusInput" v-on:blur="blurInput"
                                                    data-ref="cardDate">
                                                    <option value="" disabled selected>Year</option>
                                                    <option v-bind:value="$index + minCardYear"
                                                        v-for="(n, $index) in 12" v-bind:key="n">
                                                        {{$index + minCardYear}}
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="card-form__col -cvv">
                                            <div class="card-input">
                                                <label for="cardCvv" class="card-input__label">CVV</label>
                                                <input type="text" class="card-input__input" id="cardCvv"
                                                    v-mask="'####'" maxlength="4" v-model="cardCvv"
                                                    v-on:focus="flipCard(true)" v-on:blur="flipCard(false)"
                                                    autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <button class="card-form__button">Submit</button>
                                </div>
                            </div>
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
</body>

</html>