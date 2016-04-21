<?php

/* ::layout_dashboard_public.html.twig */
class __TwigTemplate_7ff722bc152da14cadaca2b34d27b233 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header_meta' => array($this, 'block_header_meta'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'profile' => array($this, 'block_profile'),
            'login_facebook' => array($this, 'block_login_facebook'),
            'container' => array($this, 'block_container'),
            'script' => array($this, 'block_script'),
            'script_facebook' => array($this, 'block_script_facebook'),
            'script_twitter' => array($this, 'block_script_twitter'),
            'ajax_public' => array($this, 'block_ajax_public'),
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
    <meta property=\"og:type\"          content=\"website\" />
    <meta name=\"twitter:card\" content=\"summary\"/>
    ";
        // line 9
        $this->displayBlock('header_meta', $context, $blocks);
        // line 15
        echo "\t
\t<title>TriaBox</title>
\t
\t";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 54
        echo "
\t<!-- Favicon -->
\t<link type=\"image/x-icon\" href=\"http://www.triabox.com/web/bundles/cube/img/triabox.png\" rel=\"shortcut icon\" />

</head>
<body>
\t<div id=\"theme-wrapper\">
\t<script>
\t  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
\t  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
\t  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
\t  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
\t
\t  ga('create', 'UA-72968505-1', 'auto');
\t  ga('send', 'pageview');
\t
\t</script>
\t\t<header class=\"navbar\" id=\"header-navbar\">
\t\t\t<div class=\"container\">
\t\t\t\t<a href=\"";
        // line 73
        if ((null === $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"))) {
            echo " ";
            echo $this->env->getExtension('routing')->getPath("_login");
            echo " ";
        } else {
            echo "  ";
            echo $this->env->getExtension('routing')->getPath("newsuser");
            echo " ";
        }
        echo "\" id=\"logo\" class=\"navbar-brand\">
\t\t\t\t\t";
        // line 74
        $this->displayBlock('title', $context, $blocks);
        // line 75
        echo "\t\t\t\t\t

";
        // line 80
        echo "\t\t\t\t</a>
\t\t\t\t
\t\t\t\t<div class=\"clearfix\">
\t\t\t\t
\t\t\t\t<div class=\"nav-no-collapse navbar-left pull-left hidden-sm hidden-xs\">
\t\t\t\t\t\t\t
\t\t\t\t\t";
        // line 86
        $this->env->loadTemplate(":helper:botton_red_social_site.html.twig")->display($context);
        // line 87
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t

\t\t\t\t
\t\t\t\t<div class=\"nav-no-collapse pull-right\" id=\"header-nav\">
\t\t\t\t\t\t\t
\t\t\t\t\t";
        // line 95
        $this->displayBlock('profile', $context, $blocks);
        // line 98
        echo "\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
        // line 100
        $this->displayBlock('login_facebook', $context, $blocks);
        // line 110
        echo "\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 113
        $this->env->loadTemplate(":helper:login.html.twig")->display($context);
        // line 114
        echo "\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t</div>
\t\t
\t\t</div>
\t</div>\t\t
\t\t
\t\t\t</div><!-- /.modal-content -->
\t\t</header>
\t\t
\t\t";
        // line 128
        $this->displayBlock('container', $context, $blocks);
        // line 133
        echo "\t\t
\t</div>

\t
\t";
        // line 137
        $this->displayBlock('script', $context, $blocks);
        // line 260
        echo "\t
</body>
</html>
<!--  -->";
    }

    // line 9
    public function block_header_meta($context, array $blocks = array())
    {
        // line 10
        echo "

\t";
        // line 12
        $this->env->loadTemplate(":helper:metadata_red_social_site.html.twig")->display($context);
        // line 13
        echo "\t
    ";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 19
        echo "\t\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c6f8163_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c6f8163_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c6f8163_bootstrap.min_1.css");
            // line 42
            echo "
\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t\t   
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
            // asset "c6f8163_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c6f8163_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c6f8163_font-awesome_2.css");
            // line 42
            echo "
\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t\t   
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
            // asset "c6f8163_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c6f8163_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c6f8163_nanoscroller_3.css");
            // line 42
            echo "
