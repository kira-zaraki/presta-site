<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @PrestaShop/Admin/Component/LegacyLayout/search_form.html.twig */
class __TwigTemplate_292f1a4cb923af6afdf1e4dfd02ecb84 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/LegacyLayout/search_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/LegacyLayout/search_form.html.twig"));

        // line 25
        yield "<form id=\"header_search\" class=\"component bo_search_form\" method=\"post\" action=\"";
        yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminSearch");
        yield "\" role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
  ";
        // line 27
        if ((array_key_exists("showClearBtn", $context) && (isset($context["showClearBtn"]) || array_key_exists("showClearBtn", $context) ? $context["showClearBtn"] : (function () { throw new RuntimeError('Variable "showClearBtn" does not exist.', 27, $this->source); })()))) {
            // line 28
            yield "    <a href=\"#\" class=\"clear_search hide\"><i class=\"icon-remove\"></i></a>
  ";
        }
        // line 30
        yield "  <div class=\"form-group\">
    <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" />
    <div class=\"input-group\">
      <div class=\"input-group-btn\">
        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
          <i id=\"search_type_icon\" class=\"material-icons\">search</i>
        </button>
        <ul id=\"header_search_options\" class=\"dropdown-menu\">
          <li class=\"search-all search-option active\">
            <a href=\"#\" data-value=\"0\" data-placeholder=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("What are you looking for?", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\">
              <i class=\"material-icons\">search</i> ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Everywhere", [], "Admin.Navigation.Header"), "html", null, true);
        yield "</a>
          </li>
          <li class=\"divider\"></li>
          <li class=\"search-book search-option\">
            <a href=\"#\" data-value=\"1\" data-placeholder=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product name, SKU, reference...", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\">
              <i class=\"material-icons\">store_mall_directory</i> ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Catalog", [], "Admin.Navigation.Menu"), "html", null, true);
        yield "
            </a>
          </li>
          <li class=\"search-customers-name search-option\">
            <a href=\"#\" data-value=\"2\" data-placeholder=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email, name...", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\">
              <i class=\"material-icons\">group</i> ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers by name", [], "Admin.Navigation.Header"), "html", null, true);
        yield "
            </a>
          </li>
          <li class=\"search-customers-addresses search-option\">
            <a href=\"#\" data-value=\"6\" data-placeholder=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("123.45.67.89", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\" data-icon=\"icon-desktop\">
              <i class=\"material-icons\">desktop_mac</i> ";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers by IP address", [], "Admin.Navigation.Header"), "html", null, true);
        yield "</a>
          </li>
          <li class=\"search-orders search-option\">
            <a href=\"#\" data-value=\"3\" data-placeholder=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order ID", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\">
              <i class=\"material-icons\">shopping_basket</i> ";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders", [], "Admin.Global"), "html", null, true);
        yield "
            </a>
          </li>
          <li class=\"search-invoices search-option\">
            <a href=\"#\" data-value=\"4\" data-placeholder=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoice Number", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\">
              <i class=\"material-icons\">book</i> ";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoices", [], "Admin.Navigation.Menu"), "html", null, true);
        yield "
            </a>
          </li>
          <li class=\"search-carts search-option\">
            <a href=\"#\" data-value=\"5\" data-placeholder=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cart ID", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\">
              <i class=\"material-icons\">shopping_cart</i> ";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Carts", [], "Admin.Global"), "html", null, true);
        yield "
            </a>
          </li>
          <li class=\"search-modules search-option\">
            <a href=\"#\" data-value=\"7\" data-placeholder=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Module name", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\">
              <i class=\"material-icons\">extension</i> ";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Modules", [], "Admin.Global"), "html", null, true);
        yield "
            </a>
          </li>
        </ul>
      </div>
      ";
        // line 79
        if ((array_key_exists("showClearBtn", $context) && (isset($context["showClearBtn"]) || array_key_exists("showClearBtn", $context) ? $context["showClearBtn"] : (function () { throw new RuntimeError('Variable "showClearBtn" does not exist.', 79, $this->source); })()))) {
            // line 80
            yield "      <a href=\"#\" class=\"clear_search hide\"><i class=\"material-icons\">clear</i></a>
      ";
        }
        // line 82
        yield "      <input id=\"bo_query\" name=\"bo_query\" type=\"text\" class=\"form-control\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["boQuery"]) || array_key_exists("boQuery", $context) ? $context["boQuery"] : (function () { throw new RuntimeError('Variable "boQuery" does not exist.', 82, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
        yield "\" aria-label=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
        yield "\" />
    </div>
  </div>
  <script>
    ";
        // line 86
        if ((array_key_exists("searchType", $context) && (isset($context["searchType"]) || array_key_exists("searchType", $context) ? $context["searchType"] : (function () { throw new RuntimeError('Variable "searchType" does not exist.', 86, $this->source); })()))) {
            // line 87
            yield "    \$(function() {
      \$('.search-option a[data-value=' + ";
            // line 88
            yield (((isset($context["searchType"]) || array_key_exists("searchType", $context) ? $context["searchType"] : (function () { throw new RuntimeError('Variable "searchType" does not exist.', 88, $this->source); })())) ? (1) : (0));
            yield " + ']').click();
    });
    ";
        }
        // line 91
        yield "  </script>
