{literal}    
<script>
	function EnviaForm() {		
		document.Cform.accion.value = "Envia";
		document.Cform.submit();
	}
	function CancelaForm() {		
		document.Cform.accion.value = "Cancela";
		document.Cform.submit();
	}
</script>   

<!--===============================================================================================-->

{/literal}
<body onload="cargaLista('cmb_dep')">
	{* -------------------------------------------- Formulario Copia----------------------------------------- *}
	<div class="container">
		<div>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-4 c-form-box">
					<div class="c-form-top">                                                                     
						<h4><span class="label label-primary">Envio de Copias</span></h4>    
					</div>
				</div>
			</div>

			<div class="form-horizontal">
				<div class="col-sm-8">
					<form action="RadicaCopias.php"  method="post" name="Cform" enctype="multipart/form-data">						
						<input type="hidden" name="accion" value="">
						<input type="hidden" name="id_imagen" value="{$id_imagen}">
						<input type="hidden" name="asunto" value="{$mensaje}">
						<input type="hidden" name="usu_principal" value="{$funcionario}">


						<div class="form-group">
							<label for="TxtSerie" class="col-sm-4 control-label">Dependencia:</label>
							<div class="col-sm-8">
								<select name="cmb_dep" id="cmb_dep" onChange='cargaLista(this.id);' class="form-control" autofocus>
									<option value="">--- Seleccione Dependencia ---</option>                          
									{foreach item=r from=$cmbdep}
									{if $IdDep==$r.id_dependencia}
									<option value="{$r.id_dependencia}" selected="selected">{$r.descripcion}</option>
									{else}
									<option value="{$r.id_dependencia}">{$r.descripcion}</option>
									{/if}
									{/foreach}          
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label for="TxtSerie" class="col-sm-4 control-label">Funcionario(s):</label>
							<div class="col-sm-8">
								<select disabled="disabled" name="cmb_per" id="cmb_per" multiple="multiple" class="form-control" required>
									<option value="0">--- Seleccione Funcionario ---</option>
								</select>
							</div>
						</div>


						<div class="form-group">
							<label for="TxtNumdoc" class="col-sm-4 control-label">Mensaje:</label>
							<div class="col-sm-8">
								<textarea class="form-control" rows="3" id="asunto" name="asunto" required>{$mensaje}</textarea>
							</div>
						</div>

						<center>
							<div class="form-group">
								<div class="col-sm-12">
									<button type="submit" class="btn btn-primary" onClick="EnviaForm();">Enviar Copias</button>		
									<button type="submit" class="btn btn-primary" onClick="CancelaForm();">Cancelar</button>									
								</div>
							</div>
						</center>
					</div>						
				</form>
			</div>
		</div>
	</div>
</body>
</html>
