<?php

return [
    'page' => [
        'title' => 'Kişisel bilgi envanteri',
        'navigation_label' => 'Kişisel bilgiler',
    ],

    'fields' => [
        'column' => 'Sütun',
        'category' => 'Kategori',
        'pi_category' => 'CCPA kategorisi',
        'purpose' => 'Amaç',
        'sold_shared' => 'Satılan veya paylaşılan',
        'retention' => 'Saklama',
        'anonymize' => 'Kimliksizleştirme',
    ],

    'category' => [
        'personal' => 'Kişisel',
        'sensitive' => 'Hassas',
    ],

    'pi_category' => [
        'identifiers' => 'Tanımlayıcılar',
        'customer_records' => 'Müşteri kayıtları',
        'protected_classifications' => 'Korunan sınıflandırmalar',
        'commercial' => 'Ticari bilgiler',
        'biometric' => 'Biyometrik bilgiler',
        'internet_activity' => 'İnternet veya ağ etkinliği',
        'geolocation' => 'Konum verileri',
        'sensory' => 'Duyusal veriler',
        'professional' => 'Mesleki veya istihdam bilgileri',
        'education' => 'Eğitim bilgileri',
        'inferences' => 'Çıkarımlar',
    ],

    'anonymize' => [
        'nullify' => 'Boşalt',
        'hash' => 'Hash',
        'mask' => 'Maskele',
        'keep' => 'Koru (yasal saklama)',
    ],

    'sold' => 'Satılıyor',
    'shared' => 'Paylaşılıyor',
    'missing' => 'Belirtilmemiş',
    'empty' => 'Kayıtlı model yok. Modellerinizi config/ccpa.php içindeki ccpa.models\'e ekleyin.',
];
