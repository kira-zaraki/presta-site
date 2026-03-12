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

/* @PrestaShop/Admin/Component/LegacyLayout/employee_dropdown.html.twig */
class __TwigTemplate_42d62e9fd7df85d4342e4c9936ff0193 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/LegacyLayout/employee_dropdown.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/LegacyLayout/employee_dropdown.html.twig"));

        // line 25
        yield "<ul id=\"header_employee_box\" class=\"component\">
  <li id=\"employee_infos\" class=\"dropdown\">
    <a href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_employees_edit", ["employeeId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 27, $this->source); })()), "employee", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27)]), "html", null, true);
        yield "\"
       class=\"employee_name dropdown-toggle\"
       data-toggle=\"dropdown\"
    >
      <i class=\"material-icons\">account_circle</i>
    </a>
    <ul id=\"employee_links\" class=\"dropdown-menu dropdown-menu-right\">
      <li class=\"employee-wrapper-avatar\" data-mobile=\"true\" data-from=\"employee_links\" data-target=\"menu\">
              <span class=\"employee_avatar\">
                <img class=\"imgm img-thumbnail\" alt=\"\" src=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 36, $this->source); })()), "employee", [], "any", false, false, false, 36), "imageUrl", [], "any", false, false, false, 36), "html", null, true);
        yield "\" width=\"60\" height=\"60\" />
              </span>
      </li>
      <li class=\"text-left text-nowrap username\" data-mobile=\"true\" data-from=\"employee_links\" data-target=\"menu\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Welcome back %name%", ["%name%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 39, $this->source); })()), "employee", [], "any", false, false, false, 39), "firstName", [], "any", false, false, false, 39)], "Admin.Navigation.Header"), "html", null, true);
        yield "</li>
      <li class=\"employee-wrapper-profile\"><a class=\"admin-link\" href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_employees_edit", ["employeeId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 40, $this->source); })()), "employee", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40)]), "html", null, true);
        yield "\"><i class=\"material-icons\">edit</i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your profile", [], "Admin.Navigation.Header"), "html", null, true);
        yield "</a></li>
      <li class=\"divider\"></li>

      ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["displayBackOfficeEmployeeMenu"]) || array_key_exists("displayBackOfficeEmployeeMenu", $context) ? $context["displayBackOfficeEmployeeMenu"] : (function () { throw new RuntimeError('Variable "displayBackOfficeEmployeeMenu" does not exist.', 43, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
            // line 44
            yield "        ";
            $context["menuItemProperties"] = CoreExtension::getAttribute($this->env, $this->source, $context["menuItem"], "getProperties", [], "any", false, false, false, 44);
            // line 45
            yield "        <li class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["menuItem"], "getClass", [], "any", false, false, false, 45), "html", null, true);
            yield "\">
          <a class=\"dropdown-item\" href=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuItemProperties"]) || array_key_exists("menuItemProperties", $context) ? $context["menuItemProperties"] : (function () { throw new RuntimeError('Variable "menuItemProperties" does not exist.', 46, $this->source); })()), "link", [], "any", false, false, false, 46), "html", null, true);
            yield "\" ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuItemProperties"]) || array_key_exists("menuItemProperties", $context) ? $context["menuItemProperties"] : (function () { throw new RuntimeError('Variable "menuItemProperties" does not exist.', 46, $this->source); })()), "isExternalLink", [], "any", false, false, false, 46)) {
                yield " target=\"_blank\"";
            }
            yield " rel=\"noopener noreferrer nofollow\">
            ";
            // line 47
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["menuItemProperties"] ?? null), "icon", [], "any", true, true, false, 47)) {
                // line 48
                yield "              <i class=\"material-icons\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuItemProperties"]) || array_key_exists("menuItemProperties", $context) ? $context["menuItemProperties"] : (function () { throw new RuntimeError('Variable "menuItemProperties" does not exist.', 48, $this->source); })()), "icon", [], "any", false, false, false, 48), "html", null, true);
                yield "</i>
            ";
            }
            // line 50
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["menuItem"], "getContent", [], "any", false, false, false, 50), "html", null, true);
            yield "
          </a>
        </li>
        ";
            // line 53
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 53)) {
                // line 54
                yield "          <p class=\"divider\"></p>
        ";
            }
            // line 56
            yield "      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "
      <li class=\"signout text-center\" data-mobile=\"true\" data-from=\"employee_links\" data-target=\"menu\" data-after=\"true\"><a id=\"header_logout\" href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_logout");
        yield "\"><i class=\"material-icons visible-xs\">power_settings_new</i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign out", [], "Admin.Navigation.Header"), "html", null, true);
        yield "</a></li>
    </ul>
  </li>
