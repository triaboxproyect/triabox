<?php

/* SecurityXtendingBundle:Security:login.html.twig */
class __TwigTemplate_bfc28d7700775c8b349e9b5bb646f2eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::registration-full.html.twig");

        $this->blocks = array(
            'form_login' => array($this, 'block_form_login'),
            'form_login_footer' => array($this, 'block_form_login_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::registration-full.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_form_login($context, array $blocks = array())
    {
        echo "\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<span class=\"text\">
          ";
        // line 5
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 6
            echo "    \t\t\t<div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message"), "html", null, true);
            echo "</div>
\t\t  ";
        }
        // line 8
        echo "\t\t</span>
";
        // line 42
        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\" id=\"facebook\">
\t\t\t\t\t\t\t\t\t\t\t\t<div >
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary col-xs-12 btn-facebook\"   onclick=\"location.href='";
        // line 44
        echo $this->env->getExtension('routing')->getUrl("hwi_oauth_service_redirect", array("service" => "facebook"));
        echo "'\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook\"></i> FACEBOOK
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn col-xs-12 btn-danger\"   onclick=\"location.href='";
        // line 47
        echo $this->env->getExtension('routing')->getUrl("hwi_oauth_service_redirect", array("service" => "google"));
        echo "'\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-google\"></i> google
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
";
        // line 56
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<script type=\"text/javascript\">
<!--

//-->
</script>
";
    }

    // line 64
    public function block_form_login_footer($context, array $blocks = array())
    {
        // line 65
        echo "\t\t\t\t\t<div id=\"login-box-footer\">
\t\t\t\t\t\t\t<div class=\"row\">
";
        // line 79
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t\t\t\t
\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "SecurityXtendingBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 79,  77 => 65,  74 => 64,  64 => 56,  57 => 47,  51 => 44,  47 => 42,  44 => 8,  38 => 6,  36 => 5,  29 => 2,);
    }
}
