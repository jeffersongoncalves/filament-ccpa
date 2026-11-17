<?php

return [
    'page' => [
        'title' => 'Şəxsi məlumatların inventarı',
        'navigation_label' => 'Şəxsi məlumatlar',
    ],

    'fields' => [
        'column' => 'Sütun',
        'category' => 'Kateqoriya',
        'pi_category' => 'CCPA kateqoriyası',
        'purpose' => 'Məqsəd',
        'sold_shared' => 'Satılır və ya paylaşılır',
        'retention' => 'Saxlama',
        'anonymize' => 'Deidentifikasiya',
    ],

    'category' => [
        'personal' => 'Şəxsi',
        'sensitive' => 'Həssas',
    ],

    'pi_category' => [
        'identifiers' => 'İdentifikatorlar',
        'customer_records' => 'Müştəri qeydləri',
        'protected_classifications' => 'Qorunan təsnifatlar',
        'commercial' => 'Kommersiya məlumatları',
        'biometric' => 'Biometrik məlumatlar',
        'internet_activity' => 'İnternet və ya şəbəkə fəaliyyəti',
        'geolocation' => 'Geolokasiya məlumatları',
        'sensory' => 'Sensor məlumatları',
        'professional' => 'Peşə və ya məşğulluq məlumatları',
        'education' => 'Təhsil məlumatları',
        'inferences' => 'Nəticələr',
    ],

    'anonymize' => [
        'nullify' => 'Boşalt',
        'hash' => 'Hash',
        'mask' => 'Maskala',
        'keep' => 'Saxla (hüquqi saxlama)',
    ],

    'sold' => 'Satılır',
    'shared' => 'Paylaşılır',
    'missing' => 'Göstərilməyib',
    'empty' => 'Qeydə alınmış model yoxdur. Modellərinizi config/ccpa.php faylında ccpa.models-ə əlavə edin.',
];
