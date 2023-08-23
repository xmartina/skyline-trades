<?php /* Smarty version 3.1.27, created on 2023-08-23 06:56:44
         compiled from "/home/skylinet/domains/app.skylinetrades.ltd/public_html/tmpl/signup.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:148493076664e5adaca60440_18709609%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a29b1e6329fc1c8f4d5edbbcdb240384894464dc' => 
    array (
      0 => '/home/skylinet/domains/app.skylinetrades.ltd/public_html/tmpl/signup.tpl',
      1 => 1688799975,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148493076664e5adaca60440_18709609',
  'variables' => 
  array (
    'userinfo' => 0,
    'deny_registration' => 0,
    'settings' => 0,
    'referer' => 0,
    'errors' => 0,
    'account_errors' => 0,
    'err' => 0,
    'frm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64e5adacbbad04_36765448',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64e5adacbbad04_36765448')) {
function content_64e5adacbbad04_36765448 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/skylinet/domains/app.skylinetrades.ltd/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';
if (!is_callable('smarty_modifier_escape')) require_once '/home/skylinet/domains/app.skylinetrades.ltd/public_html/inc/libs/smarty3/plugins/modifier.escape.php';

$_smarty_tpl->properties['nocache_hash'] = '148493076664e5adaca60440_18709609';
?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Register | Skylinetrades LTD</title>
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
						<a href="?a=login" class="text-white d-flex align-items-center"> Login <span class="ml-2 p-2 rounded bg-light text-dark material-symbols-outlined">arrow_forward</span></a><?php } else { ?>
                     	<a href="?a=account" class="text-white d-flex align-items-center">My Account <span class="ml-2 p-2 rounded bg-light text-dark material-symbols-outlined">arrow_forward</span></a><?php }?>
                </div>
            </div>
        </div>
      </div>
    </section>
    
       <section class="h-100 " style="background-color: #9A616D;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 p-lg-0 d-none d-md-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                alt="login form" class="img-fluid h-100" style="border-radius: 1rem 0 0 1rem; object-fit:cover;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
            
           
                       <?php if ($_smarty_tpl->tpl_vars['deny_registration']->value) {?>
                        <h3 style="text-align: center;"> We are closed for new registrations now.</h3>
                        <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['use_referal_program'] && $_smarty_tpl->tpl_vars['settings']->value['force_upline'] && !$_smarty_tpl->tpl_vars['referer']->value && !$_smarty_tpl->tpl_vars['settings']->value['get_rand_ref']) {?>
                        <h5 style="text-align: center;"> You do not have a upline. Our system require a upline for each user.</h5>
                        <?php } else { ?>
                        

                        <?php echo '<script'; ?>
 language=javascript>
                            function checkform() {
                                if (document.regform.fullname.value == '') {
                                    alert("Please enter your full name!");
                                    document.regform.fullname.focus();
                                    return false;
                                } {
                                    /literal} {
                                    if $settings.use_user_location == 1
                                } {
                                    literal
                                }
                                if (document.regform.address.value == '') {
                                    alert("Please enter your address!");
                                    document.regform.address.focus();
                                    return false;
                                }
                                if (document.regform.city.value == '') {
                                    alert("Please enter your city!");
                                    document.regform.city.focus();
                                    return false;
                                }
                                if (document.regform.state.value == '') {
                                    alert("Please enter your state!");
                                    document.regform.state.focus();
                                    return false;
                                }
                                if (document.regform.zip.value == '') {
                                    alert("Please enter your ZIP!");
                                    document.regform.zip.focus();
                                    return false;
                                }
                                if (document.regform.country.options[document.regform.country.selectedIndex].text == '--SELECT--') {
                                    alert("Please choose your country!");
                                    document.regform.country.focus();
                                    return false;
                                } {
                                    /literal} { /
                                    if
                                } {
                                    literal
                                }
                                if (document.regform.username.value == '') {
                                    alert("Please enter your username!");
                                    document.regform.username.focus();
                                    return false;
                                }
                                if (!document.regform.username.value.match(/^[A-Za-z0-9_\-]+$/)) {
                                    alert("For username you should use English letters and digits only!");
                                    document.regform.username.focus();
                                    return false;
                                }
                                if (document.regform.password.value == '') {
                                    alert("Please enter your password!");
                                    document.regform.password.focus();
                                    return false;
                                }
                                if (document.regform.password.value != document.regform.password2.value) {
                                    alert("Please check your password!");
                                    document.regform.password2.focus();
                                    return false;
                                } {
                                    /literal} {
                                    if $settings.use_transaction_code
                                } {
                                    literal
                                }
                                if (document.regform.transaction_code.value == '') {
                                    alert("Please enter your transaction code!");
                                    document.regform.transaction_code.focus();
                                    return false;
                                }
                                if (document.regform.transaction_code.value != document.regform.transaction_code2.value) {
                                    alert("Please check your transaction code!");
                                    document.regform.transaction_code2.focus();
                                    return false;
                                } {
                                    /literal} { /
                                    if
                                } {
                                    literal
                                }
                                if (document.regform.email.value == '') {
                                    alert("Please enter your e-mail address!");
                                    document.regform.email.focus();
                                    return false;
                                }
                                if (document.regform.email.value != document.regform.email1.value) {
                                    alert("Please retupe your e-mail!");
                                    document.regform.email.focus();
                                    return false;
                                }

                                for (i in document.regform.elements) {
                                    f = document.regform.elements[i];
                                    if (f.name && f.name.match(/^pay_account/)) {
                                        if (f.value == '') continue;
                                        var notice = f.getAttribute('data-validate-notice');
                                        var invalid = 0;
                                        if (f.getAttribute('data-validate') == 'regexp') {
                                            var re = new RegExp(f.getAttribute('data-validate-regexp'));
                                            if (!f.value.match(re)) {
                                                invalid = 1;
                                            }
                                        } else if (f.getAttribute('data-validate') == 'email') {
                                            var re = /^[^\@]+\@[^\@]+\.\w{2,4}$/;
                                            if (!f.value.match(re)) {
                                                invalid = 1;
                                            }
                                        }
                                        if (invalid) {
                                            alert('Invalid account format. Expected ' + notice);
                                            f.focus();
                                            return false;
                                        }
                                    }
                                }

                                if (document.regform.agree.checked == false) {
                                    alert("You have to agree with the Terms and Conditions!");
                                    return false;
                                }

                                return true;
                            }

                            function IsNumeric(sText) {
                                var ValidChars = "0123456789";
                                var IsNumber = true;
                                var Char;
                                if (sText == '') return false;
                                for (i = 0; i < sText.length && IsNumber == true; i++) {
                                    Char = sText.charAt(i);
                                    if (ValidChars.indexOf(Char) == -1) {
                                        IsNumber = false;
                                    }
                                }
                                return IsNumber;
                            }

                        <?php echo '</script'; ?>
>
                        

                              
            
              <div class="card-body p-4 p-lg-5 text-black">
              
                 <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
                        <ul style="color:red">
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['e'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['e']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['name'] = 'e';
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['errors']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total']);
?>
                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'full_name') {?>
                            <li>Please enter your full name!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'address') {?>
                            <li>Please enter your address!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'city') {?>
                            <li>Please enter your city!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'state') {?>
                            <li>Please enter your state!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'zip') {?>
                            <li>Please enter your zip!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'country') {?>
                            <li>Please choose your country!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'username') {?>
                            <li>Please enter valid username! It should contains English letters and digits only.
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'username_exists') {?>
                            <li>Sorry, such user already exists! Please try another username.
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'email_exists') {?>
                            <li>Sorry, such email already exists! Please try another email.
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'password') {?>
                            <li>Please enter a password!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'password_confirm') {?>
                            <li>Please check your password!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'password_too_small') {?>
                            <li>The password you provided is too small, please enter at least <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['min_user_password_length']);?>
 characters!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code') {?>
                            <li>Please enter the Transaction Code!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code_confirm') {?>
                            <li>Please check your Transaction Code!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code_too_small') {?>
                            <li>The Transaction Code you provided is too small, please enter at least <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['min_user_password_length']);?>
 characters!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code_vs_password') {?>
                            <li>The Transaction Code should differ from the Password!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'egold') {?>
                            <li>Please enter your e-gold account number!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'invalid_perfectmoney_account') {?>
                            <li>Please enter USD PerfectMoney account number!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'email') {?>
                            <li>Please enter your e-mail!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'agree') {?>
                            <li>You have to agree with the Terms and Conditions!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'turing_image') {?>
                            <li>Enter the verification code as it is shown in the corresponding box.
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'no_upline') {?>
                            <li>The system requires an upline to register. <?php if ($_smarty_tpl->tpl_vars['settings']->value['get_rand_ref']) {?>You have to be agreed to random one or found a referral link in the net.<?php }?>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'ip_exists_in_database') {?>
                            <li>Your IP already exists in our database. Sorry, but registration impossible.
                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'invalid_account_format') {?>
                                <?php
$_from = $_smarty_tpl->tpl_vars['account_errors']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['err'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['err']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->_loop = true;
$foreach_err_Sav = $_smarty_tpl->tpl_vars['err'];
?>
                            <li><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['err']->value);?>

                                <?php
$_smarty_tpl->tpl_vars['err'] = $foreach_err_Sav;
}
?>
                                <?php }?>

                                <br>
                                <?php endfor; endif; ?>
                        </ul>
                        <?php }?>  
              
			<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged'] != 1) {?>
                        <form method=post onsubmit="return checkform()" name="regform">
                            <input type=hidden name=a value="signup">
                            <input type=hidden name=action value="signup">
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">
                    	<img src="https://www.cryptoxstream.com/assets/img/logo.png" alt="logo" class="w-50"/>
                    </span>
                  </div>
                    
                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                    <input type="text" id="form2Example17" name=fullname value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['fullname'], " quotes"));?>
" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Full Name</label>
                  </div>

					<div class="form-outline mb-4">
                    <input type="text" id="form2Example17" name=username value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['username'], " quotes"));?>
" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Username</label>
                  </div>
                
                <div class="form-outline mb-4">
                    <input type="email" id="form2Example17" name=email value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['email'], " quotes"));?>
" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Email</label>
                  </div>
                  
                  <div class="form-outline mb-4">
                    <input type="email" id="form2Example17" name=email1 value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['email1'], " quotes"));?>
" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Retype Email</label>
                  </div>
                  
                   <div class="form-outline mb-4">
                    <input type="text" id="form2Example17" name=sq value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['sq'], " quotes"));?>
" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Secret Question</label>
                  </div>
                  
                  <div class="form-outline mb-4">
                    <input type="text" id="form2Example17" name=sa value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['sa'], " quotes"));?>
" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Secret Answer</label>
                  </div>
                  
                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example27" name=password value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['password'], " quotes"));?>
" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example27">Password</label>
                  </div>
                  
                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example27" name=password2 value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['password2'], " quotes"));?>
" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example27">Retype Password</label>
                  </div>
                  
                  <div class="form-outline mb-4">
                    <input type="text" id="form2Example27" class="form-control form-control-lg display-6 h6" Placeholder="E.g bc1qd9mndaw3me5e9zpqv3sex97ef63p6xgq8yqpt9" />
                    <label class="form-label" for="form2Example27">BTC Address</label>
                  </div>
                  
                  <div class="form-outline mb-4">
                    <input type="text" id="form2Example27" class="form-control form-control-lg display-6 h6" Placeholder="E.g 0x94F995314B997c082506B042BD648618Ee76BE91" />
                    <label class="form-label" for="form2Example27">ETH Address</label>
                  </div>
					
                    <div class="form-outline my-1">
                    	 <input type=checkbox name="agree" value=1 class="mr-1"> I agree with <a href="?a=rules">Terms and conditions</a>
                    </div>
                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type=submit value="Register">Register</button>
                    
                  </div>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Already have an account? <a href="?a=login"
                      style="color: #393f81;">Login here</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                </form>
                <?php } else { ?>
                
                <div class="py-4">
                    	<h4 class="mb-3">You are already signed In</h4>
                        <div class="p-2 bg-secondary text-light mt-2 rounded text-center w-75">
                        	<a href="?a=account" class="text-light px-1">Back to my account</a>
                        </div>
                    </div>
				<?php }?>
                <?php }?>
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