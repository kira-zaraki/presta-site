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

/* @PrestaShop/Admin/Layout/legacy_layout.html.twig */
class __TwigTemplate_bd1aecf7a6b7752fd69e8613c9f268a7 extends Template
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
            'header' => [$this, 'block_header'],
            'layout_header' => [$this, 'block_layout_header'],
            'content_header' => [$this, 'block_content_header'],
            'session_alert' => [$this, 'block_session_alert'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Layout/legacy_layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Layout/legacy_layout.html.twig"));

        // line 25
        yield "<!DOCTYPE html>
<!--[if lt IE 7]> <html class=\"no-js lt-ie9 lt-ie8 lt-ie7 lt-ie6\"> <![endif]-->
<!--[if IE 7]>    <html class=\"no-js lt-ie9 lt-ie8 ie7\"> <![endif]-->
<!--[if IE 8]>    <html class=\"no-js lt-ie9 ie8\"> <![endif]-->
<!--[if gt IE 8]> <html class=\"no-js ie9\"> <![endif]-->
<html lang=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 30, $this->source); })()), "isoUser", [], "any", false, false, false, 30), "html", null, true);
        yield "\">
<head>
  ";
        // line 32
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 35
        yield "</head>

<body class=\"lang-";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 37, $this->source); })()), "isoUser", [], "any", false, false, false, 37), "html", null, true);
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 37, $this->source); })()), "isRtlLanguage", [], "any", false, false, false, 37)) {
            yield " lang-rtl";
        }
        yield " ps_back-office page-sidebar ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 37, $this->source); })()), "controllerName", [], "any", false, false, false, 37))), "html", null, true);
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 37, $this->source); })()), "menuCollapsed", [], "any", false, false, false, 37)) {
            yield " page-sidebar-closed";
        }
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "multiShop", [], "any", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 37, $this->source); })()), "multiShop", [], "any", false, false, false, 37), false)) : (false))) {
            yield " multishop-enabled";
        }
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "debugMode", [], "any", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 37, $this->source); })()), "debugMode", [], "any", false, false, false, 37), false)) : (false))) {
            yield " developer-mode";
        }
        yield " ps-bo-rebrand\"
  ";
        // line 38
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", true, true, false, 38) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, true, false, 38), "base_url", [], "any", true, true, false, 38))) {
            yield "data-base-url=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 38, $this->source); })()), "jsRouterMetadata", [], "any", false, false, false, 38), "base_url", [], "any", false, false, false, 38), "html", null, true);
            yield "\"";
        }
        // line 39
        yield "  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", true, true, false, 39) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, true, false, 39), "token", [], "any", true, true, false, 39))) {
            yield "data-token=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 39, $this->source); })()), "jsRouterMetadata", [], "any", false, false, false, 39), "token", [], "any", false, false, false, 39), "html", null, true);
            yield "\"";
        }
        // line 40
        yield ">

