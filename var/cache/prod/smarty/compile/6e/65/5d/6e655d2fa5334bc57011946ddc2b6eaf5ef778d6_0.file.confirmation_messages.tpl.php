<?php
/* Smarty version 4.3.1, created on 2023-09-25 17:26:01
  from 'C:\xampp8.0\htdocs\pieces-levage\admin976inyzb3kgzb0qrzyx\themes\new-theme\template\components\layout\confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6511a689a8cf00_66264976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e655d2fa5334bc57011946ddc2b6eaf5ef778d6' => 
    array (
      0 => 'C:\\xampp8.0\\htdocs\\pieces-levage\\admin976inyzb3kgzb0qrzyx\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1695655008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6511a689a8cf00_66264976 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['confirmations']->value)) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
$_smarty_tpl->tpl_vars['conf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
$_smarty_tpl->tpl_vars['conf']->do_else = false;
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}