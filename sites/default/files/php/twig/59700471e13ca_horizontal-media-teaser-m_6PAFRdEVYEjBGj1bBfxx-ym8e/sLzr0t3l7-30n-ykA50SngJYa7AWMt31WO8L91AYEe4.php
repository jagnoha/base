<?php

/* profiles/varbase/modules/contrib/vmi/templates/horizontal-media-teaser/horizontal-media-teaser-medium.html.twig */
class __TwigTemplate_69e275d0c3eebccb76364a46046cd8ffca8f23a53dc8ad79097047f45edccedd extends Twig_Template
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
        $tags = array("if" => 7);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
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

        // line 7
        if ( !(null === $this->getAttribute((isset($context["title_suffix"]) ? $context["title_suffix"] : null), "contextual_links", array()))) {
            // line 8
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_suffix"]) ? $context["title_suffix"] : null), "contextual_links", array()), "html", null, true));
            echo "
";
        }
        // line 10
        echo "<";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["outer_wrapper"]) ? $context["outer_wrapper"] : null), "html", null, true));
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "horizontal-media-teaser-view-mode", 1 => "medium", 2 => "anchor-all", 3 => "clearfix"), "method"), "html", null, true));
        echo ">
  ";
        // line 11
        if ( !(null === (isset($context["left"]) ? $context["left"] : null))) {
            // line 12
            echo "    <";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["left_wrapper"]) ? $context["left_wrapper"] : null), "html", null, true));
            echo " class=\"left col-xs-6 col-sm-6\">
      ";
            // line 13
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "left", array()), "html", null, true));
            echo "
    </";
            // line 14
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["left_wrapper"]) ? $context["left_wrapper"] : null), "html", null, true));
            echo ">
  ";
        }
        // line 16
        echo "  ";
        if ( !(null === (isset($context["right"]) ? $context["right"] : null))) {
            // line 17
            echo "    <";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["right_wrapper"]) ? $context["right_wrapper"] : null), "html", null, true));
            echo " class=\"right col-xs-6 col-sm-6\">
      ";
            // line 18
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "right", array()), "html", null, true));
            echo "
    </";
            // line 19
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["right_wrapper"]) ? $context["right_wrapper"] : null), "html", null, true));
            echo ">
  ";
        }
        // line 21
        echo "</";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["outer_wrapper"]) ? $context["outer_wrapper"] : null), "html", null, true));
        echo ">";
    }

    public function getTemplateName()
    {
        return "profiles/varbase/modules/contrib/vmi/templates/horizontal-media-teaser/horizontal-media-teaser-medium.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 21,  85 => 19,  81 => 18,  76 => 17,  73 => 16,  68 => 14,  64 => 13,  59 => 12,  57 => 11,  51 => 10,  45 => 8,  43 => 7,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * View modes inventory - Horizontal media teaser - medium template.
 */
#}
{% if title_suffix.contextual_links is not null %}
  {{ title_suffix.contextual_links }}
{% endif %}
<{{ outer_wrapper }}{{ attributes.addClass('horizontal-media-teaser-view-mode', 'medium', 'anchor-all', 'clearfix') }}>
  {% if left is not null %}
    <{{ left_wrapper }} class=\"left col-xs-6 col-sm-6\">
      {{ content.left }}
    </{{ left_wrapper }}>
  {% endif %}
  {% if right is not null %}
    <{{ right_wrapper }} class=\"right col-xs-6 col-sm-6\">
      {{ content.right }}
    </{{ right_wrapper }}>
  {% endif %}
</{{ outer_wrapper }}>";
    }
}
