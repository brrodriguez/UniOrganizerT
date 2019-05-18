<?php

//Gestión del acceso, login, selección de idioma
include_once '../Models/USUARIO_Model.php';
include_once '../Functions/LibraryFunctions.php';
require_once '../Twig/Autoloader.php';
header("Content-Type: text/html;charset=utf-8");

Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem( '../templates');
$twig = new Twig_Environment($loader, array('cache' =>  'cache','debug' =>  'true'));


if (isset($_REQUEST['accion'])) {
    if ($_REQUEST['accion'] == 'Login') {
		if (isset($_REQUEST['username'])) {
			$usuario = new USUARIO_Modelo($_REQUEST['username'], $_REQUEST['password'], '', '', '', '', '', '', '');
			$respuesta = $usuario->Login(); //Comprueba que se pueda loguear
		}
        if ($respuesta == 'true') {
			//if(session_status() === PHP_SESSION_NONE){//Comprueba si ya hay una sesión iniciada, si no la hay la inicia
				session_start();
			//}
			//print_r($_SESSION);die;
			$eventos = $usuario->listarEventos();
			$asignaturas = $usuario->listarAsignaturas();
			$calendarios = $usuario->listarCalendarios();
			$alertas = $usuario->listarAlertas();
			$misCalendarios = $usuario->listarMisCalendarios();
			
            $_SESSION['IDIOMA'] = $_REQUEST['IDIOMA']; //Establece el idioma de la sesión
            $_SESSION['login'] = $usuario->username; //Establece el login de la sesión
			$_SESSION['pass'] = $usuario->password; //Establece la pass de la sesión
            $_SESSION['sesion'] = 0;
			
			if (isset($_POST["calendario"])){//Comprueba el calendario selecionado para cargar los datos relacionados
				if($_POST["calendario"]== -1){
					$_SESSION['calendario'] = $_POST["calendario"];
				}else{
					if($_POST["calendario"]== 0){
						if($_SESSION['calendario']!=-1){
							$eventos = $usuario->listarEventosPorCalendario($_SESSION['calendario']);
						}					
					}else{
						$_SESSION['calendario'] = $_POST["calendario"];
						$eventos = $usuario->listarEventosPorCalendario($_SESSION['calendario']);
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
            
        } else {
			$_SESSION['IDIOMA'] = $_REQUEST['IDIOMA'];
			include '../Locates/Strings_' . $_SESSION['IDIOMA'] . '.php';
    		$template = $twig->loadTemplate('Mensaje2.html.twig');
    		echo $template->render(array('respuesta' => $respuesta));
        }

    }
}
?>
       
