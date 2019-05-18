<?php

/* Default.html.twig */
class __TwigTemplate_b05d97190952f4bf2e8a8e0942dbe36b4f52401d5d2384bbc00e2373178c0c0e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "Default.html.twig", 1);
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
        echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["strings"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["Vista Principal"] ?? null) : null), "html", null, true);
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        // line 5
        echo "\t\t";
        if ((($context["userTipo"] ?? null) == 2)) {
            // line 6
            echo "\t\t\t\t\t\t<html>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<head>
\t\t\t\t\t\t\t\t<link href='";
            // line 9
            echo "../fullcalendar-4.1.0/packages/core/main.css";
            echo "' rel='stylesheet' />
\t\t\t\t\t\t\t\t<link href='";
            // line 10
            echo "../fullcalendar-4.1.0/packages/daygrid/main.css";
            echo "' rel='stylesheet' />
\t\t\t\t\t\t\t\t<link href='";
            // line 11
            echo "../fullcalendar-4.1.0/packages/timegrid/main.css";
            echo "' rel='stylesheet' />
\t\t\t\t\t\t\t\t<link href='";
            // line 12
            echo "../fullcalendar-4.1.0/packages/list/main.css";
            echo "' rel='stylesheet' />
\t\t\t\t\t\t\t\t<link href='";
            // line 13
            echo "../fullcalendar-4.1.0/packages/bootstrap/main.css";
            echo "' rel='stylesheet' />

\t\t\t\t\t\t\t\t<script src='../fullcalendar-4.1.0/packages/core/main.js'></script>
\t\t\t\t\t\t\t\t<script src='../fullcalendar-4.1.0/packages/interaction/main.js'></script>
\t\t\t\t\t\t\t\t<script src='../fullcalendar-4.1.0/packages/daygrid/main.js'></script>
\t\t\t\t\t\t\t\t<script src='../fullcalendar-4.1.0/packages/timegrid/main.js'></script>
\t\t\t\t\t\t\t\t<script src='../fullcalendar-4.1.0/packages/list/main.js'></script>
\t\t\t\t\t\t\t\t<script src='../fullcalendar-4.1.0/packages/bootstrap/main.js'></script>
\t\t\t\t\t\t\t\t<script src='../fullcalendar-4.1.0/packages/core/locales-all.js'></script>\t

\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\tvar idioma = \"";
            // line 24
            echo twig_escape_filter($this->env, ($context["IDIOMA"] ?? null), "html", null, true);
            echo "\";
\t\t\t\t\t\t\t\t\tvar events = [];
\t\t\t\t\t\t\t\t\t";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["eventos"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["evento"]) {
                // line 27
                echo "\t\t\t\t\t\t\t\t\t\tevents.push({
\t\t\t\t\t\t\t\t\t\t\t\"id\": \"";
                // line 28
                echo twig_escape_filter($this->env, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = $context["evento"]) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["idEvento"] ?? null) : null), "html", null, true);
                echo "\",
\t\t\t\t\t\t\t\t\t\t\t\"asunto\": \"";
                // line 29
                echo twig_escape_filter($this->env, (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = $context["evento"]) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["asuntoEvento"] ?? null) : null), "html", null, true);
                echo "\",
\t\t\t\t\t\t\t\t\t\t\t\"dia\": \"";
                // line 30
                echo twig_escape_filter($this->env, (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = $context["evento"]) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9["dia"] ?? null) : null), "html", null, true);
                echo "\",
\t\t\t\t\t\t\t\t\t\t\t\"horaInicio\": \"";
                // line 31
                echo twig_escape_filter($this->env, (($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = $context["evento"]) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217["horaInicio"] ?? null) : null), "html", null, true);
                echo "\",
\t\t\t\t\t\t\t\t\t\t\t\"horaFin\": \"";
                // line 32
                echo twig_escape_filter($this->env, (($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = $context["evento"]) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105["horaFin"] ?? null) : null), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evento'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "
\t\t\t\t\t\t\t\t\tvar alerts = [];
\t\t\t\t\t\t\t\t\t";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["alertas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["alerta"]) {
                // line 38
                echo "\t\t\t\t\t\t\t\t\t\talerts.push({
\t\t\t\t\t\t\t\t\t\t\t\"id\": \"";
                // line 39
                echo twig_escape_filter($this->env, (($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = $context["alerta"]) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779["idAlerta"] ?? null) : null), "html", null, true);
                echo "\",
\t\t\t\t\t\t\t\t\t\t\t\"asunto\": \"";
                // line 40
                echo twig_escape_filter($this->env, (($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = $context["alerta"]) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1["asuntoAlerta"] ?? null) : null), "html", null, true);
                echo "\",
\t\t\t\t\t\t\t\t\t\t\t\"dia\": \"";
                // line 41
                echo twig_escape_filter($this->env, (($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 = $context["alerta"]) && is_array($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0) || $__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 instanceof ArrayAccess ? ($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0["dia"] ?? null) : null), "html", null, true);
                echo "\",
