<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homepage;


Route::get('/', [Homepage::class, 'Home']);
Route::get('/About', [Homepage::class, 'About']);
Route::get('/Rewards', [Homepage::class, 'Reward']);
Route::get('/Account', [Homepage::class, 'Account']);
Route::get('/Dining', [Homepage::class, 'Dining']);
Route::get('/Entertainment', [Homepage::class, 'Entertainment']);
Route::get('/Gym', [Homepage::class, 'Gym']);
Route::get('/Meeting_Events', [Homepage::class, 'Meeting_Events']);
Route::get('/Rooms', [Homepage::class, 'Room']);
Route::get('/Shooting', [Homepage::class, 'Shooting']);
Route::get('/Spa', [Homepage::class, 'Spa']);
Route::get('/Swimmingpool', [Homepage::class, 'Swimmingpool']);
Route::get('/Careers', [Homepage::class, 'Career']);
Route::get('/Wellness', [Homepage::class, 'Wellness']);