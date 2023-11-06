<?php
/* Smarty version 3.1.34-dev-7, created on 2023-10-27 16:01:17
  from 'C:\AppServ\www\DocuSene\templates\formClave.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_653c251d95e6f9_83309019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fc944e919ee0396fc8c296b7127bd74a372778b' => 
    array (
      0 => 'C:\\AppServ\\www\\DocuSene\\templates\\formClave.tpl',
      1 => 1591400727,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_653c251d95e6f9_83309019 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1587753318653c251d947301_85216689', 'body');
?>

</body>
</html><?php }
/* {block 'body'} */
class Block_1587753318653c251d947301_85216689 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1587753318653c251d947301_85216689',
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
        <li class='title'>Modificar Clave</li>         
      </ul>
      <div id='toolbar'>
      </div>
    </section>

    <div id='content'>
      <div class='panel panel-default'>
        <div class='panel-heading clearfix'>
          <h3 class="panel-title pull-left icon-edit icon-large" style="padding-top: 7.5px;"> Modificar Clave: <?php echo $_smarty_tpl->tpl_vars['nomUsu']->value;?>
</h3> </div>                  
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
                <h4 style="color: #1cbc9e;"><?php echo $_smarty_tpl->tpl_vars['strMensaje']->value;?>
</h4>                  
              </div> 
            </div>           

          </div>  

        </form>  

      </div>           
    </div>
  </div>                                    
  <?php
}
}
/* {/block 'body'} */
}
