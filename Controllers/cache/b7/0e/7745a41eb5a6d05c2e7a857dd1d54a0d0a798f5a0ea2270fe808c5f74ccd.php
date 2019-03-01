<?php

/* CursoShow.html.twig */
class __TwigTemplate_b70e7745a41eb5a6d05c2e7a857dd1d54a0d0a798f5a0ea2270fe808c5f74ccd extends Twig_Template
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
        echo "Curso Show";
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
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        \t</tbody>
\t\t</table>
\t\t<a class=\"form-link\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["volver"]) ? $context["volver"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Volver", array(), "array"), "html", null, true);
        echo "</a>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "CursoShow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 23,  80 => 21,  71 => 18,  68 => 17,  64 => 16,  57 => 12,  47 => 7,  41 => 6,  38 => 5,  35 => 4,  29 => 3,);
    }
}
