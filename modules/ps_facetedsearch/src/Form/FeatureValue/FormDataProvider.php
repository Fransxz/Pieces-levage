<?php
/**
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */

namespace PrestaShop\Module\FacetedSearch\Form\FeatureValue;

use Db;

/**
 * Provides form data
 */
class FormDataProvider
{
    /**
     * @var Db
     */
    private $database;

    public function __construct(Db $database)
    {
        $this->database = $database;
    }

    /**
     * Fills form data
     *
     * @param array $params
     *
     * @return array
     */
    public function getData(array $params)
    {
        $defaultUrl = [];
        $defaultMetaTitle = [];

        // if params contains id, gets data for edit form
        if (!empty($params['id'])) {
            $featureValueId = (int) $params['id'];

            $result = $this->database->executeS(
                'SELECT `url_name`, `meta_title`, `id_lang` ' .
                'FROM ' . _DB_PREFIX_ . 'layered_indexable_feature_value_lang_value ' .
                'WHERE `id_feature_value` = ' . $featureValueId
            );

            if (!empty($result) && is_array($result)) {
                foreach ($result as $data) {
                    $defaultUrl[$data['id_lang']] = $data['url_name'];
                    $defaultMetaTitle[$data['id_lang']] = $data['meta_title'];
                }
            }
        }

        return [
            'url' => $defaultUrl,
            'meta_title' => $defaultMetaTitle,
        ];
    }
}
