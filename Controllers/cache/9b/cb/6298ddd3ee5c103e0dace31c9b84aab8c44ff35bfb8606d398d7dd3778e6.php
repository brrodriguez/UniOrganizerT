<?php

/* UsuarioDelete.html.twig */
class __TwigTemplate_9bcb6298ddd3ee5c103e0dace31c9b84aab8c44ff35bfb8606d398d7dd3778e6 extends Twig_Template
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
        echo "Usuario Delete";
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Eliminar Usuario", array(), "array"), "html", null, true);
        echo "</label><br>
                </div>
               
                
                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "username", array(), "array"), "html", null, true);
        echo "</label><br>
                    <input class=\"form\" id=\"username\" name=\"username\" size=\"25\" type=\"text\" readonly=\"true\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "username", array(), "array"), "html", null, true);
        echo "\">
                </div>
                
                 <div class=\"form-group\">
                    <input type='hidden' class=\"form\" id=\"username\" name=\"password\" size=\"25\" type=\"text\" readonly=\"true\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "password", array(), "array"), "html", null, true);
        echo "\">
                </div>
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "tipoUsuario", array(), "array"), "html", null, true);
        echo "</label><br>
                    <input class=\"form\" id=\"tipoUsuario\" name=\"tipoUsuario\" size=\"10\" type=\"int\" readonly=\"true\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "tipoUsuario", array(), "array"), "html", null, true);
        echo "\">
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "nombre", array(), "array"), "html", null, true);
        echo "</label><br>
                    <input class=\"form\" id=\"nombre\" name=\"nombre\" size=\"50\" type=\"text\" readonly=\"true\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "nombre", array(), "array"), "html", null, true);
        echo "\">
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "apellidos", array(), "array"), "html", null, true);
        echo "</label><br>
                    <input class=\"form\" id=\"apellidos\" name=\"apellidos\" size=\"50\" type=\"text\" readonly=\"true\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "apellidos", array(), "array"), "html", null, true);
        echo "\">
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "dni", array(), "array"), "html", null, true);
        echo "</label><br>
                    <input class=\"form\" id=\"dni\" name=\"dni\" size=\"9\" type=\"text\" readonly=\"true\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "dni", array(), "array"), "html", null, true);
        echo "\">
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "fechaNac", array(), "array"), "html", null, true);
        echo "</label><br>
                    <input class=\"form\" id=\"fechaNac\" name=\"fechaNac\" type=\"date\" readonly=\"true\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "fechaNac", array(), "array"), "html", null, true);
        echo "\">
                </div>


                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "niu", array(), "array"), "html", null, true);
        echo "</label><br>
                    <input class=\"form\" id=\"niu\" name=\"niu\" size=\"20\" type=\"text\" readonly=\"true\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "niu", array(), "array"), "html", null, true);
        echo "\">
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "email", array(), "array"), "html", null, true);
        echo "</label><br>
                    <input class=\"form\" id=\"email\" name=\"email\" size=\"50\" type=\"email\" readonly=\"true\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "email", array(), "array"), "html", null, true);
        echo "\">
                </div>


                <br>

                <input type = 'submit' name = 'accion' value = '";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Borrar", array(), "array"), "html", null, true);
        echo "'>
                <a class=\"form-link\" href='";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["volver"]) ? $context["volver"] : null), "html", null, true);
        echo " '>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Volver", array(), "array"), "html", null, true);
        echo " </a>
            </form>

        </div>
";
    }

    public function getTemplateName()
    {
        return "UsuarioDelete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 61,  149 => 60,  140 => 54,  136 => 53,  129 => 49,  125 => 48,  117 => 43,  113 => 42,  106 => 38,  102 => 37,  95 => 33,  91 => 32,  84 => 28,  80 => 27,  73 => 23,  69 => 22,  62 => 18,  55 => 14,  51 => 13,  43 => 8,  38 => 5,  35 => 4,  29 => 3,);
    }
}