\t\t\t\t\t\t\t\t\t\t\t\"horaInicio\": \"";
                // line 42
                echo twig_escape_filter($this->env, (($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 = $context["alerta"]) && is_array($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866) || $__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 instanceof ArrayAccess ? ($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866["horaInicio"] ?? null) : null), "html", null, true);
                echo "\",
\t\t\t\t\t\t\t\t\t\t\t\"horaFin\": \"";
                // line 43
                echo twig_escape_filter($this->env, (($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f = $context["alerta"]) && is_array($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f) || $__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f instanceof ArrayAccess ? ($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f["horaFin"] ?? null) : null), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alerta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "
\t\t\t\t\t\t\t\t\tdocument.addEventListener('DOMContentLoaded', function() {
\t\t\t\t\t\t\t\t\t\tvar calendarEl = document.getElementById('calendar');
\t\t\t\t\t\t\t\t\t\tvar date = new Date();
\t\t\t\t\t\t\t\t\t\tvar d = date.getDate();
\t\t\t\t\t\t\t\t\t\tvar m = date.getMonth();
\t\t\t\t\t\t\t\t\t\tvar y = date.getFullYear();
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t/*  className colors
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\tclassName: default(transparent), important(red), chill(pink), success(green), info(blue)
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t*/\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t/* initialize the calendar
\t\t\t\t\t\t\t\t\t\t-----------------------------------------------------------------*/
\t\t\t\t\t\t\t\t\t\tvar eventsArray = [];
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\tfor (var k = 0; k < events.length; k++) {
\t\t\t\t\t\t\t\t\t\t\tvar evento = events[k];
\t\t\t\t\t\t\t\t\t\t\tvar fecha = evento[\"dia\"];
\t\t\t\t\t\t\t\t\t\t\tvar año = fecha.substr(0, 4);
\t\t\t\t\t\t\t\t\t\t\tvar mes = fecha.substr(5, 2) - 1;
\t\t\t\t\t\t\t\t\t\t\tvar dia = fecha.substr(8, 2);
\t\t\t\t\t\t\t\t\t\t\tvar horaInicio = evento[\"horaInicio\"];
\t\t\t\t\t\t\t\t\t\t\tvar horaI = horaInicio.substr(0, 2);
\t\t\t\t\t\t\t\t\t\t\tvar minI = horaInicio.substr(3, 2);
\t\t\t\t\t\t\t\t\t\t\tvar horaFin = evento[\"horaFin\"];
\t\t\t\t\t\t\t\t\t\t\tvar horaF = horaFin.substr(0, 2);
\t\t\t\t\t\t\t\t\t\t\tvar minF = horaFin.substr(3, 2);
\t\t\t\t\t\t\t\t\t\t\tvar asunto = evento[\"asunto\"];
\t\t\t\t\t\t\t\t\t\t\tvar id = evento[\"id\"];
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\tvar newEvent = [];
\t\t\t\t\t\t\t\t\t\t\tnewEvent[0] = id;
\t\t\t\t\t\t\t\t\t\t\tnewEvent[1] = asunto;
\t\t\t\t\t\t\t\t\t\t\tnewEvent[2] = new Date(año, mes, dia, horaI, minI); //got date string here exactly similar to the calendar's
\t\t\t\t\t\t\t\t\t\t\tnewEvent[3] = new Date(año, mes, dia, horaF, minF);
\t\t\t\t\t\t\t\t\t\t\teventsArray.push(newEvent);
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\tvar alertsArray = [];
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\tfor (var k = 0; k < alerts.length; k++) {
\t\t\t\t\t\t\t\t\t\t\tvar alerta = alerts[k];
\t\t\t\t\t\t\t\t\t\t\tvar fecha = alerta[\"dia\"];
\t\t\t\t\t\t\t\t\t\t\tvar año = fecha.substr(0, 4);
\t\t\t\t\t\t\t\t\t\t\tvar mes = fecha.substr(5, 2) - 1;
\t\t\t\t\t\t\t\t\t\t\tvar dia = fecha.substr(8, 2);
\t\t\t\t\t\t\t\t\t\t\tvar horaInicio = alerta[\"horaInicio\"];
\t\t\t\t\t\t\t\t\t\t\tvar horaI = horaInicio.substr(0, 2);
\t\t\t\t\t\t\t\t\t\t\tvar minI = horaInicio.substr(3, 2);
\t\t\t\t\t\t\t\t\t\t\tvar horaFin = alerta[\"horaFin\"];
\t\t\t\t\t\t\t\t\t\t\tvar horaF = horaFin.substr(0, 2);
\t\t\t\t\t\t\t\t\t\t\tvar minF = horaFin.substr(3, 2);
\t\t\t\t\t\t\t\t\t\t\tvar asunto = alerta[\"asunto\"];
\t\t\t\t\t\t\t\t\t\t\tvar id = alerta[\"id\"];
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\tvar newEvent = [];
\t\t\t\t\t\t\t\t\t\t\tnewEvent[0] = id;
\t\t\t\t\t\t\t\t\t\t\tnewEvent[1] = asunto;
\t\t\t\t\t\t\t\t\t\t\tnewEvent[2] = new Date(año, mes, dia, horaI, minI); //got date string here exactly similar to the calendar's
\t\t\t\t\t\t\t\t\t\t\tnewEvent[3] = new Date(año, mes, dia, horaF, minF);
\t\t\t\t\t\t\t\t\t\t\talertsArray.push(newEvent);
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\tvar formattedEventData = [];
\t\t\t\t\t\t\t\t\t\tfor (var k = 0; k < eventsArray.length; k++) {
\t\t\t\t\t\t\t\t\t\t\tformattedEventData.push({
\t\t\t\t\t\t\t\t\t\t\t\tid: eventsArray[k][0],
\t\t\t\t\t\t\t\t\t\t\t\ttitle: eventsArray[k][1],
\t\t\t\t\t\t\t\t\t\t\t\tstart: eventsArray[k][2],
\t\t\t\t\t\t\t\t\t\t\t\tend: eventsArray[k][3],
\t\t\t\t\t\t\t\t\t\t\t\tallDay: false,
\t\t\t\t\t\t\t\t\t\t\t\tclassName: 'info',
\t\t\t\t\t\t\t\t\t\t\t    backgroundColor: '#03a9f3 !important',
\t\t\t\t\t\t\t\t\t\t\t\tborderColor: '#03a9f3',
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t
\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\tfor (var k = 0; k < alertsArray.length; k++) {
\t\t\t\t\t\t\t\t\t\t\tformattedEventData.push({
\t\t\t\t\t\t\t\t\t\t\t\tid: alertsArray[k][0],
\t\t\t\t\t\t\t\t\t\t\t\ttitle: alertsArray[k][1],
\t\t\t\t\t\t\t\t\t\t\t\tstart: alertsArray[k][2],
\t\t\t\t\t\t\t\t\t\t\t\tend: alertsArray[k][3],
\t\t\t\t\t\t\t\t\t\t\t\tbackgroundColor: '#F28502 !important',
\t\t\t\t\t\t\t\t\t\t\t\tborderColor: '#F28502',
\t\t\t\t\t\t\t\t\t\t\t\tallDay: false,
\t\t\t\t\t\t\t\t\t\t\t\tclassName: 'info'
\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\tvar calendar = new FullCalendar.Calendar(calendarEl, {
\t\t\t\t\t\t\t\t\t\t\tplugins: [ 'interaction', 'dayGrid', 'timeGrid', 'bootstrap', 'list' ],
  \t\t\t\t\t\t\t\t\t\t\tthemeSystem: 'bootstrap',
\t\t\t\t\t\t\t\t\t\t\tlocale: 'es',\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\theader:{
\t\t\t\t\t\t\t\t\t\t\t\tleft:   'dayGridMonth, timeGridWeek, timeGridDay, list',
\t\t\t\t\t\t\t\t\t\t\t\tcenter: 'title',
\t\t\t\t\t\t\t\t\t\t\t\tright:  'today prev,next'
\t\t\t\t\t\t\t\t\t\t\t},\t\t
\t\t\t\t\t\t\t\t\t\t\tdefaultView: 'dayGridMonth',
\t\t\t\t\t\t\t\t\t\t\tnowIndicator: true,
\t\t\t\t\t\t\t\t\t\t\tviews: {
\t\t\t\t\t\t\t\t\t\t\t\tdayGridMonth: { // name of view
\t\t\t\t\t\t\t\t\t\t\t\t\ttitleFormat: { year: 'numeric', month: 'long' }
\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\ttimeGridWeek: { // name of view
\t\t\t\t\t\t\t\t\t\t\t\t\ttitleFormat: { year: 'numeric', month: 'short', day: 'numeric' }
\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\ttimeGridDay: { // name of view
\t\t\t\t\t\t\t\t\t\t\t\t\ttitleFormat: { year: 'numeric', month: 'long', day: 'numeric' }
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\teditable: false,
\t\t\t\t\t\t\t\t\t\t\tfirstDay: 1, //  1(Monday) this can be changed to 0(Sunday) for the USA system
\t\t\t\t\t\t\t\t\t\t\tselectable: true,
\t\t\t\t\t\t\t\t\t\t\taxisFormat: 'h:mm',
\t\t\t\t\t\t\t\t\t\t\tcolumnFormat: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmonth: 'ddd',    // Mon
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tweek: 'ddd d', // Mon 7
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tday: 'dddd M/d',  // Monday 9/7
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tagendaDay: 'dddd d'
\t\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\tallDaySlot: false,
\t\t\t\t\t\t\t\t\t\t\tselectHelper: true,
\t\t\t\t\t\t\t\t\t\t\tselect: function(info) {
\t\t\t\t\t\t\t\t\t\t\t\twindow.location.href='../Controllers/EVENTO_Controller.php?fecha=' + info.start + '&accion=";
            // line 177
            echo twig_escape_filter($this->env, (($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 = ($context["strings"] ?? null)) && is_array($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7) || $__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 instanceof ArrayAccess ? ($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7["Crear"] ?? null) : null), "html", null, true);
            echo "&calendario=calendario';
\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\teventClick:  function(info) {
\t\t\t\t\t\t\t\t\t\t\t\tif(info.event.borderColor=='#03a9f3'){
\t\t\t\t\t\t\t\t\t\t\t\t\twindow.location.href='../Controllers/EVENTO_Controller.php?idEvento=' + info.event.id + '&accion=";
            // line 181
            echo twig_escape_filter($this->env, (($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 = ($context["strings"] ?? null)) && is_array($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289) || $__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 instanceof ArrayAccess ? ($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289["Modificar"] ?? null) : null), "html", null, true);
            echo "&calendario=calendario&class=' + info.event.borderColor + '';
\t\t\t\t\t\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\t\t\t\t\t\twindow.location.href='../Controllers/EVENTO_Controller.php?idEvento=' + info.event.id + '&accion=";
            // line 183
            echo twig_escape_filter($this->env, (($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 = ($context["strings"] ?? null)) && is_array($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18) || $__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 instanceof ArrayAccess ? ($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18["Modificar"] ?? null) : null), "html", null, true);
            echo "&calendario=calendario';
\t\t\t\t\t\t\t\t\t\t\t\t}\t\t
\t\t\t\t\t\t\t\t\t\t\t},\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\tevents: formattedEventData,\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\tif(idioma == \"Castellano\"){
\t\t\t\t\t\t\t\t\t\t\tcalendar.setOption('locale', 'es');
\t\t\t\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\t\t\t\tif(idioma == \"English\"){
\t\t\t\t\t\t\t\t\t\t\t\tcalendar.setOption('locale', 'en');
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\tcalendar.render();
\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t<style>

\t\t\t\t\t\t\t\t\tbody {
\t\t\t\t\t\t\t\t\t\ttext-align: center;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t#wrap {
\t\t\t\t\t\t\t\t\t\twidth: 1100px;
\t\t\t\t\t\t\t\t\t\tmargin: 0 auto;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t#external-events {
\t\t\t\t\t\t\t\t\t\tfloat: left;
\t\t\t\t\t\t\t\t\t\twidth: 150px;
\t\t\t\t\t\t\t\t\t\tpadding: 0 10px;
\t\t\t\t\t\t\t\t\t\ttext-align: left;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t#external-events h4 {
\t\t\t\t\t\t\t\t\t\tfont-size: 16px;
\t\t\t\t\t\t\t\t\t\tmargin-top: 0;
\t\t\t\t\t\t\t\t\t\tpadding-top: 1em;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t.external-event { /* try to mimick the look of a real event */
\t\t\t\t\t\t\t\t\t\tmargin: 10px 0;
\t\t\t\t\t\t\t\t\t\tpadding: 2px 4px;
\t\t\t\t\t\t\t\t\t\tbackground: #3366CC;
\t\t\t\t\t\t\t\t\t\tcolor: #fff;
\t\t\t\t\t\t\t\t\t\tfont-size: .85em;
\t\t\t\t\t\t\t\t\t\tcursor: pointer;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t#external-events p {
\t\t\t\t\t\t\t\t\t\tmargin: 1.5em 0;
\t\t\t\t\t\t\t\t\t\tfont-size: 11px;
\t\t\t\t\t\t\t\t\t\tcolor: #666;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t#external-events p input {
\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\tvertical-align: middle;
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t#calendar {
\t\t\t\t\t\t\t\t/* \t\tfloat: right; */
\t\t\t\t\t\t\t\t\t\tmargin: 0 auto;
\t\t\t\t\t\t\t\t\t\twidth: 900px;
\t\t\t\t\t\t\t\t\t\tbackground-color: #FFFFFF;
\t\t\t\t\t\t\t\t\t\tborder-radius: 6px;
\t\t\t\t\t\t\t\t\t\tbox-shadow: 0 1px 2px #C3C3C3;
\t\t\t\t\t\t\t\t\t\t-webkit-box-shadow: 0px 0px 21px 2px rgba(0,0,0,0.18);
\t\t\t\t\t\t\t\t\t\t-moz-box-shadow: 0px 0px 21px 2px rgba(0,0,0,0.18);
\t\t\t\t\t\t\t\t\t\tbox-shadow: 0px 0px 21px 2px rgba(0,0,0,0.18);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t</style>
\t\t\t\t\t\t\t</head>
\t\t\t\t\t\t\t\t<div class=\"row\" style=\"clear:both;\">
\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t<div id='wrap'>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav\" style=\"margin-top: 0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li style=\"margin-right:40px;margin-left:430px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"../Functions/Refresh.php\" role=\"Refresh\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"IDIOMA\" value=\"";
            // line 264
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "IDIOMA", []), "html", null, true);
            echo "\" hidden=true>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"username\" value=\"";
            // line 265
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", []), "html", null, true);
            echo "\" hidden=true>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"calendario\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=-1></option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 268
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "misCalendarios", []));
            foreach ($context['_seq'] as $context["_key"] => $context["calendario"]) {
                // line 269
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, (($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018 = $context["calendario"]) && is_array($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018) || $__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018 instanceof ArrayAccess ? ($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018["idCalendario"] ?? null) : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413 = $context["calendario"]) && is_array($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413) || $__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413 instanceof ArrayAccess ? ($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413["nombreCalendario"] ?? null) : null), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['calendario'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 271
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"accion\" class=\"btn btn-lg btn-primary\" value=\"Refresh\" style=\"width: 75px; height: 40px; font-size: 15px;\">";
            // line 272
            echo twig_escape_filter($this->env, (($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7 = ($context["strings"] ?? null)) && is_array($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7) || $__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7 instanceof ArrayAccess ? ($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7["Filtrar"] ?? null) : null), "html", null, true);
            echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id='calendar'></div>
\t\t\t\t\t\t\t\t\t\t\t<div style='clear:both'></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</html>
      ";
        }
    }

    public function getTemplateName()
    {
        return "Default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 272,  407 => 271,  396 => 269,  392 => 268,  386 => 265,  382 => 264,  298 => 183,  293 => 181,  286 => 177,  153 => 46,  144 => 43,  140 => 42,  136 => 41,  132 => 40,  128 => 39,  125 => 38,  121 => 37,  117 => 35,  108 => 32,  104 => 31,  100 => 30,  96 => 29,  92 => 28,  89 => 27,  85 => 26,  80 => 24,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  45 => 6,  42 => 5,  39 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block title %}{{ strings[\"Vista Principal\"] }}{% endblock %}
{% block body %}
\t\t{% if userTipo == 2 %}
\t\t\t\t\t\t<html>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<head>
\t\t\t\t\t\t\t\t<link href='{{\"../fullcalendar-4.1.0/packages/core/main.css\"}}' rel='stylesheet' />
\t\t\t\t\t\t\t\t<link href='{{\"../fullcalendar-4.1.0/packages/daygrid/main.css\"}}' rel='stylesheet' />
\t\t\t\t\t\t\t\t<link href='{{\"../fullcalendar-4.1.0/packages/timegrid/main.css\"}}' rel='stylesheet' />
\t\t\t\t\t\t\t\t<link href='{{\"../fullcalendar-4.1.0/packages/list/main.css\"}}' rel='stylesheet' />
\t\t\t\t\t\t\t\t<link href='{{\"../fullcalendar-4.1.0/packages/bootstrap/main.css\"}}' rel='stylesheet' />

\t\t\t\t\t\t\t\t<script src='../fullcalendar-4.1.0/packages/core/main.js'></script>
\t\t\t\t\t\t\t\t<script src='../fullcalendar-4.1.0/packages/interaction/main.js'></script>
\t\t\t\t\t\t\t\t<script src='../fullcalendar-4.1.0/packages/daygrid/main.js'></script>
\t\t\t\t\t\t\t\t<script src='../fullcalendar-4.1.0/packages/timegrid/main.js'></script>
\t\t\t\t\t\t\t\t<script src='../fullcalendar-4.1.0/packages/list/main.js'></script>
\t\t\t\t\t\t\t\t<script src='../fullcalendar-4.1.0/packages/bootstrap/main.js'></script>
\t\t\t\t\t\t\t\t<script src='../fullcalendar-4.1.0/packages/core/locales-all.js'></script>\t

\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\tvar idioma = \"{{ IDIOMA }}\";
\t\t\t\t\t\t\t\t\tvar events = [];
\t\t\t\t\t\t\t\t\t{% for evento in eventos %}
\t\t\t\t\t\t\t\t\t\tevents.push({
\t\t\t\t\t\t\t\t\t\t\t\"id\": \"{{ evento['idEvento'] }}\",
\t\t\t\t\t\t\t\t\t\t\t\"asunto\": \"{{ evento['asuntoEvento'] }}\",
\t\t\t\t\t\t\t\t\t\t\t\"dia\": \"{{ evento['dia'] }}\",
\t\t\t\t\t\t\t\t\t\t\t\"horaInicio\": \"{{ evento['horaInicio'] }}\",
\t\t\t\t\t\t\t\t\t\t\t\"horaFin\": \"{{ evento['horaFin'] }}\"
\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t\t\tvar alerts = [];
\t\t\t\t\t\t\t\t\t{% for alerta in alertas %}
\t\t\t\t\t\t\t\t\t\talerts.push({
\t\t\t\t\t\t\t\t\t\t\t\"id\": \"{{ alerta['idAlerta'] }}\",
\t\t\t\t\t\t\t\t\t\t\t\"asunto\": \"{{ alerta['asuntoAlerta'] }}\",
\t\t\t\t\t\t\t\t\t\t\t\"dia\": \"{{ alerta['dia'] }}\",
\t\t\t\t\t\t\t\t\t\t\t\"horaInicio\": \"{{ alerta['horaInicio'] }}\",
\t\t\t\t\t\t\t\t\t\t\t\"horaFin\": \"{{ alerta['horaFin'] }}\"
\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t\t\tdocument.addEventListener('DOMContentLoaded', function() {
\t\t\t\t\t\t\t\t\t\tvar calendarEl = document.getElementById('calendar');
\t\t\t\t\t\t\t\t\t\tvar date = new Date();
\t\t\t\t\t\t\t\t\t\tvar d = date.getDate();
\t\t\t\t\t\t\t\t\t\tvar m = date.getMonth();
\t\t\t\t\t\t\t\t\t\tvar y = date.getFullYear();
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t/*  className colors
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\tclassName: default(transparent), important(red), chill(pink), success(green), info(blue)
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t*/\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t/* initialize the calendar
\t\t\t\t\t\t\t\t\t\t-----------------------------------------------------------------*/
\t\t\t\t\t\t\t\t\t\tvar eventsArray = [];
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\tfor (var k = 0; k < events.length; k++) {
\t\t\t\t\t\t\t\t\t\t\tvar evento = events[k];
\t\t\t\t\t\t\t\t\t\t\tvar fecha = evento[\"dia\"];
\t\t\t\t\t\t\t\t\t\t\tvar año = fecha.substr(0, 4);
\t\t\t\t\t\t\t\t\t\t\tvar mes = fecha.substr(5, 2) - 1;
\t\t\t\t\t\t\t\t\t\t\tvar dia = fecha.substr(8, 2);
\t\t\t\t\t\t\t\t\t\t\tvar horaInicio = evento[\"horaInicio\"];
\t\t\t\t\t\t\t\t\t\t\tvar horaI = horaInicio.substr(0, 2);
\t\t\t\t\t\t\t\t\t\t\tvar minI = horaInicio.substr(3, 2);
\t\t\t\t\t\t\t\t\t\t\tvar horaFin = evento[\"horaFin\"];
\t\t\t\t\t\t\t\t\t\t\tvar horaF = horaFin.substr(0, 2);
\t\t\t\t\t\t\t\t\t\t\tvar minF = horaFin.substr(3, 2);
\t\t\t\t\t\t\t\t\t\t\tvar asunto = evento[\"asunto\"];
\t\t\t\t\t\t\t\t\t\t\tvar id = evento[\"id\"];
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\tvar newEvent = [];
\t\t\t\t\t\t\t\t\t\t\tnewEvent[0] = id;
\t\t\t\t\t\t\t\t\t\t\tnewEvent[1] = asunto;
\t\t\t\t\t\t\t\t\t\t\tnewEvent[2] = new Date(año, mes, dia, horaI, minI); //got date string here exactly similar to the calendar's
\t\t\t\t\t\t\t\t\t\t\tnewEvent[3] = new Date(año, mes, dia, horaF, minF);
\t\t\t\t\t\t\t\t\t\t\teventsArray.push(newEvent);
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\tvar alertsArray = [];
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\tfor (var k = 0; k < alerts.length; k++) {
\t\t\t\t\t\t\t\t\t\t\tvar alerta = alerts[k];
\t\t\t\t\t\t\t\t\t\t\tvar fecha = alerta[\"dia\"];
\t\t\t\t\t\t\t\t\t\t\tvar año = fecha.substr(0, 4);
\t\t\t\t\t\t\t\t\t\t\tvar mes = fecha.substr(5, 2) - 1;
\t\t\t\t\t\t\t\t\t\t\tvar dia = fecha.substr(8, 2);
\t\t\t\t\t\t\t\t\t\t\tvar horaInicio = alerta[\"horaInicio\"];
\t\t\t\t\t\t\t\t\t\t\tvar horaI = horaInicio.substr(0, 2);
\t\t\t\t\t\t\t\t\t\t\tvar minI = horaInicio.substr(3, 2);
\t\t\t\t\t\t\t\t\t\t\tvar horaFin = alerta[\"horaFin\"];
\t\t\t\t\t\t\t\t\t\t\tvar horaF = horaFin.substr(0, 2);
\t\t\t\t\t\t\t\t\t\t\tvar minF = horaFin.substr(3, 2);
\t\t\t\t\t\t\t\t\t\t\tvar asunto = alerta[\"asunto\"];
\t\t\t\t\t\t\t\t\t\t\tvar id = alerta[\"id\"];
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\tvar newEvent = [];
\t\t\t\t\t\t\t\t\t\t\tnewEvent[0] = id;
\t\t\t\t\t\t\t\t\t\t\tnewEvent[1] = asunto;
\t\t\t\t\t\t\t\t\t\t\tnewEvent[2] = new Date(año, mes, dia, horaI, minI); //got date string here exactly similar to the calendar's
\t\t\t\t\t\t\t\t\t\t\tnewEvent[3] = new Date(año, mes, dia, horaF, minF);
\t\t\t\t\t\t\t\t\t\t\talertsArray.push(newEvent);
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\tvar formattedEventData = [];
\t\t\t\t\t\t\t\t\t\tfor (var k = 0; k < eventsArray.length; k++) {
\t\t\t\t\t\t\t\t\t\t\tformattedEventData.push({
\t\t\t\t\t\t\t\t\t\t\t\tid: eventsArray[k][0],
\t\t\t\t\t\t\t\t\t\t\t\ttitle: eventsArray[k][1],
\t\t\t\t\t\t\t\t\t\t\t\tstart: eventsArray[k][2],
\t\t\t\t\t\t\t\t\t\t\t\tend: eventsArray[k][3],
\t\t\t\t\t\t\t\t\t\t\t\tallDay: false,
\t\t\t\t\t\t\t\t\t\t\t\tclassName: 'info',
\t\t\t\t\t\t\t\t\t\t\t    backgroundColor: '#03a9f3 !important',
\t\t\t\t\t\t\t\t\t\t\t\tborderColor: '#03a9f3',
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t
\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\tfor (var k = 0; k < alertsArray.length; k++) {
\t\t\t\t\t\t\t\t\t\t\tformattedEventData.push({
\t\t\t\t\t\t\t\t\t\t\t\tid: alertsArray[k][0],
\t\t\t\t\t\t\t\t\t\t\t\ttitle: alertsArray[k][1],
\t\t\t\t\t\t\t\t\t\t\t\tstart: alertsArray[k][2],
\t\t\t\t\t\t\t\t\t\t\t\tend: alertsArray[k][3],
\t\t\t\t\t\t\t\t\t\t\t\tbackgroundColor: '#F28502 !important',
\t\t\t\t\t\t\t\t\t\t\t\tborderColor: '#F28502',
\t\t\t\t\t\t\t\t\t\t\t\tallDay: false,
\t\t\t\t\t\t\t\t\t\t\t\tclassName: 'info'
\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\tvar calendar = new FullCalendar.Calendar(calendarEl, {
\t\t\t\t\t\t\t\t\t\t\tplugins: [ 'interaction', 'dayGrid', 'timeGrid', 'bootstrap', 'list' ],
  \t\t\t\t\t\t\t\t\t\t\tthemeSystem: 'bootstrap',
\t\t\t\t\t\t\t\t\t\t\tlocale: 'es',\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\theader:{
\t\t\t\t\t\t\t\t\t\t\t\tleft:   'dayGridMonth, timeGridWeek, timeGridDay, list',
\t\t\t\t\t\t\t\t\t\t\t\tcenter: 'title',
\t\t\t\t\t\t\t\t\t\t\t\tright:  'today prev,next'
\t\t\t\t\t\t\t\t\t\t\t},\t\t
\t\t\t\t\t\t\t\t\t\t\tdefaultView: 'dayGridMonth',
\t\t\t\t\t\t\t\t\t\t\tnowIndicator: true,
\t\t\t\t\t\t\t\t\t\t\tviews: {
\t\t\t\t\t\t\t\t\t\t\t\tdayGridMonth: { // name of view
\t\t\t\t\t\t\t\t\t\t\t\t\ttitleFormat: { year: 'numeric', month: 'long' }
\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\ttimeGridWeek: { // name of view
\t\t\t\t\t\t\t\t\t\t\t\t\ttitleFormat: { year: 'numeric', month: 'short', day: 'numeric' }
\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\ttimeGridDay: { // name of view
\t\t\t\t\t\t\t\t\t\t\t\t\ttitleFormat: { year: 'numeric', month: 'long', day: 'numeric' }
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\teditable: false,
\t\t\t\t\t\t\t\t\t\t\tfirstDay: 1, //  1(Monday) this can be changed to 0(Sunday) for the USA system
\t\t\t\t\t\t\t\t\t\t\tselectable: true,
\t\t\t\t\t\t\t\t\t\t\taxisFormat: 'h:mm',
\t\t\t\t\t\t\t\t\t\t\tcolumnFormat: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmonth: 'ddd',    // Mon
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tweek: 'ddd d', // Mon 7
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tday: 'dddd M/d',  // Monday 9/7
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tagendaDay: 'dddd d'
\t\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\tallDaySlot: false,
\t\t\t\t\t\t\t\t\t\t\tselectHelper: true,
\t\t\t\t\t\t\t\t\t\t\tselect: function(info) {
\t\t\t\t\t\t\t\t\t\t\t\twindow.location.href='../Controllers/EVENTO_Controller.php?fecha=' + info.start + '&accion={{ strings['Crear'] }}&calendario=calendario';
\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\teventClick:  function(info) {
\t\t\t\t\t\t\t\t\t\t\t\tif(info.event.borderColor=='#03a9f3'){
\t\t\t\t\t\t\t\t\t\t\t\t\twindow.location.href='../Controllers/EVENTO_Controller.php?idEvento=' + info.event.id + '&accion={{ strings['Modificar'] }}&calendario=calendario&class=' + info.event.borderColor + '';
\t\t\t\t\t\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\t\t\t\t\t\twindow.location.href='../Controllers/EVENTO_Controller.php?idEvento=' + info.event.id + '&accion={{ strings['Modificar'] }}&calendario=calendario';
\t\t\t\t\t\t\t\t\t\t\t\t}\t\t
\t\t\t\t\t\t\t\t\t\t\t},\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\tevents: formattedEventData,\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\tif(idioma == \"Castellano\"){
\t\t\t\t\t\t\t\t\t\t\tcalendar.setOption('locale', 'es');
\t\t\t\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\t\t\t\tif(idioma == \"English\"){
\t\t\t\t\t\t\t\t\t\t\t\tcalendar.setOption('locale', 'en');
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\tcalendar.render();
\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t<style>

\t\t\t\t\t\t\t\t\tbody {
\t\t\t\t\t\t\t\t\t\ttext-align: center;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t#wrap {
\t\t\t\t\t\t\t\t\t\twidth: 1100px;
\t\t\t\t\t\t\t\t\t\tmargin: 0 auto;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t#external-events {
\t\t\t\t\t\t\t\t\t\tfloat: left;
\t\t\t\t\t\t\t\t\t\twidth: 150px;
\t\t\t\t\t\t\t\t\t\tpadding: 0 10px;
\t\t\t\t\t\t\t\t\t\ttext-align: left;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t#external-events h4 {
\t\t\t\t\t\t\t\t\t\tfont-size: 16px;
\t\t\t\t\t\t\t\t\t\tmargin-top: 0;
\t\t\t\t\t\t\t\t\t\tpadding-top: 1em;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t.external-event { /* try to mimick the look of a real event */
\t\t\t\t\t\t\t\t\t\tmargin: 10px 0;
\t\t\t\t\t\t\t\t\t\tpadding: 2px 4px;
\t\t\t\t\t\t\t\t\t\tbackground: #3366CC;
\t\t\t\t\t\t\t\t\t\tcolor: #fff;
\t\t\t\t\t\t\t\t\t\tfont-size: .85em;
\t\t\t\t\t\t\t\t\t\tcursor: pointer;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t#external-events p {
\t\t\t\t\t\t\t\t\t\tmargin: 1.5em 0;
\t\t\t\t\t\t\t\t\t\tfont-size: 11px;
\t\t\t\t\t\t\t\t\t\tcolor: #666;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t#external-events p input {
\t\t\t\t\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t\t\t\t\t\tvertical-align: middle;
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t#calendar {
\t\t\t\t\t\t\t\t/* \t\tfloat: right; */
\t\t\t\t\t\t\t\t\t\tmargin: 0 auto;
\t\t\t\t\t\t\t\t\t\twidth: 900px;
\t\t\t\t\t\t\t\t\t\tbackground-color: #FFFFFF;
\t\t\t\t\t\t\t\t\t\tborder-radius: 6px;
\t\t\t\t\t\t\t\t\t\tbox-shadow: 0 1px 2px #C3C3C3;
\t\t\t\t\t\t\t\t\t\t-webkit-box-shadow: 0px 0px 21px 2px rgba(0,0,0,0.18);
\t\t\t\t\t\t\t\t\t\t-moz-box-shadow: 0px 0px 21px 2px rgba(0,0,0,0.18);
\t\t\t\t\t\t\t\t\t\tbox-shadow: 0px 0px 21px 2px rgba(0,0,0,0.18);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t</style>
\t\t\t\t\t\t\t</head>
\t\t\t\t\t\t\t\t<div class=\"row\" style=\"clear:both;\">
\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t<div id='wrap'>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav\" style=\"margin-top: 0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li style=\"margin-right:40px;margin-left:430px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"../Functions/Refresh.php\" role=\"Refresh\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"IDIOMA\" value=\"{{ session.IDIOMA }}\" hidden=true>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"username\" value=\"{{ session.login }}\" hidden=true>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"calendario\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=-1></option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for calendario in session.misCalendarios %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ calendario['idCalendario'] }}\">{{ calendario['nombreCalendario'] }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"accion\" class=\"btn btn-lg btn-primary\" value=\"Refresh\" style=\"width: 75px; height: 40px; font-size: 15px;\">{{ strings[\"Filtrar\"] }}</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id='calendar'></div>
\t\t\t\t\t\t\t\t\t\t\t<div style='clear:both'></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</html>
      {% endif %}
{% endblock %}", "Default.html.twig", "C:\\xampp\\htdocs\\UniOrganizerTB\\UniOrganizer\\templates\\Default.html.twig");
    }
}
