<?php

namespace JeffersonGoncalves\Filament\Ccpa;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CcpaServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-ccpa')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations();
    }
}
