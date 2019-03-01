<?php

/* Login.html.twig */
class __TwigTemplate_4ced2fa7c1358888bca97bc7da3cec564d54a81a20db4c9b78789b5a052f0433 extends Twig_Template
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
                <form method=\"post\" action=\"../Functions/Acceso.php\" role=\"login\">
                    <img src=\"../img/LogoUO.png\" class=\"img-responsive\" alt=\"\" width=\"300\" height=\"150\" />
                    <input type=\"text\" name=\"username\" placeholder=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "username", array(), "array"), "html", null, true);
        echo "\" required class=\"form-control input-lg\" id=\"username\" />
                    <input type=\"password\" name=\"password\" placeholder=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "password", array(), "array"), "html", null, true);
        echo "\" required class=\"form-control input-lg\" id=\"password\" />
                    <button type=\"submit\" name=\"accion\" class=\"btn btn-lg btn-primary btn-block\" value=\"Login\">Sign in</button>
                    <div>
                        <p>
\t\t\t\t\t\t\t<select name=\"IDIOMA\">
                                <option value=\"Castellano\">Castellano</option>
                                <option value=\"Galego\">Galego</option>
                                <option value=\"English\">English</option>
                            </select>
\t\t\t\t\t\t</p>
                        <div aling='center'>
\t\t\t\t\t\t\t<a href='../Functions/index.php'>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Volver", array(), "array"), "html", null, true);
        echo "</a>
                        </div>
                    </div>



                </form>
            </section>
        </section>
        ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Login";
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

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        // line 40
        echo "            <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "Login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 40,  100 => 39,  91 => 7,  88 => 6,  82 => 5,  77 => 44,  75 => 39,  63 => 30,  49 => 19,  45 => 18,  34 => 11,  32 => 6,  28 => 5,  22 => 1,);
    }
}
