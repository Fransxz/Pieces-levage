<?php
/* Smarty version 4.3.1, created on 2023-09-27 22:56:26
  from 'module:productcommentsviewstemplateshookaveragegradestars.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_651496fabbaf34_89456535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03235412c82fe3af55539163b9c3686a7a1ffea4' => 
    array (
      0 => 'module:productcommentsviewstemplateshookaveragegradestars.tpl',
      1 => 1695736070,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651496fabbaf34_89456535 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\xampp8.0\htdocs\Pieces-levage/modules/productcomments/views/templates/hook/average-grade-stars.tpl -->
<?php if ($_smarty_tpl->tpl_vars['nb_comments']->value != 0) {?>
  <div class="comments-note">
    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Grade','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
</span>
    <div class="grade-stars" data-grade="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grade']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
  </div>
<?php }?>
<!-- end C:\xampp8.0\htdocs\Pieces-levage/modules/productcomments/views/templates/hook/average-grade-stars.tpl --><?php }
}
