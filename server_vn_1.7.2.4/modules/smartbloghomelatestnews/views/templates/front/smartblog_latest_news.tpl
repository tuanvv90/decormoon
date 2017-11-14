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

{assign var="ot_cnt" value="1"}
{assign var="ot_total" value="0"}
 {foreach from=$view_data item=post}
	{$ot_total = $ot_total+1}
{/foreach}


<div id="smartblog_block" class="block products_block  clearfix">
    <div class="products_block_inner container">
        {if isset($smartshowhometitle) && $smartshowhometitle}
            <h2 class="homepage-heading">
                <a href="{smartblog::GetSmartBlogLink('smartblog')}" class="ot-title">{l s='Latest News' mod='smartbloghomelatestnews'}</a>
            </h2>
        {/if}
        <div class="sdsblog-box-content block_content row">
            {if isset($view_data) AND !empty($view_data)}
                {assign var='i' value=1}
                <div id="smartblog-carousel" class="owl-carousel product_list">
                    {foreach from=$view_data item=post}
                        {assign var="options" value=null}
                        {$options.id_post = $post.id}
                        {$options.slug = $post.link_rewrite}
                        <div class="item sds_blog_post">
                            <div class="blog_post">
                                <span class="news_module_image_holder">
                                    <a href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}">
                                        <img alt="{$post.title}" class="feat_img_small" src="{$link->getMediaLink($smart_module_dir)}/smartblog/views/img/{$post.post_img}-home-default.jpg">
                                        <span class="blog-hover"></span>
                                    </a>
                                    <span class="blog_date">
                                        <span class="day_date">{$post.date_added|date_format:"%e"}</span> 
                                        <span class="date_inner">
                                            <span class="day_month">{$post.date_added|date_format:"%b"}</span>
                                        </span>
                                    </span>
                                    <span class="blogicons">
                                        <a title="Click to view Full Image" href="{$link->getMediaLink($smart_module_dir)}/smartblog/views/img/{$post.post_img}-single-default.jpg" data-lightbox="example-set" class="icon zoom">&nbsp;</a> 
                                    </span>
                                </span>
                                <div class="blog_content">
                                    <div class="blog_inner">
                                        <h4 class="sds_post_title"><a href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}">{$post.title|escape:'htmlall':'UTF-8'|truncate:25:'...'}</a></h4>
                                        <p class="desc">
                                            {$post.short_description|escape:'htmlall':'UTF-8'|truncate:110:'...'}
                                        </p>
										<div class="read_more">
											<a title="Click to view Read More" href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}" class="icon readmore">read more</a>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {$i=$i+1}
                    {/foreach}
                </div>
            {/if}
        </div>
		{if $ot_total > 4}
	<div class="customNavigation">
		<a class="btn prev otblog_prev">{l s='Prev' mod='smartbloghomelatestnews'}</a>
		<a class="btn next otblog_next">{l s='Next' mod='smartbloghomelatestnews'}</a>
	</div>
	{/if}
    </div>
</div>