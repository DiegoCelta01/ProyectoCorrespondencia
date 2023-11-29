<?php
require_once("adodb/adodb.inc.php");
include_once('adodb/toexport.inc.php');
require 'Smarty/Smarty.class.php';

date_default_timezone_set(('america/bogota'));
$dir_ip_local = $_SERVER["REMOTE_ADDR"];
$dir_root = $_SERVER["DOCUMENT_ROOT"];
$dir_selfx = explode("/", dirname($_SERVER["PHP_SELF"]));
$_titulo='Gestión de Correspondencia';
$conServidor = "localhost";
$conBasededatos = "proyecto";
$conUsuario = "root";
$conClave = "Col_112023*1";
$db = NewADOConnection("MySqli");
$db->debug = false;
$db->Connect($conServidor,$conUsuario,$conClave,$conBasededatos);
$nommes = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
$nomdia = array('Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado');
$dia = date("j");
$mes = date("n");
$diasemana = date("w");
$hoy = $nomdia[$diasemana] . ', ' . $dia . ' de ' . $nommes[$mes - 1] . ' del ' . date("Y");
?>