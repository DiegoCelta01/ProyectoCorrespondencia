<?php

if (!(ISSET($_SESSION))) {
    session_start();
}
require_once("../db/db_FuncionesBasicas.inc.php");
require_once("../db/db_Gestion.inc.php");
require_once("../smarty/Smarty.class.php");
require_once("../conexion.php");
require_once("../validaprocesos.inc.php");

$smarty = new Smarty;
$sw = true;
$dato =  new stdClass();

if ((isset($_POST["accion"])) and ( $_POST["accion"] == "Asignar")) {
    $ntab=$_POST["idtab"];
    $nimg=$_POST["idreg"];    
    $nusu=$_POST["cmb_per"];
    $ncom=$_POST["mensaje"];  
    $retorno=InsertaAsignaInterna($db,$ntab,$nimg,$nusu,$ncom);    
    
}
if ((isset($_POST["accion"])) and ( $_POST["accion"] == "Copia")){
    $ntab=$_POST["idtab"];
    $nimg=$_POST["idreg"];
    $msg=$_POST["mensaje"];
    $retorno=CierraCopiaInterna($db,$ntab,$nimg,$msg);    
}

if ((isset($_POST["accion"])) and ( $_POST["accion"] == "Cerrar")){
    $ntab=$_POST["idtab"];
    $nimg=$_POST["idreg"];
    $msg=$_POST["mensaje"];
    $idrad=$_POST["idrad"];
    $retorno=CierraRadicadoInterna($db,$ntab,$nimg,$msg,$idrad);    
}
if($retorno){    
  header("Location: Pendientes.php");
  exit();
}else{
    $smarty->assign("mensaje", "ERROR: Por favor intente nuevamente" . $db->ErrorNo() . " " . $db->ErrorMsg());
    $smarty->display($dir_root . "/" . $dir_self . "/templates/bp.error.tpl");
    die();
}


?>
