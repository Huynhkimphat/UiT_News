<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
 use App\Models\Type;
=======
// use App\Models\Type;
>>>>>>> master
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;

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
        Schema::defaultStringLength(191);
<<<<<<< HEAD
        $Types = Type::all();
        View::share('Types', $Types);
=======
        // $Types = Type::all();
        // View::share('Types', $Types);
>>>>>>> master
    }
}
