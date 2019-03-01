<?php

/* UsuarioEdit.html.twig */
class __TwigTemplate_fe113f6a7e1e1a7afe1f21a69c445a4fd368b19cc732a05700ff488834a81b37 extends Twig_Template
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
        echo "Usuario Edit";
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Modificar Usuario", array(), "array"), "html", null, true);
        echo "</label><br>
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "username", array(), "array"), "html", null, true);
        echo "</label><br>
                    <input class=\"form\" id=\"username\" name=\"username\" size=\"25\" type=\"text\" required=\"true\" readonly=\"true\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "username", array(), "array"), "html", null, true);
        echo "\">
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "password", array(), "array"), "html", null, true);
        echo "</label><br>
                    <input class=\"form\" id=\"password\" name=\"password\" size=\"25\" type=\"password\" required=\"true\" readonly='true' value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "password", array(), "array"), "html", null, true);
        echo "\"/>
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "newPassword", array(), "array"), "html", null, true);
        echo "</label><br>
                    <input class=\"form\" id=\"newPassword\" name=\"newPassword\" size=\"25\" type=\"password\"/>
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "nombre", array(), "array"), "html", null, true);
        echo "</label><br>
                    <input class=\"form\" id=\"nombre\" name=\"nombre\" size=\"50\" type=\"text\" required=\"true\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "nombre", array(), "array"), "html", null, true);
        echo "\">
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "apellidos", array(), "array"), "html", null, true);
        echo "</label><br>
                    <input class=\"form\" id=\"apellidos\" name=\"apellidos\" size=\"50\" type=\"text\" required=\"true\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "apellidos", array(), "array"), "html", null, true);
        echo "\">
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "dni", array(), "array"), "html", null, true);
        echo "</label><br>
                    <input class=\"form\" id=\"dni\" name=\"dni\" size=\"9\" type=\"text\" required=\"true\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "dni", array(), "array"), "html", null, true);
        echo "\">
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "fechaNac", array(), "array"), "html", null, true);
        echo "</label><br>
                    <input class=\"form\" id=\"fechaNac\" name=\"fechaNac\" type=\"date\" required=\"true\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "fechaNac", array(), "array"), "html", null, true);
        echo "\">
                </div>


                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "niu", array(), "array"), "html", null, true);
        echo "</label><br>
                    <input class=\"form\" id=\"niu\" name=\"niu\" size=\"20\" type=\"text\" required=\"true\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "niu", array(), "array"), "html", null, true);
        echo "\">
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "email", array(), "array"), "html", null, true);
        echo "</label><br>
                    <input class=\"form\" id=\"email\" name=\"email\" size=\"50\" type=\"email\" required=\"true\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "email", array(), "array"), "html", null, true);
        echo "\">
                </div>
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
                    <input type=\"hidden\" id=\"tipoUsuario\" name=\"tipoUsuario\" size=\"1\" type=\"int\" required=\"true\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "tipoUsuario", array(), "array"), "html", null, true);
        echo "\">
                </div>
\t\t\t\t

                <br>

                <input type = 'submit'  onclick=\"return valida_envia_USUARIO()\" name = 'accion' value = '";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Modificar", array(), "array"), "html", null, true);
        echo "'  onclick=\"return valida_envia_USUARIO()\" >
                <a class=\"form-link\" href='";
        // line 65
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
        return "UsuarioEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 65,  156 => 64,  147 => 58,  140 => 54,  136 => 53,  129 => 49,  125 => 48,  117 => 43,  113 => 42,  106 => 38,  102 => 37,  95 => 33,  91 => 32,  84 => 28,  80 => 27,  72 => 22,  65 => 18,  61 => 17,  54 => 13,  50 => 12,  43 => 8,  38 => 5,  35 => 4,  29 => 3,);
    }
}
