<?php
/**
 * Created by PhpStorm.
 * Autor: Max Bilio
 * Date: 05/10/2018
 * Time: 15:46
 */


/** Esse arquivo autoload é quem vai carregar as classes através da index */

// verifo  se iniciou a ssesão
if(!isset($_SESSION)):
    session_start();
endif;

// setando o meu timezone
date_default_timezone_set('America/Sao_Paulo');


// carrego o auto load
require './lib/autoload.php';

// chamo a classe  do template
$smarty =  new Template();
// trago os dados da categoria
$categorias = new Categorias();
$categorias->GetCategorias();

/** passo valores para o meu template */
$smarty->assign('H2', 'Max Bilio -  maxsoftware.000webhostapp.com');
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('SITE_NOME', Config::SITE_NOME);
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_CLIENTE_CONTA', Rotas::pag_ClienteConta());
$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('DATA', Sistema::DataAtualBR());
$smarty->assign('LOGADO', Login::Logado());
$smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());

if(Login::Logado()):
    $smarty->assign('USER', $_SESSION['CLI']['cli_nome']);
endif;


// chamo o template
$smarty->display('index.tpl');