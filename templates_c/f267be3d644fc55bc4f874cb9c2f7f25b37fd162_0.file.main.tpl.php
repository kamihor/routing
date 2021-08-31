<?php
/* Smarty version 3.1.39, created on 2021-08-31 20:36:02
  from 'D:\xampp\htdocs\routing\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612e76920e53d7_17485968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f267be3d644fc55bc4f874cb9c2f7f25b37fd162' => 
    array (
      0 => 'D:\\xampp\\htdocs\\routing\\app\\views\\templates\\main.tpl',
      1 => 1630429169,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612e76920e53d7_17485968 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
    <head>
        <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    </head>

<header id="header">
    <nav>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_638077810612e76920e30d4_96178108', 'header');
?>
    
    </nav>
</header>
    
    
    <body class="is-preload">
        <div id="page-wrapper">


            <div id="main" class="wrapper style1">
                <div class="container">
                    <header class="major">
                        <h2><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</h2>
                        <p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Opis domyślny" : $tmp);?>
</p>
                    </header>
                </div>



                <div class="content-wrapper">

                    <div id="app_content" class="content">

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_275224183612e76920e47e3_70626978', 'content');
?>


                    </div>

                       
                    <footer id="footer">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2076412825612e76920e4e49_78888561', 'footer');
?>
    
                    </footer>

                </div>

            </div>
    </body>
</html>

<?php }
/* {block 'header'} */
class Block_638077810612e76920e30d4_96178108 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_638077810612e76920e30d4_96178108',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  <?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_275224183612e76920e47e3_70626978 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_275224183612e76920e47e3_70626978',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_2076412825612e76920e4e49_78888561 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_2076412825612e76920e4e49_78888561',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
