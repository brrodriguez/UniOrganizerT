<?php

/* AlertaFilter.html.twig */
class __TwigTemplate_d59f0797944c913050b6daaf600781a5b31b95396eeecf80ba2c2c6c3ae993eb extends Twig_Template
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
        echo "Alerta Filter";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t<div class=\"row\" style=\"clear:both;\">
\t\t<div class=\"container\">
           <form method=\"POST\" action=\"../Controllers/ALERTA_Controller.php?accion=filtrar\">
                <div class=\"form-group\" >
                    <label class=\"control-label\" >";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Filtrar Alertas", array(), "array"), "html", null, true);
        echo "</label><br>
                </div>
\t\t\t\t
                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "asuntoAlerta", array(), "array"), "html", null, true);
        echo "</label><br>
                    <input onchange=\"return valida_envia_asuntoAlerta()\" class=\"form\" id=\"asuntoAlerta\" name=\"asuntoAlerta\" size=\"50\" type=\"text\"/>
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "curso", array(), "array"), "html", null, true);
        echo "</label><br>
                    <input class=\"form\" id=\"curso\" name=\"curso\" type=\"text\"/>
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "username", array(), "array"), "html", null, true);
        echo "</label><br>
                    <input class=\"form\" id=\"username\" name=\"username\" type=\"text\"/>
                </div>
\t\t\t\t
                <button type=\"submit\" class=\"btn btn-primary\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "filtrar", array(), "array"), "html", null, true);
        echo "</button>
\t\t\t\t<a class=\"form-link\" href=\"";
        // line 28
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
        return "AlertaFilter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 28,  74 => 27,  67 => 23,  59 => 18,  51 => 13,  44 => 9,  38 => 5,  35 => 4,  29 => 3,);
    }
}
