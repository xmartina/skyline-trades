<?php /* Smarty version 3.1.27, created on 2023-08-23 06:57:53
         compiled from "/home/skylinet/domains/app.skylinetrades.ltd/public_html/tmpl/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:189391555164e5adf114abb8_38471682%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a25104a67055c6d62761aa4994ad1ff2b5439aa6' => 
    array (
      0 => '/home/skylinet/domains/app.skylinetrades.ltd/public_html/tmpl/login.tpl',
      1 => 1688799828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189391555164e5adf114abb8_38471682',
  'variables' => 
  array (
    'userinfo' => 0,
    'frm' => 0,
    'ti' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64e5adf1186f05_56057721',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64e5adf1186f05_56057721')) {
function content_64e5adf1186f05_56057721 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/skylinet/domains/app.skylinetrades.ltd/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '189391555164e5adf114abb8_38471682';
?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Login | Skylinetrades LTD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
.material-symbols-outlined {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48
}
</style>
</head>
<body>
    <section class="py-3 bg-secondary text-light">
      <div class="container">
      	<div class="row">
        	<div class="col-6">
            	<div class="button-wrapper">
						<a href="/" class="text-white d-flex align-items-center"><span class="mr-2 p-2 rounded bg-light text-dark material-symbols-outlined">arrow_back</span> Back to home</a>
                </div>
            </div>
            <div class="col-6 d-flex justify-content-end">
            	<div class=" text-white text-right">
                	<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged'] != 1) {?>
						<a href="?a=signup" class="text-white d-flex align-items-center"> Signup <span class="ml-2 p-2 rounded bg-light text-dark material-symbols-outlined">arrow_forward</span></a><?php } else { ?>
                     	<a href="?a=account" class="text-white d-flex align-items-center">My Account <span class="ml-2 p-2 rounded bg-light text-dark material-symbols-outlined">arrow_forward</span></a><?php }?>
                </div>
            </div>
        </div>
      </div>
    </section>
    
     
        <?php echo '<script'; ?>
 language=javascript>
            function checkform() {
                if (document.mainform.username.value == '') {
                    alert("Please type your username!");
                    document.mainform.username.focus();
                    return false;
                }
                if (document.mainform.password.value == '') {
                    alert("Please type your password!");
                    document.mainform.password.focus();
                    return false;
                }
                return true;
            }

        <?php echo '</script'; ?>
>
        
    
       <section class="vh-100" style="background-color: #9A616D;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form  method=post name=mainform onsubmit="return checkform()">
                
                <?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == 'invalid_login') {?>
        <h3 style="text-align: center;">Login error:</h3><br><br>

        <h5 style="text-align: center;">Your login or password or turing image code is wrong. Please check this information.</h5>
        <?php }?>
                
					<input type=hidden name=a value='do_login'>
                            <input type=hidden name=follow value='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['frm']->value['follow']);?>
'>
                            <input type=hidden name=follow_id value='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['frm']->value['follow_id']);?>
'>
                            <input type=hidden name=a value='do_login'>
                            <input type=hidden name=follow value=''>
                            <input type=hidden name=follow_id value=''>
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">
                    	<img src="https://www.cryptoxstream.com/assets/img/logo.png" alt="logo" class="w-50"/>
                    </span>
                  </div>


					<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged'] != 1) {?>
                    
                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                    <input type="text" id="form2Example17" name=username value='' class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Username</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example27" name=password value='' class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example27">Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit" value="Login">Login</button>
                    <?php if ($_smarty_tpl->tpl_vars['ti']->value['check']['login']) {?>
                                <div>
                                    <p class=menutxt>Code: <img src="<?php echo smarty_modifier_myescape(encurl(" ?a=show_validation_image&".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['name'])."=".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['id'])."&rand=".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['rand'])));?>
"></p>
                                    <p><input type=text name=validation_number class=inpts size=30></p>
                                </div>
                                <?php }?>
                  </div>
					<?php } else { ?>
                    
                    <div class="py-4">
                    	<h4 class="mb-3">You are already signed In</h4>
                        <div class="p-2 bg-secondary text-light mt-2 rounded text-center w-75">
                        	<a href="?a=account" class="text-light px-1">Back to my account</a>
                        </div>
                    </div>
                    <?php }?>
                  <a class="small text-muted" href="?a=forgot_password">Forgot password?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="?a=signup"
                      style="color: #393f81;">Register here</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    
    
</body>

</html><?php }
}
?>