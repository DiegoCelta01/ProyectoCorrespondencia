<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-11 14:33:57
  from 'C:\AppServ\www\sintomas\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee287253469d6_47456545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bac51b550cf79b2a366eb7fb9fea440650b8364' => 
    array (
      0 => 'C:\\AppServ\\www\\sintomas\\templates\\index.tpl',
      1 => 1591904031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ee287253469d6_47456545 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html class='no-js' lang='en'>
    <head>
        <meta charset='utf-8'>
        <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
        <title>Ingreso de Usuarios</title>
        <meta content='lab2023' name='author'>
        <meta content='' name='description'>
        <meta content='' name='keywords'>
        <link href="assets/stylesheets/application-a07755f5.css" rel="stylesheet" type="text/css" />  
        <link href="assets/images/favicon.ico" rel="icon" type="image/ico" />    
    </head>


    <div class="col-md-12 navbar navbar-fixed-top">
        <span class="col-md-12">&nbsp;</span>
        <div class="container-fluid col-md-2">                
            <a class="" href="#">
                <img alt="<?php echo $_smarty_tpl->tpl_vars['_titulo']->value;?>
" class="pull-left img-rounded" height="87" src="assets/images/logo.png">
            </a>
        </div>
        <div class="col-md-10">
            <p class="navbar-text navbar-center" style="font-weight: bold;font-size: 22px;color: #3428B8;">                
                <?php echo $_smarty_tpl->tpl_vars['_titulo']->value;?>

            </p>                
        </div>
    </div>
            
    <body class='login'>
        <div class='wrapper'>
            <div class='row'>
                <div class='col-lg-12'>
                    <div class='brand text-center'>
                        <h2 class="text-primary">
                            <div class='logo-icon'>
                                <i class='icon-building'></i>
                            </div>
                            <?php echo $_smarty_tpl->tpl_vars['_titulo2']->value;?>

                        </h2>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='col-lg-12'>
                    <form action="index.php" method="post">            
                        <fieldset class='text-center'>
                            <legend>Ingreso de Usuarios</legend>
                            <div class='form-group'>
                                <input class='form-control' autofocus="yes" placeholder='Nombre de Usuario' id="bp_usuario" name="bp_usuario" type='text'>
                            </div>
                            <div class='form-group'>
                                <input class='form-control' placeholder='Contraseña' id="bp_clave" name="bp_clave" type='password'>
                            </div>    
                            <div class='text-center'>               
                                <button class='btn btn-primary' type='submit' value="Ingresar" name="accion">Aceptar</button>
                                <br>                
                            </div>          
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>  
        <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </body>
</html>
<?php }
}
