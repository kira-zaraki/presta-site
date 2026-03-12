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

/* @PrestaShop/Admin/Component/LegacyLayout/notifications_center.html.twig */
class __TwigTemplate_3606b693d1a5feffabcb7fc73ec55ca7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/LegacyLayout/notifications_center.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/LegacyLayout/notifications_center.html.twig"));

        // line 25
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 25, $this->source); })()), "showNewOrders", [], "any", false, false, false, 25) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 25, $this->source); })()), "showNewCustomers", [], "any", false, false, false, 25)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 25, $this->source); })()), "showNewMessages", [], "any", false, false, false, 25))) {
            // line 26
            yield "<ul class=\"header-list component\">
  <li id=\"notification\" class=\"dropdown\">
    <a href=\"javascript:void(0);\" class=\"notification dropdown-toggle notifs\">
      <i class=\"material-icons\">notifications_none</i>
      <span id=\"total_notif_number_wrapper\" class=\"notifs_badge hide\">
              <span id=\"total_notif_value\">0</span>
            </span>
    </a>
    <div class=\"dropdown-menu dropdown-menu-right notifs_dropdown\">
      <div class=\"notifications\">
        <ul class=\"nav nav-tabs\" role=\"tablist\">
          ";
            // line 37
            $context["active"] = "active";
            // line 38
            yield "          ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 38, $this->source); })()), "showNewOrders", [], "any", false, false, false, 38)) {
                // line 39
                yield "            <li class=\"nav-item ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 39, $this->source); })()), "html", null, true);
                yield "\">
              <a class=\"nav-link\" data-toggle=\"tab\" data-type=\"order\" href=\"#orders-notifications\" role=\"tab\" id=\"orders-tab\">";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders", [], "Admin.Navigation.Header"), "html", null, true);
                yield "<span id=\"orders_notif_value\" class=\"notif-counter\"></span></a>
            </li>
            ";
                // line 42
                $context["active"] = "";
                // line 43
                yield "          ";
            }
            // line 44
            yield "
          ";
            // line 45
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 45, $this->source); })()), "showNewCustomers", [], "any", false, false, false, 45)) {
                // line 46
                yield "            <li class=\"nav-item ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 46, $this->source); })()), "html", null, true);
                yield "\">
              <a class=\"nav-link\" data-toggle=\"tab\" data-type=\"customer\" href=\"#customers-notifications\" role=\"tab\" id=\"customers-tab\">";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers", [], "Admin.Navigation.Header"), "html", null, true);
                yield "<span id=\"customers_notif_value\" class=\"notif-counter\"></span></a>
            </li>
            ";
                // line 49
                $context["active"] = "";
                // line 50
                yield "          ";
            }
            // line 51
            yield "
          ";
            // line 52
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 52, $this->source); })()), "showNewMessages", [], "any", false, false, false, 52)) {
                // line 53
                yield "            <li class=\"nav-item ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 53, $this->source); })()), "html", null, true);
                yield "\">
              <a class=\"nav-link\" data-toggle=\"tab\" data-type=\"customer_message\" href=\"#messages-notifications\" role=\"tab\" id=\"messages-tab\">";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Messages", [], "Admin.Global"), "html", null, true);
                yield "<span id=\"customer_messages_notif_value\" class=\"notif-counter\"></span></a>
            </li>
            ";
                // line 56
                $context["active"] = "";
                // line 57
                yield "          ";
            }
            // line 58
            yield "        </ul>

        <!-- Tab panes -->
        <div class=\"tab-content\">
          ";
            // line 62
            $context["active"] = "active";
            // line 63
            yield "          ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 63, $this->source); })()), "showNewOrders", [], "any", false, false, false, 63)) {
                // line 64
                yield "            <div class=\"tab-pane ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 64, $this->source); })()), "html", null, true);
                yield " empty\" id=\"orders-notifications\" role=\"tabpanel\">
              <p class=\"no-notification\">
                ";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No new order for now :(", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "<br>
                ";
                // line 67
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 67, $this->source); })()), "noOrderTip", [], "any", false, false, false, 67);
                yield "
              </p>
              <div class=\"notification-elements\"></div>
            </div>
            ";
                // line 71
                $context["active"] = "";
                // line 72
                yield "          ";
            }
            // line 73
            yield "
          ";
            // line 74
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 74, $this->source); })()), "showNewCustomers", [], "any", false, false, false, 74)) {
                // line 75
                yield "            <div class=\"tab-pane ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 75, $this->source); })()), "html", null, true);
                yield " empty\" id=\"customers-notifications\" role=\"tabpanel\">
              <p class=\"no-notification\">
                ";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No new customer for now :(", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "<br>
                ";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 78, $this->source); })()), "noCustomerTip", [], "any", false, false, false, 78), "html", null, true);
                yield "
              </p>
              <div class=\"notification-elements\"></div>
            </div>
            ";
                // line 82
                $context["active"] = "";
                // line 83
                yield "          ";
            }
            // line 84
            yield "
          ";
            // line 85
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 85, $this->source); })()), "showNewMessages", [], "any", false, false, false, 85)) {
                // line 86
                yield "            <div class=\"tab-pane ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 86, $this->source); })()), "html", null, true);
                yield " empty\" id=\"messages-notifications\" role=\"tabpanel\">
              <p class=\"no-notification\">
                ";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No new message for now.", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "<br>
                ";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 89, $this->source); })()), "noCustomerMessageTip", [], "any", false, false, false, 89), "html", null, true);
                yield "
              </p>
              <div class=\"notification-elements\"></div>
            </div>
            ";
                // line 93
                $context["active"] = "";
                // line 94
                yield "          ";
            }
            // line 95
            yield "        </div>
      </div>
    </div>
  </li>
