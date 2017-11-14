<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:58:07
         compiled from "module:smartblog/views/templates/front/postcategory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16974126425a0b047f8bcd83-06825748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a053b13f1566488bf23919af737da766e9ccec8d' => 
    array (
      0 => 'module:smartblog/views/templates/front/postcategory.tpl',
      1 => 1510671201,
      2 => 'module',
    ),
    'e5a2239361b590ef6adf7287e861d90ef2b1c5a9' => 
    array (
      0 => '/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/layouts/layout-left-column.tpl',
      1 => 1510671201,
      2 => 'file',
    ),
    '2c3b8e7169f472d50b8fe69cf6d74b7bb6d4e36d' => 
    array (
      0 => '/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/layouts/layout-both-columns.tpl',
      1 => 1510671201,
      2 => 'file',
    ),
    '8414202f344b7f6d41b9508fa11a12d34cde2b26' => 
    array (
      0 => '/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/_partials/stylesheets.tpl',
      1 => 1510671201,
      2 => 'file',
    ),
    '1ad14992bba9aa3d44140a9cd9870defb474c974' => 
    array (
      0 => '/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/_partials/javascript.tpl',
      1 => 1510671201,
      2 => 'file',
    ),
    '0d86dc4765ed2b7e63d715c15378a0d5ad2c1289' => 
    array (
      0 => '/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/_partials/head.tpl',
      1 => 1510671201,
      2 => 'file',
    ),
    '0a9c568e60f256940ad7dbf1453ba8e241d15d6f' => 
    array (
      0 => '/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/catalog/_partials/product-activation.tpl',
      1 => 1510671201,
      2 => 'file',
    ),
    'e16719bce10477d9912b7da89f6683bf763ffe1f' => 
    array (
      0 => '/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/_partials/header.tpl',
      1 => 1510671201,
      2 => 'file',
    ),
    '25361527d9c49340e7908da091e1f5ffc84e62e5' => 
    array (
      0 => '/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/_partials/notifications.tpl',
      1 => 1510671201,
      2 => 'file',
    ),
    'e513c0526c0ec08cf58f7e5a660f026c7b892824' => 
    array (
      0 => '/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/_partials/breadcrumb.tpl',
      1 => 1510671201,
      2 => 'file',
    ),
    'fb1fea53432104cdfbaaa7bb89a3dd08ca8f719a' => 
    array (
      0 => 'module:smartblog/views/templates/front/category_loop.tpl',
      1 => 1510671201,
      2 => 'module',
    ),
    '9d181ed6a96785b735ff2425bb670824771dcb0e' => 
    array (
      0 => '/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/_partials/footer.tpl',
      1 => 1510671201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16974126425a0b047f8bcd83-06825748',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout_category' => 0,
    'language' => 0,
    'page' => 0,
    'javascript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0b047fa278e9_79783163',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b047fa278e9_79783163')) {function content_5a0b047fa278e9_79783163($_smarty_tpl) {?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

  <head>
    
      <?php /*  Call merged included template "_partials/head.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '16974126425a0b047f8bcd83-06825748');
content_5a0b047f8f0d78_64079168($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/head.tpl" */?>
    
  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['classnames'][0][0]->smartyClassnames($_smarty_tpl->tpl_vars['page']->value['body_classes']), ENT_QUOTES, 'UTF-8');?>
