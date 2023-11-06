<?php

if (!(ISSET($_SESSION))) {
    session_start();
}
require_once("clases/clsConsultas.php");
require_once("clases/validaprocesos.inc.php");
require_once("conexion.php");
validaProceso();
$consultas = new clsConsultas();
$reg = array();
$smarty = new Smarty;
$rsTpDoc = $consultas->ListaTipoDocumento($db);
$rsRemite = $consultas->ListaRemite($db);
$rsDep = $consultas->ListaDependencia($db);
$smarty->assign("cmbtpdoc", $rsTpDoc);
$smarty->assign("cmbRemite", $rsRemite);
$smarty->assign("cmbdep", $rsDep);
$smarty->assign("fecActual", date("Y-m-d"));
$smarty->assign("mensaje", "Crear Radicado.");
$smarty->assign("acRadicado", "active");

if ((isset($_POST["accion"])) and ( $_POST["accion"] == "Guardar")) {
    $reg["CodRemiteRad"] = $_POST["CodRemiteRad"];
    $reg["CodDestinoRad"] = $_POST["CodDestinoRad"];
    $reg["CodTpDocRad"] = $_POST["CodTpDocRad"];
    $reg["NumDocumento"] = $_POST["NumDocumento"];
    $reg["fechaDocumento"] = $_POST["fechaDocumento"];
    $reg["Valor"] = $_POST["Valor"];
    $reg["Observaciones"] = $_POST["Observaciones"];
    $reg["CodGradRad"] = $_POST["CodGradRad"];
    $reg["UsuarioRadica"] = $_SESSION["sesion_id_usuario"];
    $rt = $consultas->InsertaDatos($db, "radicado", $reg);
    if ($rt) {
        $id = $consultas->UltimoInsert($db);
        $folderRad = date("Ymd") . $id;
        $traza["CodRadTraza"]=$id;
        $traza["UsuEnvia"]=$_SESSION["sesion_id_usuario"];
        $traza["MensajeEnvia"]=$_POST["Observaciones"];
        $traza["UsuRecibe"]=$_POST["CodDestinoRad"];
        $traza["estado"]=1;
        $consultas->InsertaDatos($db,"trazabilidad",$traza);
        $smarty->assign("mensaje", "Radicado generado correctamente." . $folderRad);
        if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK) {
// Detalles del archivo cargado.
            $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
            $fileName = $_FILES['uploadedFile']['name'];
            $fileSize = $_FILES['uploadedFile']['size'];
            $fileType = $_FILES['uploadedFile']['type'];
            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));
            $fileName = $consultas->limpiaCadena($fileName);
            $newFileName = $fileName . '_' . $id . '.' . $fileExtension;
//Directorio donde se guarda el archivo
            $folderRad = date("Ymd") . $id . "/";
            $uploadFileDir = "assets/anexos/" . $folderRad;
            mkdir($uploadFileDir, 0777);
            $dest_path = $uploadFileDir . $newFileName;
            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                $reg2["idRadicado"] = $id;
                $reg2["idUsuario"] = $_SESSION["sesion_id_usuario"];
                $reg2["nombre"] = $id;
                $reg2["descripcion"] = $_POST["Observaciones"];
                $smarty->assign("mensaje", "Radicado guardado correctamente." . $folderRad);
            } else {
                $StrError = $consultas->StrErrorupload($_FILES['uploadedFile']['error']);
                $smarty->assign("mensaje", "ERROR: Por favor intente nuevamente " . $StrError);
                $smarty->display("404.tpl");
                die();
            }
        }
    } else {
        $smarty->assign("mensaje", "Error al crear el radicado.");
    }
}
$datRadicados = $consultas->ListaRadicados($db);
$smarty->assign("datRadicados", $datRadicados);
$navegador = "formRadica.tpl";
$smarty->display($navegador);
?>
