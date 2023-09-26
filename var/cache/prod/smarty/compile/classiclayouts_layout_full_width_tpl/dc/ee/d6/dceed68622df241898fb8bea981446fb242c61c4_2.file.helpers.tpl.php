<?php
/* Smarty version 4.3.1, created on 2023-09-25 17:24:27
  from 'C:\xampp8.0\htdocs\pieces-levage\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6511a62b22fbc3_34234095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dceed68622df241898fb8bea981446fb242c61c4' => 
    array (
      0 => 'C:\\xampp8.0\\htdocs\\pieces-levage\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1695655047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6511a62b22fbc3_34234095 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp8.0\\htdocs\\pieces-levage\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\dc\\ee\\d6\\dceed68622df241898fb8bea981446fb242c61c4_2.file.helpers.tpl.php',
    'uid' => 'dceed68622df241898fb8bea981446fb242c61c4',
    'call_name' => 'smarty_template_function_renderLogo_12684975296511a62b21d162_39398045',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_12684975296511a62b21d162_39398045 */
if (!function_exists('smarty_template_function_renderLogo_12684975296511a62b21d162_39398045')) {
function smarty_template_function_renderLogo_12684975296511a62b21d162_39398045(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_renderLogo_12684975296511a62b21d162_39398045 */
}
