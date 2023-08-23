<?php /* Smarty version 3.1.27, created on 2023-08-23 06:57:33
         compiled from "my:_emailbody_registration" */ ?>
<?php
/*%%SmartyHeaderCode:157156125064e5adddd68d92_02936442%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '349257fbad92bd38ac33c718b057c126817b92e6' => 
    array (
      0 => 'my:_emailbody_registration',
      1 => 1692773853,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '157156125064e5adddd68d92_02936442',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64e5adddd75941_97857111',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64e5adddd75941_97857111')) {
function content_64e5adddd75941_97857111 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '157156125064e5adddd68d92_02936442';
?>
Hello #name#,

Thank you for registration on our site.

Your login information:

Login: #username#
Password: #password#

You can login here: #site_url#

Contact us immediately if you did not authorize this registration.

Thank you.<?php }
}
?>