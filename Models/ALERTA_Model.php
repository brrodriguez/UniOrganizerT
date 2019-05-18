<?php

include_once '../Functions/LibraryFunctions.php';
header("Content-Type: text/html;charset=utf-8");

class ALERTA_Model {

//Parámetros de la clase Alerta
    var $idAlerta;
    var $asuntoAlerta;
    var $descripcionAlerta;
    var $dia;
    var $horaInicio;
    var $horaFin;
    var $idEvento;
    var $mysqli;

    function __construct($idAlerta, $asuntoAlerta, $descripcionAlerta, $dia, $horaInicio, $horaFin, $idEvento) {
        $this->idAlerta = $idAlerta;
        $this->asuntoAlerta = $asuntoAlerta;
        $this->descripcionAlerta = $descripcionAlerta;
        $this->dia = $dia;
        $this->horaInicio = $horaInicio;
        $this->horaFin = $horaFin;
        $this->idEvento = $idEvento;
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

//Inserta una alerta y su correspondiente evento en el calendario
    function Insertar($fecha, $hora1, $hora2) {
        $this->ConectarBD();
		
		$horaA = substr($hora1, 0,2);
		$minA = substr($hora1, 3, 2);

        $horaInicio = $horaA . ':' . $minA . ':00';
        
        $horaB = substr($hora2, 0,2);
		$minB = substr($hora2, 3, 2);

		$horaFin = $horaB . ':' . $minB . ':00';
		
        $sql = "SELECT * FROM ALERTA";
        if (!$result = $this->mysqli->query($sql)) {
            return 'No se ha podido conectar con la base de datos.';
        } else {
			
			$sql = "INSERT INTO alerta( asuntoAlerta, descripcionAlerta, dia, horaInicio, horaFin, idEvento) VALUES ('" . $this->asuntoAlerta . "','" . $this->descripcionAlerta . "','" . $fecha . "','" . $horaInicio . "','" . $horaFin . "','" . $this->idEvento . "')";
			if (!($resultado = $this->mysqli->query($sql))) {
				return 'Error en insert alerta.';
            }
            return 'Inserción realizada con éxito';
        }
    }
	
	//Modifica una alerta y su correspondiente evento en el calendario
    function Modificar($fecha, $hora1, $hora2) {
        $this->ConectarBD();
		
		$horaA = substr($hora1, 0,2);
		$minA = substr($hora1, 3, 2);

        $horaInicio = $horaA . ':' . $minA . ':00';
        
        $horaB = substr($hora2, 0,2);
		$minB = substr($hora2, 3, 2);

		$horaFin = $horaB . ':' . $minB . ':00';
		
        $sql = "SELECT * FROM ALERTA";
        if (!$result = $this->mysqli->query($sql)) {
            return 'No se ha podido conectar con la base de datos.';
        } else {
			
			$sql = "UPDATE alerta SET asuntoAlerta='" . $this->asuntoAlerta . "', descripcionAlerta='" . $this->descripcionAlerta . "', dia='" . $fecha . "', horaInicio='" . $horaInicio . "', horaFin='" . $horaFin . "' WHERE idAlerta='" . $this->idAlerta . "'";
			if (!($resultado = $this->mysqli->query($sql))) {
				return 'Error en update alerta.';
			}
            return 'Modificación realizada con éxito';
        }
    }

//Consulta todos los usuarios
    function ConsultarUsuarios() {
        $this->ConectarBD();
        $sql = "SELECT username FROM USUARIO";

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


//Devuelve una lista de todas las alertas asociadas un usuario
    function Listar($username) {

            $this->ConectarBD();
            $sql = "SELECT A.idAlerta, A.asuntoAlerta, A.descripcionAlerta, A.dia, A.horaInicio, A.horaFin, A.idEvento FROM alerta A, evento E, calendario_evento Q, calendario C WHERE A.idEvento=E.idEvento AND E.idEvento=Q.idEvento AND Q.idCalendario=C.idCalendario AND C.username='" . $username . "'";
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
	
//Devuelve una lista de todas las alertas
    function ListarTodo() {

            $this->ConectarBD();
            $sql = "SELECT * FROM alerta ORDER BY idAlerta DESC";
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

//Elimina una alerta del sistema y 
    function Borrar() {
        $this->ConectarBD();
        $sql = "SELECT * FROM alerta WHERE idAlerta= '" . $this->idAlerta . "'";

        if (!($resultado = $this->mysqli->query($sql))) {
            return 'Error en la consulta sobre la base de datos.';
        } else if ($resultado->num_rows == 0) {
            return 'No se puede borrar porque no existe esa alerta.';
        } else {
            $sql = "DELETE FROM alerta WHERE idAlerta='" . $this->idAlerta . "'";
            $this->mysqli->query($sql);
            return "La alerta fue borrada con éxito.";
        }
    }

//Devuelve los datos de una alerta
    function Ver() {
        $this->ConectarBD();
        $sql = "SELECT * FROM alerta WHERE idAlerta= '" . $this->idAlerta . "'";
        if (($resultado = $this->mysqli->query($sql))) {
            $result = $resultado->fetch_array();
            return $result;
        } else {
            return 'Error en la consulta sobre la base de datos.';
        }
    }
}

//Permite filtrar las alertas
function filtrarAlertas($username) {
    $this->ConectarBD();

    if ($username == '') { //0
        $sql = "SELECT * FROM alerta ";
    } else if ($username != '') { //1
        $sql = "SELECT * FROM calendario WHERE username = '" . $username . "'";
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

?>
