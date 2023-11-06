<?php

if (!(ISSET($_SESSION))) {
    session_start();
}
require_once("../db/db_FuncionesBasicas.inc.php");
require_once("../db/db_Gestion.inc.php");
require_once("../smarty/Smarty.class.php");
require_once("../conexion.php");
require_once("../validaprocesos.inc.php");

$smarty = new Smarty;
$sw = true;
$dato =  new stdClass();

if ((isset($_POST["accion"])) and ( $_POST["accion"] == "Asignar")) {
    $ntab=$_POST["idtab"];
    $nimg=$_POST["idreg"];    
    $nusu=$_POST["cmb_per"];
    $ncom=$_POST["mensaje"];  
    $retorno=InsertaAsigna($db,$ntab,$nimg,$nusu,$ncom);    
    
}
if ((isset($_POST["accion"])) and ( $_POST["accion"] == "Copia")){
    $ntab=$_POST["idtab"];
    $nimg=$_POST["idreg"];
    $msg=$_POST["mensaje"];
    $retorno=CierraCopia($db,$ntab,$nimg,$msg);    
}

if ((isset($_POST["accion"])) and ( $_POST["accion"] == "Cerrar")){
    $ntab=$_POST["idtab"];
    $nimg=$_POST["idreg"];
    $msg=$_POST["mensaje"];
    $idrad=$_POST["idrad"];
    $retorno=CierraRadicado($db,$ntab,$nimg,$msg,$idrad);    
}


if ((isset($_POST["accion"])) and ( $_POST["accion"] == "Respuesta")) {
    $reg["radicado_respuesta"]=$_POST["radicado"]; 
    $reg["no_expediente"]=$_POST["cmb_dest"];
    $reg["no_documento"]=$_POST["TxtNumdoc"];
    $reg["fecha_documento"]=$_POST["TxtFecdocumento"];
    $reg["tipo_documento"]=$_POST["cmb_tpdoc"];
    $reg["empresa_dst"]=$_POST["cmb_dest"];
    $reg["funcionario_dst"]=$_POST["nomexp"];
    $reg["asunto"]=$_POST["asunto"];
    $reg["dependencia"]=$_POST["id_dependencia"];
    $reg["funcionario"]=$_SESSION["sesion_id_usuario"];
    $reg["observaciones"]=$_POST["obser"];
    $reg["usuario"]=$_SESSION["sesion_usuario"];
    $reg["fecha_registro"]=date("Y-m-d H:i:s");
    $reg["fecha_entrega"]=date("Y-m-d H:i:s");
    $reg["valor"]=$_POST["TxtValor"];
    $reg["archivador"]=$_POST["nomtabla"];
    $reg["estado"]="1";
    $Wftabla=$_POST["wftabla"];
    $idimg=$_POST["idimg"];
    $nRad=$_POST["radicado"];
    $carpetaArc=$_POST["folder"];
    $raiz=$_POST["raiz"];

    $regAdj["usuario"]=$_SESSION["sesion_usuario"];
    $regAdj["fecha_anexo"]=date("Y-m-d H:i:s");
    $regAdj["estado"]='0';
    $tabAdj=str_replace("WF_", "ANX_", $_POST["wftabla"]);

    $retorno=InsertaRespuesta($db,$reg,$Wftabla,$nRad,$idimg); 

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
            $uploadFileDir=$_SESSION["sesion_ruta_salida_w"];
            $dest_path = "../../".$uploadFileDir . $newFileName;            
            if(move_uploaded_file($fileTmpPath, $dest_path))
            {
                ////Insertar en la base de datos.
                $IdSalida=$retorno;
                //RetorIdsalida($db,$nRad);               
                $regAdj["id_salida"]=$IdSalida;
                $regAdj["descripcion"]=$newFileName;
                $regAdj["ruta_anexo"] = $_SESSION["sesion_ruta_salida_c"] . $newFileName;
                InsertaAdjunto($db,$regAdj);
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
  header("Location: pendientes.php");
  exit();
}else{
    $smarty->assign("mensaje", "ERROR: Por favor intente nuevamente" . $db->ErrorNo() . " " . $db->ErrorMsg());
    $smarty->display($dir_root . "/" . $dir_self . "/templates/bp.error.tpl");
    die();
}


//         SQLExec(V_MYSQL,"update &ntab set estado=1,fecha_destino=NOW() where id_imagen=?nimg and usu_destino=?nusu and estado=0 and actividad=5")
//         SQLExec(V_MYSQL,"update &ntab set estado=1,fecha_destino=NOW() where id_imagen=?nimg and usu_destino=?_idusu and estado=0")
//         Messagebox("Documento asignado correctamente.",64,_titulo)


//     if ($sw == false) {
//         $destino = "func_nuevo.php";
//         $mostrar = "func_nuevo.tpl";
//     } else {
//         $_registrado = date("Y-m_d H:m:s");
//         $reg = array();
//         $reg["cedula"] = $dato->identificacion;
//         $reg["nombres"] = strtoupper($dato->nombres);
//         $reg["apellidos"] = strtoupper($dato->apellidos);
//         $reg["dependencia"] = $dato->dependencia;
//         $reg["estado"] = 2;
//         $rs3 = InsertaFunc($db, "personal", $reg);
//         if ($rs3) {
//             header("Location: funcionarios.php");
//             exit();
//         } else {
//             $dir_selfx = explode("/", dirname($_SERVER["PHP_SELF"]));
//             $dir_self = $dir_selfx[1];
//             $dir_root = $_SERVER["DOCUMENT_ROOT"];
//             $smarty->assign("mensaje", "ERROR: El registro NO se guardo, por favor intente nuevamente" . $db->ErrorNo() . " " . $db->ErrorMsg());
//             $smarty->display($dir_root . "/" . $dir_self . "/templates/bp.error.tpl");
//             die();
//         }
//     }
// } else {
//     $dato->identificacion = "";
//     $dato->nombres = "";
//     $dato->apellidos = "";
//     $dato->id_dependencia = "";
//     $destino = "func_nuevo.php";
//     $mostrar = "func_nuevo.tpl";
// }
// $rs1 = Listadatos($db, "select id_dependencia,nombre from dependencia where estado=0 order by nombre");

// $smarty->assign("dependencias", $rs1);
// $smarty->assign("dato", $dato);
// $smarty->assign("destino", $destino);
// $smarty->assign("mostrar", $mostrar);
// $navegador = $mostrar;
// $smarty->assign("dir_self", $dir_self);
// $smarty->assign("dir_css", $dir_css);
// $smarty->assign("navegador", $navegador);
// $smarty->display($display);
?>
