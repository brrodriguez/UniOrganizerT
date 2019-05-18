<?php

include '../Functions/LibraryFunctions.php';
header("Content-Type: text/html;charset=utf-8");

class CALENDARIO_Model {

//Parámetros de la clase Calendario
	var $idCalendario;
    var $nombreCalendario;
    var $descripcionCalendario;
	var $username;

    function __construct($idCalendario, $nombreCalendario, $descripcionCalendario, $username) {
		$this->idCalendario = $idCalendario;
        $this->nombreCalendario = $nombreCalendario;
        $this->descripcionCalendario = $descripcionCalendario;
		$this->username = $username;
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

//Devuelve una lista con los calendarios del usuario
    function obtenerCalendariosUsuario($username) {
        $this->ConectarBD();
        $sql = "SELECT * FROM `calendario` WHERE (username='" . $username . "') ";
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
    function obtenerCalendarios() {
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

//Elimina un calendario del sistema y sus correspondientes eventos
    function eliminarCalendario($id) {
        $this->ConectarBD();
        $sql = "DELETE FROM calendario WHERE idCalendario='" . $id . "'";
        if (!($resultado = $this->mysqli->query($sql))) {
            return 'Error en la consulta sobre la base de datos.';
        } else {
			return 'Calendario eliminado correctamente.'; 
        }
    }

//Crea un nuevo calendario en el sistema
    function insertarCalendario() {
        $this->ConectarBD();
		
		$sql = "SELECT idCalendario FROM calendario WHERE nombreCalendario = '" . $this->nombreCalendario . "'";
		$resultado = $this->mysqli->query($sql);
        if ($resultado->num_rows == 0) {
			$sql = "INSERT INTO calendario (nombreCalendario, descripcionCalendario, username) VALUES ('" . $this->nombreCalendario . "','" . $this->descripcionCalendario . "','" . $this->username . "')";
			if (!($resultado = $this->mysqli->query($sql))) {
				return 'Error en la inserción de calendario.';
			} else {
				return 'Inserción realizada con éxito';
			}
        } else {
			return 'Error: ya existe un calendario con ese nombre.';
		}
    }
	
//Permite filtrar por nombre de usuario
	function filtrar($username, $nombreCalendario) {
        $this->ConectarBD();

        if ($username == '' && $nombreCalendario == '') { //00
            $sql = "SELECT * FROM calendario ";
        } else if ($username == '' && $nombreCalendario != '') { //01
            $sql = "SELECT * FROM calendario WHERE nombreCalendario LIKE '%{$nombreCalendario}%'";
        } else if ($username != '' && $nombreCalendario == '') { //10
            $sql = "SELECT * FROM calendario WHERE username LIKE '%{$username}%'";
        } else if ($username != '' && $nombreCalendario != '') { //11
            $sql = "SELECT * FROM calendario WHERE username LIKE '%{$username}%' AND nombreCalendario LIKE '%{$nombreCalendario}%'";
        }

        if (!$resultado = $this->mysqli->query($sql)) {
            return 'No se ha podido conectar con la base de datos';
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
	
//Crea los eventos para los exámenes de las asignaturas de un calendario
	function crearEntregas($idCalendario, $idAsignatura, $entrega, $datosA) {
        $this->ConectarBD();

        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
		
		$añoA = substr($datosA, 0, 4);
		$mesA = substr($datosA, 5, 2);
		$diaA = substr($datosA, 8, 2);
		$fechaA = $añoA . '/' . $mesA . '/' . $diaA;
		$horasA = (int) substr($datosA, 11, 2);
		
		if($mesA==11 or $mesA==12 or $mesA==1 or $mesA==2 or $mesA==3){
			$horasA = $horasA+1;
		}else{
			$horasA = $horasA+2;
        }
		
		$minsA = (int) substr($datosA, 14, 2);
		
		$horaA = $horasA . ':' . $minsA . ':00';
        $horaA = date('H:i:s', strtotime($horaA));
        $horasB = $horasA+2;
        $horaB = $horasB . ':' . $minsA . ':00';
        $horaB = date('H:i:s', strtotime($horaB));
        $fecha1 = date('Y-m-d', strtotime($fechaA));
        
        $sql = "SELECT E.idEvento as id FROM evento E, calendario_evento Q WHERE E.idEvento=Q.idEvento AND Q.idCalendario=" . $idCalendario . " AND  E.nombreEvento=" . $entrega . " AND  E.dia=" . $fecha1 . " AND  E.horaInicio=" . $horaA . " AND  E.horaFin=" . $horaB . " AND  E.idAsignatura=" . $idAsignatura . "";
		if (!($resultado = $this->mysqli->query($sql))) {
            $sql = "SELECT E.idEvento as id FROM evento E WHERE E.nombreEvento=" . $entrega . " AND  E.dia=" . $fecha1 . " AND  E.horaInicio=" . $horaA . " AND  E.horaFin=" . $horaB . " AND  E.idAsignatura=" . $idAsignatura . "";
            if ($resultado = $this->mysqli->query($sql)) {
                $fila = $resultado->fetch_array();
                $id = $fila['id'];
                $sql4 = "INSERT INTO calendario_evento( idCalendario, idEvento) VALUES ('" . $idCalendario . "','" . $id . "')";
                if (!($resultado = $this->mysqli->query($sql4))) {
                    return 'Error en la inserción de evento en calendario.';
                }else{
                    return 'Inserción realizada con éxito en calendario_evento.';
                }
            }else{
                $sql2 = "INSERT INTO evento( asuntoEvento, descripcionEvento, dia, horaInicio, horaFin, idAsignatura) VALUES ('" . $entrega . "', NULL, '" . $fecha1 . "', '" . $horaA . "', '" . $horaB . "', '" . $idAsignatura . "')";
                if (!($resultado = $this->mysqli->query($sql2))) {
                    return 'Error al insertar evento';
                }else{
                    $sql3 = "SELECT MAX(idEvento) AS id FROM evento";
                    if (!($resultado = $this->mysqli->query($sql3))) {
                        return 'Error al seleccionar ultimo evento.';
                    }else{
                        $evento = $resultado->fetch_array();
                        $idEvento = $evento['id'];
                        $sql4 = "INSERT INTO calendario_evento( idCalendario, idEvento) VALUES ('" . $idCalendario . "','" . $idEvento . "')";
                        if (!($resultado = $this->mysqli->query($sql4))) {
                            return 'Error en la inserción de evento en calendario.';
                        }else{
                            return 'Inserción realizada con éxito.';
                        }
                    } 
                }
            }
		}else{
            return 'Este evento ya existe para este calendario';
        }
    }

//Devuelve los datos de un calendario
    function obtenerCalendarioDetalle($id) {
        $this->ConectarBD();
        $sql = "SELECT * FROM calendario WHERE idCalendario='" . $id . "'";
        if (!($resultado = $this->mysqli->query($sql))) {
            return 'Error en la consulta sobre la base de datos.';
        } else {
            return $resultado->fetch_array();
        }
    }

//Devuelve las asignaturas de un calendario
    function obtenerAsignaturasCalendario($id) {
        $this->ConectarBD();
        $sql = "SELECT DISTINCT A.idAsignatura, A.nombreAsignatura FROM asignatura A, evento E, calendario_evento Q WHERE A.idAsignatura=E.idAsignatura AND E.idEvento=Q.idEvento AND Q.idCalendario='" . $id . "'";
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

//Actualiza los datos de un calendario
    function modificarCalendario($id) {
        $this->ConectarBD();
        $sql = "UPDATE `calendario` SET nombreCalendario='" . $this->nombreCalendario . "',descripcionCalendario='" . $this->descripcionCalendario . "' WHERE idCalendario='" . $id . "'";
        if (!($resultado = $this->mysqli->query($sql))) {
            return 'Error en la consulta sobre la base de datos.';
        } else {
            return 'Calendario modificado correctamente.';
        }
    }

//Elimina una asignatura de de un calendario
    function desasignarAsignatura($idCalendario, $idAsignatura) {
        $this->ConectarBD();
        $sql = "SELECT E.idEvento as id FROM evento E, calendario_evento Q WHERE E.idEvento=Q.idEvento AND Q.idCalendario=" . $idCalendario . " AND  E.idAsignatura=" . $idAsignatura . "";
        if (!($resultado = $this->mysqli->query($sql))) {
            return 'Error en la consulta sobre la base de datos.';
        } else {
            $eventos = array();
            $i = 0;
            while ($fila = $resultado->fetch_array()) {
                $eventos[$i] = $fila;
                $i++;
            }
            foreach($eventos as $evento){

                $sql = "DELETE FROM evento WHERE idEvento=" . $evento['id'] . "";
                if (!($resultado = $this->mysqli->query($sql))) {
                    return 'Error en la consulta sobre la base de datos.';
                }
            }
            return 'Asignaturas eliminadas correctamente.';
        }
    }

//Devuelve las asignaturas pertenecientes al calendario especificado
    function obtenerRelacion_CalendarioAsignaturas($idCalendario) {
        $this->ConectarBD();
        $sql = "SELECT *
				FROM  asignatura A, evento E, calendario_evento Q 
				WHERE A.idAsignatura=E.idAsignatura AND E.idEvento=Q.idEvento AND Q.idCalendario='" . $idCalendario . "'
				GROUP BY E.idAsignatura;";
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

}

?>