<?php

class clsUsuarios {

    private $codigo;
    private $usuario;
    private $nombre;
    private $perfil;
    private $clave;
    private $correo;
    private $dependencia;
    private $nomPerfil;
    private $nomDependencia;

    public function usrLogin($db, $arreglo) {
        $sql = $db->Prepare("select *from usuario as a left join dependencia as b "
                . " on a.dependencia=b.CodDependencia left join perfil as c "
                . " on a.perfil=c.codigoPerfil WHERE "
                . " usuario = ? AND clave =AES_ENCRYPT(?,'SENA16') AND estado = 1");
        $rs = $db->GetAll($sql, $arreglo);

        if (!$rs) {
            echo "Error MySql En usrLogin: " . $db->ErrorMsg();
        } else {
            $this->codigo = $rs[0]["codusuario"];
            $this->usuario = $rs[0]["usuario"];
            $this->nombre = $rs[0]["nombre"];
            $this->perfil = $rs[0]["perfil"];
            $this->nomPerfil = $rs[0]["nomPeril"];
            $this->dependencia = $rs[0]["dependencia"];
            $this->nomDependencia = $rs[0]["NomDependencia"];
            $this->correo = $rs[0]["correo"];
        }
//        return ($rs);
    }

    public function listaUsuarios($db) {
        $sql = $db->Prepare("SELECT * FROM usuario order by nombre");
        $rs = $db->GetAll($sql, $arreglo);
        return ($rs);
    }

    function usrBuscarUsuario($db, $arreglo) {
        $sql = $db->Prepare("SELECT * FROM usuario WHERE id_conse = ? AND estado = 1 ");
        $rs = $db->GetAll($sql, $arreglo);
        return ($rs);
    }

    public function insertarUsuario($db, $usu, $nom, $dep, $per, $cla, $cor) {
        $rs = $db->Execute("insert into usuario values(0,'$usu','$nom','" . $cor . "','" . $per . "',"
                . "AES_ENCRYPT('" . $cla . "','SENA16'),'$dep',1)");
        if (!$rs) {
            $strerr = $db->ErrorMsg();
            if (!empty($strerr)) {
                echo "Error MySql En InsertaUsuario: " . $db->ErrorMsg();
            }
        }
        return ($rs);
    }

    public function usrModificarClave($db, $strclv, $idusu) {
        $rs = $db->Execute("update usuario set clave=AES_ENCRYPT('" . $strclv . "','SENA16') where codusuario=$idusu");
        if (!$rs) {
            $strerr = $db->ErrorMsg();
            if (!empty($strerr)) {
                echo "Error MySql En InsertaDatos: " . $db->ErrorMsg();
            }
        }
        return $rs;
    }

    public function ActualizaUsuario($db, $id, $usu, $nom, $dep, $per, $cla, $cor) {
        $rs = $db->Execute("update usuario set nombre='$nom',usuario='$usu',"
                . " correo='$cor',dependencia='$dep',pefil='$per' "
                . " clave=AES_ENCRYPT('" . $cla . "','SENA16') where id_conse='$id'");
        if (!$rs) {
            $strerr = $db->ErrorMsg();
            if (!empty($strerr)) {
                echo "Error MySql En ActualizaUsuario: " . $db->ErrorMsg();
            }
        }
        return $rs;
    }

    public function getNomPerfil() {
        return $this->nomPerfil;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getPerfil() {
        return $this->perfil;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function getDependencia() {
        return $this->dependencia;
    }

    public function getnomDependencia() {
        return $this->nomDependencia;
    }

}

?>
