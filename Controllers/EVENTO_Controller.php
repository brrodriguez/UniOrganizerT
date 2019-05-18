<?php
//Controlador para la gestión de eventos
include_once '../Models/EVENTO_Model.php';
include_once '../Models/ALERTA_Model.php';
include_once '../Models/USUARIO_Model.php';
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
    $idEvento = $_REQUEST['idEvento'];
    $asuntoEvento = $_REQUEST['asuntoEvento'];
	$descripcionEvento = $_REQUEST['descripcionEvento'];
	$dia = $_REQUEST['dia'];
	$horaInicio = $_REQUEST['horaInicio'];
	$horaFin = $_REQUEST['horaFin'];
	$idAsignatura = $_REQUEST['idAsignatura'];


    $evento = new EVENTO_Model($idEvento, $asuntoEvento, $descripcionEvento, $dia, $horaInicio, $horaFin, $idAsignatura);
    return $evento;
}

switch ($_REQUEST['accion']) { //Actúa según la acción elegida
	case $strings['Crear']:
	
        if (!tienePermisos('../templates/EventoAdd.html.twig')) {
            $template = $twig->loadTemplate('Mensaje.html.twig');
    		echo $template->render(array('strings' => $strings, 'respuesta' => 'No tienes los permisos necesarios', 'volver' => '../Controllers/EVENTO_Controller.php'));
        } else {
            if (!isset($_REQUEST['username'])) {

				$usuario = new USUARIO_Modelo($_SESSION['login'], $_SESSION['pass'], '', '', '', '', '', '', '');             
                if (!isset($_REQUEST['fecha'])) {
					$fecha = NULL;
				}else{
					$date = $_REQUEST['fecha'];
					$año = substr($date, 11,4);
					$mes = substr($date, 4,3);
					if($mes == 'Jan'){
						$mes = '01';
					}else{
						if($mes == 'Feb'){
							$mes = '02';
						}else{
							if($mes == 'Mar'){
								$mes = '03';
							}else{
								if($mes == 'Apr'){
									$mes = '04';
								}else{
									if($mes == 'May'){
										$mes = '05';
									}else{
										if($mes == 'Jun'){
											$mes = '06';
										}else{
											if($mes == 'Jul'){
												$mes = '07';
											}else{
												if($mes == 'Aug'){
													$mes = '08';
												}else{
													if($mes == 'Sep'){
														$mes = '09';
													}else{
														if($mes == 'Oct'){
															$mes = '10';
														}else{
															if($mes == 'Nov'){
																$mes = '11';
															}else{
																if($mes == 'Dec'){
																	$mes = '12';
																}
															}
														}
													}
												}
											}
										}
									}
								}
							}
						}
					}
					$dia = substr($date, 8,2);
					$dateS = $año . '/' . $mes . '/' . $dia;
					$fecha = date('Y-m-d', strtotime($dateS));
				}
				if (!isset($_REQUEST['idCalendario'])) {
					$idCalendario = NULL;
					$volver = '../Controllers/EVENTO_Controller.php';
				}else{
					$idCalendario = $_REQUEST['idCalendario'];
					$controller = '../Controllers/CALENDARIO_Controller.php?accion=vistamodificar&id=';
					$volver = $controller . $_REQUEST['idCalendario'];
				}
				if (isset($_REQUEST['calendario'])) {
					$volver = '../Functions/index.php';
				}
				$template = $twig->loadTemplate('EventoAdd.html.twig');
                echo $template->render(array('strings' => $strings, 'fecha' => $fecha, 'idCalendario' => $idCalendario, 'volver' => $volver));

            } else {
				//Se transforma algún dato para obtener el formato correcto y se crean los eventos
				$idCalendario = $_REQUEST['calendario'];
				$fecha = $_REQUEST['fecha'];
				$menos = '-';
				$dias = $_REQUEST['dias'];
				$day = ' day';
				$dia = $menos . $dias . $day;
				$nuevafecha = strtotime ( $dia , strtotime ( $fecha ) ) ;
				$nuevafecha = date ( 'Y-m-j' , $nuevafecha );
				$evento = new EVENTO_Model( '', $_REQUEST['asuntoEvento'], $_REQUEST['descripcionEvento'], $_REQUEST['fecha'], $_REQUEST['horaInicio'], $_REQUEST['horaFin'], NULL);
				$respuesta = $evento->Insertar($_REQUEST['fecha'], $_REQUEST['horaInicio'], $_REQUEST['horaFin'], $idCalendario);
				$idEvento = obtenerUltimoEvento();
				//Si se incluye en campo de Dias, se crea un aviso con x días de antelación
				if($dias!=NULL){
					$aviso1 = "AVISO: ";
					$aviso2 = " dias para ";
					$asunto = $aviso1 . $dias . $aviso2 . $_REQUEST['asuntoEvento'];
					$alerta = new ALERTA_Model( '', $asunto, $_REQUEST['descripcionEvento'], $_REQUEST['fecha'], $_REQUEST['horaInicio'], $_REQUEST['horaFin'], $idEvento);
					$alerta->Insertar($nuevafecha, $_REQUEST['horaInicio'], $_REQUEST['horaFin']);
				}
				$datos = $evento->Listar($_SESSION['login']);
				$template = $twig->loadTemplate('EventoShowall.html.twig');
    			echo $template->render(array('strings' => $strings, 'datos' => $datos, 'respuesta' => $respuesta, 'volver' => '../Controllers/EVENTO_Controller.php'));
            }
		}
		break;

	case $strings['Borrar']:
	
        if (!tienePermisos('../templates/EventoDelete.html.twig')) {
            $template = $twig->loadTemplate('Mensaje.html.twig');
    		echo $template->render(array('strings' => $strings, 'respuesta' => 'No tienes los permisos necesarios', 'volver' => '../Controllers/EVENTO_Controller.php'));
        } else {
			if (!isset($_REQUEST['username'])) {
				
                $idEvento = $_REQUEST['idEvento'];
                $evento = new EVENTO_Model($idEvento, '', '', '', '', '', '');
				$datos = $evento->Ver(); 
				$template = $twig->loadTemplate('EventoDelete.html.twig');
                echo $template->render(array('strings' => $strings, 'datos' => $datos, 'volver' => '../Controllers/EVENTO_Controller.php'));              

            } else {
				if(($_POST['eliminar'] != null)){
					foreach($_POST['eliminar'] as $valor){
						$evento = new EVENTO_Model($valor, '', '', '', '', '', '');
						$respuesta = $evento->Borrar();
					}
				}else{
					$evento = new EVENTO_Model($_REQUEST['idEvento'], '', '', '', '', '', '');
					$respuesta = $evento->Borrar();
				}
				$datos = $evento->Listar($_SESSION['login']);
				$template = $twig->loadTemplate('EventoShowall.html.twig');
    			echo $template->render(array('strings' => $strings, 'datos' => $datos, 'respuesta' => $respuesta, 'volver' => '../Controllers/EVENTO_Controller.php'));
            }
            
        }
        break;
		
	case $strings['Modificar']:
		
		if (!tienePermisos('../templates/EventoEdit.html.twig')) {
            $template = $twig->loadTemplate('Mensaje.html.twig');
    		echo $template->render(array('strings' => $strings, 'respuesta' => 'No tienes los permisos necesarios', 'volver' => '../Controllers/EVENTO_Controller.php'));
        } else {
			if (!isset($_REQUEST['username'])) {
				if (isset($_REQUEST['calendario'])) {
					if (isset($_REQUEST['class'])) {
						$idEvento = $_REQUEST['idEvento'];
						$evento = new EVENTO_Model($idEvento, '', '', '', '', '', '');
						$datos1 = $evento->Ver(); 
						$datos2 = $evento->obtenerAlertasEvento();
						$volver = '../Functions/index.php';
						$template = $twig->loadTemplate('EventoEdit.html.twig');
						echo $template->render(array('strings' => $strings, 'evento' => $datos1, 'alertas' => $datos2, 'volver' => $volver));
					}else{
						$idAlerta = $_REQUEST['idEvento'];
						$idEvento = obtenerEvento($idAlerta);
						$evento = new EVENTO_Model($idEvento, '', '', '', '', '', '');
						$datos1 = $evento->Ver(); 
						$datos2 = $evento->obtenerAlertasEvento();
						$volver = '../Functions/index.php';
						$template = $twig->loadTemplate('EventoEdit.html.twig');
						echo $template->render(array('strings' => $strings, 'evento' => $datos1, 'alertas' => $datos2, 'volver' => $volver));
					}
				}else{
					$idEvento = $_REQUEST['idEvento'];
					$evento = new EVENTO_Model($idEvento, '', '', '', '', '', '');
					$datos1 = $evento->Ver(); 
					$datos2 = $evento->obtenerAlertasEvento();
					$template = $twig->loadTemplate('EventoEdit.html.twig');
					echo $template->render(array('strings' => $strings, 'evento' => $datos1, 'alertas' => $datos2, 'volver' => '../Controllers/EVENTO_Controller.php'));
				}
            }else{
				$evento = get_data_form();
				$respuesta = $evento->Modificar($_REQUEST['dia'], $_REQUEST['horaInicio'], $_REQUEST['horaFin']);
				$datos = $evento->Listar($_SESSION['login']);
				$template = $twig->loadTemplate('EventoShowall.html.twig');
    			echo $template->render(array('strings' => $strings, 'datos' => $datos, 'respuesta' => $respuesta, 'volver' => '../Controllers/EVENTO_Controller.php'));
			}
        }
        break;	

    case $strings['Ver']:
		
		if (!tienePermisos('../templates/EventoShow.html.twig')) {
            $template = $twig->loadTemplate('Mensaje.html.twig');
    		echo $template->render(array('strings' => $strings, 'respuesta' => 'No tienes los permisos necesarios', 'volver' => '../Controllers/EVENTO_Controller.php'));
        } else {
			if (!isset($_REQUEST['username'])) {
				
                $idEvento = $_REQUEST['idEvento'];
                $evento = new EVENTO_Model($idEvento, '', '', '', '', '', '');
                $datos1 = $evento->Ver();
				$datos2 = obtenerDatosEvento($_REQUEST['idEvento']);
				$template = $twig->loadTemplate('EventoShow.html.twig');
                echo $template->render(array('strings' => $strings, 'datos1' => $datos1, 'datos2' => $datos2, 'volver' => '../Controllers/EVENTO_Controller.php'));				
                
            }
        }
		break;
		
	case 'vistafiltrar':
      
        if (!tienePermisos('../templates/EventoFilter.html.twig')) {
			$template = $twig->loadTemplate('Mensaje.html.twig');
    		echo $template->render(array('strings' => $strings, 'respuesta' => 'No tienes los permisos necesarios', 'volver' => '../Controllers/EVENTO_Controller.php'));
        } else {
			$template = $twig->loadTemplate('EventoFilter.html.twig');
            echo $template->render(array('strings' => $strings, 'volver' => '../Controllers/EVENTO_Controller.php'));
        }
        break;
		
	case 'filtrar':
      
        if (!tienePermisos('../templates/EventoFilter.html.twig')) {
            $template = $twig->loadTemplate('Mensaje.html.twig');
    		echo $template->render(array('strings' => $strings, 'respuesta' => 'No tienes los permisos necesarios', 'volver' => '../Controllers/EVENTO_Controller.php'));
        } else {
			//Carga una vista con todos los eventos al ser administrador
			$evento = new EVENTO_Model("", "", "", "", "", "", "");
			$datos = $evento->filtrar($_REQUEST['username'], $_REQUEST['asuntoEvento'], $_REQUEST['nombreCalendario'], $_REQUEST['nombreAsignatura']);
			$i = 0;
			foreach ($datos as $dato){
				if($dato['6']==NULL){
					$nombres[$i] = NULL;
					$i++;
				}else{
					$nombres[$i] = $evento->obtenerNombreAsig($dato['6']);
					$i++;
				}
			}
			$template = $twig->loadTemplate('EventoShowall.html.twig');
            echo $template->render(array('strings' => $strings, 'datos' => $datos, 'nombres' => $nombres, 'volver' => '../Controllers/EVENTO_Controller.php'));
        }
		break;
		
	case 'verEventos':
      
        if (!tienePermisos('../templates/EventoShowall.html.twig')) {
            $template = $twig->loadTemplate('Mensaje.html.twig');
    		echo $template->render(array('strings' => $strings, 'respuesta' => 'No tienes los permisos necesarios', 'volver' => '../Controllers/EVENTO_Controller.php'));
        } else {
			if(isset($_REQUEST['idAsig'])){
				$evento = new EVENTO_Model("", "", "", "", "", "", "");
				$datos = $evento->eventosAsignatura($_REQUEST['idCalendario'], $_REQUEST['idAsig']);
			}else{
				if(isset($_REQUEST['idCalendario'])){
					$evento = new EVENTO_Model("", "", "", "", "", "", "");
					$datos = $evento->eventosCalendario($_REQUEST['idCalendario']);
				}
			}
			$controller = '../Controllers/CALENDARIO_Controller.php?accion=vistamodificar&id=';
			$volver = $controller . $_REQUEST['idCalendario'];
			$template = $twig->loadTemplate('EventoShowall.html.twig');
            echo $template->render(array('strings' => $strings, 'datos' => $datos, 'volver' => $volver));
        }
        break;

    //Por defecto se realiza un show all de los eventos a los que tiene acceso el usuario.
    default:

        if (!tienePermisos('../templates/EventoShowall.html.twig')) {
            $template = $twig->loadTemplate('Mensaje.html.twig');
    		echo $template->render(array('strings' => $strings, 'respuesta' => 'No tienes los permisos necesarios', 'volver' => '../Functions/index.php'));
        } else {
			$tipoUsuario = ConsultarTipoUsuario($_SESSION['login']);
			if($tipoUsuario == 1){
				$evento = new EVENTO_Model('', '', '', '', '', '', '');
				$datos = $evento->ListarTodo();	
				$template = $twig->loadTemplate('EventoShowall.html.twig');
                echo $template->render(array('strings' => $strings, 'datos' => $datos, 'volver' => '../Functions/index.php'));
				
			}else{ 
				$evento = new EVENTO_Model('', '', '', '', '', '', '');
				$datos = $evento->Listar($_SESSION['login']);
				$template = $twig->loadTemplate('EventoShowall.html.twig');
                echo $template->render(array('strings' => $strings, 'datos' => $datos, 'volver' => '../Functions/index.php'));				
			}
			
        }
}
?>
