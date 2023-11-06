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
<body>
	<div class="container">
		{$Strcopia=""}
		{$StrTab="Cerrar Documento"}
		{$label="label-primary"}
		{$tab1="asig"}
		{if $datos->copia=="C"}
		{$Strcopia="Copia"}
		{$StrTab="Cerrar Copia"}
		{$label="label-default"}
		{$tab1=""}
		{/if}
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#info">Informacion Detallada</a></li>			  
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

			<div class="container divscroll">             
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Copia</th>
							<th>Func. Origen</th>
							<th>Dependencia</th>
							<th>Fecha</th>
							<th>Func. Destino</th>
							<th>Mensaje</th>
						</tr>
					</thead>
					<tbody>
						{foreach item=r from=$traza}        
						<tr>     
							<td>{$r.copia}</td>                     
							<td>{$r.u_origen}</td>
							<td nowrap>{$r.dependencia_org}</td>          
							<td nowrap>{$r.fecha_origen}</td>  
							<td nowrap>{$r.u_destino}</td>
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
		</div>		
	</div>
</p>
</div>
</div>
</div>
</body>
</html>
