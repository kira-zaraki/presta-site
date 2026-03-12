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

/* @PrestaShop/Admin/WebProfiler/legacy.html.twig */
class __TwigTemplate_fe598223b997d2816365b2b2079493bd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/WebProfiler/legacy.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/WebProfiler/legacy.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@PrestaShop/Admin/WebProfiler/legacy.html.twig", 25);
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
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 29, $this->source); })()), "isProfilerEnabled", [], "any", false, false, false, 29)) {
                // line 30
                yield "    🕵️‍♂️&nbsp;<span class=\"sf-toolbar-value\">Legacy</span>
    ";
            }
            // line 32
            yield "  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 33
        yield "
  ";
        // line 34
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true]);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 37
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

        // line 38
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 38, $this->source); })()), "isProfilerEnabled", [], "any", false, false, false, 38)) {
            // line 39
            yield "  <span class=\"label\">
    <span class=\"icon\">🕵️‍♂️</span>
    <strong>Legacy</strong>
  </span>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 46
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

        // line 47
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 47, $this->source); })()), "isProfilerEnabled", [], "any", false, false, false, 47)) {
            // line 48
            yield "    ";
            $context["constRootDir"] = (Twig\Extension\CoreExtension::constant("_PS_ROOT_DIR_") . "/");
            // line 49
            yield "    <div class=\"sf-tabs\">
      <div class=\"tab\">
        <h3 class=\"tab-title\">Summary</h3>
        <div class=\"tab-content\">
          <div class=\"metrics\">
            ";
            // line 54
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 54, $this->source); })()), "summary", [], "any", false, false, false, 54), "loadTime", [], "any", false, false, false, 54))) {
                // line 55
                yield "            <div class=\"metric\">
                <span class=\"value\">";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%01.3f", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 56, $this->source); })()), "summary", [], "any", false, false, false, 56), "loadTime", [], "any", false, false, false, 56)), "html", null, true);
                yield " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Load Time</span>
            </div>
            ";
            }
            // line 60
            yield "            <div class=\"metric\">
                <span class=\"value\">";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 61, $this->source); })()), "summary", [], "any", false, false, false, 61), "queryTime", [], "any", false, false, false, 61), "html", null, true);
            yield " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Querying Time</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 65, $this->source); })()), "summary", [], "any", false, false, false, 65), "nbQueries", [], "any", false, false, false, 65), "html", null, true);
            yield "</span>
                <span class=\"label\">Queries</span>
            </div>
            ";
            // line 68
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 68, $this->source); })()), "summary", [], "any", false, false, false, 68), "peakMemoryUsage", [], "any", false, false, false, 68))) {
                // line 69
                yield "            <div class=\"metric\">
                <span class=\"value\">";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.1f", Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 70, $this->source); })()), "summary", [], "any", false, false, false, 70), "peakMemoryUsage", [], "any", false, false, false, 70) / 1048576), 2)), "html", null, true);
                yield " <span class=\"unit\">Mb</span></span>
                <span class=\"label\">Memory Peak Usage</span>
            </div>
            ";
            }
            // line 74
            yield "            <div class=\"metric\">
                <span class=\"value\">";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 75, $this->source); })()), "summary", [], "any", false, false, false, 75), "includedFiles", [], "any", false, false, false, 75), "html", null, true);
            yield " <span class=\"unit\">files</span> - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 75, $this->source); })()), "summary", [], "any", false, false, false, 75), "totalFileSize", [], "any", false, false, false, 75) / 1048576), 2)), "html", null, true);
            yield " <span class=\"unit\">Mb</span></span>
                <span class=\"label\">Included Files</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 79, $this->source); })()), "summary", [], "any", false, false, false, 79), "totalCacheSize", [], "any", false, false, false, 79) / 1048576), 2)), "html", null, true);
            yield " <span class=\"unit\">Mb</span></span>
                <span class=\"label\">PS Cache Size</span>
            </div>
          </div>
          ";
            // line 83
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 83, $this->source); })()), "summary", [], "any", false, false, false, 83), "globalVarSize", [], "any", false, false, false, 83))) {
                // line 84
                yield "            <h3>Global vars</h3>
            <div class=\"metrics\">
              <div class=\"metric\">
                  <span class=\"value\">";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 87, $this->source); })()), "summary", [], "any", false, false, false, 87), "totalGlobalVarSize", [], "any", false, false, false, 87) / 1048576), 2)), "html", null, true);
                yield " <span class=\"unit\">Mb</span></span>
                  <span class=\"label\">Global vars</span>
              </div>
            </div>
            <div class=\"sf-toolbar-info-piece\">
              <table>
                <thead>
                  <tr>
                    <th>Variable</th>
                    <th>Size</th>
                  </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\">
                  ";
                // line 100
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 100, $this->source); })()), "summary", [], "any", false, false, false, 100), "globalVarSize", [], "any", false, false, false, 100));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 101
                    yield "                    <tr>
                      <td class=\"text-small\">";
                    // line 102
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "</td>
                      <td>";
                    // line 103
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                    yield "k</td>
                    </tr>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 106
                yield "                </tbody>
                </table>
            </div>
          ";
            }
            // line 110
            yield "        </div>
      </div>
      <div class=\"tab\">
        <h3 class=\"tab-title\">Configuration</h3>
        <div class=\"tab-content\">
          <div class=\"metrics\">
            <div class=\"metric\">
              <span class=\"value\">";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 117, $this->source); })()), "configuration", [], "any", false, false, false, 117), "psVersion", [], "any", false, false, false, 117), "html", null, true);
            yield "</span>
              <span class=\"label\">PrestaShop Version</span>
            </div>
            <div class=\"metric\">
              <span class=\"value\">";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 121, $this->source); })()), "configuration", [], "any", false, false, false, 121), "phpVersion", [], "any", false, false, false, 121), "html", null, true);
            yield "</span>
              <span class=\"label\">PHP Version</span>
            </div>
            <div class=\"metric\">
              <span class=\"value\">";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 125, $this->source); })()), "configuration", [], "any", false, false, false, 125), "mysqlVersion", [], "any", false, false, false, 125), "html", null, true);
            yield "</span>
              <span class=\"label\">MySQL Version</span>
            </div>
            <div class=\"metric\">
              <span class=\"value\">";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 129, $this->source); })()), "configuration", [], "any", false, false, false, 129), "memoryLimit", [], "any", false, false, false, 129), "html", null, true);
            yield "</span>
              <span class=\"label\">Memory Limit</span>
            </div>
            <div class=\"metric\">
              <span class=\"value\">";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 133, $this->source); })()), "configuration", [], "any", false, false, false, 133), "maxExecutionTime", [], "any", false, false, false, 133), "html", null, true);
            yield "</span>
              <span class=\"label\">Max Execution Time</span>
            </div>
            <div class=\"metric\">
              <span class=\"value\">";
            // line 137
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 137, $this->source); })()), "configuration", [], "any", false, false, false, 137), "smartyCache", [], "any", false, false, false, 137) === "1")) ? ("enabled") : ("disabled"));
            yield "</span>
              <span class=\"label\">Smarty Cache</span>
            </div>
            <div class=\"metric\">
              <span class=\"value\">
                ";
            // line 142
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 142, $this->source); })()), "configuration", [], "any", false, false, false, 142), "smartyCompilation", [], "any", false, false, false, 142) === "0")) {
                // line 143
                yield "                  never recompile
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 144
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 144, $this->source); })()), "configuration", [], "any", false, false, false, 144), "smartyCompilation", [], "any", false, false, false, 144) === "1")) {
                // line 145
                yield "                  auto
                ";
            } else {
                // line 147
                yield "                  force compile
                ";
            }
            // line 149
            yield "              </span>
              <span class=\"label\">Smarty Compilation</span>
            </div>
          </div>
        </div>
      </div>
      ";
            // line 155
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 155, $this->source); })()), "run", [], "any", false, false, false, 155), "profiler", [], "any", false, false, false, 155)) > 0)) {
                // line 156
                yield "      <div class=\"tab\">
        <h3 class=\"tab-title\">Run <span class=\"badge\">";
                // line 157
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 157, $this->source); })()), "run", [], "any", false, false, false, 157), "profiler", [], "any", false, false, false, 157)), "html", null, true);
                yield "</span></h3>
        <div class=\"tab-content\">
          <div class=\"sf-toolbar-info-piece\">
            <table>
              <thead>
                <tr>
                  <th></th>
                  <th>Time</th>
                  <th>Cumulated Time</th>
                  <th>Memory Usage</th>
                  <th>Memory Peak Usage</th>
                </tr>
              </thead>
              <tbody class=\"sf-toolbar-ajax-request-list\">
                ";
                // line 171
                $context["profilerLastTime"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 171, $this->source); })()), "run", [], "any", false, false, false, 171), "startTime", [], "any", false, false, false, 171);
                // line 172
                yield "                ";
                $context["profilerLastMemUsage"] = 0;
                // line 173
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 173, $this->source); })()), "run", [], "any", false, false, false, 173), "profiler", [], "any", false, false, false, 173));
                foreach ($context['_seq'] as $context["_key"] => $context["profilerRow"]) {
                    // line 174
                    yield "                  ";
                    if ( !((CoreExtension::getAttribute($this->env, $this->source, $context["profilerRow"], "block", [], "any", false, false, false, 174) == "checkAccess") && (CoreExtension::getAttribute($this->env, $this->source, $context["profilerRow"], "time", [], "any", false, false, false, 174) == (isset($context["profilerLastTime"]) || array_key_exists("profilerLastTime", $context) ? $context["profilerLastTime"] : (function () { throw new RuntimeError('Variable "profilerLastTime" does not exist.', 174, $this->source); })())))) {
                        // line 175
                        yield "                  <tr>
                    <td class=\"text-small\">";
                        // line 176
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["profilerRow"], "block", [], "any", false, false, false, 176), "html", null, true);
                        yield "</td>
                    <td>";
                        // line 177
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%01.3f", (CoreExtension::getAttribute($this->env, $this->source, $context["profilerRow"], "time", [], "any", false, false, false, 177) - (isset($context["profilerLastTime"]) || array_key_exists("profilerLastTime", $context) ? $context["profilerLastTime"] : (function () { throw new RuntimeError('Variable "profilerLastTime" does not exist.', 177, $this->source); })()))), "html", null, true);
                        yield "</td>
                    <td>";
                        // line 178
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%01.3f", (CoreExtension::getAttribute($this->env, $this->source, $context["profilerRow"], "time", [], "any", false, false, false, 178) - CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 178, $this->source); })()), "run", [], "any", false, false, false, 178), "startTime", [], "any", false, false, false, 178))), "html", null, true);
                        yield "</td>
                    <td>";
                        // line 179
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["profilerRow"], "memory_usage", [], "any", false, false, false, 179) - (isset($context["profilerLastMemUsage"]) || array_key_exists("profilerLastMemUsage", $context) ? $context["profilerLastMemUsage"] : (function () { throw new RuntimeError('Variable "profilerLastMemUsage" does not exist.', 179, $this->source); })())) / 1048576), 2)), "html", null, true);
                        yield " Mb</td>
                    <td>";
                        // line 180
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.1f", Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, $context["profilerRow"], "peak_memory_usage", [], "any", false, false, false, 180) / 1048576), 2)), "html", null, true);
                        yield " Mb</td>
                  </tr>
                  ";
                    }
                    // line 183
                    yield "                  ";
                    $context["profilerLastTime"] = CoreExtension::getAttribute($this->env, $this->source, $context["profilerRow"], "time", [], "any", false, false, false, 183);
                    // line 184
                    yield "                  ";
                    $context["profilerLastMemUsage"] = CoreExtension::getAttribute($this->env, $this->source, $context["profilerRow"], "memory_usage", [], "any", false, false, false, 184);
                    // line 185
                    yield "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['profilerRow'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 186
                yield "              </tbody>
              </table>
          </div>
        </div>
      </div>
      ";
            }
            // line 192
            yield "      <div class=\"tab\">
        <h3 class=\"tab-title\">Hooks <span class=\"badge\">";
            // line 193
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 193, $this->source); })()), "hooks", [], "any", false, false, false, 193), "perfs", [], "any", false, false, false, 193)), "html", null, true);
            yield "</span></h3>
        <div class=\"tab-content\">
          <div class=\"sf-toolbar-info-piece\">
            <table>
              <thead>
                <tr>
                  <th>Hook</th>
                  <th>Time</th>
                  <th>Memory Usage</th>
                </tr>
              </thead>
              <tbody class=\"sf-toolbar-ajax-request-list\">
                ";
            // line 205
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 205, $this->source); })()), "hooks", [], "any", false, false, false, 205), "perfs", [], "any", false, false, false, 205));
            foreach ($context['_seq'] as $context["profilerHookName"] => $context["profilerHookPerf"]) {
                // line 206
                yield "                <tr>
                  <td class=\"font-normal\">";
                // line 207
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["profilerHookName"], "html", null, true);
                yield "</td>
                  <td>";
                // line 208
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%01.3f", CoreExtension::getAttribute($this->env, $this->source, $context["profilerHookPerf"], "time", [], "any", false, false, false, 208)), "html", null, true);
                yield " ms</td>
                  <td>";
                // line 209
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, $context["profilerHookPerf"], "memory", [], "any", false, false, false, 209) / 1048576), 2)), "html", null, true);
                yield " Mb</td>
                </tr>
                  ";
                // line 211
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["profilerHookPerf"], "modules", [], "any", false, false, false, 211));
                foreach ($context['_seq'] as $context["_key"] => $context["profilerModule"]) {
                    // line 212
                    yield "                  <tr>
                    <td class=\"text-right\">
                      <strong>
                        <span class=\"sf-dump-str\">";
                    // line 215
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["profilerModule"], "module", [], "any", false, false, false, 215), "html", null, true);
                    yield "</span>
                      </strong>
                    </td>
                    <td>";
                    // line 218
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%01.3f", CoreExtension::getAttribute($this->env, $this->source, $context["profilerModule"], "time", [], "any", false, false, false, 218)), "html", null, true);
                    yield " ms</td>
                    <td>";
                    // line 219
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, $context["profilerModule"], "memory", [], "any", false, false, false, 219) / 1048576), 2)), "html", null, true);
                    yield " Mb</td>
                  </tr>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['profilerModule'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 222
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['profilerHookName'], $context['profilerHookPerf'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 223
            yield "              </tbody>
              <tfoot>
                <tr>
                  <th>";
            // line 226
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 226, $this->source); })()), "hooks", [], "any", false, false, false, 226), "perfs", [], "any", false, false, false, 226)), "html", null, true);
            yield " hooks</th>
                  <th>";
            // line 227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%01.3f", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 227, $this->source); })()), "hooks", [], "any", false, false, false, 227), "totalHooksTime", [], "any", false, false, false, 227)), "html", null, true);
            yield " ms</th>
                  <th>";
            // line 228
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 228, $this->source); })()), "hooks", [], "any", false, false, false, 228), "totalHooksMemory", [], "any", false, false, false, 228) / 1048576), 2)), "html", null, true);
            yield " Mb</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
      <div class=\"tab\">
        <h3 class=\"tab-title\">Modules <span class=\"badge\">";
            // line 236
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 236, $this->source); })()), "modules", [], "any", false, false, false, 236), "perfs", [], "any", false, false, false, 236)), "html", null, true);
            yield "</span></h3>
        <div class=\"tab-content\">
          <div class=\"sf-toolbar-info-piece\">
            <table>
              <thead>
                <tr>
                  <th>Module</th>
                  <th>Time</th>
                  <th>Memory Usage</th>
                </tr>
              </thead>
              <tbody class=\"sf-toolbar-ajax-request-list\">
                ";
            // line 248
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 248, $this->source); })()), "modules", [], "any", false, false, false, 248), "perfs", [], "any", false, false, false, 248));
            foreach ($context['_seq'] as $context["profilerModuleName"] => $context["profilerModulePerf"]) {
                // line 249
                yield "                <tr>
                  <td class=\"font-normal\">";
                // line 250
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["profilerModuleName"], "html", null, true);
                yield "</td>
                  <td>";
                // line 251
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%01.3f", CoreExtension::getAttribute($this->env, $this->source, $context["profilerModulePerf"], "total_time", [], "any", false, false, false, 251)), "html", null, true);
                yield " ms</td>
                  <td>";
                // line 252
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, $context["profilerModulePerf"], "total_memory", [], "any", false, false, false, 252) / 1048576), 2)), "html", null, true);
                yield " Mb</td>
                </tr>
                  ";
                // line 254
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["profilerModulePerf"], "details", [], "any", false, false, false, 254));
                foreach ($context['_seq'] as $context["_key"] => $context["profilerDetail"]) {
                    // line 255
                    yield "                  <tr>
                    <td class=\"text-right\">
                      <strong>
                        <span class=\"sf-dump-str\">";
                    // line 258
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["profilerDetail"], "method", [], "any", false, false, false, 258), "html", null, true);
                    yield "</span>
                      </strong>
                    </td>
                    <td>";
                    // line 261
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%01.3f", CoreExtension::getAttribute($this->env, $this->source, $context["profilerDetail"], "time", [], "any", false, false, false, 261)), "html", null, true);
                    yield " ms</td>
                    <td>";
                    // line 262
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, $context["profilerDetail"], "memory", [], "any", false, false, false, 262) / 1048576), 2)), "html", null, true);
                    yield " Mb</td>
                  </tr>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['profilerDetail'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 265
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['profilerModuleName'], $context['profilerModulePerf'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 266
            yield "              </tbody>
              <tfoot>
                <tr>
                  <th>";
            // line 269
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 269, $this->source); })()), "modules", [], "any", false, false, false, 269), "perfs", [], "any", false, false, false, 269)), "html", null, true);
            yield " modules</th>
                  <th>";
            // line 270
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%01.3f", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 270, $this->source); })()), "modules", [], "any", false, false, false, 270), "totalHooksTime", [], "any", false, false, false, 270)), "html", null, true);
            yield " ms</th>
                  <th>";
            // line 271
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 271, $this->source); })()), "modules", [], "any", false, false, false, 271), "totalHooksMemory", [], "any", false, false, false, 271) / 1048576), 2)), "html", null, true);
            yield " Mb</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
      <div class=\"tab\">
        <h3 class=\"tab-title\">Stopwatch SQL <span class=\"badge\">";
            // line 279
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 279, $this->source); })()), "summary", [], "any", false, false, false, 279), "nbQueries", [], "any", false, false, false, 279), "html", null, true);
            yield "</span></h3>
        <div class=\"tab-content\">
          <div class=\"sf-toolbar-info-piece\">
            <table>
              <thead>
                <tr>
                  <th>#</th>
                  <th>Query</th>
                  <th>Time (ms)</th>
                  <th>Rows</th>
                  <th>Filesort</th>
                  <th>Group By</th>
                  <th>Location</th>
                </tr>
              </thead>
              <tbody class=\"sf-toolbar-ajax-request-list\">
                ";
            // line 295
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 295, $this->source); })()), "stopwatch", [], "any", false, false, false, 295));
            foreach ($context['_seq'] as $context["_key"] => $context["profilerStopwatch"]) {
                // line 296
                yield "                <tr>
                  <td class=\"font-normal\">";
                // line 297
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["profilerStopwatch"], "id", [], "any", false, false, false, 297), "html", null, true);
                yield "</td>
                  <td>
                    <span class=\"sf-dump-str\">";
                // line 299
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["profilerStopwatch"], "query", [], "any", false, false, false, 299), "html", null, true);
                yield "</span>
                  </td>
                  <td class=\"font-normal\">";
                // line 301
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%01.3f", (CoreExtension::getAttribute($this->env, $this->source, $context["profilerStopwatch"], "time", [], "any", false, false, false, 301) * 1000)), "html", null, true);
                yield "&nbsp;ms</td>
                  <td class=\"font-normal text-right\">";
                // line 302
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["profilerStopwatch"], "rows", [], "any", false, false, false, 302), "html", null, true);
                yield "</td>
                  <td class=\"font-normal\">";
                // line 303
                if (CoreExtension::getAttribute($this->env, $this->source, $context["profilerStopwatch"], "filesort", [], "any", false, false, false, 303)) {
                    yield "Yes";
                } else {
                    yield "No";
                }
                yield "</td>
                  <td class=\"font-normal\">";
                // line 304
                if (CoreExtension::getAttribute($this->env, $this->source, $context["profilerStopwatch"], "group_by", [], "any", false, false, false, 304)) {
                    yield "Yes";
                } else {
                    yield "No";
                }
                yield "</td>
                  <td>
                    <strong>";
                // line 306
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["profilerStopwatch"], "location", [], "any", false, false, false, 306), "html", null, true);
                yield "</strong><br />
                    ";
                // line 307
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["profilerStopwatch"], "stack", [], "any", false, false, false, 307));
                foreach ($context['_seq'] as $context["_key"] => $context["profilerStopwatchStack"]) {
                    // line 308
                    yield "                      ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["profilerStopwatchStack"], "html", null, true);
                    yield "<br />
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['profilerStopwatchStack'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 310
                yield "                  </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['profilerStopwatch'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 313
            yield "              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class=\"tab\">
        <h3 class=\"tab-title\">Double queries <span class=\"badge\">";
            // line 319
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 319, $this->source); })()), "doubles", [], "any", false, false, false, 319), function ($__numQueries__, $__query__) use ($context, $macros) { $context["numQueries"] = $__numQueries__; $context["query"] = $__query__; return ((isset($context["numQueries"]) || array_key_exists("numQueries", $context) ? $context["numQueries"] : (function () { throw new RuntimeError('Variable "numQueries" does not exist.', 319, $this->source); })()) > 1); })), "html", null, true);
            yield "</span></h3>
        <div class=\"tab-content\">
          <div class=\"sf-toolbar-info-piece\">
            <table>
              <thead>
                <tr>
                  <th>#</th>
                  <th>Query</th>
                </tr>
              </thead>
              <tbody class=\"sf-toolbar-ajax-request-list\">
                ";
            // line 330
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 330, $this->source); })()), "doubles", [], "any", false, false, false, 330), function ($__numQueries__, $__query__) use ($context, $macros) { $context["numQueries"] = $__numQueries__; $context["query"] = $__query__; return ($context["numQueries"] > 1); }));
            foreach ($context['_seq'] as $context["query"] => $context["numQueries"]) {
                // line 331
                yield "                <tr>
                  <td class=\"font-normal\">";
                // line 332
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["numQueries"], "html", null, true);
                yield "</td>
                  <td>
                    <strong>
                      <span class=\"sf-dump-str\">";
                // line 335
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["query"], "html", null, true);
                yield "</span>
                    </strong>
                  </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['query'], $context['numQueries'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 340
            yield "              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class=\"tab\">
        <h3 class=\"tab-title\">SQL Table Stress <span class=\"badge\">";
            // line 346
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 346, $this->source); })()), "sqlTableStress", [], "any", false, false, false, 346)), "html", null, true);
            yield "</span></h3>
        <div class=\"tab-content\">
          <div class=\"sf-toolbar-info-piece\">
            <table>
              <thead>
                <tr>
                  <th>#</th>
                  <th>Table</th>
                </tr>
              </thead>
              <tbody class=\"sf-toolbar-ajax-request-list\">
                ";
            // line 357
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 357, $this->source); })()), "sqlTableStress", [], "any", false, false, false, 357));
            foreach ($context['_seq'] as $context["table"] => $context["numRows"]) {
                // line 358
                yield "                <tr>
                  <td class=\"font-normal\">";
                // line 359
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["numRows"], "html", null, true);
                yield "</td>
                  <td>
                    <strong>
                      <span class=\"sf-dump-str\">";
                // line 362
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["table"], "html", null, true);
                yield "</span>
                    </strong>
                  </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['table'], $context['numRows'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 367
            yield "              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class=\"tab\">
        <h3 class=\"tab-title\">ObjectModel Instances <span class=\"badge\">";
            // line 373
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 373, $this->source); })()), "objectModelInstances", [], "any", false, false, false, 373)), "html", null, true);
            yield "</span></h3>
        <div class=\"tab-content\">
          <div class=\"sf-toolbar-info-piece\">
            <table>
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Instances</th>
                  <th>Source</th>
                </tr>
              </thead>
              <tbody class=\"sf-toolbar-ajax-request-list\">
                ";
            // line 385
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 385, $this->source); })()), "objectModelInstances", [], "any", false, false, false, 385));
            foreach ($context['_seq'] as $context["objectModelClass"] => $context["objectModelInfo"]) {
                // line 386
                yield "                <tr>
                  <td>";
                // line 387
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["objectModelClass"], "html", null, true);
                yield "</td>
                  <td class=\"font-normal\">";
                // line 388
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["objectModelInfo"]), "html", null, true);
                yield "</td>
                  <td>
                    ";
                // line 390
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["objectModelInfo"]);
                foreach ($context['_seq'] as $context["_key"] => $context["objectModelInfoItem"]) {
                    // line 391
                    yield "                      ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["objectModelInfoItem"], "file", [], "any", false, false, false, 391), [ (string)(isset($context["constRootDir"]) || array_key_exists("constRootDir", $context) ? $context["constRootDir"] : (function () { throw new RuntimeError('Variable "constRootDir" does not exist.', 391, $this->source); })()) => ""]), "html", null, true);
                    yield ":";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectModelInfoItem"], "line", [], "any", false, false, false, 391), "html", null, true);
                    yield " (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectModelInfoItem"], "function", [], "any", false, false, false, 391), "html", null, true);
                    yield ") [id: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectModelInfoItem"], "id", [], "any", false, false, false, 391), "html", null, true);
                    yield "]
                      <br />
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['objectModelInfoItem'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 394
                yield "                  </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['objectModelClass'], $context['objectModelInfo'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 397
            yield "              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class=\"tab\">
        <h3 class=\"tab-title\">Included files <span class=\"badge\">";
            // line 403
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 403, $this->source); })()), "includedFiles", [], "any", false, false, false, 403), function ($__includedFile__) use ($context, $macros) { $context["includedFile"] = $__includedFile__; return !CoreExtension::inFilter("/tools/profiling/", (isset($context["includedFile"]) || array_key_exists("includedFile", $context) ? $context["includedFile"] : (function () { throw new RuntimeError('Variable "includedFile" does not exist.', 403, $this->source); })())); })), "html", null, true);
            yield "</span></h3>
        <div class=\"tab-content\">
          <div class=\"sf-toolbar-info-piece\">
            <table>
              <thead>
                <tr>
                  <th>#</th>
                  <th>Filename</th>
                </tr>
              </thead>
              <tbody class=\"sf-toolbar-ajax-request-list\">
                ";
            // line 414
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 414, $this->source); })()), "includedFiles", [], "any", false, false, false, 414), function ($__includedFile__) use ($context, $macros) { $context["includedFile"] = $__includedFile__; return !CoreExtension::inFilter("/tools/profiling/", $context["includedFile"]); }));
            foreach ($context['_seq'] as $context["k"] => $context["includedFile"]) {
                // line 415
                yield "                <tr>
                  <td class=\"font-normal\">";
                // line 416
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                yield "</td>
                  <td>";
                // line 417
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($context["includedFile"], [ (string)(isset($context["constRootDir"]) || array_key_exists("constRootDir", $context) ? $context["constRootDir"] : (function () { throw new RuntimeError('Variable "constRootDir" does not exist.', 417, $this->source); })()) => ""]), "html", null, true);
                yield "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['k'], $context['includedFile'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 420
            yield "              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/WebProfiler/legacy.html.twig";
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
        return array (  905 => 420,  896 => 417,  892 => 416,  889 => 415,  885 => 414,  871 => 403,  863 => 397,  855 => 394,  839 => 391,  835 => 390,  830 => 388,  826 => 387,  823 => 386,  819 => 385,  804 => 373,  796 => 367,  785 => 362,  779 => 359,  776 => 358,  772 => 357,  758 => 346,  750 => 340,  739 => 335,  733 => 332,  730 => 331,  726 => 330,  712 => 319,  704 => 313,  696 => 310,  687 => 308,  683 => 307,  679 => 306,  670 => 304,  662 => 303,  658 => 302,  654 => 301,  649 => 299,  644 => 297,  641 => 296,  637 => 295,  618 => 279,  607 => 271,  603 => 270,  599 => 269,  594 => 266,  588 => 265,  579 => 262,  575 => 261,  569 => 258,  564 => 255,  560 => 254,  555 => 252,  551 => 251,  547 => 250,  544 => 249,  540 => 248,  525 => 236,  514 => 228,  510 => 227,  506 => 226,  501 => 223,  495 => 222,  486 => 219,  482 => 218,  476 => 215,  471 => 212,  467 => 211,  462 => 209,  458 => 208,  454 => 207,  451 => 206,  447 => 205,  432 => 193,  429 => 192,  421 => 186,  415 => 185,  412 => 184,  409 => 183,  403 => 180,  399 => 179,  395 => 178,  391 => 177,  387 => 176,  384 => 175,  381 => 174,  376 => 173,  373 => 172,  371 => 171,  354 => 157,  351 => 156,  349 => 155,  341 => 149,  337 => 147,  333 => 145,  331 => 144,  328 => 143,  326 => 142,  318 => 137,  311 => 133,  304 => 129,  297 => 125,  290 => 121,  283 => 117,  274 => 110,  268 => 106,  259 => 103,  255 => 102,  252 => 101,  248 => 100,  232 => 87,  227 => 84,  225 => 83,  218 => 79,  209 => 75,  206 => 74,  199 => 70,  196 => 69,  194 => 68,  188 => 65,  181 => 61,  178 => 60,  171 => 56,  168 => 55,  166 => 54,  159 => 49,  156 => 48,  153 => 47,  140 => 46,  124 => 39,  121 => 38,  108 => 37,  95 => 34,  92 => 33,  88 => 32,  84 => 30,  81 => 29,  78 => 28,  65 => 27,  42 => 25,);
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
    {% if collector.isProfilerEnabled %}
    🕵️‍♂️&nbsp;<span class=\"sf-toolbar-value\">Legacy</span>
    {% endif %}
  {% endset %}

  {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', {link: true}) }}
{% endblock %}

{% block menu %}
  {% if collector.isProfilerEnabled %}
  <span class=\"label\">
    <span class=\"icon\">🕵️‍♂️</span>
    <strong>Legacy</strong>
  </span>
  {% endif %}
{% endblock %}

{% block panel %}
  {% if collector.isProfilerEnabled %}
    {% set constRootDir = constant('_PS_ROOT_DIR_') ~ '/' %}
    <div class=\"sf-tabs\">
      <div class=\"tab\">
        <h3 class=\"tab-title\">Summary</h3>
        <div class=\"tab-content\">
          <div class=\"metrics\">
            {% if collector.summary.loadTime is not null %}
            <div class=\"metric\">
                <span class=\"value\">{{ '%01.3f'|format(collector.summary.loadTime) }} <span class=\"unit\">ms</span></span>
                <span class=\"label\">Load Time</span>
            </div>
            {% endif %}
            <div class=\"metric\">
                <span class=\"value\">{{ collector.summary.queryTime }} <span class=\"unit\">ms</span></span>
                <span class=\"label\">Querying Time</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">{{ collector.summary.nbQueries }}</span>
                <span class=\"label\">Queries</span>
            </div>
            {% if collector.summary.peakMemoryUsage is not null %}
            <div class=\"metric\">
                <span class=\"value\">{{ '%0.1f'|format((collector.summary.peakMemoryUsage / 1048576)|round(2)) }} <span class=\"unit\">Mb</span></span>
                <span class=\"label\">Memory Peak Usage</span>
            </div>
            {% endif %}
            <div class=\"metric\">
                <span class=\"value\">{{ collector.summary.includedFiles }} <span class=\"unit\">files</span> - {{ '%0.2f'|format((collector.summary.totalFileSize / 1048576)|round(2)) }} <span class=\"unit\">Mb</span></span>
                <span class=\"label\">Included Files</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">{{ '%0.2f'|format((collector.summary.totalCacheSize / 1048576)|round(2)) }} <span class=\"unit\">Mb</span></span>
                <span class=\"label\">PS Cache Size</span>
            </div>
          </div>
          {% if collector.summary.globalVarSize is not empty %}
            <h3>Global vars</h3>
            <div class=\"metrics\">
              <div class=\"metric\">
                  <span class=\"value\">{{ '%0.2f'|format((collector.summary.totalGlobalVarSize / 1048576)|round(2)) }} <span class=\"unit\">Mb</span></span>
                  <span class=\"label\">Global vars</span>
              </div>
            </div>
            <div class=\"sf-toolbar-info-piece\">
              <table>
                <thead>
                  <tr>
                    <th>Variable</th>
                    <th>Size</th>
                  </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\">
                  {% for key, value in collector.summary.globalVarSize %}
                    <tr>
                      <td class=\"text-small\">{{ key }}</td>
                      <td>{{ value }}k</td>
                    </tr>
                  {% endfor %}
                </tbody>
                </table>
            </div>
          {% endif %}
        </div>
      </div>
      <div class=\"tab\">
        <h3 class=\"tab-title\">Configuration</h3>
        <div class=\"tab-content\">
          <div class=\"metrics\">
            <div class=\"metric\">
              <span class=\"value\">{{ collector.configuration.psVersion }}</span>
              <span class=\"label\">PrestaShop Version</span>
            </div>
            <div class=\"metric\">
              <span class=\"value\">{{ collector.configuration.phpVersion }}</span>
              <span class=\"label\">PHP Version</span>
            </div>
            <div class=\"metric\">
              <span class=\"value\">{{ collector.configuration.mysqlVersion }}</span>
              <span class=\"label\">MySQL Version</span>
            </div>
            <div class=\"metric\">
              <span class=\"value\">{{ collector.configuration.memoryLimit }}</span>
              <span class=\"label\">Memory Limit</span>
            </div>
            <div class=\"metric\">
              <span class=\"value\">{{ collector.configuration.maxExecutionTime }}</span>
              <span class=\"label\">Max Execution Time</span>
            </div>
            <div class=\"metric\">
              <span class=\"value\">{{ collector.configuration.smartyCache is same as '1' ? 'enabled' : 'disabled' }}</span>
              <span class=\"label\">Smarty Cache</span>
            </div>
            <div class=\"metric\">
              <span class=\"value\">
                {% if collector.configuration.smartyCompilation is same as '0' %}
                  never recompile
                {% elseif collector.configuration.smartyCompilation is same as '1' %}
                  auto
                {% else %}
                  force compile
                {% endif %}
              </span>
              <span class=\"label\">Smarty Compilation</span>
            </div>
          </div>
        </div>
      </div>
      {% if collector.run.profiler|length > 0 %}
      <div class=\"tab\">
        <h3 class=\"tab-title\">Run <span class=\"badge\">{{ collector.run.profiler|length }}</span></h3>
        <div class=\"tab-content\">
          <div class=\"sf-toolbar-info-piece\">
            <table>
              <thead>
                <tr>
                  <th></th>
                  <th>Time</th>
                  <th>Cumulated Time</th>
                  <th>Memory Usage</th>
                  <th>Memory Peak Usage</th>
                </tr>
              </thead>
              <tbody class=\"sf-toolbar-ajax-request-list\">
                {% set profilerLastTime = collector.run.startTime %}
                {% set profilerLastMemUsage = 0 %}
                {% for profilerRow in collector.run.profiler %}
                  {% if not (profilerRow.block == 'checkAccess' and profilerRow.time == profilerLastTime) %}
                  <tr>
                    <td class=\"text-small\">{{ profilerRow.block }}</td>
                    <td>{{ '%01.3f'|format(profilerRow.time - profilerLastTime) }}</td>
                    <td>{{ '%01.3f'|format(profilerRow.time - collector.run.startTime) }}</td>
                    <td>{{ '%0.2f'|format(((profilerRow.memory_usage - profilerLastMemUsage) / 1048576)|round(2)) }} Mb</td>
                    <td>{{ '%0.1f'|format((profilerRow.peak_memory_usage / 1048576)|round(2)) }} Mb</td>
                  </tr>
                  {% endif %}
                  {% set profilerLastTime = profilerRow.time %}
                  {% set profilerLastMemUsage = profilerRow.memory_usage %}
                {% endfor %}
              </tbody>
              </table>
          </div>
        </div>
      </div>
      {% endif %}
      <div class=\"tab\">
        <h3 class=\"tab-title\">Hooks <span class=\"badge\">{{ collector.hooks.perfs|length }}</span></h3>
        <div class=\"tab-content\">
          <div class=\"sf-toolbar-info-piece\">
            <table>
              <thead>
                <tr>
                  <th>Hook</th>
                  <th>Time</th>
                  <th>Memory Usage</th>
                </tr>
              </thead>
              <tbody class=\"sf-toolbar-ajax-request-list\">
                {% for profilerHookName, profilerHookPerf in collector.hooks.perfs %}
                <tr>
                  <td class=\"font-normal\">{{ profilerHookName }}</td>
                  <td>{{ '%01.3f'|format(profilerHookPerf.time) }} ms</td>
                  <td>{{ '%0.2f'|format((profilerHookPerf.memory / 1048576)|round(2)) }} Mb</td>
                </tr>
                  {% for profilerModule in profilerHookPerf.modules %}
                  <tr>
                    <td class=\"text-right\">
                      <strong>
                        <span class=\"sf-dump-str\">{{ profilerModule.module }}</span>
                      </strong>
                    </td>
                    <td>{{ '%01.3f'|format(profilerModule.time) }} ms</td>
                    <td>{{ '%0.2f'|format((profilerModule.memory / 1048576)|round(2)) }} Mb</td>
                  </tr>
                  {% endfor %}
                {% endfor %}
              </tbody>
              <tfoot>
                <tr>
                  <th>{{ collector.hooks.perfs|length }} hooks</th>
                  <th>{{ '%01.3f'|format(collector.hooks.totalHooksTime) }} ms</th>
                  <th>{{ '%0.2f'|format((collector.hooks.totalHooksMemory / 1048576)|round(2)) }} Mb</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
      <div class=\"tab\">
        <h3 class=\"tab-title\">Modules <span class=\"badge\">{{ collector.modules.perfs|length }}</span></h3>
        <div class=\"tab-content\">
          <div class=\"sf-toolbar-info-piece\">
            <table>
              <thead>
                <tr>
                  <th>Module</th>
                  <th>Time</th>
                  <th>Memory Usage</th>
                </tr>
              </thead>
              <tbody class=\"sf-toolbar-ajax-request-list\">
                {% for profilerModuleName, profilerModulePerf in collector.modules.perfs %}
                <tr>
                  <td class=\"font-normal\">{{ profilerModuleName }}</td>
                  <td>{{ '%01.3f'|format(profilerModulePerf.total_time) }} ms</td>
                  <td>{{ '%0.2f'|format((profilerModulePerf.total_memory / 1048576)|round(2)) }} Mb</td>
                </tr>
                  {% for profilerDetail in profilerModulePerf.details %}
                  <tr>
                    <td class=\"text-right\">
                      <strong>
                        <span class=\"sf-dump-str\">{{ profilerDetail.method }}</span>
                      </strong>
                    </td>
                    <td>{{ '%01.3f'|format(profilerDetail.time) }} ms</td>
                    <td>{{ '%0.2f'|format((profilerDetail.memory / 1048576)|round(2)) }} Mb</td>
                  </tr>
                  {% endfor %}
                {% endfor %}
              </tbody>
              <tfoot>
                <tr>
                  <th>{{ collector.modules.perfs|length }} modules</th>
                  <th>{{ '%01.3f'|format(collector.modules.totalHooksTime) }} ms</th>
                  <th>{{ '%0.2f'|format((collector.modules.totalHooksMemory / 1048576)|round(2)) }} Mb</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
      <div class=\"tab\">
        <h3 class=\"tab-title\">Stopwatch SQL <span class=\"badge\">{{ collector.summary.nbQueries }}</span></h3>
        <div class=\"tab-content\">
          <div class=\"sf-toolbar-info-piece\">
            <table>
              <thead>
                <tr>
                  <th>#</th>
                  <th>Query</th>
                  <th>Time (ms)</th>
                  <th>Rows</th>
                  <th>Filesort</th>
                  <th>Group By</th>
                  <th>Location</th>
                </tr>
              </thead>
              <tbody class=\"sf-toolbar-ajax-request-list\">
                {% for profilerStopwatch in collector.stopwatch %}
                <tr>
                  <td class=\"font-normal\">{{ profilerStopwatch.id }}</td>
                  <td>
                    <span class=\"sf-dump-str\">{{ profilerStopwatch.query }}</span>
                  </td>
                  <td class=\"font-normal\">{{ '%01.3f'|format(profilerStopwatch.time * 1000) }}&nbsp;ms</td>
                  <td class=\"font-normal text-right\">{{ profilerStopwatch.rows }}</td>
                  <td class=\"font-normal\">{% if profilerStopwatch.filesort %}Yes{% else %}No{% endif %}</td>
                  <td class=\"font-normal\">{% if profilerStopwatch.group_by %}Yes{% else %}No{% endif %}</td>
                  <td>
                    <strong>{{ profilerStopwatch.location }}</strong><br />
                    {% for profilerStopwatchStack in profilerStopwatch.stack %}
                      {{ profilerStopwatchStack }}<br />
                    {% endfor %}
                  </td>
                </tr>
                {% endfor %}
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class=\"tab\">
        <h3 class=\"tab-title\">Double queries <span class=\"badge\">{{ collector.doubles|filter((numQueries, query) => numQueries > 1)|length }}</span></h3>
        <div class=\"tab-content\">
          <div class=\"sf-toolbar-info-piece\">
            <table>
              <thead>
                <tr>
                  <th>#</th>
                  <th>Query</th>
                </tr>
              </thead>
              <tbody class=\"sf-toolbar-ajax-request-list\">
                {% for query, numQueries in collector.doubles|filter((numQueries, query) => numQueries > 1) %}
                <tr>
                  <td class=\"font-normal\">{{ numQueries }}</td>
                  <td>
                    <strong>
                      <span class=\"sf-dump-str\">{{ query }}</span>
                    </strong>
                  </td>
                </tr>
                {% endfor %}
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class=\"tab\">
        <h3 class=\"tab-title\">SQL Table Stress <span class=\"badge\">{{ collector.sqlTableStress|length }}</span></h3>
        <div class=\"tab-content\">
          <div class=\"sf-toolbar-info-piece\">
            <table>
              <thead>
                <tr>
                  <th>#</th>
                  <th>Table</th>
                </tr>
              </thead>
              <tbody class=\"sf-toolbar-ajax-request-list\">
                {% for table, numRows in collector.sqlTableStress %}
                <tr>
                  <td class=\"font-normal\">{{ numRows }}</td>
                  <td>
                    <strong>
                      <span class=\"sf-dump-str\">{{ table }}</span>
                    </strong>
                  </td>
                </tr>
                {% endfor %}
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class=\"tab\">
        <h3 class=\"tab-title\">ObjectModel Instances <span class=\"badge\">{{ collector.objectModelInstances|length }}</span></h3>
        <div class=\"tab-content\">
          <div class=\"sf-toolbar-info-piece\">
            <table>
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Instances</th>
                  <th>Source</th>
                </tr>
              </thead>
              <tbody class=\"sf-toolbar-ajax-request-list\">
                {% for objectModelClass, objectModelInfo in collector.objectModelInstances %}
                <tr>
                  <td>{{ objectModelClass }}</td>
                  <td class=\"font-normal\">{{ objectModelInfo|length }}</td>
                  <td>
                    {% for objectModelInfoItem in objectModelInfo %}
                      {{ objectModelInfoItem.file|replace({(constRootDir): ''}) }}:{{ objectModelInfoItem.line }} ({{ objectModelInfoItem.function }}) [id: {{ objectModelInfoItem.id }}]
                      <br />
                    {% endfor %}
                  </td>
                </tr>
                {% endfor %}
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class=\"tab\">
        <h3 class=\"tab-title\">Included files <span class=\"badge\">{{ collector.includedFiles|filter((includedFile) => '/tools/profiling/' not in includedFile)|length }}</span></h3>
        <div class=\"tab-content\">
          <div class=\"sf-toolbar-info-piece\">
            <table>
              <thead>
                <tr>
                  <th>#</th>
                  <th>Filename</th>
                </tr>
              </thead>
              <tbody class=\"sf-toolbar-ajax-request-list\">
                {% for k, includedFile in collector.includedFiles|filter((includedFile) => '/tools/profiling/' not in includedFile) %}
                <tr>
                  <td class=\"font-normal\">{{ k }}</td>
                  <td>{{ includedFile|replace({(constRootDir): ''}) }}</td>
                </tr>
                {% endfor %}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  {% endif %}
{% endblock %}
", "@PrestaShop/Admin/WebProfiler/legacy.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/WebProfiler/legacy.html.twig");
    }
}
