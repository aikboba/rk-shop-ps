<?php
/* Smarty version 3.1.33, created on 2019-12-26 11:19:31
  from 'C:\OSPanel\domains\localhost\themes\ayon\templates\catalog\_partials\miniatures\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e046d133ed457_95828587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fd9c7a47399ba6af5961ee44d508c3c68d3b934' => 
    array (
      0 => 'C:\\OSPanel\\domains\\localhost\\themes\\ayon\\templates\\catalog\\_partials\\miniatures\\product.tpl',
      1 => 1577346260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/variant-links.tpl' => 1,
  ),
),false)) {
function content_5e046d133ed457_95828587 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9372516365e046d132e0775_02351795', 'product_miniature_item');
?>

<?php }
/* {block 'product_thumbnail'} */
class Block_10283968705e046d132e7733_72094782 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail noeffect">
            <img itemprop="image"
              src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
              alt = "<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');
}?>"
              data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
            >
            <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_second_img']) && $_smarty_tpl->tpl_vars['roythemes']->value['nc_second_img'] == "1") {?>
              <?php if (isset($_smarty_tpl->tpl_vars['product']->value['images'][1])) {?>
                <?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][0]['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');
$_prefixVariable30 = ob_get_clean();
$_smarty_tpl->_assignInScope('royurl0', $_prefixVariable30);?>
                <?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');
$_prefixVariable31 = ob_get_clean();
$_smarty_tpl->_assignInScope('royurl1', $_prefixVariable31);?>
                <?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');
$_prefixVariable32 = ob_get_clean();
$_smarty_tpl->_assignInScope('royurlc', $_prefixVariable32);?>
                <?php if ($_smarty_tpl->tpl_vars['royurl1']->value == $_smarty_tpl->tpl_vars['royurlc']->value) {
ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['royurl0']->value, ENT_QUOTES, 'UTF-8');
$_prefixVariable33 = ob_get_clean();
$_smarty_tpl->_assignInScope('royurlsec', $_prefixVariable33);
} else {
ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['royurl1']->value, ENT_QUOTES, 'UTF-8');
$_prefixVariable34 = ob_get_clean();
$_smarty_tpl->_assignInScope('royurlsec', $_prefixVariable34);
}?>
                <img class="roy_secondimg" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['royurlsec']->value, ENT_QUOTES, 'UTF-8');?>
"
                  alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');
}?>"
                >
              <?php }?>
            <?php }?>
          </a>
        <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'quick_view'} */
class Block_4038046315e046d1330e558_78923326 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <a class="quick-view tip_inside noeffect" href="#" data-link-action="quickview">
              <i class="rts" data-size="24" data-color="#000000"><?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_i_qv'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['roythemes']->value['nc_i_qv'], ENT_QUOTES, 'UTF-8');
} else { ?>search1<?php }?></i>
              <span class="tip"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
            </a>
          <?php
}
}
/* {/block 'quick_view'} */
/* {block 'quick_view'} */
class Block_10198065615e046d13358422_54099360 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <a class="quick-view action-btn tip_inside noeffect" href="#" data-link-action="quickview">
              <i class="rts" data-size="24" data-color="#000000"><?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_i_qv'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['roythemes']->value['nc_i_qv'], ENT_QUOTES, 'UTF-8');
} else { ?>search1<?php }?></i>
              <span class="tip"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
            </a>
          <?php
}
}
/* {/block 'quick_view'} */
/* {block 'product_reviews'} */
class Block_646899765e046d1336cde5_19996762 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

          <?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_name'} */
class Block_9818323795e046d1336ef60_72119146 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h3 class="h3 product-title" itemprop="name"><a class="noeffect" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></a></h3>
        <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_variants'} */
class Block_19986478175e046d133aa2d7_47656808 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, false);
?>
              <?php }?>
            <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_price_and_shipping'} */
class Block_4037285715e046d133729e9_91292595 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\localhost\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\OSPanel\\domains\\localhost\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

          <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
            <div class="product-price-and-shipping" itemprop="offers"
                 itemscope
                 itemtype="https://schema.org/Offer">
                <link itemprop="availability" href="https://schema.org/InStock"/>
                <meta itemprop="priceCurrency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
                <meta itemprop="url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
              <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>


                <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regular price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
                <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>

              <?php }?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>


              <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
              <span itemprop="price" class="price"><?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['product']->value['price'],',00',''), ENT_QUOTES, 'UTF-8');?>
