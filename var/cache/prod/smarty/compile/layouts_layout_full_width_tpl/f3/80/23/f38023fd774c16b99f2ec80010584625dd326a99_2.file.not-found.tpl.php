<?php
/* Smarty version 3.1.33, created on 2019-12-26 16:11:59
  from 'C:\OSPanel\domains\localhost\themes\ayon\templates\errors\not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e04b19f045809_93674893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f38023fd774c16b99f2ec80010584625dd326a99' => 
    array (
      0 => 'C:\\OSPanel\\domains\\localhost\\themes\\ayon\\templates\\errors\\not-found.tpl',
      1 => 1577346261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e04b19f045809_93674893 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-not-found">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3439609285e04b19f043578_50673252', 'page_content');
?>

</section>
<?php }
/* {block 'page_content'} */
class Block_3439609285e04b19f043578_50673252 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_3439609285e04b19f043578_50673252',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <span class="title404">404</span>
    <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Page you are looking for does not exist','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
    <p>
      Вернитесь на главную страницу или обратитесь в <a href="https://www.instagram.com/rimmakaramova.support/" target="_blank" class="underline-simple">техподдержку (@rimmakaramova.support)</a>
    </p>
  <?php
}
}
/* {/block 'page_content'} */
}
