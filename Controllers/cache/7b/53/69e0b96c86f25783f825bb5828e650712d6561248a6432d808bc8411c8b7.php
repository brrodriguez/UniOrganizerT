<?php

/* CalendarioShowall.html.twig */
class __TwigTemplate_7b5369e0b96c86f25783f825bb5828e650712d6561248a6432d808bc8411c8b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Lista Calendarios", array(), "array"), "html", null, true);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t<div class=\"row\" style=\"clear:both;\">
\t\t<div class=\"container\">
\t\t<form method=\"POST\" action=\"\" id=\"frmCalendarios\">
\t\t\t<ul class=\"nav\">
\t\t\t\t";
        // line 9
        if (((isset($context["userTipo"]) ? $context["userTipo"] : null) == 2)) {
            // line 10
            echo "\t\t\t\t<li style=\"margin-right:40px;margin-top:7px;\">
\t\t\t\t\t<a href=\"?accion=vistainsertar\"><img src=\"../img/add.png\" width=\"40px\" height=\"40px\"> ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "newcalendario", array(), "array"), "html", null, true);
            echo "</img></a>
\t\t\t\t</li><br>
\t\t\t\t";
        }
        // line 14
        echo "\t\t\t\t";
        if (((isset($context["userTipo"]) ? $context["userTipo"] : null) == 1)) {
            // line 15
            echo "\t\t\t\t<li style=\"margin-right:40px;margin-top:7px;\">
\t\t\t\t\t<a href=\"?accion=vistafiltrar\"><img src=\"../img/filter2.png\" width=\"40px\" height=\"40px\"> ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "filtrar", array(), "array"), "html", null, true);
            echo "</img></a>
\t\t\t\t</li><br>
\t\t\t\t";
        }
        // line 19
        echo "\t\t\t\t<li style=\"margin-right:40px;\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-white\" onclick=this.form.action=\"../Controllers/CALENDARIO_Controller.php?accion=eliminar\" style=\"font-size:15px;\"><img src=\"../img/eliminar2.png\" width=\"40px\" height=\"40px\">  ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "eliminarSelec", array(), "array"), "html", null, true);
        echo "</img></button>
\t\t\t\t</li><br>
\t\t\t</ul><br>
\t\t\t
\t\t\t<table class=\"table\">
\t\t\t\t<thead class=\"thead-dark\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t\t\t<th scope=\"col\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "nombreCalendario2", array(), "array"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t<th scope=\"col\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "descripcionCalendario2", array(), "array"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t";
        // line 30
        if (((isset($context["userTipo"]) ? $context["userTipo"] : null) == 1)) {
            // line 31
            echo "\t\t\t\t\t\t<th scope=\"col\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "username", array(), "array"), "html", null, true);
            echo "</th>
\t\t\t\t\t\t";
        }
        // line 33
        echo "\t\t\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t
\t\t";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datos"]) ? $context["datos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["valor"]) {
            // line 42
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<th><input type=\"checkbox\" name=\"eliminar[]\" value=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "0", array(), "array"), "html", null, true);
            echo "\"></th>
\t\t\t\t\t\t<th><a href=\"?accion=vistamodificar&amp;id=";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "0", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "1", array(), "array"), "html", null, true);
            echo "</a></th>
\t\t\t\t\t\t<td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "2", array(), "array"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t";
            // line 46
            if (((isset($context["userTipo"]) ? $context["userTipo"] : null) == 1)) {
                // line 47
                echo "\t\t\t\t\t\t<td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "3", array(), "array"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t";
            }
            // line 48
            echo "\t\t
\t\t\t\t\t\t<td><a href=\"?accion=vistamodificar&amp;id=";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "0", array(), "array"), "html", null, true);
            echo "\"><img src=\"../img/modify.png\" width=\"40px\" height=\"40px\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "calendariomodificar", array(), "array"), "html", null, true);
            echo "</img></a></td>
\t\t\t\t\t\t<td><a href=\"javascript:;\" onclick=\"alert('CALENDARIO_Controller.php?accion=eliminar&amp;id=";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "0", array(), "array"), "html", null, true);
            echo "')\"><img src=\"../img/Delete.png\" width=\"40px\" height=\"40px\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Borrar", array(), "array"), "html", null, true);
            echo "</img></a></td>
\t\t\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</form>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "CalendarioShowall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 53,  145 => 50,  139 => 49,  136 => 48,  130 => 47,  128 => 46,  124 => 45,  118 => 44,  114 => 43,  111 => 42,  107 => 41,  97 => 33,  91 => 31,  89 => 30,  85 => 29,  81 => 28,  70 => 20,  67 => 19,  61 => 16,  58 => 15,  55 => 14,  49 => 11,  46 => 10,  44 => 9,  38 => 5,  35 => 4,  29 => 3,);
    }
}
