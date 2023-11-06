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
                    <li class='title'>Empresas</li>         
                </ul>
                <div id='toolbar'>

                </div>
            </section>
            <!-- Content -->
            <div id='content'>
                <div class='panel panel-default'>
                    <div class='panel-heading'>
                        <i class='icon-edit icon-large'></i>
                        Creación de Empresas
                    </div>
                    <div class='panel-body'>

                        <div class='col-lg-12'>                            

                            <div class='col-lg-4'>
                                <form style="font-weight: bold;" name="formEmpresa" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="accion" id="accion" value="">
                                    <input type="hidden" name="empId" id="empId" value="">
                                    <fieldset>

                                        <div class='form-group row'>
                                            <div class='col-md-6'>
                                                <label class='control-label'>Nit</label>
                                                <input class='form-control' required="yes" autofocus="yes" name="empNit" id="empNit" placeholder='Número NIT' type='text'>
                                            </div>
                                            <div class='col-md-6'>
                                                <label class='control-label'>Teléfono</label>
                                                <input class='form-control' required="yes" placeholder='Teléfono Empresa' name="empTelefono" id="empTelefono" type='text'>
                                            </div> 
                                        </div>  

                                        <div class='form-group row'>
                                            <div class='col-md-12'>
                                                <label class='control-label'>Nombre</label>
                                                <input class='form-control' required="yes" placeholder='Nombre Empresa' name="empNombre" id="empNombre" type='text'>
                                            </div>
                                        </div>

                                        <div class='form-group row'>
                                            <div class='col-md-12'>
                                                <label class='control-label'>Dirección</label>
                                                <input class='form-control' required="yes" placeholder='Direccion Empresa' name="empDireccion" id="empDireccion" type='text'>
                                            </div>
                                        </div>

                                        <div class='form-group row'>
                                            <div class='col-md-12'>
                                                <label class='control-label'>Correo</label>
                                                <input class='form-control' required="yes" placeholder='Correo Electrónico' id="empCorreo" name="empCorreo" id="empCorreo" type='text'>
                                            </div>                                                                            
                                        </div>
                                        <div class='form-group row'>
                                            <div class='col-md-12'>
                                                <label class='control-label'>Contacto</label>
                                                <input class='form-control' required="yes" placeholder='Contacto Empresa' id="empContacto" name="empContacto" id="empContacto" type='text'>
                                            </div>  
                                        </div> 

                                        <div class="form-group row">
                                            <div class="container-fluid">
                                                <a class="" href="#">
                                                    <img class="img-rounded" id="imgLogo" name="imgLogo">
                                                </a>
                                            </div>    
                                        </div>  


                                        <div class="form-group row">
                                            <div class='col-md-12'>
                                                <label for="ejemplo_archivo_1">Seleccionar Logo</label>
                                                <input class="btn btn-warning" type="file" name="uploadedFile" id="uploadedFile"  accept=".png">
                                                <p class="help-block">Formato .PNG fondo transparente, 
                                                    <br>ancho 180px, alto 60px.</p>
                                            </div>
                                        </div>

                                    </fieldset>

                                    <div class='form-actions'>                                
                                        <button class='btn btn-primary' type="button" id="btGuarda" onclick="registraEmpresa();">Guardar Información</button>                                       
                                    </div>                   
                                </form>
                            </div>

                            <div class='col-lg-8'>
                                <table data-toggle="table" data-show-toggle="true"
                                       data-id-field="nit"
                                       data-search="true" data-pagination="true" data-page-size="3">                                           
                                    <thead>
                                        <tr>                    
                                            <th>Accion</th>
                                            <th data-sortable="true" data-field="nit">Nit</th>
                                            <th data-sortable="true" date-field="nombre">Nombre</th>
                                            <th data-sortable="true" data-field="direccion">Dirección</th>
                                            <th data-sortable="true" data-field="telefono">Teléfono</th>                                
                                            <th data-sortable="true" data-field="correo">Correo</th>
                                            <th data-sortable="true" data-field="contacto">Contacto</th>                                                
                                        </tr>
                                    </thead>
                                    <tbody>                
                                        {foreach item=r from=$datEmpresa}
                                            <tr>                                                  
                                                <td>
                                                    <a class="btn btn-danger" href="javascript:cargaEmpresa('{$r.id_conse}')" title="Modificar">                                                        
                                                        <span class="icon icon-edit"></span>
                                                    </a>
                                                </td>
                                                <td>{$r.nit}</td> 
                                                <td>{$r.nombre}</td>
                                                <td>{$r.direccion}</td>
                                                <td>{$r.telefono}</td>
                                                <td>{$r.correo}</td>
                                                <td>{$r.contacto}</td>
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
