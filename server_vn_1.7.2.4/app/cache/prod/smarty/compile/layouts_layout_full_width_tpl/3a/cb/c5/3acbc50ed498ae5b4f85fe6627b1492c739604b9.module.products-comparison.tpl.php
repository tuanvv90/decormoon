<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:58:53
         compiled from "module:otcompare/views/templates/hook/products-comparison.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5600340915a0b04ad3d1941-11032488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3acbc50ed498ae5b4f85fe6627b1492c739604b9' => 
    array (
      0 => 'module:otcompare/views/templates/hook/products-comparison.tpl',
      1 => 1510671201,
      2 => 'module',
    ),
    'fedb6d2b15ed7aa5503b799d887a26cdab0ad297' => 
    array (
      0 => '/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/layouts/layout-full-width.tpl',
      1 => 1510671201,
      2 => 'file',
    ),
    '2c3b8e7169f472d50b8fe69cf6d74b7bb6d4e36d' => 
    array (
      0 => '/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/layouts/layout-both-columns.tpl',
      1 => 1510671201,
      2 => 'file',
    ),
    '8414202f344b7f6d41b9508fa11a12d34cde2b26' => 
    array (
      0 => '/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/_partials/stylesheets.tpl',
      1 => 1510671201,
      2 => 'file',
    ),
    '1ad14992bba9aa3d44140a9cd9870defb474c974' => 
    array (
      0 => '/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/_partials/javascript.tpl',
      1 => 1510671201,
      2 => 'file',
    ),
    '0d86dc4765ed2b7e63d715c15378a0d5ad2c1289' => 
    array (
      0 => '/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/_partials/head.tpl',
      1 => 1510671201,
      2 => 'file',
    ),
    '0a9c568e60f256940ad7dbf1453ba8e241d15d6f' => 
    array (
      0 => '/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/catalog/_partials/product-activation.tpl',
      1 => 1510671201,
      2 => 'file',
    ),
    'e16719bce10477d9912b7da89f6683bf763ffe1f' => 
    array (
      0 => '/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/_partials/header.tpl',
      1 => 1510671201,
      2 => 'file',
    ),
    '25361527d9c49340e7908da091e1f5ffc84e62e5' => 
    array (
      0 => '/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/_partials/notifications.tpl',
      1 => 1510671201,
      2 => 'file',
    ),
    'e513c0526c0ec08cf58f7e5a660f026c7b892824' => 
    array (
      0 => '/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/_partials/breadcrumb.tpl',
      1 => 1510671201,
      2 => 'file',
    ),
    '26f3d1bd00fafa54f405addb27dbdcc8cc76cad5' => 
    array (
      0 => '/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/catalog/_partials/variant-links.tpl',
      1 => 1510671201,
      2 => 'file',
    ),
    '5da2a12f1abc3b2929dfb8503cdc3a227f7b8f33' => 
    array (
      0 => '/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/catalog/_partials/customize/button-cart.tpl',
      1 => 1510671201,
      2 => 'file',
    ),
    '9d181ed6a96785b735ff2425bb670824771dcb0e' => 
    array (
      0 => '/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/_partials/footer.tpl',
      1 => 1510671201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5600340915a0b04ad3d1941-11032488',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout' => 0,
    'language' => 0,
    'page' => 0,
    'javascript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0b04ad54a639_80867920',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b04ad54a639_80867920')) {function content_5a0b04ad54a639_80867920($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/vendor/prestashop/smarty/plugins/function.cycle.php';
?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

  <head>
    
      <?php /*  Call merged included template "_partials/head.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '5600340915a0b04ad3d1941-11032488');
content_5a0b04ad40a782_18844596($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/head.tpl" */?>
    
  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['classnames'][0][0]->smartyClassnames($_smarty_tpl->tpl_vars['page']->value['body_classes']), ENT_QUOTES, 'UTF-8');?>
">

    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl);?>

    

    <main>
      
        <?php /*  Call merged included template "catalog/_partials/product-activation.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '5600340915a0b04ad3d1941-11032488');
content_5a0b04ad442e90_82605086($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/product-activation.tpl" */?>
      
      <header id="header">
        
          <?php /*  Call merged included template "_partials/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '5600340915a0b04ad3d1941-11032488');
content_5a0b04ad4493a2_94973814($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/header.tpl" */?>
        
      </header>
      
        <?php /*  Call merged included template "_partials/notifications.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '5600340915a0b04ad3d1941-11032488');
content_5a0b04ad456676_36538422($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/notifications.tpl" */?>
      
	  
      <section id="wrapper">
	  
            <?php /*  Call merged included template "_partials/breadcrumb.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '5600340915a0b04ad3d1941-11032488');
content_5a0b04ad46c697_59103000($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/breadcrumb.tpl" */?>
          
		  
          <div class="<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']=='index') {?>full-container<?php } else { ?>container<?php }?>">

          

          
  <div id="content-wrapper">
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayContentWrapperTop"),$_smarty_tpl);?>

    
	<section id="main">
		<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Product Comparison','mod'=>'otcompare'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<h1 class="h1 ot-innerpagetitle"><?php echo smartyTranslate(array('s'=>'Product Comparison','mod'=>'otcompare'),$_smarty_tpl);?>
