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
$smarty->assign("mensaje", "Crear/Modificar Tipos Documentales.");
if ((isset($_POST["accion"])) and ( $_POST["accion"] == "Guardar")) {
    $id = trim($_POST["id_tipo"]);
    $rs = 0;
    if ($id > 0) {
        $rs = $consultas->ContarRegistros($db, "tipo_documento", " id_tipo='" . $id . "'");
    }
    $reg['nombre'] = $_POST["nombre"];
    if (($rs <= 0)) {
        $ret = $consultas->InsertaDatos($db, "tipo_documento", $reg);
        $smarty->assign("mensaje", "Tipo documento creado.");
    } else {
        $condicion = " id_tipo='" . trim($_POST["id_tipo"]) . "'";
        $ret = $consultas->ActualizaDatos($db, "tipo_documento", $reg, $condicion);
        $smarty->assign("mensaje", "Tipo documento actualizado.");
    }
}
$rs = $consultas->ListaTipoDocumento($db);
$smarty->assign("_titulo", $_titulo);
$smarty->assign("acDocumento", "active");
$smarty->assign("datDocumento", $rs);
$navegador = "formDocumento.tpl";
$smarty->display($navegador);
?>
