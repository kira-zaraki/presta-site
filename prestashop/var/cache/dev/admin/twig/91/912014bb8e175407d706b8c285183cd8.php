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

/* @PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig */
class __TwigTemplate_89e6d8afce0f52455000e7cbe5d9eb85 extends Template
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

        // line 45
        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 45);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.', 45, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        if (!isset($_trait_0_blocks["radio_widget"])) {
            throw new RuntimeError('Block "radio_widget" is not defined in trait "bootstrap_base_layout.html.twig".', 45, $this->source);
        }

        $_trait_0_blocks["base_radio_widget"] = $_trait_0_blocks["radio_widget"]; unset($_trait_0_blocks["radio_widget"]); $this->traitAliases["base_radio_widget"] = "radio_widget";

        if (!isset($_trait_0_blocks["checkbox_widget"])) {
            throw new RuntimeError('Block "checkbox_widget" is not defined in trait "bootstrap_base_layout.html.twig".', 45, $this->source);
        }

        $_trait_0_blocks["base_checkbox_widget"] = $_trait_0_blocks["checkbox_widget"]; unset($_trait_0_blocks["checkbox_widget"]); $this->traitAliases["base_checkbox_widget"] = "checkbox_widget";

        // line 48
        $_trait_1 = $this->loadTemplate("bootstrap_4_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 48);
        if (!$_trait_1->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 48, $this->source);
        }
        $_trait_1_blocks = $_trait_1->unwrap()->getBlocks();

        // line 49
        $_trait_2 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 49);
        if (!$_trait_2->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig".'" cannot be used as a trait.', 49, $this->source);
        }
        $_trait_2_blocks = $_trait_2->unwrap()->getBlocks();

        // line 50
        $_trait_3 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/material.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 50);
        if (!$_trait_3->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/material.html.twig".'" cannot be used as a trait.', 50, $this->source);
        }
        $_trait_3_blocks = $_trait_3->unwrap()->getBlocks();

        // line 51
        $_trait_4 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/multishop.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 51);
        if (!$_trait_4->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/multishop.html.twig".'" cannot be used as a trait.', 51, $this->source);
        }
        $_trait_4_blocks = $_trait_4->unwrap()->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks,
            $_trait_2_blocks,
            $_trait_3_blocks,
            $_trait_4_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_widget' => [$this, 'block_form_widget'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'ip_address_text_widget' => [$this, 'block_ip_address_text_widget'],
                'password_widget' => [$this, 'block_password_widget'],
                'form_row' => [$this, 'block_form_row'],
                'form_modify_all_shops' => [$this, 'block_form_modify_all_shops'],
                'form_disabling_switch' => [$this, 'block_form_disabling_switch'],
                'widget_type_class' => [$this, 'block_widget_type_class'],
                'form_label' => [$this, 'block_form_label'],
                'textarea_widget' => [$this, 'block_textarea_widget'],
                'money_widget' => [$this, 'block_money_widget'],
                'percent_widget' => [$this, 'block_percent_widget'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'url_widget' => [$this, 'block_url_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'email_widget' => [$this, 'block_email_widget'],
                'button_widget' => [$this, 'block_button_widget'],
                'icon_button_widget' => [$this, 'block_icon_button_widget'],
                'choice_widget' => [$this, 'block_choice_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'choice_tree_widget' => [$this, 'block_choice_tree_widget'],
                'choice_tree_item_widget' => [$this, 'block_choice_tree_item_widget'],
                'translatefields_widget' => [$this, 'block_translatefields_widget'],
                'translate_fields_widget' => [$this, 'block_translate_fields_widget'],
                'translate_text_widget' => [$this, 'block_translate_text_widget'],
                'translate_textarea_widget' => [$this, 'block_translate_textarea_widget'],
                'date_picker_widget' => [$this, 'block_date_picker_widget'],
                'date_range_widget' => [$this, 'block_date_range_widget'],
                'search_and_reset_widget' => [$this, 'block_search_and_reset_widget'],
                'switch_widget' => [$this, 'block_switch_widget'],
                'row_attributes' => [$this, 'block_row_attributes'],
                '_form_step6_attachments_widget' => [$this, 'block__form_step6_attachments_widget'],
                'choice_label' => [$this, 'block_choice_label'],
                'checkbox_label' => [$this, 'block_checkbox_label'],
                'radio_label' => [$this, 'block_radio_label'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'form_errors' => [$this, 'block_form_errors'],
                'form_errors_field' => [$this, 'block_form_errors_field'],
                'form_errors_other' => [$this, 'block_form_errors_other'],
                'material_choice_table_widget' => [$this, 'block_material_choice_table_widget'],
                'material_multiple_choice_table_widget' => [$this, 'block_material_multiple_choice_table_widget'],
                'translatable_fields_with_tabs' => [$this, 'block_translatable_fields_with_tabs'],
                'translatable_fields_with_dropdown' => [$this, 'block_translatable_fields_with_dropdown'],
                'translatable_widget' => [$this, 'block_translatable_widget'],
                'birthday_widget' => [$this, 'block_birthday_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'shop_restriction_checkbox_widget' => [$this, 'block_shop_restriction_checkbox_widget'],
                'generatable_text_widget' => [$this, 'block_generatable_text_widget'],
                'text_with_recommended_length_widget' => [$this, 'block_text_with_recommended_length_widget'],
                'text_with_length_counter_widget' => [$this, 'block_text_with_length_counter_widget'],
                'integer_min_max_filter_widget' => [$this, 'block_integer_min_max_filter_widget'],
                'number_min_max_filter_widget' => [$this, 'block_number_min_max_filter_widget'],
                'number_widget' => [$this, 'block_number_widget'],
                'integer_widget' => [$this, 'block_integer_widget'],
                'form_unit' => [$this, 'block_form_unit'],
                'form_unit_prepend' => [$this, 'block_form_unit_prepend'],
                'form_help' => [$this, 'block_form_help'],
                'form_prepend_external_link' => [$this, 'block_form_prepend_external_link'],
                'form_append_external_link' => [$this, 'block_form_append_external_link'],
                'form_external_link' => [$this, 'block_form_external_link'],
                'form_external_link_attributes' => [$this, 'block_form_external_link_attributes'],
                'custom_content_widget' => [$this, 'block_custom_content_widget'],
                'text_widget' => [$this, 'block_text_widget'],
                'form_prepend_alert' => [$this, 'block_form_prepend_alert'],
                'form_append_alert' => [$this, 'block_form_append_alert'],
                'form_alert' => [$this, 'block_form_alert'],
                'unavailable_widget' => [$this, 'block_unavailable_widget'],
                'text_preview_widget' => [$this, 'block_text_preview_widget'],
                'link_preview_widget' => [$this, 'block_link_preview_widget'],
                'image_preview_widget' => [$this, 'block_image_preview_widget'],
                'delta_quantity_widget' => [$this, 'block_delta_quantity_widget'],
                'delta_quantity_quantity_widget' => [$this, 'block_delta_quantity_quantity_widget'],
                'delta_quantity_delta_row' => [$this, 'block_delta_quantity_delta_row'],
                'delta_quantity_delta_widget' => [$this, 'block_delta_quantity_delta_widget'],
                'submittable_input_widget' => [$this, 'block_submittable_input_widget'],
                'submittable_input_button_widget' => [$this, 'block_submittable_input_button_widget'],
                'submittable_delta_quantity_delta_widget' => [$this, 'block_submittable_delta_quantity_delta_widget'],
                'navigation_tab_widget' => [$this, 'block_navigation_tab_widget'],
                'accordion_widget' => [$this, 'block_accordion_widget'],
                'button_collection_widget' => [$this, 'block_button_collection_widget'],
                'avatar_url_row' => [$this, 'block_avatar_url_row'],
                'change_password_row' => [$this, 'block_change_password_row'],
                'price_reduction_widget' => [$this, 'block_price_reduction_widget'],
                'image_with_preview_widget' => [$this, 'block_image_with_preview_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig"));

        // line 25
        yield "
";
        // line 34
        yield "
";
        // line 46
        yield "
";
        // line 52
        yield "
";
        // line 54
        yield "
";
        // line 56
        yield "
";
        // line 57
        yield from $this->unwrap()->yieldBlock('form_start', $context, $blocks);
        // line 67
        yield from $this->unwrap()->yieldBlock('form_widget', $context, $blocks);
        // line 75
        yield from $this->unwrap()->yieldBlock('form_widget_simple', $context, $blocks);
        // line 80
        yield from $this->unwrap()->yieldBlock('ip_address_text_widget', $context, $blocks);
        // line 90
        yield from $this->unwrap()->yieldBlock('password_widget', $context, $blocks);
        // line 97
        yield "
";
        // line 98
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 116
        yield "
";
        // line 121
        yield from $this->unwrap()->yieldBlock('form_modify_all_shops', $context, $blocks);
        // line 128
        yield "
";
        // line 129
        yield from $this->unwrap()->yieldBlock('form_disabling_switch', $context, $blocks);
        // line 136
        yield "
";
        // line 137
        yield from $this->unwrap()->yieldBlock('widget_type_class', $context, $blocks);
        // line 156
        yield "
";
        // line 159
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 204
        yield "
";
        // line 205
        yield from $this->unwrap()->yieldBlock('textarea_widget', $context, $blocks);
        // line 211
        yield "
";
        // line 212
        yield from $this->unwrap()->yieldBlock('money_widget', $context, $blocks);
        // line 230
        yield "
";
        // line 231
        yield from $this->unwrap()->yieldBlock('percent_widget', $context, $blocks);
        // line 239
        yield "
";
        // line 240
        yield from $this->unwrap()->yieldBlock('datetime_widget', $context, $blocks);
        // line 254
        yield from $this->unwrap()->yieldBlock('url_widget', $context, $blocks);
        // line 260
        yield from $this->unwrap()->yieldBlock('date_widget', $context, $blocks);
        // line 278
        yield "
";
        // line 279
        yield from $this->unwrap()->yieldBlock('time_widget', $context, $blocks);
        // line 294
        yield from $this->unwrap()->yieldBlock('email_widget', $context, $blocks);
        // line 300
        yield from $this->unwrap()->yieldBlock('button_widget', $context, $blocks);
        // line 304
        yield "
";
        // line 305
        yield from $this->unwrap()->yieldBlock('icon_button_widget', $context, $blocks);
        // line 323
        yield "
";
        // line 324
        yield from $this->unwrap()->yieldBlock('choice_widget', $context, $blocks);
        // line 328
        yield "
";
        // line 329
        yield from $this->unwrap()->yieldBlock('choice_widget_collapsed', $context, $blocks);
        // line 333
        yield "
";
        // line 334
        yield from $this->unwrap()->yieldBlock('choice_widget_expanded', $context, $blocks);
        // line 357
        yield "
";
        // line 358
        yield from $this->unwrap()->yieldBlock('choice_tree_widget', $context, $blocks);
        // line 368
        yield "
";
        // line 369
        yield from $this->unwrap()->yieldBlock('choice_tree_item_widget', $context, $blocks);
        // line 407
        yield "
";
        // line 408
        yield from $this->unwrap()->yieldBlock('translatefields_widget', $context, $blocks);
        // line 433
        yield "
";
        // line 434
        yield from $this->unwrap()->yieldBlock('translate_fields_widget', $context, $blocks);
        // line 440
        yield "
";
        // line 441
        yield from $this->unwrap()->yieldBlock('translate_text_widget', $context, $blocks);
        // line 477
        yield "
";
        // line 478
        yield from $this->unwrap()->yieldBlock('translate_textarea_widget', $context, $blocks);
        // line 519
        yield "
";
        // line 520
        yield from $this->unwrap()->yieldBlock('date_picker_widget', $context, $blocks);
        // line 534
        yield "
";
        // line 535
        yield from $this->unwrap()->yieldBlock('date_range_widget', $context, $blocks);
        // line 551
        yield "
";
        // line 552
        yield from $this->unwrap()->yieldBlock('search_and_reset_widget', $context, $blocks);
        // line 577
        yield "
";
        // line 578
        yield from $this->unwrap()->yieldBlock('switch_widget', $context, $blocks);
        // line 602
        yield from $this->unwrap()->yieldBlock('row_attributes', $context, $blocks);
        // line 610
        yield from $this->unwrap()->yieldBlock('_form_step6_attachments_widget', $context, $blocks);
        // line 639
        yield "
";
        // line 641
        yield "
";
        // line 642
        yield from $this->unwrap()->yieldBlock('choice_label', $context, $blocks);
        // line 647
        yield "
";
        // line 648
        yield from $this->unwrap()->yieldBlock('checkbox_label', $context, $blocks);
        // line 651
        yield "
";
        // line 652
        yield from $this->unwrap()->yieldBlock('radio_label', $context, $blocks);
        // line 655
        yield "
";
        // line 656
        yield from $this->unwrap()->yieldBlock('checkbox_radio_label', $context, $blocks);
        // line 688
        yield "
";
        // line 689
        yield from $this->unwrap()->yieldBlock('radio_widget', $context, $blocks);
        // line 703
        yield "
";
        // line 704
        yield from $this->unwrap()->yieldBlock('checkbox_widget', $context, $blocks);
        // line 711
        yield "
";
        // line 713
        yield "
";
        // line 714
        yield from $this->unwrap()->yieldBlock('form_errors', $context, $blocks);
        // line 721
        yield "
";
        // line 722
        yield from $this->unwrap()->yieldBlock('form_errors_field', $context, $blocks);
        // line 778
        yield "
";
        // line 779
        yield from $this->unwrap()->yieldBlock('form_errors_other', $context, $blocks);
        // line 794
        yield "
";
        // line 796
        yield "
";
        // line 797
        yield from $this->unwrap()->yieldBlock('material_choice_table_widget', $context, $blocks);
        // line 834
        yield "
";
        // line 835
        yield from $this->unwrap()->yieldBlock('material_multiple_choice_table_widget', $context, $blocks);
        // line 887
        yield "
";
        // line 889
        yield from $this->unwrap()->yieldBlock('translatable_fields_with_tabs', $context, $blocks);
        // line 912
        yield "
";
        // line 913
        yield from $this->unwrap()->yieldBlock('translatable_fields_with_dropdown', $context, $blocks);
        // line 949
        yield "
";
        // line 950
        yield from $this->unwrap()->yieldBlock('translatable_widget', $context, $blocks);
        // line 958
        yield "
";
        // line 959
        yield from $this->unwrap()->yieldBlock('birthday_widget', $context, $blocks);
        // line 983
        yield "
";
        // line 984
        yield from $this->unwrap()->yieldBlock('file_widget', $context, $blocks);
        // line 1016
        yield "
";
        // line 1017
        yield from $this->unwrap()->yieldBlock('shop_restriction_checkbox_widget', $context, $blocks);
        // line 1033
        yield "
";
        // line 1034
        yield from $this->unwrap()->yieldBlock('generatable_text_widget', $context, $blocks);
        // line 1053
        yield "
";
        // line 1054
        yield from $this->unwrap()->yieldBlock('text_with_recommended_length_widget', $context, $blocks);
        // line 1079
        yield "
";
        // line 1080
        yield from $this->unwrap()->yieldBlock('text_with_length_counter_widget', $context, $blocks);
        // line 1108
        yield "
";
        // line 1109
        yield from $this->unwrap()->yieldBlock('integer_min_max_filter_widget', $context, $blocks);
        // line 1113
        yield "
";
        // line 1114
        yield from $this->unwrap()->yieldBlock('number_min_max_filter_widget', $context, $blocks);
        // line 1119
        yield from $this->unwrap()->yieldBlock('number_widget', $context, $blocks);
        // line 1129
        yield from $this->unwrap()->yieldBlock('integer_widget', $context, $blocks);
        // line 1139
        yield from $this->unwrap()->yieldBlock('form_unit', $context, $blocks);
        // line 1146
        yield "
";
        // line 1147
        yield from $this->unwrap()->yieldBlock('form_unit_prepend', $context, $blocks);
        // line 1154
        yield "
";
        // line 1155
        yield from $this->unwrap()->yieldBlock('form_help', $context, $blocks);
        // line 1164
        yield "
";
        // line 1165
        yield from $this->unwrap()->yieldBlock('form_prepend_external_link', $context, $blocks);
        // line 1170
        yield "
";
        // line 1171
        yield from $this->unwrap()->yieldBlock('form_append_external_link', $context, $blocks);
        // line 1176
        yield "
";
        // line 1177
        yield from $this->unwrap()->yieldBlock('form_external_link', $context, $blocks);
        // line 1195
        yield from $this->unwrap()->yieldBlock('form_external_link_attributes', $context, $blocks);
        // line 1209
        yield from $this->unwrap()->yieldBlock('custom_content_widget', $context, $blocks);
        // line 1212
        yield "
";
        // line 1213
        yield from $this->unwrap()->yieldBlock('text_widget', $context, $blocks);
        // line 1230
        yield from $this->unwrap()->yieldBlock('form_prepend_alert', $context, $blocks);
        // line 1236
        yield from $this->unwrap()->yieldBlock('form_append_alert', $context, $blocks);
        // line 1242
        yield from $this->unwrap()->yieldBlock('form_alert', $context, $blocks);
        // line 1283
        yield from $this->unwrap()->yieldBlock('unavailable_widget', $context, $blocks);
        // line 1290
        yield "
";
        // line 1291
        yield from $this->unwrap()->yieldBlock('text_preview_widget', $context, $blocks);
        // line 1321
        yield "
";
        // line 1322
        yield from $this->unwrap()->yieldBlock('link_preview_widget', $context, $blocks);
        // line 1329
        yield "
";
        // line 1330
        yield from $this->unwrap()->yieldBlock('image_preview_widget', $context, $blocks);
        // line 1339
        yield "
";
        // line 1340
        yield from $this->unwrap()->yieldBlock('delta_quantity_widget', $context, $blocks);
        // line 1353
        yield "
";
        // line 1354
        yield from $this->unwrap()->yieldBlock('delta_quantity_quantity_widget', $context, $blocks);
        // line 1366
        yield "
";
        // line 1367
        yield from $this->unwrap()->yieldBlock('delta_quantity_delta_row', $context, $blocks);
        // line 1383
        yield "
";
        // line 1384
        yield from $this->unwrap()->yieldBlock('delta_quantity_delta_widget', $context, $blocks);
        // line 1389
        yield "
";
        // line 1390
        yield from $this->unwrap()->yieldBlock('submittable_input_widget', $context, $blocks);
        // line 1403
        yield "
";
        // line 1404
        yield from $this->unwrap()->yieldBlock('submittable_input_button_widget', $context, $blocks);
        // line 1409
        yield "
";
        // line 1410
        yield from $this->unwrap()->yieldBlock('submittable_delta_quantity_delta_widget', $context, $blocks);
        // line 1424
        yield from $this->unwrap()->yieldBlock('navigation_tab_widget', $context, $blocks);
        // line 1482
        yield from $this->unwrap()->yieldBlock('accordion_widget', $context, $blocks);
        // line 1528
        yield from $this->unwrap()->yieldBlock('button_collection_widget', $context, $blocks);
        // line 1574
        yield "
";
        // line 1575
        yield from $this->unwrap()->yieldBlock('avatar_url_row', $context, $blocks);
        // line 1585
        yield "
";
        // line 1586
        yield from $this->unwrap()->yieldBlock('change_password_row', $context, $blocks);
        // line 1626
        yield from $this->unwrap()->yieldBlock('price_reduction_widget', $context, $blocks);
        // line 1640
        yield from $this->unwrap()->yieldBlock('image_with_preview_widget', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 57
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

        // line 58
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 58, $this->source); })()), ["data-alerts-success" => Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 58), "alerts", [], "any", false, true, false, 58), "success", [], "any", true, true, false, 58)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "vars", [], "any", false, false, false, 58), "alerts", [], "any", false, false, false, 58), "success", [], "any", false, false, false, 58), [])) : ([])))]);
        // line 59
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 59, $this->source); })()), ["data-alerts-info" => Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 59), "alerts", [], "any", false, true, false, 59), "info", [], "any", true, true, false, 59)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "vars", [], "any", false, false, false, 59), "alerts", [], "any", false, false, false, 59), "info", [], "any", false, false, false, 59), [])) : ([])))]);
        // line 60
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 60, $this->source); })()), ["data-alerts-warning" => Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 60), "alerts", [], "any", false, true, false, 60), "warning", [], "any", true, true, false, 60)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "vars", [], "any", false, false, false, 60), "alerts", [], "any", false, false, false, 60), "warning", [], "any", false, false, false, 60), [])) : ([])))]);
        // line 61
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 61, $this->source); })()), ["data-alerts-error" => Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 61), "alerts", [], "any", false, true, false, 61), "error", [], "any", true, true, false, 61)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "vars", [], "any", false, false, false, 61), "alerts", [], "any", false, false, false, 61), "error", [], "any", false, false, false, 61), [])) : ([])))]);
        // line 62
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 62, $this->source); })()), ["data-form-submitted" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "vars", [], "any", false, false, false, 62), "submitted", [], "any", false, false, false, 62)) ? (1) : (0))]);
        // line 63
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 63, $this->source); })()), ["data-form-valid" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "vars", [], "any", false, false, false, 63), "valid", [], "any", false, false, false, 63)) ? (1) : (0))]);
        // line 64
        yield "  ";
        yield from $this->yieldParentBlock("form_start", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 67
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget"));

        // line 68
        if (array_key_exists("columns_number", $context)) {
            // line 69
            yield "    ";
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 69, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 69)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 69, $this->source); })()), "class", [], "any", false, false, false, 69), "")) : ("")) . " form-columns-") . (isset($context["columns_number"]) || array_key_exists("columns_number", $context) ? $context["columns_number"] : (function () { throw new RuntimeError('Variable "columns_number" does not exist.', 69, $this->source); })())))]);
            // line 70
            yield "  ";
        }
        // line 71
        yield "  ";
        yield from $this->yieldParentBlock("form_widget", $context, $blocks);
        // line 72
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 75
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget_simple(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 76
        yield from $this->yieldParentBlock("form_widget_simple", $context, $blocks);
        yield "
  ";
        // line 77
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig", ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 77, $this->source); })())]);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 80
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

        // line 81
        yield "  <div class=\"input-group\">";
        // line 82
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 83
        yield "<button type=\"button\" class=\"btn btn-outline-primary add_ip_button\" data-ip=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentIp"]) || array_key_exists("currentIp", $context) ? $context["currentIp"] : (function () { throw new RuntimeError('Variable "currentIp" does not exist.', 83, $this->source); })()), "html", null, true);
        yield "\">
      <i class=\"material-icons\">add_circle</i> ";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add my IP", [], "Admin.Actions"), "html", null, true);
        yield "
    </button>
  </div>
  ";
        // line 87
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 90
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_password_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "password_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "password_widget"));

        // line 91
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 91, $this->source); })()), "password")) : ("password"));
        // line 92
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield "
  ";
        // line 93
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 98
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

        // line 99
        yield "<div class=\"form-group";
        yield from         $this->unwrap()->yieldBlock("widget_type_class", $context, $blocks);
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 99, $this->source); })()) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new RuntimeError('Variable "force_error" does not exist.', 99, $this->source); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 99, $this->source); })()))) {
            yield " has-error";
        }
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 99)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 99, $this->source); })()), "class", [], "any", false, false, false, 99), "html", null, true);
        }
        yield "\">";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), 'label');
        // line 101
        yield from         $this->unwrap()->yieldBlock("form_prepend_alert", $context, $blocks);
        // line 102
        yield from         $this->unwrap()->yieldBlock("form_prepend_external_link", $context, $blocks);
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), 'widget');
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), 'errors');
        // line 106
        yield from         $this->unwrap()->yieldBlock("form_modify_all_shops", $context, $blocks);
        // line 108
        yield from         $this->unwrap()->yieldBlock("form_append_alert", $context, $blocks);
        // line 109
        yield from         $this->unwrap()->yieldBlock("form_append_external_link", $context, $blocks);
        // line 110
        yield "</div>

  ";
        // line 112
        if ((isset($context["column_breaker"]) || array_key_exists("column_breaker", $context) ? $context["column_breaker"] : (function () { throw new RuntimeError('Variable "column_breaker" does not exist.', 112, $this->source); })())) {
            // line 113
            yield "  <div class=\"form-group form-column-breaker\"></div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 121
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_modify_all_shops(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_modify_all_shops"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_modify_all_shops"));

        // line 122
        yield "  ";
        $context["overrideCheckboxName"] = ((isset($context["modify_all_shops_prefix"]) || array_key_exists("modify_all_shops_prefix", $context) ? $context["modify_all_shops_prefix"] : (function () { throw new RuntimeError('Variable "modify_all_shops_prefix" does not exist.', 122, $this->source); })()) . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "vars", [], "any", false, false, false, 122), "name", [], "any", false, false, false, 122));
        // line 123
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 123), (isset($context["overrideCheckboxName"]) || array_key_exists("overrideCheckboxName", $context) ? $context["overrideCheckboxName"] : (function () { throw new RuntimeError('Variable "overrideCheckboxName" does not exist.', 123, $this->source); })()), [], "any", true, true, false, 123)) {
            // line 124
            yield "    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "parent", [], "any", false, false, false, 124), (isset($context["overrideCheckboxName"]) || array_key_exists("overrideCheckboxName", $context) ? $context["overrideCheckboxName"] : (function () { throw new RuntimeError('Variable "overrideCheckboxName" does not exist.', 124, $this->source); })()), [], "any", false, false, false, 124), 'errors');
            yield "
    ";
            // line 125
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "parent", [], "any", false, false, false, 125), (isset($context["overrideCheckboxName"]) || array_key_exists("overrideCheckboxName", $context) ? $context["overrideCheckboxName"] : (function () { throw new RuntimeError('Variable "overrideCheckboxName" does not exist.', 125, $this->source); })()), [], "any", false, false, false, 125), 'widget');
            yield "
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 129
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_disabling_switch(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_disabling_switch"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_disabling_switch"));

        // line 130
        yield "  ";
        $context["disablingSwitchName"] = ((isset($context["disabling_switch_prefix"]) || array_key_exists("disabling_switch_prefix", $context) ? $context["disabling_switch_prefix"] : (function () { throw new RuntimeError('Variable "disabling_switch_prefix" does not exist.', 130, $this->source); })()) . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "vars", [], "any", false, false, false, 130), "name", [], "any", false, false, false, 130));
        // line 131
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 131), (isset($context["disablingSwitchName"]) || array_key_exists("disablingSwitchName", $context) ? $context["disablingSwitchName"] : (function () { throw new RuntimeError('Variable "disablingSwitchName" does not exist.', 131, $this->source); })()), [], "any", true, true, false, 131)) {
            // line 132
            yield "    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "parent", [], "any", false, false, false, 132), (isset($context["disablingSwitchName"]) || array_key_exists("disablingSwitchName", $context) ? $context["disablingSwitchName"] : (function () { throw new RuntimeError('Variable "disablingSwitchName" does not exist.', 132, $this->source); })()), [], "any", false, false, false, 132), 'errors');
            yield "
    ";
            // line 133
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "parent", [], "any", false, false, false, 133), (isset($context["disablingSwitchName"]) || array_key_exists("disablingSwitchName", $context) ? $context["disablingSwitchName"] : (function () { throw new RuntimeError('Variable "disablingSwitchName" does not exist.', 133, $this->source); })()), [], "any", false, false, false, 133), 'widget');
            yield "
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 137
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_widget_type_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_type_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_type_class"));

        // line 138
        if (( !((array_key_exists("compound", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 138, $this->source); })()), false)) : (false)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "vars", [], "any", false, false, false, 138), "block_prefixes", [], "any", false, false, false, 138)) > 2))) {
            // line 139
            yield " ";
            $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 140
                yield "
    ";
                // line 141
                $context["index"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "vars", [], "any", false, false, false, 141), "block_prefixes", [], "any", false, false, false, 141)) - 2);
                // line 142
                yield "    ";
                $context["widgetType"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "vars", [], "any", false, false, false, 142), "block_prefixes", [], "any", false, false, false, 142), (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 142, $this->source); })()), [], "array", false, false, false, 142);
                // line 143
                yield "    ";
                if (((isset($context["widgetType"]) || array_key_exists("widgetType", $context) ? $context["widgetType"] : (function () { throw new RuntimeError('Variable "widgetType" does not exist.', 143, $this->source); })()) == "choice")) {
                    // line 144
                    yield "      ";
                    if ( !(isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new RuntimeError('Variable "expanded" does not exist.', 144, $this->source); })())) {
                        // line 145
                        yield "        ";
                        $context["widgetType"] = "select";
                        // line 146
                        yield "      ";
                    } elseif ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 146, $this->source); })())) {
                        // line 147
                        yield "        ";
                        $context["widgetType"] = "checboxes";
                        // line 148
                        yield "      ";
                    } else {
                        // line 149
                        yield "        ";
                        $context["widgetType"] = "radio";
                        // line 150
                        yield "      ";
                    }
                    // line 151
                    yield "    ";
                }
                // line 152
                yield "    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["widgetType"]) || array_key_exists("widgetType", $context) ? $context["widgetType"] : (function () { throw new RuntimeError('Variable "widgetType" does not exist.', 152, $this->source); })()), "html", null, true);
                yield "-widget
