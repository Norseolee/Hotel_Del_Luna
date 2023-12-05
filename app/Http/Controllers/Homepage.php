<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\RestaurantGallary;
use Illuminate\Http\Request;

class Homepage extends Controller
{
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
}
