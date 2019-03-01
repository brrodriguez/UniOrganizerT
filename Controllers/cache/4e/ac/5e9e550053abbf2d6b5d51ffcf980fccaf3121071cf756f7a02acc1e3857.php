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
        echo "Usuario Show";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t<div class=\"container\" >
            <form  id=\"form\" name=\"form\" action='USUARIO_Controller.php?user=user'  method='post'   enctype=\"multipart/form-data\">
                <div class=\"form-group\" >
                    <label class=\"control-label\" >";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Ver Usuario", array(), "array"), "html", null, true);
        echo "</label><br>
                </div>
                
                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "username", array(), "array"), "html", null, true);
        echo "</label><br>
                    <input class=\"form\" id=\"username\" name=\"username\" size=\"25\" type=\"text\" readonly=\"true\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "username", array(), "array"), "html", null, true);
        echo "\">
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "nombre", array(), "array"), "html", null, true);
        echo "</label><br>
                    <input class=\"form\" id=\"nombre\" name=\"nombre\" size=\"50\" type=\"text\" readonly=\"true\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "nombre", array(), "array"), "html", null, true);
        echo "\">
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "apellidos", array(), "array"), "html", null, true);
        echo "</label><br>
                    <input class=\"form\" id=\"apellidos\" name=\"apellidos\" size=\"50\" type=\"text\" readonly=\"true\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "apellidos", array(), "array"), "html", null, true);
        echo "\">
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "dni", array(), "array"), "html", null, true);
        echo "</label><br>
                    <input class=\"form\" id=\"dni\" name=\"dni\" size=\"9\" type=\"text\" readonly=\"true\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "dni", array(), "array"), "html", null, true);
        echo "\">
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "fechaNac", array(), "array"), "html", null, true);
        echo "</label><br>
                    <input class=\"form\" id=\"fechaNac\" name=\"fechaNac\" type=\"date\" readonly=\"true\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "fechaNac", array(), "array"), "html", null, true);
        echo "\">
                </div>


                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "niu", array(), "array"), "html", null, true);
        echo "</label><br>
                    <input class=\"form\" id=\"niu\" name=\"niu\" size=\"12\" type=\"text\" readonly=\"true\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "niu", array(), "array"), "html", null, true);
        echo "\">
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "email", array(), "array"), "html", null, true);
        echo "</label><br>
                    <input class=\"form\" id=\"email\" name=\"email\" size=\"50\" type=\"email\" readonly=\"true\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "email", array(), "array"), "html", null, true);
        echo "\">
                </div>
\t\t\t\t
                
                <br>
\t\t\t\t";
        // line 49
        if (((isset($context["userTipo"]) ? $context["userTipo"] : null) == 1)) {
            // line 50
            echo "                <a class=\"form-link\" href='";
            echo twig_escape_filter($this->env, (isset($context["volver"]) ? $context["volver"] : null), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Volver", array(), "array"), "html", null, true);
            echo " </a>
\t\t\t\t";
        }
        // line 52
        echo "            </form>
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
        return array (  139 => 52,  131 => 50,  129 => 49,  121 => 44,  117 => 43,  110 => 39,  106 => 38,  98 => 33,  94 => 32,  87 => 28,  83 => 27,  76 => 23,  72 => 22,  65 => 18,  61 => 17,  54 => 13,  50 => 12,  43 => 8,  38 => 5,  35 => 4,  29 => 3,);
    }
}
