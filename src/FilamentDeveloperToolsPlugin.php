<?php

namespace TomatoPHP\FilamentDeveloperTools;

use Filament\Contracts\Plugin;
use Filament\Panel;


class FilamentDeveloperToolsPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-developer-tools';
    }

    public function register(Panel $panel): void
    {
        //
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): static
    {
        return new static();
    }
}
