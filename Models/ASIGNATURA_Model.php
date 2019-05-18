<?php

include_once '../Functions/LibraryFunctions.php';
header("Content-Type: text/html;charset=utf-8");

class ASIGNATURA_Model {

//Parámetros de la clase Asignatura
	var $idAsignatura;
    var $nombreAsignatura;

    function __construct($idAsignatura, $nombreAsignatura) {
        $this->idAsignatura = $idAsignatura;
		$this->nombreAsignatura = $nombreAsignatura;
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

//Devuelve una lista de todas las asignaturas
    function Listar() {
        $this->ConectarBD();
        $sql = "SELECT * FROM asignatura";
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
	
//Devuelve una lista de las asignaturas del usuario
    function ListarAsignaturasUsuario() {
        $this->ConectarBD();
        $sql = "SELECT * FROM asignatura A, evento E, calendario_evento Q, calendario C WHERE A.idAsignatura=E.idAsignatura AND E.idEvento=Q.idEvento AND Q.idCalendario=C.idCalendario AND C.username='" . $_SESSION['login'] . "'";
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

//Elimina una asignatura del sistema
    function Borrar($id) {
        $this->ConectarBD();
        $sql = "DELETE FROM asignatura WHERE idAsignatura='" . $id . "'";
        if (!($resultado = $this->mysqli->query($sql))) {
            return 'Error en la consulta sobre la base de datos.';
        } else {
            return true;
        }
    }

//Inserta una nueva asignatura en el sistema
    function Insertar() {
        $this->ConectarBD();
        $sql = "INSERT INTO `asignatura`(`nombreAsignatura`) VALUES ('" . $this->nombreAsignatura . "')";
        if (!($resultado = $this->mysqli->query($sql))) {
            return 'Error en la consulta sobre la base de datos.';
        } else {
            return true;
        }
    }
	
//Devuelve los datos de una asignatura
    function Ver($id) {
        $this->ConectarBD();
        $sql = "SELECT * FROM asignatura WHERE idAsignatura='" . $id . "'";
        if (($resultado = $this->mysqli->query($sql))) {
            $result = $resultado->fetch_array();
            return $result;
        } else {
            return 'Error en la consulta sobre la base de datos.';
        }
    }
}

?>