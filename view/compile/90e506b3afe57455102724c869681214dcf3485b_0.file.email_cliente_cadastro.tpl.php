<?php
/* Smarty version 3.1.31, created on 2018-10-07 22:32:59
  from "H:\wamp64\www\loja\view\email_cliente_cadastro.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bbab3cb9b11c0_87112204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90e506b3afe57455102724c869681214dcf3485b' => 
    array (
      0 => 'H:\\wamp64\\www\\loja\\view\\email_cliente_cadastro.tpl',
      1 => 1494428440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbab3cb9b11c0_87112204 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3>Olá <?php echo $_smarty_tpl->tpl_vars['NOME']->value;?>
 , obrigado por se cadastrar em <?php echo $_smarty_tpl->tpl_vars['SITE']->value;?>
</h3>

<h3> Cadastro efetuado com sucesso,  para fazer  o login use seu email cadastrado ( <?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
 )
<br>
com a sua senha, sua senha neste momento é ( <?php echo $_smarty_tpl->tpl_vars['SENHA']->value;?>
 )

</h3>
<h3>
    Para acessar o site e sua conta basta usar este endereço <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
</a>
    
</h3><?php }
}
