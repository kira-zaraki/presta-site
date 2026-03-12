<?php
/* Smarty version 4.5.5, created on 2026-03-12 19:43:25
  from 'module:ps_customeraccountlinksps_customeraccountlinks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69b3175dabc645_47630327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinksps_customeraccountlinks.tpl',
      1 => 1750078354,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_69b3175dabc645_47630327 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/dev/smarty/compile/hummingbirdlayouts_layout_full_width_tpl/61/83/db/6183db04b0cde32b0f8a645690d38f4b864ce0f3_2.file.helpers.tpl.php',
    'uid' => '6183db04b0cde32b0f8a645690d38f4b864ce0f3',
    'call_name' => 'smarty_template_function_renderLogo_133331059769b3175d697051_35916106',
  ),
));
?><!-- begin /var/www/html/themes/hummingbird/modules/ps_customeraccountlinks/ps_customeraccountlinks.tpl -->
<div id="block-myaccount-infos" class="footer__block col-md-6 col-lg-3">
  <p class="footer__block__title d-none d-md-flex">
    <a href="http://localhost:8080/my-account" rel="nofollow">
      Your account
    </a>
  </p>

  <div role="button" class="footer__block__toggle d-md-none collapsed" data-bs-target="#footer_account_list" data-bs-toggle="collapse" aria-expanded="false">
    <span class="footer__block__title">Your account</span>
    <i class="material-icons" aria-hidden="true">arrow_drop_down</i>
  </div>
  <ul class="footer__block__content footer__block__content-list collapse" id="footer_account_list">
          <li><a href="http://localhost:8080/guest-tracking" title="Order tracking" rel="nofollow">Order tracking</a></li>
      <li><a href="http://localhost:8080/my-account" title="Log in to your customer account" rel="nofollow">Sign in</a></li>
      <li><a href="http://localhost:8080/registration" title="Create account" rel="nofollow">Create account</a></li>
      
<!-- begin module:blockwishlist/views/templates/hook/account/myaccount-block.tpl -->
<!-- begin /var/www/html/modules/blockwishlist/views/templates/hook/account/myaccount-block.tpl -->
<!-- end /var/www/html/modules/blockwishlist/views/templates/hook/account/myaccount-block.tpl -->
<!-- end module:blockwishlist/views/templates/hook/account/myaccount-block.tpl -->

<!-- begin /var/www/html/themes/hummingbird/modules/ps_emailalerts/views/templates/hook/my-account-footer.tpl -->
<li>
  <a href="//localhost:8080/module/ps_emailalerts/account" title="My alerts">
    My alerts
  </a>
</li>

<!-- end /var/www/html/themes/hummingbird/modules/ps_emailalerts/views/templates/hook/my-account-footer.tpl -->

    	</ul>
</div>
<!-- end /var/www/html/themes/hummingbird/modules/ps_customeraccountlinks/ps_customeraccountlinks.tpl --><?php }
}
