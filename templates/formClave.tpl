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
        <li class='title'>Modificar Clave</li>         
      </ul>
      <div id='toolbar'>
      </div>
    </section>

    <div id='content'>
      <div class='panel panel-default'>
        <div class='panel-heading clearfix'>
          <h3 class="panel-title pull-left icon-edit icon-large" style="padding-top: 7.5px;"> Modificar Clave: {$nomUsu}</h3> </div>                  
          <div class='panel panel-default grid'>
          </br>
          <form class="form-horizontal" role="form" id="QForm" name="QForm" method="post">    
            <input type="hidden" id="accion" name="accion">
            <div class="form-group">
              <label for="ejemplo_password_3" class="col-lg-2 control-label">Nueva clave</label>
              <div class="col-lg-3">
                <input type="password" class="form-control" id="clave1" name="clave1"
                placeholder="Clave Nueva">
              </div>
            </div>

            <div class="form-group">
              <label for="ejemplo_password_3" class="col-lg-2 control-label">Confirmar clave</label>
              <div class="col-lg-3">
                <input type="password" class="form-control" id="clave2" name="clave2"
                placeholder="Confirmar Clave">
              </div>
            </div>

            <div class='form-group'>
              <div class='col-lg-2'>
              </div>

              <div class='col-lg-1'>
                <button class='btn btn-primary' type="button" id="btGuarda" onclick="validaClave();">Actualizar</button>  
              </div>

              <div class='col-lg-3'>
               <div class="alert alert-dismissable"> 
                <h4 style="color: #1cbc9e;">{$strMensaje}</h4>                  
              </div> 
            </div>           

          </div>  

        </form>  

      </div>           
    </div>
  </div>                                    
  {/block}
</body>
</html>