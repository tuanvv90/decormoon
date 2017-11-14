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

<section class="otspecial-products clearfix">
<div class="container">
  <h3 class="ot-title">{l s='Special Product' mod='ot_specials'}</h3>
  <div class="otspecial-list">
  <div class="row">
  <div class="products">
    {foreach from=$products item="product"}	
      {include file="catalog/_partials/miniatures/product.tpl" product=$product}
    {/foreach}
  </div>
  </div>
  </div>
  
    {if $ot_total > 2}
		<div class="customNavigation">
		<a class="btn prev otspecial_prev">{l s='Prev' mod='ot_specials'}</a>
		<a class="btn next otspecial_next">{l s='Next' mod='ot_specials'}</a>
		</div>
  {/if}

   <div class="allproduct"><a href="{$allSpecialProductsLink}">{l s='All sale products' mod='ot_specials'}</a></div>
</div>
</section>