";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 139
            yield Twig\Extension\CoreExtension::spaceless($_v0);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 159
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

        // line 160
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 160, $this->source); })()) === false)) {
            // line 161
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 161, $this->source); })())) {
                // line 162
                $context["label_attr"] = Twig\Extension\CoreExtension::merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 162, $this->source); })()), ["for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 162, $this->source); })())]);
            }
            // line 164
            yield "    ";
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 164, $this->source); })())) {
                // line 165
                $context["label_attr"] = Twig\Extension\CoreExtension::merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 165, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 165)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 165, $this->source); })()), "class", [], "any", false, false, false, 165), "")) : ("")) . " required"))]);
            }
            // line 167
            yield "    ";
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 167, $this->source); })()))) {
                // line 168
                if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new RuntimeError('Variable "label_format" does not exist.', 168, $this->source); })()))) {
                    // line 169
                    $context["label"] = Twig\Extension\CoreExtension::replace((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new RuntimeError('Variable "label_format" does not exist.', 169, $this->source); })()), ["%name%" =>                     // line 170
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 170, $this->source); })()), "%id%" =>                     // line 171
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 171, $this->source); })())]);
                } else {
                    // line 174
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 174, $this->source); })()));
                }
            }
            // line 178
            $context["labelTag"] = ((array_key_exists("label_tag_name", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["label_tag_name"]) || array_key_exists("label_tag_name", $context) ? $context["label_tag_name"] : (function () { throw new RuntimeError('Variable "label_tag_name" does not exist.', 178, $this->source); })()), "label")) : ("label"));
            // line 179
            yield "    <";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["labelTag"]) || array_key_exists("labelTag", $context) ? $context["labelTag"] : (function () { throw new RuntimeError('Variable "labelTag" does not exist.', 179, $this->source); })()), "html", null, true);
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 179, $this->source); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                yield "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield ">
    ";
            // line 180
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 180, $this->source); })())) {
                // line 181
                yield "      <span class=\"text-danger\">*</span>
    ";
            }
            // line 183
            yield "    ";
            yield ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 183, $this->source); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 183, $this->source); })())) : ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 183, $this->source); })())));
            yield "
    ";
            // line 184
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "tooltip", [], "array", true, true, false, 184)) {
                // line 185
                yield "      ";
                $context["placement"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "tooltip_placement", [], "array", true, true, false, 185)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 185, $this->source); })()), "tooltip_placement", [], "array", false, false, false, 185)) : ("top"));
                // line 186
                yield "      <i class=\"icon-question\" data-toggle=\"pstooltip\" data-placement=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["placement"]) || array_key_exists("placement", $context) ? $context["placement"] : (function () { throw new RuntimeError('Variable "placement" does not exist.', 186, $this->source); })()), "html", null, true);
                yield "\"
         title=\"";
                // line 187
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 187, $this->source); })()), "tooltip", [], "array", false, false, false, 187), "html", null, true);
                yield "\"></i>
    ";
            }
            // line 189
            yield "
    ";
            // line 190
            if ((array_key_exists("label_help_box", $context) || CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "popover", [], "array", true, true, false, 190))) {
                // line 191
                yield "      ";
                $context["content"] = ((array_key_exists("label_help_box", $context)) ? ((isset($context["label_help_box"]) || array_key_exists("label_help_box", $context) ? $context["label_help_box"] : (function () { throw new RuntimeError('Variable "label_help_box" does not exist.', 191, $this->source); })())) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 191, $this->source); })()), "popover", [], "array", false, false, false, 191)));
                // line 192
                yield "      ";
                $context["placement"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "popover_placement", [], "array", true, true, false, 192)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 192, $this->source); })()), "popover_placement", [], "array", false, false, false, 192)) : ("top"));
                // line 193
                yield "      ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@Common/HelpBox/helpbox.html.twig", ["placement" => (isset($context["placement"]) || array_key_exists("placement", $context) ? $context["placement"] : (function () { throw new RuntimeError('Variable "placement" does not exist.', 193, $this->source); })()), "content" => (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 193, $this->source); })())]);
                yield "
    ";
            }
            // line 195
            yield from             $this->unwrap()->yieldBlock("form_disabling_switch", $context, $blocks);
            // line 196
            yield "</";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["labelTag"]) || array_key_exists("labelTag", $context) ? $context["labelTag"] : (function () { throw new RuntimeError('Variable "labelTag" does not exist.', 196, $this->source); })()), "html", null, true);
            yield ">";
        }
        // line 198
        if (array_key_exists("label_subtitle", $context)) {
            // line 199
            yield "    <p class=\"subtitle\">";
            yield (isset($context["label_subtitle"]) || array_key_exists("label_subtitle", $context) ? $context["label_subtitle"] : (function () { throw new RuntimeError('Variable "label_subtitle" does not exist.', 199, $this->source); })());
            yield "</p>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 205
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_textarea_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 206
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 206, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 206)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 206, $this->source); })()), "class", [], "any", false, false, false, 206), "")) : ("")) . " form-control"))]);
        // line 207
        yield from $this->yieldParentBlock("textarea_widget", $context, $blocks);
        // line 208
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig", ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 208, $this->source); })())]);
        yield "
  ";
        // line 209
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 212
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_money_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "money_widget"));

        // line 213
        yield "<div class=\"input-group money-type\">
    ";
        // line 214
        $context["prepend"] = ("{{" == Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 214, $this->source); })()), 0, 2));
        // line 215
        yield "    ";
        if ( !(isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new RuntimeError('Variable "prepend" does not exist.', 215, $this->source); })())) {
            // line 216
            yield "      <div class=\"input-group-prepend\">
        <span class=\"input-group-text\">";
            // line 217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 217, $this->source); })()), ["{{ widget }}" => ""]), "html", null, true);
            yield "</span>
      </div>
    ";
        }
        // line 220
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 221
        if ((isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new RuntimeError('Variable "prepend" does not exist.', 221, $this->source); })())) {
            // line 222
            yield "      <div class=\"input-group-append\">
        <span class=\"input-group-text\">";
            // line 223
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 223, $this->source); })()), ["{{ widget }}" => ""]), "html", null, true);
            yield "</span>
      </div>
    ";
        }
        // line 226
        yield "  </div>

  ";
        // line 228
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 231
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_percent_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 232
        yield "<div class=\"input-group\">";
        // line 233
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 234
        yield "<div class=\"input-group-append\">
      <span class=\"input-group-text\">%</span>
    </div>
  </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 240
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datetime_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 241
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 241, $this->source); })()) == "single_text")) {
            // line 242
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 244
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 244, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 244)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 244, $this->source); })()), "class", [], "any", false, false, false, 244), "")) : ("")) . " form-inline"))]);
            // line 245
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">";
            // line 246
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 246, $this->source); })()), "date", [], "any", false, false, false, 246), 'errors');
            // line 247
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 247, $this->source); })()), "time", [], "any", false, false, false, 247), 'errors');
            // line 248
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 248, $this->source); })()), "date", [], "any", false, false, false, 248), 'widget', ["datetime" => true]);
            // line 249
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 249, $this->source); })()), "time", [], "any", false, false, false, 249), 'widget', ["datetime" => true]);
            // line 250
            yield "</div>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 254
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_url_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "url_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "url_widget"));

        // line 255
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 255, $this->source); })()), "url")) : ("url"));
        // line 256
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield "
  ";
        // line 257
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 260
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        // line 261
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 261, $this->source); })()) == "single_text")) {
            // line 262
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 264
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 264, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 264)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 264, $this->source); })()), "class", [], "any", false, false, false, 264), "")) : ("")) . " form-inline"))]);
            // line 265
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new RuntimeError('Variable "datetime" does not exist.', 265, $this->source); })()))) {
                // line 266
                yield "<div ";
                yield from                 $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
                yield ">";
            }
            // line 268
            yield Twig\Extension\CoreExtension::replace((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new RuntimeError('Variable "date_pattern" does not exist.', 268, $this->source); })()), ["{{ year }}" =>             // line 269
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 269, $this->source); })()), "year", [], "any", false, false, false, 269), 'widget'), "{{ month }}" =>             // line 270
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 270, $this->source); })()), "month", [], "any", false, false, false, 270), 'widget'), "{{ day }}" =>             // line 271
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 271, $this->source); })()), "day", [], "any", false, false, false, 271), 'widget')]);
            // line 273
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new RuntimeError('Variable "datetime" does not exist.', 273, $this->source); })()))) {
                // line 274
                yield "</div>";
            }
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 279
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_time_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_widget"));

        // line 280
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 280, $this->source); })()) == "single_text")) {
            // line 281
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 283
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 283, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 283)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 283, $this->source); })()), "class", [], "any", false, false, false, 283), "")) : ("")) . " form-inline"))]);
            // line 284
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new RuntimeError('Variable "datetime" does not exist.', 284, $this->source); })())))) {
                // line 285
                yield "<div ";
                yield from                 $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
                yield ">";
            }
            // line 287
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 287, $this->source); })()), "hour", [], "any", false, false, false, 287), 'widget');
            yield ":";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 287, $this->source); })()), "minute", [], "any", false, false, false, 287), 'widget');
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new RuntimeError('Variable "with_seconds" does not exist.', 287, $this->source); })())) {
                yield ":";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 287, $this->source); })()), "second", [], "any", false, false, false, 287), 'widget');
            }
            // line 288
            yield "    ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new RuntimeError('Variable "datetime" does not exist.', 288, $this->source); })())))) {
                // line 289
                yield "</div>";
            }
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 294
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_email_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "email_widget"));

        // line 295
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 295, $this->source); })()), "email")) : ("email"));
        // line 296
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield "
  ";
        // line 297
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 300
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_widget"));

        // line 301
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 301, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 301)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 301, $this->source); })()), "class", [], "any", false, false, false, 301), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 302
        yield from $this->yieldParentBlock("button_widget", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 305
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_icon_button_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "icon_button_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "icon_button_widget"));

        // line 306
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 306, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 306)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 306, $this->source); })()), "class", [], "any", false, false, false, 306), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 307
        yield "  ";
        if (((isset($context["button_type"]) || array_key_exists("button_type", $context) ? $context["button_type"] : (function () { throw new RuntimeError('Variable "button_type" does not exist.', 307, $this->source); })()) == "link")) {
            // line 308
            yield "    ";
            $context["buttonTag"] = "a";
            // line 309
            yield "    ";
            // line 310
            yield "    ";
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", true, true, false, 310)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 310, $this->source); })()), "disabled", [], "any", false, false, false, 310), false)) : (false))) {
                // line 311
                yield "      ";
                $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 311, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 311, $this->source); })()), "class", [], "any", false, false, false, 311) . " disabled"))]);
                // line 312
                yield "    ";
            }
            // line 313
            yield "  ";
        } else {
            // line 314
            yield "    ";
            $context["buttonTag"] = "button";
            // line 315
            yield "    ";
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 315, $this->source); })()), ["type" => "button"]);
            // line 316
            yield "  ";
        }
        // line 317
        yield "
  <";
        // line 318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["buttonTag"]) || array_key_exists("buttonTag", $context) ? $context["buttonTag"] : (function () { throw new RuntimeError('Variable "buttonTag" does not exist.', 318, $this->source); })()), "html", null, true);
        yield " ";
        yield from         $this->unwrap()->yieldBlock("button_attributes", $context, $blocks);
        yield ">
    <i class=\"material-icons\">";
        // line 319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["button_icon"]) || array_key_exists("button_icon", $context) ? $context["button_icon"] : (function () { throw new RuntimeError('Variable "button_icon" does not exist.', 319, $this->source); })()), "html", null, true);
        yield "</i>
    <span class=\"btn-label\">";
        // line 320
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 320, $this->source); })()), "html", null, true);
        yield "</span>
  </";
        // line 321
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["buttonTag"]) || array_key_exists("buttonTag", $context) ? $context["buttonTag"] : (function () { throw new RuntimeError('Variable "buttonTag" does not exist.', 321, $this->source); })()), "html", null, true);
        yield ">";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 324
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 325
        yield from $this->yieldParentBlock("choice_widget", $context, $blocks);
        // line 326
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 329
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_collapsed(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 330
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 330, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 330)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 330, $this->source); })()), "class", [], "any", false, false, false, 330), "")) : ("")) . " custom-select"))]);
        // line 331
        yield from $this->yieldParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 334
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_expanded(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 335
        if (CoreExtension::inFilter("-inline", ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 335)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 335, $this->source); })()), "class", [], "any", false, false, false, 335), "")) : ("")))) {
            // line 336
            yield "<div class=\"control-group\">";
            // line 337
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 337, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 338
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 339
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 339)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 339, $this->source); })()), "class", [], "any", false, false, false, 339), "")) : ("")), "translation_domain" =>                 // line 340
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new RuntimeError('Variable "choice_translation_domain" does not exist.', 340, $this->source); })()), "valid" =>                 // line 341
(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 341, $this->source); })())]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 344
            yield "</div>";
        } else {
            // line 346
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">";
            // line 347
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 347, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 348
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 349
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 349)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 349, $this->source); })()), "class", [], "any", false, false, false, 349), "")) : ("")), "translation_domain" =>                 // line 350
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new RuntimeError('Variable "choice_translation_domain" does not exist.', 350, $this->source); })()), "valid" =>                 // line 351
(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 351, $this->source); })())]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 354
            yield "</div>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 358
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_tree_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_tree_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_tree_widget"));

        // line 359
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield " class=\"category-tree-overflow\">
    <ul class=\"category-tree\">
      <li class=\"form-control-label text-right main-category\">";
        // line 361
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Main category", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</li>";
        // line 362
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 362, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 363
            yield "        ";
            yield from             $this->unwrap()->yieldBlock("choice_tree_item_widget", $context, $blocks);
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
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 365
        yield "</ul>
  </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 369
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_tree_item_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_tree_item_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_tree_item_widget"));

        // line 370
        yield "<li>
    ";
        // line 371
        $context["checked"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 371), "submitted_values", [], "any", true, true, false, 371) && CoreExtension::getAttribute($this->env, $this->source, ($context["submitted_values"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 371, $this->source); })()), "id_category", [], "any", false, false, false, 371), [], "array", true, true, false, 371))) ? ("checked=\"checked\"") : (""));
        // line 372
        yield "    ";
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 372, $this->source); })())) {
            // line 373
            yield "<div class=\"checkbox\">
        <label>
          <input type=\"checkbox\" name=\"";
            // line 375
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 375, $this->source); })()), "vars", [], "any", false, false, false, 375), "full_name", [], "any", false, false, false, 375), "html", null, true);
            yield "[tree][]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 375, $this->source); })()), "id_category", [], "any", false, false, false, 375), "html", null, true);
            yield "\" class=\"category\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 375, $this->source); })()), "html", null, true);
            yield ">
          ";
            // line 376
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "active", [], "any", true, true, false, 376) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 376, $this->source); })()), "active", [], "any", false, false, false, 376) == 0))) {
                // line 377
                yield "            <i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 377, $this->source); })()), "name", [], "any", false, false, false, 377), "html", null, true);
                yield "</i>";
            } else {
                // line 379
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 379, $this->source); })()), "name", [], "any", false, false, false, 379), "html", null, true);
                yield "
          ";
            }
            // line 381
            yield "          ";
            if (array_key_exists("defaultCategory", $context)) {
                // line 382
                yield "            <input type=\"radio\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 382, $this->source); })()), "id_category", [], "any", false, false, false, 382), "html", null, true);
                yield "\" name=\"ignore\" class=\"default-category\" />
          ";
            }
            // line 384
            yield "        </label>
      </div>";
        } else {
            // line 387
            yield "<div class=\"radio\">
        <label>
          <input type=\"radio\" name=\"form[";
            // line 389
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 389, $this->source); })()), "vars", [], "any", false, false, false, 389), "id", [], "any", false, false, false, 389), "html", null, true);
            yield "][tree]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 389, $this->source); })()), "id_category", [], "any", false, false, false, 389), "html", null, true);
            yield "\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 389, $this->source); })()), "html", null, true);
            yield " class=\"category\">
          ";
            // line 390
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 390, $this->source); })()), "name", [], "any", false, false, false, 390), "html", null, true);
            yield "
          ";
            // line 391
            if (array_key_exists("defaultCategory", $context)) {
                // line 392
                yield "            <input type=\"radio\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 392, $this->source); })()), "id_category", [], "any", false, false, false, 392), "html", null, true);
                yield "\" name=\"ignore\" class=\"default-category\" />
          ";
            }
            // line 394
            yield "        </label>
      </div>";
        }
        // line 397
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "children", [], "any", true, true, false, 397)) {
            // line 398
            yield "      <ul>
        ";
            // line 399
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 399, $this->source); })()), "children", [], "any", false, false, false, 399));
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
                // line 400
                yield "          ";
                $context["child"] = $context["item"];
                // line 401
                yield "          ";
                yield from                 $this->unwrap()->yieldBlock("choice_tree_item_widget", $context, $blocks);
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
            // line 403
            yield "</ul>
    ";
        }
        // line 405
        yield "  </li>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 408
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translatefields_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatefields_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatefields_widget"));

        // line 409
        yield "  ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 409, $this->source); })()), 'errors');
        yield "
  <div class=\"translations tabbable\" id=\"";
        // line 410
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 410, $this->source); })()), "vars", [], "any", false, false, false, 410), "id", [], "any", false, false, false, 410), "html", null, true);
        yield "\" tabindex=\"1\">
    ";
        // line 411
        if ((((isset($context["hideTabs"]) || array_key_exists("hideTabs", $context) ? $context["hideTabs"] : (function () { throw new RuntimeError('Variable "hideTabs" does not exist.', 411, $this->source); })()) == false) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 411, $this->source); })())) > 1))) {
            // line 412
            yield "      <ul class=\"translationsLocales nav nav-pills\">
        ";
            // line 413
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 413, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 414
                yield "          <li class=\"nav-item\">
            <a href=\"#\" data-locale=\"";
                // line 415
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 415), "label", [], "any", false, false, false, 415), "html", null, true);
                yield "\" class=\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["defaultLocale"]) || array_key_exists("defaultLocale", $context) ? $context["defaultLocale"] : (function () { throw new RuntimeError('Variable "defaultLocale" does not exist.', 415, $this->source); })()), "id_lang", [], "any", false, false, false, 415) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 415), "name", [], "any", false, false, false, 415))) {
                    yield "active";
                }
                yield " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 415), "id", [], "any", false, false, false, 415), "html", null, true);
                yield "\">
              ";
                // line 416
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 416), "label", [], "any", false, false, false, 416)), "html", null, true);
                yield "
            </a>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['translationsFields'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 420
            yield "      </ul>
    ";
        }
        // line 422
        yield "
    <div class=\"translationsFields tab-content\">
      ";
        // line 424
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 424, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 425
            yield "        <div data-locale=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 425), "label", [], "any", false, false, false, 425), "html", null, true);
            yield "\" class=\"translationsFields-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 425), "id", [], "any", false, false, false, 425), "html", null, true);
            yield " tab-pane translation-field ";
            if ((((isset($context["hideTabs"]) || array_key_exists("hideTabs", $context) ? $context["hideTabs"] : (function () { throw new RuntimeError('Variable "hideTabs" does not exist.', 425, $this->source); })()) == false) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 425, $this->source); })())) > 1))) {
                yield "panel panel-default";
            }
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["defaultLocale"]) || array_key_exists("defaultLocale", $context) ? $context["defaultLocale"] : (function () { throw new RuntimeError('Variable "defaultLocale" does not exist.', 425, $this->source); })()), "id_lang", [], "any", false, false, false, 425) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 425), "name", [], "any", false, false, false, 425))) {
                yield "show active";
            }
            yield " ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 425, $this->source); })()), "vars", [], "any", false, false, false, 425), "valid", [], "any", false, false, false, 425)) {
                yield "field-error";
            }
            yield " translation-label-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 425), "label", [], "any", false, false, false, 425), "html", null, true);
            yield "\">
          ";
            // line 426
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'errors');
            yield "
          ";
            // line 427
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            yield "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['translationsFields'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 430
        yield "    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 434
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translate_fields_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_fields_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_fields_widget"));

        // line 435
        if (( !array_key_exists("type", $context) || ("file" != (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 435, $this->source); })())))) {
            // line 436
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 436, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 436)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 436, $this->source); })()), "class", [], "any", false, false, false, 436), "")) : ("")) . " form-control"))]);
        }
        // line 438
        yield from $this->yieldParentBlock("translate_fields_widget", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 441
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translate_text_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_text_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_text_widget"));

        // line 442
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 442, $this->source); })()), 'errors');
        yield "
  <div class=\"input-group locale-input-group js-locale-input-group\">
    ";
        // line 444
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 444, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 445
            yield "      ";
            $context["classes"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 445), "attr", [], "any", false, true, false, 445), "class", [], "any", true, true, false, 445)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 445), "attr", [], "any", false, false, false, 445), "class", [], "any", false, false, false, 445), "")) : ("")) . " js-locale-input");
            // line 446
            yield "      ";
            $context["classes"] = (((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 446, $this->source); })()) . " js-locale-") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 446), "label", [], "any", false, false, false, 446));
            // line 447
            yield "
      ";
            // line 448
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["default_locale"]) || array_key_exists("default_locale", $context) ? $context["default_locale"] : (function () { throw new RuntimeError('Variable "default_locale" does not exist.', 448, $this->source); })()), "id_lang", [], "any", false, false, false, 448) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 448), "name", [], "any", false, false, false, 448))) {
                // line 449
                yield "        ";
                $context["classes"] = ((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 449, $this->source); })()) . " d-none");
                // line 450
                yield "      ";
            }
            // line 452
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 452, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 452, $this->source); })()))]);
            // line 453
            yield from             $this->unwrap()->yieldBlock("form_widget", $context, $blocks);
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
        unset($context['_seq'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 455
        yield "
    ";
        // line 456
        if ( !(isset($context["hide_locales"]) || array_key_exists("hide_locales", $context) ? $context["hide_locales"] : (function () { throw new RuntimeError('Variable "hide_locales" does not exist.', 456, $this->source); })())) {
            // line 457
            yield "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 463
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 463, $this->source); })()), "vars", [], "any", false, false, false, 463), "id", [], "any", false, false, false, 463), "html", null, true);
            yield "\"
        >
          ";
            // line 465
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 465, $this->source); })()), "vars", [], "any", false, false, false, 465), "default_locale", [], "any", false, false, false, 465), "iso_code", [], "any", false, false, false, 465)), "html", null, true);
            yield "
        </button>

        <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 468
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 468, $this->source); })()), "vars", [], "any", false, false, false, 468), "id", [], "any", false, false, false, 468), "html", null, true);
            yield "\">
          ";
            // line 469
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 469, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 470
                yield "            <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 470), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 470), "html", null, true);
                yield "</span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['locale'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 472
            yield "        </div>
      </div>
    ";
        }
        // line 475
        yield "  </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 478
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translate_textarea_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_textarea_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_textarea_widget"));

        // line 479
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 479, $this->source); })()), 'errors');
        yield "
  <div class=\"input-group locale-input-group js-locale-input-group\">
    ";
        // line 481
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 481, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["textarea"]) {
            // line 482
            yield "      ";
            $context["classes"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, true, false, 482), "attr", [], "any", false, true, false, 482), "class", [], "any", true, true, false, 482)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, false, false, 482), "attr", [], "any", false, false, false, 482), "class", [], "any", false, false, false, 482), "")) : ("")) . " js-locale-input");
            // line 483
            yield "      ";
            $context["classes"] = (((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 483, $this->source); })()) . " js-locale-") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, false, false, 483), "label", [], "any", false, false, false, 483));
            // line 484
            yield "
      ";
            // line 485
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["default_locale"]) || array_key_exists("default_locale", $context) ? $context["default_locale"] : (function () { throw new RuntimeError('Variable "default_locale" does not exist.', 485, $this->source); })()), "id_lang", [], "any", false, false, false, 485) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, false, false, 485), "name", [], "any", false, false, false, 485))) {
                // line 486
                yield "        ";
                $context["classes"] = ((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 486, $this->source); })()) . " d-none");
                // line 487
                yield "      ";
            }
            // line 488
            yield "
      <div class=\"";
            // line 489
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 489, $this->source); })()), "html", null, true);
            yield "\">
        ";
            // line 490
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["textarea"], 'widget', ["attr" => ["class" => Twig\Extension\CoreExtension::trim((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 490, $this->source); })()))]]);
            yield "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['textarea'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 493
        yield "
    ";
        // line 494
        if ((isset($context["show_locale_select"]) || array_key_exists("show_locale_select", $context) ? $context["show_locale_select"] : (function () { throw new RuntimeError('Variable "show_locale_select" does not exist.', 494, $this->source); })())) {
            // line 495
            yield "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 501
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 501, $this->source); })()), "vars", [], "any", false, false, false, 501), "id", [], "any", false, false, false, 501), "html", null, true);
            yield "\"
        >
          ";
            // line 503
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 503, $this->source); })()), "vars", [], "any", false, false, false, 503), "default_locale", [], "any", false, false, false, 503), "iso_code", [], "any", false, false, false, 503)), "html", null, true);
            yield "
        </button>

        <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 506
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 506, $this->source); })()), "vars", [], "any", false, false, false, 506), "id", [], "any", false, false, false, 506), "html", null, true);
            yield "\">
          ";
            // line 507
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 507, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 508
                yield "            <span class=\"dropdown-item js-locale-item\"
                  data-locale=\"";
                // line 509
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 509), "html", null, true);
                yield "\"
            >
              ";
                // line 511
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 511), "html", null, true);
                yield "
            </span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['locale'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 514
            yield "        </div>
      </div>
    ";
        }
        // line 517
        yield "  </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 520
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_picker_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_picker_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_picker_widget"));

        // line 521
        yield "  ";
        $_v1 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 522
            yield "    ";
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 522, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 522)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 522, $this->source); })()), "class", [], "any", false, false, false, 522), "")) : ("")) . " form-control datepicker"))]);
            // line 523
            yield "    <div class=\"input-group datepicker\">
      <input type=\"text\" data-format=\"";
            // line 524
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["date_format"]) || array_key_exists("date_format", $context) ? $context["date_format"] : (function () { throw new RuntimeError('Variable "date_format" does not exist.', 524, $this->source); })()), "html", null, true);
            yield "\" ";
            yield from             $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
            yield " ";
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 524, $this->source); })()))) {
                yield "value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 524, $this->source); })()), "html", null, true);
                yield "\" ";
            }
            yield "/>
      <div class=\"input-group-append\">
        <div class=\"input-group-text\">
          <i class=\"material-icons\">date_range</i>
        </div>
      </div>
    </div>
    ";
            // line 531
            yield from             $this->unwrap()->yieldBlock("form_help", $context, $blocks);
            yield "
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 521
        yield Twig\Extension\CoreExtension::spaceless($_v1);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 535
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_range_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_range_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_range_widget"));

        // line 536
        yield "  ";
        $_v2 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 537
            yield "    <div class=\"input-group date-range row\">
      <div class=\"col col-md-4\">
        ";
            // line 539
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 539, $this->source); })()), "from", [], "any", false, false, false, 539), 'row');
            yield "
      </div>
      <div class=\"col col-md-4\">
        ";
            // line 542
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 542, $this->source); })()), "to", [], "any", false, false, false, 542), 'row');
            yield "
        ";
            // line 543
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "unlimited", [], "any", true, true, false, 543)) {
                // line 544
                yield "          ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 544, $this->source); })()), "unlimited", [], "any", false, false, false, 544), 'widget');
                yield "
          ";
                // line 545
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 545, $this->source); })()), "unlimited", [], "any", false, false, false, 545), 'errors');
                yield "
        ";
            }
            // line 547
            yield "      </div>
    </div>
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 536
        yield Twig\Extension\CoreExtension::spaceless($_v2);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 552
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search_and_reset_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_and_reset_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_and_reset_widget"));

        // line 553
        yield "  ";
        $_v3 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 554
            yield "    <button type=\"submit\"
            class=\"btn btn-primary grid-search-button\"
            title=\"";
            // line 556
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
            yield "\"
            name=\"";
            // line 557
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 557, $this->source); })()), "html", null, true);
            yield "[search]\"
    >
      <i class=\"material-icons\">search</i>
      ";
            // line 560
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
            yield "
    </button>
    ";
            // line 562
            if ((isset($context["show_reset_button"]) || array_key_exists("show_reset_button", $context) ? $context["show_reset_button"] : (function () { throw new RuntimeError('Variable "show_reset_button" does not exist.', 562, $this->source); })())) {
                // line 563
                yield "      <div class=\"js-grid-reset-button\">
        <button type=\"reset\"
                name=\"";
                // line 565
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 565, $this->source); })()), "html", null, true);
                yield "[reset]\"
                class=\"btn btn-link js-reset-search btn d-block grid-reset-button\"
                data-url=\"";
                // line 567
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reset_url"]) || array_key_exists("reset_url", $context) ? $context["reset_url"] : (function () { throw new RuntimeError('Variable "reset_url" does not exist.', 567, $this->source); })()), "html", null, true);
                yield "\"
                data-redirect=\"";
                // line 568
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["redirect_url"]) || array_key_exists("redirect_url", $context) ? $context["redirect_url"] : (function () { throw new RuntimeError('Variable "redirect_url" does not exist.', 568, $this->source); })()), "html", null, true);
                yield "\"
        >
          <i class=\"material-icons\">clear</i>
          ";
                // line 571
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset", [], "Admin.Actions"), "html", null, true);
                yield "
        </button>
      </div>
    ";
            }
            // line 575
            yield "  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 553
        yield Twig\Extension\CoreExtension::spaceless($_v3);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 578
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

        // line 579
        yield "  ";
        $_v4 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 580
            yield "  ";
            $context["rowAttributes"] = ((array_key_exists("row_attr", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 580, $this->source); })()), [])) : ([]));
            // line 581
            yield "  <div class=\"input-group ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["rowAttributes"] ?? null), "class", [], "any", true, true, false, 581)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rowAttributes"]) || array_key_exists("rowAttributes", $context) ? $context["rowAttributes"] : (function () { throw new RuntimeError('Variable "rowAttributes" does not exist.', 581, $this->source); })()), "class", [], "any", false, false, false, 581), "")) : ("")), "html", null, true);
            yield "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["rowAttributes"]) || array_key_exists("rowAttributes", $context) ? $context["rowAttributes"] : (function () { throw new RuntimeError('Variable "rowAttributes" does not exist.', 581, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["rowAttr"]) {
                yield " ";
                if (($context["key"] != "class")) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["rowAttr"], "html", null, true);
                    yield "\"";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['rowAttr'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield ">
    <span class=\"ps-switch\" id=\"";
            // line 582
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 582, $this->source); })()), "vars", [], "any", false, false, false, 582), "id", [], "any", false, false, false, 582), "html", null, true);
            yield "\">
        ";
            // line 583
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 583, $this->source); })()));
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
                // line 584
                yield "          ";
                $context["inputId"] = (((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 584, $this->source); })()) . "_") . CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 584));
                // line 585
                yield "          <input id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inputId"]) || array_key_exists("inputId", $context) ? $context["inputId"] : (function () { throw new RuntimeError('Variable "inputId" does not exist.', 585, $this->source); })()), "html", null, true);
                yield "\"
            ";
                // line 586
                yield from                 $this->unwrap()->yieldBlock("attributes", $context, $blocks);
                yield "
            name=\"";
                // line 587
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 587, $this->source); })()), "html", null, true);
                yield "\"
            value=\"";
                // line 588
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 588), "html", null, true);
                yield "\"
            ";
                // line 589
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 589, $this->source); })()))) {
                    yield "checked=\"\"";
                }
                // line 590
                yield "            ";
                if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 590, $this->source); })())) {
                    yield "disabled=\"\"";
                }
                // line 591
                yield "            type=\"radio\"
          >
          ";
                // line 593
                if ((isset($context["show_choices"]) || array_key_exists("show_choices", $context) ? $context["show_choices"] : (function () { throw new RuntimeError('Variable "show_choices" does not exist.', 593, $this->source); })())) {
                    yield "<label for=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inputId"]) || array_key_exists("inputId", $context) ? $context["inputId"] : (function () { throw new RuntimeError('Variable "inputId" does not exist.', 593, $this->source); })()), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 593), [], (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new RuntimeError('Variable "choice_translation_domain" does not exist.', 593, $this->source); })())), "html", null, true);
                    yield "</label>";
                }
                // line 594
                yield "        ";
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
            // line 595
            yield "        <span class=\"slide-button\"></span>
    </span>
  </div>
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 579
        yield Twig\Extension\CoreExtension::spaceless($_v4);
        // line 599
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 602
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_row_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "row_attributes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "row_attributes"));

        // line 603
        $context["rowAttributes"] = ((array_key_exists("row_attr", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 603, $this->source); })()), [])) : ([]));
        // line 604
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["rowAttributes"]) || array_key_exists("rowAttributes", $context) ? $context["rowAttributes"] : (function () { throw new RuntimeError('Variable "rowAttributes" does not exist.', 604, $this->source); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 605
            yield " ";
            // line 606
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
            yield "=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
            yield "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 610
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__form_step6_attachments_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_form_step6_attachments_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_form_step6_attachments_widget"));

        // line 611
        yield "  <div class=\"js-options-no-attachments ";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 611, $this->source); })())) > 0)) ? ("hide") : (""));
        yield "\">
    <small>";
        // line 612
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("There is no attachment yet.", [], "Admin.Catalog.Notification"), "html", null, true);
        yield "</small>
  </div>
  <div id=\"product-attachments\" class=\"panel panel-default\">
    <div class=\"panel-body js-options-with-attachments ";
        // line 615
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 615, $this->source); })())) == 0)) ? ("hide") : (""));
        yield "\">
      <div>
        <table id=\"product-attachment-file\" class=\"table\">
          <thead class=\"thead-default\">
          <tr>
            <th class=\"col-md-3\">";
        // line 620
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Title", [], "Admin.Global"), "html", null, true);
        yield "</th>
            <th class=\"col-md-6\">";
        // line 621
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File name", [], "Admin.Global"), "html", null, true);
        yield "</th>
            <th class=\"col-md-2\">";
        // line 622
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</th>
          </tr>
          </thead>
          <tbody>";
        // line 626
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 626, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 627
            yield "            <tr>
              <td class=\"col-md-3\">";
            // line 628
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            yield "</td>
              <td class=\"col-md-6 file-name\"><span>";
            // line 629
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 629, $this->source); })()), "vars", [], "any", false, false, false, 629), "attr", [], "any", false, false, false, 629), "data", [], "any", false, false, false, 629), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 629), [], "array", false, false, false, 629), "file_name", [], "array", false, false, false, 629), "html", null, true);
            yield "</span></td>
              <td class=\"col-md-2\">";
            // line 630
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 630, $this->source); })()), "vars", [], "any", false, false, false, 630), "attr", [], "any", false, false, false, 630), "data", [], "any", false, false, false, 630), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 630), [], "array", false, false, false, 630), "mime", [], "array", false, false, false, 630), "html", null, true);
            yield "</td>
            </tr>
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
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 633
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

    // line 642
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_label"));

        // line 644
        $context["label_attr"] = Twig\Extension\CoreExtension::merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 644, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::replace(((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 644)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 644, $this->source); })()), "class", [], "any", false, false, false, 644), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => ""]))]);
        // line 645
        yield from         $this->unwrap()->yieldBlock("form_label", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 648
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 649
        yield from         $this->unwrap()->yieldBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 652
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_radio_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_label"));

        // line 653
        yield from         $this->unwrap()->yieldBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 656
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_radio_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 657
        yield "  ";
        // line 658
        yield "  ";
        if (array_key_exists("widget", $context)) {
            // line 659
            yield "    ";
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 659, $this->source); })())) {
                // line 660
                yield "      ";
                $context["label_attr"] = Twig\Extension\CoreExtension::merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 660, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 660)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 660, $this->source); })()), "class", [], "any", false, false, false, 660), "")) : ("")) . " required"))]);
                // line 661
                yield "    ";
            }
            // line 662
            yield "    ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 663
                yield "      ";
                $context["label_attr"] = Twig\Extension\CoreExtension::merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 663, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 663)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 663, $this->source); })()), "class", [], "any", false, false, false, 663), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 663, $this->source); })())))]);
                // line 664
                yield "    ";
            }
            // line 665
            yield "    ";
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 665, $this->source); })()) === false) && Twig\Extension\CoreExtension::testEmpty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 665, $this->source); })())))) {
                // line 666
                yield "      ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 666, $this->source); })()));
                // line 667
                yield "    ";
            }
            // line 668
            yield "
    ";
            // line 669
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new RuntimeError('Variable "block_prefixes" does not exist.', 669, $this->source); })()), 2, [], "array", false, false, false, 669) == "radio")) {
                // line 670
                yield "      <label class=\"form-check-label\"";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 670, $this->source); })()));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                    yield "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                yield ">";
                // line 671
                yield (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 671, $this->source); })());
                // line 673
                yield "<i class=\"form-check-round\"></i>";
                // line 675
                yield (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 675, $this->source); })()) === false)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 675, $this->source); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 675, $this->source); })())) : ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 675, $this->source); })())))) : (""));
                // line 676
                yield "</label>
    ";
            } else {
                // line 678
                yield "      <div class=\"md-checkbox md-checkbox-inline\">
        <label";
                // line 679
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 679, $this->source); })()));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                    yield "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                yield ">";
                // line 680
                yield (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 680, $this->source); })());
                // line 681
                yield "<i class=\"md-checkbox-control\"></i>";
                // line 682
                yield (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 682, $this->source); })()) === false)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 682, $this->source); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 682, $this->source); })())) : ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 682, $this->source); })())))) : (""));
                // line 683
                yield "</label>
      </div>
    ";
            }
            // line 686
            yield "  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 689
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_radio_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 690
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 690, $this->source); })()), ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 690)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 690, $this->source); })()), "class", [], "any", false, false, false, 690), "")) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 690)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 690, $this->source); })()), "class", [], "any", false, false, false, 690), "")) : (""))));
        // line 691
        if (CoreExtension::inFilter("radio-custom", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 691, $this->source); })()))) {
            // line 692
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 692, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 692)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 692, $this->source); })()), "class", [], "any", false, false, false, 692), "")) : ("")) . " custom-control-input"))]);
            // line 693
            yield "<div class=\"custom-control custom-radio";
            yield ((CoreExtension::inFilter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 693, $this->source); })()))) ? (" custom-control-inline") : (""));
            yield "\">";
            // line 694
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 694, $this->source); })()), 'label', ["widget" =>             $this->unwrap()->renderBlock("base_radio_widget", $context, $blocks)]);
            // line 695
            yield "</div>";
        } else {
            // line 697
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 697, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 697)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 697, $this->source); })()), "class", [], "any", false, false, false, 697), "")) : ("")) . " form-check-input"))]);
            // line 698
            yield "<div class=\"form-check form-check-radio form-radio";
            yield ((CoreExtension::inFilter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 698, $this->source); })()))) ? (" form-check-inline") : (""));
            yield "\">";
            // line 699
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 699, $this->source); })()), 'label', ["widget" =>             $this->unwrap()->renderBlock("base_radio_widget", $context, $blocks)]);
            // line 700
            yield "</div>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 704
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 705
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 705, $this->source); })()), ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 705)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 705, $this->source); })()), "class", [], "any", false, false, false, 705), "")) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 705)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 705, $this->source); })()), "class", [], "any", false, false, false, 705), "")) : (""))));
        // line 706
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 706, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 706)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 706, $this->source); })()), "class", [], "any", false, false, false, 706), "")) : ("")) . " form-check-input"))]);
        // line 707
        yield "<div class=\"form-check form-check-radio form-checkbox";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "container_class", [], "any", true, true, false, 707)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 707, $this->source); })()), "container_class", [], "any", false, false, false, 707), "html", null, true);
        }
        yield "\">";
        // line 708
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 708, $this->source); })()), 'label', ["widget" =>         $this->unwrap()->renderBlock("base_checkbox_widget", $context, $blocks)]);
        // line 709
        yield "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 714
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_errors(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        // line 715
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "fieldError", [], "array", true, true, false, 715) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 715, $this->source); })()), "fieldError", [], "array", false, false, false, 715) == true))) {
            // line 716
            yield "    ";
            yield from             $this->unwrap()->yieldBlock("form_errors_field", $context, $blocks);
            yield "
  ";
        } else {
            // line 718
            yield "    ";
            yield from             $this->unwrap()->yieldBlock("form_errors_other", $context, $blocks);
            yield "
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 722
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_errors_field(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors_field"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors_field"));

        // line 723
        yield "  ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 723, $this->source); })())) > 0)) {
            // line 725
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 725, $this->source); })())) > 1)) {
                // line 727
                $context["popoverContainer"] = ("popover-error-container-" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 727, $this->source); })()), "vars", [], "any", false, false, false, 727), "id", [], "any", false, false, false, 727));
                // line 728
                yield "      <div class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["popoverContainer"]) || array_key_exists("popoverContainer", $context) ? $context["popoverContainer"] : (function () { throw new RuntimeError('Variable "popoverContainer" does not exist.', 728, $this->source); })()), "html", null, true);
                yield "\"></div>

      ";
                // line 730
                $context["popoverErrorContent"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 731
                    yield "        <div class=\"popover-error-list\">
          <ul>";
                    // line 733
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 733, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 734
                        yield "<li class=\"text-danger\"> ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "messageTemplate", [], "any", false, false, false, 734), CoreExtension::getAttribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 734), "form_error"), "html", null, true);
                        yield "
              </li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 737
                    yield "          </ul>
        </div>
      ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 740
                yield "
      <template class=\"js-popover-error-content\" data-id=\"";
                // line 741
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 741, $this->source); })()), "vars", [], "any", false, false, false, 741), "id", [], "any", false, false, false, 741), "html", null, true);
                yield "\">
        ";
                // line 742
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["popoverErrorContent"]) || array_key_exists("popoverErrorContent", $context) ? $context["popoverErrorContent"] : (function () { throw new RuntimeError('Variable "popoverErrorContent" does not exist.', 742, $this->source); })()), "html", null, true);
                yield "
      </template>

      ";
                // line 745
                $context["errorPopover"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 746
                    yield "        <span
          data-toggle=\"form-popover-error\"
          data-id=\"";
                    // line 748
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 748, $this->source); })()), "vars", [], "any", false, false, false, 748), "id", [], "any", false, false, false, 748), "html", null, true);
                    yield "\"
          data-placement=\"bottom\"
          data-template='<div class=\"popover form-popover-error\" role=\"tooltip\"><h3 class=\"popover-header\"></h3><div class=\"popover-body\"></div></div>'
          data-trigger=\"hover\"
          data-container=\".";
                    // line 752
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["popoverContainer"]) || array_key_exists("popoverContainer", $context) ? $context["popoverContainer"] : (function () { throw new RuntimeError('Variable "popoverContainer" does not exist.', 752, $this->source); })()), "html", null, true);
                    yield "\"
        >
          <i class=\"material-icons form-error-icon\">error_outline</i> <u> ";
                    // line 754
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%count% errors", ["%count%" => Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 754, $this->source); })()))], "Admin.Global"), "html", null, true);
                    yield "</u>
        </span>
      ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 757
                yield "
      <div class=\"invalid-feedback-container\">
        <div class=\"text-danger\">
          ";
                // line 760
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["errorPopover"]) || array_key_exists("errorPopover", $context) ? $context["errorPopover"] : (function () { throw new RuntimeError('Variable "errorPopover" does not exist.', 760, $this->source); })()), "html", null, true);
                yield "
        </div>
      </div>

      ";
            } else {
                // line 766
                yield "<div class=\"d-inline-block align-baseline text-danger mt-1\" role=\"alert\">
        <i class=\"material-icons form-error-icon\">error_outline</i>

        ";
                // line 769
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 769, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 770
                    yield "          <span>
            ";
                    // line 771
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "messageTemplate", [], "any", false, false, false, 771), CoreExtension::getAttribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 771), "form_error"), "html", null, true);
                    yield "
          </span>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 774
                yield "</div>";
            }
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 779
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_errors_other(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors_other"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors_other"));

        // line 780
        yield "  ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 780, $this->source); })())) > 0)) {
            // line 781
            yield "<div class=\"alert alert-danger d-print-none\" role=\"alert\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
      </button>
      <div class=\"alert-text\">
        ";
            // line 786
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 786, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 787
                yield "            <p> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "messageTemplate", [], "any", false, false, false, 787), CoreExtension::getAttribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 787), "form_error"), "html", null, true);
                yield "
            </p>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 790
            yield "</div>
    </div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 797
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_material_choice_table_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_choice_table_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_choice_table_widget"));

        // line 798
        yield "  ";
        $_v5 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 799
            yield "    <div class=\"choice-table\">
      <table class=\"table table-bordered mb-0\">
        <thead>
        <tr>
          <th class=\"checkbox\">
            <div class=\"md-checkbox\">
              <label>
                <input
                  type=\"checkbox\"
                  class=\"js-choice-table-select-all\"
                  ";
            // line 809
            if ((isset($context["isCheckSelectAll"]) || array_key_exists("isCheckSelectAll", $context) ? $context["isCheckSelectAll"] : (function () { throw new RuntimeError('Variable "isCheckSelectAll" does not exist.', 809, $this->source); })())) {
                // line 810
                yield "                    checked
                  ";
            }
            // line 812
            yield "                >
                <i class=\"md-checkbox-control\"></i>
                ";
            // line 814
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select all", [], "Admin.Actions"), "html", null, true);
            yield " ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 814, $this->source); })()), "vars", [], "any", false, false, false, 814), "displayTotalItems", [], "any", false, false, false, 814)) {
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 814, $this->source); })())), "html", null, true);
                yield ") ";
            }
            // line 815
            yield "              </label>
            </div>
          </th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 821
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 821, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 822
                yield "          <tr>
            <td>
              ";
                // line 824
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["material_design" => true]);
                yield "
            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 828
            yield "        </tbody>
      </table>
    </div>
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 798
        yield Twig\Extension\CoreExtension::spaceless($_v5);
        // line 832
        yield "  ";
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 835
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_material_multiple_choice_table_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_multiple_choice_table_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_multiple_choice_table_widget"));

        // line 836
        yield "  ";
        $_v6 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 837
            yield "    <div class=\"choice-table";
            if ((isset($context["headers_fixed"]) || array_key_exists("headers_fixed", $context) ? $context["headers_fixed"] : (function () { throw new RuntimeError('Variable "headers_fixed" does not exist.', 837, $this->source); })())) {
                yield "-headers-fixed";
            }
            yield " table-responsive\">
      <table class=\"table\">
        <thead>
        <tr>
          <th>";
            // line 841
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["table_label"]) || array_key_exists("table_label", $context) ? $context["table_label"] : (function () { throw new RuntimeError('Variable "table_label" does not exist.', 841, $this->source); })()), "html", null, true);
            yield "</th>
          ";
            // line 842
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 842, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["child_choice"]) {
                // line 843
                yield "            <th class=\"text-center\">
              ";
                // line 844
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 844), "multiple", [], "any", false, false, false, 844) && !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 844), "name", [], "any", false, false, false, 844), (isset($context["headers_to_disable"]) || array_key_exists("headers_to_disable", $context) ? $context["headers_to_disable"] : (function () { throw new RuntimeError('Variable "headers_to_disable" does not exist.', 844, $this->source); })())))) {
                    // line 845
                    yield "                <a href=\"#\"
                   class=\"js-multiple-choice-table-select-column\"
                   data-column-num=\"";
                    // line 847
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 847) + 1), "html", null, true);
                    yield "\"
                   data-column-checked=\"false\"
                >
                  ";
                    // line 850
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 850), "label", [], "any", false, false, false, 850), "html", null, true);
                    yield "
                </a>
              ";
                } else {
                    // line 853
                    yield "                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 853), "label", [], "any", false, false, false, 853), "html", null, true);
                    yield "
              ";
                }
                // line 855
                yield "            </th>
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
            unset($context['_seq'], $context['_key'], $context['child_choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 857
            yield "        </tr>
        </thead>
        <tbody>
        ";
            // line 860
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 860, $this->source); })()));
            foreach ($context['_seq'] as $context["choice_name"] => $context["choice_value"]) {
                // line 861
                yield "          <tr>
            <td>
              ";
                // line 863
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["choice_name"], "html", null, true);
                yield "
            </td>
            ";
                // line 865
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 865, $this->source); })()));
                foreach ($context['_seq'] as $context["child_choice_name"] => $context["child_choice"]) {
                    // line 866
                    yield "              <td class=\"text-center\">
                ";
                    // line 867
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["child_choice_entry_index_mapping"] ?? null), $context["choice_value"], [], "array", false, true, false, 867), $context["child_choice_name"], [], "array", true, true, false, 867)) {
                        // line 868
                        yield "                  ";
                        $context["entry_index"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["child_choice_entry_index_mapping"]) || array_key_exists("child_choice_entry_index_mapping", $context) ? $context["child_choice_entry_index_mapping"] : (function () { throw new RuntimeError('Variable "child_choice_entry_index_mapping" does not exist.', 868, $this->source); })()), $context["choice_value"], [], "array", false, false, false, 868), $context["child_choice_name"], [], "array", false, false, false, 868);
                        // line 869
                        yield "
                  ";
                        // line 870
                        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 870), "multiple", [], "any", false, false, false, 870)) {
                            // line 871
                            yield "                    ";
                            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], (isset($context["entry_index"]) || array_key_exists("entry_index", $context) ? $context["entry_index"] : (function () { throw new RuntimeError('Variable "entry_index" does not exist.', 871, $this->source); })()), [], "array", false, false, false, 871), 'widget', ["material_design" => true]);
                            yield "
                  ";
                        } else {
                            // line 873
                            yield "                    ";
                            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], (isset($context["entry_index"]) || array_key_exists("entry_index", $context) ? $context["entry_index"] : (function () { throw new RuntimeError('Variable "entry_index" does not exist.', 873, $this->source); })()), [], "array", false, false, false, 873), 'widget');
                            yield "
                  ";
                        }
                        // line 875
                        yield "                ";
                    } else {
                        // line 876
                        yield "                  --
                ";
                    }
                    // line 878
                    yield "              </td>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['child_choice_name'], $context['child_choice'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 880
                yield "          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['choice_name'], $context['choice_value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 882
            yield "        </tbody>
      </table>
    </div>
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 836
        yield Twig\Extension\CoreExtension::spaceless($_v6);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 889
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translatable_fields_with_tabs(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatable_fields_with_tabs"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatable_fields_with_tabs"));

        // line 890
        yield "  <div class=\"translations tabbable\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 890, $this->source); })()), "vars", [], "any", false, false, false, 890), "id", [], "any", false, false, false, 890), "html", null, true);
        yield "\" tabindex=\"1\">
    ";
        // line 891
        if ((((isset($context["hide_locales"]) || array_key_exists("hide_locales", $context) ? $context["hide_locales"] : (function () { throw new RuntimeError('Variable "hide_locales" does not exist.', 891, $this->source); })()) == false) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 891, $this->source); })())) > 1))) {
            // line 892
            yield "      <ul class=\"translationsLocales nav nav-pills\">
        ";
            // line 893
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 893, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 894
                yield "          <li class=\"nav-item\">
            <a href=\"#\" data-locale=\"";
                // line 895
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 895), "label", [], "any", false, false, false, 895), "html", null, true);
                yield "\" class=\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["default_locale"]) || array_key_exists("default_locale", $context) ? $context["default_locale"] : (function () { throw new RuntimeError('Variable "default_locale" does not exist.', 895, $this->source); })()), "id_lang", [], "any", false, false, false, 895) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 895), "name", [], "any", false, false, false, 895))) {
                    yield "active";
                }
                yield " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 895), "id", [], "any", false, false, false, 895), "html", null, true);
                yield "\">
              ";
                // line 896
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 896), "label", [], "any", false, false, false, 896)), "html", null, true);
                yield "
            </a>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['translationsFields'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 900
            yield "      </ul>
    ";
        }
        // line 902
        yield "
    <div class=\"translationsFields tab-content\">
      ";
        // line 904
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 904, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 905
            yield "        <div data-locale=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 905), "label", [], "any", false, false, false, 905), "html", null, true);
            yield "\" class=\"translationsFields-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 905), "id", [], "any", false, false, false, 905), "html", null, true);
            yield " tab-pane translation-field ";
            if ((((isset($context["hide_locales"]) || array_key_exists("hide_locales", $context) ? $context["hide_locales"] : (function () { throw new RuntimeError('Variable "hide_locales" does not exist.', 905, $this->source); })()) == false) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 905, $this->source); })())) > 1))) {
                yield "panel panel-default";
            }
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["default_locale"]) || array_key_exists("default_locale", $context) ? $context["default_locale"] : (function () { throw new RuntimeError('Variable "default_locale" does not exist.', 905, $this->source); })()), "id_lang", [], "any", false, false, false, 905) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 905), "name", [], "any", false, false, false, 905))) {
                yield "show active";
            }
            yield " ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 905, $this->source); })()), "vars", [], "any", false, false, false, 905), "valid", [], "any", false, false, false, 905)) {
                yield "field-error";
            }
            yield " translation-label-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 905), "label", [], "any", false, false, false, 905), "html", null, true);
            yield "\">
          ";
            // line 906
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            yield "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['translationsFields'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 909
        yield "    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 913
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translatable_fields_with_dropdown(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatable_fields_with_dropdown"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatable_fields_with_dropdown"));

        // line 914
        $context["formClass"] = Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 914), "attr", [], "any", false, true, false, 914), "class", [], "any", true, true, false, 914)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 914, $this->source); })()), "vars", [], "any", false, false, false, 914), "attr", [], "any", false, false, false, 914), "class", [], "any", false, false, false, 914), "")) : ("")) . " input-group locale-input-group js-locale-input-group d-flex"));
        // line 915
        yield "    <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formClass"]) || array_key_exists("formClass", $context) ? $context["formClass"] : (function () { throw new RuntimeError('Variable "formClass" does not exist.', 915, $this->source); })()), "html", null, true);
        yield "\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 915, $this->source); })()), "vars", [], "any", false, false, false, 915), "id", [], "any", false, false, false, 915), "html", null, true);
        yield "\" tabindex=\"1\">
      ";
        // line 916
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 916, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 917
            yield "        ";
            $context["classes"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 917), "attr", [], "any", false, true, false, 917), "class", [], "any", true, true, false, 917)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 917), "attr", [], "any", false, false, false, 917), "class", [], "any", false, false, false, 917), "")) : ("")) . " js-locale-input");
            // line 918
            yield "        ";
            $context["classes"] = (((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 918, $this->source); })()) . " js-locale-") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 918), "label", [], "any", false, false, false, 918));
            // line 919
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["default_locale"]) || array_key_exists("default_locale", $context) ? $context["default_locale"] : (function () { throw new RuntimeError('Variable "default_locale" does not exist.', 919, $this->source); })()), "id_lang", [], "any", false, false, false, 919) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 919), "name", [], "any", false, false, false, 919))) {
                // line 920
                yield "          ";
                $context["classes"] = ((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 920, $this->source); })()) . " d-none");
                // line 921
                yield "        ";
            }
            // line 922
            yield "        <div data-lang-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 922), "name", [], "any", false, false, false, 922), "html", null, true);
            yield "\" class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 922, $this->source); })()), "html", null, true);
            yield "\" style=\"flex-grow: 1;\">
          ";
            // line 923
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translateField"], 'widget');
            yield "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['translateField'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 926
        yield "      ";
        if ( !(isset($context["hide_locales"]) || array_key_exists("hide_locales", $context) ? $context["hide_locales"] : (function () { throw new RuntimeError('Variable "hide_locales" does not exist.', 926, $this->source); })())) {
            // line 927
            yield "        <div class=\"dropdown\">
          <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                  type=\"button\"
                  data-toggle=\"dropdown\"
            ";
            // line 931
            if (array_key_exists("change_form_language_url", $context)) {
                // line 932
                yield "              data-change-language-url=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 932, $this->source); })()), "vars", [], "any", false, false, false, 932), "change_form_language_url", [], "any", false, false, false, 932), "html", null, true);
                yield "\"
            ";
            }
            // line 934
            yield "                  aria-haspopup=\"true\"
                  aria-expanded=\"false\"
                  id=\"";
            // line 936
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 936, $this->source); })()), "vars", [], "any", false, false, false, 936), "id", [], "any", false, false, false, 936), "html", null, true);
            yield "_dropdown\"
          >
            ";
            // line 938
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 938, $this->source); })()), "vars", [], "any", false, false, false, 938), "default_locale", [], "any", false, false, false, 938), "iso_code", [], "any", false, false, false, 938)), "html", null, true);
            yield "
          </button>
          <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 940
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 940, $this->source); })()), "vars", [], "any", false, false, false, 940), "id", [], "any", false, false, false, 940), "html", null, true);
            yield "_dropdown\">
            ";
            // line 941
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 941, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 942
                yield "              <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 942), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 942), "html", null, true);
                yield "</span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['locale'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 944
            yield "          </div>
        </div>
      ";
        }
        // line 947
        yield "    </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 950
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translatable_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatable_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatable_widget"));

        // line 951
        if ((isset($context["use_tabs"]) || array_key_exists("use_tabs", $context) ? $context["use_tabs"] : (function () { throw new RuntimeError('Variable "use_tabs" does not exist.', 951, $this->source); })())) {
            // line 952
            yield "    ";
            yield from             $this->unwrap()->yieldBlock("translatable_fields_with_tabs", $context, $blocks);
            yield "
  ";
        } else {
            // line 954
            yield "    ";
            yield from             $this->unwrap()->yieldBlock("translatable_fields_with_dropdown", $context, $blocks);
            yield "
  ";
        }
        // line 956
        yield "  ";
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 959
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_birthday_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "birthday_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "birthday_widget"));

        // line 960
        yield "  ";
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 960, $this->source); })()) == "single_text")) {
            // line 961
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 963
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 963, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 963)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 963, $this->source); })()), "class", [], "any", false, false, false, 963), "")) : ("")) . " form-inline"))]);
            // line 964
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new RuntimeError('Variable "datetime" does not exist.', 964, $this->source); })()))) {
                // line 965
                yield "<div ";
                yield from                 $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
                yield ">";
            }
            // line 967
            yield "
    ";
            // line 968
            $context["yearWidget"] = (("<div class=\"col pl-0 birthday-select-container\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 968, $this->source); })()), "year", [], "any", false, false, false, 968), 'widget')) . "</div>");
            // line 969
            yield "    ";
            $context["monthWidget"] = (("<div class=\"col birthday-select-container\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 969, $this->source); })()), "month", [], "any", false, false, false, 969), 'widget')) . "</div>");
            // line 970
            yield "    ";
            $context["dayWidget"] = (("<div class=\"col pr-0 birthday-select-container\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 970, $this->source); })()), "day", [], "any", false, false, false, 970), 'widget')) . "</div>");
            // line 972
            yield Twig\Extension\CoreExtension::replace((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new RuntimeError('Variable "date_pattern" does not exist.', 972, $this->source); })()), ["{{ year }}" =>             // line 973
(isset($context["yearWidget"]) || array_key_exists("yearWidget", $context) ? $context["yearWidget"] : (function () { throw new RuntimeError('Variable "yearWidget" does not exist.', 973, $this->source); })()), "{{ month }}" =>             // line 974
(isset($context["monthWidget"]) || array_key_exists("monthWidget", $context) ? $context["monthWidget"] : (function () { throw new RuntimeError('Variable "monthWidget" does not exist.', 974, $this->source); })()), "{{ day }}" =>             // line 975
(isset($context["dayWidget"]) || array_key_exists("dayWidget", $context) ? $context["dayWidget"] : (function () { throw new RuntimeError('Variable "dayWidget" does not exist.', 975, $this->source); })())]);
            // line 978
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new RuntimeError('Variable "datetime" does not exist.', 978, $this->source); })()))) {
                // line 979
                yield "</div>";
            }
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 984
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_file_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_widget"));

        // line 985
        yield "  <style>
    .custom-file-label:after {
      content: \"";
        // line 987
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Browse", [], "Admin.Actions"), "html", null, true);
        yield "\";
    }
  </style>
  <div class=\"custom-file\">
    ";
        // line 991
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 991, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source,         // line 992
($context["attr"] ?? null), "class", [], "any", true, true, false, 992)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 992, $this->source); })()), "class", [], "any", false, false, false, 992), "")) : ("")) . " custom-file-input")), "data-multiple-files-text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%count% file(s)", [], "Admin.Global"), "data-locale" => $this->extensions['PrestaShopBundle\Twig\ContextIsoCodeProviderExtension']->getIsoCode()]);
        // line 997
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", true, true, false, 997) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 997, $this->source); })()), "disabled", [], "any", false, false, false, 997))) {
            // line 998
            yield "      ";
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 998, $this->source); })()), ["class" => (CoreExtension::getAttribute($this->env, $this->source,             // line 999
(isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 999, $this->source); })()), "class", [], "any", false, false, false, 999) . " disabled")]);
            // line 1001
            yield "    ";
        }
        // line 1002
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 1004
        yield "<label class=\"custom-file-label\" for=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1004, $this->source); })()), "vars", [], "any", false, false, false, 1004), "id", [], "any", false, false, false, 1004), "html", null, true);
        yield "\">
      ";
        // line 1005
        $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1005, $this->source); })()), "vars", [], "any", false, false, false, 1005), "attr", [], "any", false, false, false, 1005);
        // line 1006
        yield "      ";
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "placeholder", [], "any", true, true, false, 1006)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 1006, $this->source); })()), "placeholder", [], "any", false, false, false, 1006), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose file(s)", [], "Admin.Actions"), "html", null, true)));
        yield "
    </label>
  </div>";
        // line 1009
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        // line 1010
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1010, $this->source); })()), "vars", [], "any", false, false, false, 1010), "download_url", [], "any", false, false, false, 1010)) {
            // line 1011
            yield "    <a target=\"_blank\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1011, $this->source); })()), "vars", [], "any", false, false, false, 1011), "download_url", [], "any", false, false, false, 1011), "html", null, true);
            yield "\">
      ";
            // line 1012
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download file", [], "Admin.Actions"), "html", null, true);
            yield "
    </a>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1017
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_shop_restriction_checkbox_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_restriction_checkbox_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_restriction_checkbox_widget"));

        // line 1018
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1018, $this->source); })()), "vars", [], "any", false, false, false, 1018), "attr", [], "any", false, false, false, 1018), "is_allowed_to_display", [], "any", false, false, false, 1018)) {
            // line 1019
            yield "    <div class=\"md-checkbox md-checkbox-inline\">
      <label>
        ";
            // line 1021
            $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 1021, $this->source); })()), "checkbox")) : ("checkbox"));
            // line 1022
            yield "        <input
          class=\"js-multi-store-restriction-checkbox\"
          type=\"";
            // line 1024
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 1024, $this->source); })()), "html", null, true);
            yield "\"
          ";
            // line 1025
            yield from             $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
            yield "
          value=\"";
            // line 1026
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1026, $this->source); })()), "html", null, true);
            yield "\"
        >
        <i class=\"md-checkbox-control\"></i>
      </label>
    </div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1034
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_generatable_text_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "generatable_text_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "generatable_text_widget"));

        // line 1035
        yield "  <div class=\"input-group\">
    ";
        // line 1036
        if ((isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 1036, $this->source); })())) {
            // line 1037
            yield from             $this->unwrap()->yieldBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 1039
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        // line 1041
        yield "    <span class=\"input-group-btn ml-1\">
      <button class=\"btn btn-outline-secondary js-generator-btn\"
              type=\"button\"
              data-target-input-id=\"";
        // line 1044
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1044, $this->source); })()), "html", null, true);
        yield "\"
              data-generated-value-length=\"";
        // line 1045
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["generated_value_length"]) || array_key_exists("generated_value_length", $context) ? $context["generated_value_length"] : (function () { throw new RuntimeError('Variable "generated_value_length" does not exist.', 1045, $this->source); })()), "html", null, true);
        yield "\"
      >
        ";
        // line 1047
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate", [], "Admin.Actions"), "html", null, true);
        yield "
      </button>
   </span>
  </div>
  ";
        // line 1051
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1054
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_text_with_recommended_length_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_with_recommended_length_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_with_recommended_length_widget"));

        // line 1055
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1055, $this->source); })()), ["data-recommended-length-counter" => (("#" .         // line 1056
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1056, $this->source); })())) . "_recommended_length_counter"), "class" => "js-recommended-length-input"]);
        // line 1060
        if (((isset($context["input_type"]) || array_key_exists("input_type", $context) ? $context["input_type"] : (function () { throw new RuntimeError('Variable "input_type" does not exist.', 1060, $this->source); })()) == "textarea")) {
            // line 1061
            yield from             $this->unwrap()->yieldBlock("textarea_widget", $context, $blocks);
        } else {
            // line 1063
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        // line 1065
        yield "
  <small class=\"form-text text-muted text-right\"
         id=\"";
        // line 1067
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1067, $this->source); })()), "html", null, true);
        yield "_recommended_length_counter\"
  >
    <em>
      ";
        // line 1070
        yield Twig\Extension\CoreExtension::replace($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("[1][/1] of [2][/2] characters used (recommended)", [], "Admin.Catalog.Feature"), ["[1]" => ("<span class=\"js-current-length\">" . Twig\Extension\CoreExtension::length($this->env->getCharset(),         // line 1071
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1071, $this->source); })()))), "[/1]" => "</span>", "[2]" => ("<span>" .         // line 1073
(isset($context["recommended_length"]) || array_key_exists("recommended_length", $context) ? $context["recommended_length"] : (function () { throw new RuntimeError('Variable "recommended_length" does not exist.', 1073, $this->source); })())), "[/2]" => "</span>"]);
        // line 1075
        yield "
    </em>
  </small>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1080
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

        // line 1081
        yield "  <div class=\"input-group js-text-with-length-counter\">
    ";
        // line 1082
        $context["current_length"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1082, $this->source); })()), "vars", [], "any", false, false, false, 1082), "max_length", [], "any", false, false, false, 1082) - Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1082, $this->source); })())));
        // line 1083
        yield "
    ";
        // line 1084
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1084, $this->source); })()), "vars", [], "any", false, false, false, 1084), "position", [], "any", false, false, false, 1084) == "before")) {
            // line 1085
            yield "      <div class=\"input-group-prepend\">
        <span class=\"input-group-text js-countable-text\">";
            // line 1086
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["current_length"]) || array_key_exists("current_length", $context) ? $context["current_length"] : (function () { throw new RuntimeError('Variable "current_length" does not exist.', 1086, $this->source); })()), "html", null, true);
            yield "</span>
      </div>
    ";
        }
        // line 1089
        yield "
    ";
        // line 1090
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1090, $this->source); })()), (isset($context["input_attr"]) || array_key_exists("input_attr", $context) ? $context["input_attr"] : (function () { throw new RuntimeError('Variable "input_attr" does not exist.', 1090, $this->source); })()));
        // line 1091
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1091, $this->source); })()), ["data-max-length" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1091, $this->source); })()), "vars", [], "any", false, false, false, 1091), "max_length", [], "any", false, false, false, 1091), "maxlength" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1091, $this->source); })()), "vars", [], "any", false, false, false, 1091), "max_length", [], "any", false, false, false, 1091), "class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1091)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1091, $this->source); })()), "class", [], "any", false, false, false, 1091), "")) : ("")) . " js-countable-input"))]);
        // line 1093
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1093, $this->source); })()), "vars", [], "any", false, false, false, 1093), "input", [], "any", false, false, false, 1093) == "input")) {
            // line 1094
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1095
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1095, $this->source); })()), "vars", [], "any", false, false, false, 1095), "input", [], "any", false, false, false, 1095) == "textarea")) {
            // line 1096
            yield from             $this->unwrap()->yieldBlock("textarea_widget", $context, $blocks);
        } else {
            // line 1098
            yield from             $this->unwrap()->yieldBlock("form_widget", $context, $blocks);
        }
        // line 1100
        yield "
    ";
        // line 1101
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1101, $this->source); })()), "vars", [], "any", false, false, false, 1101), "position", [], "any", false, false, false, 1101) == "after")) {
            // line 1102
            yield "      <div class=\"input-group-append\">
        <span class=\"input-group-text js-countable-text\">";
            // line 1103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["current_length"]) || array_key_exists("current_length", $context) ? $context["current_length"] : (function () { throw new RuntimeError('Variable "current_length" does not exist.', 1103, $this->source); })()), "html", null, true);
            yield "</span>
      </div>
    ";
        }
        // line 1106
        yield "  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1109
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_integer_min_max_filter_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "integer_min_max_filter_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "integer_min_max_filter_widget"));

        // line 1110
        yield "  ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1110, $this->source); })()), "min_field", [], "array", false, false, false, 1110), 'widget', ["attr" => ["class" => "min-field"]]);
        yield "
  ";
        // line 1111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1111, $this->source); })()), "max_field", [], "array", false, false, false, 1111), 'widget', ["attr" => ["class" => "max-field"]]);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1114
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_number_min_max_filter_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "number_min_max_filter_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "number_min_max_filter_widget"));

        // line 1115
        yield "  ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1115, $this->source); })()), "min_field", [], "array", false, false, false, 1115), 'widget', ["attr" => ["class" => "min-field"]]);
        yield "
  ";
        // line 1116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1116, $this->source); })()), "max_field", [], "array", false, false, false, 1116), 'widget', ["attr" => ["class" => "max-field"]]);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1119
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

        // line 1120
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 1120, $this->source); })()), "text")) : ("text"));
        // line 1121
        yield "<div class=\"input-group\">";
        // line 1122
        yield from         $this->unwrap()->yieldBlock("form_unit_prepend", $context, $blocks);
        // line 1123
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 1124
        yield from         $this->unwrap()->yieldBlock("form_unit", $context, $blocks);
        // line 1125
        yield "</div>
  ";
        // line 1126
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1129
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

        // line 1130
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 1130, $this->source); })()), "number")) : ("number"));
        // line 1131
        yield "<div class=\"input-group\">";
        // line 1132
        yield from         $this->unwrap()->yieldBlock("form_unit_prepend", $context, $blocks);
        // line 1133
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 1134
        yield from         $this->unwrap()->yieldBlock("form_unit", $context, $blocks);
        // line 1135
        yield "</div>
  ";
        // line 1136
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1139
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

        // line 1140
        yield "  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 1140), "unit", [], "any", true, true, false, 1140) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1140, $this->source); })()), "vars", [], "any", false, false, false, 1140), "prepend_unit", [], "any", false, false, false, 1140))) {
            // line 1141
            yield "    <div class=\"input-group-append\">
      <span class=\"input-group-text\">";
            // line 1142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1142, $this->source); })()), "vars", [], "any", false, false, false, 1142), "unit", [], "any", false, false, false, 1142), "html", null, true);
            yield "</span>
    </div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1147
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

        // line 1148
        yield "  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 1148), "unit", [], "any", true, true, false, 1148) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1148, $this->source); })()), "vars", [], "any", false, false, false, 1148), "prepend_unit", [], "any", false, false, false, 1148))) {
            // line 1149
            yield "    <div class=\"input-group-prepend\">
      <span class=\"input-group-text\">";
            // line 1150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1150, $this->source); })()), "vars", [], "any", false, false, false, 1150), "unit", [], "any", false, false, false, 1150), "html", null, true);
            yield "</span>
    </div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1155
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_help(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_help"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_help"));

        // line 1156
        yield "  ";
        if ( !(null === (isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 1156, $this->source); })()))) {
            // line 1157
            $context["help_attr"] = Twig\Extension\CoreExtension::merge((isset($context["help_attr"]) || array_key_exists("help_attr", $context) ? $context["help_attr"] : (function () { throw new RuntimeError('Variable "help_attr" does not exist.', 1157, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, false, 1157)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["help_attr"]) || array_key_exists("help_attr", $context) ? $context["help_attr"] : (function () { throw new RuntimeError('Variable "help_attr" does not exist.', 1157, $this->source); })()), "class", [], "any", false, false, false, 1157), "")) : ("")) . " form-text"))]);
            // line 1158
            yield "<small id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1158, $this->source); })()), "html", null, true);
            yield "_help\"";
            $_v7 = $context;
            $_v8 = ["attr" => (isset($context["help_attr"]) || array_key_exists("help_attr", $context) ? $context["help_attr"] : (function () { throw new RuntimeError('Variable "help_attr" does not exist.', 1158, $this->source); })())];
            if (!is_iterable($_v8)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 1158, $this->getSourceContext());
            }
            $_v8 = CoreExtension::toArray($_v8);
            $context = $_v8 + $context + $this->env->getGlobals();
            yield from             $this->unwrap()->yieldBlock("attributes", $context, $blocks);
            $context = $_v7;
            yield ">";
            yield (isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 1158, $this->source); })());
            yield "</small>
  ";
        }
        // line 1160
        yield "  ";
        if (array_key_exists("warning", $context)) {
            // line 1161
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["warning"]) || array_key_exists("warning", $context) ? $context["warning"] : (function () { throw new RuntimeError('Variable "warning" does not exist.', 1161, $this->source); })()), "html", null, true);
            yield "
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1165
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_prepend_external_link(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_prepend_external_link"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_prepend_external_link"));

        // line 1166
        yield "  ";
        if ((array_key_exists("external_link", $context) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["external_link"]) || array_key_exists("external_link", $context) ? $context["external_link"] : (function () { throw new RuntimeError('Variable "external_link" does not exist.', 1166, $this->source); })()), "position", [], "any", false, false, false, 1166) == "prepend"))) {
            // line 1167
            yield from             $this->unwrap()->yieldBlock("form_external_link", $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1171
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_append_external_link(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_append_external_link"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_append_external_link"));

        // line 1172
        yield "  ";
        if ((array_key_exists("external_link", $context) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["external_link"]) || array_key_exists("external_link", $context) ? $context["external_link"] : (function () { throw new RuntimeError('Variable "external_link" does not exist.', 1172, $this->source); })()), "position", [], "any", false, false, false, 1172) == "append"))) {
            // line 1173
            yield from             $this->unwrap()->yieldBlock("form_external_link", $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1177
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_external_link(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_external_link"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_external_link"));

        // line 1178
        yield "  ";
        if (array_key_exists("external_link", $context)) {
            // line 1179
            $context["openingTag"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 1180
                yield "<a ";
                yield from                 $this->unwrap()->yieldBlock("form_external_link_attributes", $context, $blocks);
                yield ">
        ";
                // line 1181
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["external_link"]) || array_key_exists("external_link", $context) ? $context["external_link"] : (function () { throw new RuntimeError('Variable "external_link" does not exist.', 1181, $this->source); })()), "open_in_new_tab", [], "any", false, false, false, 1181)) {
                    yield "<i class=\"material-icons\">open_in_new</i>";
                }
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1184
            yield "<div class=\"small font-secondary form-external-link";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["external_link"]) || array_key_exists("external_link", $context) ? $context["external_link"] : (function () { throw new RuntimeError('Variable "external_link" does not exist.', 1184, $this->source); })()), "align", [], "any", false, false, false, 1184) === "right")) {
                yield " text-right";
            }
            yield "\">
      ";
            // line 1186
            yield "      ";
            if ((CoreExtension::inFilter("[1]", CoreExtension::getAttribute($this->env, $this->source, (isset($context["external_link"]) || array_key_exists("external_link", $context) ? $context["external_link"] : (function () { throw new RuntimeError('Variable "external_link" does not exist.', 1186, $this->source); })()), "text", [], "any", false, false, false, 1186)) && CoreExtension::inFilter("[/1]", CoreExtension::getAttribute($this->env, $this->source, (isset($context["external_link"]) || array_key_exists("external_link", $context) ? $context["external_link"] : (function () { throw new RuntimeError('Variable "external_link" does not exist.', 1186, $this->source); })()), "text", [], "any", false, false, false, 1186)))) {
                // line 1187
                yield "        ";
                yield Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["external_link"]) || array_key_exists("external_link", $context) ? $context["external_link"] : (function () { throw new RuntimeError('Variable "external_link" does not exist.', 1187, $this->source); })()), "text", [], "any", false, false, false, 1187), ["[1]" => (isset($context["openingTag"]) || array_key_exists("openingTag", $context) ? $context["openingTag"] : (function () { throw new RuntimeError('Variable "openingTag" does not exist.', 1187, $this->source); })()), "[/1]" => "</a>"]);
                yield "
      ";
            } else {
                // line 1189
                yield "        ";
                yield Twig\Extension\CoreExtension::replace((("[1]" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["external_link"]) || array_key_exists("external_link", $context) ? $context["external_link"] : (function () { throw new RuntimeError('Variable "external_link" does not exist.', 1189, $this->source); })()), "text", [], "any", false, false, false, 1189)) . "[/1]"), ["[1]" => (isset($context["openingTag"]) || array_key_exists("openingTag", $context) ? $context["openingTag"] : (function () { throw new RuntimeError('Variable "openingTag" does not exist.', 1189, $this->source); })()), "[/1]" => "</a>"]);
                yield "
      ";
            }
            // line 1191
            yield "    </div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1195
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_external_link_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_external_link_attributes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_external_link_attributes"));

        // line 1196
        $context["external_link_attr"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["external_link"]) || array_key_exists("external_link", $context) ? $context["external_link"] : (function () { throw new RuntimeError('Variable "external_link" does not exist.', 1196, $this->source); })()), "attr", [], "any", false, false, false, 1196), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "attr", [], "any", false, true, false, 1196), "class", [], "any", true, true, false, 1196)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["external_link"]) || array_key_exists("external_link", $context) ? $context["external_link"] : (function () { throw new RuntimeError('Variable "external_link" does not exist.', 1196, $this->source); })()), "attr", [], "any", false, false, false, 1196), "class", [], "any", false, false, false, 1196), "")) : ("")) . " btn btn-link px-0 align-right"))]);
        // line 1197
        yield "
  ";
        // line 1198
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["external_link_attr"]) || array_key_exists("external_link_attr", $context) ? $context["external_link_attr"] : (function () { throw new RuntimeError('Variable "external_link_attr" does not exist.', 1198, $this->source); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 1199
            yield "    ";
            if (!CoreExtension::inFilter($context["attrname"], ["href", "class"])) {
                // line 1200
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                yield "\"
    ";
            }
            // line 1202
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1203
        yield "
  ";
        // line 1204
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["external_link"]) || array_key_exists("external_link", $context) ? $context["external_link"] : (function () { throw new RuntimeError('Variable "external_link" does not exist.', 1204, $this->source); })()), "open_in_new_tab", [], "any", false, false, false, 1204)) {
            yield "target=\"_blank\"";
        }
        // line 1205
        yield "  href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["external_link"]) || array_key_exists("external_link", $context) ? $context["external_link"] : (function () { throw new RuntimeError('Variable "external_link" does not exist.', 1205, $this->source); })()), "href", [], "any", false, false, false, 1205), "html", null, true);
        yield "\"
  class=\"";
        // line 1206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["external_link_attr"]) || array_key_exists("external_link_attr", $context) ? $context["external_link_attr"] : (function () { throw new RuntimeError('Variable "external_link_attr" does not exist.', 1206, $this->source); })()), "class", [], "any", false, false, false, 1206), "html", null, true);
        yield "\"";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1209
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_custom_content_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_content_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_content_widget"));

        // line 1210
        yield "  ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 1210, $this->source); })()), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 1210, $this->source); })()));
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1213
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_text_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_widget"));

        // line 1214
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1214, $this->source); })()), ["aria-label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%inputId% input", ["%inputId%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1214, $this->source); })()), "vars", [], "any", false, false, false, 1214), "id", [], "any", false, false, false, 1214)], "Admin.Global")]);
        // line 1215
        if ( !(null === (isset($context["data_list"]) || array_key_exists("data_list", $context) ? $context["data_list"] : (function () { throw new RuntimeError('Variable "data_list" does not exist.', 1215, $this->source); })()))) {
            // line 1216
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1216, $this->source); })()), ["list" => ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1216, $this->source); })()) . "_datalist")]);
        }
        // line 1218
        yield "
  ";
        // line 1219
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1219, $this->source); })()), 'widget', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1219, $this->source); })())]);
        yield "

  ";
        // line 1221
        if ( !(null === (isset($context["data_list"]) || array_key_exists("data_list", $context) ? $context["data_list"] : (function () { throw new RuntimeError('Variable "data_list" does not exist.', 1221, $this->source); })()))) {
            // line 1222
            yield "    <datalist id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1222, $this->source); })()) . "_datalist"), "html", null, true);
            yield "\">
      ";
            // line 1223
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data_list"]) || array_key_exists("data_list", $context) ? $context["data_list"] : (function () { throw new RuntimeError('Variable "data_list" does not exist.', 1223, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 1224
                yield "        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"], "html", null, true);
                yield "\"></option>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1226
            yield "    </datalist>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1230
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_prepend_alert(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_prepend_alert"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_prepend_alert"));

        // line 1231
        if ((array_key_exists("alert_position", $context) && ((isset($context["alert_position"]) || array_key_exists("alert_position", $context) ? $context["alert_position"] : (function () { throw new RuntimeError('Variable "alert_position" does not exist.', 1231, $this->source); })()) == "prepend"))) {
            // line 1232
            yield from             $this->unwrap()->yieldBlock("form_alert", $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1236
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_append_alert(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_append_alert"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_append_alert"));

        // line 1237
        if ((array_key_exists("alert_position", $context) && ((isset($context["alert_position"]) || array_key_exists("alert_position", $context) ? $context["alert_position"] : (function () { throw new RuntimeError('Variable "alert_position" does not exist.', 1237, $this->source); })()) == "append"))) {
            // line 1238
            yield from             $this->unwrap()->yieldBlock("form_alert", $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1242
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_alert(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_alert"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_alert"));

        // line 1243
        if (array_key_exists("alert_message", $context)) {
            // line 1244
            yield "    <div class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["alert_type"]) || array_key_exists("alert_type", $context) ? $context["alert_type"] : (function () { throw new RuntimeError('Variable "alert_type" does not exist.', 1244, $this->source); })()), "html", null, true);
            if (array_key_exists("alert_title", $context)) {
                yield " expandable-alert";
            }
            yield "\" role=\"alert\">
    ";
            // line 1245
            if (array_key_exists("alert_title", $context)) {
                // line 1246
                yield "      <p class=\"alert-text\">
        ";
                // line 1247
                yield (isset($context["alert_title"]) || array_key_exists("alert_title", $context) ? $context["alert_title"] : (function () { throw new RuntimeError('Variable "alert_title" does not exist.', 1247, $this->source); })());
                yield "
      </p>
    ";
            } else {
                // line 1250
                yield "      ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["alert_message"]) || array_key_exists("alert_message", $context) ? $context["alert_message"] : (function () { throw new RuntimeError('Variable "alert_message" does not exist.', 1250, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 1251
                    yield "        <p class=\"alert-text\">
          ";
                    // line 1252
                    yield $context["message"];
                    yield "
        </p>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1255
                yield "    ";
            }
            // line 1256
            yield "
    ";
            // line 1257
            if (array_key_exists("alert_title", $context)) {
                // line 1258
                yield "      <div class=\"alert-more collapse\" id=\"expandable_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1258, $this->source); })()), "vars", [], "any", false, false, false, 1258), "id", [], "any", false, false, false, 1258), "html", null, true);
                yield "\" style=\"\">
        ";
                // line 1259
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["alert_message"]) || array_key_exists("alert_message", $context) ? $context["alert_message"] : (function () { throw new RuntimeError('Variable "alert_message" does not exist.', 1259, $this->source); })())) > 1)) {
                    // line 1260
                    yield "          <ul class=\"p-0\">
            ";
                    // line 1261
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["alert_message"]) || array_key_exists("alert_message", $context) ? $context["alert_message"] : (function () { throw new RuntimeError('Variable "alert_message" does not exist.', 1261, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 1262
                        yield "              <li>";
                        yield $context["message"];
                        yield "</li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1264
                    yield "          </ul>
        ";
                } else {
                    // line 1266
                    yield "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["alert_message"]) || array_key_exists("alert_message", $context) ? $context["alert_message"] : (function () { throw new RuntimeError('Variable "alert_message" does not exist.', 1266, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 1267
                        yield "            <p>
              ";
                        // line 1268
                        yield $context["message"];
                        yield "
            </p>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1271
                    yield "        ";
                }
                // line 1272
                yield "      </div>
      <div class=\"read-more-container\">
         <button type=\"button\" class=\"read-more btn-link\" data-toggle=\"collapse\" data-target=\"#expandable_";
                // line 1274
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1274, $this->source); })()), "vars", [], "any", false, false, false, 1274), "id", [], "any", false, false, false, 1274), "html", null, true);
                yield "\" aria-expanded=\"true\" aria-controls=\"collapseDanger\">
            ";
                // line 1275
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Read more", [], "Admin.Actions"), "html", null, true);
                yield "
          </button>
       </div>
    ";
            }
            // line 1279
            yield "  </div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1283
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_unavailable_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "unavailable_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "unavailable_widget"));

        // line 1284
        yield "  <div class=\"alert alert-unavailable\" role=\"alert\">
    <p class=\"alert-text\">
      ";
        // line 1286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not available yet.", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "
    </p>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1291
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_text_preview_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_preview_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_preview_widget"));

        // line 1292
        yield "  ";
        // line 1293
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 1294
        yield "<span class=\"label text-preview ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["preview_class"]) || array_key_exists("preview_class", $context) ? $context["preview_class"] : (function () { throw new RuntimeError('Variable "preview_class" does not exist.', 1294, $this->source); })()), "html", null, true);
        yield "\">
    ";
        // line 1296
        yield "    ";
        if (array_key_exists("prefix", $context)) {
            // line 1297
            yield "    <span class=\"text-preview-prefix\">
      ";
            // line 1298
            yield (isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 1298, $this->source); })());
            yield "
    </span>
    ";
        }
        // line 1301
        yield "
    <span class=\"text-preview-value\">
      ";
        // line 1303
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1303, $this->source); })()), "vars", [], "any", false, false, false, 1303), "allow_html", [], "any", false, false, false, 1303)) {
            // line 1304
            yield "        ";
            // line 1305
            yield "        ";
            yield (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1305, $this->source); })());
            yield "
      ";
        } else {
            // line 1307
            yield "        ";
            // line 1308
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1308, $this->source); })()), "html");
            yield "
      ";
        }
        // line 1310
        yield "    </span>

    ";
        // line 1313
        yield "    ";
        if (array_key_exists("suffix", $context)) {
            // line 1314
            yield "    <span class=\"text-preview-suffix\">
      ";
            // line 1315
            yield (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 1315, $this->source); })());
            yield "
    </span>
    ";
        }
        // line 1318
        yield "  </span>";
        // line 1319
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1322
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_link_preview_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "link_preview_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "link_preview_widget"));

        // line 1323
        yield "  ";
        // line 1324
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 1325
        yield "<a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1325, $this->source); })()), "vars", [], "any", false, false, false, 1325), "value", [], "any", false, false, false, 1325), "html", null, true);
        yield "\" class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1325)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1325, $this->source); })()), "class", [], "any", false, false, false, 1325), "")) : ("")), "html", null, true);
        yield "\">
    ";
        // line 1326
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1326, $this->source); })()), "vars", [], "any", false, false, false, 1326), "button_label", [], "any", false, false, false, 1326), "html", null, true);
        yield "
  </a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1330
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_image_preview_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image_preview_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image_preview_widget"));

        // line 1331
        yield "  ";
        // line 1332
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 1333
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1333, $this->source); })()))) {
            // line 1334
            yield "    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1334, $this->source); })()), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim(("Image preview for " . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1334, $this->source); })()), "vars", [], "any", false, false, false, 1334), "name", [], "any", false, false, false, 1334))), "html", null, true);
            yield "\" class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1334, $this->source); })()), "vars", [], "any", false, false, false, 1334), "image_class", [], "any", false, false, false, 1334), "html", null, true);
            yield "\" />
  ";
        } else {
            // line 1336
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No picture", [], "Admin.Global"), "html", null, true);
            yield "
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1340
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_delta_quantity_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delta_quantity_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delta_quantity_widget"));

        // line 1341
        yield "  ";
        $context["quantity"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), "quantity", [], "any", true, true, false, 1341)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1341, $this->source); })()), "quantity", [], "any", false, false, false, 1341), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1341, $this->source); })()), "quantity", [], "any", false, false, false, 1341), "vars", [], "any", false, false, false, 1341), "value", [], "any", false, false, false, 1341))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1341, $this->source); })()), "quantity", [], "any", false, false, false, 1341), "vars", [], "any", false, false, false, 1341), "value", [], "any", false, false, false, 1341)));
        // line 1342
        yield "  ";
        // line 1343
        yield "  ";
        if ((null === (isset($context["initialQuantity"]) || array_key_exists("initialQuantity", $context) ? $context["initialQuantity"] : (function () { throw new RuntimeError('Variable "initialQuantity" does not exist.', 1343, $this->source); })()))) {
            // line 1344
            yield "    ";
            $context["initialQuantity"] = (isset($context["quantity"]) || array_key_exists("quantity", $context) ? $context["quantity"] : (function () { throw new RuntimeError('Variable "quantity" does not exist.', 1344, $this->source); })());
            // line 1345
            yield "  ";
        }
        // line 1346
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1346, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1346)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1346, $this->source); })()), "class", [], "any", false, false, false, 1346), "")) : ("")) . " delta-quantity")), "data-initial-quantity" => (isset($context["initialQuantity"]) || array_key_exists("initialQuantity", $context) ? $context["initialQuantity"] : (function () { throw new RuntimeError('Variable "initialQuantity" does not exist.', 1346, $this->source); })())]);
        // line 1347
        yield "  <div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
    ";
        // line 1348
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1348, $this->source); })()), "initial_quantity", [], "any", false, false, false, 1348), 'widget', ["value" => (isset($context["initialQuantity"]) || array_key_exists("initialQuantity", $context) ? $context["initialQuantity"] : (function () { throw new RuntimeError('Variable "initialQuantity" does not exist.', 1348, $this->source); })())]);
        yield "
    ";
        // line 1349
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1349, $this->source); })()), "quantity", [], "any", false, false, false, 1349), 'widget', ["initialQuantity" => (isset($context["initialQuantity"]) || array_key_exists("initialQuantity", $context) ? $context["initialQuantity"] : (function () { throw new RuntimeError('Variable "initialQuantity" does not exist.', 1349, $this->source); })()), "deltaQuantity" => (isset($context["deltaQuantity"]) || array_key_exists("deltaQuantity", $context) ? $context["deltaQuantity"] : (function () { throw new RuntimeError('Variable "deltaQuantity" does not exist.', 1349, $this->source); })()), "value" => (isset($context["quantity"]) || array_key_exists("quantity", $context) ? $context["quantity"] : (function () { throw new RuntimeError('Variable "quantity" does not exist.', 1349, $this->source); })())]);
        yield "
    ";
        // line 1350
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1350, $this->source); })()), "delta", [], "any", false, false, false, 1350), 'row');
        yield "
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1354
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_delta_quantity_quantity_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delta_quantity_quantity_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delta_quantity_quantity_widget"));

        // line 1355
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1355, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1355)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1355, $this->source); })()), "class", [], "any", false, false, false, 1355), "")) : ("")) . " delta-quantity-quantity"))]);
        // line 1356
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">";
        // line 1357
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 1358
        yield "<span class=\"initial-quantity\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["initialQuantity"]) || array_key_exists("initialQuantity", $context) ? $context["initialQuantity"] : (function () { throw new RuntimeError('Variable "initialQuantity" does not exist.', 1358, $this->source); })()), "html", null, true);
        yield "</span>
    <span class=\"quantity-update";
        // line 1359
        if (((isset($context["deltaQuantity"]) || array_key_exists("deltaQuantity", $context) ? $context["deltaQuantity"] : (function () { throw new RuntimeError('Variable "deltaQuantity" does not exist.', 1359, $this->source); })()) != 0)) {
            yield " quantity-modified";
        }
        yield "\">
      <i class=\"material-icons\">trending_flat</i>
      <span class=\"new-quantity\">";
        // line 1361
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1361, $this->source); })()), "html", null, true);
        yield "</span>
    </span>
    ";
        // line 1363
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1363, $this->source); })()), 'errors');
        yield "
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1367
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_delta_quantity_delta_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delta_quantity_delta_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delta_quantity_delta_row"));

        // line 1368
        yield "  <div class=\"form-group";
        yield from         $this->unwrap()->yieldBlock("widget_type_class", $context, $blocks);
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 1368, $this->source); })()) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new RuntimeError('Variable "force_error" does not exist.', 1368, $this->source); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 1368, $this->source); })()))) {
            yield " has-error";
        }
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 1368)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 1368, $this->source); })()), "class", [], "any", false, false, false, 1368), "html", null, true);
        }
        yield "\">
    <div class=\"delta-quantity-delta-container\">";
        // line 1370
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1370, $this->source); })()), 'label');
        // line 1371
        yield from         $this->unwrap()->yieldBlock("form_prepend_alert", $context, $blocks);
        // line 1372
        yield from         $this->unwrap()->yieldBlock("form_prepend_external_link", $context, $blocks);
        // line 1374
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1374, $this->source); })()), 'widget');
        // line 1376
        yield from         $this->unwrap()->yieldBlock("form_append_alert", $context, $blocks);
        // line 1377
        yield from         $this->unwrap()->yieldBlock("form_append_external_link", $context, $blocks);
        // line 1378
        yield "</div>";
        // line 1379
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1379, $this->source); })()), 'errors');
        // line 1380
        yield from         $this->unwrap()->yieldBlock("form_modify_all_shops", $context, $blocks);
        // line 1381
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1384
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_delta_quantity_delta_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delta_quantity_delta_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delta_quantity_delta_widget"));

        // line 1385
        $context["type"] = "number";
        // line 1386
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1386, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1386)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1386, $this->source); })()), "class", [], "any", false, false, false, 1386), "")) : ("")) . " delta-quantity-delta"))]);
        // line 1387
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1390
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_submittable_input_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submittable_input_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submittable_input_widget"));

        // line 1391
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1391, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1391)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1391, $this->source); })()), "class", [], "any", false, false, false, 1391), "")) : ("")) . " ps-submittable-input-wrapper"))]);
        // line 1392
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">";
        // line 1393
        $context["typeAttr"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1393, $this->source); })()), "vars", [], "any", false, false, false, 1393), "type_attr", [], "any", false, false, false, 1393), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1394
