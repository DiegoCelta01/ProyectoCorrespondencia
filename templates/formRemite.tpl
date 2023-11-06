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
                        {$mensaje}
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
                                        {foreach item=r from=$datRemite}
                                            <tr>                                                  
                                                <td>
                                                    <a class="btn btn-danger" href="javascript:cargaRemite('{$r.CodRemite}')" title="Modificar">                                                        
                                                        <span class="icon icon-edit"></span>
                                                    </a>
                                                </td>
                                                <td>{$r.cedulaNit}</td> 
                                                <td>{$r.nomRemite}</td>
                                                <td>{$r.dirRemite}</td>
                                                <td>{$r.telRemite}</td>
                                                <td>{$r.mailRemite}</td>
                                                <td>{$r.tipoRemite}</td>
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
        {/block}
        <!-- Footer -->
        <!-- Javascripts -->
        <script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"></script>
        <!-- Google Analytics -->
</body>
</html>
