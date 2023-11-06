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
$smarty->assign("acRadicado", "active");

$rad = $_POST["NoRadicado"];
$datRadicado = $consultas->consultaRadicado($db, $rad);
$datos->idRad = $rad;
$datos->Radicado = $datRadicado[0]["Radicado"];
$datos->NumDocumento = $datRadicado[0]["NumDocumento"];
$datos->fechaDocumento = $datRadicado[0]["fechaDocumento"];
$datos->Observaciones = $datRadicado[0]["Observaciones"];
$datos->nomRemite = $datRadicado[0]["nomRemite"];
$datos->tpdoc = $datRadicado[0]["tpdoc"];
$datos->valor = $datRadicado[0]["valor"];
$datos->grado = $datRadicado[0]["grado"];
$archivos = scandir("assets/anexos/" . $datos->Radicado, 1);
$datos->imagen = "assets/anexos/" . $datos->Radicado . "/" . $archivos[0];
$datTraza = $consultas->consultaRadicadoTraza($db, $rad);

$smarty->assign("datos", $datos);
$rsDep = $consultas->ListaDependencia($db);
$smarty->assign("cmbdep", $rsDep);
$smarty->assign("traza", $datTraza);
$navegador = "formGestion.tpl";
$smarty->display($navegador);
?>
