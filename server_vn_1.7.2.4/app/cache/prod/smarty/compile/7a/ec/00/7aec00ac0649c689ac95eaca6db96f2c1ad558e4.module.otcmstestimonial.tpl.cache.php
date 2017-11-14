<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:55:40
         compiled from "module:otcmstestimonial/views/templates/hook/otcmstestimonial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:253953315a0b03ec549039-06233746%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7aec00ac0649c689ac95eaca6db96f2c1ad558e4' => 
    array (
      0 => 'module:otcmstestimonial/views/templates/hook/otcmstestimonial.tpl',
      1 => 1510671201,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '253953315a0b03ec549039-06233746',
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
  'unifunc' => 'content_5a0b03ec54bf04_56675928',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b03ec54bf04_56675928')) {function content_5a0b03ec54bf04_56675928($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']=='index') {?>
	<div id="otcmstestimonial">
	  <?php echo $_smarty_tpl->tpl_vars['cms_infos']->value['text'];?>

	</div>
<?php }?><?php }} ?>
