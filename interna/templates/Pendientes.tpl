{literal}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css">
<style type="text/css">
.Content {
    height: 100%;
    overflow: auto;         
}
</style>
{/literal}
<hr/>
<center>
  <h3><span class="label label-primary">Radicados Internos Pendientes</span></h3>
    <div class="Content">
        <table border="0" width="90%">          
            <tr>
                <td>
                    <table data-toggle="table" data-search="true" data-pagination="true" data-page-size="10">                            
                        {assign var="a" value="`$numreg*$total`"}
                        {assign var="b" value="`$b+1+$a`"}    
                        <thead>
                            <tr>
                                <th date-field="COPIA">COPIA</th>
                                <th>No.</th>                                
                                <th data-sortable="true" date-field="NO_RADICADO">NO RADICADO</th>
                                <th data-sortable="true" data-field="FECHA_RADICADO">FECHA RADICADO</th>
                                <th data-sortable="true" data-sort-order="desc" data-field="FECHA_DOCUMENTO">FECHA ENVIO</th>
                                <th data-sortable="true" data-field="EXPEDIENTE" >NOMBRE EXPEDIENTE</th>
                                <th data-sortable="true" data-field="TP_DOCUMENTO">TIPO DOCUMENTO</th>
                                <th data-sortable="true" data-field="MENSAJE">MENSAJE RECIBIDO</th>                                
                            </tr>
                        </thead>

                        <tbody>                
                            {foreach item=r from=$pendientes}
                            <tr bgcolor="{cycle values='#d0d0d0,#eeeeee'}">
                                <td>{$r.COPIA}</td>                    
                                <td align="center">{$b}</td>                                    
                                <td align="center">
                                    <form name='formR{$r.ID_IMAGEN}' method="POST" action='GestionInterna.php'>
                                        <input type='hidden' name='NoRadicado' value='{$r.NO_RADICADO}'>
                                        <input type='hidden' name='copia' value='{$r.COPIA}'>                                       
                                        <a class="LinkGrd" href='javascript:document.formR{$r.ID_IMAGEN}.submit();'>
                                            {$r.NO_RADICADO}
                                        </a>
                                    </form>

                                </td>
                                <td align="center">

                                 <form name='formF{$r.ID_IMAGEN}' method="POST" action='GestionInterna.php'>
                                    <input type='hidden' name='NoRadicado' value='{$r.NO_RADICADO}'>
                                    <input type='hidden' name='copia' value='{$r.COPIA}'>                                           
                                    <a class="LinkGrd" href='javascript:document.formF{$r.ID_IMAGEN}.submit();'>
                                      {$r.FECHA_RADICADO}
                                  </a>
                              </form>

                          </td>
                          <td nowrap>

                            <form name='formO{$r.ID_IMAGEN}' method="POST" action='GestionInterna.php'>
                                <input type='hidden' name='NoRadicado' value='{$r.NO_RADICADO}'>
                                <input type='hidden' name='copia' value='{$r.COPIA}'>                                           
                                <a class="LinkGrd" href='javascript:document.formO{$r.ID_IMAGEN}.submit();'>
                                  {$r.FECHA_ORIGEN}
                              </a>
                          </form>

                      </td>                                   
                      <td>

                       <form name='formE{$r.ID_IMAGEN}' method="POST" action='GestionInterna.php'>
                        <input type='hidden' name='NoRadicado' value='{$r.NO_RADICADO}'>
                        <input type='hidden' name='copia' value='{$r.COPIA}'>                                           
                        <a class="LinkGrd" href='javascript:document.formE{$r.ID_IMAGEN}.submit();'>
                          {$r.EXPEDIENTE}
                      </a>
                  </form>

              </td>
              <td>

                <form name='formT{$r.ID_IMAGEN}' method="POST" action='GestionInterna.php'>
                    <input type='hidden' name='NoRadicado' value='{$r.NO_RADICADO}'>
                    <input type='hidden' name='copia' value='{$r.COPIA}'>                                           
                    <a class="LinkGrd" href='javascript:document.formT{$r.ID_IMAGEN}.submit();'>
                      {$r.TP_DOCUMENTO}
                  </a>
              </form>

          </td>       
          <td>

            <form name='formC{$r.ID_IMAGEN}' method="POST" action='GestionInterna.php'>
            <input type='hidden' name='NoRadicado' value='{$r.NO_RADICADO}'>
            <input type='hidden' name='copia' value='{$r.COPIA}'>                                           
            <a class="LinkGrd" href='javascript:document.formC{$r.ID_IMAGEN}.submit();'>
              {$r.COMENTARIO}
          </a>
      </form>

  </td>                                                
</tr>                        
{assign var="b" value="`$b+1`"}
{/foreach}                    
</tbody>
</table>    
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"></script>
</td>
</tr>
</table>     
</div>    
</center>
