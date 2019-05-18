<?php

/* CalendarioAdd.html.twig */
class __TwigTemplate_4c49673f9bc2f1d55c30420d1505ad03369a99e7e1be57a0467cb8550005cab5 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Crear Calendario", array(), "array"), "html", null, true);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t\t<div class=\"row\" style=\"clear:both;\">
\t\t\t<div class=\"container\">
\t\t\t\t<form method=\"POST\" action=\"../Controllers/CALENDARIO_Controller.php?accion=insertar\" id=\"frmCalendarioAsignaturas\">
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"example-text-input\" class=\"col-2 col-form-label\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "nombreCalendario", array(), "array"), "html", null, true);
        echo "*</label>
\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"nombreCalendario\" id=\"example-text-input\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"example-text-input\" class=\"col-2 col-form-label\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "descripcionCalendario", array(), "array"), "html", null, true);
        echo "*</label>
\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"descripcionCalendario\" id=\"example-text-input\" required>
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

\t\t\t\t\t<input type=\"hidden\" name=\"asignaturas\" id=\"asignaturas\" value=\"\">

\t\t\t\t\t<div class=\"container\" style=\"width:50%; float:left; display:block;\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h6><b>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "seleccionaAsig", array(), "array"), "html", null, true);
        echo "</b></h6><br>
\t\t\t\t\t\t\t<select id = \"sel1\" style=\"width:300px;\" name = \"sel1\">";
        // line 33
        echo $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "selectasignaturas", array(), "array");
        echo "</select>
\t\t\t\t\t\t\t<button type = \"button\" class = \"btn btn-success\" id = \"addasig\" style=\"margin-left:20px;\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "ImportarAsignatura", array(), "array"), "html", null, true);
        echo "</button>
\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"container\" style=\"width:50%; float:right; display:block;\">\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h6><b>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "seleccionaCurso", array(), "array"), "html", null, true);
        echo "</b></h6><br>
\t\t\t\t\t\t\t<select id=\"curso\" name=\"curso\" style=\"width:300px;\">
\t\t\t\t\t\t\t\t<option value=\"0\"></option>
\t\t\t\t\t\t\t\t<option value=\"1\">1 Curso</option>
\t\t\t\t\t\t\t\t<option value=\"2\">2 Curso</option>
\t\t\t\t\t\t\t\t<option value=\"3\">3 Curso</option>
\t\t\t\t\t\t\t\t<option value=\"4\">4 Curso</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<button type = \"button\" class = \"btn btn-success\" id = \"addcurso\" style=\"margin-left:20px;\">";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "ImportarCurso", array(), "array"), "html", null, true);
        echo "</button>
\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<table class = \"table\" id = \"tblAsignaturas\">
\t\t\t\t\t\t\t<thead class = \"thead-dark\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th scope = \"col\" bgcolor=\"#C0C0C0\">";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "nombreAsignatura", array(), "array"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["otros"]) ? $context["otros"] : null), "asignaturas", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["valor"]) {
            // line 60
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "nombreAsignatura", array(), "array"), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"container\" style=\"clear:both; margin-left:20px;\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "crear", array(), "array"), "html", null, true);
        echo "</button>
