<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:55:40
         compiled from "modules/otproductwishlist/views/templates/hook/otproductwishlist_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18181567985a0b03ec6db6c4-12668728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df3beaef60449543b73e5bf3b20a587f532f1a18' => 
    array (
      0 => 'modules/otproductwishlist/views/templates/hook/otproductwishlist_button.tpl',
      1 => 1510671201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18181567985a0b03ec6db6c4-12668728',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wishlists' => 0,
    'wishlist' => 0,
    'product' => 0,
    'id_product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0b03ec6f6c52_14149401',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b03ec6f6c52_14149401')) {function content_5a0b03ec6f6c52_14149401($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['wishlists']->value)&&count($_smarty_tpl->tpl_vars['wishlists']->value)>1) {?>
    <div class="wishlist">
        <?php  $_smarty_tpl->tpl_vars['wishlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wishlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wishlists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['wishlist']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['wishlist']->iteration=0;
 $_smarty_tpl->tpl_vars['wishlist']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['wishlist']->key => $_smarty_tpl->tpl_vars['wishlist']->value) {
$_smarty_tpl->tpl_vars['wishlist']->_loop = true;
 $_smarty_tpl->tpl_vars['wishlist']->iteration++;
 $_smarty_tpl->tpl_vars['wishlist']->index++;
 $_smarty_tpl->tpl_vars['wishlist']->first = $_smarty_tpl->tpl_vars['wishlist']->index === 0;
 $_smarty_tpl->tpl_vars['wishlist']->last = $_smarty_tpl->tpl_vars['wishlist']->iteration === $_smarty_tpl->tpl_vars['wishlist']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['wl']['first'] = $_smarty_tpl->tpl_vars['wishlist']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['wl']['last'] = $_smarty_tpl->tpl_vars['wishlist']->last;
?>
            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['wl']['first']) {?> 
                <a class="wishlist_button_list btn btn-primary" tabindex="0" data-toggle="popover" data-trigger="focus" title="<?php echo smartyTranslate(array('s'=>'Wishlist','mod'=>'otproductwishlist'),$_smarty_tpl);?>
" title="<?php echo smartyTranslate(array('s'=>'Add to wishlist','mod'=>'otproductwishlist'),$_smarty_tpl);?>
" data-placement="bottom"><span><?php echo smartyTranslate(array('s'=>'Add to wishlist','mod'=>'otproductwishlist'),$_smarty_tpl);?>
</span></a> 
                <div hidden class="popover-content">
                    <div class="cluetipblock">
            <?php }?>
                            <a title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['wishlist']->value['name'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"  data-dismiss="modal"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlist']->value['id_wishlist'], ENT_QUOTES, 'UTF-8');?>
" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
', 1, '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlist']->value['id_wishlist'], ENT_QUOTES, 'UTF-8');?>
');">
                                <span>
                                    <?php echo smartyTranslate(array('s'=>'Add to %s','sprintf'=>array($_smarty_tpl->tpl_vars['wishlist']->value['name']),'mod'=>'otproductwishlist'),$_smarty_tpl);?>

                                </span>
                            </a>
            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['wl']['last']) {?>
                    </div>
                </div>
            <?php }?>
        <?php }
if (!$_smarty_tpl->tpl_vars['wishlist']->_loop) {
?>
            <a href="#" id="wishlist_button_nopop"  data-dismiss="modal"  onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_product']->value), ENT_QUOTES, 'UTF-8');?>
', $('#idCombination').val(), document.getElementById('quantity_wanted').value); return false;" data-rel="nofollow"  title="<?php echo smartyTranslate(array('s'=>'Add to wishlist','mod'=>'otproductwishlist'),$_smarty_tpl);?>
" class="btn btn-primary">
                <span><?php echo smartyTranslate(array('s'=>'Add to wishlist','mod'=>'otproductwishlist'),$_smarty_tpl);?>
  </span>
            </a>
        <?php } ?>
    </div>
<?php } else { ?>
    <div class="wishlist">
        <a class="addToWishlist btn btn-primary wishlistProd_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
" href="#"  data-dismiss="modal" data-rel="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Add to wishlist','mod'=>'otproductwishlist'),$_smarty_tpl);?>
" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
', 1); return false;">
            <span><?php echo smartyTranslate(array('s'=>'Add to Wishlist','mod'=>'otproductwishlist'),$_smarty_tpl);?>
</span>
        </a>
    </div>
<?php }?><?php }} ?>
