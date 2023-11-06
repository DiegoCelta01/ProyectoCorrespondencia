{literal}    
<script>
	function validar() {
		if (document.QForm.mensaje.value == "") {
			alert("Debe escribir un mensaje.");
			document.QForm.mensaje.focus();
			return;
		}
		document.QForm.accion.value = "Asignar";
		document.QForm.submit();
	}

	function copia() {
		if (document.CForm.mensaje.value == "") {
			alert("Debe escribir un mensaje.");
			document.CForm.mensaje.focus();
			return;
		}
		document.CForm.accion.value = "Copia";
		document.CForm.submit();
	}

	function cerrar() {
		if (document.CForm.mensaje.value == "") {
			alert("Debe escribir un mensaje.");
			document.CForm.mensaje.focus();
			return;
		}
		document.CForm.accion.value = "Cerrar";
		document.CForm.submit();
	}	
</script>   
<!--===============================================================================================-->

{/literal}
<body onLoad='cargaContenido("cmb_dep");'>
	<div class="container">
		{$Strcopia=""}
		{$StrTab="Cerrar Documento"}
		{$label="label-primary"}
		{$tab1="asig"}
		{$tab2="resp"}
		{if $datos->copia=="C"}
		{$Strcopia="Copia"}
		{$StrTab="Cerrar Copia"}
		{$label="label-default"}
		{$tab1=""}
		{$tab2=""}
		{/if}
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#info">Informacion Detallada</a></li>
			<li><a data-toggle="tab" href="#{$tab1}">Reasignar</a></li>
			<li><a data-toggle="tab" href="#cerrar">{$StrTab}</a></li>                     
		</ul>

		<!-- Pestaña Informacion Detallada. -->
		<div class="tab-content">
			<div id="info" class="tab-pane fade in active">
				<div class="row">
					<div class="col-sm-1 col-md-1  c-form-box">                                           
						<h4><span class="label label-primary">
							<a class="LinkBtn" href="{$datos->imagen}">Ver Imagen</a>
						</h4></span>                                  
					</div>

					<div class="col-sm-10 col-md-10 c-form-box">                                                                         
						<center>
							<h4><span class="label {$label}">{$Strcopia} Radicado: {$datos->no_radicado} - Fecha: {$datos->fecha_radicado} 
							</span>                    
						</h4>    
					</center>                         
				</div>

				<div class="col-sm-1 col-md-1  c-form-box">                                               
					<h4><span class="label label-primary">
						<a class="LinkBtn" href="{$datos->imagen}">Ver Imagen</a>
					</h4></span>                               
				</div>
			</div>

			{* ------------------------------------------------------------------------------------------------------ *}


			<div class="form-horizontal">
				<div class="col-sm-6">
					<div class="form-group">          
						<label for="TxtDependencia" class="col-sm-4 control-label">Dependencia:</label>
						<div class="col-sm-8">  
							<input name="TxtDependencia" id="TxtDependencia" readonly="Yes" value="{$datos->dependencia}" class="form-control" type="text">
						</div>
					</div>
					<div class="form-group">
						<label for="TxtSerie" class="col-sm-4 control-label">Serie:</label>
						<div class="col-sm-8">
							<input name="TxtSerie" id="TxtSerie" readonly="Yes" value="{$datos->serie}" class="form-control" type="text">
						</div>
					</div>
					<div class="form-group">
						<label for="TxtSubserie" class="col-sm-4 control-label  text-left">SubSerie:</label>
						<div class="col-sm-8">
							<input name="TxtSubserie" id="TxtSubserie" readonly="Yes" value="{$datos->subserie}" class="form-control" type="text">
						</div>
					</div>
					<div class="form-group">
						<label for="TxtTipodoc" class="col-sm-4 text-left control-label">Tipo Documento:</label>
						<div class="col-sm-8">
							<input name="TxtTipodoc" id="TxtTipodoc" readonly="Yes" value="{$datos->tipo_documento}" class="form-control" type="text">
						</div>
					</div>
				</div>




				<div class="col-sm-6">        
					<div class="form-group">
						<label for="TxtExpediente" class="col-sm-4 control-label">Expediente:</label>
						<div class="col-sm-8">
							<input name="TxtExpediente" id="TxtExpediente" readonly="Yes" value="{$datos->expediente}" class="form-control" onkeyup="sync()" type="text">
						</div>
					</div>
					<div class="form-group">
						<label for="TxtNumdoc" class="col-sm-4 control-label">No. Documento:</label>
						<div class="col-sm-8">
							<input name="TxtNumdoc" id="TxtNumdoc" readonly="Yes" value="{$datos->no_documento}" class="form-control" onkeyup="sync()" type="text">
						</div>
					</div>
					<div class="form-group">
						<label for="TxtFecdocumento" class="col-sm-4 control-label">Fecha Documento:</label>
						<div class="col-sm-8">
							<input name="TxtFecdocumento" id="TxtFecdocumento" readonly="Yes" value="{$datos->fecha_documento}" class="form-control" onkeyup="sync()" type="text">
						</div>
					</div>
					<div class="form-group">
						<label for="TxtValor" class="col-sm-4 control-label">Valor:</label>
						<div class="col-sm-8">
							<input name="TxtValor" id="TxtValor" readonly="Yes" value="{$datos->valor}" class="form-control" onkeyup="sync()" type="text">
						</div>
					</div>
				</div>
				
			</div>


			<div class="form-group">
				<label for="TxtAsunto" class="col-sm-4 control-label">Asunto:</label>
				<div class="col-sm-12">							
					<textarea class="form-control" rows="3"  name="TxtAsunto" readonly="yes">{$datos->asunto}</textarea>
					<br>
				</div>
			</div>




			
			<div class="container divscroll">             
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Funcionario</th>
							<th>Dependencia</th>
							<th>Fecha</th>
							<th>Mensaje</th>
						</tr>
					</thead>
					<tbody>
						{foreach item=r from=$traza}        
						<tr>                          
							<td nowrap>{$r.u_origen}</td>
							<td nowrap>{$r.dependencia_org}</td>          
							<td nowrap>{$r.fecha_origen}</td>                   
							<td>{$r.comentario}</td>  
						</tr>                                                      
						{/foreach}
					</tbody>
				</table>
			</div>


			{* -----------------------------Lista Archivos Anexos----------------------------- *}
			<label for="tabla">Anexos al Radicado:</label>
			<div class="container divscroll">             
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Descripcion Archivo</th>
							<th></th>                   
						</tr>
					</thead>
					<tbody>
						{foreach item=r from=$adjunto}        
						<tr>                          
							<td>{$r.descripcion}</td>
							<td><a target="blank" class="btn btn-primary" href="{$r.rutaweb}" role="button">Abrir Archivo</a>                
							</td>
						</tr>                                                      
						{/foreach}
					</tbody>
				</table>
			</div>


			{* ------------------------------------------------------------------------------- *}

		</div>

		<!-- Pestaña Asignar Documento. -->
		<div id="asig" class="tab-pane fade">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-4 c-form-box wow fadeInUp">
					<div class="c-form-top">                                                                     
						<h4><span class="label {$label}">{$Strcopia} Radicado: {$datos->no_radicado} - Fecha Radicado: {$datos->fecha_radicado}</span></h4>    
					</div>
				</div>
			</div>


			<form action="asigna.php"  method="post" name="QForm">
				<div class="form-group">
					<label for="email">Dependencia:</label>
					<select name="cmb_dep" id="cmb_dep" onChange='cargaContenido(this.id);'class="form-control" autofocus>
						<option value="">--- Seleccione Dependencia ---</option>                             
						{foreach item=r from=$tpdepen}
						{if $IdDep==$r.id_dependencia}
						<option value="{$r.id_dependencia}" selected="selected">{$r.descripcion}</option>
						{else}
						<option value="{$r.id_dependencia}">{$r.descripcion}</option>
						{/if}
						{/foreach}          
					</select>
				</div>
				<div class="form-group">
					<label for="func">Funcionario:</label>
					<select disabled="disabled" name="cmb_per" id="cmb_per" class="form-control">
						<option value="0">--- Seleccione Funcionario ---</option>
					</select>
				</div>
				<div class="text-justify">
					<label for="mensaje">Mensaje:</label>
					<textarea class="form-control" rows="5" id="mensaje" name="mensaje" required></textarea>
				</div>

				<p></br>
					<input type="hidden" name="idreg" value="{$datos->id_imagen}">
					<input type="hidden" name="idtab" value="{$datos->tabla}">
					<input type="hidden" name="accion" value="">
					<button type="submit" class="btn btn-primary" onClick="validar();">Reasignar Documento</button>
				</p>
			</form>
		</div>



		<!-- Pestaña Cerrar Documento. -->
		<div id="cerrar" class="tab-pane fade">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-4 c-form-box wow fadeInUp">
					<div class="c-form-top">                                                                     
						<h4><span class="label {$label}">{$Strcopia} Radicado: {$datos->no_radicado} - Fecha Radicado: {$datos->fecha_radicado}</span></h4>    
					</div>
				</div>
			</div>
			<form action="asigna.php"  method="post" name="CForm">           
				<div class="text-justify">
					<label for="mensaje">Mensaje:</label>
					<textarea class="form-control" rows="5" id="mensaje" name="mensaje" required></textarea>
				</div>

				<p></br>
					<input type="hidden" name="idreg" value="{$datos->id_imagen}">
					<input type="hidden" name="idtab" value="{$datos->tabla}">
					<input type="hidden" name="idrad" value="{$datos->no_radicado}">
					<input type="hidden" name="accion" value="">
					{if $datos->copia=="C"}
					<button type="submit" class="btn btn-primary" onClick="copia();">Cerrar Copia</button>
					{else}
					<button type="submit" class="btn btn-primary" onClick="cerrar();">Cerrar Documento</button>
					{/if}
				</p>
			</form>
		</div>		
	</p>
</div>
</div>
</div>
</body>
</html>