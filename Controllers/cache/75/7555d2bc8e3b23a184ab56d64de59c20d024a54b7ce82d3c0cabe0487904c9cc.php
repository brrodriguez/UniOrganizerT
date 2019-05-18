<?php

/* EventoShowall.html.twig */
class __TwigTemplate_04e5071109dd5af1efba8d7d443ef776cd7137d104ecff01769e06bd79390397 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "EventoShowall.html.twig", 1);
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
        echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["strings"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["Lista Eventos"] ?? null) : null), "html", null, true);
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        // line 5
        echo "        <div class=\"row\" style=\"clear:both;\">
            <div class=\"container\">
            <form method=\"POST\" action=\"\" id=\"frmEventos\">
                <div align='left'>
                    <ul class=\"nav\">
                        ";
        // line 10
        if ((($context["userTipo"] ?? null) == 2)) {
            // line 11
            echo "                        <li style=\"margin-right:40px;margin-top:7px;\">
                            <a href=\"../Controllers/EVENTO_Controller.php?accion=";
            // line 12
            echo twig_escape_filter($this->env, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["strings"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["Crear"] ?? null) : null), "html", null, true);
            echo "\"><img src=\"../img/add.png\" width=\"40px\" height=\"40px\"> ";
            echo twig_escape_filter($this->env, (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = ($context["strings"] ?? null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["CrearEvento"] ?? null) : null), "html", null, true);
            echo "</img></a>
                        </li>
                        ";
        }
        // line 15
        echo "                        <li style=\"margin-right:40px;margin-top:7px;\">
                            <a href=\"../Controllers/EVENTO_Controller.php?accion=vistafiltrar\"><img src=\"../img/filter2.png\" width=\"40px\" height=\"40px\"> ";
        // line 16
        echo twig_escape_filter($this->env, (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = ($context["strings"] ?? null)) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9["filtrar"] ?? null) : null), "html", null, true);
        echo "</img></a>
                        </li>
                        <li style=\"margin-right:40px;\">
                            <button type=\"submit\" class=\"btn btn-white\" onclick=\"../Controllers/EVENTO_Controller.php?accion=";
        // line 19
        echo twig_escape_filter($this->env, (($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = ($context["strings"] ?? null)) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217["Borrar"] ?? null) : null), "html", null, true);
        echo "&amp;username=username\" style=\"font-size:15px;\"><img src=\"../img/eliminar2.png\" width=\"40px\" height=\"40px\">  ";
        echo twig_escape_filter($this->env, (($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = ($context["strings"] ?? null)) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105["eliminarSelec"] ?? null) : null), "html", null, true);
        echo "</img></button>
                        </li>
                    </ul><br>
                    <table class=\"table\">
                        <thead class=\"thead-dark\">
                            <tr>
                                <th scope=\"col\"></th>
                                <th scope=\"col\">";
        // line 26
        echo twig_escape_filter($this->env, (($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = ($context["strings"] ?? null)) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779["asuntoEvento"] ?? null) : null), "html", null, true);
        echo "</th>

                                <th scope=\"col\">";
        // line 28
        echo twig_escape_filter($this->env, (($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = ($context["strings"] ?? null)) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1["Fecha"] ?? null) : null), "html", null, true);
        echo "</th>
                                <th scope=\"col\">";
        // line 29
        echo twig_escape_filter($this->env, (($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 = ($context["strings"] ?? null)) && is_array($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0) || $__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 instanceof ArrayAccess ? ($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0["HoraInicio"] ?? null) : null), "html", null, true);
        echo "</th>
                                <th scope=\"col\">";
        // line 30
        echo twig_escape_filter($this->env, (($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 = ($context["strings"] ?? null)) && is_array($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866) || $__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 instanceof ArrayAccess ? ($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866["HoraFin"] ?? null) : null), "html", null, true);
        echo "</th>
                                <th scope=\"col\">";
        // line 31
        echo twig_escape_filter($this->env, (($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f = ($context["strings"] ?? null)) && is_array($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f) || $__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f instanceof ArrayAccess ? ($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f["asignatura"] ?? null) : null), "html", null, true);
        echo "</th>
                                <th scope=\"col\"></th>
