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
                    <li class='title'>Creación de Dependencias</li>         
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
                                <form style="font-weight: bold;" name="formDependencia" id="formDependencia" method="post">
                                    <input type="hidden" name="accion" id="accion">
                                    <input type="hidden" name="idDep" id="idDep">
                                    <fieldset>                                     
                                        <div class='form-group row'>
                                            <div class='col-md-12'>
                                                <label class='control-label'>Nombre</label>
                                                <input class='form-control'  required="yes" placeholder='Nombre' name="nombre" id="nombre" type='text'>
                                            </div>
                                        </div>                                                                                                                                                                                       
                                    </fieldset>
                                    <div class='form-actions'>                                
                                        <button class='btn btn-primary' type="button" id="btGuarda" onclick="creaDependencia();">Guardar Dependencia</button>                                       
                                    </div>                   
                                </form>
                            </div>

                            <div class='col-lg-8'>
                                <table data-toggle="table" data-show-toggle="true"
                                       data-id-field="CodDependencia"
                                       data-search="true" data-pagination="true" data-page-size="4">                                           
                                    <thead>
                                        <tr>                    
                                            <th>Accion</th>
                                            <th data-sortable="true" data-field="CodDependencia">Código</th>
                                            <th data-sortable="true" date-field="NomDependencia">Nombre</th>                                           
                                        </tr>
                                    </thead>
                                    <tbody>                
                                        {foreach item=r from=$datDependencia}
                                            <tr>                                                  
                                                <td>
                                                    <a class="btn btn-danger" href="javascript:cargaDependencia('{$r.CodDependencia}')" title="Modificar">                                                        
                                                        <span class="icon icon-edit"></span>
                                                    </a>
                                                </td>
                                                <td>{$r.CodDependencia}</td> 
                                                <td>{$r.NomDependencia}</td>
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
