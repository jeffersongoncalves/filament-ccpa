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
        'sold_shared' => 'Vendida ou compartilhada',
        'retention' => 'Retenção',
        'anonymize' => 'Desidentificação',
    ],

    'category' => [
        'personal' => 'Pessoal',
        'sensitive' => 'Sensível',
    ],

    'pi_category' => [
        'identifiers' => 'Identificadores',
        'customer_records' => 'Registros de clientes',
        'protected_classifications' => 'Classificações protegidas',
        'commercial' => 'Informações comerciais',
        'biometric' => 'Informações biométricas',
        'internet_activity' => 'Atividade na internet ou em rede',
        'geolocation' => 'Dados de geolocalização',
        'sensory' => 'Dados sensoriais',
        'professional' => 'Informações profissionais ou de emprego',
        'education' => 'Informações educacionais',
        'inferences' => 'Inferências',
    ],

    'anonymize' => [
        'nullify' => 'Anular',
        'hash' => 'Hash',
        'mask' => 'Mascarar',
        'keep' => 'Manter (guarda legal)',
    ],

    'sold' => 'Vendida',
    'shared' => 'Compartilhada',
    'missing' => 'Não declarada',
    'empty' => 'Nenhum modelo registrado. Adicione seus modelos em ccpa.models no config/ccpa.php.',
];
