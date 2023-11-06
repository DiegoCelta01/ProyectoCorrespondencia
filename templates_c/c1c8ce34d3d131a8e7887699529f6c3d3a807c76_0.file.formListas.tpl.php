<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-03 12:30:49
  from 'C:\AppServ\www\Correspondencia\templates\formListas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eff6b490ca517_04900291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1c8ce34d3d131a8e7887699529f6c3d3a807c76' => 
    array (
      0 => 'C:\\AppServ\\www\\Correspondencia\\templates\\formListas.tpl',
      1 => 1593797446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_5eff6b490ca517_04900291 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17865782015eff6b48e13fa6_10675732', 'body');
?>

        <?php echo '<script'; ?>
 src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
/* {block 'body'} */
class Block_17865782015eff6b48e13fa6_10675732 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_17865782015eff6b48e13fa6_10675732',
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
                    <li class='title'>Consulta de Radicados</li>         
                </ul>
                <div id='toolbar'>
                </div>
            </section>

            <div id='content'>
                <div class='panel panel-default'>
                    <div class='panel-heading clearfix'>
                        <h3 class="panel-title pull-left icon-edit icon-large" style="padding-top: 7.5px;"> Listado</h3>                  
                    </div>                  
                    <div class='panel panel-default grid'>
                        <table class='table'>          
                            <tr>
                                <td>
                                    <div class='col-lg-12'>
                                        <table data-toggle="table" data-show-toggle="true"
                                               data-id-field="numeroRadicado"
                                               data-search="true" data-pagination="true" data-page-size="4">                                           
                                            <thead>
                                                <tr>                    
                                                    <th data-sortable="true" data-field="numeroRadicado">Radicado</th>
                                                    <th data-sortable="true" date-field="remite">Remite</th>
                                                    <th data-sortable="true" data-field="destino">Destino</th>
                                                    <th data-sortable="true" data-field="tpDocumento">Tp. Documento</th>   
                                                    <th data-sortable="true" data-field="NumDocumento">No. Documento</th>   
                                                    <th data-sortable="true" data-field="fechaDocumento">Fecha Documento</th>   
                                                    <th data-sortable="true" data-field="observaciones">Observaciones</th>
                                                    <th data-sortable="true" data-field="strEstado">Estado</th> 
                                                    <th data-sortable="true" data-field="grado">Grado</th>                                                     
                                                </tr>
                                            </thead>
                                            <tbody>                
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datos']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
                                                    <tr>                                                                                                  
                                                        <td><?php echo $_smarty_tpl->tpl_vars['r']->value['Radicado'];?>
</td> 
                                                        <td><?php echo $_smarty_tpl->tpl_vars['r']->value['remite'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['r']->value['destino'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['r']->value['tpDocumento'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['r']->value['NumDocumento'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['r']->value['fechaDocumento'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['r']->value['observaciones'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['r']->value['strEstado'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['r']->value['grado'];?>
</td>
                                                        </td>                                                
                                                    </tr>                        
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                    
                                            </tbody>
                                        </table>   
                                    </div>             
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
