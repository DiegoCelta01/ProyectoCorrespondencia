$(document).ready(function () {
    if ($("#fecIni").length > 0) {
        $("#fecIni").datepicker({dateFormat: "yy-mm-dd", changeMonth: true, changeYear: true}).datepicker("setDate", new Date());
        ;
        $("#fecFin").datepicker({dateFormat: "yy-mm-dd", changeMonth: true, changeYear: true}).datepicker("setDate", new Date());
        ;
    }
    $("#agregaRemite").dialog({
        autoOpen: false,
        height: 360,
        width: 600,
        modal: true,
        buttons: {"Insertar": insertarRemite, "Cancelar": cancelar}
    })
    
     $("#asignaRadicado").dialog({
        autoOpen: false,
        height: 420,
        width: 400,
        modal: true,
        buttons: {"Asignar Radicado": asignarRadicado, "Cancelar": cancelar}
    })
    
     $("#cierraRadicado").dialog({
        autoOpen: false,
        height: 260,
        width: 400,
        modal: true,
        buttons: {"Cerrar Radicado": cerrarRadicado, "Cancelar": cancelar}
    })
    
})

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

function cancelar() {
    $(this).dialog("close");
}

function cargaFuncionario() {
    var idDep = $("#cmb_dep").val();
    var parametros = {
        "idDep": idDep
    };

    $.ajax({
        data: parametros, //datos que se envian a traves de ajax
        url: 'php/CargaDatos.php', //archivo que recibe la peticion
        type: 'post', //método de envio
        beforeSend: function () {
            $("#resFuncionario").html("Procesando, espere por favor...");
        },
        success: function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
            $("#resFuncionario").html(response);
        }
    });
}

function exporta(fecIni, fecFin) {
    var parametros = {
        "fecIni": fecIni,
        "fecFin": fecFin
    };

    $.ajax({
        data: parametros,
        url: 'php/exporta.php',
        type: 'post',
        beforeSend: function () {
            $("#resExp").html("Procesando, espere por favor...");
        },
        success: function (response) {
            $("#resExp").html("Archivo Exportado.");
        }
    });


}
function validaClave() {
    if (document.QForm.clave1.value == "") {
        alert("Por favor debe ingresar su clave de usuario");
        document.QForm.clave1.focus();
        return;
    }
    if (document.QForm.clave2.value == "") {
        alert("Debe confirmar su clave");
        document.QForm.clave2.focus();
        return;
    }
    if (document.QForm.clave1.value != document.QForm.clave2.value) {
        alert("Su confirmación de claves es diferente");
        document.QForm.clave2.focus();
        return;
    }
    document.QForm.accion.value = "Enviar";
    document.QForm.submit();
}

function registraRadicado() {
    var remite = $("#CodRemiteRad").val();
    var destino = $("#CodDestinoRad").val();
    var tpdoc = $("#CodTpDocRad").val();
    var nodoc = $("#NumDocumento").val();
    var obser = $("#Observaciones").val();

    if (remite == '') {
        alert("Los campos no pueden quedar vacios, Remitente.");
        $('#CodRemiteRad').focus();
        return false;
    }
    if (destino == '') {
        alert("Los campos no pueden quedar vacios, Destinatario.");
        $('#CodDestinoRad').focus();
        return false;
    }
    if (tpdoc == '') {
        alert("Los campos no pueden quedar vacios, Tipo Documento.");
        $('#CodTpDocRad').focus();
        return false;
    }
    if (nodoc == '') {
        alert("Los campos no pueden quedar vacios, Numero Documento.");
        $('#NumDocumento').focus();
        return false;
    }
    if (obser == '') {
        alert("Los campos no pueden quedar vacios, Obsefvaciones.");
        $('#Observaciones').focus();
        return false;
    }

    document.IForm.accion.value = "Guardar";
    document.IForm.submit();
}

