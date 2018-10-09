<?php
/* Smarty version 3.1.31, created on 2018-10-09 02:18:35
  from "H:\wamp64\www\crud\view\clientes_apagar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bbc3a2b456cd9_23912764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6256fe1f85f91570429d486424fdeb1518579442' => 
    array (
      0 => 'H:\\wamp64\\www\\crud\\view\\clientes_apagar.tpl',
      1 => 1539062305,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbc3a2b456cd9_23912764 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3>Excluir Cliente</h3>
<hr>

<form name="cadcliente" id="cadcliente" method="post" action="">

    <section class="row" id="cadastro">

        <div class="col-md-4">
            <label>Nome:</label>
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_NOME']->value;?>
" name="cli_nome" class="form-control" minlength="3" required>
        </div>

        <div class="col-md-4">
            <label>Sobrenome:</label>
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_SOBRENOME']->value;?>
" name="cli_sobrenome" class="form-control" minlength="3"
                   required>
        </div>

        <div class="col-md-3">
            <label>Data Nasc:</label>
            <input type="date" value="<?php echo $_smarty_tpl->tpl_vars['CLI_DATA_NASC']->value;?>
" name="cli_data_nasc" class="form-control" required>
        </div>

        <div class="col-md-2">
            <label>RG:</label>
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_RG']->value;?>
" name="cli_rg" class="form-control" required>
        </div>

        <div class="col-md-2">
            <label>CPF:</label>
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CPF']->value;?>
" name="cli_cpf" class="form-control" minlength="11" maxlength="11"
                   required readonly>
        </div>

        <div class="col-md-2">
            <label>DDD:</label>
            <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['CLI_DDD']->value;?>
" name="cli_ddd" class="form-control" min="10" max="99" required>
        </div>

        <div class="col-md-3">
            <label>Fone:</label>
            <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['CLI_FONE']->value;?>
" name="cli_fone" class="form-control" required>
        </div>

        <div class="col-md-3">
            <label>Celular:</label>
            <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CELULAR']->value;?>
" name="cli_celular" class="form-control" required>
        </div>

        <div class="col-md-6">
            <label>Endereço:</label>
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_ENDERECO']->value;?>
" name="cli_endereco" class="form-control" minlength="3" required>
        </div>

        <div class="col-md-2">
            <label>Numero:</label>
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_NUMERO']->value;?>
" name="cli_numero" class="form-control" required>
        </div>

        <div class="col-md-4">
            <label>Bairro:</label>
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_BAIRRO']->value;?>
" name="cli_bairro" class="form-control" minlength="3" required>
        </div>

        <div class="col-md-4">
            <label>Cidade:</label>
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CIDADE']->value;?>
" name="cli_cidade" class="form-control" minlength="3" required>
        </div>

        <div class="col-md-2">
            <label>UF:</label>
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_UF']->value;?>
" name="cli_uf" class="form-control" maxlength="2" minlength="2"
                   required>
        </div>

        <div class="col-md-2">
            <label>Cep:</label>
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CEP']->value;?>
" name="cli_cep" class="form-control" minlength="8" maxlength="8"
                   required>
        </div>

        <div class="col-md-4">
            <label>Email:</label>
            <input type="email" value="<?php echo $_smarty_tpl->tpl_vars['CLI_EMAIL']->value;?>
" name="cli_email" class="form-control" required>
        </div>

        <div class="col-md-4">
            <label>Senha:</label>
            <input type="password" value="<?php echo $_smarty_tpl->tpl_vars['CLI_PASS']->value;?>
" name="cli_senha" class="form-control" required readonly>
        </div>

        <div class="col-md-4">
            <label>Divida:</label>
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_DIVIDA']->value;?>
" name="cli_divida" class="form-control" required>
        </div>

    </section>
    <br>
    <br>

    <section class="row" id="btngravar">

        <div class="col-md-4"></div>

        <div class="col-md-4">
            <label>Digite sua senha atual por segurança<br></label>
            <input type="password" name="cli_senha" id="cli_senha" class="form-control" required>
            <br>
            <button type="submit" class="btn btn-danger btn-block "><i class="glyphicon glyphicon-remove"></i> Deletar Cliente
            </button>
        </div>

        <div class="col-md-4"></div>

    </section>

</form>

<br>
<br>
<br>
<br><?php }
}
