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

/* @PrestaShop/Admin/TwigTemplateForm/material.html.twig */
class __TwigTemplate_938f8ebcc7a935114d3e9d3b6a3d023c extends Template
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
            'material_choice_tree_widget' => [$this, 'block_material_choice_tree_widget'],
            'material_choice_tree_item_widget' => [$this, 'block_material_choice_tree_item_widget'],
            'material_choice_tree_item_checkbox_widget' => [$this, 'block_material_choice_tree_item_checkbox_widget'],
            'material_choice_tree_item_radio_widget' => [$this, 'block_material_choice_tree_item_radio_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/material.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/material.html.twig"));

        // line 25
        yield "
";
        // line 26
        yield from $this->unwrap()->yieldBlock('material_choice_tree_widget', $context, $blocks);
        // line 50
        yield "
";
        // line 51
        yield from $this->unwrap()->yieldBlock('material_choice_tree_item_widget', $context, $blocks);
        // line 71
        yield "
";
        // line 72
        yield from $this->unwrap()->yieldBlock('material_choice_tree_item_checkbox_widget', $context, $blocks);
        // line 90
        yield "
";
        // line 91
        yield from $this->unwrap()->yieldBlock('material_choice_tree_item_radio_widget', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_material_choice_tree_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_choice_tree_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_choice_tree_widget"));

        // line 27
        yield "  <div class=\"material-choice-tree-container js-choice-tree-container";
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 27, $this->source); })())) {
            yield " required";
        }
        yield "\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "vars", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27), "html", null, true);
        yield "\">
    <div class=\"choice-tree-actions\">
      <span class=\"form-control-label js-toggle-choice-tree-action\"
            data-expanded-text=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Expand", [], "Admin.Actions"), "html", null, true);
        yield "\"
            data-expanded-icon=\"expand_more\"
            data-collapsed-text=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Collapse", [], "Admin.Actions"), "html", null, true);
        yield "\"
            data-collapsed-icon=\"expand_less\"
            data-action=\"expand\"
      >
        <i class=\"material-icons\">expand_more</i>
        <span class=\"js-toggle-text\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Expand", [], "Admin.Actions"), "html", null, true);
        yield "</span>
      </span>
    </div>

    <ul class=\"choice-tree\">
      ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["choices_tree"]) || array_key_exists("choices_tree", $context) ? $context["choices_tree"] : (function () { throw new RuntimeError('Variable "choices_tree" does not exist.', 42, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 43
            yield "        ";
            yield from             $this->unwrap()->yieldBlock("material_choice_tree_item_widget", $context, $blocks);
            yield "
      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "    </ul>
  </div>";
        // line 48
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 51
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_material_choice_tree_item_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_choice_tree_item_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_choice_tree_item_widget"));

        // line 52
        yield "  ";
        $context["has_children"] = CoreExtension::getAttribute($this->env, $this->source, ($context["choice"] ?? null), (isset($context["choice_children"]) || array_key_exists("choice_children", $context) ? $context["choice_children"] : (function () { throw new RuntimeError('Variable "choice_children" does not exist.', 52, $this->source); })()), [], "array", true, true, false, 52);
        // line 53
        yield "
  <li class=\"";
        // line 54
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 54, $this->source); })()), "has_selected_children", [], "any", false, false, false, 54)) {
            yield "expanded";
        } elseif ((isset($context["has_children"]) || array_key_exists("has_children", $context) ? $context["has_children"] : (function () { throw new RuntimeError('Variable "has_children" does not exist.', 54, $this->source); })())) {
            yield "collapsed";
        }
        yield "\">
    ";
        // line 55
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 55, $this->source); })())) {
            // line 56
            yield "      ";
            yield from             $this->unwrap()->yieldBlock("material_choice_tree_item_checkbox_widget", $context, $blocks);
            yield "
    ";
        } else {
            // line 58
            yield "      ";
            yield from             $this->unwrap()->yieldBlock("material_choice_tree_item_radio_widget", $context, $blocks);
            yield "
    ";
        }
        // line 60
        yield "
    ";
        // line 61
        if ((isset($context["has_children"]) || array_key_exists("has_children", $context) ? $context["has_children"] : (function () { throw new RuntimeError('Variable "has_children" does not exist.', 61, $this->source); })())) {
            // line 62
            yield "      <ul>
        ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 63, $this->source); })()), (isset($context["choice_children"]) || array_key_exists("choice_children", $context) ? $context["choice_children"] : (function () { throw new RuntimeError('Variable "choice_children" does not exist.', 63, $this->source); })()), [], "array", false, false, false, 63));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 64
                yield "          ";
                $context["choice"] = $context["item"];
                // line 65
                yield "          ";
                yield from                 $this->unwrap()->yieldBlock("material_choice_tree_item_widget", $context, $blocks);
                yield "
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            yield "      </ul>
    ";
        }
        // line 69
        yield "  </li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 72
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_material_choice_tree_item_checkbox_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_choice_tree_item_checkbox_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_choice_tree_item_checkbox_widget"));

        // line 73
        yield "  <div class=\"checkbox js-input-wrapper\">
    <div class=\"md-checkbox md-checkbox-inline\">
      <label>
        <input type=\"checkbox\"
         ";
        // line 77
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 77, $this->source); })()), (isset($context["choice_value"]) || array_key_exists("choice_value", $context) ? $context["choice_value"] : (function () { throw new RuntimeError('Variable "choice_value" does not exist.', 77, $this->source); })()), [], "array", false, false, false, 77))) {
            // line 78
            yield "           name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "vars", [], "any", false, false, false, 78), "full_name", [], "any", false, false, false, 78), "html", null, true);
            yield "[]\"
           value=\"";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 79, $this->source); })()), (isset($context["choice_value"]) || array_key_exists("choice_value", $context) ? $context["choice_value"] : (function () { throw new RuntimeError('Variable "choice_value" does not exist.', 79, $this->source); })()), [], "array", false, false, false, 79), "html", null, true);
            yield "\"
           ";
            // line 80
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 80, $this->source); })()), (isset($context["choice_value"]) || array_key_exists("choice_value", $context) ? $context["choice_value"] : (function () { throw new RuntimeError('Variable "choice_value" does not exist.', 80, $this->source); })()), [], "array", false, false, false, 80), (isset($context["selected_values"]) || array_key_exists("selected_values", $context) ? $context["selected_values"] : (function () { throw new RuntimeError('Variable "selected_values" does not exist.', 80, $this->source); })()))) {
                yield "checked";
            }
            // line 81
            yield "         ";
        }
        // line 82
        yield "         ";
        if (((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 82, $this->source); })()) || CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 82, $this->source); })()), (isset($context["choice_value"]) || array_key_exists("choice_value", $context) ? $context["choice_value"] : (function () { throw new RuntimeError('Variable "choice_value" does not exist.', 82, $this->source); })()), [], "array", false, false, false, 82), (isset($context["disabled_values"]) || array_key_exists("disabled_values", $context) ? $context["disabled_values"] : (function () { throw new RuntimeError('Variable "disabled_values" does not exist.', 82, $this->source); })())))) {
            yield "disabled";
        }
        // line 83
        yield "        >
        <i class=\"md-checkbox-control\"></i>
        ";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 85, $this->source); })()), (isset($context["choice_label"]) || array_key_exists("choice_label", $context) ? $context["choice_label"] : (function () { throw new RuntimeError('Variable "choice_label" does not exist.', 85, $this->source); })()), [], "array", false, false, false, 85), "html", null, true);
        yield "
      </label>
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 91
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_material_choice_tree_item_radio_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_choice_tree_item_radio_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_choice_tree_item_radio_widget"));

        // line 92
        yield "  <div class=\"radio js-input-wrapper form-check form-check-radio\">
    <label class=\"form-check-label\">
      <input type=\"radio\"
       name=\"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "vars", [], "any", false, false, false, 95), "full_name", [], "any", false, false, false, 95), "html", null, true);
        yield "\"
       value=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 96, $this->source); })()), (isset($context["choice_value"]) || array_key_exists("choice_value", $context) ? $context["choice_value"] : (function () { throw new RuntimeError('Variable "choice_value" does not exist.', 96, $this->source); })()), [], "array", false, false, false, 96), "html", null, true);
        yield "\"
       ";
        // line 97
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 97, $this->source); })()), (isset($context["choice_value"]) || array_key_exists("choice_value", $context) ? $context["choice_value"] : (function () { throw new RuntimeError('Variable "choice_value" does not exist.', 97, $this->source); })()), [], "array", false, false, false, 97), (isset($context["selected_values"]) || array_key_exists("selected_values", $context) ? $context["selected_values"] : (function () { throw new RuntimeError('Variable "selected_values" does not exist.', 97, $this->source); })()))) {
            yield "checked";
        }
        // line 98
        yield "       ";
        if (((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 98, $this->source); })()) || CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 98, $this->source); })()), (isset($context["choice_value"]) || array_key_exists("choice_value", $context) ? $context["choice_value"] : (function () { throw new RuntimeError('Variable "choice_value" does not exist.', 98, $this->source); })()), [], "array", false, false, false, 98), (isset($context["disabled_values"]) || array_key_exists("disabled_values", $context) ? $context["disabled_values"] : (function () { throw new RuntimeError('Variable "disabled_values" does not exist.', 98, $this->source); })())))) {
            yield "disabled";
        }
        // line 99
        yield "       ";
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 99, $this->source); })())) {
            yield "required";
        }
        // line 100
        yield "      >
      <i class=\"form-check-round\"></i>
      ";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 102, $this->source); })()), (isset($context["choice_label"]) || array_key_exists("choice_label", $context) ? $context["choice_label"] : (function () { throw new RuntimeError('Variable "choice_label" does not exist.', 102, $this->source); })()), [], "array", false, false, false, 102), "html", null, true);
        yield "
    </label>
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
        return "@PrestaShop/Admin/TwigTemplateForm/material.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  382 => 102,  378 => 100,  373 => 99,  368 => 98,  364 => 97,  360 => 96,  356 => 95,  351 => 92,  338 => 91,  322 => 85,  318 => 83,  313 => 82,  310 => 81,  306 => 80,  302 => 79,  297 => 78,  295 => 77,  289 => 73,  276 => 72,  264 => 69,  260 => 67,  243 => 65,  240 => 64,  223 => 63,  220 => 62,  218 => 61,  215 => 60,  209 => 58,  203 => 56,  201 => 55,  193 => 54,  190 => 53,  187 => 52,  174 => 51,  163 => 48,  160 => 45,  143 => 43,  126 => 42,  118 => 37,  110 => 32,  105 => 30,  94 => 27,  81 => 26,  70 => 91,  67 => 90,  65 => 72,  62 => 71,  60 => 51,  57 => 50,  55 => 26,  52 => 25,);
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