($context["form"] ?? null), "vars", [], "any", false, true, false, 1394), "type_attr", [], "any", false, true, false, 1394), "class", [], "any", true, true, false, 1394)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1394, $this->source); })()), "vars", [], "any", false, false, false, 1394), "type_attr", [], "any", false, false, false, 1394), "class", [], "any", false, false, false, 1394), "")) : ("")) . " submittable-input")), "data-initial-value" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1395
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1395, $this->source); })()), "value", [], "any", false, false, false, 1395), "vars", [], "any", false, false, false, 1395), "value", [], "any", false, false, false, 1395), "value" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1396
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1396, $this->source); })()), "value", [], "any", false, false, false, 1396), "vars", [], "any", false, false, false, 1396), "value", [], "any", false, false, false, 1396)]);
        // line 1399
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1399, $this->source); })()), "value", [], "any", false, false, false, 1399), 'widget', ["attr" => (isset($context["typeAttr"]) || array_key_exists("typeAttr", $context) ? $context["typeAttr"] : (function () { throw new RuntimeError('Variable "typeAttr" does not exist.', 1399, $this->source); })())]);
        // line 1400
        yield from         $this->unwrap()->yieldBlock("submittable_input_button_widget", $context, $blocks);
        // line 1401
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1404
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_submittable_input_button_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submittable_input_button_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submittable_input_button_widget"));

        // line 1405
        yield "  <button type=\"button\" class=\"check-button d-none\">
    <i class=\"material-icons\">check</i>
  </button>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1410
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_submittable_delta_quantity_delta_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submittable_delta_quantity_delta_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submittable_delta_quantity_delta_widget"));

        // line 1411
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1411, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1411)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1411, $this->source); })()), "class", [], "any", false, false, false, 1411), "")) : ("")) . " delta-quantity-delta ps-submittable-input-wrapper"))]);
        // line 1412
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">";
        // line 1413
        $context["attr"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1413, $this->source); })()), "vars", [], "any", false, false, false, 1413), "attr", [], "any", false, false, false, 1413), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1414
