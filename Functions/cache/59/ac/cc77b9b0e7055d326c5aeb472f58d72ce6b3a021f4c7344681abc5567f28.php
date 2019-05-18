<?php

/* layout.html.twig */
class __TwigTemplate_59accc77b9b0e7055d326c5aeb472f58d72ce6b3a021f4c7344681abc5567f28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
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
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo "../img/logoUO.png";
        echo "\" />
        ";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "    </head>
    <body onload=\"info();\">
        ";
        // line 45
        if (array_key_exists("respuesta", $context)) {
            // line 46
            echo "            <script language=\"javascript\">
                function info(){   
                    swal({
                        text: \"";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), (isset($context["respuesta"]) ? $context["respuesta"] : null), array(), "array"), "html", null, true);
            echo "\",
                        icon: \"info\",
                        button: \"Ok\",
                    });
                }
            </script> 
        ";
        }
        // line 56
        echo "        <script language=\"javascript\">
                function alert(url){   
                    swal({
                        title: \"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "tituloPU", array(), "array"), "html", null, true);
        echo "\",
                        text: \"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "textoPU", array(), "array"), "html", null, true);
        echo "\",
                        icon: \"warning\",
                        buttons: [\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "botonCancel", array(), "array"), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "botonOk", array(), "array"), "html", null, true);
        echo "\"],
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            document.location = url;
                            return true;
                        } else {
                            return false;
                        }  
                    });
                }
        </script>
        ";
        // line 75
        $this->displayBlock('header', $context, $blocks);
        // line 155
        echo "        
        ";
        // line 156
        $this->displayBlock('body', $context, $blocks);
        // line 157
        echo "
        ";
        // line 158
        $this->displayBlock('footer', $context, $blocks);
        // line 217
        echo "    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Layout";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "            <link href=\"";
        echo "../css/bootstrap.min.css";
        echo "\" type=\"text/css\" rel=\"stylesheet\">
            <link href=\"";
        // line 9
        echo "../css/responsive-slider.css";
        echo "\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo "../css/animate.css";
        echo "\">
            <link href=\"";
        // line 11
        echo "../css/style.css";
        echo "\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo "https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css";
        echo "\" integrity=\"sha256-BJ/G+e+y7bQdrYkS2RBTyNfBHpA9IuGaPmf9htub5MQ=\" crossorigin=\"anonymous\" />
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo "../css/style-calendar.css";
        echo "\" />
            <link href=\"";
        // line 14
        echo "https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css";
        echo "\" rel=\"stylesheet\"/>
            <link href='";
        // line 15
        echo "https://use.fontawesome.com/releases/v5.0.6/css/all.css";
        echo "' rel='stylesheet'>
