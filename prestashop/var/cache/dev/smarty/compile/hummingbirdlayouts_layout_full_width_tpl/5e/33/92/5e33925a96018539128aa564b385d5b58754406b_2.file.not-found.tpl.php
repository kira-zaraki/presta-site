<?php
/* Smarty version 4.5.5, created on 2026-03-12 19:43:38
  from '/var/www/html/themes/hummingbird/templates/errors/not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69b3176acccc35_15958005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e33925a96018539128aa564b385d5b58754406b' => 
    array (
      0 => '/var/www/html/themes/hummingbird/templates/errors/not-found.tpl',
      1 => 1750078354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69b3176acccc35_15958005 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131277174569b3176acc84e0_43434361', 'page_content');
?>

</section>
<?php }
/* {block 'error_content'} */
class Block_191316503369b3176acc8935_26310342 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ((isset($_smarty_tpl->tpl_vars['errorContent']->value))) {?>
          <?php echo $_smarty_tpl->tpl_vars['errorContent']->value;?>

          <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['index']), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary back-to-index">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to Home page','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

            <i class="material-icons rtl-flip" aria-hidden="true">&#xE315;</i>
          </a>
      <?php } else { ?>
        <h1 class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The page you are looking for is no longer available','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h1>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'It can not be reached anymore. Can we still attract you into our shop?','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
        <a class="btn btn-outline-primary btn-with-icon mt-3" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['index']), ENT_QUOTES, 'UTF-8');?>
">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go shopping','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

          <i class="material-icons rtl-flip" aria-hidden="true">&#xE315;</i>
        </a>
      <?php }?>
    <?php
}
}
/* {/block 'error_content'} */
/* {block 'hook_not_found'} */
class Block_26918262769b3176accbf45_59401698 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_not_found'} */
/* {block 'page_content'} */
class Block_131277174569b3176acc84e0_43434361 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_131277174569b3176acc84e0_43434361',
  ),
  'error_content' => 
  array (
    0 => 'Block_191316503369b3176acc8935_26310342',
  ),
  'hook_not_found' => 
  array (
    0 => 'Block_26918262769b3176accbf45_59401698',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191316503369b3176acc8935_26310342', 'error_content', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26918262769b3176accbf45_59401698', 'hook_not_found', $this->tplIndex);
?>

  <?php
}
}
/* {/block 'page_content'} */
}
