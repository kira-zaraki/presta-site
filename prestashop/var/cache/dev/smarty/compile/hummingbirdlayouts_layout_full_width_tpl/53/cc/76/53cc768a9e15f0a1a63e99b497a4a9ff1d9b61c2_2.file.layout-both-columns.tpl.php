<?php
/* Smarty version 4.5.5, created on 2026-03-12 19:43:25
  from '/var/www/html/themes/hummingbird/templates/layouts/layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69b3175d68efc8_21473737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53cc768a9e15f0a1a63e99b497a4a9ff1d9b61c2' => 
    array (
      0 => '/var/www/html/themes/hummingbird/templates/layouts/layout-both-columns.tpl',
      1 => 1750078354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/helpers.tpl' => 1,
    'file:_partials/head.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
    'file:components/page-loader.tpl' => 1,
    'file:components/toast-container.tpl' => 1,
    'file:components/password-policy-template.tpl' => 1,
  ),
),false)) {
function content_69b3175d68efc8_21473737 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:_partials/helpers.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!doctype html>
<html lang="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['language']->value['locale']), ENT_QUOTES, 'UTF-8');?>
">
  <head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25874919369b3175d6794f0_54236364', 'head');
?>

  </head>

  <body id="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['page']->value['page_name']), ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] ))), ENT_QUOTES, 'UTF-8');?>
">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_214297968569b3175d67a9a5_66200387', 'hook_after_body_opening_tag');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159706279169b3175d67b5c3_62708889', 'product_activation');
?>


    <header id="header" class="header js-sticky-header">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1279715669b3175d67be77_93038912', 'header');
?>

    </header>

    <main id="wrapper" class="wrapper">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayWrapperTop'),$_smarty_tpl ) );?>

      
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205363763569b3175d67c8e0_84465283', 'breadcrumb');
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28046269469b3175d67db96_47172989', 'notifications');
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115268951869b3175d67e820_10274326', 'content_columns');
?>


      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayWrapperBottom'),$_smarty_tpl ) );?>

    </main>

    <footer id="footer" class="footer">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190493177969b3175d684536_78358641', 'footer');
?>

    </footer>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202576966569b3175d684de4_55703676', 'javascript_bottom');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186730284969b3175d6858d4_16463355', 'bottom_elements');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169538881869b3175d68c134_55988973', 'hook_before_body_closing_tag');
?>

  </body>
</html>
<?php }
/* {block 'head'} */
class Block_25874919369b3175d6794f0_54236364 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_25874919369b3175d6794f0_54236364',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'head'} */
/* {block 'hook_after_body_opening_tag'} */
class Block_214297968569b3175d67a9a5_66200387 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_214297968569b3175d67a9a5_66200387',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'product_activation'} */
class Block_159706279169b3175d67b5c3_62708889 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_159706279169b3175d67b5c3_62708889',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
class Block_1279715669b3175d67be77_93038912 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1279715669b3175d67be77_93038912',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'header'} */
/* {block 'breadcrumb'} */
class Block_205363763569b3175d67c8e0_84465283 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_205363763569b3175d67c8e0_84465283',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'breadcrumb'} */
/* {block 'notifications'} */
class Block_28046269469b3175d67db96_47172989 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_28046269469b3175d67db96_47172989',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'notifications'} */
/* {block 'container_class'} */
class Block_189843119369b3175d67ec74_70327918 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
container<?php
}
}
/* {/block 'container_class'} */
/* {block 'left_column'} */
class Block_149653981369b3175d67f251_10471376 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="left-column" class="wrapper__left-column col-md-4 col-lg-3">
                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] === 'product') {?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct'),$_smarty_tpl ) );?>

                <?php } else { ?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumn'),$_smarty_tpl ) );?>

                <?php }?>
              </div>
            <?php
}
}
/* {/block 'left_column'} */
/* {block 'content'} */
class Block_152501161269b3175d681744_93839854 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <p>Hello world! This is HTML5 Boilerplate.</p>
                <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_45490748769b3175d681082_99142314 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <section id="content-wrapper" class="wrapper__content col-md-4 col-lg-6">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayContentWrapperTop'),$_smarty_tpl ) );?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152501161269b3175d681744_93839854', 'content', $this->tplIndex);
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayContentWrapperBottom'),$_smarty_tpl ) );?>

              </section>
            <?php
}
}
/* {/block 'content_wrapper'} */
/* {block 'right_column'} */
class Block_107016870369b3175d6825e9_48477384 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="right-column" class="wrapper__right-column col-md-4 col-lg-3">
                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] === 'product') {?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );?>

                <?php } else { ?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumn'),$_smarty_tpl ) );?>

                <?php }?>
              </div>
            <?php
}
}
/* {/block 'right_column'} */
/* {block 'content_columns'} */
class Block_115268951869b3175d67e820_10274326 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_columns' => 
  array (
    0 => 'Block_115268951869b3175d67e820_10274326',
  ),
  'container_class' => 
  array (
    0 => 'Block_189843119369b3175d67ec74_70327918',
  ),
  'left_column' => 
  array (
    0 => 'Block_149653981369b3175d67f251_10471376',
  ),
  'content_wrapper' => 
  array (
    0 => 'Block_45490748769b3175d681082_99142314',
  ),
  'content' => 
  array (
    0 => 'Block_152501161269b3175d681744_93839854',
  ),
  'right_column' => 
  array (
    0 => 'Block_107016870369b3175d6825e9_48477384',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189843119369b3175d67ec74_70327918', 'container_class', $this->tplIndex);
?>
">
          <div class="row">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149653981369b3175d67f251_10471376', 'left_column', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45490748769b3175d681082_99142314', 'content_wrapper', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107016870369b3175d6825e9_48477384', 'right_column', $this->tplIndex);
?>

          </div>
        </div>
      <?php
}
}
/* {/block 'content_columns'} */
/* {block 'footer'} */
class Block_190493177969b3175d684536_78358641 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_190493177969b3175d684536_78358641',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'footer'} */
/* {block 'javascript_bottom'} */
class Block_202576966569b3175d684de4_55703676 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_202576966569b3175d684de4_55703676',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/javascript.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
    <?php
}
}
/* {/block 'javascript_bottom'} */
/* {block 'bottom_elements'} */
class Block_186730284969b3175d6858d4_16463355 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom_elements' => 
  array (
    0 => 'Block_186730284969b3175d6858d4_16463355',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:components/page-loader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php $_smarty_tpl->_subTemplateRender('file:components/toast-container.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php $_smarty_tpl->_subTemplateRender('file:components/password-policy-template.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'bottom_elements'} */
/* {block 'hook_before_body_closing_tag'} */
class Block_169538881869b3175d68c134_55988973 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_169538881869b3175d68c134_55988973',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_before_body_closing_tag'} */
}
