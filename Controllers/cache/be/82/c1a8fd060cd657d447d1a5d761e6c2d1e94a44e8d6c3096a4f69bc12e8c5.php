<?php

/* CalendarioEdit.html.twig */
class __TwigTemplate_be82c1a8fd060cd657d447d1a5d761e6c2d1e94a44e8d6c3096a4f69bc12e8c5 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Editar Calendario", array(), "array"), "html", null, true);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t
\t<div class=\"row\" style=\"clear:both;\">
\t\t<div class=\"container\">
\t\t\t<form method=\"POST\" action=\"\" id=\"frmCalendarioAsignaturas\">
\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t<label for=\"example-text-input\" class=\"col-2 col-form-label\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "nombreCalendario", array(), "array"), "html", null, true);
        echo "</label>
\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"nombreCalendario\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["calendario"]) ? $context["calendario"] : null), "nombreCalendario", array(), "array"), "html", null, true);
        echo "\" id=\"example-text-input\" required>
\t\t\t\t\t</div>
\t\t\t\t</div>
                                
\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t<label for=\"example-text-input\" class=\"col-2 col-form-label\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "descripcionCalendario", array(), "array"), "html", null, true);
        echo "</label>
\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"descripcionCalendario\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["calendario"]) ? $context["calendario"] : null), "descripcionCalendario", array(), "array"), "html", null, true);
        echo "\" id=\"example-text-input\" required>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<br>
\t\t\t\t<button type = \"button\" class=\"btn btn-success\" id = \"addrow\" style=\"margin-left:20px;\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "ImportarAsignatura", array(), "array"), "html", null, true);
        echo "</button>
\t\t\t\t<button type=\"submit\" class=\"btn btn-white\" onclick=this.form.action=\"../Controllers/CALENDARIO_Controller.php?accion=desasignar&amp;id=";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["calendario"]) ? $context["calendario"] : null), "idCalendario", array(), "array"), "html", null, true);
        echo "\" style=\"margin-left:20px;font-size:15px;\"><img src=\"../img/eliminar2.png\" width=\"40px\" height=\"40px\">\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "eliminarSeleccionadas", array(), "array"), "html", null, true);
        echo "</img></button>
\t\t\t\t<a href='../Controllers/EVENTO_Controller.php?accion=";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Crear", array(), "array"), "html", null, true);
        echo "&amp;idCalendario=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["calendario"]) ? $context["calendario"] : null), "idCalendario", array(), "array"), "html", null, true);
        echo "' style=\"margin-left:20px;\"><img src=\"../img/add.png\" width=\"40px\" height=\"40px\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "CrearEvento", array(), "array"), "html", null, true);
        echo "</img></a>
\t\t\t\t<button type =\"submit\" class=\"btn btn-warning\" onclick=this.form.action=\"../Controllers/EVENTO_Controller.php?accion=verEventos&amp;idCalendario=";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["calendario"]) ? $context["calendario"] : null), "idCalendario", array(), "array"), "html", null, true);
        echo "\" style=\"margin-left:20px;\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "VerEventos", array(), "array"), "html", null, true);
        echo "</button>
\t\t\t\t<br><br>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<table class=\"table\" id = \"tblAsignaturas\">
\t\t\t\t\t\t<thead class=\"thead-dark\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"col\">";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "nombreAsignatura", array(), "array"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["asignaturas"]) ? $context["asignaturas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["valor"]) {
            // line 41
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th><input type=\"checkbox\" name=\"eliminar[]\" value=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "idAsignatura", array(), "array"), "html", null, true);
            echo "\">\t";
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "nombreAsignatura", array(), "array"), "html", null, true);
            echo "<br></th>
                                <td><a href=\"https://secretaria.uvigo.gal/docnet-nuevo/guia_docent/index.php";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "href", array(), "array"), "html", null, true);
            echo "\" target=\"_blank\"><button type=\"button\" class=\"btn btn-success\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Guia", array(), "array"), "html", null, true);
            echo "</button></a></td>
\t\t\t\t\t\t\t\t<td><a href=\"../Controllers/EVENTO_Controller.php?accion=verEventos&amp;idCalendario=";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["calendario"]) ? $context["calendario"] : null), "idCalendario", array(), "array"), "html", null, true);
            echo "&amp;idAsig=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "idAsignatura", array(), "array"), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-warning\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "VerEventos", array(), "array"), "html", null, true);
            echo "</button></a></td>
\t\t\t\t\t\t\t\t<td><a href=\"../Controllers/CALENDARIO_Controller.php?accion=desasignar&amp;id=";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["calendario"]) ? $context["calendario"] : null), "idCalendario", array(), "array"), "html", null, true);
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
        // line 48
        echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t<input type=\"hidden\" name=\"asignaturas\" id=\"asignaturas\" value=\"\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\"  onclick=this.form.action=\"../Controllers/CALENDARIO_Controller.php?accion=modificar&amp;id=";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["calendario"]) ? $context["calendario"] : null), "idCalendario", array(), "array"), "html", null, true);
        echo "\" style=\"margin-left:20px;\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "savecalendario", array(), "array"), "html", null, true);
        echo "</button>
\t\t\t\t<a class=\"form-link\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["volver"]) ? $context["volver"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Volver", array(), "array"), "html", null, true);
        echo "</a>
\t\t\t\t<a class=\"form-link\" style=\"margin-left:400px;color:#000000;\">";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "avisoC", array(), "array"), "html", null, true);
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
        // line 69
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
\t\t\t\t//var miTabla = document.getElementsByTagName(\"table\")[0];
\t\t\t\t//var mitbody = miTabla.getElementsByTagName(\"tbody\")[0];
\t\t\t\t//var miFila = mitbody.getElementsByTagName(\"tr\")[0];
\t\t\t\t//var miCelda = miFila.getElementsByTagName(\"td\")[0];
\t\t\t\t//var miDato = miCelda.firstChild.nodeValue;
\t\t\t\tvar valores = document.getElementsByTagName(\"td\").innerHTML;
\t\t\t\tconsole.log(valores);
\t\t\t\t//var select = document.getElementById(\"tblAsignaturas\");
\t\t\t\t//var selectText = select.options[select.selectedIndex].innerText;
\t\t\t\t//asignaturas.push(miDato);
\t\t\t\tdocument.getElementById(\"asignaturas\").value = valores;
                document.getElementById('frmCalendarioAsignaturas').submit();

            });

        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "CalendarioEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 69,  168 => 54,  162 => 53,  156 => 52,  150 => 48,  137 => 45,  129 => 44,  123 => 43,  117 => 42,  114 => 41,  110 => 40,  100 => 33,  89 => 27,  81 => 26,  75 => 25,  71 => 24,  63 => 19,  58 => 17,  50 => 12,  45 => 10,  38 => 5,  35 => 4,  29 => 3,);
    }
}
