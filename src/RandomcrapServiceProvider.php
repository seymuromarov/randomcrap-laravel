<?php

namespace Seymuromarov\Randomcrap;

use Illuminate\Support\ServiceProvider;

class RandomcrapServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('seymuromarov-randomcrap', function () {
            return new RandomcrapGenerator();
        });
    }
}
