<?php
/* Smarty version 3.1.34-dev-7, created on 2023-10-27 12:16:25
  from 'C:\AppServ\www\DocuSene\templates\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_653bf069075019_83084915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87f17c71cd63fafdf018595b9aef7a8bfd580c67' => 
    array (
      0 => 'C:\\AppServ\\www\\DocuSene\\templates\\menu.tpl',
      1 => 1593377414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_653bf069075019_83084915 (Smarty_Internal_Template $_smarty_tpl) {
?><section id='sidebar'>
    <i class='icon-align-justify icon-large' id='toggle'></i>
    <ul id='dock'>         
        <?php if ($_SESSION['sesion_perfil'] != 2) {?>
            <li class='launcher <?php echo $_smarty_tpl->tpl_vars['acRadicado']->value;?>
'>
                <i class='icon-envelope'></i>
                <a href="formRadica.php">Radicar</a>
            </li>
        <?php }?>

        <?php if ($_SESSION['sesion_perfil'] == 2) {?>
            <li class='launcher <?php echo $_smarty_tpl->tpl_vars['acRadicado']->value;?>
'>
                <i class='icon-envelope'></i>
                <a href="formPendiente.php">Documentos Pendientes</a>
            </li>
        <?php }?>
        <?php if ($_SESSION['sesion_perfil'] == 2) {?>          
            <span>&nbsp;</span>
        <?php }?>
        
        <li class='launcher <?php echo $_smarty_tpl->tpl_vars['acConsulta']->value;?>
'>
            <i class='icon-table'></i>
            <a href="formListas.php">Consulta</a>
        </li>          


        <?php if ($_SESSION['sesion_perfil'] == 1) {?>
            <li class='launcher <?php echo $_smarty_tpl->tpl_vars['acRemite']->value;?>
'>
                <i class='icon-building'></i>
                <a href="formRemite.php">Remitentes</a>
            </li>   
        <?php }?>

        <?php if ($_SESSION['sesion_perfil'] == 1) {?>
            <li class='launcher <?php echo $_smarty_tpl->tpl_vars['acDocumento']->value;?>
'>
                <i class='icon-file-text-alt'></i>
                <a href="formDocumento.php">Tipos de Documento</a>
            </li>   
        <?php }?>
        <?php if ($_SESSION['sesion_perfil'] == 1) {?>          
            <span>&nbsp;</span>
        <?php }?>

        <?php if ($_SESSION['sesion_perfil'] == 1) {?>
            <li class='launcher <?php echo $_smarty_tpl->tpl_vars['acDependencia']->value;?>
'>
                <i class='icon-edit'></i>
                <a href="formDependencia.php">Dependencias</a>
            </li>   
        <?php }?>

        <?php if ($_SESSION['sesion_perfil'] == 1) {?>
            <li class='launcher <?php echo $_smarty_tpl->tpl_vars['acUsuario']->value;?>
'>
                <i class='icon-align-justify'></i>
                <a href="formUsuarios.php">Usuarios</a>
            </li>   
        <?php }?>

        <li class='launcher <?php echo $_smarty_tpl->tpl_vars['acClave']->value;?>
'>
            <i class='icon-user'></i>
            <a href="formClave.php">Modificar Clave</a>
        </li>   

        <li class='launcher'>
            <i class='icon-eject'></i>
            <a href="php/logout.php">Cerrar Sesión</a>
        </li>                
    </ul>
    <div data-toggle='tooltip' id='beaker' title='Made by Diego Velásquez'></div>
</section><?php }
}
