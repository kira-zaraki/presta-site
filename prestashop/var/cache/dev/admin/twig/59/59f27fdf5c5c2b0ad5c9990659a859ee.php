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

/* @PrestaShop/Admin/Component/LegacyLayout/quick_access.html.twig */
class __TwigTemplate_7bb59ef0e25e4dea1fa18cdce9d7b3d9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/LegacyLayout/quick_access.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/LegacyLayout/quick_access.html.twig"));

        // line 25
        yield "<div id=\"header_quick\" class=\"component\">
  <div class=\"dropdown\" id=\"quick-access-container\">
    <button
      id=\"quick_select\"
      class=\"btn btn-link dropdown-toggle\"
      data-toggle=\"dropdown\"
    >";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quick Access", [], "Admin.Navigation.Header"), "html", null, true);
        yield " <i class=\"material-icons\">arrow_drop_down</i></button>
    <ul class=\"dropdown-menu\">
      ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 33, $this->source); })()), "quickAccesses", [], "any", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["quickAccess"]) {
            // line 34
            yield "        <li class=\"quick-row-link";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "active", [], "any", false, false, false, 34)) {
                yield " active";
            }
            yield "\">
          <a ";
            // line 35
            if (CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "class", [], "any", true, true, false, 35)) {
                yield "class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "class", [], "any", false, false, false, 35), "html", null, true);
                yield "\"";
            }
            // line 36
            yield "          href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "link", [], "any", false, false, false, 36), "html", null, true);
            yield "\" ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "new_window", [], "any", false, false, false, 36)) {
                yield "target=\"_blank\"";
            }
            // line 37
            yield "          data-item=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "name", [], "any", false, false, false, 37), "html", null, true);
            yield "\"
          >
            ";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "name", [], "any", false, false, false, 39), "html", null, true);
            yield "
          </a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['quickAccess'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "
      <li class=\"divider\"></li>
      ";
        // line 45
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 45, $this->source); })()), "activeQuickAccess", [], "any", false, false, false, 45)) {
            // line 46
            yield "      <li>
        <a id=\"quick-remove-link\" href=\"javascript:void(0);\" class=\"ajax-quick-link\" data-method=\"remove\"
           data-quicklink-id=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 48, $this->source); })()), "activeQuickAccess", [], "any", false, false, false, 48), "id_quick_access", [], "any", false, false, false, 48), "html", null, true);
            yield "\">
          <i class=\"material-icons\">remove_circle</i>
          ";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove from Quick Access", [], "Admin.Navigation.Header"), "html", null, true);
            yield "
        </a>
      </li>
      ";
        } else {
            // line 54
            yield "      <li>
        <a id=\"quick-add-link\" href=\"javascript:void(0);\" class=\"ajax-quick-link\" data-method=\"add\">
          <i class=\"material-icons\">add_circle</i>
          ";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add current page to Quick Access", [], "Admin.Actions"), "html", null, true);
            yield "
        </a>
      </li>
      ";
        }
        // line 61
        yield "      <li>
        <a id=\"quick-manage-link\" href=\"";
        // line 62
        yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminQuickAccesses");
        yield "\">
        <i class=\"material-icons\">settings</i>
          ";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage your quick accesses", [], "Admin.Navigation.Header"), "html", null, true);
        yield "
        </a>
      </li>
    </ul>
  </div>
</div>

<script>
  \$(function() {
    \$('.ajax-quick-link').on('click', function(e){
      e.preventDefault();

      var method = \$(this).data('method');

      if(method == 'add')
        var name = prompt('";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please name this shortcut:", [], "Admin.Navigation.Header"), "html", null, true);
        yield "', '";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 79, $this->source); })()), "currentPageTitle", [], "any", false, false, false, 79), "html", null, true);
        yield "');

      if(method == 'add' && name || method == 'remove')
      {
        \$.ajax({
          type: 'POST',
          headers: { \"cache-control\": \"no-cache\" },
          async: false,
          url: \"";
        // line 87
        yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminQuickAccesses", ["action" => "GetUrl", "rand" => Twig\Extension\CoreExtension::random($this->env->getCharset(), 1, 200), "ajax" => 1]);
        yield "\" + \"&method=\" + method + ( \$(this).data('quicklink-id') ? \"&id_quick_access=\" + \$(this).data('quicklink-id') : \"\"),
          data: {
            \"url\": \"";
        // line 89
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 89, $this->source); })()), "currentPageQuickAccessLink", [], "any", false, false, false, 89);
        yield "\",
            \"name\": name,
            \"icon\": \"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 91, $this->source); })()), "currentPageIcon", [], "any", false, false, false, 91), "html", null, true);
        yield "\"
          },
          dataType: \"json\",
          success: function(data) {
            var quicklink_list ='';
            \$.each(data, function(index,value){
              if (typeof data[index]['name'] !== 'undefined')
                quicklink_list += '<li><a href=\"' + data[index]['link'] + '\">' + data[index]['name'] + '</a></li>';
            });

            if (typeof data['has_errors'] !== 'undefined' && data['has_errors'])
              \$.each(data, function(index, value)
              {
                if (typeof data[index] == 'string')
                  \$.growl.error({ title: \"\", message: data[index]});
              });
            else if (quicklink_list)
            {
              \$('#header_quick ul.dropdown-menu .divider').prevAll().remove();
              \$('#header_quick ul.dropdown-menu').prepend(quicklink_list);
              \$(e.target).remove();
              showSuccessMessage(update_success_msg);
            }
          }
        });
      }
    });
  });
