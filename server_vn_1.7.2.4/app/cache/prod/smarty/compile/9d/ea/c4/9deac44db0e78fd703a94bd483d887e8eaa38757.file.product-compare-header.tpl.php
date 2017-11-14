<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:55:35
         compiled from "modules/otcompare/views/templates/hook/product-compare-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12792923765a0b03e71aa749-37130749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9deac44db0e78fd703a94bd483d887e8eaa38757' => 
    array (
      0 => 'modules/otcompare/views/templates/hook/product-compare-header.tpl',
      1 => 1510671201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12792923765a0b03e71aa749-37130749',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comparator_max_item' => 0,
    'compareUrl' => 0,
    'compared_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0b03e71b0366_97220904',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b03e71b0366_97220904')) {function content_5a0b03e71b0366_97220904($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['comparator_max_item']->value) {?>
	<li>
		<a class="bt_compare" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['compareUrl']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Compare','mod'=>'otcompare'),$_smarty_tpl);?>
" rel="nofollow">
			<span><?php echo smartyTranslate(array('s'=>'Compare','mod'=>'otcompare'),$_smarty_tpl);?>
 (<span class="total-compare-val"><?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['compared_products']->value), ENT_QUOTES, 'UTF-8');?>
</span>)</span>
		</a>
		<input type="hidden" name="compare_product_count" class="compare_product_count" value="<?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['compared_products']->value), ENT_QUOTES, 'UTF-8');?>
" />
	</li>
<?php }?><?php }} ?>
