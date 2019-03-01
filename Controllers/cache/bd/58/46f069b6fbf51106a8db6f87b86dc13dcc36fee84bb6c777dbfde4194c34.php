<?php

/* AsignaturaShowall.html.twig */
class __TwigTemplate_bd5846f069b6fbf51106a8db6f87b86dc13dcc36fee84bb6c777dbfde4194c34 extends Twig_Template
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
        echo "Asignatura Showall";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t<div class=\"container\">
            <br>
\t\t\t<table class=\"table\">
\t\t\t\t<thead class=\"thead-dark\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "asignaturanombre", array(), "array"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
                ";
        // line 16
        if (((isset($context["datos"]) ? $context["datos"] : null) == null)) {
            // line 17
            echo "                    
                ";
        } else {
            // line 19
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["datos"]) ? $context["datos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["valor"]) {
                // line 20
                echo "                                <tr>
                                    <th><br>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "1", array(), "array"), "html", null, true);
                echo "</th>
                                    <td><a href=\"https://secretaria.uvigo.gal/docnet-nuevo/guia_docent/index.php";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "href", array(), "array"), "html", null, true);
                echo "\" target=\"_blank\"><button type=\"button\" class=\"btn btn-success\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Guia", array(), "array"), "html", null, true);
                echo "</button></a></td>
                                    ";
                // line 23
                if (((isset($context["tipoUsuario"]) ? $context["tipoUsuario"] : null) == 1)) {
                    // line 24
                    echo "                                        <td><a href=\"?accion=vistaeliminar&id=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "0", array(), "array"), "html", null, true);
                    echo "\"><button type=\"button\" class=\"btn btn-danger\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "asignaturaeliminar", array(), "array"), "html", null, true);
                    echo "</button></a></td>
                                    ";
                }
                // line 26
                echo "                                </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                ";
        }
        echo "\t\t\t\t
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "AsignaturaShowall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 28,  88 => 26,  80 => 24,  78 => 23,  72 => 22,  68 => 21,  65 => 20,  60 => 19,  56 => 17,  54 => 16,  45 => 10,  38 => 5,  35 => 4,  29 => 3,);
    }
}
