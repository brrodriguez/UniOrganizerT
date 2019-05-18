<?php
//Controlador para gestion del registro
include_once '../Models/USUARIO_Model.php';
require_once '../Twig/Autoloader.php';
header("Content-Type: text/html;charset=utf-8");

Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem( '../templates');
$twig = new Twig_Environment($loader, array('cache' =>  'cache','debug' =>  'true'));

//Método que recoge la información del formulario para usuarios
function get_data_form() {

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
	$tipoUsuario = $_REQUEST['tipoUsuario'];
    $nombre = $_REQUEST['nombre'];
    $apellidos = $_REQUEST['apellidos'];
    $dni = $_REQUEST['dni'];
    $fechaNac = $_REQUEST['fechaNac'];
    $email = $_REQUEST['email'];
    if (!isset($_REQUEST['newPassword']) || $_REQUEST['newPassword'] == '') {
        $newPassword = '';
    } else {
        $newPassword = $_REQUEST['newPassword'];
    }
    $usuario = new USUARIO_Modelo($username, $password, $tipoUsuario, $nombre, $apellidos, $dni, $fechaNac, $email, $newPassword);

    return $usuario;
}

if (isset($_REQUEST['accion'])) {

    if ($_REQUEST['accion'] == 'Registrar') {
		$usuario = get_data_form();
        $respuesta = $usuario->Registro();
        if ($respuesta == 'true') {//Comprueba que el usuario se puede registrar y lo inserta
            $usuario->Insertar();
			$usuario->sendEmail($_REQUEST['email'], $_REQUEST['username'], $_REQUEST['password']);
			$respuesta2 = $usuario->Login(); //Comprueba que se pueda loguear
			if ($respuesta == 'true') {
				if(session_status() === PHP_SESSION_NONE){//Comprueba si ya hay una sesión iniciada, si no la hay la inicia
					session_start();
				}
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
				echo $template->render(array('userLogin' => $userLogin, 'num' => $num, 'filas' => $filas));
				
			} else {
				$_SESSION['IDIOMA'] = $_REQUEST['IDIOMA'];
				$template = $twig->loadTemplate('Mensaje2.html.twig');
    			echo $template->render(array('respuesta' => $respuesta2));
			}
        } else {
			$template = $twig->loadTemplate('Mensaje2.html.twig');
    		echo $template->render(array('respuesta' => $respuesta));
        }
    }
}
?>
