<?php
class clsConsultas {

    public function ListaDependencia($db) {
        $sql = $db->Prepare("select *from dependencia order by NomDependencia asc");
        $rs = $db->GetAll($sql);
        if (!$rs) {
            $strerr = $db->ErrorMsg();
            if (!empty($strerr)) {
                echo "Error MySql En ListaDependencia: " . $db->ErrorMsg();
            }
        } else {
            return $rs;
        }
    }

    public function ListaTipoDocumento($db) {
        $sql = $db->Prepare("select *from tipo_documento order by nombre asc");
        $rs = $db->GetAll($sql);
        if (!$rs) {
            $strerr = $db->ErrorMsg();
            if (!empty($strerr)) {
                echo "Error MySql En ListaTipoDocumento: " . $db->ErrorMsg();
            }
        } else {
            return $rs;
        }
    }

    public function ListaGrado($db, $filtro) {
        $sql = $db->Prepare("select *from remitente order by nombre asc");
        $rs = $db->GetAll($sql);
        if (!$rs) {
            $strerr = $db->ErrorMsg();
            if (!empty($strerr)) {
                echo "Error MySql En ListaTipoDocumento: " . $db->ErrorMsg();
            }
        } else {
            return $rs;
        }
    }

    public function ListaFuncionario($db, $dep) {
        $sql = $db->Prepare("select *from usuario where dependencia='" . $dep . "' and estado=1 order by nombre asc");
        $rs = $db->Execute($sql);
        if (!$rs) {
            $strerr = $db->ErrorMsg();
            if (!empty($strerr)) {
                echo "Error MySql En ListaFuncionario: " . $db->ErrorMsg();
            }
        } else {
            return $rs;
        }
    }

    public function ListaFuncionarioAsg($db, $dep) {
        $sql = $db->Prepare("select *from usuario where dependencia='" . $dep . "' "
                . " and estado=1 and perfil=2 and codusuario!='" . $_SESSION["sesion_id_usuario"] . "' order by nombre asc");
        $rs = $db->Execute($sql);
        if (!$rs) {
            $strerr = $db->ErrorMsg();
            if (!empty($strerr)) {
                echo "Error MySql En ListaFuncionario: " . $db->ErrorMsg();
            }
        } else {
            return $rs;
        }
    }

    public function ListaRemite($db) {
        $sql = $db->Prepare("select *from remitente order by nomRemite asc");
        $rs = $db->Execute($sql);
        if (!$rs) {
            $strerr = $db->ErrorMsg();
            if (!empty($strerr)) {
                echo "Error MySql En ListaRemite: " . $db->ErrorMsg();
            }
        } else {
            return $rs;
        }
    }

    public function ContarRegistros($db, $tabla, $condicion) {
        $recordSet = $db->Execute("select count(*) from " . $tabla . " where " . $condicion);
        if (!$recordSet) {
            print $db->ErrorMsg();
        } else {
            return $recordSet->fields[0];
        }
    }

    public function InsertaDatos($db, $tabla, $reg) {
        $rs = $db->Autoexecute($tabla, $reg, 'INSERT');
        if (!$rs) {
            $strerr = $db->ErrorMsg();
            if (!empty($strerr)) {
                echo "Error MySql En InsertaDatos: " . $db->ErrorMsg();
            }
        }
        return $rs;
    }

    function consulta($db, $sql) {
        $rs = $db->Execute($sql);
        return($rs);
    }

    function UltimoInsert($db) {
        return $db->Insert_ID();
    }

    function limpiaCadena($string) {
        $string = ereg_replace("[^A-Za-z0-9]", "", $string);
        return $string;
    }

    public function StrErrorupload($code) {
        switch ($code) {
            case UPLOAD_ERR_INI_SIZE:
                $message = "El peso del archivo es demasiado grande.";
                break;
            case UPLOAD_ERR_FORM_SIZE:
                $message = "El peso del archivo es demasiado grande.";
                break;
            case UPLOAD_ERR_PARTIAL:
                $message = "Se cerro la conexion mientras se subia el archivo.";
                break;
            case UPLOAD_ERR_NO_FILE:
                $message = "No existe un archivo para copiar.";
                break;
            case UPLOAD_ERR_NO_TMP_DIR:
                $message = "El folder temporal no existe.";
                break;
            case UPLOAD_ERR_CANT_WRITE:
                $message = "El folder destino no tiene permisos de escritura.";
                break;
            case UPLOAD_ERR_EXTENSION:
                $message = "El formato de archivo no es valido, intente nuevamente.";
                break;

            default:
                $message = "Error al copiar el archivo, error desconocido.";
                break;
        }
        return $message;
    }

    function ListaRadicados($db) {
        $sql = $db->Prepare("select replace(concat(date(a.fechaRadicado),a.numeroRadicado),'-','') as Radicado,"
                . " date(a.fechaRadicado) as fecha,"
                . " b.nomRemite as remite,c.nombre as destino,d.nombre as tpDocumento,a.observaciones, "
                . " case when CodGradRad=1 then 'Alta' when CodGradRad=2 then 'Media' "
                . " when CodGradRad=3 then 'Baja' end as grado "
                . " from radicado as a inner join remitente as b on a.CodRemiteRad=b.CodRemite "
                . " inner join usuario as c on a.CodDestinoRad=c.codusuario inner join tipo_documento "
                . " as d on a.CodTpDocRad=d.id_tipo where UsuarioRadica='" . $_SESSION["sesion_id_usuario"] . "' "
                . " order by numeroRadicado desc limit 20");
        $rs = $db->GetAll($sql);
        if (!$rs) {
            $strerr = $db->ErrorMsg();
            if (!empty($strerr)) {
                echo "Error MySql En ListaRadicados: " . $db->ErrorMsg();
            }
        } else {
            return $rs;
        }
    }

