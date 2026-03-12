<?php
/* Smarty version 4.5.5, created on 2026-03-12 19:43:24
  from '/var/www/html/themes/hummingbird/templates/components/section-title.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69b3175c9031f7_59681406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd406fae3949f13d1323633970369b6224a3219b8' => 
    array (
      0 => '/var/www/html/themes/hummingbird/templates/components/section-title.tpl',
      1 => 1750078354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69b3175c9031f7_59681406 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '19791663769b3175c8fc884_60251938';
$_smarty_tpl->_assignInScope('componentName', 'section-title');?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142623266069b3175c9022a6_07409559', 'section_title');
?>

<?php }
/* {block 'section_title'} */
class Block_142623266069b3175c9022a6_07409559 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'section_title' => 
  array (
    0 => 'Block_142623266069b3175c9022a6_07409559',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h2 class="h2 <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['title']->value), ENT_QUOTES, 'UTF-8');?>
</h2>
<?php
}
}
/* {/block 'section_title'} */
}
