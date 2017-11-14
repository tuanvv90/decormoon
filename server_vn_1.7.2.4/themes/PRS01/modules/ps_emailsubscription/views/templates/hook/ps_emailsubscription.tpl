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
<div class="block_newsletter links col-lg-7 col-md-7 col-sm-7">
  <div class="ot-content col-sm-4">
    	<h1 class="ot-title">{l s='newsletter'}</h1>
		<div class="col-xs-12 ot-newdesc">
              {if $conditions}
				<p id="block-newsletter-label" class="newsletter-desc">{$conditions}</p>
              {/if}
          </div>
	</div>	
	<div  class="title clearfix hidden-md-up" data-toggle="collapse" data-target="#otnewsletter">
  	<span class="h3">{l s='Newsletter'}</span>
	 <span class="float-xs-right">
          <span class="navbar-toggler collapse-icons">
            <i class="material-icons add">&#xE313;</i>
            <i class="material-icons remove">&#xE316;</i>
          </span>
	</span>
  </div>
    		
	<div id="otnewsletter" class="ot-des collapse col-sm-8">
	
		 <div class="block_content">
		<form action="{$urls.pages.index}#footer" method="post">
        <div class="row">
          <div class="otinput_newsletter">
            <input
              class="btn btn-primary float-xs-right hidden-xs-down"
              name="submitNewsletter"
              type="submit"
              value="{l s='Subscribe' d='Shop.Theme.Actions'}"
            >
            <input
              class="btn btn-primary float-xs-right hidden-sm-up"
              name="submitNewsletter"
              type="submit"
              value="{l s='OK' d='Shop.Theme.Actions'}"
            >
            <div class="input-wrapper">
              <input
                name="email"
                type="text"
                value="{$value}"
                placeholder="{l s='Your email address' d='Shop.Forms.Labels'}"
              >
            </div>
            <input type="hidden" name="action" value="0">
            <div class="clearfix"></div>
          </div>
          
        </div>
      </form>
	</div>
	
	<div class="col-xs-12 msg">  
	  			{if $msg}
                <p class="alert {if $nw_error}alert-danger{else}alert-success{/if}">
                  {$msg}
                </p>
              {/if}   
    </div>
      </div>
   
</div>

