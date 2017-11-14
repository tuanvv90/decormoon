<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:55:35
         compiled from "module:ps_contactinfo/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16021621845a0b03e71e2199-18256245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0eb2119957cbc13b240126b3ccd8fac8f109f1e2' => 
    array (
      0 => 'module:ps_contactinfo/nav.tpl',
      1 => 1510671201,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '16021621845a0b03e71e2199-18256245',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contact_infos' => 0,
    'urls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0b03e71ec922_79841209',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b03e71ec922_79841209')) {function content_5a0b03e71ec922_79841209($_smarty_tpl) {?>
<div id="_desktop_contact_link">
  <div id="contact-link">
  <ul>
    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
<li>
 <i class="material-icons">&#xE0B0;</i>
      
       <span class="otcontact"> <?php echo smartyTranslate(array('s'=>'Call us:</span> [1]%phone%[/1]','sprintf'=>array('[1]'=>'<span class="contact-no">','[/1]'=>'</span>','%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

  </li>
    <?php } else { ?>
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['contact'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Contact us','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a>
    <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email']) {?>
        <li class="email">
        <i class="material-icons">&#xE0BE;</i>
        
        <?php echo smartyTranslate(array('s'=>'[1]%email%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%email%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['email']),'d'=>'Shop.Theme'),$_smarty_tpl);?>

        </li>
      <?php }?>
</ul>
  </div>
</div><?php }} ?>
