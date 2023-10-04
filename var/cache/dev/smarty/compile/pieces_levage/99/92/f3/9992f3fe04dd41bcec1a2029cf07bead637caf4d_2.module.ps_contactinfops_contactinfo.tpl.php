<?php
/* Smarty version 4.3.1, created on 2023-09-28 14:21:28
  from 'module:ps_contactinfops_contactinfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65156fc8682126_75087877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9992f3fe04dd41bcec1a2029cf07bead637caf4d' => 
    array (
      0 => 'module:ps_contactinfops_contactinfo.tpl',
      1 => 1695842073,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65156fc8682126_75087877 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp8.0\\htdocs\\Pieces-levage\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\xampp8.0\\htdocs\\Pieces-levage\\vendor\\smarty\\smarty\\libs\\plugins\\function.mailto.php','function'=>'smarty_function_mailto',),));
?>
<!-- begin C:\xampp8.0\htdocs\Pieces-levage/themes/pieces-levage/modules/ps_contactinfo/ps_contactinfo.tpl -->
<div class="block-contact col-md-6 links wrapper">
  
  <div id="contact-infos">
    <a href="<?php echo htmlspecialchars((string) __PS_BASE_URI__, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
        <img class="logo img-responsive" src="<?php echo htmlspecialchars((string) _THEME_IMG_DIR_, ENT_QUOTES, 'UTF-8');?>
logo-footer.png" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
    </a>
    <p><?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['address1'];?>
, <?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['postcode'];?>
 <?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['city'];?>
 </p>
    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
            <p><?php ob_start();
echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['contact_infos']->value['phone'],' ',''), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[1]%phone%[/1]','sprintf'=>array('[1]'=>"<a href='tel:".$_prefixVariable1."'>",'[/1]'=>'</a>','%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']) {?>
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fax: [1]%fax%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%fax%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['fax']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email'] && $_smarty_tpl->tpl_vars['display_email']->value) {?>
        <p><?php echo smarty_function_mailto(array('address'=>$_smarty_tpl->tpl_vars['contact_infos']->value['email'],'encode'=>"javascript"),$_smarty_tpl);?>
</p>
    <?php }?>
    <p>Du lundi au Vendredi: 8h-12h // 13h30-17h30</p>
  </div>
</div>
<!-- end C:\xampp8.0\htdocs\Pieces-levage/themes/pieces-levage/modules/ps_contactinfo/ps_contactinfo.tpl --><?php }
}
