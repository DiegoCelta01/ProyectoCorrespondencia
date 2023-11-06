<!DOCTYPE html>
<html class='no-js' lang='en'>
    <head>
        <meta charset='utf-8'>
        <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
        <title>{$_titulo}</title>         
        <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icono/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="assets/images/icono/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icono/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">       
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css">
        <link href="assets/stylesheets/application-a07755f5.css" rel="stylesheet" type="text/css" />
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />       
        <link href="js/jquery/dialog/jquery-ui.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="js/jquery/dialog/jquery.js"></script>   
        <script type="text/javascript" src="js/jquery/dialog/jquery-ui.min.js"></script> 
        <script type="text/javascript" src="js/jquery/dialog/jquery-ui.js"></script>
        <script src="js/funciones.js"></script>               
    </head> 
    <script>
        function registraVisita() {
            var ced = document.getElementById("cedula").value;
            var nom = document.getElementById("nombres").value;
            var apel = document.getElementById("apellidos").value;
            var temp = document.getElementById("temp_ini").value;

            if (ced == '') {
                alert("Los campos no pueden quedar vacios, Cédula.");
                $('#cedula').focus();
                return false;
            }
            if (nom == '') {
                alert("Los campos no pueden quedar vacios, Nombres.");
                $('#nombres').focus();
                return false;
            }
            if (apel == '') {
                alert("Los campos no pueden quedar vacios, Apellidos.");
                $('#apellidos').focus();
                return false;
            }

            if (temp == '') {
                alert("Los campos no pueden quedar vacios, Temperatura.");
                $('#temp_ini').focus();
                return false;
            }

            document.formDatos.accion.value = "Guardar";
            document.formDatos.submit();
        }


        function validaVisita(idCed) {
            var parametros = {
                "cedula": idCed
            };

            if (!!idCed.trim()) {
                $.ajax({
                    data: parametros,
                    url: 'php/CargaDatos.php',
                    type: 'post',
                    datatype: 'JSON',
                    cache: false
                })
                        .done(function (response) {
                            if (response.bandera == 1) {
                                $('#nombres').val(response.datos.nombres);
                                $('#apellidos').val(response.datos.apellidos);
                                $('#celular').val(response.datos.celular);
                                $('#correo').val(response.datos.correo);
                                $('#edad').val(response.datos.edad);
                                $('#cmbBarrio').val(response.datos.barrio);
                                CargaLoc(response.datos.barrio);
                                $('#edad').val(response.datos.edad);
                                $('#tipo').val(response.datos.tipo);
                                $('#temp_ini').focus();
                            } else {
                                $('#nombres').focus();
                            }
                            if (response.salida == 1) {
                                do {
                                    var tempSalida = prompt("Escriba la temperatura de salida", "0.0");
                                } while (tempSalida == null);
                                $('#temp_fin').val(tempSalida);
                                $('#temp_ini').val(tempSalida);
                                document.formDatos.accion.value = "Salida";
                                document.formDatos.submit();
                            }
                        })
            }
        }





    </script>
    <div class='navbar navbar-default' id='navbar'>
        <div class="container-fluid">           
            <p class="navbar-text" style="font-weight: bold;font-size: 18px;color: #245269;">
                {$smarty.session.titulo}</p>
            <ul class='nav navbar-nav pull-right'>      
                <li>
                    <a href='#'>
                        <i class='icon-cog'></i>
                        {$smarty.session.dia_actual}
                    </a>
                </li>
                <li class='dropdown user'>
                    <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                        <i class='icon-user'></i>
                        <strong>{$smarty.session.sesion_nom_usuario}</strong>          
                        <b class='caret'></b>
                    </a>
                    <ul class='dropdown-menu' id="dropdown" name="dropdown">
                        <li>
                            <a href='formClave.php'>Editar Clave</a>
                        </li>
                        <li class='divider'></li>
                        <li>
                            <a href="php/logout.php">Cerrar Sesion</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
