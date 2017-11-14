<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 21:55:40
         compiled from "modules/smartbloghomelatestnews/views/templates/front/smartblog_latest_news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12984670635a0b03ec746d60-86805049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81a6f661a9240967ca3cab47b68eac0b96f3b9e0' => 
    array (
      0 => 'modules/smartbloghomelatestnews/views/templates/front/smartblog_latest_news.tpl',
      1 => 1510671201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12984670635a0b03ec746d60-86805049',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view_data' => 0,
    'ot_total' => 0,
    'smartshowhometitle' => 0,
    'post' => 0,
    'options' => 0,
    'smart_module_dir' => 0,
    'link' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0b03ec76d900_36619021',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b03ec76d900_36619021')) {function content_5a0b03ec76d900_36619021($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/vendor/prestashop/smarty/plugins/modifier.date_format.php';
?>

<?php $_smarty_tpl->tpl_vars["ot_cnt"] = new Smarty_variable("1", null, 0);?>
<?php $_smarty_tpl->tpl_vars["ot_total"] = new Smarty_variable("0", null, 0);?>
 <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['view_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
	<?php $_smarty_tpl->tpl_vars['ot_total'] = new Smarty_variable($_smarty_tpl->tpl_vars['ot_total']->value+1, null, 0);?>
<?php } ?>


<div id="smartblog_block" class="block products_block  clearfix">
    <div class="products_block_inner container">
        <?php if (isset($_smarty_tpl->tpl_vars['smartshowhometitle']->value)&&$_smarty_tpl->tpl_vars['smartshowhometitle']->value) {?>
            <h2 class="homepage-heading">
                <a href="<?php echo htmlspecialchars(smartblog::GetSmartBlogLink('smartblog'), ENT_QUOTES, 'UTF-8');?>
" class="ot-title"><?php echo smartyTranslate(array('s'=>'Latest News','mod'=>'smartbloghomelatestnews'),$_smarty_tpl);?>
</a>
            </h2>
        <?php }?>
        <div class="sdsblog-box-content block_content row">
            <?php if (isset($_smarty_tpl->tpl_vars['view_data']->value)&&!empty($_smarty_tpl->tpl_vars['view_data']->value)) {?>
                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
                <div id="smartblog-carousel" class="owl-carousel product_list">
                    <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['view_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
                        <?php $_smarty_tpl->tpl_vars["options"] = new Smarty_variable(null, null, 0);?>
                        <?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['id_post'] = $_smarty_tpl->tpl_vars['post']->value['id'];?>
                        <?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['slug'] = $_smarty_tpl->tpl_vars['post']->value['link_rewrite'];?>
                        <div class="item sds_blog_post">
                            <div class="blog_post">
                                <span class="news_module_image_holder">
                                    <a href="<?php echo htmlspecialchars(smartblog::GetSmartBlogLink('smartblog_post',$_smarty_tpl->tpl_vars['options']->value), ENT_QUOTES, 'UTF-8');?>
">
                                        <img alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8');?>
" class="feat_img_small" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getMediaLink($_smarty_tpl->tpl_vars['smart_module_dir']->value), ENT_QUOTES, 'UTF-8');?>
/smartblog/views/img/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['post_img'], ENT_QUOTES, 'UTF-8');?>
-home-default.jpg">
                                        <span class="blog-hover"></span>
                                    </a>
                                    <span class="blog_date">
                                        <span class="day_date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['date_added'],"%e"), ENT_QUOTES, 'UTF-8');?>
</span> 
                                        <span class="date_inner">
                                            <span class="day_month"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['date_added'],"%b"), ENT_QUOTES, 'UTF-8');?>
</span>
                                        </span>
                                    </span>
                                    <span class="blogicons">
                                        <a title="Click to view Full Image" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getMediaLink($_smarty_tpl->tpl_vars['smart_module_dir']->value), ENT_QUOTES, 'UTF-8');?>
/smartblog/views/img/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['post_img'], ENT_QUOTES, 'UTF-8');?>
-single-default.jpg" data-lightbox="example-set" class="icon zoom">&nbsp;</a> 
                                    </span>
                                </span>
                                <div class="blog_content">
                                    <div class="blog_inner">
                                        <h4 class="sds_post_title"><a href="<?php echo htmlspecialchars(smartblog::GetSmartBlogLink('smartblog_post',$_smarty_tpl->tpl_vars['options']->value), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['post']->value['title'],'htmlall','UTF-8'),25,'...'), ENT_QUOTES, 'UTF-8');?>
</a></h4>
                                        <p class="desc">
                                            <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['post']->value['short_description'],'htmlall','UTF-8'),110,'...'), ENT_QUOTES, 'UTF-8');?>

                                        </p>
										<div class="read_more">
											<a title="Click to view Read More" href="<?php echo htmlspecialchars(smartblog::GetSmartBlogLink('smartblog_post',$_smarty_tpl->tpl_vars['options']->value), ENT_QUOTES, 'UTF-8');?>
" class="icon readmore">read more</a>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
                    <?php } ?>
                </div>
            <?php }?>
        </div>
		<?php if ($_smarty_tpl->tpl_vars['ot_total']->value>4) {?>
	<div class="customNavigation">
		<a class="btn prev otblog_prev"><?php echo smartyTranslate(array('s'=>'Prev','mod'=>'smartbloghomelatestnews'),$_smarty_tpl);?>
</a>
		<a class="btn next otblog_next"><?php echo smartyTranslate(array('s'=>'Next','mod'=>'smartbloghomelatestnews'),$_smarty_tpl);?>
</a>
	</div>
	<?php }?>
    </div>
</div><?php }} ?>
