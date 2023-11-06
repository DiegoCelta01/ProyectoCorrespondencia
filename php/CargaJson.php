<?php

header('Content-Type: application/json');
require_once("../clases/clsConsultas.php");
require_once("../conexion.php");
if (!(ISSET($_SESSION))) {
    session_start();
}
$consulta = new clsConsultas();

if (isset($_POST["codRemite"])) {
    $response['bandera'] = 0;
    $datos = array();
    $idremite = trim($_POST["codRemite"]);
    $sql="select *from remitente where CodRemite='".$idremite."'";
    $ret=$consulta->consulta($db, $sql);
    if ($ret->recordCount() > 0) {
        $datos['codRemite'] = trim($ret->fields[0]);
        $datos['cedulaNit'] = trim($ret->fields[1]);
        $datos['nomRemite'] = trim($ret->fields[2]);
        $datos['dirRemite'] = trim($ret->fields[3]);
        $datos['telRemite'] = trim($ret->fields[4]);
        $datos['mailRemite'] = trim($ret->fields[5]);
        $datos['tipoRemite'] = trim($ret->fields[6]);
        $response['bandera'] = 1;
        $response['datos'] = $datos;
    }
    echo json_encode($response);
}

if (isset($_POST["idDoc"])) {
    $response['bandera'] = 0;
    $datos = array();
    $idDoc = trim($_POST["idDoc"]);
    $sql="select *from tipo_documento where id_tipo='".$idDoc."'";
    $ret=$consulta->consulta($db, $sql);
    if ($ret->recordCount() > 0) {
        $datos['id_tipo'] = trim($ret->fields[0]);
        $datos['nombre'] = trim($ret->fields[1]);        
        $response['bandera'] = 1;
        $response['datos'] = $datos;
    }
    echo json_encode($response);
}

if (isset($_POST["idDep"])) {
    $response['bandera'] = 0;
    $datos = array();
    $idDep = trim($_POST["idDep"]);
    $sql="select *from dependencia where CodDependencia='".$idDep."'";
    $ret=$consulta->consulta($db, $sql);
    if ($ret->recordCount() > 0) {
        $datos['idDep'] = trim($ret->fields[0]);
        $datos['nombre'] = trim($ret->fields[1]);        
        $response['bandera'] = 1;
        $response['datos'] = $datos;
    }
    echo json_encode($response);
}

if (isset($_POST["idUsu"])) {
    $response['bandera'] = 0;
    $datos = array();
    $id = trim($_POST["idUsu"]);
    $ret = $consulta->consulta($db, "select *,CONVERT(AES_DECRYPT(clave,'SENA16')USING utf8) as strClave"
            . " from usuario where codusuario='" . $id . "'");
    if ($ret->recordCount() > 0) {
        $datos['codusuario'] = $id;
        $datos['nombre'] = trim($ret->fields[2]);
        $datos['usuario'] = trim($ret->fields[1]);
        $datos['dependencia'] = trim($ret->fields[6]);
        $datos['perfil'] = trim($ret->fields[4]);
        $datos['correo'] = trim($ret->fields[3]);
        $datos['clave'] = trim($ret->fields[8]);
        
        $response['bandera'] = 1;
        $response['datos'] = $datos;
    }
    echo json_encode($response);
}
?>