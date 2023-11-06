<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-28 15:50:52
  from 'C:\AppServ\www\Correspondencia\templates\formPendiente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef902ac247189_01370914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ab4e5dc06e2821599bfa290a90aa2e014a88788' => 
    array (
      0 => 'C:\\AppServ\\www\\Correspondencia\\templates\\formPendiente.tpl',
      1 => 1593377357,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_5ef902ac247189_01370914 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_855771765ef902ac026426_87530412', 'body');
?>
 
<?php echo '<script'; ?>
 src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
/* {block 'body'} */
class Block_855771765ef902ac026426_87530412 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_855771765ef902ac026426_87530412',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <body class='main page'>
        <div id='wrapper'>
            <?php $_smarty_tpl->_subTemplateRender('file:menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <section id='tools'>
                <ul class='breadcrumb' id='breadcrumb'>
                    <li class='title'>Gestión de Documentos</li>         
                </ul>
                <div id='toolbar'>
                </div>
            </section>
            <!-- Content -->
            <div id='content'>
                <div class='panel panel-default'>
                    <div class='panel-heading'>
                        <i class='icon-edit icon-large'></i>
                        <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
          
                    </div>
                    <div class='panel-body'>
                        <div class="col-sm-12">                                                                            
                            <div class='col-lg-12'>
                                <table data-toggle="table" data-show-toggle="true"
                                       data-id-field="numeroRadicado"
                                       data-search="true" data-pagination="true" data-page-size="4">                                           
                                    <thead>
                                        <tr>                    
                                            <th data-sortable="true" data-field="numeroRadicado">Radicado</th>
                                            <th data-sortable="true" date-field="remite">Remite</th>
                                            <th data-sortable="true" data-field="tpDocumento">Tp. Documento</th>   
                                            <th data-sortable="true" data-field="usuRemite">Asignado Por</th>
                                            <th data-sortable="true" data-field="fechaIngresa">Asignado el</th>
                                            <th data-sortable="true" data-field="MensajeEnvia">Mensaje</th>                                            
                                            <th data-sortable="true" data-field="grado">Grado</th>                                                
                                        </tr>
                                    </thead>
                                    <tbody>                
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datRadicados']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
                                            <tr>                                                                                                  
                                                <td>
                                                    <form name='formR<?php echo $_smarty_tpl->tpl_vars['r']->value['numeroRadicado'];?>
' method="POST" action='formGestion.php'>
                                                        <input type='hidden' name='NoRadicado' value='<?php echo $_smarty_tpl->tpl_vars['r']->value['numeroRadicado'];?>
'>                                     
                                                        <a class="LinkGrd" title="Gestionar Documento" href='javascript:document.formR<?php echo $_smarty_tpl->tpl_vars['r']->value['numeroRadicado'];?>
.submit();'>
                                                            <?php echo $_smarty_tpl->tpl_vars['r']->value['Radicado'];?>

                                                        </a>
                                                    </form>                                                    </td> 
                                                <td><?php echo $_smarty_tpl->tpl_vars['r']->value['remite'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['r']->value['tpDocumento'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['r']->value['usuRemite'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['r']->value['fechaIngresa'];?>
</td>                                               
                                                <td><?php echo $_smarty_tpl->tpl_vars['r']->value['MensajeEnvia'];?>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>      
    </div>
<?php
}
}
/* {/block 'body'} */
}
