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
                    <li class='title'>Usuarios</li>         
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
                                <form style="font-weight: bold;" name="formUsuario" id="formUsuario" method="post">
                                    <input type="hidden" name="accion">
                                    <input type="hidden" name="codusuario" id="usuId">
                                    <fieldset>

                                        <div class='form-group row'>
                                            <div class='col-md-12'>
                                                <label class='control-label'>Nombre</label>
                                                <input class='form-control' required="yes" autofocus="yes" name="nombre" id="nombre" placeholder='Nombre' type='text'>
                                            </div>                                           
                                        </div>  
                                        
                                          <div class='form-group row'>
                                            <div class='col-md-12'>
                                                <label class='control-label'>Correo</label>
                                                <input class='form-control' required="yes" name="correo" id="correo" placeholder='Correo electrónico' type='text'>
                                            </div>                                           
                                        </div>  

                                        <div class='form-group row'>
                                            <div class='col-md-12'>
                                                <label class='control-label'>Dependencia</label>
                                                <select name="dependencia" id="dependencia" class="form-control">
                                                    <option value="">--- Seleccione Dependencia ---</option>                             
                                                    {foreach item=r from=$cmbDependencia}
                                                        <option value="{$r.CodDependencia}">{$r.NomDependencia}</option>
                                                    {/foreach}          
                                                </select>
                                            </div>
                                        </div>

                                        <div class='form-group row'>
                                            <div class="col-sm-12">
                                                <label class="control-label">Perfil</label>
                                                <select id="perfil" name="perfil" class="form-control">
                                                     <option value="">--- Seleccione Perfil ---</option>  
                                                    <option value="1">Ventanilla</option>
                                                    <option value="2">Funcionario</option>                                                    
                                                    <option value="3">Administrador</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class='form-group row'>
                                            <div class='col-md-6'>
                                                <label class='control-label'>Usuario</label>
                                                <input class='form-control' required="yes" name="usuario" id="usuario" placeholder='Usuario' type='text'>
                                            </div> 

                                            <div class='col-md-6'>
                                                <label class='control-label'>Clave</label>
                                                <input class='form-control' required="yes" placeholder='Clave' name="clave" id="clave" type='text'>
                                            </div>
                                        </div>                                                                           
                                    </fieldset>

                                    <div class='form-actions'>                                
                                        <button class='btn btn-primary' type="button" id="btGuarda" onclick="registraUsuario();">Guardar Usuario</button>                                       
                                    </div>                   
                                </form>
                            </div>

                            <div class='col-lg-8'>
                                <table data-toggle="table" data-show-toggle="true"
                                       data-id-field="nit"
                                       data-search="true" data-pagination="true" data-page-size="3">                                           
                                    <thead>
                                        <tr>                    
                                            <th>Acción</th>
                                            <th data-sortable="true" data-field="nombre">Nombre</th>
                                            <th data-sortable="true" date-field="usuario">Usuario</th>
                                            <th data-sortable="true" data-field="correo">Correo</th>
                                            <th data-sortable="true" data-field="clave">Clave</th>  
                                        </tr>
                                    </thead>
                                    <tbody>                
                                        {foreach item=r from=$datUsuario}
                                            <tr>                                                  
                                                <td>
                                                    <a class="btn btn-danger" href="javascript:cargaUsuario('{$r.codusuario}')" title="Modificar">                                                        
                                                        <span class="icon icon-edit"></span>
                                                    </a>
                                                </td>
                                                <td>{$r.nombre}</td> 
                                                <td>{$r.usuario}</td>
                                                <td>{$r.correo}</td>
                                                <td>{$r.clave}</td>
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
