<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-15 16:42:40
  from 'C:\AppServ\www\Correspondencia\templates\formDocumento.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee7eb50bce250_80234927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '044a65fb0036946029428a87ec9daeca908d72c9' => 
    array (
      0 => 'C:\\AppServ\\www\\Correspondencia\\templates\\formDocumento.tpl',
      1 => 1592257340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_5ee7eb50bce250_80234927 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17452340795ee7eb50b27588_99907528', 'body');
?>

        <!-- Footer -->
        <!-- Javascripts -->
        <?php echo '<script'; ?>
 src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"><?php echo '</script'; ?>
>
        <!-- Google Analytics -->
</body>
</html>
<?php }
/* {block 'body'} */
class Block_17452340795ee7eb50b27588_99907528 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_17452340795ee7eb50b27588_99907528',
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
                    <li class='title'>Creación de Tipos Documentales</li>         
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

                        <div class='col-lg-12'>                            

                            <div class='col-lg-4'>
                                <form style="font-weight: bold;" name="formDoucumento" id="formDoucumento" method="post">
                                    <input type="hidden" name="accion" id="accion">
                                    <input type="hidden" name="id_tipo" id="id_tipo">
                                    <fieldset>                                     
                                        <div class='form-group row'>
                                            <div class='col-md-12'>
                                                <label class='control-label'>Nombre</label>
                                                <input class='form-control text-uppercase'  required="yes" placeholder='Nombre' name="nombre" id="nombre" type='text'>
                                            </div>
                                        </div>                                                                                                                                                                                       
                                    </fieldset>
                                    <div class='form-actions'>                                
                                        <button class='btn btn-primary' type="button" id="btGuarda" onclick="creaDocumento();">Guardar Tipo Documento</button>                                       
                                    </div>                   
                                </form>
                            </div>

                            <div class='col-lg-8'>
                                <table data-toggle="table" data-show-toggle="true"
                                       data-id-field="nit"
                                       data-search="true" data-pagination="true" data-page-size="4">                                           
                                    <thead>
                                        <tr>                    
                                            <th>Accion</th>
                                            <th data-sortable="true" data-field="id_tipo">Id</th>
                                            <th data-sortable="true" date-field="nombre">Nombre</th>                                           
                                        </tr>
                                    </thead>
                                    <tbody>                
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datDocumento']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
                                            <tr>                                                  
                                                <td>
                                                    <a class="btn btn-danger" href="javascript:cargaDocumento('<?php echo $_smarty_tpl->tpl_vars['r']->value['id_tipo'];?>
')" title="Modificar">                                                        
                                                        <span class="icon icon-edit"></span>
                                                    </a>
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['r']->value['id_tipo'];?>
</td> 
                                                <td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
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
        <?php
}
}
/* {/block 'body'} */
}
