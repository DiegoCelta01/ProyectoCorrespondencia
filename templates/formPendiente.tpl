{include file='header.tpl'}
{block name=body}
    <body class='main page'>
        <div id='wrapper'>
            {include file='menu.tpl'}
            <section id='tools'>
                <ul class='breadcrumb' id='breadcrumb'>
                    <li class='title'>Gestión de Documentos</li>         
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
                            <div class='col-lg-12'>
                                <table data-toggle="table" data-show-toggle="true"
                                       data-id-field="numeroRadicado"
                                       data-search="true" data-pagination="true" data-page-size="4">                                           
                                    <thead>
                                        <tr>                    
                                            <th data-sortable="true" data-field="numeroRadicado">Radicado</th>
                                            <th data-sortable="true" date-field="remite">Remite</th>
                                            <th data-sortable="true" data-field="tpDocumento">Tp. Documento</th>   
                                            <th data-sortable="true" data-field="usuRemite">Asignado Por</th>
                                            <th data-sortable="true" data-field="fechaIngresa">Asignado el</th>
                                            <th data-sortable="true" data-field="MensajeEnvia">Mensaje</th>                                            
                                            <th data-sortable="true" data-field="grado">Grado</th>                                                
                                        </tr>
                                    </thead>
                                    <tbody>                
                                        {foreach item=r from=$datRadicados}
                                            <tr>                                                                                                  
                                                <td>
                                                    <form name='formR{$r.numeroRadicado}' method="POST" action='formGestion.php'>
                                                        <input type='hidden' name='NoRadicado' value='{$r.numeroRadicado}'>                                     
                                                        <a class="LinkGrd" title="Gestionar Documento" href='javascript:document.formR{$r.numeroRadicado}.submit();'>
                                                            {$r.Radicado}
                                                        </a>
                                                    </form>                                                    </td> 
                                                <td>{$r.remite}</td>
                                                <td>{$r.tpDocumento}</td>
                                                <td>{$r.usuRemite}</td>
                                                <td>{$r.fechaIngresa}</td>                                               
                                                <td>{$r.MensajeEnvia}</td>
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
    </div>
{/block} 
<script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"></script>
</body>
</html>
