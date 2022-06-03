<?php

namespace App\Providers;

use App\Models\Creator;
use App\Observers\CreatorObserver;
use Illuminate\Support\ServiceProvider;

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
        Creator::observe(CreatorObserver::class);
    }
}