($context["form"] ?? null), "vars", [], "any", false, true, false, 1414), "attr", [], "any", false, true, false, 1414), "class", [], "any", true, true, false, 1414)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1414, $this->source); })()), "vars", [], "any", false, false, false, 1414), "attr", [], "any", false, false, false, 1414), "class", [], "any", false, false, false, 1414), "")) : ("")) . " submittable-input")), "data-initial-value" =>         // line 1415
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1415, $this->source); })()), "value" =>         // line 1416
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1416, $this->source); })())]);
        // line 1419
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1419, $this->source); })()), 'widget', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1419, $this->source); })())]);
        // line 1420
        yield from         $this->unwrap()->yieldBlock("submittable_input_button_widget", $context, $blocks);
        // line 1421
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1424
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation_tab_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation_tab_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation_tab_widget"));

        // line 1425
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1425, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1425)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1425, $this->source); })()), "class", [], "any", false, false, false, 1425), "")) : ("")) . " navigation-tab-widget"))]);
        // line 1426
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
  <div id=\"";
        // line 1427
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1427, $this->source); })()), "vars", [], "any", false, false, false, 1427), "id", [], "any", false, false, false, 1427), "html", null, true);
        yield "-tabs\" class=\"tabs js-tabs\">
    <div class=\"arrow d-xl-none js-arrow left-arrow float-left\">
      <i class=\"material-icons rtl-flip hide\">chevron_left</i>
    </div>

    <ul class=\"nav nav-tabs js-nav-tabs\" id=\"form-nav\" role=\"tablist\">
    ";
        // line 1433
        $context["firstRenderedChild"] = true;
        // line 1434
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1434, $this->source); })()), "children", [], "any", false, false, false, 1434));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 1435
            yield "      ";
            if (((( !CoreExtension::getAttribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 1435) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1435), "name", [], "any", false, false, false, 1435) != "_toolbar_buttons")) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1435), "name", [], "any", false, false, false, 1435) != "_footer_buttons")) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1435), "name", [], "any", false, false, false, 1435) != "_token"))) {
                // line 1436
                yield "      <li id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1436), "id", [], "any", false, false, false, 1436), "html", null, true);
                yield "-tab-nav\" class=\"nav-item";
                if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1436), "valid", [], "any", false, false, false, 1436)) {
                    yield " has-error";
                }
                yield "\">
        <a href=\"#";
                // line 1437
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1437), "id", [], "any", false, false, false, 1437), "html", null, true);
                yield "-tab\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link";
                if ((isset($context["firstRenderedChild"]) || array_key_exists("firstRenderedChild", $context) ? $context["firstRenderedChild"] : (function () { throw new RuntimeError('Variable "firstRenderedChild" does not exist.', 1437, $this->source); })())) {
                    yield " active";
                }
                yield "\">
          ";
                // line 1438
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1438), "label", [], "any", false, false, false, 1438), "html", null, true);
                yield "
        </a>
      </li>
      ";
                // line 1441
                $context["firstRenderedChild"] = false;
                // line 1442
                yield "      ";
            }
            // line 1443
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1444
        yield "    </ul>

    <div class=\"arrow d-xl-none js-arrow right-arrow visible float-right\">
      <i class=\"material-icons rtl-flip hide\">chevron_right</i>
    </div>

    ";
        // line 1450
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1450, $this->source); })()), "offsetExists", ["_toolbar_buttons"], "method", false, false, false, 1450)) {
            // line 1451
            yield "    <div class=\"navigation-tab-widget-toolbar toolbar text-md-right\">
      ";
            // line 1452
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1452, $this->source); })()), "_toolbar_buttons", [], "any", false, false, false, 1452), 'widget');
            yield "
    </div>
    ";
        }
        // line 1455
        yield "  </div>

  <div id=\"";
        // line 1457
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1457, $this->source); })()), "vars", [], "any", false, false, false, 1457), "id", [], "any", false, false, false, 1457), "html", null, true);
        yield "-tabs-content\" class=\"tab-content\">
    ";
        // line 1458
        $context["firstRenderedChild"] = true;
        // line 1459
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1459, $this->source); })()), "children", [], "any", false, false, false, 1459));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 1460
            yield "      ";
            if ((( !CoreExtension::getAttribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 1460) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1460), "name", [], "any", false, false, false, 1460) != "_footer_buttons")) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1460), "name", [], "any", false, false, false, 1460) != "_token"))) {
                // line 1461
                yield "      <div role=\"tabpanel\" class=\"form-contenttab tab-pane container-fluid";
                if ((isset($context["firstRenderedChild"]) || array_key_exists("firstRenderedChild", $context) ? $context["firstRenderedChild"] : (function () { throw new RuntimeError('Variable "firstRenderedChild" does not exist.', 1461, $this->source); })())) {
                    yield " active";
                }
                yield "\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1461), "id", [], "any", false, false, false, 1461), "html", null, true);
                yield "-tab\">
        ";
                // line 1462
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 1462), "label_tab", [], "any", true, true, false, 1462)) {
                    // line 1463
                    yield "          ";
                    // line 1464
                    yield "          ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', ["required" => false] + (CoreExtension::testEmpty($_label_ = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1464), "label_tab", [], "any", false, false, false, 1464)) ? [] : ["label" => $_label_]));
                    yield "
        ";
                }
                // line 1466
                yield "        ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
                yield "
        ";
                // line 1467
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                yield "
      </div>
      ";
                // line 1469
                $context["firstRenderedChild"] = false;
                // line 1470
                yield "      ";
            }
            // line 1471
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1472
        yield "  </div>

  ";
        // line 1474
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1474, $this->source); })()), "offsetExists", ["_footer_buttons"], "method", false, false, false, 1474)) {
            // line 1475
            yield "    <div class=\"navigation-tab-widget-footer\">
      ";
            // line 1476
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1476, $this->source); })()), "_footer_buttons", [], "any", false, false, false, 1476), 'widget');
            yield "
    </div>
  ";
        }
        // line 1479
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1482
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_accordion_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "accordion_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "accordion_widget"));

        // line 1483
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1483, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source,         // line 1484
($context["attr"] ?? null), "class", [], "any", true, true, false, 1484)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1484, $this->source); })()), "class", [], "any", false, false, false, 1484), "")) : ("")) . " accordion accordion-form"))]);
        // line 1486
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">
    ";
        // line 1487
        $context["firstChild"] = true;
        // line 1488
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1488, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 1489
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1489), "compound", [], "any", false, false, false, 1489)) {
                // line 1490
                yield "      ";
                $context["hasError"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1490), "valid", [], "any", false, false, false, 1490) != true);
                // line 1491
                yield "      ";
                $context["isExpanded"] = ((((isset($context["firstChild"]) || array_key_exists("firstChild", $context) ? $context["firstChild"] : (function () { throw new RuntimeError('Variable "firstChild" does not exist.', 1491, $this->source); })()) && (isset($context["expand_first"]) || array_key_exists("expand_first", $context) ? $context["expand_first"] : (function () { throw new RuntimeError('Variable "expand_first" does not exist.', 1491, $this->source); })())) || ((isset($context["hasError"]) || array_key_exists("hasError", $context) ? $context["hasError"] : (function () { throw new RuntimeError('Variable "hasError" does not exist.', 1491, $this->source); })()) && (isset($context["expand_on_error"]) || array_key_exists("expand_on_error", $context) ? $context["expand_on_error"] : (function () { throw new RuntimeError('Variable "expand_on_error" does not exist.', 1491, $this->source); })()))) || (isset($context["expand_all"]) || array_key_exists("expand_all", $context) ? $context["expand_all"] : (function () { throw new RuntimeError('Variable "expand_all" does not exist.', 1491, $this->source); })()));
                // line 1492
                yield "      <div class=\"card\">
        <div class=\"card-header\" id=\"";
                // line 1493
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1493), "id", [], "any", false, false, false, 1493), "html", null, true);
                yield "_accordion_header\">
          <h2 class=\"mb-0\">
            <button
              class=\"accordion-form-button ";
                // line 1496
                if ((isset($context["hasError"]) || array_key_exists("hasError", $context) ? $context["hasError"] : (function () { throw new RuntimeError('Variable "hasError" does not exist.', 1496, $this->source); })())) {
                    yield " has-error ";
                }
                yield " btn btn-block text-left";
                if ( !(isset($context["isExpanded"]) || array_key_exists("isExpanded", $context) ? $context["isExpanded"] : (function () { throw new RuntimeError('Variable "isExpanded" does not exist.', 1496, $this->source); })())) {
                    yield " collapsed";
                }
                yield "\"
              type=\"button\"
              data-toggle=\"collapse\"
              data-target=\"#";
                // line 1499
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1499), "id", [], "any", false, false, false, 1499), "html", null, true);
                yield "_accordion\"
              aria-expanded=\"";
                // line 1500
                if ((isset($context["isExpanded"]) || array_key_exists("isExpanded", $context) ? $context["isExpanded"] : (function () { throw new RuntimeError('Variable "isExpanded" does not exist.', 1500, $this->source); })())) {
                    yield "true";
                } else {
                    yield "false";
                }
                yield "\"
              aria-controls=\"";
                // line 1501
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1501), "id", [], "any", false, false, false, 1501), "html", null, true);
                yield "_accordion\">
              <span class=\"accordion-form-button-label\">";
                // line 1502
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1502), "label", [], "any", false, false, false, 1502), "html", null, true);
                yield "</span>
              ";
                // line 1503
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 1503), "label_subtitle", [], "any", true, true, false, 1503)) {
                    // line 1504
                    yield "                <span class=\"accordion-form-button-sub-label\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1504), "label_subtitle", [], "any", false, false, false, 1504), "html", null, true);
                    yield "</span>
              ";
                }
                // line 1506
                yield "              <i class=\"material-icons\"></i>
            </button>
          </h2>
        </div>

        <div id=\"";
                // line 1511
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1511), "id", [], "any", false, false, false, 1511), "html", null, true);
                yield "_accordion\" class=\"collapse";
                if ((isset($context["isExpanded"]) || array_key_exists("isExpanded", $context) ? $context["isExpanded"] : (function () { throw new RuntimeError('Variable "isExpanded" does not exist.', 1511, $this->source); })())) {
                    yield " show";
                }
                yield "\" aria-labelledby=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1511), "id", [], "any", false, false, false, 1511), "html", null, true);
                yield "_accordion_header\" ";
                if ((isset($context["display_one"]) || array_key_exists("display_one", $context) ? $context["display_one"] : (function () { throw new RuntimeError('Variable "display_one" does not exist.', 1511, $this->source); })())) {
                    yield "data-parent=\"#";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1511, $this->source); })()), "vars", [], "any", false, false, false, 1511), "id", [], "any", false, false, false, 1511), "html", null, true);
                    yield "\"";
                }
                yield ">
          <div class=\"card-body\">
            ";
                // line 1513
                $context["childAttr"] = ["class" => "accordion-sub-form"];
                // line 1514
                yield "            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => (isset($context["childAttr"]) || array_key_exists("childAttr", $context) ? $context["childAttr"] : (function () { throw new RuntimeError('Variable "childAttr" does not exist.', 1514, $this->source); })())]);
                yield "
            ";
                // line 1515
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
                yield "
          </div>
        </div>
      </div>
      ";
                // line 1519
                $context["firstChild"] = false;
                // line 1520
                yield "      ";
            }
            // line 1521
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1522
        yield "
    ";
        // line 1524
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1524, $this->source); })()), 'rest');
        yield "
  </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1528
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_collection_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_collection_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_collection_widget"));

        // line 1529
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1529, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source,         // line 1530
($context["attr"] ?? null), "class", [], "any", true, true, false, 1530)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1530, $this->source); })()), "class", [], "any", false, false, false, 1530), "")) : ("")) . " form-group btn-collection btn-toolbar")), "role" => "group", "style" => ("justify-content: " .         // line 1532
(isset($context["justify_content"]) || array_key_exists("justify_content", $context) ? $context["justify_content"] : (function () { throw new RuntimeError('Variable "justify_content" does not exist.', 1532, $this->source); })()))]);
        // line 1534
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">
    ";
        // line 1535
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["button_groups"]) || array_key_exists("button_groups", $context) ? $context["button_groups"] : (function () { throw new RuntimeError('Variable "button_groups" does not exist.', 1535, $this->source); })()));
        foreach ($context['_seq'] as $context["group"] => $context["buttons"]) {
            // line 1536
            yield "      <div class=\"";
            if ((isset($context["use_button_groups"]) || array_key_exists("use_button_groups", $context) ? $context["use_button_groups"] : (function () { throw new RuntimeError('Variable "use_button_groups" does not exist.', 1536, $this->source); })())) {
                yield "btn-group ";
            }
            yield "group-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["group"], "html", null, true);
            yield "\">
        ";
            // line 1538
            yield "        ";
            $context["inlineButtonsLimit"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1538, $this->source); })()), "vars", [], "any", false, false, false, 1538), "inline_buttons_limit", [], "any", false, false, false, 1538);
            // line 1539
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["buttons"]);
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
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 1540
                yield "          ";
                $context["action"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1540, $this->source); })()), $context["button"], [], "any", false, false, false, 1540);
                // line 1541
                yield "          ";
                if ((((isset($context["inlineButtonsLimit"]) || array_key_exists("inlineButtonsLimit", $context) ? $context["inlineButtonsLimit"] : (function () { throw new RuntimeError('Variable "inlineButtonsLimit" does not exist.', 1541, $this->source); })()) === null) || (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 1541) <= (isset($context["inlineButtonsLimit"]) || array_key_exists("inlineButtonsLimit", $context) ? $context["inlineButtonsLimit"] : (function () { throw new RuntimeError('Variable "inlineButtonsLimit" does not exist.', 1541, $this->source); })())))) {
                    // line 1542
                    yield "            ";
                    // line 1543
                    yield "            ";
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1543, $this->source); })()), "vars", [], "any", false, false, false, 1543), "use_inline_labels", [], "any", false, false, false, 1543)) {
                        // line 1544
                        yield "              ";
                        $context["actionLabel"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 1544, $this->source); })()), "vars", [], "any", false, false, false, 1544), "label", [], "any", false, false, false, 1544);
                        // line 1545
                        yield "            ";
                    } else {
                        // line 1546
                        yield "              ";
                        $context["actionLabel"] = "";
                        // line 1547
                        yield "            ";
                    }
                    // line 1548
                    yield "            ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 1548, $this->source); })()), 'widget', ["label" => (isset($context["actionLabel"]) || array_key_exists("actionLabel", $context) ? $context["actionLabel"] : (function () { throw new RuntimeError('Variable "actionLabel" does not exist.', 1548, $this->source); })())]);
                    yield "
          ";
                }
                // line 1550
                yield "        ";
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
            unset($context['_seq'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1551
            yield "
        ";
            // line 1553
            yield "        ";
            if (( !((isset($context["inlineButtonsLimit"]) || array_key_exists("inlineButtonsLimit", $context) ? $context["inlineButtonsLimit"] : (function () { throw new RuntimeError('Variable "inlineButtonsLimit" does not exist.', 1553, $this->source); })()) === null) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["buttons"]) > (isset($context["inlineButtonsLimit"]) || array_key_exists("inlineButtonsLimit", $context) ? $context["inlineButtonsLimit"] : (function () { throw new RuntimeError('Variable "inlineButtonsLimit" does not exist.', 1553, $this->source); })())))) {
                // line 1554
                yield "          <a id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1554, $this->source); })()), "vars", [], "any", false, false, false, 1554), "id", [], "any", false, false, false, 1554), "html", null, true);
                yield "_dropdown\" class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split no-rotate\"
             data-toggle=\"dropdown\"
             aria-haspopup=\"true\"
             aria-expanded=\"false\"
          >
          </a>
          <div class=\"dropdown-menu\">
            ";
                // line 1561
                $context["remainingButtons"] = Twig\Extension\CoreExtension::slice($this->env->getCharset(), $context["buttons"], (isset($context["inlineButtonsLimit"]) || array_key_exists("inlineButtonsLimit", $context) ? $context["inlineButtonsLimit"] : (function () { throw new RuntimeError('Variable "inlineButtonsLimit" does not exist.', 1561, $this->source); })()));
                // line 1562
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["remainingButtons"]) || array_key_exists("remainingButtons", $context) ? $context["remainingButtons"] : (function () { throw new RuntimeError('Variable "remainingButtons" does not exist.', 1562, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                    // line 1563
                    yield "              ";
                    $context["action"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1563, $this->source); })()), $context["button"], [], "any", false, false, false, 1563);
                    // line 1564
                    yield "              ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 1564, $this->source); })()), 'widget', ["attr" => ["class" => ("dropdown-item " . Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 1565
