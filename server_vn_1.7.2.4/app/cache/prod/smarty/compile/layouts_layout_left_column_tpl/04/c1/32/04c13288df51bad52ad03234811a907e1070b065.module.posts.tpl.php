<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:58:32
         compiled from "module:smartblog/views/templates/front/posts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4059744095a0b0498baff35-65030622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04c13288df51bad52ad03234811a907e1070b065' => 
    array (
      0 => 'module:smartblog/views/templates/front/posts.tpl',
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
    'b6e9e5928678631ee6459978db2c23dc1e426ef8' => 
    array (
      0 => 'module:smartblog/views/templates/front/comment_loop.tpl',
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
  'nocache_hash' => '4059744095a0b0498baff35-65030622',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout_details' => 0,
    'language' => 0,
    'page' => 0,
    'javascript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0b0498d1c8e0_47200500',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b0498d1c8e0_47200500')) {function content_5a0b0498d1c8e0_47200500($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/vendor/prestashop/smarty/plugins/modifier.date_format.php';
?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

  <head>
    
      <?php /*  Call merged included template "_partials/head.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '4059744095a0b0498baff35-65030622');
content_5a0b0498be25d3_50219145($_smarty_tpl);
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '4059744095a0b0498baff35-65030622');
content_5a0b0498c1e591_85706815($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/product-activation.tpl" */?>
      
      <header id="header">
        
          <?php /*  Call merged included template "_partials/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '4059744095a0b0498baff35-65030622');
content_5a0b0498c25f07_89107488($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/header.tpl" */?>
        
      </header>
      
        <?php /*  Call merged included template "_partials/notifications.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '4059744095a0b0498baff35-65030622');
content_5a0b0498c33ab3_48482594($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/notifications.tpl" */?>
      
	  
      <section id="wrapper">
	  
            <?php /*  Call merged included template "_partials/breadcrumb.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '4059744095a0b0498baff35-65030622');
content_5a0b0498c49e00_97564072($_smarty_tpl);
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

    
    <div id="content" class="block">
        <div itemtype="#" itemscope="" id="sdsblogArticle" class="blog-post">
            <div itemprop="articleBody">
                    <div id="lipsum" class="articleContent">
                        <?php $_smarty_tpl->tpl_vars["activeimgincat"] = new Smarty_variable('0', null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['activeimgincat'] = new Smarty_variable($_smarty_tpl->tpl_vars['smartshownoimg']->value, null, 0);?> 
                        <?php if (($_smarty_tpl->tpl_vars['post_img']->value!="no"&&$_smarty_tpl->tpl_vars['activeimgincat']->value==0)||$_smarty_tpl->tpl_vars['activeimgincat']->value==1) {?>
                            <a id="post_images" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getMediaLink($_smarty_tpl->tpl_vars['smart_module_dir']->value), ENT_QUOTES, 'UTF-8');?>
/smartblog/views/img/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_img']->value, ENT_QUOTES, 'UTF-8');?>
-single-default.jpg">
                                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getMediaLink($_smarty_tpl->tpl_vars['smart_module_dir']->value), ENT_QUOTES, 'UTF-8');?>
/smartblog/views/img/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_img']->value, ENT_QUOTES, 'UTF-8');?>
-single-default.jpg" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8');?>
">
                            </a>
                        <?php }?>
                    </div>
                    <div class="page-item-title">
                        <h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8');?>
</h1>
                    </div>
                    <div class="post-info">
                        <?php $_smarty_tpl->tpl_vars["catOptions"] = new Smarty_variable(null, null, 0);?>
                        <?php $_smarty_tpl->createLocalArrayVariable('catOptions', null, 0);
$_smarty_tpl->tpl_vars['catOptions']->value['id_category'] = $_smarty_tpl->tpl_vars['id_category']->value;?>
                        <?php $_smarty_tpl->createLocalArrayVariable('catOptions', null, 0);
$_smarty_tpl->tpl_vars['catOptions']->value['slug'] = $_smarty_tpl->tpl_vars['cat_link_rewrite']->value;?>
                        <span>
                            <?php echo smartyTranslate(array('s'=>'Posted by ','mod'=>'smartblog'),$_smarty_tpl);?>
 
                            <?php if ($_smarty_tpl->tpl_vars['smartshowauthor']->value==1) {?>&nbsp;
                                <span class="author" itemprop="author"><i class="material-icons user">&#xE7FF;</i>&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['smartshowauthorstyle']->value!=0) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['firstname']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lastname']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lastname']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['firstname']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?></span>&nbsp;&nbsp;
                            <?php }?>
                            <span class="dateCreated" itemprop="dateCreated"><i class="material-icons calendar">&#xE916;</i>&nbsp;&nbsp;<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['created']->value), ENT_QUOTES, 'UTF-8');?>
</span>&nbsp;&nbsp;
                        <span class="articleSection" itemprop="articleSection"><a href="<?php echo htmlspecialchars(smartblog::GetSmartBlogLink('smartblog_category',$_smarty_tpl->tpl_vars['catOptions']->value), ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons tags">&#xE54E;</i>&nbsp;&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_category']->value, ENT_QUOTES, 'UTF-8');?>
</a></span>&nbsp;&nbsp;
                        <span class="blogcomment"><i class="material-icons comments">&#xE0B9;</i>&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['countcomment']->value!='') {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['countcomment']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'0','mod'=>'smartblog'),$_smarty_tpl);?>
<?php }?><?php echo smartyTranslate(array('s'=>' Comments','mod'=>'smartblog'),$_smarty_tpl);?>
</span>
                        </span>
                        <a title="" style="display:none" itemprop="url" href="#"></a>
                    </div>
                <div class="sdsarticle-des">
                    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                </div>
                <?php if ($_smarty_tpl->tpl_vars['tags']->value!='') {?>
                    <div class="sdstags-update">
                        <span class="tags"><b><?php echo smartyTranslate(array('s'=>'Tags:','mod'=>'smartblog'),$_smarty_tpl);?>
 </b> 
                            <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
                                <?php $_smarty_tpl->tpl_vars["options"] = new Smarty_variable(null, null, 0);?>
                                <?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['tag'] = urlencode($_smarty_tpl->tpl_vars['tag']->value['name']);?>
                                <a title="tag" href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(smartblog::GetSmartBlogLink('smartblog_tag',$_smarty_tpl->tpl_vars['options']->value),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
                            <?php } ?>
                        </span>
                    </div>
                <?php }?>
            </div>

            <div class="sdsarticleBottom">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['HOOK_SMART_BLOG_POST_FOOTER']->value, ENT_QUOTES, 'UTF-8');?>

            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['countcomment']->value!='') {?>
            <div id="articleComments">
                <h3 class="commenttitle"><?php if ($_smarty_tpl->tpl_vars['countcomment']->value!='') {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['countcomment']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'0','mod'=>'smartblog'),$_smarty_tpl);?>
<?php }?><?php echo smartyTranslate(array('s'=>' Comments','mod'=>'smartblog'),$_smarty_tpl);?>
<span></span></h3>
                <div id="comments">      
                    <ul class="commentList">
                        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
                        <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
                            <?php /*  Call merged included template "module:smartblog/views/templates/front/comment_loop.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('module:smartblog/views/templates/front/comment_loop.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('childcommnets'=>$_smarty_tpl->tpl_vars['comment']->value), 0, '4059744095a0b0498baff35-65030622');
content_5a0b0498c8c863_50724084($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "module:smartblog/views/templates/front/comment_loop.tpl" */?>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        <?php }?>
    </div>
    <?php if (Configuration::get('smartenablecomment')==1) {?>
        <?php if ($_smarty_tpl->tpl_vars['comment_status']->value==1) {?>
            <div class="smartblogcomments" id="respond">
                <h4 class="comment-reply-title" id="reply-title">
                    <?php echo smartyTranslate(array('s'=>'Leave a Reply','mod'=>'smartblog'),$_smarty_tpl);?>

                    <small style="float:right;">
                        <a style="display: none;" href="/wp/sellya/sellya/this-is-a-post-with-preview-image/#respond" id="cancel-comment-reply-link" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Cancel Reply','mod'=>'smartblog'),$_smarty_tpl);?>
</a>
                    </small>
                </h4>
                <section id="commentInput" class="page-content card card-block">
                    <form action="" method="post" id="commentform">
                        <div class="form-group row">
                            <label class="col-md-5 form-control-label required">
                                <?php echo smartyTranslate(array('s'=>'Name:','mod'=>'smartblog'),$_smarty_tpl);?>

                            </label>
                            <div class="col-md-7">
                                <input class="form-control inputName grey" name="name" value="" maxlength="255" required="" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-5 form-control-label required">
                                <?php echo smartyTranslate(array('s'=>'E-mail:','mod'=>'smartblog'),$_smarty_tpl);?>

                                <span class="note"><?php echo smartyTranslate(array('s'=>'(Not Published)','mod'=>'smartblog'),$_smarty_tpl);?>
</span>
                            </label>
                            <div class="col-md-7">
                                <input class="form-control inputMail grey" name="mail" value="" maxlength="255" required="" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-5 form-control-label required">
                                <?php echo smartyTranslate(array('s'=>'Website:','mod'=>'smartblog'),$_smarty_tpl);?>

                                <span class="note"><?php echo smartyTranslate(array('s'=>'(Site url with','mod'=>'smartblog'),$_smarty_tpl);?>
http://)</span>
                            </label>
                            <div class="col-md-7">
                                <input class="form-control grey" name="website" value="" maxlength="255" required="" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-5 form-control-label required">
                                <?php echo smartyTranslate(array('s'=>'Comment:','mod'=>'smartblog'),$_smarty_tpl);?>

                            </label>
                            <div class="col-md-7">
                                <textarea class="form-control inputContent grey" name="comment" rows="8" cols="50" required=""></textarea>
                            </div>
                        </div>
                        <?php if (Configuration::get('smartcaptchaoption')=='1') {?>
                            <div class="form-group row">
                                <label class="col-md-5">
                                </label>
                                <div class="col-md-7">
                                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getMediaLink($_smarty_tpl->tpl_vars['smart_module_dir']->value), ENT_QUOTES, 'UTF-8');?>
/smartblog/classes/CaptchaSecurityImages.php?width=100&height=40&characters=5">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-5 form-control-label required">
                                    <?php echo smartyTranslate(array('s'=>'Type Code','mod'=>'smartblog'),$_smarty_tpl);?>

                                </label>
                                <div class="col-md-7">
                                    <input class="form-control smartblogcaptcha grey" name="smartblogcaptcha" value="" maxlength="255" required="" type="text">
                                </div>
                            </div>
                        <?php }?>
                        <input type='hidden' name='comment_post_ID' value='1478' id='comment_post_ID' />
                        <input type='hidden' name='id_post' value='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_post']->value, ENT_QUOTES, 'UTF-8');?>
