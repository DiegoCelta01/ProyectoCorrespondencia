<?php
if (!(ISSET($_SESSION))) {
    session_start();
}
session_destroy();
unset($_SESSION['sesion_id_usuario']);
header('location:../index.php');
?>	