<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:55:35
         compiled from "module:ps_customersignin/ps_customersignin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4976109765a0b03e719e994-87276718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:ps_customersignin/ps_customersignin.tpl',
      1 => 1510671201,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '4976109765a0b03e719e994-87276718',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged' => 0,
    'logout_url' => 0,
    'my_account_url' => 0,
    'customerName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0b03e71a74b2_99800669',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b03e71a74b2_99800669')) {function content_5a0b03e71a74b2_99800669($_smarty_tpl) {?>
<div id="_desktop_user_info">
<div class="otuserheading"></div>	
  <ul class="user-info">
    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
      <li><a
        class="logout hidden-sm-down"
        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
"
        rel="nofollow"
      >
        <i class="material-icons user">&#xE7FF;</i>
        <span class="hidden-sm-down"><?php echo smartyTranslate(array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</span>
      </a></li>
      <li><a
        class="account"
        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
        title="<?php echo smartyTranslate(array('s'=>'View my customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>
"
        rel="nofollow"
      >
        <i class="material-icons hidden-md-up logged">&#xE7FF;</i>
        <span class="hidden-sm-down"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>
</span>
      </a></li>
    <?php } else { ?>
      <li><a
        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
        title="<?php echo smartyTranslate(array('s'=>'Log in to your customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>
"
        rel="nofollow"
      >
        <i class="material-icons user">&#xE7FF;</i>
        <span class="hidden-sm-down"><?php echo smartyTranslate(array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</span>
      </a></li>
    <?php }?>
	
	  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayOtCompareHeader'),$_smarty_tpl);?>

      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayOtWishlistHeader'),$_smarty_tpl);?>

  </ul>
</div>
<?php }} ?>
