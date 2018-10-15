<?php 
//$_SESSION['captcha'] = php_captcha();

?>
<div class="container">
    <div class="text-center">
        <img src="<?php echo URL; ?>public/img/logo.png"  alt=" Logo" height="80" />
    </div>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
            <form action="login/run" class="form-signin" method="post">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">
                   <?php  echo Translation::Context('LoginPage','InputFormTitle');  ?>
                </p>
                <input type="text" name="username" placeholder="<?php echo Translation::Context('LoginPage','PlaceHolderUsername');  ?>" class="form-control" />
                <input type="password" name="password" placeholder="<?php echo Translation::Context('LoginPage','PlaceHolderPassword');  ?>" class="form-control" />
                <!--<p><?php echo '<img src="' . $_SESSION['captcha']['image_src'] . '" alt="CAPTCHA code">'; ?></p>
                 <input type="text"name="captcha" placeholder="<?php echo Translation::Context('LoginPage','Captcha');  ?>" class="form-control" required="required" /><br>-->
                <button class="btn text-muted text-center btn-danger" type="submit"> <?php  echo Translation::Context('LoginPage','Login');  ?></button>
            </form>
        </div>                
    </div>
</div>
<?php
//echo "<pre>";
//print_r($_SESSION);
//print_r(get_declared_classes());
//print_r(get_included_files());
//print_r(get_defined_functions());
//$arr = get_defined_functions();
//var_dump($arr['user']);
?>
 