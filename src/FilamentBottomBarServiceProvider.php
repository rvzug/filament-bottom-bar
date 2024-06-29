<?php

namespace Rvzug\FilamentBottomBar;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Rvzug\FilamentBottomBar\Commands\FilamentBottomBarCommand;

class FilamentBottomBarServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-bottom-bar')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filament-bottom-bar_table')
            ->hasCommand(FilamentBottomBarCommand::class);
    }
}
