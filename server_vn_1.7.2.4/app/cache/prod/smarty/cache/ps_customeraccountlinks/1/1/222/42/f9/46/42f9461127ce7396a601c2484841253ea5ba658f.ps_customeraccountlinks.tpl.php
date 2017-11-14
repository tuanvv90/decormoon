<?php /*%%SmartyHeaderCode:6745498895a0b03e72cf901-81548949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinks/ps_customeraccountlinks.tpl',
      1 => 1510671201,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '6745498895a0b03e72cf901-81548949',
  'variables' => 
  array (
    'urls' => 0,
    'my_account_urls' => 0,
    'my_account_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0b03e72e1ef6_99312965',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b03e72e1ef6_99312965')) {function content_5a0b03e72e1ef6_99312965($_smarty_tpl) {?>
<div id="block_myaccount_infos" class="col-md-3 links">
  <h3 class="myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://decormoon.com/index.php?controller=my-account" rel="nofollow">
      Tài khoản của bạn
    </a>
  </h3>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Tài khoản của bạn</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li>
          <a href="http://decormoon.com/index.php?controller=order-slip" title="Biên lai Ghi có" rel="nofollow">
            Biên lai Ghi có
          </a>
        </li>
            <li>
          <a href="http://decormoon.com/index.php?controller=identity" title="Thông tin cá nhân" rel="nofollow">
            Thông tin cá nhân
          </a>
        </li>
            <li>
          <a href="http://decormoon.com/index.php?controller=history" title="Đơn hàng" rel="nofollow">
            Đơn hàng
          </a>
        </li>
            <li>
          <a href="http://decormoon.com/index.php?controller=addresses" title="Địa chỉ" rel="nofollow">
            Địa chỉ
          </a>
        </li>
        
<li>
    <a href="http://decormoon.com/index.php?fc=module&amp;module=otproductwishlist&amp;controller=mywishlist" title="My wishlists">
        My wishlists
    </a>
</li>

	</ul>
</div>
<?php }} ?>
