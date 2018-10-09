<?php
/* Smarty version 3.1.31, created on 2018-10-08 12:27:37
  from "H:\wamp64\www\loja\view\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bbb7769a642f5_47455942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00306f0c38d66d0249ea4c262a5d2e8d2f71fe86' => 
    array (
      0 => 'H:\\wamp64\\www\\loja\\view\\index.tpl',
      1 => 1539012455,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbb7769a642f5_47455942 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>

<html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['SITE_NOME']->value;?>
</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/jquery-2.2.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <!-- meu aquivo pessoal de CSS-->
    <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/tema.css" rel="stylesheet" type="text/css"/>
    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->

</head>
<body>

<!-- começa  o container geral -->
<div class="container-fluid">

    <!-- começa a div topo -->
    <div class="row" id="topo">

        <div class="container">

            <div class="col-md-6 text-right">

                <?php if ($_smarty_tpl->tpl_vars['LOGADO']->value == true) {?>
                    Olá: <?php echo $_smarty_tpl->tpl_vars['USER']->value;?>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
" class="btn btn-geral"><i class="glyphicon glyphicon-log-out"></i> Sair </a>
                <?php }?>

            </div>

        </div>

    </div><!-- fim da div topo -->

    <!-- começa a barra MENU-->
    <div class="row" id="barra-menu">

        <!--começa navBAR-->
        <nav class="navbar navbar-inverse">

            <!-- container navBAr-->
            <div class="container">
                <!-- header da navbar-->
                <div class="navbar-header">
                    <!-- botao que mostra e esconde a navbar-->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div><!--fim header navbar-->

                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav">

                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
"><i class="glyphicon glyphicon-home"></i> Home </a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_CONTA']->value;?>
"><i class="glyphicon glyphicon-user"></i> Minha Conta </a>
                        </li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTATO']->value;?>
"><i class="glyphicon glyphicon-envelope"></i> Contato </a></li>
                    </ul>

                </div><!-- fim navbar collapse-->

            </div> <!--fim container navBar-->

        </nav><!-- fim da navBar-->


    </div> <!-- fim barra menu-->

    <!-- começa DIV conteudo-->
    <div class="row" id="conteudo">

        <div class="container">

            <!-- coluna da esquerda -->
            <div class="col-md-2" id="lateral">

                <div class="list-group">
                    <span class="list-group-item active"> Pra Você</span>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
" class="list-group-item">
                        <span class="glyphicon glyphicon-menu-right"></span> Emprestimo</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
" class="list-group-item">
                        <span class="glyphicon glyphicon-menu-right"></span> Saldar Divida</a>

                </div><!--fim da list group-->

            </div> <!-- finm coluna esquerda -->

            <!-- coluna direita CONtEUDO CENTRAL -->
            <div class="col-md-10">

                <ul class="breadcrumb">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
"><i class="glyphicon glyphicon-home"></i> Home </a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_CONTA']->value;?>
"> Cliente </a></li>
                    <li><a href="#"> Info </a></li>
                    <li><b> Hoje é <?php echo $_smarty_tpl->tpl_vars['DATA']->value;?>
 </b></li>
                </ul>
                <!-- fim do menu breadcrumb-->

                <?php 
                    Rotas::get_Pagina();
                ?>

            </div>  <!--fim coluna direita-->

        </div>

    </div><!-- fim DIV conteudo-->

    <!-- começa div rodape -->
    <div class="row" id="rodape">

        <center><h4> _ </h4></center>

        <center><h4> <?php echo $_smarty_tpl->tpl_vars['SITE_NOME']->value;?>
 </h4></center>
        <a href=""></a>
        <center><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/marca_rodape.png" alt=""></center>
    </div><!-- fim div rodape-->

</div> <!-- fim do container geral -->

</body>
</html>
<?php }
}
