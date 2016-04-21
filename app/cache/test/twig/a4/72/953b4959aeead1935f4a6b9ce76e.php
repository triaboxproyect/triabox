<?php

/* menu_amateur.html.twig */
class __TwigTemplate_a472953b4959aeead1935f4a6b9ce76e extends Twig_Template
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
        echo "<section id=\"col-left\" class=\"col-left-nano\">
\t\t\t\t\t\t<div id=\"col-left-inner\" class=\"col-left-nano-content\">
\t\t\t\t\t\t\t";
        // line 3
        if ((!(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")))) {
            // line 4
            echo "\t\t\t\t\t\t\t<div id=\"user-left-box\" class=\"clearfix hidden-sm hidden-xs dropdown profile2-dropdown\">
\t\t\t\t\t\t\t\t<img alt=\"\" src=\"";
            // line 5
            $this->env->loadTemplate("user_photo.html.twig")->display(array_merge($context, array("user" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"))));
            echo "\" />
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"user-box\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span class=\"name\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "name"), "html", null, true);
            echo " <br>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "lastname"), "html", null, true);
            echo " 
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))), "html", null, true);
            echo "\"><i class=\"fa fa-user\"></i>Profile</a></li>
";
            // line 18
            echo "\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\"><i class=\"fa fa-power-off\"></i>Logout</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"status\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle\"></i>";
            // line 22
            echo $this->env->getExtension('translator')->getTranslator()->trans("En Linea", array(), "messages");
            echo " 
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t\t\t\t<div class=\"collapse navbar-collapse navbar-ex1-collapse\" id=\"sidebar-nav\">\t
\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-header nav-header-first hidden-sm hidden-xs\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        // line 33
        if ((!(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")))) {
            // line 34
            echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("newsuser");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-comment-o\" ></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Novedades</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-primary label-circle pull-right\"></span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 47
        echo "\t\t\t\t\t\t\t\t\t\t\t\t
";
        // line 49
        echo "\t\t\t\t\t\t\t\t\t\t
";
        // line 51
        echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trophy\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Eventos</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right drop-icon\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("event_list_next");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\tProximos
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 63
        if ((!(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")))) {
            // line 64
            echo "\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 65
            echo $this->env->getExtension('routing')->getPath("event_next");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\tInscripto
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 70
            echo $this->env->getExtension('routing')->getPath("event_past");
            echo "\" >
\t\t\t\t\t\t\t\t\t\t\t\t\tFinalizados
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 75
            echo $this->env->getExtension('routing')->getPath("search_result");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\tBuscar resultados
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 80
            echo $this->env->getExtension('routing')->getPath("event_around_my");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\tEventos cercanos
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 90
        echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
";
        // line 96
        echo "\t\t\t\t\t\t\t\t\t
";
        // line 99
        echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t";
        // line 100
        if ((!(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")))) {
            // line 101
            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("friends");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa  fa-users\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Amigos</span>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 107
        echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<div id=\"nav-col-submenu\"></div>";
    }

    public function getTemplateName()
    {
        return "menu_amateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 107,  162 => 101,  157 => 99,  154 => 96,  150 => 90,  142 => 80,  126 => 70,  118 => 65,  113 => 63,  106 => 59,  96 => 51,  58 => 22,  50 => 18,  37 => 11,  28 => 5,  25 => 4,  90 => 47,  74 => 33,  68 => 22,  61 => 18,  49 => 13,  88 => 31,  70 => 24,  63 => 21,  48 => 14,  45 => 13,  24 => 4,  41 => 16,  34 => 14,  19 => 1,  122 => 60,  109 => 50,  100 => 44,  91 => 32,  82 => 32,  72 => 25,  69 => 24,  67 => 28,  59 => 18,  46 => 15,  38 => 15,  35 => 6,  32 => 5,  29 => 4,  26 => 3,  23 => 3,  20 => 1,  1845 => 460,  1843 => 459,  1841 => 458,  1839 => 457,  1837 => 456,  1835 => 455,  1833 => 454,  1831 => 453,  1824 => 449,  1821 => 448,  1816 => 442,  1810 => 441,  1804 => 439,  1801 => 438,  1798 => 437,  1793 => 434,  1790 => 433,  1785 => 431,  1782 => 430,  1776 => 423,  1773 => 422,  1762 => 413,  1759 => 412,  1752 => 686,  1734 => 671,  1730 => 670,  1720 => 663,  1716 => 662,  1707 => 656,  1703 => 655,  1694 => 649,  1690 => 648,  1681 => 642,  1677 => 641,  1668 => 635,  1664 => 634,  1655 => 628,  1651 => 627,  1642 => 621,  1638 => 620,  1629 => 614,  1625 => 613,  1616 => 607,  1612 => 606,  1603 => 600,  1599 => 599,  1590 => 593,  1586 => 592,  1576 => 585,  1572 => 584,  1563 => 578,  1559 => 577,  1540 => 560,  1538 => 559,  1534 => 557,  1528 => 555,  1526 => 554,  1476 => 507,  1459 => 493,  1454 => 491,  1432 => 472,  1423 => 466,  1416 => 461,  1414 => 448,  1408 => 445,  1405 => 444,  1403 => 437,  1400 => 436,  1397 => 433,  1395 => 430,  1392 => 429,  1390 => 428,  1386 => 426,  1384 => 422,  1381 => 421,  1379 => 412,  1371 => 406,  1367 => 404,  1360 => 399,  1358 => 398,  1337 => 379,  1328 => 374,  1325 => 373,  1315 => 374,  1312 => 373,  1303 => 374,  1300 => 373,  1291 => 374,  1288 => 373,  1279 => 374,  1276 => 373,  1267 => 374,  1264 => 373,  1255 => 374,  1252 => 373,  1243 => 374,  1240 => 373,  1231 => 374,  1228 => 373,  1219 => 374,  1216 => 373,  1207 => 374,  1204 => 373,  1195 => 374,  1192 => 373,  1183 => 374,  1180 => 373,  1171 => 374,  1168 => 373,  1159 => 374,  1156 => 373,  1147 => 374,  1144 => 373,  1135 => 374,  1132 => 373,  1123 => 374,  1120 => 373,  1111 => 374,  1108 => 373,  1099 => 374,  1096 => 373,  1087 => 374,  1084 => 373,  1075 => 374,  1072 => 373,  1063 => 374,  1060 => 373,  1051 => 374,  1048 => 373,  1039 => 374,  1036 => 373,  1027 => 374,  1024 => 373,  1015 => 374,  1012 => 373,  1003 => 374,  1000 => 373,  991 => 374,  988 => 373,  979 => 374,  976 => 373,  967 => 374,  964 => 373,  955 => 374,  952 => 373,  943 => 374,  940 => 373,  931 => 374,  928 => 373,  919 => 374,  916 => 373,  907 => 374,  904 => 373,  895 => 374,  892 => 373,  883 => 374,  880 => 373,  871 => 374,  868 => 373,  859 => 374,  856 => 373,  852 => 325,  848 => 323,  845 => 322,  839 => 299,  836 => 298,  830 => 296,  824 => 285,  821 => 284,  811 => 280,  803 => 302,  801 => 298,  796 => 296,  786 => 288,  784 => 284,  777 => 280,  771 => 276,  768 => 275,  764 => 270,  762 => 269,  759 => 268,  756 => 267,  749 => 257,  746 => 256,  740 => 255,  734 => 252,  728 => 180,  725 => 179,  719 => 175,  704 => 307,  702 => 275,  696 => 271,  694 => 267,  686 => 261,  684 => 256,  680 => 255,  674 => 252,  663 => 243,  656 => 239,  652 => 238,  645 => 234,  641 => 233,  634 => 229,  630 => 228,  624 => 225,  619 => 224,  617 => 223,  611 => 220,  606 => 219,  599 => 215,  595 => 214,  588 => 210,  584 => 209,  578 => 206,  573 => 205,  571 => 204,  548 => 183,  546 => 179,  539 => 175,  535 => 173,  533 => 172,  527 => 168,  524 => 167,  520 => 147,  517 => 146,  514 => 145,  509 => 136,  507 => 135,  504 => 134,  501 => 133,  492 => 57,  485 => 54,  478 => 49,  470 => 54,  463 => 49,  456 => 54,  449 => 49,  442 => 54,  435 => 49,  428 => 54,  421 => 49,  414 => 54,  407 => 49,  400 => 54,  393 => 49,  386 => 54,  379 => 49,  372 => 54,  365 => 49,  358 => 54,  351 => 49,  344 => 54,  337 => 49,  330 => 54,  323 => 49,  316 => 54,  309 => 49,  302 => 54,  295 => 49,  288 => 54,  281 => 49,  274 => 54,  267 => 49,  260 => 54,  253 => 49,  248 => 20,  245 => 19,  240 => 12,  238 => 11,  234 => 9,  231 => 8,  202 => 694,  198 => 690,  196 => 322,  191 => 319,  189 => 167,  184 => 164,  182 => 163,  176 => 159,  167 => 152,  165 => 151,  160 => 100,  158 => 145,  149 => 138,  147 => 133,  129 => 117,  115 => 64,  97 => 34,  94 => 90,  89 => 87,  84 => 84,  80 => 36,  76 => 34,  62 => 63,  60 => 19,  53 => 14,  51 => 8,  42 => 1,  152 => 78,  137 => 65,  134 => 75,  107 => 37,  99 => 35,  93 => 49,  85 => 24,  81 => 23,  77 => 22,  73 => 21,  66 => 66,  64 => 22,  56 => 15,  52 => 14,  43 => 6,  39 => 12,  36 => 3,  30 => 5,);
    }
}
