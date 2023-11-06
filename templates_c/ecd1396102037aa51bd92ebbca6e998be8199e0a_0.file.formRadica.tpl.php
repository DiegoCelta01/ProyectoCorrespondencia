<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-14 16:20:23
  from 'C:\AppServ\www\Correspondencia\templates\formRadica.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee6949703dfb8_31532272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecd1396102037aa51bd92ebbca6e998be8199e0a' => 
    array (
      0 => 'C:\\AppServ\\www\\Correspondencia\\templates\\formRadica.tpl',
      1 => 1592169583,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_5ee6949703dfb8_31532272 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19843581395ee69496d94c40_43960790', 'body');
?>
 
<?php echo '<script'; ?>
 src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
/* {block 'body'} */
class Block_19843581395ee69496d94c40_43960790 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_19843581395ee69496d94c40_43960790',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <body class='main page'>
        <div id='wrapper'>
            <?php $_smarty_tpl->_subTemplateRender('file:menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <section id='tools'>
                <ul class='breadcrumb' id='breadcrumb'>
                    <li class='title'>Radicación de Documentos</li>         
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
                        <div class="col-sm-12">
                            <div class="col-sm-4">
                                <form action="formRadica.php"  method="post" name="IForm" enctype="multipart/form-data">
                                    <fieldset>
                                        <input type="hidden" name="accion" value="">                                        

                                        <div class="form-group row">                                                      
                                            <div class="col-sm-10">  
                                                <label for="Txtcmb_expe" class="control-label">Remitente:</label>
                                                <div id="resRemite" name="resRemite">
                                                    <select name="CodRemiteRad" id="CodRemiteRad" class="form-control" required="yes" autofocus="yes">
                                                        <option value="">--- Seleccione Nombre ---</option>                             
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cmbRemite']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>                                                       
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['CodRemite'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['nomRemite'];?>
</option>
                                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>          
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <label for="TxtTipodoc" class="text-left control-label">&nbsp;</label>
                                                <button type="button" data-toggle="tooltip" data-placement="top" title="Crear nuevo remitente." class="btn btn-primary form-control icon icon-large icon-envelope"
                                                        onClick="mostrarFormRemite();"></button>
                                                <div id="mensaje" name="mensaje" oncuechange="refrescaRemite();"></div>
                                            </div>
                                        </div>



                                        <div class="form-group row">                                            
                                            <div class="col-sm-12">
                                                <label for="TxtSerie" class="control-label">Tipo Documento:</label>
                                                <select name="CodTpDocRad" id="CodTpDocRad" class="form-control" required="yes">
                                                    <option value="">--- Seleccione Tipo Documento ---</option>                             
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cmbtpdoc']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['numTipo']->value == $_smarty_tpl->tpl_vars['r']->value['id_tipo']) {?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_tipo'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</option>
                                                        <?php } else { ?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_tipo'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</option>
                                                        <?php }?>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>          
                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group row">                                                                                        
                                            <div class="col-sm-6">
                                                <label class="control-label  text-left">No. Documento:</label>
                                                <input id="NumDocumento" name="NumDocumento"  class="form-control" type="text">
                                            </div>                                                                                  
                                            <div class="col-sm-6">
                                                <label class="text-left control-label">Fecha Documento:</label>
                                                <input name="fechaDocumento" id="fechaDocumento" value="<?php echo $_smarty_tpl->tpl_vars['fecActual']->value;?>
"  class="form-control" type="date">
                                            </div>
                                        </div>


                                        <div class="form-group row">                                            
                                            <div class="col-sm-6">
                                                <label class="col-sm-4 control-label">Valor:</label>
                                                <input name="Valor" id="Valor" class="form-control" type="number">
                                            </div>

                                            <div class="col-sm-6">
                                                <label class="control-label">Prioridad:</label>
                                                <select id="CodGradRad" name="CodGradRad" class="form-control">
                                                    <option value="2">Media</option>
                                                    <option value="1">Alta</option>                                                    
                                                    <option value="3">Baja</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">                                           
                                            <div class="col-sm-12">
                                                <label class="control-label">Observaciones:</label>
                                                <textarea class="form-control" rows="3" id="Observaciones" name="Observaciones" required></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">	                                            					
                                            <div class="col-sm-8">
                                                <label for="TxtNumdoc" class="control-label">Adjuntar Archivo:</label>	
                                                <input type="file" class="btn btn-warning" name="uploadedFile"/>    
                                                <p class="help-block">Archivos electrónicos: word, pdf, excel,power point.</p>
                                            </div>
                                        </div>

                                        <div class="form-group row">                                           
                                            <div class="col-sm-12">
                                                <label for="TxtSerie" class="control-label">Destinatario:</label>
                                                <select name="cmb_dep" id="cmb_dep" onChange='cargaFuncionario();'class="form-control">
                                                    <option value="">--- Seleccione Dependencia ---</option>                             
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cmbdep']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['IdDep']->value == $_smarty_tpl->tpl_vars['r']->value['CodDependencia']) {?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['CodDependencia'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['r']->value['NomDependencia'];?>
</option>
                                                        <?php } else { ?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['CodDependencia'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['NomDependencia'];?>
</option>
                                                        <?php }?>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>          
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">                                            
                                            <div class="col-sm-12">
                                                <label for="TxtSerie" class="control-label">Funcionario</label>
                                                <div id="resFuncionario" name="resFuncionario">
                                                    <select disabled="disabled" name="CodDestinoRad" id="CodDestinoRad" class="form-control">
                                                        <option value="">- Seleccione Funcionario -</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <center>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button type="button" class="btn btn-primary" onClick="registraRadicado();">Crear Radicado</button>	
                                                </div>
                                            </div>
                                        </center>                                       
                                    </fieldset>
                                </form>
                            </div>    
                                                
                            <div class='col-lg-8'>
                                <table data-toggle="table" data-show-toggle="true"
                                       data-id-field="numeroRadicado"
                                       data-search="true" data-pagination="true" data-page-size="4">                                           
                                    <thead>
                                        <tr>                    
                                            <th data-sortable="true" data-field="numeroRadicado">Radicado</th>
                                            <th data-sortable="true" date-field="remite">Remite</th>
                                            <th data-sortable="true" data-field="destino">Destino</th>
                                            <th data-sortable="true" data-field="tpDocumento">Tp. Documento</th>                                
                                            <th data-sortable="true" data-field="observaciones">Observaciones</th>
                                            <th data-sortable="true" data-field="grado">Grado</th>                                                
                                        </tr>
                                    </thead>
                                    <tbody>                
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datRadicados']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
                                            <tr>                                                                                                  
                                                <td><?php echo $_smarty_tpl->tpl_vars['r']->value['Radicado'];?>
</td> 
                                                <td><?php echo $_smarty_tpl->tpl_vars['r']->value['remite'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['r']->value['destino'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['r']->value['tpDocumento'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['r']->value['observaciones'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['r']->value['grado'];?>
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
        </div>

        <!-- Formulario Agrega Remitente -->
        <div id="agregaRemite" name="agregaRemite" title="Agregar Nuevo Remitente">
            <form id="frmAgrRemite" name="frmAgrRemite">

                <div class="form-group row"> 
                    <div class="col-sm-4">
                        <label class="control-label">Documento</label>
                        <input type="text" id="cedulaNit" name="cedulaNit" class="form-control" required="yes"> 
                    </div>

                    <div class="col-sm-8">
                        <label class="control-label">Nombre</label>
                        <input type="text" id="nomRemite" name="nomRemite" class="form-control" required="yes">   
                    </div>
                </div>

                <div class="form-group row"> 
                    <div class="col-sm-8">
                        <label class="control-label">Dirección</label>
                        <input type="text" id="dirRemite" name="dirRemite" class="form-control" required="yes">    
                    </div>

                    <div class="col-sm-4">
                        <label class="control-label">Telefono(s)</label>
                        <input type="text" id="telRemite" name="telRemite" class="form-control" required="yes"> 
                    </div>
                </div>
                <div class="form-group row"> 
                    <div class="col-sm-8">
                        <label class="control-label">Correo</label>
                        <input type="text" id="mailRemite" name="mailRemite" class="form-control" required="yes">    
                    </div>

                    <div class="col-sm-4">
                        <label class="control-label">Tipo</label>                             
                        <select id="tipoRemite" name="tipoRemite" class="form-control">
                            <option value="-1" selected="selected">- Seleccione -</option>
                            <option value="1">Empresa</option>
                            <option value="2">Persona Natural</option>
                        </select>                                
                    </div>
                </div>

        </div>
    </form>
</div>
<?php
}
}
/* {/block 'body'} */
}
