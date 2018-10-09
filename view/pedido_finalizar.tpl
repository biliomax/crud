<h3 >Pedido Finalizado</h3>


<!--  table listagem de itens -->
<section class="row ">
   
    <center>
      
        <div class="alert alert-success"> Pedido finalizado com sucesso </div>    
        
    <table class="table table-bordered" style="width: 95%;">
       
          
        
        {foreach from=$PRO item=P}
        
        <tr>
            
          <!---- <td> <img src="{$P.pro_img}" alt=" {$P.pro_nome} "> </td> --->
            <td>  {$P.pro_nome}  </td>
            <td>  {$P.pro_valor} </td>
            <td>  {$P.pro_qtd}   </td>
            <td>  {$P.pro_subTotal} </td>
          
            
            
        </tr>
        
        {/foreach}
        
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
               Total : R$ {$TOTAL}
               </h4>
               <h4>
               Frete : R$ {$FRETE}
               </h4>
               <h4>
               Final : R$ {$TOTAL_FRETE}
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
    code: '{$PS_COD}'
    }, {
    success : function(transactionCode) {
      alert('Transação efetiva - ' + transactionCode);
        window.location ='{$PAG_RETORNO}/{$REF}';
    },
    abort : function() {
       alert('Erro no processo de pagamento');
         window.location ='{$PAG_ERRO}/{$REF}';
    }
});     
                        
                        ">
                    
                    
                    
                    
                    Pagar Agora via PagSeguro</button>
                
                
                   <img src="{$TEMA}/images/logo-pagseguro.png"  alt=""> 
                   <script type="text/javascript" src="{$PS_SCRIPT}"></script>
                
            </div>
            <div class="col-md-4">
                
            </div>
         
            
        </section>
          
                   
                   <br>
            
            
            
            <br>
            <br>
            <br>