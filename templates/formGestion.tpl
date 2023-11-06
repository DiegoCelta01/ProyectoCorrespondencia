{include file='header.tpl'}
{block name=body}
    <body class='main page'>
        <!-- Navbar -->
        <div id='wrapper'>
            <!-- Sidebar -->
            {include file='menu.tpl'}
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
                                            <a class="LinkBtn" href="{$datos->imagen}" target="_blank">Ver Archivo</a>
                                    </h4></span>                                  
                                </div>

                                <div class="col-sm-10 col-md-10 c-form-box">                                                                         
                                    <center>
                                        <h4><span class="label label-primary"> Radicado: {$datos->Radicado} 
                                            </span>                    
                                        </h4>    
                                    </center>                         
                                </div>

                                <div class="col-sm-1 col-md-1  c-form-box">                                               
                                    <h4><span class="label label-primary">
                                            <a class="LinkBtn" href="{$datos->imagen}" target="_blank">Ver Archivo</a>
                                    </h4></span>                               
                                </div>
                            </div>
                            {* ------------------------------------------------------------------------------------------------------ *}
                            <div class="form-horizontal">
                                <div class="col-sm-6">
                                    <div class="form-group">          
                                        <label for="TxtDependencia" class="col-sm-4 control-label">Remitente:</label>
                                        <div class="col-sm-8">  
                                            <input name="TxtDependencia" id="TxtDependencia" readonly="Yes" value="{$datos->nomRemite}" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="TxtSerie" class="col-sm-4 control-label">Tipo Documento:</label>
                                        <div class="col-sm-8">
                                            <input name="TxtSerie" id="TxtSerie" readonly="Yes" value="{$datos->tpdoc}" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="TxtSubserie" class="col-sm-4 control-label  text-left">Número Documento:</label>
                                        <div class="col-sm-8">
                                            <input name="TxtSubserie" id="TxtSubserie" readonly="Yes" value="{$datos->NumDocumento}" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="TxtTipodoc" class="col-sm-4 text-left control-label">Fecha Documento:</label>
                                        <div class="col-sm-8">
                                            <input name="TxtTipodoc" id="TxtTipodoc" readonly="Yes" value="{$datos->fechaDocumento}" class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>




                                <div class="col-sm-6">        
                                    <div class="form-group">
                                        <label for="TxtExpediente" class="col-sm-4 control-label">Valor:</label>
                                        <div class="col-sm-8">
                                            <input name="TxtExpediente" id="TxtExpediente" readonly="Yes" value="{$datos->valor}" class="form-control" onkeyup="sync()" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="TxtNumdoc" class="col-sm-4 control-label">Grado:</label>
                                        <div class="col-sm-8">
                                            <input name="TxtNumdoc" id="TxtNumdoc" readonly="Yes" value="{$datos->grado}" class="form-control" onkeyup="sync()" type="text">
                                        </div>
                                    </div>  
                                    <div class="form-group">
                                        <label for="TxtNumdoc" class="col-sm-4 control-label">Obsercaviones:</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" rows="3"  name="TxtAsunto" readonly="yes">{$datos->Observaciones}</textarea>
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
                                            {foreach item=r from=$traza}        
                                                <tr>                          
                                                    <td nowrap>{$r.nombre}</td>      
                                                    <td nowrap>{$r.fechaIngresa}</td>                   
                                                    <td>{$r.MensajeEnvia}</td>  
                                                </tr>                                                      
                                            {/foreach}
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
                    <input type="hidden" id="noRad" name="noRad" value="{$datos->idRad}">
                    <div class="form-group row">                                           
                        <div class="col-sm-12">
                            <label for="TxtSerie" class="control-label">Destinatario:</label>
                            <select name="cmb_dep" id="cmb_dep" onChange='cargaFuncionarioAsg();'class="form-control">
                                <option value="">--- Seleccione Dependencia ---</option>                             
                                {foreach item=r from=$cmbdep}
                                    {if $IdDep==$r.CodDependencia}
                                        <option value="{$r.CodDependencia}" selected="selected">{$r.NomDependencia}</option>
                                    {else}
                                        <option value="{$r.CodDependencia}">{$r.NomDependencia}</option>
                                    {/if}
                                {/foreach}          
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
                    <input type="hidden" id="noRad" name="noRad" value="{$datos->idRad}">
                    <div class="text-justify">
                        <label for="mensajeCierra">Observaciones:</label>
                        <textarea class="form-control" rows="5" id="mensajeCierra" name="mensajeCierra" required></textarea>
                    </div>
                </form>
            </div>


        {/block}
</body>
</html>