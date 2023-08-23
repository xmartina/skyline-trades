<?php /* Smarty version 3.1.27, created on 2023-07-07 06:30:04
         compiled from "/home/skylinet/domains/app.skylinetrades.ltd/public_html/tmpl/forgot_password.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:74823923864a7b0ecd50550_43947620%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e7267553c7b21734e206ae07be686350c055208' => 
    array (
      0 => '/home/skylinet/domains/app.skylinetrades.ltd/public_html/tmpl/forgot_password.tpl',
      1 => 1685663944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74823923864a7b0ecd50550_43947620',
  'variables' => 
  array (
    'errors' => 0,
    'found_records' => 0,
    'frm' => 0,
    'ti' => 0,
    'loginUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64a7b0ecd96ba7_36178133',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64a7b0ecd96ba7_36178133')) {
function content_64a7b0ecd96ba7_36178133 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/skylinet/domains/app.skylinetrades.ltd/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '74823923864a7b0ecd50550_43947620';
$_smarty_tpl->tpl_vars['loginUrl'] = new Smarty_Variable("?a=login", null, 0);?>

<?php $_smarty_tpl->tpl_vars['pageName'] = new Smarty_Variable("Reset Password", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("auth_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<!--Page Title-->
<section class="page-title" style="background-image:url(home/images1/background/8.jpg);">
    <div class="auto-container">

        <h1>Forgot password</h1>
        <div class="text">Top Cryptocurrency investment Platform</div>
    </div>
    <!--Page Info-->
    <div class="page-info">
        <div class="auto-container clearfix">
            <ul class="bread-crumb">
                <li><a href="/">Home</a></li>
                <li>Forgot password</li>
            </ul>
        </div>
    </div>
    <!--End Page Info-->
</section>
<!--End Page Title-->

<?php echo '<script'; ?>
 language=javascript>
    function checkform() {
        if (document.forgotform.email.value == '') {
            alert("Please type your username or email!");
            document.forgotform.email.focus();
            return false;
        }
        return true;
    }
<?php echo '</script'; ?>
>

<br><br>

<div class="container">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">

            <?php if ($_smarty_tpl->tpl_vars['errors']->value['turing_image']) {?>
            Invalid turing image<br><br>
            <?php }?>


            <?php if ($_smarty_tpl->tpl_vars['found_records']->value == 2) {?>
            Your accound was found. Please check your e-mail address and follow confirm URL to reset your password.
            <br><br>
            <?php } else { ?>

            <?php if ($_smarty_tpl->tpl_vars['found_records']->value == 0) {?>
            No accounts found for provided info.
            <br><br>
            <?php } elseif ($_smarty_tpl->tpl_vars['found_records']->value == 1) {?>
            Request was confirmed. Login and password was sent to your email address.
            <br><br>
            <?php }?>

            <form method=post name=forgotform onsubmit="return checkform();">
                <input type=hidden name=a value="forgot_password">
                <input type=hidden name=action value="forgot_password">

                <div class="col-md-12 col-sm-12 col-xs-12">

                    <p class="error" style="color:red"> </p>

                    <input type="text"  class="form-control" placeholder="username or e-mail" name='email' value="<?php echo smarty_modifier_myescape(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['email'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
">
                    <?php if ($_smarty_tpl->tpl_vars['ti']->value['check']['forgot_password']) {?>
                    <tr>

                        <td> Code: <img src="<?php echo smarty_modifier_myescape(encurl(" ?a=show_validation_image&".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['name'])."=".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['id'])."&rand=".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['rand'])));?>
"> <input type=text name=validation_number class=inpts size=15></td>
                    </tr>
                    <?php }?>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="check-group flexbox">
                        <label class="check-box">
                            <input type="checkbox" class="check-box-input" checked>
                            <span class="remember-text">Remember me</span>

                        </label>

                        <a class="text-muted" href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['loginUrl']->value);?>
">Already have password?</a>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <button type="submit" type="submit" id="submit" class="slide-btn login-btn btn bg-success text-white" name="login">Submit</button>
                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                    <div class="clearfix"></div>
                </div>
            </form>
            <?php }?>
        </div>
    </div>
</div>

</div>
<!-- End Login Form --><?php }
}
?>