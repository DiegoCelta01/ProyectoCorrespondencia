<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-08 18:14:40
  from 'C:\AppServ\www\sintomas\templates\formUsuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edec6608b77a6_54259748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '107174e13b9109c2def20a8c9b497e36de96ec6b' => 
    array (
      0 => 'C:\\AppServ\\www\\sintomas\\templates\\formUsuarios.tpl',
      1 => 1591658075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_5edec6608b77a6_54259748 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3656852715edec6607d9076_73442128', 'body');
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
class Block_3656852715edec6607d9076_73442128 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_3656852715edec6607d9076_73442128',
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
                        Creación de Usuarios
                    </div>
                    <div class='panel-body'>

                        <div class='col-lg-12'>                            

                            <div class='col-lg-4'>
                                <form style="font-weight: bold;" name="formUsuario" method="post">
                                    <input type="hidden" name="accion">
                                    <input type="hidden" name="usuId" id="usuId">
                                    <fieldset>

                                        <div class='form-group row'>
                                            <div class='col-md-12'>
                                                <label class='control-label'>Nombre</label>
                                                <input class='form-control' required="yes" autofocus="yes" name="usuNombre" id="usuNombre" placeholder='Nombre' type='text'>
                                            </div>                                           
                                        </div>  

                                        <div class='form-group row'>
                                            <div class='col-md-12'>
                                                <label class='control-label'>Empresa</label>
                                                <select name="cmbEmpresa" id="cmbEmpresa" class="form-control">
                                                    <option value="">--- Seleccione Empresa ---</option>                             
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cmbEmpresa']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_conse'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</option>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>          
                                                </select>
                                            </div>
                                        </div>

                                        <div class='form-group row'>
                                            <div class='col-md-6'>
                                                <label class='control-label'>Usuario</label>
                                                <input class='form-control' required="yes" autofocus="yes" name="usuUsuario" id="usuUsuario" placeholder='Usuario' type='text'>
                                            </div> 

                                            <div class='col-md-6'>
                                                <label class='control-label'>Clave</label>
                                                <input class='form-control' required="yes" placeholder='Clave' name="usuClave" id="usuClave" type='text'>
                                            </div>
                                        </div>                                                                           
                                    </fieldset>

                                    <div class='form-actions'>                                
                                        <button class='btn btn-primary' type="button" id="btGuarda" onclick="registraUsuario();">Guardar Información</button>                                       
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
                                            <th data-sortable="true" data-field="empresa">Empresa</th>
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
                                                    <a class="btn btn-danger" href="javascript:cargaUsuario('<?php echo $_smarty_tpl->tpl_vars['r']->value['id_conse'];?>
')" title="Modificar">                                                        
                                                        <span class="icon icon-edit"></span>
                                                    </a>
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</td> 
                                                <td><?php echo $_smarty_tpl->tpl_vars['r']->value['usuario'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['r']->value['empresa'];?>
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
