<?php

/* AsignaturaDelete.html.twig */
class __TwigTemplate_12b687e4a5757d91680cebc690642c6b61de35e51f5307934901b9856fb1983d extends Twig_Template
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
        echo "Asignatura Delete";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t<div class=\"row\" style=\"clear:both;\">
        <div class=\"container\">
            <form method=\"POST\" action=\"../Controllers/ASIGNATURA_Controller.php?accion=eliminar&amp;id=";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "idAsignatura", array(), "array"), "html", null, true);
        echo "\">
                <div class=\"form-group\" >
                    <label class=\"control-label\" >";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Eliminar Asignatura", array(), "array"), "html", null, true);
        echo "</label><br>
                </div>
               
                
                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "nombreAsignatura", array(), "array"), "html", null, true);
        echo "</label><br>
                    <input class=\"form\" id=\"nombreAsignatura\" name=\"nombreAsignatura\" size=\"50\" type=\"text\" readonly=\"true\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "nombreAsignatura", array(), "array"), "html", null, true);
        echo "\">
                </div>             

                <br>
\t\t\t\t
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Borrar", array(), "array"), "html", null, true);
        echo "</button>
                <a class=\"form-link\" href='";
        // line 21
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
        return "AsignaturaDelete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 21,  67 => 20,  59 => 15,  55 => 14,  47 => 9,  42 => 7,  38 => 5,  35 => 4,  29 => 3,);
    }
}
