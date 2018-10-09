<?php
/* Smarty version 3.1.31, created on 2018-10-08 09:40:59
  from "H:\wamp64\www\loja\view\contato.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bbb505b0527d3_54720274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c192d72240faad54eb86d8c0db2836ad092be4e' => 
    array (
      0 => 'H:\\wamp64\\www\\loja\\view\\contato.tpl',
      1 => 1539002457,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbb505b0527d3_54720274 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3>Entre em conato conosco </h3>
<hr>

<form name="cadcliente" id="cadcliente" method="post" action="">

    <section class="row" id="cadastro">

        <div class="col-md-4">
            <label>Nome:</label>
            <input type="text" value="" name="cli_nome" class="form-control" minlength="3" required>
        </div>

        <div class="col-md-4">
            <label>Email:</label>
            <input type="email" value="" name="cli_email" class="form-control" required>
        </div>

        <div class="col-md-3">
            <label>Celular:</label>
            <input type="number" value="" name="cli_celular" class="form-control" required>
        </div>

    </section>

    <section class="row" id="btnenviar">

        <div class="col-md-8">
            <label>Digite sua Mensagem</label>
            <textarea class="col-md-10"></textarea>
        </div>

    </section>

    <div class="col-md-4">
        <br> <button type="submit" class="btn btn-geral btn-block"><i class="glyphicon glyphicon-ok"></i> Enviar</button>
    </div>

</form><?php }
}
