<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:55:35
         compiled from "modules/otproductwishlist/views/templates/hook/my-account-footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12523479565a0b03e72da871-95620923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a1e2dcbf1a6585a673a48f398e54e2bf6853047' => 
    array (
      0 => 'modules/otproductwishlist/views/templates/hook/my-account-footer.tpl',
      1 => 1510671201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12523479565a0b03e72da871-95620923',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0b03e72df891_74843682',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b03e72df891_74843682')) {function content_5a0b03e72df891_74843682($_smarty_tpl) {?>

<li>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getModuleLink('otproductwishlist','mywishlist',array(),true),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'otproductwishlist'),$_smarty_tpl);?>
">
        <?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'otproductwishlist'),$_smarty_tpl);?>

    </a>
</li>
<?php }} ?>
