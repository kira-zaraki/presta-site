<?php
/* Smarty version 4.5.5, created on 2026-03-12 22:32:59
  from '/var/www/html/themes/hummingbird/templates/customer/authentication.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69b33f1b1271f9_13880100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81901ee301aa3d233088c4b01234ec47aab1ba05' => 
    array (
      0 => '/var/www/html/themes/hummingbird/templates/customer/authentication.tpl',
      1 => 1750078354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69b33f1b1271f9_13880100 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->_assignInScope('componentName', 'login');?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186972173669b33f1b11f199_60968929', 'container_class');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172431782369b33f1b120125_90660613', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140374707969b33f1b122516_09521286', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'container_class'} */
class Block_186972173669b33f1b11f199_60968929 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container_class' => 
  array (
    0 => 'Block_186972173669b33f1b11f199_60968929',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
container container--limited-sm<?php
}
}
/* {/block 'container_class'} */
/* {block 'page_title'} */
class Block_172431782369b33f1b120125_90660613 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_172431782369b33f1b120125_90660613',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'display_after_login_form'} */
class Block_19293898269b33f1b1256b5_39855082 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomerLoginFormAfter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'display_after_login_form'} */
/* {block 'login_form_container'} */
class Block_7674775969b33f1b122843_50234060 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
">
      <section class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__form-wrapper">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'customer/_partials/login-form.tpl','ui'=>$_smarty_tpl->tpl_vars['login_form']->value),$_smarty_tpl ) );?>

      </section>
      
      <hr/>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19293898269b33f1b1256b5_39855082', 'display_after_login_form', $this->tplIndex);
?>


      <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__register-prompt">
        <h2 class="h4 mb-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No account?','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</h2>

        <div class="d-grid">
          <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['register']), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-outline-primary" data-link-action="display-register-form">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create your account','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </a>
        </div>
      </div>
    </div>
  <?php
}
}
/* {/block 'login_form_container'} */
/* {block 'page_content'} */
class Block_140374707969b33f1b122516_09521286 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_140374707969b33f1b122516_09521286',
  ),
  'login_form_container' => 
  array (
    0 => 'Block_7674775969b33f1b122843_50234060',
  ),
  'display_after_login_form' => 
  array (
    0 => 'Block_19293898269b33f1b1256b5_39855082',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7674775969b33f1b122843_50234060', 'login_form_container', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_content'} */
}
