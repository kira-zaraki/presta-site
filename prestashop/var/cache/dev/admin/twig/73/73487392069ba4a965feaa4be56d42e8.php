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

/* @PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig */
class __TwigTemplate_f9f0573079bad7dcfa4066b4bc29689e extends Template
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
            'translatable_choice_widget' => [$this, 'block_translatable_choice_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig"));

        // line 25
        yield from $this->unwrap()->yieldBlock('translatable_choice_widget', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translatable_choice_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatable_choice_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatable_choice_widget"));

        // line 26
        yield "  ";
        $macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig", 26)->unwrap();
        // line 27
        yield "
  ";
        // line 28
        $context["class"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "class", [], "any", true, true, false, 28)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 28, $this->source); })()), "class", [], "any", false, false, false, 28), "")) : (""));
        // line 29
        yield "  ";
        $context["rowAttributes"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "row_attr", [], "any", true, true, false, 29)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 29, $this->source); })()), "row_attr", [], "any", false, false, false, 29), [])) : ([]));
        // line 30
        yield "  ";
        $context["attr"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "vars", [], "any", false, false, false, 30), "attr", [], "any", false, false, false, 30);
        // line 31
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 31, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 31)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 31, $this->source); })()), "class", [], "any", false, false, false, 31), "")) : ("")) . " custom-select translatable_choice"))]);
        // line 32
        yield "  <div class=\"form-group row type-choice ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 32, $this->source); })()), "html", null, true);
        yield "\" ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["rowAttributes"]) || array_key_exists("rowAttributes", $context) ? $context["rowAttributes"] : (function () { throw new RuntimeError('Variable "rowAttributes" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["rowAttr"]) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["rowAttr"], "html", null, true);
            yield "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['rowAttr'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield ">
  ";
        // line 33
        $context["extraVars"] = ((array_key_exists("extraVars", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 33, $this->source); })()), [])) : ([]));
        // line 34
        yield "
  ";
        // line 36
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "vars", [], "any", false, false, false, 36), "choices", [], "any", false, false, false, 36));
        foreach ($context['_seq'] as $context["language"] => $context["choices"]) {
            // line 37
            yield "    <div class=\"col-sm-6\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 37), "default_locale", [], "any", true, true, false, 37) &&  !(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "vars", [], "any", false, false, false, 37), "default_locale", [], "any", false, false, false, 37) === $context["language"]))) {
                yield "style=\"display: none\"";
            }
            yield ">
      <select class=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 38, $this->source); })()), "class", [], "any", false, false, false, 38), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "vars", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38) . "_") . $context["language"]), "html", null, true);
            yield "\" data-language=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["language"], "html", null, true);
            yield "\">
        ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["choices"]);
            foreach ($context['_seq'] as $context["choiceValue"] => $context["choiceLabel"]) {
                // line 40
                yield "          <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["choiceValue"], "html", null, true);
                yield "\"
            ";
                // line 41
                if (((array_key_exists("value", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), $context["language"], [], "array", true, true, false, 41)) && ($context["choiceValue"] === CoreExtension::getAttribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 41, $this->source); })()), $context["language"], [], "array", false, false, false, 41)))) {
                    yield " selected=\"selected\"";
                }
                // line 42
                yield "             ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 42), "row_attr", [], "any", false, true, false, 42), $context["language"], [], "array", false, true, false, 42), $context["choiceValue"], [], "array", true, true, false, 42) && is_iterable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "vars", [], "any", false, false, false, 42), "row_attr", [], "any", false, false, false, 42), $context["language"], [], "array", false, false, false, 42), $context["choiceValue"], [], "array", false, false, false, 42)))) {
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "vars", [], "any", false, false, false, 42), "row_attr", [], "any", false, false, false, 42), $context["language"], [], "array", false, false, false, 42), $context["choiceValue"], [], "array", false, false, false, 42));
                    foreach ($context['_seq'] as $context["optionKey"] => $context["optionAttr"]) {
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["optionKey"], "html", null, true);
                        yield "=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["optionAttr"], "html", null, true);
                        yield "\"";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['optionKey'], $context['optionAttr'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                yield ">";
                yield ((( !array_key_exists("choice_translation_domain", $context) || ((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new RuntimeError('Variable "choice_translation_domain" does not exist.', 42, $this->source); })()) === false))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["choiceLabel"], "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["choiceLabel"], [], (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new RuntimeError('Variable "choice_translation_domain" does not exist.', 42, $this->source); })())), "html", null, true)));
                yield "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['choiceValue'], $context['choiceLabel'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield "      </select>
      <input type=\"hidden\" id=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "vars", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45) . "_") . $context["language"]) . "_value"), "html", null, true);
            yield "\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "vars", [], "any", false, false, false, 45), "full_name", [], "any", false, false, false, 45) . "[") . $context["language"]) . "]"), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["choices"]), "html", null, true);
            yield "\" />
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['language'], $context['choices'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "
  ";
        // line 50
        yield "  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 50), "locales", [], "any", true, true, false, 50) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "vars", [], "any", false, false, false, 50), "locales", [], "any", false, false, false, 50)))) {
            // line 51
            yield "    <div class=\"col-sm-3\">
      <select name=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "vars", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52) . "_language"), "html", null, true);
            yield "\" class=\"custom-select translatable_choice_language\">
        ";
            // line 53
            if (is_iterable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "vars", [], "any", false, false, false, 53), "locales", [], "any", false, false, false, 53))) {
                // line 54
                yield "          ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "vars", [], "any", false, false, false, 54), "locales", [], "any", false, false, false, 54));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 55
                    yield "            <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["language"], "id_lang", [], "any", false, false, false, 55), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "iso_code", [], "any", false, false, false, 55) . " - ") . CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 55)), "html", null, true);
                    yield "</option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                yield "        ";
            }
            // line 58
            yield "      </select>
    </div>
  ";
        }
        // line 61
        yield "
  ";
        // line 63
        yield "  ";
        if (array_key_exists("button", $context)) {
            // line 64
            yield "    <div class=\"col-sm-3\">
      <button type=\"button\" ";
            // line 65
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "id", [], "any", true, true, false, 65)) {
                yield "id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 65, $this->source); })()), "id", [], "any", false, false, false, 65), "html", null, true);
                yield "\"";
            }
            yield " class=\"btn ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "class", [], "any", true, true, false, 65)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 65, $this->source); })()), "class", [], "any", false, false, false, 65), "html", null, true);
            } else {
                yield "btn-default";
            }
            yield "\" ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "action", [], "any", true, true, false, 65)) {
                yield " onclick=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 65, $this->source); })()), "action", [], "any", false, false, false, 65), "html", null, true);
                yield "\"";
            }
            yield ">
        ";
            // line 66
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "icon", [], "any", true, true, false, 66)) {
                yield "<i class=\"material-icons\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 66, $this->source); })()), "icon", [], "any", false, false, false, 66), "html", null, true);
                yield "</i>";
            }
            // line 67
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 67, $this->source); })()), "label", [], "any", false, false, false, 67), "html", null, true);
            yield "
      </button>
    </div>
  ";
        }
        // line 71
        yield "  </div>";
        // line 73
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        // line 74
        yield from         $this->unwrap()->yieldBlock("form_hint", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  271 => 74,  269 => 73,  267 => 71,  259 => 67,  253 => 66,  233 => 65,  230 => 64,  227 => 63,  224 => 61,  219 => 58,  216 => 57,  205 => 55,  200 => 54,  198 => 53,  194 => 52,  191 => 51,  188 => 50,  185 => 48,  172 => 45,  169 => 44,  145 => 42,  141 => 41,  136 => 40,  132 => 39,  124 => 38,  117 => 37,  112 => 36,  109 => 34,  107 => 33,  89 => 32,  86 => 31,  83 => 30,  80 => 29,  78 => 28,  75 => 27,  72 => 26,  49 => 25,);
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
{% block translatable_choice_widget %}
  {% import '@PrestaShop/Admin/macros.html.twig' as ps %}

  {% set class = extraVars.class|default('') %}
  {% set rowAttributes = extraVars.row_attr|default({}) %}
  {% set attr = form.vars.attr %}
  {% set attr = attr|merge({class: (attr.class|default('') ~ ' custom-select translatable_choice')|trim}) %}
  <div class=\"form-group row type-choice {{ class }}\" {% for key, rowAttr in rowAttributes %} {{ key }}=\"{{ rowAttr }}\"{% endfor %}>
  {% set extraVars = extraVars|default({}) %}

  {# options selector #}
  {% for language, choices in form.vars.choices %}
    <div class=\"col-sm-6\" {% if form.vars.default_locale is defined and form.vars.default_locale is not same as(language) %}style=\"display: none\"{% endif %}>
      <select class=\"{{ attr.class }}\" id=\"{{ form.vars.id ~ '_' ~ language }}\" data-language=\"{{ language }}\">
        {% for choiceValue, choiceLabel in choices %}
          <option value=\"{{ choiceValue }}\"
            {% if value is defined and value[language] is defined and choiceValue is same as(value[language]) %} selected=\"selected\"{% endif %}
             {% if form.vars.row_attr[language][choiceValue] is defined and form.vars.row_attr[language][choiceValue] is iterable %}{% for optionKey, optionAttr in form.vars.row_attr[language][choiceValue] %} {{ optionKey }}=\"{{ optionAttr }}\"{% endfor %}{% endif %}>{{ choice_translation_domain is not defined or choice_translation_domain is same as(false) ? choiceLabel : choiceLabel|trans({}, choice_translation_domain) }}</option>
        {% endfor %}
      </select>
      <input type=\"hidden\" id=\"{{ form.vars.id ~ '_' ~ language ~ '_value' }}\" name=\"{{ form.vars.full_name ~ '[' ~ language ~ ']' }}\" value=\"{{ choices|first }}\" />
    </div>
  {% endfor %}

  {# languages selector #}
  {% if form.vars.locales is defined and form.vars.locales is not empty %}
    <div class=\"col-sm-3\">
      <select name=\"{{ form.vars.id ~ '_language' }}\" class=\"custom-select translatable_choice_language\">
        {% if form.vars.locales is iterable %}
          {% for language in form.vars.locales %}
            <option value=\"{{ language.id_lang }}\">{{ language.iso_code ~ ' - ' ~ language.name }}</option>
          {% endfor %}
        {% endif %}
      </select>
    </div>
  {% endif %}

  {# extra button #}
  {% if button is defined %}
    <div class=\"col-sm-3\">
      <button type=\"button\" {% if button.id is defined %}id=\"{{ button.id }}\"{% endif %} class=\"btn {% if button.class is defined %}{{ button.class }}{% else %}btn-default{% endif %}\" {% if button.action is defined %} onclick=\"{{ button.action }}\"{% endif %}>
        {% if button.icon is defined %}<i class=\"material-icons\">{{ button.icon }}</i>{% endif %}
        {{ button.label }}
      </button>
    </div>
  {% endif %}
  </div>

  {{- block('form_help') -}}
  {{- block('form_hint') -}}
{% endblock translatable_choice_widget %}
", "@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/translatable_choice.html.twig");
    }
}
