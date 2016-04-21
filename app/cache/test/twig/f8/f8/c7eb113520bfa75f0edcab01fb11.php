<?php

/* UserBundle:UserResult:userResultEvent.html.twig */
class __TwigTemplate_f8f8c7eb113520bfa75f0edcab01fb11 extends Twig_Template
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
        if ((!(null === (isset($context["enrolled"]) ? $context["enrolled"] : $this->getContext($context, "enrolled"))))) {
            // line 2
            echo "<div id=\"modificacion";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enrolled"]) ? $context["enrolled"] : $this->getContext($context, "enrolled")), "id"), "html", null, true);
            echo "\"></div>
";
        }
        // line 4
        echo "<div class=\"main-box clearfix profile-box-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"main-box-body clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"profile-box-header green-bg clearfix\" style=\"background-image: url(";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "photoBackground")), "html", null, true);
        echo ");\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "photo")), "html", null, true);
        echo "\" alt=\"\" class=\"profile-img img-responsive\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 style=\"color: black;\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "name"), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 12
        if ((!array_key_exists("url", $context))) {
            // line 13
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 14
            $context["url"] = $this->env->getExtension('routing')->getPath("show_enrolled", array("idErolled" => $this->getAttribute((isset($context["enrolled"]) ? $context["enrolled"] : $this->getContext($context, "enrolled")), "id"), "userID" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id")));
            // line 15
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 17
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if ((!(null === (isset($context["classification"]) ? $context["classification"] : $this->getContext($context, "classification"))))) {
            echo " ";
            $context["time"] = $this->getAttribute((isset($context["classification"]) ? $context["classification"] : $this->getContext($context, "classification")), "netoTime");
            echo "  ";
        } else {
            echo "\t ";
            $context["time"] = $this->getAttribute((isset($context["enrolled"]) ? $context["enrolled"] : $this->getContext($context, "enrolled")), "time");
            echo " ";
        }
        // line 18
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 20
        $context["comment"] = ((((((("[Resultado] " . $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "name")) . " : - Tiempo de ") . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name")) . " ") . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname")) . " - ") . (isset($context["time"]) ? $context["time"] : $this->getContext($context, "time")));
        // line 21
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 22
        $this->env->loadTemplate(":helper:shareButton.html.twig")->display(array_merge($context, array("url" => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "comment" => (isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")))));
        // line 23
        echo "\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"job-position\" style=\"color: black;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "startTime"), "d.m.y"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"profile-box-content clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-right fa-lg\"></i> ";
        // line 34
        echo $this->env->getExtension('translator')->getTranslator()->trans("Deporte", array(), "messages");
        echo " : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "sport"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 38
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "categories")) >= 1)) {
            // line 39
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-right fa-lg\"></i> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 42
            if (((twig_length_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "categories")) >= 1) && ($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "sport"), "id") == 9))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "categories"), 0, array(), "array"), "name"), "html", null, true);
                echo ":  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "categories"), 0, array(), "array"), "distanceFirstRun"), "html", null, true);
                echo "k";
            }
            echo "  ";
            if (((twig_length_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "categories")) >= 2) && ($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "sport"), "id") == 9))) {
                echo "  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "categories"), 1, array(), "array"), "name"), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "categories"), 1, array(), "array"), "distanceFirstRun"), "html", null, true);
                echo "k";
            }
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 44
            if (((twig_length_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "categories")) >= 1) && ($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "sport"), "id") == 4))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "categories"), 0, array(), "array"), "name"), "html", null, true);
                echo ": run: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "categories"), 0, array(), "array"), "distanceFirstRun"), "html", null, true);
                echo "k bike: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "categories"), 0, array(), "array"), "distanceBike"), "html", null, true);
                echo "k run: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "categories"), 0, array(), "array"), "distanceLastRun"), "html", null, true);
                echo "k";
            }
            // line 45
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 46
            if (((twig_length_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "categories")) >= 1) && ($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "sport"), "id") == 3))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "categories"), 0, array(), "array"), "name"), "html", null, true);
                echo ": swim: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "categories"), 0, array(), "array"), "distanceSwim"), "html", null, true);
                echo "m bike: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "categories"), 0, array(), "array"), "distanceBike"), "html", null, true);
                echo "k run: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "categories"), 0, array(), "array"), "distanceFirstRun"), "html", null, true);
                echo "k";
            }
            // line 47
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 48
            if (((twig_length_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "categories")) >= 1) && ($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "sport"), "id") == 2))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "categories"), 0, array(), "array"), "name"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "categories"), 0, array(), "array"), "distanceBike"), "html", null, true);
                echo "k";
            }
            echo "  ";
            if (((twig_length_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "categories")) >= 2) && ($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "sport"), "id") == 2))) {
                echo "  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "categories"), 1, array(), "array"), "name"), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "categories"), 1, array(), "array"), "distanceBike"), "html", null, true);
                echo "k";
            }
            // line 49
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 50
            if (((twig_length_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "categories")) >= 1) && ($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "sport"), "id") == 1))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "categories"), 0, array(), "array"), "name"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "categories"), 0, array(), "array"), "distanceSwim"), "html", null, true);
                echo "m";
            }
            echo "  ";
            if (((twig_length_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "categories")) >= 2) && ($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "sport"), "id") == 1))) {
                echo "  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "categories"), 1, array(), "array"), "name"), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "categories"), 1, array(), "array"), "distanceSwim"), "html", null, true);
                echo "m";
            }
            echo "\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 56
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if ((!(null === (isset($context["classification"]) ? $context["classification"] : $this->getContext($context, "classification"))))) {
            // line 57
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-child fa-lg\"></i> BIB : ";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classification"]) ? $context["classification"] : $this->getContext($context, "classification")), "bib"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trophy fa-lg\"></i> Posicion : ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classification"]) ? $context["classification"] : $this->getContext($context, "classification")), "overallRank"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-tachometer fa-lg\"></i> Tiempo Neto : ";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classification"]) ? $context["classification"] : $this->getContext($context, "classification")), "netoTime"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-tachometer fa-lg\"></i> Tiempo Oficial : ";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classification"]) ? $context["classification"] : $this->getContext($context, "classification")), "officialTime"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 84
            echo "\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker fa-lg\"></i> Tiempo No Oficial : ";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enrolled"]) ? $context["enrolled"] : $this->getContext($context, "enrolled")), "time"), "html", null, true);
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 88
            if (((!(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"))) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id") == $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id")))) {
                // line 89
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"md-trigger btn btn-primary mrg-b-lg pull-right\" onclick=\"moreData('#modificacion";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enrolled"]) ? $context["enrolled"] : $this->getContext($context, "enrolled")), "id"), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("enrolled_edit", array("id" => $this->getAttribute((isset($context["enrolled"]) ? $context["enrolled"] : $this->getContext($context, "enrolled")), "id"))), "html", null, true);
                echo "')\" data-modal=\"modal\">";
                if (($this->getAttribute((isset($context["enrolled"]) ? $context["enrolled"] : $this->getContext($context, "enrolled")), "time") == "")) {
                    echo "agregar resultado";
                } else {
                    echo "modificar resultado";
                }
                echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 91
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 95
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker fa-lg\"></i> ";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "city"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "province"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "country"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "UserBundle:UserResult:userResultEvent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 99,  273 => 95,  267 => 91,  253 => 89,  251 => 88,  247 => 87,  242 => 84,  234 => 80,  225 => 74,  216 => 68,  204 => 59,  200 => 57,  197 => 56,  175 => 50,  172 => 49,  157 => 48,  154 => 47,  143 => 46,  140 => 45,  129 => 44,  111 => 42,  106 => 39,  104 => 38,  95 => 34,  84 => 26,  79 => 23,  77 => 22,  74 => 21,  72 => 20,  68 => 18,  57 => 17,  53 => 15,  51 => 14,  48 => 13,  46 => 12,  35 => 7,  31 => 6,  27 => 4,  21 => 2,  19 => 1,  91 => 25,  88 => 24,  80 => 14,  65 => 13,  63 => 12,  60 => 11,  43 => 10,  39 => 8,  36 => 7,  30 => 4,);
    }
}
