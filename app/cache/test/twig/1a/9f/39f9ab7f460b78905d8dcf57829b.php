<?php

/* EventBundle:Event:listEventPublic.html.twig */
class __TwigTemplate_1a9f39f9ab7f460b78905d8dcf57829b extends Twig_Template
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

<div class=\"main-box-body clearfix\">
\t\t\t\t
\t\t\t\t";
        // line 5
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
\t\t\t\t
\t\t\t\t";
            // line 7
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user") == null)) {
                // line 8
                echo "\t\t\t\t<div class=\"col-lg-4 col-md-5 col-sm-6\">
\t\t\t\t\t";
                // line 9
                $this->env->loadTemplate("EventBundle:Event:view_public.html.twig")->display(array_merge($context, array("entity" => (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipe" => (isset($context["tipe"]) ? $context["tipe"] : $this->getContext($context, "tipe")))));
                echo " 
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
            } else {
                // line 13
                echo "\t\t\t\t<div class=\"col-lg-4 col-md-5 col-sm-6\">
\t\t\t\t\t";
                // line 14
                $this->env->loadTemplate("EventBundle:Event:view.html.twig")->display(array_merge($context, array("entity" => (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipe" => (isset($context["tipe"]) ? $context["tipe"] : $this->getContext($context, "tipe")))));
                echo " 
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 17
            echo "\t\t\t\t
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
        // line 19
        echo "\t\t\t\t";
        if ((twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))) == 0)) {
            // line 20
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-warning fa-fw fa-lg\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>No existen eventos</strong>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 25
        echo "\t\t\t\t
\t\t\t\t\t\t";
        // line 26
        if (((isset($context["idSport"]) ? $context["idSport"] : $this->getContext($context, "idSport")) == "9")) {
            // line 27
            echo "\t\t\t\t\t\t\t<div id=\"running_";
            echo twig_escape_filter($this->env, (isset($context["firstResult"]) ? $context["firstResult"] : $this->getContext($context, "firstResult")), "html", null, true);
            echo "\">
\t\t\t\t\t\t";
        }
        // line 29
        echo "\t\t\t\t\t\t";
        if (((isset($context["idSport"]) ? $context["idSport"] : $this->getContext($context, "idSport")) == "3")) {
            // line 30
            echo "\t\t\t\t\t\t\t<div id=\"triatlon_";
            echo twig_escape_filter($this->env, (isset($context["firstResult"]) ? $context["firstResult"] : $this->getContext($context, "firstResult")), "html", null, true);
            echo "\">
\t\t\t\t\t\t";
        }
        // line 32
        echo "\t\t\t\t\t\t";
        if (((isset($context["idSport"]) ? $context["idSport"] : $this->getContext($context, "idSport")) == "1")) {
            // line 33
            echo "\t\t\t\t\t\t\t<div id=\"natacion_";
            echo twig_escape_filter($this->env, (isset($context["firstResult"]) ? $context["firstResult"] : $this->getContext($context, "firstResult")), "html", null, true);
            echo "\">\t\t\t\t\t\t\t
\t\t\t\t\t\t";
        }
        // line 34
        echo "\t
\t\t\t\t\t\t";
        // line 35
        if (((isset($context["idSport"]) ? $context["idSport"] : $this->getContext($context, "idSport")) == "2")) {
            // line 36
            echo "\t\t\t\t\t\t\t<div id=\"ciclismo_";
            echo twig_escape_filter($this->env, (isset($context["firstResult"]) ? $context["firstResult"] : $this->getContext($context, "firstResult")), "html", null, true);
            echo "\">\t\t\t\t\t\t\t
\t\t\t\t\t\t";
        }
        // line 37
        echo "\t
\t\t\t\t\t\t";
        // line 38
        if (((isset($context["idSport"]) ? $context["idSport"] : $this->getContext($context, "idSport")) == "4")) {
            // line 39
            echo "\t\t\t\t\t\t\t<div id=\"duatlon_";
            echo twig_escape_filter($this->env, (isset($context["firstResult"]) ? $context["firstResult"] : $this->getContext($context, "firstResult")), "html", null, true);
            echo "\">\t\t\t\t\t\t\t
\t\t\t\t\t\t";
        }
        // line 40
        echo "\t
\t\t\t\t 
\t\t\t\t\t
\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t";
        // line 44
        if (((isset($context["idSport"]) ? $context["idSport"] : $this->getContext($context, "idSport")) == "9")) {
            // line 45
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<button type=\"submit\" style=\"width: 100%\" onclick=\"moreData('#running_";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["firstResult"]) ? $context["firstResult"] : $this->getContext($context, "firstResult")), "html", null, true);
            echo "','http://www.triabox.com";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_next_min_sport", array("idSport" => (isset($context["idSport"]) ? $context["idSport"] : $this->getContext($context, "idSport")), "firstResult" => (isset($context["firstResult"]) ? $context["firstResult"] : $this->getContext($context, "firstResult")), "maxResults" => (isset($context["max_records"]) ? $context["max_records"] : $this->getContext($context, "max_records")))), "html", null, true);
            echo "')\" class=\"btn btn-success pull-right\"><span class=\"fa fa-refresh\"></span> Ver mas</button>
\t\t\t\t\t\t";
        }
        // line 48
        echo "\t\t\t\t\t\t";
        if (((isset($context["idSport"]) ? $context["idSport"] : $this->getContext($context, "idSport")) == "3")) {
            // line 49
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<button type=\"submit\" style=\"width: 100%\" onclick=\"moreData('#triatlon_";
            // line 50
            echo twig_escape_filter($this->env, (isset($context["firstResult"]) ? $context["firstResult"] : $this->getContext($context, "firstResult")), "html", null, true);
            echo "','http://www.triabox.com";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_next_min_sport", array("idSport" => (isset($context["idSport"]) ? $context["idSport"] : $this->getContext($context, "idSport")), "firstResult" => (isset($context["firstResult"]) ? $context["firstResult"] : $this->getContext($context, "firstResult")), "maxResults" => (isset($context["max_records"]) ? $context["max_records"] : $this->getContext($context, "max_records")))), "html", null, true);
            echo "')\" class=\"btn btn-success pull-right\"><span class=\"fa fa-refresh\"></span> Ver mas</button>
\t\t\t\t\t\t";
        }
        // line 52
        echo "\t\t\t\t\t\t";
        if (((isset($context["idSport"]) ? $context["idSport"] : $this->getContext($context, "idSport")) == "1")) {
            // line 53
            echo "\t\t\t\t\t\t<button type=\"submit\" style=\"width: 100%\" onclick=\"moreData('#natacion_";
            echo twig_escape_filter($this->env, (isset($context["firstResult"]) ? $context["firstResult"] : $this->getContext($context, "firstResult")), "html", null, true);
            echo "','http://www.triabox.com";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_next_min_sport", array("idSport" => (isset($context["idSport"]) ? $context["idSport"] : $this->getContext($context, "idSport")), "firstResult" => (isset($context["firstResult"]) ? $context["firstResult"] : $this->getContext($context, "firstResult")), "maxResults" => (isset($context["max_records"]) ? $context["max_records"] : $this->getContext($context, "max_records")))), "html", null, true);
            echo "')\" class=\"btn btn-success pull-right\"><span class=\"fa fa-refresh\"></span> Ver mas</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t";
        }
        // line 55
        echo "\t
\t\t\t\t\t\t";
        // line 56
        if (((isset($context["idSport"]) ? $context["idSport"] : $this->getContext($context, "idSport")) == "2")) {
            // line 57
            echo "\t\t\t\t\t\t<button type=\"submit\" style=\"width: 100%\" onclick=\"moreData('#ciclismo_";
            echo twig_escape_filter($this->env, (isset($context["firstResult"]) ? $context["firstResult"] : $this->getContext($context, "firstResult")), "html", null, true);
            echo "','http://www.triabox.com";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_next_min_sport", array("idSport" => (isset($context["idSport"]) ? $context["idSport"] : $this->getContext($context, "idSport")), "firstResult" => (isset($context["firstResult"]) ? $context["firstResult"] : $this->getContext($context, "firstResult")), "maxResults" => (isset($context["max_records"]) ? $context["max_records"] : $this->getContext($context, "max_records")))), "html", null, true);
            echo "')\" class=\"btn btn-success pull-right\"><span class=\"fa fa-refresh\"></span> Ver mas</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t";
        }
        // line 59
        echo "\t
\t\t\t\t\t\t";
        // line 60
        if (((isset($context["idSport"]) ? $context["idSport"] : $this->getContext($context, "idSport")) == "4")) {
            // line 61
            echo "\t\t\t\t\t\t<button type=\"submit\"  style=\"width: 100%\" onclick=\"moreData('#duatlon_";
            echo twig_escape_filter($this->env, (isset($context["firstResult"]) ? $context["firstResult"] : $this->getContext($context, "firstResult")), "html", null, true);
            echo "','http://www.triabox.com";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_next_min_sport", array("idSport" => (isset($context["idSport"]) ? $context["idSport"] : $this->getContext($context, "idSport")), "firstResult" => (isset($context["firstResult"]) ? $context["firstResult"] : $this->getContext($context, "firstResult")), "maxResults" => (isset($context["max_records"]) ? $context["max_records"] : $this->getContext($context, "max_records")))), "html", null, true);
            echo "')\" class=\"btn btn-success pull-right\"><span class=\"fa fa-refresh\"></span> Ver mas</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t";
        }
        // line 63
        echo "\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t
\t\t\t\t\t</div>\t
\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "EventBundle:Event:listEventPublic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 63,  204 => 61,  202 => 60,  199 => 59,  190 => 57,  188 => 56,  185 => 55,  176 => 53,  173 => 52,  166 => 50,  163 => 49,  160 => 48,  153 => 46,  150 => 45,  148 => 44,  142 => 40,  136 => 39,  134 => 38,  131 => 37,  125 => 36,  123 => 35,  120 => 34,  114 => 33,  111 => 32,  105 => 30,  102 => 29,  96 => 27,  94 => 26,  91 => 25,  84 => 20,  81 => 19,  66 => 17,  60 => 14,  57 => 13,  50 => 9,  47 => 8,  45 => 7,  25 => 5,  19 => 1,);
    }
}
