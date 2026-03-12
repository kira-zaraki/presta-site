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

/* @PrestaShop/Admin/WebProfiler/hooks_collector.html.twig */
class __TwigTemplate_960ee6246c0f7368f1b9a47620420411 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/WebProfiler/hooks_collector.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/WebProfiler/hooks_collector.html.twig"));

        // line 27
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 25
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@PrestaShop/Admin/WebProfiler/hooks_collector.html.twig", 25);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 29
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

        // line 30
        yield "    ";
        $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 31
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Icon/event.svg");
            yield "
        <span class=\"sf-toolbar-value\">Hooks (";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 32, $this->source); })()), "calledHooks", [], "any", false, false, false, 32)), "html", null, true);
            yield ")</span>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 34
        yield "
    ";
        // line 35
        $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 36
            yield "        <div class=\"sf-toolbar-info-piece\">
            <div class=\"sf-toolbar-info-piece\">
                <b class=\"sf-toolbar-ajax-info\">";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 38, $this->source); })()), "calledHooks", [], "any", false, false, false, 38)), "html", null, true);
            yield "
                    Hooks called and received by modules
                </b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <table class=\"sf-toolbar-ajax-requests\">
                    <thead>
                    <tr>
                        <th>Hook name</th>
                        <th>Call(s)</th>
                    </tr>
                    </thead>
                    <tbody class=\"sf-toolbar-ajax-request-list\">
                        ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 51, $this->source); })()), "calledHooks", [], "any", false, false, false, 51));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["hookName"] => $context["hooks"]) {
                // line 52
                yield "                            <tr><td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["hookName"], "html", null, true);
                yield "</td><td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["hooks"]), "html", null, true);
                yield "</td></tr>
                        ";
                $context['_iterated'] = true;
            }
            // line 53
            if (!$context['_iterated']) {
                // line 54
                yield "                            <tr><td colspan=\"2\">No hook dispatched.</td></tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['hookName'], $context['hooks'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            yield "                    </tbody>
                </table>
            </div>
        </div>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 61
        yield "
    ";
        // line 62
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true]);
        yield "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 66
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

        // line 67
        yield "    ";
        // line 68
        yield "    <span class=\"label\">
        <span class=\"icon\">";
        // line 69
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Icon/event.svg");
        yield "</span>
        <strong>Hooks</strong>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 74
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

        // line 75
        yield "    <h2>Hooks</h2>

    ";
        // line 77
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 77, $this->source); })()), "notCalledHooks", [], "any", false, false, false, 77))) {
            // line 78
            yield "        <div class=\"empty\">
            <p>No Hooks have been recorded. Check that debugging is enabled in the kernel.</p>
        </div>
    ";
        } else {
            // line 82
            yield "        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">
                    Hooks called and received by modules
                    <span class=\"badge\">";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 86, $this->source); })()), "calledHooks", [], "any", false, false, false, 86)), "html", null, true);
            yield "</span>
                </h3>
                <p>
                    These hooks have been dispatched by PrestaShop and there are active modules listening and receiving them.
                </p>
                <div class=\"tab-content\">
                    ";
            // line 92
            yield $macros["helper"]->getTemplateForMacro("macro_render_table", $context, 92, $this->getSourceContext())->macro_render_table(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 92, $this->source); })()), "calledHooks", [], "any", false, false, false, 92), true]);
            yield "
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">
                    Hooks called but not received by modules
                    <span class=\"badge\">";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 99, $this->source); })()), "notCalledHooks", [], "any", false, false, false, 99)), "html", null, true);
            yield "</span>
                </h3>
                <p>
                    These hooks have been dispatched by PrestaShop but no modules
                    have subscribed to them.
                </p>
                <div class=\"tab-content\">
                    ";
            // line 106
            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 106, $this->source); })()), "notCalledHooks", [], "any", false, false, false, 106))) {
                // line 107
                yield "                        <div class=\"empty\">
                            <p>
                                <strong>There are no uncalled hooks</strong>.
                            </p>
                            <p>
                                All hooks were called for this request or an error occurred
                                when trying to collect uncalled listeners (in which case check the
                                logs to get more information).
                            </p>
                        </div>
                    ";
            } else {
                // line 118
                yield "                        ";
                yield $macros["helper"]->getTemplateForMacro("macro_render_table", $context, 118, $this->getSourceContext())->macro_render_table(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 118, $this->source); })()), "notCalledHooks", [], "any", false, false, false, 118), false]);
                yield "
                    ";
            }
            // line 120
            yield "                </div>
            </div>

          <div class=\"tab\">
            <h3 class=\"tab-title\">
              Not registered hooks
              <span class=\"badge\">";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 126, $this->source); })()), "notRegisteredHooks", [], "any", false, false, false, 126)), "html", null, true);
            yield "</span>
            </h3>
            <p>
              These hooks have been dispatched by PrestaShop but they are not registered in the database, meaning no modules registered them
              and they were not added in the hook fixtures for core hooks.
            </p>
            <div class=\"tab-content\">
              ";
            // line 133
            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 133, $this->source); })()), "notRegisteredHooks", [], "any", false, false, false, 133))) {
                // line 134
                yield "                <div class=\"empty\">
                  <p>
                    <strong>There are no unregistered hooks</strong>.
                  </p>
                  <p>
                    Seems like all hooks had appropriate listeners so they were all correctly registered in the database.
                  </p>
                </div>
              ";
            } else {
                // line 143
                yield "                ";
                yield $macros["helper"]->getTemplateForMacro("macro_render_table", $context, 143, $this->getSourceContext())->macro_render_table(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 143, $this->source); })()), "notRegisteredHooks", [], "any", false, false, false, 143), false]);
                yield "
              ";
            }
            // line 145
            yield "            </div>
          </div>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 151
    public function macro_render_table($hookList = null, $hookModules = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "hookList" => $hookList,
            "hookModules" => $hookModules,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_table"));

            // line 152
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["hookList"]) || array_key_exists("hookList", $context) ? $context["hookList"] : (function () { throw new RuntimeError('Variable "hookList" does not exist.', 152, $this->source); })()));
            foreach ($context['_seq'] as $context["hookName"] => $context["hooks"]) {
                // line 153
                yield "        <h3>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["hookName"], "html", null, true);
                yield "</h3>

        <table>
            <thead>
                <tr>
                    <th>Arguments</th>
                    <th>Location</th>
                    ";
                // line 160
                if ((isset($context["hookModules"]) || array_key_exists("hookModules", $context) ? $context["hookModules"] : (function () { throw new RuntimeError('Variable "hookModules" does not exist.', 160, $this->source); })())) {
                    // line 161
                    yield "                        <th>Hooked modules</th>
                    ";
                }
                // line 163
                yield "                </tr>
            </thead>
            <tbody>
            ";
                // line 166
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["hooks"]);
                foreach ($context['_seq'] as $context["position"] => $context["hook"]) {
                    // line 167
                    yield "            <tr>
                <td>
                    ";
                    // line 169
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hook"], "args", [], "any", false, false, false, 169));
                    yield "
                </td>
                <td>
                    <span class=\"text-muted\">";
                    // line 172
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hook"], "location", [], "any", false, false, false, 172), "html", null, true);
                    yield "</span>
                </td>
                ";
                    // line 174
                    if ((isset($context["hookModules"]) || array_key_exists("hookModules", $context) ? $context["hookModules"] : (function () { throw new RuntimeError('Variable "hookModules" does not exist.', 174, $this->source); })())) {
                        // line 175
                        yield "                    <td>
                        ";
                        // line 176
                        $context["modules"] = CoreExtension::getAttribute($this->env, $this->source, $context["hook"], "modules", [], "any", false, false, false, 176);
                        // line 177
                        yield "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["modules"]) || array_key_exists("modules", $context) ? $context["modules"] : (function () { throw new RuntimeError('Variable "modules" does not exist.', 177, $this->source); })()));
                        foreach ($context['_seq'] as $context["moduleName"] => $context["module"]) {
                            // line 178
                            yield "                            <h4><b>";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["moduleName"]), "html", null, true);
                            yield "</b></h4>
                            <table>
                                <thead>
                                <tr>
                                    <th>Module arguments</th>
                                </tr>
                                </thead>

                                ";
                            // line 186
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["module"], "callback", [], "any", true, true, false, 186)) {
                                // line 187
                                yield "                                <tr>
                                    <td>";
                                // line 188
                                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["module"], "callback", [], "any", false, false, false, 188), "args", [], "any", false, false, false, 188));
                                yield "</td>
                                </tr>
                                ";
                            } else {
                                // line 191
                                yield "                                <tr>
                                    <td>";
                                // line 192
                                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["module"], "widget", [], "any", false, false, false, 192), "args", [], "any", false, false, false, 192));
                                yield "</td>
                                </tr>
                                ";
                            }
                            // line 195
                            yield "                            </table>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['moduleName'], $context['module'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 197
                        yield "                    </td>
                ";
                    }
                    // line 199
                    yield "            </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['position'], $context['hook'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 201
                yield "            </tbody>
        </table>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['hookName'], $context['hooks'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/WebProfiler/hooks_collector.html.twig";
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
        return array (  461 => 201,  454 => 199,  450 => 197,  443 => 195,  437 => 192,  434 => 191,  428 => 188,  425 => 187,  423 => 186,  411 => 178,  406 => 177,  404 => 176,  401 => 175,  399 => 174,  394 => 172,  388 => 169,  384 => 167,  380 => 166,  375 => 163,  371 => 161,  369 => 160,  358 => 153,  353 => 152,  334 => 151,  319 => 145,  313 => 143,  302 => 134,  300 => 133,  290 => 126,  282 => 120,  276 => 118,  263 => 107,  261 => 106,  251 => 99,  241 => 92,  232 => 86,  226 => 82,  220 => 78,  218 => 77,  214 => 75,  201 => 74,  186 => 69,  183 => 68,  181 => 67,  168 => 66,  154 => 62,  151 => 61,  143 => 56,  136 => 54,  134 => 53,  125 => 52,  120 => 51,  104 => 38,  100 => 36,  98 => 35,  95 => 34,  89 => 32,  84 => 31,  81 => 30,  68 => 29,  57 => 25,  55 => 27,  42 => 25,);
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

{% import _self as helper %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/event.svg') }}
        <span class=\"sf-toolbar-value\">Hooks ({{ collector.calledHooks|length }})</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <div class=\"sf-toolbar-info-piece\">
                <b class=\"sf-toolbar-ajax-info\">{{ collector.calledHooks|length }}
                    Hooks called and received by modules
                </b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <table class=\"sf-toolbar-ajax-requests\">
                    <thead>
                    <tr>
                        <th>Hook name</th>
                        <th>Call(s)</th>
                    </tr>
                    </thead>
                    <tbody class=\"sf-toolbar-ajax-request-list\">
                        {% for hookName, hooks in collector.calledHooks %}
                            <tr><td>{{ hookName }}</td><td>{{ hooks|length }}</td></tr>
                        {% else %}
                            <tr><td colspan=\"2\">No hook dispatched.</td></tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', {link: true}) }}

{% endblock %}

{% block menu %}
    {# This left-hand menu appears when using the full-screen profiler. #}
    <span class=\"label\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/event.svg') }}</span>
        <strong>Hooks</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Hooks</h2>

    {% if collector.notCalledHooks is empty %}
        <div class=\"empty\">
            <p>No Hooks have been recorded. Check that debugging is enabled in the kernel.</p>
        </div>
    {% else %}
        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">
                    Hooks called and received by modules
                    <span class=\"badge\">{{ collector.calledHooks|length }}</span>
                </h3>
                <p>
                    These hooks have been dispatched by PrestaShop and there are active modules listening and receiving them.
                </p>
                <div class=\"tab-content\">
                    {{ helper.render_table(collector.calledHooks, true) }}
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">
                    Hooks called but not received by modules
                    <span class=\"badge\">{{ collector.notCalledHooks|length }}</span>
                </h3>
                <p>
                    These hooks have been dispatched by PrestaShop but no modules
                    have subscribed to them.
                </p>
                <div class=\"tab-content\">
                    {% if collector.notCalledHooks is empty %}
                        <div class=\"empty\">
                            <p>
                                <strong>There are no uncalled hooks</strong>.
                            </p>
                            <p>
                                All hooks were called for this request or an error occurred
                                when trying to collect uncalled listeners (in which case check the
                                logs to get more information).
                            </p>
                        </div>
                    {% else %}
                        {{ helper.render_table(collector.notCalledHooks, false) }}
                    {% endif %}
                </div>
            </div>

          <div class=\"tab\">
            <h3 class=\"tab-title\">
              Not registered hooks
              <span class=\"badge\">{{ collector.notRegisteredHooks|length }}</span>
            </h3>
            <p>
              These hooks have been dispatched by PrestaShop but they are not registered in the database, meaning no modules registered them
              and they were not added in the hook fixtures for core hooks.
            </p>
            <div class=\"tab-content\">
              {% if collector.notRegisteredHooks is empty %}
                <div class=\"empty\">
                  <p>
                    <strong>There are no unregistered hooks</strong>.
                  </p>
                  <p>
                    Seems like all hooks had appropriate listeners so they were all correctly registered in the database.
                  </p>
                </div>
              {% else %}
                {{ helper.render_table(collector.notRegisteredHooks, false) }}
              {% endif %}
            </div>
          </div>
        </div>
    {% endif %}
{% endblock %}

{% macro render_table(hookList, hookModules) %}
    {% for hookName, hooks in hookList %}
        <h3>{{ hookName }}</h3>

        <table>
            <thead>
                <tr>
                    <th>Arguments</th>
                    <th>Location</th>
                    {% if hookModules %}
                        <th>Hooked modules</th>
                    {% endif %}
                </tr>
            </thead>
            <tbody>
            {% for position, hook in hooks %}
            <tr>
                <td>
                    {{ profiler_dump(hook.args) }}
                </td>
                <td>
                    <span class=\"text-muted\">{{ hook.location }}</span>
                </td>
                {% if hookModules %}
                    <td>
                        {% set modules = hook.modules %}
                        {% for moduleName, module in modules %}
                            <h4><b>{{ moduleName|capitalize }}</b></h4>
                            <table>
                                <thead>
                                <tr>
                                    <th>Module arguments</th>
                                </tr>
                                </thead>

                                {% if module.callback is defined %}
                                <tr>
                                    <td>{{ profiler_dump(module.callback.args) }}</td>
                                </tr>
                                {% else %}
                                <tr>
                                    <td>{{ profiler_dump(module.widget.args) }}</td>
                                </tr>
                                {% endif %}
                            </table>
                        {% endfor %}
                    </td>
                {% endif %}
            </tr>
            {% endfor %}
            </tbody>
        </table>
    {% endfor %}
{% endmacro %}
", "@PrestaShop/Admin/WebProfiler/hooks_collector.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/WebProfiler/hooks_collector.html.twig");
    }
}
