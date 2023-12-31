<?php

/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */

declare(strict_types=1);

namespace PrestaShop\Module\PsEditionBasic\Traits\Hooks;

trait UseDisplayBackOfficeHeader
{
    public function hookDisplayBackOfficeHeader(): string
    {
        $this->addAdminThemeMedia();

        $scriptUrl = $this->getParameter('ps_edition_basic.edition_basic_homepage_js');

        return <<<END
            <script>
                window.userLocale  = '{$this->context->language->iso_code}';
                window.userflow_id = '{$this->userflow_id}';
            </script>
            <script type="module" src="{$scriptUrl}"></script>
        END;
    }
}
