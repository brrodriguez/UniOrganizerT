<?php

/* CursoImport.html.twig */
class __TwigTemplate_971619e6ac38e23c9a37ee67deef419e758822f1cdbfe1a1b921ed93182d2600 extends Twig_Template
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
        echo "Curso Import";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t\t<div class=\"row\" style=\"clear:both;\">
\t\t\t<div class=\"container\">
\t\t\t\t<form method=\"POST\" id=\"frmCursoImportar\" action=\"../Controllers/CURSO_Controller.php?accion=importar\">\t\t
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
\t\t\t\t\t\t\t<input type=\"hidden\" class=\"form-control\" id=\"example-text-input\" name=\"username\" size=\"10\" type=\"text\" required=\"true\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : null), "html", null, true);
        echo "\" readonly=\"true\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<br>
\t\t\t\t\t<h4><b>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "seleccionaCurso", array(), "array"), "html", null, true);
        echo "*</b></h4>
\t\t\t\t\t<select name=\"curso\">
\t\t\t\t\t\t<option value=\"0\"></option>
\t\t\t\t\t\t<option value=\"1\">1 Curso</option>
\t\t\t\t\t\t<option value=\"2\">2 Curso</option>
\t\t\t\t\t\t<option value=\"3\">3 Curso</option>
\t\t\t\t\t\t<option value=\"4\">4 Curso</option>
\t\t\t\t\t</select>
\t\t\t\t\t<br><br>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Guardar", array(), "array"), "html", null, true);
        echo "</button>
\t\t\t\t\t<a class=\"form-link\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["volver"]) ? $context["volver"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Volver", array(), "array"), "html", null, true);
        echo "</a>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>

        <script type=\"text/javascript\">
            \$(document).ready(function () {
                var counter = 0;

                \$(\"#addrow\").on(\"click\", function () {

                    var newRow = \$(\"<tr>\");
                    var cols = \"\";

                    //cols += '<td>' + counter + '</td>';
                    cols += '<td><select class = \"form-control\" id = \"sel1\" name = \"select\"><?php echo \$this->asignaturas['selectasignaturas'];?></select></td>';

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
                    document.getElementById('frmCursoImportar').submit();

                });


            });
        </script>
";
    }

    public function getTemplateName()
    {
        return "CursoImport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 38,  84 => 37,  72 => 28,  65 => 24,  54 => 16,  44 => 9,  38 => 5,  35 => 4,  29 => 3,);
    }
}
