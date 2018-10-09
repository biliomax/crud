<?php
// chamo o objeto template
$smarty =  new Template();
// objeto produtos
$produtos = new Produtos();
       
        // verifico se passei ID da categoria se passei mostro itens da categoria
        if(isset(Rotas::$pag[1])):
            $produtos->GetProdutosCate((int)Rotas::$pag[1]);
  
        else:
            // se nao passei mostro  tudo
            $produtos->GetProdutos();
        endif;

 ///echo $produtos->GetItens()['pro_nome'];
        
// passo variavies para o template TPL        
$smarty->assign('PRO', $produtos->GetItens());
$smarty->assign('PRO_INFO', Rotas::pag_ProdutosInfo());
$smarty->assign('PRO_TOTAL', $produtos->TotalDados());

$smarty->assign('PAGINAS', $produtos->ShowPaginacao());



//echo Rotas::get_ImageURL();


// chamo o template
$smarty->display('produtos.tpl');



echo '<pre>';
//var_dump($produtos->GetItens());
echo '</pre>';
