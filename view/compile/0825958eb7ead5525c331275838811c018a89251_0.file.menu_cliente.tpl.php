<?php
/* Smarty version 3.1.31, created on 2018-10-09 03:24:36
  from "H:\wamp64\www\crud\view\menu_cliente.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bbc49a4f421a0_34262388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0825958eb7ead5525c331275838811c018a89251' => 
    array (
      0 => 'H:\\wamp64\\www\\crud\\view\\menu_cliente.tpl',
      1 => 1539066274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbc49a4f421a0_34262388 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h4 class="text-center text-danger"> Olá <b><?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
</b>, seja bem vindo! O que deseja fazer agora?</h4>
<section class="row">

    <div class="text-center">

        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTA']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-lock"></i> Minha Conta</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTESAPAGAR']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-trash"></i> Apagar Cliente</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_DADOS']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-edit"></i> Meus Dados </a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
" class="btn btn-danger"><i class="glyphicon glyphicon-log-out"></i> Sair </a>

    </div>

</section>
<hr>
<?php }
}
