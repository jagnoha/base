<?php

/* profiles/varbase/modules/contrib/vmi/templates/vertical-media-teaser/vertical-media-teaser-xlarge.html.twig */
class __TwigTemplate_bf67853c85f73cfbeba3f9af3f4a06a97476bf30d0cde5a254d49f063366cc46 extends Twig_Template
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
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "vertical-media-teaser-view-mode", 1 => "xlarge", 2 => "clearfix"), "method"), "html", null, true));
        echo ">
  <";
        // line 11
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["main_wrapper"]) ? $context["main_wrapper"] : null), "html", null, true));
        echo " class=\"main-content\">
    ";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "main", array()), "html", null, true));
        echo "
  </";
        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["main_wrapper"]) ? $context["main_wrapper"] : null), "html", null, true));
        echo ">
</";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["outer_wrapper"]) ? $context["outer_wrapper"] : null), "html", null, true));
        echo ">";
    }

    public function getTemplateName()
    {
        return "profiles/varbase/modules/contrib/vmi/templates/vertical-media-teaser/vertical-media-teaser-xlarge.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 14,  65 => 13,  61 => 12,  57 => 11,  51 => 10,  45 => 8,  43 => 7,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * View modes inventory - Vertical media teaser - xlarge template.
 */
#}
{% if title_suffix.contextual_links is not null %}
  {{ title_suffix.contextual_links }}
{% endif %}
<{{ outer_wrapper }}{{ attributes.addClass('vertical-media-teaser-view-mode', 'xlarge', 'clearfix') }}>
  <{{ main_wrapper }} class=\"main-content\">
    {{ content.main }}
  </{{ main_wrapper }}>
</{{ outer_wrapper }}>";
    }
}
