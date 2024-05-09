<?php

namespace TomatoPHP\FilamentDeveloperTools;

use Illuminate\Support\ServiceProvider;


class FilamentDeveloperToolsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //Register generate command
        $this->commands([
           \TomatoPHP\FilamentDeveloperTools\Console\FilamentDeveloperToolsInstall::class,
        ]);

        //Register Config file
        $this->mergeConfigFrom(__DIR__.'/../config/filament-developer-tools.php', 'filament-developer-tools');

        //Publish Config
        $this->publishes([
           __DIR__.'/../config/filament-developer-tools.php' => config_path('filament-developer-tools.php'),
        ], 'filament-developer-tools-config');

        //Register Migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        //Publish Migrations
        $this->publishes([
           __DIR__.'/../database/migrations' => database_path('migrations'),
        ], 'filament-developer-tools-migrations');
        //Register views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'filament-developer-tools');

        //Publish Views
        $this->publishes([
           __DIR__.'/../resources/views' => resource_path('views/vendor/filament-developer-tools'),
        ], 'filament-developer-tools-views');

        //Register Langs
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'filament-developer-tools');

        //Publish Lang
        $this->publishes([
           __DIR__.'/../resources/lang' => base_path('lang/vendor/filament-developer-tools'),
        ], 'filament-developer-tools-lang');

        //Register Routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

    }

    public function boot(): void
    {
        //you boot methods here
    }
}
