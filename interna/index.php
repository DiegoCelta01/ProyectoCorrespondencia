<?
if (!(ISSET($_SESSION))) {
    session_start();
}

require_once("smarty/Smarty.class.php");
//require_once("../bp.navegador.php");

$smarty = new Smarty;

$smarty->assign("mensaje", "ACCESO DENEGADO");
$smarty->assign("mensaje2", "Usted no esta autorizado para acceder al Sistema");

$navegador = "index.tpl";
$smarty->assign("dir_self", $dir_self);
$smarty->assign("dir_css", $dir_css);
$smarty->assign("navegador", $navegador);
$smarty->display($display);
?>
