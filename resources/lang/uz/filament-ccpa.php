<?php

return [
    'page' => [
        'title' => 'Shaxsiy maʼlumotlar roʻyxati',
        'navigation_label' => 'Shaxsiy maʼlumotlar',
    ],

    'fields' => [
        'column' => 'Ustun',
        'category' => 'Toifa',
        'pi_category' => 'CCPA toifasi',
        'purpose' => 'Maqsad',
        'sold_shared' => 'Sotiladi yoki ulashiladi',
        'retention' => 'Saqlash',
        'anonymize' => 'Shaxssizlashtirish',
    ],

    'category' => [
        'personal' => 'Shaxsiy',
        'sensitive' => 'Nozik',
    ],

    'pi_category' => [
        'identifiers' => 'Identifikatorlar',
        'customer_records' => 'Mijozlar yozuvlari',
        'protected_classifications' => 'Himoyalangan tasniflar',
        'commercial' => 'Tijorat maʼlumotlari',
        'biometric' => 'Biometrik maʼlumotlar',
        'internet_activity' => 'Internet yoki tarmoqdagi faoliyat',
        'geolocation' => 'Geolokatsiya maʼlumotlari',
        'sensory' => 'Sensor maʼlumotlari',
        'professional' => 'Kasbiy yoki mehnat maʼlumotlari',
        'education' => 'Taʼlim maʼlumotlari',
        'inferences' => 'Xulosalar',
    ],

    'anonymize' => [
        'nullify' => 'Bo\'shatish',
        'hash' => 'Xesh',
        'mask' => 'Niqoblash',
        'keep' => 'Saqlab qolish (qonuniy saqlash)',
    ],

    'sold' => 'Sotiladi',
    'shared' => 'Ulashiladi',
    'missing' => 'Ko\'rsatilmagan',
    'empty' => 'Roʻyxatdan oʻtgan model yoʻq. Modellaringizni config/ccpa.php dagi ccpa.models ga qoʻshing.',
];