\t\t\t\t\t\t<a class=\"form-link\" href=\"";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["volver"]) ? $context["volver"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Volver", array(), "array"), "html", null, true);
        echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t\t<script type=\"text/javascript\">

\t\t\tvar asignaturas = [];

\t\t\tvar primerCurso = [];
\t\t\t";
        // line 80
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["primero"]) ? $context["primero"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["asig"]) {
            // line 81
            echo "\t\t\t\tprimerCurso.push('";
            echo twig_escape_filter($this->env, $context["asig"], "html", null, true);
            echo "')
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asig'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "
\t\t\tvar segundoCurso = [];
\t\t\t";
        // line 85
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["segundo"]) ? $context["segundo"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["asig"]) {
            // line 86
            echo "\t\t\t\tsegundoCurso.push('";
            echo twig_escape_filter($this->env, $context["asig"], "html", null, true);
            echo "')
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asig'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "
\t\t\tvar tercerCurso = [];
\t\t\t";
        // line 90
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tercero"]) ? $context["tercero"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["asig"]) {
            // line 91
            echo "\t\t\t\ttercerCurso.push('";
            echo twig_escape_filter($this->env, $context["asig"], "html", null, true);
            echo "')
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asig'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "
\t\t\tvar cuartoCurso = [];
\t\t\t";
        // line 95
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cuarto"]) ? $context["cuarto"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["asig"]) {
            // line 96
            echo "\t\t\t\tcuartoCurso.push('";
            echo twig_escape_filter($this->env, $context["asig"], "html", null, true);
            echo "')
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asig'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "
\t\t\t\$(document).ready(function () {
\t\t\t\tvar counter = 0;
\t\t\t\t\$(\"#addasig\").on(\"click\", function () {
\t\t\t\t\tvar select = document.getElementById(\"sel1\");
\t\t\t\t\tvar selectText = select.options[select.selectedIndex].innerText;
\t\t\t\t\tasignaturas.push(selectText);
\t\t\t\t\tvar newRow = \$(\"<tr>\");
\t\t\t\t\tvar cols = \"\";

\t\t\t\t\tcols += '<td>' + selectText + '</td>';

\t\t\t\t\tnewRow.append(cols);
\t\t\t\t\t\$(\"#tblAsignaturas\").append(newRow);
\t\t\t\t\tcounter++;
\t\t\t\t\tdocument.getElementById(\"asignaturas\").value = asignaturas;
\t\t\t\t});

\t\t\t\t\$(\"#addcurso\").on(\"click\", function () {

\t\t\t\t\tvar select = document.getElementById(\"curso\");
\t\t\t\t\tvar selectValue = select.options[select.selectedIndex].value;
\t\t\t\t\tvar cols = \"\";
\t\t\t\t\tif(selectValue==1){
\t\t\t\t\t\tfor (var k = 0; k < primerCurso.length; k++) {
\t\t\t\t\t\t\tasignaturas.push(primerCurso[k]);
\t\t\t\t\t\t\tcols += '<tr><td>' + primerCurso[k] + '</td></tr>';
\t\t\t\t\t\t}
\t\t\t\t\t}else{
\t\t\t\t\t\tif(selectValue==2){
\t\t\t\t\t\t\tfor (var k = 0; k < segundoCurso.length; k++) {
\t\t\t\t\t\t\t\tasignaturas.push(segundoCurso[k]);
\t\t\t\t\t\t\t\tcols += '<tr><td>' + segundoCurso[k] + '</td></tr>';
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}else{
\t\t\t\t\t\t\tif(selectValue==3){
\t\t\t\t\t\t\t\tfor (var k = 0; k < tercerCurso.length; k++) {
\t\t\t\t\t\t\t\t\tasignaturas.push(tercerCurso[k]);
\t\t\t\t\t\t\t\t\tcols += '<tr><td>' + tercerCurso[k] + '</td></tr>';
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\tif(selectValue==4){
\t\t\t\t\t\t\t\t\tfor (var k = 0; k < cuartoCurso.length; k++) {
\t\t\t\t\t\t\t\t\t\tasignaturas.push(cuartoCurso[k]);
\t\t\t\t\t\t\t\t\t\tcols += '<tr><td>' + cuartoCurso[k] + '</td></tr>';
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\t\$(\"#tblAsignaturas\").append(cols);
\t\t\t\t\tcounter++;
\t\t\t\t\tdocument.getElementById(\"asignaturas\").value = asignaturas;
\t\t\t\t});

\t\t\t\t\$(\"#tblAsignaturas\").on(\"click\", \".ibtnDel\", function (event) {
\t\t\t\t\t\$(this).closest(\"tr\").remove();
\t\t\t\t\tcounter -= 1
\t\t\t\t});

\t\t\t\t\$(\"#savefrm\").on(\"click\", function () {
\t\t\t\t\tdocument.getElementById('frmCalendarioAsignaturas').submit();

\t\t\t\t});

\t\t\t});
\t\t\t
    \t</script>
";
    }

    public function getTemplateName()
    {
        return "CalendarioAdd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 98,  218 => 96,  214 => 95,  210 => 93,  201 => 91,  197 => 90,  193 => 88,  184 => 86,  180 => 85,  176 => 83,  167 => 81,  163 => 80,  148 => 70,  144 => 69,  137 => 64,  128 => 61,  125 => 60,  121 => 59,  114 => 55,  104 => 48,  93 => 40,  84 => 34,  80 => 33,  76 => 32,  65 => 24,  54 => 16,  44 => 9,  38 => 5,  35 => 4,  29 => 3,);
    }
}
