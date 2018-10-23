<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8" />
    <title>داشبورد </title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.rtl.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/theme.css" />
    <link rel="stylesheet" href="assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="assets/css/layout2.css" rel="stylesheet" />
       <link href="assets/plugins/flot/examples/examples.css" rel="stylesheet" />
       <link rel="stylesheet" href="assets/plugins/timeline/timeline.css" />
    <!-- END PAGE LEVEL  STYLES -->
     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	<script src="jquery-2.0.3.min.js"></script>
	<script src="progressbar.js"></script>
	<script type="text/javascript">
	
		$( document ).ready(function(){
			 $('[data-toggle="tooltip"]').tooltip(); 
		for ( i=0; i<3; i++ ) {
			var progress = document.getElementById("progress" + (i+1));
			
			var bar = new ProgressBar.SemiCircle(progress, {
		  strokeWidth: 6,
		  color: '#FFEA82',
		  trailColor: '#eee',
		  trailWidth: 1,
		  easing: 'easeInOut',
		  duration: 1400,
		  svgStyle: null,
		  text: {
			value: '',
			alignToBottom: false
		  },
		  from: {color: '#FFEA82'},
		  to: {color: '#ED6A5A'},
		  // Set default step function for all animate calls
		  step: (state, bar) => {
			bar.path.setAttribute('stroke', state.color);
			var value = Math.round(bar.value() * 100);
			if (value === 0) {
			  bar.setText('');
			} else {
			  bar.setText(value+"%");
			}

			bar.text.style.color = state.color;
		  }
		});
		
		bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
		bar.text.style.fontSize = '2rem';

		bar.animate(0.75);  // Number from 0.0 to 1.0
		}
		
		});
		
	</script>
	<style>
		#right {
		}
		
	    #content {
		    display: block;
			width: auto;
			width: 100%;
		}
		
		/*#content .col-lg-4, #content .col-lg-6, #content .col-lg-12 {
			float: left;
			margin-left: auto;
			margin-right: auto;
		}*/
		
		#progress1, #progress2, #progress3 {
			width: 100%;
			height: 50px;
		}
		
		.min {
			width: 100px;
			float: left;
			margin: 18px;
		}
		.min:before {
			content: attr(data-title);
			display: block;
			min-width: 100px;
			text-align: center;
			margin-bottom: 0;
		}
		
		
		.state {
			width: 50px;
			height: 20px;
			background-color: red;
			color: white;
			border-radius: 2px;
			padding: 4px;
			float: left;
			font-size: 11px;
			text-align: center;
			margin-right: 10px;
		}
		
		table {
			 text-align: left;
		}
		.tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: black;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;

    /* Position the tooltip */
    position: absolute;
    z-index: 1;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
}

