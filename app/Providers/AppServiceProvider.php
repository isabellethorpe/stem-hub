<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Allowing the mass assigment therefore no longer require the fillable, found commented out in Listing.php
        Model::unguard();

        // can style pagination from vendor list here
        // to do this pick from a drop down list that you can find
        // entering php artisan vendor:publish in terminal
        //Paginator::useBootstrapFive();
    }
}
