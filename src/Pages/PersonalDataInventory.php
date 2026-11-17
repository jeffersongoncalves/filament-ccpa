<?php

namespace JeffersonGoncalves\Filament\Ccpa\Pages;

use BackedEnum;
use Filament\Pages\Page;
use Filament\Panel;
use JeffersonGoncalves\Ccpa\Ccpa;
use JeffersonGoncalves\Filament\Ccpa\CcpaPlugin;

/**
 * Read-only view of laravel-ccpa's inventory: one card per model, one row per declared column.
 */
class PersonalDataInventory extends Page
{
    protected string $view = 'filament-ccpa::pages.inventory';

    /**
     * @return array<class-string, list<array<string, mixed>>>
     */
    public function getInventory(): array
    {
        $models = [];

        foreach (app(Ccpa::class)->inventory() as $row) {
            $models[$row['model']][] = $row;
        }

        return $models;
    }

    public static function label(string $group, ?string $value): ?string
    {
        return $value === null ? null : __("filament-ccpa::filament-ccpa.{$group}.{$value}");
    }

    public function getTitle(): string
    {
        return __('filament-ccpa::filament-ccpa.page.title');
    }

    public static function getNavigationLabel(): string
    {
        return __('filament-ccpa::filament-ccpa.page.navigation_label');
    }

    public static function getNavigationGroup(): ?string
    {
        return CcpaPlugin::get()->getNavigationGroup();
    }

    public static function getNavigationSort(): ?int
    {
        return CcpaPlugin::get()->getNavigationSort();
    }

    public static function getNavigationIcon(): string|BackedEnum|null
    {
        return CcpaPlugin::get()->getNavigationIcon();
    }

    public static function getSlug(?Panel $panel = null): string
    {
        return CcpaPlugin::get()->getSlug();
    }
}