</style>
</head>

    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body class="padTop53 " >

    <!-- MAIN WRAPPER -->
    <div id="wrap" >
        


        <!-- MENU SECTION -->
       <div id="right">
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/user.gif" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"> محمدرضا</h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> آنلاین
                           
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">

                
                <li class="panel active">
                    <a href="index.html" >
                        <i class="icon-table"></i> داشبورد
	   
                       
                    </a>                   
                </li>



                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                        <i class="icon-tasks"> </i> المنت های طراحی     
	   
                        <span class="pull-left">
                          <i class="icon-angle-right"></i>
                        </span>
                       &nbsp; <span class="label label-default">10</span>&nbsp;
                    </a>
                    <ul class="collapse" id="component-nav">
                       
                        <li class=""><a href="button.html"><i class="icon-angle-left"></i> دکمه ها </a></li>
                         <li class="active"><a href="icon.html"><i class="icon-angle-left"></i> آیکون ها </a></li>
                        <li class=""><a href="progress.html"><i class="icon-angle-left"></i> نوار پیشرفت </a></li>
                        <li class=""><a href="tabs_panels.html"><i class="icon-angle-left"></i> تب ها و پنل ها </a></li>
                        <li class=""><a href="notifications.html"><i class="icon-angle-left"></i> اطلاع رسانی ها </a></li>
                         <li class=""><a href="more_notifications.html"><i class="icon-angle-left"></i> اطلاع رسانی ها بیشتر </a></li>
                        <li class=""><a href="modals.html"><i class="icon-angle-left"></i> مودال ها </a></li>
                          <li class=""><a href="wizard.html"><i class="icon-angle-left"></i> ویزارد </a></li>
                         <li class=""><a href="sliders.html"><i class="icon-angle-left"></i> اسلایدر </a></li>
                        <li class=""><a href="typography.html"><i class="icon-angle-left"></i> تایپوگرافی </a></li>
                    </ul>
                </li>
                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                        <i class="icon-pencil"></i> فرم ها
	   
                        <span class="pull-left">
                            <i class="icon-angle-right"></i>
                        </span>
                          &nbsp; <span class="label label-success">5</span>&nbsp;
                    </a>
                    <ul class="collapse" id="form-nav">
                        <li class=""><a href="forms_general.html"><i class="icon-angle-left"></i> عمومی </a></li>
                        <li class=""><a href="forms_advance.html"><i class="icon-angle-left"></i> پیشرفته </a></li>
                        <li class=""><a href="forms_validation.html"><i class="icon-angle-left"></i> اعتبارسنجی </a></li>
                        <li class=""><a href="forms_fileupload.html"><i class="icon-angle-left"></i> آپلود فایل </a></li>
                        <li class=""><a href="forms_editors.html"><i class="icon-angle-left"></i> ویرایشگر </a></li>
                    </ul>
                </li>

                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-nav">
                        <i class="icon-table"></i> صفحات
	   
                        <span class="pull-left">
                            <i class="icon-angle-right"></i>
                        </span>
                          &nbsp; <span class="label label-info">6</span>&nbsp;
                    </a>
                    <ul class="collapse" id="pagesr-nav">
                        <li><a href="pages_calendar.html"><i class="icon-angle-left"></i> تقویم </a></li>
                        <li><a href="pages_timeline.html"><i class="icon-angle-left"></i> تایم لاین </a></li>
                        <li><a href="pages_social.html"><i class="icon-angle-left"></i> شبکه های اجتماعی </a></li>
                        <li><a href="pages_pricing.html"><i class="icon-angle-left"></i> قیمت گذاری </a></li>
                        <li><a href="pages_offline.html"><i class="icon-angle-left"></i> آفلاین </a></li>
                        <li><a href="pages_uc.html"><i class="icon-angle-left"></i> در دست ساخت </a></li>
                    </ul>
                </li>
                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#chart-nav">
                        <i class="icon-bar-chart"></i> نمودارها
	   
                        <span class="pull-left">
                            <i class="icon-angle-right"></i>
                        </span>
                          &nbsp; <span class="label label-danger">4</span>&nbsp;
                    </a>
                    <ul class="collapse" id="chart-nav">



                        <li><a href="charts_line.html"><i class="icon-angle-left"></i> نمودارهای خطی </a></li>
                        <li><a href="charts_bar.html"><i class="icon-angle-left"></i> نمودارهای میله ای</a></li>
                        <li><a href="charts_pie.html"><i class="icon-angle-left"></i> نمودارهای دایره ای </a></li>
                        <li><a href="charts_other.html"><i class="icon-angle-left"></i> سایر نمودارها </a></li>
                    </ul>
                </li>

                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#DDL-nav">
                        <i class=" icon-sitemap"></i> منوی 3 سطحی
	   
                        <span class="pull-left">
                            <i class="icon-angle-right"></i>
                        </span>
                    </a>
                    <ul class="collapse" id="DDL-nav">
                        <li>
                            <a href="#" data-parent="#DDL-nav" data-toggle="collapse" class="accordion-toggle" data-target="#DDL1-nav">
                                <i class="icon-sitemap"></i>&nbsp; لینک 1
	   
                        <span class="pull-left" style="margin-left: 20px;">
                            <i class="icon-angle-right"></i>
                        </span>


                            </a>
                            <ul class="collapse" id="DDL1-nav">
                                <li>
                                    <a href="#"><i class="icon-angle-left"></i> لینک 1 </a>

                                </li>
                                <li>
                                    <a href="#"><i class="icon-angle-left"></i> لینک 2 </a></li>
                                <li>
                                    <a href="#"><i class="icon-angle-left"></i> لینک 3 </a></li>

                            </ul>

                        </li>
                        <li><a href="#"><i class="icon-angle-left"></i> لینک 2 </a></li>
                        <li><a href="#"><i class="icon-angle-left"></i> لینک 3 </a></li>
                        <li><a href="#"><i class="icon-angle-left"></i> لینک 4 </a></li>
                    </ul>
                </li>
                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#DDL4-nav">
                        <i class=" icon-folder-open-alt"></i> منوی 4 سطحی
	   
                        <span class="pull-left">
                            <i class="icon-angle-right"></i>
                        </span>
                    </a>
                    <ul class="collapse" id="DDL4-nav">
                        <li>
                            <a href="#" data-parent="DDL4-nav" data-toggle="collapse" class="accordion-toggle" data-target="#DDL4_1-nav">
                                <i class="icon-sitemap"></i>&nbsp; لینک 1
	   
                        <span class="pull-left" style="margin-left: 20px;">
                            <i class="icon-angle-right"></i>
                        </span>


                            </a>
                            <ul class="collapse" id="DDL4_1-nav">
                                <li>

                                    <a href="#" data-parent="#DDL4_1-nav" data-toggle="collapse" class="accordion-toggle" data-target="#DDL4_2-nav">
                                        <i class="icon-sitemap"></i>&nbsp; لینک 1
	   
                        <span class="pull-left" style="margin-left: 20px;">
                            <i class="icon-angle-right"></i>
                        </span>
                                    </a>
                                    <ul class="collapse" id="DDL4_2-nav">



                                        <li><a href="#"><i class="icon-angle-left"></i> لینک 1 </a></li>
                                        <li><a href="#"><i class="icon-angle-left"></i> لینک2 </a></li>
                                    </ul>



                                </li>
                                <li><a href="#"><i class="icon-angle-left"></i> لینک 2 </a></li>
                                <li><a href="#"><i class="icon-angle-left"></i> لینک 3 </a></li>
                            </ul>

                        </li>
                        <li><a href="#"><i class="icon-angle-left"></i> لینک 2 </a></li>
                        <li><a href="#"><i class="icon-angle-left"></i> لینک 3 </a></li>
                        <li><a href="#"><i class="icon-angle-left"></i>  لینک4 </a></li>
                    </ul>
                </li>
                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#error-nav">
                        <i class="icon-warning-sign"></i> صفحات خطاها
	   
                        <span class="pull-left">
                            <i class="icon-angle-right"></i>
                        </span>
                          &nbsp; <span class="label label-warning">5</span>&nbsp;
                    </a>
                    <ul class="collapse" id="error-nav">
                        <li><a href="errors_403.html"><i class="icon-angle-left"></i> خطای 403  </a></li>
                        <li><a href="errors_404.html"><i class="icon-angle-left"></i> خطای 404  </a></li>
                        <li><a href="errors_405.html"><i class="icon-angle-left"></i> خطای 405  </a></li>
                        <li><a href="errors_500.html"><i class="icon-angle-left"></i> خطای 500  </a></li>
                        <li><a href="errors_503.html"><i class="icon-angle-left"></i> خطای 503  </a></li>
                    </ul>
                </li>


                <li><a href="gallery.html"><i class="icon-film"></i> گالری تصاویر </a></li>
                <li><a href="tables.html"><i class="icon-table"></i> جدول ها </a></li>
                <li><a href="maps.html"><i class="icon-map-marker"></i> نقشه ها </a></li>

                <li><a href="grid.html"><i class="icon-columns"></i> گرید </a></li>
                  <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#blank-nav">
                        <i class="icon-check-empty"></i> صفحات خالی
	   
                        <span class="pull-left">
                            <i class="icon-angle-right"></i>
                        </span>
                         &nbsp; <span class="label label-success">2</span>&nbsp;
                    </a>
                      <ul class="collapse" id="blank-nav">
                       
                        <li><a href="blank.html"><i class="icon-angle-left"></i> صفحه خالی اول </a></li>
                        <li><a href="blank2.html"><i class="icon-angle-left"></i> صفحه خالی دوم  </a></li>
                    </ul>
                </li>
                <li><a href="login.html"><i class="icon-signin"></i> صفحه ورود </a></li>

            </ul>

        </div>
        <!--END MENU SECTION -->



        <!--PAGE CONTENT -->
        <div id="content">
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
				<div class="tooltip">Hover over me
  <span class="tooltiptext">Tooltip text</span>
