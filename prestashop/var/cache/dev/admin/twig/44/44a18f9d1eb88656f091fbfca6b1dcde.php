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

/* @PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig */
class __TwigTemplate_aedd775baeca68ea7a7161d0c48f6592 extends Template
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
            'entity_search_input_widget' => [$this, 'block_entity_search_input_widget'],
            'entity_search_list_layout' => [$this, 'block_entity_search_list_layout'],
            'entity_search_table_layout' => [$this, 'block_entity_search_table_layout'],
            'entity_item_row' => [$this, 'block_entity_item_row'],
            'entity_item_list_row' => [$this, 'block_entity_item_list_row'],
            'entity_item_table_row' => [$this, 'block_entity_item_table_row'],
            'searched_customer_row' => [$this, 'block_searched_customer_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig"));

        // line 25
        yield "
";
        // line 26
        yield from $this->unwrap()->yieldBlock('entity_search_input_widget', $context, $blocks);
        // line 75
        yield "
";
        // line 76
        yield from $this->unwrap()->yieldBlock('entity_search_list_layout', $context, $blocks);
        // line 82
        yield "
";
        // line 83
        yield from $this->unwrap()->yieldBlock('entity_search_table_layout', $context, $blocks);
        // line 112
        yield "
";
        // line 113
        yield from $this->unwrap()->yieldBlock('entity_item_row', $context, $blocks);
        // line 120
        yield "
";
        // line 121
        yield from $this->unwrap()->yieldBlock('entity_item_list_row', $context, $blocks);
        // line 135
        yield from $this->unwrap()->yieldBlock('entity_item_table_row', $context, $blocks);
        // line 158
        yield from $this->unwrap()->yieldBlock('searched_customer_row', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_entity_search_input_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_search_input_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_search_input_widget"));

        // line 27
        yield "  ";
        // line 28
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 28, $this->source); })()), ["data-prototype-template" =>         // line 29
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 29, $this->source); })()), 'row'), "data-prototype-index" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 30
(isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 30, $this->source); })()), "vars", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html_attr"), "data-prototype-mapping" => json_encode(        // line 31
(isset($context["prototype_mapping"]) || array_key_exists("prototype_mapping", $context) ? $context["prototype_mapping"] : (function () { throw new RuntimeError('Variable "prototype_mapping" does not exist.', 31, $this->source); })())), "data-identifier-field" =>         // line 32
(isset($context["identifier_field"]) || array_key_exists("identifier_field", $context) ? $context["identifier_field"] : (function () { throw new RuntimeError('Variable "identifier_field" does not exist.', 32, $this->source); })()), "data-filtered-identities" => json_encode(        // line 33
(isset($context["filtered_identities"]) || array_key_exists("filtered_identities", $context) ? $context["filtered_identities"] : (function () { throw new RuntimeError('Variable "filtered_identities" does not exist.', 33, $this->source); })())), "data-remove-modal" => json_encode(        // line 34
(isset($context["remove_modal"]) || array_key_exists("remove_modal", $context) ? $context["remove_modal"] : (function () { throw new RuntimeError('Variable "remove_modal" does not exist.', 34, $this->source); })())), "data-remote-url" =>         // line 35
(isset($context["remote_url"]) || array_key_exists("remote_url", $context) ? $context["remote_url"] : (function () { throw new RuntimeError('Variable "remote_url" does not exist.', 35, $this->source); })()), "data-data-limit" =>         // line 36
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 36, $this->source); })()), "data-min-length" =>         // line 37
(isset($context["min_length"]) || array_key_exists("min_length", $context) ? $context["min_length"] : (function () { throw new RuntimeError('Variable "min_length" does not exist.', 37, $this->source); })()), "data-allow-delete" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 38
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "vars", [], "any", false, false, false, 38), "allow_delete", [], "any", false, false, false, 38)) ? (1) : (0)), "data-suggestion-field" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 39
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "vars", [], "any", false, false, false, 39), "suggestion_field", [], "any", false, false, false, 39)]);
        // line 41
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 41, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 41)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 41, $this->source); })()), "class", [], "any", false, false, false, 41), "")) : ("")) . " entity-search-widget"))]);
        // line 44
        yield "  <div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
    ";
        // line 46
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "vars", [], "any", false, false, false, 46), "allow_search", [], "any", false, false, false, 46)) {
            // line 47
            yield "      <div class=\"search search-with-icon\">";
            // line 48
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["search_attr"]) || array_key_exists("search_attr", $context) ? $context["search_attr"] : (function () { throw new RuntimeError('Variable "search_attr" does not exist.', 48, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source,             // line 49
($context["search_attr"] ?? null), "class", [], "any", true, true, false, 49)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["search_attr"]) || array_key_exists("search_attr", $context) ? $context["search_attr"] : (function () { throw new RuntimeError('Variable "search_attr" does not exist.', 49, $this->source); })()), "class", [], "any", false, false, false, 49), "")) : ("")) . " entity-search-input form-control")), "autocomplete" => "off", "placeholder" =>             // line 51
(isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 51, $this->source); })()), "type" => "text"]);
            // line 54
            $context["id"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "vars", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54) . "_search_input");
            // line 55
            yield "<input ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield " />
      </div>
    ";
        }
        // line 58
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        // line 60
        $context["id"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "vars", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60) . "_list");
        // line 61
        if (((isset($context["list_layout"]) || array_key_exists("list_layout", $context) ? $context["list_layout"] : (function () { throw new RuntimeError('Variable "list_layout" does not exist.', 61, $this->source); })()) == "table")) {
            // line 62
            yield from             $this->unwrap()->yieldBlock("entity_search_table_layout", $context, $blocks);
        } else {
            // line 64
            yield from             $this->unwrap()->yieldBlock("entity_search_list_layout", $context, $blocks);
        }
        // line 66
        yield "    ";
        if ( !(null === (isset($context["empty_state"]) || array_key_exists("empty_state", $context) ? $context["empty_state"] : (function () { throw new RuntimeError('Variable "empty_state" does not exist.', 66, $this->source); })()))) {
            // line 67
            yield "      <div class=\"alert alert-info empty-entity-list mt-2\" role=\"alert\">
        <p class=\"alert-text\">
          ";
            // line 69
            yield (isset($context["empty_state"]) || array_key_exists("empty_state", $context) ? $context["empty_state"] : (function () { throw new RuntimeError('Variable "empty_state" does not exist.', 69, $this->source); })());
            yield "
        </p>
      </div>
    ";
        }
        // line 73
        yield "  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 76
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_entity_search_list_layout(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_search_list_layout"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_search_list_layout"));

        // line 77
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["list_attr"]) || array_key_exists("list_attr", $context) ? $context["list_attr"] : (function () { throw new RuntimeError('Variable "list_attr" does not exist.', 77, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["list_attr"] ?? null), "class", [], "any", true, true, false, 77)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["list_attr"]) || array_key_exists("list_attr", $context) ? $context["list_attr"] : (function () { throw new RuntimeError('Variable "list_attr" does not exist.', 77, $this->source); })()), "class", [], "any", false, false, false, 77), "")) : ("")) . " entities-list entities-list-container"))]);
        // line 78
        yield "<ul ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">";
        // line 79
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        // line 80
        yield "</ul>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 83
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_entity_search_table_layout(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_search_table_layout"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_search_table_layout"));

        // line 84
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["list_attr"]) || array_key_exists("list_attr", $context) ? $context["list_attr"] : (function () { throw new RuntimeError('Variable "list_attr" does not exist.', 84, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["list_attr"] ?? null), "class", [], "any", true, true, false, 84)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["list_attr"]) || array_key_exists("list_attr", $context) ? $context["list_attr"] : (function () { throw new RuntimeError('Variable "list_attr" does not exist.', 84, $this->source); })()), "class", [], "any", false, false, false, 84), "")) : ("")) . " entities-list-container"))]);
        // line 85
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
    <div class=\"row\">
      <div class=\"col-sm\">
        <table class=\"table\">
          <thead class=\"thead-default\">
            <tr>
            ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 91, $this->source); })()), "children", [], "any", false, false, false, 91));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 92
            yield "              ";
            $context["childType"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 92), "block_prefixes", [], "any", false, false, false, 92), 1, [], "any", false, false, false, 92);
            // line 93
            yield "              ";
            if (((isset($context["childType"]) || array_key_exists("childType", $context) ? $context["childType"] : (function () { throw new RuntimeError('Variable "childType" does not exist.', 93, $this->source); })()) != "hidden")) {
                // line 94
                yield "                <th>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 94), "label", [], "any", false, false, false, 94), "html", null, true);
                yield "</th>
              ";
            }
            // line 96
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        yield "
            ";
        // line 99
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "vars", [], "any", false, false, false, 99), "allow_delete", [], "any", false, false, false, 99)) {
            // line 100
            yield "              <th></th>
            ";
        }
        // line 102
        yield "            </tr>
          </thead>
          <tbody class=\"entities-list\">";
        // line 105
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        // line 106
        yield "</tbody>
        </table>
      </div>
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 113
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_entity_item_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_item_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_item_row"));

        // line 114
        yield "  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "parent", [], "any", false, false, false, 114), "vars", [], "any", false, false, false, 114), "list_layout", [], "any", false, false, false, 114) == "table")) {
            // line 115
            yield from             $this->unwrap()->yieldBlock("entity_item_table_row", $context, $blocks);
        } else {
            // line 117
            yield from             $this->unwrap()->yieldBlock("entity_item_list_row", $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 121
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_entity_item_list_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_item_list_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_item_list_row"));

        // line 122
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 122, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 122)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 122, $this->source); })()), "class", [], "any", false, false, false, 122), "")) : ("")) . " media entity-item"))]);
        // line 123
        yield "  <li ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
    <div class=\"media-left\">
      ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "image", [], "any", false, false, false, 125), 'widget');
        yield "
    </div>
    <div class=\"media-body media-middle\">
      ";
        // line 128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "name", [], "any", false, false, false, 128), 'widget');
        yield "
      <i class=\"material-icons entity-item-delete\">clear</i>
    </div>
    ";
        // line 131
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), 'rest');
        yield "
  </li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 135
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_entity_item_table_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_item_table_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_item_table_row"));

        // line 136
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 136, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 136)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 136, $this->source); })()), "class", [], "any", false, false, false, 136), "")) : ("")) . " entity-item"))]);
        // line 137
        yield "  <tr ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
  ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "children", [], "any", false, false, false, 138));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 139
            yield "    ";
            $context["childType"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 139), "block_prefixes", [], "any", false, false, false, 139), 1, [], "any", false, false, false, 139);
            // line 140
            yield "    ";
            if (((isset($context["childType"]) || array_key_exists("childType", $context) ? $context["childType"] : (function () { throw new RuntimeError('Variable "childType" does not exist.', 140, $this->source); })()) == "hidden")) {
                // line 141
                yield "      ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                yield "
    ";
            } else {
                // line 143
                yield "    <td>
      ";
                // line 144
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                yield "
    </td>
    ";
            }
            // line 147
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        yield "
  ";
        // line 150
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "parent", [], "any", false, false, false, 150), "vars", [], "any", false, false, false, 150), "allow_delete", [], "any", false, false, false, 150)) {
            // line 151
            yield "    <td>
      <i class=\"material-icons entity-item-delete\">clear</i>
    </td>
  ";
        }
        // line 155
        yield "  </tr>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 158
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_searched_customer_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "searched_customer_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "searched_customer_row"));

        // line 159
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 159, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 159)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 159, $this->source); })()), "class", [], "any", false, false, false, 159), "")) : ("")) . " media entity-item"))]);
        // line 160
        yield "  <li ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
    <div class=\"media-body media-middle\">
      ";
        // line 162
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "fullname_and_email", [], "any", false, false, false, 162), 'widget');
        yield "
      <i class=\"material-icons entity-item-delete\">clear</i>
    </div>
    ";
        // line 165
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "id_customer", [], "any", false, false, false, 165), 'widget');
        yield "
  </li>
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
        return "@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  477 => 165,  471 => 162,  465 => 160,  462 => 159,  449 => 158,  438 => 155,  432 => 151,  429 => 150,  426 => 148,  420 => 147,  414 => 144,  411 => 143,  405 => 141,  402 => 140,  399 => 139,  395 => 138,  390 => 137,  388 => 136,  375 => 135,  361 => 131,  355 => 128,  349 => 125,  343 => 123,  340 => 122,  327 => 121,  315 => 117,  312 => 115,  309 => 114,  296 => 113,  280 => 106,  278 => 105,  274 => 102,  270 => 100,  267 => 99,  264 => 97,  258 => 96,  252 => 94,  249 => 93,  246 => 92,  242 => 91,  232 => 85,  230 => 84,  217 => 83,  205 => 80,  203 => 79,  199 => 78,  197 => 77,  184 => 76,  172 => 73,  165 => 69,  161 => 67,  158 => 66,  155 => 64,  152 => 62,  150 => 61,  148 => 60,  146 => 58,  139 => 55,  137 => 54,  135 => 51,  134 => 49,  133 => 48,  131 => 47,  128 => 46,  123 => 44,  121 => 41,  119 => 39,  118 => 38,  117 => 37,  116 => 36,  115 => 35,  114 => 34,  113 => 33,  112 => 32,  111 => 31,  110 => 30,  109 => 29,  108 => 28,  106 => 27,  93 => 26,  82 => 158,  80 => 135,  78 => 121,  75 => 120,  73 => 113,  70 => 112,  68 => 83,  65 => 82,  63 => 76,  60 => 75,  58 => 26,  55 => 25,);
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