</h1>
		<?php if ($_smarty_tpl->tpl_vars['hasProduct']->value) {?>
			<div class="products_block table-responsive">
				<table id="product_comparison" class="table table-bordered">
					<tr>
						<td class="ot_empty compare_extra_information">
							<span><?php echo smartyTranslate(array('s'=>'Features','mod'=>'otcompare'),$_smarty_tpl);?>
</span>
						</td>
						<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
							<?php $_smarty_tpl->tpl_vars['replace_id'] = new Smarty_variable(($_smarty_tpl->tpl_vars['product']->value['id']).('|'), null, 0);?>
							<td class="product-miniature js-product-miniature  product-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
 product-block" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
								<div class="remove">
									<a class="cmp_remove" href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getPageLink('products-comparison',true),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Remove','mod'=>'otcompare'),$_smarty_tpl);?>
" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
">
										<i class="material-icons fa-trash">&#xE872;</i>
									</a>
								</div>
								<div class="thumbnail-container">
									
										<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
											<img src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" />
										</a>
									
								</div>
								<div class="product-description">
									
										<h1 class="h3 product-title" itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></h1>
									

									
										<?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
											<div class="product-price-and-shipping">
												<span itemprop="price" class="price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>

												<?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
												<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl);?>

												<?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type']==='percentage') {?>
													<span class="discount-percentage"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
												<?php }?>
												<span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
												
												<?php }?>

												<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl);?>



												<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl);?>


												<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl);?>

											</div>
										<?php }?>
									

									
										<p class="product-desc" itemprop="description">
											<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['product']->value['description_short']),70,'...'), ENT_QUOTES, 'UTF-8');?>

										</p>
									

									<div class="highlighted-informations<?php if (!$_smarty_tpl->tpl_vars['product']->value['main_variants']) {?> no-variants<?php }?>">
										
											<?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
												<?php /*  Call merged included template "catalog/_partials/variant-links.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, '5600340915a0b04ad3d1941-11032488');
content_5a0b04ad4b0306_39703548($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/variant-links.tpl" */?>
											<?php }?>
										
									</div>
									<div class="ot-button-container">
										<?php /*  Call merged included template "catalog/_partials/customize/button-cart.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/customize/button-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, '5600340915a0b04ad3d1941-11032488');
content_5a0b04ad4bc2a2_54296162($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/customize/button-cart.tpl" */?>
									</div>
								</div>
							</td>
						<?php } ?>
					</tr>
					<?php if ($_smarty_tpl->tpl_vars['ordered_features']->value) {?>
						<?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ordered_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
						<tr>
							<?php echo smarty_function_cycle(array('values'=>'comparison_feature_odd,comparison_feature_even','assign'=>'classname'),$_smarty_tpl);?>

							<td class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['classname']->value, ENT_QUOTES, 'UTF-8');?>
 feature-name" >
								<strong><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['feature']->value['name'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</strong>
							</td>
							<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
								<?php $_smarty_tpl->tpl_vars['product_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['id'], null, 0);?>
								<?php $_smarty_tpl->tpl_vars['feature_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['feature']->value['id_feature'], null, 0);?>
								<?php if (isset($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['product_id']->value])) {?>
									<?php $_smarty_tpl->tpl_vars['tab'] = new Smarty_variable($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['product_id']->value], null, 0);?>
									<td class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['classname']->value, ENT_QUOTES, 'UTF-8');?>
 comparison_infos product-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><?php if ((isset($_smarty_tpl->tpl_vars['tab']->value[$_smarty_tpl->tpl_vars['feature_id']->value]))) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['tab']->value[$_smarty_tpl->tpl_vars['feature_id']->value],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?></td>
								<?php } else { ?>
									<td class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['classname']->value, ENT_QUOTES, 'UTF-8');?>
 comparison_infos product-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
