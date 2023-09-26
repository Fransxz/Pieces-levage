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

/* @PrestaShop/Admin/Configure/AdvancedParameters/system_information.html.twig */
class __TwigTemplate_cb91ca97839169aebd10f55c72b5d11cd5c8bd8e7d7e0ae5e0527bcaa856e3ab extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/system_information.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/system_information.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/system_information.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 29
        echo "<div class=\"row\">
  <div class=\"col-lg-6\">
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Configuration information", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"card-text\">
          <p>";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This information must be provided when you report an issue on GitHub or on the forum.", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</p>
        </div>
      </div>
    </div>

    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> ";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Server information", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"card-text\">
          ";
        // line 48
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 48, $this->source); })()), "uname", [], "any", false, false, false, 48))) {
            // line 49
            echo "            <p>
              <strong>";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Server information:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 50, $this->source); })()), "uname", [], "any", false, false, false, 50), "html", null, true);
            echo "
            </p>
          ";
        }
        // line 53
        echo "          <p>
            <strong>";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Server software version:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 54, $this->source); })()), "server", [], "any", false, false, false, 54), "version", [], "any", false, false, false, 54), "html", null, true);
        echo "
          </p>
          <p>
            <strong>";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("PHP version:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 57, $this->source); })()), "server", [], "any", false, false, false, 57), "php", [], "any", false, false, false, 57), "version", [], "any", false, false, false, 57), "html", null, true);
        echo "
          </p>
          <p>
            <strong>";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Memory limit:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 60, $this->source); })()), "server", [], "any", false, false, false, 60), "php", [], "any", false, false, false, 60), "memoryLimit", [], "any", false, false, false, 60), "html", null, true);
        echo "
          </p>
          <p>
            <strong>";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Max execution time:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 63, $this->source); })()), "server", [], "any", false, false, false, 63), "php", [], "any", false, false, false, 63), "maxExecutionTime", [], "any", false, false, false, 63), "html", null, true);
        echo "
          </p>
          <p>
            <strong>";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Upload Max File size:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 66, $this->source); })()), "server", [], "any", false, false, false, 66), "php", [], "any", false, false, false, 66), "maxFileSizeUpload", [], "any", false, false, false, 66), "html", null, true);
        echo "
          </p>
          ";
        // line 68
        if (twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 68, $this->source); })()), "instaWebInstalled", [], "any", false, false, false, 68)) {
            // line 69
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("PageSpeed module for Apache installed (mod_instaweb)", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</p>
          ";
        }
        // line 71
        echo "        </div>
      </div>
    </div>

    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> ";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Database information", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"card-text\">
          <p>
            <strong>";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MySQL version:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 82, $this->source); })()), "database", [], "any", false, false, false, 82), "version", [], "any", false, false, false, 82), "html", null, true);
        echo "
          </p>
          <p>
            <strong>";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MySQL server:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 85, $this->source); })()), "database", [], "any", false, false, false, 85), "server", [], "any", false, false, false, 85), "html", null, true);
        echo "
          </p>
          <p>
            <strong>";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MySQL name:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 88, $this->source); })()), "database", [], "any", false, false, false, 88), "name", [], "any", false, false, false, 88), "html", null, true);
        echo "
          </p>
          <p>
            <strong>";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MySQL user:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 91, $this->source); })()), "database", [], "any", false, false, false, 91), "user", [], "any", false, false, false, 91), "html", null, true);
        echo "
          </p>
          <p>
            <strong>";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tables prefix:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 94, $this->source); })()), "database", [], "any", false, false, false, 94), "prefix", [], "any", false, false, false, 94), "html", null, true);
        echo "
          </p>
          <p>
            <strong>";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MySQL engine:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 97, $this->source); })()), "database", [], "any", false, false, false, 97), "engine", [], "any", false, false, false, 97), "html", null, true);
        echo "
          </p>
          <p>
            <strong>";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MySQL driver:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 100, $this->source); })()), "database", [], "any", false, false, false, 100), "driver", [], "any", false, false, false, 100), "html", null, true);
        echo "
          </p>
        </div>
      </div>
    </div>

    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> ";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of overrides", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"card-text\">
          <ul>
            ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 113, $this->source); })()), "overrides", [], "any", false, false, false, 113));
        foreach ($context['_seq'] as $context["_key"] => $context["override"]) {
            // line 114
            echo "              <li>";
            echo twig_escape_filter($this->env, $context["override"], "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['override'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class=\"col-lg-6\">
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> ";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Store information", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"card-text\">
          <p>
            <strong>";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("PrestaShop version:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 129, $this->source); })()), "shop", [], "any", false, false, false, 129), "version", [], "any", false, false, false, 129), "html", null, true);
        echo "
          </p>
          <p>
            <strong>";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Shop URL:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 132, $this->source); })()), "shop", [], "any", false, false, false, 132), "url", [], "any", false, false, false, 132), "html", null, true);
        echo "
          </p>
          <p>
            <strong>";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Shop path:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 135, $this->source); })()), "shop", [], "any", false, false, false, 135), "path", [], "any", false, false, false, 135), "html", null, true);
        echo "
          </p>
          <p>
            <strong>";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Current theme in use:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 138, $this->source); })()), "shop", [], "any", false, false, false, 138), "theme", [], "any", false, false, false, 138), "html", null, true);
        echo "
          </p>
        </div>
      </div>
    </div>

    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> ";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mail configuration", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"card-text\">
          ";
        // line 150
        if (twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 150, $this->source); })()), "isNativePHPmail", [], "any", false, false, false, 150)) {
            // line 151
            echo "            <p>
              <strong>";
            // line 152
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mail method:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are using /usr/sbin/sendmail", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "
            </p>
          ";
        } else {
            // line 155
            echo "            <p>
              <strong>";
            // line 156
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mail method:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are using your own SMTP parameters.", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "
            </p>
            <p>
              <strong>";
            // line 159
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SMTP server:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 159, $this->source); })()), "smtp", [], "any", false, false, false, 159), "server", [], "any", false, false, false, 159), "html", null, true);
            echo "
            </p>
            <p>
              <strong>";
            // line 162
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SMTP username:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong>
              ";
            // line 163
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 163, $this->source); })()), "smtp", [], "any", false, false, false, 163), "user", [], "any", false, false, false, 163))) {
                // line 164
                echo "                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Defined", [], "Admin.Advparameters.Feature"), "html", null, true);
                echo "
              ";
            } else {
                // line 166
                echo "                <span style=\"color:red;\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not defined", [], "Admin.Advparameters.Feature"), "html", null, true);
                echo "</span>
              ";
            }
            // line 168
            echo "            </p>
            <p>
              <strong>";
            // line 170
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SMTP password:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong>
              ";
            // line 171
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 171, $this->source); })()), "smtp", [], "any", false, false, false, 171), "password", [], "any", false, false, false, 171))) {
                // line 172
                echo "                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Defined", [], "Admin.Advparameters.Feature"), "html", null, true);
                echo "
              ";
            } else {
                // line 174
                echo "                <span style=\"color:red;\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not defined", [], "Admin.Advparameters.Feature"), "html", null, true);
                echo "</span>
              ";
            }
            // line 176
            echo "            </p>
            <p>
              <strong>";
            // line 178
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Encryption:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 178, $this->source); })()), "smtp", [], "any", false, false, false, 178), "encryption", [], "any", false, false, false, 178), "html", null, true);
            echo "
            </p>
            <p>
              <strong>";
            // line 181
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SMTP port:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 181, $this->source); })()), "smtp", [], "any", false, false, false, 181), "port", [], "any", false, false, false, 181), "html", null, true);
            echo "
            </p>
          ";
        }
        // line 184
        echo "        </div>
      </div>
    </div>

    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> ";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your information", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"card-text\">
          <p>
            <strong>";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your web browser:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, (isset($context["userAgent"]) || array_key_exists("userAgent", $context) ? $context["userAgent"] : (function () { throw new RuntimeError('Variable "userAgent" does not exist.', 195, $this->source); })()), "html", null, true);
        echo "
          </p>
        </div>
      </div>
    </div>

    <div class=\"card\" id=\"checkConfiguration\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> ";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Check your configuration", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"card-text\">
          ";
        // line 207
        if ((twig_get_attribute($this->env, $this->source, (isset($context["requirements"]) || array_key_exists("requirements", $context) ? $context["requirements"] : (function () { throw new RuntimeError('Variable "requirements" does not exist.', 207, $this->source); })()), "failRequired", [], "any", false, false, false, 207) == false)) {
            // line 208
            echo "            <p>
              <strong>";
            // line 209
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Required parameters:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong>
              <span class=\"text-success\">";
            // line 210
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("OK", [], "Admin.Advparameters.Notification"), "html", null, true);
            echo "</span>
            </p>
          ";
        } else {
            // line 213
            echo "            <p>
              <strong>";
            // line 214
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Required parameters:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong>
              <span class=\"text-danger\">";
            // line 215
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please fix the following error(s)", [], "Admin.Advparameters.Notification"), "html", null, true);
            echo "</span>
            </p>
            <ul>
              ";
            // line 218
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["requirements"]) || array_key_exists("requirements", $context) ? $context["requirements"] : (function () { throw new RuntimeError('Variable "requirements" does not exist.', 218, $this->source); })()), "testsRequired", [], "any", false, false, false, 218));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 219
                echo "                ";
                if (("fail" == $context["value"])) {
                    // line 220
                    echo "                  <li>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["requirements"]) || array_key_exists("requirements", $context) ? $context["requirements"] : (function () { throw new RuntimeError('Variable "requirements" does not exist.', 220, $this->source); })()), "testsErrors", [], "any", false, false, false, 220), $context["key"], [], "array", false, false, false, 220), "html", null, true);
                    echo "</li>
                ";
                }
                // line 222
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 223
            echo "            </ul>
          ";
        }
        // line 225
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["requirements"] ?? null), "failOptional", [], "any", true, true, false, 225)) {
            // line 226
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["requirements"]) || array_key_exists("requirements", $context) ? $context["requirements"] : (function () { throw new RuntimeError('Variable "requirements" does not exist.', 226, $this->source); })()), "failOptional", [], "any", false, false, false, 226) == false)) {
                // line 227
                echo "              <p>
                <strong>";
                // line 228
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional parameters:", [], "Admin.Advparameters.Feature"), "html", null, true);
                echo "</strong>
                <span class=\"text-success\">";
                // line 229
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("OK", [], "Admin.Advparameters.Notification"), "html", null, true);
                echo "</span>
              </p>
            ";
            } else {
                // line 232
                echo "              <p>
                <strong>";
                // line 233
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional parameters:", [], "Admin.Advparameters.Feature"), "html", null, true);
                echo "</strong>
                <span class=\"text-danger\">";
                // line 234
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please fix the following error(s)", [], "Admin.Advparameters.Notification"), "html", null, true);
                echo "</span>
              </p>
              <ul>
                ";
                // line 237
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["requirements"]) || array_key_exists("requirements", $context) ? $context["requirements"] : (function () { throw new RuntimeError('Variable "requirements" does not exist.', 237, $this->source); })()), "testsOptional", [], "any", false, false, false, 237));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 238
                    echo "                  ";
                    if (("fail" == $context["value"])) {
                        // line 239
                        echo "                    <li>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["requirements"]) || array_key_exists("requirements", $context) ? $context["requirements"] : (function () { throw new RuntimeError('Variable "requirements" does not exist.', 239, $this->source); })()), "testsErrors", [], "any", false, false, false, 239), $context["key"], [], "array", false, false, false, 239), "html", null, true);
                        echo "</li>
                  ";
                    }
                    // line 241
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 242
                echo "              </ul>
            ";
            }
            // line 244
            echo "          ";
        }
        // line 245
        echo "        </div>
      </div>
    </div>
  </div>
