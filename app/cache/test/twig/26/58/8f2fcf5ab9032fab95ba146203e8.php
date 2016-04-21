<?php

/* NewsUserBundle:NewsUser:viewWebSite.html.twig */
class __TwigTemplate_26588f2fcf5ab9032fab95ba146203e8 extends Twig_Template
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
        echo "<div id=\"modificacion";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "\"></div>
<div class=\"main-box clearfix profile-box-menu\">
\t\t\t\t\t\t\t\t\t\t<div class=\"main-box-body clearfix\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"profile-box-content clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<header class=\"main-box-header clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "url"), "html", null, true);
        echo "\" class=\"clearfix\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 >";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title"), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "url"), "html", null, true);
        echo "\" class=\"clearfix\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"profile-box-header green-bg clearfix\"  style=\"height: 300px;background-image: url(";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "urlImagen")), "html", null, true);
        echo ");\">

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"profile-box-content clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<header class=\"main-box-header clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"pull-left\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description"), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
";
    }

    public function getTemplateName()
    {
        return "NewsUserBundle:NewsUser:viewWebSite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 24,  47 => 16,  43 => 15,  30 => 8,  111 => 43,  109 => 42,  106 => 41,  104 => 40,  100 => 39,  97 => 38,  94 => 37,  91 => 36,  89 => 35,  73 => 24,  71 => 23,  67 => 21,  59 => 20,  56 => 19,  50 => 16,  46 => 15,  38 => 12,  34 => 9,  24 => 4,  80 => 29,  75 => 12,  72 => 11,  54 => 18,  51 => 7,  48 => 6,  45 => 5,  42 => 4,  39 => 3,  22 => 2,  19 => 1,);
    }
}
