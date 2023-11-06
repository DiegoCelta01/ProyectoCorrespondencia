<?php
require_once("../db/db_FuncionesBasicas.inc.php");
require_once("../conexion.php");
if (!(ISSET($_SESSION))) {
	session_start();
}


if(isset($_GET["fecIni"])){
	$fecIni=$_GET['fecIni'];
	$fecFin=$_GET['fecFin'];
	$query=listaExporta($db,$fecIni,$fecFin);
	
	if($query){
		$delimiter = ";";
		$filename = "Listado_" . date('Y-m-d') . ".csv";

    //create a file pointer
		$f = fopen('php://memory', 'w');

    //set column headers
		$fields = array('Tipo', 'Identificacion', 'Nombres', 'Apellidos', 'Fecha', 'Edad','Temp, Ini','Temp, Fin','Barrio','Localidad','Dificultad','Fiebre','Tos','Cansancio','Secreciones','Dolor','Perdida','Malestar','Nauseas','viajado_pais','viajado_zonas','contacto','Manos','Medidas','KitBioseguridad');
		fputcsv($f, $fields, $delimiter);

    //output each row of the data, format line as csv and write to file pointer
		while($row = $query->fetchRow()){			
			$lineData = array($row['tipo'], $row['Identificacion'], $row['Nombres'], $row['Apellidos'], $row['fecha'], $row['edad'],$row['temp_ini'],$row['temp_fin'],$row['Barrio'],$row['Localidad'],$row['Dificultad'],$row['Fiebre'],$row['Tos'],$row['Cansancio'],$row['Secreciones'],$row['DolorCabezaG'],$row['PerdidaSaborOlor'],$row['Malestar'],$row['Nauseas'],$row['viajado_pais'],$row['viajado_zonas'],$row['contacto'],$row['Manos'],$row['Medidas'],$row['KitBioseguridad']);
			fputcsv($f, $lineData, $delimiter);
		}

    //move back to beginning of file
		fseek($f, 0);

    //set headers to download file rather than displayed
		header('Content-Type: text/csv');
		header('Content-Disposition: attachment; filename="' . $filename . '";');
		fpassthru($f);
	}
	exit();
}

?>