<?php
/* Smarty version 4.5.5, created on 2026-03-12 22:32:59
  from '/var/www/html/themes/hummingbird/templates/_partials/form-fields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69b33f1b1db1c5_75397557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0aca9d693cffdce8d0b618a6bf6393bf907d964' => 
    array (
      0 => '/var/www/html/themes/hummingbird/templates/_partials/form-fields.tpl',
      1 => 1750078354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_69b33f1b1db1c5_75397557 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'hidden') {?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49428172369b33f1b1af614_32756707', 'form_field_item_hidden');
?>


<?php } else { ?>

  <div class="mb-3<?php if (!empty($_smarty_tpl->tpl_vars['field']->value['errors'])) {?> has-error<?php }?>">
    <?php if (($_smarty_tpl->tpl_vars['field']->value['type'] !== 'checkbox')) {?>
      <label class="form-label<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required<?php }?>" for="field-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['name']), ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] !== 'checkbox') {?>
          <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['label']), ENT_QUOTES, 'UTF-8');?>

        <?php }?>
      </label>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] === 'select') {?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131888896969b33f1b1b2d01_58289227', 'form_field_item_select');
?>


    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'countrySelect') {?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86435501869b33f1b1b6f27_74275637', 'form_field_item_country');
?>


    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'radio-buttons') {?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89233833769b33f1b1b9ca8_21684477', 'form_field_item_radio');
?>


    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'checkbox') {?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191449698369b33f1b1bd251_78746242', 'form_field_item_checkbox');
?>


    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'date') {?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137363269069b33f1b1bf2b8_39508177', 'form_field_item_date');
?>


    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'birthday') {?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58124229169b33f1b1c2037_19991699', 'form_field_item_birthday');
?>


    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'password') {?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26784803069b33f1b1c95b1_96759224', 'form_field_item_password');
?>


    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'textarea') {?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38682385969b33f1b1ce5d4_10490181', 'form_field_item_textarea');
?>


    <?php } else { ?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1626825369b33f1b1d3877_86401832', 'form_field_item_other');
?>


    <?php }?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192104481269b33f1b1d8688_17643354', 'form_field_errors');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61170950969b33f1b1d90a3_68736129', 'form_field_comment');
?>

  </div>
<?php }
}
/* {block 'form_field_item_hidden'} */
class Block_49428172369b33f1b1af614_32756707 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_hidden' => 
  array (
    0 => 'Block_49428172369b33f1b1af614_32756707',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <input type="hidden" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['name']), ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['value']), ENT_QUOTES, 'UTF-8');?>
">
  <?php
}
}
/* {/block 'form_field_item_hidden'} */
/* {block 'form_field_item_select'} */
class Block_131888896969b33f1b1b2d01_58289227 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_select' => 
  array (
    0 => 'Block_131888896969b33f1b1b2d01_58289227',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <select class="form-select" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['name']), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>>
          <option value disabled selected><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- please choose --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</option>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['availableValues'], 'label', false, 'value');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?>
            <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['value']->value), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['field']->value['value']) {?> selected <?php }?>><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['label']->value), ENT_QUOTES, 'UTF-8');?>
</option>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
      <?php
}
}
/* {/block 'form_field_item_select'} */
/* {block 'form_field_item_country'} */
class Block_86435501869b33f1b1b6f27_74275637 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_country' => 
  array (
    0 => 'Block_86435501869b33f1b1b6f27_74275637',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <select
        class="form-select js-country"
        name="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['name']), ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
        >
          <option value disabled selected><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- please choose --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</option>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['availableValues'], 'label', false, 'value');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?>
            <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['value']->value), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['field']->value['value']) {?> selected <?php }?>><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['label']->value), ENT_QUOTES, 'UTF-8');?>
</option>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
      <?php
}
}
/* {/block 'form_field_item_country'} */
/* {block 'form_field_item_radio'} */
class Block_89233833769b33f1b1b9ca8_21684477 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_radio' => 
  array (
    0 => 'Block_89233833769b33f1b1b9ca8_21684477',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['availableValues'], 'label', false, 'value');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?>
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['name']), ENT_QUOTES, 'UTF-8');?>
"
                id="field-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['name']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['value']->value), ENT_QUOTES, 'UTF-8');?>