' id='id_post' />
                        <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                        <div class="right">
                            <div class="submit">
                                <input type="submit" name="addComment" id="submitComment" class="bbutton btn btn-primary" value="Submit">
                            </div>
                        </div>
                    </form>
                </section>
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '4059744095a0b0498baff35-65030622');
content_5a0b0498d0f100_88648894($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/footer.tpl" */?>
        
      </footer>
    </main>

    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl);?>

    

    
      <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, '4059744095a0b0498baff35-65030622');
content_5a0b0498c06c79_70136193($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>
    

  </body>

</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:58:32
         compiled from "/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/_partials/head.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a0b0498be25d3_50219145')) {function content_5a0b0498be25d3_50219145($_smarty_tpl) {?>

  <meta charset="utf-8">


  <meta http-equiv="x-ua-compatible" content="ie=edge">



    <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8');?>
</title>



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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, '4059744095a0b0498baff35-65030622');
content_5a0b0498bfbda8_28763239($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/stylesheets.tpl" */?>



  <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, '4059744095a0b0498baff35-65030622');
content_5a0b0498c06c79_70136193($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>



  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>




<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:58:32
         compiled from "/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/_partials/stylesheets.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a0b0498bfbda8_28763239')) {function content_5a0b0498bfbda8_28763239($_smarty_tpl) {?>
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
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:58:32
         compiled from "/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/_partials/javascript.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a0b0498c06c79_70136193')) {function content_5a0b0498c06c79_70136193($_smarty_tpl) {?>
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
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:58:32
         compiled from "/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/catalog/_partials/product-activation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a0b0498c1e591_85706815')) {function content_5a0b0498c1e591_85706815($_smarty_tpl) {?>   
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
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:58:32
         compiled from "/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/_partials/header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a0b0498c25f07_89107488')) {function content_5a0b0498c25f07_89107488($_smarty_tpl) {?>

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
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:58:32
         compiled from "/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/_partials/notifications.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a0b0498c33ab3_48482594')) {function content_5a0b0498c33ab3_48482594($_smarty_tpl) {?>

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
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:58:32
         compiled from "/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/_partials/breadcrumb.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a0b0498c49e00_97564072')) {function content_5a0b0498c49e00_97564072($_smarty_tpl) {?>
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
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:58:32
         compiled from "module:smartblog/views/templates/front/comment_loop.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a0b0498c8c863_50724084')) {function content_5a0b0498c8c863_50724084($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/vendor/prestashop/smarty/plugins/modifier.date_format.php';
?>
 
<?php if ($_smarty_tpl->tpl_vars['comment']->value['id_smart_blog_comment']!='') {?>
    <ul class="commentList">
        <div id="comment-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['id_smart_blog_comment'], ENT_QUOTES, 'UTF-8');?>
">
            <li class="even">
                <img class="avatar" alt="Avatar" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getMediaLink($_smarty_tpl->tpl_vars['smart_module_dir']->value), ENT_QUOTES, 'UTF-8');?>
/smartblog/views/img/avatar/avatar-author-default.jpg">
                <div class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['childcommnets']->value['name'], ENT_QUOTES, 'UTF-8');?>
