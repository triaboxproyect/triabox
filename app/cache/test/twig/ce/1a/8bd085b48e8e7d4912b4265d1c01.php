<?php

/* NewsUserBundle:NewsUser:newsWebSite.html.twig */
class __TwigTemplate_ce1a8bd085b48e8e7d4912b4265d1c01 extends Twig_Template
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
        echo "<div class=\"story\">
\t\t<div class=\"story-user\">
\t\t\t<a href=\"#\">
\t\t\t\t<img src=\"";
        // line 4
        $this->env->loadTemplate("user_photo.html.twig")->display(array_merge($context, array("user" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "user"))));
        echo "\" alt=\"\"/>
\t\t\t</a>
\t\t</div>
\t\t
\t\t<div class=\"story-content\">
\t\t\t<header class=\"story-header\">
\t\t\t\t<div class=\"story-author\">
\t\t\t\t\t<a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "user"), "id"))), "html", null, true);
        echo "\" class=\"story-author-link\">
\t\t\t\t\t\t";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "user"), "name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "user"), "lastname"), "html", null, true);
        echo " 
\t\t\t\t\t</a>
\t\t\t\t\t<br>
\t\t\t\t\t <i class=\"fa fa-clock-o\"></i> ";
        // line 15
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createTime")) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createTime"), "Y-m-d H:i:s"), "html", null, true);
        }
        // line 16
        echo "\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
        // line 18
        $context["url"] = ("/news/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"));
        // line 19
        echo "\t\t\t\t";
        $context["comment"] = "";
        // line 20
        echo "\t\t\t\t";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "comment") != "")) {
            $context["comment"] = (twig_slice($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "comment"), 0, 100) . "...");
            echo " ";
        } else {
            $context["comment"] = (twig_slice($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title"), 0, 100) . "...");
        }
        // line 21
        echo "\t\t\t\t
\t\t\t\t
\t\t\t\t";
        // line 23
        $this->env->loadTemplate(":helper:shareButton.html.twig")->display(array_merge($context, array("url" => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "comment" => (isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")))));
        // line 24
        echo "\t\t\t</header>
\t\t\t<div class=\"story-inner-content\">
\t\t\t\t\t\t<div class=\"profile-box-content clearfix\">
\t\t\t\t\t\t<header class=\"main-box-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h2 class=\"pull-left\" style=\"color: black;\"><big>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "comment"), "html", null, true);
        echo "</big></h2>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</header>
\t\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t</br>
\t\t\t\t";
        // line 35
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "url") != "")) {
            // line 36
            echo "\t\t\t\t";
            $this->env->loadTemplate("NewsUserBundle:NewsUser:viewWebSite.html.twig")->display(array_merge($context, array("entity" => (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipe" => "news")));
            // line 37
            echo "\t\t\t\t";
        }
        // line 38
        echo "\t\t\t</div>
\t\t\t<div id=\"news_";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 40
        $this->env->loadTemplate("NewsUserBundle:NewsUser:footerNews.html.twig")->display(array_merge($context, array("entity" => (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")))));
        // line 41
        echo "\t\t\t</div>
\t\t\t";
        // line 42
        $this->env->loadTemplate("NewsUserBundle:NewsUser:showComment.html.twig")->display(array_merge($context, array("entity" => (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")))));
        // line 43
        echo "\t\t</div>
\t
</div>";
    }

    public function getTemplateName()
    {
        return "NewsUserBundle:NewsUser:newsWebSite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 43,  109 => 42,  106 => 41,  104 => 40,  100 => 39,  97 => 38,  94 => 37,  91 => 36,  89 => 35,  73 => 24,  71 => 23,  67 => 21,  59 => 20,  56 => 19,  50 => 16,  46 => 15,  38 => 12,  34 => 11,  24 => 4,  80 => 29,  75 => 12,  72 => 11,  54 => 18,  51 => 7,  48 => 6,  45 => 5,  42 => 4,  39 => 3,  22 => 2,  19 => 1,);
    }
}
