<?php
/* Smarty version 4.5.5, created on 2026-03-12 22:32:59
  from '/var/www/html/themes/hummingbird/templates/_partials/breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69b33f1b18d158_12504189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a3fb04f3cadd6ce821f279776049bb0b47b71ce' => 
    array (
      0 => '/var/www/html/themes/hummingbird/templates/_partials/breadcrumb.tpl',
      1 => 1750078354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69b33f1b18d158_12504189 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
 <?php $_smarty_tpl->_assignInScope('componentName', 'breadcrumb');?>

<nav data-depth="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['breadcrumb']->value['count']), ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__wrapper" aria-label="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
">
  <div class="container">
    <ol class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95728879469b33f1b17f977_74398960', 'breadcrumb');
?>

    </ol>
  </div>
</nav>
<?php }
/* {block 'breadcrumb_item'} */
class Block_213549726669b33f1b186729_29901813 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <li class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
-item">
              <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last'] : null)) {?>
                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['path']->value['url']), ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
-link"><span><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['path']->value['title']), ENT_QUOTES, 'UTF-8');?>
</span></a>
              <?php } else { ?>
                <span><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['path']->value['title']), ENT_QUOTES, 'UTF-8');?>
</span>
              <?php }?>
            </li>
          <?php
}
}
/* {/block 'breadcrumb_item'} */
/* {block 'breadcrumb'} */
class Block_95728879469b33f1b17f977_74398960 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_95728879469b33f1b17f977_74398960',
  ),
  'breadcrumb_item' => 
  array (
    0 => 'Block_213549726669b33f1b186729_29901813',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['path']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['total'];
?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213549726669b33f1b186729_29901813', 'breadcrumb_item', $this->tplIndex);
?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php
}
}
/* {/block 'breadcrumb'} */
}
