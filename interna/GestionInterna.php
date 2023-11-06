<?php
if (!(ISSET($_SESSION))) {
	session_start();
}
require_once("../db/db_FuncionesBasicas.inc.php");
require_once("../db/db_Gestion.inc.php");
require_once("../db/db_Consultas.inc.php");
require_once("../smarty/Smarty.class.php");
require_once("../conexion.php");
require_once("../validaprocesos.inc.php");


$datos=new stdClass();
$__rad = $_POST["NoRadicado"];
$__cop = $_POST["copia"];
$rs1 = BuscaRadicadoInterna($db, $__rad);
$datos->no_radicado = $rs1[0] ['no_radicado'];
$datos->fecha_radicado = $rs1[0] ['fecha_radicado'];
$datos->no_documento = $rs1[0] ['no_documento'];
$datos->fecha_documento = $rs1[0] ['fecha_documento'];
$datos->dependencia = $rs1[0] ['dependencia'];
$datos->serie = $rs1[0] ['serie'];
$datos->subserie = $rs1[0] ['subserie'];
$datos->tipo_documento = $rs1[0] ['tipo_documento'];
$datos->asunto = $rs1[0] ['asunto'];
$datos->valor = $rs1[0] ['valor'];
$datos->expediente = $rs1[0] ['expediente'];
$datos->id_imagen = $rs1[0] ['id_imagen'];
$datos->no_expediente = $rs1[0] ['no_expediente'];
$datos->id_dependencia = $rs1[0] ['id_dependencia'];
$datos->id_serie = $rs1[0] ['id_serie'];
$datos->id_subserie = $rs1[0] ['id_subserie'];
$numExp = $rs1[0] ['no_expediente'];
$numTipo = $rs1[0] ['id_tipo'];
$RutaImg = $rs1[0] ['imagen'];
$myarr = explode("/", $RutaImg);
$ncnt = count($myarr);

$RutaImg = '/' . $myarr[$ncnt - 6] . '/' . $myarr[$ncnt - 5] . '/' . $myarr[$ncnt - 4] . '/' . $myarr[$ncnt - 3] . '/' . $myarr[$ncnt - 2] . '/' . $myarr[$ncnt - 1] . $myarr[$ncnt];

$RutaFol = '/' . $myarr[$ncnt - 6] . '/' . $myarr[$ncnt - 5] . '/' . $myarr[$ncnt - 4] . '/' . $myarr[$ncnt - 3] . '/' . $myarr[$ncnt - 2] . '/';

$datos->Unidad=$myarr[0];
$datos->imagen = $RutaImg;
$datos->folder = $RutaFol;
$datos->tabla = $rs1[0] ['tabla'];
$datos->tabarc = $rs1[0] ['archivador'];
$datos->copia = $__cop;
$rs2=TrazabilidadInterna($db,$datos->id_imagen,$datos->tabla);
$rs3=ListaDependencia($db);
$rsSerie=ListaSerie($db);
$rsSubSerie=ListaSubSerie($db);
$rsTpDoc=ListaTipoDocumento($db);
$rsExp=ListaExpediente($db);
$ntab=str_replace("WF_","ANX_", $datos->tabla);
$rs4=ListaAjuntosInterna($db,$datos->id_imagen,$ntab);
$cnt=count($rs4);
for($ytr=0;$ytr<$cnt;$ytr++){
	$RutaImg = $rs4[$ytr] ['ruta_anexo'];
	$myarr = explode("/", $RutaImg);
	$ncnt = count($myarr);
	$RutaImg = '/' . $myarr[$ncnt - 6] . '/' . $myarr[$ncnt - 5] . '/' . $myarr[$ncnt - 4] . '/' . $myarr[$ncnt - 3] . '/' . $myarr[$ncnt - 2] . '/' . $myarr[$ncnt - 1] . $myarr[$ncnt];
	$rs4[$ytr] ['rutaweb']= $RutaImg;
}

$smarty = new Smarty;
$smarty->assign("IdDep", $_SESSION["sesion_id_dep"]);
$smarty->assign("numExp",$numExp);
$smarty->assign("numTipo",$numTipo);

$smarty->assign("datos", $datos);
$smarty->assign("traza", $rs2);
$smarty->assign("tpdepen", $rs3);
$smarty->assign("cmbserie", $rsSerie);
$smarty->assign("cmbsubserie", $rsSubSerie);
$smarty->assign("cmbtpdoc", $rsTpDoc);
$smarty->assign("cmbexp", $rsExp);
$smarty->assign("fecActual",date("Y-m-d"));
$smarty->assign("adjunto", $rs4);
$navegador = "GestionInterna.tpl";
$smarty->assign("dir_self", $dir_self);
$smarty->assign("dir_css", $dir_css);
$smarty->assign("navegador", $navegador);
$smarty->display($display);
?>
