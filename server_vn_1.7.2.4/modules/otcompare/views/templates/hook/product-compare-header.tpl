{*
*  @author    Onthemes
*  @copyright 2015-2017 Onthemes. All Rights Reserved.
*  @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*}
{if $comparator_max_item}
	<li>
		<a class="bt_compare" href="{$compareUrl}" title="{l s='Compare' mod='otcompare'}" rel="nofollow">
			<span>{l s='Compare' mod='otcompare'} (<span class="total-compare-val">{count($compared_products)}</span>)</span>
		</a>
		<input type="hidden" name="compare_product_count" class="compare_product_count" value="{count($compared_products)}" />
	</li>
{/if}