<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:55:35
         compiled from "modules/otproductwishlist/views/templates/hook/otproductwishlist_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4611399655a0b03e71b48e8-50533024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a17282db5a002665d8ba40ffd44018f194099c85' => 
    array (
      0 => 'modules/otproductwishlist/views/templates/hook/otproductwishlist_top.tpl',
      1 => 1510671201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4611399655a0b03e71b48e8-50533024',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'count_product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0b03e71b9ea6_89834843',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b03e71b9ea6_89834843')) {function content_5a0b03e71b9ea6_89834843($_smarty_tpl) {?>

<li>
    <a class="wishtlist_top" href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getModuleLink('otproductwishlist','mywishlist',array(),true),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Wishlists','mod'=>'otproductwishlist'),$_smarty_tpl);?>
" rel="nofollow">
        <span><?php echo smartyTranslate(array('s'=>'Wishlists','mod'=>'otproductwishlist'),$_smarty_tpl);?>
 (<span class="cart-wishlist-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['count_product']->value, ENT_QUOTES, 'UTF-8');?>
</span>)</span>
    </a>
</li>
<?php }} ?>
