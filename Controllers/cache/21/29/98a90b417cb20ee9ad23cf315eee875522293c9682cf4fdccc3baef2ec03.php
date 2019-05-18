<?php

/* EventoShowall.html.twig */
class __TwigTemplate_212998a90b417cb20ee9ad23cf315eee875522293c9682cf4fdccc3baef2ec03 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Lista Eventos", array(), "array"), "html", null, true);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "        <div class=\"row\" style=\"clear:both;\">
            <div class=\"container\">
            <form method=\"POST\" action=\"\" id=\"frmEventos\">
                <div align='left'>
                    <ul class=\"nav\">
                        ";
        // line 10
        if (((isset($context["userTipo"]) ? $context["userTipo"] : null) == 2)) {
            // line 11
            echo "                        <li style=\"margin-right:40px;margin-top:7px;\">
                            <a href=\"../Controllers/EVENTO_Controller.php?accion=";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Crear", array(), "array"), "html", null, true);
            echo "\"><img src=\"../img/add.png\" width=\"40px\" height=\"40px\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "CrearEvento", array(), "array"), "html", null, true);
            echo "</img></a>
                        </li>
                        ";
        }
        // line 15
        echo "                        <li style=\"margin-right:40px;margin-top:7px;\">
                            <a href=\"../Controllers/EVENTO_Controller.php?accion=vistafiltrar\"><img src=\"../img/filter2.png\" width=\"40px\" height=\"40px\"> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "filtrar", array(), "array"), "html", null, true);
        echo "</img></a>
                        </li>
                        <li style=\"margin-right:40px;\">
                            <button type=\"submit\" class=\"btn btn-white\" onclick=\"../Controllers/EVENTO_Controller.php?accion=";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Borrar", array(), "array"), "html", null, true);
        echo "&amp;username=username\" style=\"font-size:15px;\"><img src=\"../img/eliminar2.png\" width=\"40px\" height=\"40px\">  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "eliminarSelec", array(), "array"), "html", null, true);
        echo "</img></button>
                        </li>
                    </ul><br>
                    <table class=\"table\">
                        <thead class=\"thead-dark\">
                            <tr>
                                <th scope=\"col\"></th>
                                <th scope=\"col\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "asuntoEvento", array(), "array"), "html", null, true);
        echo "</th>

                                <th scope=\"col\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Fecha", array(), "array"), "html", null, true);
        echo "</th>
                                <th scope=\"col\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "HoraInicio", array(), "array"), "html", null, true);
        echo "</th>
                                <th scope=\"col\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "HoraFin", array(), "array"), "html", null, true);
        echo "</th>
                                <th scope=\"col\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "asignatura", array(), "array"), "html", null, true);
        echo "</th>
                                <th scope=\"col\"></th>
