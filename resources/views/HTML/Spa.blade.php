<!DOCTYPE html>
<html lang="en">

<head>
    @include('Layout.Head')
    <link rel="stylesheet" href="{{ asset('Css/Spa.css')}}">
</head>

<body>
    <header>
        @include('Layout.Navbar')
        <div class="hero" data-aos="fade-down" data-aos-duration="1000">
        </div>
    </header>

    <main>
        <div class="spa">
            <img class='images' src="{{ asset('Images/spa2.jpg')}}" alt="" />
        </div>
        <div class="spa-details">
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
        </div>
        <div class="time">
            <p>Operating Hours: 12:00 PM to 2:00AM</p>
        </div>
        <form class="inquiry">
            <h2>Make an Inquiry</h2>
            <p>
                Kindly enter your contact information and preferrences below. A
                member of our team will contact you shortly.
            </p>
            <div class="form-group">
                <div>
                    <label class="label" for="fname">First Name:</label>
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

                <div class='date'>
                    <div>
                        <label for="email" class="label">Date reservation:</label>
                        <input type="date" class="control" name="acc_email" id="acc_email" required />
                    </div>
                    <div>
                        <label for="Number" class="label">Days of duration:</label>
                        <input type="number" class="control" name="acc_email" id="acc_email" min="1"
                            placeholder="Enter your days of duration" required />
                    </div>
                </div>

                <div>
                    <label for="email" class="label">Special request:</label>
                    <textarea type="text" class="control textarea" col="5" rows="5" name="acc_email" id="acc_email"
                        placeholder="Enter your special request" required></textarea>
                </div>

                <div>
                    <button class="btn btn-warning button-sent">Submit</button>
                </div>
            </div>
        </form>

    </main>



    @include('Layout.Footer')
    @include('Layout.aos')
</body>

</html>