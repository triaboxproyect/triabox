<?php

/* profile_amateur.html.twig */
class __TwigTemplate_e3d91f6d20c5025913b58376f1b12c1f extends Twig_Template
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
        echo "<ul class=\"nav navbar-nav pull-right\">
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 3
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user") != null)) {
            // line 4
            echo "\t\t\t\t\t\t<li class=\"mobile-search\" id=\"search\" >
\t\t\t\t\t\t\t<a class=\"btn\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"drowdown-search\">
\t\t\t\t\t\t\t\t<form role=\"search\" action=\"";
            // line 10
            echo $this->env->getExtension('routing')->getPath("users");
            echo "\" method=\"get\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\" >
\t\t\t\t\t\t\t\t\t\t<input  type=\"text\" class=\"form-control\" placeholder=\"";
            // line 12
            echo $this->env->getExtension('translator')->getTranslator()->trans("Buscar...", array(), "messages");
            echo "\" name=\"search\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search nav-search-icon\" ></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t<li class=\"dropdown profile-dropdown\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<img src=\"";
            // line 24
            $this->env->loadTemplate("user_photo.html.twig")->display(array_merge($context, array("user" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"))));
            echo "\" alt=\"\"/>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "name"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "lastname"), "html", null, true);
            echo "</span> <b class=\"caret\"></b>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))), "html", null, true);
            echo "\"><i class=\"fa fa-user\"></i>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Perfil", array(), "messages");
            echo "</a></li>
";
            // line 32
            echo "\t\t\t\t\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\"><i class=\"fa fa-power-off\"></i>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Logout", array(), "messages");
            echo "</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"hidden-xxs\">
\t\t\t\t\t\t\t<a class=\"btn\" href=\"";
            // line 38
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-power-off\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        } else {
            // line 43
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<li class=\"mobile-search\">
\t\t\t\t\t\t\t<a class=\"btn\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"drowdown-search\">
\t\t\t\t\t\t\t\t<form role=\"search\" action=\"";
            // line 51
            echo $this->env->getExtension('routing')->getPath("event_search");
            echo "\" method=\"get\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\" >
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"";
            // line 53
            echo $this->env->getExtension('translator')->getTranslator()->trans("Buscar...", array(), "messages");
            echo "\" name=\"search\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search nav-search-icon\" ></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t";
        }
        // line 63
        echo "\t\t\t\t\t</ul>";
    }

    public function getTemplateName()
    {
        return "profile_amateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 51,  92 => 43,  84 => 38,  72 => 32,  66 => 29,  58 => 26,  53 => 24,  38 => 12,  33 => 10,  25 => 4,  27 => 7,  23 => 3,  19 => 1,  845 => 232,  842 => 231,  839 => 230,  833 => 217,  830 => 216,  817 => 204,  814 => 203,  803 => 252,  799 => 250,  792 => 245,  790 => 244,  783 => 240,  777 => 237,  773 => 235,  771 => 230,  759 => 220,  757 => 216,  753 => 214,  751 => 203,  731 => 185,  725 => 180,  403 => 174,  399 => 139,  396 => 138,  393 => 137,  389 => 132,  387 => 131,  383 => 129,  380 => 128,  376 => 109,  367 => 102,  364 => 101,  361 => 100,  357 => 97,  354 => 96,  351 => 95,  345 => 74,  334 => 48,  326 => 44,  322 => 42,  313 => 44,  309 => 42,  301 => 44,  297 => 42,  289 => 44,  285 => 42,  277 => 44,  273 => 42,  265 => 44,  261 => 42,  253 => 44,  249 => 42,  241 => 44,  237 => 42,  229 => 44,  225 => 42,  217 => 44,  213 => 42,  205 => 44,  201 => 42,  193 => 44,  189 => 42,  181 => 44,  177 => 42,  172 => 19,  169 => 18,  164 => 13,  162 => 12,  158 => 10,  155 => 9,  148 => 260,  146 => 137,  140 => 133,  138 => 128,  122 => 114,  120 => 63,  115 => 110,  113 => 100,  109 => 98,  107 => 53,  97 => 87,  95 => 86,  87 => 80,  83 => 75,  81 => 74,  69 => 73,  48 => 54,  46 => 18,  41 => 15,  39 => 9,  35 => 3,  29 => 1,);
    }
}