">

    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl);?>

    

    <main>
      
        <?php /*  Call merged included template "catalog/_partials/product-activation.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '16974126425a0b047f8bcd83-06825748');
content_5a0b047f92eaa5_71224953($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/product-activation.tpl" */?>
      
      <header id="header">
        
          <?php /*  Call merged included template "_partials/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '16974126425a0b047f8bcd83-06825748');
content_5a0b047f934cd4_70352909($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/header.tpl" */?>
        
      </header>
      
        <?php /*  Call merged included template "_partials/notifications.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '16974126425a0b047f8bcd83-06825748');
content_5a0b047f942014_07027506($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/notifications.tpl" */?>
      
	  
      <section id="wrapper">
	  
            <?php /*  Call merged included template "_partials/breadcrumb.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '16974126425a0b047f8bcd83-06825748');
content_5a0b047f958157_83799692($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/breadcrumb.tpl" */?>
          
		  
          <div class="<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']=='index') {?>full-container<?php } else { ?>container<?php }?>">

          
            <div id="left-column" class="col-xs-12 col-sm-4 col-md-3">
              <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']=='product') {?>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayLeftColumnProduct'),$_smarty_tpl);?>

              <?php } else { ?>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayLeftColumn"),$_smarty_tpl);?>

              <?php }?>
            </div>
          

          
  <div id="content-wrapper" class="left-column col-xs-12 col-sm-8 col-md-9">
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayContentWrapperTop"),$_smarty_tpl);?>

    
    <?php if ($_smarty_tpl->tpl_vars['postcategory']->value=='') {?>
        <?php if ($_smarty_tpl->tpl_vars['title_category']->value!='') {?>
            <p class="error"><?php echo smartyTranslate(array('s'=>'No Post in Category','mod'=>'smartblog'),$_smarty_tpl);?>
</p>
        <?php } else { ?>
            <p class="error"><?php echo smartyTranslate(array('s'=>'No Post in Blog','mod'=>'smartblog'),$_smarty_tpl);?>
</p>
        <?php }?>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['smartdisablecatimg']->value=='1') {?>
            <?php $_smarty_tpl->tpl_vars["activeimgincat"] = new Smarty_variable('0', null, 0);?>
            <?php $_smarty_tpl->tpl_vars['activeimgincat'] = new Smarty_variable($_smarty_tpl->tpl_vars['smartshownoimg']->value, null, 0);?> 
            <?php if ($_smarty_tpl->tpl_vars['title_category']->value!='') {?>        
                <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoryinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
                    <div id="sdsblogCategory">
                        <?php if (($_smarty_tpl->tpl_vars['cat_image']->value!="no"&&$_smarty_tpl->tpl_vars['activeimgincat']->value==0)||$_smarty_tpl->tpl_vars['activeimgincat']->value==1) {?>
                            <img alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['meta_title'], ENT_QUOTES, 'UTF-8');?>
" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getMediaLink($_smarty_tpl->tpl_vars['smart_module_dir']->value), ENT_QUOTES, 'UTF-8');?>
/smartblog/views/img/category/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat_image']->value, ENT_QUOTES, 'UTF-8');?>
-single-default.jpg" class="imageFeatured">
                        <?php }?>
                        <div class="catDesc"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['category']->value['description'],'html','UTF-8');?>
