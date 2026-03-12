<?php
/* Smarty version 4.5.5, created on 2026-03-12 22:32:59
  from '/var/www/html/themes/hummingbird/templates/_partials/form-errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69b33f1b1a8af1_93937563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e31d70717475a78c368eb1d92d08f941df605fda' => 
    array (
      0 => '/var/www/html/themes/hummingbird/templates/_partials/form-errors.tpl',
      1 => 1750078354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69b33f1b1a8af1_93937563 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (smarty_modifier_count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172824294069b33f1b1a5ac9_22184161', 'form_errors');
?>

  </div>
<?php }
}
/* {block 'form_errors'} */
class Block_172824294069b33f1b1a5ac9_22184161 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_errors' => 
  array (
    0 => 'Block_172824294069b33f1b1a5ac9_22184161',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

      <div class="alert alert-danger mt-3">
          <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['errors']->value) > 1) {?>
            <p class="mb-1">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are %d% errors:','sprintf'=>array('%d%'=>smarty_modifier_count($_smarty_tpl->tpl_vars['errors']->value)),'d'=>'Shop.Notifications.Error'),$_smarty_tpl ) );?>

            </p>
            <ol>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
                <li><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'nl2br' ][ 0 ], array( $_smarty_tpl->tpl_vars['error']->value ));?>
</li>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ol>
          <?php } else { ?>
              <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'nl2br' ][ 0 ], array( $_smarty_tpl->tpl_vars['errors']->value[0] ));?>

          <?php }?>
      </div>
    <?php
}
}
/* {/block 'form_errors'} */
}
