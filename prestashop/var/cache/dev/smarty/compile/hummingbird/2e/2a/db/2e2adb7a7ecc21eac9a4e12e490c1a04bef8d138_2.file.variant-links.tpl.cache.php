<?php
/* Smarty version 4.5.5, created on 2026-03-12 19:43:24
  from '/var/www/html/themes/hummingbird/templates/catalog/_partials/variant-links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69b3175cac2434_97006016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e2adb7a7ecc21eac9a4e12e490c1a04bef8d138' => 
    array (
      0 => '/var/www/html/themes/hummingbird/templates/catalog/_partials/variant-links.tpl',
      1 => 1750078354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69b3175cac2434_97006016 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '102753010569b3175cabe3f5_90119362';
?>
<div class="variant-links">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['variants']->value, 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['variant']->value['url']), ENT_QUOTES, 'UTF-8');?>
"
       class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['variant']->value['type']), ENT_QUOTES, 'UTF-8');?>
"
       title="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['variant']->value['name']), ENT_QUOTES, 'UTF-8');?>
"
       aria-label="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['variant']->value['name']), ENT_QUOTES, 'UTF-8');?>
"
      <?php if ($_smarty_tpl->tpl_vars['variant']->value['texture']) {?> style="background-image: url(<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['variant']->value['texture']), ENT_QUOTES, 'UTF-8');?>
)" 
      <?php } elseif ($_smarty_tpl->tpl_vars['variant']->value['html_color_code']) {?> style="background-color: <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['variant']->value['html_color_code']), ENT_QUOTES, 'UTF-8');?>
" <?php }?>
   ></a>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

  <span class="js-count count"></span>
</div>
<?php }
}
