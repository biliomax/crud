<?php
// verifico se não tem um POST pro_id
if(!isset($_POST['pro_id']) or $_POST['pro_id'] < 1):
     echo '<h4 class="alert alert-danger">Erro na operação</h4>'; 
    
     Rotas::Redirecionar(1, Rotas::pag_Carrinho());
     exit();
endif;

// passo  o ID do produto 
$id =  (int) $_POST['pro_id'];
// objeto carrinho
$carrinho = new Carrinho();


try
{
   // chamo método carrinho add 
   $carrinho->CarrinhoADD($id); 
   
   
} catch (Exception $ex) {

    echo '<h4 class="alert alert-danger">Erro na operação</h4>';
    
}
// direciono para página de carrinho
Rotas::Redirecionar(1, Rotas::pag_Carrinho());