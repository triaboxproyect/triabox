<?php

/* EventBundle:Event:listEvent.html.twig */
class __TwigTemplate_2c4ebd2091dabe3dcb1cdaac41cb0a9b extends Twig_Template
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
        echo "<div class=\"main-box\" id=\"main-box\">

\t\t\t\t\t\t\t\t
\t\t\t\t";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            echo " 
\t\t\t\t\t";
            // line 5
            $this->env->loadTemplate("EventBundle:Event:view.html.twig")->display(array_merge($context, array("entity" => (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipe" => (isset($context["tipe"]) ? $context["tipe"] : $this->getContext($context, "tipe")))));
            echo " 
\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "\t\t\t
\t\t\t\t";
        // line 8
        if (((isset($context["tipe"]) ? $context["tipe"] : $this->getContext($context, "tipe")) == "next_all")) {
            // line 9
            echo "\t\t\t\t\t<div id=\"moreNewsAll_";
            echo twig_escape_filter($this->env, (isset($context["firstResult"]) ? $context["firstResult"] : $this->getContext($context, "firstResult")), "html", null, true);
            echo "\">\t\t\t\t\t\t\t
\t\t\t\t";
        } else {
            // line 11
            echo "\t\t\t\t\t<div id=\"moreNews_";
            echo twig_escape_filter($this->env, (isset($context["firstResult"]) ? $context["firstResult"] : $this->getContext($context, "firstResult")), "html", null, true);
            echo "\">
\t\t\t\t";
        }
        // line 12
        echo "\t
\t\t\t\t 
\t\t\t\t\t
\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t";
        // line 16
        if (((isset($context["tipe"]) ? $context["tipe"] : $this->getContext($context, "tipe")) == "next")) {
            // line 17
            echo "\t\t\t\t\t\t\t<button type=\"submit\" onclick=\"moreData('#moreNews_";
            echo twig_escape_filter($this->env, (isset($context["firstResult"]) ? $context["firstResult"] : $this->getContext($context, "firstResult")), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_next_ajax", array("firstResult" => (isset($context["firstResult"]) ? $context["firstResult"] : $this->getContext($context, "firstResult")), "maxResults" => (isset($context["max_records"]) ? $context["max_records"] : $this->getContext($context, "max_records")))), "html", null, true);
            echo "')\" class=\"btn btn-success pull-right\">Ver mas</button>
\t\t\t\t\t\t";
        }
        // line 19
        echo "\t\t\t\t\t\t";
        if (((isset($context["tipe"]) ? $context["tipe"] : $this->getContext($context, "tipe")) == "past")) {
            // line 20
            echo "\t\t\t\t\t\t\t<button type=\"submit\" onclick=\"moreData('#moreNews_";
            echo twig_escape_filter($this->env, (isset($context["firstResult"]) ? $context["firstResult"] : $this->getContext($context, "firstResult")), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_past_ajax", array("firstResult" => (isset($context["firstResult"]) ? $context["firstResult"] : $this->getContext($context, "firstResult")), "maxResults" => (isset($context["max_records"]) ? $context["max_records"] : $this->getContext($context, "max_records")))), "html", null, true);
            echo "')\" class=\"btn btn-success pull-right\">Ver mas</button>
\t\t\t\t\t\t";
        }
        // line 22
        echo "\t\t\t\t\t\t";
        if (((isset($context["tipe"]) ? $context["tipe"] : $this->getContext($context, "tipe")) == "next_all")) {
            // line 23
            echo "\t\t\t\t\t\t\t<button type=\"submit\" onclick=\"moreData('#moreNewsAll_";
            echo twig_escape_filter($this->env, (isset($context["firstResult"]) ? $context["firstResult"] : $this->getContext($context, "firstResult")), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_next_all", array("firstResult" => (isset($context["firstResult"]) ? $context["firstResult"] : $this->getContext($context, "firstResult")), "maxResults" => (isset($context["max_records"]) ? $context["max_records"] : $this->getContext($context, "max_records")))), "html", null, true);
            echo "')\" class=\"btn btn-success pull-right\">Ver mas</button>\t\t\t\t\t\t\t
\t\t\t\t\t\t";
        }
        // line 24
        echo "\t
\t\t\t\t\t</div>\t
\t\t\t\t</div>\t
</div>\t\t";
    }

    public function getTemplateName()
    {
        return "EventBundle:Event:listEvent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 24,  106 => 23,  103 => 22,  95 => 20,  92 => 19,  84 => 17,  82 => 16,  76 => 12,  70 => 11,  64 => 9,  62 => 8,  59 => 7,  43 => 5,  24 => 4,  19 => 1,);
    }
}
