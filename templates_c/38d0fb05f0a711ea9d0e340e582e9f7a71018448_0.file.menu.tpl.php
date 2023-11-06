<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-08 16:37:02
  from 'C:\AppServ\www\sintomas\templates\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edeaf7e8c2d79_77406614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38d0fb05f0a711ea9d0e340e582e9f7a71018448' => 
    array (
      0 => 'C:\\AppServ\\www\\sintomas\\templates\\menu.tpl',
      1 => 1591652129,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edeaf7e8c2d79_77406614 (Smarty_Internal_Template $_smarty_tpl) {
?><section id='sidebar'>
    <i class='icon-align-justify icon-large' id='toggle'></i>
    <ul id='dock'>         
        <li class='launcher <?php echo $_smarty_tpl->tpl_vars['acDatos']->value;?>
'>
            <i class='icon-file-text-alt'></i>
            <a href="formDatos.php">Síntomas</a>
        </li>
        <li class='launcher <?php echo $_smarty_tpl->tpl_vars['acConsulta']->value;?>
'>
            <i class='icon-table'></i>
            <a href="formListas.php">Consulta</a>
        </li>   
        <li class='launcher <?php echo $_smarty_tpl->tpl_vars['acClave']->value;?>
'>
            <i class='icon-user'></i>
            <a href="formClave.php">Modificar Clave</a>
        </li>   

        <?php if ($_SESSION['sesion_perfil'] == 1) {?>
            <li class='launcher <?php echo $_smarty_tpl->tpl_vars['acEmpresa']->value;?>
'>
                <i class='icon-building'></i>
                <a href="formEmpresas.php">Empresas</a>
            </li>   
        <?php }?>

        <?php if ($_SESSION['sesion_perfil'] == 1) {?>
            <li class='launcher <?php echo $_smarty_tpl->tpl_vars['acUsuario']->value;?>
'>
                <i class='icon-align-justify'></i>
                <a href="formUsuarios.php">Usuarios</a>
            </li>   
        <?php }?>

        <li class='launcher'>
            <i class='icon-eject'></i>
            <a href="php/logout.php">Cerrar Sesión</a>
        </li>                
    </ul>
    <div data-toggle='tooltip' id='beaker' title='Made by Diego Velásquez'></div>
</section><?php }
}
