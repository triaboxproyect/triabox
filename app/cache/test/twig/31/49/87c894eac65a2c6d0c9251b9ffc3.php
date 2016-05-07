<?php

/* profile_amateur.html.twig */
class __TwigTemplate_314987c894eac65a2c6d0c9251b9ffc3 extends Twig_Template
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
        echo "<ul class=\"nav navbar-nav pull-right\">
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 3
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user") != null)) {
            // line 4
            echo "\t\t\t\t\t\t<li class=\"mobile-search\" id=\"search\" >
\t\t\t\t\t\t\t<a class=\"btn\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"drowdown-search\">
\t\t\t\t\t\t\t\t<form role=\"search\" action=\"";
            // line 10
            echo $this->env->getExtension('routing')->getPath("users");
            echo "\" method=\"get\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\" >
\t\t\t\t\t\t\t\t\t\t<input  type=\"text\" class=\"form-control\" placeholder=\"";
            // line 12
            echo $this->env->getExtension('translator')->getTranslator()->trans("Buscar...", array(), "messages");
            echo "\" name=\"search\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search nav-search-icon\" ></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t<li class=\"dropdown profile-dropdown\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<img src=\"";
            // line 24
            $this->env->loadTemplate("user_photo.html.twig")->display(array_merge($context, array("user" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"))));
            echo "\" alt=\"\"/>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "name"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "lastname"), "html", null, true);
            echo "</span> <b class=\"caret\"></b>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))), "html", null, true);
            echo "\"><i class=\"fa fa-user\"></i>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Perfil", array(), "messages");
            echo "</a></li>
";
            // line 32
            echo "\t\t\t\t\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\"><i class=\"fa fa-power-off\"></i>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Logout", array(), "messages");
            echo "</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"hidden-xxs\">
\t\t\t\t\t\t\t<a class=\"btn\" href=\"";
            // line 38
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-power-off\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        } else {
            // line 43
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<li class=\"mobile-search\">
\t\t\t\t\t\t\t<a class=\"btn\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"drowdown-search\">
\t\t\t\t\t\t\t\t<form role=\"search\" action=\"";
            // line 51
            echo $this->env->getExtension('routing')->getPath("event_search");
            echo "\" method=\"get\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\" >
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"";
            // line 53
            echo $this->env->getExtension('translator')->getTranslator()->trans("Buscar...", array(), "messages");
            echo "\" name=\"search\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search nav-search-icon\" ></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t";
        }
        // line 63
        echo "\t\t\t\t\t</ul>";
    }

    public function getTemplateName()
    {
        return "profile_amateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
<<<<<<< OURS
        return array (  120 => 63,  102 => 51,  92 => 43,  58 => 26,  33 => 10,  25 => 4,  90 => 32,  74 => 25,  68 => 22,  61 => 18,  49 => 13,  88 => 31,  70 => 24,  63 => 21,  48 => 14,  45 => 13,  24 => 4,  41 => 16,  34 => 14,  122 => 60,  109 => 50,  100 => 44,  91 => 32,  82 => 32,  72 => 32,  69 => 24,  67 => 28,  59 => 18,  46 => 18,  38 => 12,  35 => 6,  32 => 5,  29 => 4,  26 => 3,  23 => 3,  20 => 1,  19 => 1,  1845 => 460,  1843 => 459,  1841 => 458,  1839 => 457,  1837 => 456,  1835 => 455,  1833 => 454,  1831 => 453,  1824 => 449,  1821 => 448,  1816 => 442,  1810 => 441,  1804 => 439,  1801 => 438,  1798 => 437,  1793 => 434,  1790 => 433,  1785 => 431,  1782 => 430,  1776 => 423,  1773 => 422,  1762 => 413,  1759 => 412,  1752 => 686,  1734 => 671,  1730 => 670,  1720 => 663,  1716 => 662,  1707 => 656,  1703 => 655,  1694 => 649,  1690 => 648,  1681 => 642,  1677 => 641,  1668 => 635,  1664 => 634,  1655 => 628,  1651 => 627,  1642 => 621,  1638 => 620,  1629 => 614,  1625 => 613,  1616 => 607,  1612 => 606,  1603 => 600,  1599 => 599,  1590 => 593,  1586 => 592,  1576 => 585,  1572 => 584,  1563 => 578,  1559 => 577,  1540 => 560,  1538 => 559,  1534 => 557,  1528 => 555,  1526 => 554,  1476 => 507,  1459 => 493,  1454 => 491,  1432 => 472,  1423 => 466,  1416 => 461,  1414 => 448,  1408 => 445,  1405 => 444,  1403 => 437,  1400 => 436,  1397 => 433,  1395 => 430,  1392 => 429,  1390 => 428,  1386 => 426,  1384 => 422,  1381 => 421,  1379 => 412,  1371 => 406,  1367 => 404,  1360 => 399,  1358 => 398,  1337 => 379,  1328 => 374,  1325 => 373,  1315 => 374,  1312 => 373,  1303 => 374,  1300 => 373,  1291 => 374,  1288 => 373,  1279 => 374,  1276 => 373,  1267 => 374,  1264 => 373,  1255 => 374,  1252 => 373,  1243 => 374,  1240 => 373,  1231 => 374,  1228 => 373,  1219 => 374,  1216 => 373,  1207 => 374,  1204 => 373,  1195 => 374,  1192 => 373,  1183 => 374,  1180 => 373,  1171 => 374,  1168 => 373,  1159 => 374,  1156 => 373,  1147 => 374,  1144 => 373,  1135 => 374,  1132 => 373,  1123 => 374,  1120 => 373,  1111 => 374,  1108 => 373,  1099 => 374,  1096 => 373,  1087 => 374,  1084 => 373,  1075 => 374,  1072 => 373,  1063 => 374,  1060 => 373,  1051 => 374,  1048 => 373,  1039 => 374,  1036 => 373,  1027 => 374,  1024 => 373,  1015 => 374,  1012 => 373,  1003 => 374,  1000 => 373,  991 => 374,  988 => 373,  979 => 374,  976 => 373,  967 => 374,  964 => 373,  955 => 374,  952 => 373,  943 => 374,  940 => 373,  931 => 374,  928 => 373,  919 => 374,  916 => 373,  907 => 374,  904 => 373,  895 => 374,  892 => 373,  883 => 374,  880 => 373,  871 => 374,  868 => 373,  859 => 374,  856 => 373,  852 => 325,  848 => 323,  845 => 322,  839 => 299,  836 => 298,  830 => 296,  824 => 285,  821 => 284,  811 => 280,  803 => 302,  801 => 298,  796 => 296,  786 => 288,  784 => 284,  777 => 280,  771 => 276,  768 => 275,  764 => 270,  762 => 269,  759 => 268,  756 => 267,  749 => 257,  746 => 256,  740 => 255,  734 => 252,  728 => 180,  725 => 179,  719 => 175,  704 => 307,  702 => 275,  696 => 271,  694 => 267,  686 => 261,  684 => 256,  680 => 255,  674 => 252,  663 => 243,  656 => 239,  652 => 238,  645 => 234,  641 => 233,  634 => 229,  630 => 228,  624 => 225,  619 => 224,  617 => 223,  611 => 220,  606 => 219,  599 => 215,  595 => 214,  588 => 210,  584 => 209,  578 => 206,  573 => 205,  571 => 204,  548 => 183,  546 => 179,  539 => 175,  535 => 173,  533 => 172,  527 => 168,  524 => 167,  520 => 147,  517 => 146,  514 => 145,  509 => 136,  507 => 135,  504 => 134,  501 => 133,  492 => 57,  485 => 54,  478 => 49,  470 => 54,  463 => 49,  456 => 54,  449 => 49,  442 => 54,  435 => 49,  428 => 54,  421 => 49,  414 => 54,  407 => 49,  400 => 54,  393 => 49,  386 => 54,  379 => 49,  372 => 54,  365 => 49,  358 => 54,  351 => 49,  344 => 54,  337 => 49,  330 => 54,  323 => 49,  316 => 54,  309 => 49,  302 => 54,  295 => 49,  288 => 54,  281 => 49,  274 => 54,  267 => 49,  260 => 54,  253 => 49,  248 => 20,  245 => 19,  240 => 12,  238 => 11,  234 => 9,  231 => 8,  202 => 694,  198 => 690,  196 => 322,  191 => 319,  189 => 167,  184 => 164,  182 => 163,  176 => 159,  167 => 152,  165 => 151,  160 => 148,  158 => 145,  149 => 138,  147 => 133,  129 => 117,  115 => 111,  97 => 34,  94 => 90,  89 => 87,  84 => 38,  80 => 28,  76 => 27,  62 => 63,  60 => 19,  53 => 24,  51 => 8,  42 => 1,  152 => 78,  137 => 65,  134 => 64,  107 => 53,  99 => 35,  93 => 33,  85 => 24,  81 => 23,  77 => 22,  73 => 21,  66 => 29,  64 => 22,  56 => 15,  52 => 14,  43 => 6,  39 => 12,  36 => 3,  30 => 5,);
=======
        return array (  102 => 51,  92 => 43,  84 => 38,  72 => 32,  66 => 29,  58 => 26,  53 => 24,  38 => 12,  33 => 10,  25 => 4,  27 => 7,  23 => 3,  19 => 1,  845 => 232,  842 => 231,  839 => 230,  833 => 217,  830 => 216,  817 => 204,  814 => 203,  803 => 252,  799 => 250,  792 => 245,  790 => 244,  783 => 240,  777 => 237,  773 => 235,  771 => 230,  759 => 220,  757 => 216,  753 => 214,  751 => 203,  731 => 185,  725 => 180,  403 => 174,  399 => 139,  396 => 138,  393 => 137,  389 => 132,  387 => 131,  383 => 129,  380 => 128,  376 => 109,  367 => 102,  364 => 101,  361 => 100,  357 => 97,  354 => 96,  351 => 95,  345 => 74,  334 => 48,  326 => 44,  322 => 42,  313 => 44,  309 => 42,  301 => 44,  297 => 42,  289 => 44,  285 => 42,  277 => 44,  273 => 42,  265 => 44,  261 => 42,  253 => 44,  249 => 42,  241 => 44,  237 => 42,  229 => 44,  225 => 42,  217 => 44,  213 => 42,  205 => 44,  201 => 42,  193 => 44,  189 => 42,  181 => 44,  177 => 42,  172 => 19,  169 => 18,  164 => 13,  162 => 12,  158 => 10,  155 => 9,  148 => 260,  146 => 137,  140 => 133,  138 => 128,  122 => 114,  120 => 63,  115 => 110,  113 => 100,  109 => 98,  107 => 53,  97 => 87,  95 => 86,  87 => 80,  83 => 75,  81 => 74,  69 => 73,  48 => 54,  46 => 18,  41 => 15,  39 => 9,  35 => 3,  29 => 1,);
>>>>>>> THEIRS
    }
}
