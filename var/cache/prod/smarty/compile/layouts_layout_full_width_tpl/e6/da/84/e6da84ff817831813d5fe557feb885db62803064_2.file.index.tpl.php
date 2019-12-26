<?php
/* Smarty version 3.1.33, created on 2019-12-26 11:19:32
  from 'C:\OSPanel\domains\localhost\themes\ayon\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e046d14419af8_29320092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6da84ff817831813d5fe557feb885db62803064' => 
    array (
      0 => 'C:\\OSPanel\\domains\\localhost\\themes\\ayon\\templates\\index.tpl',
      1 => 1577346261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e046d14419af8_29320092 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10909300065e046d1440e112_91724939', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_19742974175e046d144117c1_78799694 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_18552355275e046d14416424_70053032 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_12100676055e046d14415402_61691676 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18552355275e046d14416424_70053032', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_10909300065e046d1440e112_91724939 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_10909300065e046d1440e112_91724939',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_19742974175e046d144117c1_78799694',
  ),
  'page_content' => 
  array (
    0 => 'Block_12100676055e046d14415402_61691676',
  ),
  'hook_home' => 
  array (
    0 => 'Block_18552355275e046d14416424_70053032',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home" data-mob-row="<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_mob_hp'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['roythemes']->value['nc_mob_hp'], ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19742974175e046d144117c1_78799694', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12100676055e046d14415402_61691676', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
