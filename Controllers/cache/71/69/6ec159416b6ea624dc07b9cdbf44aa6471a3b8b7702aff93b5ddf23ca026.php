<?php

/* UsuarioShowall.html.twig */
class __TwigTemplate_71696ec159416b6ea624dc07b9cdbf44aa6471a3b8b7702aff93b5ddf23ca026 extends Twig_Template
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
        echo "Usuario Showall";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t<div class=\"container\">
            <div class=\"container\">
                <div align='center'>
\t\t\t\t\t<a href='USUARIO_Controller.php?accion=";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Insertar", array(), "array"), "html", null, true);
        echo "&amp;user=admin'><img src=\"../img/admin.jpg\" width=\"54px\" height=\"54px\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "addAdministrador", array(), "array"), "html", null, true);
        echo "</a>
\t\t\t\t\t
         
                    <table class=\"table\">
                        <thead class=\"thead-dark\">
                            <tr>
                                ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lista"]) ? $context["lista"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["titulo"]) {
            // line 15
            echo "                                    <th>
                                    ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), $context["titulo"], array(), "array"), "html", null, true);
            echo "
                                    </th>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['titulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                            </tr>
                         </thead>
                        <tbody>
                                ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datos"]) ? $context["datos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["dato"]) {
            // line 23
            echo "                                    <tr>
                                    ";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["dato"]);
            foreach ($context['_seq'] as $context["clave"] => $context["valor"]) {
                // line 25
                echo "                                        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["lista"]) ? $context["lista"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                    // line 26
                    echo "                                            ";
                    if (($context["clave"] == $context["key"])) {
                        // line 27
                        echo "                                                <td>
                                                ";
                        // line 28
                        if (($context["clave"] == "username")) {
                            // line 29
                            echo "                                                    <a href='USUARIO_Controller.php?username=";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "username", array(), "array"), "html", null, true);
                            echo "&amp;accion=";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Ver", array(), "array"), "html", null, true);
                            echo "'><font color=\"#088A4B\">";
                            echo twig_escape_filter($this->env, $context["valor"], "html", null, true);
                            echo "</font></a>
                                                ";
                        } else {
                            // line 31
                            echo "                                                    ";
                            echo twig_escape_filter($this->env, $context["valor"], "html", null, true);
                            echo "
                                                ";
                        }
                        // line 33
                        echo "                                                </td>
                                            ";
                    }
                    // line 35
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "       
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['clave'], $context['valor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "      
                                    <td><button type=\"button\" class=\"btn btn-info\"><a href='USUARIO_Controller.php?username=";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "username", array(), "array"), "html", null, true);
            echo "&amp;accion=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Modificar", array(), "array"), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Modificar", array(), "array"), "html", null, true);
            echo "</a></button></td>
                                    <td><button type=\"button\" class=\"btn btn-danger\"><a href='USUARIO_Controller.php?username=";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "username", array(), "array"), "html", null, true);
            echo "&amp;accion=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Borrar", array(), "array"), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Borrar", array(), "array"), "html", null, true);
            echo "</a></button></td>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo " 
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "UsuarioShowall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 39,  142 => 38,  134 => 37,  131 => 36,  119 => 35,  115 => 33,  109 => 31,  99 => 29,  97 => 28,  94 => 27,  91 => 26,  86 => 25,  82 => 24,  79 => 23,  75 => 22,  70 => 19,  61 => 16,  58 => 15,  54 => 14,  43 => 8,  38 => 5,  35 => 4,  29 => 3,);
    }
}
