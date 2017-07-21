<?php

/* core/themes/classy/templates/views/views-view-summary.html.twig */
class __TwigTemplate_a0a508017f71e06565b67618bc8a4def0548459ac3f2e8c1cfdcdc1dcaa4accf extends Twig_Template
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
        $tags = array("for" => 23, "if" => 25);
        $filters = array("without" => 24);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for', 'if'),
                array('without'),
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
        echo "<div class=\"item-list\">
  <ul class=\"views-summary\">
  ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 24
            echo "    <li><a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "url", array()), "html", null, true));
            echo "\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute($context["row"], "attributes", array()), "addClass", array(0 => (($this->getAttribute($context["row"], "active", array())) ? ("is-active") : (""))), "method"), "href"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "link", array()), "html", null, true));
            echo "</a>
      ";
            // line 25
            if ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "count", array())) {
                // line 26
                echo "        (";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "count", array()), "html", null, true));
                echo ")
      ";
            }
            // line 28
            echo "    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/views/views-view-summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 30,  68 => 28,  62 => 26,  60 => 25,  51 => 24,  47 => 23,  43 => 21,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to display a list of summary lines.
 *
 * Available variables:
 * - rows: The rows contained in this view.
 *   Each row contains:
 *   - url: The summary link URL.
 *   - link: The summary link text.
 *   - count: The number of items under this grouping.
 *   - attributes: HTML attributes to apply to each row.
 *   - active: A flag indicating whtether the row is active.
 * - options: Flags indicating how the summary should be displayed.
 *   This contains:
 *   - count: A flag indicating whether the count should be displayed.
 *
 * @see template_preprocess_views_view_summary()
 */
#}
<div class=\"item-list\">
  <ul class=\"views-summary\">
  {% for row in rows %}
    <li><a href=\"{{ row.url }}\"{{ row.attributes.addClass(row.active ? 'is-active')|without('href') }}>{{ row.link }}</a>
      {% if options.count %}
        ({{ row.count }})
      {% endif %}
    </li>
  {% endfor %}
  </ul>
</div>
";
    }
}
