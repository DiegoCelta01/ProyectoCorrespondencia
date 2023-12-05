<?php
if (!(ISSET($_SESSION))) {
    session_start();
}
require_once("clases/clsUsuarios.php");
require_once("conexion.php");
$_SESSION["dia_actual"] = $hoy;
$_SESSION["titulo"] = $_titulo;
$_SESSION["sesion_id_usuario"] = 0;
$smarty = new Smarty;
$usuario = new clsUsuarios();
if ((isset($_POST['accion'])) and ( $_POST['accion'] == 'Ingresar')) {
    $__usuario = $_POST["bp_usuario"];
    $__clave = $_POST["bp_clave"];
    $usuario->usrLogin($db, array($__usuario, $__clave));
    if ($usuario->getCodigo() > 0) {
        $_SESSION["sesion_id_usuario"] = $usuario->getCodigo();
        $_SESSION["sesion_nom_usuario"] = $usuario->getNombre();
        $_SESSION["sesion_usuario"] = $usuario->getUsuario();
        $_SESSION["sesion_perfil"] = $usuario->getPerfil();
        $_SESSION["sesion_nomperfil"] = $usuario->getNomPerfil();
        $_SESSION["sesion_dependencia"] = $usuario->getDependencia();
        $_SESSION["sesion_nomdependencia"] = $usuario->getnomDependencia();
    } else {
        echo '<script language="javascript">alert("Usuario o Clave son incorrectos, por favor intente comunicarse con el area de administración.");</script>';
    }
}
if ($_SESSION["sesion_id_usuario"] > 0) {
    switch ($_SESSION["sesion_perfil"]) {
        case 1:
            header("Location:formRadica.php");
            break;
        case 2:
            header("Location:formPendiente.php");
            break;
        case 3:
            header("Location:formListas.php");
            break;
    }
} else {
    $smarty->assign("_titulo", $_titulo);
    $navegador = "index.tpl";
    $smarty->display("index.tpl");
}
?>	
