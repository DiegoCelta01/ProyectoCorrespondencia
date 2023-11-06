<?php

if (!(ISSET($_SESSION))) {
    session_start();
}
require_once("./clases/clsUsuarios.php");
require_once("./clases/validaprocesos.inc.php");
require_once("conexion.php");
validaProceso();
$__id_usuario = $_SESSION["sesion_id_usuario"];
$smarty = new Smarty;
$usuario = new clsUsuarios();
$smarty->assign("strMensaje", "");
if ((isset($_POST["accion"])) and ( $_POST["accion"] == "Enviar")) {
    $clave = $_POST["clave1"];
    $rs = $usuario->usrModificarClave($db, $clave, $__id_usuario);
    if ($rs) {
        $smarty->assign("strMensaje", "Clave Actualizada.");
    } else {
        $smarty->assign("strMensaje", "Error al actualizar.");
    }
}

$rs = $usuario->usrBuscarUsuario($db, array($__id_usuario));
$nomUsu = $rs[0]["nombre"];
$navegador = "formClave.tpl";
$smarty->assign("_titulo", $_titulo);
$smarty->assign("_nomUsuario", $_SESSION["sesion_nom_usuario"]);
$smarty->assign("_fecha", $hoy);
$smarty->assign("nomUsu", $nomUsu);
$smarty->assign("acClave", "active");
$smarty->display($navegador);
?>