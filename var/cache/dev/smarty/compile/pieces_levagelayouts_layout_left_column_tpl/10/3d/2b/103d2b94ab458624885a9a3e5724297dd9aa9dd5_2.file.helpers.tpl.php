<?php
/* Smarty version 4.3.1, created on 2023-09-25 22:32:19
  from 'C:\xampp8.0\htdocs\pieces-levage\themes\pieces-levage\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6511ee53e56b31_80967592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '103d2b94ab458624885a9a3e5724297dd9aa9dd5' => 
    array (
      0 => 'C:\\xampp8.0\\htdocs\\pieces-levage\\themes\\pieces-levage\\templates\\_partials\\helpers.tpl',
      1 => 1695655047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6511ee53e56b31_80967592 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp8.0\\htdocs\\pieces-levage\\var\\cache\\dev\\smarty\\compile\\pieces_levagelayouts_layout_left_column_tpl\\10\\3d\\2b\\103d2b94ab458624885a9a3e5724297dd9aa9dd5_2.file.helpers.tpl.php',
    'uid' => '103d2b94ab458624885a9a3e5724297dd9aa9dd5',
    'call_name' => 'smarty_template_function_renderLogo_18428921346511ee53e4acc9_35779985',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_18428921346511ee53e4acc9_35779985 */
if (!function_exists('smarty_template_function_renderLogo_18428921346511ee53e4acc9_35779985')) {
function smarty_template_function_renderLogo_18428921346511ee53e4acc9_35779985(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_18428921346511ee53e4acc9_35779985 */
}
