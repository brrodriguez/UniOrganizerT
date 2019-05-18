<?php

/* EventoDelete.html.twig */
class __TwigTemplate_0e0acfbddbe300b3bde4606282dee7c9149e5cccf4dce9794ea8c5897c95ea90 extends Twig_Template
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
        echo "Evento Delete";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t<div class=\"row\" style=\"clear:both;\">
        <div class=\"container\">
            <form  id=\"form\" name=\"form\" action='EVENTO_Controller.php'  method='post'   enctype=\"multipart/form-data\">
                <div class=\"form-group\" >
                    <label class=\"control-label\" >";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Borrar Evento", array(), "array"), "html", null, true);
        echo "</label><br>
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "asuntoEvento", array(), "array"), "html", null, true);
        echo "</label><br>
                     <input class=\"form\" id=\"asuntoEvento\" name=\"asuntoEvento\"  size=\"50\" readonly=\"true\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "asuntoEvento", array(), "array"), "html", null, true);
        echo "\">
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "descripcionEvento", array(), "array"), "html", null, true);
        echo "</label><br>
                    <textarea rows=\"8\" cols=\"60\" name=\"descripcionEvento\" readonly=\"true\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "descripcionEvento", array(), "array"), "html", null, true);
        echo "</textarea>
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "fecha", array(), "array"), "html", null, true);
        echo "</label><br>
                     <input class=\"form\" id=\"dia\" name=\"dia\"  size=\"50\" readonly=\"true\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "dia", array(), "array"), "html", null, true);
        echo "\">
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "HoraInicio", array(), "array"), "html", null, true);
        echo "</label><br>
                     <input class=\"form\" id=\"horaInicio\" name=\"horaInicio\"  size=\"50\" readonly=\"true\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "horaInicio", array(), "array"), "html", null, true);
        echo "\">
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "HoraFin", array(), "array"), "html", null, true);
        echo "</label><br>
                     <input class=\"form\" id=\"horaFin\" name=\"horaFin\"  size=\"50\" readonly=\"true\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "horaFin", array(), "array"), "html", null, true);
        echo "\">
                </div>


                <div class=\"form-group\">
                    <input type=\"hidden\" class=\"form\" id=\"username\" name=\"username\" size=\"25\" type=\"text\" readonly=\"true\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "username", array(), "array"), "html", null, true);
        echo "\">
                </div>
                 <div class=\"form-group\">
                    <input type=\"hidden\" class=\"form\" id=\"idEvento\" name=\"idEvento\" size=\"25\" type=\"text\" readonly=\"true\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), "idEvento", array(), "array"), "html", null, true);
        echo "\">
                </div>
                <br>
                <button type='submit' class=\"btn btn-primary\" name='accion' value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Borrar", array(), "array"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Borrar", array(), "array"), "html", null, true);
        echo "</button>
                <a class=\"form-link\" href='";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["volver"]) ? $context["volver"] : null), "html", null, true);
        echo " '>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Volver", array(), "array"), "html", null, true);
        echo " </a>
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "EventoDelete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 46,  119 => 45,  113 => 42,  107 => 39,  99 => 34,  95 => 33,  88 => 29,  84 => 28,  77 => 24,  73 => 23,  66 => 19,  62 => 18,  55 => 14,  51 => 13,  44 => 9,  38 => 5,  35 => 4,  29 => 3,);
    }
}
