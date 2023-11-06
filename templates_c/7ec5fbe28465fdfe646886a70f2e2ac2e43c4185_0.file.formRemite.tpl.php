<?php
/* Smarty version 3.1.34-dev-7, created on 2023-10-27 16:01:01
  from 'C:\AppServ\www\DocuSene\templates\formRemite.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_653c250da5fe85_32712699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ec5fbe28465fdfe646886a70f2e2ac2e43c4185' => 
    array (
      0 => 'C:\\AppServ\\www\\DocuSene\\templates\\formRemite.tpl',
      1 => 1592253888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_653c250da5fe85_32712699 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1048170617653c250d8a9fa8_96531865', 'body');
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
class Block_1048170617653c250d8a9fa8_96531865 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1048170617653c250d8a9fa8_96531865',
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
                    <li class='title'>Creación de Remitentes</li>         
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
                                <form style="font-weight: bold;" name="formRemite" id="formRemite" method="post">
                                    <input type="hidden" name="accion" id="accion">
                                    <input type="hidden" name="CodRemite" id="CodRemite">
                                    <fieldset>

                                        <div class='form-group row'>
                                            <div class='col-md-12'>
                                                <label class='control-label'>Identificación</label>
                                                <input class='form-control' required="yes" autofocus="yes" name="cedulaNit" id="cedulaNit" placeholder='Número Identificación' type='text'>
                                            </div>                                           
                                        </div>  

                                        <div class='form-group row'>
                                            <div class='col-md-12'>
                                                <label class='control-label'>Nombre</label>
                                                <input class='form-control' required="yes" placeholder='Nombre' name="nomRemite" id="nomRemite" type='text'>
                                            </div>
                                        </div>

                                        <div class='form-group row'>
                                            <div class='col-md-12'>
                                                <label class='control-label'>Dirección</label>
                                                <input class='form-control' required="yes" placeholder='Direccion' name="dirRemite" id="dirRemite" type='text'>
                                            </div>
                                        </div>

                                        <div class='form-group row'>
                                            <div class='col-md-12'>
                                                <label class='control-label'>Correo</label>
                                                <input class='form-control' required="yes" placeholder='Correo Electrónico' id="mailRemite" name="mailRemite" type='text'>
                                            </div>                                                                            
                                        </div>
                                        <div class='form-group row'>
                                            <div class='col-md-6'>
                                                <label class='control-label'>Teléfono</label>
                                                <input class='form-control' required="yes" placeholder='Teléfono' name="telRemite" id="telRemite" type='text'>
                                            </div>
                                            <div class='col-md-6'>
                                                <label class="control-label">Tipo</label>                             
                                                <select id="tipoRemite" name="tipoRemite" class="form-control">
                                                    <option value="-1" selected="selected">- Seleccione -</option>
                                                    <option value="1">Empresa</option>
                                                    <option value="2">Persona Natural</option>
                                                </select>  
                                            </div>                                               
                                        </div>                                                                           
                                    </fieldset>
                                    <div class='form-actions'>                                
                                        <button class='btn btn-primary' type="button" id="btGuarda" onclick="creaRemite();">Guardar Remitente</button>                                       
                                    </div>                   
                                </form>
                            </div>

                            <div class='col-lg-8'>
                                <table data-toggle="table" data-show-toggle="true"
                                       data-id-field="nit"
                                       data-search="true" data-pagination="true" data-page-size="4">                                           
                                    <thead>
                                        <tr>                    
                                            <th>Accion</th>
                                            <th data-sortable="true" data-field="cedulaNit">Identificación</th>
                                            <th data-sortable="true" date-field="nomRemite">Nombre</th>
                                            <th data-sortable="true" data-field="dirRemite">Dirección</th>
                                            <th data-sortable="true" data-field="telRemite">Teléfono</th>                                
                                            <th data-sortable="true" data-field="mailRemite">Correo</th>
                                            <th data-sortable="true" data-field="tipoRemite">Tipo</th>                                                
                                        </tr>
                                    </thead>
                                    <tbody>                
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datRemite']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
                                            <tr>                                                  
                                                <td>
                                                    <a class="btn btn-danger" href="javascript:cargaRemite('<?php echo $_smarty_tpl->tpl_vars['r']->value['CodRemite'];?>
')" title="Modificar">                                                        
                                                        <span class="icon icon-edit"></span>
                                                    </a>
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['r']->value['cedulaNit'];?>
</td> 
                                                <td><?php echo $_smarty_tpl->tpl_vars['r']->value['nomRemite'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['r']->value['dirRemite'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['r']->value['telRemite'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['r']->value['mailRemite'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['r']->value['tipoRemite'];?>
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
