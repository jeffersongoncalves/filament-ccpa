<?php

return [
    'page' => [
        'title' => 'Inwentarz danych osobowych',
        'navigation_label' => 'Dane osobowe',
    ],

    'fields' => [
        'column' => 'Kolumna',
        'category' => 'Kategoria',
        'pi_category' => 'Kategoria CCPA',
        'purpose' => 'Cel',
        'sold_shared' => 'Sprzedawane lub udostępniane',
        'retention' => 'Retencja',
        'anonymize' => 'Deidentyfikacja',
    ],

    'category' => [
        'personal' => 'Osobowe',
        'sensitive' => 'Wrażliwe',
    ],

    'pi_category' => [
        'identifiers' => 'Identyfikatory',
        'customer_records' => 'Dokumentacja klientów',
        'protected_classifications' => 'Cechy chronione',
        'commercial' => 'Informacje handlowe',
        'biometric' => 'Informacje biometryczne',
        'internet_activity' => 'Aktywność w internecie lub sieci',
        'geolocation' => 'Dane geolokalizacyjne',
        'sensory' => 'Dane sensoryczne',
        'professional' => 'Informacje zawodowe lub dotyczące zatrudnienia',
        'education' => 'Informacje o wykształceniu',
        'inferences' => 'Wnioski',
    ],

    'anonymize' => [
        'nullify' => 'Wyczyść',
        'hash' => 'Hash',
        'mask' => 'Maskuj',
        'keep' => 'Zachowaj (obowiązek prawny)',
    ],

    'sold' => 'Sprzedawane',
    'shared' => 'Udostępniane',
    'missing' => 'Nie zadeklarowano',
    'empty' => 'Brak zarejestrowanych modeli. Dodaj swoje modele do ccpa.models w config/ccpa.php.',
];
