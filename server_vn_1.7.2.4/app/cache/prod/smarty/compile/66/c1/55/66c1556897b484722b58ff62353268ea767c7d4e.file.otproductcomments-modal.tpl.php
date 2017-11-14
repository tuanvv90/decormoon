<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 22:01:06
         compiled from "modules/otproductcomments/views/templates/hook//otproductcomments-modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9289153705a0b0532737b84-61957426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66c1556897b484722b58ff62353268ea767c7d4e' => 
    array (
      0 => 'modules/otproductcomments/views/templates/hook//otproductcomments-modal.tpl',
      1 => 1510671201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9289153705a0b0532737b84-61957426',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comment_product' => 0,
    'productcomment_cover_image' => 0,
    'criterions' => 0,
    'criterion' => 0,
    'allow_guests' => 0,
    'logged' => 0,
    'id_product_comment_form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0b05327512f4_15649488',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b05327512f4_15649488')) {function content_5a0b05327512f4_15649488($_smarty_tpl) {?>

<div id="otcomment-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h2 class="modal-title">
                    <?php echo smartyTranslate(array('s'=>'Write a review','mod'=>'otproductcomments'),$_smarty_tpl);?>

                </h2>
            </div>
            <div class="modal-body">
                <div class="row">
                    <?php if (isset($_smarty_tpl->tpl_vars['comment_product']->value)&&$_smarty_tpl->tpl_vars['comment_product']->value) {?>
                        <div class="product clearfix col-xs-12 col-sm-6">
                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productcomment_cover_image']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['comment_product']->value->name,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" />
                            <div class="product_desc">
                                <p class="product_name">
                                    <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment_product']->value->name, ENT_QUOTES, 'UTF-8');?>
</strong>
                                </p>
                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['comment_product']->value->description_short,'html','UTF-8');?>

                            </div>
                        </div>
                    <?php }?>
                    <div class="new_comment_form_content col-xs-12 col-sm-6">
                        <form id="id_new_comment_form" action="#">
                            <?php if (count($_smarty_tpl->tpl_vars['criterions']->value)>0) {?>
                                <ul id="criterions_list">
                                    <?php  $_smarty_tpl->tpl_vars['criterion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['criterion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['criterions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['criterion']->key => $_smarty_tpl->tpl_vars['criterion']->value) {
$_smarty_tpl->tpl_vars['criterion']->_loop = true;
?>
                                        <li>
                                            <label><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['criterion']->value['name'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
:</label>
                                            <div class="star_content">
                                                <input class="star" type="radio" name="criterion[<?php echo htmlspecialchars(round($_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion']), ENT_QUOTES, 'UTF-8');?>
]" value="1" />
                                                <input class="star" type="radio" name="criterion[<?php echo htmlspecialchars(round($_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion']), ENT_QUOTES, 'UTF-8');?>
]" value="2" />
                                                <input class="star" type="radio" name="criterion[<?php echo htmlspecialchars(round($_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion']), ENT_QUOTES, 'UTF-8');?>
]" value="3" />
                                                <input class="star" type="radio" name="criterion[<?php echo htmlspecialchars(round($_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion']), ENT_QUOTES, 'UTF-8');?>
]" value="4" />
                                                <input class="star" type="radio" name="criterion[<?php echo htmlspecialchars(round($_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion']), ENT_QUOTES, 'UTF-8');?>
]" value="5" checked="checked" />
                                            </div>
                                            <div class="clearfix"></div>
                                        </li>
                                    <?php } ?>
                                </ul>
                            <?php }?>
                            <div class="form-group">
                                <label class="form-control-label" for="comment_title">
                                    <?php echo smartyTranslate(array('s'=>'Title:','mod'=>'otproductcomments'),$_smarty_tpl);?>
 <sup class="required">*</sup>
                                </label>
                                <input class="form-control" id="comment_title" name="title" type="text" value=""/>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="content">
                                    <?php echo smartyTranslate(array('s'=>'Comment:','mod'=>'otproductcomments'),$_smarty_tpl);?>
 <sup class="required">*</sup>
                                </label>
                                <textarea class="form-control" id="content" name="content" type="text"></textarea>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['allow_guests']->value==true&&!$_smarty_tpl->tpl_vars['logged']->value) {?>
                                <div class="form-group">
                                    <label class="form-control-label" for="customer_name">
                                        <?php echo smartyTranslate(array('s'=>'Your name:','mod'=>'otproductcomments'),$_smarty_tpl);?>
 <sup class="required">*</sup>
                                    </label>
                                    <input class="form-control" id="commentCustomerName" name="customer_name" type="text" value=""/>
                                </div>
                            <?php }?>
                            <div class="form-group">
                                <label class="form-control-label">
                                    <sup class="required">*</sup> <?php echo smartyTranslate(array('s'=>'Required fields','mod'=>'otproductcomments'),$_smarty_tpl);?>

                                </label>
                                <input id="id_product_comment_send" name="id_product" type="hidden" value='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_product_comment_form']->value, ENT_QUOTES, 'UTF-8');?>
' />
                            </div>
                        </form>
                        <div id="new_comment_form_error" class="error" style="display: none; padding: 15px 0px">
                            <ul></ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo smartyTranslate(array('s'=>'Close','mod'=>'otproductcomments'),$_smarty_tpl);?>
</button>
                <button id="submitNewMessage" name="submitMessage" type="submit" class="btn btn-primary">
                    <span><?php echo smartyTranslate(array('s'=>'Submit','mod'=>'otproductcomments'),$_smarty_tpl);?>
</span>
                </button>
            </div>
        </div>
    </div>
</div>
<?php }} ?>
