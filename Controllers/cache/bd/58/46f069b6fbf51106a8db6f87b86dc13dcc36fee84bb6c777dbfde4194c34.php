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
        echo "\t<div class=\"row\" style=\"clear:both;\">
        <div class=\"container\">
            <ul class=\"nav\">    
                <li style=\"margin-right:40px;margin-top:50px;\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-white\" onclick=this.form.action=\"../Controllers/ASIGNATURA_Controller.php?accion=eliminar\" style=\"font-size:15px;\"><img src=\"../img/eliminar2.png\" width=\"40px\" height=\"40px\">  ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "eliminarSeleccionadas", array(), "array"), "html", null, true);
        echo "</img></button>
\t\t\t\t</li><br>
\t\t\t</ul><br>
\t\t\t<table class=\"table\">
\t\t\t\t<thead class=\"thead-dark\">
\t\t\t\t\t<tr>
                        <th scope=\"col\"></th>
\t\t\t\t\t\t<th scope=\"col\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "asignaturanombre", array(), "array"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
                ";
        // line 22
        if (((isset($context["datos"]) ? $context["datos"] : null) == null)) {
            // line 23
            echo "                    
                ";
        } else {
            // line 25
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["datos"]) ? $context["datos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["valor"]) {
                // line 26
                echo "                                <tr>
                                    <th><input type=\"checkbox\" name=\"eliminar[]\" value=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "0", array(), "array"), "html", null, true);
                echo "\"></th>
                                    <th>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "1", array(), "array"), "html", null, true);
                echo "</th>
                                    ";
                // line 29
                if (((isset($context["tipoUsuario"]) ? $context["tipoUsuario"] : null) == 2)) {
                    // line 30
                    echo "                                    <td><a href=\"https://secretaria.uvigo.gal/docnet-nuevo/guia_docent/index.php";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "href", array(), "array"), "html", null, true);
                    echo "\" target=\"_blank\"><button type=\"button\" class=\"btn btn-success\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Guia", array(), "array"), "html", null, true);
                    echo "</button></a></td>
                                    ";
                }
                // line 32
                echo "                                    ";
                if (((isset($context["tipoUsuario"]) ? $context["tipoUsuario"] : null) == 1)) {
                    // line 33
                    echo "                                        <td><a href=\"javascript:;\" onclick=\"alert('ASIGNATURA_Controller.php?accion=eliminar&amp;id=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "0", array(), "array"), "html", null, true);
                    echo "')\"><img src=\"../img/Delete.png\" width=\"40px\" height=\"40px\"> ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "asignaturaeliminar", array(), "array"), "html", null, true);
                    echo "</img></a></td>
                                    ";
                }
                // line 35
                echo "                                </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                ";
        }
        echo "\t\t\t\t
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
    </div>
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
        return array (  113 => 37,  106 => 35,  98 => 33,  95 => 32,  87 => 30,  85 => 29,  81 => 28,  77 => 27,  74 => 26,  69 => 25,  65 => 23,  63 => 22,  54 => 16,  44 => 9,  38 => 5,  35 => 4,  29 => 3,);
    }
}
