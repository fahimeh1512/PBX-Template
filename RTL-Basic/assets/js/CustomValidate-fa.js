$(document).ready(function(){
	//Required, Email, Date, Url, ... are name of CLASSESS.
    $.validator.addClassRules({
        Required:{
            pRequired: true
        },
		Email: {
			pRequired: true,
			pEmail: true
		},		
		Date: {
            pRequired: true,
            pDate: true
        },
        Url: {
			pRequired: true,
			pUrl: true
		},
		Password: {
			pRequired: true,
			pMinlength: 5
		},
		Confirm_Password: {
			pRequired: true,
			pMinlength: 5,
			pEqualTo: ".Password"
		},
		Digits: {
			pRequired: true,
			pDigits: true
		},
		Range: {
			pRequired: true,
			pRange: [5, 16]
		},
		Minsize: {
			pRequired: true,
			pMinlength: 3
		},
		Maxsize: {
			pRequired: true,
			pMaxlength: 6
		},
		MinNum: {
			pRequired: true,
			pMin: 3
		},
		MaxNum: {
			pRequired: true,
			pMax: 16
		},
		Select: {
			pRequired: true,
			pNotEqualTo: "option1"
		},
		Multi_Select: {
			pRequired: true,
			pMinlength: 2
		},
		Maxsize2: {
			pMaxlength: 6
		},
		DateISO: {
			pRequired: true,
			pDateISO: true
		},
		Ip: {
			pRequired: true,
			pIP4Checker: true
		},
		Float_Num: {
			pRequired: true,
			pFloat_Num: true
		}
    });

	//Persian Messages
    $.validator.addMethod("pRequired", $.validator.methods.required,"پر کردن اين فيلد اجباري است.");
    $.validator.addMethod("pEmail", $.validator.methods.email,"لطفاً يک آدرس ايميل معتبر وارد کنيد.");
	$.validator.addMethod("pDate", $.validator.methods.date,"لطفاً يک تاريخ معتبر وارد کنيد.");
	$.validator.addMethod("pDateISO", $.validator.methods.dateISO,"لطفاً يک تاريخ معتبر وارد کنيد.");
	$.validator.addMethod("pUrl", $.validator.methods.url,"لطفاً يک آدرس سايت معتبر وارد کنيد.");
	$.validator.addMethod("pMinlength", $.validator.methods.minlength,
    $.validator.format("اين فيلد بايد حداقل {0} کاراکتر باشد."));
	$.validator.addMethod("pMaxlength", $.validator.methods.maxlength,
    $.validator.format("اين فيلد بايد حداکثر {0} کاراکتر باشد."));
	$.validator.addMethod("pMin", $.validator.methods.min,
    $.validator.format("لطفاً عددي بزرگتر يا مساوي {0} وارد کنيد."));
	$.validator.addMethod("pMax", $.validator.methods.max,
    $.validator.format("لطفاً عددي کوچکتر يا مساوي  {0} وارد کنيد."));
	$.validator.addMethod("pEqualTo", $.validator.methods.equalTo,"لطفاً دوباره همان مقدار را وارد کنيد.");
	$.validator.addMethod("pDigits", $.validator.methods.digits,"لطفاً فقط عدد وارد کنيد.");
	$.validator.addMethod("pRange", $.validator.methods.range,"لطفاً عددي در بازه مشخص شده وارد کنيد.");
	
	jQuery.validator.addMethod(
          "pNotEqualTo",
          function(elementValue,element,param) {
            return elementValue != param;
          },
          "Value cannot be {0}"
    );
	$.validator.addMethod('pIP4Checker', function(value) {

    var ip="^([01]?\\d\\d?|2[0-4]\\d|25[0-5])\\." +
    "([01]?\\d\\d?|2[0-4]\\d|25[0-5])\\." +
    "([01]?\\d\\d?|2[0-4]\\d|25[0-5])\\." +
    "([01]?\\d\\d?|2[0-4]\\d|25[0-5])$";
        return value.match(ip);
    }, 'Invalid IP address');	
	
	$.validator.addMethod('pFloat_Num', function(value) {
		var is_number = $.isNumeric(value);
		return is_number;
    }, 'Invalid float number');	
   
	// override jquery validate plugin defaults
	$.validator.setDefaults({
		highlight: function (element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-success').addClass('has-error');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-error').addClass('has-success');
        },
		errorElement: 'span',
		errorClass: 'help-block',
		errorPlacement: function(error, element) {
			if(element.parent('.input-group').length) {
				error.insertAfter(element.parent());
			} else {
				error.insertAfter(element);
			}
		}
	});
   $(".block-validate").validate();
});