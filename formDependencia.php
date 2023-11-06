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
$smarty->assign("mensaje", "Crear/Modificar Dependencia.");
if ((isset($_POST["accion"])) and ( $_POST["accion"] == "Guardar")) {
    $id = trim($_POST["idDep"]);
    $rs = 0;
    if ($id > 0) {
        $rs = $consultas->ContarRegistros($db, "dependencia", " CodDependencia='" . $id . "'");
    }
    $reg['NomDependencia'] = $_POST["nombre"];
    if (($rs <= 0)) {
        $ret = $consultas->InsertaDatos($db, "dependencia", $reg);
        $smarty->assign("mensaje", "Dependencia creada.");
    } else {
        $condicion = " CodDependencia='" . trim($_POST["idDep"]) . "'";
        $ret = $consultas->ActualizaDatos($db, "dependencia", $reg, $condicion);
        $smarty->assign("mensaje", "Dependencia actualizada.");
    }
}
$rs = $consultas->ListaDependencia($db);
$smarty->assign("_titulo", $_titulo);
$smarty->assign("acDependencia", "active");
$smarty->assign("datDependencia", $rs);
$navegador = "formDependencia.tpl";
$smarty->display($navegador);
?>
