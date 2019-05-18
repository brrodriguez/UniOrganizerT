<?php

/* EventoAdd.html.twig */
class __TwigTemplate_b079ca7e2632d9f2c4cf21d595bdbb8232ed9100d0ea8652df7635e52f35bd2e extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Crear Evento", array(), "array"), "html", null, true);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t<div class=\"row\" style=\"clear:both;\">
        <div class=\"container\">
            <form  id=\"form\" name=\"form\" action='EVENTO_Controller.php'  method='post'   enctype=\"multipart/form-data\">

                <div class=\"col-lg-4\" style=\"float:left;\">
                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "asuntoEvento", array(), "array"), "html", null, true);
        echo "*</label><br>
                        <input onchange=\"return valida_envia_asuntoEvento()\" class=\"form\" id=\"asuntoEvento\" name=\"asuntoEvento\" size=\"68\" type=\"text\" required=\"true\"/>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "descripcionEvento", array(), "array"), "html", null, true);
        echo "*</label><br>
                        <textarea onchange=\"return valida_envia_descripcionEvento()\" class=\"form\" id=\"descripcionEvento\" name=\"descripcionEvento\" rows=\"2\" cols=\"70\" required=\"true\"></textarea>
                    </div>

                    <div class=\"form-group\" style=\"clear:both;\">
                        <input type=\"hidden\" id=\"username\" name=\"username\" size=\"25\" type=\"text\" required=\"true\" value='usuario'/>
                    </div>
                    
                    <h6 style=\"clear:both;\"><b>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Aviso", array(), "array"), "html", null, true);
        echo "</b></h6>
                    
                    <div class=\"form-group\" style=\"clear:both;\">
                        <label class=\"control-label\" >";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Dias", array(), "array"), "html", null, true);
        echo "</label><br>
                        <input class=\"form\" id=\"dias\" name=\"dias\" type=\"text\"/>
                    </div>
                </div>
\t\t\t\t
                <div class=\"col-lg-4\" style=\"float:right;\">
                    ";
        // line 33
        if (((isset($context["fecha"]) ? $context["fecha"] : null) == null)) {
            // line 34
            echo "                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Fecha", array(), "array"), "html", null, true);
            echo "*</label><br>
                        <input class=\"form\" id=\"fecha\" name=\"fecha\" type=\"date\" required=\"true\"/>
                    </div>
                    ";
        } else {
            // line 39
            echo "                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Fecha", array(), "array"), "html", null, true);
            echo "*</label><br>
                        <input class=\"form\" id=\"fecha\" name=\"fecha\" type=\"date\" required=\"true\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["fecha"]) ? $context["fecha"] : null), "html", null, true);
            echo "\"/>
                    </div>\t
                    ";
        }
        // line 44
        echo "
                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "HoraInicio", array(), "array"), "html", null, true);
        echo "*</label><br>
                        <input onchange=\"return valida_envia_hora()\" class=\"form\" id=\"horaInicio\" name=\"horaInicio\" type=\"time\" required=\"true\"/>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "HoraFin", array(), "array"), "html", null, true);
        echo "*</label><br>
                        <input onchange=\"return valida_envia_hora()\" class=\"form\" id=\"horaFin\" name=\"horaFin\" type=\"time\" required=\"true\"/>
                    </div>
                    
                    ";
        // line 55
        if (((isset($context["idCalendario"]) ? $context["idCalendario"] : null) == null)) {
            // line 56
            echo "                    <div class=\"form-group\">
                        <label class=\"control-label\" >";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Calendario", array(), "array"), "html", null, true);
            echo "*</label><br>
                        <select name=\"calendario\">
                            ";
            // line 59
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["calendarios"]) ? $context["calendarios"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["calendario"]) {
                // line 60
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["calendario"], "idCalendario", array(), "array"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["calendario"], "nombreCalendario", array(), "array"), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['calendario'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                        </select>
                    </div>
                    ";
        } else {
            // line 65
            echo "                        <div class=\"form-group\">
                            <input type=\"hidden\" class=\"form\" id=\"calendario\" name=\"calendario\" type=\"int\" required=\"true\" value=\"";
            // line 66
            echo twig_escape_filter($this->env, (isset($context["idCalendario"]) ? $context["idCalendario"] : null), "html", null, true);
            echo "\"/>
                        </div>\t
                    ";
        }
        // line 69
        echo "                </div>
\t\t\t\t
\t\t\t\t<div class=\"col-lg-4\" style=\"float:left;clear:both;\">
                    <button type='submit' class=\"btn btn-primary\" onclick=\"return valida_envia_EVENTO()\" name='accion' value=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Crear", array(), "array"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Crear", array(), "array"), "html", null, true);
        echo "</button>
                    <a class=\"form-link\" href=\"";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["volver"]) ? $context["volver"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Volver", array(), "array"), "html", null, true);
        echo "</a>
                </div>
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "EventoAdd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 73,  168 => 72,  163 => 69,  157 => 66,  154 => 65,  149 => 62,  138 => 60,  134 => 59,  129 => 57,  126 => 56,  124 => 55,  117 => 51,  109 => 46,  105 => 44,  99 => 41,  95 => 40,  92 => 39,  85 => 35,  82 => 34,  80 => 33,  71 => 27,  65 => 24,  54 => 16,  46 => 11,  38 => 5,  35 => 4,  29 => 3,);
    }
}