\t\t\t<link href='";
        // line 16
        echo "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css";
        echo "' rel='stylesheet' />
            <link rel=\"stylesheet\" href='";
        // line 17
        echo "https://use.fontawesome.com/releases/v5.8.2/css/all.css";
        echo "' integrity=\"sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay\" crossorigin=\"anonymous\">
        ";
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        // line 21
        echo "            <script src=\"https://code.jquery.com/jquery-1.11.1.js\"  integrity=\"sha256-MCmDSoIMecFUw3f1LicZ/D/yonYAoHrgiep/3pCH9rw=\"  crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js\"></script>
            
            <script type=\"text/javascript\" src=\"../js/validate.js\"></script>
            <script src=\"../js/responsive-slider.js\"></script>
            <script src=\"../js/wow.min.js\"></script>
            <script type=\"text/javascript\" src=\"../js/fliplightbox.min.js\"></script>
            <script type=\"text/javascript\">\$('body').flipLightBox()</script>

            <script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>
            
            <script>
            wow = new WOW(
            {
            
                }\t) 
                .init();
            </script>
        ";
    }

    // line 75
    public function block_header($context, array $blocks = array())
    {
        // line 76
        echo "        <header>
            <div class=\"container\">
                <div class=\"navbar-header pull-left\">
                    <a class=\"navbar-brand\" href=\"../Functions/index.php\"><img src=\"../img/LogoUO.png\" width=\"250\" height=\"100\"/></a>
                </div>
                <br>
                ";
        // line 82
        if (((isset($context["userTipo"]) ? $context["userTipo"] : null) == 2)) {
            // line 83
            echo "                    ";
            if (((isset($context["numEventos"]) ? $context["numEventos"] : null) > 0)) {
                // line 84
                echo "                        ";
                if (((isset($context["numEventos"]) ? $context["numEventos"] : null) > 1)) {
                    // line 85
                    echo "                            <div class=\"alert alert-warning\" role=\"alert\" style=\"width:30%; margin:0 auto;float: left;margin-left:60px;\">
                                <a href='../Functions/index.php'>Tienes ";
                    // line 86
                    echo twig_escape_filter($this->env, (isset($context["numEventos"]) ? $context["numEventos"] : null), "html", null, true);
                    echo " eventos en los próximos 2 días.</a>
                            </div>
                            ";
                } else {
                    // line 89
                    echo "                            <div class=\"alert alert-warning\" role=\"alert\" style=\"width:30%; margin:0 auto;float: left;margin-left:60px;\">
                                <a href='../Functions/index.php'>Tienes ";
                    // line 90
                    echo twig_escape_filter($this->env, (isset($context["numEventos"]) ? $context["numEventos"] : null), "html", null, true);
                    echo " evento en los próximos 2 días.</a>
                            </div>
                        ";
                }
                // line 93
                echo "                    ";
            }
            // line 94
            echo "                ";
        }
        // line 95
        echo "
                <div class=\"navbar-header pull-right\">
                    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\" style=\"border-radius: 5px;\"> 
                        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                            <ul class=\"navbar-nav\" style=\"margin-top:15px; margin-bottom:15px;\">
                            ";
        // line 100
        if (array_key_exists("session", $context)) {
            // line 101
            echo "                                ";
            if (((isset($context["userTipo"]) ? $context["userTipo"] : null) == 2)) {
                // line 102
                echo "                                    <li class=\"nav-item active\" >
                                        <a class=\"nav-link\" href=\"../Functions/index.php\">";
                // line 103
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Inicio", array(), "array"), "html", null, true);
                echo "</a>
                                    </li>
                                ";
            }
            // line 106
            echo "                                ";
            if ((null === (isset($context["funcionalidades"]) ? $context["funcionalidades"] : null))) {
                // line 107
                echo "                                    ";
                echo "Error en la consulta sobre la base de datos";
                echo "
                                ";
            } else {
                // line 109
                echo "                                    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["funcionalidades"]) ? $context["funcionalidades"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["fila"]) {
                    // line 110
                    echo "                                        ";
                    if (($context["fila"] == "Gestion Usuarios")) {
                        // line 111
                        echo "                                            ";
                        if (((isset($context["userTipo"]) ? $context["userTipo"] : null) == 1)) {
                            // line 112
                            echo "                                                <li class=\"nav-item active\" >
                                                    <a class=\"nav-link\" href=\"../Controllers/USUARIO_Controller.php\">";
                            // line 113
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Gestión de Usuarios", array(), "array"), "html", null, true);
                            echo "</a>
                                                </li>
                                            ";
                        }
                        // line 116
                        echo "                                        ";
                    } elseif (($context["fila"] == "Gestion Calendarios")) {
                        // line 117
                        echo "                                            ";
                        if (((isset($context["userTipo"]) ? $context["userTipo"] : null) == 2)) {
                            // line 118
                            echo "                                                <li class=\"nav-item active\" >
                                                    <a class=\"nav-link\" href=\"../Controllers/CALENDARIO_Controller.php\">";
                            // line 119
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Gestión de Calendarios", array(), "array"), "html", null, true);
                            echo "</a>
                                                </li>
                                            ";
                        } else {
                            // line 122
                            echo "                                                <li class=\"nav-item dropdown active\" >
                                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                            // line 123
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Gestionar", array(), "array"), "html", null, true);
                            echo "</a>
                                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                                        <a class=\"dropdown-item\" href=\"../Controllers/CALENDARIO_Controller.php\">";
                            // line 125
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Gestión de Calendarios", array(), "array"), "html", null, true);
                            echo "</a>
                                                        <a class=\"dropdown-item\" href=\"../Controllers/ASIGNATURA_Controller.php\">";
                            // line 126
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Gestión de Asignaturas", array(), "array"), "html", null, true);
                            echo "</a>
                                                    </div>
                                                </li>
                                            ";
                        }
                        // line 130
                        echo "                                        ";
                    } elseif (($context["fila"] == "Gestion Eventos")) {
                        // line 131
                        echo "                                            <li class=\"nav-item active\" >
                                                <a class=\"nav-link\" href=\"../Controllers/EVENTO_Controller.php\">";
                        // line 132
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Gestión de Eventos", array(), "array"), "html", null, true);
                        echo "</a>
                                            </li>
                                        ";
                    }
                    // line 135
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fila'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 136
                echo "                                ";
            }
            // line 137
            echo "                                <li class=\"nav-item dropdown active\" >
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Cuenta", array(), "array"), "html", null, true);
            echo "</a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                        <a class=\"dropdown-item\" href=\"../Controllers/USUARIO_Controller.php?username=";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "login", array(), "array"), "html", null, true);
            echo "&amp;accion=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Ver", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Mi Perfil", array(), "array"), "html", null, true);
            echo "</a>
                                        <a class=\"dropdown-item\" href=\"../Functions/Desconectar.php\">";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Cerrar Sesión", array(), "array"), "html", null, true);
            echo "</a>
                                    </div>
                                </li>
                            ";
        } else {
            // line 145
            echo "                                <li class=\"nav-item active\" style=\"margin-right:20px;\"><button type=\"button\" class=\"btn btn-outline-light\"><a class=\"\"btn btn-outline-light\"\" href=\"../Functions/Conectar.php\" ><FONT COLOR=\"white\">Iniciar Sesión</FONT></a></button></li>
                                <li class=\"nav-item active\" ><button type=\"button\" class=\"btn btn-outline-light\"><a href=\"../Functions/Registrar.php\" ><FONT COLOR=\"white\">Registrar</FONT></a></button></li>
                            ";
        }
        // line 148
        echo "                            </ul>
                        </div>
                    </nav>
                </div>  
            </div>
        </header>
        ";
    }

    // line 156
    public function block_body($context, array $blocks = array())
    {
    }

    // line 158
    public function block_footer($context, array $blocks = array())
    {
        // line 159
        echo "        <footer>    
            <div class=\"footer\" style=\"clear:both;height:50px;\">  
            </div>       
            <div class=\"sub-footer\" style=\"clear:both;height:250px;\">
                <div class=\"container\" >
                    <div class=\"row\">
                        ";
        // line 165
        if (array_key_exists("IDIOMA", $context)) {
            // line 166
            echo "                            <div class=\"col-lg-4\">
                                <div class=\"widget\">
                                    <h7 class=\"widgetheading\" style=\"margin-top:0px;\">";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Acerca de UniOrganizer", array(), "array"), "html", null, true);
            echo "</h7>\t\t\t\t\t\t
                                    <p><font size=\"2\">";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Aplicación para facilitar la gestión y organización a estudiantes universitarios.", array(), "array"), "html", null, true);
            echo "</font></p>\t\t\t\t\t\t
                                </div>
                            </div>
                            <div class=\"col-lg-4\">
                                <div class=\"widget\">
                                    <h7 class=\"widgetheading\" style=\"margin-left: 40px;margin-top:0px;\">";
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Contacto", array(), "array"), "html", null, true);
            echo "</h7>
                                    <ul class=\"link-list\">
                                        <li><a target=\"_blank\" href=\"https://www.google.es/maps/place/Campus+Ourense/@42.3449233,-7.8554787,15z/data=!4m5!3m4!1s0x0:0xbf4fd0b3ac19bfea!8m2!3d42.3439349!4d-7.8573355\"><img src=\"../img/gps.png\" width=\"20px\" height=\"20px\"></a></li>
                                        <li><a href=\"#\"><font size=\"2\">987353839</font></a></li>
                                        <li><a href=\"#\"><font size=\"2\">uniorganizerapplication@gmail.com</font></a></li>
                                    </ul>
                                </div>
                            </div>
                        ";
        } else {
            // line 183
            echo "                            <div class=\"col-lg-4\">
                                <div class=\"widget\">
                                    <h7 class=\"widgetheading\" style=\"margin-top:0px;\">Acerca de UniOrganizer</h7>\t\t\t\t\t\t
                                    <p><font size=\"2\">Aplicación para facilitar la gestión y organización a estudiantes universitarios.</font></p>\t\t\t\t\t\t
                                </div>
                            </div>
                            <div class=\"col-lg-4\">
                                <div class=\"widget\">
                                    <h7 class=\"widgetheading\" style=\"margin-left: 40px;margin-top:0px;\">Contacto</h7>
                                    <ul class=\"link-list\">
                                        <li><a target=\"_blank\" href=\"https://www.google.es/maps/place/Campus+Ourense/@42.3449233,-7.8554787,15z/data=!4m5!3m4!1s0x0:0xbf4fd0b3ac19bfea!8m2!3d42.3439349!4d-7.8573355\"><img src=\"../img/gps.png\" width=\"20px\" height=\"20px\"></a></li>
                                        <li><a href=\"#\"><font size=\"2\">987353839</font></a></li>
                                        <li><a href=\"#\"><font size=\"2\">uniorganizerapplication@gmail.com</font></a></li>
                                    </ul>
                                </div>
                            </div>
                        ";
        }
        // line 200
        echo "                        <div class=\"col-lg-4\">
                            <ul class=\"social-network\" style=\"margin-top:60px;\">
                                <li><a href=\"#\" data-placement=\"top\" title=\"Facebook\"><img src=\"../img/Facebook.png\" width=\"20px\" height=\"20px\"></a></li>
                                <li><a href=\"#\" data-placement=\"top\" title=\"Twitter\"><img src=\"../img/Twitter.png\" width=\"20px\" height=\"20px\"></a></li>
                                <li><a href=\"#\" data-placement=\"top\" title=\"Linkedin\"><img src=\"../img/Linkedin.png\" width=\"20px\" height=\"20px\"></a></li>
                            </ul>
                            <div class=\"copyright\">
                                <p><font size=\"2\">
                                    <span>&copy;UniOrganizer 2018 - All right reserved. By </span><a target=\"_blank\">UniOrganizer SL</a>
                                </p></font>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        ";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  446 => 200,  427 => 183,  415 => 174,  407 => 169,  403 => 168,  399 => 166,  397 => 165,  389 => 159,  386 => 158,  381 => 156,  371 => 148,  366 => 145,  359 => 141,  351 => 140,  346 => 138,  343 => 137,  340 => 136,  334 => 135,  328 => 132,  325 => 131,  322 => 130,  315 => 126,  311 => 125,  306 => 123,  303 => 122,  297 => 119,  294 => 118,  291 => 117,  288 => 116,  282 => 113,  279 => 112,  276 => 111,  273 => 110,  268 => 109,  262 => 107,  259 => 106,  253 => 103,  250 => 102,  247 => 101,  245 => 100,  238 => 95,  235 => 94,  232 => 93,  226 => 90,  223 => 89,  217 => 86,  214 => 85,  211 => 84,  208 => 83,  206 => 82,  198 => 76,  195 => 75,  170 => 21,  167 => 20,  161 => 17,  157 => 16,  153 => 15,  149 => 14,  145 => 13,  141 => 12,  137 => 11,  133 => 10,  129 => 9,  124 => 8,  121 => 7,  115 => 5,  110 => 217,  108 => 158,  105 => 157,  103 => 156,  100 => 155,  98 => 75,  80 => 62,  75 => 60,  71 => 59,  66 => 56,  56 => 49,  51 => 46,  49 => 45,  45 => 43,  43 => 20,  38 => 19,  36 => 7,  31 => 5,  25 => 1,);
    }
}
