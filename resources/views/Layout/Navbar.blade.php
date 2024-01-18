<div class="navbar">
    <div class="nav_bar_left" data-aos="fade-right" data-aos-duration="800">
        <a href="/">
            <img href="/" src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313955/hotel_logo_neveax.png" width="50px" class="logo_img" />
            <h1 class="logo_name">Hotel Del Luna</h1>
        </a>
    </div>
    <!-- @if($authUser)
    <p>User is Authenticated</p>
    @else
    <p>User is Not Authenticated</p>
    @endif -->

    <div class="nav_bar_right" data-aos="fade-left" data-aos-duration="800">
        <a class="link_font" href="/Rooms">Rooms and Suite</a>
        <a class="link_font" href="/Dining">Dining</a>
        <a class="link_font" href="/Meeting_Events">Meeting & Events
        </a>
        <a class="link_font" href="/Entertainment">Entertainment </a>
        <a class="link_font" href="/Wellness">Wellness</a>
        <a class="link_font" href="/Careers">Careers </a>
        @if($authUser)
        <!-- User is authenticated (logged in) -->
        <div class="link_font dropdown">
            <a class="login_dropdown" id="login-nav-item" href="/Account"><i class="fa-solid fa-circle-user"></i></a>
            <div class="login_content_dropdown">
                <a class="account_info" href="/Account">Account Setting</a>
                <form id="logout-form" action="{{ route('sign-out') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a class="account_info" onclick="document.getElementById('logout-form').submit();">Log Out</a>
            </div>
        </div>
        @else
        <!-- User is not authenticated (not logged in) -->
        <div class="link_font dropdown">
            <a class="login_dropdown" id="login-nav-item" href="/SignInSignOut"><i class="fa-solid fa-circle-user"></i></a>
        </div>
        @endif
        <i class="pipe">|</i>
        <a class="book_now" href="">Book Now!</a>
    </div>
    <div class="toggle" data-aos="fade-left" data-aos-duration="800">
        <div class="toggle_btn">
            <i class="fa-solid fa-bars"></i>
        </div>
        <div class="toggle_option">
            <div class="toggle_option_left">
                <i class="fa-solid fa-x"></i>
            </div>
            <div class="toggle_option_right">
                <a class="toggle_font" href="/Rooms">Rooms and Suite</a>
                <a class="toggle_font" href="/Dining">Dining</a>
                <a class="toggle_font" href="/Meeting_Events">Meeting & Events
                </a>
                <a class="toggle_font" href="/Entertainment">Entertainment
                </a>
                <a class="toggle_font" href="/Wellness">Wellness</a>
                <a class="toggle_font" href="/Careers">Careers </a>
                @if($authUser)
                <div class="account_hover_toggle">
                    <a class="account_info" href="/Account">Account Setting</a>
                    <form id="logout-form" action="{{ route('sign-out') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a class="account_info" onclick="document.getElementById('logout-form').submit();">Log Out</a>
                </div>
                @else
                <a class="toggle_font_login" href="/SignInSignOut">Login</a>
                @endif
                <a class="book_now" href="/Rooms">Book Now!</a>
                <a class="rewards" href="/Rewards">Rewards</a>
                <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313955/hotel_logo_neveax.png" width="100px" />
            </div>
        </div>
    </div>
</div>

@include('Messages')
<!-- end login hover -->
