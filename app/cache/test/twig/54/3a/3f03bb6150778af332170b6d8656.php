<?php

/* NewsUserBundle:NewsUser:index.html.twig */
class __TwigTemplate_543a3f03bb6150778af332170b6d8656 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout_xtending_dashboard.html.twig");

        $this->blocks = array(
            'main_box_label' => array($this, 'block_main_box_label'),
            'main_box' => array($this, 'block_main_box'),
            'script_custom' => array($this, 'block_script_custom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout_xtending_dashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_main_box_label($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("Novedades", array(), "messages");
    }

    // line 3
    public function block_main_box($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"main-box-body clearfix\" id=\"novedades\">
\t
\t\t\t<form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("newsuser_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
;
        echo ">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"form-group col-xs-12\">
\t\t\t\t\t\t<textarea class=\"form-control\" rows=\"2\" placeholder=\"Estas entrenando?...\" name=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment"), "vars"), "full_name"), "html", null, true);
        echo "\"></textarea>
\t\t\t\t\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'row');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"form-group col-xs-12\">
\t\t\t\t\t\t";
        // line 15
        echo $this->env->getExtension('translator')->getTranslator()->trans("Cual fue tu entrenamiento del dia?", array(), "messages");
        // line 16
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group form-group-select2 col-xs-4\"\">
\t\t\t\t\t\t\t<select style=\"width:200px\" id=\"sel2\" name=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "activity"), "sport"), "vars"), "full_name"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<option value=\"9\">";
        // line 22
        echo $this->env->getExtension('translator')->getTranslator()->trans("Running", array(), "messages");
        echo "</option> 
\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 23
        echo $this->env->getExtension('translator')->getTranslator()->trans("Natacion", array(), "messages");
        echo "</option> 
\t\t\t\t\t\t\t\t<option value=\"2\">";
        // line 24
        echo $this->env->getExtension('translator')->getTranslator()->trans("Bicicleta", array(), "messages");
        echo "</option> 
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group col-xs-4\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"distancia\" name=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "activity"), "distance"), "vars"), "full_name"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group col-xs-4\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"tiempo\" name=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "activity"), "time"), "vars"), "full_name"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success pull-right\">";
        // line 37
        echo $this->env->getExtension('translator')->getTranslator()->trans("enviar novedad", array(), "messages");
        echo "</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t
\t\t<div id=\"newsfeed\">
\t\t
\t\t<div id=\"newComent\">
\t\t\t
\t\t\t
\t\t</div>\t
\t\t
        <div id=\"moreNews_1\">
\t\t\t
\t\t\t
\t\t</div>\t
\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t</div>
\t\t

</div>
   
";
    }

    // line 64
    public function block_script_custom($context, array $blocks = array())
    {
        // line 65
        echo "\t\t
\t 

\t 
\t  
\t   function appendNews(link,idNews){
\t \t\$(idNews).append(\$('<div>').load(link));
\t  
\t  }
\t  
\t
\t  
\t  
\t\$('#moreNews_1').load('";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("more_news_user", array("firstResult" => (isset($context["min_records"]) ? $context["min_records"] : $this->getContext($context, "min_records")), "maxResults" => (isset($context["max_records"]) ? $context["max_records"] : $this->getContext($context, "max_records")))), "html", null, true);
        echo "');
\t

   
   \t\t
\t";
    }

    public function getTemplateName()
    {
        return "NewsUserBundle:NewsUser:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 78,  137 => 65,  134 => 64,  107 => 37,  99 => 32,  93 => 29,  85 => 24,  81 => 23,  77 => 22,  73 => 21,  66 => 16,  64 => 15,  56 => 10,  52 => 9,  43 => 6,  39 => 4,  36 => 3,  30 => 2,);
    }
}
