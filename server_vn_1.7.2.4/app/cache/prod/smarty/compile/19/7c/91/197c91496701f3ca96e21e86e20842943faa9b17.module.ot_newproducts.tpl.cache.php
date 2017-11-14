<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:55:40
         compiled from "module:ot_newproducts/views/templates/hook/ot_newproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12560487435a0b03ecce12e8-84719708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '197c91496701f3ca96e21e86e20842943faa9b17' => 
    array (
      0 => 'module:ot_newproducts/views/templates/hook/ot_newproducts.tpl',
      1 => 1510671201,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '12560487435a0b03ecce12e8-84719708',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'ot_total' => 0,
    'ot_cnt' => 0,
    'product' => 0,
    'allNewProductsLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0b03eccf82b1_93772778',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b03eccf82b1_93772778')) {function content_5a0b03eccf82b1_93772778($_smarty_tpl) {?>


<?php $_smarty_tpl->tpl_vars["ot_cnt"] = new Smarty_variable("1", null, 0);?>
<?php $_smarty_tpl->tpl_vars["ot_total"] = new Smarty_variable("0", null, 0);?>
<?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
	<?php $_smarty_tpl->tpl_vars['ot_total'] = new Smarty_variable($_smarty_tpl->tpl_vars['ot_total']->value+1, null, 0);?>
<?php } ?>

<section class="otnew-products clearfix">
  <h3 class="tab-title"><?php echo smartyTranslate(array('s'=>'New products','mod'=>'ot_newproducts'),$_smarty_tpl);?>
</h3>
  <div class="otnew-content products row">
    <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
		  <?php if ($_smarty_tpl->tpl_vars['ot_total']->value>8) {?>
				<!-- Start OnTheme 2 product slide code -->
				<?php if ($_smarty_tpl->tpl_vars['ot_cnt']->value%2!=0) {?>
				<ul>
					<li class="newli">
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
	<a class="btn prev otnew_prev"><?php echo smartyTranslate(array('s'=>'Prev','mod'=>'ot_newproducts'),$_smarty_tpl);?>
</a>
	<a class="btn next otnew_next"><?php echo smartyTranslate(array('s'=>'Next','mod'=>'ot_newproducts'),$_smarty_tpl);?>
</a>
	</div>
 <?php }?>

  <div class="allproduct"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allNewProductsLink']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'All new products','mod'=>'ot_newproducts'),$_smarty_tpl);?>
</a></div>
</section>

<?php }} ?>
