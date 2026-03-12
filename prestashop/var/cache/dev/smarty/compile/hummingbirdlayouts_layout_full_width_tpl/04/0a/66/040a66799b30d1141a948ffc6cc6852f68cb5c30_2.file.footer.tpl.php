<?php
/* Smarty version 4.5.5, created on 2026-03-12 19:43:25
  from '/var/www/html/themes/hummingbird/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69b3175d9c7349_30643506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '040a66799b30d1141a948ffc6cc6852f68cb5c30' => 
    array (
      0 => '/var/www/html/themes/hummingbird/templates/_partials/footer.tpl',
      1 => 1750078354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69b3175d9c7349_30643506 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="footer__before">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163108281769b3175d9c4337_69982145', 'hook_footer_before');
?>

</div>

<div class="footer__main">
  <div class="container">
    <div class="footer__main__top row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122861914669b3175d9c5014_14015171', 'hook_footer');
?>

    </div>

    <div class="footer__main__bottom row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45548396669b3175d9c5973_73317596', 'hook_footer_after');
?>

    </div>

    <p class="copyright">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91011166869b3175d9c61b6_48782608', 'copyright_link');
?>

    </p>
  </div>
</div>
<?php }
/* {block 'hook_footer_before'} */
class Block_163108281769b3175d9c4337_69982145 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_163108281769b3175d9c4337_69982145',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

  <?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_122861914669b3175d9c5014_14015171 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_122861914669b3175d9c5014_14015171',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_45548396669b3175d9c5973_73317596 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_45548396669b3175d9c5973_73317596',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer_after'} */
/* {block 'copyright_link'} */
class Block_91011166869b3175d9c61b6_48782608 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_91011166869b3175d9c61b6_48782608',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <a href="https://www.prestashop-project.org/" target="_blank" rel="noopener noreferrer nofollow">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( 'Y' )),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

        </a>
      <?php
}
}
/* {/block 'copyright_link'} */
}
