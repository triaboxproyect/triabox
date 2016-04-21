<?php

/* :helper:shareButton.html.twig */
class __TwigTemplate_a0632f0d31e785360e107f60d370ca0e extends Twig_Template
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
<div class=\"story-time\">
\t<div class=\"btn-group\">
\t\t<button type=\"button\" class=\"btn btn-info\" target=\"_blank\" data-mce-target=\"_blank\"  onclick=\"window.open('http://twitter.com/share?text=";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "html", null, true);
        echo " via @TriaBox&url=http://www.triabox.com";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "&hashtags=triabox')\"><i class=\"fa fa-twitter\"></i></button>
\t\t<button type=\"button\" class=\"btn btn-info btn-facebook\" target=\"_blank\" data-mce-target=\"_blank\" 
\t\tonclick=\"window.open('https://www.facebook.com/sharer/sharer.php?u=http://www.triabox.com";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "')\"><i class=\"fa fa-facebook\"></i></button>
\t\t
\t</div>
</div>



";
    }

    public function getTemplateName()
    {
        return ":helper:shareButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  325 => 113,  321 => 111,  317 => 109,  315 => 108,  310 => 107,  307 => 106,  303 => 104,  301 => 103,  296 => 102,  294 => 101,  290 => 99,  282 => 98,  275 => 97,  269 => 94,  264 => 93,  262 => 92,  251 => 84,  239 => 79,  228 => 73,  224 => 71,  218 => 67,  207 => 66,  204 => 65,  193 => 64,  188 => 61,  185 => 60,  180 => 57,  165 => 56,  162 => 55,  147 => 54,  144 => 53,  133 => 52,  130 => 51,  119 => 50,  101 => 48,  96 => 45,  94 => 44,  87 => 40,  78 => 34,  72 => 30,  59 => 20,  53 => 16,  51 => 15,  46 => 12,  44 => 11,  41 => 10,  38 => 9,  36 => 8,  31 => 6,  27 => 5,  19 => 1,);
    }
}