</div>
                    </div>
                <?php } ?>  
            <?php }?>
        <?php }?>
        <div id="smartblogcat" class="block">
            <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['postcategory']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
                <?php /*  Call merged included template "module:smartblog/views/templates/front/category_loop.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('module:smartblog/views/templates/front/category_loop.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('postcategory'=>$_smarty_tpl->tpl_vars['postcategory']->value), 0, '16974126425a0b047f8bcd83-06825748');
content_5a0b047f97eb34_18382732($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "module:smartblog/views/templates/front/category_loop.tpl" */?>
            <?php } ?>
        </div>
        <?php if (!empty($_smarty_tpl->tpl_vars['pagenums']->value)) {?>
            <div class="blog_pagination">
                <div class="pagination">
                    <div class="results pagination-left"><?php echo smartyTranslate(array('s'=>'Showing','mod'=>'smartblog'),$_smarty_tpl);?>
 <?php if ($_smarty_tpl->tpl_vars['limit_start']->value!=0) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['limit_start']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>1<?php }?> <?php echo smartyTranslate(array('s'=>'to','mod'=>'smartblog'),$_smarty_tpl);?>
 <?php if ($_smarty_tpl->tpl_vars['limit_start']->value+$_smarty_tpl->tpl_vars['limit']->value>=$_smarty_tpl->tpl_vars['total']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['total']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['limit_start']->value+$_smarty_tpl->tpl_vars['limit']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?> <?php echo smartyTranslate(array('s'=>'of','mod'=>'smartblog'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['total']->value, ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo smartyTranslate(array('s'=>'Pages','mod'=>'smartblog'),$_smarty_tpl);?>
)</div>
                    <ul class="pagination_bottom page-list text-sm-center">
                        <?php $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['k']->step = 1;$_smarty_tpl->tpl_vars['k']->total = (int) ceil(($_smarty_tpl->tpl_vars['k']->step > 0 ? $_smarty_tpl->tpl_vars['pagenums']->value+1 - (0) : 0-($_smarty_tpl->tpl_vars['pagenums']->value)+1)/abs($_smarty_tpl->tpl_vars['k']->step));
if ($_smarty_tpl->tpl_vars['k']->total > 0) {
for ($_smarty_tpl->tpl_vars['k']->value = 0, $_smarty_tpl->tpl_vars['k']->iteration = 1;$_smarty_tpl->tpl_vars['k']->iteration <= $_smarty_tpl->tpl_vars['k']->total;$_smarty_tpl->tpl_vars['k']->value += $_smarty_tpl->tpl_vars['k']->step, $_smarty_tpl->tpl_vars['k']->iteration++) {
$_smarty_tpl->tpl_vars['k']->first = $_smarty_tpl->tpl_vars['k']->iteration == 1;$_smarty_tpl->tpl_vars['k']->last = $_smarty_tpl->tpl_vars['k']->iteration == $_smarty_tpl->tpl_vars['k']->total;?>
                            <?php if ($_smarty_tpl->tpl_vars['title_category']->value!='') {?>
                                <?php $_smarty_tpl->tpl_vars["options"] = new Smarty_variable(null, null, 0);?>
                                <?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['page'] = $_smarty_tpl->tpl_vars['k']->value+1;?>
                                <?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['id_category'] = $_smarty_tpl->tpl_vars['id_category']->value;?>
                                <?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['slug'] = $_smarty_tpl->tpl_vars['cat_link_rewrite']->value;?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->tpl_vars["options"] = new Smarty_variable(null, null, 0);?>
                                <?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['page'] = $_smarty_tpl->tpl_vars['k']->value+1;?>
                            <?php }?>
                            <?php if (($_smarty_tpl->tpl_vars['k']->value+1)==$_smarty_tpl->tpl_vars['c']->value) {?>
                                <li class="current"><a class="disabled"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value+1, ENT_QUOTES, 'UTF-8');?>
</a></li>
                            <?php } else { ?>
                                <?php if ($_smarty_tpl->tpl_vars['title_category']->value!='') {?>
                                    <li><a class="" href="<?php echo htmlspecialchars(smartblog::GetSmartBlogLink('smartblog_category_pagination',$_smarty_tpl->tpl_vars['options']->value), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value+1, ENT_QUOTES, 'UTF-8');?>
</a></li>
                                <?php } else { ?>
                                    <li><a class="" href="<?php echo htmlspecialchars(smartblog::GetSmartBlogLink('smartblog_list_pagination',$_smarty_tpl->tpl_vars['options']->value), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value+1, ENT_QUOTES, 'UTF-8');?>
</a></li>
                                <?php }?>
                            <?php }?>
                        <?php }} ?>
                    </ul>
                </div>
            </div>
        <?php }?>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['smartcustomcss']->value)) {?>
        <style>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['smartcustomcss']->value, ENT_QUOTES, 'UTF-8');?>

        </style>
    <?php }?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayContentWrapperBottom"),$_smarty_tpl);?>

  </div>


          
		</div>
      </section>

      <footer id="footer">
        
          <?php /*  Call merged included template "_partials/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '16974126425a0b047f8bcd83-06825748');
content_5a0b047fa1a109_90874432($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/footer.tpl" */?>
        
      </footer>
    </main>

    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl);?>

    

    
      <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, '16974126425a0b047f8bcd83-06825748');
content_5a0b047f918383_78534574($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>
    

  </body>

</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:58:07
         compiled from "/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/_partials/head.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a0b047f8f0d78_64079168')) {function content_5a0b047f8f0d78_64079168($_smarty_tpl) {?>

  <meta charset="utf-8">


  <meta http-equiv="x-ua-compatible" content="ie=edge">



    <title> <?php if ($_smarty_tpl->tpl_vars['title_category']->value!='') {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_category']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'All Blog News','mod'=>'smartblog'),$_smarty_tpl);?>
<?php }?></title>



  <meta name="viewport" content="width=device-width, initial-scale=1">


<!-- Ontheme theme google font-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 
	
	<script type = "text/javascript" src = "//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js" ></script>
<!-- Ontheme theme google font-->




  <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">



  <?php /*  Call merged included template "_partials/stylesheets.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, '16974126425a0b047f8bcd83-06825748');
content_5a0b047f90d4f0_65114379($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/stylesheets.tpl" */?>



  <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, '16974126425a0b047f8bcd83-06825748');