";
        // line 43
        yield from $this->unwrap()->yieldBlock('layout_header', $context, $blocks);
        // line 120
        yield "
  <div id=\"main\">
    <div id=\"content\" class=\"bootstrap";
        // line 122
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 122, $this->source); })()), "displayedWithTabs", [], "any", false, false, false, 122)) {
            yield " with-tabs";
        }
        yield "\">
      ";
        // line 124
        yield "      ";
        if ((isset($context["showContentHeader"]) || array_key_exists("showContentHeader", $context) ? $context["showContentHeader"] : (function () { throw new RuntimeError('Variable "showContentHeader" does not exist.', 124, $this->source); })())) {
            // line 125
            yield "        ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LegacyToolbar", ["layoutTitle" => ((            // line 126
array_key_exists("layoutTitle", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["layoutTitle"]) || array_key_exists("layoutTitle", $context) ? $context["layoutTitle"] : (function () { throw new RuntimeError('Variable "layoutTitle" does not exist.', 126, $this->source); })()))) : ("")), "layoutSubTitle" => ((            // line 127
array_key_exists("layoutSubTitle", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["layoutSubTitle"]) || array_key_exists("layoutSubTitle", $context) ? $context["layoutSubTitle"] : (function () { throw new RuntimeError('Variable "layoutSubTitle" does not exist.', 127, $this->source); })()))) : ("")), "helpLink" => ((            // line 128
array_key_exists("help_link", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["help_link"]) || array_key_exists("help_link", $context) ? $context["help_link"] : (function () { throw new RuntimeError('Variable "help_link" does not exist.', 128, $this->source); })()))) : ("")), "enableSidebar" => ((            // line 129
array_key_exists("enableSidebar", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["enableSidebar"]) || array_key_exists("enableSidebar", $context) ? $context["enableSidebar"] : (function () { throw new RuntimeError('Variable "enableSidebar" does not exist.', 129, $this->source); })()), false)) : (false)), "layoutHeaderToolbarBtn" => ((            // line 130
array_key_exists("layoutHeaderToolbarBtn", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["layoutHeaderToolbarBtn"]) || array_key_exists("layoutHeaderToolbarBtn", $context) ? $context["layoutHeaderToolbarBtn"] : (function () { throw new RuntimeError('Variable "layoutHeaderToolbarBtn" does not exist.', 130, $this->source); })()), [])) : ([])), "breadcrumbLinks" => ((            // line 131
array_key_exists("breadcrumbLinks", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["breadcrumbLinks"]) || array_key_exists("breadcrumbLinks", $context) ? $context["breadcrumbLinks"] : (function () { throw new RuntimeError('Variable "breadcrumbLinks" does not exist.', 131, $this->source); })()), [])) : ([]))]);
            // line 132
            yield "
      ";
        }
        // line 134
        yield "
      ";
        // line 135
        yield from $this->unwrap()->yieldBlock('content_header', $context, $blocks);
        // line 140
        yield "
      ";
        // line 141
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 144
        yield "    </div>
  </div>

  <div id=\"footer\" class=\"bootstrap\">
    <div class=\"col-sm-12\">
      ";
        // line 149
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayBackOfficeFooter", []);
        yield "
    </div>
  </div>

  ";
        // line 153
        if ((array_key_exists("modals", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["modals"]) || array_key_exists("modals", $context) ? $context["modals"] : (function () { throw new RuntimeError('Variable "modals" does not exist.', 153, $this->source); })())))) {
            // line 154
            yield "    <div class=\"bootstrap\">
      ";
            // line 155
            yield (isset($context["modals"]) || array_key_exists("modals", $context) ? $context["modals"] : (function () { throw new RuntimeError('Variable "modals" does not exist.', 155, $this->source); })());
            yield "
    </div>
  ";
        }
        // line 158
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 33
        yield "    ";
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LegacyHeadTag", ["metaTitle" => ((array_key_exists("metaTitle", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["metaTitle"]) || array_key_exists("metaTitle", $context) ? $context["metaTitle"] : (function () { throw new RuntimeError('Variable "metaTitle" does not exist.', 33, $this->source); })()))) : (""))]);
        yield "
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header"));

        // line 44
        yield "  <header id=\"header\" class=\"bootstrap\">
    <nav id=\"header_infos\" role=\"navigation\">
      <i class=\"material-icons js-mobile-menu\">menu</i>

      ";
        // line 49
        yield "      <a id=\"header_logo\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 49, $this->source); })()), "defaultTabLink", [], "any", false, false, false, 49), "html", null, true);
        yield "\" aria-label=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("PrestaShop logo", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\"></a>
      <span id=\"shop_version\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 50, $this->source); })()), "version", [], "any", false, false, false, 50), "html", null, true);
        yield "</span>

      ";
        // line 52
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LegacyQuickAccess");
        yield "
      ";
        // line 53
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LegacySearchForm");
        yield "

      ";
        // line 55
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "debugMode", [], "any", true, true, false, 55)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 55, $this->source); })()), "debugMode", [], "any", false, false, false, 55), false)) : (false))) {
            // line 56
            yield "        <div class=\"component hide-mobile-sm\">
          <a class=\"shop-state label-tooltip\"
             id=\"debug-mode\"
             data-toggle=\"tooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your shop is in debug mode.", [], "Admin.Navigation.Notification"), "html", null, true);
            yield "</strong></p><p class=&quot;text-left&quot;>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All the PHP errors and messages are displayed. When you no longer need it, [1]turn off[/1] this mode.", ["[1]" => "<strong>", "[/1]" => "</strong>"], "Admin.Navigation.Notification"), "html", null, true);
            yield "</p>\"
             href=\"";
            // line 63
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_performance");
            yield "\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Debug mode", [], "Admin.Navigation.Header"), "html", null, true);
            yield "</span>
          </a>
        </div>
      ";
        }
        // line 70
        yield "      ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "isMaintenanceEnabled", [], "any", true, true, false, 70)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 70, $this->source); })()), "isMaintenanceEnabled", [], "any", false, false, false, 70), false)) : (false))) {
            // line 71
            yield "        ";
            $context["maintenanceTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 72
                yield "          <p class=\"text-left\">
            <strong>
              ";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your store is in maintenance mode.", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "
            </strong>
          </p>
          <p class=\"text-left\">
            ";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your visitors and customers cannot access your store while in maintenance mode.", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "
          </p>
          <p class=\"text-left\">
            ";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To manage the maintenance settings, go to Shop Parameters > Maintenance tab.", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "
          </p>
          ";
                // line 83
                if (((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "frontOfficeAccessibleForAdmins", [], "any", true, true, false, 83)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 83, $this->source); })()), "frontOfficeAccessibleForAdmins", [], "any", false, false, false, 83), false)) : (false))) {
                    // line 84
                    yield "            <p class=\"text-left\">
              ";
                    // line 85
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Admins can access the store front office without storing their IP.", [], "Admin.Navigation.Notification"), "html", null, true);
                    yield "
            </p>
          ";
                }
                // line 88
                yield "        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 89
            yield "        <div class=\"component hide-mobile-sm\">
          <a class=\"shop-state label-tooltip\"
             id=\"maintenance-mode\"
             data-toggle=\"tooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["maintenanceTitle"]) || array_key_exists("maintenanceTitle", $context) ? $context["maintenanceTitle"] : (function () { throw new RuntimeError('Variable "maintenanceTitle" does not exist.', 95, $this->source); })()), "html");
            yield "\"
             href=\"";
            // line 96
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_maintenance");
            yield "\"
          >
            <i class=\"material-icons\">build</i>
            <span>";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Maintenance mode", [], "Admin.Navigation.Header"), "html", null, true);
            yield "</span>
          </a>
        </div>
      ";
        }
        // line 103
        yield "
      ";
        // line 104
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LegacyShopList");
        yield "

      ";
        // line 106
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LegacyNotificationsCenter");
        yield "
      ";
        // line 107
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LegacyEmployeeDropdown");
        yield "

      ";
        // line 110
        yield "      <span id=\"ajax_running\" class=\"hidden-xs\">
        <i class=\"icon-refresh icon-spin icon-fw\"></i>
      </span>

      ";
        // line 114
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayBackOfficeTop");
        yield "
    </nav>
  </header>

  ";
        // line 118
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LegacyNavBar");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 135
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        // line 136
        yield "        ";
        yield from $this->unwrap()->yieldBlock('session_alert', $context, $blocks);
        // line 139
        yield "      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 136
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_session_alert(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "session_alert"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "session_alert"));

        // line 137
        yield "          ";
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LegacySessionAlert");
        yield "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 141
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 142
        yield "        ";
        yield (isset($context["legacyContent"]) || array_key_exists("legacyContent", $context) ? $context["legacyContent"] : (function () { throw new RuntimeError('Variable "legacyContent" does not exist.', 142, $this->source); })());
        yield "
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
        return "@PrestaShop/Admin/Layout/legacy_layout.html.twig";
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
        return array (  456 => 142,  443 => 141,  429 => 137,  416 => 136,  405 => 139,  402 => 136,  389 => 135,  376 => 118,  369 => 114,  363 => 110,  358 => 107,  354 => 106,  349 => 104,  346 => 103,  339 => 99,  333 => 96,  329 => 95,  321 => 89,  317 => 88,  311 => 85,  308 => 84,  306 => 83,  301 => 81,  295 => 78,  288 => 74,  284 => 72,  281 => 71,  278 => 70,  271 => 66,  265 => 63,  259 => 62,  251 => 56,  249 => 55,  244 => 53,  240 => 52,  235 => 50,  228 => 49,  222 => 44,  209 => 43,  195 => 33,  182 => 32,  169 => 158,  163 => 155,  160 => 154,  158 => 153,  151 => 149,  144 => 144,  142 => 141,  139 => 140,  137 => 135,  134 => 134,  130 => 132,  128 => 131,  127 => 130,  126 => 129,  125 => 128,  124 => 127,  123 => 126,  121 => 125,  118 => 124,  112 => 122,  108 => 120,  106 => 43,  102 => 40,  95 => 39,  89 => 38,  71 => 37,  67 => 35,  65 => 32,  60 => 30,  53 => 25,);
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
<!DOCTYPE html>
<!--[if lt IE 7]> <html class=\"no-js lt-ie9 lt-ie8 lt-ie7 lt-ie6\"> <![endif]-->
<!--[if IE 7]>    <html class=\"no-js lt-ie9 lt-ie8 ie7\"> <![endif]-->
<!--[if IE 8]>    <html class=\"no-js lt-ie9 ie8\"> <![endif]-->
<!--[if gt IE 8]> <html class=\"no-js ie9\"> <![endif]-->
<html lang=\"{{ ps.isoUser }}\">
<head>
  {% block header %}
    {{ component('LegacyHeadTag', {metaTitle: metaTitle|default}) }}
  {% endblock %}
