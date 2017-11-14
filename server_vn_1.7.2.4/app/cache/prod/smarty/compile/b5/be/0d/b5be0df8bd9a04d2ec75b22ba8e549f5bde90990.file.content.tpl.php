<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:54:05
         compiled from "/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/modules/welcome/views/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11911766245a0b038d3725f9-26281086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5be0df8bd9a04d2ec75b22ba8e549f5bde90990' => 
    array (
      0 => '/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/modules/welcome/views/content.tpl',
      1 => 1510670202,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11911766245a0b038d3725f9-26281086',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'steps' => 0,
    'k' => 0,
    'group' => 0,
    'totalSteps' => 0,
    'percent_real' => 0,
    'currentStep' => 0,
    'jsonSteps' => 0,
    'isShutDown' => 0,
    'link' => 0,
    'templates' => 0,
    'template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0b038d382d00_17480687',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b038d382d00_17480687')) {function content_5a0b038d382d00_17480687($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/vendor/prestashop/smarty/plugins/function.math.php';
?>

<div class="onboarding-advancement" style="display: none">
  <div class="advancement-groups">
    <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['steps']->value['groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
      <div class="group group-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" style="width: <?php echo smarty_function_math(array('equation'=>"(x / y) * 100",'x'=>count($_smarty_tpl->tpl_vars['group']->value['steps']),'y'=>$_smarty_tpl->tpl_vars['totalSteps']->value),$_smarty_tpl);?>
%;">
        <div class="advancement" style="width: <?php echo $_smarty_tpl->tpl_vars['percent_real']->value;?>
%;"></div>
        <div class="id"><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</div>
      </div>
    <?php } ?>
  </div>
  <div class="col-md-8">
    <h4 class="group-title"></h4>
    <div class="step-title step-title-1"></div>
    <div class="step-title step-title-2"></div>
  </div>
  <button class="btn btn-primary onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Continue','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
  <a class="onboarding-button-shut-down"><?php echo smartyTranslate(array('s'=>'Skip this tutorial','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</a>
</div>

<script type="text/javascript">

  var onBoarding;

  $(function(){
    onBoarding = new OnBoarding(<?php echo $_smarty_tpl->tpl_vars['currentStep']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['jsonSteps']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['isShutDown']->value;?>
, "<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
", baseAdminDir);

    <?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value) {
$_smarty_tpl->tpl_vars['template']->_loop = true;
?>
      onBoarding.addTemplate('<?php echo $_smarty_tpl->tpl_vars['template']->value['name'];?>
', '<?php echo $_smarty_tpl->tpl_vars['template']->value['content'];?>
');
    <?php } ?>

    onBoarding.showCurrentStep();

    var body = $("body");

    body.delegate(".onboarding-button-next", "click", function(){
      if ($(this).is('.with-spinner')) {
        if (!$(this).is('.animated')) {
          $(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(".onboarding-button-shut-down", "click", function(){
      onBoarding.setShutDown(true);
    }).delegate(".onboarding-button-resume", "click", function(){
      onBoarding.setShutDown(false);
    }).delegate(".onboarding-button-goto-current", "click", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(".onboarding-button-stop", "click", function(){
      onBoarding.stop();
    });

  });

</script>
<?php }} ?>
