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

<section class="otbestseller-products">
  <h3 class="tab-title">{l s='Best Sellers' mod='ot_bestsellers'}</h3>
	  <div class="otbestseller-content products row">
		{foreach from=$products item="product"}
				{include file="catalog/_partials/miniatures/product.tpl" product=$product}
        {/foreach}
	  </div>
	  
		{if $ot_total > 4}
		<div class="customNavigation">
		<a class="btn prev otbestseller_prev">{l s='Prev' mod='ot_bestsellers'}</a>
		<a class="btn next otbestseller_next">{l s='Next' mod='ot_bestsellers'}</a>
		</div>
		{/if}

	   <!-- Left and right controls -->
   <div class="allproduct"><a href="{$allBestSellers}">{l s='All best sellers' mod='ot_bestsellers'}</a></div>
</section>