\t\t\t\t\t            <th scope=\"col\"></th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 37
        if (array_key_exists("nombres", $context)) {
            // line 38
            echo "                                ";
            $context["cont"] = 0;
            echo "      
\t\t\t\t\t\t\t\t";
            // line 39
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["datos"]) ? $context["datos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["dato"]) {
                // line 40
                echo "                                    <tr>
                                        <th><input type=\"checkbox\" name=\"eliminar[]\" value=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "0", array(), "array"), "html", null, true);
                echo "\"></th>
                                        <th width='400px'><a href='EVENTO_Controller.php?accion=";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Modificar", array(), "array"), "html", null, true);
                echo "&amp;idEvento=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "0", array(), "array"), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "1", array(), "array"), "html", null, true);
                echo "</a></th>
                                        <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "3", array(), "array"), "html", null, true);
                echo "</td>
                                        <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "4", array(), "array"), "html", null, true);
                echo "</td>
                                        <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "5", array(), "array"), "html", null, true);
                echo "</td>
                                        <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nombres"]) ? $context["nombres"] : null), (isset($context["cont"]) ? $context["cont"] : null), array(), "array"), "html", null, true);
                echo "</td>

                                        <td><a href='EVENTO_Controller.php?idEvento=";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "0", array(), "array"), "html", null, true);
                echo "&amp;accion=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Modificar", array(), "array"), "html", null, true);
                echo "'><img src=\"../img/modify.png\" width=\"40px\" height=\"40px\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Modificar", array(), "array"), "html", null, true);
                echo "</img></a></td>
                                        <td><a href=\"javascript:;\" onclick=\"alert('EVENTO_Controller.php?idEvento=";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "0", array(), "array"), "html", null, true);
                echo "&amp;accion=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Borrar", array(), "array"), "html", null, true);
                echo "&amp;username=username')\"><img src=\"../img/Delete.png\" width=\"40px\" height=\"40px\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Borrar", array(), "array"), "html", null, true);
                echo "</img></a></td>
                                    </tr>
                                    ";
                // line 51
                $context["cont"] = ((isset($context["cont"]) ? $context["cont"] : null) + 1);
                // line 52
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dato'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                            ";
        } else {
            // line 54
            echo "                                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["datos"]) ? $context["datos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["dato"]) {
                // line 55
                echo "                                    <tr>
                                        <th><input type=\"checkbox\" name=\"eliminar[]\" value=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "0", array(), "array"), "html", null, true);
                echo "\"></th>
                                        <th width='400px'><a href='EVENTO_Controller.php?accion=";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Modificar", array(), "array"), "html", null, true);
                echo "&amp;idEvento=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "0", array(), "array"), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "1", array(), "array"), "html", null, true);
                echo "</a></th>
                                        <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "3", array(), "array"), "html", null, true);
                echo "</td>
                                        <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "4", array(), "array"), "html", null, true);
                echo "</td>
                                        <td>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "5", array(), "array"), "html", null, true);
                echo "</td>
                                        <td>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "7", array(), "array"), "html", null, true);
                echo "</td>

                                        <td><a href='EVENTO_Controller.php?idEvento=";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "0", array(), "array"), "html", null, true);
                echo "&amp;accion=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Modificar", array(), "array"), "html", null, true);
                echo "'><img src=\"../img/modify.png\" width=\"40px\" height=\"40px\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Modificar", array(), "array"), "html", null, true);
                echo "</img></a></td>
                                        <td><a href=\"javascript:;\" onclick=\"alert('EVENTO_Controller.php?idEvento=";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "0", array(), "array"), "html", null, true);
                echo "&amp;accion=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Borrar", array(), "array"), "html", null, true);
                echo "&amp;username=username')\"><img src=\"../img/Delete.png\" width=\"40px\" height=\"40px\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Borrar", array(), "array"), "html", null, true);
                echo "</img></a></td>
                                    </tr>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dato'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "                            ";
        }
        echo "\t\t\t\t\t\t\t                           
                        </tbody>
                    </table>
                    ";
        // line 70
        if (array_key_exists("volver", $context)) {
            // line 71
            echo "                        <a class=\"form-link\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["volver"]) ? $context["volver"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Volver", array(), "array"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 73
        echo "                </div>
            </form>
            </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "EventoShowall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 73,  243 => 71,  241 => 70,  234 => 67,  221 => 64,  213 => 63,  208 => 61,  204 => 60,  200 => 59,  196 => 58,  188 => 57,  184 => 56,  181 => 55,  176 => 54,  173 => 53,  167 => 52,  165 => 51,  156 => 49,  148 => 48,  143 => 46,  139 => 45,  135 => 44,  131 => 43,  123 => 42,  119 => 41,  116 => 40,  112 => 39,  107 => 38,  105 => 37,  96 => 31,  92 => 30,  88 => 29,  84 => 28,  79 => 26,  67 => 19,  61 => 16,  58 => 15,  50 => 12,  47 => 11,  45 => 10,  38 => 5,  35 => 4,  29 => 3,);
    }
}
