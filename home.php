<?php
/**
 * Created by PhpStorm.
 * Autor: Max Bilio
 * Date: 07/10/2018
 * Time: 20:23
 */

// instancio a classe smarty
$smarty = new Template();
// passo variaveis para o template
$smarty->assign('BANNER', Rotas::ImageLink('banner.jpg', 750,230));
// chamo o template
$smarty->display('home.tpl');

// incluo a pagina de produtos
include_once Rotas::get_Pasta_Controller() .'/produtos.php';