"
                value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['value']->value), ENT_QUOTES, 'UTF-8');?>
"
                <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['field']->value['value']) {?> checked <?php }?>
              >
              <label class="form-check-label" for="field-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['name']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['value']->value), ENT_QUOTES, 'UTF-8');?>
">
                <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['label']->value), ENT_QUOTES, 'UTF-8');?>

              </label>
            </div>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      <?php
}
}
/* {/block 'form_field_item_radio'} */
/* {block 'form_field_item_checkbox'} */
class Block_191449698369b33f1b1bd251_78746242 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_checkbox' => 
  array (
    0 => 'Block_191449698369b33f1b1bd251_78746242',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="form-check">
          <input
            class="form-check-input"
            name="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['name']), ENT_QUOTES, 'UTF-8');?>
"
            type="checkbox"
            value="1"
            id="field-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['name']), ENT_QUOTES, 'UTF-8');?>
"
            value="1" <?php if ($_smarty_tpl->tpl_vars['field']->value['value']) {?>checked="checked"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
          >
          <label class="form-check-label" for="field-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['name']), ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->tpl_vars['field']->value['label'];?>

          </label>
        </div>
      <?php
}
}
/* {/block 'form_field_item_checkbox'} */
/* {block 'form_field_item_date'} */
class Block_137363269069b33f1b1bf2b8_39508177 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_date' => 
  array (
    0 => 'Block_137363269069b33f1b1bf2b8_39508177',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <input name="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['name']), ENT_QUOTES, 'UTF-8');?>
" class="form-control" type="date" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['value']), ENT_QUOTES, 'UTF-8');?>
"<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder']))) {?> placeholder="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder']), ENT_QUOTES, 'UTF-8');?>
" aria-label="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
        <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['comment']))) {?>
          <span class="form-text">
            <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['availableValues']['comment']), ENT_QUOTES, 'UTF-8');?>

          </span>
        <?php }?>
      <?php
}
}
/* {/block 'form_field_item_date'} */
/* {block 'form_field_item_birthday'} */
class Block_58124229169b33f1b1c2037_19991699 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_birthday' => 
  array (
    0 => 'Block_58124229169b33f1b1c2037_19991699',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/function.html_select_date.php','function'=>'smarty_function_html_select_date',),));
?>

        <div class="js-parent-focus">
          <?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['value']), ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['name']), ENT_QUOTES, 'UTF-8');
