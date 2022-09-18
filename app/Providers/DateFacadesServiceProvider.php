<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\DateHelper\DateHelper;

class DateFacadesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('date',function(){
            return new DateHelper();
        });
    }
}
