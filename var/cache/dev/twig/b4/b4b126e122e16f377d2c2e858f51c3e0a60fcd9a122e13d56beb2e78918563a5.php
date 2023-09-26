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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Security/clear_form.html.twig */
class __TwigTemplate_bc7797b8930569d5a8f1a015acf8132036e39ceacf68fad46e0a9fbad33a246c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'clear_form_header' => [$this, 'block_clear_form_header'],
            'clear_form_content' => [$this, 'block_clear_form_content'],
            'clear_form_footer' => [$this, 'block_clear_form_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Security/clear_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Security/clear_form.html.twig"));

        // line 25
        echo "
<div class=\"row justify-content-center\">
  <div class=\"col form-horizontal\">
    <div class=\"card\">
      ";
        // line 29
        $this->displayBlock('clear_form_header', $context, $blocks);
        // line 46
        echo "
      ";
        // line 47
        $this->displayBlock('clear_form_content', $context, $blocks);
        // line 67
        echo "
      ";
        // line 68
        $this->displayBlock('clear_form_footer', $context, $blocks);
        // line 70
        echo "    </div>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 29
    public function block_clear_form_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "clear_form_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "clear_form_header"));

        // line 30
        echo "        <h3 class=\"card-header\">
          ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Outdated sessions", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "

          <span
            class=\"help-box\"
            data-container=\"body\"
            data-toggle=\"popover\"
            data-trigger=\"hover\"
            data-placement=\"right\"
            data-content=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All outdated sessions will be automatically cleared after the first connection attempt, but you can do it manually now if needed.", [], "Admin.Advparameters.Help"), "html_attr");
        echo "\"
            title=\"\"
            data-original-title=\"\"
          >
          </span>
        </h3>
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_clear_form_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "clear_form_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "clear_form_content"));

        // line 48
        echo "        <div class=\"card-body\">
          <div class=\"form-wrapper\">
            <div id=\"clear-sessions\">
              <div class=\"form-group row\">
                <label class=\"form-control-label\">
                  ";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Clear outdated sessions manually", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
                </label>

                <div class=\"col-sm input-container\">
                  <a class=\"btn btn-primary pointer\" href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 57, $this->source); })()));
        echo "\" title=\"Clear cache\">
                    <i class=\"material-icons\">delete</i>
                    ";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Clear", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_clear_form_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "clear_form_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "clear_form_footer"));

        // line 69
        echo "      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Security/clear_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  175 => 69,  165 => 68,  147 => 59,  142 => 57,  135 => 53,  128 => 48,  118 => 47,  101 => 39,  90 => 31,  87 => 30,  77 => 29,  64 => 70,  62 => 68,  59 => 67,  57 => 47,  54 => 46,  52 => 29,  46 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
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
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}

<div class=\"row justify-content-center\">
  <div class=\"col form-horizontal\">
    <div class=\"card\">
      {% block clear_form_header %}
        <h3 class=\"card-header\">
          {{ 'Outdated sessions'|trans({}, 'Admin.Advparameters.Feature') }}

          <span
            class=\"help-box\"
            data-container=\"body\"
            data-toggle=\"popover\"
            data-trigger=\"hover\"
            data-placement=\"right\"
            data-content=\"{{ 'All outdated sessions will be automatically cleared after the first connection attempt, but you can do it manually now if needed.'|trans({}, 'Admin.Advparameters.Help')|escape('html_attr') }}\"
            title=\"\"
            data-original-title=\"\"
          >
          </span>
        </h3>
      {% endblock %}

      {% block clear_form_content %}
        <div class=\"card-body\">
          <div class=\"form-wrapper\">
            <div id=\"clear-sessions\">
              <div class=\"form-group row\">
                <label class=\"form-control-label\">
                  {{ 'Clear outdated sessions manually'|trans({}, 'Admin.Advparameters.Feature') }}
                </label>

                <div class=\"col-sm input-container\">
                  <a class=\"btn btn-primary pointer\" href=\"{{ path(route) }}\" title=\"Clear cache\">
                    <i class=\"material-icons\">delete</i>
                    {{ 'Clear'|trans({}, 'Admin.Advparameters.Feature') }}
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      {% endblock %}

      {% block clear_form_footer %}
      {% endblock %}
    </div>
  </div>
</div>
", "@PrestaShop/Admin/Configure/AdvancedParameters/Security/clear_form.html.twig", "C:\\xampp8.0\\htdocs\\pieces-levage\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\AdvancedParameters\\Security\\clear_form.html.twig");
    }
}
