<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__a9ad30d7e0b1b0462b7008df384065ab2df330971790f480fb563e1173448845 */
class __TwigTemplate_3615a5a9e062ee01153ed6da7f2f531a13194b3ef083a12e32a859e4cbe97fbb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__a9ad30d7e0b1b0462b7008df384065ab2df330971790f480fb563e1173448845"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__a9ad30d7e0b1b0462b7008df384065ab2df330971790f480fb563e1173448845"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/pieces-levage/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/pieces-levage/img/app_icon.png\" />

<title>Module notifications • Pieces levage</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesNotifications';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '8.0.5';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your shop.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your shop.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your shop.';
    var see_msg = 'Read this message';
    var token = '8a33ac1d0eb1df9cbdd759a6564dc021';
    var token_admin_orders = tokenAdminOrders = 'c7057c2efa02df65f4863c5dfeb95421';
    var token_admin_customers = 'e6a60eadc92d1ee4bd7f5d9661b74123';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '9ef6d097adc2e9cd4ee1911d429e3ded';
    var currentIndex = 'index.php?controller=AdminModulesNotifications';
    var employee_token = '01e70fef90d0ead711b7496b59c6d387';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/modules/manage?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU';
    var admin_notification_get_link = '/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/com";
        // line 42
        echo "mon/notifications?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU';
    var admin_notification_push_link = adminNotificationPushLink = '/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/common/notifications/ack?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var search_product_msg = 'Search for a product';
  </script>



<link
      rel=\"preload\"
      href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/themes/new-theme/public/703cf8f274fbb265d49c6262825780e1.preload.woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/pieces-levage/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/pieces-levage/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/pieces-levage/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/pieces-levage\\/admin976inyzb3kgzb0qrzyx\\/\";
var baseDir = \"\\/pieces-levage\\/\";
var changeFormLanguageUrl = \"\\/pieces-levage\\/admin976inyzb3kgzb0qrzyx\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"sec";
        // line 68
        echo "ondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/pieces-levage/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/pieces-levage/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/pieces-levage/js/admin.js?v=8.0.5\"></script>
