<?php

// echo count($_SESSION['PRO']);
 // caso exista mostro as informações     
if(count($_SESSION['PRO'] > 0)):      
    
        // chamando objeto do template
        $smarty = new Template();
      
       // objeto  da classe carrinho 
        $carrinho = new Carrinho();
  
        // passando alguma variaveis para o template 
        $smarty->assign('PRO', $carrinho->GetCarrinho());
        $smarty->assign('PAG_CARRINHO_ALTERAR', Rotas::pag_CarrinhoAlterar());
        $smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()) );
      
        $smarty->assign('PESO', number_format($carrinho->GetPeso(),3,'.','' ));
       
        $smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
        $smarty->assign('PAG_CONFIRMAR', Rotas::pag_PedidoConfirmar());


        // mostrando  o template 
        $smarty->display('carrinho.tpl');

// caso a contagem do array $_SESSION['PRO'] não seja maior que zero
else:
     echo '<h4 class="alert alert-danger"> Sem produtos no carrinho</h4>';
   // Rotas::Redirecionar(1, Rotas::pag_Produtos());
        
endif;




