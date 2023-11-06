<!DOCTYPE html>
<html class='no-js' lang='en'>
    <head>
        <meta charset='utf-8'>
        <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
        <title>Ingreso de Usuarios</title>
        <meta content='lab2023' name='author'>
        <meta content='' name='description'>
        <meta content='' name='keywords'>
        <link href="assets/stylesheets/application-a07755f5.css" rel="stylesheet" type="text/css" />  
        <link href="assets/images/favicon.ico" rel="icon" type="image/ico" />    
    </head>


    <div class="col-md-12 navbar navbar-fixed-top">
    </div>

    <body class='login'>
        <div class='wrapper'>
            <div class='row'>
                <div class='col-lg-12'>
                    <div class='brand text-center'>
                        <h1 class="text-primary">
                            <div class='logo-icon'>
                                <i class='icon-envelope'></i>
                            </div>
                        </h1>
                        <h3 class="text-primary">
                            {$_titulo}
                        </h3>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='col-lg-12'>
                    <form action="index.php" method="post">            
                        <fieldset class='text-center'>
                            <legend>Ingreso de Usuarios</legend>
                            <div class='form-group'>
                                <input class='form-control' autofocus="yes" placeholder='Nombre de Usuario' id="bp_usuario" name="bp_usuario" type='text'>
                            </div>
                            <div class='form-group'>
                                <input class='form-control' placeholder='Contraseña' id="bp_clave" name="bp_clave" type='password'>
                            </div>    
                            <div class='text-center'>               
                                <button class='btn btn-primary' type='submit' value="Ingresar" name="accion">Aceptar</button>
                                <br>                
                            </div>          
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>  
        {include file='footer.tpl'}
    </body>
</html>
