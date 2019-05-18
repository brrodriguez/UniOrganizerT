<?php
//Controlador para la gestión de alertas
include '../Models/ALERTA_Model.php';
include '../Models/EVENTO_Model.php';
include '../Models/USUARIO_Model.php';
include_once '../Functions/LibraryFunctions.php';
require_once '../Twig/Autoloader.php';
header("Content-Type: text/html;charset=utf-8");

Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem( '../templates');
$twig = new Twig_Environment($loader, array('cache' =>  'cache','debug' =>  'true'));
registerGlobals($twig);

if (!IsAuthenticated()) {
    header('Location:../index.php');
}

include '../Locates/Strings_' . $_SESSION['IDIOMA'] . '.php';
registerGlobals($twig);

if (!isset($_REQUEST['accion'])) {
    $_REQUEST['accion'] = '';
}

//Este get data form se usa para obtener los datos en el caso de una inserción.
//En el caso de la inserción el username y usuario van a ser el mismo.
function get_data_form() {
    $idAlerta = $_REQUEST['idAlerta'];
    $asuntoAlerta = $_REQUEST['asuntoAlerta'];
	$descripcionAlerta = $_REQUEST['descripcionAlerta'];
	$dia = $_REQUEST['dia'];
	$horaInicio = $_REQUEST['horaInicio'];
	$horaFin = $_REQUEST['horaFin'];
	$idEvento = $_REQUEST['idEvento'];


    $alerta = new ALERTA_Model($idAlerta, $asuntoAlerta, $descripcionAlerta, $dia, $horaInicio, $horaFin, $idEvento);
    return $alerta;
}

