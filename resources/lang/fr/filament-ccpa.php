<?php

return [
    'page' => [
        'title' => 'Inventaire des informations personnelles',
        'navigation_label' => 'Informations personnelles',
    ],

    'fields' => [
        'column' => 'Colonne',
        'category' => 'Catégorie',
        'pi_category' => 'Catégorie CCPA',
        'purpose' => 'Finalité',
        'sold_shared' => 'Vendue ou partagée',
        'retention' => 'Conservation',
        'anonymize' => 'Désidentification',
    ],

    'category' => [
        'personal' => 'Personnelle',
        'sensitive' => 'Sensible',
    ],

    'pi_category' => [
        'identifiers' => 'Identifiants',
        'customer_records' => 'Dossiers clients',
        'protected_classifications' => 'Classifications protégées',
        'commercial' => 'Informations commerciales',
        'biometric' => 'Informations biométriques',
        'internet_activity' => 'Activité sur internet ou le réseau',
        'geolocation' => 'Données de géolocalisation',
        'sensory' => 'Données sensorielles',
        'professional' => 'Informations professionnelles ou liées à l\'emploi',
        'education' => 'Informations sur l\'éducation',
        'inferences' => 'Inférences',
    ],

    'anonymize' => [
        'nullify' => 'Vider',
        'hash' => 'Hachage',
        'mask' => 'Masquer',
        'keep' => 'Conserver (obligation légale)',
    ],

    'sold' => 'Vendue',
    'shared' => 'Partagée',
    'missing' => 'Non déclarée',
    'empty' => 'Aucun modèle enregistré. Ajoutez vos modèles à ccpa.models dans config/ccpa.php.',
];
