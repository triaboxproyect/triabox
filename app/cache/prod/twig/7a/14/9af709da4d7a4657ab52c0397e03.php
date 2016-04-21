<?php

/* NewsUserBundle:NewsUser:dashboard_public.html.twig */
class __TwigTemplate_7a149af709da4d7a4657ab52c0397e03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout_dashboard_public.html.twig");

        $this->blocks = array(
            'main_box_label' => array($this, 'block_main_box_label'),
            'main_box' => array($this, 'block_main_box'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout_dashboard_public.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_main_box_label($context, array $blocks = array())
    {
        echo "Eventos";
    }

    // line 3
    public function block_main_box($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "NewsUserBundle:NewsUser:dashboard_public.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 3,  29 => 2,);
    }
}