</ul>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Component/LegacyLayout/notifications_center.html.twig";
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
        return array (  210 => 95,  207 => 94,  205 => 93,  198 => 89,  194 => 88,  188 => 86,  186 => 85,  183 => 84,  180 => 83,  178 => 82,  171 => 78,  167 => 77,  161 => 75,  159 => 74,  156 => 73,  153 => 72,  151 => 71,  144 => 67,  140 => 66,  134 => 64,  131 => 63,  129 => 62,  123 => 58,  120 => 57,  118 => 56,  113 => 54,  108 => 53,  106 => 52,  103 => 51,  100 => 50,  98 => 49,  93 => 47,  88 => 46,  86 => 45,  83 => 44,  80 => 43,  78 => 42,  73 => 40,  68 => 39,  65 => 38,  63 => 37,  50 => 26,  48 => 25,);
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
{% if this.showNewOrders or this.showNewCustomers or this.showNewMessages %}
<ul class=\"header-list component\">
  <li id=\"notification\" class=\"dropdown\">
    <a href=\"javascript:void(0);\" class=\"notification dropdown-toggle notifs\">
      <i class=\"material-icons\">notifications_none</i>
      <span id=\"total_notif_number_wrapper\" class=\"notifs_badge hide\">
              <span id=\"total_notif_value\">0</span>
            </span>
    </a>
    <div class=\"dropdown-menu dropdown-menu-right notifs_dropdown\">
      <div class=\"notifications\">
        <ul class=\"nav nav-tabs\" role=\"tablist\">
          {% set active = 'active' %}
          {% if this.showNewOrders %}
            <li class=\"nav-item {{ active }}\">
              <a class=\"nav-link\" data-toggle=\"tab\" data-type=\"order\" href=\"#orders-notifications\" role=\"tab\" id=\"orders-tab\">{{ 'Orders'|trans({}, 'Admin.Navigation.Header') }}<span id=\"orders_notif_value\" class=\"notif-counter\"></span></a>
            </li>
            {% set active = '' %}
          {% endif %}

          {% if this.showNewCustomers %}
            <li class=\"nav-item {{ active }}\">
              <a class=\"nav-link\" data-toggle=\"tab\" data-type=\"customer\" href=\"#customers-notifications\" role=\"tab\" id=\"customers-tab\">{{ 'Customers'|trans({}, 'Admin.Navigation.Header') }}<span id=\"customers_notif_value\" class=\"notif-counter\"></span></a>
            </li>
            {% set active = '' %}
          {% endif %}

          {% if this.showNewMessages %}
            <li class=\"nav-item {{ active }}\">
              <a class=\"nav-link\" data-toggle=\"tab\" data-type=\"customer_message\" href=\"#messages-notifications\" role=\"tab\" id=\"messages-tab\">{{ 'Messages'|trans({}, 'Admin.Global') }}<span id=\"customer_messages_notif_value\" class=\"notif-counter\"></span></a>
            </li>
            {% set active = '' %}
          {% endif %}
        </ul>

        <!-- Tab panes -->
        <div class=\"tab-content\">
          {% set active = 'active' %}
          {% if this.showNewOrders %}
            <div class=\"tab-pane {{ active }} empty\" id=\"orders-notifications\" role=\"tabpanel\">
              <p class=\"no-notification\">
                {{ 'No new order for now :('|trans({}, 'Admin.Navigation.Notification') }}<br>
                {{ this.noOrderTip|raw }}
              </p>
              <div class=\"notification-elements\"></div>
            </div>
            {% set active = '' %}
          {% endif %}

          {% if this.showNewCustomers %}
            <div class=\"tab-pane {{ active }} empty\" id=\"customers-notifications\" role=\"tabpanel\">
              <p class=\"no-notification\">
                {{ 'No new customer for now :('|trans({}, 'Admin.Navigation.Notification') }}<br>
                {{ this.noCustomerTip }}
              </p>
              <div class=\"notification-elements\"></div>
            </div>
            {% set active = '' %}
          {% endif %}

          {% if this.showNewMessages %}
            <div class=\"tab-pane {{ active }} empty\" id=\"messages-notifications\" role=\"tabpanel\">
              <p class=\"no-notification\">
                {{ 'No new message for now.'|trans({}, 'Admin.Navigation.Notification') }}<br>
                {{ this.noCustomerMessageTip }}
              </p>
              <div class=\"notification-elements\"></div>
            </div>
            {% set active = '' %}
          {% endif %}
        </div>
      </div>
    </div>
  </li>
</ul>
{% endif %}
", "@PrestaShop/Admin/Component/LegacyLayout/notifications_center.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Component/LegacyLayout/notifications_center.html.twig");
    }
}
