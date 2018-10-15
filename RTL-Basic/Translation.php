<?php


class Translation {
  public static function Context($page,$value) {
        $context=array(
            'LoginPage_InputFormTitle'=>array('FA'=>'نام کاربری و رمز عبور خود را وارد نمایید','EN'=>''),
            'LoginPage_Login'=>array('FA'=>'ورود','EN'=>''),
            'LoginPage_PlaceHolderUsername'=>array('FA'=>'نام کاربری','EN'=>''),
            'LoginPage_PlaceHolderPassword'=>array('FA'=>'رمز عبور','EN'=>''),
            'UserAdd_PlaceHolderPassword2'=>array('FA'=>'تکرار رمز عبور  ','EN'=>''),
            'UserAdd_RandomPassword'=>array('FA'=>'ایجاد رمزعبور تصادفی  ','EN'=>''),
            'UserAdd_Handsome'=>array('FA'=>'افزودن داخلی به صورت گروهی  ','EN'=>''),
            'LoginPage_Captcha'=>array('FA'=>'کدامنیتی','EN'=>''),
            'UserAdd_OldPassword'=>array('FA'=>'  رمز عبور قبلی    ','EN'=>''),
            'Table_Edit'=>array('FA'=>'ویرایش','EN'=>''),
            'UserAdd_Name'=>array('FA'=>'نام','EN'=>''),
            'UserAdd_LastName'=>array('FA'=>'نام خانوادگی','EN'=>''),
            'UserAdd_Email'=>array('FA'=>'پست الکترونیکی  ','EN'=>''),
            'UserAdd_Mobile'=>array('FA'=>'شماره همراه ','EN'=>''),
            'UserAdd_Gender'=>array('FA'=>'جنسیت','EN'=>''),
            'UserAdd_SexMan'=>array('FA'=>'مرد','EN'=>''),
            'UserAdd_SexWoman'=>array('FA'=>'زن','EN'=>''),
            'UserAdd_Picture'=>array('FA'=>'عکس کاربر','EN'=>''),
            'UserAdd_PictureSelect'=>array('FA'=>'انتخاب عکس','EN'=>''),
            'UserAdd_PictureChange'=>array('FA'=>'تغییر','EN'=>''),
            'UserAdd_PictureDelete'=>array('FA'=>'حذف','EN'=>''),
            'UserAdd_Address'=>array('FA'=>'آدرس','EN'=>''),
            'UserAdd_Add'=>array('FA'=>'ذخیره','EN'=>''),
            'UserAdd_Remove'=>array('FA'=>'حذف ','EN'=>''),
            'UserAdd_Edit'=>array('FA'=>'ویرایش ','EN'=>''),
            'UserAdd_Reset'=>array('FA'=>'بارگزاری مجدد','EN'=>''),
            'UserAdd_Exit'=>array('FA'=>'انصراف  ','EN'=>''),
            'PermissionAdd_Name'=>array('FA'=>' نام دسترسی','EN'=>''),
            'PermissionAdd_Page'=>array('FA'=>' نام صفحه','EN'=>''),
            'PermissionAdd_Discription'=>array('FA'=>' توضیحات','EN'=>''),
            'Permission_Add'=>array('FA'=>'افزودن دسترسی   ','EN'=>''),
            'Group_Add'=>array('FA'=>'افزودن گروه   ','EN'=>''),
            'GroupAdd_Name'=>array('FA'=>' نام گروه','EN'=>''),
            'GroupAdd_User2Group'=>array('FA'=>' افزودن کاربربه گروه','EN'=>''),
            'GroupAdd_Perm2Group'=>array('FA'=>' تعیین   دسترسی','EN'=>''),
            'Group_Members'=>array('FA'=>'اعضا و گروهها   ','EN'=>''),
            'Setting_Lang'=>array('FA'=>' انتخاب زبان','EN'=>''),
            'Setting_Farsi'=>array('FA'=>' فارسی  ','EN'=>''),
            'Setting_English'=>array('FA'=>'   انگلیسی','EN'=>''),
            'Setting_Date'=>array('FA'=>' تاريخ و ساعت','EN'=>''),
            'Setting_Users'=>array('FA'=>'كاربران','EN'=>''),
            'Setting_Network'=>array('FA'=>'تنظیمات شبکه','EN'=>''),
            'Setting_Restart'=>array('FA'=>'راه اندازی مجدد','EN'=>''),
            'Setting_RestFactory'=>array('FA'=>'تنظیمات پیش فرض','EN'=>''),
            'Setting_Save'=>array('FA'=>'ذخیره و بازیابی','EN'=>''),
            'Setting_Update'=>array('FA'=>'بروزرسانی ','EN'=>''),
            'Setting_ShutDown'=>array('FA'=>'خاموش کردن ','EN'=>''),            
            'Setting_BackUp'=>array('FA'=>'تهیه نسخه پشتیبان   ','EN'=>''),
            'Setting_Restore'=>array('FA'=>'فرایند بازیابی ','EN'=>''),
            'Setting_Update'=>array('FA'=>'به روزرسانی ','EN'=>''),
            'Setting_Setting'=>array('FA'=>'تنظیمات کلی سیستم   ','EN'=>''),
            'Device_Extention'=>array('FA'=>'داخلی ها   ','EN'=>''),
            'Device_ExtentionAdd'=>array('FA'=>'افزودن داخلی   ','EN'=>''),
            'Device_Extention_DialGroup'=>array('FA'=>'گروه تماس     ','EN'=>''),
            'Device_Extention_Group'=>array('FA'=>'گروه کاربری','EN'=>''),
            'Device_Extention_Perm'=>array('FA'=>'مجوز دسترسی ','EN'=>''),
            'Device_Extention_GroupZone'=>array('FA'=>'گروه داخلی','EN'=>''),
            'Device_Extention_Number'=>array('FA'=>'شماره داخلی','EN'=>''),
            'Device_Extention_Number_placeholder'=>array('FA'=>'تعداد شماره های داخلی حداقل باید سه رقم باشد  ','EN'=>''),
            'Device_Extention_Number2_placeholder'=>array('FA'=>'تعداد شماره های داخلی بین 0تا99  باشد  ','EN'=>''),
            'Table_Counter'=>array('FA'=>'ردیف  ','EN'=>''),
            'Table_Add'=>array('FA'=>'افزودن  ','EN'=>''),
            'Trunks_trunk'=>array('FA'=>'درگاه  ','EN'=>''),
            'Trunks_city'=>array('FA'=>'شهری  ','EN'=>''),
            'Trunks_Line'=>array('FA'=>'مشترک  ','EN'=>''),
            'Trunks_private'=>array('FA'=>'دیجیتال  ','EN'=>''),
            'Trunks_Hardware'=>array('FA'=>'سخت افزاری  ','EN'=>''),
            'Trunks_Software'=>array('FA'=>'نرم افزاری  ','EN'=>''),           
            'Trunks_Server'=>array('FA'=>'سرور ','EN'=>''),
            'Trunks_Protocol'=>array('FA'=>'پروتکل ','EN'=>''),
            'Trunks_Status'=>array('FA'=>'وضعیت ','EN'=>''),
            'Trunks_Join'=>array('FA'=>'عضویت ','EN'=>''),
            'Form_choice'=>array('FA'=>'انتخاب  ','EN'=>''),
            'Form_dest'=>array('FA'=>'مقصد  ','EN'=>''),
            'Form_dest-valid'=>array('FA'=>'معین  ','EN'=>''),
            'Form_dest-novalid'=>array('FA'=>'پویا  ','EN'=>''),
            'Form_reg_check'=>array('FA'=>' اعتبار سنجی  ','EN'=>''),
            'Form_Active'=>array('FA'=>' فعال  ','EN'=>''), 
            'Form_Defult'=>array('FA'=>'   مسيردهي خودكار ','EN'=>''),
            'Form_Port'=>array('FA'=>'  پورت ','EN'=>''),
            'Form_Yes'=>array('FA'=>'  بله ','EN'=>''),
            'Form_No'=>array('FA'=>'  خیر ','EN'=>''),
            'Form_PortId'=>array('FA'=>'پایانه','EN'=>''),
            'Form_Save'=>array('FA'=>'ذخیره','EN'=>''),
            'Form_Form'=>array('FA'=>'عضو شده','EN'=>''),
            'Form_AND'=>array('FA'=>'ویا  ','EN'=>''),
            'Form_ANDEmpty'=>array('FA'=>'و   ','EN'=>''),
            'Form_Hay'=>array('FA'=>'های   ','EN'=>''),
            'Form_BEStart'=>array('FA'=>'پیش   ','EN'=>''),
            'Form_NUM'=>array('FA'=>'شماره  ','EN'=>''),
            'Form_IN'=>array('FA'=>'ورودی  ','EN'=>''),
            'Form_OUT'=>array('FA'=>'خروجی  ','EN'=>''),
            'Form_CALL'=>array('FA'=>'تماس  ','EN'=>''),
            'Form_Give'=>array('FA'=>'گیرنده  ','EN'=>''),
            'Form_Taken'=>array('FA'=>'گرفته شده  ','EN'=>''),
            'Form_Send'=>array('FA'=>'ارسال  ','EN'=>''),
            'Form_check'=>array('FA'=>'بررسی  ','EN'=>''),
            'Form_NO2'=>array('FA'=>'عدم  ','EN'=>''),
            'Form_Compress'=>array('FA'=>'استانداردهای  فشرده سازي   ','EN'=>''),
            'Form_Sound'=>array('FA'=>'انتقال صدا ','EN'=>''),
            'Form_Phone'=>array('FA'=>'تلفن','EN'=>''),
            'Form_head'=>array('FA'=>'سر','EN'=>''),
            'Form_type'=>array('FA'=>'نوع ','EN'=>''),
            'Form_traffic'=>array('FA'=>'ترافیک ','EN'=>''),
            'Trunk_user'=>array('FA'=>'کاربر ','EN'=>''),
            'Trunk_network'=>array('FA'=>'شبکه ','EN'=>''),
            'Trunk_dodaddport'=>array('FA'=>'پیکربندی درگاه  ','EN'=>''),
            'Trunk_cards'=>array('FA'=>'پیکربندی کارتها  ','EN'=>''),
            'Trunk_didaddport'=>array('FA'=>'پیکربندی مسیریابی  ','EN'=>''),
            'Form_nofi'=>array('FA'=>'آیامطمئن هستید؟؟؟  ','EN'=>''),
            'Form_back'=>array('FA'=>'بازگشت ','EN'=>''),
            'Form_PlacholderNum'=>array('FA'=>'جهت ارتباط با داخلی سخت افزاری ','EN'=>''),
            'Form_Info'=>array('FA'=>'قسمت های ستاره  دار نباید تکراری باشند ','EN'=>''),
            'Info_Ver'=>array('FA'=>'نسخه نرم افزاری ','EN'=>''),
            'Route_Route'=>array('FA'=>'مسیریابی ','EN'=>''),
            'Form_NO02'=>array('FA'=>'تعیین ','EN'=>''),
            'Form_NO14'=>array('FA'=>'تنظیم ','EN'=>''),
            'Form_NO15'=>array('FA'=>'ساعت ','EN'=>''),
            'Form_priority'=>array('FA'=>'اولویت ','EN'=>''),
            'Form_NO03'=>array('FA'=>' جايگاه حذف ارقام ','EN'=>''),
            'Form_NO04'=>array('FA'=>' جايگاه افزودن ارقام ','EN'=>''),
            'Form_NO05'=>array('FA'=>' تعداد ارقام حذفي ','EN'=>''),   
            'Form_NO06'=>array('FA'=>' ارقام افزودني     ','EN'=>''),
            'Form_NO07'=>array('FA'=>' جايگاه جايگزيني ارقام ','EN'=>''),
            'Form_NO08'=>array('FA'=>' تعداد ارقام جايگزين ','EN'=>''),
            'Form_NO09'=>array('FA'=>'  ارقام جايگزين ','EN'=>''),
            'Form_NO10'=>array('FA'=>'  انتخاب به عنوان مسير پيشفرض ','EN'=>''),
            'Form_NO11'=>array('FA'=>' تعداد ارقام ورودی ','EN'=>''),
            'Form_NO12'=>array('FA'=>' تعداد  ','EN'=>''),
            'Form_NO13'=>array('FA'=>' شماره شروع داخلی  ','EN'=>''),
            'Form_Falut'=>array('FA'=>'خطا ','EN'=>''),
            'Form_Card'=>array('FA'=>' کارت ','EN'=>''),
            'Custom_Made'=>array('FA'=>'سفارشی ','EN'=>''),
            'Form_exten'=>array('FA'=>'داخلی ','EN'=>''),
            'Form_Group-exten'=>array('FA'=>'گروه داخلی ','EN'=>''),
            'des_def'=>array('FA'=>'مقصدپیش فرض ','EN'=>''),
            'Form_member'=>array('FA'=>'اعضا ','EN'=>''),
            'IVR_IVR'=>array('FA'=>'پاسخگویی ','EN'=>''),
            'IVR_IVR2'=>array('FA'=>'پاسخگوی ','EN'=>''),
            'IVR_IVR3'=>array('FA'=>'خودکار ','EN'=>''),
            'IVR_Online'=>array('FA'=>'پاسخگویی در ساعات اداری ','EN'=>''),
            'IVR_Offline'=>array('FA'=>'پاسخگویی   خارج ازساعات اداری ','EN'=>''),
            'IVR_Name'=>array('FA'=>'  پاسخگوی خودکاردر ساعات اداری  ','EN'=>''),
            'IVR_Name2'=>array('FA'=>'  پاسخگوی خودکار خارج  ازساعات اداری  ','EN'=>''),
            'IVR_Upload'=>array('FA'=>'    بارگذاري فايل صوتي ','EN'=>''),
            'IVR_File'=>array('FA'=>' فايل صوتي ','EN'=>''),
            'MUSIC_File'=>array('FA'=>' فايل  ','EN'=>''),
            'IVR_Key'=>array('FA'=>'کلید ','EN'=>''),
            'IVR_Time'=>array('FA'=>'محدوده زمانی ','EN'=>''),
            'Form_Sat'=>array('FA'=>'شنبه ','EN'=>''),
            'Form_Sun'=>array('FA'=>'یکشنبه ','EN'=>''),
            'Form_Mon'=>array('FA'=>'دوشنبه ','EN'=>''),
            'Form_Tue'=>array('FA'=>'سه شنبه ','EN'=>''),
            'Form_Wen'=>array('FA'=>'چهارشنبه ','EN'=>''),
            'Form_Thu'=>array('FA'=>'پنجشنبه ','EN'=>''),
            'Form_Fri'=>array('FA'=>'جمعه ','EN'=>''),
            'Form_Day'=>array('FA'=>'روز ','EN'=>''),
            'Form_Time'=>array('FA'=>'زمان ','EN'=>''),
            'Form_Time2'=>array('FA'=>'تاریخ و ساعت ','EN'=>''),
            'Form_Start'=>array('FA'=>'شروع ','EN'=>''),
            'Form_End'=>array('FA'=>'پایان ','EN'=>''),
            'Form_All'=>array('FA'=>'همه ','EN'=>''),
            'Form_All2'=>array('FA'=>'هردو ','EN'=>''),
            'Form_report'=>array('FA'=>'گزارش گیری ','EN'=>''),
            'Report_Title'=>array('FA'=>'عناوین گزارش گیری ','EN'=>''),
            'Report_Date'=>array('FA'=>'تاریخ   ','EN'=>''),
            'Report_connecting'=>array('FA'=>'برقراری   ','EN'=>''),
            'Report_direction'=>array('FA'=>'سمت   ','EN'=>''),
            'Report_result'=>array('FA'=>'نتیجه   ','EN'=>''),
            'Report_Time'=>array('FA'=>'مدت   ','EN'=>''),
            'Report_BlockedIP'=>array('FA'=>'گزارش آدرسهای مسدودی   ','EN'=>''),
            'Report_DeactiveExtensions'=>array('FA'=>'گزارش کاربران غیر فعال    ','EN'=>''),
            'Report_Excell'=>array('FA'=>'خروجی اکسل   ','EN'=>''),
            'Setting_Dehi'=>array('FA'=>'دهی   ','EN'=>''),
            'Setting_Node'=>array('FA'=>'مرکز   ','EN'=>''),
            'Setting_ID'=>array('FA'=>'شناسه   ','EN'=>''),
            'Setting_Sound'=>array('FA'=>'مبدل  صدا   ','EN'=>''),
            'Setting_DNSName'=>array('FA'=>'سرورهای نام   ','EN'=>''),
            'Setting_RTP'=>array('FA'=>' رسانه   ','EN'=>''),
            'Setting_HardWare'=>array('FA'=>' سخت افزار   ','EN'=>''),
            'Setting_Main'=>array('FA'=>'سرور نام اصلی   ','EN'=>''),
            'Setting_Help'=>array('FA'=>'سرور نام جايگزين   ','EN'=>''),
            'Form_Action'=>array('FA'=>'فعالیت   ','EN'=>''),
            'Form_Action2'=>array('FA'=>'نوع عملیات   ','EN'=>''),
            'Form_Desc'=>array('FA'=>'شرح عملیات   ','EN'=>''),
            'UserInformation_Profile'=>array('FA'=>'پروفایل کاربر    ','EN'=>''),
            'UserInformation_Exit'=>array('FA'=>'بستن      ','EN'=>''),
            'UserInformation_Edit'=>array('FA'=>'ویرایش اطلاعات    ','EN'=>''),
            'Report_CallSuccess'=>array('FA'=>'تماس موفق   ','EN'=>''),
            'Report_CallCancel'=>array('FA'=>'تماس  ناموفق     ','EN'=>''),
            'Report_CallTerminate'=>array('FA'=>'تماس نامعتبر  ','EN'=>''),
            'Report_CallBusy'=>array('FA'=>'تماس ناموفق  ','EN'=>''),
            'ReportWeb_logout'=>array('FA'=>'خروج   ','EN'=>''),
            'ReportWeb_loggin'=>array('FA'=>'ورود   ','EN'=>''),  
            'ReportWeb_insert'=>array('FA'=>'افزودن   ','EN'=>''),
            'ReportWeb_update'=>array('FA'=>'ویرایش   ','EN'=>''),
            'ReportWeb_delete'=>array('FA'=>'حذف   ','EN'=>''),
            'ReportWeb_NoAction'=>array('FA'=>'بدون عملیات   ','EN'=>''),
            'Setting_GroupDefault'=>array('FA'=>'گروه تماس عمومی     ','EN'=>''),
            'Setting_GroupDefaultUser'=>array('FA'=>'گروه  عمومی     ','EN'=>''),
            'Setting_GroupDefaultManagment'=>array('FA'=>'گروه مدیر     ','EN'=>''),
            'Node_Information'=>array('FA'=>'اطلاعات مرکز     ','EN'=>''),
            'local_username'=>array('FA'=>'نام کاربری لوکال     ','EN'=>''),
            'local_password'=>array('FA'=>'رمز عبور لوکال       ','EN'=>''),
            'local_port'=>array('FA'=>'پورت لوکال       ','EN'=>''),
            'local_ip'=>array('FA'=>'آدرس لوکال       ','EN'=>''),
            'remote_username'=>array('FA'=>'نام کاربری ریموت       ','EN'=>''),
            'remote_password'=>array('FA'=>'رمز عبورریموت       ','EN'=>''),
            'remote_port'=>array('FA'=>'پورت ریموت       ','EN'=>''),
            'remote_ip'=>array('FA'=>'آدرس ریموت     ','EN'=>''),
            'trust_gateways'=>array('FA'=>'  اعتماد به درگاه     ','EN'=>''),
            'Setting_Uptime'=>array('FA'=>'  مدت زمان آغاز به کار         ','EN'=>''),
            'Page_View'=>array('FA'=>'  مشاهده ','EN'=>''),
            'Monitoring_Traffic'=>array('FA'=>'  مونیتور ترافیک شبکه','EN'=>''),
            'callerd_monitoring'=>array('FA'=>'   مبدا تماس ','EN'=>''),
            'called_monitoring'=>array('FA'=>'  مقصد تماس  ','EN'=>''),
            'Time_call'=>array('FA'=>' مدت تماس ','EN'=>''),
            'LOAD_AVERAGE'=>array('FA'=>' میزان بار مصرفی   ','EN'=>''),
            'monitoring_cpu'=>array('FA'=>' پردازنده    ','EN'=>''),
            'monitoring_memory'=>array('FA'=>' حافظه   ','EN'=>''),
            'monitoring_UpTime'=>array('FA'=>' مدت زمان کار    ','EN'=>''),
            'monitoring_HostName'=>array('FA'=>' نام مرکز   ','EN'=>''),
            'monitoring_ServerDate'=>array('FA'=>' زمان مرکز    ','EN'=>''),
            'monitoring_DiscUsage'=>array('FA'=>' حافظه اصلی   ','EN'=>''),
            'monitoring_FileSystem'=>array('FA'=>' محل ذخیره     ','EN'=>''),
            'monitoring_Mount'=>array('FA'=>'  اتصال     ','EN'=>''),
            'monitoring_Used'=>array('FA'=>' حجم  مصرف شده     (درصد)','EN'=>''),
            'monitoring_Used2'=>array('FA'=>' فضای استفاده  شده     ','EN'=>''),
            'monitoring_Free'=>array('FA'=>' فضای آزاد     (درصد)','EN'=>''),
            'monitoring_Total'=>array('FA'=>' فضای مجموع     ','EN'=>''),
            'monitoring_Ping'=>array('FA'=>' وضعیت برقراری ارتباط     ','EN'=>''),
            'monitoring_SERVICESSTATUS'=>array('FA'=>' وضعیت سرویسها      ','EN'=>''),
            'monitoring_online'=>array('FA'=>' فعال   ','EN'=>''),
            'monitoring_offline'=>array('FA'=>' غیرفعال   ','EN'=>''),
            'monitoring_NETWORKUSAGE'=>array('FA'=>' ترافیک شبکه   ','EN'=>''),
            'monitoring_interface'=>array('FA'=>' کارت شبکه   ','EN'=>''),
            'monitoring_ip'=>array('FA'=>' آدرس   ','EN'=>''),
            'monitoring_Receive'=>array('FA'=>' دریافت   ','EN'=>''),
            'monitoring_Transmit'=>array('FA'=>' ارسال   ','EN'=>''),
            'Tools_Ping'=>array('FA'=>' بررسی صحت ارتباط   ','EN'=>''),
            'Tools_Trace'=>array('FA'=>' بررسی مسیر ارتباط   ','EN'=>''),
            'Tools_Pcap'=>array('FA'=>' تهیه گزارش تحلیلی       ','EN'=>''),
            'Tools_Num'=>array('FA'=>' تعداد بسته       ','EN'=>''),
            'Tools_Num2'=>array('FA'=>' تعداد گام       ','EN'=>''),
            'Tools_SRC'=>array('FA'=>'  مبدا         ','EN'=>''),
            'last_check'=>array('FA'=>'  آخرین کارکرد ','EN'=>''),
            'version_card'=>array('FA'=>'  نسخه کارت ','EN'=>''),
            'version_Num'=>array('FA'=>'  نسخه ','EN'=>''),
            'Setting_cards'=>array('FA'=>'  مديريت كارت ها  ','EN'=>''),
            'List_list'=>array('FA'=>'       لیست  ','EN'=>''),
            'List_music'=>array('FA'=>'       آوا  ','EN'=>''),
            'Setting_Config'=>array('FA'=>'       پیکربندی  ','EN'=>''),
            'fxo_password'=>array('FA'=>'رمز دوم ','EN'=>''),
            'Setting_Features'=>array('FA'=>'قابلیت های سیستم   ','EN'=>''),
            'Features_Name'=>array('FA'=>'  قابلیت       ','EN'=>''),
            
            
        );
        return $context[$page.'_'.$value][LANG];
    }
  public static function Head_title($url)
  {
      $url=rtrim($url,'/');
      $url=explode('/', $url);
      $title=$url['0'];   
      $page_title = array(
      	'null'=>array('FA'=>'شرکت کیاتل','EN'=>''),
        'login'=>array('FA'=>'صفحه ورود به سیستم','EN'=>''),
        'index'=>array('FA'=>'شرکت کیاتل |صفحه اصلی','EN'=>''),
        'user'=>array('FA'=>'شرکت کیاتل |کاربران','EN'=>''),
        'permission'=>array('FA'=>'شرکت کیاتل | دسترسی','EN'=>''),
        'group'=>array('FA'=>'شرکت کیاتل |گروه  كاربري','EN'=>''),
        'extensions'=>array('FA'=>'شرکت کیاتل | داخلی ها','EN'=>''),
        'setting'=>array('FA'=>'شرکت کیاتل | تنظیمات سیستم    ','EN'=>''),
        'trunks'=>array('FA'=>'درگاه ها','EN'=>''),
        'InboundCallGroup'=>array('FA'=>'گروه داخلی ','EN'=>''),
        'OutboundDialGroup'=>array('FA'=>'گروه  تماس','EN'=>''),
        'DialRoute'=>array('FA'=>'مسيريابي تماس','EN'=>''),
        'did'=>array('FA'=>'تماس ورودي مستقيم','EN'=>''),
        'ivr'=>array('FA'=>'پاسخگوي خودكار','EN'=>''), 
        'gateways'=>array('FA'=>'درگاه نرم افزاری','EN'=>''),
        'monitoring'=>array('FA'=>'نظارت     ','EN'=>''),
        'error'=>array('FA'=>'خطا در ارسال فرم    ','EN'=>''),
        'voicemail'=>array('FA'=>'شرکت کیاتل | صندوق صوتی   ','EN'=>''),
        'reports'=>array('FA'=>'شرکت کیاتل | گزارشات ','EN'=>''),
        'UserPortable'=>array('FA'=>'پرتال کاربران     ','EN'=>''),
        'help'=>array('FA'=>'راهنما       ','EN'=>''),
        'atributies'=>array('FA'=>'ویژگی ها       ','EN'=>''),
        'tools'=>array('FA'=>'ابزار ','EN'=>''),
         'playlists'=>array('FA'=>' لیست موزیکهای انتخاب شده            ','EN'=>''),
        
      );
      return $page_title[$title][LANG];
  }
  public static function TitleTop($url)
  {
      $url=rtrim($url,'/');
      $url=explode('/', $url);
      $title=$url['0'];	  
      $page_title = array(
       
        'index'=>array('FA'=>'سامانه پیکربندی و مدیریت مرکز تلفن کیاتل','EN'=>''),
        'user'=>array('FA'=>'کاربران سایت','EN'=>''),
        'permission'=>array('FA'=>'دسترسی ها و مجوزهای کاربران','EN'=>''),
        'group'=>array('FA'=>'گروه  كاربري','EN'=>''),
        'setting'=>array('FA'=>'تنظیمات سیستم','EN'=>''),
        'extensions'=>array('FA'=>' داخلی ها','EN'=>''),
        'trunks'=>array('FA'=>'درگاه ها','EN'=>''),
        'InboundCallGroup'=>array('FA'=>'گروه داخلی ','EN'=>''),
        'OutboundDialGroup'=>array('FA'=>'گروه تماس ','EN'=>''),
        'DialRoute'=>array('FA'=>'مسيريابي تماس','EN'=>''),
        'did'=>array('FA'=>'تماس ورودي مستقيم','EN'=>''),
        'ivr'=>array('FA'=>'پاسخگوي خودكار','EN'=>''),
        'gateways'=>array('FA'=>'درگاه نرم افزاری','EN'=>''),
        'monitoring'=>array('FA'=>'نظارت      ','EN'=>''),
        'error'=>array('FA'=>'صفحه موردنظر یافت نشد.    ','EN'=>''),
        'voicemail'=>array('FA'=>'صندوق صوتی   ','EN'=>''),
        'error/info'=>array('FA'=>'خطا در ارسال فرم    ','EN'=>''),
        'reports'=>array('FA'=>'گزارشات     ','EN'=>''),
        'UserPortable'=>array('FA'=>'پرتال کاربران     ','EN'=>''),
        'help'=>array('FA'=>'راهنما       ','EN'=>''),
        'atributies'=>array('FA'=>'ویژگی ها       ','EN'=>''),
        'tools'=>array('FA'=>'ابزار ','EN'=>''),
        'playlists'=>array('FA'=>' لیست موزیکهای انتخاب شده            ','EN'=>''),
      );
      return $page_title[$title][LANG];
  } 
  public static function Logs($name)
  {
      $Log=array(
        'extension_not_allowed'=>array('FA'=>'فرمت فایل اپلود شده قابل قبول نیست  ','EN'=>'extension not allowed'),
        'File_Upload_Successfully'=>array('FA'=>'فایل با موفقیت بارگذاری شد..','EN'=>'File Upload Successfully'),
        'File_size'=>array('FA'=>'حجم فايل بارگذاري شده غير فابل قبول است ','EN'=>'File size must be less tham 10 MB'),
        'Upload_Failed'=>array('FA'=>'اشکال درانتقال فایل  ....  ','EN'=>'File size must be less tham 10 MB'),
        'Login'=>array('FA'=>'ورود کاربر با آدرس    ','EN'=>'Loggin User With IP'),
        'LogOut'=>array('FA'=>'خروج   ازسامانه کیاتل     ','EN'=>'Logout'),
        'Login_deactive01'=>array('FA'=>'کاربر با نام کاربری       ','EN'=>'Logout'),
        'Login_deactive02'=>array('FA'=>'وآدرس  ','EN'=>'Logout'),
        'Login_deactive03'=>array('FA'=>' تلاش  در ورود به پنل کاربری داشته که به صفحه کاربران غیرفعال هدایت شدند.         ','EN'=>'Logout'),
        'LoginError01'=>array('FA'=>'شخصی با آدرس ','EN'=>'Logout'),
        'LoginError02'=>array('FA'=>'سعی در ورود بدون مجوز به پنل کاربری را داشت....  ','EN'=>'Logout'),
        'LoginError03'=>array('FA'=>'کاربرناشناس          ','EN'=>'Logout'),
        'LogginFaild01'=>array('FA'=>'کاربر با نام کاربری      ','EN'=>'Logout'),
        'LogginFaild02'=>array('FA'=>'به دليل بیش از سه بار ورود غیرمجاز غیرفعال شد      ','EN'=>'Logout'),
        'LogginFaild03'=>array('FA'=>'وبا آدرس       ','EN'=>'Logout'),
        'LogginFaild04'=>array('FA'=>'تلاش در ورود به پنل کاربری خود را داشت(اشکال در پسورد)       ','EN'=>'Logout'),
        'User_add'=>array('FA'=>'افزودن داخلی جدید با شماره ','EN'=>''),
        'User_Delete'=>array('FA'=>'حذف  تمامی گروه های عضو  وداخلی   با نام  ','EN'=>''),
        'group_User_add'=>array('FA'=>'افزودن کاربربه گروه با نام ','EN'=>''),
        'group_User_Delete'=>array('FA'=>'حذف  کاربربه گروه با شناسه ','EN'=>''),
        'group_User_Delete2'=>array('FA'=>'حذف  تمام گروه های کاربر با شناسه  ','EN'=>''),
        'User_edit'=>array('FA'=>'ویرایش  داخلی  با نام ','EN'=>''),
        'User_Passedit'=>array('FA'=>'ویرایش  رمز عبور داخلی  با نام ','EN'=>''),
        'Name_Node_Add'=>array('FA'=>'تغییر نام مرکز ','EN'=>''),
        'Lan_Add'=>array('FA'=>'افزودن اطلاعات شبکه ','EN'=>''),
        'RTP_Add'=>array('FA'=>'افزودن اطلاعات RTP ','EN'=>''),
        'DNS_Add'=>array('FA'=>'افزودن اطلاعات DNS ','EN'=>''),
        'TIME_Add'=>array('FA'=>'افزودن زمان و تاریخ  ','EN'=>''),
        'Card_Add'=>array('FA'=>'افزودن کارت به مرکز تلفن  ','EN'=>''),
        'Restart_Add'=>array('FA'=>'  راه اندازی مجدد ','EN'=>''),
        'Shutdown_Add'=>array('FA'=>'    خاموش ','EN'=>''),
        'DID_Add'=>array('FA'=>'افزودن مسیر یابی ورودی ','EN'=>''),
        'DialPlan_Add'=>array('FA'=>'افزودن مسیر یابی خروجی ','EN'=>''),
        'DialPlan_Edit'=>array('FA'=>'ویرایش  مسیر یابی خروجی ','EN'=>''),
        'DialPlan_Delete'=>array('FA'=>'حذف  مسیر یابی خروجی ','EN'=>''),
        'DID_Edit'=>array('FA'=>'ویرایش  مسیر یابی ورودی ','EN'=>''),
        'DID_Delete'=>array('FA'=>'حذف  مسیر یابی ورودی ','EN'=>''),
        'Group_Add'=>array('FA'=>'افزودن گروه کاربری با نام   ','EN'=>''),
        'Group_Edit'=>array('FA'=>'ویرایش  گروه کاربری با نام   ','EN'=>''),
        'Group_Delete'=>array('FA'=>'حذف  گروه کاربری با نام   ','EN'=>''),
        'Group_Add_Perm'=>array('FA'=>'افزودن دسترسی به گروه کاربری با نام   ','EN'=>''),
        'Group_Add_User'=>array('FA'=>'افزودن کاربر به گروه کاربری با نام   ','EN'=>''),
        'Group_Delete_Perm'=>array('FA'=>'دسترسی با نام    ','EN'=>''),
        'Group_Delete_dial'=>array('FA'=>'مسیریابی با نام    ','EN'=>''),
        'Group_Delete_User_1'=>array('FA'=>'کاربر بانام کاربری      ','EN'=>''),
        'Group_Delete_User_2'=>array('FA'=>'را از گروه  با نام       ','EN'=>''),
        'Group_Delete_User_3'=>array('FA'=>'حذف نمود.      ','EN'=>''),
        'Group_Delete_User_4'=>array('FA'=>'کاربر با داخلی      ','EN'=>''),
        'Group_IN_Add'=>array('FA'=>'افزودن گروه داخلی با نام   ','EN'=>''),
        'Group_IN_Edit'=>array('FA'=>'ویرایش  گروه داخلی با نام   ','EN'=>''),
        'Group_IN_Delete'=>array('FA'=>'حذف  گروه داخلی با نام   ','EN'=>''),
        'IpBlock_Delete'=>array('FA'=>'حذف  آدرس مسدودشده     ','EN'=>''),
        'Pcap_Add'=>array('FA'=>'فایل مورد نظربا موفقیت ایجاد شد     ','EN'=>''),
        'Port_Add'=>array('FA'=>'اختصاص پورت به کارت با شناسه       ','EN'=>''),
        'card_delete'=>array('FA'=>'حذف کارت با شماره پایانه         ','EN'=>''),
        'Playlist_Add'=>array('FA'=>'افزودن گروه لیست موزیک با نام   ','EN'=>''),
        'Active_ID'=>array('FA'=>'    فعال نمودن کاربر با نام  ','EN'=>''),
        'features_Add'=>array('FA'=>'    افزودن قابلیت با نام    ','EN'=>''),
      );
      return $Log[$name][LANG];
  }
  public static function menu($name)
  {
      $menu_name=array(
        'dashboard'=>array('FA'=>'صفحه اصلی','EN'=>''),
        'site_map'=>array('FA'=>'مشاهده سایت','EN'=>''),
        'users_permission'=>array('FA'=>'کاربران و دسترسی','EN'=>''),
        'users'=>array('FA'=>'کاربران','EN'=>''),
        'allgroups'=>array('FA'=>'گروه ها','EN'=>''),
        'groups'=>array('FA'=>'گروه  كاربري','EN'=>''),
        'men'=>array('FA'=>'مرد','EN'=>''),
        'man'=>array('FA'=>' آقای','EN'=>''),
        'woman'=>array('FA'=>' خانم','EN'=>''),
        'gender'=>array('FA'=>' جناب ','EN'=>''),
        'gender_woman'=>array('FA'=>' سرکار ','EN'=>''),
        'welcome'=>array('FA'=>' خوش آمدید','EN'=>''),
        'permissons'=>array('FA'=>' لیست دسترسی ها ','EN'=>''),
        'setting'=>array('FA'=>'تنظیمات ','EN'=>''),
        'device'=>array('FA'=>'مرکز تلفن','EN'=>''),
        'email'=>array('FA'=>'پست الکترونیکی','EN'=>''),
        'fax'=>array('FA'=>'فکس','EN'=>''),
        'logs'=>array('FA'=>'گزارشات','EN'=>''),
        'help'=>array('FA'=>'راهنما','EN'=>''),
        'Extensions'=>array('FA'=>'داخلی ها','EN'=>''),
        'Trunks'=>array('FA'=>'درگاه ها','EN'=>''),
        'InboundCallGroup'=>array('FA'=>'گروه داخلی    ','EN'=>''),
        'OutboundDialGroup'=>array('FA'=>'گروه تماس','EN'=>''),
        'DialRoute'=>array('FA'=>'مسيريابي تماس','EN'=>''),
        'DID'=>array('FA'=>'تماس ورودي ','EN'=>''),
        'DOD'=>array('FA'=>'تماس خروجی ','EN'=>''),
        'IVR'=>array('FA'=>'پاسخگوي خودكار','EN'=>''),
        'Tools'=>array('FA'=>'ابزار ','EN'=>''),
        'monitoring'=>array('FA'=>'نظارت  ','EN'=>''),
        'voicemail'=>array('FA'=>'صندوق صوتی   ','EN'=>''),
        'atributies'=>array('FA'=>'ویژگی ها     ','EN'=>''),
        'Logs-calllog'=>array('FA'=>'گزارش تماس ','EN'=>''),
        'Logs-Reject'=>array('FA'=>' مشاهده تماسهای نامعتبر   ','EN'=>''),
        'Logs-system'=>array('FA'=>'مشاهده هسته مرکز ','EN'=>''),
        'Logs-web'=>array('FA'=>'گزارش عملکرد ','EN'=>''),
        'Logs-reg'=>array('FA'=>'  مشاهده هسته درگاه     ','EN'=>''),
        'Logs-IP'=>array('FA'=>'گزارش ورود ناموفق   ','EN'=>''),
        'UserPortable'=>array('FA'=>'پرتال کاربران       ','EN'=>''),
        'monitoring_status'=>array('FA'=>' سیستم      ','EN'=>''),
        'monitoring_pbx'=>array('FA'=>'مرکز تلفن  ','EN'=>''),
        'monitoring_ActiveCall'=>array('FA'=>'تماسهای فعال  ','EN'=>''),
        'monitoring_Extenstions'=>array('FA'=>'وضعیت داخلی ها    ','EN'=>''),
        'monitoring_gatewaysSoft'=>array('FA'=>'ترانک نرم افزاری    ','EN'=>''),
        'monitoring_gatewaysHardCity'=>array('FA'=>'ترانک   سخت افزاری شهری    ','EN'=>''),
        'monitoring_gatewaysHardPrivate'=>array('FA'=>'ترانک   سخت افزاری دیجیتال    ','EN'=>''),
        'back'=>array('FA'=>' صفحه قبل      ','EN'=>''),
        'music'=>array('FA'=>' آوای انتظار          ','EN'=>''),
        'playlists'=>array('FA'=>' لیست آواها            ','EN'=>''),
      );
      return $menu_name[$name][LANG];
  }
  public static function TextSite($value)
  {
      $text_site=array(
        'extension_not_allowed'=>array('FA'=>'فرمت فایل اپلود شده قابل قبول نیست  ','EN'=>'extension not allowed'),
        'File_Upload_Successfully'=>array('FA'=>'فایل با موفقیت بارگذاری شد..','EN'=>'File Upload Successfully'),
        'File_size'=>array('FA'=>'حجم فايل بارگذاري شده غير فابل قبول است ','EN'=>'File size must be less tham 10 MB'),
        'Upload_Failed'=>array('FA'=>'اشکال درانتقال فایل  ....  ','EN'=>'File size must be less tham 10 MB'),
        'UserProfile'=>array('FA'=>' مشاهده پروفایل','EN'=>''),
        'Exit'=>array('FA'=>' خروج','EN'=>''),
        'LoginError'=>array('FA'=>'نام کاربری یا رمز عبور اشتباه است لطفا دوباره سعی نمایید','EN'=>''),
        'Captcha_error'=>array('FA'=>'کدامنیتی وارد شده اشتباه است لطفا دوباره سعی نمایید','EN'=>''),
        'Ip_Error'=>array('FA'=>' به علت چندین ورود ناموفق در فاصله زمانی کوتاه آدرس شما به مدت 15دقیقه غیرفعال میشود،لطفا کمی صبر نمایید.','EN'=>''),
        'Ip_Dissable'=>array('FA'=>' به علت ورود ناموفق بیش از حد مجاز آدرس شما دسترسی به پنل کاربری را ندارد برای اطلاعات بیشتر با مدیر مربوطه تماس بگیرید','EN'=>''),
        'Deactive'=>array('FA'=>' کاربر محترم نام کاربری شما غیرفعال شده است برای اطلاعات بیشتر با مدیرمربوطه تماس بگیرید..','EN'=>''),
        'LoginSuccess'=>array('FA'=>'به رابط کاربری شرکت کیاتل خوش آمدید','EN'=>''),
        'Success_text'=>array('FA'=>'درخواست مورد نظر با موفقیت انجام شد...','EN'=>''),
        'Warning_text'=>array('FA'=>'متاسفانه درخواست مورد نظر با موفقیت انجام نشد...','EN'=>''),
        'NoAccess'=>array('FA'=>' کاربر گرامی باعرض پوزش شمادسترسی لازم برای مشاهده این صفحه را ندارید ','EN'=>''),
        'warning'=>array('FA'=>'اخطار','EN'=>''),
        'FileNotFound'=>array('FA'=>'موردی یافت نشد','EN'=>''),
        'attention'=>array('FA'=>'توجه','EN'=>''),
        'dodaddport'=>array('FA'=>'اختصاص پورت به پایانه','EN'=>''),
        'dodadddid'=>array('FA'=>'اختصاص مسیریابی به درگاه','EN'=>''),
        'dodport'=>array('FA'=>'   لیست پایانه ها و پورت ها','EN'=>''),
        'InfoDuplicate'=>array('FA'=>'قسمت های ستاره  دار نباید تکراری باشند لطفا دقت فرمایید ','EN'=>''),
        '404'=>array('FA'=>'متاسفانه <br/>صفحه مورد نظریافت نشد.','EN'=>''),
        'KiatelPBX'=>array('FA'=>'مرکز تلفن کیاتل','EN'=>''),
        'delete_outbound'=>array('FA'=>'کاربر محترم لطفا توجه فرمایید که درصورت حذف ممکن است روی داخلی وابسته و مسیریابی تاثیر بگذارد،لذا پیش از حذف مسیریابی و داخلی های وابسته را ویرایش کنید','EN'=>''),
        'ReportResult'=>array('FA'=>'کاربرمحترم نتیجه ایی دریافت نشدممکن است که پارامترهای ورودی نادرست باشند ، لطفا در انتخاب پارامترهای ورودی دقت فرمایید','EN'=>''),
        'Report_Result'=>array('FA'=>'تعداد کل رکوردهای مورد جستجو در بانک اطلاعاتی ','EN'=>''),
        'Time_Limit'=>array('FA'=>'زمان برحسب ثانیه وحداکثر3600ثانیه ','EN'=>''),
        'NoData'=>array('FA'=>'داده ایی برای نمایش وجود ندارد','EN'=>''), 
        'Cancel'=>array('FA'=>'ردکردن','EN'=>''),
        'Confirm'=>array('FA'=>'قبول کردن','EN'=>''),
		'Customers'=>array('FA'=>'برخی از مشتریان کیاتل','EN'=>''),
      );
      return $text_site[$value][LANG];
  }
  public static function List_Features()
  {
  	$List = array();
	return $List;
  }
   public static function List_page()
  {

      $list = array(      		
      		
            '1'		=>	array('UserPortable',array('profile_user_edit'),'مشاهده صفحه ویرایش  پروفایل کاربری'),
            '2'		=>	array('UserPortable',array('Logs'),'مشاهده صفحه درخواست گزارش پرتابل کارکنان'),
            '3'		=>	array('UserPortable',array('logsCall','ViewLogs'),'مشاهده صفحه گزارشات تماس کاربر'),
            '4'		=>	array('UserPortable',array('web','CreateWeb'),'مشاهده صفحه گزارشات عملکردکاربر'),
            '5'		=>	array('UserPortable',array('editPassWord','editProfile'),'ویرایش  پروفایل کاربری'),
            
			                                                  
            '6'		=>	array('extensions',array(),' مشاهده صفحه داخلی ها '),
            '7'		=>	array('extensions',array('create','add'),' مشاهده صفحه افزودن داخلی '),
            '8'		=>	array('extensions',array('edit','editSave','PassWordedit'),' مشاهده صفحه ویرایش  داخلی '),
            '9'		=>	array('extensions',array('view'),' مشاهده صفحه دیدن داخلی '),
            '10'	=>	array('extensions',array('delete'),' مشاهده صفحه حذف  داخلی '),
            '11'	=>	array('extensions',array('addHandsome','handsomeadd'),'اضافه کردن کاربر به صورت گروهی'),
            '12'	=>	array('extensions',array('UserRandom'),' مشاهده صفحه اضافه کردن کاربر با رمزتصادفی'),
            '13'	=>	array('extensions',array('resultgroup'),' اضافه کردن کاربر به صورت گروهی '),
            '14'	=>	array('extensions',array('deleteparameter'),'  حذف گروه کاربری از داخلی ها '),   
            '15'	=>	array('extensions',array('deleteextensionsgroup'),' حذف گروه داخلی کاربر '),
            
			
            '16'	=>	array('DialRoute',array(),' مشاهده صفحه مسيريابي تماس'),
            '17'	=>	array('DialRoute',array('add','create'),' مشاهده صفحه افزودن مسيريابي تماس'),
            '18'	=>	array('DialRoute',array('view'),'مشاهده یک مسيريابي تماس خروجی'),
            '19'	=>	array('DialRoute',array('edit','EditSave'),'مشاهده صفحه ویرایش مسيريابي تماس خروجی'),
            '20'	=>	array('DialRoute',array('delete'),' مشاهده صفحه حذف مسيريابي تماس خروجی'),
            '21'	=>	array('DialRoute',array('viewdid'),' مشاهده یک مسيريابي تماس ورودی'),
            '22'	=>	array('DialRoute',array('editdid','didedit'),' مشاهده صفحه ویرایش مسيريابي تماس ورودی'),
            '23'	=>	array('DialRoute',array('deletedid'),' مشاهده صفحه حذف مسيريابي تماس ورودی'),
            
			
			'24'	=>	array('group',array(),' مشاهده صفحه گروه های دسترسی'),
			'25'	=>	array('group',array('add','create'),' مشاهده صفحه افزودن گروه دسترسی'),
			'26'	=>	array('group',array('edit','editSave'),' مشاهده صفحه ویرایش  گروه دسترسی'),
			'27'	=>	array('group',array('delete'),' مشاهده صفحه حذف  گروه دسترسی'),
			'28'	=>	array('group',array('groupadduser','group_add_users','adduser'),' مشاهده صفحه افزودن کاربربه گروه دسترسی'),
			'29'	=>	array('group',array('groupaddpermission','group_add_permission','addpermission'),' مشاهده صفحه افزودن دسترسی به گروه'),
			'30'	=>	array('group',array('groupeditpermission','group_edit_permissions'),' حذف یک دسترسی از گروه'),
			'31'	=>	array('group',array('group_edit_users','groupedituser'),'  حذف یک کاربر از گروه'),
			
			
			
			'32'	=>	array('InboundCallGroup',array(),' مشاهده صفحه گروه تماس هاي داخلی'),
			'33'	=>	array('InboundCallGroup',array('add','create'),' مشاهده صفحه افزودن گروه تماس هاي داخلی'),
			'34'	=>	array('InboundCallGroup',array('delete'),' مشاهده صفحه   حذف  گروه تماس هاي داخلی'),
			'35'	=>	array('InboundCallGroup',array('Extensions'),' مشاهده صفحه   لیست اعضا گروه تماس هاي داخلی'),
			'36'	=>	array('InboundCallGroup',array('AddExtensions','AddExtens'),' مشاهده صفحه   افزودن   اعضا  گروه تماس هاي داخلی'),
			'37'	=>	array('InboundCallGroup',array('DeleteExtension'),' مشاهده صفحه   حذف   اعضا  گروه تماس هاي داخلی'),
			'38'	=>	array('InboundCallGroup',array('edit','editsave'),'  مشاهده صفحه   ویرایش گروه تماس هاي داخلی'),
			
			 
			'39'	=>	array('OutboundDialGroup',array(),' مشاهده صفحه گروه تماس'),
			'40'	=>	array('OutboundDialGroup',array('add','create'),' افزودن گروه تماس'),  
			'41'	=>	array('OutboundDialGroup',array('edit','editsave'),' ویرایش گروه تماس'),  
			'42'	=>	array('OutboundDialGroup',array('delete'),' حذف گروه تماس'),  
			'43'	=>	array('OutboundDialGroup',array('view'),' مشاهده یک گروه تماس خاص'),  
			'44'	=>	array('OutboundDialGroup',array('DialRoute'),' مشاهده مسیریابی های یک گروه تماس'),  
			'45'	=>	array('OutboundDialGroup',array('Extensions'),' مشاهده اعضا یک گروه تماس'),  
			'46'	=>	array('OutboundDialGroup',array('AddDialRoute','AddDial'),' افزودن مسیریابی به یک گروه تماس'),  
			'47'	=>	array('OutboundDialGroup',array('AddExtensions','AddExtens'),' افزودن اعضا به یک گروه تماس'),    
			'48'	=>	array('OutboundDialGroup',array('DialRouteDelete'),' حذف مسیریابی از گروه تماس'),  
			'49'	=>	array('OutboundDialGroup',array('ExtensionDelete'),' حذف کاربر از گروه تماس '),  
			
			
			'50'	=>	array('permission',array(),'مشاهده صفحه لیست دسترسی ها'),
			'51'	=>	array('permission',array('add','create','All_Permissions_Add'),'مشاهده صفحه افزودن دسترسی'),
			'52'	=>	array('permission',array('edit','editsave'),'مشاهده صفحه ویرایش دسترسی'),
			'53'	=>	array('permission',array('delete'),'مشاهده صفحه حذف دسترسی'),
			   
			   
			   
			'54'	=>	array('ivr',array(),'مشاهده صفحه پاسخگوي خودكار'),
			'55'	=>	array('ivr',array('add','create'),'مشاهده صفحه افزودن پاسخگوي خودكار'),
			'56'	=>	array('ivr',array('edit','Save'),'مشاهده صفحه ویرایش پاسخگوي خودكار'),
			'57'	=>	array('ivr',array('delete'),'مشاهده صفحه حذف پاسخگوي خودكار'),
			'58'	=>	array('ivr',array('Keys'),'مشاهده صفحه افزودن کلید پاسخگوي خودكار'),
			'59'	=>	array('ivr',array('KeysAdd'),'مشاهده صفحه افزودن کلید پاسخگوي خودكار'),
			'60'	=>	array('ivr',array('KeysDelete'),'مشاهده صفحه حذف  کلید پاسخگوي خودكار'),
			'61'	=>	array('ivr',array('TimeSheet'),'مشاهده صفحه  تعیین محدوده زمانی پاسخگوي خودكار'),
			'62'	=>	array('ivr',array('TimeSheetAdd'),'مشاهده صفحه  افزودن تعیین محدوده زمانی پاسخگوي خودكار'),
			'63'	=>	array('ivr',array('TimeSheetDelete'),'مشاهده صفحه  حذف تعیین محدوده زمانی پاسخگوي خودكار'),
			
			
			
			'64'	=>	array('reports',array(),'مشاهده صفحه گزارشات'),
			'65'	=>	array('reports',array('logsCall','ViewLogs','excell'),'مشاهده صفحه گزارشات تماس'),
			'66'	=>	array('reports',array('web','CreateWeb'),'مشاهده صفحه گزارشات عملکرد'),
			'67'	=>	array('reports',array('ip_block','Block_Ip','DeleteBlockIp','BlockIp_Delete'),'مشاهده صفحه گزارشات آدرسهای مسدود شده'),
			'68'	=>	array('reports',array('ActiveID'),' مشاهده صفحه حذف     کاربران غیرفعال'),
			
			
			'69'	=>	array('tools',array(),'مشاهده صفحه ابزار'),
			'70'	=>	array('tools',array('logs_gateways'),'مشاهده صفحه گزارشات درخواست'),
			'71'	=>	array('tools',array('logs_system'),'مشاهده صفحه گزارشات سیستم'),
			'72'	=>	array('tools',array('pcap_list','pcap'),'مشاهده صفحه لیست pcap'),
			'73'	=>	array('tools',array('delete_pcap'),'حذف یک pcap'),
			'74'	=>	array('tools',array('PingIp','ping_result'),'مشاهده صفحه ping'),
			'75'	=>	array('tools',array('TraceIp','trace_result'),'مشاهده صفحه Trace'),
			'108'	=>	array('tools',array('RejectLogs','call_result'),'مشاهده تماسهای نامعتبر'),
			
			
			'76'	=>	array('setting',array(),'مشاهده صفحه تنظیمات'),
			'77'	=>	array('setting',array('QuickSetup'),'مشاهده صفحه راه اندازی سریع'),
			'78'	=>	array('setting',array('NameNode'),'مشاهده صفحه  تغییر نام مرکز'),
			'79'	=>	array('setting',array('TimeChange'),'مشاهده صفحه تغییر زمان'),
			'80'	=>	array('setting',array('restart'),'مشاهده صفحه راه اندازی مجدد'),
			'81'	=>	array('setting',array('ShutDown'),'مشاهده صفحه خاموش کردن'),
			'82'	=>	array('setting',array('NetworkChange'),'مشاهده صفحه تنظیمات شبکه آدرس دهی مرکز'),
			'83'	=>	array('setting',array('RTPChange'),'مشاهده صفحه تنظیمات شبکه آدرس دهی مبدل صوت'),
			'84'	=>	array('setting',array('DNSChange'),'مشاهده صفحه تنظیمات شبکه آدرس دهی سرورهای نام'),
			'110'	=>	array('setting',array('cards_add','add_cards','delete','edit_cards','cards_edit'),'مدیریت کارت در مرکزتلفن'),
			'111'	=>	array('setting',array('features_add','add_features','features_edit','edit_features','features_delete'),'مشاهده صفحه تنظیمات قابلیت های سیستم '),
			//'109'	=>	array('setting',array('port_add','add_ports','port_list'),'اضافه کردن پورت به کارت  '),
			
			'85'	=>	array('trunks',array(),'مشاهده صفحه لیست درگاه ها'),
			'86'	=>	array('trunks',array('add','create'),'مشاهده صفحه افزودن درگاه'),
			'87'	=>	array('trunks',array('edit','editsave'),'مشاهده صفحه ویرایش درگاه نرم افزاری'),
			'88'	=>	array('trunks',array('delete'),'مشاهده صفحه حذف  درگاه نرم افزاری'),
			'89'	=>	array('trunks',array('view'),'مشاهده یک درگاه نرم افزاری خاص'),
			'90'	=>	array('trunks',array('viewhardware'),'مشاهده یک درگاه سخت افزاری شهری خاص'),
			'91'	=>	array('trunks',array('edithardware','hardwareedit'),'ویرایش یک درگاه سخت افزاری شهری خاص'),
			'92'	=>	array('trunks',array('deletehardware'),' حذف یک درگاه سخت افزاری شهری خاص'),
			'93'	=>	array('trunks',array('viewprivate'),'مشاهده یک درگاه سخت افزاری دیجیتال خاص'),
			'94'	=>	array('trunks',array('editprivate','PrivateEdit'),'ویرایش یک درگاه سخت افزاری دیجیتال خاص'),
			'95'	=>	array('trunks',array('deleteprivate'),'حذف یک درگاه سخت افزاری دیجیتال خاص'),
			'96'	=>	array('trunks',array('dodport'),'مشاهده صفحه لیست پورت وپایانه ها'),
			'97'	=>	array('trunks',array('dodaddport','portadd'),'مشاهده صفحه افزودن پورت وپایانه ها'),
			'98'	=>	array('trunks',array('dodeditport','portedit'),'مشاهده صفحه ویرایش  پورت وپایانه ها'),
			'99'	=>	array('trunks',array('deleteport'),'مشاهده صفحه حذف  پورت وپایانه ها'),
			'100'	=>	array('trunks',array('didadddialroute','adddiddialroute','dideditdialroute','editdiddialroute'),'مشاهده صفحه افزودن مسیریابی ورودی به درگاه سخت افزاری'),
			'101'	=>	array('trunks',array('diddialroute'),'مشاهده صفحه لیست مسیریابی ورودی یک درگاه سخت افزاری'),
			'102'	=>	array('trunks',array('deletediddialroute'),'مشاهده صفحه حذف مسیریابی ورودی از درگاه سخت افزاری'),
			
			
			
			'103'	=>	array('monitoring',array('status'),'مشاهده منوی اصلی نظارت بر سیستم بخش مشخصات سخت افزاری'),
			'104'	=>	array('monitoring',array('pbx'),'مشاهده منوی اصلی نظارت بر سیستم بخش مرکز تلفن'),
			
			
			'105'	=>	array('SubMenu_Phone',array(),'مشاهده منوی اصلی مرکز تلفن'),
			'106'	=>	array('SubMenu_Group',array(),'مشاهده منوی اصلی گروهها'),
			'107'	=>	array('SubMenu_Monitoring',array(),'مشاهده منوی اصلی نظارت بر سیستم'),   
			
			'120'	=>	array('playlists',array(),'مشاهده صفحه لیست موزیکهای انتخاب شده   '),
			'121'	=>	array('playlists',array('add','create'),'مشاهده صفحه افزودن لیست موزیک'),
			'122'	=>	array('playlists',array('edit','editsave'),'مشاهده صفحه ویرایش لیست موزیک '),
			'123'	=>	array('playlists',array('delete'),'مشاهده صفحه حذف لیست موزیک   '),
			'124'	=>	array('playlists',array('music','music_add','music_create','music_edit','music_editsave','music_delete'),'  مدیریت آوای انتظار '),
			'125'	=>	array('playlists',array('playlist_music','playlist_music_create',/*'playlist_music_add','playlist_music_edit','playlist_music_editsave',*/'playlist_music_delete'),'آوای انتظار لیست           '),
			     
            );
	
		return $list;
  }   
	 public static function MapTop($url)
  {
  	  $MapTop= array(
	  	'index'=>array('صفحه نخست','icon-dashboard'),
        'site_map'=>array('مشاهده سایت',''),
        'users_permission'=>array('کاربران و دسترسی',''),
        'users'=>array('کاربران','icon-user'),
        'allgroups'=>array('گروه ها',''),
        'group'=>array('گروه  كاربري','icon-key'),
        'permissons'=>array(' لیست دسترسی ها ','icon-unlock-alt'),
        'setting'=>array('تنظیمات ','icon-cog'),
        'logs'=>array('گزارشات','icon-warning-sign'),
        'help'=>array('راهنما',''),
        'pbx'=>array(' مرکز تلفن','icon-desktop'),
        'monitoring'=>array('نظارت','icon-eye-open'),        
        'Logs-IP'=>array('گزارش ای پی های مسدودی   ','icon-warning-sign'),
        'Logs-Web'=>array('گزارش عملکرد کاربران   ','icon-warning-sign'),
        'UserPortable'=>array('پرتال کاربران  ','icon-user'),
	  );
	  	
      $url = isset($_GET['url']) ? $_GET['url'] : null;
      $url = rtrim($url, '/');
      $url = filter_var($url, FILTER_SANITIZE_URL);
      $page = explode('/', $url);
      //print_r($page);
      $controller = (isset($page[0]))?$page[0]:null;
	  $method 	  = (isset($page[1]))?$page[1]:null;
      $LengthPage= count($page);
      //echo $LengthPage;
      switch ($LengthPage) {
                case 5:
                    //Controller->Method(Param1, Param2, Param3)
                    if($controller=='index'){
						$CurrentPage='<a href="'.URL.'index" title="'.$MapTop['index'][0].'"><span class="icon-dashboard"></a>';
					}else{
						$CurrentPage='<a href="'.URL.'index" title="'.$MapTop['index'][0].'"><span class="icon-dashboard"></a>'.' > '.'<a href="'.URL.$controller.'" title="'.$MapTop[$controller][0].'"><span class="'.$MapTop[$controller][1].'"></a>';
					}
                    break;                
                case 4:
                    //Controller->Method(Param1, Param2)
                    if($controller=='index'){
						$CurrentPage='<a href="'.URL.'index" title="'.$MapTop['index'][0].'"><span class="icon-dashboard"></a>';
					}else{
						$CurrentPage='<a href="'.URL.'index" title="'.$MapTop['index'][0].'"><span class="icon-dashboard"></a>'.' > '.'<a href="'.URL.$controller.'" title="'.$MapTop[$controller][0].'"><span class="'.$MapTop[$controller][1].'"></a>';
					}
                    break;                
                case 3:
                    //Controller->Method(Param1, Param2)
                    if($controller=='index'){
						$CurrentPage='<a href="'.URL.'index" title="'.$MapTop['index'][0].'"><span class="icon-dashboard"></a>';
					}else{
						$CurrentPage='<a href="'.URL.'index" title="'.$MapTop['index'][0].'"><span class="icon-dashboard"></a>'.' > '.'<a href="'.URL.$controller.'" title="'.$MapTop[$controller][0].'"><span class="'.$MapTop[$controller][1].'"></a>';
					}
                    break;                
                case 2:
					if($controller=='index'){
						$CurrentPage='<a href="'.URL.'index" title="'.$MapTop['index'][0].'"><span class="icon-dashboard"></a>';
					}else{
						$CurrentPage='<a href="'.URL.'index" title="'.$MapTop['index'][0].'"><span class="icon-dashboard"></a>'.' > '.'<a href="'.URL.$controller.'" title="'.$MapTop[$controller][0].'"><span class="'.$MapTop[$controller][1].'"></a>';
					}
                    //Controller->Method(Param1, Param2)
                    
                    break;            
                default:
					if($controller=='index'){
						$CurrentPage='<a href="'.URL.'index" title="'.$MapTop['index'][0].'"><span class="icon-dashboard"></a>';
					}else{
						$CurrentPage='<a href="'.URL.'index" title="'.$MapTop['index'][0].'"><span class="icon-dashboard"></a>'.' > '.'<a href="'.URL.$controller.'" title="'.$MapTop[$controller][0].'"><span class="'.$MapTop[$controller][1].'"></a>';
					}
                    break;
            }
		return $CurrentPage;
  } 
}



