<?php
//Controlador para la gestión de alertas
include '../Models/ALERTA_Model.php';
include '../Models/USUARIO_Model.php';
include_once '../Functions/LibraryFunctions.php';
require_once '../Twig/Autoloader.php';

Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem( '../templates');
$twig = new Twig_Environment($loader, array('cache' =>  'cache','debug' =>  'true'));


if (!IsAuthenticated()) {
    header('Location:../index.php');
}

include '../Locates/Strings_' . $_SESSION['IDIOMA'] . '.php';

if (!isset($_REQUEST['accion'])) {
    $_REQUEST['accion'] = '';
}

//Este get data form se usa para obtener los datos en el caso de una inserción.
//En el caso de la inserción el username y usuario van a ser el mismo.
function get_data_form() {
    $idAlerta = $_REQUEST['idAlerta'];
    $asuntoAlerta = $_REQUEST['asuntoAlerta'];
    $descripcionAlerta = $_REQUEST['descripcionAlerta'];


    $alerta = new ALERTA_Model($idAlerta, $asuntoAlerta, $descripcionAlerta);
    return $alerta;
}

switch ($_REQUEST['accion']) { //Actúa según la acción elegida
    case $strings['Crear']:

        if (!tienePermisos('../templates/AlertaAdd.html.twig')) {
            $template = $twig->loadTemplate('Mensaje.html.twig');
    		echo $template->render(array('strings' => $strings, 'respuesta' => 'No tienes los permisos necesarios', 'volver' => '../Controllers/ALERTA_Controller.php'));
        } else {
            if (!isset($_REQUEST['username'])) {
				$usuario = new USUARIO_Modelo($_SESSION['login'], $_SESSION['pass'], '', '', '', '', '', '', '', '');
				$cursos = $usuario->listarMisCursos();              
                if (!isset($_REQUEST['fecha'])) {
					$fecha = NULL;
				}else{
					$fecha = $_REQUEST['fecha'];
				}
				$template = $twig->loadTemplate('AlertaAdd.html.twig');
                echo $template->render(array('strings' => $strings, 'cursos' => $cursos, 'fecha' => $fecha, 'volver' => '../Controllers/ALERTA_Controller.php'));

            } else {
				//Se transforma algún dato para obtener el formato correcto y se crean las alertas
				$idCurso = obtenerIdCurso($_REQUEST['curso']);
				$fecha = $_REQUEST['fecha'];
				$menos = '-';
				$dias = $_REQUEST['dias'];
				$day = ' day';
				$dia = $menos . $dias . $day;
				$nuevafecha = strtotime ( $dia , strtotime ( $fecha ) ) ;
				$nuevafecha = date ( 'Y-m-j' , $nuevafecha );
				$alerta = new ALERTA_Model( '', $_REQUEST['asuntoAlerta'], $_REQUEST['descripcionAlerta']);
                $respuesta = $alerta->Insertar($_REQUEST['fecha'], $_REQUEST['hora'], $idCurso);
				//Si se incluye en campo de Dias, se crea un aviso con x días de antelación
				if($dias!=NULL){
					$aviso1 = "AVISO: ";
					$aviso2 = " dias para ";
					$asunto = $aviso1 . $dias . $aviso2;
					$alerta2 = new ALERTA_Model( '', $asunto, $_REQUEST['descripcionAlerta']);
					$alerta2->Insertar($nuevafecha, $_REQUEST['hora'], $idCurso);
				}
				$template = $twig->loadTemplate('Mensaje.html.twig');
    			echo $template->render(array('strings' => $strings, 'respuesta' => $respuesta, 'volver' => '../Controllers/ALERTA_Controller.php'));
            }
        }
		
	case $strings['Añadir']:

        if (!tienePermisos('../templates/AlertaEntregaAdd.html.twig')) {
            $template = $twig->loadTemplate('Mensaje.html.twig');
    		echo $template->render(array('strings' => $strings, 'respuesta' => 'No tienes los permisos necesarios', 'volver' => '../Controllers/ALERTA_Controller.php'));
        } else {
            if (!isset($_REQUEST['username'])) {
				$datos = obtenerDatosEntrega($_REQUEST['idCalendarioHoras']);
				$template = $twig->loadTemplate('AlertaEntregaAdd.html.twig');
                echo $template->render(array('strings' => $strings, 'datos' => $datos, 'volver' => '../Controllers/ALERTA_Controller.php'));

            } else {
				//Se transforma algún dato para obtener el formato correcto y se crean las alertas
				$idCurso = $_REQUEST['curso'];
				$fecha = $_REQUEST['fecha'];
				$menos = '-';
				$dias = $_REQUEST['dias'];
				$day = ' day';
				$dia = $menos . $dias . $day;
				$nuevafecha = strtotime ( $dia , strtotime ( $fecha ) ) ;
				$nuevafecha = date ( 'Y-m-j' , $nuevafecha );
				//Se crea un aviso con x días de antelación
				$aviso1 = "AVISO: ";
				$aviso2 = " dias para ";
				$asunto = $aviso1 . $dias . $aviso2;
				$alerta2 = new ALERTA_Model( '', $asunto, $_REQUEST['descripcionAlerta']);
				$respuesta = $alerta2->Insertar($nuevafecha, $_REQUEST['hora'], $idCurso);
				$template = $twig->loadTemplate('Mensaje.html.twig');
    			echo $template->render(array('strings' => $strings, 'respuesta' => $respuesta, 'volver' => '../Controllers/ALERTA_Controller.php'));
            }
        }

    case $strings['Borrar']:

        if (!tienePermisos('../templates/AlertaDelete.html.twig')) {
            $template = $twig->loadTemplate('Mensaje.html.twig');
    		echo $template->render(array('strings' => $strings, 'respuesta' => 'No tienes los permisos necesarios', 'volver' => '../Controllers/ALERTA_Controller.php'));
        } else {
			if (!isset($_REQUEST['username'])) {
				
                $idAlerta = $_REQUEST['idAlerta'];
                $alerta = new ALERTA_Model($idAlerta, '', '');
				$datos = $alerta->Ver(); 
				$template = $twig->loadTemplate('AlertaDelete.html.twig');
                echo $template->render(array('strings' => $strings, 'datos' => $datos, 'volver' => '../Controllers/ALERTA_Controller.php'));              

            } else {
                $alerta = new ALERTA_Model($_REQUEST['idAlerta'], '', '');
				$respuesta = $alerta->Borrar();
				$template = $twig->loadTemplate('Mensaje.html.twig');
    			echo $template->render(array('strings' => $strings, 'respuesta' => $respuesta, 'volver' => '../Controllers/ALERTA_Controller.php'));
            }
            
        }
        break;
		
	case $strings['Modificar']:
		
		if (!tienePermisos('../templates/AlertaEdit.html.twig')) {
            $template = $twig->loadTemplate('Mensaje.html.twig');
    		echo $template->render(array('strings' => $strings, 'respuesta' => 'No tienes los permisos necesarios', 'volver' => '../Controllers/ALERTA_Controller.php'));
        } else {
			if (!isset($_REQUEST['username'])) {
				
                $idAlerta = $_REQUEST['idAlerta'];
                $alerta = new ALERTA_Model($idAlerta, '', '');
				$datos1 = $alerta->Ver(); 
				$datos2 = obtenerDatosEvento($_REQUEST['idAlerta']);
				$template = $twig->loadTemplate('AlertaEdit.html.twig');
                echo $template->render(array('strings' => $strings, 'datos1' => $datos1, 'datos2' => $datos2, 'volver' => '../Controllers/ALERTA_Controller.php'));
                
            }else{
				$alerta = get_data_form();
				$respuesta = $alerta->Modificar($_REQUEST['fecha'], $_REQUEST['hora'], $_REQUEST['idCalendarioHoras']);
				$template = $twig->loadTemplate('Mensaje.html.twig');
    			echo $template->render(array('strings' => $strings, 'respuesta' => $respuesta, 'volver' => '../Controllers/ALERTA_Controller.php'));
			}
        }
        break;	

    case $strings['Ver']:
		
		if (!tienePermisos('../templates/AlertaShow.html.twig')) {
            $template = $twig->loadTemplate('Mensaje.html.twig');
    		echo $template->render(array('strings' => $strings, 'respuesta' => 'No tienes los permisos necesarios', 'volver' => '../Controllers/ALERTA_Controller.php'));
        } else {
			if (!isset($_REQUEST['username'])) {
				
                $idAlerta = $_REQUEST['idAlerta'];
                $alerta = new ALERTA_Model($idAlerta, '', '');
                $datos1 = $alerta->Ver();
				$datos2 = obtenerDatosEvento($_REQUEST['idAlerta']);
				$template = $twig->loadTemplate('AlertaShow.html.twig');
                echo $template->render(array('strings' => $strings, 'datos1' => $datos1, 'datos2' => $datos2, 'volver' => '../Controllers/ALERTA_Controller.php'));				
                
            }
        }
        break;

    //Por defecto se realiza un show all de las alertas a las que tiene acceso el usuario.
    default:

        if (!tienePermisos('../templates/AlertaShowall.html.twig')) {
            $template = $twig->loadTemplate('Mensaje.html.twig');
    		echo $template->render(array('strings' => $strings, 'respuesta' => 'No tienes los permisos necesarios', 'volver' => '../Functions/index.php'));
        } else {
			$tipoUsuario = ConsultarTipoUsuario($_SESSION['login']);
			if($tipoUsuario == 1){
				$lista = array( 'asuntoAlerta', 'descripcionAlerta');
				$alerta = new ALERTA_Model('', '', '');
				$datos = $alerta->ListarTodo();	
				$template = $twig->loadTemplate('AlertaShowall.html.twig');
                echo $template->render(array('strings' => $strings, 'datos' => $datos, 'lista' => $lista, 'volver' => '../Functions/index.php'));
				
			}else{ 
				$lista = array( 'asuntoAlerta', 'descripcionAlerta');
				$idCalendario = ObtenerCalendario($_SESSION['login']);
				$alerta = new ALERTA_Model('', '', '');
				$datos = $alerta->Listar($idCalendario);
				$template = $twig->loadTemplate('AlertaShowall.html.twig');
                echo $template->render(array('strings' => $strings, 'datos' => $datos, 'lista' => $lista, 'volver' => '../Functions/index.php'));				
			}
			
        }
}
?>
