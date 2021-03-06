<?php

/* Registro.html.twig */
class __TwigTemplate_87ab0134672ce8cb776665bfdec34f45ff5e0af35571849718bf660c57ab8596 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"../img/logoUO.png\" />
    </head>
    <body>
                <section class=\"container\">
                    <section class=\"login-form\">
                        <form id=\"form\" name=\"form\" method=\"post\" action=\"../Functions/Registro.php\" role=\"registrar\" >
                            <input onchange=\"return valida_envia_username()\" type=\"text\" id=\"username\" name=\"username\" placeholder=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "username", array(), "array"), "html", null, true);
        echo "*\" required class=\"form-control input-lg\"  />
                            <input onchange=\"return valida_envia_password()\" type=\"password\" id=\"password\" name=\"password\" placeholder=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "password", array(), "array"), "html", null, true);
        echo "*\" required class=\"form-control input-lg\"  />
\t\t\t\t\t\t\t<input onchange=\"return valida_envia_nombre()\" type=\"text\" id=\"nombre\" name=\"nombre\" placeholder=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "nombre", array(), "array"), "html", null, true);
        echo "*\" required class=\"form-control input-lg\"  />
                            <input onchange=\"return valida_envia_apellidos()\" type=\"text\" id=\"apellidos\" name=\"apellidos\" placeholder=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "apellidos", array(), "array"), "html", null, true);
        echo "*\" required class=\"form-control input-lg\"  />
\t\t\t\t\t\t\t<input onchange=\"return valida_envia_dni()\" type=\"text\" id=\"dni\" name=\"dni\" placeholder=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "dni", array(), "array"), "html", null, true);
        echo "*\" required class=\"form-control input-lg\"  />
                            <input onchange=\"return valida_envia_fechaNac()\" type=\"date\" id=\"fechaNac\" name=\"fechaNac\" placeholder=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "fechaNac", array(), "array"), "html", null, true);
        echo "*\" required class=\"form-control input-lg\"  />
                            <input onchange=\"return valida_envia_email()\" type=\"email\" id=\"email\" name=\"email\" placeholder=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "email", array(), "array"), "html", null, true);
        echo "*\" required class=\"form-control input-lg\"  />
\t\t\t\t\t\t\t<input type=\"hidden\" id=\"tipoUsuario\" name=\"tipoUsuario\" size=\"10\" type=\"int\" required=\"true\" value=\"2\" readonly=\"true\"/>

                                <p>
\t\t\t\t\t\t\t\t\t<select name=\"IDIOMA\">
                                        <option value=\"Castellano\">Castellano</option>
                                        <option value=\"English\">English</option>
                                    </select>
\t\t\t\t\t\t\t\t</p>
                            <button type='submit' class=\"btn btn-primary\" onclick=\"return valida_envia_USUARIO()\" name='accion' value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Registrar", array(), "array"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Registrar", array(), "array"), "html", null, true);
        echo "</button>
\t\t\t\t\t\t\t<a href='../Functions/index.php'>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Volver", array(), "array"), "html", null, true);
        echo " </a>                         

                        </form>
                    </section>
                </section>
        ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Registro";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link href=\"";
        echo "../css/bootstrap.min.css";
        echo "\" type=\"text/css\" rel=\"stylesheet\">
            <link href=\"http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900\" rel=\"stylesheet\" type=\"text/css\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/stylesLogin.css\" />
        ";
    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        // line 39
        echo "            <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
            <script type=\"text/javascript\" src=\"../js/validate.js\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "Registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 39,  117 => 38,  108 => 7,  105 => 6,  99 => 5,  94 => 44,  92 => 38,  84 => 33,  78 => 32,  66 => 23,  62 => 22,  58 => 21,  54 => 20,  50 => 19,  46 => 18,  42 => 17,  34 => 11,  32 => 6,  28 => 5,  22 => 1,);
    }
}
