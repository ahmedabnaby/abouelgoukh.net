<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Categories;

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
    {   $categories = Categories::all();
        \View::share('categories', $categories);
    }
}
