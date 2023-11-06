<?php
header('Content-Type: application/json');
require_once("../db/db_FuncionesBasicas.inc.php");
require_once("../conexion.php");
if (!(ISSET($_SESSION))) {
    session_start();
}
if (isset($_POST["idUsu"])) {
    $response['bandera'] = 0;
    $datos = array();
    $id = trim($_POST["idUsu"]);
    $consulta = consulta($db, "select *,CONVERT(AES_DECRYPT(clave,'0176')USING utf8) as strClave"
            . " from usuario where id_conse='" . $id . "'");
    if ($consulta->recordCount() > 0) {
        $datos['conse'] = $id;
        $datos['nombre'] = trim($consulta->fields[1]);
        $datos['usuario'] = trim($consulta->fields[2]);
        $datos['empresa'] = trim($consulta->fields[5]);
        $datos['clave'] = trim($consulta->fields[7]);
        
        $response['bandera'] = 1;
        $response['datos'] = $datos;
    }
    echo json_encode($response);
}
?>