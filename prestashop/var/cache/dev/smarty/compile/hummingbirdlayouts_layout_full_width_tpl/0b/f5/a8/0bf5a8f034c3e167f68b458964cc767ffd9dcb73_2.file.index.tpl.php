<?php
/* Smarty version 4.5.5, created on 2026-03-12 19:43:25
  from '/var/www/html/themes/hummingbird/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69b3175d66b395_64455383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bf5a8f034c3e167f68b458964cc767ffd9dcb73' => 
    array (
      0 => '/var/www/html/themes/hummingbird/templates/index.tpl',
      1 => 1750078354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69b3175d66b395_64455383 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118676730669b3175d6641c5_96326262', 'breadcrumb');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117851951969b3175d6649a2_93796964', 'content_columns');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'breadcrumb'} */
class Block_118676730669b3175d6641c5_96326262 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_118676730669b3175d6641c5_96326262',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'breadcrumb'} */
/* {block 'left_column'} */
class Block_189016963869b3175d664d08_87321185 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'page_title'} */
class Block_205594758869b3175d6660d6_72682914 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <header class="page-header">
                <h1 class="h1"><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
              </header>
            <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_120791501069b3175d665d02_06611480 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205594758869b3175d6660d6_72682914', 'page_title', $this->tplIndex);
?>

          <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_139778334269b3175d668466_95439639 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_136848974769b3175d668b83_04823542 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

                <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_47387271269b3175d6688d6_14523892 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136848974769b3175d668b83_04823542', 'hook_home', $this->tplIndex);
?>

              <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_4460531269b3175d668140_03652661 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <section id="content" class="page-content page-home">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139778334269b3175d668466_95439639', 'page_content_top', $this->tplIndex);
?>


              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47387271269b3175d6688d6_14523892', 'page_content', $this->tplIndex);
?>

            </section>
          <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_171151281169b3175d669a64_11019683 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <!-- Footer content -->
              <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_112997114269b3175d6697b7_71263838 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <footer class="page-footer">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171151281169b3175d669a64_11019683', 'page_footer', $this->tplIndex);
?>

            </footer>
          <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_36028863669b3175d665a31_62364174 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <!-- TODO INSIDE -->
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120791501069b3175d665d02_06611480', 'page_header_container', $this->tplIndex);
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4460531269b3175d668140_03652661', 'page_content_container', $this->tplIndex);
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112997114269b3175d6697b7_71263838', 'page_footer_container', $this->tplIndex);
?>

        <!-- TODO INSIDE -->
      <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_112279800269b3175d665211_06061953 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="content-wrapper" class="wrapper__content">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36028863669b3175d665a31_62364174', 'content', $this->tplIndex);
?>


      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

    </div>
  <?php
}
}
/* {/block 'content_wrapper'} */
/* {block 'right_column'} */
class Block_190853515569b3175d66ac26_94697769 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content_columns'} */
class Block_117851951969b3175d6649a2_93796964 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_columns' => 
  array (
    0 => 'Block_117851951969b3175d6649a2_93796964',
  ),
  'left_column' => 
  array (
    0 => 'Block_189016963869b3175d664d08_87321185',
  ),
  'content_wrapper' => 
  array (
    0 => 'Block_112279800269b3175d665211_06061953',
  ),
  'content' => 
  array (
    0 => 'Block_36028863669b3175d665a31_62364174',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_120791501069b3175d665d02_06611480',
  ),
  'page_title' => 
  array (
    0 => 'Block_205594758869b3175d6660d6_72682914',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_4460531269b3175d668140_03652661',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_139778334269b3175d668466_95439639',
  ),
  'page_content' => 
  array (
    0 => 'Block_47387271269b3175d6688d6_14523892',
  ),
  'hook_home' => 
  array (
    0 => 'Block_136848974769b3175d668b83_04823542',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_112997114269b3175d6697b7_71263838',
  ),
  'page_footer' => 
  array (
    0 => 'Block_171151281169b3175d669a64_11019683',
  ),
  'right_column' => 
  array (
    0 => 'Block_190853515569b3175d66ac26_94697769',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189016963869b3175d664d08_87321185', 'left_column', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112279800269b3175d665211_06061953', 'content_wrapper', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190853515569b3175d66ac26_94697769', 'right_column', $this->tplIndex);
?>

<?php
}
}
/* {/block 'content_columns'} */
}
