<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-01 17:04:51
  from 'C:\AppServ\www\sintomas\templates\vista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed57b831c5cf8_37338411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e83f2271e2828c243e6f315b836f8c73f823f53e' => 
    array (
      0 => 'C:\\AppServ\\www\\sintomas\\templates\\vista.tpl',
      1 => 1586198447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed57b831c5cf8_37338411 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es">
<head>
  <link rel="stylesheet" href="/<?php echo $_smarty_tpl->tpl_vars['dir_self']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['dir_css']->value;?>
" type="text/css" />
  <?php echo '<script'; ?>
 language="javascript" src="/<?php echo $_smarty_tpl->tpl_vars['dir_self']->value;?>
/ajax.js" type="text/javascript"><?php echo '</script'; ?>
>
  <link rel="stylesheet" href="/<?php echo $_smarty_tpl->tpl_vars['dir_self']->value;?>
/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="/<?php echo $_smarty_tpl->tpl_vars['dir_self']->value;?>
/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/<?php echo $_smarty_tpl->tpl_vars['dir_self']->value;?>
/bootstrap/css/bootstrap-theme.min.css">
  <?php echo '<script'; ?>
 src="/<?php echo $_smarty_tpl->tpl_vars['dir_self']->value;?>
/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/<?php echo $_smarty_tpl->tpl_vars['dir_self']->value;?>
/bootstrap/js/bootstrap.js"><?php echo '</script'; ?>
>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/<?php echo $_smarty_tpl->tpl_vars['dir_self']->value;?>
/js/select_dependientes.js"><?php echo '</script'; ?>
>  
  
  <style type="text/css">
  body {
    margin-left: 0px;
    margin-top: 0px;
    margin-right: 0px;  
    margin-bottom: 0px;
  }
</style>

<?php if (!empty($_smarty_tpl->tpl_vars['head']->value)) {
echo $_smarty_tpl->tpl_vars['head']->value;
}?>
</head>
<body <?php if (!empty($_smarty_tpl->tpl_vars['en_body']->value)) {
echo $_smarty_tpl->tpl_vars['en_body']->value;
}?>>
  <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['navegador']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
</body>
</html><?php }
}
