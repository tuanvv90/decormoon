<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:55:40
         compiled from "module:otcategoryfeature/views/templates/hook/otcategoryfeature.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8569579965a0b03ec8d5a86-90300810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e1e9c3b8122a8bb933af1edea092d5cea1b96f1' => 
    array (
      0 => 'module:otcategoryfeature/views/templates/hook/otcategoryfeature.tpl',
      1 => 1510671201,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '8569579965a0b03ec8d5a86-90300810',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ot_categories' => 0,
    'ot_total' => 0,
    'item_category' => 0,
    'ot_config' => 0,
    'category' => 0,
    'link' => 0,
    'path_ssl' => 0,
    'iso_code' => 0,
    'sub_cat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0b03ec904b46_85781918',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b03ec904b46_85781918')) {function content_5a0b03ec904b46_85781918($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars["ot_cnt"] = new Smarty_variable("1", null, 0);?>
<?php $_smarty_tpl->tpl_vars["ot_total"] = new Smarty_variable("0", null, 0);?>
<?php  $_smarty_tpl->tpl_vars["item_category"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item_category"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ot_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item_category"]->key => $_smarty_tpl->tpl_vars["item_category"]->value) {
$_smarty_tpl->tpl_vars["item_category"]->_loop = true;
?>
<?php $_smarty_tpl->tpl_vars['ot_total'] = new Smarty_variable($_smarty_tpl->tpl_vars['ot_total']->value+1, null, 0);?>
<?php } ?>

<div id="ot_category_feature" class="ot_category_feature container">
	<h3 class="ot-title"><?php echo smartyTranslate(array('s'=>'Hot Categories','mod'=>'otcategoryfeature'),$_smarty_tpl);?>
</h3>

	<?php if (isset($_smarty_tpl->tpl_vars['ot_categories']->value)&&count($_smarty_tpl->tpl_vars['ot_categories']->value)>0) {?>
		<div class="list_carousel responsive clearfix">
			<div id="ot_cat_featured" class="product-list row">
			<?php  $_smarty_tpl->tpl_vars['item_category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item_category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ot_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item_category']->key => $_smarty_tpl->tpl_vars['item_category']->value) {
$_smarty_tpl->tpl_vars['item_category']->_loop = true;
?>
			<?php $_smarty_tpl->tpl_vars['category'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_category']->value['category'], null, 0);?>
				 <div class="item <?php if (intval($_smarty_tpl->getVariable('smarty')->value['foreach']['item_category']['first'])) {?>first_item<?php } elseif (intval($_smarty_tpl->getVariable('smarty')->value['foreach']['item_category']['last'])) {?>last_item<?php }?>  ">
					<div class="content">
					<?php if (isset($_smarty_tpl->tpl_vars['ot_config']->value->showimg)&&$_smarty_tpl->tpl_vars['ot_config']->value->showimg==1) {?>
						<div class="cat-img">
							<a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['category']->value->id_category,$_smarty_tpl->tpl_vars['category']->value->link_rewrite),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['category']->value->name,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
								<?php if ($_smarty_tpl->tpl_vars['category']->value->id_image&&$_smarty_tpl->tpl_vars['item_category']->value['cat_thumb']==1) {?>
									<img src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path_ssl']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
img/c/<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['category']->value->id_category), ENT_QUOTES, 'UTF-8');?>
_thumb.jpg" alt=""/>
								<?php } else { ?>
									<img class="replace-2x" src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path_ssl']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
img/c/<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['iso_code']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
.jpg" alt=""/>
								<?php }?>
							</a>
						</div>
					<?php }?>
					<div class="otcat-content">
					<div class="cat-infor">
						<h4 class="title">
							<a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['category']->value->id_category,$_smarty_tpl->tpl_vars['category']->value->link_rewrite),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
								<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['category']->value->name,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>

							</a>
						</h4>	
					</div>
					<?php if (count($_smarty_tpl->tpl_vars['item_category']->value['sub_cat']>0)&&isset($_smarty_tpl->tpl_vars['ot_config']->value->showsub)&&$_smarty_tpl->tpl_vars['ot_config']->value->showsub==1) {?>
					<div class="sub-cat">	
						<ul>
							<?php  $_smarty_tpl->tpl_vars['sub_cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub_cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item_category']->value['sub_cat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub_cat']->key => $_smarty_tpl->tpl_vars['sub_cat']->value) {
$_smarty_tpl->tpl_vars['sub_cat']->_loop = true;
?>
								<li>
									<a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['sub_cat']->value['id_category'],$_smarty_tpl->tpl_vars['sub_cat']->value['link_rewrite']),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sub_cat']->value['name'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sub_cat']->value['name']), ENT_QUOTES, 'UTF-8');?>
</a>
								</li>
							<?php } ?>
						</ul>
					</div>
					<?php }?>
					</div>
					</div>
				 </div>
			 <?php } ?>
			 </div>
		</div>
	<?php } else { ?>
		<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'There is no category','mod'=>'otcategoryfeature'),$_smarty_tpl);?>
</p>
	<?php }?>
	
	
</div><?php }} ?>
