<?php

/* AlertaEntregaAdd.html.twig */
class __TwigTemplate_6d84a4b90e8bf1c5f85b7792bd6d3ec8d0c36822e088151beceeebb5b6dd34a1 extends Twig_Template
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
        echo "Alerta Add";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t<div class=\"container\" style=\"clear:both;\">
            <form  id=\"form\" name=\"form\" action='ALERTA_Controller.php'  method='post'   enctype=\"multipart/form-data\">
                <div class=\"form-group\" >
                    <label class=\"control-label\" >";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Añadir Alerta", array(), "array"), "html", null, true);
        echo "</label><br>
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "descripcionAlerta", array(), "array"), "html", null, true);
        echo "</label><br>
                    <textarea rows=\"8\" cols=\"70\" name=\"descripcionAlerta\" readonly=\"true\"> ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "asuntoEntrega", array(), "array"), "html", null, true);
        echo "</textarea>             
                </div>
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
                    <input type=\"hidden\" id=\"curso\" name=\"curso\" type=\"int\" readonly=\"true\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "idCurso", array(), "array"), "html", null, true);
        echo "\">
                </div>
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
                    <input type=\"hidden\" id=\"fecha\" name=\"fecha\" type=\"date\" readonly=\"true\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "dia", array(), "array"), "html", null, true);
        echo "\">
                </div>

                <div class=\"form-group\">
                    <input type=\"hidden\" id=\"hora\" name=\"hora\" type=\"time\" readonly=\"true\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "horaInicio", array(), "array"), "html", null, true);
        echo "\">
                </div>
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
                    <input type=\"hidden\" id=\"username\" name=\"username\" size=\"25\" type=\"text\" required=\"true\" value='usuario'/>
                </div>
\t\t\t\t
\t\t\t\t<h4><b>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Aviso", array(), "array"), "html", null, true);
        echo "</b></h4>
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Dias", array(), "array"), "html", null, true);
        echo "*</label><br>
                    <input class=\"form\" id=\"dias\" name=\"dias\" type=\"text\" required=\"true\"/>
                </div>
\t\t\t\t
                <input type='submit' onclick=\"return valida_envia_ALERTA()\" name='accion'  value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Añadir", array(), "array"), "html", null, true);
        echo "\">
                <a class=\"form-link\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["volver"]) ? $context["volver"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Volver", array(), "array"), "html", null, true);
        echo "</a>
            </form>
        </div>
";
    }

    public function getTemplateName()
    {
        return "AlertaEntregaAdd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 40,  98 => 39,  91 => 35,  85 => 32,  75 => 25,  68 => 21,  61 => 17,  54 => 13,  50 => 12,  43 => 8,  38 => 5,  35 => 4,  29 => 3,);
    }
}
