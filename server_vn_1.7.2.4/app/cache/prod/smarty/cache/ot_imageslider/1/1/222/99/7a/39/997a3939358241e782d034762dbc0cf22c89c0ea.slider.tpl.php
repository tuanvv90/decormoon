<?php /*%%SmartyHeaderCode:8153139935a0b03ec893ea4-62691376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '997a3939358241e782d034762dbc0cf22c89c0ea' => 
    array (
      0 => 'module:ot_imageslider/views/templates/hook/slider.tpl',
      1 => 1510671201,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '8153139935a0b03ec893ea4-62691376',
  'variables' => 
  array (
    'othomeslider' => 0,
    'slide' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0b03ec8a3283_42592182',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b03ec8a3283_42592182')) {function content_5a0b03ec8a3283_42592182($_smarty_tpl) {?>
	<div class="flexslider" data-interval="3500" data-pause="true">
		<div class="loadingdiv spinner"></div>
		<ul class="slides">
							<li class="slide">
					<a href="#" title="sample-1">
						<img src="http://decormoon.com/modules/ot_imageslider/views/img/sample-1.jpg" alt="sample-1" title="Sample 1" />
													<div class="slide-description">
								<span>Sample 1</span>
								<div> </div>
							</div>
											</a>				
				</li>
							<li class="slide">
					<a href="#" title="sample-2">
						<img src="http://decormoon.com/modules/ot_imageslider/views/img/sample-2.jpg" alt="sample-2" title="Sample 2" />
													<div class="slide-description">
								<span>Sample 2</span>
								<div> </div>
							</div>
											</a>				
				</li>
					</ul>
	</div>
<?php }} ?>
