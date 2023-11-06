<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-31 14:15:24
  from 'C:\AppServ\www\plantilla\formDatos.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed4024cdc8808_41693269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8f2bab9fb9e5e17072cf9384fa771635b687d1a' => 
    array (
      0 => 'C:\\AppServ\\www\\plantilla\\formDatos.php',
      1 => 1590952380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed4024cdc8808_41693269 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>
if (!(ISSET($_SESSION))) {
	session_start();
}
require_once("db/db_FuncionesBasicas.php");
require_once("smarty/Smarty.class.php");
require_once("conexion.php");
require_once("validaprocesos.inc.php");

$datos=new stdClass();
$rsBarrio=listBarrio($db);
$codBar="";

$smarty = new Smarty;
$smarty->assign("cmbBarrio", $rsBarrio);
$smarty->assign("codBar", $codBar);


$navegador = "formDatos.tpl";
$smarty->display($navegador);
<?php echo '?>';?>

<?php }
}