($context["action"] ?? null), "vars", [], "any", false, true, false, 1565), "attr", [], "any", false, true, false, 1565), "class", [], "any", true, true, false, 1565)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 1565, $this->source); })()), "vars", [], "any", false, false, false, 1565), "attr", [], "any", false, false, false, 1565), "class", [], "any", false, false, false, 1565), "")) : (""))))]]);
                    // line 1566
                    yield "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['button'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1568
                yield "          </div>
        ";
            }
            // line 1570
            yield "      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['group'], $context['buttons'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1572
        yield "  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1575
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_avatar_url_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "avatar_url_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "avatar_url_row"));

        // line 1576
        yield "  ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1576, $this->source); })()), 'row', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1576, $this->source); })())]);
        yield "

  <div class=\"form-group row\">
    <label class=\"form-control-label\"></label>
    <div class=\"col-sm\">
      <img class=\"img-thumbnail clickable-avatar\" src=\"";
        // line 1581
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1581, $this->source); })()), "parent", [], "any", false, false, false, 1581), "vars", [], "any", false, false, false, 1581), "value", [], "any", false, false, false, 1581), "avatar_url", [], "any", false, false, false, 1581), "html", null, true);
        yield "\" alt=\"\">
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1586
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_change_password_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "change_password_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "change_password_row"));

        // line 1587
        yield "  <div class=\"form-group row\">
    <label class=\"form-control-label\">
      ";
        // line 1589
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password", [], "Admin.Global"), "html", null, true);
        yield "
    </label>
    <div class=\"col-sm\">
      ";
        // line 1593
        yield "      ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1593, $this->source); })()), "children", [], "any", false, false, false, 1593), "change_password_button", [], "any", false, false, false, 1593), 'row');
        yield "

      <div class=\"card card-body js-change-password-block d-none\">
        ";
        // line 1597
        yield "        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1597, $this->source); })()), "children", [], "any", false, false, false, 1597), "old_password", [], "any", false, false, false, 1597), 'row');
        yield "

        ";
        // line 1600
        yield "        ";
        // line 1601
        yield "        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1601, $this->source); })()), "children", [], "any", false, false, false, 1601), "new_password", [], "any", false, false, false, 1601), 'row');
        yield "

        <div class=\"form-group row\">
          <label class=\"form-control-label\"></label>
          <div class=\"col-sm\">
            ";
        // line 1606
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1606, $this->source); })()), "children", [], "any", false, false, false, 1606), "generated_password", [], "any", false, false, false, 1606), 'widget');
        yield "
          </div>
          <div class=\"col-sm\">
            ";
        // line 1609
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1609, $this->source); })()), "children", [], "any", false, false, false, 1609), "generate_password_button", [], "any", false, false, false, 1609), 'widget');
        yield "
          </div>
        </div>
        ";
        // line 1612
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1612, $this->source); })()), "children", [], "any", false, false, false, 1612), "cancel_button", [], "any", false, false, false, 1612), 'row');
        yield "

        ";
        // line 1615
        yield "        <div class=\"js-password-strength-feedback d-none\">
          <span class=\"strength-low\">";
        // line 1616
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invalid", [], "Admin.Advparameters.Help"), "html", null, true);
        yield "</span>
          <span class=\"strength-medium\">";
        // line 1617
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Okay", [], "Admin.Advparameters.Help"), "html", null, true);
        yield "</span>
          <span class=\"strength-high\">";
        // line 1618
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Good", [], "Admin.Advparameters.Help"), "html", null, true);
        yield "</span>
          <span class=\"strength-extreme\">";
        // line 1619
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fabulous", [], "Admin.Advparameters.Help"), "html", null, true);
        yield "</span>
        </div>
      </div>
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1626
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_price_reduction_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "price_reduction_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "price_reduction_widget"));

        // line 1627
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1627, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1627)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1627, $this->source); })()), "class", [], "any", false, false, false, 1627), "")) : ("")) . " reduction-widget row"))]);
        // line 1628
        yield "  <div ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">
    ";
        // line 1629
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1629, $this->source); })()), "children", [], "any", false, false, false, 1629));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 1630
            yield "      ";
            $_v9 = $context;
            $_v10 = ["row_attr" => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1630), "row_attr", [], "any", false, false, false, 1630), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 1630), "row_attr", [], "any", false, true, false, 1630), "class", [], "any", true, true, false, 1630)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1630), "row_attr", [], "any", false, false, false, 1630), "class", [], "any", false, false, false, 1630), "")) : ("")) . " col col-md-3"))])];
            if (!is_iterable($_v10)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 1630, $this->getSourceContext());
            }
            $_v10 = CoreExtension::toArray($_v10);
            $context = $_v10 + $context + $this->env->getGlobals();
            // line 1631
            yield "      <div ";
            yield from             $this->unwrap()->yieldBlock("row_attributes", $context, $blocks);
            yield ">
      ";
            $context = $_v9;
            // line 1633
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            yield "
        ";
            // line 1634
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
            yield "
      </div>
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
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1637
        yield "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1640
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_image_with_preview_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image_with_preview_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image_with_preview_widget"));

        // line 1641
        yield "  ";
        if ((array_key_exists("data", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 1641, $this->source); })())))) {
            // line 1642
            yield "    <div>
      ";
            // line 1643
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 1643, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["preview_image"]) {
                // line 1646
                yield "        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["preview_image"], "image_path", [], "any", true, true, false, 1646)) {
                    // line 1647
                    yield "          ";
                    if ((isset($context["can_be_deleted"]) || array_key_exists("can_be_deleted", $context) ? $context["can_be_deleted"] : (function () { throw new RuntimeError('Variable "can_be_deleted" does not exist.', 1647, $this->source); })())) {
                        // line 1648
                        yield "            <figure class=\"figure\">
              <img src=\"";
                        // line 1649
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preview_image"], "image_path", [], "any", false, false, false, 1649), "html", null, true);
                        yield "\" class=\"figure-img img-fluid img-thumbnail\">
              <figcaption class=\"figure-caption\">
                ";
                        // line 1651
                        if ((isset($context["show_size"]) || array_key_exists("show_size", $context) ? $context["show_size"] : (function () { throw new RuntimeError('Variable "show_size" does not exist.', 1651, $this->source); })())) {
                            // line 1652
                            yield "                  <p>";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File size", [], "Admin.Advparameters.Feature"), "html", null, true);
                            yield " ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preview_image"], "size", [], "any", false, false, false, 1652), "html", null, true);
                            yield "</p>
                ";
                        }
                        // line 1654
                        yield "                <button class=\"btn btn-outline-danger btn-sm js-form-submit-btn\"
                        data-form-submit-url=\"";
                        // line 1655
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preview_image"], "delete_path", [], "any", false, false, false, 1655), "html", null, true);
                        yield "\"
                >
                  <i class=\"material-icons\">
                    delete_forever
                  </i>
                  ";
                        // line 1660
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Admin.Actions"), "html", null, true);
                        yield "
                </button>
              </figcaption>
            </figure>
          ";
                    } else {
                        // line 1665
                        yield "            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 1665, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["preview_image"]) {
                            // line 1666
                            yield "              <figure class=\"figure\">
                <img src=\"";
                            // line 1667
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preview_image"], "image_path", [], "any", false, false, false, 1667), "html", null, true);
                            yield "\" class=\"figure-img img-fluid img-thumbnail\">
                ";
                            // line 1668
                            if ((isset($context["show_size"]) || array_key_exists("show_size", $context) ? $context["show_size"] : (function () { throw new RuntimeError('Variable "show_size" does not exist.', 1668, $this->source); })())) {
                                // line 1669
                                yield "                  <figcaption class=\"figure-caption\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File size", [], "Admin.Advparameters.Feature"), "html", null, true);
                                yield " ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preview_image"], "size", [], "any", false, false, false, 1669), "html", null, true);
                                yield "</figcaption>
                ";
                            }
                            // line 1671
                            yield "              </figure>
            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['preview_image'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1673
                        yield "          ";
                    }
                    // line 1674
                    yield "      ";
                }
                // line 1675
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['preview_image'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1676
            yield "    </div>
  ";
        }
        // line 1678
        yield "  ";
        yield from         $this->unwrap()->yieldBlock("file_widget", $context, $blocks);
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
        return "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  6168 => 1678,  6164 => 1676,  6158 => 1675,  6155 => 1674,  6152 => 1673,  6145 => 1671,  6137 => 1669,  6135 => 1668,  6131 => 1667,  6128 => 1666,  6123 => 1665,  6115 => 1660,  6107 => 1655,  6104 => 1654,  6096 => 1652,  6094 => 1651,  6089 => 1649,  6086 => 1648,  6083 => 1647,  6080 => 1646,  6076 => 1643,  6073 => 1642,  6070 => 1641,  6057 => 1640,  6046 => 1637,  6029 => 1634,  6024 => 1633,  6018 => 1631,  6009 => 1630,  5992 => 1629,  5987 => 1628,  5985 => 1627,  5972 => 1626,  5955 => 1619,  5951 => 1618,  5947 => 1617,  5943 => 1616,  5940 => 1615,  5935 => 1612,  5929 => 1609,  5923 => 1606,  5914 => 1601,  5912 => 1600,  5906 => 1597,  5899 => 1593,  5893 => 1589,  5889 => 1587,  5876 => 1586,  5861 => 1581,  5852 => 1576,  5839 => 1575,  5827 => 1572,  5820 => 1570,  5816 => 1568,  5809 => 1566,  5807 => 1565,  5805 => 1564,  5802 => 1563,  5797 => 1562,  5795 => 1561,  5784 => 1554,  5781 => 1553,  5778 => 1551,  5764 => 1550,  5758 => 1548,  5755 => 1547,  5752 => 1546,  5749 => 1545,  5746 => 1544,  5743 => 1543,  5741 => 1542,  5738 => 1541,  5735 => 1540,  5717 => 1539,  5714 => 1538,  5705 => 1536,  5701 => 1535,  5696 => 1534,  5694 => 1532,  5693 => 1530,  5692 => 1529,  5679 => 1528,  5665 => 1524,  5662 => 1522,  5656 => 1521,  5653 => 1520,  5651 => 1519,  5644 => 1515,  5639 => 1514,  5637 => 1513,  5620 => 1511,  5613 => 1506,  5607 => 1504,  5605 => 1503,  5601 => 1502,  5597 => 1501,  5589 => 1500,  5585 => 1499,  5573 => 1496,  5567 => 1493,  5564 => 1492,  5561 => 1491,  5558 => 1490,  5555 => 1489,  5550 => 1488,  5548 => 1487,  5543 => 1486,  5541 => 1484,  5540 => 1483,  5527 => 1482,  5515 => 1479,  5509 => 1476,  5506 => 1475,  5504 => 1474,  5500 => 1472,  5494 => 1471,  5491 => 1470,  5489 => 1469,  5484 => 1467,  5479 => 1466,  5473 => 1464,  5471 => 1463,  5469 => 1462,  5460 => 1461,  5457 => 1460,  5452 => 1459,  5450 => 1458,  5446 => 1457,  5442 => 1455,  5436 => 1452,  5433 => 1451,  5431 => 1450,  5423 => 1444,  5417 => 1443,  5414 => 1442,  5412 => 1441,  5406 => 1438,  5398 => 1437,  5389 => 1436,  5386 => 1435,  5381 => 1434,  5379 => 1433,  5370 => 1427,  5365 => 1426,  5363 => 1425,  5350 => 1424,  5338 => 1421,  5336 => 1420,  5334 => 1419,  5332 => 1416,  5331 => 1415,  5330 => 1414,  5329 => 1413,  5325 => 1412,  5323 => 1411,  5310 => 1410,  5296 => 1405,  5283 => 1404,  5271 => 1401,  5269 => 1400,  5267 => 1399,  5265 => 1396,  5264 => 1395,  5263 => 1394,  5262 => 1393,  5258 => 1392,  5256 => 1391,  5243 => 1390,  5232 => 1387,  5230 => 1386,  5228 => 1385,  5215 => 1384,  5203 => 1381,  5201 => 1380,  5199 => 1379,  5197 => 1378,  5195 => 1377,  5193 => 1376,  5191 => 1374,  5189 => 1372,  5187 => 1371,  5185 => 1370,  5173 => 1368,  5160 => 1367,  5146 => 1363,  5141 => 1361,  5134 => 1359,  5129 => 1358,  5127 => 1357,  5123 => 1356,  5121 => 1355,  5108 => 1354,  5094 => 1350,  5090 => 1349,  5086 => 1348,  5081 => 1347,  5078 => 1346,  5075 => 1345,  5072 => 1344,  5069 => 1343,  5067 => 1342,  5064 => 1341,  5051 => 1340,  5036 => 1336,  5026 => 1334,  5024 => 1333,  5022 => 1332,  5020 => 1331,  5007 => 1330,  4993 => 1326,  4986 => 1325,  4984 => 1324,  4982 => 1323,  4969 => 1322,  4958 => 1319,  4956 => 1318,  4950 => 1315,  4947 => 1314,  4944 => 1313,  4940 => 1310,  4934 => 1308,  4932 => 1307,  4926 => 1305,  4924 => 1304,  4922 => 1303,  4918 => 1301,  4912 => 1298,  4909 => 1297,  4906 => 1296,  4901 => 1294,  4899 => 1293,  4897 => 1292,  4884 => 1291,  4869 => 1286,  4865 => 1284,  4852 => 1283,  4839 => 1279,  4832 => 1275,  4828 => 1274,  4824 => 1272,  4821 => 1271,  4812 => 1268,  4809 => 1267,  4804 => 1266,  4800 => 1264,  4791 => 1262,  4787 => 1261,  4784 => 1260,  4782 => 1259,  4777 => 1258,  4775 => 1257,  4772 => 1256,  4769 => 1255,  4760 => 1252,  4757 => 1251,  4752 => 1250,  4746 => 1247,  4743 => 1246,  4741 => 1245,  4733 => 1244,  4731 => 1243,  4718 => 1242,  4706 => 1238,  4704 => 1237,  4691 => 1236,  4679 => 1232,  4677 => 1231,  4664 => 1230,  4651 => 1226,  4642 => 1224,  4638 => 1223,  4633 => 1222,  4631 => 1221,  4626 => 1219,  4623 => 1218,  4620 => 1216,  4618 => 1215,  4616 => 1214,  4603 => 1213,  4589 => 1210,  4576 => 1209,  4564 => 1206,  4559 => 1205,  4555 => 1204,  4552 => 1203,  4546 => 1202,  4538 => 1200,  4535 => 1199,  4531 => 1198,  4528 => 1197,  4526 => 1196,  4513 => 1195,  4500 => 1191,  4494 => 1189,  4488 => 1187,  4485 => 1186,  4478 => 1184,  4472 => 1181,  4467 => 1180,  4465 => 1179,  4462 => 1178,  4449 => 1177,  4437 => 1173,  4434 => 1172,  4421 => 1171,  4409 => 1167,  4406 => 1166,  4393 => 1165,  4378 => 1161,  4375 => 1160,  4357 => 1158,  4355 => 1157,  4352 => 1156,  4339 => 1155,  4324 => 1150,  4321 => 1149,  4318 => 1148,  4305 => 1147,  4290 => 1142,  4287 => 1141,  4284 => 1140,  4271 => 1139,  4260 => 1136,  4257 => 1135,  4255 => 1134,  4253 => 1133,  4251 => 1132,  4249 => 1131,  4247 => 1130,  4234 => 1129,  4223 => 1126,  4220 => 1125,  4218 => 1124,  4216 => 1123,  4214 => 1122,  4212 => 1121,  4210 => 1120,  4197 => 1119,  4184 => 1116,  4179 => 1115,  4166 => 1114,  4153 => 1111,  4148 => 1110,  4135 => 1109,  4123 => 1106,  4117 => 1103,  4114 => 1102,  4112 => 1101,  4109 => 1100,  4106 => 1098,  4103 => 1096,  4101 => 1095,  4099 => 1094,  4097 => 1093,  4095 => 1091,  4093 => 1090,  4090 => 1089,  4084 => 1086,  4081 => 1085,  4079 => 1084,  4076 => 1083,  4074 => 1082,  4071 => 1081,  4058 => 1080,  4044 => 1075,  4042 => 1073,  4041 => 1071,  4040 => 1070,  4034 => 1067,  4030 => 1065,  4027 => 1063,  4024 => 1061,  4022 => 1060,  4020 => 1056,  4018 => 1055,  4005 => 1054,  3992 => 1051,  3985 => 1047,  3980 => 1045,  3976 => 1044,  3971 => 1041,  3968 => 1039,  3965 => 1037,  3963 => 1036,  3960 => 1035,  3947 => 1034,  3929 => 1026,  3925 => 1025,  3921 => 1024,  3917 => 1022,  3915 => 1021,  3911 => 1019,  3908 => 1018,  3895 => 1017,  3880 => 1012,  3875 => 1011,  3873 => 1010,  3871 => 1009,  3865 => 1006,  3863 => 1005,  3858 => 1004,  3856 => 1002,  3853 => 1001,  3851 => 999,  3849 => 998,  3847 => 997,  3845 => 992,  3844 => 991,  3837 => 987,  3833 => 985,  3820 => 984,  3807 => 979,  3805 => 978,  3803 => 975,  3802 => 974,  3801 => 973,  3800 => 972,  3797 => 970,  3794 => 969,  3792 => 968,  3789 => 967,  3784 => 965,  3782 => 964,  3780 => 963,  3777 => 961,  3774 => 960,  3761 => 959,  3749 => 956,  3743 => 954,  3737 => 952,  3735 => 951,  3722 => 950,  3711 => 947,  3706 => 944,  3695 => 942,  3691 => 941,  3687 => 940,  3682 => 938,  3677 => 936,  3673 => 934,  3667 => 932,  3665 => 931,  3659 => 927,  3656 => 926,  3647 => 923,  3640 => 922,  3637 => 921,  3634 => 920,  3631 => 919,  3628 => 918,  3625 => 917,  3621 => 916,  3614 => 915,  3612 => 914,  3599 => 913,  3586 => 909,  3577 => 906,  3556 => 905,  3552 => 904,  3548 => 902,  3544 => 900,  3534 => 896,  3524 => 895,  3521 => 894,  3517 => 893,  3514 => 892,  3512 => 891,  3507 => 890,  3494 => 889,  3483 => 836,  3476 => 882,  3469 => 880,  3462 => 878,  3458 => 876,  3455 => 875,  3449 => 873,  3443 => 871,  3441 => 870,  3438 => 869,  3435 => 868,  3433 => 867,  3430 => 866,  3426 => 865,  3421 => 863,  3417 => 861,  3413 => 860,  3408 => 857,  3393 => 855,  3387 => 853,  3381 => 850,  3375 => 847,  3371 => 845,  3369 => 844,  3366 => 843,  3349 => 842,  3345 => 841,  3335 => 837,  3332 => 836,  3319 => 835,  3305 => 832,  3303 => 798,  3296 => 828,  3286 => 824,  3282 => 822,  3278 => 821,  3270 => 815,  3262 => 814,  3258 => 812,  3254 => 810,  3252 => 809,  3240 => 799,  3237 => 798,  3224 => 797,  3210 => 790,  3201 => 787,  3197 => 786,  3190 => 781,  3187 => 780,  3174 => 779,  3161 => 774,  3153 => 771,  3150 => 770,  3146 => 769,  3141 => 766,  3133 => 760,  3128 => 757,  3121 => 754,  3116 => 752,  3109 => 748,  3105 => 746,  3103 => 745,  3097 => 742,  3093 => 741,  3090 => 740,  3084 => 737,  3074 => 734,  3070 => 733,  3067 => 731,  3065 => 730,  3059 => 728,  3057 => 727,  3055 => 725,  3052 => 723,  3039 => 722,  3024 => 718,  3018 => 716,  3016 => 715,  3003 => 714,  2992 => 709,  2990 => 708,  2983 => 707,  2981 => 706,  2979 => 705,  2966 => 704,  2954 => 700,  2952 => 699,  2948 => 698,  2946 => 697,  2943 => 695,  2941 => 694,  2937 => 693,  2935 => 692,  2933 => 691,  2931 => 690,  2918 => 689,  2906 => 686,  2901 => 683,  2899 => 682,  2897 => 681,  2895 => 680,  2881 => 679,  2878 => 678,  2874 => 676,  2872 => 675,  2870 => 673,  2868 => 671,  2853 => 670,  2851 => 669,  2848 => 668,  2845 => 667,  2842 => 666,  2839 => 665,  2836 => 664,  2833 => 663,  2830 => 662,  2827 => 661,  2824 => 660,  2821 => 659,  2818 => 658,  2816 => 657,  2803 => 656,  2792 => 653,  2779 => 652,  2768 => 649,  2755 => 648,  2744 => 645,  2742 => 644,  2729 => 642,  2713 => 633,  2696 => 630,  2692 => 629,  2688 => 628,  2685 => 627,  2668 => 626,  2662 => 622,  2658 => 621,  2654 => 620,  2646 => 615,  2640 => 612,  2635 => 611,  2622 => 610,  2604 => 606,  2602 => 605,  2598 => 604,  2596 => 603,  2583 => 602,  2572 => 599,  2570 => 579,  2563 => 595,  2549 => 594,  2541 => 593,  2537 => 591,  2532 => 590,  2528 => 589,  2524 => 588,  2520 => 587,  2516 => 586,  2511 => 585,  2508 => 584,  2491 => 583,  2487 => 582,  2467 => 581,  2464 => 580,  2461 => 579,  2448 => 578,  2437 => 553,  2433 => 575,  2426 => 571,  2420 => 568,  2416 => 567,  2411 => 565,  2407 => 563,  2405 => 562,  2400 => 560,  2394 => 557,  2390 => 556,  2386 => 554,  2383 => 553,  2370 => 552,  2359 => 536,  2353 => 547,  2348 => 545,  2343 => 544,  2341 => 543,  2337 => 542,  2331 => 539,  2327 => 537,  2324 => 536,  2311 => 535,  2300 => 521,  2294 => 531,  2276 => 524,  2273 => 523,  2270 => 522,  2267 => 521,  2254 => 520,  2243 => 517,  2238 => 514,  2229 => 511,  2224 => 509,  2221 => 508,  2217 => 507,  2213 => 506,  2207 => 503,  2202 => 501,  2194 => 495,  2192 => 494,  2189 => 493,  2180 => 490,  2176 => 489,  2173 => 488,  2170 => 487,  2167 => 486,  2165 => 485,  2162 => 484,  2159 => 483,  2156 => 482,  2152 => 481,  2147 => 479,  2134 => 478,  2123 => 475,  2118 => 472,  2107 => 470,  2103 => 469,  2099 => 468,  2093 => 465,  2088 => 463,  2080 => 457,  2078 => 456,  2075 => 455,  2059 => 453,  2057 => 452,  2054 => 450,  2051 => 449,  2049 => 448,  2046 => 447,  2043 => 446,  2040 => 445,  2023 => 444,  2018 => 442,  2005 => 441,  1994 => 438,  1991 => 436,  1989 => 435,  1976 => 434,  1963 => 430,  1954 => 427,  1950 => 426,  1929 => 425,  1925 => 424,  1921 => 422,  1917 => 420,  1907 => 416,  1897 => 415,  1894 => 414,  1890 => 413,  1887 => 412,  1885 => 411,  1881 => 410,  1876 => 409,  1863 => 408,  1852 => 405,  1848 => 403,  1831 => 401,  1828 => 400,  1811 => 399,  1808 => 398,  1805 => 397,  1801 => 394,  1795 => 392,  1793 => 391,  1789 => 390,  1781 => 389,  1777 => 387,  1773 => 384,  1767 => 382,  1764 => 381,  1759 => 379,  1754 => 377,  1752 => 376,  1744 => 375,  1740 => 373,  1737 => 372,  1735 => 371,  1732 => 370,  1719 => 369,  1707 => 365,  1690 => 363,  1673 => 362,  1670 => 361,  1664 => 359,  1651 => 358,  1639 => 354,  1633 => 351,  1632 => 350,  1631 => 349,  1630 => 348,  1626 => 347,  1622 => 346,  1619 => 344,  1613 => 341,  1612 => 340,  1611 => 339,  1610 => 338,  1606 => 337,  1604 => 336,  1602 => 335,  1589 => 334,  1578 => 331,  1576 => 330,  1563 => 329,  1550 => 326,  1548 => 325,  1535 => 324,  1523 => 321,  1519 => 320,  1515 => 319,  1509 => 318,  1506 => 317,  1503 => 316,  1500 => 315,  1497 => 314,  1494 => 313,  1491 => 312,  1488 => 311,  1485 => 310,  1483 => 309,  1480 => 308,  1477 => 307,  1475 => 306,  1462 => 305,  1451 => 302,  1449 => 301,  1436 => 300,  1425 => 297,  1421 => 296,  1419 => 295,  1406 => 294,  1393 => 289,  1390 => 288,  1382 => 287,  1377 => 285,  1375 => 284,  1373 => 283,  1370 => 281,  1368 => 280,  1355 => 279,  1342 => 274,  1340 => 273,  1338 => 271,  1337 => 270,  1336 => 269,  1335 => 268,  1330 => 266,  1328 => 265,  1326 => 264,  1323 => 262,  1321 => 261,  1308 => 260,  1297 => 257,  1293 => 256,  1291 => 255,  1278 => 254,  1266 => 250,  1264 => 249,  1262 => 248,  1260 => 247,  1258 => 246,  1254 => 245,  1252 => 244,  1249 => 242,  1247 => 241,  1234 => 240,  1220 => 234,  1218 => 233,  1216 => 232,  1203 => 231,  1192 => 228,  1188 => 226,  1182 => 223,  1179 => 222,  1177 => 221,  1175 => 220,  1169 => 217,  1166 => 216,  1163 => 215,  1161 => 214,  1158 => 213,  1145 => 212,  1134 => 209,  1130 => 208,  1128 => 207,  1126 => 206,  1113 => 205,  1098 => 199,  1096 => 198,  1091 => 196,  1089 => 195,  1083 => 193,  1080 => 192,  1077 => 191,  1075 => 190,  1072 => 189,  1067 => 187,  1062 => 186,  1059 => 185,  1057 => 184,  1052 => 183,  1048 => 181,  1046 => 180,  1029 => 179,  1027 => 178,  1023 => 174,  1020 => 171,  1019 => 170,  1018 => 169,  1016 => 168,  1013 => 167,  1010 => 165,  1007 => 164,  1004 => 162,  1002 => 161,  1000 => 160,  987 => 159,  975 => 139,  968 => 152,  965 => 151,  962 => 150,  959 => 149,  956 => 148,  953 => 147,  950 => 146,  947 => 145,  944 => 144,  941 => 143,  938 => 142,  936 => 141,  933 => 140,  930 => 139,  928 => 138,  915 => 137,  901 => 133,  896 => 132,  893 => 131,  890 => 130,  877 => 129,  863 => 125,  858 => 124,  855 => 123,  852 => 122,  839 => 121,  826 => 113,  824 => 112,  820 => 110,  818 => 109,  816 => 108,  814 => 106,  812 => 105,  810 => 104,  808 => 102,  806 => 101,  804 => 100,  793 => 99,  780 => 98,  769 => 93,  765 => 92,  763 => 91,  750 => 90,  737 => 87,  731 => 84,  726 => 83,  724 => 82,  722 => 81,  709 => 80,  698 => 77,  694 => 76,  681 => 75,  670 => 72,  667 => 71,  664 => 70,  661 => 69,  659 => 68,  646 => 67,  632 => 64,  629 => 63,  626 => 62,  623 => 61,  620 => 60,  617 => 59,  614 => 58,  601 => 57,  590 => 1640,  588 => 1626,  586 => 1586,  583 => 1585,  581 => 1575,  578 => 1574,  576 => 1528,  574 => 1482,  572 => 1424,  570 => 1410,  567 => 1409,  565 => 1404,  562 => 1403,  560 => 1390,  557 => 1389,  555 => 1384,  552 => 1383,  550 => 1367,  547 => 1366,  545 => 1354,  542 => 1353,  540 => 1340,  537 => 1339,  535 => 1330,  532 => 1329,  530 => 1322,  527 => 1321,  525 => 1291,  522 => 1290,  520 => 1283,  518 => 1242,  516 => 1236,  514 => 1230,  512 => 1213,  509 => 1212,  507 => 1209,  505 => 1195,  503 => 1177,  500 => 1176,  498 => 1171,  495 => 1170,  493 => 1165,  490 => 1164,  488 => 1155,  485 => 1154,  483 => 1147,  480 => 1146,  478 => 1139,  476 => 1129,  474 => 1119,  472 => 1114,  469 => 1113,  467 => 1109,  464 => 1108,  462 => 1080,  459 => 1079,  457 => 1054,  454 => 1053,  452 => 1034,  449 => 1033,  447 => 1017,  444 => 1016,  442 => 984,  439 => 983,  437 => 959,  434 => 958,  432 => 950,  429 => 949,  427 => 913,  424 => 912,  422 => 889,  419 => 887,  417 => 835,  414 => 834,  412 => 797,  409 => 796,  406 => 794,  404 => 779,  401 => 778,  399 => 722,  396 => 721,  394 => 714,  391 => 713,  388 => 711,  386 => 704,  383 => 703,  381 => 689,  378 => 688,  376 => 656,  373 => 655,  371 => 652,  368 => 651,  366 => 648,  363 => 647,  361 => 642,  358 => 641,  355 => 639,  353 => 610,  351 => 602,  349 => 578,  346 => 577,  344 => 552,  341 => 551,  339 => 535,  336 => 534,  334 => 520,  331 => 519,  329 => 478,  326 => 477,  324 => 441,  321 => 440,  319 => 434,  316 => 433,  314 => 408,  311 => 407,  309 => 369,  306 => 368,  304 => 358,  301 => 357,  299 => 334,  296 => 333,  294 => 329,  291 => 328,  289 => 324,  286 => 323,  284 => 305,  281 => 304,  279 => 300,  277 => 294,  275 => 279,  272 => 278,  270 => 260,  268 => 254,  266 => 240,  263 => 239,  261 => 231,  258 => 230,  256 => 212,  253 => 211,  251 => 205,  248 => 204,  246 => 159,  243 => 156,  241 => 137,  238 => 136,  236 => 129,  233 => 128,  231 => 121,  228 => 116,  226 => 98,  223 => 97,  221 => 90,  219 => 80,  217 => 75,  215 => 67,  213 => 57,  210 => 56,  207 => 54,  204 => 52,  201 => 46,  198 => 34,  195 => 25,  75 => 51,  68 => 50,  61 => 49,  54 => 48,  35 => 45,);
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

