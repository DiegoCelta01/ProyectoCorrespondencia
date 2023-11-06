<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-11 12:06:30
  from 'C:\AppServ\www\sintomas\templates\404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee2649688b813_67763273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44a505f7ed518aa427f1e3cf2d3af3a6fe0a4914' => 
    array (
      0 => 'C:\\AppServ\\www\\sintomas\\templates\\404.tpl',
      1 => 1591895178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee2649688b813_67763273 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Error:(</title>
        <style>
            body {
                text-align: center;
            }
            h1 { 
                font-size: 50px; text-align: center 
            }
            span[frown] { 
                transform: rotate(90deg); display:inline-block; color: #bbb;
            }
            body {
                font: 20px Constantia, 'Hoefler Text',  "Adobe Caslon Pro", Baskerville, Georgia, Times, serif;
                color: #999;
                text-shadow: 2px 2px 2px rgba(200, 200, 200, 0.5);
            }
            ::-moz-selection{
                background:#FF5E99; color:#fff; 
            }
            ::selection { 
                background:#FF5E99;
                color:#fff; 
            }
            article {
                display:block; 
                text-align: left; 
                width: 500px;
                margin: 0 auto;
            }

            a { 
                color: rgb(36, 109, 56); text-decoration:none;
            }
            a:hover { color: rgb(96, 73, 141) ;
                      text-shadow: 2px 2px 2px rgba(36, 109, 56, 0.5); 
            }
        </style>
    </head>
    <body>
        <article>
            <h1>Error</h1>
            <div>
                <p><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</p>      
            </div>    
        </article>
    </body>
</html>
<?php }
}