    public function ActualizaDatos($db, $tabla, $reg, $condicion) {
        $rs = $db->Autoexecute($tabla, $reg, 'UPDATE', $condicion);
        if (!$rs) {
            $strerr = $db->ErrorMsg();
            if (!empty($strerr)) {
                echo "Error MySql En ActualizaDatos: " . $db->ErrorMsg();
            }
        }
        return $rs;
    }

    function ListaRadicadosPendientes($db) {
        $sql = $db->Prepare("select replace(concat(date(a.fechaRadicado),a.numeroRadicado),'-','') as Radicado,"
                . " date(a.fechaRadicado) as fecha,a.numeroRadicado,"
                . " b.nomRemite as remite,e.fechaIngresa,d.nombre as tpDocumento,e.MensajeEnvia,"
                . " f.nombre as usuRemite,  "
                . " case when CodGradRad=1 then 'Alta' when CodGradRad=2 then 'Media' "
                . " when CodGradRad=3 then 'Baja' end as grado "
                . " from radicado as a inner join remitente as b on a.CodRemiteRad=b.CodRemite "
                . " inner join usuario as c on a.CodDestinoRad=c.codusuario inner join tipo_documento "
                . " as d on a.CodTpDocRad=d.id_tipo inner join trazabilidad as e on a.numeroRadicado=e.CodRadTraza "
                . " inner join usuario as f on e.UsuEnvia=f.codusuario "
                . " where e.UsuRecibe='" . $_SESSION["sesion_id_usuario"] . "' and e.estado=1 "
                . " order by numeroRadicado desc");
        $rs = $db->GetAll($sql);
        if (!$rs) {
            $strerr = $db->ErrorMsg();
            if (!empty($strerr)) {
                echo "Error MySql En ListaRadicados: " . $db->ErrorMsg();
            }
        } else {
            return $rs;
        }
    }

    function consultaRadicado($db, $id) {
        $sql = $db->Prepare("select replace(concat(date(a.fechaRadicado),a.numeroRadicado),'-','') as Radicado, "
                . "a.NumDocumento,a.fechaDocumento,a.valor,a.Observaciones,b.nomRemite,c.nombre as tpdoc, "
                . "case when CodGradRad=1 then 'Alta' when CodGradRad=2 then 'Media'  "
                . "when CodGradRad=3 then 'Baja' end as grado "
                . "from radicado as a inner join remitente as b on a.CodRemiteRad=b.CodRemite "
                . "inner join tipo_documento as c on a.CodTpDocRad=c.id_tipo where numeroRadicado='" . $id . "'");

        $rs = $db->GetAll($sql);
        if (!$rs) {
            $strerr = $db->ErrorMsg();
            if (!empty($strerr)) {
                echo "Error MySql En consultaRadicado: " . $db->ErrorMsg();
            }
        } else {
            return $rs;
        }
    }

    function consultaRadicadoTraza($db, $id) {
        $sql = $db->Prepare("select u.nombre,t.fechaIngresa,t.MensajeEnvia from usuario as u "
                . " inner join trazabilidad as t on u.codusuario=t.UsuEnvia "
                . " where CodRadTraza='" . $id . "'");

        $rs = $db->GetAll($sql);
        if (!$rs) {
            $strerr = $db->ErrorMsg();
            if (!empty($strerr)) {
                echo "Error MySql En consultaRadicadoTraza: " . $db->ErrorMsg();
            }
        } else {
            return $rs;
        }
    }

    function ConsultaRadicados($db) {
        $sql = $db->Prepare("select replace(concat(date(a.fechaRadicado),a.numeroRadicado),'-','') as Radicado,"
                . " date(a.fechaRadicado) as fecha,a.NumDocumento,a.fechaDocumento,"
                . " b.nomRemite as remite,c.nombre as destino,d.nombre as tpDocumento,a.observaciones, "
                . " case when CodGradRad=1 then 'Alta' when CodGradRad=2 then 'Media' "
                . " when CodGradRad=3 then 'Baja' end as grado, "
                . " case when a.CodEstadoRad=1 then 'En Tramite' when a.CodEstadoRad=2 then 'Finalizado' end as strEstado "
                . " from radicado as a inner join remitente as b on a.CodRemiteRad=b.CodRemite "
                . " inner join usuario as c on a.CodDestinoRad=c.codusuario inner join tipo_documento "
                . " as d on a.CodTpDocRad=d.id_tipo order by numeroRadicado desc");
        $rs = $db->GetAll($sql);
        if (!$rs) {
            $strerr = $db->ErrorMsg();
            if (!empty($strerr)) {
                echo "Error MySql En ListaRadicados: " . $db->ErrorMsg();
            }
        } else {
            return $rs;
        }
    }
}

?>
