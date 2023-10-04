<?php
/**
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
 * @author    OHM
 * @copyright 2007-2023 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */
if (!defined('_PS_VERSION_')) {
    exit;
}

use PrestaShop\PrestaShop\Adapter\Category\CategoryProductSearchProvider;
use PrestaShop\PrestaShop\Core\Module\WidgetInterface;
use PrestaShop\PrestaShop\Core\Product\Search\ProductSearchContext;
use PrestaShop\PrestaShop\Core\Product\Search\ProductSearchQuery;
use PrestaShop\PrestaShop\Core\Product\Search\SortOrder;

class Ohm_ProductsDisplay extends Module implements WidgetInterface
{
    private $templateFile;

    public function __construct()
    {
        $this->name = 'ohm_productsdisplay';
        $this->author = 'Francisco Dagamac';
        $this->version = '1.0.1';
        $this->need_instance = 0;

        $this->ps_versions_compliancy = [
            'min' => '1.7.1.0',
            'max' => _PS_VERSION_,
        ];

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->l('OHM Products Display');
        $this->description = $this->l('Pick a categories and highlight its items, enhance customer experience with a lively homepage.');

        $this->templateFile = 'module:ohm_productsdisplay/views/templates/hook/ohm_productsdisplay.tpl';
    }

    public function install()
    {
        $this->_clearCache('*');

        Configuration::updateValue('OHM_PRODUCTS_NBR', 8);
        Configuration::updateValue('OHM_SELECTED_CATEGORIES', (int) Context::getContext()->shop->getCategory());

        return parent::install()
            && $this->registerHook('displayBackOfficeHeader')
            && $this->registerHook('actionProductAdd')
            && $this->registerHook('actionProductUpdate')
            && $this->registerHook('actionProductDelete')
            && $this->registerHook('displayCategoryFilter')
            && $this->registerHook('displayCategoryCustom')
            && $this->registerHook('displayHome')
            && $this->registerHook('actionCategoryUpdate')
            && $this->registerHook('actionAdminGroupsControllerSaveAfter')
        ;
    }

    public function uninstall()
    {
        $this->_clearCache('*');

        return parent::uninstall();
    }

    public function hookDisplayBackOfficeHeader($params)
    {
        if (Tools::getValue('configure') == $this->name) {
            $protocol = Configuration::get('PS_SSL_ENABLED') ? Tools::getHttpHost(true) : _PS_BASE_URL_;
            $this->context->controller->addCSS($this->_path.'views/css/ohm_admin.css', 'all');
            $this->context->controller->addJS($this->_path.'views/js/ohm_admin.js', 'all');
            $this->context->controller->addJqueryPlugin('select2');
        }
    }

    public function hookActionProductAdd($params)
    {
        $this->_clearCache('*');
    }

    public function hookActionProductUpdate($params)
    {
        $this->_clearCache('*');
    }

    public function hookActionProductDelete($params)
    {
        $this->_clearCache('*');
    }

    public function hookActionCategoryUpdate($params)
    {
        $this->_clearCache('*');
    }

    public function hookActionAdminGroupsControllerSaveAfter($params)
    {
        $this->_clearCache('*');
    }

    public function _clearCache($template, $cache_id = null, $compile_id = null)
    {
        parent::_clearCache($this->templateFile);
    }

    
    public function divideNumberIntoEqualParts($number, $parts) {
        if ($parts <= 0) {
            return [];
        }
    
        $quotient = intdiv($number, $parts);
        $remainder = $number % $parts;
    
        $result = [];
    
        for ($i = 0; $i < $parts; $i++) {
            $result[] = $quotient;
        }
    
        for ($i = 0; $i < $remainder; $i++) {
            $result[$i]++;
        }
        return $result;
    }

    public function hookDisplayCategoryFilter($params)
    {
        if ($params['subcategories']) {
            $subsc = [];
            foreach ($params['subcategories'] as $key => $subcategory) {
                if (Category::hasChildren($subcategory['id_category'], $this->context->language->id)) {
                    $subsc[$subcategory['name']] = Category::getChildren($subcategory['id_category'], $this->context->language->id);
                }
            }

            // echo "<pre>";
            // print_r(json_encode(Product::getProductCategories(234)));
            // echo "</pre>";

            $this->context->smarty->assign('data', $subsc);
            return $this->context->smarty->fetch($this->local_path.'views/templates/hook/displayFilter.tpl');
        }
    }

    public function hookDisplayCategoryCustom($params)
    {
        if ($params['products']) {
            $t = [];
            foreach ($params['subcategories'] as $j => $subcategory) {
                $t[$subcategory['name']] = [];
                foreach ($params['products'] as $k => $product) {
                    $p = Product::getProductCategories($product['id_product']);
                    if (in_array($subcategory['id_category'], $p)) {
                        $product['ohm_category'] = json_encode($p);
                        $t[$subcategory['name']][] = $product;
                    }
                }
            }

            $this->context->smarty->assign('data', $t);
            return $this->context->smarty->fetch($this->local_path.'views/templates/hook/productdisplay.tpl');
        }
    }

