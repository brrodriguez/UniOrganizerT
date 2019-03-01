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
        echo "Curso Showall";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t<div class=\"container\">
\t\t\t";
        // line 6
        if (((isset($context["userTipo"]) ? $context["userTipo"] : null) == 2)) {
            // line 7
            echo "\t\t\t<a href=\"?accion=vistainsertar\"><button type=\"button\" class=\"btn btn-primary btn-lg btn-block\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "newcurso", array(), "array"), "html", null, true);
            echo "</button></a>
\t\t\t<br>
\t\t\t<a href=\"?accion=vistaimportar\"><button type=\"button\" class=\"btn btn-primary btn-lg btn-block\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "obtenerCurso", array(), "array"), "html", null, true);
            echo "</button></a>
\t\t\t<br>
\t\t\t";
        }
        // line 12
        echo "\t\t\t";
        if (((isset($context["userTipo"]) ? $context["userTipo"] : null) == 1)) {
            // line 13
            echo "\t\t\t<a href=\"?accion=vistafiltrar\"><button type=\"button\" class=\"btn btn-primary btn-lg btn-block\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "filtrar", array(), "array"), "html", null, true);
            echo "</button></a>
\t\t\t<br>
\t\t\t";
        }
        // line 16
        echo "\t\t\t
\t\t\t<table class=\"table\">
\t\t\t\t<thead class=\"thead-dark\">
\t\t\t\t\t<tr>
\t\t\t\t\t  <th scope=\"col\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "nombreCurso2", array(), "array"), "html", null, true);
        echo "</th>
\t\t\t\t\t  <th scope=\"col\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "descripcionCurso2", array(), "array"), "html", null, true);
        echo "</th>
\t\t\t\t\t  <th scope=\"col\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "username", array(), "array"), "html", null, true);
        echo "</th>
\t\t\t\t\t  <th scope=\"col\"></th>
\t\t\t\t\t  <th scope=\"col\"></th>
\t\t\t\t\t  <th scope=\"col\"></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t
\t\t";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datos"]) ? $context["datos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["valor"]) {
            // line 31
            echo "\t\t\t";
            // line 32
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<th><a href=\"?accion=ver&amp;id=";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "0", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "1", array(), "array"), "html", null, true);
            echo "</a></th>
\t\t\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "2", array(), "array"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "3", array(), "array"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t
\t\t\t\t\t\t<td><a href=\"?accion=vistadesasignar&amp;id=";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "0", array(), "array"), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-success\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "EliminarAsignaturas", array(), "array"), "html", null, true);
            echo "</button></a></td>
\t\t\t\t\t\t<td><a href=\"?accion=vistaasignar&amp;id=";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "0", array(), "array"), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-success\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "AsignarAsignaturas", array(), "array"), "html", null, true);
            echo "</button></a></td>
\t\t\t\t\t\t<td><a href=\"?accion=vistamodificar&amp;id=";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "0", array(), "array"), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-primary\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "cursomodificar", array(), "array"), "html", null, true);
            echo "</button></a></td>
\t\t\t\t\t\t<td><a href=\"?accion=vistaeliminar&amp;id=";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "0", array(), "array"), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "cursoeliminar", array(), "array"), "html", null, true);
            echo "</button></a></td>
\t\t\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
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
        return array (  143 => 43,  132 => 40,  126 => 39,  120 => 38,  114 => 37,  109 => 35,  105 => 34,  99 => 33,  96 => 32,  94 => 31,  90 => 30,  79 => 22,  75 => 21,  71 => 20,  65 => 16,  58 => 13,  55 => 12,  49 => 9,  43 => 7,  41 => 6,  38 => 5,  35 => 4,  29 => 3,);
    }
}
