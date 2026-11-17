<?php

return [
    'page' => [
        'title' => 'فهرست اطلاعات شخصی',
        'navigation_label' => 'اطلاعات شخصی',
    ],

    'fields' => [
        'column' => 'ستون',
        'category' => 'دسته',
        'pi_category' => 'دسته CCPA',
        'purpose' => 'هدف',
        'sold_shared' => 'فروخته یا به اشتراک گذاشته‌شده',
        'retention' => 'نگهداری',
        'anonymize' => 'حذف شناسه',
    ],

    'category' => [
        'personal' => 'شخصی',
        'sensitive' => 'حساس',
    ],

    'pi_category' => [
        'identifiers' => 'شناسه‌ها',
        'customer_records' => 'سوابق مشتریان',
        'protected_classifications' => 'طبقه‌بندی‌های حمایت‌شده',
        'commercial' => 'اطلاعات تجاری',
        'biometric' => 'اطلاعات بیومتریک',
        'internet_activity' => 'فعالیت اینترنتی یا شبکه',
        'geolocation' => 'داده‌های موقعیت جغرافیایی',
        'sensory' => 'داده‌های حسی',
        'professional' => 'اطلاعات حرفه‌ای یا شغلی',
        'education' => 'اطلاعات تحصیلی',
        'inferences' => 'استنباط‌ها',
    ],

    'anonymize' => [
        'nullify' => 'خالی کردن',
        'hash' => 'هش',
        'mask' => 'پوشاندن',
        'keep' => 'نگه‌داشتن (نگهداری قانونی)',
    ],

    'sold' => 'فروخته‌شده',
    'shared' => 'به اشتراک گذاشته‌شده',
    'missing' => 'اعلام نشده',
    'empty' => 'هیچ مدلی ثبت نشده است. مدل‌های خود را به ccpa.models در config/ccpa.php اضافه کنید.',
];
