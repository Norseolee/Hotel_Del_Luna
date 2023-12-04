<!DOCTYPE html>
<html lang="en">

<head>
    @include('Layout.Head')
    <link rel="stylesheet" href="{{ asset('Css/Gym.css')}}">
</head>

<body>
    @include('Layout.Navbar')
    <div class="hero" data-aos="fade-down" data-aos-duration="1000"></div>

    <main>
        <div class="spa">
            <img src="../images/gym.jpg" alt="" />
        </div>
        <div class="container spa-details">
            <h1>HOTEL DEL LUNA GYM</h1>
            <p>
                Hotel Del Luna wellness space is equipped with the latest and most
                advanced gym equipment from Technogym, an award-winning Italian
                manufacturer recognized for producing premium-grade and
                bio-mechanically precise workout equipment. Hotel Del Luna worked with
                E-Sports International to design and build the center, featuring an
                impressive installation of world-class gym equipment that makes it a
                favorite destination to local and foreign guests. Amp up your
                staycation by sweating it out at the luxury Hotel Del Luna hotel gym.
            </p>
            <br />
            <br />

            <b>Operating Hours: 6:00 AM to 10:00 PM</b>
            <br />
            <br />
            <div class="container"></div>
            <form class="inquiry">
                <h2>Make an Inquiry</h2>
                <p>
                    Kindly enter your contact information and preferrences below. A
                    member of our team will contact you shortly.
                </p>
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
    </main>


    @include('Layout.Footer')
    @include('Layout.aos')
</body>

</html>