<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:55:40
         compiled from "module:ot_brandlogo/views/templates/hook/ot_brandlogo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19681753715a0b03ec7848a2-44900076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a744403b90914d5b5d9a7c2e560c3d322d768ef' => 
    array (
      0 => 'module:ot_brandlogo/views/templates/hook/ot_brandlogo.tpl',
      1 => 1510671201,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '19681753715a0b03ec7848a2-44900076',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_link_brand' => 0,
    'page_link' => 0,
    'brands' => 0,
    'brand' => 0,
    'link' => 0,
    'brandname' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0b03ec7984f6_84918197',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b03ec7984f6_84918197')) {function content_5a0b03ec7984f6_84918197($_smarty_tpl) {?>


<section class="brands">
<div class="container">
	<h1 class="h1 products-section-title text-uppercase ot-title">
		<?php if ($_smarty_tpl->tpl_vars['display_link_brand']->value) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_link']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Brands','mod'=>'ot_brandlogo'),$_smarty_tpl);?>
"><?php }?>
			<?php echo smartyTranslate(array('s'=>'Brands','mod'=>'ot_brandlogo'),$_smarty_tpl);?>

		<?php if ($_smarty_tpl->tpl_vars['display_link_brand']->value) {?></a><?php }?>
	</h1>
  
	<div class="products">
    	<?php if ($_smarty_tpl->tpl_vars['brands']->value) {?>

		 <ul id="otbrandlogo-carousel" class="product_list">
			<?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->_loop = true;
?>
				<li>
					<div class="brand-image">
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['brand']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['brand']->value['link_rewrite']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
						<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getManufacturerImageLink($_smarty_tpl->tpl_vars['brand']->value['id_manufacturer']), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
" />
					</a>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['brandname']->value) {?>
						<h1 class="h3 product-title" itemprop="name">
							<a class="product-name" itemprop="url"  href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['brand']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['brand']->value['link_rewrite']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
						</h1>
					<?php }?>
				</li>
			<?php } ?>
			</ul>
		<?php } else { ?>
			<p><?php echo smartyTranslate(array('s'=>'No brand','mod'=>'ot_brandlogo'),$_smarty_tpl);?>
</p>
		<?php }?>
	</div>
	</div>
</section>

<?php }} ?>
