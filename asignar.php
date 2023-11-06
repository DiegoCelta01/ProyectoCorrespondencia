<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" charset="UTF-8">
    <title>Sistema de Gestión Odontológica</title>
    <link rel="stylesheet" href="js/jquery/dialog/jquery-ui.css"/>  
    <script type="text/javascript" src="js/jquery/dialog/jquery.js"></script>   
    <script type="text/javascript" src="js/jquery/dialog/jquery-ui.min.js"></script> 
    <script type="text/javascript" src="js/jquery/dialog/jquery-ui.js"></script> 
    <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
    <script src="js/funciones.js"></script> 



  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
    <div id="contenedor">
        <div id="encabezado"><h1>Sistema de Gestión Odontológica</h1></div>        
        <div id="contenido">
            <h2>Asignar Cita</h2>
            <form action="index.php?accion=guardarCita" method="post" id="frmasignar">
                <table>
                   <tr>
                        <td>Fecha</td>
                        <td><input type="text" id="asgfecha" name="asgfecha" readonly="Yes""></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" id="asignarEnviar" value="Enviar" id="asignarEnviar">
                        </td>
                    </tr>
                </table>                                                                                                    
            </form>
        </div>
    </div>

    <div id="frmPaciente" name="frmPaciente" title="Agregar Nuevo Paciente">
        <form id="frmAgregaPaciente">
            <table>                                    
                <tr>
                    <td>Documento</td>
                    <td><input type="text" id="pacDocumento" name="pacDocumento"></td>    
                </tr>

                <tr>
                    <td>Nombres</td>
                    <td><input type="text" id="pacNombres" name="pacNombres"></td>    
                </tr>

                <tr>
                    <td>Apellidos</td>
                    <td><input type="text" id="pacApellidos" name="pacApellidos"></td>    
                </tr>

                <tr>
                    <td>Fecha de Nacimiento</td>
                    <td>
                        <input type="text" id="pacNacimiento" name="pacNacimiento" readonly="Yes">
                    </td>    
                </tr>

                <tr>
                    <td>Sexo</td>
                    <td>
                        <select id="pacSexo" name="pacSexo">
                            <option value="-1" selected="selected">-- Seleccione Sexo --</option>
                            <option>F</option>
                            <option>M</option>
                        </select>
                    </td>    
                </tr>                 
            </table>
        </form>
    </div>
</body>
</html>
