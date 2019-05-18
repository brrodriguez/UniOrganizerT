<?php

/* CursoEdit.html.twig */
class __TwigTemplate_0d4a5bfa69d22d37c56cd302f0d2b69225c247e48102da16568d9685f14824be extends Twig_Template
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
        echo "Calendario Editar";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t
\t<div class=\"row\" style=\"clear:both;\">
\t\t<div class=\"container\">
\t\t\t<form method=\"POST\" action=\"\" id=\"frmCursoAsignaturas\">
\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t<label for=\"example-text-input\" class=\"col-2 col-form-label\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "nombreCurso", array(), "array"), "html", null, true);
        echo "</label>
\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"nombreCurso\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : null), "nombreCurso", array(), "array"), "html", null, true);
        echo "\" id=\"example-text-input\" required>
\t\t\t\t\t</div>
\t\t\t\t</div>
                                
\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t<label for=\"example-text-input\" class=\"col-2 col-form-label\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "descripcionCurso", array(), "array"), "html", null, true);
        echo "</label>
\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"descripcionCurso\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : null), "descripcionCurso", array(), "array"), "html", null, true);
        echo "\" id=\"example-text-input\" required>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<br>
\t\t\t\t<button type = \"button\" class=\"btn btn-success\" id = \"addrow\" style=\"margin-left:20px;\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "ImportarAsignatura", array(), "array"), "html", null, true);
        echo "</button>
\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\" onclick=this.form.action=\"../Controllers/CURSO_Controller.php?accion=desasignar&amp;id=";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : null), "idCurso", array(), "array"), "html", null, true);
        echo "\" style=\"margin-left:20px;\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "desasignar", array(), "array"), "html", null, true);
        echo "</button>
\t\t\t\t<button type =\"submit\" class=\"btn btn-warning\" onclick=this.form.action=\"../Controllers/EVENTO_Controller.php?accion=verEventos&amp;idCurso=";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : null), "idCurso", array(), "array"), "html", null, true);
        echo "\" style=\"margin-left:20px;\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "VerEventos", array(), "array"), "html", null, true);
        echo "</button>
\t\t\t\t<a href='../Controllers/EVENTO_Controller.php?accion=";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Crear", array(), "array"), "html", null, true);
        echo "&amp;idCurso=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : null), "idCurso", array(), "array"), "html", null, true);
        echo "' style=\"margin-left:20px;\"><img src=\"../img/add.png\" width=\"40px\" height=\"40px\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "CrearEvento", array(), "array"), "html", null, true);
        echo "</img></a><br><br>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<table class=\"table\" id = \"tblAsignaturas\">
\t\t\t\t\t\t<thead class=\"thead-dark\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"col\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "nombreAsignatura", array(), "array"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["asignaturas"]) ? $context["asignaturas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["valor"]) {
            // line 40
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th><input type=\"checkbox\" name=\"eliminar[]\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "idAsignatura", array(), "array"), "html", null, true);
            echo "\">\t";
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "nombreAsignatura", array(), "array"), "html", null, true);
            echo "<br></th>
                                <td><a href=\"https://secretaria.uvigo.gal/docnet-nuevo/guia_docent/index.php";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "href", array(), "array"), "html", null, true);
            echo "\" target=\"_blank\"><button type=\"button\" class=\"btn btn-success\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Guia", array(), "array"), "html", null, true);
            echo "</button></a></td>
\t\t\t\t\t\t\t\t<td><a href=\"../Controllers/EVENTO_Controller.php?accion=verEventos&amp;idCurso=";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : null), "idCurso", array(), "array"), "html", null, true);
            echo "&amp;idAsig=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "idAsignatura", array(), "array"), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-warning\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "VerEventos", array(), "array"), "html", null, true);
            echo "</button></a></td>
\t\t\t\t\t\t\t\t<td><a href=\"../Controllers/CURSO_Controller.php?accion=desasignar&amp;id=";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : null), "idCurso", array(), "array"), "html", null, true);
            echo "&amp;idAsig=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "idAsignatura", array(), "array"), "html", null, true);
            echo "\"><img src=\"../img/Delete.png\" width=\"40px\" height=\"40px\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "asignaturaeliminar", array(), "array"), "html", null, true);
            echo "</img></a></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\"  onclick=this.form.action=\"../Controllers/CURSO_Controller.php?accion=modificar&amp;id=";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : null), "idCurso", array(), "array"), "html", null, true);
        echo "\" style=\"margin-left:20px;\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "savecurso", array(), "array"), "html", null, true);
        echo "</button>
\t\t\t\t<a class=\"form-link\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["volver"]) ? $context["volver"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Volver", array(), "array"), "html", null, true);
        echo "</a>
\t\t\t</form>
\t\t</div>\t
\t</div>
\t<script type=\"text/javascript\">
\t\t
        \$(document).ready(function () {
            var counter = 0;

            \$(\"#addrow\").on(\"click\", function () {

                var newRow = \$(\"<tr>\");
                var cols = \"\";
\t\t\t\t
                //cols += '<td>' + counter + '</td>';
                cols += '<td><select class = \"form-control\" id = \"sel1\" name = \"select' + counter + '\">";
        // line 66
        echo $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "selectasignaturas", array(), "array");
        echo "</select></td>';

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
        return "CursoEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 66,  160 => 51,  154 => 50,  149 => 47,  136 => 44,  128 => 43,  122 => 42,  116 => 41,  113 => 40,  109 => 39,  99 => 32,  87 => 27,  81 => 26,  75 => 25,  71 => 24,  63 => 19,  58 => 17,  50 => 12,  45 => 10,  38 => 5,  35 => 4,  29 => 3,);
    }
}
