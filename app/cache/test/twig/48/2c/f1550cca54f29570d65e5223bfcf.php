<?php

/* UserBundle:UserAdmin:dashboard.html.twig */
class __TwigTemplate_482cf1550cca54f29570d65e5223bfcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout_xtending_dashboard.html.twig");

        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'lateral_box_up_label' => array($this, 'block_lateral_box_up_label'),
            'lateral_box_up' => array($this, 'block_lateral_box_up'),
            'lateral_box_down_label' => array($this, 'block_lateral_box_down_label'),
            'lateral_box_down' => array($this, 'block_lateral_box_down'),
            'script_ajax_up' => array($this, 'block_script_ajax_up'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout_xtending_dashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_container($context, array $blocks = array())
    {
        // line 6
        echo "<div id=\"content-wrapper\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t<div id=\"content-header\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><span>Dashboard</span></li>
\t\t\t\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t\t\t\t\t<button  class=\"btn btn-success\" onclick=\"enviarEmail()\">";
        // line 16
        echo $this->env->getExtension('translator')->getTranslator()->trans("enviaremail", array(), "messages");
        echo "</button>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"email\"></div>
\t\t\t\t\t\t\t\t\t\t\t<h1>Dashboard</h1>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"pull-right hidden-xs\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"xs-graph pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"graph-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<b><i class=\"fa fa-shopping-cart\"></i> 838</b> Orders
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"graph-content spark-orders\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"xs-graph pull-left mrg-l-lg mrg-r-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"graph-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<b>&dollar;12.338</b> Revenues
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"graph-content spark-revenues\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
                        \t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t<div class=\"main-box infographic-box colored emerald-bg\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"headline\">";
        // line 43
        echo $this->env->getExtension('translator')->getTranslator()->trans("Usuarios", array(), "messages");
        echo " </span>
\t\t\t\t\t\t\t\t\t\t<span class=\"value\"><div id=\"cant_users\"></div></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t<div class=\"main-box infographic-box colored green-bg\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-money\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"headline\">";
        // line 51
        echo $this->env->getExtension('translator')->getTranslator()->trans("Eventos", array(), "messages");
        echo " </span>
\t\t\t\t\t\t\t\t\t\t<span class=\"value\"><div id=\"cant_events\"></div></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t<div class=\"main-box infographic-box colored red-bg\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"headline\">";
        // line 59
        echo $this->env->getExtension('translator')->getTranslator()->trans("Comentarios", array(), "messages");
        echo " </span>
\t\t\t\t\t\t\t\t\t\t<span class=\"value\"><div id=\"cant_comments\"></div></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t<div class=\"main-box infographic-box colored purple-bg\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-globe\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"headline\">";
        // line 67
        echo $this->env->getExtension('translator')->getTranslator()->trans("Visitas", array(), "messages");
        echo " </span>
\t\t\t\t\t\t\t\t\t\t<span class=\"value\"><div id=\"cant_visit\"></div></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
                                <div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t<div class=\"main-box clearfix\">
\t\t\t\t\t\t\t\t\t\t<header class=\"main-box-header clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"pull-left\">Todos los usuarios</h2>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"main-box-body clearfix\">
                                                                                    <div id=\"users\"></div>
                                                                                </div>
                                                                            </div>         
                                                                        </div>                
                                                                    </div>                    
\t\t\t
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"main-box\">
\t\t\t\t\t\t\t\t\t\t<header class=\"main-box-header clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"pull-left\">Sales &amp; Earnings</h2>
\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"main-box-body clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"graph-bar\" style=\"height: 240px; padding: 0px; position: relative;\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"graph-stats\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"title pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEarnings
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"value pull-right\" title=\"10% down\" data-toggle=\"tooltip\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&dollar;94.382 <i class=\"fa fa-level-down red\"></i> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"width: 69%;\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"69\" role=\"progressbar\" class=\"progress-bar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">69% Complete</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"title pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tOrders
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"value pull-right\" title=\"24% up\" data-toggle=\"tooltip\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t3.930 <i class=\"fa fa-level-up green\"></i> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"width: 42%;\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"42\" role=\"progressbar\" class=\"progress-bar progress-bar-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">42% Complete</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"title pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNew Clients
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"value pull-right\" title=\"8% up\" data-toggle=\"tooltip\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t894 <i class=\"fa fa-level-up green\"></i> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"width: 78%;\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"78\" role=\"progressbar\" class=\"progress-bar progress-bar-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">78% Complete</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"title pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tVisitors
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"value pull-right\" title=\"17% down\" data-toggle=\"tooltip\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t824.418 <i class=\"fa fa-level-down red\"></i> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"width: 94%;\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"94\" role=\"progressbar\" class=\"progress-bar progress-bar-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">94% Complete</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t<div class=\"main-box clearfix\">
\t\t\t\t\t\t\t\t\t\t<header class=\"main-box-header clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"pull-left\">Last orders</h2>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"filter-block pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search search-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye fa-lg\"></i> View all orders
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"main-box-body clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th><a href=\"#\"><span>Order ID</span></a></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th><a href=\"#\" class=\"desc\"><span>Date</span></a></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th><a href=\"#\" class=\"asc\"><span>Customer</span></a></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\"><span>Status</span></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-right\"><span>Price</span></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>&nbsp;</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">#8002</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2013/08/08
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Robert De Niro</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success\">Completed</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&dollar; 825.50
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" style=\"width: 15%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"table-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa-stack\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-square fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search-plus fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">#5832</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2013/08/08
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">John Wayne</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-warning\">On hold</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&dollar; 923.93
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" style=\"width: 15%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"table-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa-stack\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-square fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search-plus fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">#2547</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2013/08/08
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Anthony Hopkins</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-info\">Pending</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&dollar; 1.625.50
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" style=\"width: 15%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"table-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa-stack\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-square fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search-plus fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">#9274</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2013/08/08
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Charles Chaplin</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-danger\">Cancelled</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&dollar; 35.34
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" style=\"width: 15%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"table-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa-stack\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-square fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search-plus fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">#8463</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2013/08/08
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Gary Cooper</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success\">Completed</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&dollar; 34.199.99
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" style=\"width: 15%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"table-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa-stack\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-square fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search-plus fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t<div class=\"main-box feed\">
\t\t\t\t\t\t\t\t\t\t<header class=\"main-box-header clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"pull-left\">Project feed</h2>
\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"main-box-body clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"img/samples/robert-300.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Robert Downey Jr.</a> took photo with Instagram.
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tToday 5:22 pm
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-ago\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i> 5 min.
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"img/samples/lima-300.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Adriana Lima</a> checked in at Las Vegas Oscars
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tYesterday 11:38 am
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"photos clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"img/samples/robert-300.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"img/samples/emma-300.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"img/samples/scarlett-300.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-ago\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i> 9 hours.
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"img/samples/emma-300.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Emma Watson</a> commented on Scarlett Johansson's video.
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tToday 11:59 pm
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-ago\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i> 28 min.
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"img/samples/ryan-300.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Ryan Gosling</a> likes Ryan Gosling's link on his own Timeline.
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tYesterday 9:43 pm
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"photos clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"img/samples/scarlett-300.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"img/samples/robert-300.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"img/samples/emma-300.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-ago\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i> 5 hours.
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"img/samples/kunis-300.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Mila Kunis</a> invited you to his birthday party at her mansion.
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tYesterday 7:50 am
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-ago\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i> 9 hours.
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"img/samples/emma-300.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Emma Watson</a> commented on Scarlett Johansson's video.
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tToday 11:59 pm
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-ago\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i> 28 min.
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"img/samples/lima-300.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Adriana Lima</a> checked in at Las Vegas Oscars
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tYesterday 11:38 am
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"photos clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"img/samples/robert-300.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"img/samples/emma-300.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"img/samples/scarlett-300.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-ago\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i> 9 hours.
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t<div class=\"main-box clearfix\">
\t\t\t\t\t\t\t\t\t\t<header class=\"main-box-header clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<h2>Todo</h2>
\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"main-box-body clearfix\">
\t
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"widget-todo\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-nice\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"todo-1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"todo-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNew products introduction <span class=\"label label-danger\">High Priority</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-nice\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"todo-2\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"todo-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tChecking the stock <span class=\"label label-success\">Low Priority</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"table-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"table-link danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-nice\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"todo-3\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"todo-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tBuying coffee <span class=\"label label-warning\">Medium Priority</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"table-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"table-link danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-nice\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"todo-4\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"todo-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNew marketing campaign <span class=\"label label-success\">Low Priority</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-nice\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"todo-5\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"todo-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCalling Mom <span class=\"label label-warning\">Medium Priority</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"table-link badge\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cog\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-nice\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"todo-6\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"todo-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tRyan's birthday <span class=\"label label-danger\">High Priority</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t<div class=\"main-box weather-box\">
\t\t\t\t\t\t\t\t\t\t<header class=\"main-box-header clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"pull-left\">Weather now</h2>
\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"main-box-body clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"current\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix center-block\" style=\"width: 220px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<canvas class=\"icon\" id=\"current-weather\" width=\"100\" height=\"100\"></canvas>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"temp-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"temperature\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-10<span class=\"sign\">°</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker\"></i> New York
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"next\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"day\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMON
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\" title=\"Hot\" data-toggle=\"tooltip\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"wi wi-hot\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"temperature\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t45<span class=\"sign\">°</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"day\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTUE
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\" title=\"Showers\" data-toggle=\"tooltip\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"wi wi-day-showers\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"temperature\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t28<span class=\"sign\">°</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"day\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWED
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\" title=\"Cloudy\" data-toggle=\"tooltip\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"wi wi-cloudy-windy\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"temperature\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t16<span class=\"sign\">°</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"day\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTHU
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\" title=\"Thunderstom\" data-toggle=\"tooltip\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"wi wi-thunderstorm\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"temperature\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t18<span class=\"sign\">°</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"day\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFRI
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\" title=\"Lightning\" data-toggle=\"tooltip\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"wi wi-night-alt-lightning\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"temperature\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t22<span class=\"sign\">°</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-lg-8 col-md-12 col-xs-12\">
\t\t\t\t\t\t\t\t\t<div class=\"main-box\">
\t\t\t\t\t\t\t\t\t\t<header class=\"main-box-header clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"pull-left\">Visitors location</h2>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-refresh\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cog\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"main-box-body clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"map-stats\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-condensed table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th><span>Country</span></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\"><span>Last Visit</span></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\"><span>Status</span></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tUSA
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2013/08/08
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center status green\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-level-up\"></i> 27%
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tRussia
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2013/08/08
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center status red\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-level-down\"></i> 43%
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tChina
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2013/08/08
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center status green\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-level-up\"></i> 18%
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tIndia
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2013/08/08
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center status green\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-level-up\"></i> 63%
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAustralia
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2013/08/08
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center status red\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-level-down\"></i> 82%
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCanada
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2013/08/08
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center status red\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-level-down\"></i> 11%
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tArgentina
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2013/08/08
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center status green\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-level-up\"></i> 74%
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"world-map\" style=\"width: 100%; height: 400px\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<footer id=\"footer-bar\" class=\"row\">
\t\t\t\t\t\t<p id=\"footer-copyright\" class=\"col-xs-12\">
\t\t\t\t\t\t\tPowered by Cube Theme.
\t\t\t\t\t\t</p>
\t\t\t\t\t</footer>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

";
    }

    // line 812
    public function block_lateral_box_up_label($context, array $blocks = array())
    {
    }

    // line 814
    public function block_lateral_box_up($context, array $blocks = array())
    {
        // line 815
        echo "\t\t\t\t\t\t\t\t\t\t\t\t
";
    }

    // line 820
    public function block_lateral_box_down_label($context, array $blocks = array())
    {
    }

    // line 822
    public function block_lateral_box_down($context, array $blocks = array())
    {
        // line 823
        echo "\t
";
    }

    // line 825
    public function block_script_ajax_up($context, array $blocks = array())
    {
        // line 826
        echo "\tfunction enviarEmail(){

\t\t\$('#email').load('";
        // line 828
        echo $this->env->getExtension('routing')->getPath("event_enviar_email");
        echo "');
\t
\t\t\t
\t\t}

\$('#cant_users').load('";
        // line 833
        echo $this->env->getExtension('routing')->getPath("admin_dashboard_cant_user");
        echo "');

\$('#cant_users').load('";
        // line 835
        echo $this->env->getExtension('routing')->getPath("admin_dashboard_cant_user");
        echo "');

\$('#cant_events').load('";
        // line 837
        echo $this->env->getExtension('routing')->getPath("admin_dashboard_cant_events");
        echo "');

\$('#cant_comments').load('";
        // line 839
        echo $this->env->getExtension('routing')->getPath("admin_dashboard_cant_comments");
        echo "');

\$('#cant_visit').load('";
        // line 841
        echo $this->env->getExtension('routing')->getPath("admin_dashboard_cant_visit");
        echo "');

\$('#users').load('";
        // line 843
        echo $this->env->getExtension('routing')->getPath("admin_all_user");
        echo "');


\t\t//CHARTS
\t    function gd(year, day, month) {
\t\t\treturn new Date(year, month - 1, day).getTime();
\t\t}


\t\tif (\$('#graph-bar').length) {
\t\t\tvar data1 = [
\t\t\t    [gd(2015, 1, 1), 838], [gd(2015, 1, 2), 749], [gd(2015, 1, 3), 634], [gd(2015, 1, 4), 1080], [gd(2015, 1, 5), 850], [gd(2015, 1, 6), 465], [gd(2015, 1, 7), 453], [gd(2015, 1, 8), 646], [gd(2015, 1, 9), 738], [gd(2015, 1, 10), 899], [gd(2015, 1, 11), 830], [gd(2015, 1, 12), 789]
\t\t\t];
\t\t\t
\t\t\tvar data2 = [
\t\t\t    [gd(2015, 1, 1), 342], [gd(2015, 1, 2), 721], [gd(2015, 1, 3), 493], [gd(2015, 1, 4), 403], [gd(2015, 1, 5), 657], [gd(2015, 1, 6), 782], [gd(2015, 1, 7), 609], [gd(2015, 1, 8), 543], [gd(2015, 1, 9), 599], [gd(2015, 1, 10), 359], [gd(2015, 1, 11), 783], [gd(2015, 1, 12), 680]
\t\t\t];
\t\t\t
\t\t\tvar series = new Array();

\t\t\tseries.push({
\t\t\t\tdata: data1,
\t\t\t\tbars: {
\t\t\t\t\tshow : true,
\t\t\t\t\tbarWidth: 24 * 60 * 60 * 12000,
\t\t\t\t\tlineWidth: 1,
\t\t\t\t\tfill: 1,
\t\t\t\t\talign: 'center'
\t\t\t\t},
\t\t\t\tlabel: 'Revenues'
\t\t\t});
\t\t\tseries.push({
\t\t\t\tdata: data2,
\t\t\t\tcolor: '#e84e40',
\t\t\t\tlines: {
\t\t\t\t\tshow : true,
\t\t\t\t\tlineWidth: 3,
\t\t\t\t},
\t\t\t\tpoints: { 
\t\t\t\t\tfillColor: \"#e84e40\", 
\t\t\t\t\tfillColor: '#ffffff', 
\t\t\t\t\tpointWidth: 1,
\t\t\t\t\tshow: true 
\t\t\t\t},
\t\t\t\tlabel: 'Orders'
\t\t\t});

\t\t\t\$.plot(\"#graph-bar\", series, {
\t\t\t\tcolors: ['#03a9f4', '#f1c40f', '#2ecc71', '#3498db', '#9b59b6', '#95a5a6'],
\t\t\t\tgrid: {
\t\t\t\t\ttickColor: \"#f2f2f2\",
\t\t\t\t\tborderWidth: 0,
\t\t\t\t\thoverable: true,
\t\t\t\t\tclickable: true
\t\t\t\t},
\t\t\t\tlegend: {
\t\t\t\t\tnoColumns: 1,
\t\t\t\t\tlabelBoxBorderColor: \"#000000\",
\t\t\t\t\tposition: \"ne\"       
\t\t\t\t},
\t\t\t\tshadowSize: 0,
\t\t\t\txaxis: {
\t\t\t\t\tmode: \"time\",
\t\t\t\t\ttickSize: [1, \"month\"],
\t\t\t\t\ttickLength: 0,
\t\t\t\t\t// axisLabel: \"Date\",
\t\t\t\t\taxisLabelUseCanvas: true,
\t\t\t\t\taxisLabelFontSizePixels: 12,
\t\t\t\t\taxisLabelFontFamily: 'Open Sans, sans-serif',
\t\t\t\t\taxisLabelPadding: 10
\t\t\t\t}
\t\t\t});

\t\t\tvar previousPoint = null;
\t\t\t\$(\"#graph-bar\").bind(\"plothover\", function (event, pos, item) {
\t\t\t\tif (item) {
\t\t\t\t\tif (previousPoint != item.dataIndex) {

\t\t\t\t\t\tpreviousPoint = item.dataIndex;

\t\t\t\t\t\t\$(\"#flot-tooltip\").remove();
\t\t\t\t\t\tvar x = item.datapoint[0],
\t\t\t\t\t\ty = item.datapoint[1];

\t\t\t\t\t\tshowTooltip(item.pageX, item.pageY, item.series.label, y );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\telse {
\t\t\t\t\t\$(\"#flot-tooltip\").remove();
\t\t\t\t\tpreviousPoint = [0,0,0];
\t\t\t\t}
\t\t\t});

\t\t\tfunction showTooltip(x, y, label, data) {
\t\t\t\t\$('<div id=\"flot-tooltip\">' + '<b>' + label + ': </b><i>' + data + '</i>' + '</div>').css({
\t\t\t\t\ttop: y + 5,
\t\t\t\t\tleft: x + 20
\t\t\t\t}).appendTo(\"body\").fadeIn(200);
\t\t\t}
\t\t}
\t\t




";
    }

    public function getTemplateName()
    {
        return "UserBundle:UserAdmin:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  926 => 843,  921 => 841,  916 => 839,  911 => 837,  906 => 835,  901 => 833,  893 => 828,  889 => 826,  886 => 825,  881 => 823,  878 => 822,  873 => 820,  868 => 815,  865 => 814,  860 => 812,  111 => 67,  100 => 59,  89 => 51,  78 => 43,  48 => 16,  36 => 6,  33 => 4,);
    }
}
