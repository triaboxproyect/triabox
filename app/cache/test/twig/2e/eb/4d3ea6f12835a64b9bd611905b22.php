<?php

/* ::layout_xtending_dashboard.html.twig */
class __TwigTemplate_2eeb4d3ea6f12835a64b9bd611905b22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header_meta' => array($this, 'block_header_meta'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'notifications' => array($this, 'block_notifications'),
            'profile' => array($this, 'block_profile'),
            'container' => array($this, 'block_container'),
            'lateral_left_box_up_label' => array($this, 'block_lateral_left_box_up_label'),
            'lateral_left_box_up' => array($this, 'block_lateral_left_box_up'),
            'main_col' => array($this, 'block_main_col'),
            'main_box_label' => array($this, 'block_main_box_label'),
            'main_box_label_right' => array($this, 'block_main_box_label_right'),
            'main_box' => array($this, 'block_main_box'),
            'lateral_box' => array($this, 'block_lateral_box'),
            'lateral_box_up_label' => array($this, 'block_lateral_box_up_label'),
            'lateral_box_up' => array($this, 'block_lateral_box_up'),
            'lateral_box_down_label' => array($this, 'block_lateral_box_down_label'),
            'lateral_box_down' => array($this, 'block_lateral_box_down'),
            'script' => array($this, 'block_script'),
            'script_facebook' => array($this, 'block_script_facebook'),
            'script_twitter' => array($this, 'block_script_twitter'),
            'script_custom' => array($this, 'block_script_custom'),
            'script_custom_ejecute' => array($this, 'block_script_custom_ejecute'),
            'script_ajax_up' => array($this, 'block_script_ajax_up'),
            'script_ajax_down' => array($this, 'block_script_ajax_down'),
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
    ";
        // line 8
        $this->displayBlock('header_meta', $context, $blocks);
        // line 14
        echo "\t
\t<title>TriaBox</title>

\t
\t
\t";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 63
        echo "\t
\t<!-- bootstrap -->
";
        // line 66
        echo "\t
\t
\t<!-- 
\tIf you need RTL support just include here RTL CSS file <link rel=\"stylesheet\" type=\"text/css\" href=\"css/libs/bootstrap-rtl.min.css\" />
\tAnd add \"rtl\" class to <body> element - e.g. <body cl\tass=\"rtl\"> 
\t-->
\t
\t<!-- libraries -->
";
        // line 76
        echo "
\t<!-- global styles -->
";
        // line 79
        echo "
\t<!-- this page specific styles -->
";
        // line 84
        echo "\t
\t<!-- Favicon -->
\t<link type=\"image/x-icon\" href=\"http://www.triabox.com/web/bundles/cube/img/triabox.png\" rel=\"shortcut icon\" />
 <link href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_next_all_rss", array("firstResult" => (isset($context["min_records"]) ? $context["min_records"] : $this->getContext($context, "min_records")), "maxResults" => 20)), "html", null, true);
        echo "\" type=\"application/atom+xml\" rel=\"alternate\" title=\"TriaBox: Proximos Eventos\" />
\t<!-- google font libraries -->
";
        // line 90
        echo "
";
        // line 95
        echo "</head>
<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-72968505-1', 'auto');
  ga('send', 'pageview');