</div>
                        <h1> داشبورد </h1>
                    </div>
                </div>
                  <hr />
                 
                   <!-- CHART & CHAT  SECTION -->
                 <div class="row" style="border: 1px solid blue;">
                    <div class="col-lg-6" style="border: 1px solid red;">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                SYSTEM
                            </div>
							<div class="panel-body">
							
							</div>
                

                        </div>

                    </div>

                    
                     <div class="col-lg-6" style="border: 1px solid red">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                LOAD AVERAGE
                            </div>

                            <div class="panel-body">
                                <div class="min" data-title="1min">
									<div id="progress1">
									</div>
								</div>
								<div class="min" data-title="5min">
									<div id="progress2">
									</div>
								</div>
								<div class="min" data-title="15min">
									<div id="progress3">
									</div>
								</div>
								<table class="table table-striped table-bordered table-hover">
									<tbody>
										<tr><td><span class="state" style="background-color: green;">ONLINE</span>Web Server</td></tr>
										<tr><td><span class="state">OFFLINE</span>Emai Server </td></tr>
										<tr><td><span class="state">OFFLINE</span>Emai Server </td></tr>
										<tr><td><span class="state">OFFLINE</span>FTP Server</td></tr>
										<tr><td><span class="state">OFFLINE</span>Database Server</td></tr>
										<tr><td><span class="state">OFFLINE</span>SSH</td></tr>
									</tbody>
								</table>
                            </div>

                            

                        </div>


                    </div>
				</div>
				<div class="row" style="border: 1px solid blue;">
					<div class="col-lg-6" style="border: 1px solid red;">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                NETWORK USAGE
                            </div>
							<div class="panel-body">
							<table class="table table-striped table-bordered table-hover">
									<tbody>
										<tr><td><span class="state" style="background-color: green;">ONLINE</span>Web Server</td></tr>
										<tr><td><span class="state">OFFLINE</span>Emai Server </td></tr>
										<tr><td><span class="state">OFFLINE</span>Emai Server </td></tr>
										<tr><td><span class="state">OFFLINE</span>FTP Server</td></tr>
										<tr><td><span class="state">OFFLINE</span>Database Server</td></tr>
										<tr><td><span class="state">OFFLINE</span>SSH</td></tr>
									</tbody>
								</table>
							</div>
                

                        </div>

                    </div>

                    
                     <div class="col-lg-6" style="border: 1px solid red;">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                CPU
                            </div>

                            <div class="panel-body">
                                <table class="table table-striped table-bordered table-hover">
									<tbody>
										<tr><td><span class="state" style="background-color: green;">ONLINE</span>Web Server</td></tr>
										<tr><td><span class="state">OFFLINE</span>Emai Server </td></tr>
										<tr><td><span class="state">OFFLINE</span>Emai Server </td></tr>
										<tr><td><span class="state">OFFLINE</span>FTP Server</td></tr>
										<tr><td><span class="state">OFFLINE</span>Database Server</td></tr>
										<tr><td><span class="state">OFFLINE</span>SSH</td></tr>
									</tbody>
								</table>
                            </div>

                            

                        </div>


                    </div>
                </div>
                 
                <div class="row" style="border: 1px solid blue;">
                    <div class="col-lg-12" style="border: 1px solid red;">

                        <div class="panel panel-default" style="float: left; width: 100%;">
                            <div class="panel-heading">
                                DISK USAGE
                            </div>

                            <div class="panel-body">
                                <table class="table table-striped table-bordered table-hover">
									<tbody>
										<tr><td><span class="state" style="background-color: green;">ONLINE</span>Web Server</td></tr>
										<tr><td><span class="state">OFFLINE</span>Emai Server </td></tr>
										<tr><td><span class="state">OFFLINE</span>Emai Server </td></tr>
										<tr><td><span class="state">OFFLINE</span>FTP Server</td></tr>
										<tr><td><span class="state">OFFLINE</span>Database Server</td></tr>
										<tr><td><span class="state">OFFLINE</span>SSH</td></tr>
									</tbody>
								</table>
                            </div>
                        </div>
						

                    </div>
                </div>
               
                <div class="row" style="border: 1px solid blue;">
                   <div class="col-lg-6" style="border: 1px solid red;">
                    <div class="panel panel-default">
                            <div class="panel-heading">
                            MEMORY
                            </div>

                            <div class="panel-body">
							</div>
								<table class="table table-striped table-bordered table-hover">
									<tbody>
										<tr><td><span class="state" style="background-color: green;">ONLINE</span>Web Server</td></tr>
										<tr><td><span class="state">OFFLINE</span>Emai Server </td></tr>
										<tr><td><span class="state">OFFLINE</span>Emai Server </td></tr>
										<tr><td><span class="state">OFFLINE</span>FTP Server</td></tr>
										<tr><td><span class="state">OFFLINE</span>Database Server</td></tr>
										<tr><td><span class="state">OFFLINE</span>SSH</td></tr>
									</tbody>
								</table>
                            </div>
                    </div>
					<div class="col-lg-6" style="border: 1px solid red;">
                    <div class="panel panel-default">
                            <div class="panel-heading">
                            SWAP
                            </div>

                            <div class="panel-body">
							</div>
								<table class="table table-striped table-bordered table-hover">
									<tbody>
										<tr><td><span class="state" style="background-color: green;">ONLINE</span>Web Server</td></tr>
										<tr><td><span class="state">OFFLINE</span>Emai Server </td></tr>
										<tr><td><span class="state">OFFLINE</span>Emai Server </td></tr>
										<tr><td><span class="state">OFFLINE</span>FTP Server</td></tr>
										<tr><td><span class="state">OFFLINE</span>Database Server</td></tr>
										<tr><td><span class="state">OFFLINE</span>SSH</td></tr>
									</tbody>
								</table>
                            </div>
                    </div>
                     
                </div>
                 
                          <div class="row" style="border: 1px solid blue;">
                    <div class="col-lg-4" style="border: 1px solid red;">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            LAST LOGIN
                            </div>

                            <div class="panel-body">
							</div>
								<table class="table table-striped table-bordered table-hover">
									<tbody>
										<tr><td><span class="state" style="background-color: green;">ONLINE</span>Web Server</td></tr>
										<tr><td><span class="state">OFFLINE</span>Emai Server </td></tr>
										<tr><td><span class="state">OFFLINE</span>Emai Server </td></tr>
										<tr><td><span class="state">OFFLINE</span>FTP Server</td></tr>
										<tr><td><span class="state">OFFLINE</span>Database Server</td></tr>
										<tr><td><span class="state">OFFLINE</span>SSH</td></tr>
									</tbody>
								</table>
                            </div>
                    </div>
                    <div class="col-lg-4" style="border: 1px solid red;">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            PING
                            </div>

                            <div class="panel-body">
							</div>
								<table class="table table-striped table-bordered table-hover">
									<tbody>
										<tr><td><span class="state" style="background-color: green;">ONLINE</span>Web Server</td></tr>
										<tr><td><span class="state">OFFLINE</span>Emai Server </td></tr>
										<tr><td><span class="state">OFFLINE</span>Emai Server </td></tr>
										<tr><td><span class="state">OFFLINE</span>FTP Server</td></tr>
										<tr><td><span class="state">OFFLINE</span>Database Server</td></tr>
										<tr><td><span class="state">OFFLINE</span>SSH</td></tr>
									</tbody>
								</table>
                            </div>
                    </div>
					<div class="col-lg-4" style="border: 1px solid red;">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            SERVICES STATUS
                            </div>

                            <div class="panel-body">
							
								<table class="table table-striped table-bordered table-hover">
									<tbody>
										<tr><td><span class="state" style="background-color: green;">ONLINE</span>Web Server</td></tr>
										<tr><td><span class="state">OFFLINE</span>Emai Server </td></tr>
										<tr><td><span class="state">OFFLINE</span>Emai Server </td></tr>
										<tr><td><span class="state">OFFLINE</span>FTP Server</td></tr>
										<tr><td><span class="state">OFFLINE</span>Database Server</td></tr>
										<tr><td><span class="state">OFFLINE</span>SSH</td></tr>
									</tbody>
								</table>
							</div>
		
                            </div>
                    </div>

                </div>
                 <!--TABLE, PANEL, ACCORDION AND MODAL  -->

                
            </div>

        </div>
        <!--END PAGE CONTENT -->

    </div>

    <!--END MAIN WRAPPER -->

    <!-- GLOBAL SCRIPTS -->
    <!--<script src="assets/plugins/jquery-2.0.3.min.js"></script>-->
     <script src="assets/plugins/bootstrap/js/bootstrap.rtl.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="assets/plugins/flot/jquery.flot.js"></script>
    <script src="assets/plugins/flot/jquery.flot.resize.js"></script>
    <script src="assets/plugins/flot/jquery.flot.time.js"></script>
     <script  src="assets/plugins/flot/jquery.flot.stack.js"></script>
    <script src="assets/js/for_index.js"></script>
   
    <!--<script src="progressbar.js"></script>-->
    
    <!-- END PAGE LEVEL SCRIPTS -->


</body>

    <!-- END BODY -->
</html>
