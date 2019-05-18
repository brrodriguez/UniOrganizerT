<?php

include_once '../Functions/LibraryFunctions.php';
header("Content-Type: text/html;charset=utf-8");

class USUARIO_Modelo {

//Parámetros de la clase Usuario
    var $username;
    var $password;
	var $tipoUsuario;
    var $nombre;
    var $apellidos;
    var $dni;
	var $fechaNac;
    var $email;
	var $newPassword;
    var $mysqli;

    function __construct($username, $password, $tipoUsuario, $nombre, $apellidos, $dni, $fechaNac, $email, $newPassword) {
        $this->username = $username;
        $this->password = $password;
		$this->tipoUsuario = (int) $tipoUsuario;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->dni = $dni;
		$time = strtotime($fechaNac);
		$newformat = date('Y-m-d',$time);
		$this->fechaNac = $newformat;
        $this->email = $email;
    }

//Función para conectarnos a la Base de datos
    function ConectarBD() {
        $this->mysqli = new mysqli("localhost", "root", "", "uniorganizer");
        if ($this->mysqli->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $this->mysqli->connect_errno . ") " . $this->mysqli->connect_error;
        }
        // Change character set to utf8
        mysqli_set_charset($this->mysqli,"utf8");
    }

//Comprueba que el usuario pueda loguearse
    function Login() {
        $this->ConectarBD();
        $sql = "SELECT * FROM USUARIO WHERE username = '" . $this->username . "'";
        $result = $this->mysqli->query($sql);
        if ($result->num_rows == 1) {
            $tupla = $result->fetch_array();

            if ($tupla['password'] == md5($this->password)) {
                return true;
            } else {
                return 'La contraseña para este usuario es errónea';
            }
        } else {
            return "El usuario no existe";
        }
    }
	
//Comprueba que el usuario pueda registrarse
    function Registro() {
        $this->ConectarBD();
        $sql = "SELECT * FROM USUARIO WHERE username = '" . $this->username . "'";
        $result = $this->mysqli->query($sql);
        if ($result->num_rows == 0) {
			return true;
			
        } else {
            return "El usuario ya existe";
        }
    }

//Insertar usuario y su correspondiente calendario
    function Insertar() {
        $this->ConectarBD();
        if ($this->username <> '') {
            $sql = "SELECT * FROM USUARIO where username = '" . $this->username . "'";
            if (!($result = $this->mysqli->query($sql))) {
                return 'No se ha podido conectar con la base de datos';
            }
            if ($result->num_rows == 0) {
                $sql1 = "SELECT * FROM USUARIO where dni = '" . $this->dni . "'";
                $result1 = $this->mysqli->query($sql1);
                if ($result1->num_rows == 0) {
                    $sql2 = "SELECT * FROM USUARIO where email = '" . $this->email . "'";
                    $result2 = $this->mysqli->query($sql2);
                    if ($result2->num_rows == 0) {
						
						$sql = "INSERT INTO USUARIO VALUES ('" . $this->username . "','" . md5($this->password) . "','" . $this->tipoUsuario . "','" . $this->nombre . "','" . $this->apellidos . "','" . $this->dni . "','" . $this->fechaNac . "','" . $this->email . "')";
                        if (!$result = $this->mysqli->query($sql)) {
							return 'No se inserto el usuario';
						}
						
						$sql = "INSERT INTO USUARIO_ROL VALUES ('" . $this->username . "','" . $this->tipoUsuario . "')";
                        if (!$result = $this->mysqli->query($sql)) {
							return 'No se inserto el usuario_rol';
						}			
						
						return 'Inserción realizada con éxito';
                    } else {
                        return "Ya existe un Usuario con ese E-mail";
                    }
                } else {
                    return "Ya existe un Usuario con ese DNI";
                }
            } else {
                return "Ya existe un Usuario con ese username";
            }

            return 'Inserción realizada con éxito2';
        } else {
            return 'El usuario ya existe en la base de datos';
		}
	}

//Devuelve la información de todos los usuarios
    function ConsultarTodo() {

        $this->ConectarBD();
        
        $sql = "SELECT * FROM USUARIO";
        

        if (!($resultado = $this->mysqli->query($sql))) {
            return 'Error en la consulta sobre la base de datos';
        } else {
            $toret = array();
            $i = 0;
            while ($fila = $resultado->fetch_array()) {
                $toret[$i] = $fila;
                $i++;
            }

            return $toret;
        }
    }

//Elimina un usuario del sistema
    function Borrar() {
        $this->ConectarBD();
        $sql = "SELECT * FROM USUARIO WHERE username = '" . $this->username . "'";
        $result = $this->mysqli->query($sql);

        if ($result->num_rows == 1) {
            $sql = "DELETE FROM USUARIO WHERE username = '" . $this->username . "'";
            $this->mysqli->query($sql);
			
            return "El usuario ha sido borrado correctamente";
        } else
            return "El usuario no existe";
    }

//Devuelve los valores almacenados para un determinado usuario para posteriormente rellenar un formulario
    function RellenaDatos() {
        $this->ConectarBD();
        $sql = "SELECT * FROM USUARIO WHERE USUARIO.username = '" . $this->username . "'";

        if (!($resultado = $this->mysqli->query($sql))) {
            return 'Error en la consulta sobre la base de datos';
        } else {
            $result = $resultado->fetch_array();
            return $result;
        }
    }

//Actualiza en la base de datos la información de un determinado usuario
    function Modificar() {

        $this->ConectarBD();
        $sql = "SELECT * FROM USUARIO where username = '" . $this->username . "'";
        $result = $this->mysqli->query($sql);

        if ($result->num_rows == 1) {
            
			$sql = "UPDATE `usuario` SET nombre='" . $this->nombre . "',apellidos='" . $this->apellidos . "',dni='" . $this->dni . "',fechaNac='" . $this->fechaNac . "',email='" . $this->email . "',password='" . md5($this->newPassword) . "' WHERE username='" . $this->username . "'";
			
            $this->mysqli->query($sql);

            if (!($resultado = $this->mysqli->query($sql))) {

                return "Se ha producido un error en la modificación del usuario";
            } else {
                return "El usuario se ha modificado con éxito";
            }
        } else {
            return "El usuario no existe";
        }
    }
	
//Devuelve una lista de los calendarios que pertenecen al usuario
	function listarMisCalendarios() {
        $this->ConectarBD();
        $sql = "SELECT * FROM calendario WHERE username = '" . $this->username . "'";
        if (!($resultado = $this->mysqli->query($sql))) {
            return 'Error en la consulta sobre la base de datos.';
        } else {
            $toret = array();
            $i = 0;
            while ($fila = $resultado->fetch_array()) {
                $toret[$i] = $fila;
                $i++;
            }
            return $toret;
        }
    }
	
//Devuelve una lista con los eventos de un calendario concreto
	function listarEventosPorCalendario($idCalendario) {
        $this->ConectarBD();
        $sql = "SELECT E.idEvento, E.asuntoEvento, E.descripcionEvento, E.dia, E.horaInicio, E.horaFin, E.idAsignatura FROM evento E, calendario_evento Q, calendario C WHERE E.idEvento=Q.idEvento AND Q.idCalendario=C.idCalendario AND C.username = '" . $this->username . "' AND C.idCalendario = '" . $idCalendario . "'";

        if (!($resultado = $this->mysqli->query($sql))) {
            return 'Error en la consulta sobre la base de datos';
        } else {
            $toret = array();
            $i = 0;
            while ($fila = $resultado->fetch_array()) {
                $toret[$i] = $fila;
                $i++;
            }

            return $toret;
        }
    }

//Devuelve una lista con las alertas de un calendario concreto
	function listarAlertasPorCalendario($idCalendario) {
        $this->ConectarBD();
        $sql = "SELECT A.idEvento, A.asuntoEvento, A.descripcionEvento, A.dia, A.horaInicio, A.horaFin, A.idEvento FROM alerta A, evento E, calendario_evento Q, calendario C WHERE A.idEvento=E.idEvento AND E.idEvento=Q.idEvento AND Q.idCalendario=C.idCalendario AND C.username = '" . $this->username . "' AND C.idCalendario = '" . $idCalendario . "'";

        if (!($resultado = $this->mysqli->query($sql))) {
            return 'Error en la consulta sobre la base de datos';
        } else {
            $toret = array();
            $i = 0;
            while ($fila = $resultado->fetch_array()) {
                $toret[$i] = $fila;
                $i++;
            }

            return $toret;
        }
    }
	
//Devuelve una lista con todos los eventos del calendario del usuario
    function listarEventos() {
        $this->ConectarBD();
        $sql = "SELECT E.idEvento, E.asuntoEvento, E.descripcionEvento, E.dia, E.horaInicio, E.horaFin, E.idAsignatura FROM evento E, calendario_evento Q, calendario C WHERE E.idEvento=Q.idEvento AND Q.idCalendario=C.idCalendario AND C.username = '" . $this->username . "'";
        
        if (!($resultado = $this->mysqli->query($sql))) {
            return 'Error en la consulta sobre la base de datos';
        } else {
            $toret = array();
            $i = 0;
            while ($fila = $resultado->fetch_array()) {
                $toret[$i] = $fila;
                $i++;
            }
            return $toret;
        }
    }
	
//Devuelve los datos de un evento del calendario
    function verEvento($idEvento) {
        $this->ConectarBD();
		
        $sql = "SELECT * FROM evento WHERE idEvento = '" . $idEvento . "'";
        $result = $this->mysqli->query($sql);
		
        if ($result->num_rows == 0) {
			return true;
			
        } else {
            return "No existe este evento";
        }
    }
	
//Devuelve una lista con todas las asignaturas del sistema
	function listarAsignaturas() {
        $this->ConectarBD();

        $sql = "SELECT * FROM ASIGNATURA";
        if (!($resultado = $this->mysqli->query($sql))) {
            return 'Error en la consulta sobre la base de datos.';
        } else {
            $toret = array();
            $i = 0;
            while ($fila = $resultado->fetch_array()) {
                $toret[$i] = $fila;
                $i++;
            }
            return $toret;
        }
    }
	
//Devuelve una lista con todos los calendarios del sistema
	function listarCalendarios() {
        $this->ConectarBD();
        $sql = "SELECT * FROM calendario";
        if (!($resultado = $this->mysqli->query($sql))) {
            return 'Error en la consulta sobre la base de datos.';
        } else {
            $toret = array();
            $i = 0;
            while ($fila = $resultado->fetch_array()) {
                $toret[$i] = $fila;
                $i++;
            }
            return $toret;
        }
    }

//Devuelve una lista con todas las alertas del sistema
    function listarAlertas() {
        $this->ConectarBD();
        $sql = "SELECT * FROM ALERTA";
        if (!($resultado = $this->mysqli->query($sql))) {
            return 'Error en la consulta sobre la base de datos.';
        } else {
            $toret = array();
            $i = 0;
            while ($fila = $resultado->fetch_array()) {
                $toret[$i] = $fila;
                $i++;
            }
            return $toret;
        }
    }
	
	function sendEmail($email, $username, $password){
		require_once("C:/xampp/htdocs/UniOrganizer/mail/class.phpmailer.php");

		//Receive all the parameters of the form
		$para = $email;
		$asunto = "Registro";
		$mensaje = "Bienvenido a UniOrganizer.\r/nUsuario: " . $username . "\r\nContraseña: " . $password . "";

		//This block is important
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = "ssl";
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 465;
		// Activate condification utf-8
		$mail->CharSet = 'UTF-8';

		//Our account
		$mail->Username ='uniorganizerapplication@gmail.com';
		$mail->Password = 'uniorganizer3.'; //Su password

		//Add recipient
		$mail->AddAddress($para);
		$mail->Subject = $asunto;
		$mail->Body = $mensaje;
		//To attach file
		//$mail->AddAttachment($archivo['tmp_name'], $archivo['name']);
		$mail->MsgHTML($mensaje);

		//Send email
		$mail->Send();
	}

}

?>
