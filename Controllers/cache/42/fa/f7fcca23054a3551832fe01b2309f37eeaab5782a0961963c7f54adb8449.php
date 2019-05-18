<?php

/* EventoFilter.html.twig */
class __TwigTemplate_42faf7fcca23054a3551832fe01b2309f37eeaab5782a0961963c7f54adb8449 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Filtrar Eventos", array(), "array"), "html", null, true);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t<div class=\"row\" style=\"clear:both;\">
\t\t<div class=\"container\">
           <form method=\"POST\" action=\"../Controllers/EVENTO_Controller.php?accion=filtrar\">
                
                ";
        // line 9
        if (((isset($context["userTipo"]) ? $context["userTipo"] : null) == 1)) {
            // line 10
            echo "                <div class=\"form-group\">
                    <label class=\"control-label\" >";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "username", array(), "array"), "html", null, true);
            echo "</label><br>
                    <input class=\"form-control\" id=\"username\" name=\"username\" size=\"80\" type=\"text\">
                </div>
                ";
        } else {
            // line 15
            echo "                <div class=\"form-group\">
                    <input type=\"hidden\" class=\"form-control\" id=\"username\" name=\"username\" size=\"80\" type=\"text\" value=";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : null), "html", null, true);
            echo ">
                </div>
                ";
        }
        // line 19
        echo "
                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "asuntoEvento", array(), "array"), "html", null, true);
        echo "</label><br>
                    <input class=\"form-control\" id=\"asuntoEvento\" name=\"asuntoEvento\" size=\"80\" type=\"text\"/>
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "nombreCalendario", array(), "array"), "html", null, true);
        echo "</label><br>
                    <input class=\"form-control\" id=\"nombreCalendario\" name=\"nombreCalendario\" size=\"80\" type=\"text\"/>
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "nombreAsignatura", array(), "array"), "html", null, true);
        echo "</label><br>
                    <input class=\"form-control\" id=\"nombreAsignatura\" name=\"nombreAsignatura\" size=\"80\" type=\"text\"/>
                </div>
\t\t\t\t
                    
\t\t\t\t
                <button type=\"submit\" class=\"btn btn-primary\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "filtrar", array(), "array"), "html", null, true);
        echo "</button>
\t\t\t\t<a class=\"form-link\" href=\"";
        // line 38
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
        return "EventoFilter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 38,  94 => 37,  85 => 31,  77 => 26,  69 => 21,  65 => 19,  59 => 16,  56 => 15,  49 => 11,  46 => 10,  44 => 9,  38 => 5,  35 => 4,  29 => 3,);
    }
}
