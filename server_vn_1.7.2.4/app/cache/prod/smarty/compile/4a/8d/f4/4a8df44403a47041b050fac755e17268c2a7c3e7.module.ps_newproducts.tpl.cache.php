<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:58:08
         compiled from "module:ps_newproducts/views/templates/hook/ps_newproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15137272005a0b0480243cc6-84216505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a8df44403a47041b050fac755e17268c2a7c3e7' => 
    array (
      0 => 'module:ps_newproducts/views/templates/hook/ps_newproducts.tpl',
      1 => 1510671201,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '15137272005a0b0480243cc6-84216505',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
    'allNewProductsLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0b048024ad62_74840668',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b048024ad62_74840668')) {function content_5a0b048024ad62_74840668($_smarty_tpl) {?>

<section class="new-products clearfix mt-3">
  <h1 class="h1 ot-title products-section-title text-uppercase"><?php echo smartyTranslate(array('s'=>'New products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</h1>
  <div class="title clearfix hidden-md-up" data-target="#new-product" data-toggle="collapse">
    <span class="h3 text-uppercase"><?php echo smartyTranslate(array('s'=>'New products','d'=>'Modules.Newproducts.Shop'),$_smarty_tpl);?>
</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <div id="new-product" class="collapse toggle">
  <div class="products">
    <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
      <?php echo $_smarty_tpl->getSubTemplate ("catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

    <?php } ?>
  </div>
  <a class="all-product-link float-xs-left float-md-right h4" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allNewProductsLink']->value, ENT_QUOTES, 'UTF-8');?>
">
  <?php echo smartyTranslate(array('s'=>'All new products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
<i class="material-icons">&#xE315;</i>
  </a>
  </div>
</section>

<?php }} ?>
