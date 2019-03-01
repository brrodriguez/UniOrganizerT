<?php

/* Default.html.twig */
class __TwigTemplate_c4948c055293b7739d85e13e70ab255397af3c777e604ec4f5e30caecde24aba extends Twig_Template
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
        if (((isset($context["userLogin"]) ? $context["userLogin"] : null) == 2)) {
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
