<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.search.builder.repository' shared service.

return $this->services['prestashop.core.search.builder.repository'] = new \PrestaShop\PrestaShop\Core\Search\Builder\RepositoryFiltersBuilder(($this->services['prestashop.core.admin.admin_filter.repository'] ?? $this->load('getPrestashop_Core_Admin_AdminFilter_RepositoryService.php')), ($this->services['prestashop.adapter.data_provider.employee'] ?? $this->load('getPrestashop_Adapter_DataProvider_EmployeeService.php')), ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->shop->id);
