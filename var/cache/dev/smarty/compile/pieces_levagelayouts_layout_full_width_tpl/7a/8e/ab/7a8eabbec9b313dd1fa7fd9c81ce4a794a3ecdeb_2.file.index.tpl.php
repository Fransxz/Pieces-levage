<?php
/* Smarty version 4.3.1, created on 2023-10-01 09:44:26
  from 'C:\xampp8.0\htdocs\pieces-levage\themes\pieces-levage\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6519235a2ed769_06455373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a8eabbec9b313dd1fa7fd9c81ce4a794a3ecdeb' => 
    array (
      0 => 'C:\\xampp8.0\\htdocs\\pieces-levage\\themes\\pieces-levage\\templates\\index.tpl',
      1 => 1695736088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6519235a2ed769_06455373 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15876651626519235a2ea6c3_56173987', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_10060745956519235a2eae08_89870531 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_12359637936519235a2ebde1_66040445 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_17673024486519235a2eb820_26758182 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12359637936519235a2ebde1_66040445', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_15876651626519235a2ea6c3_56173987 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_15876651626519235a2ea6c3_56173987',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_10060745956519235a2eae08_89870531',
  ),
  'page_content' => 
  array (
    0 => 'Block_17673024486519235a2eb820_26758182',
  ),
  'hook_home' => 
  array (
    0 => 'Block_12359637936519235a2ebde1_66040445',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10060745956519235a2eae08_89870531', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17673024486519235a2eb820_26758182', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
