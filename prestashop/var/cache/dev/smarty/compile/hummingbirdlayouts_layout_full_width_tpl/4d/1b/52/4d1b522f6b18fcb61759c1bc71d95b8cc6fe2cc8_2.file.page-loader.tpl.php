<?php
/* Smarty version 4.5.5, created on 2026-03-12 19:43:25
  from '/var/www/html/themes/hummingbird/templates/components/page-loader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69b3175dc21c35_47315435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d1b522f6b18fcb61759c1bc71d95b8cc6fe2cc8' => 
    array (
      0 => '/var/www/html/themes/hummingbird/templates/components/page-loader.tpl',
      1 => 1750078354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69b3175dc21c35_47315435 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_assignInScope('componentName', 'page-loader');?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160018321869b3175dc20f96_86794143', 'page_loader');
?>

<?php }
/* {block 'page_loader'} */
class Block_160018321869b3175dc20f96_86794143 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_loader' => 
  array (
    0 => 'Block_160018321869b3175dc20f96_86794143',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="page-loader js-page-loader d-none">
    <div class="spinner-border text-primary" role="status">
      <span class="visually-hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Loading...','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
    </div>
  </div>
<?php
}
}
/* {/block 'page_loader'} */
}