content_5a0b047f918383_78534574($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>



  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>




<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:58:07
         compiled from "/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/_partials/stylesheets.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a0b047f90d4f0_65114379')) {function content_5a0b047f90d4f0_65114379($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['media'], ENT_QUOTES, 'UTF-8');?>
">
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <style>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['content'], ENT_QUOTES, 'UTF-8');?>

  </style>
<?php } ?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:58:07
         compiled from "/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/_partials/javascript.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a0b047f918383_78534574')) {function content_5a0b047f918383_78534574($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['attribute'], ENT_QUOTES, 'UTF-8');?>
></script>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript">
    <?php echo $_smarty_tpl->tpl_vars['js']->value['content'];?>

  </script>
<?php } ?>

<?php if (isset($_smarty_tpl->tpl_vars['vars']->value)&&count($_smarty_tpl->tpl_vars['vars']->value)) {?>
  <script type="text/javascript">
    <?php  $_smarty_tpl->tpl_vars['var_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var_value']->_loop = false;
 $_smarty_tpl->tpl_vars['var_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['var_value']->key => $_smarty_tpl->tpl_vars['var_value']->value) {
$_smarty_tpl->tpl_vars['var_value']->_loop = true;
 $_smarty_tpl->tpl_vars['var_name']->value = $_smarty_tpl->tpl_vars['var_value']->key;
?>
    var <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
 = <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['var_value']->value);?>
;
    <?php } ?>
  </script>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:58:07
         compiled from "/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/catalog/_partials/product-activation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a0b047f92eaa5_71224953')) {function content_5a0b047f92eaa5_71224953($_smarty_tpl) {?>   
<?php if ($_smarty_tpl->tpl_vars['page']->value['admin_notifications']) {?>
  <div class="alert alert-warning row" role="alert">
    <div class="container">
      <div class="row">
        <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['admin_notifications']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
          <div class="col-sm-12">
            <i class="material-icons float-xs-left">&#xE001;</i>
            <p class="alert-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value['message'], ENT_QUOTES, 'UTF-8');?>
</p>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:58:07
         compiled from "/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/_partials/header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a0b047f934cd4_70352909')) {function content_5a0b047f934cd4_70352909($_smarty_tpl) {?>

  <div class="header-banner">
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBanner'),$_smarty_tpl);?>

  </div>

<div class="main-header">

  <nav class="header-nav">
          <div class="hidden-sm-down top-nav">
            <div class="col-md-4 col-xs-12 left-nav">
			<div class="container">
              <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNav1'),$_smarty_tpl);?>

            </div>
			</div>
            <div class="col-md-8 right-nav">
			<div class="container">
				<div class="col-md-2 hidden-sm-down" id="_desktop_logo">
				  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
					<img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
				  </a>
				</div>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNav2'),$_smarty_tpl);?>

				</div>
            </div>
          </div>
		  
          <div class="hidden-md-up text-sm-center mobile">
		  <div class="container">
		  <div class="row">
		  <div class="top-logo" id="_mobile_logo"></div>
		  <div class="fullmenu">
            <div class="float-xs-left" id="menu-icon">
              <i class="material-icons">&#xE5D2;</i>
            </div>
            <div class="float-xs-right" id="_mobile_cart"></div>
            <div class="float-xs-right" id="_mobile_user_info"></div>
			</div>
			</div>
			</div>
            <div class="clearfix"></div>
          </div>
  </nav>



  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNavFullWidth'),$_smarty_tpl);?>



<div class="position-static top-menu">
<div class="container">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayTop'),$_smarty_tpl);?>

		<div class="clearfix"></div>
	<div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
        <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
        <div class="js-top-menu-bottom">
          <div id="_mobile_currency_selector"></div>
          <div id="_mobile_language_selector"></div>
          <div id="_mobile_contact_link"></div>
        </div>
      </div>
</div>
</div>

</div>

<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']=='index') {?>
	
		<div id="top_column">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayTopColumn'),$_smarty_tpl);?>

		 </div>
	
<?php }?><?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:58:07
         compiled from "/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/_partials/notifications.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a0b047f942014_07027506')) {function content_5a0b047f942014_07027506($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['notifications']->value)) {?>