</ul>
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
        return "@PrestaShop/Admin/Component/LegacyLayout/employee_dropdown.html.twig";
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
        return array (  153 => 58,  150 => 57,  136 => 56,  132 => 54,  130 => 53,  123 => 50,  117 => 48,  115 => 47,  107 => 46,  102 => 45,  99 => 44,  82 => 43,  74 => 40,  70 => 39,  64 => 36,  52 => 27,  48 => 25,);
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
<ul id=\"header_employee_box\" class=\"component\">
  <li id=\"employee_infos\" class=\"dropdown\">
    <a href=\"{{ path('admin_employees_edit', {employeeId: this.employee.id}) }}\"
       class=\"employee_name dropdown-toggle\"
       data-toggle=\"dropdown\"
    >
      <i class=\"material-icons\">account_circle</i>
    </a>
    <ul id=\"employee_links\" class=\"dropdown-menu dropdown-menu-right\">
      <li class=\"employee-wrapper-avatar\" data-mobile=\"true\" data-from=\"employee_links\" data-target=\"menu\">
              <span class=\"employee_avatar\">
                <img class=\"imgm img-thumbnail\" alt=\"\" src=\"{{ this.employee.imageUrl }}\" width=\"60\" height=\"60\" />
              </span>
      </li>
      <li class=\"text-left text-nowrap username\" data-mobile=\"true\" data-from=\"employee_links\" data-target=\"menu\">{{ 'Welcome back %name%'|trans({'%name%': this.employee.firstName}, 'Admin.Navigation.Header') }}</li>
      <li class=\"employee-wrapper-profile\"><a class=\"admin-link\" href=\"{{ path('admin_employees_edit', {employeeId: this.employee.id}) }}\"><i class=\"material-icons\">edit</i> {{ 'Your profile'|trans({}, 'Admin.Navigation.Header') }}</a></li>
      <li class=\"divider\"></li>

      {% for menuItem in displayBackOfficeEmployeeMenu %}
        {% set menuItemProperties = menuItem.getProperties %}
        <li class=\"{{ menuItem.getClass }}\">
          <a class=\"dropdown-item\" href=\"{{ menuItemProperties.link }}\" {% if menuItemProperties.isExternalLink %} target=\"_blank\"{% endif %} rel=\"noopener noreferrer nofollow\">
            {% if menuItemProperties.icon is defined %}
              <i class=\"material-icons\">{{ menuItemProperties.icon }}</i>
            {% endif %}
            {{ menuItem.getContent }}
          </a>
        </li>
        {% if loop.last %}
          <p class=\"divider\"></p>
        {% endif %}
      {% endfor %}

      <li class=\"signout text-center\" data-mobile=\"true\" data-from=\"employee_links\" data-target=\"menu\" data-after=\"true\"><a id=\"header_logout\" href=\"{{ path('admin_logout') }}\"><i class=\"material-icons visible-xs\">power_settings_new</i> {{ 'Sign out'|trans({}, 'Admin.Navigation.Header') }}</a></li>
    </ul>
  </li>
</ul>
", "@PrestaShop/Admin/Component/LegacyLayout/employee_dropdown.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Component/LegacyLayout/employee_dropdown.html.twig");
    }
}
