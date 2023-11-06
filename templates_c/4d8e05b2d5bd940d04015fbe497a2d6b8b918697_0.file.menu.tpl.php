<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-28 15:50:52
  from 'C:\AppServ\www\Correspondencia\templates\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef902ac72c6b0_32782205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d8e05b2d5bd940d04015fbe497a2d6b8b918697' => 
    array (
      0 => 'C:\\AppServ\\www\\Correspondencia\\templates\\menu.tpl',
      1 => 1593377414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef902ac72c6b0_32782205 (Smarty_Internal_Template $_smarty_tpl) {
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
