<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-03 11:33:58
  from 'C:\AppServ\www\Correspondencia\templates\formGestion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eff5df66bab73_25436400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '339e6eb516ccf9c37f3a83c96b64b690a5c4f3b7' => 
    array (
      0 => 'C:\\AppServ\\www\\Correspondencia\\templates\\formGestion.tpl',
      1 => 1593794018,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_5eff5df66bab73_25436400 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14139470785eff5df60f30a1_97373965', 'body');
?>

</body>
</html><?php }
/* {block 'body'} */
class Block_14139470785eff5df60f30a1_97373965 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_14139470785eff5df60f30a1_97373965',
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
                    <li class='title'>Gestion de Documentos</li>         
                </ul>
                <div id='toolbar'>
                </div>
            </section>

            <div id='content'>

                <div class="container">	
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#info">Informacion Detallada</a></li>
                        <li><a data-toggle="tab" href="#" onclick="mostrarAsignaRadicado();" >Reasignar Radicado</a></li>
                        <li><a data-toggle="tab" href="#" onclick="mostrarCierraRadicado();">Finalizar Gestión</a></li>                    
                    </ul>

                    <!-- Pestaña Informacion Detallada. -->
                    <div class="tab-content">
                        <div id="info" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-sm-1 col-md-1  c-form-box">                                           
                                    <h4><span class="label label-primary">
                                            <a class="LinkBtn" href="<?php echo $_smarty_tpl->tpl_vars['datos']->value->imagen;?>
" target="_blank">Ver Archivo</a>
                                    </h4></span>                                  
                                </div>

                                <div class="col-sm-10 col-md-10 c-form-box">                                                                         
                                    <center>
                                        <h4><span class="label label-primary"> Radicado: <?php echo $_smarty_tpl->tpl_vars['datos']->value->Radicado;?>
 
                                            </span>                    
                                        </h4>    
                                    </center>                         
                                </div>

                                <div class="col-sm-1 col-md-1  c-form-box">                                               
                                    <h4><span class="label label-primary">
                                            <a class="LinkBtn" href="<?php echo $_smarty_tpl->tpl_vars['datos']->value->imagen;?>
" target="_blank">Ver Archivo</a>
                                    </h4></span>                               
                                </div>
                            </div>
                                                        <div class="form-horizontal">
                                <div class="col-sm-6">
                                    <div class="form-group">          
                                        <label for="TxtDependencia" class="col-sm-4 control-label">Remitente:</label>
                                        <div class="col-sm-8">  
                                            <input name="TxtDependencia" id="TxtDependencia" readonly="Yes" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value->nomRemite;?>
" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="TxtSerie" class="col-sm-4 control-label">Tipo Documento:</label>
                                        <div class="col-sm-8">
                                            <input name="TxtSerie" id="TxtSerie" readonly="Yes" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value->tpdoc;?>
" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="TxtSubserie" class="col-sm-4 control-label  text-left">Número Documento:</label>
                                        <div class="col-sm-8">
                                            <input name="TxtSubserie" id="TxtSubserie" readonly="Yes" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value->NumDocumento;?>
" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="TxtTipodoc" class="col-sm-4 text-left control-label">Fecha Documento:</label>
                                        <div class="col-sm-8">
                                            <input name="TxtTipodoc" id="TxtTipodoc" readonly="Yes" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value->fechaDocumento;?>
" class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>




                                <div class="col-sm-6">        
                                    <div class="form-group">
                                        <label for="TxtExpediente" class="col-sm-4 control-label">Valor:</label>
                                        <div class="col-sm-8">
                                            <input name="TxtExpediente" id="TxtExpediente" readonly="Yes" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value->valor;?>
" class="form-control" onkeyup="sync()" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="TxtNumdoc" class="col-sm-4 control-label">Grado:</label>
                                        <div class="col-sm-8">
                                            <input name="TxtNumdoc" id="TxtNumdoc" readonly="Yes" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value->grado;?>
" class="form-control" onkeyup="sync()" type="text">
                                        </div>
                                    </div>  
                                    <div class="form-group">
                                        <label for="TxtNumdoc" class="col-sm-4 control-label">Obsercaviones:</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" rows="3"  name="TxtAsunto" readonly="yes"><?php echo $_smarty_tpl->tpl_vars['datos']->value->Observaciones;?>
</textarea>
                                        </div>    
                                    </div>

                                </div>
                                <div class="col-sm-12 col-md-12 c-form-box">                                                                         
                                    <center>
                                        <h4><span class="label label-primary"> Trazabilidad del Radicado
                                            </span>                    
                                        </h4>    
                                    </center>                         
                                </div>
                                <div class="container divscroll">             
                                    <table class="table table-striped" id="tabTraza">
                                        <thead>
                                            <tr>
                                                <th>Funcionario</th>
                                                <th>Fecha</th>
                                                <th>Mensaje</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['traza']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>        
                                                <tr>                          
                                                    <td nowrap><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</td>      
                                                    <td nowrap><?php echo $_smarty_tpl->tpl_vars['r']->value['fechaIngresa'];?>
</td>                   
                                                    <td><?php echo $_smarty_tpl->tpl_vars['r']->value['MensajeEnvia'];?>
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
                            </p>
                        </div>
                    </div>
                </div>
            </div>  


            <!-- Pestaña Asignar Documento. -->  
            <div id="asignaRadicado" name="asignaRadicado" title="Reasignar Radicado">
                <form name="formAsigna" id="formAsigna">
                    <input type="hidden" id="noRad" name="noRad" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value->idRad;?>
">
                    <div class="form-group row">                                           
                        <div class="col-sm-12">
                            <label for="TxtSerie" class="control-label">Destinatario:</label>
                            <select name="cmb_dep" id="cmb_dep" onChange='cargaFuncionarioAsg();'class="form-control">
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
                    <div class="text-justify">
                        <label for="mensaje">Mensaje:</label>
                        <textarea class="form-control" rows="5" id="mensaje" name="mensaje" required></textarea>
                    </div>
                </form>
            </div>

            <!-- Pestaña Cerrar Documento. -->  
            <div id="cierraRadicado" name="cierraRadicado" title="Finalizar Gestión">
                <form name="formCierra" id="formCierra">     
                    <input type="hidden" id="noRad" name="noRad" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value->idRad;?>
">
                    <div class="text-justify">
                        <label for="mensajeCierra">Observaciones:</label>
                        <textarea class="form-control" rows="5" id="mensajeCierra" name="mensajeCierra" required></textarea>
                    </div>
                </form>
            </div>


        <?php
}
}
/* {/block 'body'} */
}
