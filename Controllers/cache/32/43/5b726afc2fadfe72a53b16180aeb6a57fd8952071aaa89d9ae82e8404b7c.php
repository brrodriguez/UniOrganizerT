<?php

/* EventoEdit.html.twig */
class __TwigTemplate_32435b726afc2fadfe72a53b16180aeb6a57fd8952071aaa89d9ae82e8404b7c extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Editar Evento", array(), "array"), "html", null, true);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
\t<div class=\"row\" style=\"clear:both;\">
        <div class=\"container\">
            <form id=\"form\" name=\"form\" action='../Controllers/EVENTO_Controller.php?accion=";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Modificar", array(), "array"), "html", null, true);
        echo "'  method='post'   enctype=\"multipart/form-data\">

                <div class=\"col-lg-4\" style=\"float:left;\">
                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "asuntoEvento", array(), "array"), "html", null, true);
        echo "</label><br>
                        <input onchange=\"return valida_envia_asuntoEvento()\" class=\"form\" id=\"asuntoEvento\" name=\"asuntoEvento\"  size=\"78\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evento"]) ? $context["evento"] : null), "asuntoEvento", array(), "array"), "html", null, true);
        echo "\">
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "descripcionEvento", array(), "array"), "html", null, true);
        echo "</label><br>
                        <textarea onchange=\"return valida_envia_descripcionEvento()\" rows=\"4\" cols=\"80\" name=\"descripcionEvento\" >";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evento"]) ? $context["evento"] : null), "descripcionEvento", array(), "array"), "html", null, true);
        echo "</textarea>             
                    </div>
                </div>
