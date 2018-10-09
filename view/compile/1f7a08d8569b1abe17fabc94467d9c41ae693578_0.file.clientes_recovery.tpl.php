<?php
/* Smarty version 3.1.31, created on 2018-10-07 22:34:53
  from "H:\wamp64\www\loja\view\clientes_recovery.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bbab43d2aa430_52272925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f7a08d8569b1abe17fabc94467d9c41ae693578' => 
    array (
      0 => 'H:\\wamp64\\www\\loja\\view\\clientes_recovery.tpl',
      1 => 1494435360,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbab43d2aa430_52272925 (Smarty_Internal_Template $_smarty_tpl) {
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
