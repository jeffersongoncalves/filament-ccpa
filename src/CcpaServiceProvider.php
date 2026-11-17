<?php

namespace JeffersonGoncalves\Filament\Ccpa;

use JeffersonGoncalves\FilamentPluginCore\BasePackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class CcpaServiceProvider extends BasePackageServiceProvider
{
    public static string $name = 'filament-ccpa';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasViews()
            ->hasTranslations();
    }
}
