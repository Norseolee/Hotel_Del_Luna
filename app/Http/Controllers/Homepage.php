<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\Restaurant;
use App\Models\RestaurantGallary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class Homepage extends Controller
{

    public function __construct()
    {
        view()->share('authUser', Auth::user());
    }

    public function SignIn_SignUp()
    {
        return view('HTML.Signin_Signup');
    }

    public function createAccount(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email|unique:guests',
            'pass' => 'required|min:6',
        ]);
        $user = new Guest([
            'first_name' => $request->input('fname'),
            'last_name' => $request->input('lname'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('pass')),
        ]);
        $user->save();
        return redirect()->back()->with('success', 'Account created successfully.');
    }

    public function signIn(Request $request)
    {
        $request->validate([
            'login-email' => 'required|email',
            'login-pass' => 'required',
        ]);

        $user = Guest::where('email', $request->input('login-email'))->first();

        if ($user && Hash::check($request->input('login-pass'), $user->password)) {
            Auth::login($user);

            // Authentication successful
            return redirect()->route('Home')->with('success', 'Login successful.');
        } else {
            // Authentication failed
            return redirect()->back()->with('fail', 'Wrong email or password.');
        }
    }


    public function signOut()
    {
        // Authentication logout
        Auth::logout();
        return redirect()->route('Home')->with('success', 'Logout successful.');
    }
    public function Home()
    {
        return view('Homepage');
    }
    public function About()
    {
        return view('HTML.About');
    }
    public function Reward()
    {
        return view('HTML.Reward');
    }
    public function Account()
    {
        return view('HTML.Account');
    }
    public function Dining()
    {

        $restaurant = Restaurant::all();
        return view('HTML.Dining', compact('restaurant'));
    }
    public function ShowResto($restaurant_id)
    {
        $restaurant = Restaurant::find($restaurant_id);
        $restaurant_gallery = RestaurantGallary::all();


        return view('HTML.Resto', compact('restaurant', 'restaurant_gallery'));
    }
    public function Entertainment()
    {
        return view('HTML.Entertaiment');
    }
    public function Gym()
    {
        return view('HTML.Gym');
    }
    public function Meeting_Events()
    {
        return view('HTML.Meeting_Events');
    }
    public function Room()
    {
        return view('HTML.Rooms');
    }
    public function Shooting()
    {
        return view('HTML.Shooting');
    }
    public function Spa()
    {
        return view('HTML.Spa');
    }
    public function Swimmingpool()
    {
        return view('HTML.Swimmingpool');
    }
    public function Career()
    {
        return view('HTML.Career');
    }
    public function Wellness()
    {
        return view('HTML.Wellness');
    }
    public function ContactUs() {
        return view('HTML.ContactUs');
    }
}
