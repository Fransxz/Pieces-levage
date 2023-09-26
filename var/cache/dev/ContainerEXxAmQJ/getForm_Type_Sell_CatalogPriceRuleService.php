<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.sell.catalog_price_rule' shared service.

return $this->services['form.type.sell.catalog_price_rule'] = new \PrestaShopBundle\Form\Admin\Sell\CatalogPriceRule\CatalogPriceRuleType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['prestashop.adapter.multistore_feature'] ?? $this->getPrestashop_Adapter_MultistoreFeatureService())->isUsed(), ($this->services['prestashop.core.form.choice_provider.currency_by_id'] ?? $this->load('getPrestashop_Core_Form_ChoiceProvider_CurrencyByIdService.php'))->getChoices(), ($this->services['prestashop.core.form.choice_provider.country_by_id'] ?? $this->load('getPrestashop_Core_Form_ChoiceProvider_CountryByIdService.php'))->getChoices(), ($this->services['prestashop.core.form.choice_provider.group_by_id'] ?? $this->load('getPrestashop_Core_Form_ChoiceProvider_GroupByIdService.php'))->getChoices(), ($this->services['prestashop.adapter.form.choice_provider.shop_name_by_id'] ?? ($this->services['prestashop.adapter.form.choice_provider.shop_name_by_id'] = new \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\ShopNameByIdChoiceProvider()))->getChoices(), ($this->services['prestashop.core.form.choice_provider.currency_by_id'] ?? $this->load('getPrestashop_Core_Form_ChoiceProvider_CurrencyByIdService.php'))->getChoicesAttributes(), ($this->services['prestashop.adapter.data_provider.currency'] ?? $this->getPrestashop_Adapter_DataProvider_CurrencyService())->getDefaultCurrency()->symbol);
