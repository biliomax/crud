<?php
/* Smarty version 3.1.31, created on 2018-10-08 02:13:02
  from "H:\wamp64\www\loja\view\pedido_finalizar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bbae75e443110_78492064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1612cd612d2aae95378ea313b084770fc176173' => 
    array (
      0 => 'H:\\wamp64\\www\\loja\\view\\pedido_finalizar.tpl',
      1 => 1496619926,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbae75e443110_78492064 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3 >Pedido Finalizado</h3>


<!--  table listagem de itens -->
<section class="row ">
   
    <center>
      
        <div class="alert alert-success"> Pedido finalizado com sucesso </div>    
        
    <table class="table table-bordered" style="width: 95%;">
       
          
        
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
        
        <tr>
            
          <!---- <td> <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt=" <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 "> </td> --->
            <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
  </td>
            <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
 </td>
            <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
   </td>
            <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>
 </td>
          
            
            
        </tr>
        
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        
    </table>
  
    </center>
        
           
</section><!-- fim da listagem itens -->
        
        <!-- botoes de baixo e valor total -->
        <section class="row">
                      
            <div class="col-md-4 text-right">
           
            </div>
            <div class="col-md-4 text-right">
          
            </div>
            
            <!-- botão de limpar-->
            <div class="col-md-4 text-right  text-danger bg-warning">

               <h4>
               Total : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>

               </h4>
               <h4>
               Frete : R$ <?php echo $_smarty_tpl->tpl_vars['FRETE']->value;?>

               </h4>
               <h4>
               Final : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL_FRETE']->value;?>

               </h4>

            </div>
            
            
        </section>
            
            
        <!--  modos de pagamento e outras informações --> 
        <section class="row">
            <h3 class="text-center"> Formas de pagamento </h3>     
            
            <div class="col-md-4">
              
            </div>
            <!-- botao de pagamento  -->
            <div class="col-md-4">
               
                <button class="btn btn-success btn-lg btn-block" onclick="
                        
                   PagSeguroLightbox({
    code: '<?php echo $_smarty_tpl->tpl_vars['PS_COD']->value;?>
'
    }, {
    success : function(transactionCode) {
      alert('Transação efetiva - ' + transactionCode);
        window.location ='<?php echo $_smarty_tpl->tpl_vars['PAG_RETORNO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
';
    },
    abort : function() {
       alert('Erro no processo de pagamento');
         window.location ='<?php echo $_smarty_tpl->tpl_vars['PAG_ERRO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
';
    }
});     
                        
                        ">
                    
                    
                    
                    
                    Pagar Agora via PagSeguro</button>
                
                
                   <img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/images/logo-pagseguro.png"  alt=""> 
                   <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PS_SCRIPT']->value;?>
"><?php echo '</script'; ?>
>
                
            </div>
            <div class="col-md-4">
                
            </div>
         
            
        </section>
          
                   
                   <br>
            
            
            
            <br>
            <br>
            <br><?php }
}
