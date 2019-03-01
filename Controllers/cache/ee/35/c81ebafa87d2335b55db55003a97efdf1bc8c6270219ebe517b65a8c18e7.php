<?php

/* CursoUnassign.html.twig */
class __TwigTemplate_ee35c81ebafa87d2335b55db55003a97efdf1bc8c6270219ebe517b65a8c18e7 extends Twig_Template
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
        echo "Curso Unassing";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t<div class=\"container\">
\t\t\t\t<h4><b>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "nombreCurso", array(), "array"), "html", null, true);
        echo ": </b>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "curso", array(), "array"), "nombreCurso", array(), "array"), "html", null, true);
        echo "</h4>
\t\t\t\t<h5><b>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "descripcionCurso", array(), "array"), "html", null, true);
        echo ": </b>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "curso", array(), "array"), "descripcionCurso", array(), "array"), "html", null, true);
        echo "</h5>
        <br><br><br><br>
        <table class=\"table\">
\t\t\t  <thead class=\"thead-dark\">
\t\t\t\t<tr>
\t\t\t\t  <th scope=\"col\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "nombreAsignatura", array(), "array"), "html", null, true);
        echo "</th>
\t\t\t\t  <th scope=\"col\"></th>
\t\t\t\t</tr>
\t\t\t  </thead><tbody>
        ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "asignaturas", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["valor"]) {
            // line 17
            echo "            <tr>
            <th>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "nombreAsignatura", array(), "array"), "html", null, true);
            echo "</th>
            <td><a href=\"?accion=desasignar&amp;idCurso=";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_GET"]) ? $context["_GET"] : null), "id", array(), "array"), "html", null, true);
            echo "&amp;idAsignatura=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "idAsignatura", array(), "array"), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-danger btn-sm\">Desasignar</button></a></td>
            </tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </tbody>
\t\t</table>
\t\t<a class=\"form-link\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["volver"]) ? $context["volver"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Volver", array(), "array"), "html", null, true);
        echo "</a>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "CursoUnassign.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 24,  86 => 22,  75 => 19,  71 => 18,  68 => 17,  64 => 16,  57 => 12,  47 => 7,  41 => 6,  38 => 5,  35 => 4,  29 => 3,);
    }
}