"></td>
								<?php }?>
							<?php } ?>
						</tr>
						<?php } ?>
					<?php } else { ?>
						<tr>
							<td></td>
							<td colspan="<?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['products']->value), ENT_QUOTES, 'UTF-8');?>
" class="text-center"><?php echo smartyTranslate(array('s'=>'No features to compare','mod'=>'otcompare'),$_smarty_tpl);?>
</td>
						</tr>
					<?php }?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayOtProductCommentCompare','list_product'=>$_smarty_tpl->tpl_vars['list_product']->value),$_smarty_tpl);?>

				</table>
			</div> <!-- end products_block -->
		<?php } else { ?>
			<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'There are no products selected for comparison.','mod'=>'otcompare'),$_smarty_tpl);?>
</p>
		<?php }?>
		<ul class="footer_link">
			<li>
				<a class="btn btn-primary" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
					<span><?php echo smartyTranslate(array('s'=>'Continue Shopping','mod'=>'otcompare'),$_smarty_tpl);?>
</span>
				</a>
			</li>
		</ul>
	</section>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayContentWrapperBottom"),$_smarty_tpl);?>

  </div>


          
		</div>
      </section>

      <footer id="footer">
        
          <?php /*  Call merged included template "_partials/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '5600340915a0b04ad3d1941-11032488');
content_5a0b04ad53c977_71515952($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/footer.tpl" */?>
        
      </footer>
    </main>

    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl);?>

    

    
      <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, '5600340915a0b04ad3d1941-11032488');
content_5a0b04ad42ba14_01908080($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>
    

  </body>

</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:58:53
         compiled from "/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/_partials/head.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a0b04ad40a782_18844596')) {function content_5a0b04ad40a782_18844596($_smarty_tpl) {?>

  <meta charset="utf-8">


  <meta http-equiv="x-ua-compatible" content="ie=edge">



  <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
</title>
  <meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
  <meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');?>
">
  <?php if ($_smarty_tpl->tpl_vars['page']->value['meta']['robots']!=='index') {?>
    <meta name="robots" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['robots'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>



  <meta name="viewport" content="width=device-width, initial-scale=1">


<!-- Ontheme theme google font-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 
	
	<script type = "text/javascript" src = "//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js" ></script>
<!-- Ontheme theme google font-->




  <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">



  <?php /*  Call merged included template "_partials/stylesheets.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, '5600340915a0b04ad3d1941-11032488');
content_5a0b04ad420697_48660145($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/stylesheets.tpl" */?>



  <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, '5600340915a0b04ad3d1941-11032488');
content_5a0b04ad42ba14_01908080($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>



  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>




<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:58:53
         compiled from "/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/_partials/stylesheets.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a0b04ad420697_48660145')) {function content_5a0b04ad420697_48660145($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['media'], ENT_QUOTES, 'UTF-8');?>
">
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <style>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['content'], ENT_QUOTES, 'UTF-8');?>

  </style>
<?php } ?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:58:53
         compiled from "/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/_partials/javascript.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a0b04ad42ba14_01908080')) {function content_5a0b04ad42ba14_01908080($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['attribute'], ENT_QUOTES, 'UTF-8');?>
></script>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript">
    <?php echo $_smarty_tpl->tpl_vars['js']->value['content'];?>

  </script>
<?php } ?>

<?php if (isset($_smarty_tpl->tpl_vars['vars']->value)&&count($_smarty_tpl->tpl_vars['vars']->value)) {?>
  <script type="text/javascript">
    <?php  $_smarty_tpl->tpl_vars['var_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var_value']->_loop = false;
 $_smarty_tpl->tpl_vars['var_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['var_value']->key => $_smarty_tpl->tpl_vars['var_value']->value) {
$_smarty_tpl->tpl_vars['var_value']->_loop = true;
 $_smarty_tpl->tpl_vars['var_name']->value = $_smarty_tpl->tpl_vars['var_value']->key;
?>
    var <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
 = <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['var_value']->value);?>
;
    <?php } ?>
  </script>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:58:53
         compiled from "/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/catalog/_partials/product-activation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a0b04ad442e90_82605086')) {function content_5a0b04ad442e90_82605086($_smarty_tpl) {?>   
