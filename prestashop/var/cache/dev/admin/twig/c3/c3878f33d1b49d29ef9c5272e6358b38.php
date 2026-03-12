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

/* @PrestaShop/Admin/WebProfiler/commands_and_queries.html.twig */
class __TwigTemplate_f0ff010c0af258f13ee3d2a1a232232f extends Template
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

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 25
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/WebProfiler/commands_and_queries.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/WebProfiler/commands_and_queries.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@PrestaShop/Admin/WebProfiler/commands_and_queries.html.twig", 25);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toolbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 28
        yield "  ";
        $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 29
            yield "    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Icon/request.svg");
            yield "
    <span class=\"sf-toolbar-value\">Commands / Queries</span>
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 32
        yield "
  ";
        // line 33
        $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 34
            yield "    <div class=\"sf-toolbar-info-piece\">
      <div class=\"sf-toolbar-info-piece\">
        <b class=\"sf-toolbar-ajax-info\">Commands / Queries</b>
      </div>
      <div class=\"sf-toolbar-info-piece\">
        <b>Commands</b>
        ";
            // line 40
            $context["commandsCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 40, $this->source); })()), "executedCommands", [], "any", false, false, false, 40));
            // line 41
            yield "        <span class=\"sf-toolbar-status sf-toolbar-status-";
            if (((isset($context["commandsCount"]) || array_key_exists("commandsCount", $context) ? $context["commandsCount"] : (function () { throw new RuntimeError('Variable "commandsCount" does not exist.', 41, $this->source); })()) > 0)) {
                yield "green";
            } else {
                yield "red";
            }
            yield "\">
          ";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["commandsCount"]) || array_key_exists("commandsCount", $context) ? $context["commandsCount"] : (function () { throw new RuntimeError('Variable "commandsCount" does not exist.', 42, $this->source); })()), "html", null, true);
            yield "
        </span>
      </div>
      <div class=\"sf-toolbar-info-piece\">
        <b>Queries</b>
        ";
            // line 47
            $context["queriesCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 47, $this->source); })()), "executedQueries", [], "any", false, false, false, 47));
            // line 48
            yield "        <span class=\"sf-toolbar-status sf-toolbar-status-";
            if (((isset($context["queriesCount"]) || array_key_exists("queriesCount", $context) ? $context["queriesCount"] : (function () { throw new RuntimeError('Variable "queriesCount" does not exist.', 48, $this->source); })()) > 0)) {
                yield "green";
            } else {
                yield "red";
            }
            yield "\">
          ";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["queriesCount"]) || array_key_exists("queriesCount", $context) ? $context["queriesCount"] : (function () { throw new RuntimeError('Variable "queriesCount" does not exist.', 49, $this->source); })()), "html", null, true);
            yield "
        </span>
      </div>
    </div>
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 54
        yield "
  ";
        // line 55
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true]);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 58
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 59
        yield "  <span class=\"label\">
    <span class=\"icon\">";
        // line 60
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Icon/request.svg");
        yield "</span>
    <strong>Commands / Queries</strong>
  </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_panel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 66
        yield "  <h2>Commands</h2>

  <div class=\"sf-toolbar-info-piece\">
    <table id=\"cqrs-commands-log\">
      <thead>
        <tr>
          <th>Command</th>
          <th>Command Handler</th>
          <th>Called from</th>
        </tr>
      </thead>
      <tbody class=\"sf-toolbar-ajax-request-list\">
        ";
        // line 78
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 78, $this->source); })()), "executedCommands", [], "any", false, false, false, 78))) {
            // line 79
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 79, $this->source); })()), "executedCommands", [], "any", false, false, false, 79));
            foreach ($context['_seq'] as $context["_key"] => $context["command"]) {
                // line 80
                yield "            <tr>
              <td class=\"text-small\">";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["command"], "command", [], "any", false, false, false, 81), "html", null, true);
                yield "</td>
              <td class=\"text-small\">";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["command"], "command_handler", [], "any", false, false, false, 82), "html", null, true);
                yield "</td>
              <td class=\"text-small\">";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["command"], "trace", [], "any", false, false, false, 83), "file", [], "any", false, false, false, 83), "html", null, true);
                yield ":";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["command"], "trace", [], "any", false, false, false, 83), "line", [], "any", false, false, false, 83), "html", null, true);
                yield "</td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['command'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            yield "        ";
        } else {
            // line 87
            yield "          <tr>
            <td colspan=\"3\" class=\"font-normal\">No Commands where executed during request.</td>
          </tr>
        ";
        }
        // line 91
        yield "      </tbody>
    </table>

    <h2>Queries</h2>

    <table id=\"cqrs-queries-log\">
      <thead>
        <tr>
          <th>Query</th>
          <th>Query Handler</th>
          <th>Called from</th>
        </tr>
      </thead>
      <tbody class=\"sf-toolbar-ajax-request-list\">
      ";
        // line 105
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 105, $this->source); })()), "executedQueries", [], "any", false, false, false, 105))) {
            // line 106
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 106, $this->source); })()), "executedQueries", [], "any", false, false, false, 106));
            foreach ($context['_seq'] as $context["_key"] => $context["query"]) {
                // line 107
                yield "          <tr>
            <td class=\"text-small\">";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["query"], "query", [], "any", false, false, false, 108), "html", null, true);
                yield "</td>
            <td class=\"text-small\">";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["query"], "query_handler", [], "any", false, false, false, 109), "html", null, true);
                yield "</td>
            <td class=\"text-small\">";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["query"], "trace", [], "any", false, false, false, 110), "file", [], "any", false, false, false, 110), "html", null, true);
                yield ":";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["query"], "trace", [], "any", false, false, false, 110), "line", [], "any", false, false, false, 110), "html", null, true);
                yield "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['query'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            yield "      ";
        } else {
            // line 114
            yield "        <tr>
          <td colspan=\"3\" class=\"font-normal\">No Queries where executed during request.</td>
        </tr>
      ";
        }
        // line 118
        yield "      </tbody>
    </table>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/WebProfiler/commands_and_queries.html.twig";
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
        return array (  307 => 118,  301 => 114,  298 => 113,  287 => 110,  283 => 109,  279 => 108,  276 => 107,  271 => 106,  269 => 105,  253 => 91,  247 => 87,  244 => 86,  233 => 83,  229 => 82,  225 => 81,  222 => 80,  217 => 79,  215 => 78,  201 => 66,  188 => 65,  173 => 60,  170 => 59,  157 => 58,  144 => 55,  141 => 54,  132 => 49,  123 => 48,  121 => 47,  113 => 42,  104 => 41,  102 => 40,  94 => 34,  92 => 33,  89 => 32,  81 => 29,  78 => 28,  65 => 27,  42 => 25,);
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
{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
  {% set icon %}
    {{ include('@WebProfiler/Icon/request.svg') }}
    <span class=\"sf-toolbar-value\">Commands / Queries</span>
  {% endset %}

  {% set text %}
    <div class=\"sf-toolbar-info-piece\">
      <div class=\"sf-toolbar-info-piece\">
        <b class=\"sf-toolbar-ajax-info\">Commands / Queries</b>
      </div>
      <div class=\"sf-toolbar-info-piece\">
        <b>Commands</b>
        {% set commandsCount = collector.executedCommands|length %}
        <span class=\"sf-toolbar-status sf-toolbar-status-{% if commandsCount > 0 %}green{% else %}red{% endif %}\">
          {{ commandsCount }}
        </span>
      </div>
      <div class=\"sf-toolbar-info-piece\">
        <b>Queries</b>
        {% set queriesCount = collector.executedQueries|length %}
        <span class=\"sf-toolbar-status sf-toolbar-status-{% if queriesCount > 0 %}green{% else %}red{% endif %}\">
          {{ queriesCount }}
        </span>
      </div>
    </div>
  {% endset %}

  {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', {link: true}) }}
{% endblock %}

{% block menu %}
  <span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/request.svg') }}</span>
    <strong>Commands / Queries</strong>
  </span>
{% endblock %}

{% block panel %}
  <h2>Commands</h2>

  <div class=\"sf-toolbar-info-piece\">
    <table id=\"cqrs-commands-log\">
      <thead>
        <tr>
          <th>Command</th>
          <th>Command Handler</th>
          <th>Called from</th>
        </tr>
      </thead>
      <tbody class=\"sf-toolbar-ajax-request-list\">
        {% if collector.executedCommands is not empty %}
          {% for command in collector.executedCommands %}
            <tr>
              <td class=\"text-small\">{{ command.command }}</td>
              <td class=\"text-small\">{{ command.command_handler }}</td>
              <td class=\"text-small\">{{ command.trace.file }}:{{ command.trace.line }}</td>
            </tr>
          {% endfor %}
        {% else %}
          <tr>
            <td colspan=\"3\" class=\"font-normal\">No Commands where executed during request.</td>
          </tr>
        {% endif %}
      </tbody>
    </table>

    <h2>Queries</h2>

    <table id=\"cqrs-queries-log\">
      <thead>
        <tr>
          <th>Query</th>
          <th>Query Handler</th>
          <th>Called from</th>
        </tr>
      </thead>
      <tbody class=\"sf-toolbar-ajax-request-list\">
      {% if collector.executedQueries is not empty %}
        {% for query in collector.executedQueries %}
          <tr>
            <td class=\"text-small\">{{ query.query }}</td>
            <td class=\"text-small\">{{ query.query_handler }}</td>
            <td class=\"text-small\">{{ query.trace.file }}:{{ query.trace.line }}</td>
          </tr>
        {% endfor %}
      {% else %}
        <tr>
          <td colspan=\"3\" class=\"font-normal\">No Queries where executed during request.</td>
        </tr>
      {% endif %}
      </tbody>
    </table>
  </div>
{% endblock %}
", "@PrestaShop/Admin/WebProfiler/commands_and_queries.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/WebProfiler/commands_and_queries.html.twig");
    }
}
