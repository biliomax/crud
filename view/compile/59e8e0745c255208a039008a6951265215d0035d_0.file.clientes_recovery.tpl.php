<?php
/* Smarty version 3.1.31, created on 2018-10-09 12:31:41
  from "H:\wamp64\www\crud\view\clientes_recovery.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bbcc9dd770029_48774534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59e8e0745c255208a039008a6951265215d0035d' => 
    array (
      0 => 'H:\\wamp64\\www\\crud\\view\\clientes_recovery.tpl',
      1 => 1494435360,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbcc9dd770029_48774534 (Smarty_Internal_Template $_smarty_tpl) {
?>

<h4 class="text-center">Digite seu email cadatrado para receber uma nova senha </h4>
<hr>

<form name="recuperarsenha" method="post" action="">
    
    <section>
        <div class="col-md-4"></div>
        
        <div class="col-md-4">
            <label>Digite seu email cadastrado</label>
          
            <input type="email" name="cli_email" id="cli_email" class="form-control" required>
            <br>
            <button type="submit" class="btn btn-geral btn-block"> Recuperar </button>
        </div>
       
        <div class="col-md-4">
       
            
            
        </div>
        
        
        
    </section>

  

    
    
    
</form><?php }
}
