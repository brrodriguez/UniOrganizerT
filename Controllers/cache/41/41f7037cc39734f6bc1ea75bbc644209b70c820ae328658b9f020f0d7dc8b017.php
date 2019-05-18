<?php

/* layout.html.twig */
class __TwigTemplate_2611caa553aa8ab0cbc6379447166b099c00e047cd00d9a73c39fbba6126dbbe extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
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
        if ((isset($context["respuesta"]) || array_key_exists("respuesta", $context))) {
            // line 46
            echo "            <script language=\"javascript\">
                function info(){   
                    swal({
                        text: \"";
            // line 49
            echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["strings"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[($context["respuesta"] ?? null)] ?? null) : null), "html", null, true);
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
        echo twig_escape_filter($this->env, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["strings"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["tituloPU"] ?? null) : null), "html", null, true);
        echo "\",
                        text: \"";
        // line 60
        echo twig_escape_filter($this->env, (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = ($context["strings"] ?? null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["textoPU"] ?? null) : null), "html", null, true);
        echo "\",
                        icon: \"warning\",
                        buttons: [\"";
        // line 62
        echo twig_escape_filter($this->env, (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = ($context["strings"] ?? null)) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9["botonCancel"] ?? null) : null), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, (($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = ($context["strings"] ?? null)) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217["botonOk"] ?? null) : null), "html", null, true);
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
    public function block_title($context, array $blocks = [])
    {
        echo "Layout";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
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
    public function block_javascripts($context, array $blocks = [])
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
    public function block_header($context, array $blocks = [])
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
        if ((($context["userTipo"] ?? null) == 2)) {
            // line 83
            echo "                    ";
            if ((($context["numEventos"] ?? null) > 0)) {
                // line 84
                echo "                        ";
                if ((($context["numEventos"] ?? null) > 1)) {
                    // line 85
                    echo "                            <div class=\"alert alert-warning\" role=\"alert\" style=\"width:30%; margin:0 auto;float: left;margin-left:60px;\">
                                <a href='../Functions/index.php'>Tienes ";
                    // line 86
                    echo twig_escape_filter($this->env, ($context["numEventos"] ?? null), "html", null, true);
                    echo " eventos en los próximos 2 días.</a>
                            </div>
                            ";
                } else {
                    // line 89
                    echo "                            <div class=\"alert alert-warning\" role=\"alert\" style=\"width:30%; margin:0 auto;float: left;margin-left:60px;\">
                                <a href='../Functions/index.php'>Tienes ";
                    // line 90
                    echo twig_escape_filter($this->env, ($context["numEventos"] ?? null), "html", null, true);
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
                    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary pull-right\" style=\"border-radius: 5px;\"> 
                        <div class=\"collapse navbar-collapse pull-right\" id=\"navbarSupportedContent\">
                            <ul class=\"navbar-nav pull-right\" style=\"margin-top:15px; margin-bottom:15px;\">
                            ";
        // line 100
        if ((isset($context["session"]) || array_key_exists("session", $context))) {
            // line 101
            echo "                                ";
            if ((($context["userTipo"] ?? null) == 2)) {
                // line 102
                echo "                                    <li class=\"nav-item active\" >
                                        <a class=\"nav-link\" href=\"../Functions/index.php\">";
                // line 103
                echo twig_escape_filter($this->env, (($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = ($context["strings"] ?? null)) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105["Inicio"] ?? null) : null), "html", null, true);
                echo "</a>
                                    </li>
                                ";
            }
            // line 106
            echo "                                ";
            if ((null === ($context["funcionalidades"] ?? null))) {
                // line 107
                echo "                                    ";
                echo "Error en la consulta sobre la base de datos";
                echo "
                                ";
            } else {
                // line 109
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["funcionalidades"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["fila"]) {
                    // line 110
                    echo "                                        ";
                    if (($context["fila"] == "Gestion Usuarios")) {
                        // line 111
                        echo "                                            ";
                        if ((($context["userTipo"] ?? null) == 1)) {
                            // line 112
                            echo "                                                <li class=\"nav-item active\" >
                                                    <a class=\"nav-link\" href=\"../Controllers/USUARIO_Controller.php\">";
                            // line 113
                            echo twig_escape_filter($this->env, (($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = ($context["strings"] ?? null)) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779["Gestión de Usuarios"] ?? null) : null), "html", null, true);
                            echo "</a>
                                                </li>
                                            ";
                        }
                        // line 116
                        echo "                                        ";
                    } elseif (($context["fila"] == "Gestion Calendarios")) {
                        // line 117
                        echo "                                            ";
                        if ((($context["userTipo"] ?? null) == 2)) {
                            // line 118
                            echo "                                                <li class=\"nav-item active\" >
                                                    <a class=\"nav-link\" href=\"../Controllers/CALENDARIO_Controller.php\">";
                            // line 119
                            echo twig_escape_filter($this->env, (($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = ($context["strings"] ?? null)) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1["Gestión de Calendarios"] ?? null) : null), "html", null, true);
                            echo "</a>
                                                </li>
                                            ";
                        } else {
                            // line 122
                            echo "                                                <li class=\"nav-item dropdown active\" >
                                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                            // line 123
                            echo twig_escape_filter($this->env, (($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 = ($context["strings"] ?? null)) && is_array($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0) || $__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 instanceof ArrayAccess ? ($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0["Gestionar"] ?? null) : null), "html", null, true);
                            echo "</a>
                                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                                        <a class=\"dropdown-item\" href=\"../Controllers/CALENDARIO_Controller.php\">";
                            // line 125
                            echo twig_escape_filter($this->env, (($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 = ($context["strings"] ?? null)) && is_array($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866) || $__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 instanceof ArrayAccess ? ($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866["Gestión de Calendarios"] ?? null) : null), "html", null, true);
                            echo "</a>
                                                        <a class=\"dropdown-item\" href=\"../Controllers/ASIGNATURA_Controller.php\">";
                            // line 126
                            echo twig_escape_filter($this->env, (($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f = ($context["strings"] ?? null)) && is_array($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f) || $__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f instanceof ArrayAccess ? ($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f["Gestión de Asignaturas"] ?? null) : null), "html", null, true);
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
                        echo twig_escape_filter($this->env, (($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 = ($context["strings"] ?? null)) && is_array($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7) || $__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 instanceof ArrayAccess ? ($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7["Gestión de Eventos"] ?? null) : null), "html", null, true);
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
            echo twig_escape_filter($this->env, (($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 = ($context["strings"] ?? null)) && is_array($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289) || $__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 instanceof ArrayAccess ? ($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289["Cuenta"] ?? null) : null), "html", null, true);
            echo "</a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                        <a class=\"dropdown-item\" href=\"../Controllers/USUARIO_Controller.php?username=";
            // line 140
            echo twig_escape_filter($this->env, (($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 = ($context["session"] ?? null)) && is_array($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18) || $__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 instanceof ArrayAccess ? ($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18["login"] ?? null) : null), "html", null, true);
            echo "&amp;accion=";
            echo twig_escape_filter($this->env, (($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018 = ($context["strings"] ?? null)) && is_array($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018) || $__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018 instanceof ArrayAccess ? ($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018["Ver"] ?? null) : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413 = ($context["strings"] ?? null)) && is_array($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413) || $__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413 instanceof ArrayAccess ? ($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413["Mi Perfil"] ?? null) : null), "html", null, true);
            echo "</a>
                                        <a class=\"dropdown-item\" href=\"../Functions/Desconectar.php\">";
            // line 141
            echo twig_escape_filter($this->env, (($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7 = ($context["strings"] ?? null)) && is_array($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7) || $__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7 instanceof ArrayAccess ? ($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7["Cerrar Sesión"] ?? null) : null), "html", null, true);
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
    public function block_body($context, array $blocks = [])
    {
    }

    // line 158
    public function block_footer($context, array $blocks = [])
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
        if ((isset($context["IDIOMA"]) || array_key_exists("IDIOMA", $context))) {
            // line 166
            echo "                            <div class=\"col-lg-4\">
                                <div class=\"widget\">
                                    <h7 class=\"widgetheading\" style=\"margin-top:0px;\">";
            // line 168
            echo twig_escape_filter($this->env, (($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c = ($context["strings"] ?? null)) && is_array($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c) || $__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c instanceof ArrayAccess ? ($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c["Acerca de UniOrganizer"] ?? null) : null), "html", null, true);
            echo "</h7>\t\t\t\t\t\t
                                    <p><font size=\"2\">";
            // line 169
            echo twig_escape_filter($this->env, (($__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40 = ($context["strings"] ?? null)) && is_array($__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40) || $__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40 instanceof ArrayAccess ? ($__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40["Aplicación para facilitar la gestión y organización a estudiantes universitarios."] ?? null) : null), "html", null, true);
            echo "</font></p>\t\t\t\t\t\t
                                </div>
                            </div>
                            <div class=\"col-lg-4\">
                                <div class=\"widget\">
                                    <h7 class=\"widgetheading\" style=\"margin-left: 40px;margin-top:0px;\">";
            // line 174
            echo twig_escape_filter($this->env, (($__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79 = ($context["strings"] ?? null)) && is_array($__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79) || $__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79 instanceof ArrayAccess ? ($__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79["Contacto"] ?? null) : null), "html", null, true);
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
        return array (  450 => 200,  431 => 183,  419 => 174,  411 => 169,  407 => 168,  403 => 166,  401 => 165,  393 => 159,  390 => 158,  385 => 156,  375 => 148,  370 => 145,  363 => 141,  355 => 140,  350 => 138,  347 => 137,  344 => 136,  338 => 135,  332 => 132,  329 => 131,  326 => 130,  319 => 126,  315 => 125,  310 => 123,  307 => 122,  301 => 119,  298 => 118,  295 => 117,  292 => 116,  286 => 113,  283 => 112,  280 => 111,  277 => 110,  272 => 109,  266 => 107,  263 => 106,  257 => 103,  254 => 102,  251 => 101,  249 => 100,  242 => 95,  239 => 94,  236 => 93,  230 => 90,  227 => 89,  221 => 86,  218 => 85,  215 => 84,  212 => 83,  210 => 82,  202 => 76,  199 => 75,  174 => 21,  171 => 20,  165 => 17,  161 => 16,  157 => 15,  153 => 14,  149 => 13,  145 => 12,  141 => 11,  137 => 10,  133 => 9,  128 => 8,  125 => 7,  119 => 5,  114 => 217,  112 => 158,  109 => 157,  107 => 156,  104 => 155,  102 => 75,  84 => 62,  79 => 60,  75 => 59,  70 => 56,  60 => 49,  55 => 46,  53 => 45,  49 => 43,  47 => 20,  42 => 19,  40 => 7,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-type\" content=\"text/html; charset=utf-8\" />
        <title>{% block title %}Layout{% endblock %}</title>
        
        {% block stylesheets %}
            <link href=\"{{'../css/bootstrap.min.css'}}\" type=\"text/css\" rel=\"stylesheet\">
            <link href=\"{{'../css/responsive-slider.css'}}\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"{{'../css/animate.css'}}\">
            <link href=\"{{'../css/style.css'}}\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"{{'https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css'}}\" integrity=\"sha256-BJ/G+e+y7bQdrYkS2RBTyNfBHpA9IuGaPmf9htub5MQ=\" crossorigin=\"anonymous\" />
            <link rel=\"stylesheet\" href=\"{{'../css/style-calendar.css'}}\" />
            <link href=\"{{'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css'}}\" rel=\"stylesheet\"/>
            <link href='{{\"https://use.fontawesome.com/releases/v5.0.6/css/all.css\"}}' rel='stylesheet'>
\t\t\t<link href='{{\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\"}}' rel='stylesheet' />
            <link rel=\"stylesheet\" href='{{\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\"}}' integrity=\"sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay\" crossorigin=\"anonymous\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{'../img/logoUO.png'}}\" />
        {% block javascripts %}
            <script src=\"https://code.jquery.com/jquery-1.11.1.js\"  integrity=\"sha256-MCmDSoIMecFUw3f1LicZ/D/yonYAoHrgiep/3pCH9rw=\"  crossorigin=\"anonymous\"></script>
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
        {% endblock %}
    </head>
    <body onload=\"info();\">
        {% if respuesta is defined %}
            <script language=\"javascript\">
                function info(){   
                    swal({
                        text: \"{{ strings[respuesta] }}\",
                        icon: \"info\",
                        button: \"Ok\",
                    });
                }
            </script> 
        {% endif %}
        <script language=\"javascript\">
                function alert(url){   
                    swal({
                        title: \"{{ strings['tituloPU'] }}\",
                        text: \"{{ strings['textoPU'] }}\",
                        icon: \"warning\",
                        buttons: [\"{{ strings['botonCancel'] }}\", \"{{ strings['botonOk'] }}\"],
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
        {% block header %}
        <header>
            <div class=\"container\">
                <div class=\"navbar-header pull-left\">
                    <a class=\"navbar-brand\" href=\"../Functions/index.php\"><img src=\"../img/LogoUO.png\" width=\"250\" height=\"100\"/></a>
                </div>
                <br>
                {% if userTipo == 2 %}
                    {% if numEventos > 0 %}
                        {% if numEventos > 1 %}
                            <div class=\"alert alert-warning\" role=\"alert\" style=\"width:30%; margin:0 auto;float: left;margin-left:60px;\">
                                <a href='../Functions/index.php'>Tienes {{ numEventos }} eventos en los próximos 2 días.</a>
                            </div>
                            {% else %}
                            <div class=\"alert alert-warning\" role=\"alert\" style=\"width:30%; margin:0 auto;float: left;margin-left:60px;\">
                                <a href='../Functions/index.php'>Tienes {{ numEventos }} evento en los próximos 2 días.</a>
                            </div>
                        {% endif %}
                    {% endif %}
                {% endif %}

                <div class=\"navbar-header pull-right\">
                    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary pull-right\" style=\"border-radius: 5px;\"> 
                        <div class=\"collapse navbar-collapse pull-right\" id=\"navbarSupportedContent\">
                            <ul class=\"navbar-nav pull-right\" style=\"margin-top:15px; margin-bottom:15px;\">
                            {% if session is defined %}
                                {% if userTipo == 2 %}
                                    <li class=\"nav-item active\" >
                                        <a class=\"nav-link\" href=\"../Functions/index.php\">{{ strings['Inicio'] }}</a>
                                    </li>
                                {% endif %}
                                {% if funcionalidades is null %}
                                    {{ 'Error en la consulta sobre la base de datos' }}
                                {% else %}
                                    {% for fila in funcionalidades %}
                                        {% if fila == \"Gestion Usuarios\" %}
                                            {% if userTipo == 1 %}
                                                <li class=\"nav-item active\" >
                                                    <a class=\"nav-link\" href=\"../Controllers/USUARIO_Controller.php\">{{ strings['Gestión de Usuarios'] }}</a>
                                                </li>
                                            {% endif %}
                                        {% elseif fila == \"Gestion Calendarios\" %}
                                            {% if userTipo == 2 %}
                                                <li class=\"nav-item active\" >
                                                    <a class=\"nav-link\" href=\"../Controllers/CALENDARIO_Controller.php\">{{ strings['Gestión de Calendarios'] }}</a>
                                                </li>
                                            {% else %}
                                                <li class=\"nav-item dropdown active\" >
                                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ strings['Gestionar'] }}</a>
                                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                                        <a class=\"dropdown-item\" href=\"../Controllers/CALENDARIO_Controller.php\">{{ strings['Gestión de Calendarios'] }}</a>
                                                        <a class=\"dropdown-item\" href=\"../Controllers/ASIGNATURA_Controller.php\">{{ strings['Gestión de Asignaturas'] }}</a>
                                                    </div>
                                                </li>
                                            {% endif %}
                                        {% elseif fila == \"Gestion Eventos\" %}
                                            <li class=\"nav-item active\" >
                                                <a class=\"nav-link\" href=\"../Controllers/EVENTO_Controller.php\">{{ strings['Gestión de Eventos'] }}</a>
                                            </li>
                                        {% endif %}
                                    {% endfor %}
                                {% endif %}
                                <li class=\"nav-item dropdown active\" >
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ strings['Cuenta'] }}</a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                        <a class=\"dropdown-item\" href=\"../Controllers/USUARIO_Controller.php?username={{ session['login'] }}&amp;accion={{ strings['Ver'] }}\">{{ strings['Mi Perfil'] }}</a>
                                        <a class=\"dropdown-item\" href=\"../Functions/Desconectar.php\">{{ strings['Cerrar Sesión'] }}</a>
                                    </div>
                                </li>
                            {% else %}
                                <li class=\"nav-item active\" style=\"margin-right:20px;\"><button type=\"button\" class=\"btn btn-outline-light\"><a class=\"\"btn btn-outline-light\"\" href=\"../Functions/Conectar.php\" ><FONT COLOR=\"white\">Iniciar Sesión</FONT></a></button></li>
                                <li class=\"nav-item active\" ><button type=\"button\" class=\"btn btn-outline-light\"><a href=\"../Functions/Registrar.php\" ><FONT COLOR=\"white\">Registrar</FONT></a></button></li>
                            {% endif %}
                            </ul>
                        </div>
                    </nav>
                </div>  
            </div>
        </header>
        {% endblock %}
        
        {% block body %}{% endblock %}

        {% block footer %}
        <footer>    
            <div class=\"footer\" style=\"clear:both;height:50px;\">  
            </div>       
            <div class=\"sub-footer\" style=\"clear:both;height:250px;\">
                <div class=\"container\" >
                    <div class=\"row\">
                        {% if IDIOMA is defined %}
                            <div class=\"col-lg-4\">
                                <div class=\"widget\">
                                    <h7 class=\"widgetheading\" style=\"margin-top:0px;\">{{ strings['Acerca de UniOrganizer'] }}</h7>\t\t\t\t\t\t
                                    <p><font size=\"2\">{{ strings['Aplicación para facilitar la gestión y organización a estudiantes universitarios.'] }}</font></p>\t\t\t\t\t\t
                                </div>
                            </div>
                            <div class=\"col-lg-4\">
                                <div class=\"widget\">
                                    <h7 class=\"widgetheading\" style=\"margin-left: 40px;margin-top:0px;\">{{ strings['Contacto'] }}</h7>
                                    <ul class=\"link-list\">
                                        <li><a target=\"_blank\" href=\"https://www.google.es/maps/place/Campus+Ourense/@42.3449233,-7.8554787,15z/data=!4m5!3m4!1s0x0:0xbf4fd0b3ac19bfea!8m2!3d42.3439349!4d-7.8573355\"><img src=\"../img/gps.png\" width=\"20px\" height=\"20px\"></a></li>
                                        <li><a href=\"#\"><font size=\"2\">987353839</font></a></li>
                                        <li><a href=\"#\"><font size=\"2\">uniorganizerapplication@gmail.com</font></a></li>
                                    </ul>
                                </div>
                            </div>
                        {% else %}
                            <div class=\"col-lg-4\">
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
                        {% endif %}
                        <div class=\"col-lg-4\">
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
        {% endblock %}
    </body>
</html>", "layout.html.twig", "C:\\xampp\\htdocs\\UniOrganizerTB\\UniOrganizer\\templates\\layout.html.twig");
    }
}
