<?php

return [
    'page' => [
        'title' => 'व्यक्तिगत जानकारी की सूची',
        'navigation_label' => 'व्यक्तिगत जानकारी',
    ],

    'fields' => [
        'column' => 'कॉलम',
        'category' => 'श्रेणी',
        'pi_category' => 'CCPA श्रेणी',
        'purpose' => 'उद्देश्य',
        'sold_shared' => 'बेची या साझा की गई',
        'retention' => 'प्रतिधारण',
        'anonymize' => 'पहचान हटाना',
    ],

    'category' => [
        'personal' => 'व्यक्तिगत',
        'sensitive' => 'संवेदनशील',
    ],

    'pi_category' => [
        'identifiers' => 'पहचानकर्ता',
        'customer_records' => 'ग्राहक रिकॉर्ड',
        'protected_classifications' => 'संरक्षित वर्गीकरण',
        'commercial' => 'वाणिज्यिक जानकारी',
        'biometric' => 'बायोमेट्रिक जानकारी',
        'internet_activity' => 'इंटरनेट या नेटवर्क गतिविधि',
        'geolocation' => 'भू-स्थान डेटा',
        'sensory' => 'संवेदी डेटा',
        'professional' => 'पेशेवर या रोज़गार संबंधी जानकारी',
        'education' => 'शिक्षा संबंधी जानकारी',
        'inferences' => 'अनुमान',
    ],

    'anonymize' => [
        'nullify' => 'खाली करें',
        'hash' => 'हैश',
        'mask' => 'मास्क करें',
        'keep' => 'रखें (कानूनी प्रतिधारण)',
    ],

    'sold' => 'बेची गई',
    'shared' => 'साझा की गई',
    'missing' => 'घोषित नहीं',
    'empty' => 'कोई मॉडल पंजीकृत नहीं है। अपने मॉडल config/ccpa.php में ccpa.models में जोड़ें।',
];
