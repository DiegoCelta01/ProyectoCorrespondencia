<?php

if (!(ISSET($_SESSION))) {
    session_start();
}

require_once "./clases/clsConsultas.php";
require_once "./clases/clsUsuarios.php";
require_once "./clases/validaprocesos.inc.php";
require_once "conexion.php";
validaProceso();
$smarty = new Smarty;
$consultas = new clsConsultas();
$usuario = new clsUsuarios();
$smarty->assign("mensaje", "Creación de Usuarios");

if ((isset($_POST["accion"])) and ( $_POST["accion"] == "Guardar")) {
    $id = trim($_POST["codusuario"]);
    $rs = 0;
    $usu = trim($_POST["usuario"]);
    $nom=trim($_POST["nombre"]);
    $dep=trim($_POST["dependencia"]);
    $per=trim($_POST["perfil"]);
    $cla=trim($_POST["clave"]);
    $cor=trim($_POST["correo"]);
    
    if ($id > 0) {
        $rs = $consultas->usrBuscarUsuario($db, "usuario", "codusuario='" . $id . "'");
    }
    if (($rs <= 0)) {
        $ret = $usuario->insertarUsuario($db,$usu,$nom,$dep,$per,$cla,$cor);
        $smarty->assign("mensaje", "Usuario Creado.");
    } else {
        $ret = $usuario->ActualizaUsuario($db,$id,$usu,$nom,$dep,$per,$cla,$cor);
        $smarty->assign("mensaje", "Usuario Actualizado.");
    }
}
$rs = $usuario->listaUsuarios($db);
$rs2 = $consultas->ListaDependencia($db);
$smarty->assign("acUsuario", "active");
$smarty->assign("datUsuario", $rs);
$smarty->assign("cmbDependencia", $rs2);
$navegador = "formUsuarios.tpl";
$smarty->display($navegador);
?>
