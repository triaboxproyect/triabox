<?php

/* EventBundle:Event:view.html.twig */
class __TwigTemplate_bd5c0a833f9be49f5d1ac94ce45ca292 extends Twig_Template
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
        echo "<div id=\"modificacion";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "\"></div>
<div class=\"main-box clearfix profile-box-menu\">
\t\t\t\t\t\t\t\t\t\t<div class=\"main-box-body clearfix\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"profile-box-header green-bg clearfix\" style=\"background-image: url(";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "photoBackground")), "html", null, true);
        echo ");\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "photo")), "html", null, true);
        echo "\" alt=\"\" class=\"profile-img img-responsive\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2 style=\"color: black;\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 9
        $context["url"] = (("/event/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id")) . "/show");
        // line 10
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        $context["comment"] = ((((((("[Calendario " . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sport")) . "]: ") . twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "startTime"), "d.m.y")) . " - ") . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name")) . " - ") . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "city"));
        // line 11
        echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 12
        $this->env->loadTemplate(":helper:shareButton.html.twig")->display(array_merge($context, array("url" => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "comment" => (isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")))));
        // line 13
        echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"job-position\" style=\"color: black;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "startTime"), "d.m.y"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 19
        if ((($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "puntuation") != 0) && ((isset($context["tipe"]) ? $context["tipe"] : $this->getContext($context, "tipe")) == "show"))) {
            // line 20
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"main-box clearfix project-box green-box\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"main-box-body clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"project-box-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"chart\" data-percent=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "puntuation"), "html", null, true);
            echo "\" data-bar-color=\"#2ecc71\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"percent\"></span>%<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lbl\">Calificacion</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 34
        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"profile-box-content clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-right fa-lg\"></i> ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sport"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
";
        // line 42
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories")) >= 1)) {
            // line 43
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-right fa-lg\"></i> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 46
            if (((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories")) >= 1) && ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sport"), "id") == 9))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories"), 0, array(), "array"), "name"), "html", null, true);
                echo ":  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories"), 0, array(), "array"), "distanceFirstRun"), "html", null, true);
                echo "k";
            }
            echo "  ";
            if (((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories")) >= 2) && ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sport"), "id") == 9))) {
                echo "  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories"), 1, array(), "array"), "name"), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories"), 1, array(), "array"), "distanceFirstRun"), "html", null, true);
                echo "k";
            }
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 48
            if (((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories")) >= 1) && ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sport"), "id") == 4))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories"), 0, array(), "array"), "name"), "html", null, true);
                echo ": run: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories"), 0, array(), "array"), "distanceFirstRun"), "html", null, true);
                echo "k bike: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories"), 0, array(), "array"), "distanceBike"), "html", null, true);
                echo "k run: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories"), 0, array(), "array"), "distanceLastRun"), "html", null, true);
                echo "k";
            }
            // line 49
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 50
            if (((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories")) >= 1) && ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sport"), "id") == 3))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories"), 0, array(), "array"), "name"), "html", null, true);
                echo ": swim: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories"), 0, array(), "array"), "distanceSwim"), "html", null, true);
                echo "m bike: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories"), 0, array(), "array"), "distanceBike"), "html", null, true);
                echo "k run: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories"), 0, array(), "array"), "distanceFirstRun"), "html", null, true);
                echo "k";
            }
            // line 51
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 52
            if (((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories")) >= 1) && ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sport"), "id") == 2))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories"), 0, array(), "array"), "name"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories"), 0, array(), "array"), "distanceBike"), "html", null, true);
                echo "k";
            }
            echo "  ";
            if (((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories")) >= 2) && ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sport"), "id") == 2))) {
                echo "  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories"), 1, array(), "array"), "name"), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories"), 1, array(), "array"), "distanceBike"), "html", null, true);
                echo "k";
            }
            // line 53
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 54
            if (((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories")) >= 1) && ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sport"), "id") == 1))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories"), 0, array(), "array"), "name"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories"), 0, array(), "array"), "distanceSwim"), "html", null, true);
                echo "m";
            }
            echo "  ";
            if (((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories")) >= 2) && ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sport"), "id") == 1))) {
                echo "  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories"), 1, array(), "array"), "name"), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories"), 1, array(), "array"), "distanceSwim"), "html", null, true);
                echo "m";
            }
            // line 55
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 58
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories")) >= 2) && (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sport"), "id") == 3) || ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sport"), "id") == 4)))) {
            // line 59
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-right fa-lg\"></i> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 62
            if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sport"), "id") == 4)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories"), 1, array(), "array"), "name"), "html", null, true);
                echo ": run: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories"), 1, array(), "array"), "distanceFirstRun"), "html", null, true);
                echo "k bike: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories"), 1, array(), "array"), "distanceBike"), "html", null, true);
                echo "k run: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories"), 1, array(), "array"), "distanceLastRun"), "html", null, true);
                echo "k";
            }
            // line 63
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 64
            if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sport"), "id") == 3)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories"), 1, array(), "array"), "name"), "html", null, true);
                echo ": swim: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories"), 1, array(), "array"), "distanceSwim"), "html", null, true);
                echo "m bike: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories"), 1, array(), "array"), "distanceBike"), "html", null, true);
                echo "k run: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories"), 1, array(), "array"), "distanceFirstRun"), "html", null, true);
                echo "k";
            }
            // line 65
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 69
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar fa-lg\"></i> ";
        // line 71
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "startTime"), "d.m.y"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "startHs"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker fa-lg\"></i> ";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "city"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "province"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "country"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "linkPage"), "html", null, true);
        echo "\" class=\"clearfix\" translate=\"yes\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-globe fa-lg\"></i>";
        // line 83
        echo $this->env->getExtension('translator')->getTranslator()->trans("Web Organizador", array(), "messages");
        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 91
        if (((isset($context["tipe"]) ? $context["tipe"] : $this->getContext($context, "tipe")) == "run")) {
            // line 92
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-lg\" onclick=\"generateIdOnline(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo ")\"  >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-reddit\"></span> ";
            // line 93
            echo $this->env->getExtension('translator')->getTranslator()->trans("Iniciar Carrera", array(), "messages");
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 96
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-lg\" onclick=\"moreData('#modificacion";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("enrolled_new", array("idEvent" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "')\"  >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
";
            // line 99
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-reddit\"></span>";
            // line 100
            if ((twig_date_converter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "startTime")) > twig_date_converter($this->env))) {
                echo " ";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Participar", array(), "messages");
                echo " ";
            } else {
                echo " Participe ";
            }
            // line 101
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 103
            if (((isset($context["tipe"]) ? $context["tipe"] : $this->getContext($context, "tipe")) != "show")) {
                // line 104
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-lg\" onclick=\"window.location.href='";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "'\"  >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-reddit\"></span> ";
                // line 105
                echo $this->env->getExtension('translator')->getTranslator()->trans("Detalle", array(), "messages");
                // line 106
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 108
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user") != null) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "tipeUser") == "01"))) {
                // line 109
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-lg\" onclick=\"window.location.href='";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "'\"  >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-reddit\"></span> ";
                // line 110
                echo $this->env->getExtension('translator')->getTranslator()->trans("Editar", array(), "messages");
                // line 111
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-lg\" onclick=\"window.location.href='";
                // line 112
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_result_admin", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "'\"  >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-reddit\"></span> ";
                // line 113
                echo $this->env->getExtension('translator')->getTranslator()->trans("Result", array(), "messages");
                // line 114
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 116
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 118
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
";
    }

    public function getTemplateName()
    {
        return "EventBundle:Event:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 118,  339 => 116,  335 => 114,  333 => 113,  329 => 112,  326 => 111,  324 => 110,  319 => 109,  316 => 108,  312 => 106,  310 => 105,  305 => 104,  303 => 103,  299 => 101,  291 => 100,  288 => 99,  280 => 96,  274 => 93,  269 => 92,  267 => 91,  256 => 83,  252 => 82,  240 => 77,  229 => 71,  225 => 69,  219 => 65,  208 => 64,  205 => 63,  194 => 62,  189 => 59,  186 => 58,  181 => 55,  166 => 54,  163 => 53,  148 => 52,  145 => 51,  134 => 50,  131 => 49,  120 => 48,  102 => 46,  97 => 43,  88 => 38,  69 => 24,  63 => 20,  61 => 19,  55 => 16,  50 => 13,  48 => 12,  45 => 11,  42 => 10,  40 => 9,  35 => 7,  31 => 6,  27 => 5,  114 => 24,  106 => 23,  103 => 22,  95 => 42,  92 => 19,  84 => 17,  82 => 34,  76 => 12,  70 => 11,  64 => 9,  62 => 8,  59 => 7,  43 => 5,  24 => 4,  19 => 1,);
    }
}
