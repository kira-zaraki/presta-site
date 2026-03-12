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

/* @PrestaShop/Admin/Component/LegacyLayout/session_alert.html.twig */
class __TwigTemplate_da5d07f2dc751a9491e1230d1f2b01fe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/LegacyLayout/session_alert.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/LegacyLayout/session_alert.html.twig"));

        // line 25
        yield "
";
        // line 26
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 26, $this->source); })()), "confirmationMessage", [], "any", false, false, false, 26))) {
            // line 27
            yield "<div class=\"bootstrap\">
  <div class=\"alert alert-success\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 30, $this->source); })()), "confirmationMessage", [], "any", false, false, false, 30), "html", null, true);
            yield "
  </div>
</div>
";
        }
        // line 34
        yield "
";
        // line 35
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 35, $this->source); })()), "errorMessage", [], "any", false, false, false, 35))) {
            // line 36
            yield "<div class=\"bootstrap\">
  <div class=\"alert alert-danger\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    ";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 39, $this->source); })()), "errorMessage", [], "any", false, false, false, 39), "html", null, true);
            yield "
  </div>
</div>
";
        }
        // line 43
        yield "
";
        // line 44
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 44, $this->source); })()), "errors", [], "any", false, false, false, 44))) {
            // line 45
            yield "<div class=\"bootstrap\">
  <div class=\"alert alert-danger\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    ";
            // line 48
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 48, $this->source); })()), "errors", [], "any", false, false, false, 48)) == 1)) {
                // line 49
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 49, $this->source); })()), "errors", [], "any", false, false, false, 49)), "html", null, true);
                yield "
    ";
            } else {
                // line 51
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("There are %d errors.", ["%d" => Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 51, $this->source); })()), "errors", [], "any", false, false, false, 51))], "Admin.Notifications.Error"), "html", null, true);
                yield "
      <br/>
      <ol>
        ";
                // line 54
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 54, $this->source); })()), "errors", [], "any", false, false, false, 54));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 55
                    yield "        <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                    yield "</li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                yield "      </ol>
    ";
            }
            // line 59
            yield "  </div>
</div>
";
        }
        // line 62
        yield "
";
        // line 63
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 63, $this->source); })()), "informations", [], "any", false, false, false, 63))) {
            // line 64
            yield "<div class=\"bootstrap\">
  <div class=\"alert alert-info\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    <ul id=\"infos_block\" class=\"list-unstyled\">
      ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 68, $this->source); })()), "informations", [], "any", false, false, false, 68));
            foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                // line 69
                yield "      <li>";
                yield $context["info"];
                yield "</li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['info'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            yield "    </ul>
  </div>
</div>
";
        }
        // line 75
        yield "
";
        // line 76
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 76, $this->source); })()), "confirmations", [], "any", false, false, false, 76))) {
            // line 77
            yield "<div class=\"bootstrap\">
  <div class=\"alert alert-success\" style=\"display:block;\">
    ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 79, $this->source); })()), "confirmations", [], "any", false, false, false, 79));
            foreach ($context['_seq'] as $context["_key"] => $context["confirmation"]) {
                // line 80
                yield "    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["confirmation"], "html", null, true);
                yield "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['confirmation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            yield "  </div>
</div>
";
        }
        // line 85
        yield "
";
        // line 86
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 86, $this->source); })()), "warnings", [], "any", false, false, false, 86))) {
            // line 87
            yield "<div class=\"bootstrap\">
  <div class=\"alert alert-warning\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    ";
            // line 90
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 90, $this->source); })()), "warnings", [], "any", false, false, false, 90)) > 1)) {
                // line 91
                yield "    <h4>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("There are %d warnings:", ["%d" => Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 91, $this->source); })()), "warnings", [], "any", false, false, false, 91))]), "html", null, true);
                yield "</h4>
    ";
            }
            // line 93
            yield "    <ul class=\"list-unstyled\">
      ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 94, $this->source); })()), "warnings", [], "any", false, false, false, 94));
            foreach ($context['_seq'] as $context["_key"] => $context["warning"]) {
                // line 95
                yield "      <li>";
                yield $context["warning"];
                yield "</li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['warning'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            yield "    </ul>
  </div>
</div>
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
        return "@PrestaShop/Admin/Component/LegacyLayout/session_alert.html.twig";
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
        return array (  220 => 97,  211 => 95,  207 => 94,  204 => 93,  198 => 91,  196 => 90,  191 => 87,  189 => 86,  186 => 85,  181 => 82,  172 => 80,  168 => 79,  164 => 77,  162 => 76,  159 => 75,  153 => 71,  144 => 69,  140 => 68,  134 => 64,  132 => 63,  129 => 62,  124 => 59,  120 => 57,  111 => 55,  107 => 54,  100 => 51,  94 => 49,  92 => 48,  87 => 45,  85 => 44,  82 => 43,  75 => 39,  70 => 36,  68 => 35,  65 => 34,  58 => 30,  53 => 27,  51 => 26,  48 => 25,);
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

{% if this.confirmationMessage is not empty %}
<div class=\"bootstrap\">
  <div class=\"alert alert-success\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    {{ this.confirmationMessage }}
  </div>
</div>
{% endif %}

{% if this.errorMessage is not empty %}
<div class=\"bootstrap\">
  <div class=\"alert alert-danger\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    {{ this.errorMessage }}
  </div>
</div>
{% endif %}

{% if this.errors is not empty %}
<div class=\"bootstrap\">
  <div class=\"alert alert-danger\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    {% if this.errors|length == 1 %}
      {{ this.errors|first }}
    {% else %}
      {{ 'There are %d errors.'|trans({'%d': this.errors|length}, 'Admin.Notifications.Error') }}
      <br/>
      <ol>
        {% for error in this.errors %}
        <li>{{ error }}</li>
        {% endfor %}
      </ol>
    {% endif %}
  </div>
</div>
{% endif %}

{% if this.informations is not empty %}
<div class=\"bootstrap\">
  <div class=\"alert alert-info\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    <ul id=\"infos_block\" class=\"list-unstyled\">
      {% for info in this.informations %}
      <li>{{ info|raw }}</li>
      {% endfor %}
    </ul>
  </div>
</div>
{% endif %}

{% if this.confirmations is not empty %}
<div class=\"bootstrap\">
  <div class=\"alert alert-success\" style=\"display:block;\">
    {% for confirmation in this.confirmations %}
    {{ confirmation }}
    {% endfor %}
  </div>
</div>
{% endif %}

{% if this.warnings is not empty %}
<div class=\"bootstrap\">
  <div class=\"alert alert-warning\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    {% if this.warnings|length > 1 %}
    <h4>{{ 'There are %d warnings:'|trans({'%d': this.warnings|length}) }}</h4>
    {% endif %}
    <ul class=\"list-unstyled\">
      {% for warning in this.warnings %}
      <li>{{ warning|raw }}</li>
      {% endfor %}
    </ul>
  </div>
</div>
{% endif %}
", "@PrestaShop/Admin/Component/LegacyLayout/session_alert.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Component/LegacyLayout/session_alert.html.twig");
    }
}