{% block material_choice_tree_widget %}
  <div class=\"material-choice-tree-container js-choice-tree-container{% if required %} required{% endif %}\" id=\"{{ form.vars.id }}\">
    <div class=\"choice-tree-actions\">
      <span class=\"form-control-label js-toggle-choice-tree-action\"
            data-expanded-text=\"{{ 'Expand'|trans({}, 'Admin.Actions') }}\"
            data-expanded-icon=\"expand_more\"
            data-collapsed-text=\"{{ 'Collapse'|trans({}, 'Admin.Actions') }}\"
            data-collapsed-icon=\"expand_less\"
            data-action=\"expand\"
      >
        <i class=\"material-icons\">expand_more</i>
        <span class=\"js-toggle-text\">{{ 'Expand'|trans({}, 'Admin.Actions') }}</span>
      </span>
    </div>

    <ul class=\"choice-tree\">
      {% for choice in choices_tree %}
        {{ block('material_choice_tree_item_widget') }}
      {% endfor %}
    </ul>
  </div>

  {{- block('form_help') -}}
{% endblock material_choice_tree_widget %}

{% block material_choice_tree_item_widget %}
  {% set has_children = choice[choice_children] is defined %}

  <li class=\"{% if choice.has_selected_children %}expanded{% elseif has_children %}collapsed{% endif %}\">
    {% if multiple %}
      {{ block('material_choice_tree_item_checkbox_widget') }}
    {% else %}
      {{ block('material_choice_tree_item_radio_widget') }}
    {% endif %}

    {% if has_children %}
      <ul>
        {% for item in choice[choice_children] %}
          {% set choice = item %}
          {{ block('material_choice_tree_item_widget') }}
        {% endfor %}
      </ul>
    {% endif %}
  </li>
{% endblock material_choice_tree_item_widget %}

