<?php

return [
    'page' => [
        'title' => '個人情報インベントリ',
        'navigation_label' => '個人情報',
    ],

    'fields' => [
        'column' => '列',
        'category' => 'カテゴリ',
        'pi_category' => 'CCPAカテゴリ',
        'purpose' => '目的',
        'sold_shared' => '販売または共有',
        'retention' => '保持期間',
        'anonymize' => '非識別化',
    ],

    'category' => [
        'personal' => '個人',
        'sensitive' => 'センシティブ',
    ],

    'pi_category' => [
        'identifiers' => '識別子',
        'customer_records' => '顧客記録',
        'protected_classifications' => '保護対象の分類',
        'commercial' => '商業情報',
        'biometric' => '生体情報',
        'internet_activity' => 'インターネットまたはネットワーク上の活動',
        'geolocation' => '位置情報データ',
        'sensory' => '感覚データ',
        'professional' => '職業または雇用に関する情報',
        'education' => '教育情報',
        'inferences' => '推論',
    ],

    'anonymize' => [
        'nullify' => '空にする',
        'hash' => 'ハッシュ',
        'mask' => 'マスク',
        'keep' => '保持（法定保存）',
    ],

    'sold' => '販売',
    'shared' => '共有',
    'missing' => '未申告',
    'empty' => '登録されたモデルがありません。config/ccpa.php の ccpa.models にモデルを追加してください。',
];
