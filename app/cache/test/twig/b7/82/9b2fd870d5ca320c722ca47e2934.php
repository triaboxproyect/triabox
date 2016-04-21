<?php

/* :helper:login.html.twig */
class __TwigTemplate_b7829b2fd870d5ca320c722ca47e2934 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_login_footer' => array($this, 'block_form_login_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div  id=\"login\" class=\"modal fade\"  tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"login\" aria-hidden=\"true\">
\t\t\t\t
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t<div id=\"login-box\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<header id=\"login-header\">
\t\t\t\t\t\t\t\t\t<div id=\"login-logo\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div id=\"login-box-inner\">
\t\t\t\t\t\t\t\t\t";
        // line 16
        echo $this->env->getExtension('translator')->getTranslator()->trans("Login or Registration", array(), "messages");
        // line 17
        echo "\t\t\t\t\t\t\t\t\t<div class=\"row\" id=\"facebook\">
\t\t\t\t\t\t\t\t\t\t\t\t<div >
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary col-xs-12 btn-facebook\"   onclick=\"location.href='";
        // line 19
        echo $this->env->getExtension('routing')->getUrl("hwi_oauth_service_redirect", array("service" => "facebook"));
        echo "'\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook\"></i> FACEBOOK
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn col-xs-12 btn-danger\"   onclick=\"location.href='";
        // line 22
        echo $this->env->getExtension('routing')->getUrl("hwi_oauth_service_redirect", array("service" => "google"));
        echo "'\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-google\"></i> google
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
";
        // line 31
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t";
        // line 40
        $this->displayBlock('form_login_footer', $context, $blocks);
    }

    public function block_form_login_footer($context, array $blocks = array())
    {
        // line 41
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return ":helper:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 41,  67 => 40,  56 => 31,  49 => 22,  43 => 19,  37 => 16,  20 => 1,  102 => 51,  92 => 43,  84 => 38,  72 => 32,  66 => 29,  58 => 26,  53 => 24,  38 => 12,  33 => 10,  25 => 4,  27 => 7,  23 => 3,  19 => 1,  845 => 232,  842 => 231,  839 => 230,  833 => 217,  830 => 216,  817 => 204,  814 => 203,  803 => 252,  799 => 250,  792 => 245,  790 => 244,  783 => 240,  777 => 237,  773 => 235,  771 => 230,  759 => 220,  757 => 216,  753 => 214,  751 => 203,  731 => 185,  725 => 180,  403 => 174,  399 => 139,  396 => 138,  393 => 137,  389 => 132,  387 => 131,  383 => 129,  380 => 128,  376 => 109,  367 => 102,  364 => 101,  361 => 100,  357 => 97,  354 => 96,  351 => 95,  345 => 74,  334 => 48,  326 => 44,  322 => 42,  313 => 44,  309 => 42,  301 => 44,  297 => 42,  289 => 44,  285 => 42,  277 => 44,  273 => 42,  265 => 44,  261 => 42,  253 => 44,  249 => 42,  241 => 44,  237 => 42,  229 => 44,  225 => 42,  217 => 44,  213 => 42,  205 => 44,  201 => 42,  193 => 44,  189 => 42,  181 => 44,  177 => 42,  172 => 19,  169 => 18,  164 => 13,  162 => 12,  158 => 10,  155 => 9,  148 => 260,  146 => 137,  140 => 133,  138 => 128,  122 => 114,  120 => 63,  115 => 110,  113 => 100,  109 => 98,  107 => 53,  97 => 87,  95 => 86,  87 => 80,  83 => 75,  81 => 74,  69 => 73,  48 => 54,  46 => 18,  41 => 15,  39 => 17,  35 => 3,  29 => 1,);
    }
}
