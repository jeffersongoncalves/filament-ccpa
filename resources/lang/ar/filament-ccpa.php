<?php

return [
    'page' => [
        'title' => 'جرد المعلومات الشخصية',
        'navigation_label' => 'المعلومات الشخصية',
    ],

    'fields' => [
        'column' => 'العمود',
        'category' => 'الفئة',
        'pi_category' => 'فئة CCPA',
        'purpose' => 'الغرض',
        'sold_shared' => 'مُباعة أو مُشارَكة',
        'retention' => 'الاحتفاظ',
        'anonymize' => 'إزالة الهوية',
    ],

    'category' => [
        'personal' => 'شخصية',
        'sensitive' => 'حساسة',
    ],

    'pi_category' => [
        'identifiers' => 'المعرّفات',
        'customer_records' => 'سجلات العملاء',
        'protected_classifications' => 'التصنيفات المحمية',
        'commercial' => 'المعلومات التجارية',
        'biometric' => 'المعلومات البيومترية',
        'internet_activity' => 'النشاط على الإنترنت أو الشبكة',
        'geolocation' => 'بيانات الموقع الجغرافي',
        'sensory' => 'البيانات الحسية',
        'professional' => 'المعلومات المهنية أو الوظيفية',
        'education' => 'المعلومات التعليمية',
        'inferences' => 'الاستنتاجات',
    ],

    'anonymize' => [
        'nullify' => 'إفراغ',
        'hash' => 'تجزئة',
        'mask' => 'إخفاء',
        'keep' => 'الإبقاء (احتفاظ قانوني)',
    ],

    'sold' => 'مُباعة',
    'shared' => 'مُشارَكة',
    'missing' => 'غير محدد',
    'empty' => 'لا توجد نماذج مسجلة. أضف نماذجك إلى ccpa.models في config/ccpa.php.',
];