function cargaRemite(codRemite) {
    var parametros = {
        "codRemite": codRemite
    };

    if (!!codRemite.trim()) {
        $.ajax({
            data: parametros,
            url: 'php/CargaJson.php',
            type: 'post',
            datatype: 'JSON',
            cache: false
        })
                .done(function (response) {
                    if (response.bandera == 1) {
                        $('#CodRemite').val(response.datos.codRemite);
                        $('#cedulaNit').val(response.datos.cedulaNit);
                        $('#nomRemite').val(response.datos.nomRemite);
                        $('#dirRemite').val(response.datos.dirRemite);
                        $('#telRemite').val(response.datos.telRemite);
                        $('#mailRemite').val(response.datos.mailRemite);
                        $('#tipoRemite').val(response.datos.tipoRemite);
                        $('#nomRemite').focus();
                    }
                })
    }

}

function registraUsuario() {
    var nom = $("#nombre").val();
    var usu = $("#usuario").val();
    var clv = $("#clave").val();
    var dep = $("#dependencia").val();
    var per = $("#perfil").val();

    if (nom == '') {
        alert("Los campos no pueden quedar vacios, Nombre.");
        $('#nombre').focus();
        return false;
    }
    if (usu == '') {
        alert("Los campos no pueden quedar vacios, Usuario.");
        $('#usuario').focus();
        return false;
    }

    if (clv == '') {
        alert("Los campos no pueden quedar vacios, Clave.");
        $('#clave').focus();
        return false;
    }
    if (dep == '') {
        alert("Los campos no pueden quedar vacios, Dependencia.");
        $('#dependencia').focus();
        return false;
    }
    if (per == '') {
        alert("Los campos no pueden quedar vacios, Perfil.");
        $('#perfil').focus();
        return false;
    }

    document.formUsuario.accion.value = "Guardar";
    document.formUsuario.submit();
}

function cargaUsuario(conse) {
    var parametros = {
        "idUsu": conse
    };
    if (!!conse.trim()) {
        $.ajax({
            data: parametros,
            url: 'php/CargaJson.php',
            type: 'post',
            datatype: 'JSON',
            cache: false
        })
                .done(function (response) {
                    if (response.bandera == 1) {
                        $('#codusuario').val(response.datos.codusuario);
                        $('#nombre').val(response.datos.nombre);
                        $('#correo').val(response.datos.correo);
                        $('#dependencia').val(response.datos.dependencia);
                        $('#perfil').val(response.datos.perfil);
                        $('#usuario').val(response.datos.usuario);
                        $('#clave').val(response.datos.clave);
                        $('#nombre').focus();
                    }
                })
    }
}


function mostrarFormRemite() {
    $("#agregaRemite").dialog("open");
}


function insertarRemite() {
    if ($("#cedulaNit").val() == '') {
        alert("Todos los datos son obligatorios.");
        $("#cedulaNit").focus();
        return;
    }

    if ($("#nomRemite").val() == '') {
        alert("Todos los datos son obligatorios.");
        $("#nomRemite").focus();
        return;
    }
    if ($("#dirRemite").val() == '') {
        alert("Todos los datos son obligatorios.");
        $("#dirRemite").focus();
        return;
    }
    if ($("#telRemite").val() == '') {
        alert("Todos los datos son obligatorios.");
        $("#telRemite").focus();
        return;
    }
    if ($("#mailRemite").val() == '') {
        alert("Todos los datos son obligatorios.");
        $("#mailRemite").focus();
        return;
    }

    $(this).dialog("close");
    var queryString = $('#frmAgrRemite').serialize();
    url = "php/GuardaDatos.php?accion=ingresarRemite&" + queryString;
    $("#mensaje").load(url);
    refrescaRemite();
}

function refrescaRemite() {
    var parametros = {
        "cmbNombre": "remite"
    };
    $.ajax({
        data: parametros, //datos que se envian a traves de ajax
        url: 'php/CargaDatos.php', //archivo que recibe la peticion
        type: 'post', //método de envio
        beforeSend: function () {
            $("#resRemite").html("Procesando, espere por favor...");
        },
        success: function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
            $("#resRemite").html(response);
        }
    });
}

