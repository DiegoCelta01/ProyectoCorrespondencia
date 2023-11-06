<?php
if (!(ISSET($_SESSION))) {
    session_start();
}
require_once("../db/db_Funcionarios.php");
require_once("../smarty/Smarty.class.php");
require_once("../conexion.php");
require_once("../validaprocesos.inc.php");
require_once("../db/db_FuncionesBasicas.inc.php");
require_once("../db/db_Gestion.inc.php");
require_once("../db/db_Consultas.inc.php");
$smarty = new Smarty;
IF (!ISSET($posBoton)) {
    $posBoton = 0;
}
$rscursor=ListaPendientesInterna($db,$_SESSION["sesion_id_usuario"]);
$smarty->assign("pendientes", $rscursor);
$navegador = "pendientes.tpl";
$smarty->assign("dir_self", $dir_self);
$smarty->assign("dir_css", $dir_css);
$smarty->assign("navegador", $navegador);
$smarty->display($display);
