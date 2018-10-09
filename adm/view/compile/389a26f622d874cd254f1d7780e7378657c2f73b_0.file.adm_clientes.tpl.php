<?php
/* Smarty version 3.1.31, created on 2018-10-09 01:19:03
  from "H:\wamp64\www\crud\adm\view\adm_clientes.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bbc2c376edb40_47260915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '389a26f622d874cd254f1d7780e7378657c2f73b' => 
    array (
      0 => 'H:\\wamp64\\www\\crud\\adm\\view\\adm_clientes.tpl',
      1 => 1539008115,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbc2c376edb40_47260915 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h4 class="text-center">Gerenciar Clientes </h4>
<hr>

<!--- listando clientes ---->
<section class="row">

    <center>
        <table class="table table-bordered">

            <tr class="text-success bg-success">
                <td></td>
                <td>Nome</td>
                <td>Email</td>
                <td>Fone</td>
                <td>Data cad</td>
                <td></td>

            </tr>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CLIENTES']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
                <tr>
                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PEDIDOS']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_id'];?>
 " class="btn btn-info">Pedidos</a></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['C']->value['cli_sobrenome'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_email'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_fone'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_data_cad'];?>
</td>
                    <td>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_EDITAR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_id'];?>
" class="btn btn-info"> Ver </a>
                    </td>

                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


        </table>
    </center>

</section><?php }
}
