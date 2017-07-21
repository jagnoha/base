<?php

/* profiles/varbase/modules/contrib/ds/templates/ds-2col-fluid.html.twig */
class __TwigTemplate_5d1dbea07a9179f0f78169691c37d516deca94fce16275fc4b8232cc2b8fd0dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 18, "if" => 21);
        $filters = array("render" => 18);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('render'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 17
        echo "
";
        // line 18
        $context["left"] = $this->env->getExtension('drupal_core')->renderVar((isset($context["left"]) ? $context["left"] : null));
        // line 19
        $context["right"] = $this->env->getExtension('drupal_core')->renderVar((isset($context["right"]) ? $context["right"] : null));
        // line 20
        echo "
";
        // line 21
        if ((((isset($context["left"]) ? $context["left"] : null) &&  !(isset($context["right"]) ? $context["right"] : null)) || ((isset($context["right"]) ? $context["right"] : null) &&  !(isset($context["left"]) ? $context["left"] : null)))) {
            // line 22
            echo "  ";
            $context["layout_class"] = "group-one-column";
        }
        // line 24
        echo "
<";
        // line 25
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["outer_wrapper"]) ? $context["outer_wrapper"] : null), "html", null, true));
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["layout_class"]) ? $context["layout_class"] : null), 1 => "ds-2col-fluid", 2 => "clearfix"), "method"), "html", null, true));
        echo ">

  ";
        // line 27
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_suffix"]) ? $context["title_suffix"] : null), "contextual_links", array()), "html", null, true));
        echo "

  ";
        // line 29
        if ((isset($context["left"]) ? $context["left"] : null)) {
            // line 30
            echo "    <";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["left_wrapper"]) ? $context["left_wrapper"] : null), "html", null, true));
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["left_attributes"]) ? $context["left_attributes"] : null), "addClass", array(0 => "group-left"), "method"), "html", null, true));
            echo ">
      ";
            // line 31
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["left"]) ? $context["left"] : null), "html", null, true));
            echo "
    </";
            // line 32
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["left_wrapper"]) ? $context["left_wrapper"] : null), "html", null, true));
            echo ">
  ";
        }
        // line 34
        echo "
  ";
        // line 35
        if ((isset($context["right"]) ? $context["right"] : null)) {
            // line 36
            echo "    <";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["right_wrapper"]) ? $context["right_wrapper"] : null), "html", null, true));
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["right_attributes"]) ? $context["right_attributes"] : null), "addClass", array(0 => "group-right"), "method"), "html", null, true));
            echo ">
      ";
            // line 37
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["right"]) ? $context["right"] : null), "html", null, true));
            echo "
    </";
            // line 38
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["right_wrapper"]) ? $context["right_wrapper"] : null), "html", null, true));
            echo ">
  ";
        }
        // line 40
        echo "
</";
        // line 41
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["outer_wrapper"]) ? $context["outer_wrapper"] : null), "html", null, true));
        echo ">
";
    }

    public function getTemplateName()
    {
        return "profiles/varbase/modules/contrib/ds/templates/ds-2col-fluid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 41,  110 => 40,  105 => 38,  101 => 37,  95 => 36,  93 => 35,  90 => 34,  85 => 32,  81 => 31,  75 => 30,  73 => 29,  68 => 27,  62 => 25,  59 => 24,  55 => 22,  53 => 21,  50 => 20,  48 => 19,  46 => 18,  43 => 17,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Display Suite fluid 2 column template.
 *
 * Available variables:
 * - outer_wrapper: outer wrapper element
 * - left_wrapper: wrapper element around left region
 * - right_wrapper: wrapper element around right region
 * - attributes: layout attributes
 * - left_attributes: attributes for left region
 * - right_attributes: attributes for right region
 * - left: content of left region
 * - right: content of right region
 */
#}

{% set left = left|render %}
{% set right = right|render %}

{% if (left and not right) or (right and not left) %}
  {% set layout_class = 'group-one-column' %}
{% endif %}

<{{ outer_wrapper }}{{ attributes.addClass(layout_class, 'ds-2col-fluid', 'clearfix') }}>

  {{ title_suffix.contextual_links }}

  {% if left %}
    <{{ left_wrapper }}{{ left_attributes.addClass('group-left') }}>
      {{ left }}
    </{{ left_wrapper }}>
  {% endif %}

  {% if right %}
    <{{ right_wrapper }}{{ right_attributes.addClass('group-right') }}>
      {{ right }}
    </{{ right_wrapper }}>
  {% endif %}

</{{ outer_wrapper }}>
";
    }
}
