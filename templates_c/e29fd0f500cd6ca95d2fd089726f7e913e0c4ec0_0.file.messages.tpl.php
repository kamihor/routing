<?php
/* Smarty version 3.1.39, created on 2021-08-31 20:36:02
  from 'D:\xampp\htdocs\routing\app\views\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612e7692160326_49846189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e29fd0f500cd6ca95d2fd089726f7e913e0c4ec0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\routing\\app\\views\\templates\\messages.tpl',
      1 => 1630428173,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612e7692160326_49846189 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['messages']->value->isError()) {?>
                <ol class="messbox">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
            <ul class="alt">
                <li> <?php echo $_smarty_tpl->tpl_vars['err']->value;?>
 </li>
            </ul>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ol>
            <?php }?>


        
                <?php if ($_smarty_tpl->tpl_vars['messages']->value->isInfo()) {?>
                <ol class="messbox">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
            <ul class="alt">
                <li> <?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
 </li>
            </ul>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ol>
            <?php }
}
}
