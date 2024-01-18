<footer>
    <div class="container">
        <div class="row justify-content-center align-content-center">
            <div class="logo-footer" data-aos="zoom-in" data-aos-duration="800">
                <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313955/hotel_logo_neveax.png" alt="" width="90px" />
                <!-- <h3 class="logo_name ps-2">Hotel Del Luna</h3> -->
            </div>
        </div>
        <div class="row pt-4">
            <div class="col-lg-3 col-sm-6" data-aos="fade-right" data-aos-duration="800">
                <div class="single-box">
                    <!-- <img src="../images/hotel_logo.png" alt="" id="logo-footer" /> -->
                    <h2>VISITOR INFORMATION</h2>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                    <h2 class="pt-4">ABOUT HOTEL MANILA</h2>
                    <ul>
                        <li><a href="/About">About Us</a></li>
                        <li><a href="/Careers">Careers</a></li>
                        <li><a href="/ContactUs">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 ps-lg-5" data-aos="fade-up" data-aos-duration="800">
                <div class="single-box">
                    <h2>STAY</h2>
                    <ul>
                        <li><a href="/Rooms">DELUXE ROOM</a></li>
                        <li><a href="/Rooms">SANDS FAMILY SUITE</a></li>
                        <li><a href="/Rooms">PAIZA PERMIER SUITE</a></li>
                        <li><a href="/Rooms">ORCHID SUITE</a></li>
                        <li><a href="/Rooms">PREMIER ROOM</a></li>
                    </ul>
                    <h2 class="pt-4">SHOP</h2>
                    <ul>
                        <li><a href="#">Gift Boutique</a></li>
                        <li><a href="#">Pandora</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 ps-lg-5" data-aos="fade-up" data-aos-duration="800">
                <div class="single-box">
                    <h2>DINE</h2>
                    <ul>
                        @foreach ($resto_footer as $resto)
                        <li><a href="/Dining/{{ $resto->restaurant_id  }}}">{{ $resto->restaurant_name }}</a></li>
                        @endforeach
                    </ul>
                    <h2 class="pt-4">RELAX</h2>
                    <ul>
                        <li><a href="/Spa">SPA</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6" data-aos="fade-left" data-aos-duration="800">
                <div class="single-box">
                    <h2>STAY UPDATED</h2>
                    <p>
                        Sign up for our newsletter about our latest deals and update.
                    </p>
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Enter your email" />
                        <button class="btn btn-warning input-btn" type="button">
                            <i class="fa fa-arrow-right"></i>
                        </button>
                    </div>

                    <h2 class="pt-4">Follow us on</h2>
                    <p class="socials">
                        <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/feed/"><i class="fa fa-linkedin"></i></a>
                    </p>
                </div>
            </div>
        </div>
        <div>
            <ul class="terms">
                <li> <a href="https://About.com/">About</a></li>
                |
                <li><a href="https://privacypolicy.com/">Privacy</a></li>
                |
                <li><a href="https://termsofuse.com/">Terms of Use</a></li>
                |
                <li><a href="/Careers">Careers</a></li>
            </ul>
        </div>
        <div class="Bottom">
            <p>Copyright @2023 Nor, Mat, Ameth, Poy, All Rigths Reserved</p>
        </div>
    </div>
</footer>
