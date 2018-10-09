<h3>Confirmar Pedido</h3>
<hr>
<!-- botoes e opções de cima -->
<section class="row">
    
    <div class="col-md-4 text-right">
        <a href="{$PAG_CARRINHO}" class="btn btn-geral" title="">Voltar ao Carrinho</a>
    </div>
    <div class="col-md-4">
        
    </div>
    <div class="col-md-4 text-right">
     
    </div>
    
</section>
    <br>

<!--  table listagem de itens -->
<section class="row ">
   
    <center>
    <table class="table table-bordered" style="width: 95%">
       
        <tr class="text-danger bg-danger">
            <td></td> 
            <td>Produto</td> 
            <td>Valor R$</td> 
            <td>X</td> 
            <td>Sub Total R$</td> 
         
            
        </tr>
     
        
        {foreach from=$PRO item=P}
        
        <tr>
            
            <td> <img src="{$P.pro_img}" alt=" {$P.pro_nome} "> </td>
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
            <div class="col-md-4 text-right text-danger bg-warning">
            <h4>
               Total : R$ {$TOTAL}
            </h4>
            <h4>
               Frete : R$ {$FRETE}
            </h4>
            <hr>
            <h4>
               Final: R$ {$TOTAL_FRETE}
            </h4>
            </div>
            
            <!-- botão de limpar-->
            <div class="col-md-4 text-right">

                  <a href="{$PAG_FINALIZAR}" class="btn btn-geral btn-lg btn-block" title=""> <i class="glyphicon glyphicon-ok"></i> Finalizar</a> 

            </div>
        </section>
                  <br>
                  <br>
                  <br>
                  <br>