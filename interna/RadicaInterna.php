<?php
if (!(ISSET($_SESSION))) {
    session_start();
}
require_once("../db/db_FuncionesBasicas.inc.php");
require_once("../db/db_Gestion.inc.php");
require_once("../smarty/Smarty.class.php");
require_once("../conexion.php");
require_once("../validaprocesos.inc.php");


if ((isset($_POST["accion"])) and ( $_POST["accion"] == "Interna")) {
    $NoRad=ConseInterna($db);
    $reg["no_radicado"]=$NoRad; 
    $reg["fecha_radicado"]=date("Y-m-d H:i:s");
    $reg["no_expediente"]=$_POST["cmb_expe"];
    $reg["no_documento"]=$_POST["TxtNumdoc"];
    $reg["fecha_documento"]=$_POST["TxtFecdocumento"];
    $reg["tipo_documento"]=$_POST["cmb_tpdoc"];
    $reg["valor"]=$_POST["TxtValor"];
    $reg["descripcion"]=$_POST["obser"];
    $reg["asunto"]=$_POST["obser"];
    $reg["dependencia"]=$_POST["id_dependencia"];
    $reg["serie"]=$_POST["serie"];
    $reg["subserie"]=$_POST["subserie"];
    $reg["funcionario"]=$_POST["cmb_per"];
    $reg["archivador"]=$_SESSION["archivador"];
    $reg["imagen"]=$_SESSION["path_archivador"].$NoRad.'.TIF';
    $reg["usuario"]=$_SESSION["sesion_usuario"];
    $reg["fecha_registro"]=date("Y-m-d H:i:s");
    $reg["estado"]="1";
    $reg["fecha_entrega"]=date("Y-m-d H:i:s");
    $reg["id_planilla"]="0";
    $reg["usu_reg"]=$_SESSION["sesion_id_usuario"];
    
    $uploadFileDir=$_SESSION["path_archivador_w"];
    $regAdj["usuario"]=$_SESSION["sesion_usuario"];
    $regAdj["fecha_anexo"]=date("Y-m-d H:i:s");
    $regAdj["estado"]='4';    
    $retorno=InsertaInterna($db,$reg); 


    if($retorno){
        if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK) {

// Detalles del archivo cargado.
            $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
            $fileName = $_FILES['uploadedFile']['name'];
            $fileSize = $_FILES['uploadedFile']['size'];
            $fileType = $_FILES['uploadedFile']['type'];
            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));
            $newFileName = limpiaCadena($fileName) . '.' . $fileExtension;
            $newFileName=$retorno.$newFileName;
//Directorio donde se guarda el archivo
            $dest_path = "../../".$uploadFileDir . $newFileName;
            if(move_uploaded_file($fileTmpPath, $dest_path))
            {
                ////Insertar en la base de datos.   
                $IdSalida=$retorno;          
                $regAdj["id_imagen"]=$retorno;
                $regAdj["usuario"]=$_SESSION["sesion_usuario"];
                $regAdj["fecha_anexo"]=date("Y-m-d H:i:s");
                $regAdj["descripcion"]=$newFileName;
                $regAdj["ruta_anexo"]=$_SESSION["path_archivador"] . $newFileName;
                InsertaAdjuntoInterna($db,$regAdj);
            }
            else
            {
                $StrError=codigoAcadena($_FILES['uploadedFile']['error']);
                $smarty->assign("mensaje", "ERROR: Por favor intente nuevamente " . $StrError);
                $smarty->display($dir_root . "/" . $dir_self . "/templates/bp.error.tpl");
                die();
            }

        }
    }
}



if($retorno){    

///////////////////// Funcionlidad Copias ////////////////////////////////
    $rsDep=ListaDependencia($db);
    $smarty = new Smarty;
    $smarty->assign("IdDep", $_SESSION["sesion_id_dep"]);
    $smarty->assign("mensaje", $reg["asunto"]);
    $smarty->assign("funcionario", $reg["funcionario"]);
    $smarty->assign("id_imagen", $retorno);
    $smarty->assign("cmbdep", $rsDep);
    $navegador = "Copias.tpl";
    $smarty->assign("dir_self", $dir_self);
    $smarty->assign("dir_css", $dir_css);
    $smarty->assign("navegador", $navegador);
    $smarty->display($display);
//////////////////////////////////////////////////////////////////////////
//    header("Location: Interna.php");
//    exit();
}else{
    $smarty = new Smarty;
    $smarty->assign("mensaje", "ERROR: Por favor intente nuevamente" . $db->ErrorNo() . " " . $db->ErrorMsg());
    $smarty->display($dir_root . "/" . $dir_self . "/templates/bp.error.tpl");
    die();
}