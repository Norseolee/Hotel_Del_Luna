<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homepage;
use Illuminate\Support\Facades\Artisan;

Route::get('/', [Homepage::class, 'Home'])->name('Home');
Route::get('/About', [Homepage::class, 'About']);
Route::get('/Rewards', [Homepage::class, 'Reward']);
Route::get('/Careers', [Homepage::class, 'Career']);
Route::get('/ContactUs', [Homepage::class,'ContactUs']);

Route::get('/Dining', [Homepage::class, 'Dining']);
Route::get('/Dining/{restaurant_id}', [Homepage::class, 'ShowResto']);
Route::get('/Rooms', [Homepage::class, 'Room']);
Route::get('/Rooms/{room_type_id}', [Homepage::class,'ShowRoom']);
Route::get('/Entertainment', [Homepage::class, 'Entertainment']);
Route::get('/Gym', [Homepage::class, 'Gym']);
Route::get('/Meeting_Events', [Homepage::class, 'Meeting_Events']);

Route::get('/Shooting', [Homepage::class, 'Shooting']);
Route::get('/Spa', [Homepage::class, 'Spa']);
Route::get('/Swimmingpool', [Homepage::class, 'Swimmingpool']);

Route::get('/Wellness', [Homepage::class, 'Wellness']);

Route::get('/SignInSignOut', [Homepage::class, 'SignIn_SignUp'])->name('sign-in-sign-up');
Route::post('/create-account', [Homepage::class, 'createAccount'])->name('create-account');
Route::post('/Sign-in', [Homepage::class, 'signIn'])->name('sign-in');
Route::post('/Sign-out', [Homepage::class, 'signOut'])->name('sign-out');

Route::middleware(['auth'])->group(function () {
    Route::get('/Account', [Homepage::class, 'Account']);
    Route::put('/Account/{guest_id}', [Homepage::class, 'UpdateAccount']);
    Route::delete('/account/deletion', [Homepage::class, 'DeletionAccount'])->name('account.deletion');
});

Route::get('/run-migration', function () {
    Artisan::call('optimize:clear');
    Artisan::call('migrate:refresh --seed');
    return "Migrations executed successfully";
});