</span>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

            </div>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19986478175e046d133aa2d7_47656808', 'product_variants', $this->tplIndex);
?>


            <?php if (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to']) && isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['from'])) {?>
              <?php if ((smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S') <= $_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'] && smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S') >= $_smarty_tpl->tpl_vars['product']->value['specific_prices']['from']) && ($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'] != '0000-00-00 00:00:00')) {?>
                <div class="countcontainer">
                  <div class="roycountdown">
                    <div class="roycount" style="display: none;" data-specific-price-to="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'], ENT_QUOTES, 'UTF-8');?>
" data-days=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Days'),$_smarty_tpl ) );?>
 data-hours=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hours'),$_smarty_tpl ) );?>
 data-minutes=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mins'),$_smarty_tpl ) );?>
 data-seconds=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Secs'),$_smarty_tpl ) );?>
></div>
                    <i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7" y2="7"></line></svg></i>
                  </div>
                </div>
              <?php }?>
            <?php }?>

          <?php }?>

          <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
            <div class="add_wrap hidden-lg-up">
              <?php if (($_smarty_tpl->tpl_vars['product']->value['allow_oosp'] || (!$_smarty_tpl->tpl_vars['product']->value['main_variants'] && $_smarty_tpl->tpl_vars['product']->value['quantity'] > 0) || $_smarty_tpl->tpl_vars['product']->value['quantity_all_versions'] > 0)) {?>
                <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_ai']) && $_smarty_tpl->tpl_vars['roythemes']->value['nc_ai'] == "1") {?>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'] > 0) {?>
          					<input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
          					<input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" name="id_product">
                		<input type="hidden" name="id_customization" value="0">
          					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"  class="btn btn-primary add_to_cart noeffect">
          						<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select Options','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
          					</a>
          				<?php } else { ?>
          					<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post">
          					<input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
          					<input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" name="id_product">
                		<input type="hidden" name="id_customization" value="0">
          					<a data-button-action="add-to-cart" class="btn btn-primary add_to_cart noeffect" href="#">
                      <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
          					</a>
          					</form>
                  <?php }?>
        				<?php } else { ?>
                  <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post">
                  <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                  <input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" name="id_product">
                  <input type="hidden" name="id_customization" value="0">
                  <a data-button-action="add-to-cart" class="btn btn-primary add_to_cart noeffect" href="#">
                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
                  </a>
                  </form>
                <?php }?>
      				<?php } else { ?>
      					<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post">
      					<input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
      					<input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" name="id_product">
      					<a data-button-action="add-to-cart" class="btn btn-primary disabled noeffect" disabled href="#">
      						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out of stock','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
      					</a>
      					</form>
      				<?php }?>
            </div>
  				<?php }?>
        <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_reviews'} */
class Block_5057260475e046d133d9429_52915437 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

          <?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_flags'} */
class Block_3439142655e046d133db520_17606700 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <ul class="product-flags">
          <?php if (($_smarty_tpl->tpl_vars['product']->value['allow_oosp'] || (!$_smarty_tpl->tpl_vars['product']->value['main_variants'] && $_smarty_tpl->tpl_vars['product']->value['quantity'] > 0) || $_smarty_tpl->tpl_vars['product']->value['quantity_all_versions'] > 0)) {
} else { ?>
            <li class="product-flag"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out of stock','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</li>
          <?php }?>

          <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
              <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
                  <li class="discount-percentage discount-product"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</li>
                <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'amount') {?>
                  <li class="discount-amount discount-product"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_amount_to_display'], ENT_QUOTES, 'UTF-8');?>
</li>
                <?php }?>
              <?php }?>
          <?php }?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
?>
            <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_miniature_item'} */
