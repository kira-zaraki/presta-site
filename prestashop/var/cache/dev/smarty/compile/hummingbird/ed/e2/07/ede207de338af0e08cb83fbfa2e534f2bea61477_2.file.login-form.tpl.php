<?php
/* Smarty version 4.5.5, created on 2026-03-12 22:32:59
  from '/var/www/html/themes/hummingbird/templates/customer/_partials/login-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69b33f1b19d290_80478984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ede207de338af0e08cb83fbfa2e534f2bea61477' => 
    array (
      0 => '/var/www/html/themes/hummingbird/templates/customer/_partials/login-form.tpl',
      1 => 1750078354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_69b33f1b19d290_80478984 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203478962169b33f1b192c77_33510343', 'login_form');
?>

<?php }
/* {block 'login_form_errors'} */
class Block_22373452969b33f1b193000_15093098 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
?>
  <?php
}
}
/* {/block 'login_form_errors'} */
/* {block 'login_form_actionurl'} */
class Block_124063389969b33f1b197aa9_64099976 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['action']->value), ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'login_form_actionurl'} */
/* {block 'form_field'} */
class Block_32300833069b33f1b19aa61_72393950 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'form_field'} */
/* {block 'login_form_fields'} */
class Block_19151915369b33f1b198258_61227770 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32300833069b33f1b19aa61_72393950', 'form_field', $this->tplIndex);
?>

      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
}
/* {/block 'login_form_fields'} */
/* {block 'form_buttons'} */
class Block_114890510669b33f1b19be92_94603937 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="d-grid mb-2">
          <button id="submit-login" class="btn btn-primary" data-link-action="sign-in" type="submit" class="form-control-submit">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </button>
        </div>
      <?php
}
}
/* {/block 'form_buttons'} */
/* {block 'login_form_footer'} */
class Block_31834389269b33f1b19bba8_54732613 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <input type="hidden" name="submitLogin" value="1">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114890510669b33f1b19be92_94603937', 'form_buttons', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'login_form_footer'} */
/* {block 'login_form'} */
class Block_203478962169b33f1b192c77_33510343 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'login_form' => 
  array (
    0 => 'Block_203478962169b33f1b192c77_33510343',
  ),
  'login_form_errors' => 
  array (
    0 => 'Block_22373452969b33f1b193000_15093098',
  ),
  'login_form_actionurl' => 
  array (
    0 => 'Block_124063389969b33f1b197aa9_64099976',
  ),
  'login_form_fields' => 
  array (
    0 => 'Block_19151915369b33f1b198258_61227770',
  ),
  'form_field' => 
  array (
    0 => 'Block_32300833069b33f1b19aa61_72393950',
  ),
  'login_form_footer' => 
  array (
    0 => 'Block_31834389269b33f1b19bba8_54732613',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_114890510669b33f1b19be92_94603937',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22373452969b33f1b193000_15093098', 'login_form_errors', $this->tplIndex);
?>


  <form id="login-form" class="form-validation" action="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_124063389969b33f1b197aa9_64099976', 'login_form_actionurl', $this->tplIndex);
?>
" method="post" novalidate>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19151915369b33f1b198258_61227770', 'login_form_fields', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31834389269b33f1b19bba8_54732613', 'login_form_footer', $this->tplIndex);
?>


    <div class="login__forgot-password text-end mb-4">
      <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['password']), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

      </a>
    </div>

  </form>
<?php
}
}
/* {/block 'login_form'} */
}
