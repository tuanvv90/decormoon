{*
* 2007-2016 PrestaShop
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
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
 {assign var="ot_cnt" value="1"}
{assign var="ot_total" value="0"}
{foreach from=$products item="product"}
	{$ot_total = $ot_total+1}
{/foreach}

<section class="featured-products clearfix mt-3">
  <h1 class="ot-title">{l s='Our Products' d='Modules.Featuredproducts.Shop'}</h1>

  <div class="products">
    {foreach from=$products item="product"}
      {include file="catalog/_partials/miniatures/product.tpl" product=$product}
    {/foreach}
  </div>
      {if $ot_total > 4}
		<div class="customNavigation">
			<a class="btn prev featuredproduct_prev">{l s='Prev' d='Modules.Featuredproducts.Shop'}</a>
			<a class="btn next featuredproduct_next">{l s='Next' d='Modules.Featuredproducts.Shop'}</a>
		</div>
	{/if}

  <a href="{$allProductsLink}">{l s='All products' d='Modules.Featuredproducts.Shop'}</a>
</section>
