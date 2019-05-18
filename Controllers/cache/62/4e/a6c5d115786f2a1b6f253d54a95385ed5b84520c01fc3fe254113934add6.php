<?php

/* CursoAssign.html.twig */
class __TwigTemplate_624ea6c5d115786f2a1b6f253d54a95385ed5b84520c01fc3fe254113934add6 extends Twig_Template
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
        echo "Curso Assign";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t<div class=\"row\" style=\"clear:both;\">
\t\t<div class=\"container\">
\t\t\t<form method=\"POST\" action=\"?accion=asignar&amp;idCurso=";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_GET"]) ? $context["_GET"] : null), "id", array(), "array"), "html", null, true);
        echo "\" id=\"frmCursoAsignaturas\">
\t\t\t\t<h4> <b>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "nombreCurso", array(), "array"), "html", null, true);
        echo ": </b>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["otros"]) ? $context["otros"] : null), "curso", array(), "array"), "nombreCurso", array(), "array"), "html", null, true);
        echo "</h4>                            
\t\t\t\t<h5> <b>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "descripcionCurso", array(), "array"), "html", null, true);
        echo ": </b>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["otros"]) ? $context["otros"] : null), "curso", array(), "array"), "descripcionCurso", array(), "array"), "html", null, true);
        echo "</h5>
\t\t\t\t<br><br>
\t\t\t\t<button type = \"button\" class = \"btn btn-success\" id = \"addrow\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "AñadirAsignatura", array(), "array"), "html", null, true);
        echo "</button>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<h5><table class = \"table\" id = \"tblAsignaturas\">
\t\t\t\t\t\t<thead class = \"thead-dark\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope = \"col\" bgcolor=\"#C0C0C0\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "nombreAsignatura", array(), "array"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t<th scope = \"col\"></th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["otros"]) ? $context["otros"] : null), "asignaturas", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["valor"]) {
            // line 22
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "nombreAsignatura", array(), "array"), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t<br><br><br><br>
\t\t\t\t<button id = \"savefrm\" type = \"button\" class = \"btn btn-primary btn-lg \">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Guardar", array(), "array"), "html", null, true);
        echo "</button>
\t\t\t\t<a class=\"form-link\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["volver"]) ? $context["volver"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Volver", array(), "array"), "html", null, true);
        echo "</a>
\t\t\t\t<br>
\t\t\t</form>
\t\t</div>
\t</div>
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            var counter = 0;

            \$(\"#addrow\").on(\"click\", function () {

                var newRow = \$(\"<tr>\");
                var cols = \"\";

                //cols += '<td>' + counter + '</td>';
                cols += '<td><select class = \"form-control\" id = \"sel1\" name = \"select' + counter + '\"><";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "selectasignaturas", array(), "array"), "html", null, true);
        echo "</select></td>';

                cols += '<td><input type=\"button\" class=\"ibtnDel btn btn-md btn-danger \"  value=\"Eliminar Asignatura\"></td>';
                newRow.append(cols);
                \$(\"#tblAsignaturas\").append(newRow);
                counter++;
            });

            \$(\"#tblAsignaturas\").on(\"click\", \".ibtnDel\", function (event) {
                \$(this).closest(\"tr\").remove();
                counter -= 1
            });

            \$(\"#savefrm\").on(\"click\", function () {
                document.getElementById('frmCursoAsignaturas').submit();

            });

        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "CursoAssign.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 47,  102 => 32,  98 => 31,  92 => 27,  82 => 23,  79 => 22,  75 => 21,  67 => 16,  59 => 11,  52 => 9,  46 => 8,  42 => 7,  38 => 5,  35 => 4,  29 => 3,);
    }
}
