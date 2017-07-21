<?php

/* {# inline_template_start #}{% if wrapper %}
<{{ wrapper }}{{ attributes }}>
{% endif %}
{% if is_link %}
  {{ link(output, entity_url) }}
{% else %}
  {{ output }}
{% endif %}
{% if wrapper %}
</{{ wrapper }}>
{% endif %} */
class __TwigTemplate_63db0af3c647b24e63279de47a4dfdf6d2f88084f2de177040e69e9669b1dbbf extends Twig_Template
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
        $tags = array("if" => 1);
        $filters = array();
        $functions = array("link" => 5);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array('link')
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

        // line 1
        if ((isset($context["wrapper"]) ? $context["wrapper"] : null)) {
            // line 2
            echo "<";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["wrapper"]) ? $context["wrapper"] : null), "html", null, true));
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
            echo ">
";
        }
        // line 4
        if ((isset($context["is_link"]) ? $context["is_link"] : null)) {
            // line 5
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getLink((isset($context["output"]) ? $context["output"] : null), (isset($context["entity_url"]) ? $context["entity_url"] : null)), "html", null, true));
            echo "
";
        } else {
            // line 7
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["output"]) ? $context["output"] : null), "html", null, true));
            echo "
";
        }
        // line 9
        if ((isset($context["wrapper"]) ? $context["wrapper"] : null)) {
            // line 10
            echo "</";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["wrapper"]) ? $context["wrapper"] : null), "html", null, true));
            echo ">
";
        }
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{% if wrapper %}
<{{ wrapper }}{{ attributes }}>
{% endif %}
{% if is_link %}
  {{ link(output, entity_url) }}
{% else %}
  {{ output }}
{% endif %}
{% if wrapper %}
</{{ wrapper }}>
{% endif %}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 10,  76 => 9,  70 => 7,  64 => 5,  62 => 4,  55 => 2,  53 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}{% if wrapper %}
<{{ wrapper }}{{ attributes }}>
{% endif %}
{% if is_link %}
  {{ link(output, entity_url) }}
{% else %}
  {{ output }}
{% endif %}
{% if wrapper %}
</{{ wrapper }}>
{% endif %}";
    }
}
