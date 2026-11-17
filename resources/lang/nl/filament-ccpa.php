<?php

return [
    'page' => [
        'title' => 'Inventaris van persoonsgegevens',
        'navigation_label' => 'Persoonsgegevens',
    ],

    'fields' => [
        'column' => 'Kolom',
        'category' => 'Categorie',
        'pi_category' => 'CCPA-categorie',
        'purpose' => 'Doel',
        'sold_shared' => 'Verkocht of gedeeld',
        'retention' => 'Bewaring',
        'anonymize' => 'De-identificatie',
    ],

    'category' => [
        'personal' => 'Persoonlijk',
        'sensitive' => 'Gevoelig',
    ],

    'pi_category' => [
        'identifiers' => 'Identificatoren',
        'customer_records' => 'Klantgegevens',
        'protected_classifications' => 'Beschermde kenmerken',
        'commercial' => 'Commerciële informatie',
        'biometric' => 'Biometrische informatie',
        'internet_activity' => 'Internet- of netwerkactiviteit',
        'geolocation' => 'Locatiegegevens',
        'sensory' => 'Zintuiglijke gegevens',
        'professional' => 'Beroeps- of arbeidsgegevens',
        'education' => 'Onderwijsgegevens',
        'inferences' => 'Afleidingen',
    ],

    'anonymize' => [
        'nullify' => 'Leegmaken',
        'hash' => 'Hash',
        'mask' => 'Maskeren',
        'keep' => 'Behouden (wettelijke bewaring)',
    ],

    'sold' => 'Verkocht',
    'shared' => 'Gedeeld',
    'missing' => 'Niet opgegeven',
    'empty' => 'Geen modellen geregistreerd. Voeg je modellen toe aan ccpa.models in config/ccpa.php.',
];
