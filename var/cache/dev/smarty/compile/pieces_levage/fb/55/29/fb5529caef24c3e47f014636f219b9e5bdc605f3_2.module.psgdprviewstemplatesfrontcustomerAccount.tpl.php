<?php
/* Smarty version 4.3.1, created on 2023-09-25 22:45:08
  from 'module:psgdprviewstemplatesfrontcustomerAccount.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6511f1544c31c2_82132475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb5529caef24c3e47f014636f219b9e5bdc605f3' => 
    array (
      0 => 'module:psgdprviewstemplatesfrontcustomerAccount.tpl',
      1 => 1671069756,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6511f1544c31c2_82132475 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\xampp8.0\htdocs\pieces-levage/modules/psgdpr/views/templates/front/customerAccount.tpl -->
<a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="psgdpr-link" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['front_controller']->value, ENT_QUOTES, 'UTF-8');?>
">
    <span class="link-item">
        <i class="material-icons">account_box</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'GDPR - Personal data','mod'=>'psgdpr'),$_smarty_tpl ) );?>

    </span>
</a>
<!-- end C:\xampp8.0\htdocs\pieces-levage/modules/psgdpr/views/templates/front/customerAccount.tpl --><?php }
}
