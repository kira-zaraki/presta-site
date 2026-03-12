<?php
/* Smarty version 4.5.5, created on 2026-03-12 19:43:25
  from 'module:ps_specialsviewstemplateshookps_specials.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69b3175d1b5632_62702446',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69eca6f7099f96303240f391e6c6743858b25719' => 
    array (
      0 => 'module:ps_specialsviewstemplateshookps_specials.tpl',
      1 => 1750078354,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:components/section-title.tpl' => 1,
    'file:catalog/_partials/productlist.tpl' => 1,
  ),
),false)) {
function content_69b3175d1b5632_62702446 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '63305952969b3175d1b3923_90841981';
?>
<!-- begin /var/www/html/themes/hummingbird/modules/ps_specials/views/templates/hook/ps_specials.tpl -->
<section class="sale-products mt-3">
    <div class="container">
        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'On sale','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:components/section-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>$_prefixVariable3), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/productlist.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['products']->value,'productClass'=>'col-12 col-xs-6 col-lg-4 col-xl-3'), 0, false);
?>
        <div class="sale-products-footer text-center">
            <a class="all-product-link btn btn-outline-primary" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['allSpecialProductsLink']->value), ENT_QUOTES, 'UTF-8');?>
">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All sale products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
<i class="material-icons rtl-flip" aria-hidden="true">&#xE315;</i>
            </a>
        </div>
    </div>
</section>
<!-- end /var/www/html/themes/hummingbird/modules/ps_specials/views/templates/hook/ps_specials.tpl --><?php }
}
