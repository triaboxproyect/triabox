<?php

/* EventBundle:Event:tapEventAjax.html.twig */
class __TwigTemplate_e5e81eb7ac1c24a40a8e515c46fb001c extends Twig_Template
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
        echo "\t\$('#running').load('";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_next_min_sport", array("idSport" => 9, "firstResult" => (isset($context["min_records"]) ? $context["min_records"] : $this->getContext($context, "min_records")), "maxResults" => 20)), "html", null, true);
        echo "');
   
   \t\$('#triatlon').load('";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_next_min_sport", array("idSport" => 3, "firstResult" => (isset($context["min_records"]) ? $context["min_records"] : $this->getContext($context, "min_records")), "maxResults" => 20)), "html", null, true);
        echo "');

   \t\$('#natacion').load('";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_next_min_sport", array("idSport" => 1, "firstResult" => (isset($context["min_records"]) ? $context["min_records"] : $this->getContext($context, "min_records")), "maxResults" => 20)), "html", null, true);
        echo "');

   \t\$('#ciclismo').load('";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_next_min_sport", array("idSport" => 2, "firstResult" => (isset($context["min_records"]) ? $context["min_records"] : $this->getContext($context, "min_records")), "maxResults" => 20)), "html", null, true);
        echo "');

   \t\$('#duatlon').load('";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_next_min_sport", array("idSport" => 4, "firstResult" => (isset($context["min_records"]) ? $context["min_records"] : $this->getContext($context, "min_records")), "maxResults" => 20)), "html", null, true);
        echo "');

";
    }

    public function getTemplateName()
    {
        return "EventBundle:Event:tapEventAjax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  44 => 12,  40 => 9,  36 => 10,  32 => 9,  28 => 8,  73 => 41,  67 => 40,  56 => 31,  49 => 22,  43 => 19,  37 => 16,  20 => 1,  102 => 51,  92 => 43,  84 => 38,  72 => 32,  66 => 29,  58 => 26,  53 => 24,  38 => 12,  33 => 10,  25 => 3,  27 => 7,  23 => 3,  19 => 1,  845 => 232,  842 => 231,  839 => 230,  833 => 217,  830 => 216,  817 => 204,  814 => 203,  803 => 252,  799 => 250,  792 => 245,  790 => 244,  783 => 240,  777 => 237,  773 => 235,  771 => 230,  759 => 220,  757 => 216,  753 => 214,  751 => 203,  731 => 185,  725 => 180,  403 => 174,  399 => 139,  396 => 138,  393 => 137,  389 => 132,  387 => 131,  383 => 129,  380 => 128,  376 => 109,  367 => 102,  364 => 101,  361 => 100,  357 => 97,  354 => 96,  351 => 95,  345 => 74,  334 => 48,  326 => 44,  322 => 42,  313 => 44,  309 => 42,  301 => 44,  297 => 42,  289 => 44,  285 => 42,  277 => 44,  273 => 42,  265 => 44,  261 => 42,  253 => 44,  249 => 42,  241 => 44,  237 => 42,  229 => 44,  225 => 42,  217 => 44,  213 => 42,  205 => 44,  201 => 42,  193 => 44,  189 => 42,  181 => 44,  177 => 42,  172 => 19,  169 => 18,  164 => 13,  162 => 12,  158 => 10,  155 => 9,  148 => 260,  146 => 137,  140 => 133,  138 => 128,  122 => 114,  120 => 63,  115 => 110,  113 => 100,  109 => 98,  107 => 53,  97 => 87,  95 => 86,  87 => 80,  83 => 75,  81 => 74,  69 => 73,  48 => 54,  46 => 18,  41 => 15,  39 => 17,  35 => 7,  29 => 1,);
    }
}
