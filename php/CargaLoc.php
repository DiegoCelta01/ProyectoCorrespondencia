<?php
require_once("../db/db_FuncionesBasicas.inc.php");
require_once("../conexion.php");
if (!(ISSET($_SESSION))) {
	session_start();
}


if(isset($_POST["idLoc"])){
	$idLoc=$_POST["idLoc"];
	
	$consulta=consulta($db,"select *from barrio where localidad='".$idLoc."'");	
	// Comienzo a imprimir el select
	echo "<select name='codRemiteRad' id='codRemiteRad' class='form-control'>";
	echo "<option value=''>--- Seleccione Barrio ---</option>";
	while (!$consulta->EOF)
	{		
		$consulta->fields[1]=htmlentities($consulta->fields[1]);
		// Imprimo las opciones del select
		echo "<option value='".$consulta->fields[0]."'>".$consulta->fields[1]."</option>";
		$consulta->MoveNext();
	}			
	echo "</select>"; 	
}

if(isset($_POST["idBar"])){
	$idBar=$_POST["idBar"];
	$rs=consulta($db,"select localidad from barrio where codigo='".$idBar."'");
	$idLoc=$rs->fields[0];
	$consulta=consulta($db,"select *from localidad order by nombre");	
	echo "<select name='cmbLocalidad' id='cmbLocalidad' onChange='CargaBarrio($('#cmbLocalidad').val());return false;' class='form-control'>";
	echo "<option value=''>--- Seleccione Localidad ---</option>";
	while (!$consulta->EOF)
	{		
		$consulta->fields[1]=htmlentities($consulta->fields[1]);
		if(trim($idLoc)==trim($consulta->fields[0])){
			echo "<option value='".$consulta->fields[0]."' selected='selected'>".$consulta->fields[1]."</option>";	
		}else{
			echo "<option value='".$consulta->fields[0]."'>".$consulta->fields[1]."</option>";
		}		
		$consulta->MoveNext();
	}			
	echo "</select>"; 
}

?>