    public function getContent()
    {
        $output = '';
        $errors = [];

        if (Tools::isSubmit('submitOhmDisplayProducts')) {
            $nbr = Tools::getValue('OHM_PRODUCTS_NBR');
            if (!Validate::isInt($nbr) || $nbr <= 0) {
                $errors[] = $this->l('The number of products is invalid. Please enter a positive number.');
            }

            $cat = json_encode(Tools::getValue('OHM_SELECTED_CATEGORIES'));
            if (!$cat) {
                $errors[] = $this->l('The category ID is invalid. Please choose an existing category ID.');
            }

            if (count($errors)) {
                $output = $this->displayError(implode('<br />', $errors));
            } else {
                Configuration::updateValue('OHM_PRODUCTS_NBR', (int) $nbr);
                Configuration::updateValue('OHM_SELECTED_CATEGORIES', pSQL($cat));

                $this->_clearCache('*');

                $output = $this->displayConfirmation($this->trans('The settings have been updated.', [], 'Admin.Notifications.Success'));
            }
        }

        return $output . $this->renderForm();
    }

    public function renderForm()
    {
        $categories = Category::getCategories($this->context->language->id);

        if ($categories) {
            foreach ($categories as $k => $category) {
                foreach ($category as $j => $sub) {
                    $final_products[] = array(
                        'id_option' => $j,
                        'name' => $sub['infos']['name']
                    );
                }
            }
        }

        $fields_form = [
            'form' => [
                'legend' => [
                    'title' => $this->trans('Settings', [], 'Admin.Global'),
                    'icon' => 'icon-cogs',
                ],

                'description' => $this->l('To add products to your homepage, simply add them to the corresponding product category (default: "Home").'),
                'input' => [
                    [
                        'type' => 'text',
                        'label' => $this->l('Number of products to be displayed'),
                        'name' => 'OHM_PRODUCTS_NBR',
                        'class' => 'fixed-width-xs',
                        'desc' => $this->l('Set the number of products that you would like to display on homepage (default: 8).'),
                    ],
                    [
                        'type' => 'select',
                        'prefix' => '<i class="icon icon-gift"></i>',
                        'multiple' => true,
                        'class' => 'selectpicker select2-picker',
                        'name' => 'OHM_SELECTED_CATEGORIES[]',
                        'label' => $this->l('Categories from which to pick products to be displayed'),
                        'options' => array(
                            'query' => $final_products,
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                        'required' => true,
                        'hint' => array($this->l('Select product(s) as gift. Please note that only products that has enough stock will be displayed here.'))
                    ],
                ],
                'submit' => [
                    'title' => $this->trans('Save', [], 'Admin.Actions'),
                ],
            ],
        ];

        $lang = new Language((int) Configuration::get('PS_LANG_DEFAULT'));

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitOhmDisplayProducts';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false) . '&configure=' . $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = [
            'fields_value' => $this->getConfigFieldsValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        ];

        return $helper->generateForm([$fields_form]);
    }

    public function getConfigFieldsValues()
    {
        return [
            'OHM_PRODUCTS_NBR' => Tools::getValue('OHM_PRODUCTS_NBR', (int) Configuration::get('OHM_PRODUCTS_NBR')),
            'OHM_SELECTED_CATEGORIES[]' => $this->getSelectedCategoryries(),
        ];
    }

    public function getSelectedCategoryries()
    {
        $filtered = str_replace(['"','\\','[',']'], '', Configuration::get('OHM_SELECTED_CATEGORIES'));
        return explode(",", $filtered);
    }

    public function renderWidget($hookName = null, array $configuration = [])
    {
        if (!$this->isCached($this->templateFile, $this->getCacheId('ohm_productsdisplay'))) {
            $variables = $this->getWidgetVariables($hookName, $configuration);

            if (empty($variables)) {
                return false;
            }

            $this->smarty->assign($variables);
        }

        return $this->fetch($this->templateFile, $this->getCacheId('ohm_productsdisplay'));
    }

    public function getWidgetVariables($hookName = null, array $configuration = [])
    {
        $products = $this->getProducts();
        if (!empty($products)) {
            return [
                'products' => $products,
            ];
        }

        return false;
    }

    protected function getProducts()
    {
        $products = [];
        $equalParts = $this->divideNumberIntoEqualParts((int) Configuration::get('OHM_PRODUCTS_NBR'), count($this->getSelectedCategoryries()));

        $categories = $this->getSelectedCategoryries();
        if ($categories) {
            foreach ($categories as $i => $id_category) {
                $c = new Category((int) $id_category);
                $products[] = $c->getProducts(
                    $this->context->language->id,
                    1,
                    (int) $equalParts[$i]
                );
            }
        }
        
        // echo "<pre>";
        // print_r($products);
        // echo "</pre>";

        return $products;
    }

    protected function getCacheId($name = null)
    {
        $cacheId = parent::getCacheId($name);
        if (!empty($this->context->customer->id)) {
            $cacheId .= '|' . $this->context->customer->id;
        }

        return $cacheId;
    }
}
