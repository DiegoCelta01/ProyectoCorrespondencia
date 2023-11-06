<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-11 14:15:17
  from 'C:\AppServ\www\sintomas\templates\formEmpresas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee282c58c4f33_66200824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4325d6286083b8ddb43b7e2b285c94182901b733' => 
    array (
      0 => 'C:\\AppServ\\www\\sintomas\\templates\\formEmpresas.tpl',
      1 => 1591902912,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_5ee282c58c4f33_66200824 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8799225225ee282c57636c0_35354127', 'body');
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
class Block_8799225225ee282c57636c0_35354127 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_8799225225ee282c57636c0_35354127',
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
                    <li class='title'>Empresas</li>         
                </ul>
                <div id='toolbar'>

                </div>
            </section>
            <!-- Content -->
            <div id='content'>
                <div class='panel panel-default'>
                    <div class='panel-heading'>
                        <i class='icon-edit icon-large'></i>
                        Creación de Empresas
                    </div>
                    <div class='panel-body'>

                        <div class='col-lg-12'>                            

                            <div class='col-lg-4'>
                                <form style="font-weight: bold;" name="formEmpresa" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="accion" id="accion" value="">
                                    <input type="hidden" name="empId" id="empId" value="">
                                    <fieldset>

                                        <div class='form-group row'>
                                            <div class='col-md-6'>
                                                <label class='control-label'>Nit</label>
                                                <input class='form-control' required="yes" autofocus="yes" name="empNit" id="empNit" placeholder='Número NIT' type='text'>
                                            </div>
                                            <div class='col-md-6'>
                                                <label class='control-label'>Teléfono</label>
                                                <input class='form-control' required="yes" placeholder='Teléfono Empresa' name="empTelefono" id="empTelefono" type='text'>
                                            </div> 
                                        </div>  

                                        <div class='form-group row'>
                                            <div class='col-md-12'>
                                                <label class='control-label'>Nombre</label>
                                                <input class='form-control' required="yes" placeholder='Nombre Empresa' name="empNombre" id="empNombre" type='text'>
                                            </div>
                                        </div>

                                        <div class='form-group row'>
                                            <div class='col-md-12'>
                                                <label class='control-label'>Dirección</label>
                                                <input class='form-control' required="yes" placeholder='Direccion Empresa' name="empDireccion" id="empDireccion" type='text'>
                                            </div>
                                        </div>

                                        <div class='form-group row'>
                                            <div class='col-md-12'>
                                                <label class='control-label'>Correo</label>
                                                <input class='form-control' required="yes" placeholder='Correo Electrónico' id="empCorreo" name="empCorreo" id="empCorreo" type='text'>
                                            </div>                                                                            
                                        </div>
                                        <div class='form-group row'>
                                            <div class='col-md-12'>
                                                <label class='control-label'>Contacto</label>
                                                <input class='form-control' required="yes" placeholder='Contacto Empresa' id="empContacto" name="empContacto" id="empContacto" type='text'>
                                            </div>  
                                        </div> 

                                        <div class="form-group row">
                                            <div class="container-fluid">
                                                <a class="" href="#">
                                                    <img class="img-rounded" id="imgLogo" name="imgLogo">
                                                </a>
                                            </div>    
                                        </div>  


                                        <div class="form-group row">
                                            <div class='col-md-12'>
                                                <label for="ejemplo_archivo_1">Seleccionar Logo</label>
                                                <input class="btn btn-warning" type="file" name="uploadedFile" id="uploadedFile"  accept=".png">
                                                <p class="help-block">Formato .PNG fondo transparente, 
                                                    <br>ancho 180px, alto 60px.</p>
                                            </div>
                                        </div>

                                    </fieldset>

                                    <div class='form-actions'>                                
                                        <button class='btn btn-primary' type="button" id="btGuarda" onclick="registraEmpresa();">Guardar Información</button>                                       
                                    </div>                   
                                </form>
                            </div>

                            <div class='col-lg-8'>
                                <table data-toggle="table" data-show-toggle="true"
                                       data-id-field="nit"
                                       data-search="true" data-pagination="true" data-page-size="3">                                           
                                    <thead>
                                        <tr>                    
                                            <th>Accion</th>
                                            <th data-sortable="true" data-field="nit">Nit</th>
                                            <th data-sortable="true" date-field="nombre">Nombre</th>
                                            <th data-sortable="true" data-field="direccion">Dirección</th>
                                            <th data-sortable="true" data-field="telefono">Teléfono</th>                                
                                            <th data-sortable="true" data-field="correo">Correo</th>
                                            <th data-sortable="true" data-field="contacto">Contacto</th>                                                
                                        </tr>
                                    </thead>
                                    <tbody>                
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datEmpresa']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
                                            <tr>                                                  
                                                <td>
                                                    <a class="btn btn-danger" href="javascript:cargaEmpresa('<?php echo $_smarty_tpl->tpl_vars['r']->value['id_conse'];?>
')" title="Modificar">                                                        
                                                        <span class="icon icon-edit"></span>
                                                    </a>
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['r']->value['nit'];?>
</td> 
                                                <td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['r']->value['direccion'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['r']->value['telefono'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['r']->value['correo'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['r']->value['contacto'];?>
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
