<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:55:40
         compiled from "module:ot_specials/views/templates/hook/ot_specials.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5884412515a0b03ec649418-50810740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5dd10b94d5b20ac5951792312f1172e5f3128938' => 
    array (
      0 => 'module:ot_specials/views/templates/hook/ot_specials.tpl',
      1 => 1510671201,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '5884412515a0b03ec649418-50810740',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'ot_total' => 0,
    'product' => 0,
    'allSpecialProductsLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0b03ec65c381_20174590',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b03ec65c381_20174590')) {function content_5a0b03ec65c381_20174590($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["ot_cnt"] = new Smarty_variable("1", null, 0);?>
<?php $_smarty_tpl->tpl_vars["ot_total"] = new Smarty_variable("0", null, 0);?>
<?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
	<?php $_smarty_tpl->tpl_vars['ot_total'] = new Smarty_variable($_smarty_tpl->tpl_vars['ot_total']->value+1, null, 0);?>
<?php } ?>

<section class="otspecial-products clearfix">
<div class="container">
  <h3 class="ot-title"><?php echo smartyTranslate(array('s'=>'Special Product','mod'=>'ot_specials'),$_smarty_tpl);?>
</h3>
  <div class="otspecial-list">
  <div class="row">
  <div class="products">
    <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>	
      <?php echo $_smarty_tpl->getSubTemplate ("catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

    <?php } ?>
  </div>
  </div>
  </div>
  
    <?php if ($_smarty_tpl->tpl_vars['ot_total']->value>2) {?>
		<div class="customNavigation">
		<a class="btn prev otspecial_prev"><?php echo smartyTranslate(array('s'=>'Prev','mod'=>'ot_specials'),$_smarty_tpl);?>
</a>
		<a class="btn next otspecial_next"><?php echo smartyTranslate(array('s'=>'Next','mod'=>'ot_specials'),$_smarty_tpl);?>
</a>
		</div>
  <?php }?>

   <div class="allproduct"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allSpecialProductsLink']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'All sale products','mod'=>'ot_specials'),$_smarty_tpl);?>
</a></div>
</div>
</section>
<?php }} ?>
