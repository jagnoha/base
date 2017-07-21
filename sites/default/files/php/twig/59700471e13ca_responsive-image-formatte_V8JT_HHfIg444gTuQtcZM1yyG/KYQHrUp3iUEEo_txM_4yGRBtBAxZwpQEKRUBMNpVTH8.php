<?php

/* core/modules/responsive_image/templates/responsive-image-formatter.html.twig */
class __TwigTemplate_f99afdead3c1ccc42d63df8ddfa2391310c5a3499dde62b9702449cea9f1575a extends Twig_Template
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
        $tags = array("if" => 15);
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

        // line 15
        if ((isset($context["url"]) ? $context["url"] : null)) {
            // line 16
            echo "  <a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["responsive_image"]) ? $context["responsive_image"] : null), "html", null, true));
            echo "</a>
";
        } else {
            // line 18
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["responsive_image"]) ? $context["responsive_image"] : null), "html", null, true));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/responsive_image/templates/responsive-image-formatter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 18,  45 => 16,  43 => 15,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display a formatted responsive image field.
 *
 * Available variables:
 * - responsive_image: A collection of responsive image data.
 * - url: An optional URL the image can be linked to.
 *
 * @see template_preprocess_responsive_image_formatter()
 *
 * @ingroup themeable
 */
#}
{% if url %}
  <a href=\"{{ url }}\">{{ responsive_image }}</a>
{% else %}
  {{ responsive_image }}
{% endif %}
";
    }
}
