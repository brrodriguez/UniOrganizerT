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
        echo "\t<div class=\"container\" >
            <form  id=\"form\" name=\"form\" action='USUARIO_Controller.php?user=admin'  method='post'   enctype=\"multipart/form-data\">
                <div class=\"form-group\" >
                    <label class=\"control-label\" >";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Insertar Usuario", array(), "array"), "html", null, true);
        echo "</label><br>
                </div>
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

                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "dni", array(), "array"), "html", null, true);
        echo "*</label><br>
                    <input onchange=\"return valida_envia_dni()\" class=\"form\" id=\"dni\" name=\"dni\" size=\"9\" type=\"text\" required=\"true\"/>
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "fechaNac", array(), "array"), "html", null, true);
        echo "*</label><br>
                    <input onchange=\"return valida_envia_fechaNac()\" class=\"form\" id=\"fechaNac\" name=\"fechaNac\" type=\"date\" required=\"true\"/>
                </div>


                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "niu", array(), "array"), "html", null, true);
        echo "*</label><br>
                    <input onchange=\"return valida_envia_niu()\" class=\"form\" id=\"niu\" name=\"niu\" size=\"12\" type=\"text\" required=\"true\"/>
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label\" >";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "email", array(), "array"), "html", null, true);
        echo "*</label><br>
                    <input onchange=\"return valida_envia_email()\" class=\"form\" id=\"email\" name=\"email\" size=\"50\" type=\"email\" required=\"true\"/>
                </div>
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
                    <input type=\"hidden\" id=\"tipoUsuario\" name=\"tipoUsuario\" size=\"10\" type=\"text\" required=\"true\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["tipoUsuario"]) ? $context["tipoUsuario"] : null), "html", null, true);
        echo "\" readonly=\"true\"/>
                </div>
\t\t\t

                <input type='submit' onclick=\"return valida_envia_USUARIO()\" name='accion'  value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Insertar", array(), "array"), "html", null, true);
        echo "\">
                <a class=\"form-link\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["volver"]) ? $context["volver"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Volver", array(), "array"), "html", null, true);
        echo "</a>
            </form>
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
        return array (  125 => 57,  121 => 56,  114 => 52,  106 => 47,  98 => 42,  89 => 36,  81 => 31,  73 => 26,  65 => 21,  57 => 16,  49 => 11,  43 => 8,  38 => 5,  35 => 4,  29 => 3,);
    }
}
