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
                    <li class='title'>Creación de Tipos Documentales</li>         
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
                                <form style="font-weight: bold;" name="formDoucumento" id="formDoucumento" method="post">
                                    <input type="hidden" name="accion" id="accion">
                                    <input type="hidden" name="id_tipo" id="id_tipo">
                                    <fieldset>                                     
                                        <div class='form-group row'>
                                            <div class='col-md-12'>
                                                <label class='control-label'>Nombre</label>
                                                <input class='form-control text-uppercase'  required="yes" placeholder='Nombre' name="nombre" id="nombre" type='text'>
                                            </div>
                                        </div>                                                                                                                                                                                       
                                    </fieldset>
                                    <div class='form-actions'>                                
                                        <button class='btn btn-primary' type="button" id="btGuarda" onclick="creaDocumento();">Guardar Tipo Documento</button>                                       
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
                                            <th data-sortable="true" data-field="id_tipo">Id</th>
                                            <th data-sortable="true" date-field="nombre">Nombre</th>                                           
                                        </tr>
                                    </thead>
                                    <tbody>                
                                        {foreach item=r from=$datDocumento}
                                            <tr>                                                  
                                                <td>
                                                    <a class="btn btn-danger" href="javascript:cargaDocumento('{$r.id_tipo}')" title="Modificar">                                                        
                                                        <span class="icon icon-edit"></span>
                                                    </a>
                                                </td>
                                                <td>{$r.id_tipo}</td> 
                                                <td>{$r.nombre}</td>
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
