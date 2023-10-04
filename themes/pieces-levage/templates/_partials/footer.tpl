{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
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
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}

<div class="container-fluid">
    <div class="row partners-quality-wrapper">
        <div class="col-lg-12">
            <h2 class="h2-orange">{l s="PARTENAIRES DE QUALITÉ" d='Shop.Theme.Global'}</h2>
            <h3 class="h-sub-black">{l s="NOS CONTRUCTEURS" d='Shop.Theme.Global'}</h3>
            <div class="footer-partners-wrapper">
                <div>
                    <a href="https://pl.checkmy.dev/brand/9-bakker-hydraulic">
                        <img src="{_THEME_IMG_DIR_}bakker-hydraulics.jpg" class="img-responsive" alt="Bakker hydraulics">
                    </a>
                    <a href="https://pl.checkmy.dev/brand/14-brigade-electronics">
                        <img src="{_THEME_IMG_DIR_}Brigade-electronics.png" class="img-responsive" alt="Brigade-electronics">
                    </a>
                    <a href="https://pl.checkmy.dev/brand/3-palfinger">
                        <img src="{_THEME_IMG_DIR_}Magsi-logo.png" class="img-responsive" alt="Magsi" style="height: 140px;">
                    </a>
                    <a href="#">
                        <img src="{_THEME_IMG_DIR_}lodax-logo.jpeg" class="_reduce_height img-responsive" alt="lodax-logo">
                    </a>
                    <a href="#">
                        <img src="{_THEME_IMG_DIR_}Danfoss_Logo.png" class="img-responsive _reduce_width" alt="Danfoss_Logo">
                    </a>
                    <a href="#">
                        <img src="{_THEME_IMG_DIR_}logo-HULTDINs.jpeg" class="_reduce_height img-responsive" alt="logo-HULTDINs">
                    </a>
                    <a href="#">
                        <img src="{_THEME_IMG_DIR_}indexator-logo.png" class="img-responsive" alt="indexator-logo" style="width: 250px;">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="{_THEME_IMG_DIR_}Logo-GB.jpg" class="img-responsive" alt="Logo-GB" style="width: 250px;">
                    </a>
                    <a href="#">
                        <img src="{_THEME_IMG_DIR_}logo-formiko-hydraulics.png" class="img-responsive _reduce_width" alt="logo-formiko-hydraulics">
                    </a>
                    <a href="https://pl.checkmy.dev/brand/6-parker">
                        <img src="{_THEME_IMG_DIR_}Parker.png" class="img-responsive _reduce_width" alt="Parker">
                    </a>
                    <a href="#">
                        <img src="{_THEME_IMG_DIR_}Scanreco-logo.webp" class="img-responsive _reduce_width" alt="Scanreco-logo">
                    </a>
                    <a href="#">
                        <img src="{_THEME_IMG_DIR_}Dalmasso.png" class="_reduce_height img-responsive" alt="Dalmasso">
                    </a>
                    <a href="#">
                        <img src="{_THEME_IMG_DIR_}TMK-Machinery.jpg" class="_reduce_height img-responsive" alt="TMK Machinery profile">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        {block name='hook_footer_before'}
            {hook h='displayFooterBefore'}
        {/block}
    </div>
</div>

<div class="footer-container">
    <div class="container-fluid">
        <div class="row">
            {hook h='displayContactInfo'}
            <div class="col-md-3 wrapper">
                <p class="h3 hidden-sm-down">SERVICE CLIENT</p>
                <div class="title clearfix hidden-md-up" data-target="#footer_sub_menu_service_client" data-toggle="collapse">
                    <span class="h3">SERVICE CLIENT</span>
                    <span class="float-xs-right">
                        <span class="navbar-toggler collapse-icons">
                            <i class="material-icons add">&#xE313;</i>
                            <i class="material-icons remove">&#xE316;</i>
                        </span>
                    </span>
                </div>
                <ul id="footer_sub_menu_service_client" >
                    <li>
                        <a href="mailto:contact@pieceslevage.com">Commandes</a>
                    </li>
                    <li>
                        <a href="mailto:contact@pieceslevage.com">Service Expeditions</a>
                    </li>
                    <li>
                        <a href="mailto:contact@pieceslevage.com">Questions</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-3 wrapper">
                <p class="h3 hidden-sm-down">LA SOCIÉTÉ</p>
                <div class="title clearfix hidden-md-up" data-target="#footer_sub_menu_la_society" data-toggle="collapse">
                    <span class="h3">LA SOCIÉTÉ</span>
                    <span class="float-xs-right">
                        <span class="navbar-toggler collapse-icons">
                            <i class="material-icons add">&#xE313;</i>
                            <i class="material-icons remove">&#xE316;</i>
                        </span>
                    </span>
                </div>
                <ul id="footer_sub_menu_la_society" >
                    <li>
                        <a href="mailto:contact@pieceslevage.com">à propos de nous</a>
                    </li>
                    <li>
                        <a href="mailto:contact@pieceslevage.com">Nos CGV</a>
                    </li>
                    <li>
                        <a href="mailto:contact@pieceslevage.com">Politique de confidentialité</a>
                    </li>
                </ul>
            </div>            
        </div>
        <div class="row">
            {block name='hook_footer_after'}
                {hook h='displayFooterAfter'}
            {/block}
        </div>
    </div>
</div>

<div class="row">
  <div class="col-md-12">
    <p class="text-sm-center">
      {block name='copyright_link'}
        {l s="« Votre spécialiste en pièces et accessoires de levage, secteur forestier, BTP et bien plus encore. »" d='Shop.Theme.Global'}
      {/block}
    </p>
  </div>
</div>