</div>

<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">info_outline</i> ";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of changed files", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"card-text\" id=\"changedFiles\">
      <i class=\"material-icons\">loop</i> ";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Checking files...", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "
    </div>
  </div>
</div>

<script>
  \$(document).ready(function()
  {
    var translations = {
      missing: '";
        // line 266
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Missing files", [], "Admin.Advparameters.Notification"), "js"), "html", null, true);
        echo "',
      updated: '";
        // line 267
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Updated files", [], "Admin.Advparameters.Notification"), "js"), "html", null, true);
        echo "',
      changesDetected: '";
        // line 268
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Changed/missing files have been detected.", [], "Admin.Advparameters.Notification"), "js"), "html", null, true);
        echo "',
      noChangeDetected: '";
        // line 269
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No change has been detected in your files.", [], "Admin.Advparameters.Notification"), "js"), "html", null, true);
        echo "'
    };

    \$.ajax({
      type: 'POST',
      url: '";
        // line 274
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_system_information_check_files");
        echo "',
      data: {},
      dataType: 'json',
      success: function(json)
      {
        var tab = {
          'missing': translations.missing,
          'updated': translations.updated,
        };

        if (json.missing.length || json.updated.length) {
          \$('#changedFiles').html('<div class=\"alert alert-warning\" role=\"alert\"><p class=\"alert-text\">' + translations.changesDetected + '</p></div>');
        } else {
          \$('#changedFiles').html('<div class=\"alert alert-success\" role=\"alert\"><p class=\"alert-text\">' + translations.noChangeDetected + '</p></div>');
        }

        \$.each(tab, function(key, lang) {
          if (json[key].length) {
            var html = \$('<ul>').attr('id', key+'_files');
            \$(json[key]).each(function(key, file) {
              html.append(\$('<li>').html(file))
            });
            \$('#changedFiles')
              .append(\$('<h4>').html(lang+' ('+json[key].length+')'))
              .append(html);
          }
        });
      }
    });
  });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/system_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  607 => 274,  599 => 269,  595 => 268,  591 => 267,  587 => 266,  575 => 257,  568 => 253,  558 => 245,  555 => 244,  551 => 242,  545 => 241,  539 => 239,  536 => 238,  532 => 237,  526 => 234,  522 => 233,  519 => 232,  513 => 229,  509 => 228,  506 => 227,  503 => 226,  500 => 225,  496 => 223,  490 => 222,  484 => 220,  481 => 219,  477 => 218,  471 => 215,  467 => 214,  464 => 213,  458 => 210,  454 => 209,  451 => 208,  449 => 207,  442 => 203,  429 => 195,  421 => 190,  413 => 184,  405 => 181,  397 => 178,  393 => 176,  387 => 174,  381 => 172,  379 => 171,  375 => 170,  371 => 168,  365 => 166,  359 => 164,  357 => 163,  353 => 162,  345 => 159,  337 => 156,  334 => 155,  326 => 152,  323 => 151,  321 => 150,  314 => 146,  301 => 138,  293 => 135,  285 => 132,  277 => 129,  269 => 124,  259 => 116,  250 => 114,  246 => 113,  238 => 108,  225 => 100,  217 => 97,  209 => 94,  201 => 91,  193 => 88,  185 => 85,  177 => 82,  169 => 77,  161 => 71,  155 => 69,  153 => 68,  146 => 66,  138 => 63,  130 => 60,  122 => 57,  114 => 54,  111 => 53,  103 => 50,  100 => 49,  98 => 48,  91 => 44,  81 => 37,  74 => 33,  68 => 29,  58 => 28,  35 => 25,);
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
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% trans_default_domain \"Admin.Advparameters.Feature\" %}

