{*
* 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2017 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}


{assign var="ot_cnt" value="1"}
{assign var="ot_total" value="0"}
{foreach from=$products item="product"}
	{$ot_total = $ot_total+1}
{/foreach}

<section class="otnew-products clearfix">
  <h3 class="tab-title">{l s='New products' mod='ot_newproducts'}</h3>
  <div class="otnew-content products row">
    {foreach from=$products item="product"}
		  {if $ot_total > 8}
				<!-- Start OnTheme 2 product slide code -->
				{if $ot_cnt % 2 != 0}
				<ul>
					<li class="newli">
						<ul>
						<li>
				{/if}
			{/if}
				<!-- End OnTheme 2 product slide code -->

				{include file="catalog/_partials/miniatures/product.tpl" product=$product}

				<!-- Start OnTheme 2 product slide code -->
			{if $ot_total > 8}
				{if $ot_cnt % 2 == 0}
						</li>
						</ul>
					</li>
				</ul>
				{/if}
				{/if}

				{$ot_cnt = $ot_cnt+1}
				<!-- End OnTheme 2 product slide code -->
        {/foreach}
		{if $ot_total > 8}
			{if $ot_cnt % 2 == 0}
					</li>
					</ul>
				</li>
			</ul>
			{/if}
		{/if}
  </div>
  
  	{if $ot_total > 4} 
	<div class="customNavigation">
	<a class="btn prev otnew_prev">{l s='Prev' mod='ot_newproducts'}</a>
	<a class="btn next otnew_next">{l s='Next' mod='ot_newproducts'}</a>
	</div>
 {/if}

  <div class="allproduct"><a href="{$allNewProductsLink}">{l s='All new products' mod='ot_newproducts'}</a></div>
</section>

