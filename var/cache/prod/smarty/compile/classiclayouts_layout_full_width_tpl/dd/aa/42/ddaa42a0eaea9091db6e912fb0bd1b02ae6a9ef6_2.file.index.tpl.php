<?php
/* Smarty version 4.3.1, created on 2023-09-25 17:22:03
  from 'C:\xampp8.0\htdocs\pieces-levage\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6511a59bda87c6_18029177',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddaa42a0eaea9091db6e912fb0bd1b02ae6a9ef6' => 
    array (
      0 => 'C:\\xampp8.0\\htdocs\\pieces-levage\\themes\\classic\\templates\\index.tpl',
      1 => 1695655047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6511a59bda87c6_18029177 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20787316646511a59bda5bb8_21718610', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_19836118816511a59bda62c8_16651642 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_2403975596511a59bda71e6_94617193 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_8164796006511a59bda6c96_09933789 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2403975596511a59bda71e6_94617193', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_20787316646511a59bda5bb8_21718610 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_20787316646511a59bda5bb8_21718610',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_19836118816511a59bda62c8_16651642',
  ),
  'page_content' => 
  array (
    0 => 'Block_8164796006511a59bda6c96_09933789',
  ),
  'hook_home' => 
  array (
    0 => 'Block_2403975596511a59bda71e6_94617193',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19836118816511a59bda62c8_16651642', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8164796006511a59bda6c96_09933789', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
