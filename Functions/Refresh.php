<?php

//Gestión de actualizar datos de calendario
include_once '../Models/USUARIO_Model.php';
include_once '../Functions/LibraryFunctions.php';
require_once '../Twig/Autoloader.php';
header("Content-Type: text/html;charset=utf-8");

Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem( '../templates');
$twig = new Twig_Environment($loader, array('cache' =>  'cache','debug' =>  'true'));


if (isset($_REQUEST['accion'])) {
    if ($_REQUEST['accion'] == 'Refresh') {

			$usuario = new USUARIO_Modelo($_REQUEST['username'], '', '', '', '', '', '', '', '');
			session_start();

			$eventos = $usuario->listarEventos();
			$asignaturas = $usuario->listarAsignaturas();
			$calendarios = $usuario->listarCalendarios();
			$alertas = $usuario->listarAlertas();
			$misCalendarios = $usuario->listarMisCalendarios();
			
			if (isset($_POST["calendario"])){//Comprueba el calendario selecionado para cargar los datos relacionados
				if($_POST["calendario"]== -1){
					$_SESSION['calendario'] = $_POST["calendario"];
				}else{
					if($_POST["calendario"]== 0){
						if($_SESSION['calendario']!=-1){
							$eventos = $usuario->listarEventosPorCalendario($_SESSION['calendario']);
							$alertas = $usuario->listarAlertasPorCalendario($_SESSION['calendario']);
						}					
					}else{
						$_SESSION['calendario'] = $_POST["calendario"];
						$eventos = $usuario->listarEventosPorCalendario($_SESSION['calendario']);
						$alertas = $usuario->listarAlertasPorCalendario($_SESSION['calendario']);
					}	
				}
			}
			//Se obtienen los eventos para cada usuario
			$_SESSION['eventos'] = $eventos;//Lista de los eventos del usuario actual
			$_SESSION['alertas'] = $alertas;//Lista de las alertas del usuario actual
			$_SESSION['misCalendarios'] = $misCalendarios;//Lista de los calendarios del usuario actual
			
			include '../Locates/Strings_' . $_SESSION['IDIOMA'] . '.php';
			
			$array_date = getDate();
			$date = $array_date['year']."-".$array_date['mon']."-".$array_date['mday'];
			$fecha1 = date('Y-m-d', strtotime( '+1 day' , strtotime($date) ));
			$fecha2 = date('Y-m-d', strtotime( '+2 day' , strtotime($date) ));
			$num = numEventos($fecha1, $fecha2);
			$filas = añadirFuncionalidades($_SESSION);
			$userLogin = ConsultarTipoUsuarioLogin();

			$_SESSION['userLogin'] = $userLogin;
			$_SESSION['num'] = $num;
			$_SESSION['filas'] = $filas;
			registerGlobals($twig);

			$template = $twig->loadTemplate('Default.html.twig');
    		echo $template->render(array('strings' => $strings));

    }
}
?>
       
