<?php
/* Smarty version 4.5.5, created on 2026-03-12 22:41:54
  from '/var/www/html/admin322jsynuif4hektg9uv/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69b34132dd6877_57217409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74d85604534ca5a2f74ff4eaabb7469564095abb' => 
    array (
      0 => '/var/www/html/admin322jsynuif4hektg9uv/themes/default/template/content.tpl',
      1 => 1770114621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69b34132dd6877_57217409 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