{% block material_choice_tree_item_checkbox_widget %}
  <div class=\"checkbox js-input-wrapper\">
    <div class=\"md-checkbox md-checkbox-inline\">
      <label>
        <input type=\"checkbox\"
         {% if choice[choice_value] is not null %}
           name=\"{{ form.vars.full_name }}[]\"
           value=\"{{ choice[choice_value] }}\"
           {% if choice[choice_value] in selected_values %}checked{% endif %}
         {% endif %}
         {% if disabled or choice[choice_value] in disabled_values %}disabled{% endif %}
        >
        <i class=\"md-checkbox-control\"></i>
        {{ choice[choice_label] }}
      </label>
    </div>
  </div>
{% endblock material_choice_tree_item_checkbox_widget %}

{% block material_choice_tree_item_radio_widget %}
  <div class=\"radio js-input-wrapper form-check form-check-radio\">
    <label class=\"form-check-label\">
      <input type=\"radio\"
       name=\"{{ form.vars.full_name }}\"
       value=\"{{ choice[choice_value] }}\"
       {% if choice[choice_value] in selected_values %}checked{% endif %}
       {% if disabled or choice[choice_value] in disabled_values %}disabled{% endif %}
       {% if required %}required{% endif %}
      >
      <i class=\"form-check-round\"></i>
      {{ choice[choice_label] }}
    </label>
  </div>
{% endblock material_choice_tree_item_radio_widget %}
", "@PrestaShop/Admin/TwigTemplateForm/material.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/material.html.twig");
    }
}
