<?php
/* Smarty version 3.1.33, created on 2019-12-26 16:10:01
  from 'C:\OSPanel\domains\localhost\themes\ayon\templates\checkout\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e04b129cb1862_71736098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4087c18317f751b1cfa5eee4763c12824e9053e' => 
    array (
      0 => 'C:\\OSPanel\\domains\\localhost\\themes\\ayon\\templates\\checkout\\cart.tpl',
      1 => 1577346261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-detailed.tpl' => 1,
    'file:checkout/_partials/cart-detailed-totals.tpl' => 1,
    'file:checkout/_partials/cart-detailed-actions.tpl' => 1,
  ),
),false)) {
function content_5e04b129cb1862_71736098 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15179404085e04b129a26ce9_49774902', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'cart_overview'} */
class Block_21234728445e04b129a28f89_40608596 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
            <?php
}
}
/* {/block 'cart_overview'} */
/* {block 'continue_shopping'} */
class Block_3206282735e04b129c98058_11361638 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <a class="btn back_to_shop" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
              <i class="material-icons">chevron_left</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue shopping','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

            </a>
          <?php
}
}
/* {/block 'continue_shopping'} */
/* {block 'hook_shopping_cart_footer'} */
class Block_8699292515e04b129c9d434_56407568 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCartFooter'),$_smarty_tpl ) );?>

          <?php
}
}
/* {/block 'hook_shopping_cart_footer'} */
/* {block 'hook_shopping_cart'} */
class Block_5233994595e04b129ca2f90_56793884 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCart'),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block 'hook_shopping_cart'} */
/* {block 'cart_totals'} */
class Block_8341906425e04b129ca4d39_82901880 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed-totals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
                <?php
}
}
/* {/block 'cart_totals'} */
/* {block 'cart_actions'} */
class Block_16150928925e04b129cabed6_89411083 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed-actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
                <?php
}
}
/* {/block 'cart_actions'} */
/* {block 'cart_summary'} */
class Block_21078268685e04b129ca2375_50235141 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div class="card cart-summary">

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5233994595e04b129ca2f90_56793884', 'hook_shopping_cart', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8341906425e04b129ca4d39_82901880', 'cart_totals', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16150928925e04b129cabed6_89411083', 'cart_actions', $this->tplIndex);
?>


              </div>
            <?php
}
}
/* {/block 'cart_summary'} */
/* {block 'hook_reassurance'} */
class Block_11912455465e04b129caf743_87199703 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_reassurance'} */
/* {block 'content'} */
class Block_15179404085e04b129a26ce9_49774902 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15179404085e04b129a26ce9_49774902',
  ),
  'cart_overview' => 
  array (
    0 => 'Block_21234728445e04b129a28f89_40608596',
  ),
  'continue_shopping' => 
  array (
    0 => 'Block_3206282735e04b129c98058_11361638',
  ),
  'hook_shopping_cart_footer' => 
  array (
    0 => 'Block_8699292515e04b129c9d434_56407568',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_21078268685e04b129ca2375_50235141',
  ),
  'hook_shopping_cart' => 
  array (
    0 => 'Block_5233994595e04b129ca2f90_56793884',
  ),
  'cart_totals' => 
  array (
    0 => 'Block_8341906425e04b129ca4d39_82901880',
  ),
  'cart_actions' => 
  array (
    0 => 'Block_16150928925e04b129cabed6_89411083',
  ),
  'hook_reassurance' => 
  array (
    0 => 'Block_11912455465e04b129caf743_87199703',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">
    <div class="container">

      <div class="cart-grid row">

        <!-- Left Block: cart product informations & shpping -->
        <div class="cart-grid-body col-xs-12 col-lg-7">

          <!-- cart products detailed -->
          <div class="card cart-container">
            <div class="card-block">
              <h1 class="h1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shopping Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h1>
            </div>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21234728445e04b129a28f89_40608596', 'cart_overview', $this->tplIndex);
?>

          </div>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3206282735e04b129c98058_11361638', 'continue_shopping', $this->tplIndex);
?>


          <!-- shipping informations -->
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8699292515e04b129c9d434_56407568', 'hook_shopping_cart_footer', $this->tplIndex);
?>

        </div>

        <!-- Right Block: cart subtotal & cart total -->
        <div class="cart-grid-right col-xs-12 col-lg-5">

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21078268685e04b129ca2375_50235141', 'cart_summary', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11912455465e04b129caf743_87199703', 'hook_reassurance', $this->tplIndex);
?>


        </div>

      </div>
    </div>
  </section>
<?php
}
}
/* {/block 'content'} */
}