<script type=\"text/javascript\" src=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/pieces-levage/js/tools.js?v=8.0.5\"></script>
<script type=\"text/javascript\" src=\"/pieces-levage/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/pieces-levage/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/pieces-levage/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/pieces-levage/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/pieces-levage/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/pieces-levage/ad";
        // line 93
        echo "min976inyzb3kgzb0qrzyx/index.php/common/notifications?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 103
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-en adminmodulesnotifications\"
  data-base-url=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php\"  data-token=\"hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminPsEditionBasicHomepageController&amp;token=3802c8f86b3fe2b77accb6186f5164a7\"></a>
      <span id=\"shop_version\">8.0.5</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=5958221d0f5aabdc9d3d1da8210fe31d\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/modules/manage?token=b4b74b5c9522fd75b73e1f09a26b5803\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/catalog/categories/new?token=b4b74b5c9522fd75b73e1f09a26b5803\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/catalog/products/new?to";
        // line 137
        echo "ken=b4b74b5c9522fd75b73e1f09a26b5803\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=d841801f5fdf60b259ff77a5ecd31a40\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/orders?token=b4b74b5c9522fd75b73e1f09a26b5803\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"10\"
        data-icon=\"icon-AdminModulesSf\"
        data-method=\"add\"
        data-url=\"index.php/improve/modules/alerts?-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\"
        data-post-link=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminQuickAccesses&token=e56d47ec3888cc176c4f967e898de215\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Alerts - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminQuickAccesses&token=e56d47ec3888cc176c4f967e898de215\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminSearch&amp;to";
        // line 176
        echo "ken=b9a60ef0f730fa9d7f2845b7fcec6a41\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-i";
        // line 193
        echo "con=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancel</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Quick Access</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=5958221d0f5aabdc9d3d1da8210fe31d\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/modules/manage?token=b4b74b5c9522fd75b73e1f09a26b5803\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/catalog/categories/new?token=b4b74b5c9522fd75b73e1f09a26b5803\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/catalog/products/new?token=b4b74b5c9522fd75b73e1f09a26b5803\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.p";
        // line 230
        echo "hp?controller=AdminCartRules&amp;addcart_rule&amp;token=d841801f5fdf60b259ff77a5ecd31a40\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/orders?token=b4b74b5c9522fd75b73e1f09a26b5803\"
             data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"139\"
      data-icon=\"icon-AdminModulesSf\"
      data-method=\"add\"
      data-url=\"index.php/improve/modules/alerts?-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\"
      data-post-link=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminQuickAccesses&token=e56d47ec3888cc176c4f967e898de215\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Alerts - List\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add current page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminQuickAccesses&token=e56d47ec3888cc176c4f967e898de215\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Your shop is in debug mode.</strong></p><p class=&quot;text-left&quot;>All the PHP errors and messages are displayed. When you no longer need it, &lt;strong&gt;turn off&lt;/strong&gt; this mode.</p>\"
             href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/advanced/pe";
        // line 269
        echo "rformance/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Debug mode</span>
          </a>
        </div>
      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/pieces-levage/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"m";
        // line 322
        echo "essages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=7f66c5f8684c632a186a7e16e155e38a\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" ";
        // line 370
        echo "href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/pieces-levage/img/pr/default.jpg\" alt=\"Olivier\" /></span>
        <span class=\"employee_profile\">Welcome back Olivier</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/advanced/employees/1/edit?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminLogin&amp;logout=1&amp;token=739be49201cdd424c70c2eee2fc7992d\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/pieces-levage/admin976inyzb3k";
        // line 418
        echo "gzb0qrzyx/index.php/configure/advanced/employees/toggle-navigation?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminPsEditionBasicHomepageController&amp;token=3802c8f86b3fe2b77accb6186f5164a7\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.0.5</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"142\" id=\"tab-HOME\">
                <span class=\"title\">Welcome</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminDashboard&amp;token=c38119e21881df8a3b62be045ab4f03d\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Dashboard
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
    ";
        // line 460
        echo "            <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/orders/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/orders/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/orders/invoices/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Invoices
                       ";
        // line 491
        echo "         </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/orders/credit-slips/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/orders/delivery-slips/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminCarts&amp;token=7f66c5f8684c632a186a7e16e155e38a\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-lev";
        // line 524
        echo "elone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/catalog/products?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/catalog/products?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/catalog/categories?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                     ";
        // line 553
        echo "       
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/catalog/monitoring/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminAttributesGroups&amp;token=1e18e390fb3fe3aa3f5a5e2776db4af7\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/catalog/brands/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/attachments/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Files
              ";
        // line 580
        echo "                  </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminCartRules&amp;token=d841801f5fdf60b259ff77a5ecd31a40\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/stocks/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/customers/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                         ";
        // line 612
        echo "                           keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/customers/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/addresses/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminCustomerThreads&amp;token=9ef6d097adc2e9cd4ee1911d429e3ded\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
            ";
        // line 641
        echo "          <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminCustomerThreads&amp;token=9ef6d097adc2e9cd4ee1911d429e3ded\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/customer-service/order-messages/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminReturn&amp;toke";
        // line 669
        echo "n=511415150014b547b4356768c386157b\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminMetricsLegacyStatsController&amp;token=8d10b6314e38313160298a018fb9b18d\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"156\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminMetricsLegacyStatsController&amp;token=8d10b6314e38313160298a018fb9b18d\" class=\"link\"> Stats
                                </a>
                              </li>

                                                                                  
                              
                                                          ";
        // line 700
        echo "  
                              <li class=\"link-leveltwo\" data-submenu=\"157\" id=\"subtab-AdminMetricsController\">
                                <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminMetricsController&amp;token=83a26fc665b03a4776a4a80951a04a40\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminPsMboModule&amp;token=f939c30085442046bcdcc92472a3c6ec\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                    ";
        // line 733
        echo "                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminPsMboModule&amp;token=f939c30085442046bcdcc92472a3c6ec\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/modules/manage?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/design/themes/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    key";
        // line 762
        echo "board_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"158\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/design/themes/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"153\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminPsMboTheme&amp;token=3c3db3306bc9c065ca50c21a23cdfd37\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/design/mail_theme/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                   ";
        // line 792
        echo "                                         
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/design/cms-pages/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/design/modules/positions/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminImages&amp;token=dd10e9ce349878813e9f95a755dee158\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/modules/link-widget/list?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Link List
           ";
        // line 819
        echo "                     </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminCarriers&amp;token=39086b6e22bd70fb05b7f99d0ae995d1\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminCarriers&amp;token=39086b6e22bd70fb05b7f99d0ae995d1\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
               ";
        // line 851
        echo "                 <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/shipping/preferences/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"162\" id=\"subtab-AdminMbeConfiguration\">
                                <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminMbeConfiguration&amp;token=4adeb95966bf981b006e668857f8e71b\" class=\"link\"> MBE - Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"164\" id=\"subtab-AdminMbeShipping\">
                                <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminMbeShipping&amp;token=f9dea9065af0f3fc6db6537d73876a04\" class=\"link\"> MBE - Shipments
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/payment/payment_methods?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"li";
        // line 878
        echo "nk\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/payment/payment_methods?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/payment/preferences?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-Ad";
        // line 910
        echo "minInternational\">
                    <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/international/localization/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/international/localization/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/international/zones/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                ";
        // line 939
        echo "                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/international/taxes/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/international/translations/settings?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"133\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=ad00781cd54e0c95ee338d526eb582ad\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
            ";
        // line 969
        echo "                                  <ul id=\"collapse-133\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=ad00781cd54e0c95ee338d526eb582ad\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"146\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminPsfacebookModule&amp;token=711d1e5269e50ad14f820e01b213b565\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/shop/preferences/preferences?_token=hM-C3JDgB_";
        // line 1003
        echo "lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/shop/preferences/preferences?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/shop/order-preferences/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
 ";
        // line 1033
        echo "                               <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/shop/product-preferences/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/shop/customer-preferences/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/shop/contacts/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/shop/seo-urls/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                          ";
        // line 1061
        echo "                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminSearchConf&amp;token=2b82df34aa8afb6c61ae36ea185efb8a\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/advanced/system-information/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb";
        // line 1090
        echo "0qrzyx/index.php/configure/advanced/system-information/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/advanced/performance/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/advanced/administration/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/advanced/emails/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                    ";
        // line 1120
        echo "                                        
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/advanced/import/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/advanced/employees/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/advanced/sql-requests/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/advanced/logs/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Logs
                            ";
        // line 1147
        echo "    </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/advanced/webservice-keys/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/advanced/feature-flags/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/advanced/security/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              ";
        // line 1176
        echo "                
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"126\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminKlaviyoPsConfig&amp;token=acab05851d640e7bb672eb1a0a3b0746\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"115\" id=\"tab-DEFAULT\">
                <span class=\"title\">More</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"161\" id=\"subtab-AdminSelfUpgrade\">
                    <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminSelfUpgrade&amp;token=58b2e28ebca41e7c652897fb035cc5aa\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      1-Click Upgrade
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i";
        // line 1213
        echo ">
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Module Manager</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/modules/alerts?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" aria-current=\"page\">Alerts</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Module notifications          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Upload a module\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">cloud_upload</i>                  Upload a module
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminModules%253Fversion%253D8.0.5%2526country%253Den/Help?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\"
                   id=\"product_form_open_help\"
                >
           ";
        // line 1265
        echo "       Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <li class=\"nav-item\">
                    <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/modules/manage?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab \" data-submenu=\"40\">
                      Modules
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/modules/alerts?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab active current\" data-submenu=\"41\">
                      Alerts
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  ";
        // line 1292
        echo "</li>
                                                                <li class=\"nav-item\">
                    <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/modules/updates?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"42\">
                      Updates
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse";
        // line 1308
        echo "\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add_module\"
              href=\"#\"              title=\"Upload a module\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Upload a module
              <i class=\"material-icons\">cloud_upload</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminModules%253Fversion%253D8.0.5%2526country%253Den/Help?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1343
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminPsEditionBasicHomepageController&amp;token=3802c8f86b3fe2b77accb6186f5164a7\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1377
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 103
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1343
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1377
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__a9ad30d7e0b1b0462b7008df384065ab2df330971790f480fb563e1173448845";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1640 => 1377,  1571 => 1343,  1536 => 103,  1521 => 1377,  1481 => 1343,  1444 => 1308,  1426 => 1292,  1397 => 1265,  1343 => 1213,  1304 => 1176,  1273 => 1147,  1244 => 1120,  1212 => 1090,  1181 => 1061,  1151 => 1033,  1119 => 1003,  1083 => 969,  1051 => 939,  1020 => 910,  986 => 878,  957 => 851,  923 => 819,  894 => 792,  862 => 762,  831 => 733,  796 => 700,  763 => 669,  733 => 641,  702 => 612,  668 => 580,  639 => 553,  608 => 524,  573 => 491,  540 => 460,  496 => 418,  446 => 370,  396 => 322,  341 => 269,  300 => 230,  261 => 193,  242 => 176,  201 => 137,  162 => 103,  150 => 93,  123 => 68,  95 => 42,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ '<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/pieces-levage/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/pieces-levage/img/app_icon.png\" />

