<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:55:40
         compiled from "modules/ot_productimagehover/views/templates/hook/ot_productimagehover.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3831795155a0b03ec6b62f4-92331682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cca3f07e11d51b6ebebb168498e68107c9888ea' => 
    array (
      0 => 'modules/ot_productimagehover/views/templates/hook/ot_productimagehover.tpl',
      1 => 1510671201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3831795155a0b03ec6b62f4-92331682',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'home_image' => 0,
    'large_image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0b03ec6b9672_95108542',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b03ec6b9672_95108542')) {function content_5a0b03ec6b9672_95108542($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['home_image']->value) {?>
	<img class="second_image img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['home_image']->value, ENT_QUOTES, 'UTF-8');?>
" data-full-size-image-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['large_image']->value, ENT_QUOTES, 'UTF-8');?>
" alt="" />
<?php }?>
<?php }} ?>