<aside id="notifications">
  <div class="container">
    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
      
        <article class="alert alert-danger" role="alert" data-alert="danger">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['error']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
      
        <article class="alert alert-warning" role="alert" data-alert="warning">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['warning']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
      
        <article class="alert alert-success" role="alert" data-alert="success">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['success']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
      
        <article class="alert alert-info" role="alert" data-alert="info">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>
  </div>
</aside>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:58:07
         compiled from "/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/_partials/breadcrumb.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a0b047f958157_83799692')) {function content_5a0b047f958157_83799692($_smarty_tpl) {?>
<div class="otbreadcrumb">
   <div class="container">
   	<nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb hidden-sm-down">
 	 <ol itemscope itemtype="http://schema.org/BreadcrumbList">
    <?php  $_smarty_tpl->tpl_vars['path'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['path']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumb']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['path']->key => $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']++;
?>
      
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
            <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
          </a>
          <meta itemprop="position" content="<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['breadcrumb']['iteration'], ENT_QUOTES, 'UTF-8');?>
">
        </li>
      
    <?php } ?>
  </ol>
</nav>
</div>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:58:07
         compiled from "module:smartblog/views/templates/front/category_loop.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a0b047f97eb34_18382732')) {function content_5a0b047f97eb34_18382732($_smarty_tpl) {?>
 
<div itemtype="#" itemscope="" class="sdsarticleCat clearfix">
	<div id="smartblogpost-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['id_post'], ENT_QUOTES, 'UTF-8');?>
">
			<?php $_smarty_tpl->tpl_vars["options"] = new Smarty_variable(null, null, 0);?>
			<?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['id_post'] = $_smarty_tpl->tpl_vars['post']->value['id_post'];?> 
			<?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['slug'] = $_smarty_tpl->tpl_vars['post']->value['link_rewrite'];?>
			<div class="row">
		<div class="articleContent col-sm-5 col-xs-5">
			<a itemprop="url" href="<?php echo htmlspecialchars(smartblog::GetSmartBlogLink('smartblog_post',$_smarty_tpl->tpl_vars['options']->value), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['meta_title'], ENT_QUOTES, 'UTF-8');?>
" class="imageFeaturedLink">
				<?php $_smarty_tpl->tpl_vars["activeimgincat"] = new Smarty_variable('0', null, 0);?>
				<?php $_smarty_tpl->tpl_vars['activeimgincat'] = new Smarty_variable($_smarty_tpl->tpl_vars['smartshownoimg']->value, null, 0);?> 
				<?php if (($_smarty_tpl->tpl_vars['post']->value['post_img']!="no"&&$_smarty_tpl->tpl_vars['activeimgincat']->value==0)||$_smarty_tpl->tpl_vars['activeimgincat']->value==1) {?>
					<img itemprop="image" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['meta_title'], ENT_QUOTES, 'UTF-8');?>
" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getMediaLink($_smarty_tpl->tpl_vars['smart_module_dir']->value), ENT_QUOTES, 'UTF-8');?>
/smartblog/views/img/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['post_img'], ENT_QUOTES, 'UTF-8');?>
-single-default.jpg" class="imageFeatured">
				<?php }?>
			</a>
		</div>
		<div class="blog_desc col-sm-7 col-xs-7">
		<div class="sdsarticleHeader">
			<p class='sdstitle_block'><a title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['meta_title'], ENT_QUOTES, 'UTF-8');?>
" href='<?php echo htmlspecialchars(smartblog::GetSmartBlogLink('smartblog_post',$_smarty_tpl->tpl_vars['options']->value), ENT_QUOTES, 'UTF-8');?>
'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['meta_title'], ENT_QUOTES, 'UTF-8');?>
</a></p>
		</div>
		<?php $_smarty_tpl->tpl_vars["options"] = new Smarty_variable(null, null, 0);?>
		<?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['id_post'] = $_smarty_tpl->tpl_vars['post']->value['id_post'];?>
		<?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['slug'] = $_smarty_tpl->tpl_vars['post']->value['link_rewrite'];?>
		<?php $_smarty_tpl->tpl_vars["catlink"] = new Smarty_variable(null, null, 0);?>
		<?php $_smarty_tpl->createLocalArrayVariable('catlink', null, 0);
$_smarty_tpl->tpl_vars['catlink']->value['id_category'] = $_smarty_tpl->tpl_vars['post']->value['id_category'];?>
		<?php $_smarty_tpl->createLocalArrayVariable('catlink', null, 0);
