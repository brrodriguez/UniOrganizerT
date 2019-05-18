<?php

/* CursoAdd.html.twig */
class __TwigTemplate_86d0ffd580c3382f60dbb515daf4ed4a9e0acf36b3ecec43dc550dec7174815d extends Twig_Template
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
        echo "Calendario Crear";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t\t<div class=\"row\" style=\"clear:both;\">
\t\t\t<div class=\"container\">
\t\t\t\t<form method=\"POST\" action=\"../Controllers/CURSO_Controller.php?accion=insertar\" id=\"frmCursoAsignaturas\">
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"example-text-input\" class=\"col-2 col-form-label\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "nombreCurso", array(), "array"), "html", null, true);
        echo "*</label>
\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"nombreCurso\" id=\"example-text-input\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"example-text-input\" class=\"col-2 col-form-label\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "descripcionCurso", array(), "array"), "html", null, true);
        echo "*</label>
\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"descripcionCurso\" id=\"example-text-input\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t<input type=\"hidden\" class=\"form-control\" id=\"example-text-input\" name=\"username\" size=\"20\" type=\"text\" required=\"true\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : null), "html", null, true);
        echo "\" readonly=\"true\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"container\" style=\"width:50%; float:left; display:block;\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h6><b>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "seleccionaAsig", array(), "array"), "html", null, true);
        echo "</b></h6><br>
\t\t\t\t\t\t\t<select id = \"sel1\" style=\"width:300px;\" name = \"select' + counter + '\">";
        // line 31
        echo $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "selectasignaturas", array(), "array");
        echo "</select>
\t\t\t\t\t\t\t<button type = \"button\" class = \"btn btn-success\" id = \"addrow\" style=\"margin-left:20px;\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "ImportarAsignatura", array(), "array"), "html", null, true);
        echo "</button><br><br>
\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"container\" style=\"width:50%; float:right; display:block;\">\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h6><b>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "seleccionaCurso", array(), "array"), "html", null, true);
        echo "</b></h6><br>
\t\t\t\t\t\t\t<select name=\"curso\" style=\"width:300px;\">
\t\t\t\t\t\t\t\t<option value=\"0\"></option>
\t\t\t\t\t\t\t\t<option value=\"1\">1 Curso</option>
\t\t\t\t\t\t\t\t<option value=\"2\">2 Curso</option>
\t\t\t\t\t\t\t\t<option value=\"3\">3 Curso</option>
\t\t\t\t\t\t\t\t<option value=\"4\">4 Curso</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<button type = \"button\" class = \"btn btn-success\" id = \"addrow\" style=\"margin-left:20px;\">";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "ImportarCurso", array(), "array"), "html", null, true);
        echo "</button><br><br>
\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<table class = \"table\" id = \"tblAsignaturas\">
\t\t\t\t\t\t\t<thead class = \"thead-dark\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope = \"col\" bgcolor=\"#C0C0C0\">";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "nombreAsignatura", array(), "array"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t\t<th scope = \"col\"></th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["otros"]) ? $context["otros"] : null), "asignaturas", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["valor"]) {
            // line 59
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "nombreAsignatura", array(), "array"), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"container\" style=\"clear:both; margin-left:20px;\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "crear", array(), "array"), "html", null, true);
        echo "</button>
\t\t\t\t\t\t<a class=\"form-link\" href=\"";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["volver"]) ? $context["volver"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Volver", array(), "array"), "html", null, true);
        echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t\t<script type=\"text/javascript\">

\t\t\t\$(document).ready(function () {
\t\t\t\tvar counter = 0;

\t\t\t\t\$(\"#addrow\").on(\"click\", function () {

\t\t\t\t\tvar newRow = \$(\"<tr>\");
\t\t\t\t\tvar cols = \"\";

\t\t\t\t\t//cols += '<td>' + counter + '</td>';
\t\t\t\t\tcols += '<th>";
        // line 85
        echo "hola";
        echo "</th>';

\t\t\t\t\tconsole.log(cols)
\t\t\t\t\tnewRow.append(cols);
\t\t\t\t\t\$(\"#tblAsignaturas\").append(newRow);
\t\t\t\t\tcounter++;
\t\t\t\t});

\t\t\t\t\$(\"#tblAsignaturas\").on(\"click\", \".ibtnDel\", function (event) {
\t\t\t\t\t\$(this).closest(\"tr\").remove();
\t\t\t\t\tcounter -= 1
\t\t\t\t});

\t\t\t\t\$(\"#savefrm\").on(\"click\", function () {
\t\t\t\t\tdocument.getElementById('frmCursoAsignaturas').submit();

\t\t\t\t});

\t\t\t});
    \t</script>
";
    }

    public function getTemplateName()
    {
        return "CursoAdd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 85,  147 => 69,  143 => 68,  136 => 63,  127 => 60,  124 => 59,  120 => 58,  112 => 53,  102 => 46,  91 => 38,  82 => 32,  78 => 31,  74 => 30,  65 => 24,  54 => 16,  44 => 9,  38 => 5,  35 => 4,  29 => 3,);
    }
}
