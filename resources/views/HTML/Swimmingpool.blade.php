<!DOCTYPE html>
<html lang="en">

<head>
    @include('Layout.Head')
    <link rel="stylesheet" href="{{ asset('Css/Swimmingpool.css')}}">
</head>

<body>
    <header>
        @include('Layout.Navbar')
        <div class="hero" data-aos="fade-down" data-aos-duration="1000">
        </div>
    </header>

    <main>
        <div class="pool">
            <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313965/pool2_cdy5mo.jpg" alt="" />
        </div>
        <div class="pool-details">
            <h1>THE POOL AND POOLSIDE</h1>
            <p>
                What would an afternoon in Solaire be without its sparkling azure
                pools? The pool is part of the Solaire mystique, an ideal venue for
                seeing, being seen and a pre-night-out siesta. It also offers the best
                spot for times of idle, when you want to leave the world behind and
                step into an experience of quiet bliss. Glisten under the warm Manila
                sun and take a refreshing dive at the resort’s luxury hotel swimming
                pool. Spend an hour or two indulging in an oasis of calmness and
                serenity under the water. Lounge in a private cabana, sip on your
                favorite cocktail, and best of all – bask in the golden warmth of a
                beautiful day at the city.
            </p>

        </div>

        <div class="time">
            <b>Operating Hours: 7:00AM to 9:00PM</b>

        </div>

        <form class="inquiry">
            <h2>Make an Inquiry</h2>
            <p>
                Kindly enter your contact information and preferrences below. A
                member of our team will contact you shortly.
            </p>
            <div class="form-group">
                <div>
                    <label for="fname" class='label'>First Name:</label>
                    <input type="text" class="control" name="acc_fname" id="acc_fname"
                        placeholder="Enter your first name" required />
                </div>
                <div>
                    <label for="lname" class='label'>Last name:</label>
                    <input type="text" class="control" name="acc_lname" id="acc_lname"
                        placeholder="Enter your last name" required />
                </div>
                <div>
                    <label for="email" class='label'>Email:</label>
                    <input type="email" class="control" name="acc_email" id="acc_email" placeholder="Enter your email"
                        required />
                </div>
                <div>
                    <div class="date-reservation ">
                        <label for="email" class='label'>Date reservation:</label>
                        <input type="date" class="control" name="dr" id="dr" required />
                    </div>
                    <div class="days_duration ">
                        <label for="Number" class='label'>Days of duration:</label>
                        <input type="number" class="control" name="dd" id="dd" placeholder="Enter your days of duration"
                            min="1" required />
                    </div>
                </div>
                <label for="email" class='label'>Message:</label>
                <textarea type="text" class="control textarea" cols="5" rows="5" name="sp" id="sp"
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