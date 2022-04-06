<?php

namespace App\Providers;

use App\Models\General;
use App\Models\Page;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

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
        function text_to_html($string = '')
        {
            if ($string === '') {
                return '';
            }
            if (Str::containsAll($string, ['**', '**'])) {
                $count = Str::substrCount($string, '**');


                for ($i = 0; $i < $count / 2; $i++) {
                    $text = Str::replaceFirst('**', '<b>', $string);
                    $text = Str::replaceFirst('**', '</b>', $text);
                }
                return $text;
            }
        }
        Http::macro('ebw_crm', function () {
            return Http::asForm()->withToken(\config('ebw-crm.auth_token'))->baseUrl(\config('ebw-crm.base_url'));
        });

        $general = Cache::rememberForever('general', function () {
            return General::first();
        });
        $pages = Cache::rememberForever('pages', function () {
            return Page::all();
        });

        $homeSettings = $pages->first(function ($value) {
            return $value->slug === 'home';
        });

        $aEbw = $pages->first(function ($value) {
            return $value->slug === 'a-ebw';
        });

        $sejaInvestidor = $pages->first(function ($value) {
            return $value->slug === 'seja-um-investidor';
        });

        // dd($sejaInvestidor);

        View::share('general', $general);
        View::share('homeSettings', $homeSettings?->content[0]);
        View::share('aEbwSettings', $aEbw?->content[0]);
        View::share('sejaInvestidorSettings', $sejaInvestidor?->content[0]);
    }
}