{#
# This form theme is an implementation of PrestaShop UI kit, it based on the bootstrap4 layout and overrides a few
# blocks to match our expected integration of the UI kit.
#
# This theme uses/extends the basic bootstrap_4_layout meaning the form labels/inputs are displayed one under the other.
# Unlike our prestashop_ui_kit.html.twig theme which extends this base kit but uses bootstrap_4_horizontal_layout as a
# base, where labels/inputs are displayed horizontally in a column way.
#}

{#
# We need to radio_widget and checkbox_widget from the original bootstrap 4 layout because we need to add form-check-radio
# on the last wrapping div which is not possible with the attributes, so we basically copied the content, but then we cannot
# use parent() to render the internal widget because it would reuse the one from bootstrap_4_layout and duplicate content.
#
# So we extract the initial widget from the bootstrap_base_layout to inject them as the internal widget, it is important
# to do it before we use bootstrap_4_layout or the base layout will override the blocks from bootstrap_4_layout.
#
# See https://symfony.com/doc/3.4/form/form_customization.html#referencing-blocks-from-inside-the-same-template-as-the-form
#}
{% use 'bootstrap_base_layout.html.twig' with radio_widget as base_radio_widget, checkbox_widget as base_checkbox_widget %}

{# Use bootstrap4 theme (from the Symfony framework) as default base #}
{% use 'bootstrap_4_layout.html.twig' %}
{% use '@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig' %}
{% use '@PrestaShop/Admin/TwigTemplateForm/material.html.twig' %}
{% use '@PrestaShop/Admin/TwigTemplateForm/multishop.html.twig' %}

{# overrides from bootstrap_4_layout #}

{# Widgets #}

{% block form_start %}
  {% set attr = attr|merge({'data-alerts-success': form.vars.alerts.success|default([])|length()}) %}
  {% set attr = attr|merge({'data-alerts-info': form.vars.alerts.info|default([])|length()}) %}
  {% set attr = attr|merge({'data-alerts-warning': form.vars.alerts.warning|default([])|length()}) %}
  {% set attr = attr|merge({'data-alerts-error': form.vars.alerts.error|default([])|length()}) %}
  {% set attr = attr|merge({'data-form-submitted': form.vars.submitted ? 1 : 0}) %}
  {% set attr = attr|merge({'data-form-valid': form.vars.valid ? 1 : 0}) %}
  {{ parent() }}
{% endblock form_start %}

{%- block form_widget -%}
  {% if columns_number is defined %}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-columns-' ~ columns_number)|trim}) %}
  {% endif %}
  {{ parent() }}
  {{- block('form_help') -}}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
  {{ parent() }}
  {{ include('@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig', {attr: attr}) }}
{%- endblock form_widget_simple -%}

{% block ip_address_text_widget %}
  <div class=\"input-group\">
    {{- block('form_widget_simple') -}}
    <button type=\"button\" class=\"btn btn-outline-primary add_ip_button\" data-ip=\"{{ currentIp }}\">
      <i class=\"material-icons\">add_circle</i> {{ 'Add my IP'|trans({}, 'Admin.Actions') }}
    </button>
  </div>
  {{ block('form_help') }}
{% endblock ip_address_text_widget %}

{%- block password_widget -%}
  {%- set type = type|default('password') -%}
  {{ block('form_widget_simple') }}
  {{ block('form_help') }}
{%- endblock password_widget -%}

{# Rows #}

{% block form_row -%}
  <div class=\"form-group{{ block('widget_type_class') }}{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}{% if row_attr.class is defined %} {{ row_attr.class }}{% endif %}\">
    {{- form_label(form) -}}
    {{- block('form_prepend_alert') -}}
    {{- block('form_prepend_external_link') -}}

    {{- form_widget(form) -}}
    {{- form_errors(form) -}}
    {{- block('form_modify_all_shops') -}}

    {{- block('form_append_alert') -}}
    {{- block('form_append_external_link') -}}
  </div>

  {% if column_breaker %}
  <div class=\"form-group form-column-breaker\"></div>
  {% endif %}
{%- endblock form_row %}

{#
# This block is integrated into each form row, its purpose is to display a \"Modify all stores\" checkbox when present,
# the checkbox form field is added by the ModifyAllShopsExtension when the config modify_all_shops
#}
{% block form_modify_all_shops %}
  {% set overrideCheckboxName = modify_all_shops_prefix ~ form.vars.name %}
  {% if attribute(form.parent, overrideCheckboxName) is defined %}
    {{ form_errors(attribute(form.parent, overrideCheckboxName)) }}
    {{ form_widget(attribute(form.parent, overrideCheckboxName)) }}
  {% endif %}
{% endblock %}

{% block form_disabling_switch %}
  {% set disablingSwitchName = disabling_switch_prefix ~ form.vars.name %}
  {% if attribute(form.parent, disablingSwitchName) is defined %}
    {{ form_errors(attribute(form.parent, disablingSwitchName)) }}
    {{ form_widget(attribute(form.parent, disablingSwitchName)) }}
  {% endif %}
{% endblock %}

{% block widget_type_class %}
{% if not compound|default(false) and form.vars.block_prefixes|length > 2 %}
 {% apply spaceless %}

    {% set index = form.vars.block_prefixes|length - 2 %}
    {% set widgetType = form.vars.block_prefixes[index] %}
    {% if widgetType == 'choice' %}
      {% if not expanded %}
        {% set widgetType = 'select' %}
      {% elseif multiple %}
        {% set widgetType = 'checboxes' %}
      {% else %}
        {% set widgetType = 'radio' %}
      {% endif %}
    {% endif %}
    {{ widgetType }}-widget
{% endapply %}
{% endif %}
{% endblock %}

{# Labels #}

{%- block form_label -%}
  {% if label is not same as(false) -%}
    {% if not compound -%}
      {% set label_attr = label_attr|merge({for: id}) %}
    {%- endif %}
    {% if required -%}
      {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {%- endif %}
    {% if label is empty -%}
      {%- if label_format is not empty -%}
        {% set label = label_format|replace({
          '%name%': name,
          '%id%': id,
        }) %}
      {%- else -%}
        {% set label = name|humanize %}
      {%- endif -%}
    {%- endif -%}

    {% set labelTag = label_tag_name|default('label') %}
    <{{ labelTag }}{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
    {% if required %}
      <span class=\"text-danger\">*</span>
    {% endif %}
    {{ translation_domain is same as(false) ? label|raw : label|raw }}
    {% if label_attr['tooltip'] is defined %}
      {% set placement = label_attr['tooltip_placement'] is defined ? label_attr['tooltip_placement'] : 'top' %}
      <i class=\"icon-question\" data-toggle=\"pstooltip\" data-placement=\"{{ placement }}\"
         title=\"{{ label_attr['tooltip'] }}\"></i>
    {% endif %}

    {% if label_help_box is defined or label_attr['popover'] is defined %}
      {% set content = label_help_box is defined ? label_help_box : label_attr['popover'] %}
      {% set placement = label_attr['popover_placement'] is defined ? label_attr['popover_placement'] : 'top' %}
      {{ include('@Common/HelpBox/helpbox.html.twig', {placement: placement, content: content}) }}
    {% endif %}
    {{- block('form_disabling_switch') -}}
    </{{ labelTag }}>
  {%- endif -%}
  {% if label_subtitle is defined %}
    <p class=\"subtitle\">{{ label_subtitle|raw('html') }}</p>
  {% endif %}
{%- endblock form_label -%}

{# Widgets #}

{% block textarea_widget -%}
  {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
  {{- parent() -}}
  {{ include('@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig', {attr: attr}) }}
  {{ block('form_help') }}
{%- endblock textarea_widget %}

{% block money_widget -%}
  <div class=\"input-group money-type\">
    {% set prepend = '{{' == money_pattern[0:2] %}
    {% if not prepend %}
      <div class=\"input-group-prepend\">
        <span class=\"input-group-text\">{{ money_pattern|replace({'{{ widget }}': ''}) }}</span>
      </div>
    {% endif %}
    {{- block('form_widget_simple') -}}
    {% if prepend %}
      <div class=\"input-group-append\">
        <span class=\"input-group-text\">{{ money_pattern|replace({'{{ widget }}': ''}) }}</span>
      </div>
    {% endif %}
  </div>

  {{ block('form_help') }}
{%- endblock money_widget %}

{% block percent_widget -%}
  <div class=\"input-group\">
    {{- block('form_widget_simple') -}}
    <div class=\"input-group-append\">
      <span class=\"input-group-text\">%</span>
    </div>
  </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
  {% if widget == 'single_text' %}
    {{- block('form_widget_simple') -}}
  {% else -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
    <div {{ block('widget_container_attributes') }}>
      {{- form_errors(form.date) -}}
      {{- form_errors(form.time) -}}
      {{- form_widget(form.date, {datetime: true}) -}}
      {{- form_widget(form.time, {datetime: true}) -}}
    </div>
  {%- endif %}
{%- endblock datetime_widget %}

{%- block url_widget -%}
  {%- set type = type|default('url') -%}
  {{ block('form_widget_simple') }}
  {{ block('form_help') }}
{%- endblock url_widget -%}

{% block date_widget -%}
  {% if widget == 'single_text' %}
    {{- block('form_widget_simple') -}}
  {% else -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
    {% if datetime is not defined or not datetime -%}
      <div {{ block('widget_container_attributes') -}}>
    {%- endif %}
    {{- date_pattern|replace({
      '{{ year }}': form_widget(form.year),
      '{{ month }}': form_widget(form.month),
      '{{ day }}': form_widget(form.day),
    })|raw -}}
    {% if datetime is not defined or not datetime -%}
      </div>
    {%- endif -%}
  {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
  {% if widget == 'single_text' %}
    {{- block('form_widget_simple') -}}
  {% else -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
    {% if datetime is not defined or false == datetime -%}
      <div {{ block('widget_container_attributes') -}}>
    {%- endif -%}
    {{- form_widget(form.hour) }}:{{ form_widget(form.minute) }}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
    {% if datetime is not defined or false == datetime -%}
      </div>
    {%- endif -%}
  {% endif %}
{%- endblock time_widget %}

{%- block email_widget -%}
  {%- set type = type|default('email') -%}
  {{ block('form_widget_simple') }}
  {{ block('form_help') }}
{%- endblock email_widget -%}

{% block button_widget -%}
  {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
  {{- parent() -}}
{%- endblock %}

{% block icon_button_widget -%}
  {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
  {% if button_type == 'link' %}
    {% set buttonTag = 'a' %}
    {# Link tags need extra class for disabled, the attribute itself is not enough #}
    {% if attr.disabled|default(false) %}
      {% set attr = attr|merge({class: (attr.class ~ ' disabled')|trim}) %}
    {% endif %}
  {% else %}
    {% set buttonTag = 'button' %}
    {% set attr = attr|merge({type: 'button'}) %}
  {% endif %}

  <{{ buttonTag }} {{ block('button_attributes') }}>
    <i class=\"material-icons\">{{ button_icon }}</i>
    <span class=\"btn-label\">{{ label }}</span>
  </{{ buttonTag }}>
{%- endblock %}

{% block choice_widget %}
  {{- parent() -}}
  {{ block('form_help') }}
{% endblock choice_widget %}

{% block choice_widget_collapsed -%}
  {% set attr = attr|merge({class: (attr.class|default('') ~ ' custom-select')|trim}) %}
  {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
  {% if '-inline' in label_attr.class|default('') -%}
    <div class=\"control-group\">
      {%- for child in form %}
        {{- form_widget(child, {
          parent_label_class: label_attr.class|default(''),
          translation_domain: choice_translation_domain,
          valid: valid,
        }) -}}
      {% endfor -%}
    </div>
  {%- else -%}
    <div {{ block('widget_container_attributes') }}>
      {%- for child in form %}
        {{- form_widget(child, {
          parent_label_class: label_attr.class|default(''),
          translation_domain: choice_translation_domain,
          valid: valid,
        }) -}}
      {% endfor -%}
    </div>
  {%- endif %}
{%- endblock choice_widget_expanded %}

{% block choice_tree_widget -%}
  <div {{ block('widget_container_attributes') }} class=\"category-tree-overflow\">
    <ul class=\"category-tree\">
      <li class=\"form-control-label text-right main-category\">{{ 'Main category'|trans({}, 'Admin.Catalog.Feature') }}</li>
      {%- for child in choices %}
        {{ block('choice_tree_item_widget') }}
      {% endfor -%}
    </ul>
  </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
  <li>
    {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? 'checked=\"checked\"' : '' %}
    {% if multiple -%}
      <div class=\"checkbox\">
        <label>
          <input type=\"checkbox\" name=\"{{ form.vars.full_name }}[tree][]\" value=\"{{ child.id_category }}\" class=\"category\" {{ checked }}>
          {% if child.active is defined and child.active == 0 %}
            <i>{{ child.name }}</i>
          {%- else -%}
            {{ child.name }}
          {% endif %}
          {% if defaultCategory is defined %}
            <input type=\"radio\" value=\"{{ child.id_category }}\" name=\"ignore\" class=\"default-category\" />
          {% endif %}
        </label>
      </div>
    {%- else -%}
      <div class=\"radio\">
        <label>
          <input type=\"radio\" name=\"form[{{ form.vars.id }}][tree]\" value=\"{{ child.id_category }}\" {{ checked }} class=\"category\">
          {{ child.name }}
          {% if defaultCategory is defined %}
            <input type=\"radio\" value=\"{{ child.id_category }}\" name=\"ignore\" class=\"default-category\" />
          {% endif %}
        </label>
      </div>
    {%- endif %}
    {% if child.children is defined %}
      <ul>
        {% for item in child.children %}
          {% set child = item %}
          {{ block('choice_tree_item_widget') }}
        {% endfor -%}
      </ul>
    {% endif %}
  </li>
{%- endblock choice_tree_item_widget %}

{% block translatefields_widget %}
  {{ form_errors(form) }}
  <div class=\"translations tabbable\" id=\"{{ form.vars.id }}\" tabindex=\"1\">
    {% if hideTabs == false and form|length > 1 %}
      <ul class=\"translationsLocales nav nav-pills\">
        {% for translationsFields in form %}
          <li class=\"nav-item\">
            <a href=\"#\" data-locale=\"{{ translationsFields.vars.label }}\" class=\"{% if defaultLocale.id_lang == translationsFields.vars.name %}active{% endif %} nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-{{ translationsFields.vars.id }}\">
              {{ translationsFields.vars.label|upper }}
            </a>
          </li>
        {% endfor %}
      </ul>
    {% endif %}

    <div class=\"translationsFields tab-content\">
      {% for translationsFields in form %}
        <div data-locale=\"{{ translationsFields.vars.label }}\" class=\"translationsFields-{{ translationsFields.vars.id }} tab-pane translation-field {% if hideTabs == false and form|length > 1 %}panel panel-default{% endif %} {% if defaultLocale.id_lang == translationsFields.vars.name %}show active{% endif %} {% if not form.vars.valid %}field-error{% endif %} translation-label-{{ translationsFields.vars.label }}\">
          {{ form_errors(translationsFields) }}
          {{ form_widget(translationsFields) }}
        </div>
      {% endfor %}
    </div>
  </div>
{% endblock %}

{% block translate_fields_widget -%}
  {% if type is not defined or 'file' != type %}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
  {% endif %}
  {{- parent() -}}
{%- endblock translate_fields_widget %}

{% block translate_text_widget -%}
  {{ form_errors(form) }}
  <div class=\"input-group locale-input-group js-locale-input-group\">
    {% for translateField in form %}
      {% set classes = translateField.vars.attr.class|default('') ~ ' js-locale-input' %}
      {% set classes = classes ~ ' js-locale-' ~ translateField.vars.label %}

      {% if default_locale.id_lang != translateField.vars.name %}
        {% set classes = classes ~ ' d-none' %}
      {% endif %}

      {%- set attr = attr|merge({class: classes|trim}) -%}
      {{ block('form_widget') }}
    {% endfor %}

    {% if not hide_locales %}
      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"{{ form.vars.id }}\"
        >
          {{ form.vars.default_locale.iso_code|upper }}
        </button>

        <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"{{ form.vars.id }}\">
          {% for locale in locales %}
            <span class=\"dropdown-item js-locale-item\" data-locale=\"{{ locale.iso_code }}\">{{ locale.name }}</span>
          {% endfor %}
        </div>
      </div>
    {% endif %}
  </div>
{%- endblock translate_text_widget %}

{% block translate_textarea_widget -%}
  {{ form_errors(form) }}
  <div class=\"input-group locale-input-group js-locale-input-group\">
    {% for textarea in form %}
      {% set classes = textarea.vars.attr.class|default('') ~ ' js-locale-input' %}
      {% set classes = classes ~ ' js-locale-' ~ textarea.vars.label %}

      {% if default_locale.id_lang != textarea.vars.name %}
        {% set classes = classes ~ ' d-none' %}
      {% endif %}

      <div class=\"{{ classes }}\">
        {{ form_widget(textarea, {attr: {class: classes|trim}}) }}
      </div>
    {% endfor %}

    {% if show_locale_select %}
      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"{{ form.vars.id }}\"
        >
          {{ form.vars.default_locale.iso_code|upper }}
        </button>

        <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"{{ form.vars.id }}\">
          {% for locale in locales %}
            <span class=\"dropdown-item js-locale-item\"
                  data-locale=\"{{ locale.iso_code }}\"
            >
              {{ locale.name }}
            </span>
          {% endfor %}
        </div>
      </div>
    {% endif %}
  </div>
{%- endblock translate_textarea_widget %}

{% block date_picker_widget %}
  {% apply spaceless %}
    {% set attr = attr|merge({class: ((attr.class|default('') ~ ' form-control datepicker')|trim)}) %}
    <div class=\"input-group datepicker\">
      <input type=\"text\" data-format=\"{{ date_format }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
      <div class=\"input-group-append\">
        <div class=\"input-group-text\">
          <i class=\"material-icons\">date_range</i>
        </div>
      </div>
    </div>
    {{ block('form_help') }}
  {% endapply %}
{% endblock date_picker_widget %}

{% block date_range_widget %}
  {% apply spaceless %}
    <div class=\"input-group date-range row\">
      <div class=\"col col-md-4\">
        {{ form_row(form.from) }}
      </div>
      <div class=\"col col-md-4\">
        {{ form_row(form.to) }}
        {% if form.unlimited is defined %}
          {{ form_widget(form.unlimited) }}
          {{ form_errors(form.unlimited) }}
        {% endif %}
      </div>
    </div>
  {% endapply %}
{% endblock date_range_widget %}

{% block search_and_reset_widget %}
  {% apply spaceless %}
    <button type=\"submit\"
            class=\"btn btn-primary grid-search-button\"
            title=\"{{ 'Search'|trans({}, 'Admin.Actions') }}\"
            name=\"{{ full_name }}[search]\"
    >
      <i class=\"material-icons\">search</i>
      {{ 'Search'|trans({}, 'Admin.Actions') }}
    </button>
    {% if show_reset_button %}
      <div class=\"js-grid-reset-button\">
        <button type=\"reset\"
                name=\"{{ full_name }}[reset]\"
                class=\"btn btn-link js-reset-search btn d-block grid-reset-button\"
                data-url=\"{{ reset_url }}\"
                data-redirect=\"{{ redirect_url }}\"
        >
          <i class=\"material-icons\">clear</i>
          {{ 'Reset'|trans({}, 'Admin.Actions') }}
        </button>
      </div>
    {% endif %}
  {% endapply %}
{% endblock search_and_reset_widget %}

{% block switch_widget %}
  {% apply spaceless %}
  {% set rowAttributes = row_attr|default({}) %}
  <div class=\"input-group {{ rowAttributes.class|default('') }}\" {% for key, rowAttr in rowAttributes %} {% if key != 'class' %}{{ key }}=\"{{ rowAttr }}\"{% endif %}{% endfor %}>
    <span class=\"ps-switch\" id=\"{{ form.vars.id }}\">
        {% for choice in choices %}
          {% set inputId = id ~ '_' ~ choice.value %}
          <input id=\"{{ inputId }}\"
            {{ block('attributes') }}
            name=\"{{ full_name }}\"
            value=\"{{ choice.value }}\"
            {% if choice is selectedchoice(value) %}checked=\"\"{% endif %}
            {% if disabled %}disabled=\"\"{% endif %}
            type=\"radio\"
          >
          {% if show_choices %}<label for=\"{{ inputId }}\">{{ choice.label|trans({}, choice_translation_domain) }}</label>{% endif %}
        {% endfor %}
        <span class=\"slide-button\"></span>
    </span>
  </div>
  {% endapply %}
  {{- block('form_help') -}}
{% endblock switch_widget %}

{%- block row_attributes -%}
  {% set rowAttributes = row_attr|default({}) %}
  {%- for attrname, attrvalue in rowAttributes -%}
    {{- ' ' -}}
    {{- attrname }}=\"{{ attrvalue }}\"
  {%- endfor -%}
{%- endblock -%}

{% block _form_step6_attachments_widget %}
  <div class=\"js-options-no-attachments {{ form|length > 0 ? 'hide' : '' }}\">
    <small>{{ 'There is no attachment yet.'|trans({}, 'Admin.Catalog.Notification') }}</small>
  </div>
  <div id=\"product-attachments\" class=\"panel panel-default\">
    <div class=\"panel-body js-options-with-attachments {{ form|length == 0 ? 'hide' : '' }}\">
      <div>
        <table id=\"product-attachment-file\" class=\"table\">
          <thead class=\"thead-default\">
          <tr>
            <th class=\"col-md-3\">{{ 'Title'|trans({}, 'Admin.Global') }}</th>
            <th class=\"col-md-6\">{{ 'File name'|trans({}, 'Admin.Global') }}</th>
            <th class=\"col-md-2\">{{ 'Type'|trans({}, 'Admin.Catalog.Feature') }}</th>
          </tr>
          </thead>
          <tbody>
          {%- for child in form %}
            <tr>
              <td class=\"col-md-3\">{{ form_widget(child) }}</td>
              <td class=\"col-md-6 file-name\"><span>{{ form.vars.attr.data[loop.index0]['file_name'] }}</span></td>
              <td class=\"col-md-2\">{{ form.vars.attr.data[loop.index0]['mime'] }}</td>
            </tr>
          {% endfor -%}
          </tbody>
        </table>
      </div>
    </div>
  </div>
{% endblock %}

{# Labels #}

{% block choice_label -%}
  {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
  {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
  {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
  {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
  {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
  {# Do not display the label if widget is not defined in order to prevent double label rendering #}
  {% if widget is defined %}
    {% if required %}
      {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
      {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is not same as(false) and label is empty %}
      {% set label = name|humanize %}
    {% endif %}

    {% if block_prefixes[2] == 'radio' %}
      <label class=\"form-check-label\"{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{- widget|raw -}}

        <i class=\"form-check-round\"></i>

        {{- label is not same as(false) ? (translation_domain is same as(false) ? label|raw : label|raw) -}}
      </label>
    {% else %}
      <div class=\"md-checkbox md-checkbox-inline\">
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{- widget|raw -}}
        <i class=\"md-checkbox-control\"></i>
        {{- label is not same as(false) ? (translation_domain is same as(false) ? label|raw : label|raw) -}}
        </label>
      </div>
    {% endif %}
  {% endif %}
{% endblock checkbox_radio_label %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- if 'radio-custom' in parent_label_class -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' custom-control-input')|trim}) -%}
        <div class=\"custom-control custom-radio{{ 'radio-inline' in parent_label_class ? ' custom-control-inline' }}\">
            {{- form_label(form, null, {widget: block('base_radio_widget')}) -}}
        </div>
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
        <div class=\"form-check form-check-radio form-radio{{ 'radio-inline' in parent_label_class ? ' form-check-inline' }}\">
            {{- form_label(form, null, {widget: block('base_radio_widget')}) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    <div class=\"form-check form-check-radio form-checkbox{% if attr.container_class is defined %} {{ attr.container_class }}{% endif %}\">
        {{- form_label(form, null, {widget: block('base_checkbox_widget')}) -}}
    </div>
{%- endblock checkbox_widget %}

{# Errors #}

{% block form_errors -%}
  {% if attr['fieldError'] is defined and attr['fieldError'] == true %}
    {{ block('form_errors_field') }}
  {% else %}
    {{ block('form_errors_other') }}
  {% endif %}
{%- endblock form_errors %}

{% block form_errors_field %}
  {% if errors|length > 0 -%}
    {# If we got more then one error then we need to display popover instead of errors list #}
    {%- if errors|length > 1 -%}

      {% set popoverContainer = 'popover-error-container-' ~ form.vars.id %}
      <div class=\"{{ popoverContainer }}\"></div>

      {% set popoverErrorContent %}
        <div class=\"popover-error-list\">
          <ul>
            {%- for error in errors -%}
              <li class=\"text-danger\"> {{ error.messageTemplate|trans(error.messageParameters, 'form_error') }}
              </li>
            {% endfor %}
          </ul>
        </div>
      {% endset %}

      <template class=\"js-popover-error-content\" data-id=\"{{ form.vars.id }}\">
        {{ popoverErrorContent }}
      </template>

      {% set errorPopover %}
        <span
          data-toggle=\"form-popover-error\"
          data-id=\"{{ form.vars.id }}\"
          data-placement=\"bottom\"
          data-template='<div class=\"popover form-popover-error\" role=\"tooltip\"><h3 class=\"popover-header\"></h3><div class=\"popover-body\"></div></div>'
          data-trigger=\"hover\"
          data-container=\".{{ popoverContainer }}\"
        >
          <i class=\"material-icons form-error-icon\">error_outline</i> <u> {{ '%count% errors'|trans({'%count%': errors|length}, 'Admin.Global') }}</u>
        </span>
      {% endset %}

      <div class=\"invalid-feedback-container\">
        <div class=\"text-danger\">
          {{ errorPopover }}
        </div>
      </div>

      {# If there is only one error then display it without popover #}
    {%- else -%}
      <div class=\"d-inline-block align-baseline text-danger mt-1\" role=\"alert\">
        <i class=\"material-icons form-error-icon\">error_outline</i>

        {% for error in errors %}
          <span>
            {{ error.messageTemplate|trans(error.messageParameters, 'form_error') }}
          </span>
        {%- endfor -%}
      </div>
    {%- endif -%}
  {%- endif %}
{% endblock %}

{% block form_errors_other %}
  {% if errors|length > 0 -%}
    <div class=\"alert alert-danger d-print-none\" role=\"alert\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
      </button>
      <div class=\"alert-text\">
        {% for error in errors %}
            <p> {{ error.messageTemplate|trans(error.messageParameters, 'form_error') }}
            </p>
        {%- endfor -%}
      </div>
    </div>
  {% endif %}
{% endblock %}

{# Material design widgets #}

{% block material_choice_table_widget %}
  {% apply spaceless %}
    <div class=\"choice-table\">
      <table class=\"table table-bordered mb-0\">
        <thead>
        <tr>
          <th class=\"checkbox\">
            <div class=\"md-checkbox\">
              <label>
                <input
                  type=\"checkbox\"
                  class=\"js-choice-table-select-all\"
                  {% if isCheckSelectAll %}
                    checked
                  {% endif %}
                >
                <i class=\"md-checkbox-control\"></i>
                {{ 'Select all'|trans({}, 'Admin.Actions') }} {% if form.vars.displayTotalItems %} ({{ form|length }}) {% endif %}
              </label>
            </div>
          </th>
        </tr>
        </thead>
        <tbody>
        {% for child in form %}
          <tr>
            <td>
              {{ form_widget(child, {material_design: true}) }}
            </td>
          </tr>
        {% endfor %}
        </tbody>
      </table>
    </div>
  {% endapply %}
  {{ block('form_help') }}
{% endblock material_choice_table_widget %}

{% block material_multiple_choice_table_widget %}
  {% apply spaceless %}
    <div class=\"choice-table{% if headers_fixed %}-headers-fixed{% endif %} table-responsive\">
      <table class=\"table\">
        <thead>
        <tr>
          <th>{{ table_label }}</th>
          {% for child_choice in form %}
            <th class=\"text-center\">
              {% if child_choice.vars.multiple and child_choice.vars.name not in headers_to_disable %}
                <a href=\"#\"
                   class=\"js-multiple-choice-table-select-column\"
                   data-column-num=\"{{ loop.index + 1 }}\"
                   data-column-checked=\"false\"
                >
                  {{ child_choice.vars.label }}
                </a>
              {% else %}
                {{ child_choice.vars.label }}
              {% endif %}
            </th>
          {% endfor %}
        </tr>
        </thead>
        <tbody>
        {% for choice_name, choice_value in choices %}
          <tr>
            <td>
              {{ choice_name }}
            </td>
            {% for child_choice_name, child_choice in form %}
              <td class=\"text-center\">
                {% if child_choice_entry_index_mapping[choice_value][child_choice_name] is defined %}
                  {% set entry_index = child_choice_entry_index_mapping[choice_value][child_choice_name] %}

                  {% if child_choice.vars.multiple %}
                    {{ form_widget(child_choice[entry_index], {material_design: true}) }}
                  {% else %}
                    {{ form_widget(child_choice[entry_index]) }}
                  {% endif %}
                {% else %}
                  --
                {% endif %}
              </td>
            {% endfor %}
          </tr>
        {% endfor %}
        </tbody>
      </table>
    </div>
  {% endapply %}
{% endblock material_multiple_choice_table_widget %}

{# Copied translatablefields_widget made to be compatible with TranslatableType.php and to be used in translatable widget #}
{% block translatable_fields_with_tabs %}
  <div class=\"translations tabbable\" id=\"{{ form.vars.id }}\" tabindex=\"1\">
    {% if hide_locales == false and form|length > 1 %}
      <ul class=\"translationsLocales nav nav-pills\">
        {% for translationsFields in form %}
          <li class=\"nav-item\">
            <a href=\"#\" data-locale=\"{{ translationsFields.vars.label }}\" class=\"{% if default_locale.id_lang == translationsFields.vars.name %}active{% endif %} nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-{{ translationsFields.vars.id }}\">
              {{ translationsFields.vars.label|upper }}
            </a>
          </li>
        {% endfor %}
      </ul>
    {% endif %}

    <div class=\"translationsFields tab-content\">
      {% for translationsFields in form %}
        <div data-locale=\"{{ translationsFields.vars.label }}\" class=\"translationsFields-{{ translationsFields.vars.id }} tab-pane translation-field {% if hide_locales == false and form|length > 1 %}panel panel-default{% endif %} {% if default_locale.id_lang == translationsFields.vars.name %}show active{% endif %} {% if not form.vars.valid %}field-error{% endif %} translation-label-{{ translationsFields.vars.label }}\">
          {{ form_widget(translationsFields) }}
        </div>
      {% endfor %}
    </div>
  </div>
{% endblock %}

{% block translatable_fields_with_dropdown -%}
    {% set formClass = (form.vars.attr.class|default('') ~ ' input-group locale-input-group js-locale-input-group d-flex')|trim %}
    <div class=\"{{ formClass }}\" id=\"{{ form.vars.id }}\" tabindex=\"1\">
      {% for translateField in form %}
        {% set classes = translateField.vars.attr.class|default('') ~ ' js-locale-input' %}
        {% set classes = classes ~ ' js-locale-' ~ translateField.vars.label %}
        {% if default_locale.id_lang != translateField.vars.name %}
          {% set classes = classes ~ ' d-none' %}
        {% endif %}
        <div data-lang-id=\"{{ translateField.vars.name }}\" class=\"{{ classes }}\" style=\"flex-grow: 1;\">
          {{ form_widget(translateField) }}
        </div>
      {% endfor %}
      {% if not hide_locales %}
        <div class=\"dropdown\">
          <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                  type=\"button\"
                  data-toggle=\"dropdown\"
            {% if change_form_language_url is defined %}
              data-change-language-url=\"{{ form.vars.change_form_language_url }}\"
            {% endif %}
                  aria-haspopup=\"true\"
                  aria-expanded=\"false\"
                  id=\"{{ form.vars.id }}_dropdown\"
          >
            {{ form.vars.default_locale.iso_code|upper }}
          </button>
          <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"{{ form.vars.id }}_dropdown\">
            {% for locale in locales %}
              <span class=\"dropdown-item js-locale-item\" data-locale=\"{{ locale.iso_code }}\">{{ locale.name }}</span>
            {% endfor %}
          </div>
        </div>
      {% endif %}
    </div>
{%- endblock %}

{% block translatable_widget -%}
  {% if use_tabs %}
    {{ block('translatable_fields_with_tabs') }}
  {% else %}
    {{ block('translatable_fields_with_dropdown') }}
  {% endif %}
  {{ block('form_help') }}
{%- endblock translatable_widget %}

{% block birthday_widget %}
  {% if widget == 'single_text' %}
    {{- block('form_widget_simple') -}}
  {% else -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
    {% if datetime is not defined or not datetime -%}
      <div {{ block('widget_container_attributes') -}}>
    {%- endif %}

    {% set yearWidget = '<div class=\"col pl-0 birthday-select-container\">' ~ form_widget(form.year) ~ '</div>'|raw %}
    {% set monthWidget = '<div class=\"col birthday-select-container\">' ~ form_widget(form.month) ~ '</div>'|raw %}
    {% set dayWidget = '<div class=\"col pr-0 birthday-select-container\">' ~ form_widget(form.day) ~ '</div>'|raw %}

    {{- date_pattern|replace({
      '{{ year }}': yearWidget,
      '{{ month }}': monthWidget,
      '{{ day }}': dayWidget,
    })|raw -}}

    {% if datetime is not defined or not datetime -%}
      </div>
    {%- endif -%}
  {% endif %}
{% endblock birthday_widget %}

{% block file_widget %}
  <style>
    .custom-file-label:after {
      content: \"{{ 'Browse'|trans({}, 'Admin.Actions') }}\";
    }
  </style>
  <div class=\"custom-file\">
    {% set attr = attr|merge({
      class: (attr.class|default('') ~ ' custom-file-input')|trim,
      'data-multiple-files-text': '%count% file(s)'|trans({}, 'Admin.Global'),
      'data-locale': get_context_iso_code()
    }) -%}

    {% if attr.disabled is defined and attr.disabled %}
      {% set attr = attr|merge({
        class: attr.class ~ ' disabled'
      }) %}
    {% endif %}
    {{- block('form_widget_simple') -}}

    <label class=\"custom-file-label\" for=\"{{ form.vars.id }}\">
      {% set attributes = form.vars.attr %}
      {{ attributes.placeholder is defined ? attributes.placeholder : 'Choose file(s)'|trans({}, 'Admin.Actions') }}
    </label>
  </div>
  {{- block('form_help') -}}
  {% if form.vars.download_url %}
    <a target=\"_blank\" href=\"{{ form.vars.download_url }}\">
      {{ 'Download file'|trans({}, 'Admin.Actions') }}
    </a>
  {% endif %}
{% endblock file_widget %}

{% block shop_restriction_checkbox_widget %}
  {% if form.vars.attr.is_allowed_to_display %}
    <div class=\"md-checkbox md-checkbox-inline\">
      <label>
        {% set type = type|default('checkbox') %}
        <input
          class=\"js-multi-store-restriction-checkbox\"
          type=\"{{ type }}\"
          {{ block('widget_attributes') }}
          value=\"{{ value }}\"
        >
        <i class=\"md-checkbox-control\"></i>
      </label>
    </div>
  {% endif %}
{% endblock %}

{% block generatable_text_widget %}
  <div class=\"input-group\">
    {% if compound %}
      {{- block('form_widget_compound') -}}
    {% else %}
      {{- block('form_widget_simple') -}}
    {% endif %}
    <span class=\"input-group-btn ml-1\">
      <button class=\"btn btn-outline-secondary js-generator-btn\"
              type=\"button\"
              data-target-input-id=\"{{ id }}\"
              data-generated-value-length=\"{{ generated_value_length }}\"
      >
        {{ 'Generate'|trans({}, 'Admin.Actions') }}
      </button>
   </span>
  </div>
  {{ block('form_help') }}
{% endblock generatable_text_widget %}

{% block text_with_recommended_length_widget %}
  {% set attr = attr|merge({
    'data-recommended-length-counter': '#' ~ id ~ '_recommended_length_counter',
    class: 'js-recommended-length-input'
  }) -%}

  {% if input_type == 'textarea' %}
    {{- block('textarea_widget') -}}
  {% else %}
    {{- block('form_widget_simple') -}}
  {% endif %}

  <small class=\"form-text text-muted text-right\"
         id=\"{{ id }}_recommended_length_counter\"
  >
    <em>
      {{ '[1][/1] of [2][/2] characters used (recommended)'|trans({}, 'Admin.Catalog.Feature')|replace({
        '[1]': '<span class=\"js-current-length\">' ~ value|length,
        '[/1]': '</span>',
        '[2]': '<span>' ~ recommended_length,
        '[/2]': '</span>',
      })|raw }}
    </em>
  </small>
{% endblock %}

{% block text_with_length_counter_widget %}
  <div class=\"input-group js-text-with-length-counter\">
    {% set current_length = form.vars.max_length - value|length %}

    {% if form.vars.position == 'before' %}
      <div class=\"input-group-prepend\">
        <span class=\"input-group-text js-countable-text\">{{ current_length }}</span>
      </div>
    {% endif %}

    {% set attr = attr|merge(input_attr) -%}
    {% set attr = attr|merge({'data-max-length': form.vars.max_length, maxlength: form.vars.max_length, class: (attr.class|default('') ~ ' js-countable-input')|trim}) -%}

    {% if form.vars.input == 'input' %}
      {{- block('form_widget_simple') -}}
    {% elseif form.vars.input == 'textarea' %}
      {{- block('textarea_widget') -}}
    {% else %}
      {{- block('form_widget') -}}
    {% endif %}

    {% if form.vars.position == 'after' %}
      <div class=\"input-group-append\">
        <span class=\"input-group-text js-countable-text\">{{ current_length }}</span>
      </div>
    {% endif %}
  </div>
{% endblock %}

{% block integer_min_max_filter_widget %}
  {{ form_widget(form['min_field'], {attr: {class: 'min-field'}}) }}
  {{ form_widget(form['max_field'], {attr: {class: 'max-field'}}) }}
{% endblock %}

{% block number_min_max_filter_widget %}
  {{ form_widget(form['min_field'], {attr: {class: 'min-field'}}) }}
  {{ form_widget(form['max_field'], {attr: {class: 'max-field'}}) }}
{% endblock %}

{%- block number_widget -%}
  {%- set type = type|default('text') -%}
  <div class=\"input-group\">
    {{- block('form_unit_prepend') -}}
    {{- block('form_widget_simple') -}}
    {{- block('form_unit') -}}
  </div>
  {{ block('form_help') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
  {%- set type = type|default('number') -%}
  <div class=\"input-group\">
    {{- block('form_unit_prepend') -}}
    {{- block('form_widget_simple') -}}
    {{- block('form_unit') -}}
  </div>
  {{ block('form_help') }}
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

{% block form_help %}
  {% if help is not null %}
    {%- set help_attr = help_attr|merge({class: (help_attr.class|default('') ~ ' form-text')|trim}) -%}
      <small id=\"{{ id }}_help\"{% with {attr: help_attr} %}{{ block('attributes') }}{% endwith %}>{{ help|raw }}</small>
  {% endif %}
  {% if warning is defined %}
    {{ warning }}
  {% endif %}
{% endblock form_help %}

{% block form_prepend_external_link %}
  {% if external_link is defined and external_link.position == 'prepend' %}
    {{- block('form_external_link') -}}
  {% endif %}
{% endblock %}

{% block form_append_external_link %}
  {% if external_link is defined and external_link.position == 'append' %}
    {{- block('form_external_link') -}}
  {% endif %}
{% endblock %}

{% block form_external_link %}
  {% if external_link is defined %}
    {%- set openingTag -%}
      <a {{ block('form_external_link_attributes') }}>
        {% if external_link.open_in_new_tab %}<i class=\"material-icons\">open_in_new</i>{% endif %}
    {%- endset -%}

    <div class=\"small font-secondary form-external-link{% if external_link.align is same as('right') %} text-right{% endif %}\">
      {# If placeholders are included in the text use it as is, else prepend and append them to the text #}
      {% if '[1]' in external_link.text and '[/1]' in external_link.text %}
        {{ external_link.text|replace({'[1]': openingTag, '[/1]': '</a>'})|raw }}
      {% else %}
        {{ ('[1]' ~ external_link.text ~ '[/1]')|replace({'[1]': openingTag, '[/1]': '</a>'})|raw }}
      {% endif %}
    </div>
  {% endif %}
{% endblock form_external_link %}

{%- block form_external_link_attributes -%}
  {% set external_link_attr = external_link.attr|merge({class: (external_link.attr.class|default('') ~ ' btn btn-link px-0 align-right')|trim}) %}

  {% for attrname, attrvalue in external_link_attr %}
    {% if attrname not in ['href', 'class'] %}
      {{ attrname }}=\"{{ attrvalue }}\"
    {% endif %}
  {% endfor %}

  {% if external_link.open_in_new_tab %}target=\"_blank\"{% endif %}
  href=\"{{ external_link.href }}\"
  class=\"{{ external_link_attr.class }}\"
{%- endblock -%}

{% block custom_content_widget %}
  {{ include(template, data) }}
{% endblock %}

{% block text_widget %}
  {%- set attr = attr|merge({'aria-label': '%inputId% input'|trans({'%inputId%': form.vars.id}, 'Admin.Global')}) -%}
  {% if data_list is not null %}
    {%- set attr = attr|merge({list: id ~ '_datalist'}) -%}
  {% endif %}

  {{ form_widget(form, {attr: attr}) }}

  {% if data_list is not null %}
    <datalist id=\"{{ id ~ '_datalist' }}\">
      {% for item in data_list %}
        <option value=\"{{ item }}\"></option>
      {% endfor %}
    </datalist>
  {% endif %}
{% endblock text_widget %}

{%- block form_prepend_alert -%}
  {% if alert_position is defined and alert_position == 'prepend' %}
  {{- block('form_alert') -}}
  {% endif %}
{% endblock %}

{%- block form_append_alert -%}
  {% if alert_position is defined and alert_position == 'append' %}
  {{- block('form_alert') -}}
  {% endif %}
{% endblock %}

{%- block form_alert -%}
  {% if alert_message is defined %}
    <div class=\"alert alert-{{ alert_type }}{% if alert_title is defined %} expandable-alert{% endif %}\" role=\"alert\">
    {% if alert_title is defined %}
      <p class=\"alert-text\">
        {{ alert_title|raw }}
      </p>
    {% else %}
      {% for message in alert_message %}
        <p class=\"alert-text\">
          {{ message|raw }}
        </p>
      {% endfor %}
    {% endif %}

    {% if alert_title is defined %}
      <div class=\"alert-more collapse\" id=\"expandable_{{ form.vars.id }}\" style=\"\">
        {% if alert_message|length > 1 %}
          <ul class=\"p-0\">
            {% for message in alert_message %}
              <li>{{ message|raw }}</li>
            {% endfor %}
          </ul>
        {% else %}
          {% for message in alert_message %}
            <p>
              {{ message|raw }}
            </p>
          {% endfor %}
        {% endif %}
      </div>
      <div class=\"read-more-container\">
         <button type=\"button\" class=\"read-more btn-link\" data-toggle=\"collapse\" data-target=\"#expandable_{{ form.vars.id }}\" aria-expanded=\"true\" aria-controls=\"collapseDanger\">
            {{ 'Read more'|trans({}, 'Admin.Actions') }}
          </button>
       </div>
    {% endif %}
  </div>
  {% endif %}
{%- endblock -%}

{% block unavailable_widget %}
  <div class=\"alert alert-unavailable\" role=\"alert\">
    <p class=\"alert-text\">
      {{ 'Not available yet.'|trans({}, 'Admin.Catalog.Feature') }}
    </p>
  </div>
{% endblock %}

{% block text_preview_widget %}
  {# This is the hidden input #}
  {{- block('form_widget_simple') -}}
  <span class=\"label text-preview {{ preview_class }}\">
    {# Allows to insert content as prefix, like an icon #}
    {% if prefix is defined %}
    <span class=\"text-preview-prefix\">
      {{ prefix|raw }}
    </span>
    {% endif %}

    <span class=\"text-preview-value\">
      {% if form.vars.allow_html %}
        {# This outputs raw value #}
        {{ value|raw }}
      {% else %}
        {# This just outputs the value #}
        {{ value|e('html') }}
      {% endif %}
    </span>

    {# Allows to insert content as suffix, like an icon #}
    {% if suffix is defined %}
    <span class=\"text-preview-suffix\">
      {{ suffix|raw }}
    </span>
    {% endif %}
  </span>
  {{- block('form_help') -}}
{% endblock %}

{% block link_preview_widget %}
  {# This is the hidden input #}
  {{- block('form_widget_simple') -}}
  <a href=\"{{ form.vars.value }}\" class=\"{{ attr.class|default('') }}\">
    {{ form.vars.button_label }}
  </a>
{% endblock %}

{% block image_preview_widget %}
  {# This is the hidden input #}
  {{- block('form_widget_simple') -}}
  {% if value is not empty %}
    <img src=\"{{ value }}\" alt=\"{{ ('Image preview for ' ~ form.vars.name)|trim }}\" class=\"{{ form.vars.image_class }}\" />
  {% else %}
    {{ 'No picture'|trans({}, 'Admin.Global') }}
  {% endif %}
{% endblock %}

{% block delta_quantity_widget %}
  {% set quantity = value.quantity|default(form.quantity.vars.value) %}
  {# If initial quantity has not been computed we use value which may be containing a placeholder useful for collection rendering #}
  {% if initialQuantity is null %}
    {% set initialQuantity = quantity %}
  {% endif %}
  {% set attr = attr|merge({class: (attr.class|default('') ~ ' delta-quantity')|trim, 'data-initial-quantity': initialQuantity}) %}
  <div {{ block('widget_container_attributes') }}>
    {{ form_widget(form.initial_quantity, {value: initialQuantity}) }}
    {{ form_widget(form.quantity, {initialQuantity: initialQuantity, deltaQuantity: deltaQuantity, value: quantity}) }}
    {{ form_row(form.delta) }}
  </div>
{% endblock %}

{% block delta_quantity_quantity_widget %}
  {%- set attr = attr|merge({class: (attr.class|default('') ~ ' delta-quantity-quantity')|trim}) -%}
  <div {{ block('widget_container_attributes') }}>
    {{- block('form_widget_simple') -}}
    <span class=\"initial-quantity\">{{ initialQuantity }}</span>
    <span class=\"quantity-update{% if deltaQuantity != 0 %} quantity-modified{% endif %}\">
      <i class=\"material-icons\">trending_flat</i>
      <span class=\"new-quantity\">{{ value }}</span>
    </span>
    {{ form_errors(form) }}
  </div>
{% endblock %}

{% block delta_quantity_delta_row %}
  <div class=\"form-group{{ block('widget_type_class') }}{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}{% if row_attr.class is defined %} {{ row_attr.class }}{% endif %}\">
    <div class=\"delta-quantity-delta-container\">
      {{- form_label(form) -}}
      {{- block('form_prepend_alert') -}}
      {{- block('form_prepend_external_link') -}}

      {{- form_widget(form) -}}

      {{- block('form_append_alert') -}}
      {{- block('form_append_external_link') -}}
    </div>
    {{- form_errors(form) -}}
    {{- block('form_modify_all_shops') -}}
  </div>
{% endblock %}

{% block delta_quantity_delta_widget %}
  {%- set type = 'number' -%}
  {%- set attr = attr|merge({class: (attr.class|default('') ~ ' delta-quantity-delta')|trim}) -%}
  {{- block('form_widget_simple') -}}
{% endblock %}

{% block submittable_input_widget %}
  {%- set attr = attr|merge({class: (attr.class|default('') ~ ' ps-submittable-input-wrapper')|trim}) -%}
  <div {{ block('widget_attributes') }}>
    {%- set typeAttr = form.vars.type_attr|merge({
      class: (form.vars.type_attr.class|default('') ~ ' submittable-input')|trim,
      'data-initial-value': form.value.vars.value,
      value: form.value.vars.value,
    }) -%}

    {{ form_widget(form.value, {attr: typeAttr}) }}
    {{- block('submittable_input_button_widget') -}}
  </div>
{% endblock submittable_input_widget %}

{% block submittable_input_button_widget %}
  <button type=\"button\" class=\"check-button d-none\">
    <i class=\"material-icons\">check</i>
  </button>
{% endblock submittable_input_button_widget %}

{% block submittable_delta_quantity_delta_widget %}
  {%- set attr = attr|merge({class: (attr.class|default('') ~ ' delta-quantity-delta ps-submittable-input-wrapper')|trim}) -%}
  <div {{ block('widget_attributes') }}>
    {%- set attr = form.vars.attr|merge({
      class: (form.vars.attr.class|default('') ~ ' submittable-input')|trim,
      'data-initial-value': value,
      value: value,
    }) -%}

    {{ form_widget(form, {attr: attr}) }}
    {{- block('submittable_input_button_widget') -}}
  </div>
{% endblock %}

{%- block navigation_tab_widget -%}
{% set attr = attr|merge({class: (attr.class|default('') ~ ' navigation-tab-widget')|trim}) %}
<div {{ block('widget_container_attributes') }}>
  <div id=\"{{ form.vars.id }}-tabs\" class=\"tabs js-tabs\">
    <div class=\"arrow d-xl-none js-arrow left-arrow float-left\">
      <i class=\"material-icons rtl-flip hide\">chevron_left</i>
    </div>

    <ul class=\"nav nav-tabs js-nav-tabs\" id=\"form-nav\" role=\"tablist\">
    {% set firstRenderedChild = true %}
    {% for child in form.children %}
      {% if not child.rendered and child.vars.name != '_toolbar_buttons' and child.vars.name != '_footer_buttons' and child.vars.name != '_token' %}
      <li id=\"{{ child.vars.id }}-tab-nav\" class=\"nav-item{% if not child.vars.valid %} has-error{% endif %}\">
        <a href=\"#{{ child.vars.id }}-tab\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link{% if firstRenderedChild %} active{% endif %}\">
          {{ child.vars.label }}
        </a>
      </li>
      {% set firstRenderedChild = false %}
      {% endif %}
    {% endfor %}
    </ul>

    <div class=\"arrow d-xl-none js-arrow right-arrow visible float-right\">
      <i class=\"material-icons rtl-flip hide\">chevron_right</i>
    </div>

    {% if form.offsetExists('_toolbar_buttons') %}
    <div class=\"navigation-tab-widget-toolbar toolbar text-md-right\">
      {{ form_widget(form._toolbar_buttons) }}
    </div>
    {% endif %}
  </div>

  <div id=\"{{ form.vars.id }}-tabs-content\" class=\"tab-content\">
    {% set firstRenderedChild = true %}
    {% for child in form.children %}
      {% if not child.rendered and child.vars.name != '_footer_buttons' and child.vars.name != '_token' %}
      <div role=\"tabpanel\" class=\"form-contenttab tab-pane container-fluid{% if firstRenderedChild %} active{% endif %}\" id=\"{{ child.vars.id }}-tab\">
        {% if child.vars.label_tab is defined %}
          {# We force required false here so that the required asterix is never shown on the tab title #}
          {{ form_label(child, child.vars.label_tab, {required: false}) }}
        {% endif %}
        {{ form_errors(child) }}
        {{ form_widget(child) }}
      </div>
      {% set firstRenderedChild = false %}
      {% endif %}
    {% endfor %}
  </div>

  {% if form.offsetExists('_footer_buttons') %}
    <div class=\"navigation-tab-widget-footer\">
      {{ form_widget(form._footer_buttons) }}
    </div>
  {% endif %}
</div>
{% endblock %}

{%- block accordion_widget -%}
  {%- set attr = attr|merge({
    class: (attr.class|default('') ~ ' accordion accordion-form')|trim,
  }) -%}
  <div {{ block('widget_attributes') }}>
    {% set firstChild = true %}
    {% for child in form %}
      {% if child.vars.compound %}
      {% set hasError = child.vars.valid != true %}
      {% set isExpanded = firstChild and expand_first or (hasError and expand_on_error) or expand_all %}
      <div class=\"card\">
        <div class=\"card-header\" id=\"{{ child.vars.id }}_accordion_header\">
          <h2 class=\"mb-0\">
            <button
              class=\"accordion-form-button {% if hasError %} has-error {% endif %} btn btn-block text-left{% if not isExpanded %} collapsed{% endif %}\"
              type=\"button\"
              data-toggle=\"collapse\"
              data-target=\"#{{ child.vars.id }}_accordion\"
              aria-expanded=\"{% if isExpanded %}true{% else %}false{% endif %}\"
              aria-controls=\"{{ child.vars.id }}_accordion\">
              <span class=\"accordion-form-button-label\">{{ child.vars.label }}</span>
              {% if child.vars.label_subtitle is defined %}
                <span class=\"accordion-form-button-sub-label\">{{ child.vars.label_subtitle }}</span>
              {% endif %}
              <i class=\"material-icons\"></i>
            </button>
          </h2>
        </div>

        <div id=\"{{ child.vars.id }}_accordion\" class=\"collapse{% if isExpanded %} show{% endif %}\" aria-labelledby=\"{{ child.vars.id }}_accordion_header\" {% if display_one %}data-parent=\"#{{ form.vars.id }}\"{% endif %}>
          <div class=\"card-body\">
            {% set childAttr = {class: 'accordion-sub-form'} %}
            {{ form_widget(child, {attr: childAttr}) }}
            {{ form_errors(child) }}
          </div>
        </div>
      </div>
      {% set firstChild = false %}
      {% endif %}
    {% endfor %}

    {# Display rest of children that may have not been rendered because they were not compound forms, like token hidden field for example #}
    {{ form_rest(form) }}
  </div>
{%- endblock -%}

{% block button_collection_widget %}
  {%- set attr = attr|merge({
    class: (attr.class|default('') ~ ' form-group btn-collection btn-toolbar')|trim,
    role: 'group',
    style: 'justify-content: ' ~ justify_content
  }) -%}
  <div {{ block('widget_attributes') }}>
    {% for group, buttons in button_groups %}
      <div class=\"{% if use_button_groups %}btn-group {% endif %}group-{{ group }}\">
        {# Render inline actions #}
        {% set inlineButtonsLimit = form.vars.inline_buttons_limit %}
        {% for button in buttons %}
          {% set action = attribute(form, button) %}
          {% if inlineButtonsLimit is same as(null) or loop.index <= inlineButtonsLimit %}
            {# Remove labels from inline elements if they are not forced #}
            {% if form.vars.use_inline_labels %}
              {% set actionLabel = action.vars.label %}
            {% else %}
              {% set actionLabel = '' %}
            {% endif %}
            {{ form_widget(action, {label: actionLabel}) }}
          {% endif %}
        {% endfor %}

        {# Render remaining actions in dropdown #}
        {% if inlineButtonsLimit is not same as(null) and buttons|length > inlineButtonsLimit %}
          <a id=\"{{ form.vars.id }}_dropdown\" class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split no-rotate\"
             data-toggle=\"dropdown\"
             aria-haspopup=\"true\"
             aria-expanded=\"false\"
          >
          </a>
          <div class=\"dropdown-menu\">
            {% set remainingButtons = buttons|slice(inlineButtonsLimit) %}
            {% for button in remainingButtons %}
              {% set action = attribute(form, button) %}
              {{ form_widget(action, {attr: {
                class: 'dropdown-item ' ~ action.vars.attr.class|default('')|trim
              }}) }}
            {% endfor %}
          </div>
        {% endif %}
      </div>
    {% endfor %}
  </div>
{% endblock %}

{% block avatar_url_row %}
  {{ form_row(form, {attr: attr}) }}

  <div class=\"form-group row\">
    <label class=\"form-control-label\"></label>
    <div class=\"col-sm\">
      <img class=\"img-thumbnail clickable-avatar\" src=\"{{ form.parent.vars.value.avatar_url }}\" alt=\"\">
    </div>
  </div>
{% endblock %}

{% block change_password_row %}
  <div class=\"form-group row\">
    <label class=\"form-control-label\">
      {{ 'Password'|trans({}, 'Admin.Global') }}
    </label>
    <div class=\"col-sm\">
      {# \"Change password\" button #}
      {{ form_row(form.children.change_password_button) }}

      <div class=\"card card-body js-change-password-block d-none\">
        {# Current password input #}
        {{ form_row(form.children.old_password) }}

        {# New password first input #}
        {# New password second input (confirmation) #}
        {{ form_row(form.children.new_password) }}

        <div class=\"form-group row\">
          <label class=\"form-control-label\"></label>
          <div class=\"col-sm\">
            {{ form_widget(form.children.generated_password) }}
          </div>
          <div class=\"col-sm\">
            {{ form_widget(form.children.generate_password_button) }}
          </div>
        </div>
        {{ form_row(form.children.cancel_button) }}

        {# Password strength feedback messages - used in JS #}
        <div class=\"js-password-strength-feedback d-none\">
          <span class=\"strength-low\">{{ 'Invalid'|trans({}, 'Admin.Advparameters.Help') }}</span>
          <span class=\"strength-medium\">{{ 'Okay'|trans({}, 'Admin.Advparameters.Help') }}</span>
          <span class=\"strength-high\">{{ 'Good'|trans({}, 'Admin.Advparameters.Help') }}</span>
          <span class=\"strength-extreme\">{{ 'Fabulous'|trans({}, 'Admin.Advparameters.Help') }}</span>
        </div>
      </div>
    </div>
  </div>
{% endblock %}

{%- block price_reduction_widget -%}
  {% set attr = attr|merge({class: (attr.class|default('') ~ ' reduction-widget row')|trim}) %}
  <div {{ block('widget_attributes') }}>
    {% for child in form.children %}
      {% with {row_attr: child.vars.row_attr|merge({class: (child.vars.row_attr.class|default('') ~ ' col col-md-3')|trim})} %}
      <div {{ block('row_attributes') }}>
      {% endwith %}
        {{ form_widget(child) }}
        {{ form_errors(child) }}
      </div>
    {% endfor -%}
  </div>
{%- endblock -%}

{% block image_with_preview_widget %}
  {% if data is defined and data is not empty %}
    <div>
      {% for preview_image in data %}
{# Checking for is defined because they file might come from submitted form when thera are too many thumbnails and an errro #}
{# in that case data will be a file based on symfony and not a image array formatted for this form #}
        {% if preview_image.image_path is defined %}
          {% if can_be_deleted %}
            <figure class=\"figure\">
              <img src=\"{{ preview_image.image_path }}\" class=\"figure-img img-fluid img-thumbnail\">
              <figcaption class=\"figure-caption\">
                {% if show_size %}
                  <p>{{ 'File size'|trans({}, 'Admin.Advparameters.Feature') }} {{ preview_image.size }}</p>
                {% endif %}
                <button class=\"btn btn-outline-danger btn-sm js-form-submit-btn\"
                        data-form-submit-url=\"{{ preview_image.delete_path }}\"
                >
                  <i class=\"material-icons\">
                    delete_forever
                  </i>
                  {{ 'Delete'|trans({}, 'Admin.Actions') }}
                </button>
              </figcaption>
            </figure>
          {% else %}
            {% for preview_image in data %}
              <figure class=\"figure\">
                <img src=\"{{ preview_image.image_path }}\" class=\"figure-img img-fluid img-thumbnail\">
                {% if show_size %}
                  <figcaption class=\"figure-caption\">{{ 'File size'|trans({}, 'Admin.Advparameters.Feature') }} {{ preview_image.size }}</figcaption>
                {% endif %}
              </figure>
            {% endfor %}
          {% endif %}
      {% endif %}
      {% endfor %}
    </div>
  {% endif %}
  {{ block('file_widget') }}
{% endblock image_with_preview_widget %}
", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig");
    }
}
