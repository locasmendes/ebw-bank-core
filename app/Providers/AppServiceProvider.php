<?php

namespace App\Providers;

use App\Models\General;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        Http::macro('ebw_crm', function () {
            return Http::asForm()->withToken(\config('ebw-crm.auth_token'))->baseUrl(\config('ebw-crm.base_url'));
        });

        $general = Cache::rememberForever('general', function () {
            return General::first();
        });

        View::share('general', $general);
    }
}
