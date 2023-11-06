<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-01 15:40:42
  from 'C:\AppServ\www\plantilla\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed567cadbbe27_48625891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b7bdbcee637a1110d5a59cdc4caed00359a6cd9' => 
    array (
      0 => 'C:\\AppServ\\www\\plantilla\\templates\\header.tpl',
      1 => 1591044038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed567cadbbe27_48625891 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html class='no-js' lang='en'>
<head>
  <meta charset='utf-8'>
  <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
  <title><?php echo $_smarty_tpl->tpl_vars['_titulo']->value;?>
</title>
  <meta content='lab2023' name='author'>
  <meta content='' name='description'>
  <meta content='' name='keywords'>
  <link href="assets/stylesheets/application-a07755f5.css" rel="stylesheet" type="text/css" />
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/images/favicon.ico" rel="icon" type="image/ico" />
  <?php echo '<script'; ?>
 src="js/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>  
</head> 
<?php echo '<script'; ?>
>
  function CargaBarrio(idLoc){
    var parametros = {
      "idLoc" : idLoc               
    };

    $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'php/formListas.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                  $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                  $("#resultado").html(response);
                }
              });

  }
  function CargaLoc(idBar){
    var parametros = {
      "idBar" : idBar               
    };

    $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'php/formListas.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                  $("#resLoc").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                  $("#resLoc").html(response);
                }
              });

  }
  function registraVisita() {    
    document.formDatos.accion.value = "Guardar";
    document.formDatos.submit();
  }


  function validaVisita(idCed){
    var parametros = {
      "cedula":idCed
    };

    if(!!idCed.trim()){
      $.ajax({
        data:  parametros, 
        url:   'php/CargaDatos.php', 
        type:  'post', 
        datatype: 'JSON',
        cache: false
      })
      .done(function(response){
        if(response.bandera==1){  
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
        }
        if(response.salida==1){
          do {
            var tempSalida = prompt("Escriba la temperatura de salida", "");                          
          } while   (tempSalida == null);
          $('#temp_fin').val(tempSalida);
          registraVisita();           
        }  
      })
      .fail(function(){
        alert("Error...");
      })  
    }
  }




<?php echo '</script'; ?>
><?php }
}
