<?php
/* Smarty version 3.1.31, created on 2018-10-07 22:32:21
  from "H:\wamp64\www\loja\view\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bbab3a5a12188_13847437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '110f963a32eda2ad571412ec88f0b8caac353943' => 
    array (
      0 => 'H:\\wamp64\\www\\loja\\view\\login.tpl',
      1 => 1538947667,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbab3a5a12188_13847437 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['LOGADO']->value == true) {?>

<?php } else { ?>
    <section class="row" id="fazerlogin">

        <form name="cliente_login" method="post" action="">

            <div class="col-md-4 text-center">

                Não tem cadastro? <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CADASTRO']->value;?>
" class=""><i class="glyphicon glyphicon-pencil"></i> Me
                    Cadastrar</a>


                Esqueceu a senha? <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_RECOVERY']->value;?>
" class=" "><i class="glyphicon glyphicon-question-sign"></i>
                    Esqueci a Senha</a>


            </div>

            <!---  aqui estão os campos --->
            <div class="col-md-4">


                <div class="form-group">
                    <label></i> Email: </label>
                    <input type="email" class="form-control " name="txt_email" value="" placeholder="Digite seu email"
                           required autocomplete="off">

                </div>


                <div class="form-group">
                    <label> Senha: </label>
                    <input type="password" class="form-control " name="txt_senha" value=""
                           placeholder="Digite sua senha" required>

                </div>


                <div class="form-group">

                    <button class="btn btn-geral btn-block btn-lg"><i class="glyphicon glyphicon-log-in"></i> Entrar
                    </button>


                </div>
                <div class="form-group">

                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CADASTRO']->value;?>
" class="btn btn-default "><i class="glyphicon glyphicon-pencil"></i> Me
                        Cadastrar</a>


                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_RECOVERY']->value;?>
" class="btn btn-default "><i class="glyphicon glyphicon-question-sign"></i>
                        Esqueci a Senha</a>


                </div>


            </div><!-- fim dos campos --->


            <div class="col-md-4 text-center">


            </div>

        </form>


    </section>
<?php }
}
}
