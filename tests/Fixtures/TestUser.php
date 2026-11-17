<?php

namespace JeffersonGoncalves\Filament\Ccpa\Tests\Fixtures;

use Illuminate\Foundation\Auth\User as Authenticatable;
use JeffersonGoncalves\Ccpa\Attributes\PersonalData;
use JeffersonGoncalves\Ccpa\Concerns\InteractsWithPersonalData;
use JeffersonGoncalves\Ccpa\Contracts\HasPersonalData;
use JeffersonGoncalves\Ccpa\Enums\AnonymizeStrategy;
use JeffersonGoncalves\Ccpa\Enums\DataCategory;
use JeffersonGoncalves\Ccpa\Enums\PiCategory;

#[PersonalData('email', purpose: 'Account login', piCategory: PiCategory::Identifiers, shared: true, retention: '5 years', anonymize: AnonymizeStrategy::Hash)]
#[PersonalData('health_notes', category: DataCategory::Sensitive, purpose: 'Accessibility support')]
class TestUser extends Authenticatable implements HasPersonalData
{
    use InteractsWithPersonalData;

    protected $table = 'users';

    protected $guarded = [];

    public $timestamps = false;
}
