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

/* @PrestaShop/Admin/Component/LegacyLayout/toolbar.html.twig */
class __TwigTemplate_0c983eb509df978a2de2cff7b91fa8e9 extends Template
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
            'pageBreadcrumb' => [$this, 'block_pageBreadcrumb'],
            'pageTitle' => [$this, 'block_pageTitle'],
            'toolbarBox' => [$this, 'block_toolbarBox'],
            'pageSubTitle' => [$this, 'block_pageSubTitle'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/LegacyLayout/toolbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/LegacyLayout/toolbar.html.twig"));

        // line 25
        yield "<div class=\"bootstrap\">
  <div class=\"page-head ";
        // line 26
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 26, $this->source); })()), "currentTabLevel", [], "any", false, false, false, 26) >= 3)) {
            yield "with-tabs";
        }
        yield "\">
    <div class=\"wrapper clearfix\">
      ";
        // line 28
        yield from $this->unwrap()->yieldBlock('pageBreadcrumb', $context, $blocks);
        // line 49
        yield "
      ";
        // line 50
        yield from $this->unwrap()->yieldBlock('pageTitle', $context, $blocks);
        // line 63
        yield "
      ";
        // line 64
        yield from $this->unwrap()->yieldBlock('toolbarBox', $context, $blocks);
        // line 111
        yield "      ";
        yield from $this->unwrap()->yieldBlock('pageSubTitle', $context, $blocks);
        // line 118
        yield "  </div>

    ";
        // line 120
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 120, $this->source); })()), "currentTabLevel", [], "any", false, false, false, 120) >= 3)) {
            // line 121
            yield "    <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav\">
        ";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 123, $this->source); })()), "navigationTabs", [], "any", false, false, false, 123));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 124
                yield "          ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 124), "active", [], "any", false, false, false, 124)) {
                    // line 125
                    yield "          <li>
            <a
              href=\"";
                    // line 127
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "href", [], "any", false, false, false, 127), "html", null, true);
                    yield "\"
              id=\"subtab-";
                    // line 128
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 128), "class_name", [], "any", false, false, false, 128), "html", null, true);
                    yield "\"
              ";
                    // line 129
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 129), "current", [], "any", false, false, false, 129)) {
                        yield "class=\"current\"";
                    }
                    // line 130
                    yield "              data-submenu=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 130), "id_tab", [], "any", false, false, false, 130), "html", null, true);
                    yield "\">
              ";
                    // line 131
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 131), "html", null, true);
                    yield "
              <span class=\"notification-container\">
                <span class=\"notification-counter\"></span>
              </span>
            </a>
          </li>
          ";
                }
                // line 138
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            yield "      </ul>
    </div>
    ";
        }
        // line 142
        yield "  </div>
  ";
        // line 143
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayDashboardTop");
        yield "
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageBreadcrumb(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageBreadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageBreadcrumb"));

        // line 29
        yield "      <ul class=\"breadcrumb page-breadcrumb\">
        ";
        // line 31
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, true, false, 31), "container", [], "any", true, true, false, 31) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 31, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 31), "container", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31) != ""))) {
            // line 32
            yield "        <li class=\"breadcrumb-container\">
          ";
            // line 33
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 33, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 33), "container", [], "any", false, false, false, 33), "icon", [], "any", false, false, false, 33))) {
                yield "<i class=\"material-icons\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 33, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 33), "container", [], "any", false, false, false, 33), "icon", [], "any", false, false, false, 33), "html", null, true);
                yield "</i>";
            }
            // line 34
            yield "          ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 34, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 34), "container", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34));
            yield "
        </li>
        ";
        }
        // line 37
        yield "
        ";
        // line 39
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, true, false, 39), "tab", [], "any", true, true, false, 39) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 39, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 39), "tab", [], "any", false, false, false, 39), "name", [], "any", false, false, false, 39) != ""))) {
            // line 40
            yield "        <li class=\"breadcrumb-current\">
          ";
            // line 41
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 41, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 41), "tab", [], "any", false, false, false, 41), "icon", [], "any", false, false, false, 41))) {
                yield "<i class=\"material-icons\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 41, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 41), "tab", [], "any", false, false, false, 41), "icon", [], "any", false, false, false, 41), "html", null, true);
                yield "</i>";
            }
            // line 42
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 42, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 42), "tab", [], "any", false, false, false, 42), "href", [], "any", false, false, false, 42) != "")) {
                yield "<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 42, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 42), "tab", [], "any", false, false, false, 42), "href", [], "any", false, false, false, 42));
                yield "\">";
            }
            // line 43
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 43, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 43), "tab", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43));
            yield "
          ";
            // line 44
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 44, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 44), "tab", [], "any", false, false, false, 44), "href", [], "any", false, false, false, 44) != "")) {
                yield "</a>";
            }
            // line 45
            yield "        </li>
        ";
        }
        // line 47
        yield "      </ul>
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 51
        yield "      <h1 class=\"page-title\">
        ";
        // line 52
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, true, false, 52), "back", [], "any", true, true, false, 52)) {
            // line 53
            yield "          ";
            $context["backButton"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 53, $this->source); })()), "layoutHeaderToolbarBtn", [], "any", false, false, false, 53), "back", [], "any", false, false, false, 53);
            // line 54
            yield "          <a id=\"page-header-desc-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 54, $this->source); })()), "table", [], "any", false, false, false, 54), "html", null, true);
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["backButton"] ?? null), "imgclass", [], "any", true, true, false, 54)) {
                yield "-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["backButton"]) || array_key_exists("backButton", $context) ? $context["backButton"] : (function () { throw new RuntimeError('Variable "backButton" does not exist.', 54, $this->source); })()), "imgclass", [], "any", false, false, false, 54), "html", null, true);
            }
            yield "\"
             class=\"page-header-toolbar-back";
            // line 55
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["backButton"] ?? null), "target", [], "any", true, true, false, 55) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["backButton"]) || array_key_exists("backButton", $context) ? $context["backButton"] : (function () { throw new RuntimeError('Variable "backButton" does not exist.', 55, $this->source); })()), "target", [], "any", false, false, false, 55)))) {
                yield " _blank";
            }
            yield "\"
             ";
            // line 56
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["backButton"] ?? null), "href", [], "any", true, true, false, 56)) {
                yield "href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["backButton"]) || array_key_exists("backButton", $context) ? $context["backButton"] : (function () { throw new RuntimeError('Variable "backButton" does not exist.', 56, $this->source); })()), "href", [], "any", false, false, false, 56));
                yield "\"";
            }
            // line 57
            yield "             title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["backButton"]) || array_key_exists("backButton", $context) ? $context["backButton"] : (function () { throw new RuntimeError('Variable "backButton" does not exist.', 57, $this->source); })()), "desc", [], "any", false, false, false, 57), "html", null, true);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["backButton"] ?? null), "js", [], "any", true, true, false, 57) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["backButton"]) || array_key_exists("backButton", $context) ? $context["backButton"] : (function () { throw new RuntimeError('Variable "backButton" does not exist.', 57, $this->source); })()), "js", [], "any", false, false, false, 57)))) {
                yield " onclick=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["backButton"]) || array_key_exists("backButton", $context) ? $context["backButton"] : (function () { throw new RuntimeError('Variable "backButton" does not exist.', 57, $this->source); })()), "js", [], "any", false, false, false, 57), "html", null, true);
                yield "\"";
            }
            yield ">
          </a>
        ";
        }
        // line 60
        yield "        ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 60, $this->source); })()), "title", [], "any", false, false, false, 60));
        yield "
      </h1>
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 64
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toolbarBox(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbarBox"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbarBox"));

        // line 65
        yield "      <div class=\"page-bar toolbarBox\">
        <div class=\"btn-toolbar\">
          <a href=\"#\" class=\"toolbar_btn dropdown-toolbar navbar-toggle\" data-toggle=\"collapse\"
             data-target=\"#toolbar-nav\"><i class=\"process-icon-dropdown\"></i>
            <div>";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Menu", [], "Admin.Navigation.Menu"), "html", null, true);
        yield "</div>
          </a>
          <ul id=\"toolbar-nav\" class=\"nav nav-pills pull-right collapse navbar-collapse\">
            ";
        // line 72
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayDashboardToolbarTopMenu");
        yield "
            ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 73, $this->source); })()), "layoutHeaderToolbarBtn", [], "any", false, false, false, 73));
        foreach ($context['_seq'] as $context["k"] => $context["btn"]) {
            // line 74
            yield "              ";
            if ((($context["k"] != "back") && ($context["k"] != "modules-list"))) {
                // line 75
                yield "                <li>
                  <a
                    id=\"page-header-desc-";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 77, $this->source); })()), "table", [], "any", false, false, false, 77), "html", null, true);
                yield "-";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", true, true, false, 77)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", false, false, false, 77));
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                }
                yield "\"
                    class=\"toolbar_btn";
                // line 78
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "target", [], "any", true, true, false, 78) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "target", [], "any", false, false, false, 78))) {
                    yield " _blank";
                }
                yield " pointer\"
                    ";
                // line 79
                if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "href", [], "any", true, true, false, 79)) {
                    // line 80
                    yield "                      href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "href", [], "any", false, false, false, 80));
                    yield "\"
                    ";
                }
                // line 82
                yield "                    title=\"";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "help", [], "any", true, true, false, 82)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "help", [], "any", false, false, false, 82), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "desc", [], "any", false, false, false, 82));
                }
                yield "\"
                    ";
                // line 83
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", true, true, false, 83) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", false, false, false, 83))) {
                    // line 84
                    yield "                      data-target=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", false, false, false, 84), "html", null, true);
                    yield "\"
                      data-toggle=\"modal\"
                    ";
                }
                // line 87
                yield "                    ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "help", [], "any", true, true, false, 87)) {
                    // line 88
                    yield "                      data-toggle=\"pstooltip\"
                      data-placement=\"bottom\"
                    ";
                }
                // line 91
                yield "                    data-role=\"page-header-desc-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 91, $this->source); })()), "table", [], "any", false, false, false, 91), "html", null, true);
                yield "-link\"
                  >
                    <i class=\"";
                // line 93
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "icon", [], "any", true, true, false, 93) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "icon", [], "any", false, false, false, 93)))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "icon", [], "any", false, false, false, 93));
                } else {
                    yield "process-icon-";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", true, true, false, 93)) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", false, false, false, 93));
                    } else {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                    }
                }
                if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "class", [], "any", true, true, false, 93)) {
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "class", [], "any", false, false, false, 93));
                }
                yield "\"></i>
                    <div";
                // line 94
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "force_desc", [], "any", true, true, false, 94) && (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "force_desc", [], "any", false, false, false, 94) == true))) {
                    yield " class=\"locked\"";
                }
                yield ">
                      ";
                // line 95
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "desc", [], "any", false, false, false, 95));
                yield "
                    </div>
                  </a>
                </li>
              ";
            }
            // line 100
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['k'], $context['btn'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        yield "
            <li>
              <a class=\"toolbar_btn btn-help\" href=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 103, $this->source); })()), "helpLink", [], "any", false, false, false, 103), "html", null, true);
        yield "\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
        yield "\">
                <div>";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
        yield "</div>
              </a>
            </li>
          </ul>
        </div>
      </div>
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 111
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageSubTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageSubTitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageSubTitle"));

        // line 112
        yield "        ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 112, $this->source); })()), "subTitle", [], "any", false, false, false, 112))) {
            // line 113
            yield "          <h4 class=\"page-subtitle\">
            ";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 114, $this->source); })()), "subTitle", [], "any", false, false, false, 114), "html", null, true);
            yield "
          </h4>
        ";
        }
        // line 117
        yield "      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Component/LegacyLayout/toolbar.html.twig";
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
        return array (  491 => 117,  485 => 114,  482 => 113,  479 => 112,  466 => 111,  448 => 104,  442 => 103,  438 => 101,  432 => 100,  424 => 95,  418 => 94,  401 => 93,  395 => 91,  390 => 88,  387 => 87,  380 => 84,  378 => 83,  369 => 82,  363 => 80,  361 => 79,  355 => 78,  345 => 77,  341 => 75,  338 => 74,  334 => 73,  330 => 72,  324 => 69,  318 => 65,  305 => 64,  290 => 60,  277 => 57,  271 => 56,  265 => 55,  256 => 54,  253 => 53,  251 => 52,  248 => 51,  235 => 50,  223 => 47,  219 => 45,  215 => 44,  210 => 43,  203 => 42,  197 => 41,  194 => 40,  191 => 39,  188 => 37,  181 => 34,  175 => 33,  172 => 32,  169 => 31,  166 => 29,  153 => 28,  139 => 143,  136 => 142,  131 => 139,  125 => 138,  115 => 131,  110 => 130,  106 => 129,  102 => 128,  98 => 127,  94 => 125,  91 => 124,  87 => 123,  83 => 121,  81 => 120,  77 => 118,  74 => 111,  72 => 64,  69 => 63,  67 => 50,  64 => 49,  62 => 28,  55 => 26,  52 => 25,);
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
<div class=\"bootstrap\">
  <div class=\"page-head {% if this.currentTabLevel >= 3 %}with-tabs{% endif %}\">
    <div class=\"wrapper clearfix\">
      {% block pageBreadcrumb %}
      <ul class=\"breadcrumb page-breadcrumb\">
        {# Container #}
        {% if this.breadcrumbs.container is defined and this.breadcrumbs.container.name != '' %}
        <li class=\"breadcrumb-container\">
          {% if this.breadcrumbs.container.icon is not empty %}<i class=\"material-icons\">{{ this.breadcrumbs.container.icon }}</i>{% endif %}
          {{ this.breadcrumbs.container.name|escape }}
        </li>
        {% endif %}

        {# Current Tab #}
        {% if this.breadcrumbs.tab is defined and this.breadcrumbs.tab.name != '' %}
        <li class=\"breadcrumb-current\">
          {% if this.breadcrumbs.tab.icon is not empty %}<i class=\"material-icons\">{{ this.breadcrumbs.tab.icon }}</i>{% endif %}
          {% if this.breadcrumbs.tab.href != '' %}<a href=\"{{ this.breadcrumbs.tab.href|escape }}\">{% endif %}
            {{ this.breadcrumbs.tab.name|escape }}
          {% if this.breadcrumbs.tab.href != '' %}</a>{% endif %}
        </li>
        {% endif %}
      </ul>
      {% endblock %}

      {% block pageTitle %}
      <h1 class=\"page-title\">
        {% if this.layoutHeaderToolbarBtn.back is defined %}
          {% set backButton = this.layoutHeaderToolbarBtn.back %}
          <a id=\"page-header-desc-{{ this.table }}{% if backButton.imgclass is defined %}-{{ backButton.imgclass }}{% endif %}\"
             class=\"page-header-toolbar-back{% if backButton.target is defined and backButton.target is not empty %} _blank{% endif %}\"
             {% if backButton.href is defined %}href=\"{{ backButton.href|escape }}\"{% endif %}
             title=\"{{ backButton.desc }}\"{% if backButton.js is defined and backButton.js is not empty %} onclick=\"{{ backButton.js }}\"{% endif %}>
          </a>
        {% endif %}
        {{ this.title|e }}
      </h1>
      {% endblock %}

      {% block toolbarBox %}
      <div class=\"page-bar toolbarBox\">
        <div class=\"btn-toolbar\">
          <a href=\"#\" class=\"toolbar_btn dropdown-toolbar navbar-toggle\" data-toggle=\"collapse\"
             data-target=\"#toolbar-nav\"><i class=\"process-icon-dropdown\"></i>
            <div>{{ 'Menu'|trans({}, 'Admin.Navigation.Menu') }}</div>
          </a>
          <ul id=\"toolbar-nav\" class=\"nav nav-pills pull-right collapse navbar-collapse\">
            {{ renderhook('displayDashboardToolbarTopMenu') }}
            {% for k, btn in this.layoutHeaderToolbarBtn %}
              {% if k != 'back' and k != 'modules-list' %}
                <li>
                  <a
                    id=\"page-header-desc-{{ this.table }}-{% if btn.imgclass is defined %}{{ btn.imgclass|escape }}{% else %}{{ k }}{% endif %}\"
                    class=\"toolbar_btn{% if btn.target is defined and btn.target %} _blank{% endif %} pointer\"
                    {% if btn.href is defined %}
                      href=\"{{ btn.href|escape }}\"
                    {% endif %}
                    title=\"{% if btn.help is defined %}{{ btn.help }}{% else %}{{ btn.desc|escape }}{% endif %}\"
                    {% if btn.modal_target is defined and btn.modal_target %}
                      data-target=\"{{ btn.modal_target }}\"
                      data-toggle=\"modal\"
                    {% endif %}
                    {% if btn.help is defined %}
                      data-toggle=\"pstooltip\"
                      data-placement=\"bottom\"
                    {% endif %}
                    data-role=\"page-header-desc-{{ this.table }}-link\"
                  >
                    <i class=\"{% if btn.icon is defined and btn.icon is not empty %}{{ btn.icon|escape }}{% else %}process-icon-{% if btn.imgclass is defined %}{{ btn.imgclass|escape }}{% else %}{{ k }}{% endif %}{% endif %}{% if btn.class is defined %} {{ btn.class|escape }}{% endif %}\"></i>
                    <div{% if btn.force_desc is defined and btn.force_desc == true %} class=\"locked\"{% endif %}>
                      {{ btn.desc|escape }}
                    </div>
                  </a>
                </li>
              {% endif %}
            {% endfor %}

            <li>
              <a class=\"toolbar_btn btn-help\" href=\"{{ this.helpLink }}\" title=\"{{ 'Help'|trans({}, 'Admin.Global') }}\">
                <div>{{ 'Help'|trans({}, 'Admin.Global') }}</div>
              </a>
            </li>
          </ul>
        </div>
      </div>
      {% endblock %}
      {% block pageSubTitle %}
        {% if this.subTitle is not empty %}
          <h4 class=\"page-subtitle\">
            {{ this.subTitle }}
          </h4>
        {% endif %}
      {% endblock %}
  </div>

    {% if this.currentTabLevel >= 3 %}
    <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav\">
        {% for tab in this.navigationTabs %}
          {% if tab.attributes.active %}
          <li>
            <a
              href=\"{{ tab.href }}\"
              id=\"subtab-{{ tab.attributes.class_name }}\"
              {% if tab.attributes.current %}class=\"current\"{% endif %}
              data-submenu=\"{{ tab.attributes.id_tab }}\">
              {{ tab.name }}
              <span class=\"notification-container\">
                <span class=\"notification-counter\"></span>
              </span>
            </a>
          </li>
          {% endif %}
        {% endfor %}
      </ul>
    </div>
    {% endif %}
  </div>
  {{ renderhook('displayDashboardTop') }}
</div>
", "@PrestaShop/Admin/Component/LegacyLayout/toolbar.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Component/LegacyLayout/toolbar.html.twig");
    }
}
