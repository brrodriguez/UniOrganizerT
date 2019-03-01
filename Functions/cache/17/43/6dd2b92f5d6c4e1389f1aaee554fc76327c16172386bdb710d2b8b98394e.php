<?php

/* Default.html.twig */
class __TwigTemplate_17436dd2b92f5d6c4e1389f1aaee554fc76327c16172386bdb710d2b8b98394e extends Twig_Template
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
        echo "Principal";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t\t";
        if (((isset($context["userTipo"]) ? $context["userTipo"] : null) == 2)) {
            // line 6
            echo "\t\t";
            // line 170
            echo "\t\t\t";
            // line 504
            echo "      ";
        }
    }

    public function getTemplateName()
    {
        return "Default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 504,  43 => 170,  41 => 6,  38 => 5,  35 => 4,  29 => 3,);
    }
}
