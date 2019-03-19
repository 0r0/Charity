<?php

namespace App\Providers;

use App\Charity;
//use Torann\GeoIP\GeoIP;
use Request;
use View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $charitiesList = Charity::all();
        Schema::defaultStringLength(191);
        $ip = Request::ip();
        $location = geoip()->getLocation($ip);
        $country = $location->getAttribute('iso_code');
        $city=$location->getAttribute('city');
        View::share('charitiesList', $charitiesList);
        View::share(['country'=>$country,'city'=>$city]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }
}
