<?php
/* Smarty version 4.5.5, created on 2026-03-12 19:43:24
  from 'module:ps_bannerps_banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69b3175ccbf3c9_38504064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64034093fbda864710a2c0f526b37f921e53ee39' => 
    array (
      0 => 'module:ps_bannerps_banner.tpl',
      1 => 1750078354,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69b3175ccbf3c9_38504064 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '137220104369b3175ccbbea7_54864929';
?>
<!-- begin /var/www/html/themes/hummingbird/modules/ps_banner/ps_banner.tpl --><a class="banner d-block text-center" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_link']->value), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_desc']->value), ENT_QUOTES, 'UTF-8');?>
">
  <?php if ((isset($_smarty_tpl->tpl_vars['banner_img']->value))) {?>
    <img
      src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_img']->value), ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_desc']->value), ENT_QUOTES, 'UTF-8');?>
"
      title="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_desc']->value), ENT_QUOTES, 'UTF-8');?>
"
      class="img-fluid"
      loading="lazy"
      <?php if (!empty($_smarty_tpl->tpl_vars['banner_width']->value)) {?>
        width="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_width']->value), ENT_QUOTES, 'UTF-8');?>
"
      <?php }?>
      <?php if (!empty($_smarty_tpl->tpl_vars['banner_height']->value)) {?>
        height="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_height']->value), ENT_QUOTES, 'UTF-8');?>
"
      <?php }?>
      >
  <?php } else { ?>
    <span><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_desc']->value), ENT_QUOTES, 'UTF-8');?>
</span>
  <?php }?>
</a>
<!-- end /var/www/html/themes/hummingbird/modules/ps_banner/ps_banner.tpl --><?php }
}
