<?php
// verifico se nao esta logado 
if(!Login::Logado()):
    
     Login::AcessoNegado();
     Rotas::Redirecionar(2, Rotas::pag_ClienteLogin());

     exit();
    // caso esteja logado finaliza a compra  
    else: 
    

 // caso exista mostro as informações     
if(isset($_SESSION['PRO'])): 
    
        // verifico se existe o valor do frete 
        if(!isset($_SESSION['PED']['frete'])):
            exit('<h4 class="alert alert-danger">Erro na operação, valor do frete incorreto, escolha o frete na tela do carrinho</h4>');
        endif;
    
         
        // objeto template
        $smarty = new Template();
        // objeto carrinho
        $carrinho = new Carrinho();
        
        // criando um COD para a referencia e cod pedido 
        $ref_cod_pedido = date('ymdHis') . $_SESSION['CLI']['cli_id'];
        
        // verifico se tem a sessão de pedido
         if(!isset($_SESSION['PED']['pedido'])):
    
               $_SESSION['PED']['pedido'] = $ref_cod_pedido;
         endif;
// verifico se nao tem a referencia, e gero uma nova
          if(!isset($_SESSION['PED']['ref'])):
    
              $_SESSION['PED']['ref'] = $ref_cod_pedido;
        endif;

        // passando variaveis para usar no fechamento do pedido 
        $pedido = new Pedidos();
         
        $cliente = $_SESSION['CLI']['cli_id'];
        $cod     = $_SESSION['PED']['pedido'];
        $ref     = $_SESSION['PED']['ref'];
        $frete   = $_SESSION['PED']['frete'];
        
        
        
         // passo variaveis pro template 
        $smarty->assign('PRO', $carrinho->GetCarrinho());
        $smarty->assign('PAG_CARRINHO_ALTERAR', Rotas::pag_CarrinhoAlterar());
        $smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()) );
        $smarty->assign('TOTAL_FRETE', Sistema::MoedaBR($_SESSION['PED']['total_com_frete']));
        $smarty->assign('FRETE', Sistema::MoedaBR($frete) );
        $smarty->assign('TOTAL_US', $carrinho->GetTotal());
        $smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
        $smarty->assign('TEMA', Rotas::get_SiteTEMA());
        $smarty->assign('NOME_CLIENTE', $_SESSION['CLI']['cli_nome']);
        $smarty->assign('PAG_MINHA_CONTA', Rotas::pag_CLientePedidos());
        $smarty->assign('SITE_NOME', Config::SITE_NOME);
        $smarty->assign('SITE_HOME', Rotas::get_SiteHOME());
                            
        
        
          // envio de email ---deve ficar dentro do IF  $pedido->PedidoGravar ------------
        $email = new EnviarEmail();

        $destinatarios = array(Config::SITE_EMAIl_ADM,$_SESSION['CLI']['cli_email']);
        $assunto       ='Pedido loja teste 2017 - ' . Sistema::DataAtualBR();
        $msg           = $smarty->fetch('email_compra.tpl');
        
      //  $email->Enviar($assunto, $msg, $destinatarios);
        
        
         // gravo o pedido no banco ----------------
               
        if($pedido->PedidoGravar($cliente, $cod, $ref,$frete)):
            
             // pagamento PS
            $pag = new PagamentoPS();
            $pag->Pagar($_SESSION['CLI'], $_SESSION['PED'], $carrinho->GetCarrinho());
            
          
             // limpa a sessão do pedido e dos itens do carrinho
       // $pedido->LimparSessoes();
        
        endif;  //fim de gravar pedido 
       
        
        // chamo o template 
        $smarty->display('pedido_finalizar.tpl');
        
        //$smarty->display('email_compra.tpl');



else:
    // caso o carrinho estiver vazio, volto para página de produtos
     echo '<h4 class="alert alert-danger"> Sem produtos no carrinho</h4>';
    Rotas::Redirecionar(1, Rotas::pag_Produtos());
        
endif;



// fim da verificação de logado ou não 
endif;