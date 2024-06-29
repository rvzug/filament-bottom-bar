<?php

namespace Rvzug\FilamentBottomBar;

use Rvzug\FilamentBottomBar\Commands\FilamentBottomBarCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