$_smarty_tpl->tpl_vars['catlink']->value['slug'] = $_smarty_tpl->tpl_vars['post']->value['cat_link_rewrite'];?>
		<span class="blogdetail">
			<span class="ttpost"><?php echo smartyTranslate(array('s'=>'Posted by','mod'=>'smartblog'),$_smarty_tpl);?>
 </span>
			<?php if ($_smarty_tpl->tpl_vars['smartshowauthor']->value==1) {?>&nbsp;
				<span class="author" itemprop="author"><i class="material-icons user">&#xE7FF;</i>&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['smartshowauthorstyle']->value!=0) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
<?php }?></span>&nbsp;&nbsp;
			<?php }?>
			<span class="articleSection" itemprop="articleSection"><a href="<?php echo htmlspecialchars(smartblog::GetSmartBlogLink('smartblog_category',$_smarty_tpl->tpl_vars['catlink']->value), ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons tags">&#xE54E;</i>&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['title_category']->value!='') {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_category']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['cat_name'], ENT_QUOTES, 'UTF-8');?>
<?php }?></a></span>&nbsp;&nbsp;
			<span class="blogcomment"><a title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['totalcomment'], ENT_QUOTES, 'UTF-8');?>
 Comments" href="<?php echo htmlspecialchars(smartblog::GetSmartBlogLink('smartblog_post',$_smarty_tpl->tpl_vars['options']->value), ENT_QUOTES, 'UTF-8');?>
#articleComments"><i class="material-icons comments">&#xE0B9;</i>&nbsp;&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['totalcomment'], ENT_QUOTES, 'UTF-8');?>
 <?php echo smartyTranslate(array('s'=>' Comments','mod'=>'smartblog'),$_smarty_tpl);?>
</a></span>
			<?php if ($_smarty_tpl->tpl_vars['smartshowviewed']->value==1) {?>&nbsp;
				<span class="viewed"><i class="material-icons eye">&#xE417;</i>&nbsp;&nbsp;<?php echo smartyTranslate(array('s'=>' views','mod'=>'smartblog'),$_smarty_tpl);?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['viewed'], ENT_QUOTES, 'UTF-8');?>
)</span>
			<?php }?>
		</span>
		<div class="sdsarticle-des">
			<span itemprop="description" class="clearfix">
				<div id="lipsum">
					<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['post']->value['short_description'],'htmlall','UTF-8'),300,'...'), ENT_QUOTES, 'UTF-8');?>

				</div>
			</span>
		</div>
		<div class="sdsreadMore">
			<?php $_smarty_tpl->tpl_vars["options"] = new Smarty_variable(null, null, 0);?>
			<?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['id_post'] = $_smarty_tpl->tpl_vars['post']->value['id_post'];?>  
			<?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['slug'] = $_smarty_tpl->tpl_vars['post']->value['link_rewrite'];?>  
			<span class="more">
				<a title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['meta_title'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(smartblog::GetSmartBlogLink('smartblog_post',$_smarty_tpl->tpl_vars['options']->value), ENT_QUOTES, 'UTF-8');?>
" class="r_more"><?php echo smartyTranslate(array('s'=>'Read more','mod'=>'smartblog'),$_smarty_tpl);?>
</a>
			</span>
		</div>
		</div>
		</div>
	</div>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:58:07
         compiled from "/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/_partials/footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a0b047fa1a109_90874432')) {function content_5a0b047fa1a109_90874432($_smarty_tpl) {?>
 <div class="footer-top">
<div class="container">
  <div class="row">
    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterBefore'),$_smarty_tpl);?>

    
  </div>
</div>
</div>
<div class="footer-container">
  <div class="container">
    <div class="row">
      
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooter'),$_smarty_tpl);?>

      
    </div>
    <div class="row">
      
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterAfter'),$_smarty_tpl);?>

      
    </div>
</div>
</div>
<div class="bottom-footer">
	<div class="container">    
	 <div class="row">
      <div class="col-md-6 col-sm-6">
        <p>
          
            <a class="_blank" href="http://www.prestashop.com" target="_blank">
              <?php echo smartyTranslate(array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme'),$_smarty_tpl);?>

            </a>
          
        </p>
      </div>
    </div>
  </div>
</div>
<a href="#" id="goToTop" title="Back to top"> <i class="material-icons arrow-up">&#xE316;</i></a>
<?php }} ?>
