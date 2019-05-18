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
        echo "\t    <div class=\"row\" style=\"clear:both;\">
\t\t\t<div class=\"container\">
            <form method=\"POST\" action=\"\" id=\"frmAlertas\">
                <div align=\"center\" >
                    <ul class=\"nav\">
                        <li style=\"margin-right:40px;margin-top:7px;\">
                            <a href='USUARIO_Controller.php?accion=";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Insertar", array(), "array"), "html", null, true);
        echo "&amp;user=admin'><img src=\"../img/admin.jpg\" width=\"40px\" height=\"40px\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "addAdministrador", array(), "array"), "html", null, true);
        echo "</a>
                        </li>
                        <li style=\"margin-right:40px;\">
                            <button type=\"submit\" class=\"btn btn-white\" onclick=this.form.action=\"../Controllers/USUARIO_Controller.php?accion=";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Borrar", array(), "array"), "html", null, true);
        echo "\" style=\"font-size:15px;\"><img src=\"../img/eliminar2.png\" width=\"40px\" height=\"40px\">  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "eliminarSelec", array(), "array"), "html", null, true);
        echo "</img></button>
                        </li><br>
                    </ul><br>
                    <table class=\"table\">
                        <thead class=\"thead-dark\">
                            <tr>
                                <th scope=\"col\"></th>
                                ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lista"]) ? $context["lista"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["titulo"]) {
            // line 22
            echo "                                    <th scope=\"col\">
                                    ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), $context["titulo"], array(), "array"), "html", null, true);
            echo "
                                    </th>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['titulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                                <th scope=\"col\"></th>
\t\t\t\t\t            <th scope=\"col\"></th>
                            </tr>
                        </thead>
                        <tbody>
                                ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datos"]) ? $context["datos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["dato"]) {
            // line 32
            echo "                                    <tr>
                                        <th><input type=\"checkbox\" name=\"eliminar[]\" value=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "0", array(), "array"), "html", null, true);
            echo "\"></th>
                                        <th><a href='USUARIO_Controller.php?username=";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "0", array(), "array"), "html", null, true);
            echo "&amp;accion=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Ver", array(), "array"), "html", null, true);
            echo "'><font color=\"#088A4B\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "0", array(), "array"), "html", null, true);
            echo "</font></a></th>
                                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "2", array(), "array"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "3", array(), "array"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "4", array(), "array"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "5", array(), "array"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "6", array(), "array"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "7", array(), "array"), "html", null, true);
            echo "</td>

                                        <td><a href='USUARIO_Controller.php?username=";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "username", array(), "array"), "html", null, true);
            echo "&amp;accion=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Modificar", array(), "array"), "html", null, true);
            echo "'><img src=\"../img/modify.png\" width=\"40px\" height=\"40px\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Modificar", array(), "array"), "html", null, true);
            echo "</img></a></td>
                                        <td><a href=\"javascript:;\" onclick=\"alert('USUARIO_Controller.php?username=";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "username", array(), "array"), "html", null, true);
            echo "&amp;accion=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Borrar", array(), "array"), "html", null, true);
            echo "&amp;nombre=nombre')\"><img src=\"../img/Delete.png\" width=\"40px\" height=\"40px\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Borrar", array(), "array"), "html", null, true);
            echo "</img></a></td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo " 
                        </tbody>
                    </table>
                </div>
            </form>
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
        return array (  154 => 45,  141 => 43,  133 => 42,  128 => 40,  124 => 39,  120 => 38,  116 => 37,  112 => 36,  108 => 35,  100 => 34,  96 => 33,  93 => 32,  89 => 31,  82 => 26,  73 => 23,  70 => 22,  66 => 21,  54 => 14,  46 => 11,  38 => 5,  35 => 4,  29 => 3,);
    }
}
