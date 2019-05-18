<?php

/* UsuarioAdd.html.twig */
class __TwigTemplate_f9c0fb258cebdd7c833306901a1a8f0d915337ae5173357c10ef14dddf019104 extends Twig_Template
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
        echo "Usuario Add";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t<div class=\"row\" style=\"clear:both;\">
\t\t<div class=\"container\">
            <form  id=\"form\" name=\"form\" action='USUARIO_Controller.php?user=admin'  method='post'   enctype=\"multipart/form-data\">

                <div class=\"col-lg-4\" style=\"float:left;\">
                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "username", array(), "array"), "html", null, true);
        echo "*</label><br>
                        <input onchange=\"return valida_envia_username()\" class=\"form\" id=\"username\" name=\"username\" size=\"20\" type=\"text\" required=\"true\"/>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "password", array(), "array"), "html", null, true);
        echo "*</label><br>
                        <input onchange=\"return valida_envia_password()\" class=\"form\" id=\"password\" name=\"password\" size=\"20\" type=\"password\" required=\"true\"/>
                    </div>   

                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "nombre", array(), "array"), "html", null, true);
        echo "*</label><br>
                        <input onchange=\"return valida_envia_nombre()\" class=\"form\" id=\"nombre\" name=\"nombre\" size=\"50\" type=\"text\" required=\"true\"/>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "apellidos", array(), "array"), "html", null, true);
        echo "*</label><br>
                        <input onchange=\"return valida_envia_apellidos()\" class=\"form\" id=\"apellidos\" name=\"apellidos\" size=\"50\" type=\"text\" required=\"true\"/>
                    </div>
                </div>

                <div class=\"col-lg-4\" style=\"float:right;\">
                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "dni", array(), "array"), "html", null, true);
        echo "*</label><br>
                        <input onchange=\"return valida_envia_dni()\" class=\"form\" id=\"dni\" name=\"dni\" size=\"9\" type=\"text\" required=\"true\"/>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "fechaNac", array(), "array"), "html", null, true);
        echo "*</label><br>
                        <input onchange=\"return valida_envia_fechaNac()\" class=\"form\" id=\"fechaNac\" name=\"fechaNac\" type=\"date\" required=\"true\"/>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "email", array(), "array"), "html", null, true);
        echo "*</label><br>
                        <input onchange=\"return valida_envia_email()\" class=\"form\" id=\"email\" name=\"email\" size=\"50\" type=\"email\" required=\"true\"/>
                    </div>
                </div>
\t\t\t\t
\t\t\t\t<div class=\"form-group\" style=\"clear:both;\">
                    <input type=\"hidden\" id=\"tipoUsuario\" name=\"tipoUsuario\" size=\"10\" type=\"text\" required=\"true\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["tipoUsuario"]) ? $context["tipoUsuario"] : null), "html", null, true);
        echo "\" readonly=\"true\"/>
                </div>
\t\t\t
                <button type='submit' class=\"btn btn-primary\" onclick=\"return valida_envia_USUARIO()\" name='accion' value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Insertar", array(), "array"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Insertar", array(), "array"), "html", null, true);
        echo "</button>
                <a class=\"form-link\" href=\"";
        // line 53
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
        return "UsuarioAdd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 53,  111 => 52,  105 => 49,  96 => 43,  88 => 38,  80 => 33,  70 => 26,  62 => 21,  54 => 16,  46 => 11,  38 => 5,  35 => 4,  29 => 3,);
    }
}
