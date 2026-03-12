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

/* @PrestaShop/Admin/TwigTemplateForm/bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_7e7621da2446ab42d8e1b30da5ee0d53 extends Template
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

        // line 25
        $_trait_0 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_horizontal_layout.html.twig", 25);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 25, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_label' => [$this, 'block_form_label'],
                'form_label_class' => [$this, 'block_form_label_class'],
                'form_row' => [$this, 'block_form_row'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
                'radio_row' => [$this, 'block_radio_row'],
                'checkbox_radio_row' => [$this, 'block_checkbox_radio_row'],
                'submit_row' => [$this, 'block_submit_row'],
                'form_group_class' => [$this, 'block_form_group_class'],
                'form_row_class' => [$this, 'block_form_row_class'],
                'ip_address_text_widget' => [$this, 'block_ip_address_text_widget'],
                'switch_widget' => [$this, 'block_switch_widget'],
                'text_with_length_counter_widget' => [$this, 'block_text_with_length_counter_widget'],
                'number_widget' => [$this, 'block_number_widget'],
                'integer_widget' => [$this, 'block_integer_widget'],
                'form_unit' => [$this, 'block_form_unit'],
                'form_unit_prepend' => [$this, 'block_form_unit_prepend'],
                'amount_currency_widget' => [$this, 'block_amount_currency_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_horizontal_layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_horizontal_layout.html.twig"));

        // line 26
        yield from $this->unwrap()->yieldBlock('form_start', $context, $blocks);
        // line 30
        yield "
";
        // line 32
        yield "
";
        // line 33
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 43
        yield "
";
        // line 44
        yield from $this->unwrap()->yieldBlock('form_label_class', $context, $blocks);
        // line 47
        yield "
";
        // line 49
        yield "
";
        // line 50
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 62
        yield "
";
        // line 63
        yield from $this->unwrap()->yieldBlock('checkbox_row', $context, $blocks);
        // line 66
        yield "
";
        // line 67
        yield from $this->unwrap()->yieldBlock('radio_row', $context, $blocks);
        // line 70
        yield "
";
        // line 71
        yield from $this->unwrap()->yieldBlock('checkbox_radio_row', $context, $blocks);
        // line 82
        yield "
";
        // line 83
        yield from $this->unwrap()->yieldBlock('submit_row', $context, $blocks);
        // line 93
        yield "
";
        // line 94
        yield from $this->unwrap()->yieldBlock('form_group_class', $context, $blocks);
        // line 97
        yield "
";
        // line 98
        yield from $this->unwrap()->yieldBlock('form_row_class', $context, $blocks);
        // line 101
        yield "
";
        // line 102
        yield from $this->unwrap()->yieldBlock('ip_address_text_widget', $context, $blocks);
        // line 110
        yield "
";
        // line 111
        yield from $this->unwrap()->yieldBlock('switch_widget', $context, $blocks);
        // line 116
        yield "
";
        // line 117
        yield from $this->unwrap()->yieldBlock('text_with_length_counter_widget', $context, $blocks);
        // line 144
        yield from $this->unwrap()->yieldBlock('number_widget', $context, $blocks);
        // line 153
        yield from $this->unwrap()->yieldBlock('integer_widget', $context, $blocks);
        // line 162
        yield from $this->unwrap()->yieldBlock('form_unit', $context, $blocks);
        // line 169
        yield "
";
        // line 170
        yield from $this->unwrap()->yieldBlock('form_unit_prepend', $context, $blocks);
        // line 177
        yield "
";
        // line 178
        yield from $this->unwrap()->yieldBlock('amount_currency_widget', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_start(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_start"));

        // line 27
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 27, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 27)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 27, $this->source); })()), "class", [], "any", false, false, false, 27), "")) : ("")) . " form-horizontal"))]);
        // line 28
        yield from $this->yieldParentBlock("form_start", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        // line 34
        $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 35
            yield "        ";
            if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 35, $this->source); })()) === false)) {
                // line 36
                yield "            <div class=\"";
                yield from                 $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
                yield "\"></div>
        ";
            } else {
                // line 38
                yield "            ";
                $context["label_attr"] = Twig\Extension\CoreExtension::merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 38, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 38)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 38, $this->source); })()), "class", [], "any", false, false, false, 38), "")) : ("")) . " ") .                 $this->unwrap()->renderBlock("form_label_class", $context, $blocks)))]);
                // line 39
                yield from $this->yieldParentBlock("form_label", $context, $blocks);
            }
            // line 41
            yield "    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 34
        yield Twig\Extension\CoreExtension::spaceless($_v0);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 45
        yield "form-control-label";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 51
        $_v1 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 52
            yield "        <div class=\"";
            yield from             $this->unwrap()->yieldBlock("form_row_class", $context, $blocks);
            yield " ";
            if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 52, $this->source); })()) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new RuntimeError('Variable "force_error" does not exist.', 52, $this->source); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 52, $this->source); })()))) {
                yield " has-error";
            }
            yield "\">
            ";
            // line 53
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'label');
            yield "
            <div class=\"";
            // line 54
            yield from             $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
            yield "\">
                ";
            // line 55
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), 'widget');
            yield "
                ";
            // line 56
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), 'errors');
            yield "
                ";
            // line 57
            yield from             $this->unwrap()->yieldBlock("form_help", $context, $blocks);
            yield "
            </div>
        </div>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        yield Twig\Extension\CoreExtension::spaceless($_v1);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 64
        yield from         $this->unwrap()->yieldBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 67
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_radio_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_row"));

        // line 68
        yield from         $this->unwrap()->yieldBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 71
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_radio_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 72
        $_v2 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 73
            yield "        <div class=\"form-group";
            if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 73, $this->source); })())) {
                yield " has-error";
            }
            yield "\">
            <div class=\"";
            // line 74
            yield from             $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
            yield "\"></div>
            <div class=\"";
            // line 75
            yield from             $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
            yield "\">
                ";
            // line 76
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), 'widget');
            yield "
                ";
            // line 77
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), 'errors');
            yield "
            </div>
        </div>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 72
        yield Twig\Extension\CoreExtension::spaceless($_v2);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 83
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_submit_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submit_row"));

        // line 84
        $_v3 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 85
            yield "        <div class=\"form-group\">
            <div class=\"";
            // line 86
            yield from             $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
            yield "\"></div>
            <div class=\"";
            // line 87
            yield from             $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
            yield "\">
                ";
            // line 88
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), 'widget');
            yield "
            </div>
        </div>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 84
        yield Twig\Extension\CoreExtension::spaceless($_v3);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 94
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_group_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 95
        yield "col-sm";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 98
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row_class"));

        // line 99
        yield "form-group row";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 102
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ip_address_text_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ip_address_text_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ip_address_text_widget"));

        // line 103
        yield "<div class=\"input-group\">";
        // line 104
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 105
        yield "<button type=\"button\" class=\"btn btn-outline-primary add_ip_button\" data-ip=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentIp"]) || array_key_exists("currentIp", $context) ? $context["currentIp"] : (function () { throw new RuntimeError('Variable "currentIp" does not exist.', 105, $this->source); })()), "html", null, true);
        yield "\">
        <i class=\"material-icons\">add_circle</i> ";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add my IP", [], "Admin.Actions"), "html", null, true);
        yield "
    </button>
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
    public function block_switch_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "switch_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "switch_widget"));

        // line 112
        yield "<div class=\"input-group\">";
        // line 113
        yield from $this->yieldParentBlock("switch_widget", $context, $blocks);
        // line 114
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 117
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_text_with_length_counter_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_with_length_counter_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_with_length_counter_widget"));

        // line 118
        yield "  <div class=\"input-group js-text-with-length-counter\">
    ";
        // line 119
        $context["current_length"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "vars", [], "any", false, false, false, 119), "max_length", [], "any", false, false, false, 119) - Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "vars", [], "any", false, false, false, 119), "value", [], "any", false, false, false, 119)));
        // line 120
        yield "
    ";
        // line 121
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "vars", [], "any", false, false, false, 121), "position", [], "any", false, false, false, 121) == "before")) {
            // line 122
            yield "      <div class=\"input-group-prepend\">
        <span class=\"input-group-text js-countable-text\">";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["current_length"]) || array_key_exists("current_length", $context) ? $context["current_length"] : (function () { throw new RuntimeError('Variable "current_length" does not exist.', 123, $this->source); })()), "html", null, true);
            yield "</span>
      </div>
    ";
        }
        // line 126
        yield "
    ";
        // line 127
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 127, $this->source); })()), (isset($context["input_attr"]) || array_key_exists("input_attr", $context) ? $context["input_attr"] : (function () { throw new RuntimeError('Variable "input_attr" does not exist.', 127, $this->source); })()));
        // line 128
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 128, $this->source); })()), ["data-max-length" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "vars", [], "any", false, false, false, 128), "max_length", [], "any", false, false, false, 128), "maxlength" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "vars", [], "any", false, false, false, 128), "max_length", [], "any", false, false, false, 128), "class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 128)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 128, $this->source); })()), "class", [], "any", false, false, false, 128), "")) : ("")) . " js-countable-input"))]);
        // line 130
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "vars", [], "any", false, false, false, 130), "input", [], "any", false, false, false, 130) == "textarea")) {
            // line 131
            yield from             $this->unwrap()->yieldBlock("textarea_widget", $context, $blocks);
        } else {
            // line 133
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        // line 135
        yield "
    ";
        // line 136
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "vars", [], "any", false, false, false, 136), "position", [], "any", false, false, false, 136) == "after")) {
            // line 137
            yield "      <div class=\"input-group-append\">
        <span class=\"input-group-text js-countable-text\">";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["current_length"]) || array_key_exists("current_length", $context) ? $context["current_length"] : (function () { throw new RuntimeError('Variable "current_length" does not exist.', 138, $this->source); })()), "html", null, true);
            yield "</span>
      </div>
    ";
        }
        // line 141
        yield "  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 144
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_number_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "number_widget"));

        // line 145
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 145, $this->source); })()), "text")) : ("text"));
        // line 146
        yield "<div class=\"input-group\">";
        // line 147
        yield from         $this->unwrap()->yieldBlock("form_unit_prepend", $context, $blocks);
        // line 148
        yield "<div class=\"w-100\">";
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield "</div>";
        // line 149
        yield from         $this->unwrap()->yieldBlock("form_unit", $context, $blocks);
        // line 150
        yield "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 153
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_integer_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "integer_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 154
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 154, $this->source); })()), "number")) : ("number"));
        // line 155
        yield "<div class=\"input-group\">";
        // line 156
        yield from         $this->unwrap()->yieldBlock("form_unit_prepend", $context, $blocks);
        // line 157
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 158
        yield from         $this->unwrap()->yieldBlock("form_unit", $context, $blocks);
        // line 159
        yield "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 162
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_unit(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_unit"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_unit"));

        // line 163
        yield "  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 163), "unit", [], "any", true, true, false, 163) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "vars", [], "any", false, false, false, 163), "prepend_unit", [], "any", false, false, false, 163))) {
            // line 164
            yield "    <div class=\"input-group-append\">
      <span class=\"input-group-text\">";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "vars", [], "any", false, false, false, 165), "unit", [], "any", false, false, false, 165), "html", null, true);
            yield "</span>
    </div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 170
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_unit_prepend(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_unit_prepend"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_unit_prepend"));

        // line 171
        yield "  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 171), "unit", [], "any", true, true, false, 171) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "vars", [], "any", false, false, false, 171), "prepend_unit", [], "any", false, false, false, 171))) {
            // line 172
            yield "    <div class=\"input-group-prepend\">
      <span class=\"input-group-text\">";
            // line 173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "vars", [], "any", false, false, false, 173), "unit", [], "any", false, false, false, 173), "html", null, true);
            yield "</span>
    </div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 178
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_amount_currency_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "amount_currency_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "amount_currency_widget"));

        // line 179
        yield "  <div class=\"input-group\">
    <input id=\"";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "amount", [], "any", false, false, false, 180), "vars", [], "any", false, false, false, 180), "id", [], "any", false, false, false, 180), "html", null, true);
        yield "\" type=\"text\" class=\"form-control\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "amount", [], "any", false, false, false, 180), "vars", [], "any", false, false, false, 180), "full_name", [], "any", false, false, false, 180), "html", null, true);
        yield "\" required>
    <div class=\"input-group-append\">
      ";
        // line 182
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "amount", [], "any", false, true, false, 182), "vars", [], "any", false, true, false, 182), "unit", [], "any", true, true, false, 182)) {
            // line 183
            yield "        <span class=\"input-group-text\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "amount", [], "any", false, false, false, 183), "vars", [], "any", false, false, false, 183), "unit", [], "any", false, false, false, 183), "html", null, true);
            yield "</span>
        ";
            // line 184
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "id_currency", [], "any", false, false, false, 184), 'widget');
            yield "
      ";
        } else {
            // line 186
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "id_currency", [], "any", false, false, false, 186), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
      ";
        }
        // line 188
        yield "    </div>
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
        return "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_horizontal_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  837 => 188,  831 => 186,  826 => 184,  821 => 183,  819 => 182,  812 => 180,  809 => 179,  796 => 178,  781 => 173,  778 => 172,  775 => 171,  762 => 170,  747 => 165,  744 => 164,  741 => 163,  728 => 162,  717 => 159,  715 => 158,  713 => 157,  711 => 156,  709 => 155,  707 => 154,  694 => 153,  683 => 150,  681 => 149,  677 => 148,  675 => 147,  673 => 146,  671 => 145,  658 => 144,  646 => 141,  640 => 138,  637 => 137,  635 => 136,  632 => 135,  629 => 133,  626 => 131,  624 => 130,  622 => 128,  620 => 127,  617 => 126,  611 => 123,  608 => 122,  606 => 121,  603 => 120,  601 => 119,  598 => 118,  585 => 117,  573 => 114,  571 => 113,  569 => 112,  556 => 111,  541 => 106,  536 => 105,  534 => 104,  532 => 103,  519 => 102,  508 => 99,  495 => 98,  484 => 95,  471 => 94,  460 => 84,  452 => 88,  448 => 87,  444 => 86,  441 => 85,  439 => 84,  426 => 83,  415 => 72,  407 => 77,  403 => 76,  399 => 75,  395 => 74,  388 => 73,  386 => 72,  373 => 71,  362 => 68,  349 => 67,  338 => 64,  325 => 63,  314 => 51,  306 => 57,  302 => 56,  298 => 55,  294 => 54,  290 => 53,  281 => 52,  279 => 51,  266 => 50,  255 => 45,  242 => 44,  231 => 34,  227 => 41,  224 => 39,  221 => 38,  215 => 36,  212 => 35,  210 => 34,  197 => 33,  186 => 28,  184 => 27,  171 => 26,  160 => 178,  157 => 177,  155 => 170,  152 => 169,  150 => 162,  148 => 153,  146 => 144,  144 => 117,  141 => 116,  139 => 111,  136 => 110,  134 => 102,  131 => 101,  129 => 98,  126 => 97,  124 => 94,  121 => 93,  119 => 83,  116 => 82,  114 => 71,  111 => 70,  109 => 67,  106 => 66,  104 => 63,  101 => 62,  99 => 50,  96 => 49,  93 => 47,  91 => 44,  88 => 43,  86 => 33,  83 => 32,  80 => 30,  78 => 26,  35 => 25,);
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
{% use '@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig' %}
{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {% apply spaceless %}
        {% if label is same as(false) %}
            <div class=\"{{ block('form_label_class') }}\"></div>
        {% else %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
            {{- parent() -}}
        {% endif %}
    {% endapply %}
{%- endblock form_label %}

{% block form_label_class -%}
  form-control-label
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {% apply spaceless %}
        <div class=\"{{ block('form_row_class') }} {% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
            {{ form_label(form) }}
            <div class=\"{{ block('form_group_class') }}\">
                {{ form_widget(form) }}
                {{ form_errors(form) }}
                {{ block('form_help') }}
            </div>
        </div>
    {% endapply %}
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
    {% apply spaceless %}
        <div class=\"form-group{% if not valid %} has-error{% endif %}\">
            <div class=\"{{ block('form_label_class') }}\"></div>
            <div class=\"{{ block('form_group_class') }}\">
                {{ form_widget(form) }}
                {{ form_errors(form) }}
            </div>
        </div>
    {% endapply %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
    {% apply spaceless %}
        <div class=\"form-group\">
            <div class=\"{{ block('form_label_class') }}\"></div>
            <div class=\"{{ block('form_group_class') }}\">
                {{ form_widget(form) }}
            </div>
        </div>
    {% endapply %}
{% endblock submit_row %}

{% block form_group_class -%}
    col-sm
{%- endblock form_group_class %}

{% block form_row_class -%}
    form-group row
{%- endblock form_row_class %}

{% block ip_address_text_widget %}
<div class=\"input-group\">
    {{- block('form_widget_simple') -}}
    <button type=\"button\" class=\"btn btn-outline-primary add_ip_button\" data-ip=\"{{ currentIp }}\">
        <i class=\"material-icons\">add_circle</i> {{ 'Add my IP'|trans({}, 'Admin.Actions') }}
    </button>
</div>
{% endblock ip_address_text_widget %}

{% block switch_widget %}
<div class=\"input-group\">
    {{- parent() -}}
</div>
{% endblock switch_widget %}

{% block text_with_length_counter_widget %}
  <div class=\"input-group js-text-with-length-counter\">
    {% set current_length = form.vars.max_length - form.vars.value|length %}

    {% if form.vars.position == 'before' %}
      <div class=\"input-group-prepend\">
        <span class=\"input-group-text js-countable-text\">{{ current_length }}</span>
      </div>
    {% endif %}

    {% set attr = attr|merge(input_attr) -%}
    {% set attr = attr|merge({'data-max-length': form.vars.max_length, maxlength: form.vars.max_length, class: (attr.class|default('') ~ ' js-countable-input')|trim}) -%}

    {% if form.vars.input == 'textarea' %}
      {{- block('textarea_widget') -}}
    {% else %}
      {{- block('form_widget_simple') -}}
    {% endif %}

    {% if form.vars.position == 'after' %}
      <div class=\"input-group-append\">
        <span class=\"input-group-text js-countable-text\">{{ current_length }}</span>
      </div>
    {% endif %}
  </div>
{% endblock text_with_length_counter_widget %}

{%- block number_widget -%}
  {%- set type = type|default('text') -%}
  <div class=\"input-group\">
    {{- block('form_unit_prepend') -}}
    <div class=\"w-100\">{{- block('form_widget_simple') -}}</div>
    {{- block('form_unit') -}}
  </div>
{%- endblock number_widget -%}

{%- block integer_widget -%}
  {%- set type = type|default('number') -%}
  <div class=\"input-group\">
    {{- block('form_unit_prepend') -}}
    {{- block('form_widget_simple') -}}
    {{- block('form_unit') -}}
  </div>
{%- endblock integer_widget -%}

{% block form_unit %}
  {% if form.vars.unit is defined and not form.vars.prepend_unit %}
    <div class=\"input-group-append\">
      <span class=\"input-group-text\">{{ form.vars.unit }}</span>
    </div>
  {% endif %}
{% endblock form_unit %}

{% block form_unit_prepend %}
  {% if form.vars.unit is defined and form.vars.prepend_unit %}
    <div class=\"input-group-prepend\">
      <span class=\"input-group-text\">{{ form.vars.unit }}</span>
    </div>
  {% endif %}
{% endblock form_unit_prepend %}

{% block amount_currency_widget %}
  <div class=\"input-group\">
    <input id=\"{{ form.amount.vars.id }}\" type=\"text\" class=\"form-control\" name=\"{{ form.amount.vars.full_name }}\" required>
    <div class=\"input-group-append\">
      {% if form.amount.vars.unit is defined %}
        <span class=\"input-group-text\">{{ form.amount.vars.unit }}</span>
        {{ form_widget(form.id_currency) }}
      {% else %}
        {{ form_widget(form.id_currency, {attr: {class: 'form-control'}}) }}
      {% endif %}
    </div>
  </div>
{% endblock %}
", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_horizontal_layout.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/bootstrap_4_horizontal_layout.html.twig");
    }
}