<?php if ($_smarty_tpl->tpl_vars['page']->value['admin_notifications']) {?>
  <div class="alert alert-warning row" role="alert">
    <div class="container">
      <div class="row">
        <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['admin_notifications']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
          <div class="col-sm-12">
            <i class="material-icons float-xs-left">&#xE001;</i>
            <p class="alert-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value['message'], ENT_QUOTES, 'UTF-8');?>
</p>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:58:53
         compiled from "/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/_partials/header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a0b04ad4493a2_94973814')) {function content_5a0b04ad4493a2_94973814($_smarty_tpl) {?>

  <div class="header-banner">
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBanner'),$_smarty_tpl);?>

  </div>

<div class="main-header">

  <nav class="header-nav">
          <div class="hidden-sm-down top-nav">
            <div class="col-md-4 col-xs-12 left-nav">
			<div class="container">
              <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNav1'),$_smarty_tpl);?>

            </div>
			</div>
            <div class="col-md-8 right-nav">
			<div class="container">
				<div class="col-md-2 hidden-sm-down" id="_desktop_logo">
				  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
					<img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
				  </a>
				</div>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNav2'),$_smarty_tpl);?>

				</div>
            </div>
          </div>
		  
          <div class="hidden-md-up text-sm-center mobile">
		  <div class="container">
		  <div class="row">
		  <div class="top-logo" id="_mobile_logo"></div>
		  <div class="fullmenu">
            <div class="float-xs-left" id="menu-icon">
              <i class="material-icons">&#xE5D2;</i>
            </div>
            <div class="float-xs-right" id="_mobile_cart"></div>
            <div class="float-xs-right" id="_mobile_user_info"></div>
			</div>
			</div>
			</div>
            <div class="clearfix"></div>
          </div>
  </nav>



  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNavFullWidth'),$_smarty_tpl);?>



<div class="position-static top-menu">
<div class="container">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayTop'),$_smarty_tpl);?>

		<div class="clearfix"></div>
	<div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
        <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
        <div class="js-top-menu-bottom">
          <div id="_mobile_currency_selector"></div>
          <div id="_mobile_language_selector"></div>
          <div id="_mobile_contact_link"></div>
        </div>
      </div>
</div>
</div>

</div>

<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']=='index') {?>
	
		<div id="top_column">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayTopColumn'),$_smarty_tpl);?>

		 </div>
	
<?php }?><?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:58:53
         compiled from "/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/_partials/notifications.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a0b04ad456676_36538422')) {function content_5a0b04ad456676_36538422($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['notifications']->value)) {?>
<aside id="notifications">
  <div class="container">
    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
      
        <article class="alert alert-danger" role="alert" data-alert="danger">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['error']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
      
        <article class="alert alert-warning" role="alert" data-alert="warning">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['warning']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
      
        <article class="alert alert-success" role="alert" data-alert="success">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['success']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
      
        <article class="alert alert-info" role="alert" data-alert="info">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>
  </div>
</aside>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:58:53
         compiled from "/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/_partials/breadcrumb.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a0b04ad46c697_59103000')) {function content_5a0b04ad46c697_59103000($_smarty_tpl) {?>
<div class="otbreadcrumb">
   <div class="container">
   	<nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb hidden-sm-down">
 	 <ol itemscope itemtype="http://schema.org/BreadcrumbList">
    <?php  $_smarty_tpl->tpl_vars['path'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['path']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumb']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['path']->key => $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']++;
?>
      
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
            <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
          </a>
          <meta itemprop="position" content="<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['breadcrumb']['iteration'], ENT_QUOTES, 'UTF-8');?>
">
        </li>
      
    <?php } ?>
  </ol>
</nav>
</div>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:58:53
         compiled from "/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/catalog/_partials/variant-links.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a0b04ad4b0306_39703548')) {function content_5a0b04ad4b0306_39703548($_smarty_tpl) {?><div class="variant-links">
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
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:58:53
         compiled from "/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/catalog/_partials/customize/button-cart.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a0b04ad4bc2a2_54296162')) {function content_5a0b04ad4bc2a2_54296162($_smarty_tpl) {?>

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
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:58:53
         compiled from "/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/_partials/footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a0b04ad53c977_71515952')) {function content_5a0b04ad53c977_71515952($_smarty_tpl) {?>
 <div class="footer-top">
<div class="container">
  <div class="row">
    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterBefore'),$_smarty_tpl);?>

    
  </div>
</div>
</div>
<div class="footer-container">
  <div class="container">
    <div class="row">
      
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooter'),$_smarty_tpl);?>

      
    </div>
    <div class="row">
      
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterAfter'),$_smarty_tpl);?>

      
    </div>
</div>
</div>
<div class="bottom-footer">
	<div class="container">    
	 <div class="row">
      <div class="col-md-6 col-sm-6">
        <p>
          
            <a class="_blank" href="http://www.prestashop.com" target="_blank">
              <?php echo smartyTranslate(array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme'),$_smarty_tpl);?>

            </a>
          
        </p>
      </div>
    </div>
  </div>
</div>
<a href="#" id="goToTop" title="Back to top"> <i class="material-icons arrow-up">&#xE316;</i></a>
<?php }} ?>