$_prefixVariable2 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- day --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );
$_prefixVariable3 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- month --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );
$_prefixVariable4 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- year --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );
$_prefixVariable5 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( 'Y' ))), ENT_QUOTES, 'UTF-8');
$_prefixVariable6 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( 'Y' ))), ENT_QUOTES, 'UTF-8');
$_prefixVariable7 = ob_get_clean();
echo smarty_function_html_select_date(array('field_order'=>'DMY','time'=>$_prefixVariable1,'field_array'=>$_prefixVariable2,'prefix'=>false,'reverse_years'=>true,'field_separator'=>'<br>','day_extra'=>'class="form-select"','month_extra'=>'class="form-select"','year_extra'=>'class="form-select"','day_empty'=>$_prefixVariable3,'month_empty'=>$_prefixVariable4,'year_empty'=>$_prefixVariable5,'start_year'=>$_prefixVariable6-100,'end_year'=>$_prefixVariable7),$_smarty_tpl);?>

        </div>
      <?php
}
}
/* {/block 'form_field_item_birthday'} */
/* {block 'form_field_item_password'} */
class Block_26784803069b33f1b1c95b1_96759224 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_password' => 
  array (
    0 => 'Block_26784803069b33f1b1c95b1_96759224',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <div class="input-group password-field js-parent-focus">
          <input
            class="form-control js-child-focus js-visible-password"
            name="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['name']), ENT_QUOTES, 'UTF-8');?>
"
            id="field-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['name']), ENT_QUOTES, 'UTF-8');?>
"
            type="password"
            <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete']) {?>autocomplete="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['autocomplete']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            value=""
            pattern=".{5,}"
            <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['configuration']->value['password_policy']['minimum_length']))) {?>data-minlength="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['configuration']->value['password_policy']['minimum_length']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['configuration']->value['password_policy']['maximum_length']))) {?>data-maxlength="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['configuration']->value['password_policy']['maximum_length']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['configuration']->value['password_policy']['minimum_score']))) {?>data-minscore="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['configuration']->value['password_policy']['minimum_score']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            data-bs-placement="top"
            data-bs-trigger="manual"
          >

          <button
            class="btn btn-primary"
            type="button"
            data-action="show-password"
            data-text-show="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show Password','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
            data-text-hide="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hide Password','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
            aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show Password','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
            aria-expanded="false"
          >
            <i class="material-icons">visibility</i>
          </button>
        </div>
      <?php
}
}
/* {/block 'form_field_item_password'} */
/* {block 'form_field_item_textarea'} */
class Block_38682385969b33f1b1ce5d4_10490181 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_textarea' => 
  array (
    0 => 'Block_38682385969b33f1b1ce5d4_10490181',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <textarea
            id="field-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['name']), ENT_QUOTES, 'UTF-8');?>
"
            class="form-control"
            name="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['name']), ENT_QUOTES, 'UTF-8');?>
"
            <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder']))) {?>placeholder="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['maxLength']) {?>maxlength="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['maxLength']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['rows']))) {?>rows="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['availableValues']['rows']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['cols']))) {?>cols="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['availableValues']['cols']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
          ><?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->tpl_vars['field']->value['value'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
</textarea>
          <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['comment']))) {?>
            <span class="form-text">
              <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['availableValues']['comment']), ENT_QUOTES, 'UTF-8');?>

            </span>
          <?php }?>
      <?php
}
}
/* {/block 'form_field_item_textarea'} */
/* {block 'form_field_item_other'} */
class Block_1626825369b33f1b1d3877_86401832 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_other' => 
  array (
    0 => 'Block_1626825369b33f1b1d3877_86401832',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <input
          class="form-control"
          name="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['name']), ENT_QUOTES, 'UTF-8');?>
"
          id="field-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['name']), ENT_QUOTES, 'UTF-8');?>
"
          type="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['type']), ENT_QUOTES, 'UTF-8');?>
"
          value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['value']), ENT_QUOTES, 'UTF-8');?>
"
          <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete']) {?>autocomplete="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['autocomplete']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
          <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder']))) {?>placeholder="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
          <?php if ($_smarty_tpl->tpl_vars['field']->value['maxLength']) {?>maxlength="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['maxLength']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
          <?php if (!empty($_smarty_tpl->tpl_vars['field']->value['minLength'])) {?>minlength="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['minLength']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
          aria-label="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['name']), ENT_QUOTES, 'UTF-8');?>
"
          <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
        >
        <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['comment']))) {?>
          <span class="form-text">
            <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['field']->value['availableValues']['comment']), ENT_QUOTES, 'UTF-8');?>

          </span>
        <?php }?>
      <?php
}
}
/* {/block 'form_field_item_other'} */
/* {block 'form_field_errors'} */
class Block_192104481269b33f1b1d8688_17643354 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_errors' => 
  array (
    0 => 'Block_192104481269b33f1b1d8688_17643354',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['field']->value['errors']), 0, false);
?>
    <?php
}
}
/* {/block 'form_field_errors'} */
/* {block 'form_field_comment'} */
class Block_61170950969b33f1b1d90a3_68736129 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_comment' => 
  array (
    0 => 'Block_61170950969b33f1b1d90a3_68736129',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ((!$_smarty_tpl->tpl_vars['field']->value['required'] && !in_array($_smarty_tpl->tpl_vars['field']->value['type'],array('radio-buttons','checkbox')))) {?>
        <div class="form-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Optional','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</div>
      <?php }?>
    <?php
}
}
/* {/block 'form_field_comment'} */
}
