<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:55:40
         compiled from "module:otcmssubbanners/views/templates/hook/otcmssubbanners.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2418251835a0b03ec71e0c1-74708299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1adf9ad52e5495ec30b6388dfadddaeadf9ccbed' => 
    array (
      0 => 'module:otcmssubbanners/views/templates/hook/otcmssubbanners.tpl',
      1 => 1510671201,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '2418251835a0b03ec71e0c1-74708299',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'cms_infos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0b03ec720f85_22007632',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b03ec720f85_22007632')) {function content_5a0b03ec720f85_22007632($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']=='index') {?>
	<div id="otcmssubbanners">
	  <?php echo $_smarty_tpl->tpl_vars['cms_infos']->value['text'];?>

	</div>
<?php }?><?php }} ?>
