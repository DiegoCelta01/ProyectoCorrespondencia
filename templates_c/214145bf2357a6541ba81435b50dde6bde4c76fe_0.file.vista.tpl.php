<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-30 19:07:26
  from 'C:\AppServ\www\plantilla\vista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed2f53ee740c3_61737507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '214145bf2357a6541ba81435b50dde6bde4c76fe' => 
    array (
      0 => 'C:\\AppServ\\www\\plantilla\\vista.tpl',
      1 => 1590883458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed2f53ee740c3_61737507 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html class='no-js' lang='en'>
<head>
  <meta charset='utf-8'>
  <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
  <title><?php echo $_smarty_tpl->tpl_vars['_titulo']->value;?>
</title>
  <meta content='lab2023' name='author'>
  <meta content='' name='description'>
  <meta content='' name='keywords'>
  <link href="assets/stylesheets/application-a07755f5.css" rel="stylesheet" type="text/css" />
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/images/favicon.ico" rel="icon" type="image/ico" />
</head> 
  
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
