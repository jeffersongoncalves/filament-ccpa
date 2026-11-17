<?php

use JeffersonGoncalves\Filament\Ccpa\CcpaPlugin;
use JeffersonGoncalves\Filament\Ccpa\Pages\PersonalDataInventory;
use JeffersonGoncalves\Filament\Ccpa\Tests\Fixtures\TestUser;
use Livewire\Livewire;

beforeEach(function () {
    $this->actingAs(TestUser::create(['name' => 'Admin', 'email' => 'admin@example.com']));
});

it('lists every declared column grouped by model', function () {
    Livewire::test(PersonalDataInventory::class)
        ->assertSuccessful()
        ->assertSee('Personal information inventory')
        ->assertSee('TestUser')
        ->assertSee('email')
        ->assertSee('Account login')
        ->assertSee('Identifiers')
        ->assertSee('5 years')
        ->assertSee('Hash')
        ->assertSee('Sensitive')
        ->assertSee('Shared');
});

it('flags columns without a CCPA category', function () {
    Livewire::test(PersonalDataInventory::class)
        ->assertSee('Not declared');
});

it('explains how to register models when the inventory is empty', function () {
    config()->set('ccpa.models', []);

    Livewire::test(PersonalDataInventory::class)
        ->assertSee('No models registered');
});

it('applies the fluent plugin options', function () {
    CcpaPlugin::get()->navigationGroup('CCPA')->navigationSort(3)->slug('inventory');

    expect(PersonalDataInventory::getNavigationGroup())->toBe('CCPA')
        ->and(PersonalDataInventory::getNavigationSort())->toBe(3)
        ->and(PersonalDataInventory::getSlug())->toBe('inventory');
});
