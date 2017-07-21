<?php

/* profiles/varbase/modules/contrib/bootstrap_layouts/templates/3.0.0/bs-3col.html.twig */
class __TwigTemplate_70e0c5c12d6eb34f9475e77f11a346815e14738079d32b6b411124b1345a75ac extends Twig_Template
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
        $tags = array("if" => 24);
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

        // line 21
        echo "<";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["wrapper"]) ? $context["wrapper"] : null), "html", null, true));
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  ";
        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_suffix"]) ? $context["title_suffix"] : null), "contextual_links", array()), "html", null, true));
        echo "

  ";
        // line 24
        if ($this->getAttribute((isset($context["left"]) ? $context["left"] : null), "content", array())) {
            // line 25
            echo "  <";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["left"]) ? $context["left"] : null), "wrapper", array()), "html", null, true));
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["left"]) ? $context["left"] : null), "attributes", array()), "html", null, true));
            echo ">
    ";
            // line 26
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["left"]) ? $context["left"] : null), "content", array()), "html", null, true));
            echo "
  </";
            // line 27
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["left"]) ? $context["left"] : null), "wrapper", array()), "html", null, true));
            echo ">
  ";
        }
        // line 29
        echo "
  ";
        // line 30
        if ($this->getAttribute((isset($context["middle"]) ? $context["middle"] : null), "content", array())) {
            // line 31
            echo "  <";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["middle"]) ? $context["middle"] : null), "wrapper", array()), "html", null, true));
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["middle"]) ? $context["middle"] : null), "attributes", array()), "html", null, true));
            echo ">
    ";
            // line 32
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["middle"]) ? $context["middle"] : null), "content", array()), "html", null, true));
            echo "
  </";
            // line 33
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["middle"]) ? $context["middle"] : null), "wrapper", array()), "html", null, true));
            echo ">
  ";
        }
        // line 35
        echo "
  ";
        // line 36
        if ($this->getAttribute((isset($context["right"]) ? $context["right"] : null), "content", array())) {
            // line 37
            echo "  <";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["right"]) ? $context["right"] : null), "wrapper", array()), "html", null, true));
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["right"]) ? $context["right"] : null), "attributes", array()), "html", null, true));
            echo ">
    ";
            // line 38
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["right"]) ? $context["right"] : null), "content", array()), "html", null, true));
            echo "
  </";
            // line 39
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["right"]) ? $context["right"] : null), "wrapper", array()), "html", null, true));
            echo ">
  ";
        }
        // line 41
        echo "
</";
        // line 42
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["wrapper"]) ? $context["wrapper"] : null), "html", null, true));
        echo ">
";
    }

    public function getTemplateName()
    {
        return "profiles/varbase/modules/contrib/bootstrap_layouts/templates/3.0.0/bs-3col.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 42,  111 => 41,  106 => 39,  102 => 38,  96 => 37,  94 => 36,  91 => 35,  86 => 33,  82 => 32,  76 => 31,  74 => 30,  71 => 29,  66 => 27,  62 => 26,  56 => 25,  54 => 24,  49 => 22,  43 => 21,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Bootstrap Layouts: \"3 Columns\" template.
 *
 * Available layout variables:
 * - wrapper: Wrapper element for the layout container.
 * - attributes: Wrapper attributes for the layout container.
 *
 * Available region variables:
 * - left
 * - middle
 * - right
 *
 * Each region variable contains the following properties:
 * - wrapper: The HTML element to use to wrap this region.
 * - attributes: The HTML attributes to use on the wrapper for this region.
 * - content: The content to go inside the wrapper for this region.
 */
#}
<{{ wrapper }}{{ attributes }}>
  {{ title_suffix.contextual_links }}

  {% if left.content %}
  <{{ left.wrapper }}{{ left.attributes }}>
    {{ left.content }}
  </{{ left.wrapper }}>
  {% endif %}

  {% if middle.content %}
  <{{ middle.wrapper }}{{ middle.attributes }}>
    {{ middle.content }}
  </{{ middle.wrapper }}>
  {% endif %}

  {% if right.content %}
  <{{ right.wrapper }}{{ right.attributes }}>
    {{ right.content }}
  </{{ right.wrapper }}>
  {% endif %}

</{{ wrapper }}>
";
    }
}
