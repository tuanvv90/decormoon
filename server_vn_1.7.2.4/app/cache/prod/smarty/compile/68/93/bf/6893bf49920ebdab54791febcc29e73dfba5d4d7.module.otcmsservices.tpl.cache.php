<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:55:40
         compiled from "module:otcmsservices/views/templates/hook/otcmsservices.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7560803805a0b03ec514578-83371889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6893bf49920ebdab54791febcc29e73dfba5d4d7' => 
    array (
      0 => 'module:otcmsservices/views/templates/hook/otcmsservices.tpl',
      1 => 1510671201,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '7560803805a0b03ec514578-83371889',
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
  'unifunc' => 'content_5a0b03ec53a798_62546471',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b03ec53a798_62546471')) {function content_5a0b03ec53a798_62546471($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']=='index') {?>
	<div id="otcmsservices">
	  <?php echo $_smarty_tpl->tpl_vars['cms_infos']->value['text'];?>

	  </div>
<?php }?><?php }} ?>
