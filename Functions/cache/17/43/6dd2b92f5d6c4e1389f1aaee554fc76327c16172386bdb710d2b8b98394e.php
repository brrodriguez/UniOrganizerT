<?php

/* Default.html.twig */
class __TwigTemplate_17436dd2b92f5d6c4e1389f1aaee554fc76327c16172386bdb710d2b8b98394e extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Vista Principal", array(), "array"), "html", null, true);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t\t";
        if (((isset($context["userTipo"]) ? $context["userTipo"] : null) == 2)) {
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
            echo twig_escape_filter($this->env, (isset($context["IDIOMA"]) ? $context["IDIOMA"] : null), "html", null, true);
            echo "\";
\t\t\t\t\t\t\t\t\tvar events = [];
\t\t\t\t\t\t\t\t\t";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["eventos"]) ? $context["eventos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["evento"]) {
                // line 27
                echo "\t\t\t\t\t\t\t\t\t\tevents.push({
\t\t\t\t\t\t\t\t\t\t\t\"id\": \"";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["evento"], "idEvento", array(), "array"), "html", null, true);
                echo "\",
\t\t\t\t\t\t\t\t\t\t\t\"asunto\": \"";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["evento"], "asuntoEvento", array(), "array"), "html", null, true);
                echo "\",
\t\t\t\t\t\t\t\t\t\t\t\"dia\": \"";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["evento"], "dia", array(), "array"), "html", null, true);
                echo "\",
\t\t\t\t\t\t\t\t\t\t\t\"horaInicio\": \"";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["evento"], "horaInicio", array(), "array"), "html", null, true);
                echo "\",
\t\t\t\t\t\t\t\t\t\t\t\"horaFin\": \"";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["evento"], "horaFin", array(), "array"), "html", null, true);
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
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["alertas"]) ? $context["alertas"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["alerta"]) {
                // line 38
                echo "\t\t\t\t\t\t\t\t\t\talerts.push({
\t\t\t\t\t\t\t\t\t\t\t\"id\": \"";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["alerta"], "idAlerta", array(), "array"), "html", null, true);
                echo "\",
\t\t\t\t\t\t\t\t\t\t\t\"asunto\": \"";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["alerta"], "asuntoAlerta", array(), "array"), "html", null, true);
                echo "\",
\t\t\t\t\t\t\t\t\t\t\t\"dia\": \"";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["alerta"], "dia", array(), "array"), "html", null, true);
                echo "\",
\t\t\t\t\t\t\t\t\t\t\t\"horaInicio\": \"";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["alerta"], "horaInicio", array(), "array"), "html", null, true);
                echo "\",
\t\t\t\t\t\t\t\t\t\t\t\"horaFin\": \"";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["alerta"], "horaFin", array(), "array"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Crear", array(), "array"), "html", null, true);
            echo "&calendario=calendario';
\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\teventClick:  function(info) {
\t\t\t\t\t\t\t\t\t\t\t\tif(info.event.borderColor=='#03a9f3'){
\t\t\t\t\t\t\t\t\t\t\t\t\twindow.location.href='../Controllers/EVENTO_Controller.php?idEvento=' + info.event.id + '&accion=";
            // line 181
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Modificar", array(), "array"), "html", null, true);
            echo "&calendario=calendario&class=' + info.event.borderColor + '';
\t\t\t\t\t\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\t\t\t\t\t\twindow.location.href='../Controllers/EVENTO_Controller.php?idEvento=' + info.event.id + '&accion=";
            // line 183
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Modificar", array(), "array"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "IDIOMA", array()), "html", null, true);
            echo "\" hidden=true>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"username\" value=\"";
            // line 265
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "login", array()), "html", null, true);
            echo "\" hidden=true>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"calendario\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=-1></option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 268
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "misCalendarios", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["calendario"]) {
                // line 269
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["calendario"], "idCalendario", array(), "array"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["calendario"], "nombreCalendario", array(), "array"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "Filtrar", array(), "array"), "html", null, true);
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
        return array (  406 => 272,  403 => 271,  392 => 269,  388 => 268,  382 => 265,  378 => 264,  294 => 183,  289 => 181,  282 => 177,  149 => 46,  140 => 43,  136 => 42,  132 => 41,  128 => 40,  124 => 39,  121 => 38,  117 => 37,  113 => 35,  104 => 32,  100 => 31,  96 => 30,  92 => 29,  88 => 28,  85 => 27,  81 => 26,  76 => 24,  62 => 13,  58 => 12,  54 => 11,  50 => 10,  46 => 9,  41 => 6,  38 => 5,  35 => 4,  29 => 3,);
    }
}