switch ($_REQUEST['accion']) { //Actúa según la acción elegida
		
	case $strings['Crear']:

        if (!tienePermisos('../templates/AlertaAdd.html.twig')) {
            $template = $twig->loadTemplate('Mensaje.html.twig');
    		echo $template->render(array('strings' => $strings, 'respuesta' => 'No tienes los permisos necesarios', 'volver' => '../Controllers/EVENTO_Controller.php.php'));
        } else {
            if (!isset($_REQUEST['username'])) {
				$evento = new EVENTO_Model($_REQUEST['idEvento'], '', '', '', '', '', '');
				$datos = $evento->Ver();
				$controller = '../Controllers/EVENTO_Controller.php?accion=Modificar&idEvento=';
				$volver = $controller . $_REQUEST['idEvento'];
				$template = $twig->loadTemplate('AlertaAdd.html.twig');
                echo $template->render(array('strings' => $strings, 'datos' => $datos, 'volver' => $volver));

            } else {
				//Se transforma algún dato para obtener el formato correcto y se crean las alertas
				$fecha = $_REQUEST['dia'];
				$menos = '-';
				$dias = $_REQUEST['dias'];
				$day = ' day';
				$dia = $menos . $dias . $day;
				$nuevafecha = strtotime ( $dia , strtotime ( $fecha ) ) ;
				$nuevafecha = date ( 'Y-m-j' , $nuevafecha );
				//Se crea un aviso con x días de antelación
				$aviso1 = "AVISO: ";
				$aviso2 = " dias para ";
				$asunto = $aviso1 . $dias . $aviso2 . $_REQUEST['asuntoAlerta'];
				$alerta = new ALERTA_Model( '', $asunto, $_REQUEST['descripcionAlerta'], $_REQUEST['dia'], $_REQUEST['horaInicio'], $_REQUEST['horaFin'], $_REQUEST['idEvento']);
				$respuesta = $alerta->Insertar($nuevafecha, $_REQUEST['horaInicio'], $_REQUEST['horaFin']);
				$idEvento = $_REQUEST['idEvento'];
                $evento = new EVENTO_Model($idEvento, '', '', '', '', '', '');
				$datos1 = $evento->Ver(); 
				$datos2 = $evento->obtenerAlertasEvento();
				$template = $twig->loadTemplate('EventoEdit.html.twig');
    			echo $template->render(array('strings' => $strings, 'respuesta' => $respuesta, 'evento' => $datos1, 'alertas' => $datos2, 'volver' => '../Controllers/EVENTO_Controller.php.php'));
            }
		}
		break;

    case $strings['Borrar']:

        if (!tienePermisos('../templates/AlertaDelete.html.twig')) {
            $template = $twig->loadTemplate('Mensaje.html.twig');
    		echo $template->render(array('strings' => $strings, 'respuesta' => 'No tienes los permisos necesarios', 'volver' => '../Controllers/EVENTO_Controller.php'));
        } else {
			if (!isset($_REQUEST['username'])) {
				
                $idAlerta = $_REQUEST['idAlerta'];
                $alerta = new ALERTA_Model($idAlerta, '', '', '', '', '', '');
				$datos = $alerta->Ver(); 
				$template = $twig->loadTemplate('AlertaDelete.html.twig');
                echo $template->render(array('strings' => $strings, 'datos' => $datos, 'volver' => '../Controllers/EVENTO_Controller.php'));              

            } else {
				if(isset($_POST['eliminar'])){
					foreach($_POST['eliminar'] as $valor){
						$alerta = new ALERTA_Model($valor, '', '', '', '', '', '');
						$respuesta = $alerta->Borrar();
					}
				}else{
					if(isset($_REQUEST['idAlerta'])){
						$alerta = new ALERTA_Model($_REQUEST['idAlerta'], '', '', '', '', '', '');
						$respuesta = $alerta->Borrar();
					}else{
						$respuesta = null;
					}
				}
				$idEvento = $_REQUEST['idEvento'];
                $evento = new EVENTO_Model($idEvento, '', '', '', '', '', '');
				$datos1 = $evento->Ver(); 
				$datos2 = $evento->obtenerAlertasEvento();
				$template = $twig->loadTemplate('EventoEdit.html.twig');
    			echo $template->render(array('strings' => $strings, 'respuesta' => $respuesta, 'evento' => $datos1, 'alertas' => $datos2, 'volver' => '../Controllers/EVENTO_Controller.php'));
            }
            
        }
        break;
		
	case $strings['Modificar']:
		
		if (!tienePermisos('../templates/AlertaEdit.html.twig')) {
            $template = $twig->loadTemplate('Mensaje.html.twig');
    		echo $template->render(array('strings' => $strings, 'respuesta' => 'No tienes los permisos necesarios', 'volver' => '../Controllers/EVENTO_Controller.php'));
        } else {
			if (!isset($_REQUEST['username'])) {
				
                $idAlerta = $_REQUEST['idAlerta'];
                $alerta = new ALERTA_Model($idAlerta, '', '', '', '', '', '');
				$datos1 = $alerta->Ver(); 
				$datos2 = obtenerDatosAlerta($_REQUEST['idAlerta']);
				$template = $twig->loadTemplate('AlertaEdit.html.twig');
                echo $template->render(array('strings' => $strings, 'alerta' => $datos1, 'datos2' => $datos2, 'volver' => '../Controllers/EVENTO_Controller.php'));
                
            }else{
				$alerta = get_data_form();
				$respuesta = $alerta->Modificar($_REQUEST['dia'], $_REQUEST['horaInicio'], $_REQUEST['horaFin']);
				$idEvento = $_REQUEST['idEvento'];
                $evento = new EVENTO_Model($idEvento, '', '', '', '', '', '');
				$datos1 = $evento->Ver(); 
				$datos2 = $evento->obtenerAlertasEvento();
				$template = $twig->loadTemplate('EventoEdit.html.twig');
    			echo $template->render(array('strings' => $strings, 'respuesta' => $respuesta, 'evento' => $datos1, 'alertas' => $datos2, 'volver' => '../Controllers/EVENTO_Controller.php'));
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
				$alerta = new ALERTA_Model('', '', '', '', '', '', '');
				$datos = $alerta->ListarTodo();	
				$template = $twig->loadTemplate('AlertaShowall.html.twig');
                echo $template->render(array('strings' => $strings, 'datos' => $datos, 'volver' => '../Functions/index.php'));
				
			}else{ 
				$alerta = new ALERTA_Model('', '', '', '', '', '', '');
				$datos = $alerta->Listar($_SESSION['login']);
				$template = $twig->loadTemplate('AlertaShowall.html.twig');
                echo $template->render(array('strings' => $strings, 'datos' => $datos, 'volver' => '../Functions/index.php'));				
			}
			
        }
}
?>
