<?php

return [
    'page' => [
        'title' => 'Inventario delle informazioni personali',
        'navigation_label' => 'Informazioni personali',
    ],

    'fields' => [
        'column' => 'Colonna',
        'category' => 'Categoria',
        'pi_category' => 'Categoria CCPA',
        'purpose' => 'Finalità',
        'sold_shared' => 'Venduta o condivisa',
        'retention' => 'Conservazione',
        'anonymize' => 'De-identificazione',
    ],

    'category' => [
        'personal' => 'Personale',
        'sensitive' => 'Sensibile',
    ],

    'pi_category' => [
        'identifiers' => 'Identificativi',
        'customer_records' => 'Registri dei clienti',
        'protected_classifications' => 'Classificazioni protette',
        'commercial' => 'Informazioni commerciali',
        'biometric' => 'Informazioni biometriche',
        'internet_activity' => 'Attività su internet o in rete',
        'geolocation' => 'Dati di geolocalizzazione',
        'sensory' => 'Dati sensoriali',
        'professional' => 'Informazioni professionali o lavorative',
        'education' => 'Informazioni sull\'istruzione',
        'inferences' => 'Inferenze',
    ],

    'anonymize' => [
        'nullify' => 'Svuota',
        'hash' => 'Hash',
        'mask' => 'Maschera',
        'keep' => 'Conserva (obbligo legale)',
    ],

    'sold' => 'Venduta',
    'shared' => 'Condivisa',
    'missing' => 'Non dichiarata',
    'empty' => 'Nessun modello registrato. Aggiungi i tuoi modelli a ccpa.models in config/ccpa.php.',
];
