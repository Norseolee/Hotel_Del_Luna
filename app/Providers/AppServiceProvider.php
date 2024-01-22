<?php

namespace App\Providers;

use App\Models\Restaurant;
use App\Models\RoomType;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $view->with('authUser', Auth::user());
        });

        // for Footer
        view()->share('resto_footer', Restaurant::paginate(5));
        view()->share('room_footer', RoomType::paginate(5));

        Schema::defaultStringLength(191);
    }
}
