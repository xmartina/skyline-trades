<?php /* Smarty version 3.1.27, created on 2023-08-05 14:08:47
         compiled from "/home/skylinet/domains/app.skylinetrades.ltd/public_html/tmpl/edit_account.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:41779151264ce57ef490042_05442499%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95f6d4326db7fb6fd0b17218e683f1aec4e0cfda' => 
    array (
      0 => '/home/skylinet/domains/app.skylinetrades.ltd/public_html/tmpl/edit_account.tpl',
      1 => 1685663944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41779151264ce57ef490042_05442499',
  'variables' => 
  array (
    'settings' => 0,
    'frm' => 0,
    'errors' => 0,
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64ce57ef4ee769_11275159',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64ce57ef4ee769_11275159')) {
function content_64ce57ef4ee769_11275159 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/skylinet/domains/app.skylinetrades.ltd/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '41779151264ce57ef490042_05442499';
$_smarty_tpl->tpl_vars['pageName'] = new Smarty_Variable("Edit Account", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


            <h4 class="page-title">Edit Account</h4>


            <div class="row">
                <div class="col-md-12">

                    

                    <?php echo '<script'; ?>
 language=javascript>
                        function IsNumeric(sText) {
                            var ValidChars = "0123456789.";
                            var IsNumber=true;
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

                        function checkform() {
                            if (document.editform.fullname.value == '') {
                                alert("Please type your full name!");
                                document.editform.fullname.focus();
                                return false;
                            }
                            
                                <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_user_location'] == 1) {?>
                                
                                if (document.editform.address.value == '') {
                                    alert("Please enter your address!");
                                    document.editform.address.focus();
                                    return false;
                                }
                                if (document.editform.city.value == '') {
                                    alert("Please enter your city!");
                                    document.editform.city.focus();
                                    return false;
                                }
                                if (document.editform.state.value == '') {
                                    alert("Please enter your state!");
                                    document.editform.state.focus();
                                    return false;
                                }
                                if (document.editform.zip.value == '') {
                                    alert("Please enter your ZIP!");
                                    document.editform.zip.focus();
                                    return false;
                                }
                                if (document.editform.country.options[document.editform.country.selectedIndex].text == '--SELECT--') {
                                    alert("Please choose your country!");
                                    document.editform.country.focus();
                                    return false;
                                }
                                
                                    <?php }?>
                                        
                                        if (document.editform.password.value != document.editform.password2.value) {
                                            alert("Please check your password!");
                                            document.editform.fullname.focus();
                                            return false;
                                        }
                                        
                                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code']) {?>
                                            
                                            if (document.editform.transaction_code.value != document.editform.transaction_code2.value) {
                                                alert("Please check your transaction code!");
                                                document.editform.transaction_code2.focus();
                                                return false;
                                            }
                                            
                                                <?php }?>
                                                    
                                                    
                                                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['usercanchangeemail'] == 1) {?>
                                                        
                                                        if (document.editform.email.value == '') {
                                                            alert("Please enter your e-mail address!");
                                                            document.editform.email.focus();
                                                            return false;
                                                        }
                                                        
                                                            <?php }?>
                                                                
                                                                return true;
                                                            }
                    <?php echo '</script'; ?>
>
                    


                    <form action="" method="post" onsubmit="return checkform()" name="editform"><input type="hidden" name="form_id" value="16846203806299"><input type="hidden" name="form_token" value="addb4b1f593f4372ab8ecd7c7267100a">
                        <input type="hidden" name="a" value="edit_account">
                        <input type="hidden" name="action" value="edit_account">
                        <?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == 'changed') {?>
                        <div class="py-2">
                            Your account data has been updated successfully.
                        </div>
                        <?php }?>
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
                            <li>Please enter your Full Name!
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
                            <li>Please enter your username!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'password') {?>
                            <li>Please enter a password!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'password_confirm') {?>
                            <li>Please check your password!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'password_too_small') {?>
                            <li>Password is too small, please enter at least <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['min_user_password_length']);?>
 chars!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code') {?>
                            <li>Please enter the Transaction Code! <?php }?> <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code_confirm') {?>
                            <li>Please check your Transaction Code!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code_too_small') {?>
                            <li>Transaction Code is too small, please enter at least <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['min_user_password_length']);?>
 chars!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'wrong_current_password') {?>
                            <li>You entered wrong current password
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code_vs_password') {?>
                            <li>Transaction Code should be different then the Password! <?php }?> <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'invalid_transaction_code') {?>
                            <li>You have provided invalid Current Transaction Code!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'email') {?>
                            <li>Please enter your e-mail!
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'turing_image') {?>
                            <li>Enter the verification code as it is shown in the corresponding box.
                                <?php }?>
                                <br>
                                <?php endfor; endif; ?>
                        </ul>
                        <?php }?>
                        <input type="hidden" name="say" value="">

                        <table cellspacing="0" cellpadding="2" border="0" class="tab">
                            <tbody><tr>
                                <td>Account Name:</td>
                                <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
</td>
                            </tr><tr>
                                <td>Registration date:</td>
                                <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['date_register']);?>
</td>
                            </tr><tr>
                                <td>Your Full Name:</td>
                                <td><input type="text" name="fullname" value='<?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['userinfo']->value['name']));?>
' class="form-control" size="30">
                                </td></tr>

                            <tr>
                                <td>New Password:</td>
                                <td><input type="password" name="password" value="" class="form-control" size="30"></td>
                            </tr><tr>
                                <td>Retype Password:</td>
                                <td><input type="password" name="password2" value="" class="form-control" size="30"></td>
                            </tr>
                            <tr>
                                <td>Your Bitcoin Bitcoin wallet::</td>
                                <td><input type="text" class="form-control" size="30" name="pay_account[1000][Bitcoin wallet:]" value=""></td>
                            </tr>
                            <tr>
                                <td>Your Litecoin Account ID:</td>
                                <td><input type="text" class="form-control" size="30" name="pay_account[1006][Account ID]" value=""></td>
                            </tr>
                            <tr>
                                <td>Your Dogecoin Account ID:</td>
                                <td><input type="text" class="form-control" size="30" name="pay_account[1007][Account ID]" value=""></td>
                            </tr>
                            <tr>
                                <td>Your XRP Account ID:</td>
                                <td><input type="text" class="form-control" size="30" name="pay_account[1008][Account ID]" value=""></td>
                            </tr>
                            <tr>
                                <td>Your Ethereum Account ID:</td>
                                <td><input type="text" class="form-control" size="30" name="pay_account[1009][Account ID]" value=""></td>
                            </tr>
                            <tr>
                                <td>Your Bitcoin Cash Account ID:</td>
                                <td><input type="text" class="form-control" size="30" name="pay_account[1010][Account ID]" value=""></td>
                            </tr>
                            <tr>
                                <td>Your XLM Account ID:</td>
                                <td><input type="text" class="form-control" size="30" name="pay_account[1015][Account ID]" value=""></td>
                            </tr>
                            <tr>
                                <td>Your TETHER USDT Account ID:</td>
                                <td><input type="text" class="form-control" size="30" name="pay_account[1013][Account ID]" value=""></td>
                            </tr>
                            <tr>
                                <td>Your Yearn Finance Account ID:</td>
                                <td><input type="text" class="form-control" size="30" name="pay_account[1014][Account ID]" value=""></td>
                            </tr>
                            <tr>
                                <td>Your E-mail address:</td>
                                <td><?php if ($_smarty_tpl->tpl_vars['settings']->value['usercanchangeemail'] == 1) {?><input type="text" name="email" value='<?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['userinfo']->value['email']));?>
' class="form-control" size="30"><?php } else {
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['email']);
}?></td>
                            </tr>

                            <tr>
                                <td>&nbsp;</td>
                                <td><input type="submit" value="Change Account data" class="form-control btn btn-primary"></td>
                            </tr></tbody></table>
                    </form>
                </div></div>

        </div>
    </div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>