</div>
                <div class="created">
                    <span itemprop="commentTime"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['childcommnets']->value['created']), ENT_QUOTES, 'UTF-8');?>
</span>
                </div>
                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['childcommnets']->value['content'], ENT_QUOTES, 'UTF-8');?>
</p>
                <?php if (Configuration::get('smartenablecomment')==1) {?>
                    <?php if ($_smarty_tpl->tpl_vars['comment_status']->value==1) {?>
                        <div class="reply">
                            <a onclick="return addComment.moveForm('comment-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['id_smart_blog_comment'], ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['id_smart_blog_comment'], ENT_QUOTES, 'UTF-8');?>
', 'respond', '<?php echo htmlspecialchars($_GET['id_post'], ENT_QUOTES, 'UTF-8');?>
')"  class="comment-reply-link"><?php echo smartyTranslate(array('s'=>'Reply','mod'=>'smartblog'),$_smarty_tpl);?>
</a>
                        </div>
                    <?php }?>
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['childcommnets']->value['child_comments'])) {?>
                    <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['childcommnets']->value['child_comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>  
                        <?php if (isset($_smarty_tpl->tpl_vars['childcommnets']->value['child_comments'])) {?>
                            <?php /*  Call merged included template "module:smartblog/views/templates/front/comment_loop.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('module:smartblog/views/templates/front/comment_loop.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('childcommnets'=>$_smarty_tpl->tpl_vars['comment']->value), 0, '4059744095a0b0498baff35-65030622');
content_5a0b0498c8c863_50724084($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "module:smartblog/views/templates/front/comment_loop.tpl" */?>
                            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
                        <?php }?>
                    <?php } ?>
                <?php }?>
            </li>
        </div>
    </ul>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:58:32
         compiled from "/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/themes/PRS01/templates/_partials/footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a0b0498d0f100_88648894')) {function content_5a0b0498d0f100_88648894($_smarty_tpl) {?>
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
