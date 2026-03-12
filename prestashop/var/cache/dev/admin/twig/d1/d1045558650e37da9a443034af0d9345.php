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

/* @PrestaShop/Admin/Login/login.html.twig */
class __TwigTemplate_2dc346ab65f8e00ef1e89e08f7cc41db extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 25
        return "@PrestaShop/Admin/Layout/login_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Login/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Login/login.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Layout/login_layout.html.twig", "@PrestaShop/Admin/Login/login.html.twig", 25);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 27
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

        // line 28
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["loginForm"]) || array_key_exists("loginForm", $context) ? $context["loginForm"] : (function () { throw new RuntimeError('Variable "loginForm" does not exist.', 28, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_login"), "attr" => ["class" => (((isset($context["showRequestPasswordResetForm"]) || array_key_exists("showRequestPasswordResetForm", $context) ? $context["showRequestPasswordResetForm"] : (function () { throw new RuntimeError('Variable "showRequestPasswordResetForm" does not exist.', 28, $this->source); })())) ? ("d-none") : (""))]]);
        yield "
    ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["loginForm"]) || array_key_exists("loginForm", $context) ? $context["loginForm"] : (function () { throw new RuntimeError('Variable "loginForm" does not exist.', 29, $this->source); })()), 'row');
        yield "
  ";
        // line 30
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["loginForm"]) || array_key_exists("loginForm", $context) ? $context["loginForm"] : (function () { throw new RuntimeError('Variable "loginForm" does not exist.', 30, $this->source); })()), 'form_end');
        yield "

  ";
        // line 32
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestPasswordResetForm"]) || array_key_exists("requestPasswordResetForm", $context) ? $context["requestPasswordResetForm"] : (function () { throw new RuntimeError('Variable "requestPasswordResetForm" does not exist.', 32, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_request_password_reset"), "attr" => ["class" => (((isset($context["showRequestPasswordResetForm"]) || array_key_exists("showRequestPasswordResetForm", $context) ? $context["showRequestPasswordResetForm"] : (function () { throw new RuntimeError('Variable "showRequestPasswordResetForm" does not exist.', 32, $this->source); })())) ? ("") : ("d-none"))]]);
        yield "
    ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["requestPasswordResetForm"]) || array_key_exists("requestPasswordResetForm", $context) ? $context["requestPasswordResetForm"] : (function () { throw new RuntimeError('Variable "requestPasswordResetForm" does not exist.', 33, $this->source); })()), 'row');
        yield "
  ";
        // line 34
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestPasswordResetForm"]) || array_key_exists("requestPasswordResetForm", $context) ? $context["requestPasswordResetForm"] : (function () { throw new RuntimeError('Variable "requestPasswordResetForm" does not exist.', 34, $this->source); })()), 'form_end');
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
        return "@PrestaShop/Admin/Login/login.html.twig";
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
        return array (  98 => 34,  94 => 33,  90 => 32,  85 => 30,  81 => 29,  76 => 28,  63 => 27,  40 => 25,);
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
{% extends '@PrestaShop/Admin/Layout/login_layout.html.twig' %}

{% block content %}
  {{ form_start(loginForm, {action: path('admin_login'), attr: {class: showRequestPasswordResetForm ? 'd-none' : ''}}) }}
    {{ form_row(loginForm) }}
  {{ form_end(loginForm) }}

  {{ form_start(requestPasswordResetForm, {action: path('admin_request_password_reset'), attr: {class: showRequestPasswordResetForm ? '' : 'd-none'}}) }}
    {{ form_row(requestPasswordResetForm) }}
  {{ form_end(requestPasswordResetForm) }}
{% endblock %}
", "@PrestaShop/Admin/Login/login.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Login/login.html.twig");
    }
}
