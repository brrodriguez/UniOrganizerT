<?php

/* UsuarioShow.html.twig */
class __TwigTemplate_4eac5e9e550053abbf2d6b5d51ffcf980fccaf3121071cf756f7a02acc1e3857 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Ver Usuario", array(), "array"), "html", null, true);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t<div class=\"row\" style=\"clear:both;\">
\t\t<div class=\"container\">
            <form  id=\"form\" name=\"form\" action='USUARIO_Controller.php?user=user'  method='post'   enctype=\"multipart/form-data\">
                
                <div class=\"col-lg-4\" style=\"float:left;\">
                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "username", array(), "array"), "html", null, true);
        echo "</label><br>
                        <input class=\"form\" id=\"username\" name=\"username\" size=\"50\" type=\"text\" readonly=\"true\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "username", array(), "array"), "html", null, true);
        echo "\">
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "nombre", array(), "array"), "html", null, true);
        echo "</label><br>
                        <input class=\"form\" id=\"nombre\" name=\"nombre\" size=\"50\" type=\"text\" readonly=\"true\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "nombre", array(), "array"), "html", null, true);
        echo "\">
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "apellidos", array(), "array"), "html", null, true);
        echo "</label><br>
                        <input class=\"form\" id=\"apellidos\" name=\"apellidos\" size=\"50\" type=\"text\" readonly=\"true\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "apellidos", array(), "array"), "html", null, true);
        echo "\">
                    </div>
                </div>

                <div class=\"col-lg-4\" style=\"float:right;\">
                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "dni", array(), "array"), "html", null, true);
        echo "</label><br>
                        <input class=\"form\" id=\"dni\" name=\"dni\" size=\"9\" type=\"text\" readonly=\"true\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "dni", array(), "array"), "html", null, true);
        echo "\">
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "fechaNac", array(), "array"), "html", null, true);
        echo "</label><br>
                        <input class=\"form\" id=\"fechaNac\" name=\"fechaNac\" type=\"date\" readonly=\"true\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "fechaNac", array(), "array"), "html", null, true);
        echo "\">
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "email", array(), "array"), "html", null, true);
        echo "</label><br>
                        <input class=\"form\" id=\"email\" name=\"email\" size=\"50\" type=\"email\" readonly=\"true\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "email", array(), "array"), "html", null, true);
        echo "\">
                    </div>
                </div>
\t\t\t\t
                
                <br>
\t\t\t\t";
        // line 45
        if (((isset($context["userTipo"]) ? $context["userTipo"] : null) == 1)) {
            // line 46
            echo "                <div style=\"clear:both;\">
                    <a class=\"form-link\" href='";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["volver"]) ? $context["volver"] : null), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Volver", array(), "array"), "html", null, true);
            echo " </a>
                </div>
\t\t\t\t";
        }
        // line 50
        echo "            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "UsuarioShow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 50,  121 => 47,  118 => 46,  116 => 45,  107 => 39,  103 => 38,  96 => 34,  92 => 33,  85 => 29,  81 => 28,  72 => 22,  68 => 21,  61 => 17,  57 => 16,  50 => 12,  46 => 11,  38 => 5,  35 => 4,  29 => 3,);
    }
}
