<?php

return [
    'page' => [
        'title' => 'Реестр персональной информации',
        'navigation_label' => 'Персональная информация',
    ],

    'fields' => [
        'column' => 'Столбец',
        'category' => 'Категория',
        'pi_category' => 'Категория CCPA',
        'purpose' => 'Цель',
        'sold_shared' => 'Продаётся или передаётся',
        'retention' => 'Хранение',
        'anonymize' => 'Деидентификация',
    ],

    'category' => [
        'personal' => 'Персональные',
        'sensitive' => 'Чувствительная',
    ],

    'pi_category' => [
        'identifiers' => 'Идентификаторы',
        'customer_records' => 'Записи о клиентах',
        'protected_classifications' => 'Защищённые категории',
        'commercial' => 'Коммерческая информация',
        'biometric' => 'Биометрическая информация',
        'internet_activity' => 'Активность в интернете или сети',
        'geolocation' => 'Данные геолокации',
        'sensory' => 'Сенсорные данные',
        'professional' => 'Профессиональная или трудовая информация',
        'education' => 'Информация об образовании',
        'inferences' => 'Выводы',
    ],

    'anonymize' => [
        'nullify' => 'Очистить',
        'hash' => 'Хеш',
        'mask' => 'Маскировать',
        'keep' => 'Сохранить (обязательное хранение)',
    ],

    'sold' => 'Продаётся',
    'shared' => 'Передаётся',
    'missing' => 'Не указано',
    'empty' => 'Нет зарегистрированных моделей. Добавьте свои модели в ccpa.models в config/ccpa.php.',
];
