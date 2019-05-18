<?php

/* CursoShowall.html.twig */
class __TwigTemplate_15f9a1dbe264e693cc8de3f44acfdce343a85dbcd18e39e81e0f1bb7607bd58e extends Twig_Template
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
        echo "Calendarios";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<body onload=\"info();\">
\t<div class=\"row\" style=\"clear:both;\">
\t\t<div class=\"container\">
\t\t<form method=\"POST\" action=\"\" id=\"frmCursos\">
\t\t\t<ul class=\"nav\">
\t\t\t\t";
        // line 10
        if (((isset($context["userTipo"]) ? $context["userTipo"] : null) == 2)) {
            // line 11
            echo "\t\t\t\t<li style=\"margin-right:40px;margin-top:7px;\">
\t\t\t\t\t<a href=\"?accion=vistainsertar\"><img src=\"../img/add.png\" width=\"40px\" height=\"40px\"> ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "newcurso", array(), "array"), "html", null, true);
            echo "</img></a>
\t\t\t\t</li><br>
\t\t\t\t";
        }
        // line 15
        echo "\t\t\t\t";
        if (((isset($context["userTipo"]) ? $context["userTipo"] : null) == 1)) {
            // line 16
            echo "\t\t\t\t<li style=\"margin-right:40px;margin-top:7px;\">
\t\t\t\t\t<a href=\"?accion=vistafiltrar\"><img src=\"../img/filter2.png\" width=\"40px\" height=\"40px\"> ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "filtrar", array(), "array"), "html", null, true);
            echo "</img></a>
\t\t\t\t</li><br>
\t\t\t\t";
        }
        // line 20
        echo "\t\t\t\t<li style=\"margin-right:40px;\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-white\" onclick=this.form.action=\"../Controllers/CURSO_Controller.php?accion=eliminar\" style=\"font-size:15px;\"><img src=\"../img/eliminar2.png\" width=\"40px\" height=\"40px\">  ";
        // line 21
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
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "nombreCurso2", array(), "array"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t<th scope=\"col\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "descripcionCurso2", array(), "array"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t";
        // line 31
        if (((isset($context["userTipo"]) ? $context["userTipo"] : null) == 1)) {
            // line 32
            echo "\t\t\t\t\t\t<th scope=\"col\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "username", array(), "array"), "html", null, true);
            echo "</th>
\t\t\t\t\t\t";
        }
        // line 34
        echo "\t\t\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t
\t\t";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datos"]) ? $context["datos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["valor"]) {
            // line 43
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<th><input type=\"checkbox\" name=\"eliminar[]\" value=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "0", array(), "array"), "html", null, true);
            echo "\"></th>
\t\t\t\t\t\t<th><a href=\"?accion=vistamodificar&amp;id=";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "0", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "1", array(), "array"), "html", null, true);
            echo "</a></th>
\t\t\t\t\t\t<td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "2", array(), "array"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t";
            // line 47
            if (((isset($context["userTipo"]) ? $context["userTipo"] : null) == 1)) {
                // line 48
                echo "\t\t\t\t\t\t<td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "3", array(), "array"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t";
            }
            // line 49
            echo "\t\t
\t\t\t\t\t\t<td><a href=\"?accion=vistamodificar&amp;id=";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "0", array(), "array"), "html", null, true);
            echo "\"><img src=\"../img/modify.png\" width=\"40px\" height=\"40px\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "cursomodificar", array(), "array"), "html", null, true);
            echo "</img></a></td>
\t\t\t\t\t\t<td><a href=\"javascript:;\" onclick=\"alert('CURSO_Controller.php?accion=eliminar&amp;id=";
            // line 51
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
        // line 54
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</form>
\t\t</div>
\t</div>
</body>
";
    }

    public function getTemplateName()
    {
        return "CursoShowall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 54,  146 => 51,  140 => 50,  137 => 49,  131 => 48,  129 => 47,  125 => 46,  119 => 45,  115 => 44,  112 => 43,  108 => 42,  98 => 34,  92 => 32,  90 => 31,  86 => 30,  82 => 29,  71 => 21,  68 => 20,  62 => 17,  59 => 16,  56 => 15,  50 => 12,  47 => 11,  45 => 10,  38 => 5,  35 => 4,  29 => 3,);
    }
}
