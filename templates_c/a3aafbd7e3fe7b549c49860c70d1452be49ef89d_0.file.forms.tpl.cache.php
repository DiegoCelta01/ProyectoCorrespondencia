<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-30 19:29:33
  from 'C:\AppServ\www\plantilla\templates\forms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed2fa6d289f18_19034285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3aafbd7e3fe7b549c49860c70d1452be49ef89d' => 
    array (
      0 => 'C:\\AppServ\\www\\plantilla\\templates\\forms.tpl',
      1 => 1590884970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5ed2fa6d289f18_19034285 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '11119023925ed2fa6d1272c3_38027633';
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12949779635ed2fa6d1e14b3_69138791', 'body');
?>

<!-- Footer -->
<!-- Javascripts -->
<?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/javascripts/application-985b892b.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- Google Analytics -->

</body>
</html>
<?php }
/* {block 'body'} */
class Block_12949779635ed2fa6d1e14b3_69138791 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_12949779635ed2fa6d1e14b3_69138791',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<body class='main page'>
  <!-- Navbar -->
  <div class='navbar navbar-default' id='navbar'>
    <a class='navbar-brand' href='#'>
      <i class='icon-beer'></i>
      Hierapolis
    </a>
    <ul class='nav navbar-nav pull-right'>
      <li class='dropdown'>
        <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
          <i class='icon-envelope'></i>
          Messages
          <span class='badge'>5</span>
          <b class='caret'></b>
        </a>
        <ul class='dropdown-menu'>
          <li>
            <a href='#'>New message</a>
          </li>
          <li>
            <a href='#'>Inbox</a>
          </li>
          <li>
            <a href='#'>Out box</a>
          </li>
          <li>
            <a href='#'>Trash</a>
          </li>
        </ul>
      </li>
      <li>
        <a href='#'>
          <i class='icon-cog'></i>
          Settings
        </a>
      </li>
      <li class='dropdown user'>
        <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
          <i class='icon-user'></i>
          <strong>John DOE</strong>
          <img class="img-rounded" src="http://placehold.it/20x20/ccc/777" />
          <b class='caret'></b>
        </a>
        <ul class='dropdown-menu'>
          <li>
            <a href='#'>Edit Profile</a>
          </li>
          <li class='divider'></li>
          <li>
            <a href="/">Sign out</a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
  <div id='wrapper'>
    <!-- Sidebar -->
    <section id='sidebar'>
      <i class='icon-align-justify icon-large' id='toggle'></i>
      <ul id='dock'>         
        <li class='active launcher'>
          <i class='icon-file-text-alt'></i>
          <a href="forms.html">Forms</a>
        </li>
        <li class='launcher'>
          <i class='icon-table'></i>
          <a href="tables.html">Tables</a>
        </li>                  
      </ul>
      <div data-toggle='tooltip' id='beaker' title='Made by lab2023'></div>
    </section>
    <!-- Tools -->
    <section id='tools'>
      <ul class='breadcrumb' id='breadcrumb'>
        <li class='title'>Formulario Principal</li>         
      </ul>
      <div id='toolbar'>

      </div>
    </section>
    <!-- Content -->
    <div id='content'>
      <div class='panel panel-default'>
        <div class='panel-heading'>
          <i class='icon-edit icon-large'></i>
          Toma de Datos Personales
        </div>
        <div class='panel-body'>
          <form style="font-weight: bold;" action="guarda_datos.php" method="post">
            <fieldset>

              <div class='form-group row'>
                <div class='col-lg-2'>
                  <label class='control-label'>Identificación</label>
                  <input class='form-control' placeholder='Número Identificación' type='text'>
                </div>
                <div class='col-lg-4'>
                  <label class='control-label'>Nombres</label>
                  <input class='form-control' placeholder='Nombres' type='text'>
                </div>
                <div class='col-lg-4'>
                  <label class='control-label'>Apellidos</label>
                  <input class='form-control' placeholder='Apellidos' type='text'>
                </div>
                <div class='col-lg-2'>
                  <label class='control-label'>Celular</label>
                  <input class='form-control' placeholder='Teléfono Celular' type='text'>
                </div>                
              </div>

              <div class='form-group row'>
                <div class='col-lg-4'>
                  <label class='control-label'>Correo</label>
                  <input class='form-control' placeholder='Correo Electrónico' type='text'>
                </div>
                <div class='col-lg-3'>
                  <label class='control-label'>Barrio</label>
                  <select class='form-control'>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class='col-lg-3'>
                  <label class='control-label'>Localidad</label>
                  <select class='form-control'>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>                
                </div>
                <div class='col-lg-1'>
                  <label class='control-label'>Edad</label>
                  <input class='form-control' type="number" min="1" max="100" placeholder='Edad' type='text'>
                </div>
                <div class='col-lg-1'>
                  <label class='control-label'>Temperatura</label>
                  <input class='form-control' placeholder='Temperatura'  type='text'>
                </div>
              </div>

              <div class='form-group'>
               <div class='col-lg-8'>
                <div class='alert alert-info'>¿Tienes sensación de falta de aire de inicio brusco (en ausencia de cualquier otra patología que justifique este síntoma)?</div>
              </div>
              <div class='col-lg-2 alert alert-info'>
               <label class="radio-inline"><input type="radio" name="dificultad" value="1">Si</label>
               <label class="radio-inline"><input type="radio" name="dificultad" value="2">No</label>
             </div>
           </div>


           <div class='form-group'>
             <div class='col-lg-8'>
              <div class='alert alert-info text-right'>¿Tienes fiebre de difícil control por más de 3 días? (+ 38°C)</div>
            </div>
            <div class='col-lg-2 alert alert-info'>
             <label class="radio-inline"><input type="radio" name="fiebre" checked>Si</label>
             <label class="radio-inline"><input type="radio" name="fiebre">No</label>
           </div>
         </div>


         <div class='form-group'>
           <div class='col-lg-8'>
             <div class='alert alert-info text-right'>¿Tienes tos seca y persistente?</div>
           </div>
           <div class='col-lg-2 alert alert-info'>
             <label class="radio-inline"><input type="radio" name="tos" checked>Si</label>
             <label class="radio-inline"><input type="radio" name="tos">No</label>
           </div>
         </div>

         <div class='form-group'>
           <div class='col-lg-8'>
            <div class='alert alert-info text-right'>¿Tienes sensación de fatiga o cansancio muscular?</div>
          </div>
          <div class='col-lg-2 alert alert-info'>
           <label class="radio-inline"><input type="radio" name="cansancio" checked>Si</label>
           <label class="radio-inline"><input type="radio" name="cansancio">No</label>
         </div>
       </div>

       <div class='form-group'>
         <div class='col-lg-8'>
          <div class='alert alert-info text-right'>¿Tienes secreciones nasales?</div>
        </div>
        <div class='col-lg-2 alert alert-info'>
         <label class="radio-inline"><input type="radio" name="secreciones" checked>Si</label>
         <label class="radio-inline"><input type="radio" name="secreciones">No</label>
       </div>
     </div>


     <div class='form-group'>
       <div class='col-lg-8'>
        <div class='alert alert-info text-right'>¿Tienes dolor de garganta o dolor de cabeza?</div>
      </div>
      <div class='col-lg-2 alert alert-info'>
       <label class="radio-inline"><input type="radio" name="dolor" checked>Si</label>
       <label class="radio-inline"><input type="radio" name="dolor">No</label>
     </div>
   </div>

   <div class='form-group'>
     <div class='col-lg-8'>
      <div class='alert alert-info text-right'>¿Tienes pérdida del olfato y/o el gusto?</div>
    </div>
    <div class='col-lg-2 alert alert-info'>
     <label class="radio-inline"><input type="radio" name="perdida" checked>Si</label>
     <label class="radio-inline"><input type="radio" name="perdida">No</label>
   </div>
 </div>

 <div class='form-group'>
   <div class='col-lg-8'>
    <div class='alert alert-info text-right'>¿Tienes sensación de malestar general?</div>
  </div>
  <div class='col-lg-2 alert alert-info'>
   <label class="radio-inline"><input type="radio" name="malestar" checked>Si</label>
   <label class="radio-inline"><input type="radio" name="malestar">No</label>
 </div>
