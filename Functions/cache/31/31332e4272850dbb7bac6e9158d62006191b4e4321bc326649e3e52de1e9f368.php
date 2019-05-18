<?php

/* DefaultNoLogin.html.twig */
class __TwigTemplate_0c0189b7d3716fafcd4ccb8c54eea42f403b064e548646267c50396fde7d4135 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "DefaultNoLogin.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        echo "UniOrganizer";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "DefaultNoLogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block title %}UniOrganizer{% endblock %}
{% block body %}{% endblock %}", "DefaultNoLogin.html.twig", "C:\\xampp\\htdocs\\UniOrganizerTB\\UniOrganizer\\templates\\DefaultNoLogin.html.twig");
    }
}
