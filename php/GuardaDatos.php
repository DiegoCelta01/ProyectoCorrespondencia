<?php
require_once("../clases/clsConsultas.php");
require_once("../conexion.php");
if (!(ISSET($_SESSION))) {
    session_start();
}
$consulta = new clsConsultas();
if (isset($_GET["accion"])) {
    if ($_GET["accion"] == 'ingresarRemite') {
        $reg['cedulaNit'] = $_GET["cedulaNit"];
        $reg['nomRemite'] = $_GET["nomRemite"];
        $reg['dirRemite'] = $_GET["dirRemite"];
        $reg['telRemite'] = $_GET["telRemite"];
        $reg['mailRemite'] = $_GET["mailRemite"];
        $reg['tipoRemite'] = $_GET["tipoRemite"];
        $rs = $consulta->InsertaDatos($db, "remitente", $reg);
        if ($rs) {
            echo "Ok.";
        } else {
            echo "Error.";
        }
    }

    if ($_GET["accion"] == 'asignaRadicado') {
        $usu = $_SESSION["sesion_id_usuario"];
        $reg['CodRadTraza'] = $_GET["noRad"];
        $reg['UsuEnvia'] = $usu;
        $reg['MensajeEnvia'] = $_GET["mensaje"];
        $reg['UsuRecibe'] = $_GET["CodDestinoRad"];
        $reg['estado'] = 1;
        $rs = $consulta->InsertaDatos($db, "trazabilidad", $reg);
        if ($rs) {
            $consulta->consulta($db, "update trazabilidad set estado=2 where UsuRecibe='" . $usu . "'"
                    . " and CodRadTraza='" . $_GET["noRad"] . "' and estado=1");
            echo "Ok.";
        } else {
            echo "Error.";
        }
    }

    if ($_GET["accion"] == 'cierraRadicado') {
        $usu = $_SESSION["sesion_id_usuario"];
        $reg['CodRadTraza'] = $_GET["noRad"];
        $reg['UsuEnvia'] = $usu;
        $reg['MensajeEnvia'] = $_GET["mensajeCierra"];
        $reg['UsuRecibe'] = $usu;
        $reg['estado'] = 3;
        $rs = $consulta->InsertaDatos($db, "trazabilidad", $reg);
        if ($rs) {
            $consulta->consulta($db, "update trazabilidad set estado=2 where UsuRecibe='" . $usu . "'"
                    . " and CodRadTraza='" . $_GET["noRad"] . "' and estado=1");
            $consulta->consulta($db, "update radicado set CodEstadoRad=2 where numeroRadicado='" . $_GET["noRad"] . "'");
            echo "Ok.";
        } else {
            echo "Error.";
        }
    }
}
?>