<?php
/* Smarty version 4.5.5, created on 2026-03-12 19:43:25
  from '/var/www/html/themes/hummingbird/templates/components/toast.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69b3175dc500d6_77863866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c22add7de19b462f7fba4e44e06a70570a3ca03' => 
    array (
      0 => '/var/www/html/themes/hummingbird/templates/components/toast.tpl',
      1 => 1750078354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69b3175dc500d6_77863866 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('componentName', 'toast');?>

<template class="js-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
-template">
  <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
-body"></div>
      <button type="button" class="btn-close me-2 m-auto d-none" data-bs-dismiss="toast"></button>
    </div>
  </div>
</template>
<?php }
}
