<?php

/* CalendarioShowall.html.twig */
class __TwigTemplate_4259fdf507cc9a689387745e504a35be908cdd6a386c0c407ee179be2564e96d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "CalendarioShowall.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["strings"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["Lista Calendarios"] ?? null) : null), "html", null, true);
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        // line 5
        echo "\t<div class=\"row\" style=\"clear:both;\">
\t\t<div class=\"container\">
\t\t<form method=\"POST\" action=\"\" id=\"frmCalendarios\">
\t\t\t<ul class=\"nav\">
\t\t\t\t";
        // line 9
        if ((($context["userTipo"] ?? null) == 2)) {
            // line 10
            echo "\t\t\t\t<li style=\"margin-right:40px;margin-top:7px;\">
\t\t\t\t\t<a href=\"?accion=vistainsertar\"><img src=\"../img/add.png\" width=\"40px\" height=\"40px\"> ";
            // line 11
            echo twig_escape_filter($this->env, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["strings"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["newcalendario"] ?? null) : null), "html", null, true);
            echo "</img></a>
\t\t\t\t</li><br>
\t\t\t\t";
        }
        // line 14
        echo "\t\t\t\t";
        if ((($context["userTipo"] ?? null) == 1)) {
            // line 15
            echo "\t\t\t\t<li style=\"margin-right:40px;margin-top:7px;\">
\t\t\t\t\t<a href=\"?accion=vistafiltrar\"><img src=\"../img/filter2.png\" width=\"40px\" height=\"40px\"> ";
            // line 16
            echo twig_escape_filter($this->env, (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = ($context["strings"] ?? null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["filtrar"] ?? null) : null), "html", null, true);
            echo "</img></a>
\t\t\t\t</li><br>
\t\t\t\t";
        }
        // line 19
        echo "\t\t\t\t<li style=\"margin-right:40px;\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-white\" onclick=this.form.action=\"../Controllers/CALENDARIO_Controller.php?accion=eliminar\" style=\"font-size:15px;\"><img src=\"../img/eliminar2.png\" width=\"40px\" height=\"40px\">  ";
        // line 20
        echo twig_escape_filter($this->env, (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = ($context["strings"] ?? null)) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9["eliminarSelec"] ?? null) : null), "html", null, true);
        echo "</img></button>
\t\t\t\t</li><br>
\t\t\t</ul><br>
\t\t\t
\t\t\t<table class=\"table\">
\t\t\t\t<thead class=\"thead-dark\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t\t\t<th scope=\"col\">";
        // line 28
        echo twig_escape_filter($this->env, (($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = ($context["strings"] ?? null)) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217["nombreCalendario2"] ?? null) : null), "html", null, true);
        echo "</th>
\t\t\t\t\t\t<th scope=\"col\">";
        // line 29
        echo twig_escape_filter($this->env, (($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = ($context["strings"] ?? null)) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105["descripcionCalendario2"] ?? null) : null), "html", null, true);
        echo "</th>
\t\t\t\t\t\t";
        // line 30
        if ((($context["userTipo"] ?? null) == 1)) {
            // line 31
            echo "\t\t\t\t\t\t<th scope=\"col\">";
            echo twig_escape_filter($this->env, (($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = ($context["strings"] ?? null)) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779["username"] ?? null) : null), "html", null, true);
            echo "</th>
\t\t\t\t\t\t";
        }
        // line 33
        echo "\t\t\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t
\t\t";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["datos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["valor"]) {
            // line 42
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<th><input type=\"checkbox\" name=\"eliminar[]\" value=\"";
            // line 43
            echo twig_escape_filter($this->env, (($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = $context["valor"]) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1["0"] ?? null) : null), "html", null, true);
            echo "\"></th>
\t\t\t\t\t\t<th><a href=\"?accion=vistamodificar&amp;id=";
            // line 44
            echo twig_escape_filter($this->env, (($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 = $context["valor"]) && is_array($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0) || $__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 instanceof ArrayAccess ? ($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0["0"] ?? null) : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 = $context["valor"]) && is_array($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866) || $__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 instanceof ArrayAccess ? ($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866["1"] ?? null) : null), "html", null, true);
            echo "</a></th>
\t\t\t\t\t\t<td>";
            // line 45
            echo twig_escape_filter($this->env, (($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f = $context["valor"]) && is_array($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f) || $__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f instanceof ArrayAccess ? ($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f["2"] ?? null) : null), "html", null, true);
            echo "</td>
\t\t\t\t\t\t";
            // line 46
            if ((($context["userTipo"] ?? null) == 1)) {
                // line 47
                echo "\t\t\t\t\t\t<td>";
                echo twig_escape_filter($this->env, (($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 = $context["valor"]) && is_array($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7) || $__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 instanceof ArrayAccess ? ($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7["3"] ?? null) : null), "html", null, true);
                echo "</td>
\t\t\t\t\t\t";
            }
            // line 48
            echo "\t\t
