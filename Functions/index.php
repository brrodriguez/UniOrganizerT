<?php

//ÍNDICE
include_once '../Functions/LibraryFunctions.php';
require_once '../Twig/Autoloader.php';
include '../Locates/Strings_Castellano.php';

Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem( '../templates');
$twig = new Twig_Environment($loader, array('cache' =>  'cache','debug' =>  'true'));

if (IsAuthenticated()) { //Si no está autenticado envía al login y si lo está a la vista por defecto
    $array_date = getDate();
    $date = $array_date['year']."-".$array_date['mon']."-".$array_date['mday'];
    $fecha1 = date('Y-m-d', strtotime( '+1 day' , strtotime($date) ));
    $fecha2 = date('Y-m-d', strtotime( '+2 day' , strtotime($date) ));
    $num = numEventosAlertas($fecha1, $fecha2);
    $filas = añadirFuncionalidades($_SESSION);
    $userLogin = ConsultarTipoUsuarioLogin();
    $template = $twig->loadTemplate('Default.html.twig');
    echo $template->render(array('userLogin' => $userLogin, 'num' => $num, 'filas' => $filas, 'strings' => $strings));
} else {
    $template = $twig->loadTemplate('DefaultNoLogin.html.twig');
    echo $template->render(array());
}
?>
