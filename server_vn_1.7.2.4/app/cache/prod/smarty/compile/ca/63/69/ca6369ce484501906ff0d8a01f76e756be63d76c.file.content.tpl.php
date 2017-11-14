<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:54:05
         compiled from "/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/admin9945q9hrh/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2189518225a0b038d1acbb7-37287761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca6369ce484501906ff0d8a01f76e756be63d76c' => 
    array (
      0 => '/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/admin9945q9hrh/themes/default/template/content.tpl',
      1 => 1510670196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2189518225a0b038d1acbb7-37287761',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0b038d1af918_06187067',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b038d1af918_06187067')) {function content_5a0b038d1af918_06187067($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
