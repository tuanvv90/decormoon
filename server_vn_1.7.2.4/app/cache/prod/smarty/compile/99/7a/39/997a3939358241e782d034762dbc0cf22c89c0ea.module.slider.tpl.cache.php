<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:55:40
         compiled from "module:ot_imageslider/views/templates/hook/slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8153139935a0b03ec893ea4-62691376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '997a3939358241e782d034762dbc0cf22c89c0ea' => 
    array (
      0 => 'module:ot_imageslider/views/templates/hook/slider.tpl',
      1 => 1510671201,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '8153139935a0b03ec893ea4-62691376',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'othomeslider' => 0,
    'slide' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0b03ec8a0bc3_14049036',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b03ec8a0bc3_14049036')) {function content_5a0b03ec8a0bc3_14049036($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['othomeslider']->value['slides']) {?>
	<div class="flexslider" data-interval="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['othomeslider']->value['speed'], ENT_QUOTES, 'UTF-8');?>
" data-pause="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['othomeslider']->value['pause'], ENT_QUOTES, 'UTF-8');?>
">
		<div class="loadingdiv spinner"></div>
		<ul class="slides">
			<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['othomeslider']->value['slides']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
				<li class="slide">
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['legend'], ENT_QUOTES, 'UTF-8');?>
">
						<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image_url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8');?>
" />
						<?php if ($_smarty_tpl->tpl_vars['slide']->value['title']||$_smarty_tpl->tpl_vars['slide']->value['description']) {?>
							<div class="slide-description">
								<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
								<div><?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>
</div>
							</div>
						<?php }?>
					</a>				
				</li>
			<?php } ?>
		</ul>
	</div>
<?php }?><?php }} ?>