\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t\t   
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
            // asset "c6f8163_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c6f8163_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c6f8163_theme_styles_4.css");
            // line 42
            echo "
\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t\t   
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
            // asset "c6f8163_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c6f8163_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c6f8163_jquery-jvectormap-1.2.2_5.css");
            // line 42
            echo "
\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t\t   
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
            // asset "c6f8163_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c6f8163_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c6f8163_weather-icons_6.css");
            // line 42
            echo "
\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t\t   
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
            // asset "c6f8163_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c6f8163_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c6f8163_morris_7.css");
            // line 42
            echo "
\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t\t   
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
            // asset "c6f8163_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c6f8163_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c6f8163_jquery.nouislider_8.css");
            // line 42
            echo "
\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t\t   
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
            // asset "c6f8163_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c6f8163_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c6f8163_select2_9.css");
            // line 42
            echo "
\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t\t   
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
            // asset "c6f8163_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c6f8163_9") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c6f8163_datepicker_10.css");
            // line 42
            echo "
\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t\t   
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
            // asset "c6f8163_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c6f8163_10") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c6f8163_bootstrap-timepicker_11.css");
            // line 42
            echo "
\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t\t   
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
            // asset "c6f8163_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c6f8163_11") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c6f8163_hopscotch_12.css");
            // line 42
            echo "
\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t\t   
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
        } else {
            // asset "c6f8163"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c6f8163") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c6f8163.css");
            // line 42
            echo "
\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t\t   
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
        }
        unset($context["asset_url"]);
        // line 48
        echo "\t\t <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_next_all_rss", array("firstResult" => (isset($context["min_records"]) ? $context["min_records"] : null), "maxResults" => 20)), "html", null, true);
        echo "\" type=\"application/atom+xml\" rel=\"alternate\" title=\"TriaBox: Proximos Eventos\" />
