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
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo "../img/logoUO.png";
        echo "\" />
    </head>
    <body>
                <section class=\"container\">
                    <section class=\"login-form\">
                        <form id=\"form\" name=\"form\" method=\"post\" action=\"../Functions/Registro.php\" role=\"registrar\" >
                            <input onchange=\"return valida_envia_username()\" type=\"text\" id=\"username\" name=\"username\" placeholder=\"";
        // line 17
        echo twig_escape_filter($this->env, ((isset($context["strings_"]) ? $context["strings_"] : null) . $this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "IDIOMA", array()), "username", array(), "array")), "html", null, true);
        echo "*\" required class=\"form-control input-lg\"  />
                            <input onchange=\"return valida_envia_password()\" type=\"password\" id=\"password\" name=\"password\" placeholder=\"";
        // line 18
        echo twig_escape_filter($this->env, ((isset($context["strings_"]) ? $context["strings_"] : null) . $this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "IDIOMA", array()), "password", array(), "array")), "html", null, true);
        echo "*\" required class=\"form-control input-lg\"  />
\t\t\t\t\t\t\t<input onchange=\"return valida_envia_nombre()\" type=\"text\" id=\"nombre\" name=\"nombre\" placeholder=\"";
        // line 19
        echo twig_escape_filter($this->env, ((isset($context["strings_"]) ? $context["strings_"] : null) . $this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "IDIOMA", array()), "nombre", array(), "array")), "html", null, true);
        echo "*\" required class=\"form-control input-lg\"  />
                            <input onchange=\"return valida_envia_apellidos()\" type=\"text\" id=\"apellidos\" name=\"apellidos\" placeholder=\"";
        // line 20
        echo twig_escape_filter($this->env, ((isset($context["strings_"]) ? $context["strings_"] : null) . $this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "IDIOMA", array()), "apellidos", array(), "array")), "html", null, true);
        echo "*\" required class=\"form-control input-lg\"  />
\t\t\t\t\t\t\t<input onchange=\"return valida_envia_dni()\" type=\"text\" id=\"dni\" name=\"dni\" placeholder=\"";
        // line 21
        echo twig_escape_filter($this->env, ((isset($context["strings_"]) ? $context["strings_"] : null) . $this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "IDIOMA", array()), "dni", array(), "array")), "html", null, true);
        echo "*\" required class=\"form-control input-lg\"  />
                            <input onchange=\"return valida_envia_fechaNac()\" type=\"date\" id=\"fechaNac\" name=\"fechaNac\" placeholder=\"";
        // line 22
        echo twig_escape_filter($this->env, ((isset($context["strings_"]) ? $context["strings_"] : null) . $this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "IDIOMA", array()), "fechaNac", array(), "array")), "html", null, true);
        echo "*\" required class=\"form-control input-lg\"  />
\t\t\t\t\t\t\t<input onchange=\"return valida_envia_niu()\" type=\"int\" id=\"niu\" name=\"niu\" size=\"12\"  placeholder=\"";
        // line 23
        echo twig_escape_filter($this->env, ((isset($context["strings_"]) ? $context["strings_"] : null) . $this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "IDIOMA", array()), "niu", array(), "array")), "html", null, true);
        echo "*\" required class=\"form-control input-lg\"  />
                            <input onchange=\"return valida_envia_email()\" type=\"email\" id=\"email\" name=\"email\" placeholder=\"";
        // line 24
        echo twig_escape_filter($this->env, ((isset($context["strings_"]) ? $context["strings_"] : null) . $this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "IDIOMA", array()), "email", array(), "array")), "html", null, true);
        echo "*\" required class=\"form-control input-lg\"  />
\t\t\t\t\t\t\t<input type=\"hidden\" id=\"tipoUsuario\" name=\"tipoUsuario\" size=\"10\" type=\"int\" required=\"true\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["numTipo"]) ? $context["numTipo"] : null), "html", null, true);
        echo "\" readonly=\"true\"/>

                                <p>
\t\t\t\t\t\t\t\t\t<select name=\"IDIOMA\">
                                        <option value=\"Castellano\">Castellano</option>
                                        <option value=\"Galego\">Galego</option>
                                        <option value=\"English\">English</option>
                                    </select>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<input type='submit' onclick=\"return valida_envia_USUARIO()\" name='accion'  value=\"";
        // line 34
        echo twig_escape_filter($this->env, ((isset($context["strings_"]) ? $context["strings_"] : null) . $this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "IDIOMA", array()), "Registrar", array(), "array")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<a href='../index.php'>";
        // line 35
        echo twig_escape_filter($this->env, ((isset($context["strings_"]) ? $context["strings_"] : null) . $this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "IDIOMA", array()), "Volver", array(), "array")), "html", null, true);
        echo " </a>                         

                        </form>
                    </section>
                </section>
        ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
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

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        // line 41
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
        return array (  128 => 41,  125 => 40,  116 => 7,  113 => 6,  107 => 5,  102 => 46,  100 => 40,  92 => 35,  88 => 34,  76 => 25,  72 => 24,  68 => 23,  64 => 22,  60 => 21,  56 => 20,  52 => 19,  48 => 18,  44 => 17,  34 => 11,  32 => 6,  28 => 5,  22 => 1,);
    }
}
