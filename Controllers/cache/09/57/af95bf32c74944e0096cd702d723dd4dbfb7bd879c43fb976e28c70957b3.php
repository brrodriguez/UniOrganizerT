<?php

/* CursoFilter.html.twig */
class __TwigTemplate_0957af95bf32c74944e0096cd702d723dd4dbfb7bd879c43fb976e28c70957b3 extends Twig_Template
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
        echo "Calendario Filtrar";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t<div class=\"row\" style=\"clear:both;\">
\t\t<div class=\"container\">
           <form method=\"POST\" action=\"../Controllers/CURSO_Controller.php?accion=filtrar\">
                <div class=\"form-group\" >
                    <label class=\"control-label\" ><h5>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Filtrar Cursos", array(), "array"), "html", null, true);
        echo "</h5></label><br>
                </div>
\t\t\t\t
                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "username", array(), "array"), "html", null, true);
        echo "</label><br>
                    <input class=\"form-control\" id=\"username\" name=\"username\" size=\"80\" type=\"text\">
                </div>     

                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "nombreCurso", array(), "array"), "html", null, true);
        echo "</label><br>
                    <input class=\"form-control\" id=\"nombreCurso\" name=\"nombreCurso\" size=\"80\" type=\"text\">
                </div> 
\t\t\t\t
                <button type=\"submit\" class=\"btn btn-primary\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "filtrar", array(), "array"), "html", null, true);
        echo "</button>
\t\t\t\t<a class=\"form-link\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["volver"]) ? $context["volver"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Volver", array(), "array"), "html", null, true);
        echo "</a>
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CursoFilter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 23,  66 => 22,  59 => 18,  51 => 13,  44 => 9,  38 => 5,  35 => 4,  29 => 3,);
    }
}
