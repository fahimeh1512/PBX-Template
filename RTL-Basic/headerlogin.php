<?php 
ob_start();
 ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="fa"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" />
    <title><?php echo Translation::Head_title($_GET['url']);  ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
     <!-- PAGE LEVEL STYLES -->
     <link rel="stylesheet" href="<?php echo URL; ?>public/plugins/bootstrap/css/bootstrap.rtl.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/login.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>public/plugins/magic/magic.css" />
    <link href="<?php echo URL; ?>public/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
     <!-- END PAGE LEVEL STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- PAGE LEVEL SCRIPTS -->
      <script src="<?php echo URL; ?>public/plugins/jquery-2.0.3.min.js"></script>
      <script src="<?php echo URL; ?>public/plugins/bootstrap/js/bootstrap.rtl.js"></script>
      <script src="<?php echo URL; ?>public/js/login.js"></script>
      <script src="<?php echo URL; ?>public/plugins/gritter/js/jquery.gritter.js"></script>
      <!--END PAGE LEVEL SCRIPTS -->
      <script>
         $(document).ready(function () {
             <?php 
               if(!empty($_SESSION['notif'])){
               	$notif = json_decode(base64_decode(Session::get('notif')), true);
                   echo "
             $.gritter.add({            
            title: '".Translation::TextSite($notif['1'])."',            
            text: '".Translation::TextSite($notif['0'])."',
            class_name: 'gritter-light'
             });    
            return false;
            });";
            
               }  
             //session::Notificat('salam','khobi');
             //Session::Notification(Translation::TextSite('LoginError'));
         ?> 
</script>
</head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body >

   <!-- PAGE CONTENT --> 

    
    