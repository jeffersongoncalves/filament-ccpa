<?php

return [
    'page' => [
        'title' => 'Personal information inventory',
        'navigation_label' => 'Personal information',
    ],

    'fields' => [
        'column' => 'Column',
        'category' => 'Category',
        'pi_category' => 'CCPA category',
        'purpose' => 'Purpose',
        'sold_shared' => 'Sold or shared',
        'retention' => 'Retention',
        'anonymize' => 'Deidentification',
    ],

    'category' => [
        'personal' => 'Personal',
        'sensitive' => 'Sensitive',
    ],

    'pi_category' => [
        'identifiers' => 'Identifiers',
        'customer_records' => 'Customer records',
        'protected_classifications' => 'Protected classifications',
        'commercial' => 'Commercial information',
        'biometric' => 'Biometric information',
        'internet_activity' => 'Internet or network activity',
        'geolocation' => 'Geolocation data',
        'sensory' => 'Sensory data',
        'professional' => 'Professional or employment information',
        'education' => 'Education information',
        'inferences' => 'Inferences',
    ],

    'anonymize' => [
        'nullify' => 'Nullify',
        'hash' => 'Hash',
        'mask' => 'Mask',
        'keep' => 'Keep (legal retention)',
    ],

    'sold' => 'Sold',
    'shared' => 'Shared',
    'missing' => 'Not declared',
    'empty' => 'No models registered. Add your models to ccpa.models in config/ccpa.php.',
];
