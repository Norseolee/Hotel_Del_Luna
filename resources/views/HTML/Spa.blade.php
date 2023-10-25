<!DOCTYPE html>
<html lang="en">

<head>
    @include('Layout.Head')
    <link rel="stylesheet" href="Spa.css">
</head>

<body>
    <header>
        @include('Layout.Navbar')
        <div class="hero" data-aos="fade-down" data-aos-duration="1000">
        </div>
    </header>

    <main>
        <div class="spa">
            <img src="{{ asset('Images/spa2.jpg')}}" alt="" />
        </div>
        <div class="container spa-details">
            <h1>HOTEL DEL LUNA SPA</h1>
            <p>
                What would an afternoon in Hotel Del Luna be without its sparkling
                azure pools? The pool is part of the Hotel Del Luna mystique, an ideal
                venue for seeing, being seen and a pre-night-out siesta. It also
                offers the best spot for times of idle, when you want to leave the
                world behind and step into an experience of quiet bliss. Glisten under
                the warm Manila sun and take a refreshing dive at the resort’s luxury
                hotel swimming pool. Spend an hour or two indulging in an oasis of
                calmness and serenity under the water. Lounge in a private cabana, sip
                on your favorite cocktail, and best of all – bask in the golden warmth
                of a beautiful day at the city.
            </p>
            <br />
            <br />

            <b>Operating Hours: 12:00 PM to 2:00 AM</b>
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