</head>

<body class=\"lang-{{ ps.isoUser }}{% if ps.isRtlLanguage %} lang-rtl{% endif %} ps_back-office page-sidebar {{ ps.controllerName|escape|lower }}{% if ps.menuCollapsed %} page-sidebar-closed{% endif %}{% if ps.multiShop|default(false) %} multishop-enabled{% endif %}{% if ps.debugMode|default(false) %} developer-mode{% endif %} ps-bo-rebrand\"
  {% if ps.jsRouterMetadata is defined and ps.jsRouterMetadata.base_url is defined %}data-base-url=\"{{ ps.jsRouterMetadata.base_url }}\"{% endif %}
  {% if ps.jsRouterMetadata is defined and ps.jsRouterMetadata.token is defined %}data-token=\"{{ ps.jsRouterMetadata.token }}\"{% endif %}
>

{# Layout header #}
{% block layout_header %}
  <header id=\"header\" class=\"bootstrap\">
    <nav id=\"header_infos\" role=\"navigation\">
      <i class=\"material-icons js-mobile-menu\">menu</i>

      {# Logo #}
      <a id=\"header_logo\" href=\"{{ ps.defaultTabLink }}\" aria-label=\"{{ 'PrestaShop logo'|trans({}, 'Admin.Navigation.Header') }}\"></a>
      <span id=\"shop_version\">{{ ps.version }}</span>

      {{ component('LegacyQuickAccess') }}
      {{ component('LegacySearchForm') }}

      {% if ps.debugMode|default(false) %}
        <div class=\"component hide-mobile-sm\">
          <a class=\"shop-state label-tooltip\"
             id=\"debug-mode\"
             data-toggle=\"tooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>{{ 'Your shop is in debug mode.'|trans({}, 'Admin.Navigation.Notification') }}</strong></p><p class=&quot;text-left&quot;>{{ 'All the PHP errors and messages are displayed. When you no longer need it, [1]turn off[/1] this mode.'|trans({'[1]': '<strong>', '[/1]': '</strong>'}, 'Admin.Navigation.Notification') }}</p>\"
             href=\"{{ url('admin_performance') }}\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>{{ 'Debug mode'|trans({}, 'Admin.Navigation.Header') }}</span>
          </a>
        </div>
      {% endif %}
      {% if ps.isMaintenanceEnabled|default(false) %}
        {% set maintenanceTitle %}
          <p class=\"text-left\">
            <strong>
              {{ 'Your store is in maintenance mode.'|trans({}, 'Admin.Navigation.Notification') }}
            </strong>
          </p>
          <p class=\"text-left\">
            {{ 'Your visitors and customers cannot access your store while in maintenance mode.'|trans({}, 'Admin.Navigation.Notification') }}
          </p>
          <p class=\"text-left\">
            {{ 'To manage the maintenance settings, go to Shop Parameters > Maintenance tab.'|trans({}, 'Admin.Navigation.Notification') }}
          </p>
          {% if ps.frontOfficeAccessibleForAdmins|default(false) %}
            <p class=\"text-left\">
              {{ 'Admins can access the store front office without storing their IP.'|trans({}, 'Admin.Navigation.Notification') }}
            </p>
          {% endif %}
        {% endset %}
        <div class=\"component hide-mobile-sm\">
          <a class=\"shop-state label-tooltip\"
             id=\"maintenance-mode\"
             data-toggle=\"tooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"{{ maintenanceTitle|e('html') }}\"
             href=\"{{ url('admin_maintenance') }}\"
          >
            <i class=\"material-icons\">build</i>
            <span>{{ 'Maintenance mode'|trans({}, 'Admin.Navigation.Header') }}</span>
          </a>
        </div>
      {% endif %}

      {{ component('LegacyShopList') }}

      {{ component('LegacyNotificationsCenter') }}
      {{ component('LegacyEmployeeDropdown') }}

      {# Ajax running * #}
      <span id=\"ajax_running\" class=\"hidden-xs\">
        <i class=\"icon-refresh icon-spin icon-fw\"></i>
      </span>

      {{ renderhook('displayBackOfficeTop') }}
    </nav>
  </header>

  {{ component('LegacyNavBar') }}
{% endblock %}

  <div id=\"main\">
    <div id=\"content\" class=\"bootstrap{% if ps.displayedWithTabs %} with-tabs{% endif %}\">
      {# Page header toolbar #}
      {% if showContentHeader %}
        {{ component('LegacyToolbar', {
          layoutTitle: layoutTitle|default,
          layoutSubTitle: layoutSubTitle|default,
          helpLink: help_link|default,
          enableSidebar: enableSidebar|default(false),
          layoutHeaderToolbarBtn: layoutHeaderToolbarBtn|default([]),
          breadcrumbLinks: breadcrumbLinks|default([]),
        }) }}
      {% endif %}

      {% block content_header %}
        {% block session_alert %}
          {{ component('LegacySessionAlert') }}
        {% endblock %}
      {% endblock %}

      {% block content %}
        {{ legacyContent|raw }}
      {% endblock %}
    </div>
  </div>

  <div id=\"footer\" class=\"bootstrap\">
    <div class=\"col-sm-12\">
      {{ renderhook('displayBackOfficeFooter', {}) }}
    </div>
  </div>

  {% if modals is defined and modals is not empty %}
    <div class=\"bootstrap\">
      {{ modals|raw }}
    </div>
  {% endif %}
</body>
</html>
", "@PrestaShop/Admin/Layout/legacy_layout.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Layout/legacy_layout.html.twig");
    }
}
