<?php

/* ./layout.html.twig */
class __TwigTemplate_15f1701579bd1d5197e67a7893494d3923c99c1683c99fd8d46c017fafc3341c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
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
        // line 13
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo "./img/logoUO.png";
        echo "\" />
    </head>
    <body>
        ";
        // line 16
        $this->displayBlock('header', $context, $blocks);
        // line 82
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 83
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 130
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 147
        echo "    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Layout";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link href=\"";
        echo "./css/bootstrap.min.css";
        echo "\" type=\"text/css\" rel=\"stylesheet\">
            <link href=\"";
        // line 8
        echo "./css/responsive-slider.css";
        echo "\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo "./css/animate.css";
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo "./css/font-awesome.min.css";
        echo "\">
            <link href=\"";
        // line 11
        echo "./css/style.css";
        echo "\" rel=\"stylesheet\">
        ";
    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        // line 17
        echo "        <header>
            <div class=\"container\">
                <div clas=\"logo\">
                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                            <div class=\"navbar-header\">
\t\t\t\t\t\t\t\t\t<img src=\"./img/LogoUO.png\" width=\"350\" height=\"200\" />
                            </div>
                            <div>
                                <br>
                                <div style=\"float:right;\" class=\"menu\" >
                                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                                        ";
        // line 28
        if (array_key_exists("session", $context)) {
            // line 29
            echo "                                            ";
            if ((!array_key_exists("filas", $context))) {
                // line 30
                echo "                                                ";
                echo "Error en la consulta sobre la base de datos";
                echo "
                                            ";
            } else {
                // line 32
                echo "                                                ";
                $context["precondition"] = true;
                // line 33
                echo "                                                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["filas"]) ? $context["filas"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["fila"]) {
                    // line 34
                    echo "                                                    ";
                    $context["funcionalidad"] = $this->getAttribute($context["fila"], "categoriaFuncionalidad", array(), "array");
                    // line 35
                    echo "                                                        ";
                    if (((isset($context["funcionalidad"]) ? $context["funcionalidad"] : null) == "Gestion Usuarios")) {
                        // line 36
                        echo "                                                            ";
                        if (((isset($context["userLogin"]) ? $context["userLogin"] : null) == 1)) {
                            // line 37
                            echo "                                                                <li><a style=\"font-size:15px;\" href=\"../Controllers/USUARIO_Controller.php\">";
                            echo twig_escape_filter($this->env, ((isset($context["strings_"]) ? $context["strings_"] : null) . $this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "IDIOMA", array()), "Gestión de Usuarios", array(), "array")), "html", null, true);
                            echo "</a></li>
                                                            ";
                        }
                        // line 39
                        echo "                                                        ";
                    } else {
                        echo "    
                                                            ";
                        // line 40
                        if (((isset($context["funcionalidad"]) ? $context["funcionalidad"] : null) == "Gestion Asignaturas")) {
                            // line 41
                            echo "                                                                <li class=\"nav-item dropdown\">
                                                                    <a style=\"font-size:15px;\" class=\"nav-link dropdown-toggle\" href=\"\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                            // line 42
                            echo twig_escape_filter($this->env, ((isset($context["strings_"]) ? $context["strings_"] : null) . $this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "IDIOMA", array()), "Gestión de Asignaturas", array(), "array")), "html", null, true);
                            echo " </a>
                                                                    <div align='center' class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                                                        <a class=\"dropdown-item\" href=\"../Controllers/CURSO_Controller.php\">";
                            // line 44
                            echo twig_escape_filter($this->env, ((isset($context["strings_"]) ? $context["strings_"] : null) . $this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "IDIOMA", array()), "Gestionar", array(), "array")), "html", null, true);
                            echo "</a><br>
                                                                        <a class=\"dropdown-item\" href=\"../Controllers/ASIGNATURA_Controller.php\">";
                            // line 45
                            echo twig_escape_filter($this->env, ((isset($context["strings_"]) ? $context["strings_"] : null) . $this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "IDIOMA", array()), "Información", array(), "array")), "html", null, true);
                            echo "</a>
                                                                    </div>
                                                                </li>\t\t
                                                            ";
                        } else {
                            // line 48
                            echo "    
                                                                ";
                            // line 49
                            if (((isset($context["funcionalidad"]) ? $context["funcionalidad"] : null) == "Gestion Eventos")) {
                                // line 50
                                echo "                                                                    <li><a style=\"font-size:15px;\" href=\"../Controllers/ALERTA_Controller.php\">";
                                echo twig_escape_filter($this->env, ((isset($context["strings_"]) ? $context["strings_"] : null) . $this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "IDIOMA", array()), "Gestión de Eventos", array(), "array")), "html", null, true);
                                echo "</a></li>
                                                                ";
                            } else {
                                // line 52
                                echo "                                                                ";
                            }
                            // line 53
                            echo "                                                            ";
                        }
                        echo " 
                                                        ";
                    }
                    // line 55
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fila'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "                                            ";
            }
            // line 57
            echo "                                            ";
            if (((isset($context["userLogin"]) ? $context["userLogin"] : null) == 2)) {
                // line 58
                echo "                                            <li>
                                                <a style=\"font-size:15px;\" href=\"../Functions/Acceso.php?username=";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "login", array()), "html", null, true);
                echo "&amp;password=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "pass", array()), "html", null, true);
                echo "&amp;IDIOMA=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "IDIOMA", array()), "html", null, true);
                echo "&amp;wk=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "semana", array()), "html", null, true);
                echo "&amp;contador=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "contador", array()), "html", null, true);
                echo "&amp;curso=0&amp;accion=Login\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Calendario", array(), "array"), "html", null, true);
                echo "</a><br>
                                            </li>
                                            ";
            }
            // line 62
            echo "                                            <li class=\"nav-item dropdown\">
                                                <a class=\"nav-link dropdown-toggle\" href=\"\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
            // line 63
            echo twig_escape_filter($this->env, ((isset($context["strings_"]) ? $context["strings_"] : null) . $this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "IDIOMA", array()), "Cuenta", array(), "array")), "html", null, true);
            echo "</a>
                                                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                                    <a class=\"dropdown-item\" href=\"../Controllers/USUARIO_Controller.php?username=";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "login", array()), "html", null, true);
            echo "&amp;accion=";
            echo twig_escape_filter($this->env, ((isset($context["strings_"]) ? $context["strings_"] : null) . $this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "IDIOMA", array()), "Ver", array(), "array")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((isset($context["strings_"]) ? $context["strings_"] : null) . $this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "IDIOMA", array()), "Mi Perfil", array(), "array")), "html", null, true);
            echo "</a><br>
                                                    <a class=\"dropdown-item\" href=\"../Functions/Desconectar.php\">";
            // line 66
            echo twig_escape_filter($this->env, ((isset($context["strings_"]) ? $context["strings_"] : null) . $this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "IDIOMA", array()), "Cerrar Sesión", array(), "array")), "html", null, true);
            echo "</a> <br>
                                                </div>
                                            </li>                                         
                                        ";
        } else {
            // line 70
            echo "                                            <br><br><li role=\"presentation\" class=\"active\"><a href=\"./Functions/Conectar.php\" class=\"m1\">Iniciar Sesion</a></li>       
                                            <br><br><li role=\"presentation\" class=\"active\"><a href=\"./Functions/Registrar.php\" class=\"m1\">Registrar</a></li>
                                        ";
        }
        // line 73
        echo "                                    </ul>
                                </div>
                                <br>
                            </div>
                    </nav>
                </div>
            </div>
        </header>
        ";
    }

    // line 82
    public function block_body($context, array $blocks = array())
    {
    }

    // line 83
    public function block_footer($context, array $blocks = array())
    {
        // line 84
        echo "        <footer>
            <div class=\"container\" >
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        <div class=\"widget\">
                            <h5 class=\"widgetheading\">Acerca de UniOrganizer</h5>\t\t\t\t\t\t
                            <p>Aplicación para la facilitar la gestión y organización a estudiantes universitarios.</p>\t\t\t\t\t\t
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"widget\">
                            <h5 class=\"widgetheading\">Contacto</h5>
                            <ul class=\"link-list\">
                                <li><a target=\"_blank\" href=\"https://www.google.es/maps/place/Campus+Ourense/@42.3449233,-7.8554787,15z/data=!4m5!3m4!1s0x0:0xbf4fd0b3ac19bfea!8m2!3d42.3439349!4d-7.8573355\"><img src=\"./img/gps.png\" width=\"20px\" height=\"20px\"></a></li>
                                <li><a href=\"#\">987353839</a></li>
                                <li><a href=\"#\">uniorganizerapplication@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
                    
            <div class=\"sub-footer\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <ul class=\"social-network\">
                                <li><a href=\"#\" data-placement=\"top\" title=\"Facebook\"><img src=\"./img/Facebook.png\" width=\"20px\" height=\"20px\"></a></li>
                                <li><a href=\"#\" data-placement=\"top\" title=\"Twitter\"><img src=\"./img/Twitter.png\" width=\"20px\" height=\"20px\"></a></li>
                                <li><a href=\"#\" data-placement=\"top\" title=\"Linkedin\"><img src=\"./img/Linkedin.png\" width=\"20px\" height=\"20px\"></a></li>
                            </ul>
                        </div>
                        <div class=\"col-lg-12\">
                            <div class=\"copyright\">
                                <p>
                                    <span>&amp;copy;UniOrganier 2018 - All right reserved. By </span><a href=\"\" target=\"_blank\">UniOrganizer SL</a>
                                </p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </footer>
        ";
    }

    // line 130
    public function block_javascripts($context, array $blocks = array())
    {
        // line 131
        echo "            <script type=\"text/javascript\" src=\"./js/validate.js\"></script>
            <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
            <script src=\"./js/responsive-slider.js\"></script>
            <script src=\"./js/wow.min.js\"></script>
            <script type=\"text/javascript\" src=\"./js/fliplightbox.min.js\"></script>
            <script type=\"text/javascript\">\$('body').flipLightBox()</script>
            <script>
            wow = new WOW(
            {
            
                }\t) 
                .init();
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "./layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 131,  316 => 130,  267 => 84,  264 => 83,  259 => 82,  247 => 73,  242 => 70,  235 => 66,  227 => 65,  222 => 63,  219 => 62,  203 => 59,  200 => 58,  197 => 57,  194 => 56,  188 => 55,  182 => 53,  179 => 52,  173 => 50,  171 => 49,  168 => 48,  161 => 45,  157 => 44,  152 => 42,  149 => 41,  147 => 40,  142 => 39,  136 => 37,  133 => 36,  130 => 35,  127 => 34,  122 => 33,  119 => 32,  113 => 30,  110 => 29,  108 => 28,  95 => 17,  92 => 16,  86 => 11,  82 => 10,  78 => 9,  74 => 8,  69 => 7,  66 => 6,  60 => 5,  55 => 147,  52 => 130,  49 => 83,  46 => 82,  44 => 16,  37 => 13,  35 => 6,  31 => 5,  25 => 1,);
    }
}