</script>
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
        return "@PrestaShop/Admin/Component/LegacyLayout/quick_access.html.twig";
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
        return array (  184 => 91,  179 => 89,  174 => 87,  161 => 79,  143 => 64,  138 => 62,  135 => 61,  128 => 57,  123 => 54,  116 => 50,  111 => 48,  107 => 46,  105 => 45,  101 => 43,  91 => 39,  85 => 37,  78 => 36,  72 => 35,  65 => 34,  61 => 33,  56 => 31,  48 => 25,);
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
<div id=\"header_quick\" class=\"component\">
  <div class=\"dropdown\" id=\"quick-access-container\">
    <button
      id=\"quick_select\"
      class=\"btn btn-link dropdown-toggle\"
      data-toggle=\"dropdown\"
    >{{ 'Quick Access'|trans({}, 'Admin.Navigation.Header') }} <i class=\"material-icons\">arrow_drop_down</i></button>
    <ul class=\"dropdown-menu\">
      {% for quickAccess in this.quickAccesses %}
        <li class=\"quick-row-link{% if quickAccess.active %} active{% endif %}\">
          <a {% if quickAccess.class is defined %}class=\"{{ quickAccess.class }}\"{% endif %}
          href=\"{{ quickAccess.link }}\" {% if quickAccess.new_window %}target=\"_blank\"{% endif %}
          data-item=\"{{ quickAccess.name }}\"
          >
            {{ quickAccess.name }}
          </a>
        </li>
      {% endfor %}

      <li class=\"divider\"></li>
      {% if this.activeQuickAccess %}
      <li>
        <a id=\"quick-remove-link\" href=\"javascript:void(0);\" class=\"ajax-quick-link\" data-method=\"remove\"
           data-quicklink-id=\"{{ this.activeQuickAccess.id_quick_access }}\">
          <i class=\"material-icons\">remove_circle</i>
          {{ 'Remove from Quick Access'|trans({}, 'Admin.Navigation.Header') }}
        </a>
      </li>
      {% else %}
      <li>
        <a id=\"quick-add-link\" href=\"javascript:void(0);\" class=\"ajax-quick-link\" data-method=\"add\">
          <i class=\"material-icons\">add_circle</i>
          {{ 'Add current page to Quick Access'|trans({}, 'Admin.Actions') }}
        </a>
      </li>
      {% endif %}
      <li>
        <a id=\"quick-manage-link\" href=\"{{ legacy_path('AdminQuickAccesses') }}\">
        <i class=\"material-icons\">settings</i>
          {{ 'Manage your quick accesses'|trans({}, 'Admin.Navigation.Header') }}
        </a>
      </li>
    </ul>
  </div>
</div>

<script>
  \$(function() {
    \$('.ajax-quick-link').on('click', function(e){
      e.preventDefault();

      var method = \$(this).data('method');

      if(method == 'add')
        var name = prompt('{{ 'Please name this shortcut:'|trans({}, 'Admin.Navigation.Header') }}', '{{ this.currentPageTitle }}');

      if(method == 'add' && name || method == 'remove')
      {
        \$.ajax({
          type: 'POST',
          headers: { \"cache-control\": \"no-cache\" },
          async: false,
          url: \"{{ legacy_path('AdminQuickAccesses', {action: 'GetUrl', rand: random(1, 200), ajax: 1}) }}\" + \"&method=\" + method + ( \$(this).data('quicklink-id') ? \"&id_quick_access=\" + \$(this).data('quicklink-id') : \"\"),
          data: {
            \"url\": \"{{ this.currentPageQuickAccessLink|raw }}\",
            \"name\": name,
            \"icon\": \"{{ this.currentPageIcon }}\"
          },
          dataType: \"json\",
          success: function(data) {
            var quicklink_list ='';
            \$.each(data, function(index,value){
              if (typeof data[index]['name'] !== 'undefined')
                quicklink_list += '<li><a href=\"' + data[index]['link'] + '\">' + data[index]['name'] + '</a></li>';
            });

            if (typeof data['has_errors'] !== 'undefined' && data['has_errors'])
              \$.each(data, function(index, value)
              {
                if (typeof data[index] == 'string')
                  \$.growl.error({ title: \"\", message: data[index]});
              });
            else if (quicklink_list)
            {
              \$('#header_quick ul.dropdown-menu .divider').prevAll().remove();
              \$('#header_quick ul.dropdown-menu').prepend(quicklink_list);
              \$(e.target).remove();
              showSuccessMessage(update_success_msg);
            }
          }
        });
      }
    });
  });
</script>
", "@PrestaShop/Admin/Component/LegacyLayout/quick_access.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Component/LegacyLayout/quick_access.html.twig");
    }
}
