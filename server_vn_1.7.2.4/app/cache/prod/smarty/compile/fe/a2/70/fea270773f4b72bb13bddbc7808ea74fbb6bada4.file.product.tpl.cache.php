<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:55:40
         compiled from "/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/catalog/_partials/miniatures/product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8547681155a0b03ec660693-32445924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fea270773f4b72bb13bddbc7808ea74fbb6bada4' => 
    array (
      0 => '/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/catalog/_partials/miniatures/product.tpl',
      1 => 1510671201,
      2 => 'file',
    ),
    '5da2a12f1abc3b2929dfb8503cdc3a227f7b8f33' => 
    array (
      0 => '/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/catalog/_partials/customize/button-cart.tpl',
      1 => 1510671201,
      2 => 'file',
    ),
    '26f3d1bd00fafa54f405addb27dbdcc8cc76cad5' => 
    array (
      0 => '/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/catalog/_partials/variant-links.tpl',
      1 => 1510671201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8547681155a0b03ec660693-32445924',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'flag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0b03ec6ae0e2_84563951',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b03ec6ae0e2_84563951')) {function content_5a0b03ec6ae0e2_84563951($_smarty_tpl) {?>
 

<article class="product-miniature js-product-miniature col-sm-4" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
	<div class="thumbnail-container">
		<div class="otproduct-image">
			
			 <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
					<img
					  class="otproduct-img1"
					  src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
					  alt = "<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],30,'...'), ENT_QUOTES, 'UTF-8');?>
<?php }?>"
					  data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
					>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayOtproductImageHover",'id_product'=>$_smarty_tpl->tpl_vars['product']->value['id_product'],'home'=>'home_default','large'=>'large_default'),$_smarty_tpl);?>

			  </a>
			
			
				<ul class="product-flags">
					<?php  $_smarty_tpl->tpl_vars['flag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['flag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['flags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->key => $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->_loop = true;
?>
						<li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
					<?php } ?>
				</ul>
			
			
				
        			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

      			

			<div class="otproducthover">
			<div class="ot-button-container">
				<?php /*  Call merged included template "catalog/_partials/customize/button-cart.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/customize/button-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, '8547681155a0b03ec660693-32445924');
content_5a0b03ec678790_70178517($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/customize/button-cart.tpl" */?>
			</div>
			
			 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayOtWishListButton','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

			 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayOtCompareButton','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>


			
			<div class="quick-view-block">
				<a href="#" class="quick-view btn" data-link-action="quickview" title="<?php echo smartyTranslate(array('s'=>'Quick view'),$_smarty_tpl);?>
">
					<i class="material-icons search">&#xE8B6;</i> 
					<span><?php echo smartyTranslate(array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</span>
				</a>
			</div>
			
			</div>
			
		</div>
		
		<div class="otproduct-desc">
			<div class="product-description">
							 <h5 class="cat-name"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['category'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</h5>

				
					<span class="h3 product-title" itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],18,'...'), ENT_QUOTES, 'UTF-8');?>
</a></span>
				
				
					<div class="product-desc-short" itemprop="description"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['description_short'],90,'...');?>
</div>
				
		
				
					<?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
						<div class="product-price-and-shipping">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl);?>

							<span class="sr-only"><?php echo smartyTranslate(array('s'=>'Price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</span>
							<span itemprop="price" class="price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl);?>

							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl);?>

							<?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
							<?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type']==='percentage') {?>
									<span class="discount-percentage"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
								<?php }?>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl);?>

								<span class="sr-only"><?php echo smartyTranslate(array('s'=>'Regular price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</span>
								<span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
							<?php }?>
						</div>
					<?php }?>
				
			</div>
			<div class="highlighted-informations<?php if (!$_smarty_tpl->tpl_vars['product']->value['main_variants']) {?> no-variants<?php }?> hidden-sm-down">
				
					<?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
						<?php /*  Call merged included template "catalog/_partials/variant-links.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, '8547681155a0b03ec660693-32445924');
content_5a0b03ec6a2f09_64911099($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/variant-links.tpl" */?>
					<?php }?>
				
			</div>
			
		</div>

	</div>
</article>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:55:40
         compiled from "/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/catalog/_partials/customize/button-cart.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a0b03ec678790_70178517')) {function content_5a0b03ec678790_70178517($_smarty_tpl) {?>

<div class="product-add-to-cart">
	<?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
		<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" class="add-to-cart-or-refresh">
			<div class="product-quantity" style="display:none;">
				<input type="number" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" class="product_page_product_id">
				<input type="number" name="id_customization" value="0" class="product_customization_id">
				<input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
				<input type="number" name="qty" class="quantity_wanted input-group" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
" min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
"/>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['product']->value['quantity']>0&&$_smarty_tpl->tpl_vars['product']->value['quantity']>=$_smarty_tpl->tpl_vars['product']->value['minimal_quantity']) {?>
				<button class="button ajax_add_to_cart_button add-to-cart btn btn-default" data-button-action="add-to-cart" title="<?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
" <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>
              disabled
            <?php }?>>
					<span><?php echo smartyTranslate(array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</span>
				</button>
			<?php } else { ?>
				<button class="button ajax_add_to_cart_button add-to-cart-disable btn btn-default" title="<?php echo smartyTranslate(array('s'=>'Out of stock'),$_smarty_tpl);?>
">
				<span><?php echo smartyTranslate(array('s'=>'out of stock'),$_smarty_tpl);?>
</span>
			</button>
			<?php }?>
		</form>
	<?php }?>
</div>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:55:40
         compiled from "/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/catalog/_partials/variant-links.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a0b03ec6a2f09_64911099')) {function content_5a0b03ec6a2f09_64911099($_smarty_tpl) {?><div class="variant-links">
  <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
?>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
       class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['type'], ENT_QUOTES, 'UTF-8');?>
"
       title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
       
      <?php if ($_smarty_tpl->tpl_vars['variant']->value['html_color_code']) {?> style="background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['html_color_code'], ENT_QUOTES, 'UTF-8');?>
" <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['variant']->value['texture']) {?> style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['texture'], ENT_QUOTES, 'UTF-8');?>
)" <?php }?>
    ><span class="sr-only"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></a>
  <?php } ?>
  <span class="js-count count"></span>
</div>
<?php }} ?>
