<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 22:01:06
         compiled from "modules/otproductcomments/views/templates/hook//otproductcomments-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171094605a0b05326855f9-22785315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4419cf906836c5fd4cc0a90c2397cf3cfa476f89' => 
    array (
      0 => 'modules/otproductcomments/views/templates/hook//otproductcomments-extra.tpl',
      1 => 1510671201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171094605a0b05326855f9-22785315',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nbComments' => 0,
    'too_early' => 0,
    'logged' => 0,
    'allow_guests' => 0,
    'averageTotal' => 0,
    'ratings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0b053269ee84_87539269',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b053269ee84_87539269')) {function content_5a0b053269ee84_87539269($_smarty_tpl) {?>
<?php if ((($_smarty_tpl->tpl_vars['nbComments']->value==0&&$_smarty_tpl->tpl_vars['too_early']->value==false&&($_smarty_tpl->tpl_vars['logged']->value||$_smarty_tpl->tpl_vars['allow_guests']->value))||($_smarty_tpl->tpl_vars['nbComments']->value!=0))) {?>
    <div id="product_comments_block_extra" <?php if ($_smarty_tpl->tpl_vars['nbComments']->value!=0) {?> itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating"<?php }?>>
        <?php if ($_smarty_tpl->tpl_vars['nbComments']->value!=0) {?>
            <div class="comments_note">
                <div class="star_content clearfix">
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
                        <?php if ($_smarty_tpl->tpl_vars['averageTotal']->value<=$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']) {?>
                            <div class="star"></div>
                        <?php } else { ?>
                            <div class="star star_on"></div>
                        <?php }?>
                    <?php endfor; endif; ?>
                    <meta itemprop="worstRating" content = "0" />
                    <meta itemprop="ratingValue" content = "<?php if (isset($_smarty_tpl->tpl_vars['ratings']->value['avg'])) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(round($_smarty_tpl->tpl_vars['ratings']->value['avg'],1),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(round($_smarty_tpl->tpl_vars['averageTotal']->value,1),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>" />
                    <meta itemprop="bestRating" content = "5" />
                </div>
            </div>
        <?php }?>
        <div class="comments_advices">
            <?php if ($_smarty_tpl->tpl_vars['nbComments']->value!=0) {?>
                <a class="reviews" href="javascript:void(0);"><i class="material-icons comments" aria-hidden="true">&#xE253;</i> <?php echo smartyTranslate(array('s'=>'Read reviews','mod'=>'otproductcomments'),$_smarty_tpl);?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nbComments']->value, ENT_QUOTES, 'UTF-8');?>
)</a>
            <?php }?>
            <?php if (($_smarty_tpl->tpl_vars['too_early']->value==false&&($_smarty_tpl->tpl_vars['logged']->value||$_smarty_tpl->tpl_vars['allow_guests']->value))) {?>
                <a class="open-comment-form" href="javascript:void(0);"><i class="material-icons comments" aria-hidden="true">&#xE254;</i> <?php echo smartyTranslate(array('s'=>'Write your review','mod'=>'otproductcomments'),$_smarty_tpl);?>
</a>
            <?php }?>
        </div>
    </div>
<?php }?>
<!--  /Module ProductComments --><?php }} ?>
