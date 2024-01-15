<!DOCTYPE html>
<html lang="en">

<head>
    @include('Layout.Head')
    <link rel="stylesheet" href="{{ asset('Css/Signin_Signup.css') }}">
</head>

<body>
    @include('Messages')

    <div class="container">
        <a href="{{ route('Home') }}" class="back-button"><i class="fas fa-arrow-left"></i></a>


        <div class="signin-signup" id="sign-in-form">
            <form action="{{ route('sign-in') }}" onsubmit="validateLogin()" class="sign-in-form" method="POST">
                @csrf
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="email" placeholder="Enter your email address" id="login-email" name="login-email" />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Enter your password" id="login-pass" name="login-pass" />
                    <i class="fas fa-eye toggle-password" id="togglePassword1"></i>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember" name="remember" />
                    <label class="form-check-label" for="remember"> Remember me </label>
                </div>
                <button type="submit" class="btn">Login</button>
                <p class="social-text text-center">Or Sign in with a social platform</p>
                <div class="social-media">
                    <a href="#" class="social-icons"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="social-icons"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icons"><i class="fab fa-google"></i></a>
                    <a href="#" class="social-icons"><i class="fab fa-linkedin"></i></a>
                </div>
                <p class="account-text">
                    Don't have an account? <a href="#" id="sign-up-btn2">Sign up</a>
                </p>
            </form>
            <form action="{{ route('create-account') }}" class="sign-up-form" id="sign-up-form" onsubmit="addAccount()"
                method="POST">
                @csrf
                <h2 class="title">Sign up</h2>
                <div class="input-field">
                    <i class="fas fa-user" for="fname"></i>
                    <input type="text" placeholder="First Name" id="fname" name="fname" required />
                </div>
                <div class="input-field">
                    <i class="fas fa-user" for="lname"></i>
                    <input type="text" placeholder="Last Name" id="lname" name="lname" required />
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope" for="email"></i>
                    <input type="email" placeholder="Email" id="email" name="email" required />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock" for="pass"></i>
                    <input type="password" placeholder="Password" id="pass" name="pass" required />
                    <i class="fas fa-eye toggle-password" id="togglePassword2"></i>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock" for="c_pass"></i>
                    <input type="password" placeholder="Confirm Password" id="c_pass" name="c_pass" required />
                    <i class="fas fa-eye toggle-password" id="togglePassword3"></i>
                </div>
                <button type="submit" class="btn">Sign Up</button>
                <p class="social-text text-center">Or Sign up with a social platform</p>
                <div class="social-media">
                    <a href="#" class="social-icons"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="social-icons"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icons"><i class="fab fa-google"></i></a>
                    <a href="#" class="social-icons"><i class="fab fa-linkedin"></i></a>
                </div>
                <p class="account-text">
                    Already have an account? <a href="#" id="sign-in-btn2">Sign in</a>
                </p>
            </form>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Welcome back to <br />Hotel Del Luna</h3>
                    <p>
                        Sign in to your account and access your personalized profile.
                        Manage your bookings, update your preferences, and take advantage
                        of exclusive member benefits.
                    </p>
                    <button class="btn" id="sign-in-btn">Sign in</button>
                </div>
                <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313955/hotel_logo_neveax.png" alt="" class="image pt-4" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Unlock Exclusive Benefits at <br />Hotel Del Luna</h3>
                    <p>
                        Sign up now to enjoy a world of perks and privileges reserved for
                        our valued guests. Experience luxurious stays, exceptional
                        service, and unbeatable offers.
                    </p>
                    <button class="btn" id="sign-up-btn">Sign up</button>
                </div>
                <img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313955/hotel_logo_neveax.png" alt="" class="image pt-4" />
            </div>
        </div>
    </div>

</body>

</html>

<script>
    function checkLogin() {
  if (localStorage.getItem("login") != null) {
    $("#login-nav-item").text("Account");
    document.getElementById("login-nav-item").href = "HTML/account.html";
    $("#loginStatus").text("Account");
    document.getElementById("login-nav-item").href = "HTML/account.html";
  } else if (sessionStorage.getItem("login") != null) {
    $("#login-nav-item").text("Account");
    document.getElementById("login-nav-item").href = "HTML/account.html";
    $("#loginStatus").text("Account");
    document.getElementById("login-nav-item").href = "HTML/account.html";
  }
}
checkLogin();

var passwordField = document.getElementById("login-pass");
var togglePassword = document.getElementById("togglePassword1");

togglePassword.addEventListener("click", function () {
  if (passwordField.type === "password") {
    passwordField.type = "text";
    togglePassword.classList.remove("fa-eye");
    togglePassword.classList.add("fa-eye-slash");
  } else {
    passwordField.type = "password";
    togglePassword.classList.remove("fa-eye-slash");
    togglePassword.classList.add("fa-eye");
  }
});

var passwordField1 = document.getElementById("pass");
var togglePassword1 = document.getElementById("togglePassword2");

var passwordField2 = document.getElementById("c_pass");
var togglePassword2 = document.getElementById("togglePassword3");

togglePassword1.addEventListener("click", function () {
  togglePasswordVisibility(passwordField1, togglePassword1);
});

togglePassword2.addEventListener("click", function () {
  togglePasswordVisibility(passwordField2, togglePassword2);
});

function togglePasswordVisibility(passwordField, togglePassword) {
  if (passwordField.type === "password") {
    passwordField.type = "text";
    togglePassword.classList.remove("fa-eye");
    togglePassword.classList.add("fa-eye-slash");
  } else {
    passwordField.type = "password";
    togglePassword.classList.remove("fa-eye-slash");
    togglePassword.classList.add("fa-eye");
  }
}

const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");
const sign_in_btn2 = document.querySelector("#sign-in-btn2");
const sign_up_btn2 = document.querySelector("#sign-up-btn2");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});
sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});

sign_up_btn2.addEventListener("click", () => {
  container.classList.add("sign-up-mode2");
});
sign_in_btn2.addEventListener("click", () => {
  container.classList.remove("sign-up-mode2");
});

</script>