function creaRemite() {

    if ($("#cedulaNit").val() == '') {
        alert("Todos los datos son obligatorios. Identificación.");
        $("#cedulaNit").focus();
        return;
    }

    if ($("#nomRemite").val() == '') {
        alert("Todos los datos son obligatorios. Nombre.");
        $("#nomRemite").focus();
        return;
    }
    if ($("#dirRemite").val() == '') {
        alert("Todos los datos son obligatorios. Dirección.");
        $("#dirRemite").focus();
        return;
    }
    if ($("#telRemite").val() == '') {
        alert("Todos los datos son obligatorios. Teléfono.");
        $("#telRemite").focus();
        return;
    }
    if ($("#mailRemite").val() == '') {
        alert("Todos los datos son obligatorios. Correo.");
        $("#mailRemite").focus();
        return;
    }

    document.formRemite.accion.value = "Guardar";
    document.formRemite.submit();
}

function creaDocumento(){
    if ($("#nombre").val() == '') {
        alert("Escriba un nombre.");
        $("#nombre").focus();
        return;
    }

    document.formDoucumento.accion.value = "Guardar";
    document.formDoucumento.submit();
}

function cargaDocumento(id_tipo){
    var parametros = {
        "idDoc": id_tipo
    };
    if (!!id_tipo.trim()) {
        $.ajax({
            data: parametros,
            url: 'php/CargaJson.php',
            type: 'post',
            datatype: 'JSON',
            cache: false
        })
                .done(function (response) {
                    if (response.bandera == 1) {
                        $('#id_tipo').val(response.datos.id_tipo);
                        $('#nombre').val(response.datos.nombre);
                        $('#nombre').focus();
                    }
                })
    }
}

function creaDependencia(){
    if ($("#nombre").val() == '') {
        alert("Escriba un nombre.");
        $("#nombre").focus();
        return;
    }

    document.formDependencia.accion.value = "Guardar";
    document.formDependencia.submit();
}

function cargaDependencia(idDep){
    var parametros = {
        "idDep": idDep
    };
    if (!!idDep.trim()) {
        $.ajax({
            data: parametros,
            url: 'php/CargaJson.php',
            type: 'post',
            datatype: 'JSON',
            cache: false
        })
                .done(function (response) {
                    if (response.bandera == 1) {
                        $('#idDep').val(response.datos.idDep);
                        $('#nombre').val(response.datos.nombre);
                        $('#nombre').focus();
                    }
                })
    }
}

function mostrarAsignaRadicado() {
    $("#asignaRadicado").dialog("open");
}

function mostrarCierraRadicado() {
    $("#cierraRadicado").dialog("open");
}
function asignarRadicado() {
    if ($("#cmb_dep").val() == '') {
        alert("Debe seleccionar una Dependencia.");
        $("#cmb_dep").focus();
        return;
    }

    if ($("#CodDestinoRad").val() == '') {
        alert("Debe seleccionar un usuario.");
        $("#CodDestinoRad").focus();
        return;
    }
    if ($("#mensaje").val() == '') {
        alert("Debe escribir un mensaje.");
        $("#mensaje").focus();
        return;
    }
   
    $(this).dialog("close");
    var queryString = $('#formAsigna').serialize();
    url = "php/GuardaDatos.php?accion=asignaRadicado&" + queryString;
    $("#mensaje").load(url);  
    $(location).attr('href',"./formPendiente.php");
}

function cerrarRadicado() {   
    if ($("#mensajeCierra").val() == '') {
        alert("Debe escribir un mensaje.");
        $("#mensajeCierra").focus();
        return;
    }
   
    $(this).dialog("close");
    var queryString = $('#formCierra').serialize();
    url = "php/GuardaDatos.php?accion=cierraRadicado&" + queryString;
    $("#mensaje").load(url);   
     $(location).attr('href',"./formPendiente.php");
}

function cargaFuncionarioAsg() {
    var asgDep = $("#cmb_dep").val();
    var parametros = {
        "asgDep": asgDep
    };

    $.ajax({
        data: parametros, //datos que se envian a traves de ajax
        url: 'php/CargaDatos.php', //archivo que recibe la peticion
        type: 'post', //método de envio
        beforeSend: function () {
            $("#resFuncionario").html("Procesando, espere por favor...");
        },
        success: function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
            $("#resFuncionario").html(response);
        }
    });
}