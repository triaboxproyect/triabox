<?php

/* UserBundle:UserAdmin:listUsers.html.twig */
class __TwigTemplate_f8ccd9013438271eb96912b0fa56d868 extends Twig_Template
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
        echo "<div class=\"table-responsive\">
<table class=\"table user-list table-hover\">
        <thead>
                <tr>
                        <th><span>User</span></th>
                        <th><span>Created</span></th>
                        <th><span>Email</span></th>
                        <th></th>
                </tr>
        </thead>
        <tbody>
                ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 13
            echo "                <tr>
                        <td>
                                <img src=\"";
            // line 15
            $this->env->loadTemplate("user_photo.html.twig")->display(array_merge($context, array("user" => (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")))));
            echo "\" alt=\"\"/>
                                <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"user-link\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastname"), "html", null, true);
            echo "</a>
                                <span class=\"user-subhead\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username"), "html", null, true);
            echo "</span>
                        </td>
                        <td>
                                ";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createTime"), "d/m/y"), "html", null, true);
            echo "
                        </td>
                        <td>
                                <a href=\"\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
            echo "</a>
                        </td>
                        <td style=\"width: 20%;\">
                                <a href=\"\" class=\"table-link\">
                                        <span class=\"fa-stack\">
                                                <i class=\"fa fa-square fa-stack-2x\"></i>
                                                <i class=\"fa fa-search-plus fa-stack-1x fa-inverse\"></i>
                                        </span>
                                </a>
                                <a href=\"\" class=\"table-link\">
                                        <span class=\"fa-stack\">
                                                <i class=\"fa fa-square fa-stack-2x\"></i>
                                                <i class=\"fa fa-pencil fa-stack-1x fa-inverse\"></i>
                                        </span>
                                </a>
                                <a href=\"\" class=\"table-link danger\">
                                        <span class=\"fa-stack\">
                                                <i class=\"fa fa-square fa-stack-2x\"></i>
                                                <i class=\"fa fa-trash-o fa-stack-1x fa-inverse\"></i>
                                        </span>
                                </a>
                        </td>
                </tr>
                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
</table>
</div>
";
    }

    public function getTemplateName()
    {
        return "UserBundle:UserAdmin:listUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 47,  77 => 23,  71 => 20,  65 => 17,  57 => 16,  53 => 15,  49 => 13,  32 => 12,  19 => 1,);
    }
}
