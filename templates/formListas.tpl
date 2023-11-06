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
                    <li class='title'>Consulta de Radicados</li>         
                </ul>
                <div id='toolbar'>
                </div>
            </section>

            <div id='content'>
                <div class='panel panel-default'>
                    <div class='panel-heading clearfix'>
                        <h3 class="panel-title pull-left icon-edit icon-large" style="padding-top: 7.5px;"> Listado</h3>                  
                    </div>                  
                    <div class='panel panel-default grid'>
                        <table class='table'>          
                            <tr>
                                <td>
                                    <div class='col-lg-12'>
                                        <table data-toggle="table" data-show-toggle="true"
                                               data-id-field="numeroRadicado"
                                               data-search="true" data-pagination="true" data-page-size="4">                                           
                                            <thead>
                                                <tr>                    
                                                    <th data-sortable="true" data-field="numeroRadicado">Radicado</th>
                                                    <th data-sortable="true" date-field="remite">Remite</th>
                                                    <th data-sortable="true" data-field="destino">Destino</th>
                                                    <th data-sortable="true" data-field="tpDocumento">Tp. Documento</th>   
                                                    <th data-sortable="true" data-field="NumDocumento">No. Documento</th>   
                                                    <th data-sortable="true" data-field="fechaDocumento">Fecha Documento</th>   
                                                    <th data-sortable="true" data-field="observaciones">Observaciones</th>
                                                    <th data-sortable="true" data-field="strEstado">Estado</th> 
                                                    <th data-sortable="true" data-field="grado">Grado</th>                                                     
                                                </tr>
                                            </thead>
                                            <tbody>                
                                                {foreach item=r from=$datos}
                                                    <tr>                                                                                                  
                                                        <td>{$r.Radicado}</td> 
                                                        <td>{$r.remite}</td>
                                                        <td>{$r.destino}</td>
                                                        <td>{$r.tpDocumento}</td>
                                                        <td>{$r.NumDocumento}</td>
                                                        <td>{$r.fechaDocumento}</td>
                                                        <td>{$r.observaciones}</td>
                                                        <td>{$r.strEstado}</td>
                                                        <td>{$r.grado}</td>
                                                        </td>                                                
                                                    </tr>                        
                                                {/foreach}                    
                                            </tbody>
                                        </table>   
                                    </div>             
                                </td>
                            </tr>
                        </table>     
                    </div>           
                </div>
            </div>                                    
        {/block}
        <script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"></script>
</body>
</html>
