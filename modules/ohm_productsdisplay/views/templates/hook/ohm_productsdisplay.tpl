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

<section id="ohm-productsdisplay-wrapper">
    <h2 class="h2 products-section-title text-uppercase">{l s='NOS PRODUITS' d='Shop.Theme.Catalog'}</h2>
    <p>{l s='TP, MANUTENTION, LEVAGE...' d='Shop.Theme.Catalog'}</p>
    <div class="products-wrapper">
        {if $products}
            {foreach from=$products item="outer_product"}
                {foreach from=$outer_product item="product"}
                    <div class="ohmdisplayproducts-wrapper">
                        <a href="{$product.link}">
                            <h3>{$product.name}</h3>
                            <img src="{Context::getContext()->link->getImageLink($product.link_rewrite, $product.cover_image_id, '')}" alt="{$product.name}" class="img-responsive">
                        </a>
                        <div class="wrppr">
                            <a href="#">{l s='Bakker hydraulic' mod='ohm_productsdisplay'}</a>
                            <a href="#">{l s='Bennes de reprise' mod='ohm_productsdisplay'}</a>
                            <a href="#">{l s='Multi-usages' mod='ohm_productsdisplay'}</a>
                            <a href="{$product.link}" class="voir-diplayproducts">
                                <i class="material-icons add_circle" aria-hidden="true">add_circle</i>
                                <span>{l s='Voir' mod='ohm_productsdisplay'}</span>
                            </a>
                        </div>
                    </div>
                {/foreach}
            {/foreach}
        {/if}
    </div>
</section>