\t\t\t\t\t\t<td><a href=\"?accion=vistamodificar&amp;id=";
            // line 49
            echo twig_escape_filter($this->env, (($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 = $context["valor"]) && is_array($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289) || $__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 instanceof ArrayAccess ? ($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289["0"] ?? null) : null), "html", null, true);
            echo "\"><img src=\"../img/modify.png\" width=\"40px\" height=\"40px\"> ";
            echo twig_escape_filter($this->env, (($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 = ($context["strings"] ?? null)) && is_array($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18) || $__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 instanceof ArrayAccess ? ($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18["calendariomodificar"] ?? null) : null), "html", null, true);
            echo "</img></a></td>
\t\t\t\t\t\t<td><a href=\"javascript:;\" onclick=\"alert('CALENDARIO_Controller.php?accion=eliminar&amp;id=";
            // line 50
            echo twig_escape_filter($this->env, (($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018 = $context["valor"]) && is_array($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018) || $__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018 instanceof ArrayAccess ? ($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018["0"] ?? null) : null), "html", null, true);
            echo "')\"><img src=\"../img/Delete.png\" width=\"40px\" height=\"40px\"> ";
            echo twig_escape_filter($this->env, (($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413 = ($context["strings"] ?? null)) && is_array($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413) || $__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413 instanceof ArrayAccess ? ($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413["Borrar"] ?? null) : null), "html", null, true);
            echo "</img></a></td>
\t\t\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</form>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "CalendarioShowall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 53,  149 => 50,  143 => 49,  140 => 48,  134 => 47,  132 => 46,  128 => 45,  122 => 44,  118 => 43,  115 => 42,  111 => 41,  101 => 33,  95 => 31,  93 => 30,  89 => 29,  85 => 28,  74 => 20,  71 => 19,  65 => 16,  62 => 15,  59 => 14,  53 => 11,  50 => 10,  48 => 9,  42 => 5,  39 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block title %}{{ strings['Lista Calendarios'] }}{% endblock %}
{% block body %}
\t<div class=\"row\" style=\"clear:both;\">
\t\t<div class=\"container\">
\t\t<form method=\"POST\" action=\"\" id=\"frmCalendarios\">
\t\t\t<ul class=\"nav\">
\t\t\t\t{% if userTipo == 2 %}
\t\t\t\t<li style=\"margin-right:40px;margin-top:7px;\">
\t\t\t\t\t<a href=\"?accion=vistainsertar\"><img src=\"../img/add.png\" width=\"40px\" height=\"40px\"> {{ strings['newcalendario'] }}</img></a>
\t\t\t\t</li><br>
\t\t\t\t{% endif %}
\t\t\t\t{% if userTipo == 1 %}
\t\t\t\t<li style=\"margin-right:40px;margin-top:7px;\">
\t\t\t\t\t<a href=\"?accion=vistafiltrar\"><img src=\"../img/filter2.png\" width=\"40px\" height=\"40px\"> {{ strings['filtrar'] }}</img></a>
\t\t\t\t</li><br>
\t\t\t\t{% endif %}
\t\t\t\t<li style=\"margin-right:40px;\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-white\" onclick=this.form.action=\"../Controllers/CALENDARIO_Controller.php?accion=eliminar\" style=\"font-size:15px;\"><img src=\"../img/eliminar2.png\" width=\"40px\" height=\"40px\">  {{ strings['eliminarSelec'] }}</img></button>
\t\t\t\t</li><br>
\t\t\t</ul><br>
\t\t\t
\t\t\t<table class=\"table\">
\t\t\t\t<thead class=\"thead-dark\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t\t\t<th scope=\"col\">{{ strings['nombreCalendario2'] }}</th>
\t\t\t\t\t\t<th scope=\"col\">{{ strings['descripcionCalendario2'] }}</th>
\t\t\t\t\t\t{% if userTipo == 1 %}
\t\t\t\t\t\t<th scope=\"col\">{{ strings['username'] }}</th>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t
\t\t{% for valor in datos %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th><input type=\"checkbox\" name=\"eliminar[]\" value=\"{{ valor['0'] }}\"></th>
\t\t\t\t\t\t<th><a href=\"?accion=vistamodificar&amp;id={{ valor['0'] }}\">{{ valor['1'] }}</a></th>
\t\t\t\t\t\t<td>{{ valor['2']}}</td>
\t\t\t\t\t\t{% if userTipo == 1 %}
\t\t\t\t\t\t<td>{{ valor['3'] }}</td>
\t\t\t\t\t\t{% endif %}\t\t
\t\t\t\t\t\t<td><a href=\"?accion=vistamodificar&amp;id={{ valor['0'] }}\"><img src=\"../img/modify.png\" width=\"40px\" height=\"40px\"> {{ strings['calendariomodificar'] }}</img></a></td>
\t\t\t\t\t\t<td><a href=\"javascript:;\" onclick=\"alert('CALENDARIO_Controller.php?accion=eliminar&amp;id={{ valor['0'] }}')\"><img src=\"../img/Delete.png\" width=\"40px\" height=\"40px\"> {{ strings['Borrar'] }}</img></a></td>
\t\t\t\t\t</tr>
\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</form>
\t\t</div>
\t</div>
{% endblock %}", "CalendarioShowall.html.twig", "C:\\xampp\\htdocs\\UniOrganizerTB\\UniOrganizer\\templates\\CalendarioShowall.html.twig");
    }
}
