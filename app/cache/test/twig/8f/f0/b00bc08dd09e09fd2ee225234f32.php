<?php

/* NewsUserBundle:NewsUser:showComment.html.twig */
class __TwigTemplate_8ff0b00bc08dd09e09fd2ee225234f32 extends Twig_Template
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
        echo "<div class=\"conversation-wrapper\">
\t\t\t\t\t\t<div class=\"conversation-content\"  >

\t\t\t\t\t\t\t<div class=\"conversation-inner\" id=\"comments_";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"conversation-new-message\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<input name=\"newUser\" id=\"newUser_";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "\" style=\"visibility: hidden;\">
\t\t\t\t\t\t\t\t\t<textarea  class=\"form-control\" id=\"comment_";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "\" name=\"comment\" rows=\"2\" placeholder=\"Enter your message...\"></textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success pull-right\"
\t\t\t\t\t\t\t\t\tonclick=\"sendComment('";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "')\"
\t\t\t\t\t\t\t\t\t>comentar</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> ";
    }

    public function getTemplateName()
    {
        return "NewsUserBundle:NewsUser:showComment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 13,  35 => 12,  55 => 13,  40 => 7,  29 => 4,  23 => 3,  58 => 24,  47 => 10,  43 => 15,  30 => 8,  111 => 43,  109 => 42,  106 => 41,  104 => 40,  100 => 39,  97 => 38,  94 => 37,  91 => 36,  89 => 35,  73 => 24,  71 => 23,  67 => 21,  59 => 20,  56 => 19,  50 => 19,  46 => 15,  38 => 12,  34 => 6,  24 => 4,  80 => 29,  75 => 12,  72 => 11,  54 => 18,  51 => 7,  48 => 6,  45 => 9,  42 => 4,  39 => 3,  22 => 2,  19 => 1,);
    }
}
