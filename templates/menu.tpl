<section id='sidebar'>
    <i class='icon-align-justify icon-large' id='toggle'></i>
    <ul id='dock'>         
        {if $smarty.session.sesion_perfil!=2}
            <li class='launcher {$acRadicado}'>
                <i class='icon-envelope'></i>
                <a href="formRadica.php">Radicar</a>
            </li>
        {/if}

        {if $smarty.session.sesion_perfil==2}
            <li class='launcher {$acRadicado}'>
                <i class='icon-envelope'></i>
                <a href="formPendiente.php">Documentos Pendientes</a>
            </li>
        {/if}
        {if $smarty.session.sesion_perfil==2}          
            <span>&nbsp;</span>
        {/if}
        
        <li class='launcher {$acConsulta}'>
            <i class='icon-table'></i>
            <a href="formListas.php">Consulta</a>
        </li>          


        {if $smarty.session.sesion_perfil==1}
            <li class='launcher {$acRemite}'>
                <i class='icon-building'></i>
                <a href="formRemite.php">Remitentes</a>
            </li>   
        {/if}

        {if $smarty.session.sesion_perfil==1}
            <li class='launcher {$acDocumento}'>
                <i class='icon-file-text-alt'></i>
                <a href="formDocumento.php">Tipos de Documento</a>
            </li>   
        {/if}
        {if $smarty.session.sesion_perfil==1}          
            <span>&nbsp;</span>
        {/if}

        {if $smarty.session.sesion_perfil==1}
            <li class='launcher {$acDependencia}'>
                <i class='icon-edit'></i>
                <a href="formDependencia.php">Dependencias</a>
            </li>   
        {/if}

        {if $smarty.session.sesion_perfil==1}
            <li class='launcher {$acUsuario}'>
                <i class='icon-align-justify'></i>
                <a href="formUsuarios.php">Usuarios</a>
            </li>   
        {/if}

        <li class='launcher {$acClave}'>
            <i class='icon-user'></i>
            <a href="formClave.php">Modificar Clave</a>
        </li>   

        <li class='launcher'>
            <i class='icon-eject'></i>
            <a href="php/logout.php">Cerrar Sesión</a>
        </li>                
    </ul>
    <div data-toggle='tooltip' id='beaker' title='Made by Diego Velásquez'></div>
</section>