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
        echo "            <div class=\"container\">
\t\t\t\t<br>
                <div align='left'>
                    ";
        // line 8
        if (((isset($context["userTipo"]) ? $context["userTipo"] : null) == 2)) {
            // line 9
            echo "\t\t\t\t\t\t<a href='ALERTA_Controller.php?accion=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Crear", array(), "array"), "html", null, true);
            echo "'><button type=\"button\" class=\"btn btn-primary btn-lg btn-block\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Crear", array(), "array"), "html", null, true);
            echo "</button></a>
\t\t\t\t\t";
        }
        // line 11
        echo "                    <table class=\"table\">
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
\t\t\t\t\t\t\t\t";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datos"]) ? $context["datos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["dato"]) {
            // line 23
            echo "                                    <tr>
\t\t\t\t\t\t\t\t\t    ";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["dato"]);
            foreach ($context['_seq'] as $context["clave"] => $context["valor"]) {
                // line 25
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["lista"]) ? $context["lista"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                    // line 26
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (($context["clave"] == $context["key"])) {
                        // line 27
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 28
                        if (($context["clave"] == "asuntoAlerta")) {
                            // line 29
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href='ALERTA_Controller.php?idAlerta=";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "idAlerta", array(), "array"), "html", null, true);
                            echo "&amp;accion=";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Ver", array(), "array"), "html", null, true);
                            echo "'>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "asuntoAlerta", array(), "array"), "html", null, true);
                            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 31
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, $context["valor"], "html", null, true);
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                    ";
                        }
                        // line 32
                        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 34
                    echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['clave'], $context['valor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "\t\t\t\t\t\t\t\t\t\t<td><button type=\"button\" class=\"btn btn-primary\"><a href='ALERTA_Controller.php?idAlerta=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "idAlerta", array(), "array"), "html", null, true);
            echo "&amp;accion=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Modificar", array(), "array"), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Modificar", array(), "array"), "html", null, true);
            echo "</a></button></td>
\t\t\t\t\t\t\t\t\t\t<td><button type=\"button\" class=\"btn btn-danger\"><a href='ALERTA_Controller.php?idAlerta=";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "idAlerta", array(), "array"), "html", null, true);
            echo "&amp;accion=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Borrar", array(), "array"), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Borrar", array(), "array"), "html", null, true);
            echo "</a></button></td>
                                    </tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t\t\t\t\t\t                           
                        </tbody>
                    </table>
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
        return array (  159 => 40,  146 => 38,  137 => 37,  131 => 36,  124 => 34,  119 => 32,  113 => 31,  103 => 29,  101 => 28,  98 => 27,  95 => 26,  90 => 25,  86 => 24,  83 => 23,  79 => 22,  74 => 19,  65 => 16,  62 => 15,  58 => 14,  53 => 11,  45 => 9,  43 => 8,  38 => 5,  35 => 4,  29 => 3,);
    }
}
