<?php

return [
    'page' => [
        'title' => 'Inventário de informações pessoais',
        'navigation_label' => 'Informações pessoais',
    ],

    'fields' => [
        'column' => 'Coluna',
        'category' => 'Categoria',
        'pi_category' => 'Categoria CCPA',
        'purpose' => 'Finalidade',
        'sold_shared' => 'Vendida ou partilhada',
        'retention' => 'Retenção',
        'anonymize' => 'Desidentificação',
    ],

    'category' => [
        'personal' => 'Pessoal',
        'sensitive' => 'Sensível',
    ],

    'pi_category' => [
        'identifiers' => 'Identificadores',
        'customer_records' => 'Registos de clientes',
        'protected_classifications' => 'Classificações protegidas',
        'commercial' => 'Informações comerciais',
        'biometric' => 'Informações biométricas',
        'internet_activity' => 'Atividade na internet ou em rede',
        'geolocation' => 'Dados de geolocalização',
        'sensory' => 'Dados sensoriais',
        'professional' => 'Informações profissionais ou de emprego',
        'education' => 'Informações educativas',
        'inferences' => 'Inferências',
    ],

    'anonymize' => [
        'nullify' => 'Anular',
        'hash' => 'Hash',
        'mask' => 'Mascarar',
        'keep' => 'Manter (conservação legal)',
    ],

    'sold' => 'Vendida',
    'shared' => 'Partilhada',
    'missing' => 'Não declarado',
    'empty' => 'Nenhum modelo registado. Adicione os seus modelos a ccpa.models em config/ccpa.php.',
];
