<!DOCTYPE html>
<html lang="en">

<head>
    @include('Layout.Head')
    <link rel="stylesheet" href="Shooting.css">
</head>

<body>
    <header>
        @include('Layout.Navbar')
        <div class="hero" data-aos="fade-down" data-aos-duration="1000">
        </div>
    </header>
    <div class="container shootcon">
        <div class="row">
            <h1>HOTEL DEL LUNA SHOOTING RANGE</h1>
        </div>
        <div class="row">
            <div class="col-sm-10 offset-lg-1">
                <p>
                    The Hotel Del Luna Shooting Club is a sprawling 20-lane,
                    state-of-the-art, indoor shooting range and exclusive luxury hub for
                    gun enthusiasts and shooting aficionados. The Shooting Range boasts
                    of a 25 meter-long shooting bay with 15 shooter lanes – separated by
                    the latest and safest technology in modular ballistic panels – for
                    pistol lovers and handgunners.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6">
                <p>
                    Deluxe target retrievers, which can be programmed to edge and turn,
                    run through the 5-lane, 50 meter-long range for automatic and
                    assault rifle swingers. All shooting lanes are controlled with the
                    patented Smart Pad System and utilize total containment bullet
                    traps, tactical safety baffles, dust collection units, advanced
                    ventilation and acoustics, all designed and installed by Action
                    Target systems, a world leader in shooting range development and
                    technology. Guests would enjoy the live fire action behind the
                    safety of Level 5 bullet proof clear viewing windows and in the
                    comfort of the club’s fine amenities including the cigar lounge, a
                    business room,
                </p>
            </div>
            <div class="col-lg-6">
                <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313972/shootingbay_samxay.jpg" alt="Shooting range" width="450" />
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6">
                <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313970/shooting_locker_kvqdmx.jpg" alt="shooting locker" width="450" />
            </div>
            <div class="col-lg-6">
                <p>
                    An array of exclusive privileges and equipment further await members
                    such as access to high-end firearm rentals, secured gun display
                    cabinets, expert gun handling training and gunsmithing services.
                </p>
            </div>
        </div>
    </div>
    <div class="container galery">
        <p>
            <b>
                Your typical day at the range will definitely be different at Hotel
                Del Luna.
            </b>
        </p>
        <div class="row d-flex align-items-center">
            <div class="col-lg-3">
                <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313928/071917_shooting_pe8cdh.jpg" alt="view shooting" width="250" />
            </div>
            <div class="col-lg-3">
                <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313930/digital_camera_mqyuls.jpg" alt="digital" width="250" />
            </div>
            <div class="col-lg-3">
                <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313972/shootingrange_gzgarh.jpg" alt="shortrange" width="250" />
            </div>
            <div class="col-lg-3">
                <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313946/guns_zlexsv.jpg" alt="guns" width="250" />
            </div>
        </div>
    </div>
    <div class="container coninquiry">
        <span>Operating Hours: 12:00 PM to 2:00 AM</span>
        <form class="inquiry my-5">
            <h2>Make an Inquiry</h2>
            <p>
                Kindly enter your contact information and preferrences below. A member
                of our team will contact you shortly.
            </p>
            <div class="col-sm-6 form-group">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" name="acc_fname" id="acc_fname"
                    placeholder="Enter your first name" required />

                <label for="lname" class="pt-4">Last name:</label>
                <input type="text" class="form-control" name="acc_lname" id="acc_lname"
                    placeholder="Enter your last name" required />

                <label for="email" class="pt-4">Email:</label>
                <input type="email" class="form-control" name="acc_email" id="acc_email" placeholder="Enter your email"
                    required />
                <div class="row">
                    <div class="date-reservation col-lg-7">
                        <label for="email" class="pt-4">Date reservation:</label>
                        <input type="date" class="form-control" name="acc_email" id="acc_email" required />
                    </div>
                    <div class="days_duration col-lg-5">
                        <label for="Number" class="pt-4">Days of duration:</label>
                        <input type="number" class="form-control" name="acc_email" id="acc_email" min="1"
                            placeholder="Enter your days of duration" required />
                    </div>
                </div>
                <label for="email" class="pt-4">Special request:</label>
                <textarea type="text" class="form-control" name="acc_email" id="acc_email"
                    placeholder="Enter your special request" required></textarea>
                <div class="pt-3 buttons-acc-setting">
                    <button class="btn btn-warning">Send</button>
                </div>
            </div>
        </form>
    </div>

    @include('Layout.Footer')
    @include('Layout.aos')
</body>

</html>