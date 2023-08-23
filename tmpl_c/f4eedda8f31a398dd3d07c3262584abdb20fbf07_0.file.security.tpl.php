<?php /* Smarty version 3.1.27, created on 2023-08-05 14:08:55
         compiled from "/home/skylinet/domains/app.skylinetrades.ltd/public_html/tmpl/security.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:214227455964ce57f7289060_86696704%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4eedda8f31a398dd3d07c3262584abdb20fbf07' => 
    array (
      0 => '/home/skylinet/domains/app.skylinetrades.ltd/public_html/tmpl/security.tpl',
      1 => 1685663944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214227455964ce57f7289060_86696704',
  'variables' => 
  array (
    'security' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64ce57f72a9324_13186673',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64ce57f72a9324_13186673')) {
function content_64ce57f72a9324_13186673 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '214227455964ce57f7289060_86696704';
$_smarty_tpl->tpl_vars['pageName'] = new Smarty_Variable("Account Security Settings", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


            <h4 class="page-title">Advanced login security settings</h4>

            <div class="row">
                <div class="col-md-12">

                    <form method="post">
                        <input type="hidden" name="a" value="security">
                        <input type="hidden" name="action" value="save">
                        Detect IP Address Change Sensitivity<br>
                        <input type="radio" name="ip" value="disabled" <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_ip'] == 'disabled') {?>checked<?php }?>>Disabled<br>
                        <input type="radio" name="ip" value="medium" <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_ip'] == 'medium') {?>checked<?php }?>>Medium<br>
                        <input type="radio" name="ip" value="high" <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_ip'] == 'high') {?>checked<?php }?>>High<br>
                        <input type="radio" name="ip" value="always">Paranoic<br><br>

                        Detect Browser Change<br>
                        <input type="radio" name="browser" value="disabled" <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_browser'] == 'disabled') {?>checked<?php }?>>Disabled<br>
                        <input type="radio" name="browser" value="enabled" <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_browser'] == 'enabled') {?>checked<?php }?>>Enabled<br><br>
                        <input type="submit" value="Set" class="form-control btn btn-primary">
                    </form>


                </div></div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>