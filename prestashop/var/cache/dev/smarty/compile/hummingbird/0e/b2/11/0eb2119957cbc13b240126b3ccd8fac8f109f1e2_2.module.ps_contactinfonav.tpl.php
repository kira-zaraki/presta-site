<?php
/* Smarty version 4.5.5, created on 2026-03-12 19:43:25
  from 'module:ps_contactinfonav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69b3175d83e0f2_57827677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0eb2119957cbc13b240126b3ccd8fac8f109f1e2' => 
    array (
      0 => 'module:ps_contactinfonav.tpl',
      1 => 1750078354,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69b3175d83e0f2_57827677 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/themes/hummingbird/modules/ps_contactinfo/nav.tpl --><div id="_desktop_contact_link">
  <div id="contact-link" class="contact-link">
    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Call us: [1]%phone%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

    <?php } else { ?>
      <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['contact']), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact us','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a>
    <?php }?>
  </div>
</div>
<!-- end /var/www/html/themes/hummingbird/modules/ps_contactinfo/nav.tpl --><?php }
}
