<?php
/* Smarty version 4.5.5, created on 2026-03-12 19:43:38
  from '/var/www/html/themes/hummingbird/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69b3176a0fac88_07565727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5505c04ca5631ce653e07032111d3f1576945a58' => 
    array (
      0 => '/var/www/html/themes/hummingbird/templates/page.tpl',
      1 => 1750078354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69b3176a0fac88_07565727 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78188188869b3176a0f81d1_00803599', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_87388798369b3176a0f8796_33907548 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="page-header">
        <h1 class="h4"><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
      </div>
    <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_198065104469b3176a0f84f9_04811671 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87388798369b3176a0f8796_33907548', 'page_title', $this->tplIndex);
?>

  <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_211552321269b3176a0f9568_65241665 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_206040371669b3176a0f9b77_61809677 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <!-- Page content -->
      <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_18925473069b3176a0f92a3_42213903 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="content" class="page-content page-general">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211552321269b3176a0f9568_65241665', 'page_content_top', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206040371669b3176a0f9b77_61809677', 'page_content', $this->tplIndex);
?>

    </section>
  <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_54452330069b3176a0fa490_55290518 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
      <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_34596773669b3176a0fa206_88758819 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <footer class="page-footer">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54452330069b3176a0fa490_55290518', 'page_footer', $this->tplIndex);
?>

    </footer>
  <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_78188188869b3176a0f81d1_00803599 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_78188188869b3176a0f81d1_00803599',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_198065104469b3176a0f84f9_04811671',
  ),
  'page_title' => 
  array (
    0 => 'Block_87388798369b3176a0f8796_33907548',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_18925473069b3176a0f92a3_42213903',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_211552321269b3176a0f9568_65241665',
  ),
  'page_content' => 
  array (
    0 => 'Block_206040371669b3176a0f9b77_61809677',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_34596773669b3176a0fa206_88758819',
  ),
  'page_footer' => 
  array (
    0 => 'Block_54452330069b3176a0fa490_55290518',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198065104469b3176a0f84f9_04811671', 'page_header_container', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18925473069b3176a0f92a3_42213903', 'page_content_container', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34596773669b3176a0fa206_88758819', 'page_footer_container', $this->tplIndex);
?>

<?php
}
}
/* {/block 'content'} */
}
