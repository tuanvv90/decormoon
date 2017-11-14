<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:54:05
         compiled from "/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/modules/welcome/views/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3837034615a0b038d35eea9-66871722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a44419c24fc401169d09b80290cc078ef057105' => 
    array (
      0 => '/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/modules/welcome/views/navbar.tpl',
      1 => 1510670202,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3837034615a0b038d35eea9-66871722',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'percent_rounded' => 0,
    'percent_real' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0b038d362f96_49124131',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b038d362f96_49124131')) {function content_5a0b038d362f96_49124131($_smarty_tpl) {?>

<div class="onboarding-navbar">
  <div class="row text">
    <div class="col-md-8">
      <?php echo smartyTranslate(array('s'=>'Launch your shop!','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>

    </div>
    <div class="col-md-4 text-right text-md-right"><?php echo $_smarty_tpl->tpl_vars['percent_rounded']->value;?>
%</div>
  </div>
  <div class="progress">
    <div class="bar" role="progressbar" style="width:<?php echo $_smarty_tpl->tpl_vars['percent_real']->value;?>
%;"></div>
  </div>
  <div>
    <button class="btn btn-main btn-sm onboarding-button-resume"><?php echo smartyTranslate(array('s'=>'Resume','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
  </div>
  <div>
    <a class="btn -small btn-main btn-sm onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Stop the OnBoarding','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</a>
  </div>
</div>
<?php }} ?>