<title>Module notifications • Pieces levage</title>

  <script type=\"text/javascript\">
    var help_class_name = \\'AdminModulesNotifications\\';
    var iso_user = \\'en\\';
    var lang_is_rtl = \\'0\\';
    var full_language_code = \\'en-us\\';
    var full_cldr_language_code = \\'en-US\\';
    var country_iso_code = \\'FR\\';
    var _PS_VERSION_ = \\'8.0.5\\';
    var roundMode = 2;
    var youEditFieldFor = \\'\\';
        var new_order_msg = \\'A new order has been placed on your shop.\\';
    var order_number_msg = \\'Order number: \\';
    var total_msg = \\'Total: \\';
    var from_msg = \\'From: \\';
    var see_order_msg = \\'View this order\\';
    var new_customer_msg = \\'A new customer registered on your shop.\\';
    var customer_name_msg = \\'Customer name: \\';
    var new_msg = \\'A new message was posted on your shop.\\';
    var see_msg = \\'Read this message\\';
    var token = \\'8a33ac1d0eb1df9cbdd759a6564dc021\\';
    var token_admin_orders = tokenAdminOrders = \\'c7057c2efa02df65f4863c5dfeb95421\\';
    var token_admin_customers = \\'e6a60eadc92d1ee4bd7f5d9661b74123\\';
    var token_admin_customer_threads = tokenAdminCustomerThreads = \\'9ef6d097adc2e9cd4ee1911d429e3ded\\';
    var currentIndex = \\'index.php?controller=AdminModulesNotifications\\';
    var employee_token = \\'01e70fef90d0ead711b7496b59c6d387\\';
    var choose_language_translate = \\'Choose language:\\';
    var default_language = \\'1\\';
    var admin_modules_link = \\'/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/modules/manage?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\\';
    var admin_notification_get_link = \\'/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/com' | raw }}{{ 'mon/notifications?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\\';
    var admin_notification_push_link = adminNotificationPushLink = \\'/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/common/notifications/ack?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\\';
    var tab_modules_list = \\'\\';
    var update_success_msg = \\'Update successful\\';
    var search_product_msg = \\'Search for a product\\';
  </script>



<link
      rel=\"preload\"
      href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/themes/new-theme/public/703cf8f274fbb265d49c6262825780e1.preload.woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/pieces-levage/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/pieces-levage/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/pieces-levage/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\\\/pieces-levage\\\\/admin976inyzb3kgzb0qrzyx\\\\/\";
var baseDir = \"\\\\/pieces-levage\\\\/\";
var changeFormLanguageUrl = \"\\\\/pieces-levage\\\\/admin976inyzb3kgzb0qrzyx\\\\/index.php\\\\/configure\\\\/advanced\\\\/employees\\\\/change-form-language?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\\\u20ac\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"\\\\u00a4#,##0.00\",\"negativePattern\":\"-\\\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"sec' | raw }}{{ 'ondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/pieces-levage/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/pieces-levage/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/pieces-levage/js/admin.js?v=8.0.5\"></script>
<script type=\"text/javascript\" src=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/pieces-levage/js/tools.js?v=8.0.5\"></script>
<script type=\"text/javascript\" src=\"/pieces-levage/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/pieces-levage/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/pieces-levage/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/pieces-levage/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/pieces-levage/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: \\'#DF0067\\',
      textColor: \\'#FFFFFF\\',
      notificationGetUrl: \\'/pieces-levage/ad' | raw }}{{ 'min976inyzb3kgzb0qrzyx/index.php/common/notifications?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\\',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


' | raw }}{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>{{ '

<body
  class=\"lang-en adminmodulesnotifications\"
  data-base-url=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php\"  data-token=\"hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminPsEditionBasicHomepageController&amp;token=3802c8f86b3fe2b77accb6186f5164a7\"></a>
      <span id=\"shop_version\">8.0.5</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=5958221d0f5aabdc9d3d1da8210fe31d\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/modules/manage?token=b4b74b5c9522fd75b73e1f09a26b5803\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/catalog/categories/new?token=b4b74b5c9522fd75b73e1f09a26b5803\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/catalog/products/new?to' | raw }}{{ 'ken=b4b74b5c9522fd75b73e1f09a26b5803\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=d841801f5fdf60b259ff77a5ecd31a40\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/orders?token=b4b74b5c9522fd75b73e1f09a26b5803\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"10\"
        data-icon=\"icon-AdminModulesSf\"
        data-method=\"add\"
        data-url=\"index.php/improve/modules/alerts?-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\"
        data-post-link=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminQuickAccesses&token=e56d47ec3888cc176c4f967e898de215\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Alerts - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminQuickAccesses&token=e56d47ec3888cc176c4f967e898de215\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminSearch&amp;to' | raw }}{{ 'ken=b9a60ef0f730fa9d7f2845b7fcec6a41\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-i' | raw }}{{ 'con=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$(\\'#bo_query\\').one(\\'click\\', function() {
    \$(this).closest(\\'form\\').removeClass(\\'collapsed\\');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancel</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Quick Access</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=5958221d0f5aabdc9d3d1da8210fe31d\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/modules/manage?token=b4b74b5c9522fd75b73e1f09a26b5803\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/catalog/categories/new?token=b4b74b5c9522fd75b73e1f09a26b5803\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/catalog/products/new?token=b4b74b5c9522fd75b73e1f09a26b5803\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.p' | raw }}{{ 'hp?controller=AdminCartRules&amp;addcart_rule&amp;token=d841801f5fdf60b259ff77a5ecd31a40\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/orders?token=b4b74b5c9522fd75b73e1f09a26b5803\"
             data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"139\"
      data-icon=\"icon-AdminModulesSf\"
      data-method=\"add\"
      data-url=\"index.php/improve/modules/alerts?-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\"
      data-post-link=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminQuickAccesses&token=e56d47ec3888cc176c4f967e898de215\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Alerts - List\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add current page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminQuickAccesses&token=e56d47ec3888cc176c4f967e898de215\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Your shop is in debug mode.</strong></p><p class=&quot;text-left&quot;>All the PHP errors and messages are displayed. When you no longer need it, &lt;strong&gt;turn off&lt;/strong&gt; this mode.</p>\"
             href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/advanced/pe' | raw }}{{ 'rformance/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Debug mode</span>
          </a>
        </div>
      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/pieces-levage/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"m' | raw }}{{ 'essages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=7f66c5f8684c632a186a7e16e155e38a\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href=\\'order_url\\'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" ' | raw }}{{ 'href=\\'customer_url\\'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href=\\'message_url\\'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/pieces-levage/img/pr/default.jpg\" alt=\"Olivier\" /></span>
        <span class=\"employee_profile\">Welcome back Olivier</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/advanced/employees/1/edit?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminLogin&amp;logout=1&amp;token=739be49201cdd424c70c2eee2fc7992d\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/pieces-levage/admin976inyzb3k' | raw }}{{ 'gzb0qrzyx/index.php/configure/advanced/employees/toggle-navigation?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminPsEditionBasicHomepageController&amp;token=3802c8f86b3fe2b77accb6186f5164a7\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.0.5</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"142\" id=\"tab-HOME\">
                <span class=\"title\">Welcome</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminDashboard&amp;token=c38119e21881df8a3b62be045ab4f03d\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Dashboard
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
    ' | raw }}{{ '            <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/orders/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/orders/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/orders/invoices/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Invoices
                       ' | raw }}{{ '         </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/orders/credit-slips/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/orders/delivery-slips/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminCarts&amp;token=7f66c5f8684c632a186a7e16e155e38a\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-lev' | raw }}{{ 'elone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/catalog/products?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/catalog/products?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/catalog/categories?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                     ' | raw }}{{ '       
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/catalog/monitoring/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminAttributesGroups&amp;token=1e18e390fb3fe3aa3f5a5e2776db4af7\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/catalog/brands/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/attachments/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Files
              ' | raw }}{{ '                  </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminCartRules&amp;token=d841801f5fdf60b259ff77a5ecd31a40\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/stocks/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/customers/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                         ' | raw }}{{ '                           keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/customers/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/addresses/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminCustomerThreads&amp;token=9ef6d097adc2e9cd4ee1911d429e3ded\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
            ' | raw }}{{ '          <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminCustomerThreads&amp;token=9ef6d097adc2e9cd4ee1911d429e3ded\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/sell/customer-service/order-messages/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminReturn&amp;toke' | raw }}{{ 'n=511415150014b547b4356768c386157b\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminMetricsLegacyStatsController&amp;token=8d10b6314e38313160298a018fb9b18d\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"156\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminMetricsLegacyStatsController&amp;token=8d10b6314e38313160298a018fb9b18d\" class=\"link\"> Stats
                                </a>
                              </li>

                                                                                  
                              
                                                          ' | raw }}{{ '  
                              <li class=\"link-leveltwo\" data-submenu=\"157\" id=\"subtab-AdminMetricsController\">
                                <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminMetricsController&amp;token=83a26fc665b03a4776a4a80951a04a40\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminPsMboModule&amp;token=f939c30085442046bcdcc92472a3c6ec\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                    ' | raw }}{{ '                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminPsMboModule&amp;token=f939c30085442046bcdcc92472a3c6ec\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/modules/manage?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/design/themes/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    key' | raw }}{{ 'board_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"158\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/design/themes/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"153\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminPsMboTheme&amp;token=3c3db3306bc9c065ca50c21a23cdfd37\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/design/mail_theme/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                   ' | raw }}{{ '                                         
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/design/cms-pages/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/design/modules/positions/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminImages&amp;token=dd10e9ce349878813e9f95a755dee158\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/modules/link-widget/list?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Link List
           ' | raw }}{{ '                     </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminCarriers&amp;token=39086b6e22bd70fb05b7f99d0ae995d1\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminCarriers&amp;token=39086b6e22bd70fb05b7f99d0ae995d1\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
               ' | raw }}{{ '                 <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/shipping/preferences/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"162\" id=\"subtab-AdminMbeConfiguration\">
                                <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminMbeConfiguration&amp;token=4adeb95966bf981b006e668857f8e71b\" class=\"link\"> MBE - Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"164\" id=\"subtab-AdminMbeShipping\">
                                <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminMbeShipping&amp;token=f9dea9065af0f3fc6db6537d73876a04\" class=\"link\"> MBE - Shipments
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/payment/payment_methods?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"li' | raw }}{{ 'nk\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/payment/payment_methods?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/payment/preferences?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-Ad' | raw }}{{ 'minInternational\">
                    <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/international/localization/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/international/localization/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/international/zones/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                ' | raw }}{{ '                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/international/taxes/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/international/translations/settings?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"133\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=ad00781cd54e0c95ee338d526eb582ad\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
            ' | raw }}{{ '                                  <ul id=\"collapse-133\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=ad00781cd54e0c95ee338d526eb582ad\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"146\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminPsfacebookModule&amp;token=711d1e5269e50ad14f820e01b213b565\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/shop/preferences/preferences?_token=hM-C3JDgB_' | raw }}{{ 'lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/shop/preferences/preferences?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/shop/order-preferences/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
 ' | raw }}{{ '                               <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/shop/product-preferences/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/shop/customer-preferences/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/shop/contacts/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/shop/seo-urls/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                          ' | raw }}{{ '                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminSearchConf&amp;token=2b82df34aa8afb6c61ae36ea185efb8a\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/advanced/system-information/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb' | raw }}{{ '0qrzyx/index.php/configure/advanced/system-information/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/advanced/performance/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/advanced/administration/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/advanced/emails/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                    ' | raw }}{{ '                                        
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/advanced/import/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/advanced/employees/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/advanced/sql-requests/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/advanced/logs/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Logs
                            ' | raw }}{{ '    </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/advanced/webservice-keys/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/advanced/feature-flags/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/configure/advanced/security/?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              ' | raw }}{{ '                
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"126\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminKlaviyoPsConfig&amp;token=acab05851d640e7bb672eb1a0a3b0746\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"115\" id=\"tab-DEFAULT\">
                <span class=\"title\">More</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"161\" id=\"subtab-AdminSelfUpgrade\">
                    <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminSelfUpgrade&amp;token=58b2e28ebca41e7c652897fb035cc5aa\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      1-Click Upgrade
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i' | raw }}{{ '>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Module Manager</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/modules/alerts?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" aria-current=\"page\">Alerts</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Module notifications          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Upload a module\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">cloud_upload</i>                  Upload a module
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminModules%253Fversion%253D8.0.5%2526country%253Den/Help?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\"
                   id=\"product_form_open_help\"
                >
           ' | raw }}{{ '       Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <li class=\"nav-item\">
                    <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/modules/manage?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab \" data-submenu=\"40\">
                      Modules
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/modules/alerts?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab active current\" data-submenu=\"41\">
                      Alerts
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  ' | raw }}{{ '</li>
                                                                <li class=\"nav-item\">
                    <a href=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/improve/modules/updates?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"42\">
                      Updates
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse' | raw }}{{ '\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add_module\"
              href=\"#\"              title=\"Upload a module\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Upload a module
              <i class=\"material-icons\">cloud_upload</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminModules%253Fversion%253D8.0.5%2526country%253Den/Help?_token=hM-C3JDgB_lA3z_LGqfdJMAs56t9OZ3K-GZdFFvtXFU\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ' | raw }}{% block content_header %}{% endblock %}{% block content %}{% endblock %}{% block content_footer %}{% endblock %}{% block sidebar_right %}{% endblock %}{{ '

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"http://localhost/pieces-levage/admin976inyzb3kgzb0qrzyx/index.php?controller=AdminPsEditionBasicHomepageController&amp;token=3802c8f86b3fe2b77accb6186f5164a7\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
' | raw }}{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>{{ '
</html>' | raw }}", "__string_template__a9ad30d7e0b1b0462b7008df384065ab2df330971790f480fb563e1173448845", "");
    }
}
