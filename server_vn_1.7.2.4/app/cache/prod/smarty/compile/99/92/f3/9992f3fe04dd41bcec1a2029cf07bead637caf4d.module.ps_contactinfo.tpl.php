<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:55:35
         compiled from "module:ps_contactinfo/ps_contactinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3847665905a0b03e7275382-38032158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9992f3fe04dd41bcec1a2029cf07bead637caf4d' => 
    array (
      0 => 'module:ps_contactinfo/ps_contactinfo.tpl',
      1 => 1510671201,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '3847665905a0b03e7275382-38032158',
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
  'unifunc' => 'content_5a0b03e7286316_30675832',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b03e7286316_30675832')) {function content_5a0b03e7286316_30675832($_smarty_tpl) {?>

<div class="block-contact contact-rich col-md-3 links">
<h4 class="hidden-sm-down"><?php echo smartyTranslate(array('s'=>'Store information','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</h4>
	<div  class="title clearfix hidden-md-up" data-toggle="collapse" data-target="#contact-footer">
  	<span class="h3 block-contact-title"><?php echo smartyTranslate(array('s'=>'Store information','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</span>
	 <span class="float-xs-right">
          <span class="navbar-toggler collapse-icons">
            <i class="material-icons add">&#xE313;</i>
            <i class="material-icons remove">&#xE316;</i>
          </span>
	</span>
  </div>
    <ul id="contact-footer" class="collapse">
	  <li class="block">
		<div class="icon"><i class="material-icons">&#xE55F;</i></div>
		  <div class="data"><?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['formatted'];?>
</div>
		  </li>
	  <li class="block">
<div class="data">
      <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
	  	        <div class="icon"><i class="material-icons">&#xE0CD;</i></div>
        
        <span class="title"><?php echo smartyTranslate(array('s'=>'Call us:</span> [1]%phone%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

      <?php }?>
	  </div>
	  </li>
	  	  <li class="block">
				<div class="data">
      <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']) {?>
		<div class="icon"><i class="material-icons">&#xE0DF;</i></div>
        
        <span class="title"><?php echo smartyTranslate(array('s'=>'Fax:</span> [1]%fax%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%fax%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['fax']),'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

      <?php }?>
	  </div>
	  </li>
	  <li class="block">
			  				<div class="data">
      <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email']) {?>
	  		        <div class="icon"><i class="material-icons">&#xE158;</i></div>
        
       <span class="title"><?php echo smartyTranslate(array('s'=>'Email us:</span> [1]%email%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%email%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['email']),'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

      <?php }?>
	  </div>
	  </li>
	  </ul>
<!--  <div class="hidden-md-up">
    <div class="title">
      <a class="h3" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['stores'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Store information','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a>
    </div>
  </div>
-->  
</div>
<?php }} ?>