</script>
\t<div id=\"theme-wrapper\">
\t\t<header class=\"navbar\" id=\"header-navbar\">
\t\t\t
\t\t\t<div class=\"container\">
\t\t\t\t<a href=\"";
        // line 111
        if ((null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"))) {
            echo " ";
            echo $this->env->getExtension('routing')->getPath("_login");
            echo " ";
        } else {
            echo "  ";
            echo $this->env->getExtension('routing')->getPath("newsuser");
            echo " ";
        }
        echo "\" id=\"logo\" class=\"navbar-brand\">

\t\t\t\t\t<cite title=\"TriaBox\">TriaBox</cite>
";
        // line 117
        echo "\t\t\t\t</a>
\t\t\t\t
\t\t\t\t<div class=\"clearfix\">
\t\t\t\t<button class=\"navbar-toggle\" data-target=\".navbar-ex1-collapse\" data-toggle=\"collapse\" type=\"button\">
\t\t\t\t\t<span class=\"sr-only\"></span>
\t\t\t\t\t<span class=\"fa fa-bars\"></span>
\t\t\t\t</button>
\t\t\t\t
\t\t\t\t<div class=\"nav-no-collapse navbar-left pull-left hidden-sm hidden-xs\">
\t\t\t\t\t<ul class=\"nav navbar-nav pull-left\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"btn\" id=\"make-small-nav\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 133
        $this->displayBlock('notifications', $context, $blocks);
        // line 138
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"nav-no-collapse pull-right\" id=\"header-nav\">
\t\t\t\t
\t\t\t\t\t";
        // line 145
        $this->displayBlock('profile', $context, $blocks);
        // line 148
        echo "\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t";
        // line 151
        if ((null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"))) {
            // line 152
            echo "\t\t
\t\t\t\t\t\t<div class=\"pull-right\" id=\"header-nav\">
\t\t\t\t\t\t\t<button class=\"btn btn-success col-xs-12\"  id=\"login_button\" data-toggle=\"modal\" href=\"#login\">
\t\t\t\t\t\t\t\t<i class=\"fa \"></i> login o registro
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 159
        echo "\t\t\t
\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 163
        $this->env->loadTemplate(":helper:login.html.twig")->display($context);
        // line 164
        echo "\t\t\t
\t\t\t\t\t
\t\t</header>
\t\t";
        // line 167
        $this->displayBlock('container', $context, $blocks);
        // line 319
        echo "\t</div>
\t\t
\t
\t";
        // line 322
        $this->displayBlock('script', $context, $blocks);
        // line 690
        echo "\t <script async defer
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBdE3f3MTZwBgQRgG4V-urwsCf-GXiryXY&signed_in=true&libraries=places&callback=initMap\"></script>
";
        // line 694
        echo "        <script type=\"text/javascript\">


     // Handles click events on a map, and adds a new point to the Polyline.
//      function addLatLng() {

//        var path = poly.getPath();

//        // Because path is an MVCArray, we can simply append a new coordinate
//        // and it will automatically appear.
//        path.push({lat: -31.6032089, lng: -59.374585858});

//        // Add a new marker at the new plotted point on the polyline.
//        var marker = new google.maps.Marker({
//          position: {lat: -31.6032089, lng: -59.374585858},
//          title: '#' + path.getLength(),
//          map: map
//        });
//      }

     

        </script>
</body>
</html>
<!--  -->";
    }

    // line 8
    public function block_header_meta($context, array $blocks = array())
    {
        // line 9
        echo "

\t";
        // line 11
        $this->env->loadTemplate(":helper:metadata_red_social_site.html.twig")->display($context);
        // line 12
        echo "\t
    ";
    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 20
        echo "\t\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "657cf0f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_657cf0f_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/657cf0f_bootstrap.min_1.css");
            // line 49
            echo "\t\t

\t

\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
            // asset "657cf0f_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_657cf0f_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/657cf0f_font-awesome_2.css");
            // line 49
            echo "\t\t

\t

\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
            // asset "657cf0f_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_657cf0f_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/657cf0f_nanoscroller_3.css");
            // line 49
            echo "\t\t

\t

\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
            // asset "657cf0f_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_657cf0f_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/657cf0f_theme_styles_4.css");
            // line 49
            echo "\t\t

\t

\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
            // asset "657cf0f_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_657cf0f_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/657cf0f_jquery-jvectormap-1.2.2_5.css");
            // line 49
            echo "\t\t

\t

\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
            // asset "657cf0f_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_657cf0f_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/657cf0f_weather-icons_6.css");
            // line 49
            echo "\t\t

\t

\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
            // asset "657cf0f_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_657cf0f_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/657cf0f_morris_7.css");
            // line 49
            echo "\t\t

\t

\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
            // asset "657cf0f_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_657cf0f_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/657cf0f_jquery.nouislider_8.css");
            // line 49
            echo "\t\t

\t

\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
            // asset "657cf0f_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_657cf0f_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/657cf0f_select2_9.css");
            // line 49
            echo "\t\t

\t

\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
            // asset "657cf0f_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_657cf0f_9") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/657cf0f_datepicker_10.css");
            // line 49
            echo "\t\t

\t

\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
            // asset "657cf0f_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_657cf0f_10") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/657cf0f_daterangepicker_11.css");
            // line 49
            echo "\t\t

\t

\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
            // asset "657cf0f_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_657cf0f_11") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/657cf0f_bootstrap-timepicker_12.css");
            // line 49
            echo "\t\t

\t

\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
            // asset "657cf0f_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_657cf0f_12") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/657cf0f_hopscotch_13.css");
            // line 49
            echo "\t\t

\t

\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
            // asset "657cf0f_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_657cf0f_13") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/657cf0f_dataTables.fixedHeader_14.css");
            // line 49
            echo "\t\t

\t

\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
            // asset "657cf0f_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_657cf0f_14") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/657cf0f_dataTables.tableTools_15.css");
            // line 49
            echo "\t\t

\t

\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
            // asset "657cf0f_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_657cf0f_15") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/657cf0f_footable.core_16.css");
            // line 49
            echo "\t\t

\t

\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
        } else {
            // asset "657cf0f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_657cf0f") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/657cf0f.css");
            // line 49
            echo "\t\t

\t

\t
\t\t    <link rel=\"stylesheet\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t\t    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
\t\t";
        }
        unset($context["asset_url"]);
        // line 57
        echo "\t\t
\t<!--[if lt IE 9]>
\t\t<script src=\"js/html5shiv.js\"></script>
\t\t<script src=\"js/respond.min.js\"></script>
\t<![endif]-->
\t";
    }

    // line 133
    public function block_notifications($context, array $blocks = array())
    {
        // line 134
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 135
        $this->env->loadTemplate("notifications_amateur.html.twig")->display($context);
        // line 136
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
    }

    // line 145
    public function block_profile($context, array $blocks = array())
    {
        // line 146
        echo "\t\t\t\t\t\t";
        $this->env->loadTemplate("profile_amateur.html.twig")->display($context);
        // line 147
        echo "\t\t\t\t\t";
    }

    // line 167
    public function block_container($context, array $blocks = array())
    {
        // line 168
        echo "\t\t<div id=\"page-wrapper\" class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div id=\"nav-col\">
\t\t\t\t
\t\t\t\t";
        // line 172
        $this->env->loadTemplate("menu_amateur.html.twig")->display($context);
        // line 173
        echo "\t\t\t\t\t<div class=\"main-box\">
\t\t\t\t\t\t<header class=\"main-box-header clearfix\">
\t\t\t\t\t\t\t<h2 class=\"pull-left\">";
        // line 175
        $this->displayBlock('lateral_left_box_up_label', $context, $blocks);
        echo "</h2>
\t\t\t\t\t\t</header>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 179
        $this->displayBlock('lateral_left_box_up', $context, $blocks);
        // line 183
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t\t<div id=\"content-wrapper\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div >
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"main-box\">
\t\t\t\t\t\t\t\t\t\t<header class=\"main-box-header clearfix\" >\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box\" >

\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 204
        if ((!(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")))) {
            // line 205
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("newsuser");
            echo "\" class=\"btn\" id=\"home\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 206
            echo $this->env->getExtension('translator')->getTranslator()->trans("Inicio", array(), "messages");
            echo "<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-home fa-3x\" ></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 209
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))), "html", null, true);
            echo "\" class=\"btn\" id=\"perfil\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 210
            echo $this->env->getExtension('translator')->getTranslator()->trans("Perfil", array(), "messages");
            echo "<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user fa-3x\" ></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:moreData('#main-box','";
            // line 214
            echo $this->env->getExtension('routing')->getPath("user_interaction");
            echo "')\" class=\"btn\" id=\"friend\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 215
            echo $this->env->getExtension('translator')->getTranslator()->trans("Amigos", array(), "messages");
            echo "<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-users fa-3x\" ></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 219
        echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        echo $this->env->getExtension('routing')->getPath("event_list_next");
        echo "\" class=\"btn\" id=\"calendar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 220
        echo $this->env->getExtension('translator')->getTranslator()->trans("Calendario", array(), "messages");
        echo "<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar fa-3x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 223
        if ((!(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")))) {
            // line 224
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("event_past");
            echo "\" class=\"btn\" id=\"logros\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 225
            echo $this->env->getExtension('translator')->getTranslator()->trans("Logros", array(), "messages");
            echo "<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trophy fa-3x\" ></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a> 
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 228
            echo $this->env->getExtension('routing')->getPath("event_next");
            echo "\" class=\"btn\" id=\"planing\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 229
            echo $this->env->getExtension('translator')->getTranslator()->trans("Inscripto", array(), "messages");
            echo "<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa  fa-check-square-o fa-3x\" ></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a> 
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 233
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_report_running", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))), "html", null, true);
            echo "\" class=\"btn\" id=\"report\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 234
            echo $this->env->getExtension('translator')->getTranslator()->trans("Reportes", array(), "messages");
            echo "<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bar-chart-o fa-3x\" ></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a> 
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 238
            echo $this->env->getExtension('routing')->getPath("search_result");
            echo "\" class=\"btn\" id=\"search_result\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 239
            echo $this->env->getExtension('translator')->getTranslator()->trans("Resultados", array(), "messages");
            echo "<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search fa-3x\" ></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a> 
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 243
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"";
        // line 252
        $this->displayBlock('main_col', $context, $blocks);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"main-box\" id=\"main-box\">
\t\t\t\t\t\t\t\t\t\t<header class=\"main-box-header clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<h2>";
        // line 255
        $this->displayBlock('main_box_label', $context, $blocks);
        echo "</h2>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 256
        $this->displayBlock('main_box_label_right', $context, $blocks);
        // line 261
        echo "\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"login\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.modal-content -->
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
        // line 267
        $this->displayBlock('main_box', $context, $blocks);
        // line 271
        echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t";
        // line 275
        $this->displayBlock('lateral_box', $context, $blocks);
        // line 307
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t   </div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t";
    }

    // line 175
    public function block_lateral_left_box_up_label($context, array $blocks = array())
    {
        echo "Ultimos resultados";
    }

    // line 179
    public function block_lateral_left_box_up($context, array $blocks = array())
    {
        // line 180
        echo "\t\t\t\t\t\t\t\t<div id=\"result_error\"></div>
\t\t\t\t\t\t\t\t<div id=\"result\"></div>
\t\t\t\t\t\t";
    }

    // line 252
    public function block_main_col($context, array $blocks = array())
    {
        echo "col-md-8";
    }

    // line 255
    public function block_main_box_label($context, array $blocks = array())
    {
        echo "Novedades";
    }

    // line 256
    public function block_main_box_label_right($context, array $blocks = array())
    {
        // line 257
        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
    }

    // line 267
    public function block_main_box($context, array $blocks = array())
    {
        // line 268
        echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 269
        $this->env->loadTemplate("main_box.html.twig")->display($context);
        // line 270
        echo "\t\t\t\t\t\t\t\t\t\t\t";
    }

    // line 275
    public function block_lateral_box($context, array $blocks = array())
    {
        // line 276
        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"main-box\">
\t\t\t\t\t\t\t\t\t\t\t\t<header class=\"main-box-header clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"pull-left\">";
        // line 280
        $this->displayBlock('lateral_box_up_label', $context, $blocks);
        echo "</h2>
\t\t\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 284
        $this->displayBlock('lateral_box_up', $context, $blocks);
        // line 288
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"main-box weather-box\">
\t\t\t\t\t\t\t\t\t\t\t\t<header class=\"main-box-header clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"pull-left\">";
        // line 296
        $this->displayBlock('lateral_box_down_label', $context, $blocks);
        echo "</h2>
\t\t\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 298
        $this->displayBlock('lateral_box_down', $context, $blocks);
        // line 302
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
    }

    // line 280
    public function block_lateral_box_up_label($context, array $blocks = array())
    {
        if ((!(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")))) {
            echo "Tal vez conoces a:";
        } else {
            echo "Usuarios Destacados";
        }
    }

    // line 284
    public function block_lateral_box_up($context, array $blocks = array())
    {
        // line 285
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"friends_error\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"friends\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t";
    }

    // line 296
    public function block_lateral_box_down_label($context, array $blocks = array())
    {
        echo "Proximos Eventos";
    }

    // line 298
    public function block_lateral_box_down($context, array $blocks = array())
    {
        // line 299
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"event_error\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"event\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t";
    }

    // line 322
    public function block_script($context, array $blocks = array())
    {
        // line 323
        echo "
\t
\t";
        // line 325
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e1a4f99_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_demo-rtl_1.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
            // asset "e1a4f99_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_demo-skin-changer_2.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
            // asset "e1a4f99_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_jquery_3.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
            // asset "e1a4f99_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_bootstrap_4.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
            // asset "e1a4f99_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_jquery.nanoscroller.min_5.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
            // asset "e1a4f99_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_demo_6.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
            // asset "e1a4f99_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_moment.min_7.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
            // asset "e1a4f99_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_jquery-jvectormap-1.2.2.min_8.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
            // asset "e1a4f99_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_jquery-jvectormap-world-merc-en_9.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
            // asset "e1a4f99_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_9") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_gdp-data_10.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
            // asset "e1a4f99_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_10") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_jquery.flot.min_11.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
            // asset "e1a4f99_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_11") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_jquery.flot.resize.min_12.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
            // asset "e1a4f99_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_12") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_jquery.flot.time.min_13.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
            // asset "e1a4f99_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_13") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_jquery.flot.threshold_14.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
            // asset "e1a4f99_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_14") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_jquery.flot.axislabels_15.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
            // asset "e1a4f99_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_15") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_jquery.slimscroll.min_16.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
            // asset "e1a4f99_16"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_16") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_jquery.sparkline.min_17.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
            // asset "e1a4f99_17"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_17") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_skycons_18.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
            // asset "e1a4f99_18"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_18") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_scripts_19.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
            // asset "e1a4f99_19"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_19") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_pace.min_20.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
            // asset "e1a4f99_20"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_20") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_jquery.easypiechart.min_21.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
            // asset "e1a4f99_21"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_21") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_bootstrap-datepicker_22.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
            // asset "e1a4f99_22"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_22") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_bootstrap-timepicker.min_23.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
            // asset "e1a4f99_23"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_23") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_jquery.nouislider_24.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
            // asset "e1a4f99_24"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_24") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_select2.min_25.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
            // asset "e1a4f99_25"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_25") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_hogan_26.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
            // asset "e1a4f99_26"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_26") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_typeahead.min_27.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
            // asset "e1a4f99_27"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_27") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_jquery.knob_28.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
            // asset "e1a4f99_28"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_28") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_raphael-min_29.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
            // asset "e1a4f99_29"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_29") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_hopscotch_30.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
            // asset "e1a4f99_30"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_30") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_jquery.dataTables_31.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
            // asset "e1a4f99_31"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_31") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_dataTables.fixedHeader_32.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
            // asset "e1a4f99_32"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_32") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_dataTables.tableTools_33.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
            // asset "e1a4f99_33"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_33") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_jquery.dataTables.bootstrap_34.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
            // asset "e1a4f99_34"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_34") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_footable_35.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
            // asset "e1a4f99_35"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_35") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_footable.sort_36.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
            // asset "e1a4f99_36"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_36") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_footable.paginate_37.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
            // asset "e1a4f99_37"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_37") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_footable.filter_38.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
            // asset "e1a4f99_38"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99_38") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99_morris_39.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
        } else {
            // asset "e1a4f99"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1a4f99") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e1a4f99.js");
            // line 373
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 374
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 

\t 
\t\t\t
    ";
        }
        unset($context["asset_url"]);
        // line 379
        echo "    
   

\t
\t<!-- AFECTA A EL GRAFICO DE CALIFICACIONES-->
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
\t\$('.footable').footable();
\tfunction checkLogin(){

\t\t";
        // line 398
        if ((null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"))) {
            // line 399
            echo "\t\t
\t\t\$( \"#login_button\" ).click();
\t\t\t
\t\t\treturn false;
\t\t";
        } else {
            // line 404
            echo "\t\t\treturn true;
\t\t";
        }
        // line 406
        echo "
\t\t\t
\t\t}

\t

\t";
        // line 412
        $this->displayBlock('script_facebook', $context, $blocks);
        // line 421
        echo "
\t";
        // line 422
        $this->displayBlock('script_twitter', $context, $blocks);
        // line 426
        echo "\t
\t
\t";
        // line 428
        $this->env->loadTemplate(":helper:dinamicAddTable.html.twig")->display($context);
        // line 429
        echo "
\t";
        // line 430
        $this->displayBlock('script_custom', $context, $blocks);
        // line 433
        echo "\t";
        $this->displayBlock('script_custom_ejecute', $context, $blocks);
        // line 436
        echo "\t
\t";
        // line 437
        $this->displayBlock('script_ajax_up', $context, $blocks);
        // line 444
        echo "
   \t\$('#result').load('";
        // line 445
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_last_result", array("firstResult" => 0, "maxResults" => 15)), "html", null, true);
        echo "');
   \t
   \t
   \t";
        // line 448
        $this->displayBlock('script_ajax_down', $context, $blocks);
        // line 461
        echo "
\t

\tfunction markViewNotificationEvent(){

\t\t\$('#notificationEvent').load('";
        // line 466
        echo $this->env->getExtension('routing')->getPath("marck_view_notification_event");
        echo "');
\t\t
\t}

\tfunction markViewNotificationFriend(){

\t\t\$('#notificationFriend').load('";
        // line 472
        echo $this->env->getExtension('routing')->getPath("marck_view_notification_friend");
        echo "');
\t\t
\t}

  \tfunction moreData(div,link){

  \t  \tif(checkLogin()){  \t
\t \t\t\$(div).load(link);
  \t  \t}

\t}

  \tfunction sendAjax(link){

  \t\t\$.get( link );
  \t}
  \t
  \t
  \t
\tinicializarDatos('tbody.classification','";
        // line 491
        echo $this->env->getExtension('translator')->getTranslator()->trans("adicionar.resultado", array(), "messages");
        echo "',4);
\t
\tinicializarDatos('tbody.categories','";
        // line 493
        echo $this->env->getExtension('translator')->getTranslator()->trans("Agregar Distancia", array(), "messages");
        echo "',7);
\t
\t//autocomplete with templating


\t
\t\$('#sel2Multi').select2({
\t\tplaceholder: 'Select a Country',
\t\tallowClear: true
\t});
\t//nice select boxes
\t\$('#sel2').select2();

  function sendComment(idNews){
\t \t\$('#comments_'.concat(idNews)).load('";
        // line 507
        echo $this->env->getExtension('routing')->getPath("create_comment_newsUser");
        echo "', {\"comment\" : \$('#comment_'.concat(idNews)).val(), \"newUser\" : \$('#newUser_'.concat(idNews)).val()});
\t \t
\t  }
  function createLink(link,idNews){
\t \t\$('#news_'.concat(idNews)).load(link);
\t  
\t  }
\t
\$(document).ready(function() {
\t\$('#datepickerDateComponent').datepicker();
//timepicker
\t\$('#timepicker').timepicker({
\tminuteStep: 5,
\tshowSeconds: false,
\tshowMeridian: false,
\tdisableFocus: false,
\tshowWidget: true
}).focus(function() {
\t\$(this).next().trigger('click');
});
\t\t

\t\t \$('.conversation-inner').slimScroll({
\t\t        height: '352px',
\t\t        alwaysVisible: false,
\t\t        railVisible: true,
\t\t        wheelStep: 5,
\t\t        allowPageScroll: false
\t\t    });

\t\t
// \t    //CHARTS
\t    function gd(year, day, month) {
\t\t\treturn new Date(year, month - 1, day).getTime();
\t\t}
\t\t

\t    

\t});

</script>
\t\t
<script>


function updateFirstTime(){
\t";
        // line 554
        if ((!(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")))) {
            // line 555
            echo "\t\$.get('";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_update_first_time", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))), "html", null, true);
            echo "', { }, function(resp) {});
\t";
        }
        // line 557
        echo "
}
";
        // line 559
        if (((!(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"))) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "firstTime") == 0))) {
            // line 560
            echo "
\$(document).ready(function() {
\tvar placementRight = 'right';
\tvar placementLeft = 'left';
\t
\tif (\$('body').hasClass('rtl')) {
\t\tplacementRight = 'left';
\t\tplacementLeft = 'right';
\t}
\t
\t
\t// Define the tour!
\tvar tour = {
\t\tid: \"Cube-intro\",
\t\tsteps: [
\t\t\t{
\t\t\t\ttarget: \"user-left-box\",
\t\t\t\ttitle: \"";
            // line 577
            echo $this->env->getExtension('translator')->getTranslator()->trans("Usuario Logueado", array(), "messages");
            echo "\",
\t\t\t\tcontent: \"";
            // line 578
            echo $this->env->getExtension('translator')->getTranslator()->trans("Puedes ingresar tu perfil desde el menu", array(), "messages");
            echo "\",
\t\t\t\tplacement: placementRight,
\t\t\t\tyOffset: 10
\t\t\t},
\t\t\t{
\t\t\t\ttarget: 'make-small-nav',
\t\t\t\ttitle: \"";
            // line 584
            echo $this->env->getExtension('translator')->getTranslator()->trans("Boton Menu", array(), "messages");
            echo "\",
\t\t\t\tcontent: \"";
            // line 585
            echo $this->env->getExtension('translator')->getTranslator()->trans("Haciendo Click en el Boton puede mostrar u ocultar el menu", array(), "messages");
            echo "\",
\t\t\t\tplacement: \"bottom\",
\t\t\t\tzindex: 999,
\t\t\t\txOffset: -8
\t\t\t},
\t\t\t{
\t\t\t\ttarget: 'profile-dropdown',
\t\t\t\ttitle: \"";
            // line 592
            echo $this->env->getExtension('translator')->getTranslator()->trans("Usuario Logueado", array(), "messages");
            echo "\",
\t\t\t\tcontent: \"";
            // line 593
            echo $this->env->getExtension('translator')->getTranslator()->trans("Puedes ingresar tu perfil desde el menu", array(), "messages");
            echo "\",
\t\t\t\tplacement: placementLeft,
\t\t\t\tzindex: 999
\t\t\t},
\t\t\t{
\t\t\t\ttarget: 'novedades',
\t\t\t\ttitle: \"";
            // line 599
            echo $this->env->getExtension('translator')->getTranslator()->trans("Entrenaste hoy?", array(), "messages");
            echo "\",
\t\t\t\tcontent: \"";
            // line 600
            echo $this->env->getExtension('translator')->getTranslator()->trans("Deja tu estado para que lo vean tus amigos, ademas esta preparado para subir los entrenamientos del dia.", array(), "messages");
            echo "\",
\t\t\t\tplacement: \"top\",
\t\t\t\tzindex: 999
\t\t\t},
\t\t\t{
\t\t\t\ttarget: 'home',
\t\t\t\ttitle: \"";
            // line 606
            echo $this->env->getExtension('translator')->getTranslator()->trans("Inicio", array(), "messages");
            echo "\",
\t\t\t\tcontent: \"";
            // line 607
            echo $this->env->getExtension('translator')->getTranslator()->trans("Desde cualquier lugar podes volver a la pagina de inicio", array(), "messages");
            echo "\",
\t\t\t\tplacement: placementLeft,
\t\t\t\tzindex: 999
\t\t\t},
\t\t\t{
\t\t\t\ttarget: 'perfil',
\t\t\t\ttitle: \"";
            // line 613
            echo $this->env->getExtension('translator')->getTranslator()->trans("Perfil", array(), "messages");
            echo "\",
\t\t\t\tcontent: \"";
            // line 614
            echo $this->env->getExtension('translator')->getTranslator()->trans("Ingresa a tu perfil y poder ver tu actividad, amigos y carreras que participaste", array(), "messages");
            echo "\",
\t\t\t\tplacement: placementLeft,
\t\t\t\tzindex: 999
\t\t\t},
\t\t\t{
\t\t\t\ttarget: 'friend',
\t\t\t\ttitle: \"";
            // line 620
            echo $this->env->getExtension('translator')->getTranslator()->trans("Amigos", array(), "messages");
            echo "\",
\t\t\t\tcontent: \"";
            // line 621
            echo $this->env->getExtension('translator')->getTranslator()->trans("Ingresa a ver a tus amigos y su perfil", array(), "messages");
            echo "\",
\t\t\t\tplacement: placementLeft,
\t\t\t\tzindex: 999
\t\t\t},
\t\t\t{
\t\t\ttarget: 'calendar',
\t\t\ttitle: \"";
            // line 627
            echo $this->env->getExtension('translator')->getTranslator()->trans("Calendario", array(), "messages");
            echo "\",
\t\t\tcontent: \"";
            // line 628
            echo $this->env->getExtension('translator')->getTranslator()->trans("Ingresa al calendario de eventos e incribite o busca a un amigo", array(), "messages");
            echo "\",
\t\t\tplacement: placementLeft,
\t\t\tzindex: 999
\t\t\t},
\t\t\t{
\t\t\ttarget: 'logros',
\t\t\ttitle: \"";
            // line 634
            echo $this->env->getExtension('translator')->getTranslator()->trans("Eventos Usuario", array(), "messages");
            echo "\",
\t\t\tcontent: \"";
            // line 635
            echo $this->env->getExtension('translator')->getTranslator()->trans("Ingresa a los eventos que participaste y carga o busca tus resueltados", array(), "messages");
            echo "\",
\t\t\tplacement: placementLeft,
\t\t\tzindex: 999
\t\t\t},
\t\t\t{
\t\t\ttarget: 'planing',
\t\t\ttitle: \"";
            // line 641
            echo $this->env->getExtension('translator')->getTranslator()->trans("Planificacion", array(), "messages");
            echo "\",
\t\t\tcontent: \"";
            // line 642
            echo $this->env->getExtension('translator')->getTranslator()->trans("Mira los eventos que tenes planificados", array(), "messages");
            echo "\",
\t\t\tplacement: placementLeft,
\t\t\tzindex: 999
\t\t\t},
\t\t\t{
\t\t\ttarget: 'report',
\t\t\ttitle: \"";
            // line 648
            echo $this->env->getExtension('translator')->getTranslator()->trans("Reportes", array(), "messages");
            echo "\",
\t\t\tcontent: \"";
            // line 649
            echo $this->env->getExtension('translator')->getTranslator()->trans("Informe de tus participaciones en eventos", array(), "messages");
            echo "\",
\t\t\tplacement: placementLeft,
\t\t\tzindex: 999
\t\t\t},
\t\t{
\t\t\ttarget: 'search_result',
\t\t\ttitle: \"";
            // line 655
            echo $this->env->getExtension('translator')->getTranslator()->trans("Busqueda Resultados", array(), "messages");
            echo "\",
\t\t\tcontent: \"";
            // line 656
            echo $this->env->getExtension('translator')->getTranslator()->trans("Sugerencia de resultados oficiales cargados en el sistema", array(), "messages");
            echo "\",
\t\t\tplacement: placementLeft,
\t\t\tzindex: 999
\t\t\t},
\t\t{
\t\t\ttarget: 'more_event',
\t\t\ttitle: \"";
            // line 662
            echo $this->env->getExtension('translator')->getTranslator()->trans("Informar Evento", array(), "messages");
            echo "\",
\t\t\tcontent: \"";
            // line 663
            echo $this->env->getExtension('translator')->getTranslator()->trans("Si conoces un evento que no esta en el sistema, informalo asi es parte de la red.", array(), "messages");
            echo "\",
\t\t\tplacement: \"bottom\",
\t\t\tzindex: 999
\t\t\t},

\t\t\t{
\t\t\t\ttarget: 'search',
\t\t\t\ttitle: \"";
            // line 670
            echo $this->env->getExtension('translator')->getTranslator()->trans("Busqueda", array(), "messages");
            echo "\",
\t\t\t\tcontent: \"";
            // line 671
            echo $this->env->getExtension('translator')->getTranslator()->trans("Busca eventos o amigos", array(), "messages");
            echo "\",
\t\t\t\tplacement: placementLeft,
\t\t\t\tzindex: 999
\t\t\t\t},
\t\t\t
\t\t
\t\t],
\t\tshowPrevButton: true
\t};

\tupdateFirstTime();
\t// Start the tour!
\thopscotch.startTour(tour);
});
";
        }
        // line 686
        echo "
\t</script>\t\t
\t\t
\t";
    }

    // line 412
    public function block_script_facebook($context, array $blocks = array())
    {
        // line 413
        echo "\t(function(d, s, id) {
\t\t  var js, fjs = d.getElementsByTagName(s)[0];
\t\t  if (d.getElementById(id)) return;
\t\t  js = d.createElement(s); js.id = id;
\t\t  js.src = \"//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5&appId=1600590050192428\";
\t\t  fjs.parentNode.insertBefore(js, fjs);
\t\t}(document, 'script', 'facebook-jssdk'));
\t";
    }

    // line 422
    public function block_script_twitter($context, array $blocks = array())
    {
        // line 423
        echo "\t!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
\t
\t";
    }

    // line 430
    public function block_script_custom($context, array $blocks = array())
    {
        // line 431
        echo "\t
\t";
    }

    // line 433
    public function block_script_custom_ejecute($context, array $blocks = array())
    {
        // line 434
        echo "\t
\t";
    }

    // line 437
    public function block_script_ajax_up($context, array $blocks = array())
    {
        // line 438
        echo "\t";
        if ((!(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")))) {
            // line 439
            echo "  \t \t\$('#friends').load('";
            echo $this->env->getExtension('routing')->getPath("know_friends");
            echo "');
  \t";
        } else {
            // line 441
            echo "  \t \t\$('#friends').load('";
            echo $this->env->getExtension('routing')->getPath("max_friends_user");
            echo "');
  \t \t";
        }
        // line 442
        echo "\t
   \t";
    }

    // line 448
    public function block_script_ajax_down($context, array $blocks = array())
    {
        // line 449
        echo "   \t\$('#event').load('";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_next_all", array("firstResult" => (isset($context["min_records"]) ? $context["min_records"] : $this->getContext($context, "min_records")), "maxResults" => (isset($context["max_records"]) ? $context["max_records"] : $this->getContext($context, "max_records")))), "html", null, true);
        echo "');
   \t
\t
\t\t\t";
        // line 453
        echo "\t\t\t";
        // line 454
        echo "\t\t\t";
        // line 455
        echo "\t\t\t";
        // line 456
        echo "\t\t\t";
        // line 457
        echo "\t\t\t";
        // line 458
        echo "\t\t\t";
        // line 459
        echo "\t\t\t";
        // line 460
        echo "\t";
    }

    public function getTemplateName()
    {
        return "::layout_xtending_dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1845 => 460,  1843 => 459,  1841 => 458,  1839 => 457,  1837 => 456,  1835 => 455,  1833 => 454,  1831 => 453,  1824 => 449,  1821 => 448,  1816 => 442,  1810 => 441,  1804 => 439,  1801 => 438,  1798 => 437,  1793 => 434,  1790 => 433,  1785 => 431,  1782 => 430,  1776 => 423,  1773 => 422,  1762 => 413,  1759 => 412,  1752 => 686,  1734 => 671,  1730 => 670,  1720 => 663,  1716 => 662,  1707 => 656,  1703 => 655,  1694 => 649,  1690 => 648,  1681 => 642,  1677 => 641,  1668 => 635,  1664 => 634,  1655 => 628,  1651 => 627,  1642 => 621,  1638 => 620,  1629 => 614,  1625 => 613,  1616 => 607,  1612 => 606,  1603 => 600,  1599 => 599,  1590 => 593,  1586 => 592,  1576 => 585,  1572 => 584,  1563 => 578,  1559 => 577,  1540 => 560,  1538 => 559,  1534 => 557,  1528 => 555,  1526 => 554,  1476 => 507,  1459 => 493,  1454 => 491,  1432 => 472,  1423 => 466,  1416 => 461,  1414 => 448,  1408 => 445,  1405 => 444,  1403 => 437,  1400 => 436,  1397 => 433,  1395 => 430,  1392 => 429,  1390 => 428,  1386 => 426,  1384 => 422,  1381 => 421,  1379 => 412,  1371 => 406,  1367 => 404,  1360 => 399,  1358 => 398,  1337 => 379,  1328 => 374,  1325 => 373,  1315 => 374,  1312 => 373,  1303 => 374,  1300 => 373,  1291 => 374,  1288 => 373,  1279 => 374,  1276 => 373,  1267 => 374,  1264 => 373,  1255 => 374,  1252 => 373,  1243 => 374,  1240 => 373,  1231 => 374,  1228 => 373,  1219 => 374,  1216 => 373,  1207 => 374,  1204 => 373,  1195 => 374,  1192 => 373,  1183 => 374,  1180 => 373,  1171 => 374,  1168 => 373,  1159 => 374,  1156 => 373,  1147 => 374,  1144 => 373,  1135 => 374,  1132 => 373,  1123 => 374,  1120 => 373,  1111 => 374,  1108 => 373,  1099 => 374,  1096 => 373,  1087 => 374,  1084 => 373,  1075 => 374,  1072 => 373,  1063 => 374,  1060 => 373,  1051 => 374,  1048 => 373,  1039 => 374,  1036 => 373,  1027 => 374,  1024 => 373,  1015 => 374,  1012 => 373,  1003 => 374,  1000 => 373,  991 => 374,  988 => 373,  979 => 374,  976 => 373,  967 => 374,  964 => 373,  955 => 374,  952 => 373,  943 => 374,  940 => 373,  931 => 374,  928 => 373,  919 => 374,  916 => 373,  907 => 374,  904 => 373,  895 => 374,  892 => 373,  883 => 374,  880 => 373,  871 => 374,  868 => 373,  859 => 374,  856 => 373,  852 => 325,  848 => 323,  845 => 322,  839 => 299,  836 => 298,  830 => 296,  824 => 285,  821 => 284,  811 => 280,  803 => 302,  801 => 298,  796 => 296,  786 => 288,  784 => 284,  777 => 280,  771 => 276,  768 => 275,  764 => 270,  762 => 269,  759 => 268,  756 => 267,  749 => 257,  746 => 256,  740 => 255,  734 => 252,  728 => 180,  725 => 179,  719 => 175,  704 => 307,  702 => 275,  696 => 271,  694 => 267,  686 => 261,  684 => 256,  680 => 255,  674 => 252,  663 => 243,  656 => 239,  652 => 238,  645 => 234,  641 => 233,  634 => 229,  630 => 228,  624 => 225,  619 => 224,  617 => 223,  611 => 220,  606 => 219,  599 => 215,  595 => 214,  588 => 210,  584 => 209,  578 => 206,  573 => 205,  571 => 204,  548 => 183,  546 => 179,  539 => 175,  535 => 173,  533 => 172,  527 => 168,  524 => 167,  520 => 147,  517 => 146,  514 => 145,  509 => 136,  507 => 135,  504 => 134,  501 => 133,  492 => 57,  485 => 54,  478 => 49,  470 => 54,  463 => 49,  456 => 54,  449 => 49,  442 => 54,  435 => 49,  428 => 54,  421 => 49,  414 => 54,  407 => 49,  400 => 54,  393 => 49,  386 => 54,  379 => 49,  372 => 54,  365 => 49,  358 => 54,  351 => 49,  344 => 54,  337 => 49,  330 => 54,  323 => 49,  316 => 54,  309 => 49,  302 => 54,  295 => 49,  288 => 54,  281 => 49,  274 => 54,  267 => 49,  260 => 54,  253 => 49,  248 => 20,  245 => 19,  240 => 12,  238 => 11,  234 => 9,  231 => 8,  202 => 694,  198 => 690,  196 => 322,  191 => 319,  189 => 167,  184 => 164,  182 => 163,  176 => 159,  167 => 152,  165 => 151,  160 => 148,  158 => 145,  149 => 138,  147 => 133,  129 => 117,  115 => 111,  97 => 95,  94 => 90,  89 => 87,  84 => 84,  80 => 79,  76 => 76,  62 => 63,  60 => 19,  53 => 14,  51 => 8,  42 => 1,  152 => 78,  137 => 65,  134 => 64,  107 => 37,  99 => 32,  93 => 29,  85 => 24,  81 => 23,  77 => 22,  73 => 21,  66 => 66,  64 => 15,  56 => 10,  52 => 9,  43 => 6,  39 => 4,  36 => 3,  30 => 2,);
    }
}
