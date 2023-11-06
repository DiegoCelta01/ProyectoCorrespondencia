{include file='header.tpl'}
{block name=body}
    <body class='main page'>
        <div id='wrapper'>
            {include file='menu.tpl'}
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
                        {$mensaje}          
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
                                                        {foreach item=r from=$cmbRemite}                                                       
                                                            <option value="{$r.CodRemite}">{$r.nomRemite}</option>
                                                        {/foreach}          
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
                                                    {foreach item=r from=$cmbtpdoc}
                                                        {if $numTipo==$r.id_tipo}
                                                            <option value="{$r.id_tipo}" selected="selected">{$r.nombre}</option>
                                                        {else}
                                                            <option value="{$r.id_tipo}">{$r.nombre}</option>
                                                        {/if}
                                                    {/foreach}          
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
                                                <input name="fechaDocumento" id="fechaDocumento" value="{$fecActual}"  class="form-control" type="date">
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
                                        {foreach item=r from=$datRadicados}
                                            <tr>                                                                                                  
                                                <td>{$r.Radicado}</td> 
                                                <td>{$r.remite}</td>
                                                <td>{$r.destino}</td>
                                                <td>{$r.tpDocumento}</td>
                                                <td>{$r.observaciones}</td>
                                                <td>{$r.grado}</td>
                                                </td>                                                
                                            </tr>                        
                                        {/foreach}                    
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
{/block} 
<script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"></script>
</body>
</html>