{% block content %}
<div class=\"row\">
  <div class=\"col-lg-6\">
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> {{ 'Configuration information'|trans }}
      </h3>
      <div class=\"card-body\">
        <div class=\"card-text\">
          <p>{{ 'This information must be provided when you report an issue on GitHub or on the forum.'|trans }}</p>
        </div>
      </div>
    </div>

    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> {{ 'Server information'|trans }}
      </h3>
      <div class=\"card-body\">
        <div class=\"card-text\">
          {% if system.uname is not empty %}
            <p>
              <strong>{{ 'Server information:'|trans }}</strong> {{ system.uname }}
            </p>
          {% endif %}
          <p>
            <strong>{{ 'Server software version:'|trans }}</strong> {{ system.server.version }}
          </p>
          <p>
            <strong>{{ 'PHP version:'|trans }}</strong> {{ system.server.php.version }}
          </p>
          <p>
            <strong>{{ 'Memory limit:'|trans }}</strong> {{ system.server.php.memoryLimit }}
          </p>
          <p>
            <strong>{{ 'Max execution time:'|trans }}</strong> {{ system.server.php.maxExecutionTime }}
          </p>
          <p>
            <strong>{{ 'Upload Max File size:'|trans }}</strong> {{ system.server.php.maxFileSizeUpload }}
          </p>
          {% if system.instaWebInstalled %}
            <p>{{ 'PageSpeed module for Apache installed (mod_instaweb)'|trans }}</p>
          {% endif %}
        </div>
      </div>
    </div>

    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> {{ 'Database information'|trans({}, 'Admin.Advparameters.Feature') }}
      </h3>
      <div class=\"card-body\">
        <div class=\"card-text\">
          <p>
            <strong>{{ 'MySQL version:'|trans }}</strong> {{ system.database.version }}
          </p>
          <p>
            <strong>{{ 'MySQL server:'|trans }}</strong> {{ system.database.server }}
          </p>
          <p>
            <strong>{{ 'MySQL name:'|trans }}</strong> {{ system.database.name }}
          </p>
          <p>
            <strong>{{ 'MySQL user:'|trans }}</strong> {{ system.database.user }}
          </p>
          <p>
            <strong>{{ 'Tables prefix:'|trans }}</strong> {{ system.database.prefix }}
          </p>
          <p>
            <strong>{{ 'MySQL engine:'|trans }}</strong> {{ system.database.engine }}
          </p>
          <p>
            <strong>{{ 'MySQL driver:'|trans }}</strong> {{ system.database.driver }}
          </p>
        </div>
      </div>
    </div>

    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> {{ 'List of overrides'|trans({}, 'Admin.Advparameters.Feature') }}
      </h3>
      <div class=\"card-body\">
        <div class=\"card-text\">
          <ul>
            {% for override in system.overrides %}
              <li>{{ override }}</li>
            {% endfor %}
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class=\"col-lg-6\">
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> {{ 'Store information'|trans }}
      </h3>
      <div class=\"card-body\">
        <div class=\"card-text\">
          <p>
            <strong>{{ 'PrestaShop version:'|trans }}</strong> {{ system.shop.version }}
          </p>
          <p>
            <strong>{{ 'Shop URL:'|trans }}</strong> {{ system.shop.url }}
          </p>
          <p>
            <strong>{{ 'Shop path:'|trans }}</strong> {{ system.shop.path }}
          </p>
          <p>
            <strong>{{ 'Current theme in use:'|trans }}</strong> {{ system.shop.theme }}
          </p>
        </div>
      </div>
    </div>

    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> {{ 'Mail configuration'|trans }}
      </h3>
      <div class=\"card-body\">
        <div class=\"card-text\">
          {% if system.isNativePHPmail %}
            <p>
              <strong>{{ 'Mail method:'|trans }}</strong> {{ 'You are using /usr/sbin/sendmail'|trans }}
            </p>
          {% else %}
            <p>
              <strong>{{ 'Mail method:'|trans }}</strong> {{ 'You are using your own SMTP parameters.'|trans }}
            </p>
            <p>
              <strong>{{ 'SMTP server:'|trans }}</strong> {{ system.smtp.server }}
            </p>
            <p>
              <strong>{{ 'SMTP username:'|trans }}</strong>
              {% if system.smtp.user is not empty %}
                {{ 'Defined'|trans }}
              {% else %}
                <span style=\"color:red;\">{{ 'Not defined'|trans }}</span>
              {% endif %}
            </p>
            <p>
              <strong>{{ 'SMTP password:'|trans }}</strong>
              {% if system.smtp.password is not empty %}
                {{ 'Defined'|trans }}
              {% else %}
                <span style=\"color:red;\">{{ 'Not defined'|trans }}</span>
              {% endif %}
            </p>
            <p>
              <strong>{{ 'Encryption:'|trans }}</strong> {{ system.smtp.encryption }}
            </p>
            <p>
              <strong>{{ 'SMTP port:'|trans }}</strong> {{ system.smtp.port }}
            </p>
          {% endif %}
        </div>
      </div>
    </div>

    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> {{ 'Your information'|trans }}
      </h3>
      <div class=\"card-body\">
        <div class=\"card-text\">
          <p>
            <strong>{{ 'Your web browser:'|trans }}</strong> {{ userAgent }}
          </p>
        </div>
      </div>
    </div>

    <div class=\"card\" id=\"checkConfiguration\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> {{ 'Check your configuration'|trans }}
      </h3>
      <div class=\"card-body\">
        <div class=\"card-text\">
          {% if requirements.failRequired == false %}
            <p>
              <strong>{{ 'Required parameters:'|trans }}</strong>
              <span class=\"text-success\">{{ 'OK'|trans({}, 'Admin.Advparameters.Notification') }}</span>
            </p>
          {% else %}
            <p>
              <strong>{{ 'Required parameters:'|trans }}</strong>
              <span class=\"text-danger\">{{ 'Please fix the following error(s)'|trans({}, 'Admin.Advparameters.Notification') }}</span>
            </p>
            <ul>
              {% for key, value in requirements.testsRequired %}
                {% if 'fail' == value %}
                  <li>{{ requirements.testsErrors[key] }}</li>
                {% endif %}
              {% endfor %}
            </ul>
          {% endif %}
          {% if requirements.failOptional is defined %}
            {% if requirements.failOptional == false %}
              <p>
                <strong>{{ 'Optional parameters:'|trans }}</strong>
                <span class=\"text-success\">{{ 'OK'|trans({}, 'Admin.Advparameters.Notification') }}</span>
              </p>
            {% else %}
              <p>
                <strong>{{ 'Optional parameters:'|trans }}</strong>
                <span class=\"text-danger\">{{ 'Please fix the following error(s)'|trans({}, 'Admin.Advparameters.Notification') }}</span>
              </p>
              <ul>
                {% for key, value in requirements.testsOptional %}
                  {% if 'fail' == value %}
                    <li>{{ requirements.testsErrors[key] }}</li>
                  {% endif %}
                {% endfor %}
              </ul>
            {% endif %}
          {% endif %}
        </div>
      </div>
    </div>
  </div>
