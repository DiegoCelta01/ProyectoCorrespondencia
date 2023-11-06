<?php
if (!(ISSET($_SESSION))) {
    session_start();
}
require_once("../db/db_FuncionesBasicas.inc.php");
require_once("../db/db_Gestion.inc.php");
require_once("../smarty/Smarty.class.php");
require_once("../conexion.php");
require_once("../validaprocesos.inc.php");


if ((isset($_POST["accion"])) and ( $_POST["accion"] == "Envia")) {
    $usuarios=$_POST["cmb_per"];
    $reg["id_imagen"]=$_POST["id_imagen"];
    $reg["usu_origen"]=$_SESSION["sesion_id_usuario"];
    $reg["fecha_origen"]=date("Y-m-d H:i:s");
    $reg["comentario"]=$_POST["asunto"];
    $reg["fecha_destino"]=date("Y-m-d H:i:s");
    $reg["fecha_limite"]='0000-00-00 00:00:00';
    $reg["actividad"]='4';
    $reg["estado"]='0';

    if(count($usuarios)>0){        
        for($i=0;$i<count($usuarios);$i++){
            $reg["usu_destino"]=$usuarios[$i];
            $retorno=InsertaCopia($db,$reg);
    //if(!$retorno){
    //    break;
    //}    
        }
    }else{$retorno=True;}
}

if ((isset($_POST["accion"])) and ( $_POST["accion"] == "Cancela")) {
    $retorno=True;
}


if($retorno){    
    header("Location: Interna.php");
    exit();
}else{
    $smarty = new Smarty;
    $smarty->assign("mensaje", "ERROR: Por favor intente nuevamente" . $db->ErrorNo() . " " . $db->ErrorMsg());
    $smarty->display($dir_root . "/" . $dir_self . "/templates/bp.error.tpl");
    die();
}