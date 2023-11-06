<?php

if (!(ISSET($_SESSION))) {
    session_start();
}
require_once "./clases/clsConsultas.php";
require_once "./clases/validaprocesos.inc.php";
require_once "conexion.php";
validaProceso();

$smarty = new Smarty;
$consultas = new clsConsultas();
$smarty->assign("mensaje", "Crear/Modificar Remitente.");
if ((isset($_POST["accion"])) and ( $_POST["accion"] == "Guardar")) {
    $id = trim($_POST["CodRemite"]);
    $rs = 0;
    if ($id > 0) {
        $rs = $consultas->ContarRegistros($db, "remitente", " CodRemite='" . $id . "'");
    }
    $reg['cedulaNit'] = $_POST["cedulaNit"];
    $reg['nomRemite'] = $_POST["nomRemite"];
    $reg['dirRemite'] = $_POST["dirRemite"];
    $reg['telRemite'] = $_POST["telRemite"];
    $reg['mailRemite'] = $_POST["mailRemite"];
    $reg['tipoRemite'] = $_POST["tipoRemite"];
    if (($rs <= 0)) {
        $ret = $consultas->InsertaDatos($db, "remitente", $reg);
        $smarty->assign("mensaje", "Remitente creado.");
    } else {
        $condicion = " CodRemite='" . trim($_POST["CodRemite"]) . "'";
        $ret = $consultas->ActualizaDatos($db, "remitente", $reg, $condicion);
        $smarty->assign("mensaje", "Remitente actualizado.");
    }
}
$rs = $consultas->ListaRemite($db);
$smarty->assign("_titulo", $_titulo);
$smarty->assign("acRemite", "active");
$smarty->assign("datRemite", $rs);
$navegador = "formRemite.tpl";
$smarty->display($navegador);
?>
