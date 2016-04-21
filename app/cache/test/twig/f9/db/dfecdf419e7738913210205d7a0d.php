<?php

/* UserBundle:User:list_users.html.twig */
class __TwigTemplate_f9dbdfecdf419e7738913210205d7a0d extends Twig_Template
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
\t\t<table class=\"table user-list table-hover\" style=\"clear: both\">
\t\t\t<tbody>
\t\t\t\t\t
\t\t\t\t";
        // line 5
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
            // line 6
            echo "\t\t\t\t<tr>
\t\t\t\t
\t\t\t\t\t<td style=\"height: 50%;\">
\t\t\t\t\t\t<img src=\"";
            // line 9
            $this->env->loadTemplate("user_photo.html.twig")->display(array_merge($context, array("user" => (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")))));
            echo "\" alt=\"\"/>
\t\t\t\t\t\t<a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"user-link\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastname"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t<span class=\"user-subhead\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t<div id=\"amistad_";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" >
\t\t\t\t\t
\t\t\t\t\t";
            // line 14
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "friends")) {
                // line 15
                echo "\t\t\t\t\t\t\t";
                if (((isset($context["tipe"]) ? $context["tipe"] : $this->getContext($context, "tipe")) != "notificaciones")) {
                    // line 16
                    echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t<button  onclick=\"moreData('#amistad_";
                    // line 17
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
                    echo "','";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("send_request_friend", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                    echo "')\" class=\"btn btn-success\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-plus-square\"></span> Enviar Solicitud
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                    // line 21
                    if (((null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "userConfiguration")) || ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "userConfiguration"), "activeFollowMe") == "1"))) {
                        // line 22
                        echo "\t\t\t\t\t\t\t\t<button  onclick=\"moreData('#amistad_";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
                        echo "','";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_follower", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                        echo "')\" class=\"btn btn-success\">
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-plus-square\"></span> Seguir
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t";
                    }
                    // line 26
                    echo "\t\t\t\t\t\t\t";
                } else {
                    // line 27
                    echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<button  onclick=\"moreData('#amistad_";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
                    echo "','";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_friend", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                    echo "')\" class=\"btn btn-success\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-plus-square\"></span> Agregar
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                }
                // line 33
                echo "\t\t\t\t\t";
            } else {
                // line 34
                echo "\t\t\t\t\t\t\t<button  onclick=\"moreData('#amistad_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_friend", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "')\" class=\"btn btn-success\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-plus-square\"></span> Eliminar
\t\t\t\t\t\t\t</button>
\t\t\t\t\t";
            }
            // line 37
            echo "\t
\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t\t<td style=\"height: 50%;\">
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t
\t\t\t\t</tr>
\t\t\t
\t\t\t\t";
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
        // line 50
        echo "\t\t\t\t
\t\t\t</tbody>
\t\t</table>
\t</div>


";
    }

    public function getTemplateName()
    {
        return "UserBundle:User:list_users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 50,  126 => 37,  116 => 34,  113 => 33,  103 => 28,  100 => 27,  97 => 26,  87 => 22,  85 => 21,  76 => 17,  73 => 16,  70 => 15,  68 => 14,  63 => 12,  59 => 11,  51 => 10,  47 => 9,  42 => 6,  25 => 5,  19 => 1,);
    }
}
