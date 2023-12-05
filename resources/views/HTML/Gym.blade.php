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
        <div class="gym">
            <img class="images" src="../images/gym.jpg" alt="" />
        </div>
        <div class="gym-details">
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
        </div>

        <div class="time">
            <b>Operating Hours: 6:00 AM to 10:00 PM</b>
        </div>
        <div class="container"></div>
        <form class="inquiry">
            <h2>Make an Inquiry</h2>
            <p>
                Kindly enter your contact information and preferrences below. A
                member of our team will contact you shortly.
            </p>
            <div class=" form-group">
                <div>

                    <label for="fname" class="label">First Name:</label>
                    <input type="text" class="control" name="acc_fname" id="acc_fname"
                        placeholder="Enter your first name" required />

                </div>

                <div>
                    <label for="lname" class="label">Last name:</label>
                    <input type="text" class="control" name="acc_lname" id="acc_lname"
                        placeholder="Enter your last name" required />
                </div>

                <div>
                    <label for="email" class="label">Email:</label>
                    <input type="email" class="control" name="acc_email" id="acc_email" placeholder="Enter your email"
                        required />
                </div>

                <div>
                    <div class="date-reservation ">
                        <label for="email" class="label">Date reservation:</label>
                        <input type="date" class="control" name="acc_email" id="acc_email" required />
                    </div>
                    <div class="days_duration">
                        <label for="Number" class="label">Days of duration:</label>
                        <input type="number" class="control" name="acc_email" id="acc_email" min="1"
                            placeholder="Enter your days of duration" required />
                    </div>
                </div>
                <label for="email" class="label">Special request:</label>
                <textarea type="text" class="control textarea" cols="5" rows="5" name="acc_email" id="acc_email"
                    placeholder="Enter your special request" required></textarea>
                <div class="pt-3 buttons-acc-setting">
                    <button class="btn btn-warning">Send</button>
                </div>
            </div>
        </form>

    </main>


    @include('Layout.Footer')
    @include('Layout.aos')
</body>

</html>