<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:55:40
         compiled from "modules/ot_featuredproducts/views/templates/hook/ot_featuredproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:965275635a0b03eca890a8-02982364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '002ffbd1677f83b0420d42fb5d52dbdcb7ee7ee6' => 
    array (
      0 => 'modules/ot_featuredproducts/views/templates/hook/ot_featuredproducts.tpl',
      1 => 1510671201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '965275635a0b03eca890a8-02982364',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'ot_total' => 0,
    'ot_cnt' => 0,
    'product' => 0,
    'allProductsLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0b03ecaa0d51_94560117',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b03ecaa0d51_94560117')) {function content_5a0b03ecaa0d51_94560117($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["ot_cnt"] = new Smarty_variable("1", null, 0);?>
<?php $_smarty_tpl->tpl_vars["ot_total"] = new Smarty_variable("0", null, 0);?>
<?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
	<?php $_smarty_tpl->tpl_vars['ot_total'] = new Smarty_variable($_smarty_tpl->tpl_vars['ot_total']->value+1, null, 0);?>
<?php } ?>

<section class="otfeatured-products clearfix">
    <h3 class="tab-title"><?php echo smartyTranslate(array('s'=>'Featured Products','mod'=>'ot_featuredproducts'),$_smarty_tpl);?>
</h3>
    <div class="otfeatured-content products">
        <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['ot_total']->value>8) {?>
				<!-- Start OnTheme 2 product slide code -->
				<?php if ($_smarty_tpl->tpl_vars['ot_cnt']->value%2!=0) {?>
				<ul>
					<li class="featureli">
						<ul>
						<li>
				<?php }?>
			<?php }?>
				<!-- End OnTheme 2 product slide code -->

				<?php echo $_smarty_tpl->getSubTemplate ("catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>


				<!-- Start OnTheme 2 product slide code -->
			<?php if ($_smarty_tpl->tpl_vars['ot_total']->value>8) {?>
				<?php if ($_smarty_tpl->tpl_vars['ot_cnt']->value%2==0) {?>
						</li>
						</ul>
					</li>
					</ul>
				<?php }?>
				<?php }?>

				<?php $_smarty_tpl->tpl_vars['ot_cnt'] = new Smarty_variable($_smarty_tpl->tpl_vars['ot_cnt']->value+1, null, 0);?>
				<!-- End OnTheme 2 product slide code -->
        <?php } ?>
		<?php if ($_smarty_tpl->tpl_vars['ot_total']->value>8) {?>
			<?php if ($_smarty_tpl->tpl_vars['ot_cnt']->value%2==0) {?>
					</li>
					</ul>
				</li>
				</ul>
			<?php }?>
		<?php }?>
    </div>
	
	 	<?php if ($_smarty_tpl->tpl_vars['ot_total']->value>4) {?>
			<div class="customNavigation">
			<a class="btn prev otfeature_prev"><?php echo smartyTranslate(array('s'=>'Prev','mod'=>'ot_featuredproducts'),$_smarty_tpl);?>
</a>
			<a class="btn next otfeature_next"><?php echo smartyTranslate(array('s'=>'Next','mod'=>'ot_featuredproducts'),$_smarty_tpl);?>
</a>
			</div>
		<?php }?>
		
    <div class="allproduct"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allProductsLink']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'All products','mod'=>'ot_featuredproducts'),$_smarty_tpl);?>
</a></div>
</section>

<?php }} ?>
