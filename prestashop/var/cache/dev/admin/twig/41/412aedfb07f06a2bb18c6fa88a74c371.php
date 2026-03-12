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

/* @PrestaShop/Admin/Layout/login_layout.html.twig */
class __TwigTemplate_b231e214b1be3b348d5c8900f4924435 extends Template
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
            'javascrips' => [$this, 'block_javascrips'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'session_alert' => [$this, 'block_session_alert'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Layout/login_layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Layout/login_layout.html.twig"));

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
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  ";
        // line 33
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LoginHeadTag");
        yield "
  ";
        // line 34
        yield from $this->unwrap()->yieldBlock('javascrips', $context, $blocks);
        // line 35
        yield "  ";
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 36
        yield "</head>

<body class=\"lang-";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 38, $this->source); })()), "isoUser", [], "any", false, false, false, 38), "html", null, true);
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 38, $this->source); })()), "isRtlLanguage", [], "any", false, false, false, 38)) {
            yield " lang-rtl";
        }
        yield " ps_back-office bootstrap ps-bo-rebrand\">
  <div id=\"login\">
    <div id=\"content\">
      <div id=\"login-panel\">
        <div id=\"login-header\">
          <h1 class=\"text-center mb-0\">
            <img id=\"logo\" src=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 44, $this->source); })()), "baseImgUrl", [], "any", false, false, false, 44), "html", null, true);
        yield "prestashop@2x.png\" width=\"128\" height=\"auto\" alt=\"PrestaShop\" />
          </h1>
        </div>

        <div id=\"login-content-card\" class=\"card\">
          <div id=\"shop-img\">
            <img src=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 50, $this->source); })()), "baseImgUrl", [], "any", false, false, false, 50), "html", null, true);
        yield "prestashop@2x.png\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["shopName"]) || array_key_exists("shopName", $context) ? $context["shopName"] : (function () { throw new RuntimeError('Variable "shopName" does not exist.', 50, $this->source); })()), "html", null, true);
        yield "\" width=\"200\" height=\"22\" />
          </div>

          <div class=\"card-body\">
            ";
        // line 54
        yield from $this->unwrap()->yieldBlock('session_alert', $context, $blocks);
        // line 93
        yield "            ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 94
        yield "          </div>
        </div>

        <a class='login-back' href='";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 97, $this->source); })()), "baseUrl", [], "any", false, false, false, 97), "html", null, true);
        yield "'>
          <i class=\"material-icons rtl-flip\">arrow_back</i>
          <span>";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to", [], "Admin.Actions"), "html", null, true);
        yield "</span>
          <span class=\"login-back-shop\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["shopName"]) || array_key_exists("shopName", $context) ? $context["shopName"] : (function () { throw new RuntimeError('Variable "shopName" does not exist.', 100, $this->source); })()), "html", null, true);
        yield "</span>
        </a>

        ";
        // line 103
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminLogin");
        yield "

        <div id=\"login-footer\">
          <div class=\"login__copy text-center text-muted\">
            <a href=\"https://www.prestashop-project.org\" onclick=\"return !window.open(this.href);\">
              &copy; PrestaShop&#8482; 2007-";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " - All rights reserved
            </a>
          </div>

          <div class=\"login__social text-center\">
            <a class=\"link-social link-twitter _blank\" target=\"_blank\" href=\"https://x.com/PrestaShop\" title=\"X\">
              ";
        // line 114
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "bi:twitter-x", "height" => "16", "width" => "16", "aria-hidden" => "true"]);
        yield "
            </a>
            <a class=\"link-social link-facebook _blank\" target=\"_blank\" href=\"https://www.facebook.com/prestashop\" title=\"Facebook\">
              ";
        // line 117
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "bi:facebook", "height" => "16", "width" => "16", "aria-hidden" => "true"]);
        yield "
            </a>
            <a class=\"link-social link-github _blank\" target=\"_blank\" href=\"https://github.com/PrestaShop/PrestaShop\" title=\"Github\">
              ";
        // line 120
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "bi:github", "height" => "16", "width" => "16", "aria-hidden" => "true"]);
        yield "
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 34
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascrips(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascrips"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascrips"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 54
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

        // line 55
        yield "              ";
        // line 75
        yield "              ";
        $macros["layout"] = $this;
        // line 76
        yield "
              ";
        // line 77
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "session", [], "any", false, false, false, 77), "flashbag", [], "any", false, false, false, 77), "peek", ["error"], "method", false, false, false, 77)) > 0)) {
            // line 78
            yield "                ";
            yield $macros["layout"]->getTemplateForMacro("macro_alert", $context, 78, $this->getSourceContext())->macro_alert(...["danger", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "session", [], "any", false, false, false, 78), "flashbag", [], "any", false, false, false, 78), "get", ["error"], "method", false, false, false, 78)]);
            yield "
              ";
        }
        // line 80
        yield "              ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "session", [], "any", false, false, false, 80), "flashbag", [], "any", false, false, false, 80), "peek", ["failure"], "method", false, false, false, 80)) > 0)) {
            // line 81
            yield "                ";
            yield $macros["layout"]->getTemplateForMacro("macro_alert", $context, 81, $this->getSourceContext())->macro_alert(...["danger", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "session", [], "any", false, false, false, 81), "flashbag", [], "any", false, false, false, 81), "get", ["failure"], "method", false, false, false, 81)]);
            yield "
              ";
        }
        // line 83
        yield "              ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "session", [], "any", false, false, false, 83), "flashbag", [], "any", false, false, false, 83), "peek", ["success"], "method", false, false, false, 83)) > 0)) {
            // line 84
            yield "                ";
            yield $macros["layout"]->getTemplateForMacro("macro_alert", $context, 84, $this->getSourceContext())->macro_alert(...["success", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "session", [], "any", false, false, false, 84), "flashbag", [], "any", false, false, false, 84), "get", ["success"], "method", false, false, false, 84)]);
            yield "
              ";
        }
        // line 86
        yield "              ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "session", [], "any", false, false, false, 86), "flashbag", [], "any", false, false, false, 86), "peek", ["warning"], "method", false, false, false, 86)) > 0)) {
            // line 87
            yield "                ";
            yield $macros["layout"]->getTemplateForMacro("macro_alert", $context, 87, $this->getSourceContext())->macro_alert(...["warning", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "session", [], "any", false, false, false, 87), "flashbag", [], "any", false, false, false, 87), "get", ["warning"], "method", false, false, false, 87)]);
            yield "
              ";
        }
        // line 89
        yield "              ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "session", [], "any", false, false, false, 89), "flashbag", [], "any", false, false, false, 89), "peek", ["info"], "method", false, false, false, 89)) > 0)) {
            // line 90
            yield "                ";
            yield $macros["layout"]->getTemplateForMacro("macro_alert", $context, 90, $this->getSourceContext())->macro_alert(...["info", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "session", [], "any", false, false, false, 90), "flashbag", [], "any", false, false, false, 90), "get", ["info"], "method", false, false, false, 90)]);
            yield "
              ";
        }
        // line 92
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 93
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 55
    public function macro_alert($type = null, $flashbagContent = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "type" => $type,
            "flashbagContent" => $flashbagContent,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "alert"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "alert"));

            // line 56
            yield "                <div class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 56, $this->source); })()), "html", null, true);
            yield " d-print-none\" role=\"alert\">
                  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
                  </button>
                  ";
            // line 60
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["flashbagContent"]) || array_key_exists("flashbagContent", $context) ? $context["flashbagContent"] : (function () { throw new RuntimeError('Variable "flashbagContent" does not exist.', 60, $this->source); })())) > 1)) {
                // line 61
                yield "                    <ul class=\"alert-text\">
                      ";
                // line 62
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["flashbagContent"]) || array_key_exists("flashbagContent", $context) ? $context["flashbagContent"] : (function () { throw new RuntimeError('Variable "flashbagContent" does not exist.', 62, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 63
                    yield "                        <li>";
                    yield $context["flashMessage"];
                    yield "</li>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['flashMessage'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                yield "                    </ul>
                  ";
            } else {
                // line 67
                yield "                    <div class=\"alert-text\">
                      ";
                // line 68
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["flashbagContent"]) || array_key_exists("flashbagContent", $context) ? $context["flashbagContent"] : (function () { throw new RuntimeError('Variable "flashbagContent" does not exist.', 68, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 69
                    yield "                        <p>";
                    yield $context["flashMessage"];
                    yield "</p>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['flashMessage'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                yield "                    </div>
                  ";
            }
            // line 73
            yield "                </div>
              ";
            
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
        return "@PrestaShop/Admin/Layout/login_layout.html.twig";
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
        return array (  393 => 73,  389 => 71,  380 => 69,  376 => 68,  373 => 67,  369 => 65,  360 => 63,  356 => 62,  353 => 61,  351 => 60,  343 => 56,  324 => 55,  302 => 93,  291 => 92,  285 => 90,  282 => 89,  276 => 87,  273 => 86,  267 => 84,  264 => 83,  258 => 81,  255 => 80,  249 => 78,  247 => 77,  244 => 76,  241 => 75,  239 => 55,  226 => 54,  204 => 35,  182 => 34,  162 => 120,  156 => 117,  150 => 114,  141 => 108,  133 => 103,  127 => 100,  123 => 99,  118 => 97,  113 => 94,  110 => 93,  108 => 54,  99 => 50,  90 => 44,  78 => 38,  74 => 36,  71 => 35,  69 => 34,  65 => 33,  59 => 30,  52 => 25,);
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
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  {{ component('LoginHeadTag') }}
  {% block javascrips %}{% endblock %}
  {% block stylesheets %}{% endblock %}
</head>

<body class=\"lang-{{ ps.isoUser }}{% if ps.isRtlLanguage %} lang-rtl{% endif %} ps_back-office bootstrap ps-bo-rebrand\">
  <div id=\"login\">
    <div id=\"content\">
      <div id=\"login-panel\">
        <div id=\"login-header\">
          <h1 class=\"text-center mb-0\">
            <img id=\"logo\" src=\"{{ ps.baseImgUrl }}prestashop@2x.png\" width=\"128\" height=\"auto\" alt=\"PrestaShop\" />
          </h1>
        </div>

        <div id=\"login-content-card\" class=\"card\">
          <div id=\"shop-img\">
            <img src=\"{{ ps.baseImgUrl }}prestashop@2x.png\" alt=\"{{ shopName }}\" width=\"200\" height=\"22\" />
          </div>

          <div class=\"card-body\">
            {% block session_alert %}
              {% macro alert(type, flashbagContent) %}
                <div class=\"alert alert-{{ type }} d-print-none\" role=\"alert\">
                  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
                  </button>
                  {% if flashbagContent|length > 1 %}
                    <ul class=\"alert-text\">
                      {% for flashMessage in flashbagContent %}
                        <li>{{ flashMessage|raw }}</li>
                      {% endfor %}
                    </ul>
                  {% else %}
                    <div class=\"alert-text\">
                      {% for flashMessage in flashbagContent %}
                        <p>{{ flashMessage|raw }}</p>
                      {% endfor %}
                    </div>
                  {% endif %}
                </div>
              {% endmacro %}
              {% import _self as layout %}

              {% if app.session.flashbag.peek('error')|length() > 0 %}
                {{ layout.alert('danger', app.session.flashbag.get('error')) }}
              {% endif %}
              {% if app.session.flashbag.peek('failure')|length() > 0 %}
                {{ layout.alert('danger', app.session.flashbag.get('failure')) }}
              {% endif %}
              {% if app.session.flashbag.peek('success')|length() > 0 %}
                {{ layout.alert('success', app.session.flashbag.get('success')) }}
              {% endif %}
              {% if app.session.flashbag.peek('warning')|length() > 0 %}
                {{ layout.alert('warning', app.session.flashbag.get('warning')) }}
              {% endif %}
              {% if app.session.flashbag.peek('info')|length() > 0 %}
                {{ layout.alert('info', app.session.flashbag.get('info')) }}
              {% endif %}
            {% endblock %}
            {% block content %}{% endblock %}
          </div>
        </div>

        <a class='login-back' href='{{ ps.baseUrl }}'>
          <i class=\"material-icons rtl-flip\">arrow_back</i>
          <span>{{ 'Back to'|trans({}, 'Admin.Actions') }}</span>
          <span class=\"login-back-shop\">{{ shopName }}</span>
        </a>

        {{ renderhook('displayAdminLogin') }}

        <div id=\"login-footer\">
          <div class=\"login__copy text-center text-muted\">
            <a href=\"https://www.prestashop-project.org\" onclick=\"return !window.open(this.href);\">
              &copy; PrestaShop&#8482; 2007-{{ 'now'|date('Y') }} - All rights reserved
            </a>
          </div>

          <div class=\"login__social text-center\">
            <a class=\"link-social link-twitter _blank\" target=\"_blank\" href=\"https://x.com/PrestaShop\" title=\"X\">
              {{ component('ux:icon', { name: 'bi:twitter-x', height: '16', width: '16', 'aria-hidden': 'true' }) }}
            </a>
            <a class=\"link-social link-facebook _blank\" target=\"_blank\" href=\"https://www.facebook.com/prestashop\" title=\"Facebook\">
              {{ component('ux:icon', { name: 'bi:facebook', height: '16', width: '16', 'aria-hidden': 'true' }) }}
            </a>
            <a class=\"link-social link-github _blank\" target=\"_blank\" href=\"https://github.com/PrestaShop/PrestaShop\" title=\"Github\">
              {{ component('ux:icon', { name: 'bi:github', height: '16', width: '16', 'aria-hidden': 'true' }) }}
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
", "@PrestaShop/Admin/Layout/login_layout.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Layout/login_layout.html.twig");
    }
}
