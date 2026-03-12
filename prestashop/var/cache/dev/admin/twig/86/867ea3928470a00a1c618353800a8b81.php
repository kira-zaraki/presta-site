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

/* @PrestaShop/Admin/Component/LegacyLayout/nav_bar.html.twig */
class __TwigTemplate_4d0235f6eeacf3e25e1e974534ec3ff0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/LegacyLayout/nav_bar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/LegacyLayout/nav_bar.html.twig"));

        // line 25
        yield "<nav class=\"nav-bar\" role=\"navigation\" id=\"nav-sidebar\">
  <span class=\"menu-collapse\" data-toggle-url=\"";
        // line 26
        yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminEmployees", ["action" => "toggleMenu"]);
        yield "\">
    <i class=\"material-icons rtl-flip\">first_page</i>
  </span>

  <div class=\"nav-bar-overflow\">
    <div class=\"logo-container\">
      <div class=\"logo-container__header\">
        <a id=\"header_logo\" class=\"logo float-left\" href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 33, $this->source); })()), "defaultTab", [], "any", false, false, false, 33)), "html_attr");
        yield "\"></a>
        <span id=\"shop_version\" class=\"header-version\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 34, $this->source); })()), "psVersion", [], "any", false, false, false, 34), "html", null, true);
        yield "</span>
      </div>
      <div class=\"logo-container__close js-mobile-menu\">
        <i class=\"material-icons close-btn\">close</i>
      </div>
    </div>

    <ul class=\"main-menu";
        // line 41
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 41, $this->source); })()), "menuCollapsed", [], "any", false, false, false, 41)) {
            yield " sidebar-closed";
        }
        yield "\">
      ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 42, $this->source); })()), "tabs", [], "any", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["level1"]) {
            // line 43
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "active", [], "any", false, false, false, 43)) {
                // line 44
                yield "
        ";
                // line 45
                $context["level1Href"] = CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "href", [], "any", false, false, false, 45);
                // line 46
                yield "        ";
                if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "sub_tabs", [], "any", false, false, false, 46)) > 0) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "sub_tabs", [], "any", false, true, false, 46), 0, [], "array", false, true, false, 46), "href", [], "any", true, true, false, 46))) {
                    // line 47
                    yield "          ";
                    $context["level1Href"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "sub_tabs", [], "any", false, false, false, 47), 0, [], "array", false, false, false, 47), "href", [], "any", false, false, false, 47);
                    // line 48
                    yield "        ";
                }
                // line 49
                yield "
        ";
                // line 50
                $context["level1Name"] = CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "name", [], "any", false, false, false, 50);
                // line 51
                yield "        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "name", [], "any", false, false, false, 51) === "")) {
                    // line 52
                    yield "          ";
                    $context["level1Name"] = CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "class_name", [], "any", false, false, false, 52);
                    // line 53
                    yield "        ";
                }
                // line 54
                yield "
        ";
                // line 55
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "icon", [], "any", false, false, false, 55))) {
                    // line 56
                    yield "
          <li class=\"link-levelone";
                    // line 57
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "current", [], "any", false, false, false, 57)) {
                        yield " link-levelone-active";
                    }
                    yield "\" data-submenu=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "id_tab", [], "any", false, false, false, 57), "html", null, true);
                    yield "\" id=\"tab-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "class_name", [], "any", false, false, false, 57), "html", null, true);
                    yield "\">
            <a href=\"";
                    // line 58
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["level1Href"]) || array_key_exists("level1Href", $context) ? $context["level1Href"] : (function () { throw new RuntimeError('Variable "level1Href" does not exist.', 58, $this->source); })()), "html", null, true);
                    yield "\" class=\"link\" >
              <i class=\"material-icons\">";
                    // line 59
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "icon", [], "any", false, false, false, 59), "html", null, true);
                    yield "</i> <span>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["level1Name"]) || array_key_exists("level1Name", $context) ? $context["level1Name"] : (function () { throw new RuntimeError('Variable "level1Name" does not exist.', 59, $this->source); })()), "html", null, true);
                    yield "</span>
            </a>
          </li>

        ";
                } else {
                    // line 64
                    yield "
        <li class=\"category-title";
                    // line 65
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "current", [], "any", false, false, false, 65)) {
                        yield " link-active";
                    }
                    yield "\" data-submenu=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "id_tab", [], "any", false, false, false, 65), "html", null, true);
                    yield "\" id=\"tab-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "class_name", [], "any", false, false, false, 65), "html", null, true);
                    yield "\">
          <span class=\"title\">";
                    // line 66
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["level1Name"]) || array_key_exists("level1Name", $context) ? $context["level1Name"] : (function () { throw new RuntimeError('Variable "level1Name" does not exist.', 66, $this->source); })()), "html", null, true);
                    yield "</span>
        </li>

        ";
                    // line 69
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "sub_tabs", [], "any", false, false, false, 69));
                    foreach ($context['_seq'] as $context["_key"] => $context["level2"]) {
                        // line 70
                        yield "        ";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "active", [], "any", false, false, false, 70)) {
                            // line 71
                            yield "
        ";
                            // line 72
                            $context["level2Href"] = CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "href", [], "any", false, false, false, 72);
                            // line 73
                            yield "
        ";
                            // line 74
                            $context["level2Name"] = CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "name", [], "any", false, false, false, 74);
                            // line 75
                            yield "        ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "name", [], "any", false, false, false, 75) === "")) {
                                // line 76
                                yield "          ";
                                $context["level2Name"] = CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "class_name", [], "any", false, false, false, 76);
                                // line 77
                                yield "        ";
                            }
                            // line 78
                            yield "        ";
                            $context["levelOneClass"] = "";
                            // line 79
                            yield "
        ";
                            // line 80
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "current", [], "any", false, false, false, 80) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 80, $this->source); })()), "menuCollapsed", [], "any", false, false, false, 80))) {
                                // line 81
                                yield "          ";
                                $context["levelOneClass"] = " link-active open ul-open";
                                // line 82
                                yield "        ";
                            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "current", [], "any", false, false, false, 82) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 82, $this->source); })()), "menuCollapsed", [], "any", false, false, false, 82))) {
                                // line 83
                                yield "          ";
                                $context["levelOneClass"] = " link-active";
                                // line 84
                                yield "        ";
                            }
                            // line 85
                            yield "
        <li class=\"link-levelone";
                            // line 86
                            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "sub_tabs", [], "any", false, false, false, 86)) > 0)) {
                                yield " has_submenu";
                            }
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["levelOneClass"]) || array_key_exists("levelOneClass", $context) ? $context["levelOneClass"] : (function () { throw new RuntimeError('Variable "levelOneClass" does not exist.', 86, $this->source); })()), "html", null, true);
                            yield "\" data-submenu=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "id_tab", [], "any", false, false, false, 86), "html", null, true);
                            yield "\" id=\"subtab-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "class_name", [], "any", false, false, false, 86), "html", null, true);
                            yield "\">
          <a href=\"";
                            // line 87
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["level2Href"]) || array_key_exists("level2Href", $context) ? $context["level2Href"] : (function () { throw new RuntimeError('Variable "level2Href" does not exist.', 87, $this->source); })()), "html", null, true);
                            yield "\" class=\"link\">
            <i class=\"material-icons mi-";
                            // line 88
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "icon", [], "any", false, false, false, 88), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "icon", [], "any", false, false, false, 88), "html", null, true);
                            yield "</i>
            <span>";
                            // line 89
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["level2Name"]) || array_key_exists("level2Name", $context) ? $context["level2Name"] : (function () { throw new RuntimeError('Variable "level2Name" does not exist.', 89, $this->source); })()), "html", null, true);
                            yield "</span>
            ";
                            // line 90
                            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "sub_tabs", [], "any", false, false, false, 90)) > 0)) {
                                // line 91
                                yield "              <i class=\"material-icons sub-tabs-arrow\">
                ";
                                // line 92
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "current", [], "any", false, false, false, 92)) {
                                    // line 93
                                    yield "                  keyboard_arrow_up
                ";
                                } else {
                                    // line 95
                                    yield "                  keyboard_arrow_down
                ";
                                }
                                // line 97
                                yield "              </i>
            ";
                            }
                            // line 99
                            yield "          </a>
          ";
                            // line 100
                            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "sub_tabs", [], "any", false, false, false, 100)) > 0)) {
                                // line 101
                                yield "            <ul id=\"collapse-";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "id_tab", [], "any", false, false, false, 101), "html", null, true);
                                yield "\" class=\"submenu panel-collapse\">
              ";
                                // line 102
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "sub_tabs", [], "any", false, false, false, 102));
                                foreach ($context['_seq'] as $context["_key"] => $context["level3"]) {
                                    // line 103
                                    yield "              ";
                                    if (CoreExtension::getAttribute($this->env, $this->source, $context["level3"], "active", [], "any", false, false, false, 103)) {
                                        // line 104
                                        yield "
              ";
                                        // line 105
                                        $context["level3Href"] = CoreExtension::getAttribute($this->env, $this->source, $context["level3"], "href", [], "any", false, false, false, 105);
                                        // line 106
                                        yield "
              ";
                                        // line 107
                                        $context["level3Name"] = CoreExtension::getAttribute($this->env, $this->source, $context["level3"], "name", [], "any", false, false, false, 107);
                                        // line 108
                                        yield "              ";
                                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["level3"], "name", [], "any", false, false, false, 108) === "")) {
                                            // line 109
                                            yield "                ";
                                            $context["level3Name"] = CoreExtension::getAttribute($this->env, $this->source, $context["level3"], "class_name", [], "any", false, false, false, 109);
                                            // line 110
                                            yield "              ";
                                        }
                                        // line 111
                                        yield "
              <li class=\"link-leveltwo";
                                        // line 112
                                        if (CoreExtension::getAttribute($this->env, $this->source, $context["level3"], "current", [], "any", false, false, false, 112)) {
                                            yield " link-active";
                                        }
                                        yield "\" data-submenu=\"";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level3"], "id_tab", [], "any", false, false, false, 112), "html", null, true);
                                        yield "\" id=\"subtab-";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level3"], "class_name", [], "any", false, false, false, 112), "html", null, true);
                                        yield "\">
                <a href=\"";
                                        // line 113
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["level3Href"]) || array_key_exists("level3Href", $context) ? $context["level3Href"] : (function () { throw new RuntimeError('Variable "level3Href" does not exist.', 113, $this->source); })()), "html", null, true);
                                        yield "\" class=\"link\"> ";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["level3Name"]) || array_key_exists("level3Name", $context) ? $context["level3Name"] : (function () { throw new RuntimeError('Variable "level3Name" does not exist.', 113, $this->source); })()), "html", null, true);
                                        yield "</a>
              </li>

              ";
                                    }
                                    // line 117
                                    yield "              ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_key'], $context['level3'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 118
                                yield "            </ul>
          ";
                            }
                            // line 120
                            yield "        </li>
        ";
                        }
                        // line 122
                        yield "        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['level2'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 123
                    yield "
        ";
                }
                // line 125
                yield "
        ";
            }
            // line 127
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['level1'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        yield "    </ul>
    ";
        // line 129
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminNavBarBeforeEnd");
        yield "
  </div>
</nav>
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
        return "@PrestaShop/Admin/Component/LegacyLayout/nav_bar.html.twig";
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
        return array (  355 => 129,  352 => 128,  346 => 127,  342 => 125,  338 => 123,  332 => 122,  328 => 120,  324 => 118,  318 => 117,  309 => 113,  299 => 112,  296 => 111,  293 => 110,  290 => 109,  287 => 108,  285 => 107,  282 => 106,  280 => 105,  277 => 104,  274 => 103,  270 => 102,  265 => 101,  263 => 100,  260 => 99,  256 => 97,  252 => 95,  248 => 93,  246 => 92,  243 => 91,  241 => 90,  237 => 89,  231 => 88,  227 => 87,  216 => 86,  213 => 85,  210 => 84,  207 => 83,  204 => 82,  201 => 81,  199 => 80,  196 => 79,  193 => 78,  190 => 77,  187 => 76,  184 => 75,  182 => 74,  179 => 73,  177 => 72,  174 => 71,  171 => 70,  167 => 69,  161 => 66,  151 => 65,  148 => 64,  138 => 59,  134 => 58,  124 => 57,  121 => 56,  119 => 55,  116 => 54,  113 => 53,  110 => 52,  107 => 51,  105 => 50,  102 => 49,  99 => 48,  96 => 47,  93 => 46,  91 => 45,  88 => 44,  85 => 43,  81 => 42,  75 => 41,  65 => 34,  61 => 33,  51 => 26,  48 => 25,);
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
<nav class=\"nav-bar\" role=\"navigation\" id=\"nav-sidebar\">
  <span class=\"menu-collapse\" data-toggle-url=\"{{ legacy_path('AdminEmployees', {action: 'toggleMenu'}) }}\">
    <i class=\"material-icons rtl-flip\">first_page</i>
  </span>

  <div class=\"nav-bar-overflow\">
    <div class=\"logo-container\">
      <div class=\"logo-container__header\">
        <a id=\"header_logo\" class=\"logo float-left\" href=\"{{ legacy_path(this.defaultTab)|escape('html_attr') }}\"></a>
        <span id=\"shop_version\" class=\"header-version\">{{ this.psVersion }}</span>
      </div>
      <div class=\"logo-container__close js-mobile-menu\">
        <i class=\"material-icons close-btn\">close</i>
      </div>
    </div>

    <ul class=\"main-menu{% if ps.menuCollapsed %} sidebar-closed{% endif %}\">
      {% for level1 in this.tabs %}
        {% if level1.active %}

        {% set level1Href = level1.href %}
        {% if level1.sub_tabs|length > 0 and level1.sub_tabs[0].href is defined %}
          {% set level1Href = level1.sub_tabs[0].href %}
        {% endif %}

        {% set level1Name = level1.name %}
        {% if level1.name is same as '' %}
          {% set level1Name = level1.class_name %}
        {% endif %}

        {% if level1.icon is not empty %}

          <li class=\"link-levelone{% if level1.current %} link-levelone-active{% endif %}\" data-submenu=\"{{ level1.id_tab }}\" id=\"tab-{{ level1.class_name }}\">
            <a href=\"{{ level1Href }}\" class=\"link\" >
              <i class=\"material-icons\">{{ level1.icon }}</i> <span>{{ level1Name }}</span>
            </a>
          </li>

        {% else %}

        <li class=\"category-title{% if level1.current %} link-active{% endif %}\" data-submenu=\"{{ level1.id_tab }}\" id=\"tab-{{ level1.class_name }}\">
          <span class=\"title\">{{ level1Name }}</span>
        </li>

        {% for level2 in level1.sub_tabs %}
        {% if level2.active %}

        {% set level2Href = level2.href %}

        {% set level2Name = level2.name %}
        {% if level2.name is same as '' %}
          {% set level2Name = level2.class_name %}
        {% endif %}
        {% set levelOneClass = '' %}

        {% if level2.current and not ps.menuCollapsed %}
          {% set levelOneClass = ' link-active open ul-open' %}
        {% elseif level2.current and ps.menuCollapsed %}
          {% set levelOneClass = ' link-active' %}
        {% endif %}

        <li class=\"link-levelone{% if level2.sub_tabs|length > 0 %} has_submenu{% endif %}{{ levelOneClass }}\" data-submenu=\"{{ level2.id_tab }}\" id=\"subtab-{{ level2.class_name }}\">
          <a href=\"{{ level2Href }}\" class=\"link\">
            <i class=\"material-icons mi-{{ level2.icon }}\">{{ level2.icon }}</i>
            <span>{{ level2Name }}</span>
            {% if level1.sub_tabs|length > 0 %}
              <i class=\"material-icons sub-tabs-arrow\">
                {% if level2.current %}
                  keyboard_arrow_up
                {% else %}
                  keyboard_arrow_down
                {% endif %}
              </i>
            {% endif %}
          </a>
          {% if level2.sub_tabs|length > 0 %}
            <ul id=\"collapse-{{ level2.id_tab }}\" class=\"submenu panel-collapse\">
              {% for level3 in level2.sub_tabs %}
              {% if level3.active %}

              {% set level3Href = level3.href %}

              {% set level3Name = level3.name %}
              {% if level3.name is same as '' %}
                {% set level3Name = level3.class_name %}
              {% endif %}

              <li class=\"link-leveltwo{% if level3.current %} link-active{% endif %}\" data-submenu=\"{{ level3.id_tab }}\" id=\"subtab-{{ level3.class_name }}\">
                <a href=\"{{ level3Href }}\" class=\"link\"> {{ level3Name }}</a>
              </li>

              {% endif %}
              {% endfor %}
            </ul>
          {% endif %}
        </li>
        {% endif %}
        {% endfor %}

        {% endif %}

        {% endif %}
      {% endfor %}
    </ul>
    {{ renderhook('displayAdminNavBarBeforeEnd') }}
  </div>
</nav>
", "@PrestaShop/Admin/Component/LegacyLayout/nav_bar.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Component/LegacyLayout/nav_bar.html.twig");
    }
}
