<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 22:01:06
         compiled from "modules/otproductcomments/views/templates/hook//otproductcomments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14778727335a0b05326d9db8-55141020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb74b9c18db1d36772d1f81f2896cd1c465f9545' => 
    array (
      0 => 'modules/otproductcomments/views/templates/hook//otproductcomments.tpl',
      1 => 1510671201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14778727335a0b05326d9db8-55141020',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comments' => 0,
    'too_early' => 0,
    'logged' => 0,
    'allow_guests' => 0,
    'comment' => 0,
    'commentUsefull' => 0,
    'commentReport' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0b0532702e05_93891726',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b0532702e05_93891726')) {function content_5a0b0532702e05_93891726($_smarty_tpl) {?>
<div class="tab-pane fade" id="product-comment">
    <div id="product_comments_block_tab">
        <?php if ($_smarty_tpl->tpl_vars['comments']->value) {?>
            <?php if ((!$_smarty_tpl->tpl_vars['too_early']->value&&($_smarty_tpl->tpl_vars['logged']->value||$_smarty_tpl->tpl_vars['allow_guests']->value))) {?>
                <p class="align_center">
                    <a id="new_comment_tab_btn" class="btn btn-primary open-comment-form" href="javascript:void(0);">
                        <span><?php echo smartyTranslate(array('s'=>'Write your review!','mod'=>'otproductcomments'),$_smarty_tpl);?>
</span>
                    </a>
                </p>
            <?php }?>
            <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['comment']->value['content']) {?>
                    <div class="comment" itemprop="review" itemscope itemtype="https://schema.org/Review">
                        <div class="row">
                            <div class="comment_author col-md-3">
                                <div class="star_content clearfix"  itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["i"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['name'] = "i";
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] = is_array($_loop=5) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total']);
?>
                                        <?php if ($_smarty_tpl->tpl_vars['comment']->value['grade']<=$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']) {?>
                                            <div class="star"></div>
                                        <?php } else { ?>
                                            <div class="star star_on"></div>
                                        <?php }?>
                                    <?php endfor; endif; ?>
                                    <meta itemprop="worstRating" content = "0" />
                                    <meta itemprop="ratingValue" content = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['comment']->value['grade'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" />
                                    <meta itemprop="bestRating" content = "5" />
                                </div>
                                <div class="comment_author_infos">
                                    <strong itemprop="author"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['comment']->value['customer_name'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</strong>
                                    <meta itemprop="datePublished" content="<?php echo htmlspecialchars(substr($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['comment']->value['date_add'],'html','UTF-8'),0,10), ENT_QUOTES, 'UTF-8');?>
" />
                                    <em><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['comment']->value['date_add'],'html','UTF-8'),'full'=>0),$_smarty_tpl);?>
</em>
                                </div>
                            </div> <!-- .comment_author -->
                            <div class="comment_details col-md-9">
                                <p itemprop="name" class="title_block">
                                    <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['title'], ENT_QUOTES, 'UTF-8');?>
</strong>
                                </p>
                                <p itemprop="reviewBody"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['content'], ENT_QUOTES, 'UTF-8');?>
</p>
                                <ul>
                                    <?php if ($_smarty_tpl->tpl_vars['comment']->value['total_advice']>0) {?>
                                        <li class="comment_helpful">
                                            <?php echo smartyTranslate(array('s'=>'%1$d out of %2$d people found this review useful.','sprintf'=>array($_smarty_tpl->tpl_vars['comment']->value['total_useful'],$_smarty_tpl->tpl_vars['comment']->value['total_advice']),'mod'=>'otproductcomments'),$_smarty_tpl);?>

                                        </li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
                                        <?php if (!$_smarty_tpl->tpl_vars['comment']->value['customer_advice']&&$_smarty_tpl->tpl_vars['commentUsefull']->value) {?>
                                            <li>
                                                <div class="comment_helpful">
                                                    <?php echo smartyTranslate(array('s'=>'Was this comment useful to you?','mod'=>'otproductcomments'),$_smarty_tpl);?>

                                                    <button class="usefulness_btn btn btn-default usefull" data-is-usefull="1" data-id-product-comment="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['id_product_comment'], ENT_QUOTES, 'UTF-8');?>
">
                                                        <span><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'otproductcomments'),$_smarty_tpl);?>
</span>
                                                    </button>
                                                    <button class="usefulness_btn btn btn-default notusefull" data-is-usefull="0" data-id-product-comment="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['id_product_comment'], ENT_QUOTES, 'UTF-8');?>
">
                                                        <span><?php echo smartyTranslate(array('s'=>'No','mod'=>'otproductcomments'),$_smarty_tpl);?>
</span>
                                                    </button>
                                                </div>
                                            </li>
                                        <?php }?>
                                        <?php if (!$_smarty_tpl->tpl_vars['comment']->value['customer_report']&&$_smarty_tpl->tpl_vars['commentReport']->value) {?>
                                            <li>
                                                <span class="report_btn" data-id-product-comment="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['id_product_comment'], ENT_QUOTES, 'UTF-8');?>
">
                                                    <?php echo smartyTranslate(array('s'=>'Report abuse','mod'=>'otproductcomments'),$_smarty_tpl);?>

                                                </span>
                                            </li>
                                        <?php }?>
                                    <?php }?>
                                </ul>
                            </div><!-- .comment_details -->
                        </div>
                    </div> <!-- .comment -->
                <?php }?>
            <?php } ?>
        <?php } else { ?>
            <?php if ((!$_smarty_tpl->tpl_vars['too_early']->value&&($_smarty_tpl->tpl_vars['logged']->value||$_smarty_tpl->tpl_vars['allow_guests']->value))) {?>
                <p class="align_center">
                    <a id="new_comment_tab_btn" class="btn btn-primary open-comment-form" href="javascript:void(0);">
                        <span><?php echo smartyTranslate(array('s'=>'Be the first to write your review!','mod'=>'otproductcomments'),$_smarty_tpl);?>
</span>
                    </a>
                </p>
            <?php } else { ?>
                <p class="align_center"><?php echo smartyTranslate(array('s'=>'No customer reviews for the moment.','mod'=>'otproductcomments'),$_smarty_tpl);?>
</p>
            <?php }?>
        <?php }?>
    </div> <!-- #product_comments_block_tab -->
</div>
<?php }} ?>