</div>

<div class='form-group'>
 <div class='col-lg-8'>
  <div class='alert alert-info text-right'>¿Tienes trastornos gástricos o intestinales (náuseas, vómito, diarrea)</div>
</div>
<div class='col-lg-2 alert alert-info'>
 <label class="radio-inline"><input type="radio" name="nauseas" checked>Si</label>
 <label class="radio-inline"><input type="radio" name="nauseas">No</label>
</div>
</div>



<div class='form-group'>
 <div class='col-lg-8'>
  <div class='alert alert-info text-right'>¿Conoce y aplica la guía de limpieza y desinfección de sus manos para prevenir el contagio de COVID-19?</div>
</div>
<div class='col-lg-2 alert alert-info'>
 <label class="radio-inline"><input type="radio" name="manos" checked>Si</label>
 <label class="radio-inline"><input type="radio" name="manos">No</label>
</div>
</div>



<div class='form-group'>
 <div class='col-lg-8'>
  <div class='alert alert-info text-right'>Conoce y aplica las medidas preventivas para evitar el contagio del COVID-19</div>
</div>
<div class='col-lg-2 alert alert-info'>
 <label class="radio-inline"><input type="radio" name="medidas" checked>Si</label>
 <label class="radio-inline"><input type="radio" name="medidas">No</label>
</div>
</div>

<div class='form-group'>
 <div class='col-lg-8'>
  <div class='alert alert-info text-right'>¿Le ha sido entregado el KIT DE BIOSEGURIDAD EMERGENTE para prevenir el contagio de COVID- 19 y hace uso de él? 
  </div>  
</div>
<div class='col-lg-2 alert alert-info'>
 <label class="radio-inline"><input type="radio" id="bioseguridad" value="1">Si</label>
 <label class="radio-inline"><input type="radio" id="bioseguridad" value="2">No</label>
</div>
</div>


</fieldset>

<div class='form-actions'>
  <div class='col-lg-8'>
</div>
  <button class='btn btn-primary' type='submit'>Guardar Información</button>
   <button class='btn btn-danger' type='button' onclick="funcNegacion();return false;">Cancelar</button>
</div>
</div>
</form>




</div>
</div>
<?php
}
}
/* {/block 'body'} */
}
