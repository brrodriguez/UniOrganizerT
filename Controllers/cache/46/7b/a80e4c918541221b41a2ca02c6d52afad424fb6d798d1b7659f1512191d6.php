<?php

/* AlertaShow.html.twig */
class __TwigTemplate_467ba80e4c918541221b41a2ca02c6d52afad424fb6d798d1b7659f1512191d6 extends Twig_Template
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
        echo "Alerta Show";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t<div class=\"container\" >
            <form  id=\"form\" name=\"form\" action='ALERTA_Controller.php'  method='post'   enctype=\"multipart/form-data\">
                <div class=\"form-group\" >
                    <label class=\"control-label\" >";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Ver Alerta", array(), "array"), "html", null, true);
        echo "</label><br>
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "asuntoAlerta", array(), "array"), "html", null, true);
        echo "</label><br>
                     <input class=\"form\" id=\"asuntoAlerta\" name=\"asuntoAlerta\"  size=\"50\" readonly=\"true\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alerta"]) ? $context["alerta"] : null), "asuntoAlerta", array(), "array"), "html", null, true);
        echo "\">
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "descripcionAlerta", array(), "array"), "html", null, true);
        echo "</label><br>
                    <textarea rows=\"8\" cols=\"70\" name=\"descripcionAlerta\" readonly=\"true\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alerta"]) ? $context["alerta"] : null), "descripcionAlerta", array(), "array"), "html", null, true);
        echo "</textarea>             
                </div>

\t\t\t\t<div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Fecha", array(), "array"), "html", null, true);
        echo "</label><br>
                     <input class=\"form\" id=\"fecha\" name=\"fecha\"  type=\"date\" readonly=\"true\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evento"]) ? $context["evento"] : null), "dia", array(), "array"), "html", null, true);
        echo "\">
                </div>
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Hora", array(), "array"), "html", null, true);
        echo "</label><br>
                    <input class=\"form\" id=\"hora\" name=\"hora\" type=\"time\" required=\"true\" readonly=\"true\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evento"]) ? $context["evento"] : null), "horaInicio", array(), "array"), "html", null, true);
        echo "\"/>
                </div>
\t\t\t\t
                <div class=\"form-group\">
                    <input type=\"hidden\" class=\"form\" id=\"username\" name=\"username\" size=\"25\" type=\"text\" readonly=\"true\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alerta"]) ? $context["alerta"] : null), "username", array(), "array"), "html", null, true);
        echo "\">
                </div>
\t\t\t\t<div class=\"form-group\">
                    <input type=\"hidden\" class=\"form\" id=\"idAlerta\" name=\"idAlerta\" size=\"25\" type=\"text\" readonly=\"true\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alerta"]) ? $context["alerta"] : null), "idAlerta", array(), "array"), "html", null, true);
        echo "\">
                </div>
        <br>

        <a class=\"form-link\" href='";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["volver"]) ? $context["volver"] : null), "html", null, true);
        echo "'>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Volver", array(), "array"), "html", null, true);
        echo "</a>
        </form>

    </div>
";
    }

    public function getTemplateName()
    {
        return "AlertaShow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 39,  100 => 35,  94 => 32,  87 => 28,  83 => 27,  76 => 23,  72 => 22,  65 => 18,  61 => 17,  54 => 13,  50 => 12,  43 => 8,  38 => 5,  35 => 4,  29 => 3,);
    }
}
