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
        echo "\t<div class=\"row\" style=\"clear:both;\">
\t\t<div class=\"container\">
            <form  id=\"form\" name=\"form\" action='USUARIO_Controller.php?user=user'  method='post'   enctype=\"multipart/form-data\">

                <div class=\"col-lg-4\" style=\"float:left;\">
                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "username", array(), "array"), "html", null, true);
        echo "</label><br>
                        <input class=\"form\" id=\"username\" name=\"username\" size=\"25\" type=\"text\" required=\"true\" readonly=\"true\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "username", array(), "array"), "html", null, true);
        echo "\">
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "password", array(), "array"), "html", null, true);
        echo "</label><br>
                        <input class=\"form\" id=\"password\" name=\"password\" size=\"25\" type=\"password\" required=\"true\" readonly='true' value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "password", array(), "array"), "html", null, true);
        echo "\"/>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "newPassword", array(), "array"), "html", null, true);
        echo "</label><br>
                        <input class=\"form\" id=\"newPassword\" name=\"newPassword\" size=\"25\" type=\"password\"/>
                    </div>
                
                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "nombre", array(), "array"), "html", null, true);
        echo "</label><br>
                        <input class=\"form\" id=\"nombre\" name=\"nombre\" size=\"50\" type=\"text\" required=\"true\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "nombre", array(), "array"), "html", null, true);
        echo "\">
                    </div>
                </div>

                <div class=\"col-lg-4\" style=\"float:right;\">
                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "apellidos", array(), "array"), "html", null, true);
        echo "</label><br>
                        <input class=\"form\" id=\"apellidos\" name=\"apellidos\" size=\"50\" type=\"text\" required=\"true\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "apellidos", array(), "array"), "html", null, true);
        echo "\">
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "dni", array(), "array"), "html", null, true);
        echo "</label><br>
                        <input class=\"form\" id=\"dni\" name=\"dni\" size=\"9\" type=\"text\" required=\"true\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "dni", array(), "array"), "html", null, true);
        echo "\">
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "fechaNac", array(), "array"), "html", null, true);
        echo "</label><br>
                        <input class=\"form\" id=\"fechaNac\" name=\"fechaNac\" type=\"date\" required=\"true\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "fechaNac", array(), "array"), "html", null, true);
        echo "\">
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "email", array(), "array"), "html", null, true);
        echo "</label><br>
                        <input class=\"form\" id=\"email\" name=\"email\" size=\"50\" type=\"email\" required=\"true\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "email", array(), "array"), "html", null, true);
        echo "\">
                    </div>
                </div>
\t\t\t\t
\t\t\t\t<div class=\"form-group\" style=\"clear:both;\">
                    <input type=\"hidden\" id=\"tipoUsuario\" name=\"tipoUsuario\" size=\"1\" type=\"int\" required=\"true\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["valores"]) ? $context["valores"] : null), "tipoUsuario", array(), "array"), "html", null, true);
        echo "\">
                </div>
\t\t\t\t

                <br>

                <button type='submit' class=\"btn btn-primary\" onclick=\"return valida_envia_USUARIO()\" name='accion' value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Modificar", array(), "array"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Modificar", array(), "array"), "html", null, true);
        echo "</button>
                <a class=\"form-link\" href='";
        // line 61
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
        return "UsuarioEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 61,  143 => 60,  134 => 54,  126 => 49,  122 => 48,  115 => 44,  111 => 43,  104 => 39,  100 => 38,  93 => 34,  89 => 33,  80 => 27,  76 => 26,  68 => 21,  61 => 17,  57 => 16,  50 => 12,  46 => 11,  38 => 5,  35 => 4,  29 => 3,);
    }
}
