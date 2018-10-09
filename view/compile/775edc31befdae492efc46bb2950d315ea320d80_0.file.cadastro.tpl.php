<?php
/* Smarty version 3.1.31, created on 2018-10-09 12:22:14
  from "H:\wamp64\www\crud\view\cadastro.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bbcc7a6829d64_76216505',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '775edc31befdae492efc46bb2950d315ea320d80' => 
    array (
      0 => 'H:\\wamp64\\www\\crud\\view\\cadastro.tpl',
      1 => 1539098530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbcc7a6829d64_76216505 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3>Cadastro de cliente</h3>
<hr>

<!--- dados do cadastro -->
<form name="cadcliente" id="cadcliente" method="post" action="">

    <section class="row" id="cadastro">

        <div class="col-md-4">
            <label>Nome:</label>
            <input type="text" name="cli_nome" class="form-control" minlength="3" required>
        </div>

        <div class="col-md-4">
            <label>Sobrenome:</label>
            <input type="text" name="cli_sobrenome" class="form-control" minlength="3" required>
        </div>

        <div class="col-md-3">
            <label>Data Nasc:</label>
            <input type="date" name="cli_data_nasc" class="form-control" required>
        </div>

        <div class="col-md-2">
            <label>RG:</label>
            <input type="text" name="cli_rg" class="form-control" required>
        </div>

        <div class="col-md-2">
            <label>CPF:</label>
            <input type="text" name="cli_cpf" class="form-control" minlength="11" maxlength="11" required>
        </div>

        <div class="col-md-2">
            <label>DDD:</label>
            <input type="number" name="cli_ddd" class="form-control" min="10" max="99" required>
        </div>

        <div class="col-md-3">
            <label>Fone:</label>
            <input type="number" name="cli_fone" class="form-control" required>
        </div>

        <div class="col-md-3">
            <label>Celular:</label>
            <input type="number" name="cli_celular" class="form-control" required>
        </div>

        <div class="col-md-6">
            <label>Endereço:</label>
            <input type="text" name="cli_endereco" class="form-control" minlength="3" required>
        </div>

        <div class="col-md-2">
            <label>Numero:</label>
            <input type="text" name="cli_numero" class="form-control" required>
        </div>

        <div class="col-md-4">
            <label>Bairro:</label>
            <input type="text" name="cli_bairro" class="form-control" minlength="3" required>
        </div>

        <div class="col-md-4">
            <label>Cidade:</label>
            <input type="text" name="cli_cidade" class="form-control" minlength="3" required>
        </div>

        <div class="col-md-1">
            <label>UF:</label>
            <input type="text" name="cli_uf" class="form-control" maxlength="2" minlength="2" required>
        </div>

        <div class="col-md-2">
            <label>Cep:</label>
            <input type="text" name="cli_cep" class="form-control" minlength="8" maxlength="8" required>
        </div>

        <div class="col-md-4">
            <label>Email:</label>
            <input type="email" name="cli_email" class="form-control" required><br>
        </div>

        <div class="col-md-4">
            <label>Senha:</label>
            <input type="password" name="cli_senha" class="form-control" required>
        </div>

        <div class="col-md-4">
            <label>Divida:</label>

            <input type="number" name="cli_divida" class="form-control" required placeholder="R$:00.000,00">
        </div>

    </section>

    <br>
    <br>

    <section class="row" id="btngravar">

        <div class="col-md-4"></div>

        <div class="col-md-4">
            <button type="submit" class="btn btn-geral btn-block "><i class="glyphicon glyphicon-ok"></i> Cadastrar
            </button>
            <br>
        </div>

        <div class="col-md-4"></div>

    </section>

</form><?php }
}
