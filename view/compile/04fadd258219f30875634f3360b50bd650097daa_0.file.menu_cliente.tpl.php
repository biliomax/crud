<?php
/* Smarty version 3.1.31, created on 2018-10-08 13:14:48
  from "H:\wamp64\www\loja\view\menu_cliente.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bbb82789a4786_25511223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04fadd258219f30875634f3360b50bd650097daa' => 
    array (
      0 => 'H:\\wamp64\\www\\loja\\view\\menu_cliente.tpl',
      1 => 1539015250,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbb82789a4786_25511223 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h4 class="text-center text-danger"> Olá <b><?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
</b>, seja bem vindo! O que deseja fazer agora?</h4>
<section class="row">

    <div class="text-center">

        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTA']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-home"></i> Minha Conta</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_PEDIDOS']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-barcode"></i> Dividas</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_DADOS']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-edit"></i> Meus Dados </a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
" class="btn btn-danger"><i class="glyphicon glyphicon-log-out"></i> Sair </a>

    </div>

</section>
<hr>
<?php }
}
