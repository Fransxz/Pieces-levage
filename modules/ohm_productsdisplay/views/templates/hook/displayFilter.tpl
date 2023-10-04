{**
 * 2007-2020 PrestaShop SA and Contributors
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
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

<div class="ohmfiltercategory">
	<button class="btn btn-primary dropdown-toggle">Filter</button>
  	<div class="dropdown-menuwrapper">
  		<p>Sub Category</p>
	    <div id="accordion">
	    	{foreach from=$data item=subcategories key=cat}
			  	<h3>{$cat}</h3>
				<div>
					{foreach from=$subcategories item=subcategory}
						<div class="form-group">
						  <div class="md-checkbox">
						    <label>
						      <input type="checkbox" data-id="{$subcategory.id_category}"/>
						      <i class="md-checkbox-control"></i>
						      {$subcategory.name}
						    </label>
						  </div>
						</div>
					{/foreach}
				</div>
	    	{/foreach}
		</div>
  	</div>
</div>
