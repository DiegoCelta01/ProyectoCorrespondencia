<?php

require_once("../clases/clsConsultas.php");
require_once("../conexion.php");
if (!(ISSET($_SESSION))) {
    session_start();
}
$consultas = new clsConsultas();

if (isset($_POST["cmbNombre"])) {
    if ($_POST["cmbNombre"] == 'remite') {
        $rt = $consultas->ListaRemite($db);
        echo '<select name="CodRemiteRad" id="CodRemiteRad" class="form-control" required="yes" autofocus="yes">';
        echo "<option value=''>--- Seleccione Nombre ---</option>";
        while (!$rt->EOF) {        
            echo "<option value='" . $rt->fields[0] . "'>" . $rt->fields[2] . "</option>";
            $rt->MoveNext();
        }
        echo "</select>";
    }
}

if (isset($_POST["idDep"])) { 
        $idDep=$_POST["idDep"];
        $rt = $consultas->ListaFuncionario($db,$idDep);
        echo '<select name="CodDestinoRad" id="CodDestinoRad" class="form-control" required="yes">';
        echo "<option value=''>- Seleccione Funcionario -</option>";
        while (!$rt->EOF) {               
            echo "<option value='" . $rt->fields[0] . "'>" . $rt->fields[2] . "</option>";
            $rt->MoveNext();
        }
        echo "</select>";
}

if (isset($_POST["asgDep"])) { 
        $idDep=$_POST["asgDep"];
        $rt = $consultas->ListaFuncionarioAsg($db,$idDep);
        echo '<select name="CodDestinoRad" id="CodDestinoRad" class="form-control" required="yes">';
        echo "<option value=''>- Seleccione Funcionario -</option>";
        while (!$rt->EOF) {               
            echo "<option value='" . $rt->fields[0] . "'>" . $rt->fields[2] . "</option>";
            $rt->MoveNext();
        }
        echo "</select>";
}
?>