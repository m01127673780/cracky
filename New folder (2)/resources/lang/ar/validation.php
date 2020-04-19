<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */

    'accepted'             => 'يجب قبول الحقل :attribute',
    'active_url'           => 'الحقل :attribute لا يُمثّل رابطًا صحيحًا',
    'after'                => 'يجب على الحقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',
    'after_or_equal'       => 'الحقل :attribute يجب أن يكون تاريخاً لاحقاً أو مطابقاً للتاريخ :date.',
    'alpha'                => 'يجب أن لا يحتوي الحقل :attribute سوى على حروف',
    'alpha_dash'           => 'يجب أن لا يحتوي الحقل :attribute على حروف، أرقام ومطّات.',
    'alpha_num'            => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',
    'array'                => 'يجب أن يكون الحقل :attribute ًمصفوفة',
    'before'               => 'يجب على الحقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',
    'before_or_equal'      => 'الحقل :attribute يجب أن يكون تاريخا سابقا أو مطابقا للتاريخ :date',
    'between'              => [
        'numeric' => 'يجب أن تكون قيمة :attribute بين :min و :max.',
        'file'    => 'يجب أن يكون حجم الملف :attribute بين :min و :max كيلوبايت.',
        'string'  => 'يجب أن يكون عدد حروف النّص :attribute بين :min و :max',
        'array'   => 'يجب أن يحتوي :attribute على عدد من العناصر بين :min و :max',
    ],
    'boolean'              => 'يجب أن تكون قيمة الحقل :attribute إما true أو false ',
    'confirmed'            => 'حقل التأكيد غير مُطابق للحقل :attribute',
    'date'                 => 'الحقل :attribute ليس تاريخًا صحيحًا',
    'date_format'          => 'لا يتوافق الحقل :attribute مع الشكل :format.',
    'different'            => 'يجب أن يكون الحقلان :attribute و :other مُختلفان',
    'digits'               => 'يجب أن يحتوي الحقل :attribute على :digits رقمًا/أرقام',
    'digits_between'       => 'يجب أن يحتوي الحقل :attribute بين :min و :max رقمًا/أرقام ',
    'dimensions'           => 'الـ :attribute يحتوي على أبعاد صورة غير صالحة.',
    'distinct'             => 'للحقل :attribute قيمة مُكرّرة.',
    'email'                => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',
    'exists'               => 'الحقل :attribute لاغٍ',
    'file'                 => 'الـ :attribute يجب أن يكون من ملفا.',
    'filled'               => 'الحقل :attribute إجباري',
    'image'                => 'يجب أن يكون الحقل :attribute صورةً',
    'in'                   => 'الحقل :attribute لاغٍ',
    'in_array'             => 'الحقل :attribute غير موجود في :other.',
    'integer'              => 'يجب أن يكون الحقل :attribute عددًا صحيحًا',
    'ip'                   => 'يجب أن يكون الحقل :attribute عنوان IP ذا بُنية صحيحة',
    'ipv4'                 => 'يجب أن يكون الحقل :attribute عنوان IPv4 ذا بنية صحيحة.',
    'ipv6'                 => 'يجب أن يكون الحقل :attribute عنوان IPv6 ذا بنية صحيحة.',
    'json'                 => 'يجب أن يكون الحقل :attribute نصا من نوع JSON.',
    'max'                  => [
        'numeric' => 'يجب أن تكون قيمة الحقل :attribute مساوية أو أصغر لـ :max.',
        'file'    => 'يجب أن لا يتجاوز حجم الملف :attribute :max كيلوبايت',
        'string'  => 'يجب أن لا يتجاوز طول نص :attribute :max حروفٍ/حرفًا',
        'array'   => 'يجب أن لا يحتوي الحقل :attribute على أكثر من :max عناصر/عنصر.',
    ],
    'mimes'                => 'يجب أن يكون الحقل ملفًا من نوع : :values.',
    'mimetypes'            => 'يجب أن يكون الحقل ملفًا من نوع : :values.',
    'min'                  => [
        'numeric' => 'يجب أن تكون قيمة الحقل :attribute مساوية أو أكبر لـ :min.',
        'file'    => 'يجب أن يكون حجم الملف :attribute على الأقل :min كيلوبايت',
        'string'  => 'يجب أن يكون طول نص :attribute على الأقل :min حروفٍ/حرفًا',
        'array'   => 'يجب أن يحتوي الحقل :attribute على الأقل على :min عُنصرًا/عناصر',
    ],
    'not_in'               => 'الحقل :attribute لاغٍ',
    'numeric'              => 'يجب على الحقل :attribute أن يكون رقمًا',
    'present'              => 'يجب تقديم الحقل :attribute',
    'regex'                => 'صيغة الحقل :attribute .غير صحيحة',
    'required'             => 'الحقل :attribute مطلوب.',
    'required_if'          => 'الحقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',
    'required_unless'      => 'الحقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',
    'required_with'        => 'الحقل :attribute إذا توفّر :values.',
    'required_with_all'    => 'الحقل :attribute إذا توفّر :values.',
    'required_without'     => 'الحقل :attribute إذا لم يتوفّر :values.',
    'required_without_all' => 'الحقل :attribute إذا لم يتوفّر :values.',
    'same'                 => 'يجب أن يتطابق الحقل :attribute مع :other',
    'size'                 => [
        'numeric' => 'يجب أن تكون قيمة الحقل :attribute مساوية لـ :size',
        'file'    => 'يجب أن يكون حجم الملف :attribute :size كيلوبايت',
        'string'  => 'يجب أن يحتوي النص :attribute على :size حروفٍ/حرفًا بالظبط',
        'array'   => 'يجب أن يحتوي الحقل :attribute على :size عنصرٍ/عناصر بالظبط',
    ],
    'string'               => 'يجب أن يكون الحقل :attribute نصآ.',
    'timezone'             => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',
    'unique'               => 'قيمة الحقل :attribute مُستخدمة من قبل',
    'uploaded'             => 'فشل في تحميل الـ :attribute',
    'url'                  => 'صيغة الرابط :attribute غير صحيحة',

    
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'name'                  => 'الاسم',
        'username'              => 'اسم المُستخدم',
        'email'                 => 'البريد الالكتروني',
        'first_name'            => 'الاسم',
        'last_name'             => 'اسم العائلة',
        'password'              => 'كلمة المرور',
        'password_confirmation' => 'تأكيد كلمة المرور',
        'city'                  => 'المدينة',
        'country'               => 'الدولة',
        'address'               => 'العنوان',
        'phone'                 => 'الهاتف',
        'mobile'                => 'الجوال',
        'age'                   => 'العمر',
        'sex'                   => 'الجنس',
        'gender'                => 'النوع',
        'day'                   => 'اليوم',
        'month'                 => 'الشهر',
        'year'                  => 'السنة',
        'hour'                  => 'ساعة',
        'minute'                => 'دقيقة',
        'second'                => 'ثانية',
        'content'               => 'المُحتوى',
        'description'           => 'الوصف',
        'excerpt'               => 'المُلخص',
        'date'                  => 'التاريخ',
        'time'                  => 'الوقت',
        'available'             => 'مُتاح',
        'size'                  => 'الحجم',
        'price'                 => 'السعر',
        'desc'                  => 'نبذه',
        'title'                 => 'العنوان',
        'q'                     => 'البحث',
        'link'                  => 'عنوان الرابط  ',
        'slug'                  => ' ',
        /*
        |--------------------------------------------------------------------------
        | start  By Mohamed Elsayad Custom Validation Language  
        |--------------------------------------------------------------------------
        |
        */
  'login'                        => 'تسجيل دخول',
    'view_website'                 => 'عرض المواقع ',
    'logout'                       => 'تسجيل الخروج',
    'home'                           => ' الرئيسه',
    'ar'                           => 'عربى',
    'en'                           => 'انجليزى ',
    'main_lang'                    => 'اللغة الافتراضية ',
    'adminpanel'                   => 'لوحة التحكم',
    'inccorrect_information_login' => 'البريد الالكترونى او كلمة المرور غير صحيحة من فضلك اعد المحاولة',
    'forgot_password'              => 'نسيت كلمة المرور',
    'the_link_reset_sent'          => 'ارسل رابط استعادة الحساب',
    'admin'                        => 'حسابات المشرفين',
    'dashboard'                    => 'الرئيسية',
    'create_admin'                 => 'اضف مشرف ',
    'create-admin'                 => 'اضف مشرف ',
    'excel'                     => ' Excel',
    'csv'                       => ' CSV',
    'bdf'                       => ' BDF',
    'excel'                       => 'EXCEL',
    'print'                     => 'طباعه',
    'column-toggle'             => 'Toggle',
    'copy'                      => 'نسج',
    'field'                     => 'field',
    'page-length'               => 'عد ال الصفوف',
    'select-all'                => 'تحديد الكل ',
    'select-none'               => 'عدم التحديد ',
    'choose-field'              => 'تحديد الحقول',
    'all_record'                   => 'كل السجلات',
    'sProcessing'                  => 'تحميل',
    'sLengthMenu'                  => 'اظهار _MENU_ سجل',
    'sZeroRecords'                 => 'صفر سجل',
    'sEmptyTable'                  => 'جدول خالى',
    'sInfo'                        => 'اظهار _START_ الى  _END_ من _TOTAL_ سجل',
    'sInfoEmpty'                   => 'معلومات خالية',
    'sInfoFiltered'                => 'معلومات منتقاه',
    'sInfoPostFix'                 => '',
    'sSearch'                      => 'بحث',
    'sUrl'                         => '',
    'sInfoThousands'               => '',
    'sLoadingRecords'              => 'تحميل السجلات',
    'sFirst'                       => 'الاول',
    'sLast'                        => 'الاخير',
    'sNext'                        => 'التالى',
    'sPrevious'                    => 'السابق',
    'sSortAscending'               => 'ترتيب بحسب الاقدم',
    'sSortDescending'              => 'ترتيب بحسب الاحدث',
    'edit'                         => 'تعديل',
    'edit_page'                    => ' صفحه التعديل ',
    'add'                          => 'إضافة',
    'delete'                       => 'حذف',
    'show'                         => 'عرض',
    'admin_name'                   => 'اسم المشرف',
    'admin_email'                  => 'بريد المشرف',
    'created_at'                   => 'أنشيء فى',
    'updated_at'                   => 'محدث فى',
    'ask_delete_item'              => 'هل انت موافق على حذف السجلات التالية وهي عددها ',
    'ask_delete_dep'               => '  هل تريد حذف قسم : ',
    'please_check_some_records'    => 'من فضلك قم باختيار بعض السجلات للحذف',
    'All'    => 'الكل',
    'show_all'    => 'عرض الجميع',
    'yes'                          => 'حسنا',
    'no'                           => 'لا',
    'close'                        => 'غلق',
    'success_settings'             => 'تم التحديث  الاعدادات بنجا ح',
    'page_settings'             => 'صفحه الاعدادات',
    'success_settings'             => 'تم التحديث  الاعدادات بنجا ح',
    'name'                         => 'الاسم',
    'email'                        => 'البريد الالكترونى',
    'password'                     => 'كلمة السر',
    'record_added'                 => 'تم إضافة السجل بنجاح',
    'save'                         => ' حفظ ',
    'change_password'               => 'تم تغير الرقم السرى  بنجاح',
    'updated_record'               => 'تم تحديث البيانات بنجاح',
    'deleted_record'               => 'تم الحذف للبيانات بنجاح',
    'page-create-admin'            => 'صفحه انشاء مشرف',
    'delete_this'                 => 'هل  انت موافق على حذف  :' . ' :name '.' ؟ ',
    'delete_fast'                  => ' حذف سريع *  ',
    'users'                        => ' الاعضاء',
    'users'                        => ' الاعضاء',
    'usersacount'                  => 'حسابات الاعضاء',
    'page_create_users'            => 'صفحه انشاء الاعضاء ',
    'create_user'                  => ' انشاء عضو',
    'level'                        => 'المستوالى',
    'vendor'                       => 'بائع ',
    'company'                      => 'شراكه',
    'labor_Office'                 => 'مكتب ',
    'corporation'                  => 'مؤسسه',
    'store'                         => 'متجر',
    'user'                         => 'عضو',
    'company'                      => 'شركة',
    'vendor'                       => 'موزع',
    'level'                        => 'مستوى العضوية',
    'settings'                     => 'الاعدادات',
    'sitename_ar'                  => 'اسم الموقع بالعربى',
    'sitename_en'                  => 'اسم الموقع بالانجليزية',
    'logo'                         => 'شعار الموقع',
    'icon'                         => 'رمز الموقع',
    'custom_logo'                         => 'اخار  صوره  شعار للمواقع',
    'custom_icon'                         => 'اخار  صوره  رامز للمواقع',
    'description'                  => 'وصف الموقع',
    'keywords'                     => 'الكلمات الدليلية',
    'status'                       => 'الحالة',
    'open'                         => 'مفتوح',


    'Messenger_of_Allah_Mohamad'  =>'اللهم صل وسلم على سيدنا محمد وعلى آله وصحبه وسلم',
    'website_main'            =>'المواقع',
    'signout'            =>'خروج',
    'profile'            =>'بروفايل',
    'visit_websit'            =>'زياره المواقع ',
    'control_panel'            =>'لوحه التحكم',
    'this_language_not_available_now'            =>'هذه اللغة غير متوفرة الآن *',

    'adminacount'                   => 'حسباتا المشرفين ',
    // start countreis
    'countreis'                 => 'الدول',
    'page_create_countreis'     => 'صفحه اضافه دوله',
    'create_countreis'            => ' اضافه دوله ',
    'country_name_ar'     => ' اسم الدولة عربى ',
    'country_name_en'     => ' اسم الدولة انجليزى ',
    'mob'     => ' اختار / رمز الدولة ',
    'mob_show'     => ' رمز الدولة ',
    'code'     => ' كود الدولة ',
    'logo_countreis'     => ' اختارعلم / شعار الدوله ',
    'custom_logo_countreis'     => 'شعار الدوله ',
    'create_new_countreis'     => ' اضافه دوله جديده  ',

    // start departments
    'departments'                  => 'الاقسام',
    'department '                  => ' القسم',
    'dep_name_ar'                  => ' القسم  عربى',
    'dep_name_en'                  => ' القسم  بالانجلزيه ',
    'parent'                       => 'فرعى من',
    'icon'                         => 'الرمز',
    'description'                  => 'الوصف',
    'keyword'                      => 'الكلمات الدليلية',
    'icon_departments'     => ' صوره القسم ',
    'custom_icon_departments'     => 'شعار الدوله ',
    'create_new_departments'     => ' اضافه قسم جديد ',
    'page_create_departments'     => 'صفحه اضافه الاقسام',
    // start departments
    'add_product_in_th_dep'     => ' اضافه منتج  فى هذا القسم  ',







 // start products
    'products'                  => 'المنتجات',
    'product'                  => ' المنتج',
    'product_name_ar'                  => '     اسم المنتج با العربيه   ',
    'product_name_en'                  => '     اسم المنتج با بالانجليزية   ',
     'photo_product'             => '  صوره المنتج ',
     'photo_products'             => '  صوره المنتج ',
     'add_by_photo_products'             => '  صوره  من قبل من   ',
     'add_by_ar'             => '  صوره  من قبل عربى    ',
     'add_by_en'             => '  صوره  من قبل انجليزى     ',
     'discount'             => '  خصم  ',
     'create_new_product'     => ' اضافه منتج جديد ',
     'create_new_products'     => ' اضافه منتج جديد ',
    'page_create_product'     => 'صفحه اضافه المنتجات',
        'price'                  => ' السعر ',
        'price_old'                  => ' السعر القديم  ',
        'description_ar'                  => '  الوصف عربى     ',
        'description_en'                  => '  الوصف انجليزى      ',
        'price_old'                  => ' السعر القديم  ',

    // start departments
    'add_product_in_th_dep'     => ' اضافه منتج  فى هذا القسم  ',







 
    // start slider
    
    'link'     => '  عنوان الرابط   ',
    'photo_slider'     => '  صوره  الااسليد شو  ',
    'create_new_sliders'     => ' اضافه اسليد شو   ',
    'create_create'     => ' اضافه جديده    ',
    'sliders'     => ' اسليد شو ',
    'create_sliders'     => ' ا  انشاء اسليد شو ',
    'page_create_sliders'     => '  صفحه انشاء اسليد شو  ',

 
/*
        |--------------------------------------------------------------------------
        | End   By Mohamed Elsayad Custom Validation Language  
        |--------------------------------------------------------------------------
        |
        */
    
    
    
    ],

];