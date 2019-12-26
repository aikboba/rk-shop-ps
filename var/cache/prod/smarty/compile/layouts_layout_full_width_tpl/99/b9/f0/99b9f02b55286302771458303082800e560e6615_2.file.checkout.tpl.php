<?php
/* Smarty version 3.1.33, created on 2019-12-26 16:11:33
  from 'C:\OSPanel\domains\localhost\themes\ayon\templates\checkout\checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e04b1852e8539_97617749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99b9f02b55286302771458303082800e560e6615' => 
    array (
      0 => 'C:\\OSPanel\\domains\\localhost\\themes\\ayon\\templates\\checkout\\checkout.tpl',
      1 => 1577346261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-summary.tpl' => 1,
  ),
),false)) {
function content_5e04b1852e8539_97617749 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15801464845e04b1852d94a6_14487235', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'cart_summary'} */
class Block_3343487065e04b1852da3f0_15600815 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'checkout/checkout-process.tpl','ui'=>$_smarty_tpl->tpl_vars['checkout_process']->value),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block 'cart_summary'} */
/* {block 'cart_summary'} */
class Block_19123735535e04b1852dfed8_13759049 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
                <?php
}
}
/* {/block 'cart_summary'} */
/* {block 'content'} */
class Block_15801464845e04b1852d94a6_14487235 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15801464845e04b1852d94a6_14487235',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_3343487065e04b1852da3f0_15600815',
    1 => 'Block_19123735535e04b1852dfed8_13759049',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section id="main">
  <div class="container">

          <div class="cart-grid row stick_parent">
            <div class="cart-grid-body col-xs-12 col-lg-7 co_main">
              <div class="card cart-container">

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3343487065e04b1852da3f0_15600815', 'cart_summary', $this->tplIndex);
?>

                             
              </div>
            </div>

            <div class="cart-grid-right col-xs-12 col-lg-5 stick_static co_right">
              <div class="stick_it">

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19123735535e04b1852dfed8_13759049', 'cart_summary', $this->tplIndex);
?>


                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>


              </div>
            </div>
          </div>

    </div>
  </section>
<?php
}
}
/* {/block 'content'} */
}
