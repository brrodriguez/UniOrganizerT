<?php

/* AlertaAdd.html.twig */
class __TwigTemplate_a831fb944468a2e5d146b33835bdc18fa7c59fee8bc4a79ffef27038dbf3d17a extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Crear Alerta", array(), "array"), "html", null, true);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t<div class=\"row\" style=\"clear:both;\">
        <div class=\"container\">
            <form  id=\"form\" name=\"form\" action='ALERTA_Controller.php'  method='post'   enctype=\"multipart/form-data\">
                <div class=\"col-lg-4\" style=\"float:left;\">
                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "asuntoAlerta", array(), "array"), "html", null, true);
        echo "</label><br>
                        <input  id=\"asuntoAlerta\" name=\"asuntoAlerta\" type=\"text\" readonly=\"true\" size=\"80\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "asuntoEvento", array(), "array"), "html", null, true);
        echo "\">
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "descripcionAlerta", array(), "array"), "html", null, true);
        echo "</label><br>
                        <input  id=\"descripcionAlerta\" name=\"descripcionAlerta\" type=\"text\" size=\"80\" readonly=\"true\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "descripcionEvento", array(), "array"), "html", null, true);
        echo "\">
                    </div>

                    <div class=\"form-group\">
                        <input type=\"hidden\" id=\"idEvento\" name=\"idEvento\" type=\"int\" readonly=\"true\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "idEvento", array(), "array"), "html", null, true);
        echo "\">
                    </div>
                    
                    <div class=\"form-group\">
                        <input type=\"hidden\" id=\"username\" name=\"username\" size=\"25\" type=\"text\" required=\"true\" value='usuario'/>
                    </div>
                    
                    <h6 style=\"clear:both;\"><b>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Aviso", array(), "array"), "html", null, true);
        echo "</b></h6>
                    
                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Dias", array(), "array"), "html", null, true);
        echo "*</label><br>
                        <input class=\"form\" id=\"dias\" name=\"dias\" type=\"text\" required=\"true\"/>
                    </div>
                </div>  
\t\t\t\t
                <div class=\"col-lg-4\" style=\"float:right;\">
                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Fecha", array(), "array"), "html", null, true);
        echo "</label><br>
                        <input id=\"dia\" name=\"dia\" type=\"date\" readonly=\"true\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "dia", array(), "array"), "html", null, true);
        echo "\">
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "HoraInicio", array(), "array"), "html", null, true);
        echo "</label><br>
                        <input id=\"horaInicio\" name=\"horaInicio\" type=\"time\" readonly=\"true\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "horaInicio", array(), "array"), "html", null, true);
        echo "\">
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "HoraFin", array(), "array"), "html", null, true);
        echo "</label><br>
                        <input id=\"horaFin\" name=\"horaFin\" type=\"time\" readonly=\"true\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "horaFin", array(), "array"), "html", null, true);
        echo "\">
                    </div>
                </div>

                <div class=\"col-lg-4\" style=\"float:left;clear:both;\">
                    <button type=\"submit\" class=\"btn btn-primary\" name='accion' value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Crear", array(), "array"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Añadir Alerta", array(), "array"), "html", null, true);
        echo "</button>
                    <a class=\"form-link\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["volver"]) ? $context["volver"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Volver", array(), "array"), "html", null, true);
        echo "</a>
                </div>
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AlertaAdd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 54,  127 => 53,  119 => 48,  115 => 47,  108 => 43,  104 => 42,  97 => 38,  93 => 37,  83 => 30,  77 => 27,  67 => 20,  60 => 16,  56 => 15,  49 => 11,  45 => 10,  38 => 5,  35 => 4,  29 => 3,);
    }
}
