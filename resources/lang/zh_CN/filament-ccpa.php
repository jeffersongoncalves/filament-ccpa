<?php

return [
    'page' => [
        'title' => '个人信息清单',
        'navigation_label' => '个人信息',
    ],

    'fields' => [
        'column' => '列',
        'category' => '类别',
        'pi_category' => 'CCPA 类别',
        'purpose' => '目的',
        'sold_shared' => '出售或共享',
        'retention' => '保留期限',
        'anonymize' => '去标识化',
    ],

    'category' => [
        'personal' => '个人',
        'sensitive' => '敏感',
    ],

    'pi_category' => [
        'identifiers' => '标识符',
        'customer_records' => '客户记录',
        'protected_classifications' => '受保护的分类',
        'commercial' => '商业信息',
        'biometric' => '生物识别信息',
        'internet_activity' => '互联网或网络活动',
        'geolocation' => '地理位置数据',
        'sensory' => '感官数据',
        'professional' => '职业或就业信息',
        'education' => '教育信息',
        'inferences' => '推断',
    ],

    'anonymize' => [
        'nullify' => '置空',
        'hash' => '哈希',
        'mask' => '掩码',
        'keep' => '保留（法定留存）',
    ],

    'sold' => '出售',
    'shared' => '共享',
    'missing' => '未声明',
    'empty' => '尚未注册模型。请将你的模型添加到 config/ccpa.php 的 ccpa.models 中。',
];
