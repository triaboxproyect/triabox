<?php

/* EventBundle:Event:view_public.html.twig */
class __TwigTemplate_483084d2b98e244ac79e79b9a7466eea extends Twig_Template
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
\t\t\t\t\t\t\t\t\t\t\t<div class=\"profile-box-header green-bg clearfix\" style=\"background-image: url(http://www.triabox.com/";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "photoBackground")), "html", null, true);
        echo ");\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"http://www.triabox.com/";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "photo")), "html", null, true);
        echo "\"alt=\"\" class=\"profile-img img-responsive\" />
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 8
        $context["url"] = (("/event/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id")) . "/show");
        // line 9
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        $context["comment"] = ((((((("[Calendario " . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sport")) . "]: ") . twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "startTime"), "d.m.y")) . " - ") . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name")) . " - ") . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "city"));
        // line 10
        echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 11
        $this->env->loadTemplate(":helper:shareButton.html.twig")->display(array_merge($context, array("url" => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "comment" => (isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")))));
        // line 12
        echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 15
        if ((($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "puntuation") != 0) && ((isset($context["tipe"]) ? $context["tipe"] : $this->getContext($context, "tipe")) == "show"))) {
            // line 16
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"main-box clearfix project-box green-box\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"main-box-body clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"project-box-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"chart\" data-percent=\"";
            // line 20
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
        // line 30
        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"profile-box-content clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-items\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-right fa-lg\"></i> ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-right fa-lg\"></i> ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sport"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 44
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories")) >= 1)) {
            // line 45
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-right fa-lg\"></i> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 48
            if (((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories")) >= 1) && ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sport"), "id") == 9))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories"), 0, array(), "array"), "name"), "html", null, true);
                echo ": ";
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
            // line 50
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
            // line 51
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 52
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
            // line 53
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 54
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
            // line 55
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 56
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
            // line 57
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 60
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories")) >= 2) && (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sport"), "id") == 3) || ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sport"), "id") == 4)))) {
            // line 61
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-right fa-lg\"></i> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 64
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
            // line 65
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 66
            if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sport"), "id") == 3)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories"), 1, array(), "array"), "name"), "html", null, true);
                echo ": swim: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories"), 1, array(), "array"), "distanceSwim"), "html", null, true);
                echo "m bike: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories"), 1, array(), "array"), "distanceBike"), "html", null, true);
                echo "k run: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categories"), 1, array(), "array"), "distanceLastRun"), "html", null, true);
                echo "k";
            }
            // line 67
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 71
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar fa-lg\"></i> ";
        // line 73
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
        // line 79
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
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "linkPage"), "html", null, true);
        echo "\" class=\"clearfix\" translate=\"yes\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-globe fa-lg\"></i> Web Organizador
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 92
        if (((isset($context["tipe"]) ? $context["tipe"] : $this->getContext($context, "tipe")) == "run")) {
            // line 93
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-lg\" onclick=\"generateIdOnline(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo ")\"  >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-reddit\"></span> ";
            // line 94
            echo $this->env->getExtension('translator')->getTranslator()->trans("Iniciar Carrera", array(), "messages");
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 97
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-lg\" onclick=\"moreData('#modificacion";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("enrolled_new", array("idEvent" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "')\"  >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-reddit\"></span>";
            // line 98
            if ((twig_date_converter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "startTime")) > twig_date_converter($this->env))) {
                echo " ";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Participar", array(), "messages");
                echo " ";
            } else {
                echo " Participe ";
            }
            // line 99
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 101
            if (((isset($context["tipe"]) ? $context["tipe"] : $this->getContext($context, "tipe")) != "show")) {
                // line 102
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-lg\" onclick=\"window.location.href='";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "'\"  >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-reddit\"></span> ";
                // line 103
                echo $this->env->getExtension('translator')->getTranslator()->trans("Detalle", array(), "messages");
                // line 104
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 106
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user") != null) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "tipeUser") == "01"))) {
                // line 107
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-lg\" onclick=\"window.location.href='";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "'\"  >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-reddit\"></span> ";
                // line 108
                echo $this->env->getExtension('translator')->getTranslator()->trans("Editar", array(), "messages");
                // line 109
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 111
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 113
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "EventBundle:Event:view_public.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 113,  321 => 111,  317 => 109,  315 => 108,  310 => 107,  307 => 106,  303 => 104,  301 => 103,  296 => 102,  294 => 101,  290 => 99,  282 => 98,  275 => 97,  269 => 94,  264 => 93,  262 => 92,  251 => 84,  239 => 79,  228 => 73,  224 => 71,  218 => 67,  207 => 66,  193 => 64,  180 => 57,  165 => 56,  162 => 55,  147 => 54,  144 => 53,  133 => 52,  130 => 51,  119 => 50,  101 => 48,  87 => 40,  78 => 34,  72 => 30,  59 => 20,  53 => 16,  51 => 15,  46 => 12,  44 => 11,  41 => 10,  38 => 9,  36 => 8,  31 => 6,  27 => 5,  213 => 63,  204 => 65,  202 => 60,  199 => 59,  190 => 57,  188 => 61,  185 => 60,  176 => 53,  173 => 52,  166 => 50,  163 => 49,  160 => 48,  153 => 46,  150 => 45,  148 => 44,  142 => 40,  136 => 39,  134 => 38,  131 => 37,  125 => 36,  123 => 35,  120 => 34,  114 => 33,  111 => 32,  105 => 30,  102 => 29,  96 => 45,  94 => 44,  91 => 25,  84 => 20,  81 => 19,  66 => 17,  60 => 14,  57 => 13,  50 => 9,  47 => 8,  45 => 7,  25 => 5,  19 => 1,);
    }
}
