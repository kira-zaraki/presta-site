<?php
/* Smarty version 4.5.5, created on 2026-03-12 19:43:25
  from 'module:ps_languageselectorps_languageselector.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69b3175d88ade5_50819562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c00f78dace25d509ec3a1f54176b7ae2000accf' => 
    array (
      0 => 'module:ps_languageselectorps_languageselector.tpl',
      1 => 1750078354,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69b3175d88ade5_50819562 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/themes/hummingbird/modules/ps_languageselector/ps_languageselector.tpl --><div id="_desktop_language_selector">
  <div class="language-selector__wrapper">
    <select id="language-selector" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Language','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
" class="form-select js-language-selector">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
        <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'language','id'=>$_smarty_tpl->tpl_vars['language']->value['id_lang']),$_smarty_tpl ) );?>
"<?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] == $_smarty_tpl->tpl_vars['current_language']->value['id_lang']) {?> selected="selected"<?php }?> data-iso-code="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['language']->value['iso_code']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['language']->value['name_simple']), ENT_QUOTES, 'UTF-8');?>
</option>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
  </div>
</div>
<!-- end /var/www/html/themes/hummingbird/modules/ps_languageselector/ps_languageselector.tpl --><?php }
}
