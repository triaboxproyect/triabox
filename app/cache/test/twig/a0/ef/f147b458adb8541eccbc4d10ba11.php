<?php

/* ::registration-full.html.twig */
class __TwigTemplate_a0eff147b458adb8541eccbc4d10ba11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'form_login' => array($this, 'block_form_login'),
            'form_login_footer' => array($this, 'block_form_login_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"UTF-8\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />

\t<title>TriaBox</title>
\t";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo "
\t<!-- 
\tIf you need RTL support just include here RTL CSS file <link rel=\"stylesheet\" type=\"text/css\" href=\"css/libs/bootstrap-rtl.min.css\" />
\tAnd add \"rtl\" class to <body> element - e.g. <body class=\"rtl\"> 
\t-->
\t
\t<!-- libraries -->


\t<!-- this page specific styles -->

\t<!-- google font libraries -->
\t<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300|Titillium+Web:200,300,400' rel='stylesheet' type='text/css'>
\t
\t<!-- Favicon -->
";
        // line 53
        echo "
\t<!--[if lt IE 9]>
\t\t<script src=\"js/html5shiv.js\"></script>
\t\t<script src=\"js/respond.min.js\"></script>
\t<![endif]-->
</head>
<body id=\"login-page-full\">
\t<div id=\"login-full-wrapper\">
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
        // line 74
        echo $this->env->getExtension('translator')->getTranslator()->trans("Login or Registration", array(), "messages");
        // line 75
        echo "\t\t\t\t\t\t\t\t\t";
        $this->displayBlock('form_login', $context, $blocks);
        // line 78
        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 85
        $this->displayBlock('form_login_footer', $context, $blocks);
        // line 88
        echo "\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t</div>
\t\t
\t\t</div>
\t</div>
\t
\t
\t
\t";
        // line 100
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "af08fc9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af08fc9_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/af08fc9_jquery_1.js");
            // line 127
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" >



\t</script>
\t";
            // asset "af08fc9_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af08fc9_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/af08fc9_bootstrap_2.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" >



\t</script>
\t";
            // asset "af08fc9_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af08fc9_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/af08fc9_jquery.nanoscroller.min_3.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" >



\t</script>
\t";
            // asset "af08fc9_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af08fc9_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/af08fc9_demo_4.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" >



\t</script>
\t";
            // asset "af08fc9_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af08fc9_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/af08fc9_moment.min_5.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" >



\t</script>
\t";
            // asset "af08fc9_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af08fc9_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/af08fc9_jquery-jvectormap-1.2.2.min_6.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" >



\t</script>
\t";
            // asset "af08fc9_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af08fc9_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/af08fc9_jquery-jvectormap-world-merc-en_7.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" >



\t</script>
\t";
            // asset "af08fc9_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af08fc9_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/af08fc9_gdp-data_8.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" >



\t</script>
\t";
            // asset "af08fc9_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af08fc9_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/af08fc9_jquery.flot.min_9.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" >



\t</script>
\t";
            // asset "af08fc9_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af08fc9_9") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/af08fc9_jquery.flot.resize.min_10.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" >



\t</script>
\t";
            // asset "af08fc9_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af08fc9_10") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/af08fc9_jquery.flot.time.min_11.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" >



\t</script>
\t";
            // asset "af08fc9_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af08fc9_11") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/af08fc9_jquery.flot.threshold_12.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" >



\t</script>
\t";
            // asset "af08fc9_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af08fc9_12") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/af08fc9_jquery.flot.axislabels_13.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" >



\t</script>
\t";
            // asset "af08fc9_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af08fc9_13") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/af08fc9_jquery.slimscroll.min_14.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" >



\t</script>
\t";
            // asset "af08fc9_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af08fc9_14") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/af08fc9_jquery.sparkline.min_15.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" >



\t</script>
\t";
            // asset "af08fc9_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af08fc9_15") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/af08fc9_skycons_16.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" >



\t</script>
\t";
            // asset "af08fc9_16"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af08fc9_16") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/af08fc9_scripts_17.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" >



\t</script>
\t";
            // asset "af08fc9_17"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af08fc9_17") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/af08fc9_pace.min_18.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" >



\t</script>
\t";
            // asset "af08fc9_18"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af08fc9_18") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/af08fc9_jquery.easypiechart.min_19.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" >



\t</script>
\t";
            // asset "af08fc9_19"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af08fc9_19") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/af08fc9_bootstrap-datepicker_20.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" >



\t</script>
\t";
            // asset "af08fc9_20"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af08fc9_20") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/af08fc9_bootstrap-timepicker.min_21.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" >



\t</script>
\t";
            // asset "af08fc9_21"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af08fc9_21") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/af08fc9_jquery.nouislider_22.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" >



\t</script>
\t";
            // asset "af08fc9_22"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af08fc9_22") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/af08fc9_select2.min_23.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" >



\t</script>
\t";
        } else {
            // asset "af08fc9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af08fc9") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/af08fc9.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" >



\t</script>
\t";
        }
        unset($context["asset_url"]);
        // line 132
        echo "y>
</html>";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "\t\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cad465b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cad465b_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/cad465b_bootstrap.min_1.css");
            // line 27
            echo "\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
            // asset "cad465b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cad465b_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/cad465b_font-awesome_2.css");
            // line 27
            echo "\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
            // asset "cad465b_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cad465b_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/cad465b_nanoscroller_3.css");
            // line 27
            echo "\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
            // asset "cad465b_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cad465b_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/cad465b_theme_styles_4.css");
            // line 27
            echo "\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
            // asset "cad465b_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cad465b_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/cad465b_jquery-jvectormap-1.2.2_5.css");
            // line 27
            echo "\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
            // asset "cad465b_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cad465b_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/cad465b_weather-icons_6.css");
            // line 27
            echo "\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
            // asset "cad465b_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cad465b_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/cad465b_morris_7.css");
            // line 27
            echo "\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
            // asset "cad465b_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cad465b_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/cad465b_jquery.nouislider_8.css");
            // line 27
            echo "\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
            // asset "cad465b_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cad465b_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/cad465b_select2_9.css");
            // line 27
            echo "\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
        } else {
            // asset "cad465b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cad465b") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/cad465b.css");
            // line 27
            echo "\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
        }
        unset($context["asset_url"]);
        // line 31
        echo "\t\t
\t<!--[if lt IE 9]>
\t\t<script src=\"js/html5shiv.js\"></script>
\t\t<script src=\"js/respond.min.js\"></script>
\t<![endif]-->
\t";
    }

    // line 75
    public function block_form_login($context, array $blocks = array())
    {
        // line 76
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
    }

    // line 85
    public function block_form_login_footer($context, array $blocks = array())
    {
        // line 86
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "::registration-full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  484 => 86,  481 => 85,  476 => 76,  473 => 75,  464 => 31,  457 => 28,  454 => 27,  446 => 28,  443 => 27,  436 => 28,  433 => 27,  426 => 28,  423 => 27,  416 => 28,  413 => 27,  406 => 28,  403 => 27,  396 => 28,  393 => 27,  386 => 28,  383 => 27,  376 => 28,  373 => 27,  366 => 28,  363 => 27,  358 => 10,  355 => 9,  350 => 132,  108 => 127,  104 => 100,  90 => 88,  88 => 85,  79 => 78,  76 => 75,  34 => 37,  32 => 9,  22 => 1,  81 => 79,  77 => 65,  74 => 74,  64 => 56,  57 => 47,  51 => 53,  47 => 42,  44 => 8,  38 => 6,  36 => 5,  29 => 2,);
    }
}
