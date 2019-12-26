<?php
/* Smarty version 3.1.33, created on 2019-12-26 16:11:56
  from 'C:\OSPanel\domains\localhost\themes\ayon\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e04b19c0c6e38_51869808',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de6ff1d4a04791868068b58a0ee06c80d5b0d008' => 
    array (
      0 => 'C:\\OSPanel\\domains\\localhost\\themes\\ayon\\templates\\page.tpl',
      1 => 1577346261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e04b19c0c6e38_51869808 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2460042435e04b19c0ae750_06421559', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_7073267875e04b19c0b01f8_31472252 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_7058162365e04b19c0af362_17179651 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7073267875e04b19c0b01f8_31472252', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_14968993755e04b19c0be889_17634773 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_16692025715e04b19c0bfa00_66537034 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_4622408745e04b19c0bd8a4_92896151 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14968993755e04b19c0be889_17634773', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16692025715e04b19c0bfa00_66537034', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_10583513575e04b19c0c4447_50200129 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_14102737625e04b19c0c1906_90482201 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10583513575e04b19c0c4447_50200129', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_2460042435e04b19c0ae750_06421559 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2460042435e04b19c0ae750_06421559',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_7058162365e04b19c0af362_17179651',
  ),
  'page_title' => 
  array (
    0 => 'Block_7073267875e04b19c0b01f8_31472252',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_4622408745e04b19c0bd8a4_92896151',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_14968993755e04b19c0be889_17634773',
  ),
  'page_content' => 
  array (
    0 => 'Block_16692025715e04b19c0bfa00_66537034',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_14102737625e04b19c0c1906_90482201',
  ),
  'page_footer' => 
  array (
    0 => 'Block_10583513575e04b19c0c4447_50200129',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">
    <div class="container">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7058162365e04b19c0af362_17179651', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4622408745e04b19c0bd8a4_92896151', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14102737625e04b19c0c1906_90482201', 'page_footer_container', $this->tplIndex);
?>


    </div>
  </section>

<?php
}
}
/* {/block 'content'} */
}
