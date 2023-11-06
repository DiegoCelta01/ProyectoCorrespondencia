<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-05 13:13:07
  from 'C:\AppServ\www\sintomas\templates\formListas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eda8b3329a951_32633447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '711026fec1d5fb1722144ae5e7ebe2a79d11938a' => 
    array (
      0 => 'C:\\AppServ\\www\\sintomas\\templates\\formListas.tpl',
      1 => 1591380785,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_5eda8b3329a951_32633447 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_823810965eda8b33187f44_64348529', 'body');
?>

<?php echo '<script'; ?>
 src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
/* {block 'body'} */
class Block_823810965eda8b33187f44_64348529 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_823810965eda8b33187f44_64348529',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<body class='main page'>
    <!-- Navbar -->
    <div id='wrapper'>
        <!-- Sidebar -->
        <?php $_smarty_tpl->_subTemplateRender('file:menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <!-- Tools -->
        <section id='tools'>
            <ul class='breadcrumb' id='breadcrumb'>
                <li class='title'>Consulta Síntomas</li>         
            </ul>
            <div id='toolbar'>
            </div>
        </section>

        <div id='content'>
            <div class='panel panel-default'>
                <div class='panel-heading clearfix'>
                    <h3 class="panel-title pull-left icon-edit icon-large" style="padding-top: 7.5px;"> Listado</h3>

                    <form id="frmExporta" name="frmExporta" method="post">
                        <div class='pull-right'>      
                         <div class='form-inline' style="margin-top: 1px;">
                            <label class='control-label title' style="color: #1cbc9e;">Fecha Inicial:</label>
                            <input class='form-control' readonly="yes" placeholder='Fecha Inicial' name="fecIni" id="fecIni" type='text'>
                            <label class='control-label title'  style="color: #1cbc9e;">Fecha Final:</label>
                            <input class='form-control' readonly="yes" placeholder='Fecha Inicial' name="fecFin" id="fecFin" type='text'>
                            

                                                        <button type="button" class="btn btn-success" onclick="window.open('php/exporta.php?fecIni=' + $('#fecIni').val()+'&fecFin='+$('#fecFin').val()); return false;" >Exportar</button>
                        </div>
                        <div id="resExp"></div>
                    </div>              
                </form>

            </div>                  
            <div class='panel panel-default grid'>
                <table class='table'>          
                    <tr>
                        <td>
                            <table data-toggle="table" data-search="true" data-pagination="true" data-page-size="10">                                         
                                <?php $_smarty_tpl->_assignInScope('a', ((string)($_smarty_tpl->tpl_vars['numreg']->value*$_smarty_tpl->tpl_vars['total']->value)));?>
                                <?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1+$_smarty_tpl->tpl_vars['a']->value)));?>    
                                <thead>
                                    <tr>                    
                                        <th data-sortable="true" data-field="tipo">Tipo</th>
                                        <th data-sortable="true" date-field="identificacion">Idetificacion</th>
                                        <th data-sortable="true" data-field="nombres">Nombres</th>
                                        <th data-sortable="true" data-field="apellidos">Apellidos</th>                                
                                        <th data-sortable="true" data-field="fecha">Fecha</th>
                                        <th data-sortable="true" data-field="edad">Edad</th>  
                                        <th data-sortable="true" data-field="temp_ini">Temp. Ini</th>     
                                        <th data-sortable="true" data-field="temp_fin">Temp. Fin</th>   
                                        <th data-sortable="true" data-field="barrio">Barrio</th>   
                                        <th data-sortable="true" data-field="localidad">Localidad</th>   
                                    </tr>
                                </thead>
                                <tbody>                
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datos']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
                                    <tr>                                                                  
                                        <td><?php echo $_smarty_tpl->tpl_vars['r']->value['tipo'];?>
</td> 
                                        <td><?php echo $_smarty_tpl->tpl_vars['r']->value['Identificacion'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['r']->value['Nombres'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['r']->value['Apellidos'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['r']->value['fecha'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['r']->value['edad'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['r']->value['temp_ini'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['r']->value['temp_fin'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['r']->value['Barrio'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['r']->value['Localidad'];?>
</td>
                                    </td>                                                
                                </tr>                        
                                <?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1)));?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                    
                            </tbody>
                        </table>                       
                    </td>
                </tr>
            </table>     
        </div>           
    </div>
</div>                                    
<?php
}
}
/* {/block 'body'} */
}
