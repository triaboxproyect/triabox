<?php

/* UserBundle:UserResult:listResultUser.html.twig */
class __TwigTemplate_82faa2975fc9d3c14614723ec856a900 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout_xtending_dashboard.html.twig");

        $this->blocks = array(
            'main_box_label' => array($this, 'block_main_box_label'),
            'main_box' => array($this, 'block_main_box'),
            'script_custom' => array($this, 'block_script_custom'),
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
    public function block_main_box_label($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("Eventos que Participaste", array(), "messages");
    }

    // line 7
    public function block_main_box($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"main-box-body clearfix\">
\t
";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "registrations"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["enrolled"]) {
            // line 11
            echo "\t
\t";
            // line 12
            $this->env->loadTemplate("UserBundle:UserResult:userResultEvent.html.twig")->display(array_merge($context, array("user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "event" => $this->getAttribute((isset($context["enrolled"]) ? $context["enrolled"] : $this->getContext($context, "enrolled")), "event"), "classification" => $this->getAttribute((isset($context["enrolled"]) ? $context["enrolled"] : $this->getContext($context, "enrolled")), "classification"), "enrolled" => (isset($context["enrolled"]) ? $context["enrolled"] : $this->getContext($context, "enrolled")))));
            // line 13
            echo "
\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enrolled'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t\t
\t\t
</div>
\t
";
    }

    // line 24
    public function block_script_custom($context, array $blocks = array())
    {
        // line 25
        echo "
\t

\t";
    }

    public function getTemplateName()
    {
        return "UserBundle:UserResult:listResultUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 25,  88 => 24,  80 => 14,  65 => 13,  63 => 12,  60 => 11,  43 => 10,  39 => 8,  36 => 7,  30 => 4,);
    }
}
