<?php

/* AlertaEdit.html.twig */
class __TwigTemplate_3b0edc03b39885675f8bd575657b46ef31be856bb1aaf6042d1221da45af7d23 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Editar Alerta", array(), "array"), "html", null, true);
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
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "asuntoAlerta", array(), "array"), "html", null, true);
        echo "</label><br>
                        <input onchange=\"return valida_envia_asuntoAlerta()\" class=\"form\" id=\"asuntoAlerta\" name=\"asuntoAlerta\"  size=\"80\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alerta"]) ? $context["alerta"] : null), "asuntoAlerta", array(), "array"), "html", null, true);
        echo "\">
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "descripcionAlerta", array(), "array"), "html", null, true);
        echo "</label><br>
                        <textarea onchange=\"return valida_envia_descripcionAlerta()\" rows=\"4\" cols=\"80\" name=\"descripcionAlerta\" >";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alerta"]) ? $context["alerta"] : null), "descripcionAlerta", array(), "array"), "html", null, true);
        echo "</textarea>             
                    </div>
                </div>
\t\t\t\t
                <div class=\"col-lg-4\" style=\"float:right;\">
                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Fecha", array(), "array"), "html", null, true);
        echo "</label><br>
                        <input class=\"form\" id=\"dia\" name=\"dia\"  type=\"date\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alerta"]) ? $context["alerta"] : null), "dia", array(), "array"), "html", null, true);
        echo "\">
                    </div>
                    
                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "HoraInicio", array(), "array"), "html", null, true);
        echo "</label><br>
                        <input onchange=\"return valida_envia_hora()\" class=\"form\" id=\"horaInicio\" name=\"horaInicio\" type=\"time\" required=\"true\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alerta"]) ? $context["alerta"] : null), "horaInicio", array(), "array"), "html", null, true);
        echo "\"/>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "HoraFin", array(), "array"), "html", null, true);
        echo "</label><br>
                        <input onchange=\"return valida_envia_hora()\" class=\"form\" id=\"horaFin\" name=\"horaFin\" type=\"time\" required=\"true\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alerta"]) ? $context["alerta"] : null), "horaFin", array(), "array"), "html", null, true);
        echo "\"/>
                    </div>
                </div>
\t\t\t\t
                <div class=\"form-group\" style=\"clear:both;\">
                    <input type=\"hidden\" class=\"form\" id=\"username\" name=\"username\" size=\"25\" type=\"text\" readonly=\"true\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alerta"]) ? $context["alerta"] : null), "username", array(), "array"), "html", null, true);
        echo "\">
                </div>
\t\t\t\t<div class=\"form-group\">
                    <input type=\"hidden\" class=\"form\" id=\"idEvento\" name=\"idEvento\" size=\"25\" type=\"text\" readonly=\"true\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alerta"]) ? $context["alerta"] : null), "idEvento", array(), "array"), "html", null, true);
        echo "\">
                </div>
                <div class=\"form-group\">
                    <input type=\"hidden\" class=\"form\" id=\"idAlerta\" name=\"idAlerta\" size=\"25\" type=\"text\" readonly=\"true\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alerta"]) ? $context["alerta"] : null), "idAlerta", array(), "array"), "html", null, true);
        echo "\">
                </div>
                <br>

                <button type=\"submit\" class=\"btn btn-primary\" onclick=\"return valida_envia_ALERTA()\" name='accion'  value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Modificar", array(), "array"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Modificar", array(), "array"), "html", null, true);
        echo "</button>
                <a class=\"form-link\" href=\"";
        // line 50
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
        return "AlertaEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 50,  123 => 49,  116 => 45,  110 => 42,  104 => 39,  96 => 34,  92 => 33,  85 => 29,  81 => 28,  74 => 24,  70 => 23,  61 => 17,  57 => 16,  50 => 12,  46 => 11,  38 => 5,  35 => 4,  29 => 3,);
    }
}
