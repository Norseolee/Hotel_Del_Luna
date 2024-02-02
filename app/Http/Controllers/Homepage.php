<?php

namespace App\Http\Controllers;

use App\Models\Amenity;
use App\Models\Guest;
use App\Models\GuestInformation;
use App\Models\KeyFeature;
use App\Models\Restaurant;
use App\Models\RestaurantGallary;
use App\Models\RoomGallary;
use App\Models\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class Homepage extends Controller
{
    public function __construct()
    {
        view()->share('authUser', Auth::user());
        view()->share('resto_footer', Restaurant::paginate(5));
        view()->share('room_footer', RoomType::paginate(5));
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

        $userInfo = new GuestInformation([
            'guest_id' => $user->guest_id,
        ]);
        $userInfo->save();
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
        if (Auth::check()) {
            $authUser = Auth::user();
            $guest = Guest::where('guest_id', $authUser->guest_id)->first();
            $guestInfo = GuestInformation::where('guest_id', $guest->guest_id)->first();
            return view('HTML.Account', [
                'authUser' => $authUser,
                'guestInfo' => $guestInfo,
            ]);
        }
    }


    public function UpdateAccount(Request $request)
    {
        $authUser = Auth::user();
        $guest = Guest::where('guest_id', $authUser->guest_id)->first();
        $guestInfo = $guest->guestInformation;

        // $request->validate([
        //     'acc_fname' => 'string',
        //     'acc_lname' => 'string',
        //     'state' => 'string',
        //     'as_mobile' => 'numeric|digits:13',
        //     'address1' => 'string',
        //     'address2' => 'string',
        //     'postal_code' => 'numeric|digits:4',
        //     'country' => 'string',
        //     'gender' => ['required', Rule::in(['male', 'female'])],
        // ]);

        if ($request->hasFile('picture')) {
            if ($guest->picture) {
                $picturePath = public_path('img/user_profiles/') . $guest->picture;
                if (file_exists($picturePath)) {
                    unlink($picturePath);
                }
            }

            $file = $request->file('picture');
            $filename = date('YmdHiu') . $file->getClientOriginalName();
            $file->move(public_path('img/user_profiles/'), $filename);
            $guest->picture = $filename;
            $guest->save();


            return redirect()->back()->with('success', 'Image uploaded successfully.');
        }
        if ($request->has('acc_fname')) {
            $guest->first_name = $request->input('acc_fname');
            $guest->save();
        }
        if ($request->has('acc_lname')) {
            $guest->last_name = $request->input('acc_lname');
            $guest->save();
        }
        if ($request->has('as_mobile')) {
            $guestInfo->phone_number = $request->input('as_mobile');
            $guestInfo->save();
        }
        if ($request->has('address1')) {
            $guestInfo->address1 = $request->input('address1');
            $guestInfo->save();
        }
        if ($request->has('address2')) {
            $guestInfo->address2 = $request->input('address2');
            $guestInfo->save();
        }
        if ($request->has('state')) {
            $guestInfo->state = $request->input('state');
            $guestInfo->save();
        }
        if ($request->has('postal_code')) {
            $guestInfo->postal_code = $request->input('postal_code');
            $guestInfo->save();
        }
        if ($request->has('country')) {
            $guestInfo->country = $request->input('country');
            $guestInfo->save();
        }
        if ($request->has('gender')) {
            $guestInfo->gender = $request->input('gender');
            $guestInfo->save();
        }
        if ($request->has('date_of_birth')) {
            $guestInfo->date_of_birth = $request->input('date_of_birth');
            $guestInfo->save();
        }

        return redirect()->back()->with('error', 'No image uploaded.');
    }

    public function DeletionAccount(Request $request)
    {
        $request->validate([
            'terms' => 'required|accepted',
        ]);

        $authUser = Auth::user();

        if ($authUser) {
            $guest = Guest::where('guest_id', $authUser->guest_id)->first();

            if ($guest) {
                $guest->delete();
                return redirect()->route('Home')->with('success', 'Your account has been deleted.');
            } else {
                return redirect()->route('Home')->with('error', 'Guest record not found.');
            }
        } else {
            return redirect()->route('Home')->with('error', 'User not authenticated.');
        }
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
    public function ShowRoom($room_type_id)
    {
        $allroom = RoomType::all();
        $allroom_gallery = RoomGallary::all();
        $all_amenity = Amenity::all();
        $room = RoomType::find($room_type_id);
        $room_gallery = RoomGallary::where('room_type_id', $room_type_id)->get();
        $key_features = KeyFeature::where('room_type_id', $room_type_id)->get();
        $amenities = Amenity::where('room_type_id', $room_type_id)->get();

        // to group amenities each by type
        $group_amenities = $amenities->groupBy('amenities_type')->toArray();
        // distinst to get view
        $view = $room_gallery->where('room_type_id', $room_type_id)->unique('view')->values();

        return view('HTML.Room_Show', [
            'room' => $room,
            'room_gallery' => $room_gallery,
            'key_features' => $key_features,
            'amenities' => $amenities,
            'group_amenities' => $group_amenities,
            'view' => $view,
            'allroom' => $allroom,
            'allroom_gallery' => $allroom_gallery,
            'all_amenity' => $all_amenity,
        ]);
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

        $roomType = RoomType::all();
        $roomAmenities = Amenity::all();
        $roomKeyFeatures = KeyFeature::all();
        $roomGallary = RoomGallary::all();

        return view('HTML.Rooms', [
            'room_type' => $roomType,
            'amenity' => $roomAmenities,
            'key_features' => $roomKeyFeatures,
            'room_gallery' => $roomGallary,

        ]);

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
    public function ContactUs()
    {
        return view('HTML.ContactUs');
    }
}
