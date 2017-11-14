{*
*  @author    TemplateTrip
*  @copyright 2015-2017 TemplateTrip. All Rights Reserved.
*  @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*}

{if isset($wishlists) && count($wishlists) > 1}
    <div class="wishlist">
        {foreach name=wl from=$wishlists item=wishlist}
            {if $smarty.foreach.wl.first} 
                <a class="wishlist_button_list btn btn-primary" tabindex="0" data-toggle="popover" data-trigger="focus" title="{l s='Wishlist' mod='otproductwishlist'}" title="{l s='Add to wishlist' mod='otproductwishlist'}" data-placement="bottom"><span>{l s='Add to wishlist' mod='otproductwishlist'}</span></a> 
                <div hidden class="popover-content">
                    <div class="cluetipblock">
            {/if}
                            <a title="{$wishlist.name|escape:'html':'UTF-8'}"  data-dismiss="modal"  value="{$wishlist.id_wishlist}" onclick="WishlistCart('wishlist_block_list', 'add', '{$product.id_product|intval}', '{$product.id_product_attribute|intval}', 1, '{$wishlist.id_wishlist}');">
                                <span>
                                    {l s='Add to %s' sprintf=[$wishlist.name] mod='otproductwishlist'}
                                </span>
                            </a>
            {if $smarty.foreach.wl.last}
                    </div>
                </div>
            {/if}
        {foreachelse}
            <a href="#" id="wishlist_button_nopop"  data-dismiss="modal"  onclick="WishlistCart('wishlist_block_list', 'add', '{$id_product|intval}', $('#idCombination').val(), document.getElementById('quantity_wanted').value); return false;" data-rel="nofollow"  title="{l s='Add to wishlist' mod='otproductwishlist'}" class="btn btn-primary">
                <span>{l s='Add to wishlist' mod='otproductwishlist'}  </span>
            </a>
        {/foreach}
    </div>
{else}
    <div class="wishlist">
        <a class="addToWishlist btn btn-primary wishlistProd_{$product.id_product|intval}" href="#"  data-dismiss="modal" data-rel="{$product.id_product|intval}" title="{l s='Add to wishlist' mod='otproductwishlist'}" onclick="WishlistCart('wishlist_block_list', 'add', '{$product.id_product|intval}', '{$product.id_product_attribute|intval}', 1); return false;">
            <span>{l s='Add to Wishlist' mod='otproductwishlist'}</span>
        </a>
    </div>
{/if}