\t\t\t\t\t            <th scope=\"col\"></th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 37
        if ((isset($context["nombres"]) || array_key_exists("nombres", $context))) {
            // line 38
            echo "                                ";
            $context["cont"] = 0;
            echo "      
\t\t\t\t\t\t\t\t";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["datos"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["dato"]) {
                // line 40
                echo "                                    <tr>
                                        <th><input type=\"checkbox\" name=\"eliminar[]\" value=\"";
                // line 41
                echo twig_escape_filter($this->env, (($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 = $context["dato"]) && is_array($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7) || $__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 instanceof ArrayAccess ? ($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7["0"] ?? null) : null), "html", null, true);
                echo "\"></th>
                                        <th width='400px'><a href='EVENTO_Controller.php?accion=";
                // line 42
                echo twig_escape_filter($this->env, (($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 = ($context["strings"] ?? null)) && is_array($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289) || $__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 instanceof ArrayAccess ? ($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289["Modificar"] ?? null) : null), "html", null, true);
                echo "&amp;idEvento=";
                echo twig_escape_filter($this->env, (($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 = $context["dato"]) && is_array($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18) || $__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 instanceof ArrayAccess ? ($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18["0"] ?? null) : null), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, (($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018 = $context["dato"]) && is_array($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018) || $__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018 instanceof ArrayAccess ? ($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018["1"] ?? null) : null), "html", null, true);
                echo "</a></th>
                                        <td>";
                // line 43
                echo twig_escape_filter($this->env, (($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413 = $context["dato"]) && is_array($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413) || $__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413 instanceof ArrayAccess ? ($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413["3"] ?? null) : null), "html", null, true);
                echo "</td>
                                        <td>";
                // line 44
                echo twig_escape_filter($this->env, (($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7 = $context["dato"]) && is_array($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7) || $__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7 instanceof ArrayAccess ? ($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7["4"] ?? null) : null), "html", null, true);
                echo "</td>
                                        <td>";
                // line 45
                echo twig_escape_filter($this->env, (($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c = $context["dato"]) && is_array($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c) || $__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c instanceof ArrayAccess ? ($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c["5"] ?? null) : null), "html", null, true);
                echo "</td>
                                        <td>";
                // line 46
                echo twig_escape_filter($this->env, (($__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40 = ($context["nombres"] ?? null)) && is_array($__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40) || $__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40 instanceof ArrayAccess ? ($__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40[($context["cont"] ?? null)] ?? null) : null), "html", null, true);
                echo "</td>

                                        <td><a href='EVENTO_Controller.php?idEvento=";
                // line 48
                echo twig_escape_filter($this->env, (($__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79 = $context["dato"]) && is_array($__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79) || $__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79 instanceof ArrayAccess ? ($__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79["0"] ?? null) : null), "html", null, true);
                echo "&amp;accion=";
                echo twig_escape_filter($this->env, (($__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1 = ($context["strings"] ?? null)) && is_array($__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1) || $__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1 instanceof ArrayAccess ? ($__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1["Modificar"] ?? null) : null), "html", null, true);
                echo "'><img src=\"../img/modify.png\" width=\"40px\" height=\"40px\"> ";
                echo twig_escape_filter($this->env, (($__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d = ($context["strings"] ?? null)) && is_array($__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d) || $__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d instanceof ArrayAccess ? ($__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d["Modificar"] ?? null) : null), "html", null, true);
                echo "</img></a></td>
                                        <td><a href=\"javascript:;\" onclick=\"alert('EVENTO_Controller.php?idEvento=";
                // line 49
                echo twig_escape_filter($this->env, (($__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0 = $context["dato"]) && is_array($__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0) || $__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0 instanceof ArrayAccess ? ($__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0["0"] ?? null) : null), "html", null, true);
                echo "&amp;accion=";
                echo twig_escape_filter($this->env, (($__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c = ($context["strings"] ?? null)) && is_array($__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c) || $__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c instanceof ArrayAccess ? ($__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c["Borrar"] ?? null) : null), "html", null, true);
                echo "&amp;username=username')\"><img src=\"../img/Delete.png\" width=\"40px\" height=\"40px\"> ";
                echo twig_escape_filter($this->env, (($__internal_4450f16bcd6eee436ec803be9cb8dd13e40acb5f3c668ce291f0476abc1a5b69 = ($context["strings"] ?? null)) && is_array($__internal_4450f16bcd6eee436ec803be9cb8dd13e40acb5f3c668ce291f0476abc1a5b69) || $__internal_4450f16bcd6eee436ec803be9cb8dd13e40acb5f3c668ce291f0476abc1a5b69 instanceof ArrayAccess ? ($__internal_4450f16bcd6eee436ec803be9cb8dd13e40acb5f3c668ce291f0476abc1a5b69["Borrar"] ?? null) : null), "html", null, true);
                echo "</img></a></td>
                                    </tr>
                                    ";
                // line 51
                $context["cont"] = (($context["cont"] ?? null) + 1);
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
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["datos"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["dato"]) {
                // line 55
                echo "                                    <tr>
                                        <th><input type=\"checkbox\" name=\"eliminar[]\" value=\"";
                // line 56
                echo twig_escape_filter($this->env, (($__internal_92ed32b8cbedc9f8b5b379c1ef395076f852e6115f19026df86a46e64a8be849 = $context["dato"]) && is_array($__internal_92ed32b8cbedc9f8b5b379c1ef395076f852e6115f19026df86a46e64a8be849) || $__internal_92ed32b8cbedc9f8b5b379c1ef395076f852e6115f19026df86a46e64a8be849 instanceof ArrayAccess ? ($__internal_92ed32b8cbedc9f8b5b379c1ef395076f852e6115f19026df86a46e64a8be849["0"] ?? null) : null), "html", null, true);
                echo "\"></th>
                                        <th width='400px'><a href='EVENTO_Controller.php?accion=";
                // line 57
                echo twig_escape_filter($this->env, (($__internal_ea7a33ac6d8a26ad47921e376e6221ddcc8585c46ced0d814217a4f86de9974e = ($context["strings"] ?? null)) && is_array($__internal_ea7a33ac6d8a26ad47921e376e6221ddcc8585c46ced0d814217a4f86de9974e) || $__internal_ea7a33ac6d8a26ad47921e376e6221ddcc8585c46ced0d814217a4f86de9974e instanceof ArrayAccess ? ($__internal_ea7a33ac6d8a26ad47921e376e6221ddcc8585c46ced0d814217a4f86de9974e["Modificar"] ?? null) : null), "html", null, true);
                echo "&amp;idEvento=";
                echo twig_escape_filter($this->env, (($__internal_9522a6cebeae41b694ef7a2cdef578aec938dae7d5acf43b2efd8c4c9bc5dabe = $context["dato"]) && is_array($__internal_9522a6cebeae41b694ef7a2cdef578aec938dae7d5acf43b2efd8c4c9bc5dabe) || $__internal_9522a6cebeae41b694ef7a2cdef578aec938dae7d5acf43b2efd8c4c9bc5dabe instanceof ArrayAccess ? ($__internal_9522a6cebeae41b694ef7a2cdef578aec938dae7d5acf43b2efd8c4c9bc5dabe["0"] ?? null) : null), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, (($__internal_9e736303ccc6dbec54334717fdf66a3c6c7a4ed563e8a9c6a92ccdbb773e19bf = $context["dato"]) && is_array($__internal_9e736303ccc6dbec54334717fdf66a3c6c7a4ed563e8a9c6a92ccdbb773e19bf) || $__internal_9e736303ccc6dbec54334717fdf66a3c6c7a4ed563e8a9c6a92ccdbb773e19bf instanceof ArrayAccess ? ($__internal_9e736303ccc6dbec54334717fdf66a3c6c7a4ed563e8a9c6a92ccdbb773e19bf["1"] ?? null) : null), "html", null, true);
                echo "</a></th>
                                        <td>";
                // line 58
                echo twig_escape_filter($this->env, (($__internal_8acdbb41833471eddc4b3c5a5c648038762a0ba2347958dbb7f312bec87c3d40 = $context["dato"]) && is_array($__internal_8acdbb41833471eddc4b3c5a5c648038762a0ba2347958dbb7f312bec87c3d40) || $__internal_8acdbb41833471eddc4b3c5a5c648038762a0ba2347958dbb7f312bec87c3d40 instanceof ArrayAccess ? ($__internal_8acdbb41833471eddc4b3c5a5c648038762a0ba2347958dbb7f312bec87c3d40["3"] ?? null) : null), "html", null, true);
                echo "</td>
                                        <td>";
                // line 59
                echo twig_escape_filter($this->env, (($__internal_0668ed57f15eabeed8d9c4a45059ac93dfae05f7fa406a2dc49ae0ccb4f55bad = $context["dato"]) && is_array($__internal_0668ed57f15eabeed8d9c4a45059ac93dfae05f7fa406a2dc49ae0ccb4f55bad) || $__internal_0668ed57f15eabeed8d9c4a45059ac93dfae05f7fa406a2dc49ae0ccb4f55bad instanceof ArrayAccess ? ($__internal_0668ed57f15eabeed8d9c4a45059ac93dfae05f7fa406a2dc49ae0ccb4f55bad["4"] ?? null) : null), "html", null, true);
                echo "</td>
                                        <td>";
                // line 60
                echo twig_escape_filter($this->env, (($__internal_e13139c4be4e2ff1c777544a2594638fcc3ca4c2221fe00c2149da0ddd1cc323 = $context["dato"]) && is_array($__internal_e13139c4be4e2ff1c777544a2594638fcc3ca4c2221fe00c2149da0ddd1cc323) || $__internal_e13139c4be4e2ff1c777544a2594638fcc3ca4c2221fe00c2149da0ddd1cc323 instanceof ArrayAccess ? ($__internal_e13139c4be4e2ff1c777544a2594638fcc3ca4c2221fe00c2149da0ddd1cc323["5"] ?? null) : null), "html", null, true);
                echo "</td>
                                        <td>";
                // line 61
                echo twig_escape_filter($this->env, (($__internal_abb62d7ada56c0cfc1a0dee78771b583349487dffc67903f3895606a65c3577c = $context["dato"]) && is_array($__internal_abb62d7ada56c0cfc1a0dee78771b583349487dffc67903f3895606a65c3577c) || $__internal_abb62d7ada56c0cfc1a0dee78771b583349487dffc67903f3895606a65c3577c instanceof ArrayAccess ? ($__internal_abb62d7ada56c0cfc1a0dee78771b583349487dffc67903f3895606a65c3577c["7"] ?? null) : null), "html", null, true);
                echo "</td>

                                        <td><a href='EVENTO_Controller.php?idEvento=";
                // line 63
                echo twig_escape_filter($this->env, (($__internal_c0905adf98cd1533a675c4106b3846093815c41a83169ae22d4b915e0fcb70c3 = $context["dato"]) && is_array($__internal_c0905adf98cd1533a675c4106b3846093815c41a83169ae22d4b915e0fcb70c3) || $__internal_c0905adf98cd1533a675c4106b3846093815c41a83169ae22d4b915e0fcb70c3 instanceof ArrayAccess ? ($__internal_c0905adf98cd1533a675c4106b3846093815c41a83169ae22d4b915e0fcb70c3["0"] ?? null) : null), "html", null, true);
                echo "&amp;accion=";
                echo twig_escape_filter($this->env, (($__internal_ec4b59f7be5e729f308b6e48c4483f79749dedb9a482762b64ba149aecfac14b = ($context["strings"] ?? null)) && is_array($__internal_ec4b59f7be5e729f308b6e48c4483f79749dedb9a482762b64ba149aecfac14b) || $__internal_ec4b59f7be5e729f308b6e48c4483f79749dedb9a482762b64ba149aecfac14b instanceof ArrayAccess ? ($__internal_ec4b59f7be5e729f308b6e48c4483f79749dedb9a482762b64ba149aecfac14b["Modificar"] ?? null) : null), "html", null, true);
                echo "'><img src=\"../img/modify.png\" width=\"40px\" height=\"40px\"> ";
                echo twig_escape_filter($this->env, (($__internal_4abb1b337c0ef25ef376bdea173e8ce13160d926e1bcb921fd263a0c3744dc8f = ($context["strings"] ?? null)) && is_array($__internal_4abb1b337c0ef25ef376bdea173e8ce13160d926e1bcb921fd263a0c3744dc8f) || $__internal_4abb1b337c0ef25ef376bdea173e8ce13160d926e1bcb921fd263a0c3744dc8f instanceof ArrayAccess ? ($__internal_4abb1b337c0ef25ef376bdea173e8ce13160d926e1bcb921fd263a0c3744dc8f["Modificar"] ?? null) : null), "html", null, true);
                echo "</img></a></td>
                                        <td><a href=\"javascript:;\" onclick=\"alert('EVENTO_Controller.php?idEvento=";
                // line 64
                echo twig_escape_filter($this->env, (($__internal_1f87e440d7b5ac0d3821fd704a87cfd009d5f0cfaa151c63b53e5d2f3e117b47 = $context["dato"]) && is_array($__internal_1f87e440d7b5ac0d3821fd704a87cfd009d5f0cfaa151c63b53e5d2f3e117b47) || $__internal_1f87e440d7b5ac0d3821fd704a87cfd009d5f0cfaa151c63b53e5d2f3e117b47 instanceof ArrayAccess ? ($__internal_1f87e440d7b5ac0d3821fd704a87cfd009d5f0cfaa151c63b53e5d2f3e117b47["0"] ?? null) : null), "html", null, true);
                echo "&amp;accion=";
                echo twig_escape_filter($this->env, (($__internal_5f0601c6aca043f0871c692399d8a4b50f756908e693f6dc8217a09ebec49d63 = ($context["strings"] ?? null)) && is_array($__internal_5f0601c6aca043f0871c692399d8a4b50f756908e693f6dc8217a09ebec49d63) || $__internal_5f0601c6aca043f0871c692399d8a4b50f756908e693f6dc8217a09ebec49d63 instanceof ArrayAccess ? ($__internal_5f0601c6aca043f0871c692399d8a4b50f756908e693f6dc8217a09ebec49d63["Borrar"] ?? null) : null), "html", null, true);
                echo "&amp;username=username')\"><img src=\"../img/Delete.png\" width=\"40px\" height=\"40px\"> ";
                echo twig_escape_filter($this->env, (($__internal_2ca27bbf98b4159f4f59a7748003a9c780384782aa02798832bfdb1e4413f68c = ($context["strings"] ?? null)) && is_array($__internal_2ca27bbf98b4159f4f59a7748003a9c780384782aa02798832bfdb1e4413f68c) || $__internal_2ca27bbf98b4159f4f59a7748003a9c780384782aa02798832bfdb1e4413f68c instanceof ArrayAccess ? ($__internal_2ca27bbf98b4159f4f59a7748003a9c780384782aa02798832bfdb1e4413f68c["Borrar"] ?? null) : null), "html", null, true);
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
        if ((isset($context["volver"]) || array_key_exists("volver", $context))) {
            // line 71
            echo "                        <a class=\"form-link\" href=\"";
            echo twig_escape_filter($this->env, ($context["volver"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($__internal_76fb338ba58f80d23455c79f0abb5764e150448d58ab4aec9c47558465bff0b8 = ($context["strings"] ?? null)) && is_array($__internal_76fb338ba58f80d23455c79f0abb5764e150448d58ab4aec9c47558465bff0b8) || $__internal_76fb338ba58f80d23455c79f0abb5764e150448d58ab4aec9c47558465bff0b8 instanceof ArrayAccess ? ($__internal_76fb338ba58f80d23455c79f0abb5764e150448d58ab4aec9c47558465bff0b8["Volver"] ?? null) : null), "html", null, true);
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
        return array (  255 => 73,  247 => 71,  245 => 70,  238 => 67,  225 => 64,  217 => 63,  212 => 61,  208 => 60,  204 => 59,  200 => 58,  192 => 57,  188 => 56,  185 => 55,  180 => 54,  177 => 53,  171 => 52,  169 => 51,  160 => 49,  152 => 48,  147 => 46,  143 => 45,  139 => 44,  135 => 43,  127 => 42,  123 => 41,  120 => 40,  116 => 39,  111 => 38,  109 => 37,  100 => 31,  96 => 30,  92 => 29,  88 => 28,  83 => 26,  71 => 19,  65 => 16,  62 => 15,  54 => 12,  51 => 11,  49 => 10,  42 => 5,  39 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block title %}{{ strings['Lista Eventos'] }}{% endblock %}
{% block body %}
        <div class=\"row\" style=\"clear:both;\">
            <div class=\"container\">
            <form method=\"POST\" action=\"\" id=\"frmEventos\">
                <div align='left'>
                    <ul class=\"nav\">
                        {% if userTipo == 2 %}
                        <li style=\"margin-right:40px;margin-top:7px;\">
                            <a href=\"../Controllers/EVENTO_Controller.php?accion={{ strings['Crear'] }}\"><img src=\"../img/add.png\" width=\"40px\" height=\"40px\"> {{ strings['CrearEvento'] }}</img></a>
                        </li>
                        {% endif %}
                        <li style=\"margin-right:40px;margin-top:7px;\">
                            <a href=\"../Controllers/EVENTO_Controller.php?accion=vistafiltrar\"><img src=\"../img/filter2.png\" width=\"40px\" height=\"40px\"> {{ strings['filtrar'] }}</img></a>
                        </li>
                        <li style=\"margin-right:40px;\">
                            <button type=\"submit\" class=\"btn btn-white\" onclick=\"../Controllers/EVENTO_Controller.php?accion={{ strings['Borrar'] }}&amp;username=username\" style=\"font-size:15px;\"><img src=\"../img/eliminar2.png\" width=\"40px\" height=\"40px\">  {{ strings['eliminarSelec'] }}</img></button>
                        </li>
                    </ul><br>
                    <table class=\"table\">
                        <thead class=\"thead-dark\">
                            <tr>
                                <th scope=\"col\"></th>
                                <th scope=\"col\">{{ strings['asuntoEvento'] }}</th>

                                <th scope=\"col\">{{ strings['Fecha'] }}</th>
                                <th scope=\"col\">{{ strings['HoraInicio'] }}</th>
                                <th scope=\"col\">{{ strings['HoraFin'] }}</th>
                                <th scope=\"col\">{{ strings['asignatura'] }}</th>
                                <th scope=\"col\"></th>
\t\t\t\t\t            <th scope=\"col\"></th>
                            </tr>
                        </thead>
                        <tbody>
                            {% if nombres is defined %}
                                {% set cont = 0 %}      
\t\t\t\t\t\t\t\t{% for dato in datos %}
                                    <tr>
                                        <th><input type=\"checkbox\" name=\"eliminar[]\" value=\"{{ dato['0'] }}\"></th>
                                        <th width='400px'><a href='EVENTO_Controller.php?accion={{ strings['Modificar'] }}&amp;idEvento={{ dato['0'] }}'>{{ dato['1'] }}</a></th>
                                        <td>{{ dato['3']}}</td>
                                        <td>{{ dato['4']}}</td>
                                        <td>{{ dato['5']}}</td>
                                        <td>{{ nombres[cont] }}</td>

                                        <td><a href='EVENTO_Controller.php?idEvento={{ dato['0'] }}&amp;accion={{ strings['Modificar'] }}'><img src=\"../img/modify.png\" width=\"40px\" height=\"40px\"> {{ strings['Modificar'] }}</img></a></td>
                                        <td><a href=\"javascript:;\" onclick=\"alert('EVENTO_Controller.php?idEvento={{ dato['0'] }}&amp;accion={{ strings['Borrar'] }}&amp;username=username')\"><img src=\"../img/Delete.png\" width=\"40px\" height=\"40px\"> {{ strings['Borrar'] }}</img></a></td>
                                    </tr>
                                    {% set cont = cont + 1 %}
\t\t\t\t\t\t\t\t{% endfor %}
                            {% else %}
                                {% for dato in datos %}
                                    <tr>
                                        <th><input type=\"checkbox\" name=\"eliminar[]\" value=\"{{ dato['0'] }}\"></th>
                                        <th width='400px'><a href='EVENTO_Controller.php?accion={{ strings['Modificar'] }}&amp;idEvento={{ dato['0'] }}'>{{ dato['1'] }}</a></th>
                                        <td>{{ dato['3']}}</td>
                                        <td>{{ dato['4']}}</td>
                                        <td>{{ dato['5']}}</td>
                                        <td>{{ dato['7']}}</td>

                                        <td><a href='EVENTO_Controller.php?idEvento={{ dato['0'] }}&amp;accion={{ strings['Modificar'] }}'><img src=\"../img/modify.png\" width=\"40px\" height=\"40px\"> {{ strings['Modificar'] }}</img></a></td>
                                        <td><a href=\"javascript:;\" onclick=\"alert('EVENTO_Controller.php?idEvento={{ dato['0'] }}&amp;accion={{ strings['Borrar'] }}&amp;username=username')\"><img src=\"../img/Delete.png\" width=\"40px\" height=\"40px\"> {{ strings['Borrar'] }}</img></a></td>
                                    </tr>
\t\t\t\t\t\t\t\t{% endfor %}
                            {% endif %}\t\t\t\t\t\t\t                           
                        </tbody>
                    </table>
                    {% if volver is defined %}
                        <a class=\"form-link\" href=\"{{ volver }}\">{{ strings['Volver'] }}</a>
                    {% endif %}
                </div>
            </form>
            </div>
        </div>
{% endblock %}", "EventoShowall.html.twig", "C:\\xampp\\htdocs\\UniOrganizerTB\\UniOrganizer\\templates\\EventoShowall.html.twig");
    }
}
