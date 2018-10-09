<?php
/* Smarty version 3.1.31, created on 2018-10-09 01:21:41
  from "H:\wamp64\www\crud\adm\view\adm_senha.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bbc2cd5d08702_62118522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0ece98b8a3bc06b8685283773ac896a382fa309' => 
    array (
      0 => 'H:\\wamp64\\www\\crud\\adm\\view\\adm_senha.tpl',
      1 => 1539009387,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbc2cd5d08702_62118522 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3 class="text-center">Alteração de senha de acesso</h3>

<form name="alterarsenha" method="post" action="">

    <section>
        <div class="col-md-4"></div>

        <div class="col-md-4">
            <label>Digite sua senha atual</label>

            <input type="password" name="adm_senha_atual" id="adm_senha_atual" class="form-control" required>

            <label>Digite sua nova senha</label>

            <input type="password" name="adm_senha" id="adm_senha" class="form-control" required>
            <br>

            <button type="submit" class="btn btn-success btn-block"> Alterar</button>
        </div>

        <div class="col-md-4">

        </div>

    </section>

</form><?php }
}
