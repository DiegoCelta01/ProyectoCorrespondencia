<?php
/* Smarty version 3.1.34-dev-7, created on 2023-10-27 16:01:14
  from 'C:\AppServ\www\DocuSene\templates\formUsuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_653c251a948275_83654141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73e031d64d322f623db1af743a29035795b65a6f' => 
    array (
      0 => 'C:\\AppServ\\www\\DocuSene\\templates\\formUsuarios.tpl',
      1 => 1593207788,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_653c251a948275_83654141 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1529355842653c251a8db882_38873039', 'body');
?>

        <!-- Footer -->
        <!-- Javascripts -->
        <?php echo '<script'; ?>
 src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"><?php echo '</script'; ?>
>
        <!-- Google Analytics -->

</body>
</html>
<?php }
/* {block 'body'} */
class Block_1529355842653c251a8db882_38873039 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1529355842653c251a8db882_38873039',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <body class='main page'>
        <!-- Navbar -->

        <div id='wrapper'>
            <!-- Sidebar -->
            <?php $_smarty_tpl->_subTemplateRender('file:menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <!-- Tools -->
            <section id='tools'>
                <ul class='breadcrumb' id='breadcrumb'>
                    <li class='title'>Usuarios</li>         
                </ul>
                <div id='toolbar'>

                </div>
            </section>
            <!-- Content -->
            <div id='content'>
                <div class='panel panel-default'>
                    <div class='panel-heading'>
                        <i class='icon-edit icon-large'></i>
                        <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

                    </div>
                    <div class='panel-body'>

                        <div class='col-lg-12'>                            

                            <div class='col-lg-4'>
                                <form style="font-weight: bold;" name="formUsuario" id="formUsuario" method="post">
                                    <input type="hidden" name="accion">
                                    <input type="hidden" name="codusuario" id="usuId">
                                    <fieldset>

                                        <div class='form-group row'>
                                            <div class='col-md-12'>
                                                <label class='control-label'>Nombre</label>
                                                <input class='form-control' required="yes" autofocus="yes" name="nombre" id="nombre" placeholder='Nombre' type='text'>
                                            </div>                                           
                                        </div>  
                                        
                                          <div class='form-group row'>
                                            <div class='col-md-12'>
                                                <label class='control-label'>Correo</label>
                                                <input class='form-control' required="yes" name="correo" id="correo" placeholder='Correo electrónico' type='text'>
                                            </div>                                           
                                        </div>  

                                        <div class='form-group row'>
                                            <div class='col-md-12'>
                                                <label class='control-label'>Dependencia</label>
                                                <select name="dependencia" id="dependencia" class="form-control">
                                                    <option value="">--- Seleccione Dependencia ---</option>                             
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cmbDependencia']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['CodDependencia'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['NomDependencia'];?>
</option>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>          
                                                </select>
                                            </div>
                                        </div>

                                        <div class='form-group row'>
                                            <div class="col-sm-12">
                                                <label class="control-label">Perfil</label>
                                                <select id="perfil" name="perfil" class="form-control">
                                                     <option value="">--- Seleccione Perfil ---</option>  
                                                    <option value="1">Ventanilla</option>
                                                    <option value="2">Funcionario</option>                                                    
                                                    <option value="3">Administrador</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class='form-group row'>
                                            <div class='col-md-6'>
                                                <label class='control-label'>Usuario</label>
                                                <input class='form-control' required="yes" name="usuario" id="usuario" placeholder='Usuario' type='text'>
                                            </div> 

                                            <div class='col-md-6'>
                                                <label class='control-label'>Clave</label>
                                                <input class='form-control' required="yes" placeholder='Clave' name="clave" id="clave" type='text'>
                                            </div>
                                        </div>                                                                           
                                    </fieldset>

                                    <div class='form-actions'>                                
                                        <button class='btn btn-primary' type="button" id="btGuarda" onclick="registraUsuario();">Guardar Usuario</button>                                       
                                    </div>                   
                                </form>
                            </div>

                            <div class='col-lg-8'>
                                <table data-toggle="table" data-show-toggle="true"
                                       data-id-field="nit"
                                       data-search="true" data-pagination="true" data-page-size="3">                                           
                                    <thead>
                                        <tr>                    
                                            <th>Acción</th>
                                            <th data-sortable="true" data-field="nombre">Nombre</th>
                                            <th data-sortable="true" date-field="usuario">Usuario</th>
                                            <th data-sortable="true" data-field="correo">Correo</th>
                                            <th data-sortable="true" data-field="clave">Clave</th>  
                                        </tr>
                                    </thead>
                                    <tbody>                
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datUsuario']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
                                            <tr>                                                  
                                                <td>
                                                    <a class="btn btn-danger" href="javascript:cargaUsuario('<?php echo $_smarty_tpl->tpl_vars['r']->value['codusuario'];?>
')" title="Modificar">                                                        
                                                        <span class="icon icon-edit"></span>
                                                    </a>
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</td> 
                                                <td><?php echo $_smarty_tpl->tpl_vars['r']->value['usuario'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['r']->value['correo'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['r']->value['clave'];?>
</td>
                                                </td>                                                
                                            </tr>                        
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                    
                                    </tbody>
                                </table>   
                            </div>


                        </div>

                    </div>

                </div>
            </div>
        <?php
}
}
/* {/block 'body'} */
}
