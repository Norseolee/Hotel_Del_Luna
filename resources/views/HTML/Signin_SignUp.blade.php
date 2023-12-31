<!DOCTYPE html>
<html lang="en">

<head>
    @include('Layout.Head')
    <link rel="stylesheet" href="SignIn_SignUp.css">
</head>

<body>
    <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="errorModalLabel">Error</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="errorModalMessage"></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <a href="../index.html" class="back-button"><i class="fas fa-arrow-left"></i></a>

        <div class="signin-signup" id="sign-in-form">
            <form onsubmit="validateLogin()" class="sign-in-form">
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="email" placeholder="Enter your email address" id="login-email" />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Enter your password" id="login-pass" />
                    <i class="fas fa-eye toggle-password" id="togglePassword1"></i>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember" />
                    <label class="form-check-label" for="remember"> Remember me </label>
                </div>
                <input type="submit" value="Login" class="btn" />
                <p class="social-text text-center">Or Sign in with social platform</p>
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
            <form class="sign-up-form" id="sign-up-form" onsubmit="addAccount()">
                <h2 class="title">Sign up</h2>
                <div class="input-field">
                    <i class="fas fa-user" for="fname"></i>
                    <input type="text" placeholder="First Name" id="fname" required />
                </div>
                <div class="input-field">
                    <i class="fas fa-user" for="lname"></i>
                    <input type="text" placeholder="Last Name" id="lname" required />
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope" for="email"></i>
                    <input type="email" placeholder="Email" id="email" required />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock" for="pass"></i>
                    <input type="password" placeholder="Password" id="pass" required />
                    <i class="fas fa-eye toggle-password" id="togglePassword2"></i>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock" for="c_pass"></i>
                    <input type="password" placeholder="Confirm Password" id="c_pass" required />
                    <i class="fas fa-eye toggle-password" id="togglePassword3"></i>
                </div>
                <input type="submit" value="SignUp" class="btn" />
                <p class="social-text text-center">Or Sign up with social platform</p>
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
                <img src="../images/hotel_logo.png" alt="" class="image pt-4" />
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
                <img src="../images/hotel_logo.png" alt="" class="image pt-4" />
            </div>
        </div>
    </div>
    <script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0&appId=YOUR_APP_ID&autoLogAppEvents=1">
    </script>
    <script src="../JS/login.js"></script>

    @include('Layout.Footer')
</body>

</html>