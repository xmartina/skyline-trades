<?php /* Smarty version 3.1.27, created on 2023-08-23 06:57:34
         compiled from "/home/skylinet/domains/app.skylinetrades.ltd/public_html/tmpl/after_registration.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:175628379564e5addeae3652_70292058%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd143d8050c98c1932e2adbbd360552d24b58325' => 
    array (
      0 => '/home/skylinet/domains/app.skylinetrades.ltd/public_html/tmpl/after_registration.tpl',
      1 => 1685663944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175628379564e5addeae3652_70292058',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64e5addeafc837_60498736',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64e5addeafc837_60498736')) {
function content_64e5addeafc837_60498736 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '175628379564e5addeae3652_70292058';
$_smarty_tpl->tpl_vars['pageName'] = new Smarty_Variable("Registration Completed", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



          <h3>Registration completed:</h3><br>

          Thank you for joining our program.<br>
          You are now an official member of this program. You can login to your account to start investing with us and use all the services that are available for our members.
          <br>
          <br>

          <b>Important:</b> Do not provide your login and password to anyone!
          <div class="btn py-1 px-4 bg-info text-white">
          <a href="?a=login" class="text-white">
          	login
            </a>
          </div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>