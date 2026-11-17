<?php

return [
    'page' => [
        'title' => 'Verzeichnis personenbezogener Informationen',
        'navigation_label' => 'Personenbezogene Informationen',
    ],

    'fields' => [
        'column' => 'Spalte',
        'category' => 'Kategorie',
        'pi_category' => 'CCPA-Kategorie',
        'purpose' => 'Zweck',
        'sold_shared' => 'Verkauft oder geteilt',
        'retention' => 'Aufbewahrung',
        'anonymize' => 'De-Identifizierung',
    ],

    'category' => [
        'personal' => 'Personenbezogen',
        'sensitive' => 'Sensibel',
    ],

    'pi_category' => [
        'identifiers' => 'Kennungen',
        'customer_records' => 'Kundendatensätze',
        'protected_classifications' => 'Geschützte Merkmale',
        'commercial' => 'Kommerzielle Informationen',
        'biometric' => 'Biometrische Informationen',
        'internet_activity' => 'Internet- oder Netzwerkaktivität',
        'geolocation' => 'Standortdaten',
        'sensory' => 'Sensorische Daten',
        'professional' => 'Berufliche oder beschäftigungsbezogene Informationen',
        'education' => 'Bildungsinformationen',
        'inferences' => 'Rückschlüsse',
    ],

    'anonymize' => [
        'nullify' => 'Leeren',
        'hash' => 'Hash',
        'mask' => 'Maskieren',
        'keep' => 'Behalten (gesetzliche Aufbewahrung)',
    ],

    'sold' => 'Verkauft',
    'shared' => 'Geteilt',
    'missing' => 'Nicht angegeben',
    'empty' => 'Keine Models registriert. Fügen Sie Ihre Models zu ccpa.models in config/ccpa.php hinzu.',
];
