<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:55:35
         compiled from "module:ps_shoppingcart/ps_shoppingcart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9754916825a0b03e71bf296-73252694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35655e6409b6198f29dd6e732ef9598dec599880' => 
    array (
      0 => 'module:ps_shoppingcart/ps_shoppingcart.tpl',
      1 => 1510671201,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '9754916825a0b03e71bf296-73252694',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
    'refresh_url' => 0,
    'products' => 0,
    'value' => 0,
    'cart_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0b03e71dd064_54515667',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b03e71dd064_54515667')) {function content_5a0b03e71dd064_54515667($_smarty_tpl) {?>
<div id="_desktop_cart">
  <div class="blockcart cart-preview <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count']>0) {?>active<?php } else { ?>inactive<?php }?>" data-refresh-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refresh_url']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="header">
      <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count']>=0) {?>
        <a rel="nofollow">
      <?php }?>
        <i class="material-icons shopping-cart">shopping_cart</i>
        <span class="hidden-sm-down"><?php echo smartyTranslate(array('s'=>'Shopping Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</span>
        <span class="cart-products-count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
 <span class="desc">products</span></span>
      <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count']>=0) {?>
        </a>
      <?php }?>
    </div>
	<div class="cart_block block exclusive">
	<div class="block_content">
	<div class="cart_block_list">
			<?php if ($_smarty_tpl->tpl_vars['cart']->value['products']) {?>
			<?php  $_smarty_tpl->tpl_vars['products'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['products']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['products']->key => $_smarty_tpl->tpl_vars['products']->value) {
$_smarty_tpl->tpl_vars['products']->_loop = true;
?>
				<div class="products">
					<div class="img">
						
							<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['products']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
								<img
								src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['products']->value['cover']['bySize']['small_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
								alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['products']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
								data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['products']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
								/>
							</a>
						
					</div>
					<div class="cart-info">
						<h2 class="h2 productname" itemprop="name">
							<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['products']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['products']->value['name'],18,'...'), ENT_QUOTES, 'UTF-8');?>
</a>
						</h2>
						<div class="otPrice">
							<span class="quantity"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['products']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
X</span>
							<span class="price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['products']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
						</div>
						 <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
?>
						  <div class="product-line-info">
							<span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</span>
						  </div>
						<?php } ?>
					</div>
					<p class="remove_link">
						<a rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['products']->value['remove_from_cart_url'], ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons">&#xE5CD;</i></a>
					</p>	
				</div>
			<?php } ?>
			<div class="cart-prices">
				<span class="total pull-left">
					<?php echo smartyTranslate(array('s'=>'Total:','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>

				</span>
				<?php if ($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['amount']) {?>
					<span class="amount pull-right">
						<?php echo htmlspecialchars(Product::convertAndFormatPrice($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['amount']), ENT_QUOTES, 'UTF-8');?>

					</span>
				<?php } else { ?>
					<span class="amount pull-right">
						<?php echo htmlspecialchars(Product::convertAndFormatPrice(0.00), ENT_QUOTES, 'UTF-8');?>

					</span>
				<?php }?>
			</div>
			<div class="cart-buttons">
				 <a rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
" class="btn-primary">
					<?php echo smartyTranslate(array('s'=>'Check out','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
 <i class="ion-chevron-right"></i>
				</a>
			</div>
			<?php } else { ?>
				<p class="no-item">
					<?php echo smartyTranslate(array('s'=>'No products in the cart.','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>

				</p>
			<?php }?>
	</div>
	</div>
		</div>
  </div>
</div>
<?php }} ?>