class Block_9372516365e046d132e0775_02351795 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_9372516365e046d132e0775_02351795',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_10283968705e046d132e7733_72094782',
  ),
  'quick_view' => 
  array (
    0 => 'Block_4038046315e046d1330e558_78923326',
    1 => 'Block_10198065615e046d13358422_54099360',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_646899765e046d1336cde5_19996762',
    1 => 'Block_5057260475e046d133d9429_52915437',
  ),
  'product_name' => 
  array (
    0 => 'Block_9818323795e046d1336ef60_72119146',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_4037285715e046d133729e9_91292595',
  ),
  'product_variants' => 
  array (
    0 => 'Block_19986478175e046d133aa2d7_47656808',
  ),
  'product_flags' => 
  array (
    0 => 'Block_3439142655e046d133db520_17606700',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\localhost\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

  <article class="<?php if (isset($_COOKIE['show_list'])) {?>product_show_list <?php }?>product-item product-miniature js-product-miniature <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pl_lay']) && $_smarty_tpl->tpl_vars['roythemes']->value['pl_lay'] == "3") {?>pl_lay3<?php }?> col-lg-4 col-md-6 col-sm-6 col-xs-12" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
    <div class="thumbnail-container">
      <div class="product-image">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10283968705e046d132e7733_72094782', 'product_thumbnail', $this->tplIndex);
?>


        <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pl_hover_lay']) && $_smarty_tpl->tpl_vars['roythemes']->value['pl_hover_lay'] == "1") {?>
        <div class="subaction hidden-sm-down">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFavButton','product_id'=>$_smarty_tpl->tpl_vars['product']->value['id']),$_smarty_tpl ) );?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4038046315e046d1330e558_78923326', 'quick_view', $this->tplIndex);
?>

        </div>
        <?php }?>

        <div class="action-block highlighted-informations<?php if (!$_smarty_tpl->tpl_vars['product']->value['main_variants']) {?> no-variants<?php }?> hidden-sm-down">

          <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
            <div class="add_wrap">
              <?php if (($_smarty_tpl->tpl_vars['product']->value['allow_oosp'] || (!$_smarty_tpl->tpl_vars['product']->value['main_variants'] && $_smarty_tpl->tpl_vars['product']->value['quantity'] > 0) || $_smarty_tpl->tpl_vars['product']->value['quantity_all_versions'] > 0)) {?>
                <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_ai']) && $_smarty_tpl->tpl_vars['roythemes']->value['nc_ai'] == "1") {?>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'] > 0) {?>
          					<input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
          					<input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" name="id_product">
                		<input type="hidden" name="id_customization" value="0">
          					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="action-btn add_to_cart noeffect <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pl_hover_lay']) && $_smarty_tpl->tpl_vars['roythemes']->value['pl_hover_lay'] == "2") {?>tip_inside<?php }?>">
                       <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pl_hover_lay']) && $_smarty_tpl->tpl_vars['roythemes']->value['pl_hover_lay'] == "2") {?><i class="rts" data-size="24" data-color="#000000"><?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_i_discover'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['roythemes']->value['nc_i_discover'], ENT_QUOTES, 'UTF-8');
} else { ?>discover1<?php }?></i><?php }?>
          						<span <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pl_hover_lay']) && $_smarty_tpl->tpl_vars['roythemes']->value['pl_hover_lay'] == "2") {?>class="tip"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select Options','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
          					</a>
          				<?php } else { ?>
          					<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post">
          					<input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
          					<input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" name="id_product">
                		<input type="hidden" name="id_customization" value="0">
          					<a data-button-action="add-to-cart" class="action-btn add_to_cart noeffect <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pl_hover_lay']) && $_smarty_tpl->tpl_vars['roythemes']->value['pl_hover_lay'] == "2") {?>tip_inside<?php }?>" href="#">
                      <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pl_hover_lay']) && $_smarty_tpl->tpl_vars['roythemes']->value['pl_hover_lay'] == "2") {?><i class="rts" data-size="24" data-color="#000000"><?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['cart_icon'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['roythemes']->value['cart_icon'], ENT_QUOTES, 'UTF-8');
} else { ?>cart1<?php }?></i><?php }?>
                      <span <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pl_hover_lay']) && $_smarty_tpl->tpl_vars['roythemes']->value['pl_hover_lay'] == "2") {?>class="tip"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
          					</a>
          					</form>
                  <?php }?>
        				<?php } else { ?>
                  <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post">
                  <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                  <input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" name="id_product">
                  <input type="hidden" name="id_customization" value="0">
                  <a data-button-action="add-to-cart" class="action-btn add_to_cart noeffect <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pl_hover_lay']) && $_smarty_tpl->tpl_vars['roythemes']->value['pl_hover_lay'] == "2") {?>tip_inside<?php }?>" href="#">
                    <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pl_hover_lay']) && $_smarty_tpl->tpl_vars['roythemes']->value['pl_hover_lay'] == "2") {?><i class="rts" data-size="24" data-color="#000000"><?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['cart_icon'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['roythemes']->value['cart_icon'], ENT_QUOTES, 'UTF-8');
} else { ?>cart1<?php }?></i><?php }?>
                    <span <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pl_hover_lay']) && $_smarty_tpl->tpl_vars['roythemes']->value['pl_hover_lay'] == "2") {?>class="tip"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
                  </a>
                  </form>
                <?php }?>
      				<?php } else { ?>
      					<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post">
      					<input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
      					<input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" name="id_product">
      					<a data-button-action="add-to-cart" class="action-btn disabled noeffect <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pl_hover_lay']) && $_smarty_tpl->tpl_vars['roythemes']->value['pl_hover_lay'] == "2") {?>tip_inside<?php }?>" disabled href="#">
                  <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pl_hover_lay']) && $_smarty_tpl->tpl_vars['roythemes']->value['pl_hover_lay'] == "2") {?><i class="rts" data-size="24" data-color="#000000"><?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['cart_icon'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['roythemes']->value['cart_icon'], ENT_QUOTES, 'UTF-8');
} else { ?>cart1<?php }?></i><?php }?>
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg><span <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pl_hover_lay']) && $_smarty_tpl->tpl_vars['roythemes']->value['pl_hover_lay'] == "2") {?>class="tip"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out of stock','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
      					</a>
      					</form>
      				<?php }?>
            </div>
  				<?php }?>

          <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pl_hover_lay']) && $_smarty_tpl->tpl_vars['roythemes']->value['pl_hover_lay'] == "2") {?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10198065615e046d13358422_54099360', 'quick_view', $this->tplIndex);
