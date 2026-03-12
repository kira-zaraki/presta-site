<?php
/* Smarty version 4.5.5, created on 2026-03-12 19:43:38
  from '/var/www/html/themes/hummingbird/templates/errors/404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69b3176a0f0fd3_70644160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0fb471b22079bc4329ae2256dae8156fd1abe15' => 
    array (
      0 => '/var/www/html/themes/hummingbird/templates/errors/404.tpl',
      1 => 1750078354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
function content_69b3176a0f0fd3_70644160 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190352699569b3176a0eb121_29164861', 'breadcrumb');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141564087469b3176a0ebde6_92044220', 'container_class');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121559064169b3176a0ec845_41987021', 'page_header_container');
?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "errorContent", null);?>
  <h1 class="h4"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['page']->value['title']), ENT_QUOTES, 'UTF-8');?>
</h1>
  <p>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If this is a recurring problem, please [1]contact us[/1]','d'=>'Shop.Theme.Catalog','sprintf'=>array('[1]'=>'<a href="{$urls.pages.contact}" class="alert-link">','[/1]'=>'</a>')),$_smarty_tpl ) );?>

  </p>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_124289434869b3176a0efe11_13879174', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'breadcrumb'} */
class Block_190352699569b3176a0eb121_29164861 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_190352699569b3176a0eb121_29164861',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'breadcrumb'} */
/* {block 'container_class'} */
class Block_141564087469b3176a0ebde6_92044220 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container_class' => 
  array (
    0 => 'Block_141564087469b3176a0ebde6_92044220',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
container container--limited-md text-center<?php
}
}
/* {/block 'container_class'} */
/* {block 'page_title'} */
class Block_198831197369b3176a0ecb87_48696149 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="page-header mb-2">
      <p class="display-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'404','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
    </div>
  <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_121559064169b3176a0ec845_41987021 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_121559064169b3176a0ec845_41987021',
  ),
  'page_title' => 
  array (
    0 => 'Block_198831197369b3176a0ecb87_48696149',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198831197369b3176a0ecb87_48696149', 'page_title', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_container'} */
class Block_124289434869b3176a0efe11_13879174 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_124289434869b3176a0efe11_13879174',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errorContent'=>$_smarty_tpl->tpl_vars['errorContent']->value), 0, false);
}
}
/* {/block 'page_content_container'} */
}
