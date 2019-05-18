<?php

/* CursoDelete.html.twig */
class __TwigTemplate_6bec33d33818575f4d250ababd00750200ad8a61724f5ef19627a19e1508352e extends Twig_Template
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
        echo "Calendario Borrar";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t<div class=\"row\" style=\"clear:both;\">
\t\t<div class=\"container\">
            <form method=\"POST\" action=\"../Controllers/CURSO_Controller.php?accion=eliminar&amp;id=";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "idCurso", array(), "array"), "html", null, true);
        echo "\">
                <div class=\"form-group\" >
                    <label class=\"control-label\" >";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Eliminar Curso", array(), "array"), "html", null, true);
        echo "</label><br>
                </div>
               
                
                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "nombreCurso", array(), "array"), "html", null, true);
        echo "</label><br>
                    <input class=\"form\" id=\"nombreCurso\" name=\"nombreCurso\" size=\"25\" type=\"text\" readonly=\"true\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "nombreCurso", array(), "array"), "html", null, true);
        echo "\">
                </div>             

                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "descripcionCurso", array(), "array"), "html", null, true);
        echo "</label><br>
                    <textarea rows=\"8\" cols=\"70\" id=\"descripcionCurso\" name=\"descripcionCurso\" readonly=\"true\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "descripcionCurso", array(), "array"), "html", null, true);
        echo "</textarea>
                </div>

                <br>
\t\t\t\t
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Borrar", array(), "array"), "html", null, true);
        echo "</button>
                <a class=\"form-link\" href='";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["volver"]) ? $context["volver"] : null), "html", null, true);
        echo "'>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Volver", array(), "array"), "html", null, true);
        echo " </a>
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CursoDelete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 26,  78 => 25,  70 => 20,  66 => 19,  59 => 15,  55 => 14,  47 => 9,  42 => 7,  38 => 5,  35 => 4,  29 => 3,);
    }
}
