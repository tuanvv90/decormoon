<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:55:40
         compiled from "modules/otcompare/views/templates/hook/otcompare-button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1813327685a0b03ec6fb837-81405667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5cdca1a8d1c37d5bb2bcb12f965c68581bae385' => 
    array (
      0 => 'modules/otcompare/views/templates/hook/otcompare-button.tpl',
      1 => 1510671201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1813327685a0b03ec6fb837-81405667',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'added' => 0,
    'id_product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0b03ec7013e8_83852052',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b03ec7013e8_83852052')) {function content_5a0b03ec7013e8_83852052($_smarty_tpl) {?>
<div class="compare">
	<a class="add_to_compare btn btn-primary<?php if ($_smarty_tpl->tpl_vars['added']->value) {?> checked<?php }?>" href="#" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_product']->value, ENT_QUOTES, 'UTF-8');?>
" data-dismiss="modal" title="<?php if ($_smarty_tpl->tpl_vars['added']->value) {?><?php echo smartyTranslate(array('s'=>'Remove from Compare','mod'=>'otcompare'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Add to Compare','mod'=>'otcompare'),$_smarty_tpl);?>
<?php }?>">
		<span><?php echo smartyTranslate(array('s'=>'Add to Compare','mod'=>'otcompare'),$_smarty_tpl);?>
</span>
	</a>
</div>
<?php }} ?>
