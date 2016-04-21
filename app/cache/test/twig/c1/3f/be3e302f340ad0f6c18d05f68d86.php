<?php

/* NewsUserBundle:NewsUser:new.html.twig */
class __TwigTemplate_c13fbe3e302f340ad0f6c18d05f68d86 extends Twig_Template
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
        echo "
\t\t";
        // line 2
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
            // line 3
            echo "\t\t\t";
            if ((($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type") == "00") || ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type") == "06"))) {
                // line 4
                echo "\t\t\t\t";
                $this->env->loadTemplate("NewsUserBundle:NewsUser:newsWebSite.html.twig")->display(array_merge($context, array("entity" => (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")))));
                // line 5
                echo "\t\t\t";
            }
            // line 6
            echo "\t\t\t";
            if ((((($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type") == "02") || ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type") == "03")) || ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type") == "04")) || ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type") == "05"))) {
                // line 7
                echo "\t\t\t\t";
                $this->env->loadTemplate("NewsUserBundle:NewsUser:newsEventCreate.html.twig")->display(array_merge($context, array("entity" => (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")))));
                // line 8
                echo "\t\t\t";
            }
            echo "\t\t
\t\t\t\t\t\t
        ";
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
        // line 11
        echo "        
        <div id=\"moreNews_";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["firstResult"]) ? $context["firstResult"] : $this->getContext($context, "firstResult")), "html", null, true);
        echo "\">
\t\t\t<div class=\"clearfix\">
\t\t\t\t<button type=\"submit\" id=\"morenotice\" style=\"width: 100%\" onclick=\"moreData('#moreNews_";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["firstResult"]) ? $context["firstResult"] : $this->getContext($context, "firstResult")), "html", null, true);
        echo "','";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("more_news_user", array("firstResult" => (isset($context["firstResult"]) ? $context["firstResult"] : $this->getContext($context, "firstResult")), "maxResults" => (isset($context["max_records"]) ? $context["max_records"] : $this->getContext($context, "max_records")))), "html", null, true);
        echo "')\" class=\"btn btn-success pull-right\">Ver mas</button>
\t\t\t</div>\t
\t\t</div>\t

\t\t
\t\t<script type=\"text/javascript\">
<!--
//nice select boxes

//-->

</script>
";
    }

    public function getTemplateName()
    {
        return "NewsUserBundle:NewsUser:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 14,  75 => 12,  72 => 11,  54 => 8,  51 => 7,  48 => 6,  45 => 5,  42 => 4,  39 => 3,  22 => 2,  19 => 1,);
    }
}
