<?php
//Controlador para la gestión de usuarios
include_once '../Models/USUARIO_Model.php';
include_once '../Functions/LibraryFunctions.php';
require_once '../Twig/Autoloader.php';
header("Content-Type: text/html;charset=utf-8");

Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem( '../templates');
$twig = new Twig_Environment($loader, array('cache' =>  'cache','debug' =>  'true'));
//registerGlobals($twig);


if (!IsAuthenticated()) {
    header('Location:../index.php');
}
include '../Locates/Strings_' . $_SESSION['IDIOMA'] . '.php';
registerGlobals($twig);

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


if (!isset($_REQUEST['accion'])) {
    $_REQUEST['accion'] = '';
}

Switch ($_REQUEST['accion']) { //Actúa según la acción elegida

		
    case $strings['Insertar']:

		if ($_REQUEST['user'] == "admin") {
            if (!isset($_REQUEST['nombre'])) { //Si no se ha introducido ningun valor, mostramos la vista con el formulario
                $template = $twig->loadTemplate('UsuarioAdd.html.twig');
                echo $template->render(array('strings' => $strings, 'tipoUsuario' => 1, 'volver' => '../Controllers/USUARIO_Controller.php?user=admin'));
            } else {
                $usuario = get_data_form();
                $respuesta = $usuario->Insertar();
                $datos = $usuario->ConsultarTodo();
                $lista = array('username', 'tipoUsuario', 'nombre', 'apellidos', 'dni', 'fechaNac', 'email');
                $template = $twig->loadTemplate('UsuarioShowall.html.twig');
                echo $template->render(array('strings' => $strings, 'datos' => $datos, 'lista' => $lista, 'respuesta' => $respuesta, 'volver' => '../Controllers/USUARIO_Controller.php'));
            }
        }else{
            $template = $twig->loadTemplate('Mensaje.html.twig');
            echo $template->render(array('strings' => $strings, 'respuesta' => 'No tienes los permisos necesarios', 'volver' => '../Controllers/USUARIO_Controller.php'));
		}
        break;

    case $strings['Modificar']:

            if (!isset($_REQUEST['dni'])) {
                //Crea un usuario solo con el user para posteriormente rellenar el formulario con sus datos
                $usuario = new USUARIO_Modelo($_REQUEST['username'], '', ConsultarTipoUsuario($_REQUEST['username']), '', '', '', '', '', '', '');
                $valores = $usuario->RellenaDatos();
                if (!tienePermisos('../templates/UsuarioEdit.html.twig')) {
                    $template = $twig->loadTemplate('Mensaje.html.twig');
                    echo $template->render(array('strings' => $strings, 'respuesta' => 'No tienes los permisos necesarios', 'volver' => '../Controllers/USUARIO_Controller.php'));
                } else {
                    //Muestra el formulario de modificación
                    $template = $twig->loadTemplate('UsuarioEdit.html.twig');
                    echo $template->render(array('strings' => $strings, 'valores' => $valores, 'volver' => '../Controllers/USUARIO_Controller.php'));
                }
            } else {
                $usuario = get_data_form();
                $respuesta = $usuario->Modificar();
                $datos = $usuario->ConsultarTodo();
                $lista = array('username', 'tipoUsuario', 'nombre', 'apellidos', 'dni', 'fechaNac', 'email');
                $template = $twig->loadTemplate('UsuarioShowall.html.twig');
                echo $template->render(array('strings' => $strings, 'datos' => $datos, 'lista' => $lista, 'respuesta' => $respuesta, 'volver' => '../Controllers/USUARIO_Controller.php'));
            }       
        break;


    case $strings['Borrar']:

            if (!isset($_REQUEST['nombre'])) {
                //Crea un usuario solo con el user para rellenar posteriormente sus datos y mostrarlos en el formulario
                $usuario = new USUARIO_Modelo($_REQUEST['username'], '', ConsultarTipoUsuario($_REQUEST['username']), '', '', '', '', '', '', '');
                $valores = $usuario->RellenaDatos();
                if (!tienePermisos('../templates/UsuarioDelete.html.twig')) {
                    $template = $twig->loadTemplate('Mensaje.html.twig');
                    echo $template->render(array('strings' => $strings, 'respuesta' => 'No tienes los permisos necesarios', 'volver' => '../Controllers/USUARIO_Controller.php'));
                } else {
                    //Muestra el formulario de borrado
                    $template = $twig->loadTemplate('UsuarioDelete.html.twig');
                    echo $template->render(array('strings' => $strings, 'valores' => $valores, 'volver' => '../Controllers/USUARIO_Controller.php'));
                }
            } else {
                if(isset($_POST['eliminar'])){
					foreach($_POST['eliminar'] as $valor){
                        $usuario = new USUARIO_Model($valor, '', '', '', '', '', '', '', '', '');
                        $respuesta = $usuario->Borrar();
					}
				}else{
					$_REQUEST['password'] = '';
                    $usuario = new USUARIO_Model($_REQUEST['username'], '', '', '', '', '', '', '', '', '');
					$respuesta = $usuario->Borrar();
				}
                $datos = $usuario->ConsultarTodo();
                $lista = array('username', 'tipoUsuario', 'nombre', 'apellidos', 'dni', 'fechaNac', 'email');
                $template = $twig->loadTemplate('UsuarioShowall.html.twig');
                echo $template->render(array('strings' => $strings, 'datos' => $datos, 'lista' => $lista, 'respuesta' => $respuesta, 'volver' => '../Controllers/USUARIO_Controller.php'));
            }

        break;

    case $strings['Ver']:

            if (!isset($_REQUEST['nombre'])) {
                //Crea un usuario solo con el user para rellenar posteriormente sus datos y mostrarlos en el formulario
                $usuario = new USUARIO_Modelo($_REQUEST['username'], '', ConsultarTipoUsuario($_REQUEST['username']), '', '', '', '', '', '', '');
                $valores = $usuario->RellenaDatos();
                if (!tienePermisos('../templates/UsuarioShow.html.twig')) {
                    $template = $twig->loadTemplate('Mensaje.html.twig');
                    echo $template->render(array('strings' => $strings, 'respuesta' => 'No tienes los permisos necesarios', 'volver' => '../Controllers/USUARIO_Controller.php'));
                } else {
                    //Muestra la vista con los datos del usuario
                    $template = $twig->loadTemplate('UsuarioShow.html.twig');
                    echo $template->render(array('strings' => $strings, 'valores' => $valores, 'volver' => '../Controllers/USUARIO_Controller.php'));
                }
            } else {
                $_REQUEST['password'] = '';
                $usuario = get_data_form();
                $respuesta = $usuario->Borrar();
                $datos = $usuario->ConsultarTodo();
                $lista = array('username', 'tipoUsuario', 'nombre', 'apellidos', 'dni', 'fechaNac', 'email');
                $template = $twig->loadTemplate('UsuarioShowall.html.twig');
                echo $template->render(array('strings' => $strings, 'datos' => $datos, 'lista' => $lista, 'respuesta' => $respuesta, 'volver' => '../Controllers/USUARIO_Controller.php'));
            }
        
		break;

    default: //Por defecto se realiza el show all
        if (!isset($_REQUEST['username'])) {
            $usuario = new USUARIO_Modelo('', '', '', '', '', '', '', '', '', '');
        } else {
            $usuario = get_data_form();
        }
        if (!isset($_REQUEST['user'])) {
            $_REQUEST['user'] = '';
        }
        $datos = $usuario->ConsultarTodo();
        if (!tienePermisos('../templates/UsuarioShowall.html.twig')) {
            $template = $twig->loadTemplate('Mensaje.html.twig');
    		echo $template->render(array('strings' => $strings, 'respuesta' => 'No tienes los permisos necesarios', 'volver' => '../Functions/index.php'));
        } else {
            $lista = array('username', 'tipoUsuario', 'nombre', 'apellidos', 'dni', 'fechaNac', 'email');
            $template = $twig->loadTemplate('UsuarioShowall.html.twig');
            echo $template->render(array('strings' => $strings, 'datos' => $datos, 'volver' => '../Functions/index.php', 'lista' => $lista));
        }
}
?>