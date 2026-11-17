<?php

return [
    'page' => [
        'title' => 'Реєстр персональної інформації',
        'navigation_label' => 'Персональна інформація',
    ],

    'fields' => [
        'column' => 'Стовпець',
        'category' => 'Категорія',
        'pi_category' => 'Категорія CCPA',
        'purpose' => 'Мета',
        'sold_shared' => 'Продається або передається',
        'retention' => 'Зберігання',
        'anonymize' => 'Деідентифікація',
    ],

    'category' => [
        'personal' => 'Персональні',
        'sensitive' => 'Чутлива',
    ],

    'pi_category' => [
        'identifiers' => 'Ідентифікатори',
        'customer_records' => 'Записи про клієнтів',
        'protected_classifications' => 'Захищені категорії',
        'commercial' => 'Комерційна інформація',
        'biometric' => 'Біометрична інформація',
        'internet_activity' => 'Активність в інтернеті або мережі',
        'geolocation' => 'Дані геолокації',
        'sensory' => 'Сенсорні дані',
        'professional' => 'Професійна або трудова інформація',
        'education' => 'Інформація про освіту',
        'inferences' => 'Висновки',
    ],

    'anonymize' => [
        'nullify' => 'Очистити',
        'hash' => 'Хеш',
        'mask' => 'Маскувати',
        'keep' => 'Зберегти (обов\'язкове зберігання)',
    ],

    'sold' => 'Продається',
    'shared' => 'Передається',
    'missing' => 'Не вказано',
    'empty' => 'Немає зареєстрованих моделей. Додайте свої моделі до ccpa.models у config/ccpa.php.',
];
