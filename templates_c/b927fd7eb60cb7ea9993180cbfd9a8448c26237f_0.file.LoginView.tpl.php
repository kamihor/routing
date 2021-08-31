<?php
/* Smarty version 3.1.39, created on 2021-08-31 20:36:02
  from 'D:\xampp\htdocs\routing\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612e769208c2f6_19768037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b927fd7eb60cb7ea9993180cbfd9a8448c26237f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\routing\\app\\views\\LoginView.tpl',
      1 => 1630429096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_612e769208c2f6_19768037 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1730272174612e7692085be3_76150730', 'footer');
?>


        
        

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1385998045612e7692086b72_60392088', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_1730272174612e7692085be3_76150730 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1730272174612e7692085be3_76150730',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Footer -->
    <ul class="copyright">
        Autor: Kamil Horzela
        <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
    </ul>

<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1385998045612e7692086b72_60392088 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1385998045612e7692086b72_60392088',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="main" class="wrapper style1">
    <div class="container">
        <section>
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post">
                <fieldset>
                <div class="form">
                    <input type="text" name="login" id="id_login"  placeholder="Login" />
                    <input type="password"  name="pass" id="id_pass" placeholder="Hasło" />
                    <ul class="actions">
                        <li><input style="margin-top: 1em;" type="submit" value="Zaloguj" class="primary" /></li>
                    </ul>
                </fieldset>
            </form>
</div>
    
   <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php
}
}
/* {/block 'content'} */
}
