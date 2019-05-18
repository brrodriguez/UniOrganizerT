<?php

include_once '../Functions/LibraryFunctions.php';
header("Content-Type: text/html;charset=utf-8");

class EVENTO_Model {

//Parámetros de la clase Evento
    var $idEvento;
    var $asuntoEvento;
    var $descripcionEvento;
    var $dia;
    var $horaInicio;
    var $horaFin;
    var $idAsignatura;
    var $mysqli;

    function __construct($idEvento, $asuntoEvento, $descripcionEvento, $dia, $horaInicio, $horaFin, $idAsignatura) {
        $this->idEvento = $idEvento;
        $this->asuntoEvento = $asuntoEvento;
        $this->descripcionEvento = $descripcionEvento;
        $this->dia = $dia;
        $this->horaInicio = $horaInicio;
        $this->horaFin = $horaFin;
        $this->idAsignatura = $idAsignatura;
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

//Inserta un Evento en el calendario
    function Insertar($fecha, $hora1, $hora2, $idCalendario) {
        $this->ConectarBD();
        
        // Check connection
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

		$horaA = substr($hora1, 0, 2);
		$minA = substr($hora1, 3, 2);

        $horaInicio = $horaA . ':' . $minA . ':00';
        
        $horaB = substr($hora2, 0,2);
		$minB = substr($hora2, 3, 2);

		$horaFin = $horaB . ':' . $minB . ':00';
		
        $sql = "SELECT * FROM evento";
        if (!$result = $this->mysqli->query($sql)) {
            return 'No se ha podido conectar con la base de datos.';
        } else {
			
			$sql = "INSERT INTO evento( asuntoEvento, descripcionEvento, dia, horaInicio, horaFin, idAsignatura) VALUES ('" . $this->asuntoEvento . "','" . $this->descripcionEvento . "','" . $fecha . "','" . $horaInicio . "','" . $horaFin . "', NULL )";
			if (!($resultado = $this->mysqli->query($sql))) {
                return 'Error en insert evento.';
            }
            $sql = "SELECT MAX(idEvento) AS id FROM evento";
            if (!($resultado = $this->mysqli->query($sql))) {
                return 'Error en la consulta sobre la base de datos.';
            } else {
                $toret = $resultado->fetch_array();
                $id = $toret['id'];
            }
            $sql2 = "INSERT INTO calendario_evento( idCalendario, idEvento) VALUES ('" . $idCalendario . "','" . $id . "')";
            if (!($resultado = $this->mysqli->query($sql2))) {
                echo("Error description: " . mysqli_error($this->mysqli));
                return 'Error al insertar en tabla calendario_evento.';
            }
            return 'Inserción realizada con éxito';
        }
        mysqli_close($this->mysqli);
    }
	
	//Modifica un Evento en el calendario
    function Modificar($fecha, $hora1, $hora2) {
        $this->ConectarBD();
		
		$horaA = substr($hora1, 0,2);
		$minA = substr($hora1, 3, 2);

        $horaInicio = $horaA . ':' . $minA . ':00';
        
        $horaB = substr($hora2, 0,2);
		$minB = substr($hora2, 3, 2);

		$horaFin = $horaB . ':' . $minB . ':00';
		
        $sql = "SELECT * FROM evento";
        if (!$result = $this->mysqli->query($sql)) {
            return 'No se ha podido conectar con la base de datos.';
        } else {
			
			$sql = "UPDATE evento SET asuntoEvento='" . $this->asuntoEvento . "', descripcionEvento='" . $this->descripcionEvento . "', dia='" . $fecha . "', horaInicio='" . $horaInicio . "', horaFin='" . $horaFin . "' WHERE idEvento='" . $this->idEvento . "'";
			if (!($resultado = $this->mysqli->query($sql))) {
				return 'Error en update evento.';
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


//Devuelve una lista de todos los eventos asociados un usuario
    function Listar($username) {

            $this->ConectarBD();
            $sql = "SELECT E.idEvento, E.asuntoEvento, E.descripcionEvento, E.dia, E.horaInicio, E.horaFin, E.idAsignatura FROM evento E, calendario_evento Q, calendario C WHERE E.idEvento=Q.idEvento AND Q.idCalendario=C.idCalendario AND C.username='" . $username . "'";
            if (!($resultado = $this->mysqli->query($sql))) {
                return 'Error en la consulta sobre la base de datos.';
            } else {
                $toret = array();
                $i = 0;
                while ($fila = $resultado->fetch_array()) {
                    if($fila['idAsignatura']!=NULL){
                        $sql2 = "SELECT nombreAsignatura AS nombre FROM asignatura WHERE idAsignatura='" . $fila['idAsignatura'] . "'";
                        if (!($result = $this->mysqli->query($sql2))) {
                            return 'Error en la consulta sobre la base de datos.';
                        } else {
                            $nombre = $result->fetch_array();
                            $nombreAsignatura = $nombre['nombre'];
                            $fila['7'] = $nombreAsignatura;
                        }
                    }
                    $toret[$i] = $fila;
                    $i++;
                }
                return $toret;
            }
        
    }

//Devuelve una lista de todos los eventos asociados un usuario
    function eventosCalendario($idCalendario) {

        $this->ConectarBD();
        $sql = "SELECT E.idEvento, E.asuntoEvento, E.descripcionEvento, E.dia, E.horaInicio, E.horaFin, E.idAsignatura FROM evento E, calendario_evento Q WHERE E.idEvento=Q.idEvento AND Q.idCalendario='" . $idCalendario . "'";
        if (!($resultado = $this->mysqli->query($sql))) {
            return 'Error en la consulta sobre la base de datos.';
        } else {
            $toret = array();
            $i = 0;
            while ($fila = $resultado->fetch_array()) {
                if($fila['idAsignatura']!=NULL){
                    $sql2 = "SELECT nombreAsignatura AS nombre FROM asignatura WHERE idAsignatura='" . $fila['idAsignatura'] . "'";
                    if (!($result = $this->mysqli->query($sql2))) {
                        return 'Error en la consulta sobre la base de datos.';
                    } else {
                        $nombre = $result->fetch_array();
                        $nombreAsignatura = $nombre['nombre'];
                        $fila['7'] = $nombreAsignatura;
                    }
                }
                $toret[$i] = $fila;
                $i++;
            }
            return $toret;
        }
    
}

//Devuelve una lista de todos los eventos asociados un usuario
function eventosAsignatura($idCalendario, $idAsignatura) {

    $this->ConectarBD();
    $sql = "SELECT E.idEvento, E.asuntoEvento, E.descripcionEvento, E.dia, E.horaInicio, E.horaFin, E.idAsignatura FROM evento E, calendario_evento Q WHERE E.idEvento=Q.idEvento AND Q.idCalendario='" . $idCalendario . "' AND E.idAsignatura='" . $idAsignatura . "'";
    if (!($resultado = $this->mysqli->query($sql))) {
        return 'Error en la consulta sobre la base de datos.';
    } else {
        $toret = array();
        $i = 0;
        while ($fila = $resultado->fetch_array()) {
            if($fila['idAsignatura']!=NULL){
                $sql2 = "SELECT nombreAsignatura AS nombre FROM asignatura WHERE idAsignatura='" . $fila['idAsignatura'] . "'";
                if (!($result = $this->mysqli->query($sql2))) {
                    return 'Error en la consulta sobre la base de datos.';
                } else {
                    $nombre = $result->fetch_array();
                    $nombreAsignatura = $nombre['nombre'];
                    $fila['7'] = $nombreAsignatura;
                }
            }
            $toret[$i] = $fila;
            $i++;
        }
        return $toret;
    }

}
	
//Devuelve una lista de todos los eventos
    function ListarTodo() {

            $this->ConectarBD();
            $sql = "SELECT E.idEvento, E.asuntoEvento, E.descripcionEvento, E.dia, E.horaInicio, E.horaFin, E.idAsignatura FROM evento E ORDER BY idEvento DESC";
            if (!($resultado = $this->mysqli->query($sql))) {
                return 'Error en la consulta sobre la base de datos.';
            } else {
                $toret = array();
                $i = 0;
                while ($fila = $resultado->fetch_array()) {
                    if($fila['idAsignatura']!=NULL){
                        $sql2 = "SELECT nombreAsignatura AS nombre FROM asignatura WHERE idAsignatura='" . $fila['idAsignatura'] . "'";
                        if (!($result = $this->mysqli->query($sql2))) {
                            return 'Error en la consulta sobre la base de datos.';
                        } else {
                            $nombre = $result->fetch_array();
                            $nombreAsignatura = $nombre['nombre'];
                            $fila['7'] = $nombreAsignatura;
                        }
                    }
                    $toret[$i] = $fila;
                    $i++;
                }
                return $toret;
            }
        
    }

//Elimina una evento del sistema
    function Borrar() {
        $this->ConectarBD();
        $sql = "SELECT * FROM evento WHERE idEvento= '" . $this->idEvento . "'";

        if (!($resultado = $this->mysqli->query($sql))) {
            return 'Error en la consulta sobre la base de datos.';
        } else if ($resultado->num_rows == 0) {
            return 'No se puede borrar porque no existe ese evento.';
        } else {
            $sql = "DELETE FROM evento WHERE idEvento='" . $this->idEvento . "'";
            $this->mysqli->query($sql);
            return "El evento fue borrado con éxito.";
        }
    }

//Devuelve los datos de una evento
    function Ver() {
        $this->ConectarBD();
        $sql = "SELECT * FROM evento E WHERE E.idEvento= '" . $this->idEvento . "'";
        if (($resultado = $this->mysqli->query($sql))) {
            $result = $resultado->fetch_array();
            return $result;
        } else {
            return 'Error en la consulta sobre la base de datos.';
        }
    }

//Permite filtrar los eventos
    function filtrar($username, $asuntoEvento, $nombreCalendario, $nombreAsignatura) {
        $this->ConectarBD();

        if ($username == '' && $asuntoEvento == '' && $nombreCalendario == '' && $nombreAsignatura == '') { //0000
            $sql = "SELECT * FROM `evento` ";
        } else if ($username == '' && $asuntoEvento == '' && $nombreCalendario == '' && $nombreAsignatura != '') { //0001
            $sql = "SELECT E.idEvento, E.asuntoEvento, E.descripcionEvento, E.dia, E.horaInicio, E.horaFin, E.idAsignatura FROM evento E, calendario_evento Q, calendario C WHERE E.idEvento=Q.idEvento AND Q.idCalendario=C.idCalendario AND A.nombreAsignatura LIKE '%{$nombreAsignatura}%'";
        } else if ($username == '' && $asuntoEvento == '' && $nombreCalendario != '' && $nombreAsignatura == '') { //0010
            $sql = "SELECT E.idEvento, E.asuntoEvento, E.descripcionEvento, E.dia, E.horaInicio, E.horaFin, E.idAsignatura FROM evento E, calendario_evento Q, calendario C WHERE E.idEvento=Q.idEvento AND Q.idCalendario=C.idCalendario AND C.nombreCalendario LIKE '%{$nombreCalendario}%'";
        } else if ($username == '' && $asuntoEvento == '' && $nombreCalendario != '' && $nombreAsignatura != '') { //0011
            $sql = "SELECT E.idEvento, E.asuntoEvento, E.descripcionEvento, E.dia, E.horaInicio, E.horaFin, E.idAsignatura FROM evento E, calendario_evento Q, calendario C WHERE E.idEvento=Q.idEvento AND Q.idCalendario=C.idCalendario AND C.nombreCalendario LIKE '%{$nombreCalendario}%' AND A.nombreAsignatura LIKE '%{$nombreAsignatura}%'";
        } else if ($username == '' && $asuntoEvento != '' && $nombreCalendario == '' && $nombreAsignatura == '') { //0100
            $sql = "SELECT E.idEvento, E.asuntoEvento, E.descripcionEvento, E.dia, E.horaInicio, E.horaFin, E.idAsignatura FROM evento E, calendario_evento Q, calendario C WHERE E.idEvento=Q.idEvento AND Q.idCalendario=C.idCalendario AND E.asuntoEvento LIKE '%{$asuntoEvento}%'"; 
        } else if ($username == '' && $asuntoEvento != '' && $nombreCalendario == '' && $nombreAsignatura != '') { //0101
            $sql = "SELECT E.idEvento, E.asuntoEvento, E.descripcionEvento, E.dia, E.horaInicio, E.horaFin, E.idAsignatura FROM evento E, calendario_evento Q, calendario C WHERE E.idEvento=Q.idEvento AND Q.idCalendario=C.idCalendario AND E.asuntoEvento LIKE '%{$asuntoEvento}%' AND A.nombreAsignatura LIKE '%{$nombreAsignatura}%'";
        } else if ($username == '' && $asuntoEvento != '' && $nombreCalendario != '' && $nombreAsignatura == '') { //0110
            $sql = "SELECT E.idEvento, E.asuntoEvento, E.descripcionEvento, E.dia, E.horaInicio, E.horaFin, E.idAsignatura FROM evento E, calendario_evento Q, calendario C WHERE E.idEvento=Q.idEvento AND Q.idCalendario=C.idCalendario AND E.asuntoEvento LIKE '%{$asuntoEvento}%' AND C.nombreCalendario LIKE '%{$nombreCalendario}%'";
        } else if ($username == '' && $asuntoEvento != '' && $nombreCalendario != '' && $nombreAsignatura != '') { //0111
            $sql = "SELECT E.idEvento, E.asuntoEvento, E.descripcionEvento, E.dia, E.horaInicio, E.horaFin, E.idAsignatura FROM evento E, calendario_evento Q, calendario C WHERE E.idEvento=Q.idEvento AND Q.idCalendario=C.idCalendario AND E.asuntoEvento LIKE '%{$asuntoEvento}%' AND C.nombreCalendario LIKE '%{$nombreCalendario}%' AND A.nombreAsignatura LIKE '%{$nombreAsignatura}%'";
        } else if ($username != '' && $asuntoEvento == '' && $nombreCalendario == '' && $nombreAsignatura == '') { //1000
            $sql = "SELECT E.idEvento, E.asuntoEvento, E.descripcionEvento, E.dia, E.horaInicio, E.horaFin, E.idAsignatura FROM evento E, calendario_evento Q, calendario C WHERE E.idEvento=Q.idEvento AND Q.idCalendario=C.idCalendario AND C.username LIKE '%{$username}%'";
        } else if ($username != '' && $asuntoEvento == '' && $nombreCalendario == '' && $nombreAsignatura != '') { //1001
            $sql = "SELECT E.idEvento, E.asuntoEvento, E.descripcionEvento, E.dia, E.horaInicio, E.horaFin, E.idAsignatura FROM evento E, calendario_evento Q, calendario C WHERE E.idEvento=Q.idEvento AND Q.idCalendario=C.idCalendario AND C.username LIKE '%{$username}%' AND A.nombreAsignatura LIKE '%{$nombreAsignatura}%'";
        } else if ($username != '' && $asuntoEvento == '' && $nombreCalendario != '' && $nombreAsignatura == '') { //1010
            $sql = "SELECT E.idEvento, E.asuntoEvento, E.descripcionEvento, E.dia, E.horaInicio, E.horaFin, E.idAsignatura FROM evento E, calendario_evento Q, calendario C WHERE E.idEvento=Q.idEvento AND Q.idCalendario=C.idCalendario AND C.username LIKE '%{$username}%' AND C.nombreCalendario LIKE '%{$nombreCalendario}%'";
        } else if ($username != '' && $asuntoEvento == '' && $nombreCalendario != '' && $nombreAsignatura != '') { //1011
            $sql = "SELECT E.idEvento, E.asuntoEvento, E.descripcionEvento, E.dia, E.horaInicio, E.horaFin, E.idAsignatura FROM evento E, calendario_evento Q, calendario C WHERE E.idEvento=Q.idEvento AND Q.idCalendario=C.idCalendario AND C.username LIKE '%{$username}%' AND C.nombreCalendario LIKE '%{$nombreCalendario}%' AND A.nombreAsignatura LIKE '%{$nombreAsignatura}%'";
        } else if ($username != '' && $asuntoEvento != '' && $nombreCalendario == '' && $nombreAsignatura == '') { //1100
            $sql = "SELECT E.idEvento, E.asuntoEvento, E.descripcionEvento, E.dia, E.horaInicio, E.horaFin, E.idAsignatura FROM evento E, calendario_evento Q, calendario C WHERE E.idEvento=Q.idEvento AND Q.idCalendario=C.idCalendario AND C.username LIKE '%{$username}%' AND E.asuntoEvento LIKE '%{$asuntoEvento}%'";
        } else if ($username != '' && $asuntoEvento != '' && $nombreCalendario == '' && $nombreAsignatura != '') { //1101
            $sql = "SELECT E.idEvento, E.asuntoEvento, E.descripcionEvento, E.dia, E.horaInicio, E.horaFin, E.idAsignatura FROM evento E, calendario_evento Q, calendario C WHERE E.idEvento=Q.idEvento AND Q.idCalendario=C.idCalendario AND C.username LIKE '%{$username}%' AND E.asuntoEvento LIKE '%{$asuntoEvento}%' AND A.nombreAsignatura LIKE '%{$nombreAsignatura}%'";
        } else if ($username != '' && $asuntoEvento != '' && $nombreCalendario != '' && $nombreAsignatura == '') { //1110
            $sql = "SELECT E.idEvento, E.asuntoEvento, E.descripcionEvento, E.dia, E.horaInicio, E.horaFin, E.idAsignatura FROM evento E, calendario_evento Q, calendario C WHERE E.idEvento=Q.idEvento AND Q.idCalendario=C.idCalendario AND C.username LIKE '%{$username}%' AND E.asuntoEvento LIKE '%{$asuntoEvento}%' AND C.nombreCalendario LIKE '%{$nombreCalendario}%'";
        } else if ($username != '' && $asuntoEvento != '' && $nombreCalendario != '' && $nombreAsignatura != '') { //1111
            $sql = "SELECT E.idEvento, E.asuntoEvento, E.descripcionEvento, E.dia, E.horaInicio, E.horaFin, E.idAsignatura FROM evento E, calendario_evento Q, calendario C WHERE E.idEvento=Q.idEvento AND Q.idCalendario=C.idCalendario AND C.username LIKE '%{$username}%' AND E.asuntoEvento LIKE '%{$asuntoEvento}%' AND C.nombreCalendario LIKE '%{$nombreCalendario}%' AND A.nombreAsignatura LIKE '%{$nombreAsignatura}%'";
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

    //Devuelve las alertas de un evento
    function obtenerAlertasEvento() {
        $this->ConectarBD();
		
        $sql = "SELECT A.idAlerta, A.asuntoAlerta, A.descripcionAlerta, A.dia, A.horaInicio, A.horaFin, A.idEvento FROM alerta A, evento E WHERE A.idEvento=E.idEvento AND A.idEvento='" . $this->idEvento . "'";
        if (($resultado = $this->mysqli->query($sql))) {
            $toret = array();
            $i = 0;
            while ($fila = $resultado->fetch_array()) {
                $toret[$i] = $fila;
                $i++;
            }
            return $toret;
        } else {
            return 'Error en la consulta sobre la base de datos.';
        }
    }

    //Devuelve las alertas de un evento
    function obtenerNombreAsig($id) {
        $this->ConectarBD();
		
        $sql = "SELECT nombreAsignatura AS nombre FROM asignatura WHERE idAsignatura='" . $id . "'";
        if (!($resultado = $this->mysqli->query($sql))) {
            return 'Error en la consulta sobre la base de datos.';
        } else {
            $toret = $resultado->fetch_array();
            $nombreAsignatura = $toret['nombre'];
            return $nombreAsignatura;
        }
    }
}

?>
