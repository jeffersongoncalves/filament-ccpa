<?php

return [
    'page' => [
        'title' => 'Inventario de información personal',
        'navigation_label' => 'Información personal',
    ],

    'fields' => [
        'column' => 'Columna',
        'category' => 'Categoría',
        'pi_category' => 'Categoría CCPA',
        'purpose' => 'Finalidad',
        'sold_shared' => 'Vendida o compartida',
        'retention' => 'Retención',
        'anonymize' => 'Desidentificación',
    ],

    'category' => [
        'personal' => 'Personal',
        'sensitive' => 'Sensible',
    ],

    'pi_category' => [
        'identifiers' => 'Identificadores',
        'customer_records' => 'Registros de clientes',
        'protected_classifications' => 'Clasificaciones protegidas',
        'commercial' => 'Información comercial',
        'biometric' => 'Información biométrica',
        'internet_activity' => 'Actividad en internet o en la red',
        'geolocation' => 'Datos de geolocalización',
        'sensory' => 'Datos sensoriales',
        'professional' => 'Información profesional o laboral',
        'education' => 'Información educativa',
        'inferences' => 'Inferencias',
    ],

    'anonymize' => [
        'nullify' => 'Anular',
        'hash' => 'Hash',
        'mask' => 'Enmascarar',
        'keep' => 'Conservar (guarda legal)',
    ],

    'sold' => 'Vendida',
    'shared' => 'Compartida',
    'missing' => 'No declarada',
    'empty' => 'No hay modelos registrados. Añade tus modelos a ccpa.models en config/ccpa.php.',
];
