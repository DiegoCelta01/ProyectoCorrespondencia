<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-11 14:10:36
  from 'C:\AppServ\www\sintomas\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee281accbbd39_17770563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b1f163a17cfe9469ab5ed69727e328b1a384ef7' => 
    array (
      0 => 'C:\\AppServ\\www\\sintomas\\templates\\header.tpl',
      1 => 1591902403,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee281accbbd39_17770563 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html class='no-js' lang='en'>
    <head>
        <meta charset='utf-8'>
        <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
        <title><?php echo $_smarty_tpl->tpl_vars['_titulo']->value;?>
</title>        
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css">
        <link href="assets/stylesheets/application-a07755f5.css" rel="stylesheet" type="text/css" />
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/images/favicon.ico" rel="icon" type="image/ico" />
        <link href="js/jquery/dialog/jquery-ui.css" rel="stylesheet" type="text/css" />
        <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery/dialog/jquery.js"><?php echo '</script'; ?>
>   
        <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery/dialog/jquery-ui.min.js"><?php echo '</script'; ?>
> 
        <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery/dialog/jquery-ui.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/funciones.js"><?php echo '</script'; ?>
> 
    </head> 
    <?php echo '<script'; ?>
>
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





    <?php echo '</script'; ?>
>
    <div class='navbar navbar-default' id='navbar'>
        <div class="container-fluid">
            <a class="" href="#">
                <img alt="<?php echo $_smarty_tpl->tpl_vars['_titulo']->value;?>
" class="pull-left img-rounded" height="57" src="<?php echo $_SESSION['imgLogo'];?>
">
            </a>
            <p class="navbar-text" style="font-weight: bold;font-size: 18px;color: #245269;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo $_smarty_tpl->tpl_vars['_titulo']->value;?>
</p>
            <ul class='nav navbar-nav pull-right'>      
                <li>
                    <a href='#'>
                        <i class='icon-cog'></i>
                        <?php echo $_smarty_tpl->tpl_vars['_fecha']->value;?>

                    </a>
                </li>
                <li class='dropdown user'>
                    <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                        <i class='icon-user'></i>
                        <strong><?php echo $_smarty_tpl->tpl_vars['_nomUsuario']->value;?>
</strong>          
                        <b class='caret'></b>
                    </a>
                    <ul class='dropdown-menu'>
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
<?php }
}
