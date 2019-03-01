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
        echo "Curso Edit";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t<div class=\"container\">
\t\t\t<form method=\"POST\" action=\"../Controllers/CURSO_Controller.php?accion=modificar&amp;id=";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "idCurso", array(), "array"), "html", null, true);
        echo "\">
\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t<label for=\"example-text-input\" class=\"col-2 col-form-label\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "nombreCurso", array(), "array"), "html", null, true);
        echo "</label>
\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"nombreCurso\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "nombreCurso", array(), "array"), "html", null, true);
        echo "\" id=\"example-text-input\" required>
\t\t\t\t\t</div>
\t\t\t\t</div>
                                

\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t<label for=\"example-text-input\" class=\"col-2 col-form-label\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "descripcionCurso", array(), "array"), "html", null, true);
        echo "</label>
\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"descripcionCurso\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "descripcionCurso", array(), "array"), "html", null, true);
        echo "\" id=\"example-text-input\" required>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "savecurso", array(), "array"), "html", null, true);
        echo "</button>
\t\t\t</form>
\t\t</div>
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
        return array (  72 => 22,  65 => 18,  60 => 16,  51 => 10,  46 => 8,  41 => 6,  38 => 5,  35 => 4,  29 => 3,);
    }
}