?>

          <?php }?>

          <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pl_hover_lay']) && $_smarty_tpl->tpl_vars['roythemes']->value['pl_hover_lay'] == "2") {?>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFavButton','product_id'=>$_smarty_tpl->tpl_vars['product']->value['id']),$_smarty_tpl ) );?>

          <?php }?>

        </div>

        <?php if (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to']) && isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['from'])) {?>
          <?php if ((smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S') <= $_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'] && smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S') >= $_smarty_tpl->tpl_vars['product']->value['specific_prices']['from']) && ($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'] != '0000-00-00 00:00:00')) {?>
            <div class="count_icon tip_inside">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              	 viewBox="0 0 240 240" style="enable-background:new 0 0 240 240;" xml:space="preserve">
              <g>
                <path class="hand hand-min" d="M185.4,128H120c-4.4,0-8-3.6-8-8s3.6-8,8-8h65.4c4.4,0,8,3.6,8,8S189.8,128,185.4,128z"/>
              </g>
              <g>
              	<path class="hand hand-hour" d="M120,127.2c-4.4,0-8-3.6-8-8V63.9c0-4.4,3.6-8,8-8s8,3.6,8,8v55.4C128,123.7,124.4,127.2,120,127.2z"/>
              </g>
              <path d="M120,16c57.3,0,104,46.7,104,104s-46.7,104-104,104S16,177.3,16,120S62.7,16,120,16 M120,0C53.7,0,0,53.7,0,120
              	s53.7,120,120,120s120-53.7,120-120S186.3,0,120,0L120,0z"/>
              </svg>
              <span class="tip"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Limited Offer!','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
            </div>
          <?php }?>
        <?php }?>
      </div>
      <div class="product-description">
        <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pl_lay']) && $_smarty_tpl->tpl_vars['roythemes']->value['pl_lay'] == "2") {?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_646899765e046d1336cde5_19996762', 'product_reviews', $this->tplIndex);
?>

        <?php }?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9818323795e046d1336ef60_72119146', 'product_name', $this->tplIndex);
?>

        <div class="prod-short-desc" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4037285715e046d133729e9_91292595', 'product_price_and_shipping', $this->tplIndex);
?>


        <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pl_lay']) && $_smarty_tpl->tpl_vars['roythemes']->value['pl_lay'] !== "2") {?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5057260475e046d133d9429_52915437', 'product_reviews', $this->tplIndex);
?>

        <?php }?>
      </div>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3439142655e046d133db520_17606700', 'product_flags', $this->tplIndex);
?>


    </div>
  </article>
<?php
}
}
/* {/block 'product_miniature_item'} */
}
