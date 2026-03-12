<?php
/* Smarty version 4.5.5, created on 2026-03-12 19:43:25
  from '/var/www/html/themes/hummingbird/templates/layouts/layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69b3175d674035_66931079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b29e29873f7f8ba31de563d63460b4bc02d3ef0' => 
    array (
      0 => '/var/www/html/themes/hummingbird/templates/layouts/layout-full-width.tpl',
      1 => 1750078354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69b3175d674035_66931079 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42128827669b3175d671df1_98980852', 'content_columns');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'container_class'} */
class Block_49548178069b3175d672148_65499253 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
container<?php
}
}
/* {/block 'container_class'} */
/* {block 'left_column'} */
class Block_17308094569b3175d672689_41218800 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'content'} */
class Block_188980604269b3175d673087_52630301 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <p>Hello world! This is HTML5 Boilerplate.</p>
      <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_3490794669b3175d672ae5_71719739 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="content-wrapper" class="wrapper__content wrapper__content-full-width">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayContentWrapperTop'),$_smarty_tpl ) );?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188980604269b3175d673087_52630301', 'content', $this->tplIndex);
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayContentWrapperBottom'),$_smarty_tpl ) );?>

    </div>
  <?php
}
}
/* {/block 'content_wrapper'} */
/* {block 'right_column'} */
class Block_141375782869b3175d6739e2_43918188 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content_columns'} */
class Block_42128827669b3175d671df1_98980852 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_columns' => 
  array (
    0 => 'Block_42128827669b3175d671df1_98980852',
  ),
  'container_class' => 
  array (
    0 => 'Block_49548178069b3175d672148_65499253',
  ),
  'left_column' => 
  array (
    0 => 'Block_17308094569b3175d672689_41218800',
  ),
  'content_wrapper' => 
  array (
    0 => 'Block_3490794669b3175d672ae5_71719739',
  ),
  'content' => 
  array (
    0 => 'Block_188980604269b3175d673087_52630301',
  ),
  'right_column' => 
  array (
    0 => 'Block_141375782869b3175d6739e2_43918188',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49548178069b3175d672148_65499253', 'container_class', $this->tplIndex);
?>
">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17308094569b3175d672689_41218800', 'left_column', $this->tplIndex);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3490794669b3175d672ae5_71719739', 'content_wrapper', $this->tplIndex);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141375782869b3175d6739e2_43918188', 'right_column', $this->tplIndex);
?>

  </div>
<?php
}
}
/* {/block 'content_columns'} */
}
