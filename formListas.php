<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
if (!(ISSET($_SESSION))) {
    session_start();
}
require_once("clases/clsConsultas.php");
require_once("clases/validaprocesos.inc.php");
require_once("conexion.php");
validaProceso();
$consultas = new clsConsultas();
$smarty = new Smarty;
$smarty->assign("_titulo", $_titulo);
$smarty->assign("_nomUsuario", $_SESSION["sesion_usuario"]);
$smarty->assign("_fecha", $hoy);
$rscursor = $consultas->ConsultaRadicados($db);
$smarty->assign("datos", $rscursor);
$smarty->assign("acConsulta", "active");
$navegador = "formListas.tpl";
$smarty->display($navegador);
?>