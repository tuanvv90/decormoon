<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:55:35
         compiled from "module:ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20149713695a0b03e7254221-58401847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl',
      1 => 1510671201,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '20149713695a0b03e7254221-58401847',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conditions' => 0,
    'urls' => 0,
    'value' => 0,
    'msg' => 0,
    'nw_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0b03e7260376_45353999',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b03e7260376_45353999')) {function content_5a0b03e7260376_45353999($_smarty_tpl) {?>
<div class="block_newsletter links col-lg-7 col-md-7 col-sm-7">
  <div class="ot-content col-sm-4">
    	<h1 class="ot-title"><?php echo smartyTranslate(array('s'=>'newsletter'),$_smarty_tpl);?>
</h1>
		<div class="col-xs-12 ot-newdesc">
              <?php if ($_smarty_tpl->tpl_vars['conditions']->value) {?>
				<p id="block-newsletter-label" class="newsletter-desc"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['conditions']->value, ENT_QUOTES, 'UTF-8');?>
</p>
              <?php }?>
          </div>
	</div>	
	<div  class="title clearfix hidden-md-up" data-toggle="collapse" data-target="#otnewsletter">
  	<span class="h3"><?php echo smartyTranslate(array('s'=>'Newsletter'),$_smarty_tpl);?>
</span>
	 <span class="float-xs-right">
          <span class="navbar-toggler collapse-icons">
            <i class="material-icons add">&#xE313;</i>
            <i class="material-icons remove">&#xE316;</i>
          </span>
	</span>
  </div>
    		
	<div id="otnewsletter" class="ot-des collapse col-sm-8">
	
		 <div class="block_content">
		<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
#footer" method="post">
        <div class="row">
          <div class="otinput_newsletter">
            <input
              class="btn btn-primary float-xs-right hidden-xs-down"
              name="submitNewsletter"
              type="submit"
              value="<?php echo smartyTranslate(array('s'=>'Subscribe','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
"
            >
            <input
              class="btn btn-primary float-xs-right hidden-sm-up"
              name="submitNewsletter"
              type="submit"
              value="<?php echo smartyTranslate(array('s'=>'OK','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
"
            >
            <div class="input-wrapper">
              <input
                name="email"
                type="text"
                value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                placeholder="<?php echo smartyTranslate(array('s'=>'Your email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl);?>
"
              >
            </div>
            <input type="hidden" name="action" value="0">
            <div class="clearfix"></div>
          </div>
          
        </div>
      </form>
	</div>
	
	<div class="col-xs-12 msg">  
	  			<?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
                <p class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>

                </p>
              <?php }?>   
    </div>
      </div>
   
</div>

<?php }} ?>
