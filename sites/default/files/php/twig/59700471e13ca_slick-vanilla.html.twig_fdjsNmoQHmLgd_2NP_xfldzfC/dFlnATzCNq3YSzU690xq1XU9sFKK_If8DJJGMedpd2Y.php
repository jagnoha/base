<?php

/* profiles/varbase/modules/contrib/slick/templates/slick-vanilla.html.twig */
class __TwigTemplate_2f64607f96d478cc7de116fd724f2bb04e74ad8cc32d16232459a2816bf1918a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'slick_vanilla' => array($this, 'block_slick_vanilla'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 19, "block" => 25);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'block'),
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

        // line 19
        $context["classes"] = array(0 => "slick__slide", 1 => "slide", 2 => ("slide--" .         // line 22
(isset($context["delta"]) ? $context["delta"] : null)));
        // line 25
        $this->displayBlock('slick_vanilla', $context, $blocks);
    }

    public function block_slick_vanilla($context, array $blocks = array())
    {
        // line 26
        echo "  <div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
    ";
        // line 27
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["item"]) ? $context["item"] : null), "html", null, true));
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "profiles/varbase/modules/contrib/slick/templates/slick-vanilla.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 27,  53 => 26,  47 => 25,  45 => 22,  44 => 19,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation for the slick-vanilla item template.
 *
 * This is a vanilla alternative for slick-slide.html.twig where everything is
 * dumped as is into 'item'. Think of it as a raw individual item output.
 * Choosing vanilla means you are on your own, and want a more controlled item.
 *
 * Available variables:
 * - attributes: An array of attributes to apply to the element.
 * - item: A renderable array of the slide content.
 * - settings: An array containing the given settings.
 *
 * @see template_preprocess_slick_vanilla()
 */
#}
{%
  set classes = [
    'slick__slide',
    'slide',
    'slide--' ~ delta
  ]
%}
{% block slick_vanilla %}
  <div{{ attributes.addClass(classes) }}>
    {{ item }}
  </div>
{% endblock %}
";
    }
}
