<?php
/* Smarty version 3.1.31, created on 2018-10-08 12:58:34
  from "H:\wamp64\www\loja\view\produtos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bbb7eaa427461_78424024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b2fe8fa6346f89fc7b00f062ba921b50297d085' => 
    array (
      0 => 'H:\\wamp64\\www\\loja\\view\\produtos.tpl',
      1 => 1539014312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbb7eaa427461_78424024 (Smarty_Internal_Template $_smarty_tpl) {
?>
<hr>

<!--     exibe mensagem caso nao encontre produtos --->
<?php if ($_smarty_tpl->tpl_vars['PRO_TOTAL']->value < 1) {?>
    <h4 class="alert alert-danger">Ops... Nada foi encontrado </h4>
<?php }?>

<!--  começa lista de produtos  ---->
<section id="produtos" class="row">

    <ul style="list-style: none">

        
        <?php $_smarty_tpl->_assignInScope('i', 1);
?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>


        
        <?php if ($_smarty_tpl->tpl_vars['i']->value == 1) {?>
        <div class="row" id="pularliha">
            <?php }?>
            <li class="col-md-6">

                <div class="thumbnail">

                        <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="">

                        <div class="caption row">

                            <h4 class="text-center"> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 </h4>

                        </div>

                    </a>

                </div>

            </li>

            
            <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);
?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </div>

    </ul>

</section><?php }
}