\t<!--[if lt IE 9]>
\t\t<script src=\"js/html5shiv.js\"></script>
\t\t<script src=\"js/respond.min.js\"></script>
\t<![endif]-->
\t";
    }

    // line 74
    public function block_title($context, array $blocks = array())
    {
        echo "<cite title=\"TriaBox\">TriaBox</cite>";
    }

    // line 95
    public function block_profile($context, array $blocks = array())
    {
        // line 96
        echo "\t\t\t\t\t\t";
        $this->env->loadTemplate("profile_amateur.html.twig")->display($context);
        // line 97
        echo "\t\t\t\t\t";
    }

    // line 100
    public function block_login_facebook($context, array $blocks = array())
    {
        // line 101
        echo "\t\t\t\t\t";
        if ((null === $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"))) {
            // line 102
            echo "\t\t
\t\t\t\t\t\t<div class=\"pull-right\" id=\"header-nav\">
\t\t\t\t\t\t\t<button class=\"btn btn-success col-xs-12\"  id=\"login_button\" data-toggle=\"modal\" href=\"#login\">
\t\t\t\t\t\t\t\t<i class=\"fa \"></i> login o registro
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 109
        echo "\t\t\t\t";
    }

    // line 128
    public function block_container($context, array $blocks = array())
    {
        // line 129
        echo "\t\t
\t\t
\t\t";
        // line 131
        $this->env->loadTemplate("EventBundle:Event:tapEvent.html.twig")->display($context);
        // line 132
        echo "\t\t";
    }

    // line 137
    public function block_script($context, array $blocks = array())
    {
        // line 138
        echo "\t
\t";
        // line 139
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9705c18_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9705c18_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9705c18_demo-rtl_1.js");
            // line 174
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script> 
\t<script async defer
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBdE3f3MTZwBgQRgG4V-urwsCf-GXiryXY&signed_in=true&callback=initMap\"></script>

\t\t\t
    ";
            // asset "9705c18_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9705c18_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9705c18_demo-skin-changer_2.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script> 
\t<script async defer
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBdE3f3MTZwBgQRgG4V-urwsCf-GXiryXY&signed_in=true&callback=initMap\"></script>

\t\t\t
    ";
            // asset "9705c18_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9705c18_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9705c18_jquery_3.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script> 
\t<script async defer
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBdE3f3MTZwBgQRgG4V-urwsCf-GXiryXY&signed_in=true&callback=initMap\"></script>

\t\t\t
    ";
            // asset "9705c18_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9705c18_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9705c18_bootstrap_4.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script> 
\t<script async defer
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBdE3f3MTZwBgQRgG4V-urwsCf-GXiryXY&signed_in=true&callback=initMap\"></script>

\t\t\t
    ";
            // asset "9705c18_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9705c18_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9705c18_jquery.nanoscroller.min_5.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script> 
\t<script async defer
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBdE3f3MTZwBgQRgG4V-urwsCf-GXiryXY&signed_in=true&callback=initMap\"></script>

\t\t\t
    ";
            // asset "9705c18_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9705c18_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9705c18_moment.min_6.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script> 
\t<script async defer
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBdE3f3MTZwBgQRgG4V-urwsCf-GXiryXY&signed_in=true&callback=initMap\"></script>

\t\t\t
    ";
            // asset "9705c18_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9705c18_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9705c18_jquery-jvectormap-1.2.2.min_7.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script> 
\t<script async defer
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBdE3f3MTZwBgQRgG4V-urwsCf-GXiryXY&signed_in=true&callback=initMap\"></script>

\t\t\t
    ";
            // asset "9705c18_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9705c18_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9705c18_jquery-jvectormap-world-merc-en_8.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script> 
\t<script async defer
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBdE3f3MTZwBgQRgG4V-urwsCf-GXiryXY&signed_in=true&callback=initMap\"></script>

\t\t\t
    ";
            // asset "9705c18_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9705c18_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9705c18_gdp-data_9.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script> 
\t<script async defer
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBdE3f3MTZwBgQRgG4V-urwsCf-GXiryXY&signed_in=true&callback=initMap\"></script>

\t\t\t
    ";
            // asset "9705c18_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9705c18_9") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9705c18_jquery.flot.min_10.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script> 
\t<script async defer
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBdE3f3MTZwBgQRgG4V-urwsCf-GXiryXY&signed_in=true&callback=initMap\"></script>

\t\t\t
    ";
            // asset "9705c18_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9705c18_10") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9705c18_jquery.flot.resize.min_11.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script> 
\t<script async defer
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBdE3f3MTZwBgQRgG4V-urwsCf-GXiryXY&signed_in=true&callback=initMap\"></script>

\t\t\t
    ";
            // asset "9705c18_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9705c18_11") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9705c18_jquery.flot.time.min_12.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script> 
\t<script async defer
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBdE3f3MTZwBgQRgG4V-urwsCf-GXiryXY&signed_in=true&callback=initMap\"></script>

\t\t\t
    ";
            // asset "9705c18_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9705c18_12") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9705c18_jquery.flot.threshold_13.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script> 
\t<script async defer
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBdE3f3MTZwBgQRgG4V-urwsCf-GXiryXY&signed_in=true&callback=initMap\"></script>

\t\t\t
    ";
            // asset "9705c18_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9705c18_13") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9705c18_jquery.flot.axislabels_14.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script> 
\t<script async defer
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBdE3f3MTZwBgQRgG4V-urwsCf-GXiryXY&signed_in=true&callback=initMap\"></script>

\t\t\t
    ";
            // asset "9705c18_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9705c18_14") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9705c18_jquery.slimscroll.min_15.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script> 
\t<script async defer
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBdE3f3MTZwBgQRgG4V-urwsCf-GXiryXY&signed_in=true&callback=initMap\"></script>

\t\t\t
    ";
            // asset "9705c18_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9705c18_15") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9705c18_jquery.sparkline.min_16.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script> 
\t<script async defer
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBdE3f3MTZwBgQRgG4V-urwsCf-GXiryXY&signed_in=true&callback=initMap\"></script>

\t\t\t
    ";
            // asset "9705c18_16"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9705c18_16") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9705c18_skycons_17.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script> 
\t<script async defer
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBdE3f3MTZwBgQRgG4V-urwsCf-GXiryXY&signed_in=true&callback=initMap\"></script>

\t\t\t
    ";
            // asset "9705c18_17"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9705c18_17") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9705c18_scripts_18.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script> 
\t<script async defer
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBdE3f3MTZwBgQRgG4V-urwsCf-GXiryXY&signed_in=true&callback=initMap\"></script>

\t\t\t
    ";
            // asset "9705c18_18"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9705c18_18") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9705c18_pace.min_19.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script> 
\t<script async defer
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBdE3f3MTZwBgQRgG4V-urwsCf-GXiryXY&signed_in=true&callback=initMap\"></script>

\t\t\t
    ";
            // asset "9705c18_19"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9705c18_19") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9705c18_jquery.easypiechart.min_20.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script> 
\t<script async defer
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBdE3f3MTZwBgQRgG4V-urwsCf-GXiryXY&signed_in=true&callback=initMap\"></script>

\t\t\t
    ";
            // asset "9705c18_20"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9705c18_20") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9705c18_bootstrap-datepicker_21.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script> 
\t<script async defer
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBdE3f3MTZwBgQRgG4V-urwsCf-GXiryXY&signed_in=true&callback=initMap\"></script>

\t\t\t
    ";
            // asset "9705c18_21"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9705c18_21") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9705c18_bootstrap-timepicker.min_22.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script> 
\t<script async defer
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBdE3f3MTZwBgQRgG4V-urwsCf-GXiryXY&signed_in=true&callback=initMap\"></script>

\t\t\t
    ";
            // asset "9705c18_22"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9705c18_22") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9705c18_jquery.nouislider_23.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script> 
\t<script async defer
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBdE3f3MTZwBgQRgG4V-urwsCf-GXiryXY&signed_in=true&callback=initMap\"></script>

\t\t\t
    ";
            // asset "9705c18_23"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9705c18_23") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9705c18_select2.min_24.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script> 
\t<script async defer
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBdE3f3MTZwBgQRgG4V-urwsCf-GXiryXY&signed_in=true&callback=initMap\"></script>

\t\t\t
    ";
            // asset "9705c18_24"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9705c18_24") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9705c18_hogan_25.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script> 
\t<script async defer
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBdE3f3MTZwBgQRgG4V-urwsCf-GXiryXY&signed_in=true&callback=initMap\"></script>

\t\t\t
    ";
            // asset "9705c18_25"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9705c18_25") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9705c18_typeahead.min_26.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script> 
\t<script async defer
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBdE3f3MTZwBgQRgG4V-urwsCf-GXiryXY&signed_in=true&callback=initMap\"></script>

\t\t\t
    ";
            // asset "9705c18_26"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9705c18_26") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9705c18_jquery.knob_27.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script> 
\t<script async defer
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBdE3f3MTZwBgQRgG4V-urwsCf-GXiryXY&signed_in=true&callback=initMap\"></script>

\t\t\t
    ";
            // asset "9705c18_27"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9705c18_27") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9705c18_raphael-min_28.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script> 
\t<script async defer
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBdE3f3MTZwBgQRgG4V-urwsCf-GXiryXY&signed_in=true&callback=initMap\"></script>

\t\t\t
    ";
            // asset "9705c18_28"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9705c18_28") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9705c18_morris_29.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script> 
\t<script async defer
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBdE3f3MTZwBgQRgG4V-urwsCf-GXiryXY&signed_in=true&callback=initMap\"></script>

\t\t\t
    ";
            // asset "9705c18_29"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9705c18_29") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9705c18_jquery.min_30.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script> 
\t<script async defer
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBdE3f3MTZwBgQRgG4V-urwsCf-GXiryXY&signed_in=true&callback=initMap\"></script>

\t\t\t
    ";
            // asset "9705c18_30"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9705c18_30") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9705c18_jquery.timer_31.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script> 
\t<script async defer
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBdE3f3MTZwBgQRgG4V-urwsCf-GXiryXY&signed_in=true&callback=initMap\"></script>

\t\t\t
    ";
        } else {
            // asset "9705c18"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9705c18") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/9705c18.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script> 
\t<script async defer
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBdE3f3MTZwBgQRgG4V-urwsCf-GXiryXY&signed_in=true&callback=initMap\"></script>

\t\t\t
    ";
        }
        unset($context["asset_url"]);
        // line 180
        echo "    

\t
\t<!-- AFECTA A EL GRAFICO DE CALIFICACIONES-->
";
        // line 185
        echo "
\t
\t
\t
\t
\t
\t<!-- theme scripts -->
\t
\t
\t
\t<!-- this page specific inline scripts -->
\t<div id=\"fb-root\"></div>
\t<script>

\t
\t

\t
\t";
        // line 203
        $this->displayBlock('script_facebook', $context, $blocks);
        // line 214
        echo "
\t
\t";
        // line 216
        $this->displayBlock('script_twitter', $context, $blocks);
        // line 220
        echo "

\t
\tfunction moreData(div,link){

  \t  \tif(checkLogin()){  \t
\t \t\t\$(div).load(link);
  \t  \t}

\t}
\t";
        // line 230
        $this->displayBlock('ajax_public', $context, $blocks);
        // line 235
        echo "\t
\tfunction loginFacebook(){
\t\t\$('#login').load('";
        // line 237
        echo $this->env->getExtension('routing')->getUrl("hwi_oauth_service_redirect", array("service" => "facebook"));
        echo "');
\t\t}

\t\$.get( '";
        // line 240
        echo $this->env->getExtension('routing')->getPath("activity_logs_user");
        echo "' );

\tfunction checkLogin(){

\t\t";
        // line 244
        if ((null === $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"))) {
            // line 245
            echo "\t\t
\t\t\$( \"#login_button\" ).click();
\t\t\t
\t\t\treturn false;
\t\t";
        } else {
            // line 250
            echo "\t\t\treturn true;
\t\t";
        }
        // line 252
        echo "
\t\t\t
\t\t}
</script>
\t
\t
\t
\t";
    }

    // line 203
    public function block_script_facebook($context, array $blocks = array())
    {
        // line 204
        echo "
\t(function(d, s, id) {
\t\t  var js, fjs = d.getElementsByTagName(s)[0];
\t\t  if (d.getElementById(id)) return;
\t\t  js = d.createElement(s); js.id = id;
\t\t  js.src = \"//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5&appId=1600590050192428\";
\t\t  fjs.parentNode.insertBefore(js, fjs);
\t\t}(document, 'script', 'facebook-jssdk'));
\t
\t";
    }

    // line 216
    public function block_script_twitter($context, array $blocks = array())
    {
        // line 217
        echo "\t!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
\t
\t";
    }

    // line 230
    public function block_ajax_public($context, array $blocks = array())
    {
        // line 231
        echo "\t";
        $this->env->loadTemplate("EventBundle:Event:tapEventAjax.html.twig")->display($context);
        // line 232
        echo "
\t
\t";
    }

    public function getTemplateName()
    {
        return "::layout_dashboard_public.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  845 => 232,  842 => 231,  839 => 230,  833 => 217,  830 => 216,  817 => 204,  814 => 203,  803 => 252,  799 => 250,  792 => 245,  790 => 244,  783 => 240,  777 => 237,  773 => 235,  771 => 230,  759 => 220,  757 => 216,  753 => 214,  751 => 203,  731 => 185,  725 => 180,  403 => 174,  399 => 139,  396 => 138,  393 => 137,  389 => 132,  387 => 131,  383 => 129,  380 => 128,  376 => 109,  367 => 102,  364 => 101,  361 => 100,  357 => 97,  354 => 96,  351 => 95,  345 => 74,  334 => 48,  326 => 44,  322 => 42,  313 => 44,  309 => 42,  301 => 44,  297 => 42,  289 => 44,  285 => 42,  277 => 44,  273 => 42,  265 => 44,  261 => 42,  253 => 44,  249 => 42,  241 => 44,  237 => 42,  229 => 44,  225 => 42,  217 => 44,  213 => 42,  205 => 44,  201 => 42,  193 => 44,  189 => 42,  181 => 44,  177 => 42,  172 => 19,  169 => 18,  164 => 13,  162 => 12,  158 => 10,  155 => 9,  148 => 260,  146 => 137,  140 => 133,  138 => 128,  122 => 114,  120 => 113,  115 => 110,  113 => 100,  109 => 98,  107 => 95,  97 => 87,  95 => 86,  87 => 80,  83 => 75,  81 => 74,  69 => 73,  48 => 54,  46 => 18,  41 => 15,  39 => 9,  35 => 3,  29 => 1,);
    }
}