</div>

<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">info_outline</i> {{ 'List of changed files'|trans }}
  </h3>
  <div class=\"card-body\">
    <div class=\"card-text\" id=\"changedFiles\">
      <i class=\"material-icons\">loop</i> {{ 'Checking files...'|trans({}, 'Admin.Advparameters.Notification') }}
    </div>
  </div>
</div>

<script>
  \$(document).ready(function()
  {
    var translations = {
      missing: '{{ 'Missing files'|trans({}, 'Admin.Advparameters.Notification')|e('js') }}',
      updated: '{{ 'Updated files'|trans({}, 'Admin.Advparameters.Notification')|e('js') }}',
      changesDetected: '{{ 'Changed/missing files have been detected.'|trans({}, 'Admin.Advparameters.Notification')|e('js') }}',
      noChangeDetected: '{{ 'No change has been detected in your files.'|trans({}, 'Admin.Advparameters.Notification')|e('js') }}'
    };

    \$.ajax({
      type: 'POST',
      url: '{{ path(\"admin_system_information_check_files\") }}',
      data: {},
      dataType: 'json',
      success: function(json)
      {
        var tab = {
          'missing': translations.missing,
          'updated': translations.updated,
        };

        if (json.missing.length || json.updated.length) {
          \$('#changedFiles').html('<div class=\"alert alert-warning\" role=\"alert\"><p class=\"alert-text\">' + translations.changesDetected + '</p></div>');
        } else {
          \$('#changedFiles').html('<div class=\"alert alert-success\" role=\"alert\"><p class=\"alert-text\">' + translations.noChangeDetected + '</p></div>');
        }

        \$.each(tab, function(key, lang) {
          if (json[key].length) {
            var html = \$('<ul>').attr('id', key+'_files');
            \$(json[key]).each(function(key, file) {
              html.append(\$('<li>').html(file))
            });
            \$('#changedFiles')
              .append(\$('<h4>').html(lang+' ('+json[key].length+')'))
              .append(html);
          }
        });
      }
    });
  });
</script>
{% endblock %}
", "@PrestaShop/Admin/Configure/AdvancedParameters/system_information.html.twig", "C:\\xampp8.0\\htdocs\\pieces-levage\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\AdvancedParameters\\system_information.html.twig");
    }
}
