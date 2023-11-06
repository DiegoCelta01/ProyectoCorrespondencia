<?php
require_once('conexion.php');

function validaProceso() {
    global $_SESSION;
    if (empty($_SESSION['sesion_id_usuario'])) {
        mensajeDenegado();
    }
}

function mensajeDenegado() {
    $url = "index.php";
    ?>
    <html>
        <head>
            <script language="JavaScript">
                function refrescar() {
                    var p = window.parent;
                    p.location.href = "<?= $url ?>";
            }
        </script>
    </head>
    <body onload="setTimeout('refrescar()', 2000);" >
    <center>
        <table class="grilla">
            <tr>
                <td align="center">
                    <span style="font-size:20px">ACCESO DENEGADO</span><br><br>
                    <label class="campo">Usted no esta autorizado para acceder al Sistema</label>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>
<?php
}
?>