<?php

/* EventBundle:Result:last_result.html.twig */
class __TwigTemplate_70111a0f945ffb897235a5c78e72ac33 extends Twig_Template
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
        // line 1
        echo "<div class=\"table-responsive\">
\t\t<table class=\"table user-list table-hover\" style=\"clear: both\">
\t\t\t<tbody>
\t\t\t\t\t
\t\t\t\t";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 6
            echo "\t\t\t\t<tr>
\t\t\t\t
\t\t\t\t\t<td style=\"height: 20%;\">
\t\t\t\t\t\t<img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "photo")), "html", null, true);
            echo "\" alt=\"\"/>
\t\t\t\t\t\t<a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
            echo "</a><br>
\t\t\t\t\t\t<span class=\"user-subhead\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sport"), "html", null, true);
            echo "</span>
\t\t\t\t\t</td>
\t\t\t\t
\t\t\t\t</tr>
\t\t\t
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t\t\t
\t\t\t</tbody>
\t\t</table>
\t</div>

\t
\t
\t\t\t\t\t\t\t\t
\t\t\t\t
\t\t\t\t

";
    }

    public function getTemplateName()
    {
        return "EventBundle:Result:last_result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 17,  44 => 11,  38 => 10,  34 => 9,  29 => 6,  25 => 5,  19 => 1,);
    }
}
