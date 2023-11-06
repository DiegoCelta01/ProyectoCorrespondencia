<?php

if (!(ISSET($_SESSION))) {
    session_start();
}
require_once("clases/clsConsultas.php");
require_once("clases/validaprocesos.inc.php");
require_once("conexion.php");
validaProceso();
$consultas = new clsConsultas();
$reg = array();
$smarty = new Smarty;
$smarty->assign("fecActual", date("Y-m-d"));
$smarty->assign("mensaje", "Documentos por Procesar.");
$smarty->assign("acRadicado", "active");

$datRadicados = $consultas->ListaRadicadosPendientes($db);
$smarty->assign("datRadicados", $datRadicados);
$navegador = "formPendiente.tpl";
$smarty->display($navegador);
?>