</form>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Component/LegacyLayout/search_form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  188 => 91,  182 => 88,  179 => 87,  177 => 86,  165 => 82,  161 => 80,  159 => 79,  151 => 74,  147 => 73,  140 => 69,  136 => 68,  129 => 64,  125 => 63,  118 => 59,  114 => 58,  108 => 55,  104 => 54,  97 => 50,  93 => 49,  86 => 45,  82 => 44,  75 => 40,  71 => 39,  60 => 30,  56 => 28,  54 => 27,  48 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# **
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
 * #}
<form id=\"header_search\" class=\"component bo_search_form\" method=\"post\" action=\"{{ legacy_path('AdminSearch') }}\" role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
  {% if showClearBtn is defined and showClearBtn %}
    <a href=\"#\" class=\"clear_search hide\"><i class=\"icon-remove\"></i></a>
  {% endif %}
  <div class=\"form-group\">
    <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" />
    <div class=\"input-group\">
      <div class=\"input-group-btn\">
        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
          <i id=\"search_type_icon\" class=\"material-icons\">search</i>
        </button>
        <ul id=\"header_search_options\" class=\"dropdown-menu\">
          <li class=\"search-all search-option active\">
            <a href=\"#\" data-value=\"0\" data-placeholder=\"{{ 'What are you looking for?'|trans({}, 'Admin.Navigation.Header') }}\">
              <i class=\"material-icons\">search</i> {{ 'Everywhere'|trans({}, 'Admin.Navigation.Header') }}</a>
          </li>
          <li class=\"divider\"></li>
          <li class=\"search-book search-option\">
            <a href=\"#\" data-value=\"1\" data-placeholder=\"{{ 'Product name, SKU, reference...'|trans({}, 'Admin.Navigation.Header') }}\">
              <i class=\"material-icons\">store_mall_directory</i> {{ 'Catalog'|trans({}, 'Admin.Navigation.Menu') }}
            </a>
          </li>
          <li class=\"search-customers-name search-option\">
            <a href=\"#\" data-value=\"2\" data-placeholder=\"{{ 'Email, name...'|trans({}, 'Admin.Navigation.Header') }}\">
              <i class=\"material-icons\">group</i> {{ 'Customers by name'|trans({}, 'Admin.Navigation.Header') }}
            </a>
          </li>
          <li class=\"search-customers-addresses search-option\">
            <a href=\"#\" data-value=\"6\" data-placeholder=\"{{ '123.45.67.89'|trans({}, 'Admin.Navigation.Header') }}\" data-icon=\"icon-desktop\">
              <i class=\"material-icons\">desktop_mac</i> {{ 'Customers by IP address'|trans({}, 'Admin.Navigation.Header') }}</a>
          </li>
          <li class=\"search-orders search-option\">
            <a href=\"#\" data-value=\"3\" data-placeholder=\"{{ 'Order ID'|trans({}, 'Admin.Navigation.Header') }}\">
              <i class=\"material-icons\">shopping_basket</i> {{ 'Orders'|trans({}, 'Admin.Global') }}
            </a>
          </li>
          <li class=\"search-invoices search-option\">
            <a href=\"#\" data-value=\"4\" data-placeholder=\"{{ 'Invoice Number'|trans({}, 'Admin.Navigation.Header') }}\">
              <i class=\"material-icons\">book</i> {{ 'Invoices'|trans({}, 'Admin.Navigation.Menu') }}
            </a>
          </li>
          <li class=\"search-carts search-option\">
            <a href=\"#\" data-value=\"5\" data-placeholder=\"{{ 'Cart ID'|trans({}, 'Admin.Navigation.Header') }}\">
              <i class=\"material-icons\">shopping_cart</i> {{ 'Carts'|trans({}, 'Admin.Global') }}
            </a>
          </li>
          <li class=\"search-modules search-option\">
            <a href=\"#\" data-value=\"7\" data-placeholder=\"{{ 'Module name'|trans({}, 'Admin.Navigation.Header') }}\">
              <i class=\"material-icons\">extension</i> {{ 'Modules'|trans({}, 'Admin.Global') }}
            </a>
          </li>
        </ul>
      </div>
      {% if showClearBtn is defined and showClearBtn %}
      <a href=\"#\" class=\"clear_search hide\"><i class=\"material-icons\">clear</i></a>
      {% endif %}
      <input id=\"bo_query\" name=\"bo_query\" type=\"text\" class=\"form-control\" value=\"{{ boQuery }}\" placeholder=\"{{ 'Search'|trans({}, 'Admin.Actions') }}\" aria-label=\"{{ 'Search'|trans({}, 'Admin.Actions') }}\" />
    </div>
  </div>
  <script>
    {% if searchType is defined and searchType %}
    \$(function() {
      \$('.search-option a[data-value=' + {{ searchType ? 1 : 0 }} + ']').click();
    });
    {% endif %}
  </script>
</form>
", "@PrestaShop/Admin/Component/LegacyLayout/search_form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Component/LegacyLayout/search_form.html.twig");
    }
}
