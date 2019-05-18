<?php

/* AlertaShowall.html.twig */
class __TwigTemplate_66519bfb0ecd9e23a30bd035d5f9ae38a286e5722c232b1d02657248a3c13378 extends Twig_Template
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
        echo "Alerta Showall";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "        <div class=\"row\" style=\"clear:both;\">
            <div class=\"container\">
                <div align='left'>
                    <ul class=\"nav\">
                        <li>
                            <a href=\"?accion=vistafiltrar\"><img src=\"../img/filter.png\" width=\"40px\" height=\"40px\"> ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "filtrar", array(), "array"), "html", null, true);
        echo "</img></a>
                        </li>
                    </ul><br>
                    <table class=\"table\">
                        <thead class=\"thead-dark\">
                            <tr>
                                <th scope=\"col\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "asuntoAlerta", array(), "array"), "html", null, true);
        echo "</th>
                                <th scope=\"col\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "descripcionAlerta", array(), "array"), "html", null, true);
        echo "</th>
                                <th scope=\"col\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Fecha", array(), "array"), "html", null, true);
        echo "</th>
                                <th scope=\"col\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "HoraInicio", array(), "array"), "html", null, true);
        echo "</th>
                                <th scope=\"col\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "HoraFin", array(), "array"), "html", null, true);
        echo "</th>
                                <th scope=\"col\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "idEvento", array(), "array"), "html", null, true);
        echo "</th>
                                <th scope=\"col\"></th>
\t\t\t\t\t            <th scope=\"col\"></th>
                            </tr>
                        </thead>
                        <tbody>       
\t\t\t\t\t\t\t\t";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datos"]) ? $context["datos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["dato"]) {
            // line 28
            echo "                                    <tr>
                                        <th><a href='ALERTA_Controller.php?idAlerta=";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "0", array(), "array"), "html", null, true);
            echo "&amp;accion=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Ver", array(), "array"), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "1", array(), "array"), "html", null, true);
            echo "</a></th>
                                        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "2", array(), "array"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "3", array(), "array"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "4", array(), "array"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "5", array(), "array"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "6", array(), "array"), "html", null, true);
            echo "</td>

                                        <td><a href='ALERTA_Controller.php?idAlerta=";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "0", array(), "array"), "html", null, true);
            echo "&amp;accion=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Modificar", array(), "array"), "html", null, true);
            echo "'><img src=\"../img/modify.png\" width=\"40px\" height=\"40px\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Modificar", array(), "array"), "html", null, true);
            echo "</button></a></td>
\t\t\t\t\t\t                <td><a href='ALERTA_Controller.php?idAlerta=";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "0", array(), "array"), "html", null, true);
            echo "&amp;accion=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Borrar", array(), "array"), "html", null, true);
            echo "'><img src=\"../img/Delete.png\" width=\"40px\" height=\"40px\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Borrar", array(), "array"), "html", null, true);
            echo "</button></a></td>
                                    </tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t\t\t\t\t\t\t                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "AlertaShowall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 39,  127 => 37,  119 => 36,  114 => 34,  110 => 33,  106 => 32,  102 => 31,  98 => 30,  90 => 29,  87 => 28,  83 => 27,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  58 => 17,  54 => 16,  45 => 10,  38 => 5,  35 => 4,  29 => 3,);
    }
}
