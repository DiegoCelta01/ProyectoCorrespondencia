<?php

if (!(ISSET($_SESSION))) {
    session_start();
}
require_once "db/db_FuncionesBasicas.inc.php";
require_once 'Smarty/Smarty.class.php';
require_once "db/validaprocesos.inc.php";
require_once "conexion.php";
validaProceso();
$smarty = new Smarty;
if ((isset($_POST["accion"])) and ( $_POST["accion"] == "Guardar")) {
    $id = trim($_POST["empId"]);
    $rs = 0;
    if ($id > 0) {
        $rs = ContarRegistros($db, "empresa", "id_conse='" . $id . "'");
    }
    $regEmp["nit"] = trim($_POST["empNit"]);
    $regEmp["nombre"] = trim($_POST["empNombre"]);
    $regEmp["direccion"] = trim($_POST["empDireccion"]);
    $regEmp["telefono"] = trim($_POST["empTelefono"]);
    $regEmp["correo"] = trim($_POST["empCorreo"]);
    $regEmp["contacto"] = trim($_POST["empContacto"]);
    if (($rs <= 0)) {
        $ret = InsertaDatos($db, "empresa", $regEmp);
    } else {
        $ret = ActualizaEmpresa($db, "empresa", $regEmp);
    }


    if ($ret) {
        if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK) {
// Detalles del archivo cargado.
            $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
            $fileName = $_FILES['uploadedFile']['name'];
            $fileSize = $_FILES['uploadedFile']['size'];
            $fileType = $_FILES['uploadedFile']['type'];
            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));
            $newFileName = trim($_POST["empNit"]) . '.' . $fileExtension;
//Directorio donde se guarda el archivo
            $uploadFileDir = "assets/images/";
            $dest_path = $uploadFileDir . $newFileName;
            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                $smarty->assign("mensaje", "Imagen guardada correctamente.");
            } else {
                $StrError = StrErrorupload($_FILES['uploadedFile']['error']);
                $smarty->assign("mensaje", "ERROR: Por favor intente nuevamente " . $StrError);
                $smarty->display("404.tpl");
                die();
            }
        } 
    }
}
$rs = listaEmpresa($db, 'id_conse desc');
$smarty->assign("_titulo", $_titulo);
$smarty->assign("_nomUsuario", $_SESSION["sesion_usuario"]);
$smarty->assign("_fecha", $hoy);
$smarty->assign("acEmpresa", "active");
$smarty->assign("datEmpresa", $rs);
$navegador = "formEmpresas.tpl";
$smarty->display($navegador);
?>
