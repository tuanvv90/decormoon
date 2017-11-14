{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
 
{if $comment.id_smart_blog_comment != ''}
    <ul class="commentList">
        <div id="comment-{$comment.id_smart_blog_comment}">
            <li class="even">
                <img class="avatar" alt="Avatar" src="{$link->getMediaLink($smart_module_dir)}/smartblog/views/img/avatar/avatar-author-default.jpg">
                <div class="name">{$childcommnets.name}</div>
                <div class="created">
                    <span itemprop="commentTime">{$childcommnets.created|date_format}</span>
                </div>
                <p>{$childcommnets.content}</p>
                {if Configuration::get('smartenablecomment') == 1}
                    {if $comment_status == 1}
                        <div class="reply">
                            <a onclick="return addComment.moveForm('comment-{$comment.id_smart_blog_comment}', '{$comment.id_smart_blog_comment}', 'respond', '{$smarty.get.id_post}')"  class="comment-reply-link">{l s='Reply' mod='smartblog'}</a>
                        </div>
                    {/if}
                {/if}
                {if isset($childcommnets.child_comments)}
                    {foreach from=$childcommnets.child_comments item=comment}  
                        {if isset($childcommnets.child_comments)}
                            {include file='module:smartblog/views/templates/front/comment_loop.tpl' childcommnets=$comment}
                            {$i=$i+1}
                        {/if}
                    {/foreach}
                {/if}
            </li>
        </div>
    </ul>
{/if}
