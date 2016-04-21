<?php

/* NewsUserBundle:NewsUser:footerNews.html.twig */
class __TwigTemplate_b753296bf9d95b35a43dbf9d6975f61c extends Twig_Template
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
        echo "<footer class=\"story-footer\" >
\t
\t<a  href=\"javascript:createLink('";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("like_create", array("idNews" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "','";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "');\" class=\"story-likes-link\">
\t\t<i class=\"fa fa-thumbs-up fa-lg\"></i>       ";
        // line 4
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "likes")), "html", null, true);
        echo "              Likes
\t</a>
\t<a  href=\"javascript:moreData('#comments_";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "','";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comments_news_user", array("idNews" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "firstResult" => 0, "maxResults" => 2)), "html", null, true);
        echo "')\" class=\"story-comments-link\">
\t\t<i class=\"fa fa-comment fa-lg\"></i>     ";
        // line 7
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "newsUsers")), "html", null, true);
        echo "          Comentarios
\t</a>
\t";
        // line 9
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "event") != null)) {
            // line 10
            echo "\t<a  href=\"javascript:appendNews('";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("notification_search_event", array("idEvent" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "event"), "id"))), "html", null, true);
            echo "','#newComent');\" class=\"story-recoment-link\">
\t\t<i class=\"fa fa-mail-forward fa-lg\"></i>           Recomendar
\t</a>
\t";
        }
        // line 13
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t<br>
\t
</footer>";
    }

    public function getTemplateName()
    {
        return "NewsUserBundle:NewsUser:footerNews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 13,  40 => 7,  29 => 4,  23 => 3,  58 => 24,  47 => 10,  43 => 15,  30 => 8,  111 => 43,  109 => 42,  106 => 41,  104 => 40,  100 => 39,  97 => 38,  94 => 37,  91 => 36,  89 => 35,  73 => 24,  71 => 23,  67 => 21,  59 => 20,  56 => 19,  50 => 16,  46 => 15,  38 => 12,  34 => 6,  24 => 4,  80 => 29,  75 => 12,  72 => 11,  54 => 18,  51 => 7,  48 => 6,  45 => 9,  42 => 4,  39 => 3,  22 => 2,  19 => 1,);
    }
}
