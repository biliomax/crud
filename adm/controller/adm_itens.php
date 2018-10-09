<?php
// chamar objeto do template
$smarty =  new Template();


// se nao existe post do pedido
if(!isset($_POST['cod_pedido'])):
  //  Rotas::Redirecionar(1, Rotas::pag_CLientePedidos());
    
    exit();
endif;

//chamo a classe de itens
$itens =  new Itens();
// pego via post o cod pedido 
$pedido = filter_var($_POST['cod_pedido'],FILTER_SANITIZE_STRING);

// executo a minha SQL
$itens->GetItensPedido($pedido);

// passando dados para o template 
$smarty->assign('ITENS', $itens->GetItens());
$smarty->assign('TOTAL', $itens->GetTotal());


$smarty->display('adm_itens.tpl');


//echo '<pre>';
//var_dump($itens->GetItens());
//echo '</pre>';