\t\t\t\t
                <div class=\"col-lg-4\" style=\"float:right;\">
                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Fecha", array(), "array"), "html", null, true);
        echo "</label><br>
                        <input class=\"form\" id=\"dia\" name=\"dia\"  type=\"date\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evento"]) ? $context["evento"] : null), "dia", array(), "array"), "html", null, true);
        echo "\">
                    </div>
                    
                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "HoraInicio", array(), "array"), "html", null, true);
        echo "</label><br>
                        <input onchange=\"return valida_envia_hora()\" class=\"form\" id=\"horaInicio\" name=\"horaInicio\" type=\"time\" required=\"true\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evento"]) ? $context["evento"] : null), "horaInicio", array(), "array"), "html", null, true);
        echo "\"/>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "HoraFin", array(), "array"), "html", null, true);
        echo "</label><br>
                        <input onchange=\"return valida_envia_hora()\" class=\"form\" id=\"horaFin\" name=\"horaFin\" type=\"time\" required=\"true\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evento"]) ? $context["evento"] : null), "horaFin", array(), "array"), "html", null, true);
        echo "\"/>
                    </div>

                    <div class=\"form-group\">
                        <input type=\"hidden\" class=\"form\" id=\"idEvento\" name=\"idEvento\" size=\"25\" type=\"text\" readonly=\"true\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evento"]) ? $context["evento"] : null), "idEvento", array(), "array"), "html", null, true);
        echo "\">
                    </div>
                    
                    <div class=\"form-group\">
                        <input type=\"hidden\" class=\"form\" id=\"username\" name=\"username\" size=\"25\" type=\"text\" readonly=\"true\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evento"]) ? $context["evento"] : null), "username", array(), "array"), "html", null, true);
        echo "\">
                    </div>

                    <div class=\"form-group\">
                        <input type=\"hidden\" class=\"form\" id=\"idAsignatura\" name=\"idAsignatura\" size=\"25\" type=\"text\" readonly=\"true\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evento"]) ? $context["evento"] : null), "idAsignatura", array(), "array"), "html", null, true);
        echo "\">
                    </div>
                </div>
                <br>

                <div class=\"container\" style=\"clear:both;\">

                    <div align='left'>
                        <ul class=\"nav\">
                            <li style=\"margin-right:40px;margin-top:7px;\">
                                <h4>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "alertas", array(), "array"), "html", null, true);
        echo "</h4>
                            </li>
                            ";
        // line 59
        if (((isset($context["userTipo"]) ? $context["userTipo"] : null) == 2)) {
            // line 60
            echo "                            <li style=\"margin-right:40px;margin-top:7px;\">
                                <a href=\"ALERTA_Controller.php?idEvento=";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evento"]) ? $context["evento"] : null), "idEvento", array(), "array"), "html", null, true);
            echo "&amp;accion=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Crear", array(), "array"), "html", null, true);
            echo "\"><img src=\"../img/add.png\" width=\"40px\" height=\"40px\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "CrearAlerta", array(), "array"), "html", null, true);
            echo "</img></a>
                            </li>
                            ";
        }
        // line 64
        echo "                            <li style=\"margin-right:40px;\">
                                <button type=\"submit\" class=\"btn btn-white\" onclick=this.form.action=\"../Controllers/ALERTA_Controller.php?accion=";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Borrar", array(), "array"), "html", null, true);
        echo "\" style=\"font-size:15px;\"><img src=\"../img/eliminar2.png\" width=\"40px\" height=\"40px\">  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "eliminarSeleccionadas", array(), "array"), "html", null, true);
        echo "</img></button>
                            </li><br>
                        </ul><br>
                        <table class=\"table\">
                            <thead class=\"thead-dark\">
                                <tr>
                                    <th scope=\"col\"></th>
                                    <th scope=\"col\">";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "asuntoAlerta", array(), "array"), "html", null, true);
        echo "</th>
                                    <th scope=\"col\">";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "descripcionAlerta", array(), "array"), "html", null, true);
        echo "</th>
                                    <th scope=\"col\">";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Fecha", array(), "array"), "html", null, true);
        echo "</th>
                                    <th scope=\"col\">";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "HoraInicio", array(), "array"), "html", null, true);
        echo "</th>
                                    <th scope=\"col\">";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "HoraFin", array(), "array"), "html", null, true);
        echo "</th>
                                    <th scope=\"col\"></th>
                                    <th scope=\"col\"></th>
                                </tr>
                            </thead>
                            <tbody>       
                                    ";
        // line 82
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alertas"]) ? $context["alertas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["alerta"]) {
            // line 83
            echo "                                        <tr>
                                            <th><input type=\"checkbox\" name=\"eliminar[]\" value=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["alerta"], "0", array(), "array"), "html", null, true);
            echo "\"></th>
                                            <th><a href='ALERTA_Controller.php?idAlerta=";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["alerta"], "0", array(), "array"), "html", null, true);
            echo "&amp;accion=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Modificar", array(), "array"), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alerta"], "1", array(), "array"), "html", null, true);
            echo "</a></th>
                                            <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["alerta"], "2", array(), "array"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["alerta"], "3", array(), "array"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["alerta"], "4", array(), "array"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["alerta"], "5", array(), "array"), "html", null, true);
            echo "</td>

                                            <td><a href='ALERTA_Controller.php?idAlerta=";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["alerta"], "0", array(), "array"), "html", null, true);
            echo "&amp;accion=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Modificar", array(), "array"), "html", null, true);
            echo "'><img src=\"../img/modify.png\" width=\"40px\" height=\"40px\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Modificar", array(), "array"), "html", null, true);
            echo "</button></a></td>
                                            <td><a href=\"javascript:;\" onclick=\"alert('ALERTA_Controller.php?idAlerta=";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["alerta"], "0", array(), "array"), "html", null, true);
            echo "&amp;accion=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Borrar", array(), "array"), "html", null, true);
            echo "&amp;idEvento=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evento"]) ? $context["evento"] : null), "idEvento", array(), "array"), "html", null, true);
            echo "&amp;username=username')\"><img src=\"../img/Delete.png\" width=\"40px\" height=\"40px\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Borrar", array(), "array"), "html", null, true);
            echo "</img></a></td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alerta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "\t\t\t\t\t\t\t                           
                            </tbody>
                        </table>
                    </div>
                </div>

\t\t\t\t<button type='submit' class=\"btn btn-primary\" onclick=this.form.action=\"../Controllers/EVENTO_Controller.php?accion=";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Modificar", array(), "array"), "html", null, true);
        echo "&amp;username=username\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Modificar", array(), "array"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Modificar", array(), "array"), "html", null, true);
        echo "</button>
                <a class=\"form-link\" href=\"";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["volver"]) ? $context["volver"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Volver", array(), "array"), "html", null, true);
        echo "</a>
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "EventoEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 101,  261 => 100,  253 => 94,  238 => 92,  230 => 91,  225 => 89,  221 => 88,  217 => 87,  213 => 86,  205 => 85,  201 => 84,  198 => 83,  194 => 82,  185 => 76,  181 => 75,  177 => 74,  173 => 73,  169 => 72,  157 => 65,  154 => 64,  144 => 61,  141 => 60,  139 => 59,  134 => 57,  121 => 47,  114 => 43,  107 => 39,  100 => 35,  96 => 34,  89 => 30,  85 => 29,  78 => 25,  74 => 24,  65 => 18,  61 => 17,  54 => 13,  50 => 12,  43 => 8,  38 => 5,  35 => 4,  29 => 3,);
    }
}
