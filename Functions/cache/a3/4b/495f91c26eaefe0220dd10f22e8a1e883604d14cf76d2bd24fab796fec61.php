<?php

/* Mensaje2.html.twig */
class __TwigTemplate_a34b495f91c26eaefe0220dd10f22e8a1e883604d14cf76d2bd24fab796fec61 extends Twig_Template
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
        echo "Mensaje";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"row\" style=\"clear:both;\">
\t\t<div class=\"container\">
            <br>
            <h2><div align=\"center\"><font color=\"#088A4B\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), (isset($context["respuesta"]) ? $context["respuesta"] : null), array(), "array"), "html", null, true);
        echo "</font></div></h2>
            <br>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Mensaje2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  38 => 5,  35 => 4,  29 => 3,);
    }
}