{% block entity_search_input_widget %}
  {# We cannot use the escape filter for remote_url or it breaks the url and it is not callable any more #}
  {%- set attr = attr|merge({
    'data-prototype-template': form_row(prototype),
    'data-prototype-index': prototype.vars.name|e('html_attr'),
    'data-prototype-mapping': prototype_mapping|json_encode,
    'data-identifier-field': identifier_field,
    'data-filtered-identities': filtered_identities|json_encode,
    'data-remove-modal': remove_modal|json_encode,
    'data-remote-url': remote_url,
    'data-data-limit': limit,
    'data-min-length': min_length,
    'data-allow-delete': form.vars.allow_delete ? 1 : 0,
    'data-suggestion-field': form.vars.suggestion_field
  }) -%}
  {%- set attr = attr|merge({class: (attr.class|default('') ~ ' entity-search-widget')|trim}) -%}

  {# We use widget_container_attributes in this widget because we do not want the name property #}
  <div {{ block('widget_container_attributes') }}>
    {# If dynamic addition is disabled we don't display the search input field #}
    {% if form.vars.allow_search %}
      <div class=\"search search-with-icon\">
        {%- set attr = search_attr|merge({
          class: (search_attr.class|default('') ~ ' entity-search-input form-control')|trim,
          autocomplete: 'off',
          placeholder: placeholder,
          type: 'text'
        }) -%}
        {%- set id = form.vars.id ~ '_search_input' -%}
        <input {{ block('widget_container_attributes') }} />
      </div>
    {% endif %}
    {{- block('form_help') -}}

    {%- set id = form.vars.id ~ '_list' -%}
    {% if list_layout == 'table' %}
      {{- block('entity_search_table_layout') -}}
    {% else %}
      {{- block('entity_search_list_layout') -}}
    {% endif %}
    {% if empty_state is not null %}
      <div class=\"alert alert-info empty-entity-list mt-2\" role=\"alert\">
        <p class=\"alert-text\">
          {{ empty_state|raw('html') }}
        </p>
      </div>
    {% endif %}
  </div>
{% endblock %}

{% block entity_search_list_layout %}
  {%- set attr = list_attr|merge({class: (list_attr.class|default('') ~ ' entities-list entities-list-container')|trim}) -%}
  <ul {{ block('widget_container_attributes') }}>
    {{- block('form_rows') -}}
  </ul>
{% endblock %}

{% block entity_search_table_layout %}
  {%- set attr = list_attr|merge({class: (list_attr.class|default('') ~ ' entities-list-container')|trim}) -%}
  <div {{ block('widget_container_attributes') }}>
    <div class=\"row\">
      <div class=\"col-sm\">
        <table class=\"table\">
          <thead class=\"thead-default\">
            <tr>
            {% for child in prototype.children %}
              {% set childType = child.vars.block_prefixes.1 %}
              {% if childType != 'hidden' %}
                <th>{{ child.vars.label }}</th>
              {% endif %}
            {% endfor %}

            {# If item deletion is disabled we don't display the extra column for actions #}
            {% if form.vars.allow_delete %}
              <th></th>
            {% endif %}
            </tr>
          </thead>
          <tbody class=\"entities-list\">
          {{- block('form_rows') -}}
          </tbody>
        </table>
      </div>
    </div>
  </div>
{% endblock %}

{% block entity_item_row %}
  {% if form.parent.vars.list_layout == 'table' %}
    {{- block('entity_item_table_row') -}}
  {% else %}
    {{- block('entity_item_list_row') -}}
  {% endif %}
{% endblock %}

{% block entity_item_list_row %}
  {% set attr = attr|merge({class: (attr.class|default('') ~ ' media entity-item')|trim}) %}
  <li {{ block('widget_container_attributes') }}>
    <div class=\"media-left\">
      {{ form_widget(form.image) }}
    </div>
    <div class=\"media-body media-middle\">
      {{ form_widget(form.name) }}
      <i class=\"material-icons entity-item-delete\">clear</i>
    </div>
    {{ form_rest(form) }}
  </li>
{% endblock %}

{%- block entity_item_table_row -%}
  {% set attr = attr|merge({class: (attr.class|default('') ~ ' entity-item')|trim}) %}
  <tr {{ block('widget_container_attributes') }}>
  {% for child in form.children %}
    {% set childType = child.vars.block_prefixes.1 %}
    {% if childType == 'hidden' %}
      {{ form_widget(child) }}
    {% else %}
    <td>
      {{ form_widget(child) }}
    </td>
    {% endif %}
  {% endfor %}

  {# If item deletion is disabled we don't display the extra column for actions #}
  {% if form.parent.vars.allow_delete %}
    <td>
      <i class=\"material-icons entity-item-delete\">clear</i>
    </td>
  {% endif %}
  </tr>
{%- endblock -%}

{% block searched_customer_row %}
  {% set attr = attr|merge({class: (attr.class|default('') ~ ' media entity-item')|trim}) %}
  <li {{ block('widget_container_attributes') }}>
    <div class=\"media-body media-middle\">
      {{ form_widget(form.fullname_and_email) }}
      <i class=\"material-icons entity-item-delete\">clear</i>
    </div>
    {{ form_widget(form.id_customer) }}
  </li>
{% endblock %}
", "@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/entity_search_input.html.twig");
    }
}
