<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\URL;
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
        Filament::registerRenderHook(
            'head.start',
            fn (): string => Blade::render("@wireUiScripts(['nonce' => 'csp-token']) "),
        );
        Filament::registerRenderHook(
            'body.start',
            fn (): string => Blade::render("<x-wireui-notifications />"),
        );

        Filament::serving(function () {
            Filament::registerTheme(mix('css/app.css'));
        });

        Filament::registerNavigationGroups([
            'Shop',
            'Blog',
        ]);
    }
}
